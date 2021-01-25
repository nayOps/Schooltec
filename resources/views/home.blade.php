@extends('layouts.app')


@section('content')
<h1>
     salut {{ auth()->user()->name }}
</h1>    
@endsection