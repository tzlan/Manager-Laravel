@extends('navbarre')
@section('content')


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
<br>
<br>
<br>
<div style="text-align: center;">
<div class="container p-3 my-3 border">
    <h1>Formulaire de connexion 👨🏻‍💻</h1>
    <br>
    <br>
    <br>

    {{--        Le "action" c'est le nom de la route--}}
    <form action="/connexionUser" method="post">
        {{csrf_field()}}
        <small  class="form-text text-muted">
            Saisir votre mail
        </small>
        <p> <input type="text" name="email" placeholder="Ton petit mail" ></p>
        @if($errors->has('email'))
            <p>{{$errors->first('email')}}</p>

        @endif
        <small  class="form-text text-muted">
            Saisir votre mot de passe
        </small>

        <p>   <input type="password" name="password" placeholder="Par ici le mot de passe"></p>
        @if($errors->has('password'))
            <p>{{$errors->first('password')}}</p>


        @endif

        <input type="submit" value="Se connecter" >
    </form>
</div>

</div>

<br><br><br><br><br><br><br><br>


<footer class="bg-primary text-white text-center text-lg-start">
    <!-- Grid container -->
    <div class="container p-4">
        <!--Grid row-->
        <div class="row">
            <!--Grid column-->
            <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
                <h5 class="text-uppercase">Unisersité Paris X Nanterre</h5>

                <p>
                    Université Paris Nanterre
                    200 avenue de la République
                    92001 Nanterre Cedex
                    01 40 97 72 00
                    www.parisnanterre.fr
                </p>
            </div>
            <!--Grid column-->

            <!--Grid column-->
            <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                <h5 class="text-uppercase">📱</h5>

                <ul class="list-unstyled mb-0">
                    <li>
                        <a href="https://www.parisnanterre.fr/contacts/" class="text-white">Contact</a>
                    </li>
                    <li>
                        <a href="https://communication.parisnanterre.fr/espace-medias/accueil/" class="text-white">Espace presse</a>
                    </li>
                    <li>
                        <a href="https://www.parisnanterre.fr/recrutement-+/" class="text-white">Recrutement</a>
                    </li>
                    <li>
                        <a href="https://www.parisnanterre.fr/infos-pratiques/" class="text-white">Info Pratiques</a>
                    </li>
                </ul>
            </div>
            <!--Grid column-->

            <!--Grid column-->
            <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                <h5 class="text-uppercase">🔍</h5>

                <ul class="list-unstyled">
                    <li>
                        <a href="#!" class="text-white">A propos des stages</a>
                    </li>
                    <li>
                        <a href="#!" class="text-white">Reglementation des stages</a>
                    </li>
                    <li>
                        <a href="#!" class="text-white">Entreprises partenaires</a>
                    </li>
                    <li>
                        <a href="#!" class="text-white">En savoir plus sur nos formations</a>
                    </li>
                </ul>
            </div>
            <!--Grid column-->
        </div>
        <!--Grid row-->
    </div>
    <!-- Grid container -->

    <!-- Copyright -->
    <div class="text-center p-3" style="background-color: rgb(222,16,16)">
        © 2020 Copyright:
        <a class="text-black" href="https://Zanatal.fr/">Tal Zana</a>
    </div>
    <!-- Copyright -->
</footer>

@endsection

