@extends('layouts.layout')

@section('content')

<h1>Birds Details</h1>

<h2>{{$birds->name}}</h2>

<h3>description</h3>

<div class="list-group">
  	<a href="#" class="list-group-item list-group-item-action">{{ $birds->color }}</a>
  
</div>

<div class="list-group">
  	<a href="#" class="list-group-item list-group-item-action">{{ $birds->can_fly }}</a>
  
</div>


@endsection

