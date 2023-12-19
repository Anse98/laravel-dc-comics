@extends('layouts.app')

@section('content')
    <section class="py-4">
        <div class="container">
            <form action="{{ route('comics.update', $comic) }}" method="POST">
                
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label for="title" class="form-label">Titolo</label>
                    <input type="text" class="form-control" name="title" id="title" placeholder="Titolo" value="{{$comic->title}}">
                </div>

                <div class="mb-3">
                    <label for="description" class="form-label">Descrizione</label>
                    <textarea class="form-control" name="description" id="description" rows="4" placeholder="Descrizione del fumetto">{{$comic->description}}</textarea>
                </div>

                <div class="mb-3">
                    <label for="thumb" class="form-label">Url immagine</label>
                    <input type="text" class="form-control" name="thumb" id="thumb" placeholder="Url Immagine" value="{{$comic->thumb}}">
                </div>

                <div class="mb-3">
                    <label for="price" class="form-label">Prezzo</label>
                    <input type="text" class="form-control" name="price" id="price" placeholder="Prezzo" value="{{$comic->price}}">
                </div>

                <div class="mb-3">
                    <label for="series" class="form-label">Serie</label>
                    <input type="text" class="form-control" name="series" id="series" placeholder="Serie" value="{{$comic->series}}">
                </div>

                <div class="mb-3">
                    <label for="sale_date" class="form-label">Data di vendita</label>
                    <input type="text" class="form-control" name="sale_date" id="sale_date" placeholder="Data di vendita" value="{{$comic->sale_date}}">
                </div>

                <div class="mb-3">
                    <label for="type" class="form-label">Tipo</label>
                    <input type="text" class="form-control" name="type" id="type" placeholder="Tipo" value="{{$comic->type}}">
                </div>

                <div>
                    <input type="submit" class="btn btn-primary" value="Conferma modifica">
                </div>

            </form>
        </div>
    </section>
@endsection