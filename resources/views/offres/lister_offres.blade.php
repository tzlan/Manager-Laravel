<!doctype html>
<html lang="en">
<head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <link rel="stylesheet" href= ="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.9.1/css/bulma.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>Université Nanterre Stage</title>
</head>
<body>

<!-- Optional JavaScript; choose one of the two! -->

<!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

<!-- Option 2: jQuery, Popper.js, and Bootstrap JS
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
-->




<nav class="navbar navbar-expand-lg navbar-dark .bg-danger " style="background-color: #d41010;">

    <a class="navbar-brand" href="/">Université Paris Nanterre</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="lister_offres">Stages <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="lister_students">Etudiants en recherche<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active"><a class="nav-link" href="/deconnexion">Deconnexion  <span class="sr-only">(current)</span></a></li>
        </ul>
    </div>



</nav>
<br><br><br><br>


<div style="text-align: center;"><h1> Les offres </h1>
    <br><br><br><br>

    <div class="container">
        <table  class=" table table-striped">
            <thead>
            <tr>
                <th scope="col">Reférence offre</th>
                <th scope="col">Nom</th>
                <th scope="col">Description</th>
                <th scope="col">Debut</th>
                <th scope="col">Fin</th>
                <th scope="col">Reférence entreprise</th>
                @if(auth()->user()->entreprise_id)
                    <th scope="col">Modifier </th>
                    <th scope="col">Supprimer</th>
                @endif

                @if(auth()->user()->students_id)
                <th scope="col">Postuler</th>
                @endif
            </tr>
            </thead>
            <tbody>


            @foreach($offres as $offre)
                <tr>
                    <td>{{$offre->id}}</td>
                    <td>{{$offre->name}}</td>
                    <td>{{$offre->description}}</td>
                    <td>{{$offre->start}}</td>
                    <td>{{$offre->end}}</td>
                    <td>{{$offre->entreprise_id}}</td>


                    @if(auth()->user()->entreprise_id)
                        <td><a href="{{url('offres/modifier_offres/'.$offre->id)}}" type="button" class="btn btn-warning">Modifier</a></td>
                        <td><a href="{{url('offres/lister_offres/'.$offre->id)}}" type="button" class="btn btn-danger">Supprimer</a></td>
                    @endif
                        <td>
                        @if(auth()->user()->students_id)
                                <form action="{{route('postuler_offres',[
                                            'student_id'=>auth()->user()->students_id,
                                            'offre_id'=>$offre->id,
                                            'entreprise_id'=>$offre->entreprise_id]
                                            )}}"

                                      method="POST">
                                    @csrf
                                    <button  type="submit" class="btn btn-success">Postuler</button>
                                </form>
                        @endif
                        </td>


                </tr>
        @endforeach

    </div>
</div>
