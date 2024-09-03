<?php

namespace App\Livewire;

use App\Models\SubscripedUser;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Illuminate\Support\Facades\View;
use Livewire\Attributes\Title;

class Subscripe extends Component
{
    public $instance;
    public function mount(){
        $this->instance = SubscripedUser::where('user_id',Auth::user()->id)
        ->with('servicePlan')->get();
    }

    #[Title('Subscribe')] 
    public function render()
    {
        return view('livewire.subscripe');
    }
    public function download($id){
        $subscription = SubscripedUser::with(['servicePlan','user'])->find($id);
        $view = View::make('invoice', ['subscription' => $subscription]);
        
        $mpdf = new \Mpdf\Mpdf();

        $mpdf->WriteHTML($view->render());

        $mpdf->Output('invoice' . '.pdf', 'D');
           
    }



    
}
