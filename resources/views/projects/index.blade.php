@extends('layout')

    <!doctype html>
<html>
<head>

</head>
<body>
<h1 class="title">Projects</h1>



<ul>
    @foreach($projects as $project)

        <li>
            <a href="/projects/{{$project->id}}">
                {{ $project->title }}
            </a>
        </li>
    @endforeach
</ul>

<br>
<p>Add new project:</p>
<a href="projects/create">Click here</a>
<br>


<br>
<p>Back to homepage:</p>
<a href="../">Click here</a>
</body>
</html>
