<section>
    <div class="col-12 col-md-8 col-lg-6">
        <h4 class="fs-4 text-dark text-opacity-75">
            Atualize sua senha
        </h4>

        <p class="text-muted mb-4">
            Certifique-se de que sua conta esteja usando uma senha longa e aleatória para permanecer segura.
        </p>
        </header>

        <form method="post" action="{{ route('password.update') }}">
            @csrf
            @method('put')

            <div class="mb-3">
                <x-input-label for="current_password" :value="__('Senha atual')" class="form-label" />
                <x-text-input id="current_password" name="current_password" type="password" class="form-control"
                    autocomplete="current-password" />
                <x-input-error :messages="$errors->updatePassword->get('current_password')" class="mt-2" />
            </div>

            <div class="mb-3">
                <x-input-label for="password" :value="__('Nova senha')" class="form-label" />
                <x-text-input id="password" name="password" type="password" class="form-control"
                    autocomplete="new-password" />
                <x-input-error :messages="$errors->updatePassword->get('password')" class="mt-2" />
            </div>

            <div class="mb-3">
                <x-input-label for=" password_confirmation" :value="__('Confirme a senha')" class="form-label" />
                <x-text-input id="password_confirmation" name="password_confirmation" type="password"
                    class="form-control" autocomplete="new-password" />
                <x-input-error :messages="$errors->updatePassword->get('password_confirmation')" class="mt-2" />
            </div>

            <div class="">
                <x-primary-button class="btn btn-dark">{{ __('Salvar') }}</x-primary-button>

                @if (session('status') === 'password-updated')
                <p x-data="{ show: true }" x-show="show" x-transition x-init="setTimeout(() => show = false, 2000)"
                    class="fs-5 text-success">
                    {{ __('Saved.') }}
                </p>
                @endif
            </div>
        </form>
</section>