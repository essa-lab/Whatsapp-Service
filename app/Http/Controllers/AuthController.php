<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Http\Requests\NewPasswordRequest;
use App\Http\Requests\PasswordRequest;
use App\Http\Requests\RegisterRequest;
use App\Mail\ConfirmRegisterationMail;
use App\Mail\ResetPasswordMail;
use App\Models\ResetPassword;
use App\Models\User;
use App\Services\AuthService;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

use function PHPUnit\Framework\isEmpty;

class AuthController extends Controller
{
    public function __construct(private AuthService $authService){}

    public function register(RegisterRequest $request){
        $validated = $request->validated();
        $user = $this->authService->register($validated);
        if($user){

            return redirect(route('page.confirm'));
        }
        return back()->withErrors(['Error, Try Again later']);
    }

    public function loginView(Request $request){
        if($request->has('message')){
            return view('auth.login',['message'=>$request->get('message')]);

        }
            return view('auth.login');
    }

    public function resendMail(Request $request){
        if(session()->has('email')){
            $user = User::where('email',session()->get('email'))->first();
            Mail::to($user->email)->queue(new ConfirmRegisterationMail([
                'name'=>$user->name,
                'token'=>$user->token
            ]));
        }
        return view('auth.confirm');

    }

    public function confirm(Request $request){
        $user = User::where('token',$request->token)->first();
        if(!$user){
            return redirect(route('page.confirm',['message'=>'Sorry Your email was not found']));
        }      
        $user->verfied=1;
        $user->save();
        return redirect(route('page.login',['message'=>'Your email is verified']));

    }
    public function login(LoginRequest $request){
        $validated = $request->validated();
        
        $user = $this->authService->login($validated);
        Log::info($user);
        Log::info(Auth::user());

        
        if(!$user){
            return back()->withErrors(['faild'=>'Invalid Credintials, Try Again.']);
        }
        if(Auth::user()->is_admin){
            return redirect(route('admin.users'));
        }
        if(!Auth::user()->verfied){
            return redirect(route('page.login',['message'=>'Please verifiy your email to start explore our whatsapp service']));
        }
        if(isEmpty(Auth::user()->sessions)){
            Auth::user()->sessions()->create();
        }
        return redirect(route('account.dashboard'));
    }

    public function resetPassword(Request $request){
        Log::info('hoaz')  ;

        return view('auth.reset-password');
    }
    public function requestNewPassword(NewPasswordRequest $request){
        Log::info('requestNewPassword')  ;

        $validated = $request->validated();
        $resetPassword = ResetPassword::create([
            'email'=>$validated['email'],
            'code'=>bin2hex(random_bytes(20))
        ]);
        session()->put('passwordemail',$validated['email']);
        session()->put('code',$resetPassword['code']);

        Mail::to($validated['email'])->queue(new ResetPasswordMail([
            'email'=>$resetPassword['email'],
            'code'=>$resetPassword['code']
        ]));
        return view('auth.reset-password-check-mail');

    }
    public function confirmResetPassword(Request $request){
        Log::info('hoaz')  ;

        $userData = ResetPassword::where('code',$request->code)->first();
        
        if(!$userData){
            return view('auth.reset-password-check-mail',['message'=>'Sorry Try to resend a reset Email']);
        }      
        $userData->delete();
        return view('auth.set-password',['email'=>$userData['email']]);

    }


    public function saveNewPassword(PasswordRequest $request){
        Log::info('hoaz')  ;

        Log::info($request->all());
        $validated = $request->validated();
        Log::info('hoaz')  ;

        $user = User::where('email',$validated['email'])->update([
            'password'=>Hash::make($validated['password'])
        ]);
        Log::info('hoa')  ;

        if(!$user){
            return view('auth.reset-password-check-mail',['message'=>'Sorry Try to resend a reset Email']);
        }    
        Log::info('ho')  ;
        return redirect(route('page.login'));

    }
    public function resendPassword(Request $request){
        if(session()->has('passwordemail')){
            Mail::to(session()->get('passwordemail'))->queue(new ResetPasswordMail([
                'email'=>session()->get('passwordemail'),
                'code'=>session()->get('code')
            ]));
        }
        return view('auth.reset-password-check-mail');
    }

}
