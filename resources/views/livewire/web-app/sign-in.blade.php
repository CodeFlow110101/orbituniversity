<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use function Livewire\Volt\{state, rules};

state(['email', 'password']);

rules(['password' => 'required', 'email' => 'required|email']);

$submit = function (Request $request) {

    $this->validate();

    if (
        Auth::attempt([
            'email' => $this->email,
            'password' => $this->password,
        ])
    ) {
        $request->session()->regenerate();
        $this->redirectRoute('dashboard', navigate: true);
    } else {
        $this->addError('email', 'Invalid Credentials');
    }
};

?>

<div class="flex flex-col h-full py-2">
    <div>
        <div class="text-white inter-600 uppercase text-lg lg:text-2xl text-center py-1">The Orbit university</div>
        <div class="bg-gradient-to-r from-black from-10% via-blue-700 to-black to-90% h-[1px] mt-2"></div>
    </div>
    <div class="grow w-full flex items-center">
        <div class="h-min grid grid-cols-1 gap-6 w-full">
            <div>
                <div class="flex justify-center whitespace-nowrap">
                    <div class="bg-gradient-to-b from-blue-700 p-0.5 rounded-t-2xl w-min">
                        <div class="size-full bg-black text-center rounded-t-2xl px-8 py-3">
                            <div class="inter-600 text-xl lg:text-3xl bg-clip-text text-transparent bg-gradient-to-b from-50% from-white/90">
                                Sign In
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mx-auto w-11/12 lg:w-4/12">
                    <form wire:submit="submit" class="bg-gradient-to-tr shadow-2xl shadow-blue-700/30 rounded-3xl from-blue-700 via-transparent to-blue-700 p-0.5">
                        <div class="size-full p-6 lg:p-10 rounded-3xl bg-black">
                            <div class="h-min grid grid-cols-1 gap-2 lg:gap-6 text-white">
                                <div class="h-min grid grid-cols-1 gap-2">
                                    <div class="lg:text-xl inter-200">Email</div>
                                    <div>
                                        <input wire:model="email" type="text" class="w-full inter-400 text-lg bg-transparent border border-blue-700 rounded-xl py-2 px-4 outline-none caret-blue-700">
                                    </div>
                                    <div>
                                        @error('email')
                                        <span wire:transition.in.duration.500ms="scale-y-100"
                                            wire:transition.out.duration.500ms="scale-y-0" class="text-blue-700">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="h-min grid grid-cols-1 gap-2">
                                    <div class="lg:text-xl inter-200">Password</div>
                                    <div>
                                        <input wire:model="password" type="password" class="w-full inter-400 text-lg bg-transparent border border-blue-700 rounded-xl py-2 px-4 outline-none caret-blue-700">
                                    </div>
                                    <div>
                                        @error('password')
                                        <span wire:transition.in.duration.500ms="scale-y-100"
                                            wire:transition.out.duration.500ms="scale-y-0" class="text-blue-700">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="flex justify-center">
                                    <button type="submit" wire:click="submit" wire:loading.class="pointer-events-none" wire:target="submit" class="hover:bg-blue-700 w-32 h-14 hover:shadow-lg hover:shadow-blue-700/50 transition-colors duration-300 cursor-pointer bg-gradient-to-bl from-blue-700 via-transparent to-blue-700 whitespace-nowrap p-0.5 rounded-xl">
                                        <div class="size-full bg-black rounded-xl inter-200 text-xl flex justify-center items-center">
                                            <div wire:loading.class="hidden pointer-events-none" wire:target="submit">Sign In</div>
                                            <svg wire:loading.class.remove="hidden" wire:target="submit" aria-hidden="true" class="w-8 hidden h-8 text-transparent animate-spin fill-blue-700" viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z" fill="currentColor" />
                                                <path d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z" fill="currentFill" />
                                            </svg>
                                        </div>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                    <div class="flex justify-center text-white py-10 lg:text-lg inter-600">
                        <a href="/sign-up" wire:navigate>Don't have an account? <span class="text-blue-700">Sign Up</span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>