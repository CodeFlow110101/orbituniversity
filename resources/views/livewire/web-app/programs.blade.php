<?php

use function Livewire\Volt\{state};

//

?>

<div class="h-full flex flex-col gap-4">
    <div class="text-white inter-700 text-xl">Programs</div>
    <div x-data="{ count: Array.from({ length: 4 }) }" class="grow grid grid-cols-4 gap-8">
        <template x-for="(item, index) in count">
            <div class="h-full flex flex-col gap-8">
                <div class="w-full grow bg-white/50 rounded-xl bg-gradient-to-t from-red-700"></div>
                <div class="w-full grow bg-white/50 rounded-xl bg-gradient-to-t from-red-700"></div>
            </div>
        </template>
    </div>
</div>