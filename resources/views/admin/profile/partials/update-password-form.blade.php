<section>
    <div class="main-container container-fluid">
        <div class="card custom-card">
            <div class=" card-body p-5">
                <header>
                    <h2 class="text-lg font-medium">
                        {{ __('Mettre à jour le mot de passe') }}
                    </h2>

                    <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
                        {{ __('Assurez-vous que votre compte utilise un mot de passe long et aléatoire pour rester en sécurité. ') }}
                    </p>
                </header>

                <p class="fs-12 text-muted">Le mot de passe requierd  <b class="text-danger">8 lettre composé<sup>*</sup></b>,avec des caractère <b class="text-danger">Une lettre majuscule<sup>*</sup></b> et <b class="text-danger">Un caractère Spécial<sup>*</sup></b> avec un chiffre minimum.</p>
                <form method="post" action="{{ route('password.update') }}" class="mt-6 space-y-6">
                    @csrf
                    @method('put')

                    <div>

                         <label for="update_password_current_password" :value="__('Mot de passe actuele')"  class="form-label">Mot de passe actuele : <span class="text-danger ms-1">*</span></label>
                        <x-text-input id="update_password_current_password" name="current_password" type="password" class="" autocomplete="current-password" style="background-color:#fff !important ; color:black !important"/>
                        <x-input-error :messages="$errors->updatePassword->get('current_password')" class="mt-2" />
                    </div>

                    <div>
                        <label for="update_password_password" :value="__('Nouveau mot de passe')"  class="form-label">Nouveau mot de passe : <span class="text-danger ms-1">*</span></label>
                        <x-text-input id="update_password_password" name="password" type="password" class="class" autocomplete="new-password" style="background-color:#fff !important ; color:black !important"/>
                        <x-input-error :messages="$errors->updatePassword->get('password')" class="mt-2" />
                    </div>

                    <div >
                        <label for="update_password_password_confirmation" :value="__('Confirmez le mot de passe')"  class="form-label">Confirmez le mot de passe: <span class="text-danger ms-1">*</span></label>
                        <x-text-input id="update_password_password_confirmation" name="password_confirmation" type="password" class="class" autocomplete="new-password"  style="background-color:#fff !important ; color:black !important" />
                        <x-input-error :messages="$errors->updatePassword->get('password_confirmation')" class="mt-2" />
                    </div>

                    <div class="flex items-center gap-4">
                        <x-primary-button class="btn btn-primary">{{ __('Mis à jour') }}</x-primary-button>

                        @if (session('status') === 'password-updated')
                            <p
                                x-data="{ show: true }"
                                x-show="show"
                                x-transition
                                x-init="setTimeout(() => show = false, 2000)"
                                class="text-sm text-gray-600 dark:text-gray-400"
                            >{{ __('Enregistrer.') }}</p>
                        @endif
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
