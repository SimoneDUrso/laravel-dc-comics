@extends('layouts.app')

@section('content')
    <div class="container edit">

        <form action="{{ route('comics.update', ['comic' => $comic->id]) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="row gy-4">

                <div class="col-12 col-md-6">
                    <label for="title" class="form-label">Nome Fumetto</label>
                    <input value="{{ $comic->title }}" type="text" class="form-control rounded-pill" name="title"
                        id="title" placeholder="Nome" required>
                </div>

                <div class="col-12 col-md-6">
                    <label for="thumb" class="form-label">Immagine</label>
                    <input value="{{ $comic->thumb }}" type="text" class="form-control rounded-pill" name="thumb"
                        id="thumb" placeholder="URL Immagine" required>
                </div>

                <div class="col-12">
                    <label for="description" class="form-label">Descrizione Fumetto</label>
                    <textarea class="form-control rounded" name="description" id="description" rows="4" placeholder="Descrizione"
                        required>{{ $comic->description }}</textarea>
                </div>

                <div class="col-12 col-md-6">
                    <label for="price" class="form-label">Prezzo</label>
                    <input value="{{ $comic->price }}" type="text" class="form-control rounded-pill" name="price"
                        id="price" placeholder="Prezzo" required>
                </div>

                <div class="col-12 col-md-6">
                    <label for="series" class="form-label">Serie</label>
                    <input value="{{ $comic->series }}" type="text" class="form-control rounded-pill" name="series"
                        id="series" placeholder="Serie" required>
                </div>

                <div class="col-12 col-md-6">
                    <label for="sale_date" class="form-label">Data di Vendita</label>
                    <input value="{{ $comic->sale_date }}" type="date" class="form-control rounded-pill" name="sale_date"
                        id="sale_date" required>
                </div>

                <div class="col-12 col-md-6">
                    <label for="type" class="form-label">Tipo Fumetto</label>
                    <input value="{{ $comic->type }}" type="text" class="form-control rounded-pill" name="type"
                        id="type" placeholder="Tipo" required>
                </div>

                <div class="col-12 text-center">
                    <button type="submit" class="btn btn-success btn-lg rounded-pill px-5">Salva</button>
                    <a href="{{ route('comics.index') }}" class="btn btn-primary btn-lg rounded-pill">Torna
                        indietro</a>
                </div>
            </div>
        </form>
    </div>
@endsection
