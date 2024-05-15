<?php

use Livewire\Volt\Component;

new class extends Component {
}; ?>

<div>
    <aside class="relative hidden w-64 h-screen shadow-xl bg-sidebar sm:block">
        <div class="p-6">
            <div class="flex items-center shrink-0">
                <a href="{{ route('dashboard') }}" wire:navigate>
                    <x-application-logo class="block w-auto text-gray-800 fill-current h-9" />
                </a>
            </div>
        </div>
        <nav class="pt-3 text-base font-semibold text-white">
            <a href="{{route('dashboard')}}" class="flex items-center py-4 pl-6 text-white opacity-75 hover:opacity-100 nav-item {{request()->routeIs('dashboard')?'active-nav-link':''}}" wire:navigate>
                <i class="mr-3 fas fa-tachometer-alt"></i>
                Dashboard
            </a>
            <a href="{{route('category')}}" class="flex items-center py-4 pl-6 text-white opacity-75 hover:opacity-100 nav-item {{request()->routeIs('dashboard')?'active-nav-link':''}}" wire:navigate>
                <i class="mr-3 fas fa-tachometer-alt"></i>
                Category
            </a>
            <a href="{{route('profile')}}" class="flex items-center py-4 pl-6 text-white nav-item {{request()->routeIs('profile')?'active-nav-link':''}}" wire:navigate>
                <i class="mr-3 fas fa-sticky-note"></i>
                Profile
            </a>
            <a href="tables.html" class="flex items-center py-4 pl-6 text-white opacity-75 hover:opacity-100 nav-item">
                <i class="mr-3 fas fa-table"></i>
                Tables
            </a>
            <a href="forms.html" class="flex items-center py-4 pl-6 text-white opacity-75 hover:opacity-100 nav-item">
                <i class="mr-3 fas fa-align-left"></i>
                Forms
            </a>
            <a href="tabs.html" class="flex items-center py-4 pl-6 text-white opacity-75 hover:opacity-100 nav-item">
                <i class="mr-3 fas fa-tablet-alt"></i>
                Tabbed Content
            </a>
            <a href="calendar.html" class="flex items-center py-4 pl-6 text-white opacity-75 hover:opacity-100 nav-item">
                <i class="mr-3 fas fa-calendar"></i>
                Calendar
            </a>
        </nav>
    </aside>
</div>
