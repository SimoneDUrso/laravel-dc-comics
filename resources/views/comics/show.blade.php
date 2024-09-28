@extends('layouts.app')

@section('content')
    <div class="container py-5 container-show">
        <div class="row justify-content-center">
            <div class="col-lg-8 col-md-10">
                <div class="card shadow-lg rounded">
                    <div class="card-body p-5">
                        <h2 class="display-6 text-center mb-4">Dettagli Fumetto</h2>

                        <table class="table table-bordered table-hover">
                            <tbody>
                                <tr>
                                    <th class="bg-light text-end w-50">Nome Fumetto:</th>
                                    <td>{{ $comic->title }}</td>
                                </tr>
                                <tr>
                                    <th class="bg-light text-end">Descrizione:</th>
                                    <td>{{ $comic->description }}</td>
                                </tr>
                                <tr>
                                    <th class="bg-light text-end">Prezzo:</th>
                                    <td>{{ $comic->price }} €</td>
                                </tr>
                                <tr>
                                    <th class="bg-light text-end">Serie:</th>
                                    <td>{{ $comic->series }}</td>
                                </tr>
                                <tr>
                                    <th class="bg-light text-end">Data di Vendita:</th>
                                    <td>{{ $comic->sale_date }}</td>
                                </tr>
                                <tr>
                                    <th class="bg-light text-end">Tipo:</th>
                                    <td>{{ $comic->type }}</td>
                                </tr>
                            </tbody>
                        </table>

                        <div class="text-center mt-4">
                            <a href="{{ route('comics.index') }}" class="btn btn-primary btn-lg rounded-pill">Torna alla
                                lista</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
