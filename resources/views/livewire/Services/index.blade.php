<div>
    @if ($isOpen)
        @include('livewire.services.create')
    @endif
    <x-mary-input label="What service category are you looking for?" wire:model.live="search" id="search"
        placeholder="Search for a service provided">
    </x-mary-input>
    <x-mary-button wire:click="openModal" class="btn btn-primary my-4">Add Service</x-mary-button>
    <x-mary-table :rows="$services" :headers="$headers" link="/admin/services/{id}" striped with-pagination />
</div>
