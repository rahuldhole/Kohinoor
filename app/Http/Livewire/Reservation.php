<?php

namespace App\Http\Livewire;

use Livewire\Component;

use App\Actions\AuthenticateLoginAttempt;
use Laravel\Fortify\Fortify;

class Reservation extends Component
{
	public function boot()
	{
		Fortify::loginView(function () {
			return view('auth.login');
		});
	}
    public function render()
    {
        return view('livewire.reservation');
    }
}
