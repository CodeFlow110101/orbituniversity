<?php

use App\Models\Video;
use Illuminate\Support\Facades\Storage;

use function Livewire\Volt\{state, mount, with};

state(['id', 'video', 'temporaryUrl']);

with(fn() => ['videos' => Video::where('program_id', $this->id)->get()]);

$redirectToAddVideo = function ($id) {
    session()->flash('id', $id);
    $this->redirectRoute('add-video', navigate: true);
};

$toggleVideo = function ($id) {
    $this->video = Video::find($id);
    $this->temporaryUrl = Storage::temporaryUrl($this->video->video_path, now()->addMinutes(30));
    $this->dispatch('reload-video');

};

mount(function ($id) {
    $this->id = $id;

    if (Video::where('program_id', $this->id)->count() != 0) {
        $this->video = Video::where('program_id', $this->id)->first();
        $this->temporaryUrl = Storage::temporaryUrl($this->video->video_path, now()->addMinutes(30));
    }
});
?>

<div class="h-full flex flex-col gap-3">
    <div class="text-white inter-700 text-xl">Programs</div>
    <div class="grow border border-white/30 rounded-3xl overflow-y-auto">
        @if($video)
        <video x-on:reload-video.window="$refs.video.load()" x-ref="video" class="h-3/4 rounded-3xl w-full outline-none" poster="{{$video->image}}" autoplay muted controls controlslist="nodownload">
            <source src="{{$temporaryUrl}}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <div class="p-3 flex flex-col gap-2">
            <div class="text-white text-lg font-medium">{{$video->name}}</div>
            <div class="text-white">{{$video->description}}</div>
        </div>
        @else
        <div class="p-4 h-3/4 w-full">
            <div wire:click="redirectToAddVideo({{$id}})" class="size-full cursor-pointer flex justify-center items-center border border-white/30 rounded-3xl">
                <svg class="w-12 h-12 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14m-7 7V5" />
                </svg>
            </div>
        </div>
        @endif
    </div>
    <div class="h-1/4 flex flex-col gap-2">
        <div class="text-white">Phases</div>
        <div class="flex overflow-x-auto narrow-scrollbar gap-0 h-full">
            <div wire:click="redirectToAddVideo({{$id}})" class="basis-1/4 flex-shrink-0 h-full px-2">
                <div class="border border-white/30 rounded-3xl size-full flex justify-center items-center">
                    <svg class="w-10 h-10 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14m-7 7V5" />
                    </svg>
                </div>
            </div>
            @foreach($videos as $video)
            <div class="basis-1/4 flex-shrink-0 h-full px-2">
                <img wire:click="toggleVideo({{$video->id}})" class="bg-green-700 rounded-3xl size-full" src="{{$video->image}}">
            </div>
            @endforeach
        </div>
    </div>
</div>