<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Perfil') }}
        </h2>
    </x-slot>

    <div class="py-5">
        <div class="d-flex flex-column gap-5 mx-auto" style='max-width: 1296px'>
            <div class="p-4 bg-white shadow rounded-4">
                <div>
                    @include('profile.partials.update-profile-information-form')
                </div>
            </div>

            <div class="p-4 bg-white shadow rounded-4">
                <div>
                    @include('profile.partials.update-password-form')
                </div>
            </div>

            <div class="p-4 bg-white shadow rounded-4">
                <div>
                    @include('profile.partials.delete-user-form')
                </div>
            </div>
        </div>
    </div>
</x-app-layout>