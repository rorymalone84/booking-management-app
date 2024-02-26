<x-mary-modal id="loginModal" title="Login to your account">
    <x-validation-errors class="mb-4" />
    <div wire:loading>
        Logging in...
    </div>
    <livewire-login-form />
</x-mary-modal>
