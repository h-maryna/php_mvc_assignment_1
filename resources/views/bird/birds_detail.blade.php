@extends('layouts.layout')

@section('content')

<h1>Birds Details</h1>

<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

<h2><em>{{$birds->name}}</em></h2>


<ul>
<div class="list-group">
  	<li>Color: <p class="list-group-item list-group-item-action">{{ $birds->color }}</p></li>
  
</div>

<div class="list-group">
  	<li>Can fly: <p class="list-group-item list-group-item-action">{{ $birds->can_fly }}</p></li>
  <p>* 0 - a bird can fly<br />
  ** 1 - a bird can't fly</p>
</div>
</ul>


@endsection

