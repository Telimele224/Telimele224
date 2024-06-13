<!DOCTYPE html>
<html lang="zxx" dir="ltr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Hôpital Régional de Labe</title>
    <link href="https://up2client.com/envato/digital-invoice-2.0/main-file/assets/images/logo/Fevicon.ico" rel="icon">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('pdfassets/css/custom.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('pdfassets/css/media-query.css') }}">
    <link href="{{ asset('assets/build/assets/iconfonts/icons.css') }}" rel="stylesheet">
</head>
<body>
    <!-- Invoice Wrap Start here -->
    <p class="title">LISTES DES MEDEICAMENTS</p>
    <table class="table-info">
        <tr>
            <th>N°</th>
            <th>Nom du medicament</th>
            <th>Posologie</th>
            <th>Mode d'utilisation</th>
        </tr>
        @foreach($ordonances as $k => $ordonance)
            <tr>
                <td>{{$k + 1 }}</td>
                <td>{{ $ordonance->name }}</td>
                <td>{{ $ordonance->posologie }}</td>
                <td>{{ $ordonance->mode_utilisation }}</td>
            </tr>
        @endforeach
    </table>
    <!-- Invoice Wrap End here -->
    <style>
        .table-info {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
            font-size: 18px;
            text-align: left;
        }

        .table-info th, .table-info td {
            border: 1px solid #dddddd;
            padding: 8px;
        }

        .table-info th {
            background-color: #f2f2f2;
        }

        .title {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 10px;
        }
    </style>
</body>
</html>
