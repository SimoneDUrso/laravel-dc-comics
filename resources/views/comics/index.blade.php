@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h1>Elenco Fumetti</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Titolo Fumetto</th>
                            <th>Descrizione</th>
                            <th>Prezzo</th>
                            <th>Serie</th>
                            <th>Data di Vendita</th>
                            <th>Tipo</th>
                            <th>Visualizza fumetto</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($comics as $comic)
                            <tr>
                                <td>{{ $comic->title }}</td>
                                <td>{{ $comic->description }}</td>
                                <td>{{ $comic->price }}</td>
                                <td>{{ $comic->series }}</td>
                                <td>{{ $comic->sale_date }}</td>
                                <td>{{ $comic->type }}</td>
                                <td>
                                    <a href="{{ route('comics.show', ['comic' => $comic->id]) }}"
                                        class="btn btn-sm btn-square btn-primary">
                                        <i class="bi bi-eye-fill"></i>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
