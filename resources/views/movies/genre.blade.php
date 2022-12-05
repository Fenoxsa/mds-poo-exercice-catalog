<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Genre</title>
</head>
<body>
    <h1>Tous les genres de films</h1>
<div class="list_genre">
    <ul>
        @foreach ($genre as $genre)
<<<<<<< HEAD
        <li><a href="/movies?genre={{$genre->label}}">{{$genre->label}}</a></li>
=======
        <li><a href="#">{{$genre['label']}}</a></li>
>>>>>>> 29e211f93028ce3b24f9aa628176dc93133c7290
        @endforeach
    </ul>
    <a href="javascript:history.back()" class="btn_accueil"> Retour</a>
</div>
</body>
</html>