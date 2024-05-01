<?php

use App\Models\category;
use Livewire\Volt\Component;

new class extends Component {
    public $name = '';
    public function save()
    {
        $validated = $this->validate([ 
            'name' => 'required|min:3',
        ]);
        category::create($validated);
        return redirect()->to('/category');
    }
}; ?>

<div>
    <div class="flex flex-wrap">
        <div class="w-full pr-0 my-6 lg:w-1/2 lg:pr-2">
            <p class="flex items-center pb-6 text-xl">
                <i class="mr-3 fas fa-list"></i> Category
            </p>
            <div class="leading-loose">
                <form class="p-10 bg-white rounded " wire:submit="save">
                    <div class="">
                        <label class="block text-sm text-gray-600" for="name">Name</label>
                        <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" type="text" placeholder="Category Name" aria-label="Name" wire:model.blur="name">
                        <span class="text-red-500" >@error('name') {{ $message }} @enderror</span >
                    </div>
                    <div class="mt-6">
                        <button class="px-4 py-1 font-light tracking-wider text-white bg-gray-900 rounded" type="submit">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
