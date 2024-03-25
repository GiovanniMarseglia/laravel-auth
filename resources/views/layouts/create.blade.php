@extends('layouts.back-office.dashboard')

@section('content')

    <main class="container text-center">

        <h1>Crea</h1>

        <form class="d-flex flex-column align-items-center" action="{{route('dashboard.project.store')}}" method="POST">
            @csrf

            <div class="d-flex flex-column">
                <label for="title">Titolo</label>
                <input type="text" name="title" id="title">
            </div>


            <div class="d-flex flex-column">
                <label for="description">Descrizione</label>
                <input type="text" name="description" id="description">
            </div>

            <div class="d-flex flex-column">
                <label for="thumb">immagine</label>
                <input type="text" name="thumb" id="thumb">
            </div>

            <div class="d-flex flex-column">
                <label for="thumb">Data</label>
                <input type="date" name="date" id="date">
            </div>
            <button class="submit"></button>

        </form>

    </main>

@endsection
