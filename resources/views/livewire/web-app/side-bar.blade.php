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

<div class="w-full h-full flex flex-col py-6 text-white bg-gradient-to-b from-white/20">
    <div class="flex flex-col grow gap-6">
        <div class="flex-none text-center inter-700 text-xs sm:text-xl px-2">The Orbit <br> University</div>
        <div class="flex-none grid grid-cols-1 gap-1">
            <div>
                <img class="mx-auto size-10 sm:size-20" src="{{asset('images/scrollDesign1.png')}}">
            </div>
            <div class="text-center text-xl inter-500 max-sm:hidden">{{$user->name}}</div>
            <div class="text-center max-sm:hidden">{{$user->email}}</div>
        </div>
        <div class="grow relative" x-data="{ height: 0 }" x-resize="height = $height">
            <div class="overflow-y-auto absolute inset-x-0" :style="'height: ' + height + 'px;'">
                <div class="grid grid-cols-1 gap-4">
                    <a href="/dashboard" wire:navigate>
                        <div class="flex justify-evenly gap-4 items-center px-3 py-2 mx-3 rounded-lg @if($path == 'dashboard') bg-white/30 @else hover:bg-white/30 @endif transition-colors duration-200">
                            <div class="w-min">
                                <svg class="size:4 sm:size-8 @if($path == 'dashboard') text-red-700 @else text-white @endif" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M12 15v5m-3 0h6M4 11h16M5 15h14a1 1 0 0 0 1-1V5a1 1 0 0 0-1-1H5a1 1 0 0 0-1 1v9a1 1 0 0 0 1 1Z" />
                                </svg>
                            </div>
                            <div class="w-full inter-400 text-lg max-sm:hidden">Dashboard</div>
                        </div>
                    </a>
                    <a href="/program" wire:navigate>
                        <div class="flex justify-evenly gap-4 items-center px-3 py-2 mx-3 rounded-lg @if($path == 'program' || $path == 'add-program') bg-white/30 @else hover:bg-white/30 @endif transition-colors duration-200">
                            <div class="w-min">
                                <svg class="size:4 sm:size-8 @if(in_array($path , ['program' , 'add-program' , 'video' , 'add-video'])) text-red-700 @else text-white @endif" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linejoin="round" stroke-width="1" d="M4 5a1 1 0 0 1 1-1h4a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1V5Zm16 14a1 1 0 0 1-1 1h-4a1 1 0 0 1-1-1v-2a1 1 0 0 1 1-1h4a1 1 0 0 1 1 1v2ZM4 13a1 1 0 0 1 1-1h4a1 1 0 0 1 1 1v6a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1v-6Zm16-2a1 1 0 0 1-1 1h-4a1 1 0 0 1-1-1V5a1 1 0 0 1 1-1h4a1 1 0 0 1 1 1v6Z" />
                                </svg>
                            </div>
                            <div class="w-full inter-400 text-lg max-sm:hidden">Programs</div>
                        </div>
                    </a>
                    <a href="/zen-mode" wire:navigate>
                        <div class="flex justify-evenly gap-4 items-center px-3 py-2 mx-3 rounded-lg @if($path == 'zen-mode') bg-white/30 @else hover:bg-white/30 @endif transition-colors duration-200">
                            <div class="w-min">
                                <svg class="size:4 sm:size-8 @if( $path == 'zen-mode') text-red-700 @else text-white @endif" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M8 18V6l8 6-8 6Z" />
                                </svg>
                            </div>
                            <div class="w-full inter-400 text-lg max-sm:hidden">Zen Mode</div>
                        </div>
                    </a>
                    <a href="/competitive-analysis" wire:navigate>
                        <div class="flex justify-evenly gap-4 items-center px-3 py-2 mx-3 rounded-lg hover:bg-white/30 transition-colors duration-200">
                            <div class="w-min">
                                <svg class="size:4 sm:size-8 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-width="1" d="M4.5 17H4a1 1 0 0 1-1-1 3 3 0 0 1 3-3h1m0-3.05A2.5 2.5 0 1 1 9 5.5M19.5 17h.5a1 1 0 0 0 1-1 3 3 0 0 0-3-3h-1m0-3.05a2.5 2.5 0 1 0-2-4.45m.5 13.5h-7a1 1 0 0 1-1-1 3 3 0 0 1 3-3h3a3 3 0 0 1 3 3 1 1 0 0 1-1 1Zm-1-9.5a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0Z" />
                                </svg>
                            </div>
                            <div class="w-full inter-400 text-lg max-sm:hidden">Community</div>
                        </div>
                    </a>
                    <a href="/setting" wire:navigate>
                        <div class="flex justify-evenly gap-4 items-center px-3 py-2 mx-3 rounded-lg hover:bg-white/30 transition-colors duration-200">
                            <div class="w-min">
                                <svg class="size:4 sm:size-8 @if($path == 'setting') text-red-700 @else text-white @endif" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M21 13v-2a1 1 0 0 0-1-1h-.757l-.707-1.707.535-.536a1 1 0 0 0 0-1.414l-1.414-1.414a1 1 0 0 0-1.414 0l-.536.535L14 4.757V4a1 1 0 0 0-1-1h-2a1 1 0 0 0-1 1v.757l-1.707.707-.536-.535a1 1 0 0 0-1.414 0L4.929 6.343a1 1 0 0 0 0 1.414l.536.536L4.757 10H4a1 1 0 0 0-1 1v2a1 1 0 0 0 1 1h.757l.707 1.707-.535.536a1 1 0 0 0 0 1.414l1.414 1.414a1 1 0 0 0 1.414 0l.536-.535 1.707.707V20a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1v-.757l1.707-.708.536.536a1 1 0 0 0 1.414 0l1.414-1.414a1 1 0 0 0 0-1.414l-.535-.536.707-1.707H20a1 1 0 0 0 1-1Z" />
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M12 15a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z" />
                                </svg>
                            </div>
                            <div class="w-full inter-400 text-lg max-sm:hidden">Settings</div>
                        </div>
                    </a>
                    <a href="/competitive-analysis" wire:navigate>
                        <div class="flex justify-evenly gap-4 items-center px-3 py-2 mx-3 rounded-lg hover:bg-white/30 transition-colors duration-200">
                            <div class="w-min">
                                <svg class="size:4 sm:size-8 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-width="1" d="M8 7V6a1 1 0 0 1 1-1h11a1 1 0 0 1 1 1v7a1 1 0 0 1-1 1h-1M3 18v-7a1 1 0 0 1 1-1h11a1 1 0 0 1 1 1v7a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1Zm8-3.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Z" />
                                </svg>
                            </div>
                            <div class="w-full inter-400 text-lg max-sm:hidden">Affiliate</div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <div wire:click="signOut">
            <div class="flex justify-evenly gap-4 items-center px-3 py-2 mx-3 rounded-lg hover:bg-white/30 transition-colors duration-200">
                <div class="w-min">
                    <svg class="size:4 sm:size-8 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M20 12H8m12 0-4 4m4-4-4-4M9 4H7a3 3 0 0 0-3 3v10a3 3 0 0 0 3 3h2" />
                    </svg>
                </div>
                <div class="w-full inter-400 text-lg max-sm:hidden">Sign Out</div>
            </div>
        </div>
    </div>
</div>