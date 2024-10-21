<?php

use function Livewire\Volt\{state};

$submit = function () {
    $this->redirectRoute('dashboard');
};

?>

<div class="flex flex-col h-full py-2">
    <div>
        <div class="text-white inter-600 uppercase text-2xl text-center py-1">The Orbit university</div>
        <div class="bg-gradient-to-r from-black from-10% via-red-700 to-black to-90% h-[1px] mt-2"></div>
    </div>
    <div class="grow w-full flex items-center">
        <div class="h-min grid grid-cols-1 gap-6 w-full">
            <div>
                <div class="flex justify-center whitespace-nowrap">
                    <div class="bg-gradient-to-b from-red-700 p-0.5 rounded-t-2xl w-min">
                        <div class="size-full bg-black text-center rounded-t-2xl px-8 py-4">
                            <div class="inter-600 text-4xl bg-clip-text text-transparent bg-gradient-to-b from-50% from-white/90">
                                Sign In
                            </div>
                        </div>
                    </div>
                </div>

                <div class="bg-gradient-to-tr shadow-2xl shadow-red-700/30 rounded-3xl from-red-700 via-transparent to-red-700 p-0.5 w-4/12 mx-auto ">
                    <div class="size-full p-10 rounded-3xl h-min grid grid-cols-1 gap-3 bg-black">
                        <div class="h-min grid grid-cols-1 gap-8 text-white">
                            <div class="h-min grid grid-cols-1 gap-2">
                                <div class="text-xl inter-500">Email</div>
                                <div>
                                    <input type="text" class="w-full inter-400 text-lg bg-transparent border border-red-700 rounded-xl py-2 px-4 outline-none caret-red-700">
                                </div>
                            </div>
                            <div class="h-min grid grid-cols-1 gap-2">
                                <div class="text-xl inter-500">Password</div>
                                <div>
                                    <input type="password" class="w-full inter-400 text-lg bg-transparent border border-red-700 rounded-xl py-2 px-4 outline-none caret-red-700">
                                </div>
                            </div>
                            <div class="pt-4">
                                <div wire:click="submit" class="hover:bg-red-700 hover:shadow-lg hover:shadow-red-700/50 transition-colors duration-300 cursor-pointer bg-gradient-to-bl from-red-700 via-transparent to-red-700 w-min mx-auto whitespace-nowrap p-0.5 rounded-xl">
                                    <div class="bg-black rounded-xl px-12 py-2 inter-500 text-xl">Sign In</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>