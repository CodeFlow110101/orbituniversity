<?php

use Illuminate\Support\Facades\Auth;

use function Livewire\Volt\{state, mount};

state(['path']);
mount(function () {
    $this->path = request()->path();
    $isAuth = Auth::check();

    if (session()->has('show-toastr')) {
        $this->js('setTimeout(() => {Livewire.dispatch("show-toastr");}, 100);');
    }

    if ($isAuth && in_array($this->path, ['sign-in'])) {
        $this->redirectRoute('dashboard', navigate: true);
    } elseif (!$isAuth && in_array($this->path, ['dashboard', 'program', 'setting', 'admin', 'add-program'])) {
        $this->redirectRoute('sign-in', navigate: true);
    }
});

?>

<div>
    @if($path == '/')
    <livewire:home />
    @elseif(in_array($path,['dashboard','program','setting','admin','add-program']))
    <livewire:web-app.toastr-popup />
    <div class="flex justify-between gap-8">
        <div class="w-1/4">
            <livewire:web-app.side-bar :path="$path" />
        </div>
        <div class="w-full h-screen py-8 pr-8">
            @if($path == 'dashboard')
            <livewire:web-app.dashboard />
            @elseif($path == 'program')
            <livewire:web-app.program />
            @elseif($path == 'setting')
            <livewire:web-app.setting.setting />
            @elseif($path == 'admin')
            <livewire:web-app.admin.admin />
            @elseif($path == 'add-program')
            <livewire:web-app.admin.add-program />
            @endif
        </div>
    </div>
    @elseif($path == 'sign-in')
    <div class="h-screen">
        <livewire:web-app.sign-in />
    </div>
    @endif
</div>