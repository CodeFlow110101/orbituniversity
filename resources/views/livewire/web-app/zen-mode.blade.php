<?php

use function Livewire\Volt\{state};

//

?>

<div class="grow py-4 pr-4 flex flex-col">
    <div class="grow flex flex-col gap-6 border border-white/30 rounded-3xl p-4">
        <div class="grow rounded-3xl overflow-hidden" x-data="{ height: 0 }" x-resize="height = $height">
            <img class="w-full" :style="'height: ' + height + 'px;'" src="{{ asset('/images/zen_mode.jpeg') }}">
        </div>
        <div class="asing-regular text-blue-700 text-lg text-center">
            Enter Zen Mode to unlock your best version. Embrace focus, discipline, and inner peace as you silence distractions and tap into your true potential
        </div>
        <div class="flex justify-evenly mt-auto text-white text-xs sm:text-sm font-light">
            <button class="rounded-full border border-white/30 py-2 px-4">What is ZEN MODE</button>
            <button class="rounded-full border border-white/30 py-2 px-4">JOIN ZEN MODE</button>
        </div>
    </div>
</div>