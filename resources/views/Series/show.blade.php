<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body style="margin-left:150px; margin-right:150px; background-color:#282828">
    <div>
        <h1 style="text-align:center"><span class="film">Film : </span><span class="film2">{{$series->primaryTitle}}</span></h1>
        <h2 style="text-align:center"><span class="titre" >Titre :</span><span class="titre2"> {{$series->originalTitle}}</span></h2>
        <div class="affiche">
            <img src="{{$series->poster}}" alt="{{$series->primaryTitle}}">
        </div>
        <p class="Year" style="text-align: center; font-family: Arial, Helvetica, sans-serif;"><span>{{$series->startYear}} </span></a>
        <p style="text-align:center" ><span class="rate">{{$series->averageRating}}/10</span><span class="nb_avis"> ({{$series->numVotes}})</p></span>
    
        <p class="description">Description :</p><p><span class="description2"> {{$series->plot}}</span></p>
    </div>
    <a href="javascript:history.back()" class="btn_accueil"> Retour</a>
</body>
</html>
<style>
 .affiche{
    text-align: center;
 }
.affiche img{
    border-radius: 10px;
    box-shadow: 1px 5px 10px black;
}
.year{
    text-align: center;
    font-family: Arial, Helvetica, sans-serif;
}
 h1{
    color: white;
 }
 h2{
    color: white;
 }
 p{
    color:white;
 }
 .rate{
    text-align: center;
    font-family: Arial, Helvetica, sans-serif;
    font-size: 20px;
 }
 .nb_avis{
    font-size: 14px;
 }
    .description{
        font-weight:bold; 
        font-size:24px;
        font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
    }
    .description2{
        font-family: Arial, Helvetica, sans-serif;
        letter-spacing: 1px;
    }

    .titre{
        
        font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
    }
    .titre2{
        font-weight: 400;
        font-family: Arial, Helvetica, sans-serif;
    }

    .film{
        font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
    }
    .film2{
        font-weight: 400;
        font-family: Arial, Helvetica, sans-serif;
    }

    .btn_accueil{
        text-decoration: none;
        color: white;
        font-size: 20px;
        font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
        text-decoration: underline;
    }
    .btn_accueil:hover{
        color:wheat;
    }
</style>