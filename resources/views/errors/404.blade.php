<!-- resources/views/errors/404.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page non trouvée</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            color: #333;
            text-align: center;
            padding: 50px;
        }
        h1 {
            font-size: 48px;
        }
        p {
            font-size: 18px;
        }
        a {
            color: #007bff;
            text-decoration: none;
        }
        .error-details {
            margin-top: 20px;
            padding: 10px;
            background-color: #fff3cd;
            color: #856404;
            border: 1px solid #ffeeba;
            display: inline-block;
            text-align: left;
            max-width: 600px;
            margin: auto;
        }
        .error-details pre {
            margin: 0;
        }
    </style>
</head>
<body>
    <h1>Page non trouvée</h1>
    <p>Désolé, la page que vous recherchez n'existe pas.</p>
    <a href="{{ url('/') }}">Retour à l'accueil</a>

    {{-- @if(config('app.debug'))
        <div class="error-details">
            <h2>Détails de l'erreur :</h2>
            <p>{{ $exception->getMessage() }}</p>
            <pre>{{ $exception->getTraceAsString() }}</pre>
        </div>
    @endif --}}
</body>
</html>
