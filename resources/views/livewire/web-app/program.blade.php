<?php

use function Livewire\Volt\{state};

//

?>

<div class="h-full flex flex-col gap-4">
    <div class="text-white inter-700 text-xl">Programs</div>
    <div x-data="{ count: Array.from({ length: 7 }) }" class="grow grid grid-cols-4 gap-8 border border-white/30 p-4 rounded-3xl">
        <a href="/add-program" wire:navigate class="w-full grow relative border border-white/30 rounded-xl">
            <div class="absolute inset-0 flex justify-center items-center">
                <svg class="w-12 h-12 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14m-7 7V5" />
                </svg>
            </div>
        </a>
        <template x-for="(item, index) in count">
            <div class="w-full grow bg-white/50 rounded-xl bg-gradient-to-t from-red-700"></div>
        </template>
    </div>
</div>