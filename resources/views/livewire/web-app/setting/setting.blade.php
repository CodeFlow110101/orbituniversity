<?php

use function Livewire\Volt\{state};

?>

<div class="w-full h-full flex flex-col gap-8">
    <div class="grow flex justify-between gap-8 items-center">
        <div class="w-full h-full text-white text-xl inter-400">
            <div>Update Details</div>
            <div class="bg-gradient-to-r from-red-700 to-black to-90% h-0.5 rounded-full mt-2"></div>
        </div>
        <livewire:web-app.setting.update-detail />
    </div>
    <div class="grow flex justify-between gap-8 items-center">
        <div class="w-full h-full text-white text-xl inter-400">
            <div>Update Password</div>
            <div class="bg-gradient-to-r from-red-700 to-black to-90% h-0.5 rounded-full mt-2"></div>
        </div>
        <livewire:web-app.setting.update-password />
    </div>
</div>