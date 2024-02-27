<x-customer-layout>
    <x-mary-tabs selected="users-tab">
        <x-mary-tab name="users-tab" label="Services" icon="o-scissors">
            @foreach ($categories as $category)
                <x-mary-card title="{{ $category->name }}" subtitle="Additional description" separator progress-indicator>
                    <x-mary-dropdown label="What we offer" class="btn-warning" right>
                        @foreach ($category->service as $service)
                            <x-mary-menu-item title="{{ $service->name }}"
                                href="{{ route('customer.service', ['id' => $service->id]) }}" @click.stop=""
                                wire:navigate />
                        @endforeach
                    </x-mary-dropdown>
                </x-mary-card>
            @endforeach
        </x-mary-tab>
        <x-mary-tab name="tricks-tab" label="Staff" icon="o-users">
            <div>Staff</div>
        </x-mary-tab>
    </x-mary-tabs>
</x-customer-layout>
