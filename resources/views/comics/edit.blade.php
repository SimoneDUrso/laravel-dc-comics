@extends('layouts.app')

@section('content')
    <div class="container edit">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul class="list-unstyled m-0">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('comics.update', ['comic' => $comic->id]) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="row gy-4">

                <div class="col-12 col-md-6">
                    <label for="title" class="form-label">Nome Fumetto</label>
                    <input value="{{ old('title'), $comic->title }}" type="text"
                        class="form-control rounded-pill @error('title') is-invalid @enderror" name="title" id="title"
                        placeholder="Nome">
                    @error('title')
                        <div class="text-danger"> {{ $message }} </div>
                    @enderror
                </div>

                <div class="col-12 col-md-6">
                    <label for="thumb" class="form-label">Immagine</label>
                    <input value="{{ old('thumb'), $comic->thumb }}" type="text" class="form-control rounded-pill"
                        name="thumb" id="thumb" placeholder="URL Immagine">
                    @error('thumb')
                        <div class="text-danger"> {{ $message }} </div>
                    @enderror
                </div>

                <div class="col-12">
                    <label for="description" class="form-label">Descrizione Fumetto</label>
                    <textarea class="form-control rounded" name="description" id="description" rows="4" placeholder="Descrizione">{{ old('description'), $comic->description }}</textarea>
                    @error('description')
                        <div class="text-danger"> {{ $message }} </div>
                    @enderror
                </div>

                <div class="col-12 col-md-6">
                    <label for="price" class="form-label">Prezzo</label>
                    <input value="{{ old('price'), $comic->price }}" type="text" class="form-control rounded-pill"
                        name="price" id="price" placeholder="Prezzo">
                    @error('price')
                        <div class="text-danger"> {{ $message }} </div>
                    @enderror
                </div>

                <div class="col-12 col-md-6">
                    <label for="series" class="form-label">Serie</label>
                    <input value="{{ old('series'), $comic->series }}" type="text" class="form-control rounded-pill"
                        name="series" id="series" placeholder="Serie">
                    @error('series')
                        <div class="text-danger"> {{ $message }} </div>
                    @enderror
                </div>

                <div class="col-12 col-md-6">
                    <label for="sale_date" class="form-label">Data di Vendita</label>
                    <input value="{{ old('sale_date'), $comic->sale_date }}" type="date"
                        class="form-control rounded-pill" name="sale_date" id="sale_date">
                    @error('sale_date')
                        <div class="text-danger"> {{ $message }} </div>
                    @enderror
                </div>

                <div class="col-12 col-md-6">
                    <label for="type" class="form-label">Tipo Fumetto</label>
                    <input value="{{ old('type'), $comic->type }}" type="text" class="form-control rounded-pill"
                        name="type" id="type" placeholder="Tipo">
                    @error('type')
                        <div class="text-danger"> {{ $message }} </div>
                    @enderror
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
