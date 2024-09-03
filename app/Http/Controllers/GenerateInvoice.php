<?php

namespace App\Http\Controllers;

use App\Models\SubscripedUser;
use Illuminate\Support\Facades\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class GenerateInvoice extends Controller
{
    //

    public function generate(Request $request,$id){
        $subscription = SubscripedUser::with(['servicePlan','user'])->find($id);
        Log::info($subscription);
        $view = View::make('invoice', ['subscription' => $subscription]);
        
        $mpdf = new \Mpdf\Mpdf();
    
        $mpdf->WriteHTML($view->render());
    
        $mpdf->Output('invoice' . '.pdf', 'D');
    
    
    }
}
