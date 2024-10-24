<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion Client</title>
</head>
<body>
    <h1>Connexion Client</h1>
    
    @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('client.login') }}" method="POST">
        @csrf
        <div>
            <label for="login">Email ou Téléphone :</label>
            <input type="text" name="login" required>
        </div>
        <div>
            <label for="password">Mot de passe :</label>
            <input type="password" name="password" required>
        </div>
        <div>
            <button type="submit">Se connecter</button>
        </div>
    </form>
</body>
</html>
