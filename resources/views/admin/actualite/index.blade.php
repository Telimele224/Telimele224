@extends('en_tete.entete_administrateurs')


@section('contenu')
<div class="row">
    <div class="col-xl-12 col-md-12 col-sm-12">
        <div class="card">
            <div class="row card-header ">
                <div class="page-header d-flex align-items-center justify-content-between border-bottom mb-4 mt-0">
                    <h1 class="page-title">Nos actualite</h1>
                    <div>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><span><a href="{{route('admin.actualite.create')}}" class="btn btn-primary"> <i class="fe fe-plus"></i>  Ajouter | actualite</a></span></li>
                        </ol>
                    </div>
                </div>
            </div>

                <div class="card">
                    <div class="table-responsive table-lg">
                            <table class="table border-top table-bordered mb-0 text-nowrap ">
                                <thead >
                                    <tr>
                                        <th>Numero</th>
                                        <th>Titre</th>
                                        <th>Contenu</th>
                                        <th>Date de publication</th>
                                        <th>Photo</th>
                                        <th class="text-end">Action</th>
                                    </tr>
                                </thead>
                                @foreach ($actualites as $k => $actualite)
                                <tbody>

                                    <tr>
                                        <td>{{$k+1}}</td>
                                        <td>{{$actualite->titre}}</td>
                                        <td>{{ Illuminate\Support\Str::limit($actualite->contenu, 12) }}</td>
                                        <td><h6 class="card-text"><small class="text-muted"> Publier le : {{$actualite->created_at->format('d-m-Y')}}</small></h6></td>
                                        <td>
                                            <img class="card-img-top rounded-circle" src="{{ asset('storage/'.$actualite->avatar) }}" alt="Image" style="max-width: 50px; max-height: 50px;">
                                        </td>

                                        <td>
                                            <div class="avatar-list text-end">
                                                <span class="btn btn-sm btn-icon btn-info-light rounded-circle m-2"><a href="{{route('admin.actualite.show', $actualite)}}"><i class="fe fe-eye"></i></a></span>
                                                <span class="btn btn-sm btn-icon btn-info-light rounded-circle"><a href="{{route('admin.actualite.edit', $actualite)}}" class="text-decoration-none text-default"><i class="fa fa-edit"></i></a></span>
                                               
                                            </div>
                                        </td>
                                    </tr>

                                </tbody>

                                @endforeach
                            </table>
                        </div>
                </div>

        </div>
    </div>


</div>

{{$actualites->links()}}
@endsection
