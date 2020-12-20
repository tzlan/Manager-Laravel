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
    <h1>Modification d'un étudiant</h1>
    <br>
    <br>
    <br>

    <form action="{{url('students/modifier_students/'.$student->id)}}" method="post">
        {{--        <form action="{{route('Offre.update',$offre->id)}}" method="post">--}}
        {{csrf_field()}}

        <p> <input type="text" name="id" value="{{$student->id}}" placeholder="Id etudiant" ></p>
        @if($errors->has('id'))
            <p>{{$errors->first('id')}}</p>

        @endif


        <p>   <input type="text" name="name" value="{{$student->name}}" placeholder="Nom de l'étudiant "></p>
        @if($errors->has('name'))
            <p>{{$errors->first('name')}}</p>

        @endif

        <p>   <input type="text" name="first_name" value="{{$student->first_name}}" placeholder="Prenom de l'étudiant "></p>
        @if($errors->has('first_name'))
            <p>{{$errors->first('first_name')}}</p>

        @endif

        <p>   <input type="text" name="class" value="{{$student->class}}" placeholder="Classe de l'étudiant "></p>
        @if($errors->has('class'))
            <p>{{$errors->first('class')}}</p>

        @endif

        <p>   <input type="text" name="cv" value="{{$student->cv}}" placeholder="Lien vers le CV"></p>
        @if($errors->has('cv'))
            <p>{{$errors->first('cv')}}</p>

        @endif


        <p>   <input type="text" name="motivation" value="{{$student->motivation}}" placeholder="Lien vers la LM"></p>
        @if($errors->has('motivation'))
            <p>{{$errors->first('motivation')}}</p>

        @endif

        <p>   <input type="text" name="status" value="{{$student->status}}" placeholder="Statut"></p>
        @if($errors->has('status'))
            <p>{{$errors->first('status')}}</p>

        @endif


        <input type="submit" value="Modifier l'étudiant" >
    </form>
</div>
@endsection

