<?php

namespace App\Livewire;

use App\Models\Message;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Title;
use Livewire\Attributes\Url;
use Livewire\Component;

class Dashboard extends Component
{
    public $user,$monthlyConsumptionRequest,$messages;
    #[Url()]
    public $year;

    #[Title('Dashboard')] 
    public function mount()
    {
        $this->user = Auth::user();

        $records = Message::where('user_id',$this->user->id)->whereYear('created_at', $this->year??2024)
            ->get();

        $recordsByMonth = $records->groupBy(function ($record) {
            return Carbon::parse($record->created_at)->format('m');
        });
        $this->monthlyConsumptionRequest = array_fill(0, 12, 0);

        $recordsByMonth->each(function ($records, $month)  {
            $this->monthlyConsumptionRequest[$month - 1] = $records->count();
        });

        $this->messages = Message::where('user_id',$this->user->id)->latest()->take(10)->get();
    }

    public function render()
    {


        return view('livewire.dashboard', ['remainingDays' =>
        Carbon::parse($this->user->subscripe->subscription_end_date)
            ->diffInDays(Carbon::now())]);
    }

    public function yearChange(){
        $records = Message::where('user_id', Auth::user()->id)->whereYear('created_at', $this->year)
            ->get();

        $recordsByMonth = $records->groupBy(function ($record) {
            return Carbon::parse($record->created_at)->format('m');
        });
        $this->monthlyConsumptionRequest = array_fill(0, 12, 0);

        $recordsByMonth->each(function ($records, $month)  {
            $this->monthlyConsumptionRequest[$month - 1] = $records->count();
        });
      
    }
    public function goToMessages(){
        return redirect(route('messages.list'));
    }
}
