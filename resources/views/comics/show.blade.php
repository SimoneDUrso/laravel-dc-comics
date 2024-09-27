@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2>Dettagli Fumetto</h2>
                <table class="table table-bordered">
                    <tbody>
                        <tr>
                            <th>Nome Fumetto:</th>
                            <td>{{ $comic->title }}</td>
                        </tr>
                        <tr>
                            <th>Descrizione:</th>
                            <td>{{ $comic->description }}</td>
                        </tr>
                        <tr>
                            <th>Prezzo:</th>
                            <td>{{ $comic->price }}</td>
                        </tr>
                        <tr>
                            <th>Serie:</th>
                            <td>{{ $comic->series }}</td>
                        </tr>
                        <tr>
                            <th>Data di Vendita:</th>
                            <td>{{ $comic->sale_date }}</td>
                        </tr>
                        <tr>
                            <th>Tipo:</th>
                            <td>{{ $comic->type }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
