<div>
    @if ($isOpen)
        @include('livewire.users.create')
    @endif
    <button wire:click="openModal" class="btn btn-primary mb-3">Add Product</button>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Gender</th>
                <th>Phone</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->gender }}</td>
                    <td>{{ $user->phone }}</td>
                    <td>
                        <button wire:click="edit({{ $user->id }})" class="btn btn-primary btn-sm">Edit</button>
                        <button wire:click="delete({{ $user->id }})" class="btn btn-danger btn-sm">Delete</button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
