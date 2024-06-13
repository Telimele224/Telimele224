@extends('en_tete.entete_administrateurs')

@section('contenu')
<div class="container">
   <div class="card">
        <div class="e-table px-5 pb-5">
        <div class="table-responsive table-lg">
            <div class="card-title card-header text-uppercase">
                <h4>HISTORIQUE DE CONNEXION DES ADMINS</h4>
            </div>
            <table class="table border-top table-bordered mb-0 text-nowra">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Administrateur</th>
                        <th>Action</th>
                        <th>Date </th>
                        <th>Heure</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($logs as $log)
                    <tr>
                        <td>{{ $log->id }}</td>
                        <td>{{ $log->user->name }}</td>
                        <td>{{ $log->action }}</td>
                        <td>{{ $log->created_at->format('d/m/Y') }}</td> 
                        <td>{{ $log->created_at->format('H:i:s') }}</td>                 
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
   </div>

    <!-- <table class="table border-top table-bordered mb-0 text-nowra">
        <thead>
            <tr>
                <th>ID</th>
                <th>Administrateur</th>
                <th>Action</th>
                <th>Date </th>
                <th>Heure</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($logs as $log)
            <tr>
                <td>{{ $log->id }}</td>
                <td>{{ $log->user->name }}</td>
                <td>{{ $log->action }}</td>
                <td>{{ $log->created_at->format('d/m/Y') }}</td> 
                <td>{{ $log->created_at->format('H:i:s') }}</td>                 
            </tr>
            @endforeach
        </tbody>
    </table> -->

    {{ $logs->links() }}
</div>
@endsection
