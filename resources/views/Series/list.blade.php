<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="background-color:#282828">
<div class="Menu">
    <a class="menu-aleatoire" href="/series/random">Série aléatoire</a>
    <a class="menu-films" href="/series">Toutes les séries</a>
    <a class="menu-films" href="/movies">Tous les films</a>
</div>
<div class="trier">
    <a href="/series?orderBy=startYear&order=asc">Trier par Date</a>
    <a href="/series?orderBy=averageRating&order=desc">Trier par Note</a>
</div>
<div class="wrapper" >
            @foreach ($series as $serie)
            <div style="padding-top:70px">
                <a style="text-decoration:none;" href="/series/{{ $serie->id }}">
                    <img class="img_film" src="{{ $serie->poster }}" alt="{{ $serie->primaryTitle }}">
                    <p class="titre_home" style="text-decoration:none;"> {{$serie->primaryTitle}}</p>
                </a>
            </div>
            @endforeach
        </div>
        <div class="navigation">
            <span class="link"><a>{{$series->links()}}</a></span>
        </div>
</body>
</html>
<style>
    .trier{
        display: flex;
        justify-content: center;
        padding-top: 50px;
        grid-gap: 25px;
        font-family: Arial, Helvetica, sans-serif;
    }
    .Menu{
        display: flex;
        color:white;
        grid-gap: 50px;
        justify-content: center;
        font-size: 35px;
    }
    a {
        text-decoration: none;
        color: white;
    }
    a:hover{
        color:wheat;
    }
    

    svg{
        height: 14px;
    } 

    .navigation{
        color:white;
        text-decoration: none !important;
        text-align: center;
        padding-top: 50px;
        font-family: Arial, Helvetica, sans-serif;
    }

  
    .wrapper{

        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(400px, 1fr));
        text-align: center;
    }
    .img_film{
        border-radius: 10px;
        object-fit: cover;
        box-shadow: 1px 5px 10px black;
        width: 300px;
        height: 444px;
    }
    .titre_home{
        color: white;
        text-align: center;
        font-family: Arial, Helvetica, sans-serif;
        font-size: 20px;
    }

    body{
        margin:0px;
        margin-left: 150px;
        margin-right: 150px;
        padding-bottom: 100px;
        padding-top: 100px;
    }
</style>