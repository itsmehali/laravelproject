@extends('layout')

@section('content')
    <h1 class="title">{{ $project->title }}</h1>

    <div class="content">

        Description: {{$project->description}}
        <br>
        Status: {{$project->status}}
        <br>

        <p>
            <a href="/projects/{{ $project->id }}/edit">Edit</a>
        </p>

    </div>




@endsection
