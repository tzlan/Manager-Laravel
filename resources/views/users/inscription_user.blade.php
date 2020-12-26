

    <!doctype html>
<html lang="fr">
<head>
<body>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Bootstrap CSS -->
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<title>Université Nanterre Stage</title>


<nav class="navbar navbar-expand-lg navbar-dark .bg-danger " style="background-color: #de1818;">

    <a class="navbar-brand" href="http://127.0.0.1:8000/">Université Paris Nanterre</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">

            <li class="nav-item active">
                <a class="nav-link" href="index_students.blade.php">Etudiants <span class="sr-only">(current)</span></a>
            </li>

            <li class="nav-item active">
                <a class="nav-link" href="index_entreprise.blade.php">Entreprises <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="index_tuteurs.blade.php">Tuteurs <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="index_jury.blade.php">Jury <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="index_users.blade.php">👨🏻‍💻<span class="sr-only">(current)</span></a>
            </li>





        </ul>
    </div>


</nav>



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

<br>
<br>
<br>
<div class="container p-3 my-3 border ">

    <h1>Formulaire d'inscription  </h1>
    <p>Faites attention a retenir votre mot de passe</p>
    <br>
    <br>
    <br>

    <form action="/inscription_user" method="post">

        {{csrf_field()}}


        <small  class="form-text text-muted">ID</small>
        <p> <input type="text" name="id" placeholder="Id Utilisateur " ></p>
        @if($errors->has('id'))
            <p>{{$errors->first('id')}}</p>
        @endif

        <small  class="form-text text-muted">Nom</small>
        <p>   <input type="text" name="name" placeholder="Votre nom "></p>
        @if($errors->has('name'))
            <p>{{$errors->first('name')}}</p>
        @endif

        <small  class="form-text text-muted">Prenom</small>
        <p>   <input type="text" name="first_name" placeholder="Votre prenom "></p>
        @if($errors->has('first_name'))
            <p>{{$errors->first('first_name')}}</p>
        @endif

        <small  class="form-text text-muted">Téléphone</small>
        <p>   <input type="text" name="tel" placeholder="Votre telephone"></p>
        @if($errors->has('tel'))
            <p>{{$errors->first('tel')}}</p>
        @endif

        <small  class="form-text text-muted">Mail</small>
        <p>   <input type="mail" name="email" placeholder="Votre mail"></p>
        @if($errors->has('email'))
            <p>{{$errors->first('email')}}</p>
        @endif

        <small  class="form-text text-muted">Mot de passe</small>
        <p>   <input type="password" name="password" placeholder="Mot de passe"></p>
        @if($errors->has('password'))
            <p>{{$errors->first('password')}}</p>
        @endif

        <small  class="form-text text-muted">ID entreprise</small>
        <p>   <input type="text" name="entreprise_id" placeholder="Id entreprise"></p>

        <small  class="form-text text-muted">ID jury</small>
        <p>   <input type="text" name="jury_id" placeholder="Id jury"></p>

        <small  class="form-text text-muted">Id tuteur</small>
        <p>   <input type="text" name="tuteur_id" placeholder="Id tuteur"></p>

        <small  class="form-text text-muted">Id etudiant</small>
        <p>   <input type="text" name="students_id" placeholder="Votre id etudiant"></p>



        <input type="submit" value="Inscription" >
    </form>
</div>






{{--<div class="container p-3 my-3 border ">--}}

{{--<form action="/inscription_user" method="post">--}}
{{--    {{csrf_field()}}--}}
{{--    <h1>Formulaire d'inscription  </h1>--}}
{{--    <br>--}}
{{--    <br>--}}
{{--    <br>--}}

{{--    <div class="form-row">--}}
{{--        <div class="form-group col-md-6">--}}
{{--            <label for="inputEmail4">Identifiant utilisateur</label>--}}
{{--            <input type="text" class="form-control" name="id" placeholder="id">--}}
{{--            @if($errors->has('id'))--}}
{{--                <p>{{$errors->first('id')}}</p>--}}
{{--            @endif--}}
{{--        </div>--}}

{{--        <div class="form-group col-md-6">--}}
{{--            <label for="inputPassword4">Mail</label>--}}
{{--            <input type="email" class="form-control" name="mail" placeholder="mail">--}}
{{--            @if($errors->has('mail'))--}}
{{--                <p>{{$errors->first('mail')}}</p>--}}
{{--            @endif--}}
{{--        </div>--}}
{{--    </div>--}}
{{--    <div class="form-row">--}}
{{--        <div class="form-group col-md-6">--}}
{{--            <label for="inputEmail4">Nom</label>--}}
{{--            <input type="text" class="form-control" name="name" placeholder="Sebastien">--}}
{{--            @if($errors->has('name'))--}}
{{--                <p>{{$errors->first('name')}}</p>--}}
{{--            @endif--}}

{{--        </div>--}}
{{--        <div class="form-group col-md-6">--}}
{{--            <label for="inputPassword4">Prenom</label>--}}
{{--            <input type="text" class="form-control" name="first_name" placeholder="Patrick">--}}
{{--            @if($errors->has('first_name'))--}}
{{--                <p>{{$errors->first('first_name')}}</p>--}}
{{--            @endif--}}
{{--        </div>--}}
{{--    </div>--}}


{{--    <div class="form-group">--}}
{{--        <label for="inputAddress">Mot de passe</label>--}}
{{--        <input type="password" class="form-control" name="password" placeholder="password ">--}}
{{--        @if($errors->has('password'))--}}
{{--            <p>{{$errors->first('password')}}</p>--}}
{{--        @endif--}}
{{--    </div>--}}
{{--    <div class="form-group">--}}
{{--        <label for="inputAddress2">Telephone </label>--}}
{{--        <input type="tel" class="form-control" name="tel" placeholder="01.40.30.56.59">--}}
{{--        @if($errors->has('tel'))--}}
{{--            <p>{{$errors->first('tel')}}</p>--}}
{{--        @endif--}}
{{--    </div>--}}
{{--    <div class="form-row">--}}
{{--        <div class="form-group col-md-6">--}}
{{--            <label for="inputEmail4">Identifiant Student</label>--}}
{{--            <input type="tel" class="form-control" name="students_id" placeholder="258ET">--}}

{{--        </div>--}}
{{--        <div class="form-group col-md-6">--}}
{{--            <label for="inputPassword4">Identifiant entreprise</label>--}}
{{--            <input type="text" class="form-control" name="entreprise_id" placeholder="815EN">--}}
{{--        </div>--}}
{{--    </div>--}}
{{--    <div class="form-row">--}}
{{--        <div class="form-group col-md-6">--}}
{{--            <label for="inputEmail4">Identifiant jury</label>--}}
{{--            <input type="text" class="form-control" name="jury_id" placeholder="654JU">--}}

{{--        </div>--}}
{{--        <div class="form-group col-md-6">--}}
{{--            <label for="inputPassword4">Identifiant Tuteur</label>--}}
{{--            <input type="text" class="form-control" name="tuteur_id" placeholder="456TU">--}}
{{--        </div>--}}
{{--    </div>--}}


{{--   <center> <input type="submit" class="btn btn-success"></input></center>--}}
{{--</form>--}}

{{--</div>--}}









