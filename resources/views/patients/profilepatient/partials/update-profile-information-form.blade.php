
<section>

    <form id="send-verification" method="post" action="{{ route('verification.send') }}">
        @csrf
    </form>

    <div class="card">
        <div class="card-header">
            <div class="card-title">
                <h6 class="mt-3">Information de Connexion</h5>
                <p class="mt-1 text-sm text-gray-600 dark:text-gray-400 small">Mettez à jour les informations de connexion le user name et l'adresse e-mail de votre compte.</p>
            </div>
        </div>

        <div class="card-body p-0">
            <div class="tab-content">
                <form method="post" action="{{ route('profilepatient.edit') }}" class="mt-6 space-y-6">
                    @csrf
                    @method('patch')
                    <div class="tab-pane fs-13 p-5 active show" id="personal-info" role="tabpanel">
                        <div class="row gy-4 mb-4">
                            <div class="col-xl-6">
                                <label for="name" :value="__('Name')"  class="form-label">Name : <span class="text-danger ms-1">*</span></label>
                                <x-text-input id="name" name="name" type="text" class=" form-control " :value="old('name', $user->name)" required autofocus autocomplete="name" style="background-color:#fff !important ; color:black !important"/>
                                <x-input-error class="mt-2" :messages="$errors->get('name')" />
                            </div>
                            <div class="col-xl-6">
                                <label for="email" :value="__('Email')"  class="form-label">Email : <span class="text-danger ms-1">*</span></label>
                                <x-text-input id="email" name="email" type="email" class=" form-control" :value="old('email', $user->email)" required autocomplete="username" style="background-color:#fff !important ; color:black !important" />
                                 <x-input-error class="mt-2" :messages="$errors->get('email')" />
                                @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())
                                    <div>
                                        <p class="text-lg mt-3 ">
                                            {{ __('Votre adresse e-mail n\'est pas vérifiée.') }}

                                            <button form="send-verification" class=" text-sm btn btn-primary">
                                                {{ __('Cliquez ici pour renvoyer l\'e-mail de vérification.') }}
                                            </button>
                                        </p>

                                        @if (session('status') === 'verification-link-sent')
                                            <p class="mt-3 font-medium text-lg">
                                                {{ __('Un nouveau lien de vérification a été envoyé à votre adresse e-mail.') }}
                                            </p>
                                        @endif
                                    </div>
                                @endif
                            </div>
                        </div>
                        <div class="card-title">
                            <h6 class="mt-3">Information Personnel</h5>
                            <p class="mt-1 text-sm text-gray-600 dark:text-gray-400 small">Mettez à jour vos information personnelles de votre compte.</p>
                        </div>
                        <div class="row gy-4 mb-4">
                            <div class="col-xl-6">
                                <label  for="nom" :value="__('Nom')" class="form-label">Nom  : <span class="text-danger ms-1">*</span></label>
                                <x-text-input id="nom" name="nom" type="text" class=" form-control" :value="old('nom', $user->nom)" required autofocus autocomplete="nom"   style="background-color:#fff !important ; color:black !important"/>
                                <x-input-error class="mt-2" :messages="$errors->get('nom')" />
                            </div>
                            <div class="col-xl-6">
                                <label for="prenom" :value="__('Prenom')"  class="form-label">Prénom : <span class="text-danger ms-1">*</span></label>
                                <x-text-input id="prenom" name="prenom" type="text" class=" form-control" :value="old('prenom', $user->prenom)" required autofocus autocomplete="prenom"  style="background-color:#fff !important ; color:black !important" />
                                <x-input-error class="mt-2" :messages="$errors->get('prenom')" />
                            </div>
                        </div>

                        <div class="row gy-4 mb-4">
                            <div class="col-xl-6">
                                <label  for="age" :value="__('Age')"  class="form-label">Age  : <span class="text-danger ms-1">*</span></label>
                                <x-text-input id="age" name="age" type="text" class=" form-control" :value="old('age', $user->age)" required autofocus autocomplete="age"   style="background-color:#fff !important ; color:black !important"/>
                                <x-input-error class="mt-2" :messages="$errors->get('age')" />
                            </div>
                            <div class="col-xl-6">
                                <label for="genre" :value="__('Genre')" class="form-label">Genre : <span class="text-danger ms-1">*</span></label>
                                <x-text-input id="genre" name="genre" type="text" class=" form-control" :value="old('genre', $user->genre)" required autofocus autocomplete="genre"  style="background-color:#fff !important ; color:black !important" />
                                <x-input-error class="mt-2" :messages="$errors->get('genre')" />
                            </div>
                        </div>

                        <div class="row gy-4 mb-4">
                            <div class="col-xl-6">
                                <label  for="adresse" :value="__('Adresse')" class="form-label">Adresse  : <span class="text-danger ms-1">*</span></label>
                                <x-text-input id="adresse" name="adresse" type="text" class=" form-control" :value="old('adresse', $user->adresse)" required autofocus autocomplete="adresse"  style="background-color:#fff !important ; color:black !important" />
                                <x-input-error class="mt-2" :messages="$errors->get('adresse')" />                            </div>
                            <div class="col-xl-6">
                                <label for="telephone" :value="__('Telephone')"  class="form-label">Téléphone : <span class="text-danger ms-1">*</span></label>
                                <x-text-input id="telephone" name="telephone" type="text" class=" form-control" :value="old('telephone', $user->telephone)" required autofocus autocomplete="telephone"   style="background-color:#fff !important ; color:black !important"/>
                                <x-input-error class="mt-2" :messages="$errors->get('telephone')" />
                            </div>

                        </div>

                        @if(Auth::user()->role === 'patient')
                            {{-- @foreach($patients as $patient) --}}
                                <div class="row gy-4 mb-4">
                                    <div class="col-xl-6">
                                        <label for="ville" :value="__('Ville')" class="form-label">Ville  : <span class="text-danger ms-1">*</span></label>
                                        <x-text-input id="ville" name="ville" type="text" class="form-control" :value="old('ville', $user->patient->ville)" required autofocus autocomplete="ville"   style="background-color:#fff !important ; color:black !important"/>
                                        <x-input-error class="mt-2" :messages="$errors->get('ville')" />                            </div>
                                    <div class="col-xl-6">
                                        <label for="poids" :value="__('Poids')" class="form-label">Poids : <span class="text-danger ms-1">*</span></label>
                                        <x-text-input id="poids" name="poids" type="text" class=" form-control" :value="old('poids', $user->patient->poids)" required autofocus autocomplete="poids"  style="background-color:#fff !important ; color:black !important" />
                                        <x-input-error class="mt-2" :messages="$errors->get('poids')" />
                                    </div>
                                </div>
                            {{-- @endforeach --}}
                        @endif
                <div class="card-footer">
                    <div class="float-start">
                        <x-primary-button class="btn btn-primary">{{ __('Mise à jour') }}</x-primary-button>
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>
</section>
