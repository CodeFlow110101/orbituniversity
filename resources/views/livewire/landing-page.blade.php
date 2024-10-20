<?php

use function Livewire\Volt\{state, mount};

state(['path']);
mount(function () {
    $this->path = request()->path();
});

?>

<div>
    @if($path == '/')
    <livewire:home />
    @elseif(in_array($path,['dashboard','programs']))
    <div class="flex justify-between gap-8">
        <div class="w-1/4">
            <livewire:web-app.side-bar :path="$path" />
        </div>
        @if($path == 'dashboard')
        <div class="w-full h-screen py-8 pr-8">
            <livewire:web-app.dashboard />
        </div>
        @elseif($path == 'programs')
        <div class="w-full h-screen py-8 pr-8">
            <livewire:web-app.programs />
        </div>
        @endif
    </div>
    @elseif($path == 'sign-in')
    <div class="h-screen">
        <livewire:web-app.sign-in />
    </div>
    @endif
</div>