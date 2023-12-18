@extends('layouts.app')

@section('content')
    <section class="py-4">
        <div class="container">
            <form action="" method="POST">
                @csrf

                <div class="mb-3">
                    <label for="title" class="form-label">Titolo</label>
                    <input type="text" class="form-control" name="title" id="title" placeholder="Titolo">
                </div>

                <div class="mb-3">
                    <label for="description" class="form-label">Descrizione</label>
                    <input type="text" class="form-control" name="description" id="description" placeholder="Descrizione">
                </div>

                <div class="mb-3">
                    <label for="thumb" class="form-label">Url immagine</label>
                    <input type="text" class="form-control" name="thumb" id="thumb" placeholder="Url Immagine">
                </div>

                <div class="mb-3">
                    <label for="price" class="form-label">Prezzo</label>
                    <input type="text" class="form-control" name="price" id="price" placeholder="Prezzo">
                </div>

                <div class="mb-3">
                    <label for="series" class="form-label">Serie</label>
                    <input type="text" class="form-control" name="series" id="series" placeholder="Serie">
                </div>

                <div class="mb-3">
                    <label for="sale_date" class="form-label">Data di vendita</label>
                    <input type="text" class="form-control" name="sale_date" id="sale_date" placeholder="Data di vendita">
                </div>

                <div class="mb-3">
                    <label for="type" class="form-label">Tipo</label>
                    <input type="text" class="form-control" name="type" id="type" placeholder="Tipo">
                </div>

                <div>
                    <input type="submit" class="btn btn-primary" value="Aggiungi">
                </div>

            </form>
        </div>
    </section>
@endsection