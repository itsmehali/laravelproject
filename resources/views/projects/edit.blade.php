@extends('layout')

@section('content')

    <h1 class="title">Edit Project</h1>

    <form method="POST" action="/projects/{{ $project->id }}">
        @method('PATCH')
        @csrf
        <div class="field">
            <label for="title" class="label">Title</label>

            <div class="controll">
                <input type="text" class="input " name="title" placeholder="Title"  value="{{ $project->title }}" required>
            </div>
        </div>

        <div class="field">
            <label for="description" class="label">Description</label>

            <div class="control">
                <textarea name="description" class="textarea" cols="30" rows="10" required>{{ $project->description }}</textarea>
            </div>
        </div>

        <div class="field">
            <label for="status" class="label">Status</label>

            <div class="control">
                <textarea name="status" class="textarea" required>{{ $project->status }}</textarea>
            </div>
        </div>

        <div class="field">
            <div class="control">
                <button type="submit" class="button is-link">Update Project</button>
            </div>
        </div>

    </form>

    <form method="POST" action="/projects/{{ $project->id }}">
        @method('DELETE')
        @csrf


        <div class="field">
            <div class="control">
                <button type="submit" class="button">Delete</button>
            </div>
        </div>
    </form>

    @if($errors->any())
        <div class="alert alert-danger">

            @foreach($errors->all() as $error)
                <p >{{ $error }}</p>
            @endforeach

        </div>
    @endif
@endsection
