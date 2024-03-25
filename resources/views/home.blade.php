@extends('layouts.back-office.dashboard')

@section('content')
<div class="container-fluid">
    <div class="">



    </div>
</div>


<div class="container-fluid">

    <div class="row row-cols-3">
        @foreach ($project as $element)
            <div class="cols">
                <h1>{{$element['title']}}</h1>
                {{-- <figure>
                    <img src="{{$element['thumb']}}" alt="">
                </figure> --}}
                <figure>
                    <img src="https://picsum.photos/200" alt="">
                </figure>

                <span>{{$element['date']}}</span>
                <a class="btn btn-primary" href="{{ route('dashboard.project.show', $element->id) }}">Dettagli</a>
                <a class="btn btn-primary" href="{{ route('dashboard.project.edit', $element->id) }}">Modifica</a>
            </div>
        @endforeach

    </div>
</div>


<div class="container-fluid">



    <a href="{{route('dashboard.project.create')}}">Aggiungi progetto</a>
    <a href="">Visualizza tutti i progetti</a>
    <a href="">Elimina Progett</a>

</div>
@endsection
