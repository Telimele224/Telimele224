@extends('en_tete.entete_administrateurs')

@section('contenu')
    {{-- <div class="row"> --}}
    <P class="btn btn-primary">LISTE DES TEMOIGNAGE PUBLIER</P>
    <div class="row">
        @foreach ($temoignages as $k => $temoignage)
            <div class="col-md-6 col-xl-4">
                @if($temoignage->publier)<!-- Modification de col-md-6 col-xl-4 à col-md-4 -->
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">{{$temoignage->user->name}} </h3>
                            <div class="card-options">
                                <label class="custom-switch m-0">
                                        <a href="{{route('admin.temoignage.edit' , $temoignage)}}">
                                </label>
                            </div>
                        </div>
                        <div class="card-body">
                            <p>{{strlen($temoignage->contenu) > 100 ? substr($temoignage->contenu, 0, 100) . '  ...' : $temoignage->contenu }}</p>
                            <div class="avatar-list">
                            <span class="avatar rounded-circle bg-danger" data-bs-toggle="modal"
                                data-bs-target="#delete"><i class="bi bi-trash fs-15 "></i>
                            </span>
                            </div>
                        </div>
                    </div>
                @endif
            </div>
        @endforeach
    </div>
    {{-- </div> --}}
{{$temoignages->links()}}
@endsection
