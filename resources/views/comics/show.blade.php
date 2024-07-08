@extends('layouts.app')

@section('content')
    <p>questa e la lista dei giochoi singoli</p>

  
    
    <h2>{{$fumetto->id}}</h2>
    <h2>{{$fumetto->title}}</h2>
    <img src="{{$fumetto->thumb}}">




@endsection
