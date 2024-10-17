<?php

use function Livewire\Volt\{state};

//

?>

<div class="my-2">
    <div>
        <div class="text-white inter-600 uppercase text-2xl text-center py-1">The Orbit university</div>
        <div class="bg-gradient-to-r from-black from-10% via-red-500 to-black to-90% h-[1px] mt-2"></div>
    </div>
    <div class="mt-12 flex justify-between">
        <div class="min-h-full w-1/6 bg-gradient-to-r from-10% from-red-500/20"></div>
        <div class="text-white text-center h-min grid grid-cols-1 gap-4">
            <div class="text-xl">
                <span class="bg-clip-text uppercase inter-700 text-transparent bg-gradient-to-t from-10% from-red-500 to-red-500/50">
                    It's true...
                </span>
            </div>
            <div class="inter-700 text-3xl">
                24-YEAR-OLD MULTI-MILLIONAIRE GOES ROGUE <br> AND REVEALS HIS SECRET "ONLINE INCOME <br> SYSTEM" JUST TO PROVE ANYONE CAN MAKE <br> THEIR FIRST $1,000 ONLINE WITH IT.
            </div>
            <div class="h-80 w-full border border-blue-500 rounded-xl mb-12"></div>
        </div>
        <div class="min-h-full w-1/6 bg-gradient-to-r from-10% from-transparent to-red-500/20"></div>
    </div>

    <div>
        <div class="bg-gradient-to-r from-black from-10% via-red-500 to-black to-90% h-[1px]"></div>
        <div class="my-8 flex justify-center text-white">
            <div class="w-3/5 flex justify-between inter-300">
                <div class="flex justify-between gap-4 items-center">
                    <div class="relative">
                        <svg class="w-6 h-6 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 11.917 9.724 16.5 19 7.5" />
                        </svg>
                        <svg class="absolute top-0 left-1.5 drop-shadow-xl w-6 h-6 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 11.917 9.724 16.5 19 7.5" />
                        </svg>
                    </div>
                    <div>NO STARTUP CAPITAL REQUIRED</div>
                </div>
                <div class="flex justify-between gap-4 items-center">
                    <div class="relative">
                        <svg class="w-6 h-6 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 11.917 9.724 16.5 19 7.5" />
                        </svg>
                        <svg class="absolute top-0 left-1.5 drop-shadow-xl w-6 h-6 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 11.917 9.724 16.5 19 7.5" />
                        </svg>
                    </div>
                    <div>WITHOUT CREATING CONTENT</div>
                </div>
                <div class="flex justify-between gap-4 items-center">
                    <div class="relative">
                        <svg class="w-6 h-6 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 11.917 9.724 16.5 19 7.5" />
                        </svg>
                        <svg class="absolute top-0 left-1.5 drop-shadow-xl w-6 h-6 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 11.917 9.724 16.5 19 7.5" />
                        </svg>
                    </div>
                    <div>WITHOUT PREVIOUS <br> EXPERIENCE</div>
                </div>
            </div>
        </div>
        <div class="bg-gradient-to-r from-black from-10% via-red-500 to-black to-90% h-[1px]"></div>
    </div>

    <div class="relative overflow-hidden">
        <div class="absolute inset-0 opacity-30 -z-50">
            <div class="-translate-x-1/2 -translate-y-32">
                <div x-data="{ count: Array.from({ length: 20 }) }" class="rotate-45">
                    <template x-for="(item, index) in count">
                        <div class="my-5 w-4/5 bg-gradient-to-r from-black from-10% via-white/50 to-black to-90% h-1"></div>
                    </template>
                </div>
            </div>
        </div>
        <div class="absolute inset-0 opacity-30 -z-50">
            <div class="translate-x-52 -translate-y-1/2">
                <div x-data="{ count: Array.from({ length: 20 }) }" class="-rotate-45">
                    <template x-for="(item, index) in count">
                        <div class="my-5 w-4/5 bg-gradient-to-r from-black from-10% via-white/50 to-black to-90% h-1"></div>
                    </template>
                </div>
            </div>
        </div>
        <div class="absolute inset-0 opacity-30 -z-50">
            <div class="-translate-x-52 translate-y-1/2">
                <div x-data="{ count: Array.from({ length: 20 }) }" class="-rotate-45">
                    <template x-for="(item, index) in count">
                        <div class="my-5 w-4/5 bg-gradient-to-r from-black from-10% via-white/50 to-black to-90% h-1"></div>
                    </template>
                </div>
            </div>
        </div>
        <div class="absolute inset-0 opacity-30 -z-50">
            <div class="translate-x-1/2 translate-y-72">
                <div x-data="{ count: Array.from({ length: 20 }) }" class="rotate-45">
                    <template x-for="(item, index) in count">
                        <div class="my-5 w-4/5 bg-gradient-to-r from-black from-10% via-white/50 to-black to-90% h-1"></div>
                    </template>
                </div>
            </div>
        </div>
        <div class="p-20 px-28 flex justify-between gap-14">
            <div class="w-2/5 rounded-xl bg-white"></div>
            <div class="w-3/5 py-8 h-min grid grid-cols-1 gap-6 text-white inter-300 text-lg">
                <div class="text-5xl inter-700 tracking-wide leading-tight">
                    FROM BROKE TO NOW HAVING <br> THE SECRET
                </div>
                <div>
                    I was living with my single mom and we were surviving off of government benefits... I went on to <span class="inter-700">spend months</span> trying to find the perfect online business model...
                </div>
                <div>
                    Sales funnels, Dropshipping, Affiliate marketing, Online apps. You name it... I've tried them all, to no avail.
                </div>
                <div class="inter-700">
                    I know exactly what is working today.
                </div>
                <div>
                    And right now, I'm looking for a selected group of young individuals who aspire to create an online income and make their <span class="inter-700">first $1,000 over the next few weeks......</span>
                </div>
                <div>
                    ...To share the exact same secrets I've applied to make my first million online.
                </div>
                <div class="bg-gradient-to-t from-red-900 rounded-lg to-red-500 text-center cursor-pointer p-4 inter-600">
                    YESI GIVE ME ACCESS NOW
                </div>
            </div>
        </div>
    </div>

    <div class="h-[1px] bg-white/20"></div>

    <div class="p-20 px-32 flex justify-between">
        <div class="w-full h-full"></div>
        <div class="w-full h-96 rounded-xl bg-white">
        </div>
    </div>
</div>