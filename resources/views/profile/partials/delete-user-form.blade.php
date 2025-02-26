<section class="space-y-6">
    <header>
        <h4 class="fs-4 text-dark text-opacity-75">
            Excluir Conta
        </h4>

        <p class="text-muted mb-4">
            Depois que sua conta for excluída, todos os seus recursos e dados serão excluídos permanentemente. Antes
            de
            excluir sua conta, baixe quaisquer dados ou informações que você deseja reter.
        </p>
    </header>

    <x-danger-button x-data="" data-bs-toggle="modal" data-bs-target="#staticModalDeleteUser">
        {{ __('Delete Account') }}</x-danger-button>

    <x-modal name="confirm-user-deletion" :show="$errors->userDeletion->isNotEmpty()" focusable>
        <div class="modal-content">

            <div class="modal-header">
                <h2 class="modal-title fs-5">
                    Tem certeza de que deseja excluir sua conta?
                </h2>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

            </div>

            <form method="post" action="{{ route('profile.destroy') }}" class="p-6">
                @csrf
                @method('delete')

                <div class="modal-body">
                    <p class="mt-1">
                        Depois que sua conta for excluída, todos os seus recursos e dados serão excluídos
                        permanentemente.
                        Digite sua senha para confirmar que deseja excluir permanentemente sua conta.
                    </p>

                    <x-input-label for="password" value="{{ __('Password') }}" class="form-label" />

                    <x-text-input id="password" name="password" type="password" class="form-control"
                        placeholder="{{ __('Password') }}" />

                    <x-input-error :messages="$errors->userDeletion->get('password')" class="mt-2" />
                </div>

                <div class="modal-footer">
                    <x-secondary-button data-bs-dismiss="modal" class="btn">
                        {{ __('Cancel') }}
                    </x-secondary-button>

                    <x-danger-button class="ml-3">
                        {{ __('Delete Account') }}
                    </x-danger-button>
                </div>
            </form>

        </div>
    </x-modal>
</section>