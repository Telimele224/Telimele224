@extends('en_tete.entete_patient')

@section('contenu')
        <div class="page-title">

        </div>
        <div class="card">
            <div class="row">
                <div class="col-md-9">
                    <div class="card-title  card-header text-uppercase p-2">
                         <h4>Mes Témoignage</h4>
                    </div>
                </div>
                    <div class="col-md-3 mt-2">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><span><a href="{{route('patients.temoignage.create')}}" class="btn btn-primary"> <i class="fe fe-plus"></i>  Ajouter | Temoignage</a></span></li>
                        </ol>
                    </div>
            </div>

        </div>

        <div class="d-flex flex-row justify-content-start gap-2">
                @foreach ($temoignages as $k => $temoignage)
                    @if (Auth::user()->id === $temoignage->user_id)
                        <div class="card d-flex" style="width: 18rem;">
                            <div class="card-body">
                            {{-- <h5 class="card-title">{{$k+1}} </h5> --}}
                            <h6 class="card-subtitle mb-2 text-body-secondary">Contenu</h6>
                            <p class="card-text">{{$temoignage->contenu}} </p>
                            <div class="d-flex  flex-row justify-content-start gap-1">
                                <a href="{{route('patients.temoignage.edit' , $temoignage)}} " class="btn btn-primary py-1 p-2"><i class="fa fa-pencil-square"></i></a>
                                <form action="{{route('patients.temoignage.destroy' , $temoignage)}}" method="post">
                                    @csrf
                                    @method('delete')
                                    <button class="btn btn-danger py-1 p-2"><i class="fa fa-trash"></i></button>
                                </form>
                            </div>
                            </div>
                        </div>
                    @endif
                @endforeach
        </div>
@endsection
