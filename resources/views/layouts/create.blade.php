<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Bootstrap-projet</title>
</head>
<body>
    @extends('master')
		
@section('numeroTelephone', 'saisir un numero!')

@section('nomPrenom')

<div class="container">
    <div class="row">
        <div class="col-1"></div>
    <div class="col-6">
<form method="POST" action="{{route('clients.store')}}" >
    @csrf
    
    <h1>Enregistrez un Client</h1>
    <div class="mb-3">
        <label for="numeroTelephone" class="form-label">Numéro-telephone:</label>
        <input class="form-control" type="integer" name="numeroTelephone" value="" placeholder="+225 0798298059">
        @error('numeroTelephone')
        <div style="color:red">{{ $message }}</div>
        @enderror
    </div>
    <div class="mb-3">
        <label for="nomPrenom" class="form-label">Nom&prenom:</label>
        <input class="form-control" type="text" name="nomPrenom" value="" placeholder="nomComplet">
        @error('nomPrenom')
        <div style="color:red">{{ $message }}</div>
        @enderror
    </div>

    <div class="mb-3">
        <button type="submit" class="btn btn-primary">Enregistrer</button>
    </div>
</form>
</div>
</div>
@endsection

</body>
</html>