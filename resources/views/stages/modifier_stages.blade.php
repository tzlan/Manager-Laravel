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
<div class="container p-3 my-3 border">
    <h1>Ajoutez une remarque ou validez le stage</h1>
    <br>
    <br>
    <br>
{{--    <form method="post" action="traitement.php">--}}
{{--        <p>--}}
{{--            Veuillez indiquer la tranche d'âge dans laquelle vous vous situez :<br />--}}
{{--            <input type="radio" name="age" value="moins15" id="moins15" /> <label for="moins15">Moins de 15 ans</label><br />--}}
{{--            <input type="radio" name="age" value="medium15-25" id="medium15-25" /> <label for="medium15-25">15-25 ans</label><br />--}}
{{--            <input type="radio" name="age" value="medium25-40" id="medium25-40" /> <label for="medium25-40">25-40 ans</label><br />--}}
{{--            <input type="radio" name="age" value="plus40" id="plus40" /> <label for="plus40">Encore plus vieux que ça ?!</label>--}}
{{--        </p>--}}
{{--    </form>--}}

    <form action="{{url('stages/modifier_stages/'.$stage->id)}}" method="post">

        {{csrf_field()}}

        <p> <input type="text" name="id" value="{{$stage->id}}"  disabled="disabled" ></p>
        @if($errors->has('id'))


        @endif


        <p>   <input type="text" name="validation_stage_jury"  value="{{$stage->validation_stage_jury}}" placeholder="Validation jury"   @if(auth()->user()->tuteur_id) disabled="disabled" @endif></p>
        @if($errors->has('validation_stage_jury'))
        @endif

        <p>   <input type="text" name="validation_convention_tuteur" value="{{$stage->validation_convention_tuteur}}"  placeholder="Validation convention tuteur"   @if(auth()->user()->jury_id) disabled="disabled" @endif></p>
        @if($errors->has('validation_convention_tuteur'))>
        @endif

        <p>   <input type="text" name="remarque_tuteur" value="{{$stage->remarque_tuteur}}" style="width: 190px; height: 150px;" placeholder="Remarque tuteur"  @if(auth()->user()->jury_id) disabled="disabled" @endif></p>
        @if($errors->has('remarque_tuteur'))


        @endif

        <p>   <input type="text" name="offre_id" value="{{$stage->offre_id}}" disabled="disabled" ></p>
        @if($errors->has('offre_id'))
            <p>{{$errors->first('offre_id')}}</p>

        @endif


        <p>   <input type="text" name="entreprise_id" value="{{$stage->entreprise_id}}" disabled="disabled" ></p>
        @if($errors->has('entreprise_id'))
            <p>{{$errors->first('entreprise_id')}}</p>

        @endif

        <p>   <input type="text" name="jury_id" value="{{$stage->jury_id}}" disabled="disabled" ></p>
        @if($errors->has('jury_id'))
            <p>{{$errors->first('jury_id')}}</p>

        @endif

        <p>   <input type="text" name="student_id" value="{{$stage->student_id}}" disabled="disabled"  ></p>
        @if($errors->has('student_id'))
            <p>{{$errors->first('student_id')}}</p>

        @endif

        <p>   <input type="text" name="jury_id" value="{{$stage->jury_id}}" disabled="disabled" ></p>
        @if($errors->has('jury_id'))
            <p>{{$errors->first('jury_id')}}</p>

        @endif

        <p>   <input type="text" name="tuteurs_id" value="{{$stage->tuteurs_id}}" disabled="disabled" ></p>
        @if($errors->has('tuteurs_id'))
            <p>{{$errors->first('tuteurs_id')}}</p>

        @endif


        <input type="submit"  @if(auth()->user()->jury_id) value="Valider stage" @endif value="Ajouter" >
    </form>
</div>
@endsection

