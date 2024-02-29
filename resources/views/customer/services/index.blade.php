<x-customer-layout>
    <x-mary-tabs selected="users-tab">
        <x-mary-tab name="users-tab" label="Services" icon="o-scissors">
            @foreach ($categories as $category)
                <div class="p-4">
                    <details tabindex="0" class=" collapse collapse-arrow border border-base-300 bg-base-200">
                        <summary class="collapse-title text-xl font-medium">{{ $category->name }}</summary>
                        <div class="collapse-content">
                            @foreach ($category->service as $service)
                                <div class="p-2">
                                    <div class="card card-side bg-base-100 shadow-xl">
                                        <div class="card-body">
                                            <h2 class="card-title">{{ $service->name }}</h2>
                                            <p>{{ $service->description }}</p>
                                            <div class="px-2 py-2">
                                                <div class="flex -mx-2">
                                                    <div class="w-1/3 px-2">
                                                        <div class="bg-gray-100 rounded">Kids
                                                            £{{ $service->child_price }}
                                                        </div>
                                                    </div>
                                                    <div class="w-1/3 px-2">
                                                        <div class="bg-gray-100 rounded">Teens
                                                            £{{ $service->teen_price }}</div>
                                                    </div>
                                                    <div class="w-1/3 px-2">
                                                        <div class="bg-gray-100 rounded">Adults
                                                            £{{ $service->adult_price }}</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div
                                                class="card-actions
                                                            justify-end">
                                                <a class="btn btn-primary" href="/services/{{ $service->id }}"
                                                    wire:navigate>Book</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </details>
                </div>
            @endforeach
        </x-mary-tab>
        <x-mary-tab name="tricks-tab" label="Staff" icon="o-users">
            <div>Staff</div>
        </x-mary-tab>
    </x-mary-tabs>
</x-customer-layout>
