@extends('layouts.app')

@section('content')
    <section>
        <div class="container">
            <table class="table">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Titolo</th>
                    <th>Thumb</th>
                    <th>Prezzo</th>
                    <th>Serie</th>
                    <th>Data di vendita</th>
                    <th>Tipo</th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>
                  @forelse ($comics as $comic)
                      <tr>
                        <td>{{ $comic->id }}</td>
                        <td>
                            <a href="{{ route('comics.show', $comic->id) }}">{{$comic->title}}
                            </a>   
                        </td>
                        <td>
                            <img src="{{ $comic->thumb }}" width="80" >
                        </td>
                        <td>{{ $comic->price }}</td>
                        <td>{{ $comic->series }}</td>
                        <td>{{ $comic->sale_date }}</td>
                        <td>{{ $comic->type }}</td>
                        <td class="">
                          <div class="d-flex gap-3">

                            {{-- Pulsante modifica --}}
                            <span><a href="{{route('comics.edit', $comic->id)}}" class="btn btn-primary">Modifica</a></span>

                            {{-- Pulsante elimina --}}
                          <form action="{{route('comics.destroy', $comic->id)}}" method="POST">
                            @csrf
                            @method('DELETE')

                            <input type="submit" value="Elimina" class="btn btn-danger">
                          </form>
                          </div>
                        </td>
                      </tr>
                  @empty
                      <tr>
                        <td colspan="8">
                          Nessun fumetto trovato
                        </td>
                      </tr>
                  @endforelse
                </tbody>
              </table>

              <div class="d-flex justify-content-center">
                <span class="btn btn-primary"><a href="{{ route('comics.create') }}" class="text-decoration-none text-light">Aggiungi Fumetto</a></span>
              </div>
        </div>
    </section>
@endsection