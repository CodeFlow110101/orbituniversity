<?php

use function Livewire\Volt\{state, mount};

state(['path']);

mount(function ($path) {
    $this->path = $path;
});

?>

<div class="w-full h-full py-6 text-white bg-gradient-to-b from-white/20">
    <div class="h-min grid grid-cols-1 gap-6">
        <div class="text-center inter-700 text-2xl">The Orbit <br> University</div>
        <div class="h-min grid grid-cols-1 gap-1">
            <div>
                <svg class="mx-auto w-20 h-20 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M12 21a9 9 0 1 0 0-18 9 9 0 0 0 0 18Zm0 0a8.949 8.949 0 0 0 4.951-1.488A3.987 3.987 0 0 0 13 16h-2a3.987 3.987 0 0 0-3.951 3.512A8.948 8.948 0 0 0 12 21Zm3-11a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                </svg>
            </div>
            <div class="text-center text-xl inter-500">John Doe</div>
            <div class="text-center ">johndoe@gmail.com</div>
        </div>
        <div class="h-min grid grid-cols-1 gap-4">
            <a href="/dashboard" wire:navigate>
                <div class="flex justify-between gap-4 items-center px-3 py-2 mx-3 rounded-lg hover:bg-white/30 transition-colors duration-200">
                    <div class="w-min">
                        <svg class="w-8 h-8 @if($path == 'dashboard') text-red-700 @else text-white @endif" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M12 15v5m-3 0h6M4 11h16M5 15h14a1 1 0 0 0 1-1V5a1 1 0 0 0-1-1H5a1 1 0 0 0-1 1v9a1 1 0 0 0 1 1Z" />
                        </svg>
                    </div>
                    <div class="w-full inter-400 text-lg">Dashboard</div>
                </div>
            </a>
            <a href="/programs" wire:navigate>
                <div class="flex justify-between gap-4 items-center px-3 py-2 mx-3 rounded-lg hover:bg-white/30 transition-colors duration-200">
                    <div class="w-min">
                        <svg class="w-8 h-8 @if($path == 'programs') text-red-700 @else text-white @endif" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
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
                    <div class="w-full inter-400 text-lg">Videos</div>
                </div>
            </a>
        </div>
    </div>
</div>