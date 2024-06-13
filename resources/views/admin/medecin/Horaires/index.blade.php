@extends('en_tete.entete_administrateurs')

@section('contenu')
<div class="row">
   

    <div class="bgnc-10 br-sm p-sm-30 p-10">
        <div class="card-header">
            <span class="heading-five mb-sm-30 mb-3 text-uppercase">La liste des horaires des médecins</span>
        </div>

        <div class="table-responsive">
            <table class="table table-primary table-striped table-bordered">
                <thead class="bg-primary" >
                    <tr class="text-uppercase">
                        <th style="color: #ffff">N°</th>
                        <th style="color: #ffff">Médecin</th>
                        <th style="color: #ffff" >Lundi</th>
                        <th style="color: #ffff" >Mardi</th>
                        <th style="color: #ffff">Mercredi</th>
                        <th style="color: #ffff">Jeudi</th>
                        <th style="color: #ffff">Vendredi</th>
                        <th style="color: #ffff">Samedi</th>
                        <th style="color: #ffff">Dimanche</th>
                        <th style="color: #ffff">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($horaires as $index => $horaire)
                    <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $horaire->medecin->user->nom }} {{ $horaire->medecin->user->prenom }}</td>
                        @foreach(['lundi', 'mardi', 'mercredi', 'jeudi', 'vendredi', 'samedi', 'dimanche'] as $jour)
                            <td>
                                @if($horaire->{$jour.'_debut'} && $horaire->{$jour.'_fin'})
                                    {{ date('H:i', strtotime($horaire->{$jour.'_debut'})) }} - {{ date('H:i', strtotime($horaire->{$jour.'_fin'})) }}
                                @endif
                            </td>
                        @endforeach
                        <td class="p-10">
                            <span class="d-center gap-3">
                                <a href="{{ route('admin.horaires.edit', ['horaire' => $horaire]) }}">
                                    <i class="edit-icon text-info tpc-2 fa-solid fa-pen-to-square icon-bg"></i>
                                </a>

                                <a href="">
                                <form method="POST" action="{{ route('admin.horaires.destroy', ['horaire' => $horaire->id]) }}" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-link text-danger" onclick="return confirm('Êtes-vous sûr de vouloir supprimer cet horaire?')">
                                        <i class="delete-icon tpc-2 fa-solid fa-trash-can icon-bg"></i>
                                    </button>
                                </form>
                                </a>
                            </span>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
