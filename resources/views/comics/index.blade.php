@extends('layouts.app')

@section('content')
    <section>
        <div class="container">
            <table class="table">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Titolo</th>
                    <th>Descrizione</th>
                    <th>Thumb</th>
                    <th>Prezzo</th>
                    <th>Serie</th>
                    <th>Data di vendita</th>
                    <th>Tipo</th>
                  </tr>
                </thead>
                <tbody>
                  @forelse ($comics as $comic)
                      <tr>
                        <td>{{ $comic->id }}</td>
                        <td>{{$comic->title}}</td>
                        <td>{{ $comic->description }}</td>
                        <td>
                            <img src="{{ $comic->thumb }}" width="80" >
                        </td>
                        <td>{{ $comic->price }}</td>
                        <td>{{ $comic->series }}</td>
                        <td>{{ $comic->sale_date }}</td>
                        <td>{{ $comic->type }}</td>
                      </tr>
                  @empty
                      <tr>
                        <td colspan="8">
                          Nessuna pasta trovata
                        </td>
                      </tr>
                  @endforelse
                </tbody>
              </table>
        </div>
    </section>
@endsection