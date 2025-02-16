<?php

use App\Livewire\Forms\LoginForm;
use Illuminate\Support\Facades\Session;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Volt\Component;

new #[Layout('layouts.logreg')] #[Title('ورود به سیستم')] class extends Component {
    public LoginForm $form;

    /**
     * Handle an incoming authentication request.
     */
    public function login(): void
    {
        $this->validate();

        $this->form->authenticate();

        Session::regenerate();

        $this->redirectIntended(default: route('dashboard', absolute: false), navigate: true);
    }
}; ?>

<div>
    <div class="flex justify-center mb-3">
        <x-my.logo />
    </div>
    <div class="w-80 flex flex-col bg-white rounded-xl overflow-hidden shadow-lg">
        <h1 class="text-center bg-rose-100 text-rose-500 py-2 ">{{__('ورود')}}</h1>
        <form>
            <p>sadsa</p>
            <p>sadsa</p>
            <p>sadsa</p>

        </form>
    </div>

</div>
