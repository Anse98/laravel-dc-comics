@extends('layouts.app')

@section('content')
    <section>
        <div class="container">
            <h1>{{$comic->title}}</h1>
            <p>{{$comic->description}}</p>
        </div>
    </section>
@endsection