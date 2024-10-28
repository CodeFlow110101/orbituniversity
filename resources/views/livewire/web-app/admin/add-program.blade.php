<?php

use App\Models\Program;

use function Livewire\Volt\{state, rules, on};

state(['name', 'description', 'thumbnail']);

rules(['name' => 'required|min:3', 'description' => 'required|min:6', 'thumbnail' => "required|lt:100",])->messages([
    'thumbnail.lt' => 'The :attribute must be less than 100kb.',
]);

on(['store' => function ($fileUrl) {
    Program::create([
        'name' => $this->name,
        'description' => $this->description,
        'image' => $fileUrl,
    ]);

    $this->reset();
    $this->dispatch('reset-file-input');
    $this->dispatch('show-toastr', type: 'success', message: 'Created Successfully');
}]);

$submit = function () {
    $this->validate();
    $this->dispatch('file-upload');
};

?>

<div x-data="imageUploader" class="size-full">
    <div class="size-full flex flex-col gap-8">
        <div class="grow flex justify-between gap-8 items-center">
            <div class="w-full h-full text-white text-xl inter-400">
                <div>Thumbnail Image</div>
                <div class="bg-gradient-to-r from-red-700 to-black to-90% h-0.5 rounded-full mt-2"></div>
            </div>
            <div class="w-full h-full bg-gradient-to-br from-red-700 via-transparent to-red-700 p-0.5 rounded-2xl">
                <div class="size-full flex items-center justify-center bg-black p-4 rounded-2xl">
                    <div class="size-full flex items-center justify-center">
                        <div x-show="!preview" @click="$refs.imageInput.click()" class="size-full relative border border-white/30 rounded-2xl">
                            <div class="absolute inset-0 flex justify-center items-center">
                                <svg class="w-8 h-8 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14m-7 7V5" />
                                </svg>
                            </div>
                        </div>
                        <div x-show="preview" class="cursor-pointer" @click="$refs.imageInput.click()">
                            <img class="rounded-2xl max-h-52" :src="preview" alt="Image Preview">
                            <input x-on:reset-file-input.window="$refs.imageInput.value = null; $refs.imageInput.dispatchEvent(new Event('change'));" class="hidden" type="file" x-ref="imageInput" id="file" @change="previewImage" accept="image/*" />
                        </div>
                        <input class="hidden" wire:model="thumbnail" type="text">
                    </div>
                </div>
                <div class="text-white">
                    @error('thumbnail')
                    <span wire:transition.in.duration.500ms="scale-y-100"
                        wire:transition.out.duration.500ms="scale-y-0" class="text-red-700">{{ $message }}</span>
                    @enderror
                </div>
            </div>
        </div>
        <div class="grow flex justify-between gap-8 items-center">
            <div class="w-full h-full text-white text-xl inter-400">
                <div>Details</div>
                <div class="bg-gradient-to-r from-red-700 to-black to-90% h-0.5 rounded-full mt-2"></div>
            </div>
            <div class="w-full h-full bg-gradient-to-br from-red-700 via-transparent to-red-700 p-0.5 rounded-2xl">
                <div class="size-full flex items-center justify-center bg-black rounded-2xl">
                    <div class="h-min w-full px-8 grid grid-cols-1 gap-3 text-white">
                        <div class="h-min grid grid-cols-1 gap-2">
                            <div class="text-lg inter-300">Name</div>
                            <div>
                                <input wire:model="name" type="text" class="w-full inter-400 text-lg bg-transparent border border-red-700 rounded-xl py-2 px-4 outline-none caret-red-700">
                            </div>
                            <div>
                                @error('name')
                                <span wire:transition.in.duration.500ms="scale-y-100"
                                    wire:transition.out.duration.500ms="scale-y-0" class="text-red-700">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="h-min grid grid-cols-1 gap-2">
                            <div class="text-lg inter-300">Description</div>
                            <div>
                                <input wire:model="description" type="text" class="w-full inter-400 text-lg bg-transparent border border-red-700 rounded-xl py-2 px-4 outline-none caret-red-700">
                            </div>
                            <div>
                                @error('description')
                                <span wire:transition.in.duration.500ms="scale-y-100"
                                    wire:transition.out.duration.500ms="scale-y-0" class="text-red-700">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="flex justify-center">
                            <button wire:click="submit" wire:loading.class="pointer-events-none" wire:target="submit" class="hover:bg-red-700 w-32 h-14 hover:shadow-lg hover:shadow-red-700/50 transition-colors duration-300 cursor-pointer bg-gradient-to-bl from-red-700 via-transparent to-red-700 whitespace-nowrap p-0.5 rounded-xl">
                                <div class="size-full bg-black rounded-xl inter-300 text-lg flex justify-center items-center">
                                    <div wire:loading.class="hidden pointer-events-none" wire:target="submit">Submit</div>
                                    <svg wire:loading.class.remove="hidden" wire:target="submit" aria-hidden="true" class="w-8 hidden h-8 text-transparent animate-spin fill-red-700" viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z" fill="currentColor" />
                                        <path d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z" fill="currentFill" />
                                    </svg>
                                </div>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>