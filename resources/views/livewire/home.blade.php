<?php

use function Livewire\Volt\{state};

//

?>

<div class="my-2">
    <div>
        <div class="text-white inter-600 uppercase text-2xl text-center py-1">The Orbit university</div>
        <div class="bg-gradient-to-r from-black from-10% via-red-700 to-black to-90% h-[1px] mt-2"></div>
    </div>
    <div class="mt-12 flex justify-between">
        <div class="min-h-full w-1/6 bg-gradient-to-r from-10% from-red-700/20"></div>
        <div class="text-white text-center h-min grid grid-cols-1 gap-4">
            <div class="text-xl">
                <span class="bg-clip-text uppercase inter-700 text-transparent bg-gradient-to-t from-10% from-red-700 to-red-700/50">
                    It's true...
                </span>
            </div>
            <div class="inter-700 text-3xl">
                24-YEAR-OLD MULTI-MILLIONAIRE GOES ROGUE <br> AND REVEALS HIS SECRET "ONLINE INCOME <br> SYSTEM" JUST TO PROVE ANYONE CAN MAKE <br> THEIR FIRST $1,000 ONLINE WITH IT.
            </div>
            <div class="h-80 w-full border border-blue-500 shadow-2xl shadow-blue-500/30 rounded-xl mb-12"></div>
        </div>
        <div class="min-h-full w-1/6 bg-gradient-to-r from-10% from-transparent to-red-700/20"></div>
    </div>

    <div>
        <div class="bg-gradient-to-r from-black from-10% via-red-700 to-black to-90% h-[1px]"></div>
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
        <div class="bg-gradient-to-r from-black from-10% via-red-700 to-black to-90% h-[1px]"></div>
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
        <div class="p-20 px-28 flex justify-between items-center gap-14">
            <div class="w-2/5">
                <img class="h-full rounded-xl" src="{{asset('images/home5.jpeg')}}">
            </div>
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
                <div class="bg-red-700 rounded-lg text-center cursor-pointer p-4 inter-600">
                    YESI GIVE ME ACCESS NOW
                </div>
            </div>
        </div>
    </div>

    <div class="h-[1px] bg-white/20"></div>

    <div class="p-20 px-32 flex justify-between items-center">
        <div class="w-full h-full inter-400 text-white/50">
            <div class="inter-500 tracking-widest my-2">A STEP-BY-STEP PATH</div>
            <div class="h-min grid grid-cols-1 gap-8">
                <div class="text-white inter-700 text-4xl">
                    2024 IS YOUR LAST <span class="underline decoration-wavy underline-offset-8 decoration-4 decoration-white/50">CHANCE</span>
                </div>
                <div>
                    The world will change forever in 2024.<br>
                    They are developing more ways to <span class="inter-800 text-white">trap you.</span>
                </div>
                <div>
                    Al is taking jobs, and Central Bank Digital Currencies are just around the corner.
                </div>
                <div class="inter-800 text-white">
                    What have you been doing to prepare?
                </div>
                <div>
                    You must understand, it's now or never.
                </div>
            </div>
        </div>
        <div class="w-full h-96 rounded-xl bg-white"></div>
    </div>

    <div class="h-[1px] bg-white/20"></div>

    <div>
        <div class="text-white text-center h-min grid grid-cols-1 gap-4">
            <div class="text-xl">
                <span class="uppercase inter-700 text-red-700">
                    MY OBJECTIVE HERE IS SIMPLE...
                </span>
            </div>
            <div class="inter-800 text-4xl">
                HELPING YOU UNF*CK YOUR LIFE BY <br> SHOWING YOU WHAT NOT TO DO... AND <br> THEN GIVING YOU 3 PATHS TO MAKE <br> YOUR FIRST $1,000 ONLINE IN RECORD <br> TIME.
            </div>
            <div class="flex justify-center"><img class="w-1/2 aspect-video" src="{{asset('images/home1.webp')}}"></div>
        </div>
    </div>

    <div class="mt-12">
        <div class="text-white text-center h-min grid grid-cols-1 gap-4">
            <div class="text-xl">
                <span class="uppercase inter-700 text-red-700">
                    THE BREAKDOWN
                </span>
            </div>
            <div class="inter-800 text-4xl">
                HERE'S THE BONUSES YOU GET WITH <br> DIGITAL LAUNCHPAD...
            </div>
        </div>
    </div>

    <div class="h-min grid grid-cols-1 gap-24 my-12">
        <div class="mx-auto w-3/5 p-0.5 shadow-2xl shadow-red-700/20 rounded-2xl bg-gradient-to-tl from-red-700 via-transparent to-red-700">
            <div class="size-full flex justify-between rounded-2xl px-12 py-14 bg-black">
                <div class="h-min w-3/4 grid grid-cols-1 gap-6">
                    <div class="flex justify-between items-center">
                        <div class="text-white whitespace-nowrap items-center text-3xl flex justify-between gap-3 w-min inter-800">
                            <div>The Launchpad</div>
                            <div>
                                <svg class="w-6 h-6 text-blue-500 rounded-full" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                    <path fill-rule="evenodd" d="M12 2c-.791 0-1.55.314-2.11.874l-.893.893a.985.985 0 0 1-.696.288H7.04A2.984 2.984 0 0 0 4.055 7.04v1.262a.986.986 0 0 1-.288.696l-.893.893a2.984 2.984 0 0 0 0 4.22l.893.893a.985.985 0 0 1 .288.696v1.262a2.984 2.984 0 0 0 2.984 2.984h1.262c.261 0 .512.104.696.288l.893.893a2.984 2.984 0 0 0 4.22 0l.893-.893a.985.985 0 0 1 .696-.288h1.262a2.984 2.984 0 0 0 2.984-2.984V15.7c0-.261.104-.512.288-.696l.893-.893a2.984 2.984 0 0 0 0-4.22l-.893-.893a.985.985 0 0 1-.288-.696V7.04a2.984 2.984 0 0 0-2.984-2.984h-1.262a.985.985 0 0 1-.696-.288l-.893-.893A2.984 2.984 0 0 0 12 2Zm3.683 7.73a1 1 0 1 0-1.414-1.413l-4.253 4.253-1.277-1.277a1 1 0 0 0-1.415 1.414l1.985 1.984a1 1 0 0 0 1.414 0l4.96-4.96Z" clip-rule="evenodd" />
                                </svg>
                            </div>
                        </div>
                        <div class="flex justify-between items-center gap-2 text-lg">
                            <div class="text-white inter-600 text-lg line-through">$500</div>
                            <div class="text-white inter-700 bg-red-700 px-4 py-0 rounded-md -skew-x-12">FREE</div>
                        </div>
                    </div>
                    <div class="text-white/50 inter-300">
                        This is Iman Gadzhi's introductory program to Digital Launchpad. Before getting into any of the business models, in these initial modules Iman will teach you how to prepare yourself for success and get rid of the habits that keep you stuck. This is essentially a crash-course on "How To Unf*ck Your Life".
                    </div>
                </div>
                <div class="w-1/4 flex justify-center items-center">
                    <img class="translate-x-1/2 scale-x-125 scale-y-150" src="{{asset('images/home2.webp')}}">
                </div>
            </div>
        </div>

        <div class="mx-auto w-3/5 p-0.5 shadow-2xl shadow-red-700/20 rounded-2xl bg-gradient-to-tl from-red-700 via-transparent to-red-700">
            <div class="size-full flex justify-between rounded-2xl px-12 py-14 bg-black">
                <div class="h-min w-3/4 grid grid-cols-1 gap-6">
                    <div class="flex justify-between items-center">
                        <div class="text-white whitespace-nowrap items-center text-3xl flex justify-between gap-3 w-min inter-800">
                            <div>6-Figure Sales Rep</div>
                            <div>
                                <svg class="w-6 h-6 text-blue-500 rounded-full" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                    <path fill-rule="evenodd" d="M12 2c-.791 0-1.55.314-2.11.874l-.893.893a.985.985 0 0 1-.696.288H7.04A2.984 2.984 0 0 0 4.055 7.04v1.262a.986.986 0 0 1-.288.696l-.893.893a2.984 2.984 0 0 0 0 4.22l.893.893a.985.985 0 0 1 .288.696v1.262a2.984 2.984 0 0 0 2.984 2.984h1.262c.261 0 .512.104.696.288l.893.893a2.984 2.984 0 0 0 4.22 0l.893-.893a.985.985 0 0 1 .696-.288h1.262a2.984 2.984 0 0 0 2.984-2.984V15.7c0-.261.104-.512.288-.696l.893-.893a2.984 2.984 0 0 0 0-4.22l-.893-.893a.985.985 0 0 1-.288-.696V7.04a2.984 2.984 0 0 0-2.984-2.984h-1.262a.985.985 0 0 1-.696-.288l-.893-.893A2.984 2.984 0 0 0 12 2Zm3.683 7.73a1 1 0 1 0-1.414-1.413l-4.253 4.253-1.277-1.277a1 1 0 0 0-1.415 1.414l1.985 1.984a1 1 0 0 0 1.414 0l4.96-4.96Z" clip-rule="evenodd" />
                                </svg>
                            </div>
                        </div>
                        <div class="flex justify-between items-center gap-2 text-lg">
                            <div class="text-white inter-600 text-lg line-through">$1500</div>
                            <div class="text-white inter-700 bg-red-700 px-4 py-0 rounded-md -skew-x-12">FREE</div>
                        </div>
                    </div>
                    <div class="text-white/50 inter-300">
                        Inside of Six-Figure Sales Rep, Paul Daley will teach you how to make 6-figures without having to start a business, by becoming a Remote Sales Rep for companies that sell high-ticket products/services online.
                    </div>
                </div>
                <div class="w-1/4 flex justify-center items-center">
                    <img class="translate-x-1/2 scale-x-125 scale-y-150" src="{{asset('images/home3.png')}}">
                </div>
            </div>
        </div>
    </div>

    <div class="my-28">
        <div class="text-white text-center h-min grid grid-cols-1 gap-4">
            <div class="text-xl">
                <span class="uppercase inter-700 text-red-700">
                    beta launch discount
                </span>
            </div>
            <div class="inter-800 uppercase text-4xl">
                Lock-in access at the discounted <br> price before official launch
            </div>
            <div class="text-white/50 inter-300">
                By joining with the monthly plan, you start as an Apprentice and unlock content monthly. When <br> joining with the yearly plan, you already join as a King and unlock instant access to all rewards you'd <br> have gotten in the first 12 months.
            </div>
        </div>
    </div>

    <div class="h-min grid grid-cols-1 gap-6">
        <div class="mx-auto px-8 py-3 border border-white/50 hover:border-red-700 transition-colors duration-300 cursor-pointer rounded-2xl text-lg text-white inter-800 uppercase">Digital launchpad</div>
        <div>
            <div class="flex justify-center whitespace-nowrap">
                <div class="bg-gradient-to-b from-red-700 p-0.5 rounded-t-2xl w-min">
                    <div class="size-full bg-black text-center rounded-t-2xl px-8 py-4">
                        <div class="text-gray-500 text-2xl line-through inter-500">From $100</div>
                        <div class="inter-600 text-5xl bg-clip-text text-transparent bg-gradient-to-b from-50% from-white/90">
                            Only $37
                        </div>
                    </div>
                </div>
            </div>

            <div class="hover:-translate-y-3 transition-transform duration-300 bg-gradient-to-tr shadow-2xl shadow-red-700/30 rounded-3xl from-red-700 via-transparent to-red-700 p-0.5 w-1/2 mx-auto ">
                <div class="size-full p-10 rounded-3xl h-min grid grid-cols-1 gap-3 bg-black">
                    <div class="flex justify-between">
                        <div><img class="w-16" src="{{asset('images/home4.png')}}"></div>
                        <div class="text-white p-4 rounded-full border border-red-700 text-xl inter-400"><span class="inter-700">$37</span>/Month</div>
                    </div>
                    <div class="h-min grid grid-cols-1 gap-6 text-white">
                        <div class="text-3xl inter-800">Digital Launchpad</div>
                        <div class="text-white/50 tracking-wider inter-400">
                            Get instant access to Digital Launchpad + all the bonuses below
                        </div>
                        <div class="h-min grid grid-cols-2 gap-2 inter-500">
                            <div class="grid grid-cols-1 gap-4">
                                <div class="flex justify-between items-center w-min gap-4 whitespace-nowrap">
                                    <div class="bg-red-700/20 p-0.5 border-2 border-red-700 rounded-full">
                                        <svg class="w-4 h-4 text-red-700" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 11.917 9.724 16.5 19 7.5" />
                                        </svg>
                                    </div>
                                    <div>Iman's Crash Course <span class="text-green-500">($500 Value)</span></div>
                                </div>
                                <div class="flex justify-between items-center w-min gap-4 whitespace-nowrap">
                                    <div class="bg-red-700/20 p-0.5 border-2 border-red-700 rounded-full">
                                        <svg class="w-4 h-4 text-red-700" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 11.917 9.724 16.5 19 7.5" />
                                        </svg>
                                    </div>
                                    <div>Pen To Profit <span class="text-green-500">($1,500 Value)</span></div>
                                </div>
                                <div class="flex justify-between items-center w-min gap-4 whitespace-nowrap">
                                    <div class="bg-red-700/20 p-0.5 border-2 border-red-700 rounded-full">
                                        <svg class="w-4 h-4 text-red-700" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 11.917 9.724 16.5 19 7.5" />
                                        </svg>
                                    </div>
                                    <div>The Winning Store <span class="text-green-500">($1,500 Value)</span></div>
                                </div>
                                <div class="flex justify-between items-center w-min gap-4 whitespace-nowrap">
                                    <div class="bg-red-700/20 p-0.5 border-2 border-red-700 rounded-full">
                                        <svg class="w-4 h-4 text-red-700" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 11.917 9.724 16.5 19 7.5" />
                                        </svg>
                                    </div>
                                    <div>6-Figure Sales Rep <span class="text-green-500">($1,500 Value)</span></div>
                                </div>
                            </div>

                            <div class="grid grid-cols-1 gap-4">
                                <div class="flex justify-between items-center w-min gap-4 whitespace-nowrap">
                                    <div class="bg-red-700/20 p-0.5 border-2 border-red-700 rounded-full">
                                        <svg class="w-4 h-4 text-red-700" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 11.917 9.724 16.5 19 7.5" />
                                        </svg>
                                    </div>
                                    <div>Monthly Rewards <span class="text-green-500">($5,000+ Value)</span></div>
                                </div>
                                <div class="flex justify-between items-center w-min gap-4 whitespace-nowrap">
                                    <div class="bg-red-700/20 p-0.5 border-2 border-red-700 rounded-full">
                                        <svg class="w-4 h-4 text-red-700" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 11.917 9.724 16.5 19 7.5" />
                                        </svg>
                                    </div>
                                    <div>New Program Releases</div>
                                </div>
                                <div class="flex justify-between items-center w-min gap-4 whitespace-nowrap">
                                    <div class="bg-red-700/20 p-0.5 border-2 border-red-700 rounded-full">
                                        <svg class="w-4 h-4 text-red-700" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 11.917 9.724 16.5 19 7.5" />
                                        </svg>
                                    </div>
                                    <div>Leveling System</div>
                                </div>
                                <div class="flex justify-between items-center w-min gap-4 whitespace-nowrap">
                                    <div class="bg-red-700/20 p-0.5 border-2 border-red-700 rounded-full">
                                        <svg class="w-4 h-4 text-red-700" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 11.917 9.724 16.5 19 7.5" />
                                        </svg>
                                    </div>
                                    <div>Unlockable Content</div>
                                </div>
                            </div>
                        </div>

                        <div class="grid grid-cols-1 gap-2 h-min">
                            <div class="bg-red-700 w-full py-4 rounded-xl text-center inter-800 cursor-pointer">GET MONTHLY ACCESS NOW</div>
                            <div class="text-white/50 italic text-sm text-center">You'll get redirected to our student platform to complete your checkout.</div>
                        </div>

                        <div class="flex justify-between items-center w-3/5 mx-auto">
                            <img class="h-4" src="{{asset('images/payment1.png')}}">
                            <img class="h-6" src="{{asset('images/payment2.png')}}">
                            <img class="h-6" src="{{asset('images/payment3.png')}}">
                            <img class="h-10" src="{{asset('images/payment4.png')}}">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="h-96">

    </div>
</div>