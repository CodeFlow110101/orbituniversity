<?php

use App\Models\Program;

use function Livewire\Volt\{state, with, usesPagination, mount};

usesPagination();

state(['colors']);

with(fn() => ['programs' => Program::paginate(7)]);

mount(function () {
    $this->colors = ['from-red-700', 'from-green-700', 'from-indigo-700', 'from-amber-700'];
});

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
        @foreach($programs as $program)
        <div class="w-full grow bg-white/50 relative rounded-xl">
            <div class="absolute inset-0 rounded-xl bg-gradient-to-t {{$colors[rand(0,3)]}} to-30%"></div>
            <img class="rounded-xl size-full" src="{{$program->image}}">
        </div>
        @endforeach
    </div>
</div>