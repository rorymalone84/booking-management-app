<div>
    @if ($isOpen)
        @include('livewire.categories.create')
    @endif
    <x-mary-input label="What service category are you looking for?" wire:model.live="search" id="search"
        placeholder="Search for a Category of service">
    </x-mary-input>
    <x-mary-button wire:click="openModal" class="btn btn-primary my-4">Add Category</x-mary-button>
    <x-mary-table :rows="$categories" :headers="$headers" link="/admin/categories/{id}" striped with-pagination />
</div>
