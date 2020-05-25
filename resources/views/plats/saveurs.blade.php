@extends('layouts/master')
@section('content')
<div class="table-wrapper"> 
    <h1>Plats {{$saveurs->nom}}</h1>
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
     
    </tr>
@endforeach
   
    <tbody>
        
</table>

 
</div>
@endsection