@extends('layouts.layout')

@section('content')

<h1>{{$page->title }}</h1>

<div>
  <p><strong>{!! $page->excerpt !!}</strong></p>
</div>

<div>

  {!! $page->content !!}

</div>

<example-component></example-component>

@endsection

