<?php

use Illuminate\Support\Facades\Auth;

use function Livewire\Volt\{state, mount};

state(['path', 'id']);
mount(function () {
    $this->path = request()->path();
    $isAuth = Auth::check();

    if (session()->has('show-toastr')) {
        $this->js('setTimeout(() => {Livewire.dispatch("show-toastr");}, 100);');
    }

    if ($isAuth && in_array($this->path, ['sign-in', 'sign-up'])) {
        $this->redirectRoute('dashboard', navigate: true);
    } elseif (!$isAuth && in_array($this->path, ['dashboard', 'program', 'setting', 'admin', 'add-program', 'video', 'add-video'])) {
        $this->redirectRoute('sign-in', navigate: true);
    }

    if (session()->has('id')) {
        $this->id = session()->get('id');
    }

    if (in_array($this->path, ['video', 'add-video']) && !$this->id) {
        $this->redirectRoute('program', navigate: true);
    }
});

?>

<div>
    @if($path == '/')
    <livewire:home />
    @elseif(in_array($path,['dashboard','program','setting','admin','add-program','video','add-video']))
    <livewire:web-app.toastr-popup />
    <div class="flex justify-between gap-8">
        <div class="w-1/4">
            <livewire:web-app.side-bar :path="$path" />
        </div>
        <div class="w-full h-dvh py-8 pr-8">
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
            @elseif($path == 'video')
            <livewire:web-app.video :id="$id" />
            @elseif($path == 'add-video')
            <livewire:web-app.admin.add-video :id="$id" />
            @endif
        </div>
    </div>
    @elseif(in_array($path , ['sign-in' , 'sign-up']))
    <div class="h-dvh">
        @if($path == 'sign-in')
        <livewire:web-app.sign-in />
        @elseif($path == 'sign-up')
        <livewire:web-app.sign-up />
        @endif
    </div>
    @endif
</div>