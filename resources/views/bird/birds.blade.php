@extends('layouts.layout')

@section('content')

<h1>Birds</h1>


<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

<h2>Birds</h2>
  
  <ol>
  @foreach($birds as $bird)
  <div class="list-group">
  	<li><a href="/bird/birds/{{$bird->id}}" class="list-group-item list-group-item-action">{{ $bird->name }}</a>
  </li>
</div>
@endforeach
</ol>

@endsection

