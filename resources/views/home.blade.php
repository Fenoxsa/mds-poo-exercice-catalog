<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ config('app.name') }}</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <style>
        .container {
            margin: auto;
            max-width: 900px;

        }

        .wrapper {
            display: grid;
            grid-template-columns: 1fr 1fr 1fr;
        }

        .img_film{
            border-radius: 10px;
            box-shadow: 1px 5px 10px black  ;
            margin:10px;
            width: 300px;
            height: 442px;
            object-fit: cover;
        }
        .titre_home{
            text-align: center;
            color:white;
            font-weight: 400;
            font-family: Arial, Helvetica, sans-serif;
        }
        .menu-aleatoire{
            grid-gap: 50px;
            justify-content: center;
        }
        a{
            text-decoration: none;
            color: white;
        }
        a:hover{
            color:wheat;
        }
        .Menu{
            display: flex;
            color:white;
            grid-gap: 50px;
            justify-content: center;
            font-size: 35px;
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;            
            padding-top: 70px;
            padding-bottom: 50px;
        }
    </style>
</head>
<body style="background-color:#282828">

    <div class="container">
        <!-- <h1>{{ config('app.name') }}</h1> -->
        <div class="Menu">
    <a class="menu-aleatoire" href="/movies/random">Films aléatoires</a>
    <a class="menu-films" href="/movies">Tous les films</a>
</div>

        <div class="wrapper">
            @foreach ($movies as $movie)
            <div >
                <a style="text-decoration:none;" href="/movies/{{ $movie->id }}">
                    <img class="img_film" src="{{ $movie->poster }}" alt="{{ $movie->primaryTitle }}">
                    <p class="titre_home" style="text-decoration:none;"> {{$movie->primaryTitle}}</p>
                </a>
            </div>
            @endforeach
        </div>
    </div>
</body>
</html>
