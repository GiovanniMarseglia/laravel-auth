@extends('layouts.back-office.dashboard')

@section('content')


    <div class="container text-center">
        <form class="d-flex flex-column align-items-center" action="{{route('dashboard.project.update', $project->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="d-flex flex-column w-50">
                <label for="title">Titolo</label>
                <input type="text" name="title" id="title" value="{{old('title') ?? $project->title}}">
            </div>


            <div class="d-flex flex-column">
                <label for="description">Descrizione</label>
                <textarea type="text" name="description" id="description" cols="100" rows="10">{{old('description') ?? $project->description}}</textarea>
            </div>

            <div class="d-flex flex-column w-75">
                <label for="thumb">immagine</label>
                <input type="text" name="thumb" id="thumb" value="{{old('thumb') ?? $project->thumb}}">
            </div>

            <div class="d-flex flex-column">
                <label for="thumb">Data</label>
                <input type="date" name="date" id="date" value="{{old('date') ?? $project->date}}">
            </div>

            <button type="submit" class="btn btn-primary mt-2">Modifica</button>

        </form>
    </div>

@endsection
