<section>
    <div class="col-12 col-md-8 col-lg-6">
        <h4 class="fs-4 text-dark text-opacity-75">
            Informações do perfil
        </h4>

        <p class="text-muted mb-4">
            Atualize as informações do perfil e o endereço de e-mail da sua conta.
        </p>
        </header>

        <form id="send-verification" method="post" action="{{ route('verification.send') }}">
            @csrf
        </form>

        <form method="post" action="{{ route('profile.update') }}" class="mb-3">
            @csrf
            @method('patch')

            <div class="mb-3">
                <x-input-label for="name" :value="__('Nome')" class="form-label" />
                <x-text-input id="name" name="name" type="text" class="form-control" :value="old('name', $user->name)"
                    required autofocus autocomplete="name" />
                <x-input-error class="mt-2" :messages="$errors->get('name')" />
            </div>

            <div class="mb-4">
                <x-input-label for="email" :value="__('Email')" class="form-label" />
                <x-text-input id="email" name="email" type="email" class="form-control"
                    :value="old('email', $user->email)" required autocomplete="username" />
                <x-input-error class="mt-2" :messages="$errors->get('email')" />

                @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())
                <div>
                    <p class="text-sm mt-2 text-gray-800">
                        {{ __('Your email address is unverified.') }}

                        <button form="send-verification" class="btn btn-dark">
                            {{ __('Click here to re-send the verification email.') }}
                        </button>
                    </p>

                    @if (session('status') === 'verification-link-sent')
                    <p class="mt-2 font-medium text-sm text-green-600">
                        {{ __('A new verification link has been sent to your email address.') }}
                    </p>
                    @endif
                </div>
                @endif
            </div>

            <div class="flex items-center gap-4">
                <x-primary-button class="btn btn-dark">{{ __('Salvar') }}</x-primary-button>

                @if (session('status') === 'profile-updated')
                <p x-data="{ show: true }" x-show="show" x-transition x-init="setTimeout(() => show = false, 2000)"
                    class="fs-5 text-success">{{ __('Saved.') }}</p>
                @endif
            </div>
        </form>
</section>





<!-- <div class="container py-5">
    <div class="row">
        <div class="col-12 col-md-8 col-lg-6">
            <h4 class="mb-1">Profile Information</h4>
            <p class="text-muted mb-4">Update your account's profile information and email address.</p>

            <form>
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" id="name" value="João Henrique ferreira">
                </div>

                <div class="mb-4">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" value="joaof6418@gmail.com">
                </div>

                <button type="submit" class="btn btn-dark">Save</button>
            </form>
        </div>
    </div>
</div> -->