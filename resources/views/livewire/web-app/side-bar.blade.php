<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use function Livewire\Volt\{state, mount, on};

state(['path', 'user']);

$signOut = function (Request $request) {
    Auth::logout();

    $request->session()->invalidate();

    $request->session()->regenerateToken();

    $this->redirectRoute('sign-in', navigate: true);
};

on(['refresh-sidebar' => function () {
    $this->user = Auth::user();
}]);

mount(function ($path) {
    $this->path = $path;
    $this->user = Auth::user();
});
?>

<div class="w-full h-full py-6 text-white bg-gradient-to-b from-white/20">
    <div class="flex flex-col gap-6 h-full">
        <div class="flex-none text-center inter-700 text-xl">The Orbit <br> University</div>
        <div class="flex-none grid grid-cols-1 gap-1">
            <div>
                <svg class="mx-auto w-20 h-20 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M12 21a9 9 0 1 0 0-18 9 9 0 0 0 0 18Zm0 0a8.949 8.949 0 0 0 4.951-1.488A3.987 3.987 0 0 0 13 16h-2a3.987 3.987 0 0 0-3.951 3.512A8.948 8.948 0 0 0 12 21Zm3-11a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                </svg>
            </div>
            <div class="text-center text-xl inter-500">{{$user->name}}</div>
            <div class="text-center ">{{$user->email}}</div>
        </div>
        <div class="grow overflow-y-auto h-1">
            <div class="grid grid-cols-1 gap-4 max-h-full ">
                <a href="/dashboard" wire:navigate>
                    <div class="flex justify-between gap-4 items-center px-3 py-2 mx-3 rounded-lg @if($path == 'dashboard') bg-white/30 @else hover:bg-white/30 @endif transition-colors duration-200">
                        <div class="w-min">
                            <svg class="w-8 h-8 @if($path == 'dashboard') text-red-700 @else text-white @endif" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M12 15v5m-3 0h6M4 11h16M5 15h14a1 1 0 0 0 1-1V5a1 1 0 0 0-1-1H5a1 1 0 0 0-1 1v9a1 1 0 0 0 1 1Z" />
                            </svg>
                        </div>
                        <div class="w-full inter-400 text-lg">Dashboard</div>
                    </div>
                </a>
                <a href="/program" wire:navigate>
                    <div class="flex justify-between gap-4 items-center px-3 py-2 mx-3 rounded-lg @if($path == 'program' || $path == 'add-program') bg-white/30 @else hover:bg-white/30 @endif transition-colors duration-200">
                        <div class="w-min">
                            <svg class="w-8 h-8 @if($path == 'program' || $path == 'add-program') text-red-700 @else text-white @endif" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linejoin="round" stroke-width="1" d="M4 5a1 1 0 0 1 1-1h4a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1V5Zm16 14a1 1 0 0 1-1 1h-4a1 1 0 0 1-1-1v-2a1 1 0 0 1 1-1h4a1 1 0 0 1 1 1v2ZM4 13a1 1 0 0 1 1-1h4a1 1 0 0 1 1 1v6a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1v-6Zm16-2a1 1 0 0 1-1 1h-4a1 1 0 0 1-1-1V5a1 1 0 0 1 1-1h4a1 1 0 0 1 1 1v6Z" />
                            </svg>
                        </div>
                        <div class="w-full inter-400 text-lg">Programs</div>
                    </div>
                </a>
                <a href="/competitive-analysis" wire:navigate>
                    <div class="flex justify-between gap-4 items-center px-3 py-2 mx-3 rounded-lg hover:bg-white/30 transition-colors duration-200">
                        <div class="w-min">
                            <svg class="w-8 h-8 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M8 18V6l8 6-8 6Z" />
                            </svg>
                        </div>
                        <div class="w-full inter-400 text-lg">Monk Mode</div>
                    </div>
                </a>
                <a href="/competitive-analysis" wire:navigate>
                    <div class="flex justify-between gap-4 items-center px-3 py-2 mx-3 rounded-lg hover:bg-white/30 transition-colors duration-200">
                        <div class="w-min">
                            <svg class="w-8 h-8 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-width="1" d="M4.5 17H4a1 1 0 0 1-1-1 3 3 0 0 1 3-3h1m0-3.05A2.5 2.5 0 1 1 9 5.5M19.5 17h.5a1 1 0 0 0 1-1 3 3 0 0 0-3-3h-1m0-3.05a2.5 2.5 0 1 0-2-4.45m.5 13.5h-7a1 1 0 0 1-1-1 3 3 0 0 1 3-3h3a3 3 0 0 1 3 3 1 1 0 0 1-1 1Zm-1-9.5a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0Z" />
                            </svg>
                        </div>
                        <div class="w-full inter-400 text-lg">Community</div>
                    </div>
                </a>
                <a href="/setting" wire:navigate>
                    <div class="flex justify-between gap-4 items-center px-3 py-2 mx-3 rounded-lg hover:bg-white/30 transition-colors duration-200">
                        <div class="w-min">
                            <svg class="w-8 h-8 @if($path == 'setting') text-red-700 @else text-white @endif" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M21 13v-2a1 1 0 0 0-1-1h-.757l-.707-1.707.535-.536a1 1 0 0 0 0-1.414l-1.414-1.414a1 1 0 0 0-1.414 0l-.536.535L14 4.757V4a1 1 0 0 0-1-1h-2a1 1 0 0 0-1 1v.757l-1.707.707-.536-.535a1 1 0 0 0-1.414 0L4.929 6.343a1 1 0 0 0 0 1.414l.536.536L4.757 10H4a1 1 0 0 0-1 1v2a1 1 0 0 0 1 1h.757l.707 1.707-.535.536a1 1 0 0 0 0 1.414l1.414 1.414a1 1 0 0 0 1.414 0l.536-.535 1.707.707V20a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1v-.757l1.707-.708.536.536a1 1 0 0 0 1.414 0l1.414-1.414a1 1 0 0 0 0-1.414l-.535-.536.707-1.707H20a1 1 0 0 0 1-1Z" />
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M12 15a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z" />
                            </svg>
                        </div>
                        <div class="w-full inter-400 text-lg">Settings</div>
                    </div>
                </a>
                <a href="/competitive-analysis" wire:navigate>
                    <div class="flex justify-between gap-4 items-center px-3 py-2 mx-3 rounded-lg hover:bg-white/30 transition-colors duration-200">
                        <div class="w-min">
                            <svg class="w-8 h-8 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-width="1" d="M8 7V6a1 1 0 0 1 1-1h11a1 1 0 0 1 1 1v7a1 1 0 0 1-1 1h-1M3 18v-7a1 1 0 0 1 1-1h11a1 1 0 0 1 1 1v7a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1Zm8-3.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Z" />
                            </svg>
                        </div>
                        <div class="w-full inter-400 text-lg">Affiliate</div>
                    </div>
                </a>
                <div wire:click="signOut">
                    <div class="flex justify-between gap-4 items-center px-3 py-2 mx-3 rounded-lg hover:bg-white/30 transition-colors duration-200">
                        <div class="w-min">
                            <svg class="w-8 h-8 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M20 12H8m12 0-4 4m4-4-4-4M9 4H7a3 3 0 0 0-3 3v10a3 3 0 0 0 3 3h2" />
                            </svg>
                        </div>
                        <div class="w-full inter-400 text-lg">Sign Out</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>