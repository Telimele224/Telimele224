@extends('en_tete.entete_administrateurs')

@section('title', $service->exists ? "MODIFIER UN SERVICE" : "AJOUTER UN SERVICE")

@section('contenu')
<link href="https://cdn.jsdelivr.net/npm/tom-select/dist/css/tom-select.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/tom-select/dist/js/tom-select.complete.min.js"></script>

<div class="container mt-5">
    <div class="col-xl-12">
        <div class="card custom-card">
            <div class="card-header">
                <div class="card-title">
                    <h4 class="mt-3">@yield('title')</h4>
                </div>
            </div>
            @if(Session::has('success'))
            <div class="alert alert-success" style="height: 50px; margin-bottom: 15px;">
                {{Session::get('success')}}
            </div>
            @elseif(Session::has('error'))
            <div class="alert alert-danger" style="height: 50px; margin-bottom: 15px;">
                {{Session::get('error')}}
            </div>
            @endif
            <div class="card-body">
                <div class="card-area gap-3">
                    <form action="{{ $service->exists ? route('admin.service.update', $service) : route('admin.service.store') }}" method="post" class="vstack gap-2" enctype="multipart/form-data" class="row g-4 needs-validation" novalidate="">
                        @csrf
                        @method($service->exists ? 'put': 'post')
                        <div class="row">
                            <div class="mb-20 form-group col-sm-6 mb-2">
                                <label for="nom" class="mb-2 fw-500">Nom du service<span class="text-danger ms-1">*</span></label>
                                <div class="input-group">
                                    <span class="input-group-text" id="addon-wrapping"><i class="mdi mdi-account-arrow-left"></i></span>
                                    <input type="text" class="form-control @error('nom') is-invalid @enderror" name="nom" placeholder="Entrer le nom du service" aria-label="nom" aria-describedby="addon-wrapping" value="{{ old('nom', $service->nom) }}">
                                    <div class="invalid-feedback">@error('nom') {{$message}} @enderror </div>
                                </div>
                            </div>

                            <!-- Champs pour les symptômes -->
                            <div class="mb-20 form-group col-sm-6 mb-2">
                                <label for="symptom_id" class="mb-10 fw-semibold">Symptômes (optionnel)</label>
                                <div class="select-container">
                                    <select name="symptom_id[]" id="symptom_id" multiple>
                                                @foreach($symptoms as $key => $symptome)
                                            <option value="{{ $key }}">{{ $symptome }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <!-- Champs pour les maux -->
                            <div class="mb-20 form-group col-sm-6 mb-2">
                                <label for="illness_id" class="mb-10 fw-semibold">Maux (optionnel)</label>
                                <div class="select-container">
                                    <select name="illness_id[]" id="illness_id" multiple>
                                         @foreach($illnesses as $key => $illnesse)
                                            <option value="{{ $key }}">{{ $illnesse }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <!-- Champs pour les maladies -->
                            <div class="mb-20 form-group col-sm-6 mb-2">
                                <label for="disease_id" class="mb-10 fw-semibold">Maladies (optionnel)</label>
                                <div class="select-container">
                                    <select name="disease_id[]" id="disease_id" multiple>
                                            @foreach($diseases as $key => $disease)
                                            <option value="{{ $key }}">{{ $disease }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-6 position-relative">
                                <label for="photo" class="mb-2 fw-500">Photo du Service<span class="text-danger ms-1">*</span></label>
                                <div class="input-group">
                                    <span class="input-group-text" id="addon-wrapping"><i class="mdi mdi-account-convert"></i></span>
                                    <input type="file" class="form-control @error('photo') is-invalid @enderror" name="photo" placeholder="selectionner une photo" aria-label="photo" aria-describedby="addon-wrapping">
                                    <div class="invalid-feedback">@error('photo') {{$message}} @enderror </div>
                                </div>
                            </div>
                            <div class="col-md-6 position-relative">
                                <label for="avatar" class="mb-2 fw-500">Logo du Service<span class="text-danger ms-1">*</span></label>
                                <div class="input-group">
                                    <span class="input-group-text" id="addon-wrapping"><i class="mdi mdi-account-convert"></i></span>
                                    <input type="file" class="form-control @error('avatar') is-invalid @enderror" name="avatar" placeholder="selectionner une avatar" aria-label="avatar" aria-describedby="addon-wrapping">
                                    <div class="invalid-feedback">@error('avatar') {{$message}} @enderror </div>
                                </div>
                            </div>

                            <div class="form-group mb-0">
                                <label for="description" class="mb-2 fw-500">Description du service<span class="text-danger ms-1">*</span></label>
                                <div class="input-group">
                                    <span class="input-group-text" id="addon-wrapping"><i class="mdi mdi-account"></i></span>
                                    <textarea cols="30" rows="4" class="form-control @error('description') is-invalid @enderror" name="description" placeholder="Votre description" aria-label="description" aria-describedby="addon-wrapping">{{ old('description', $service->description ) }}</textarea>
                                    <div class="invalid-feedback">@error('description') {{$message}} @enderror </div>
                                </div>
                            </div>

                            <div class="col-md-12 mt-3">
                                <button class="btn btn-primary" type="submit">
                                    @if($service->exists)
                                    Modifier
                                    @else
                                    Enregistrer
                                    @endif
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        new TomSelect("#symptom_id", {
            plugins: ['remove_button'],
            create: false,
            sortField: {
                field: "text",
                direction: "asc"
            }
        });

        new TomSelect("#illness_id", {
            plugins: ['remove_button'],
            create: false,
            sortField: {
                field: "text",
                direction: "asc"
            }
        });

        new TomSelect("#disease_id", {
            plugins: ['remove_button'],
            create: false,
            sortField: {
                field: "text",
                direction: "asc"
            }
        });
    });
</script>

@endsection
