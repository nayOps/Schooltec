@extends('layouts.app')


@section('content')

    <h1 class=" text-3xl text-green-500 mb-3" > Nos dernières missions </h1>

    @foreach($jobs as $job)
        <div class="px-3 py-5 mb-3 shadow-sm  hover:shadow-mb rounder border border-gray-200" >
            <h2 class="text-xl font-bold text-green-800 " >
                {{ $job->title }}
            </h2>
            <p class="text-md text-gray-800" > {{  $job->description }} </p>
            <a href="" > Consulter la mission</a>
            <span class="text-sm text-gray-600" >  {{ number_format( $job->price / 100 , 2, ',', '') }} </span>

        </div>

       
    @endforeach
    
@endsection