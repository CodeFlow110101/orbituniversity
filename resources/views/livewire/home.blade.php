<?php

use function Livewire\Volt\{state, mount};

state(['faq', 'freePrograms']);

mount(function () {
    $this->faq = config('constants.faq');
    $this->freePrograms = config('constants.freePrograms');
});
?>

<div class="my-2">
    <div>
        <div class="text-white inter-600 uppercase lg:text-2xl text-center py-1">The Orbit university</div>
        <div class="bg-gradient-to-r from-black lg:from-10% via-red-700 to-black lg:to-90% h-[1px] mt-1 lg:mt-2"></div>
    </div>

    <div class="mt-12 flex justify-between">
        <div class="min-h-full w-1/4 lg:w-1/6 bg-gradient-to-r from-10% from-red-700/20"></div>
        <div class="text-white text-center h-min grid grid-cols-1 gap-4">
            <div class="lg:text-xl">
                <span class="bg-clip-text uppercase inter-700 text-transparent bg-gradient-to-t from-10% from-red-700 to-red-700/50">
                    It's true...
                </span>
            </div>
            <div class="inter-700 lg:text-3xl">
                24-YEAR-OLD MULTI-MILLIONAIRE GOES ROGUE <br class="max-lg:hidden"> AND REVEALS HIS SECRET "ONLINE INCOME <br class="max-lg:hidden"> SYSTEM" JUST TO PROVE ANYONE CAN MAKE <br class="max-lg:hidden"> THEIR FIRST $1,000 ONLINE WITH IT.
            </div>
            <div class="w-full aspect-video border border-blue-500 shadow-2xl shadow-blue-500/30 rounded-xl mb-12"></div>
        </div>
        <div class="min-h-full w-1/4 lg:w-1/6 bg-gradient-to-r from-10% from-transparent to-red-700/20"></div>
    </div>

    <div>
        <div class="bg-gradient-to-r from-black from-10% via-red-700 to-black to-90% h-[1px]"></div>
        <div class="my-4 lg:my-8 flex justify-center text-white">
            <div class="lg:w-full xl:w-3/5 grid grid-cols-1 lg:grid-cols-2 xl:grid-cols-3 gap-6 max-lg:gap-2 max-lg:text-sm whitespace-nowrap inter-300">
                <div class="w-min mx-auto flex justify-between gap-4 items-center">
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
                <div class="w-min lg:mx-auto flex justify-between gap-4 items-center">
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
                <div class="w-min mx-auto flex justify-between gap-4 lg:col-span-2 xl:col-span-1 items-center">
                    <div class="relative">
                        <svg class="w-6 h-6 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 11.917 9.724 16.5 19 7.5" />
                        </svg>
                        <svg class="absolute top-0 left-1.5 drop-shadow-xl w-6 h-6 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 11.917 9.724 16.5 19 7.5" />
                        </svg>
                    </div>
                    <div>WITHOUT PREVIOUS EXPERIENCE</div>
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
        <div class="py-8 w-11/12 lg:w-4/5 mx-auto lg:py-20 lg:flex lg:justify-between items-center gap-14">
            <div class="lg:w-2/5">
                <img class="h-full rounded-xl" src="{{asset('images/home5.jpeg')}}">
            </div>
            <div class="lg:w-3/5 py-8 h-min grid grid-cols-1 gap-6 text-white inter-300 text-sm lg:text-lg">
                <div class="text-2xl lg:text-5xl inter-700 tracking-wide leading-tight">
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

    <div class="py-8 lg:py-20 w-11/12 lg:w-5/6 mx-auto max-lg:grid max-lg:grid-cols-1 max-lg:gap-4 max-lg:h-min lg:flex lg:justify-between items-center">
        <div class="w-full h-full inter-400 text-white/50">
            <div class="inter-500 tracking-widest my-2">A STEP-BY-STEP PATH</div>
            <div class="h-min grid grid-cols-1 gap-8">
                <div class="text-white inter-700 text-3xl lg:text-4xl">
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
            <div class="text-sm lg:text-xl">
                <span class="uppercase inter-700 text-red-700">
                    MY OBJECTIVE HERE IS SIMPLE...
                </span>
            </div>
            <div class="inter-800 text-lg md:text-2xl lg:text-4xl">
                HELPING YOU UNF*CK YOUR LIFE BY <br> SHOWING YOU WHAT NOT TO DO... AND <br> THEN GIVING YOU 3 PATHS TO MAKE <br> YOUR FIRST $1,000 ONLINE IN RECORD <br> TIME.
            </div>
            <div class="flex justify-center"><img class="md:w-4/5 lg:w-1/2 aspect-video" src="{{asset('images/home1.webp')}}"></div>
        </div>
    </div>

    <div class="mt-12">
        <div class="text-white text-center h-min grid grid-cols-1 gap-4">
            <div class="text-sm lg:text-xl">
                <span class="uppercase inter-700 text-red-700">
                    THE BREAKDOWN
                </span>
            </div>
            <div class="inter-800 text-lg md:text-2xl lg:text-4xl">
                HERE'S THE BONUSES YOU GET WITH <br> DIGITAL LAUNCHPAD...
            </div>
        </div>
    </div>

    <div class="h-min grid grid-cols-1 lg:gap-24 gap-52 lg:mt-12 mt-52">
        @foreach($freePrograms as $program)
        <div class="h-min grid grid-cols-1 gap-24">
            <div class="mx-auto w-11/12 lg:w-3/5 p-0.5 shadow-2xl shadow-red-700/20 rounded-2xl bg-gradient-to-tl from-red-700 via-transparent to-red-700">
                <div class="size-full max-lg:grid max-lg:grid-cols-1 max-lg:gap-20 lg:flex lg:justify-between rounded-2xl px-6 sm:px-12 lg:py-10 sm:py-14 bg-black">
                    <div class="max-lg:-translate-y-1/2 lg:w-1/4 mx-auto lg:order-last flex justify-center items-center">
                        <img class="mx-auto lg:translate-x-1/2 lg:scale-x-125 lg:scale-y-150" src="{{asset('images/'. $program['image'])}}">
                    </div>
                    <div class="h-min max-lg:-translate-y-1/2 lg:w-3/4 grid grid-cols-1 gap-6">
                        <div class="max-lg:grid max-lg:grid-cols-1 max-lg:gap-4 lg:flex lg:justify-between lg:items-center">
                            <div class="text-white whitespace-nowrap items-center text-xl lg:text-3xl flex justify-between gap-3 w-min inter-800">
                                <div>{{$program['heading']}}</div>
                                <div>
                                    <svg class="w-6 h-6 text-blue-500 rounded-full" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                        <path fill-rule="evenodd" d="M12 2c-.791 0-1.55.314-2.11.874l-.893.893a.985.985 0 0 1-.696.288H7.04A2.984 2.984 0 0 0 4.055 7.04v1.262a.986.986 0 0 1-.288.696l-.893.893a2.984 2.984 0 0 0 0 4.22l.893.893a.985.985 0 0 1 .288.696v1.262a2.984 2.984 0 0 0 2.984 2.984h1.262c.261 0 .512.104.696.288l.893.893a2.984 2.984 0 0 0 4.22 0l.893-.893a.985.985 0 0 1 .696-.288h1.262a2.984 2.984 0 0 0 2.984-2.984V15.7c0-.261.104-.512.288-.696l.893-.893a2.984 2.984 0 0 0 0-4.22l-.893-.893a.985.985 0 0 1-.288-.696V7.04a2.984 2.984 0 0 0-2.984-2.984h-1.262a.985.985 0 0 1-.696-.288l-.893-.893A2.984 2.984 0 0 0 12 2Zm3.683 7.73a1 1 0 1 0-1.414-1.413l-4.253 4.253-1.277-1.277a1 1 0 0 0-1.415 1.414l1.985 1.984a1 1 0 0 0 1.414 0l4.96-4.96Z" clip-rule="evenodd" />
                                    </svg>
                                </div>
                            </div>
                            <div class="flex justify-start lg:justify-between items-center gap-4 lg:gap-2 lg:text-lg">
                                <div class="text-white inter-600 text-lg line-through">${{$program['price']}}</div>
                                <div class="text-white inter-700 bg-red-700 px-4 py-0 rounded-md -skew-x-12">FREE</div>
                            </div>
                        </div>
                        <div class="text-white/50 inter-300">
                            {{$program['description']}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>

    <div class="my-28">
        <div class="text-white  w-11/12 mx-auto text-center h-min grid grid-cols-1 gap-4">
            <div class="text-sm lg:text-xl">
                <span class="uppercase inter-700 text-red-700">
                    beta launch discount
                </span>
            </div>
            <div class="inter-800 uppercase text-lg md:text-2xl lg:text-4xl">
                Lock-in access at the discounted <br> price before official launch
            </div>
            <div class="text-white/50 inter-300 max-lg:text-xs">
                By joining with the monthly plan, you start as an Apprentice and unlock content monthly. When <br> joining with the yearly plan, you already join as a King and unlock instant access to all rewards you'd <br> have gotten in the first 12 months.
            </div>
        </div>
    </div>

    <div class="h-min grid grid-cols-1 gap-6">
        <div class="mx-auto px-8 py-3 border border-white/50 hover:border-red-700 transition-colors duration-300 cursor-pointer rounded-2xl text-sm lg:text-lg text-white inter-800 uppercase">
            Digital launchpad
        </div>
        <div>
            <div class="flex justify-center whitespace-nowrap">
                <div class="bg-gradient-to-b from-red-700 p-0.5 rounded-t-2xl w-min">
                    <div class="size-full bg-black text-center rounded-t-2xl px-4 lg:px-8 py-2 lg:py-4">
                        <div class="text-gray-500 text-sm lg:text-2xl line-through inter-500">From $100</div>
                        <div class="inter-600 text-xl lg:text-5xl bg-clip-text text-transparent bg-gradient-to-b from-50% from-white/90">
                            Only $37
                        </div>
                    </div>
                </div>
            </div>

            <div class="hover:-translate-y-3 transition-transform duration-300 bg-gradient-to-tr shadow-2xl shadow-red-700/30 rounded-3xl from-red-700 via-transparent to-red-700 p-0.5 w-11/12 lg:w-1/2 mx-auto ">
                <div class="size-full p-10 rounded-3xl h-min grid grid-cols-1 gap-3 bg-black">
                    <div class="max-lg:h-min max-lg:grid max-lg:grid-cols-1 max-lg:gap-4 lg:flex lg:justify-between">
                        <div><img class="w-16 mx-auto" src="{{asset('images/home4.png')}}"></div>
                        <div class="text-white p-4 max-lg:mx-auto max-lg:w-min rounded-full border border-red-700 text-xl inter-400"><span class="inter-700">$37</span>/Month</div>
                    </div>
                    <div class="h-min grid grid-cols-1 gap-6 text-white">
                        <div class="text-xl lg:text-3xl inter-800">Digital Launchpad</div>
                        <div class="text-white/50 text-sm tracking-wider inter-400">
                            Get instant access to Digital Launchpad + all the bonuses below
                        </div>
                        <div class="h-min grid grid-cols-1 lg:grid-cols-2 gap-4 lg:gap-2 max-lg:text-sm inter-500">
                            <div class="grid grid-cols-1 gap-4">
                                <div class="flex justify-between items-center w-min gap-4 whitespace-nowrap">
                                    <div class="bg-red-700/20 p-0.5 border-2 border-red-700 rounded-full">
                                        <svg class="w-3 h-3 lg:w-4 lg:h-4 text-red-700" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 11.917 9.724 16.5 19 7.5" />
                                        </svg>
                                    </div>
                                    <div>Iman's Crash Course <span class="text-green-500">($500 Value)</span></div>
                                </div>
                                <div class="flex justify-between items-center w-min gap-4 whitespace-nowrap">
                                    <div class="bg-red-700/20 p-0.5 border-2 border-red-700 rounded-full">
                                        <svg class="w-3 h-3 lg:w-4 lg:h-4 text-red-700" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 11.917 9.724 16.5 19 7.5" />
                                        </svg>
                                    </div>
                                    <div>Pen To Profit <span class="text-green-500">($1,500 Value)</span></div>
                                </div>
                                <div class="flex justify-between items-center w-min gap-4 whitespace-nowrap">
                                    <div class="bg-red-700/20 p-0.5 border-2 border-red-700 rounded-full">
                                        <svg class="w-3 h-3 lg:w-4 lg:h-4 text-red-700" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 11.917 9.724 16.5 19 7.5" />
                                        </svg>
                                    </div>
                                    <div>The Winning Store <span class="text-green-500">($1,500 Value)</span></div>
                                </div>
                                <div class="flex justify-between items-center w-min gap-4 whitespace-nowrap">
                                    <div class="bg-red-700/20 p-0.5 border-2 border-red-700 rounded-full">
                                        <svg class="w-3 h-3 lg:w-4 lg:h-4 text-red-700" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 11.917 9.724 16.5 19 7.5" />
                                        </svg>
                                    </div>
                                    <div>6-Figure Sales Rep <span class="text-green-500">($1,500 Value)</span></div>
                                </div>
                            </div>
                            <div class="grid grid-cols-1 gap-4">
                                <div class="flex justify-between items-center w-min gap-4 whitespace-nowrap">
                                    <div class="bg-red-700/20 p-0.5 border-2 border-red-700 rounded-full">
                                        <svg class="w-3 h-3 lg:w-4 lg:h-4 text-red-700" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 11.917 9.724 16.5 19 7.5" />
                                        </svg>
                                    </div>
                                    <div>Monthly Rewards <span class="text-green-500">($5,000+ Value)</span></div>
                                </div>
                                <div class="flex justify-between items-center w-min gap-4 whitespace-nowrap">
                                    <div class="bg-red-700/20 p-0.5 border-2 border-red-700 rounded-full">
                                        <svg class="w-3 h-3 lg:w-4 lg:h-4 text-red-700" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 11.917 9.724 16.5 19 7.5" />
                                        </svg>
                                    </div>
                                    <div>New Program Releases</div>
                                </div>
                                <div class="flex justify-between items-center w-min gap-4 whitespace-nowrap">
                                    <div class="bg-red-700/20 p-0.5 border-2 border-red-700 rounded-full">
                                        <svg class="w-3 h-3 lg:w-4 lg:h-4 text-red-700" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 11.917 9.724 16.5 19 7.5" />
                                        </svg>
                                    </div>
                                    <div>Leveling System</div>
                                </div>
                                <div class="flex justify-between items-center w-min gap-4 whitespace-nowrap">
                                    <div class="bg-red-700/20 p-0.5 border-2 border-red-700 rounded-full">
                                        <svg class="w-3 h-3 lg:w-4 lg:h-4 text-red-700" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
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

                        <div class="max-lg:grid max-lg:grid-cols-2 max-lg:gap-2 lg:flex lg:justify-between lg:items-center w-full lg:w-3/5 mx-auto">
                            <img class="h-4 max-lg:scale-75 mx-auto" src="{{asset('images/payment1.png')}}">
                            <img class="h-6 max-lg:scale-75 mx-auto" src="{{asset('images/payment2.png')}}">
                            <img class="h-6 max-lg:scale-75 mx-auto" src="{{asset('images/payment3.png')}}">
                            <img class="h-10 max-lg:scale-75 mx-auto" src="{{asset('images/payment4.png')}}">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div x-data="calculateHeight" class="mt-24 w-4/5 mx-auto">
        <div class="flex justify-between gap-10 lg:gap-32">
            <div class="w-full h-full max-lg:hidden">
                <div class="h-32"></div>
                <div :style="'height: ' + contenHeight1 + 'px'" class="w-full relative">
                    <div x-ref="stickyElement" class="sticky top-1/2 scale-y-125 w-min float-end relative uppercase text-4xl inter-700 text-right">
                        <div class="text-white/50">month</div>
                        <div class="text-white">Apprentice</div>
                        <div class="absolute -z-10 -top-14 -left-14 scale-150 text-red-700/50 flex justify-between w-min">
                            <div class=" inter-700 text-9xl">
                                1
                            </div>
                            <div class="pt-2">st</div>
                        </div>
                    </div>
                </div>
                <div class="h-48"></div>
                <div :style="'height: ' + contenHeight2 + 'px'" class="w-full relative">
                    <div x-ref="stickyElement" class="sticky top-1/2 scale-y-125 w-min float-end relative uppercase text-4xl inter-700 text-right">
                        <div class="text-white/50">months</div>
                        <div class="text-white">Craftsman</div>
                        <div class="absolute -z-10 -top-14 -left-14 scale-150 text-red-700/50 flex justify-between w-min">
                            <div class=" inter-700 text-9xl">
                                2
                            </div>
                        </div>
                    </div>
                </div>
                <div class="h-32"></div>
            </div>
            <div class="w-min h-full max-lg:px-2">
                <div class="w-0.5 h-full bg-white/50 rounded-full">
                    <div x-data="stickyScrollDesign" class="h-32 w-full relative">
                        <div :style="'height: ' + topElementHeight + 'px'" class="w-full absolute rounded-t-full top-0 bg-gradient-to-b from-black to-red-700"></div>
                        <div x-ref="stickyElement" class="sticky top-1/2"></div>
                    </div>
                    <div x-data="stickyScrollDesign" :style="'height: ' + contenHeight1 + 'px'" class="w-full relative">
                        <div :style="'height: ' + topElementHeight + 'px'" class="w-full absolute top-0 bg-red-700"></div>
                        <div x-ref="stickyElement" class="sticky top-1/2 -mx-8 lg:-mx-16">
                            <img src="{{asset('images/scrollDesign1.png')}}">
                        </div>
                    </div>
                    <div x-data="stickyScrollDesign" class="h-48 w-full relative">
                        <div :style="'height: ' + topElementHeight + 'px'" class="w-full absolute rounded-t-full top-0 bg-gradient-to-b from-black to-red-700"></div>
                        <div x-ref="stickyElement" class="sticky top-1/2"></div>
                    </div>
                    <div x-data="stickyScrollDesign" :style="'height: ' + contenHeight2 + 'px'" class="w-full relative">
                        <div :style="'height: ' + topElementHeight + 'px'" class="w-full absolute top-0 bg-red-700"></div>
                        <div x-ref="stickyElement" class="sticky top-1/2 -mx-8 lg:-mx-16">
                            <img src="{{asset('images/scrollDesign2.png')}}">
                        </div>
                    </div>
                    <div x-data="stickyScrollDesign" class="h-32 w-full relative">
                        <div :style="'height: ' + topElementHeight + 'px'" class="w-full absolute rounded-t-full top-0 bg-gradient-to-b from-black to-red-700"></div>
                        <div x-ref="stickyElement" class="sticky top-1/2"></div>
                    </div>
                </div>
            </div>
            <div class="w-full grid grid-cols-1 gap-48 h-min my-32 lg:my-48">
                <div x-ref="content1" class="h-min grid grid-cols-1 gap-4">
                    <div class="w-full">
                        <div class="flex justify-between uppercase text-xl lg:text-4xl inter-700 text-right">
                            <div class="text-red-700 flex justify-between w-min">
                                <div class="inter-700 text-9xl scale-x-75">
                                    1
                                </div>
                                <div class="pt-2">st</div>
                            </div>
                            <div class="mt-auto w-full text-left">
                                <div class="text-white/50">month</div>
                                <div class="text-white">Apprentice</div>
                            </div>
                        </div>
                    </div>

                    <div class="lg:text-2xl text-white inter-800">You start off as an Apprentice...</div>
                    <div class="grid grid-rows-3 grid-flow-col gap-2">
                        <img src="{{asset('/images/home6.webp')}}">
                        <img src="{{asset('/images/home7.webp')}}">
                        <img src="{{asset('/images/home8.webp')}}">
                        <img src="{{asset('/images/home9.webp')}}">
                        <img src="{{asset('/images/home10.webp')}}">
                        <img src="{{asset('/images/home11.webp')}}">
                    </div>
                    <div class="text-white text-sm lg:text-xl inter-300">
                        These are the programs you <span class="inter-800">unlock straight away</span> when joining Digital Launchpad, as well as the community. That's where you're going to get guidance from coaches, as well as from other students who are further ahead of you in their journey.
                    </div>
                    <div class="h-20"></div>
                </div>



                <div x-ref="content2" class="h-min w-full grid grid-cols-1 gap-4">
                    <div class="w-full">
                        <div class="flex justify-between uppercase text-xl lg:text-4xl inter-700 text-right">
                            <div class="text-red-700 flex justify-between w-min">
                                <div class="inter-700 text-9xl scale-x-75">
                                    2
                                </div>
                            </div>
                            <div class="mt-auto w-full text-left">
                                <div class="text-white/50">months</div>
                                <div class="text-white">Craftsman</div>
                            </div>
                        </div>
                    </div>

                    <div class="lg:text-2xl text-white inter-800">Get Access To My 8-Figure Network</div>
                    <div class="grid grid-rows-1 grid-flow-col gap-2">
                        <img src="{{asset('/images/home12.webp')}}">
                        <img src="{{asset('/images/home13.webp')}}">
                    </div>
                    <div class="text-white text-sm lg:text-xl inter-300">
                        On your 2nd Month, you'll get access to my own network. Every single month we'll host <span class="inter-800">LIVE Calls with people from my Network.</span> Imagine being on the same call as 8 and 9-figure serial entrepreneurs. If you think about it, each one of them has made a $1,000 dozens of thousands of times. So they know a thing or two about making money, and can help you get there too.
                    </div>
                    <div class="h-20"></div>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-white h-min grid grid-cols-1 gap-6 text-center max-lg:my-32 pt-12 lg:pt-32 pb-6">
        <div class="lg:text-4xl inter-800 uppercase tracking-wider">Why Am I Offering You Such <br> Opportunity For So Cheap?</div>
        <div class="max-lg:w-11/12 mx-auto flex justify-center">
            <img src="{{asset('images/home14.webp')}}">
        </div>
        <div class="w-11/12 lg:w-2/5 text-left mx-auto h-min grid grid-cols-1 gap-4 inter-400 lg:text-2xl">
            <div>Here's the thing…</div>
            <div>The <span class="inter-800">more people you help, the more money you make.</span></div>
        </div>
    </div>

    <div class="my-28 h-min grid grid-cols-1 gap-12">
        <div class="text-white text-center h-min grid grid-cols-1 gap-4">
            <div class="text-sm lg:text-xl">
                <span class="uppercase inter-700 text-red-700">
                    frequently asked questions
                </span>
            </div>
            <div class="inter-800 uppercase text-lg md:text-2xl lg:text-4xl">
                Get Your questions answered
            </div>
        </div>
        <div x-data="{show:'generel'}" class="lg:w-1/2 w-full h-min mx-auto grid grid-cols-1 gap-4">
            <div class="flex justify-around lg:w-min w-11/12 mx-auto gap-2 lg:gap-8 uppercase max-lg:text-sm text-white inter-500">
                @foreach($faq as $category => $questions)
                <div @click="show = '{{$category}}'" :class="show == '{{$category}}' ? 'border-white/50' : 'border-white/10'" class="max-lg:w-full text-center border-b-2 cursor-pointer lg:px-12 lg:py-3 hover:border-red-700 transition-colors duration-200">{{$category}}</div>
                @endforeach
            </div>
            <div class="text-white max-lg: w-11/12 mx-auto">
                @foreach($faq as $category => $questions)
                <div x-show="show == '{{$category}}'"
                    x-transition:enter="transition ease-out duration-500"
                    x-transition:enter-start="opacity-0 scale-90"
                    x-transition:enter-end="opacity-100 scale-100"
                    class="border border-white/50 rounded-2xl lg:rounded-3xl">
                    <div class="h-min relative overflow-hidden max-lg:py-5 lg:p-10">
                        <div class="absolute -z-10 -top-96 left-0 w-full flex justify-center">
                            <div class="rounded-full blur-3xl w-full lg:w-3/4 aspect-square bg-red-700"></div>
                        </div>
                        <div class="h-min grid grid-cols-1 lg:gap-3.5">
                            @foreach($questions as $question => $answer)
                            <div x-data="{showAnswer: false}" @click="showAnswer = !showAnswer" class="p-8 lg:p-10 cursor-pointer h-min grid grid-cols-1 gap-4">
                                <div class="flex justify-between gap-4">
                                    <div class="text-sm lg:text-xl inter-700">{{$question}}</div>
                                    <div class="relative">
                                        <svg class="w-6 h-6 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14" />
                                        </svg>
                                        <svg :class="showAnswer ? 'rotate-0':'rotate-90'" class="w-6 h-6 absolute transition-transform duration-500 top-0 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14" />
                                        </svg>
                                    </div>
                                </div>
                                <div>
                                    <div x-show="showAnswer" x-collapse.duration.500ms>
                                        <div class="text-white/50 max-lg:text-xs inter-500 h-min grid grid-cols-1 gap-4">
                                            @foreach($answer as $paragraph)
                                            <div>{{$paragraph}}</div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @if(!$loop->last)
                            <div class="px-8 lg:px-10">
                                <div class="w-full border-t border-full bg-white/50"></div>
                            </div>
                            @endif
                            @endforeach
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>

    <div class="h-min mb-12 grid grid-cols-1 gap-6 text-white/50 text-xs inter-400 text-center">
        <div class="mx-auto"><img class="h-3 lg:h-5 opacity-90" src="{{asset('/images/home15.webp')}}"></div>
        <div class="w-min whitespace-nowrap flex justify-between items-center gap-2 mx-auto">
            <div>Contact Us</div>
            <div class="h-full w-0 border border-white/50"></div>
            <div>Privacy Policy</div>
            <div class="h-full w-0 border border-white/50"></div>
            <div>Terms & Conditions</div>
        </div>
        <div>
            This site is not a part of the Facebook website or Facebook Inc. Additionally, This site is NOT endorsed by Facebook in any way. FACEBOOK is a trademark of <br> FACEBOOK, Inc.
        </div>
        <div>©2023 educate.io. All Rights Reserved.</div>
    </div>
</div>