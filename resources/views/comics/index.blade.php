@extends('layouts.app')

@section('content')
    <div class="container py-4">
        <div class="row mb-4">
            <div class="col-12 text-center">
                <h1 class="display-4">Elenco Fumetti</h1>
            </div>
            <div class="col-12 text-end">
                <a href="{{ route('comics.create') }}" class="btn btn-sm btn-primary">Aggiungi Fumetto</a>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover align-middle">
                        <thead class="table-dark">
                            <tr>
                                <th>Titolo Fumetto</th>
                                <th>Descrizione</th>
                                <th class="w-15">Prezzo</th>
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
                                    <td class="w-15">{{ $comic->price }} €</td>
                                    <td>{{ $comic->series }}</td>
                                    <td>{{ $comic->sale_date }}</td>
                                    <td>{{ $comic->type }}</td>
                                    <td class="text-center w-15">
                                        <a href="{{ route('comics.show', ['comic' => $comic->id]) }}"
                                            class="btn btn-sm btn-outline-primary">
                                            <i class="bi bi-eye-fill"></i>
                                        </a>
                                        <a href="{{ route('comics.edit', ['comic' => $comic->id]) }}"
                                            class="btn btn-sm btn-outline-warning">
                                            <i class="bi bi-pen"></i>
                                        </a>
                                        {{-- <a href="{{ route('comics.delete', ['comic' => $comic->id]) }}"
                                            class="btn btn-sm btn-outline-danger">
                                            <i class="bi bi-trash"></i>
                                        </a> --}}
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
