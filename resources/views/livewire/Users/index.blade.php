<div>
    @if ($isOpen)
        @include('livewire.users.create')
    @endif
    <x-mary-input label="Who are you looking for?" wire:model.live="search" id="search"
        placeholder="Search for a customer, employee or admin user">
    </x-mary-input>
    <x-mary-button wire:click="openModal" class="btn btn-primary my-4">Add User</x-mary-button>
    <x-mary-table :rows="$users" :headers="$headers" link="/admin/users/{id}" striped with-pagination />
</div>
