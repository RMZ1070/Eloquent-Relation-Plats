@extends('layouts/master')
@section('content')
<div class="table-wrapper"> 
    <h1>Plats</h1>

    <div class="text-center m-2"><a href="{{route('createP')}}" ><button class="btn btn-danger">creer un plat</button></a>
        <div class="text-center m-2"><a href="{{route('createS')}}" ><button class="btn btn-danger">creer une saveur</button></a>

    <div class="text-center m-2"><a href="{{route('saveur',1)}}"><button class="btn btn-danger">salé</button></a></div>
    <div class="text-center m-2"><a href="{{route('saveur',2)}}"><button class="btn btn-danger">Sucré</button></a></div>

<table class="table table-striped">
    
    <thead>
    <tr>
        <th scope="col" class="text-center">plat</th>
        <th scope="col" class="text-center">saveur</th>
    </tr>
</thead>
<tbody>
   @foreach($plats as $item)
    <tr>
    <td class="text-center"  colspan="">{{$item->plat}}</td>
    <td class="text-center"  colspan="">{{$item->saveur->nom}}</td>

    <td></td>
     
    </tr>
@endforeach
   
    <tbody>
        
</table>

 
</div>
@endsection