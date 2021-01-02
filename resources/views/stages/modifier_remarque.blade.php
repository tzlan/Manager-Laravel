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
    <h1>Ajouter une remarque </h1>
    <br>
    <br>
    <br>

    <form action="{{url('stages/modifier_remarque/'.$stage->id)}}" method="post">

        {{csrf_field()}}

        <p> <input type="text" name="id" value="{{$stage->id}}"  disabled="disabled" ></p>
        @if($errors->has('id'))


        @endif


        <p>   <input type="text" name="validation_stage_jury"  value="{{$stage->validation_stage_jury}}" placeholder="Validation jury"    disabled="disabled" ></p>
        @if($errors->has('validation_stage_jury'))
        @endif

        <p>   <input type="text" name="validation_convention_tuteur" value="{{$stage->validation_convention_tuteur}}"  placeholder="Validation convention tuteur"    disabled="disabled" ></p>
        @if($errors->has('validation_convention_tuteur'))>
        @endif

        <p>   <input type="text" name="remarque_tuteur" value="{{$stage->remarque_tuteur}}" style="width: 190px; height: 100px;" placeholder="Remarque tuteur"   ></p>
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


        <input type="submit"  value="Ajouter une remarque" >
    </form>
</div>
@endsection

