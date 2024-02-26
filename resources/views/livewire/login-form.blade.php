 {{-- Notice `onclick` is HTML --}}

 <form wire:submit.prevent="submit">
     @csrf

     <div>
         <x-mary-input id="email" label="email" type="email" wire:model="email" :value="old('email')" required autofocus
             autocomplete="username" />
     </div>

     <div class="mt-4">
         <x-mary-input id="password" label="password" type="password" wire:model="password" required
             autocomplete="current-password" />
     </div>

     <div class="block mt-4">
         <label for="remember_me" class="flex items-center">
             <x-checkbox id="remember_me" name="remember" />
             <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
         </label>
     </div>

     <div class="flex items-center justify-end mt-4" wire:loading.remove>
         @if (Route::has('password.request'))
             <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                 href="{{ route('password.request') }}">
                 {{ __('Forgot your password?') }}
             </a>
         @endif
         <x-button class="ms-4 bg-indigo-500" wire:loading.attr="disabled">
             {{ __('Log in') }}
         </x-button>
     </div>
     <div wire:loading class="p-10">
         <x-button type="button" class="bg-indigo-500 ms-4" disabled>
             <x-spinner />
         </x-button>
     </div>
 </form>
