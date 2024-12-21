<?php

use function Livewire\Volt\{state};

//

?>

<div class="w-full grow flex flex-col gap-8 relative" x-data="{ height: 0 }" x-resize="height = $height">
    <div class="absolute inset-x-0 overflow-y-auto flex flex-col gap-4 py-4 pr-4" :style="'height: ' + height + 'px;'">
        <div class="flex max-sm:flex-col sm:justify-between gap-8">
            <div class="sm:w-3/5 border border-white/30 rounded-3xl flex flex-col gap-3 p-6">
                <div class="text-white inter-300">Your Referal Income</div>
                <div class="size-full flex justify-center items-center rounded-3xl text-blue-700 text-xl py-4 sm:text-4xl border inter-400 border-white/30">$ 8.00</div>
            </div>
            <div class="sm:w-2/5 border border-white/30 rounded-3xl p-6 gap-3 flex flex-col">
                <div class="text-white inter-300">Monk Mode</div>
                <div class="border-4 border-blue-700 py-4 rounded-3xl text-center">
                    <div class="text-3xl text-white inter-700">0</div>
                    <div class="text-xl text-white inter-600 py-2">Day Streak</div>
                    <div class="text-white/30 inter-600">21 Days Left</div>
                </div>
                <div class="sm:flex sm:justify-around grid grid-cols-2 justify-evenly gap-y-5 rounded-2xl p-4 border border-white/30 w-full">
                    <button class="size-min m-auto border-2 border-blue-700 rounded-full p-1">
                        <svg class="w-8 h-8 text-blue-700" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linejoin="round" stroke-width="2" d="M2.98755 7.97095c0-.55229.44771-1 1-1H16.9253c.5523 0 1 .44771 1 1v7.95855c0 .5522-.4477 1-1 1H3.98755c-.55229 0-1-.4478-1-1V7.97095ZM20.9129 12.9419v-1.9834c0-.5523-.4478-1-1-1h-.9876c-.5523 0-1 .4477-1 1v1.9834c0 .5523.4477 1 1 1h.9876c.5522 0 1-.4477 1-1Z" />
                            <path stroke="currentColor" stroke-linejoin="round" stroke-width="2" d="M5.9751 9.9585h8.9627v3.9834H5.9751V9.9585Z" />
                        </svg>
                    </button>
                    <div class="size-min m-auto border-2 border-white/30 hover:border-white group transition-colors duration-200 rounded-full p-1">
                        <svg class="w-8 h-8 text-white/30 group-hover:text-white transition-colors duration-200" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                            <path fill-rule="evenodd" d="M13.135 6H15V3h-1.865a4.147 4.147 0 0 0-4.142 4.142V9H7v3h2v9.938h3V12h2.021l.592-3H12V6.591A.6.6 0 0 1 12.592 6h.543Z" clip-rule="evenodd" />
                        </svg>
                    </div>
                    <div class="size-min m-auto border-2 border-white/30 hover:border-white group transition-colors duration-200 hover:border- rounded-full p-1">
                        <svg class="w-8 h-8 text-white/30 group-hover:text-white transition-colors duration-200" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path fill="currentColor" fill-rule="evenodd" d="M3 8a5 5 0 0 1 5-5h8a5 5 0 0 1 5 5v8a5 5 0 0 1-5 5H8a5 5 0 0 1-5-5V8Zm5-3a3 3 0 0 0-3 3v8a3 3 0 0 0 3 3h8a3 3 0 0 0 3-3V8a3 3 0 0 0-3-3H8Zm7.597 2.214a1 1 0 0 1 1-1h.01a1 1 0 1 1 0 2h-.01a1 1 0 0 1-1-1ZM12 9a3 3 0 1 0 0 6 3 3 0 0 0 0-6Zm-5 3a5 5 0 1 1 10 0 5 5 0 0 1-10 0Z" clip-rule="evenodd" />
                        </svg>
                    </div>
                    <div class="size-min m-auto border-2 border-white/30 hover:border-white group transition-colors duration-200 rounded-full p-1">
                        <svg class="w-8 h-8 text-white/30 group-hover:text-white transition-colors duration-200" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M18.942 5.556a16.3 16.3 0 0 0-4.126-1.3 12.04 12.04 0 0 0-.529 1.1 15.175 15.175 0 0 0-4.573 0 11.586 11.586 0 0 0-.535-1.1 16.274 16.274 0 0 0-4.129 1.3 17.392 17.392 0 0 0-2.868 11.662 15.785 15.785 0 0 0 4.963 2.521c.41-.564.773-1.16 1.084-1.785a10.638 10.638 0 0 1-1.706-.83c.143-.106.283-.217.418-.331a11.664 11.664 0 0 0 10.118 0c.137.114.277.225.418.331-.544.328-1.116.606-1.71.832a12.58 12.58 0 0 0 1.084 1.785 16.46 16.46 0 0 0 5.064-2.595 17.286 17.286 0 0 0-2.973-11.59ZM8.678 14.813a1.94 1.94 0 0 1-1.8-2.045 1.93 1.93 0 0 1 1.8-2.047 1.918 1.918 0 0 1 1.8 2.047 1.929 1.929 0 0 1-1.8 2.045Zm6.644 0a1.94 1.94 0 0 1-1.8-2.045 1.93 1.93 0 0 1 1.8-2.047 1.919 1.919 0 0 1 1.8 2.047 1.93 1.93 0 0 1-1.8 2.045Z" />
                        </svg>
                    </div>
                </div>
            </div>
        </div>
        <div class="grow flex max-sm:flex-col sm:justify-between gap-8">
            <div class="sm:w-1/2 border border-white/30 rounded-3xl p-6 flex flex-col gap-6">
                <div class="text-white inter-300">Coaching Today</div>
                <div class="p-5 border border-white/30 rounded-3xl text-white inter-400">No calls for today</div>
            </div>
            <div class="sm:w-1/2 border border-white/30 rounded-3xl p-6 flex flex-col gap-6">
                <div class="text-white inter-300">Resume where you left</div>
                <div class="grow bg-white/30 relative rounded-3xl">
                    <div class="absolute inset-0 bg-gradient-to-t rounded-3xl from-green-700 from-10%"></div>
                </div>
            </div>
        </div>
    </div>
</div>