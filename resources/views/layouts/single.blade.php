@extends("layouts.back-office.dashboard")


@section('content')

<div class="container text-center">

    <h1>{{$project->title}}</h1>
    <p>{{$project->description}}</p>
    <span>{{$project->date}}</span>
</div>

@endsection
