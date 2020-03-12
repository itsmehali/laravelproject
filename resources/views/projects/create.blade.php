@extends('layout')

@section('content')
    <h1 class="title">Create a new Project</h1>

    <form method="POST" action="{{ route('projects.store') }}">
    @csrf
    <p>Title*</p>
    <div>
        <input type="text" class="input {{ $errors->has('title') ? 'alert alert-danger' : '' }}" name="title" required value="{{ old('title') }}">
    </div>

    <p>Description*</p>
    <div>
        <textarea class="textarea {{ $errors->has('title') ? 'alert alert-danger' : '' }}" name="description" required> {{ old('description') }}</textarea>
    </div>

    <p>Status*</p>
    <div>
        <textarea class="textarea {{ $errors->has('title') ? 'alert alert-danger' : '' }}" name="status" required> {{ old('status') }}</textarea>
    </div>

    <div>
        <button type="submit">Create Project</button>
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
