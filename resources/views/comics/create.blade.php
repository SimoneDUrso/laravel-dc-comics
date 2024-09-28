@extends('layouts.app')

@section('content')
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-8 col-md-10">
                <div class="card shadow-lg rounded">
                    <div class="card-body p-5">
                        <h1 class="display-6 text-center mb-4">Aggiungi Nuovo Fumetto</h1>

                        <form action="{{ route('comics.store') }}" method="POST">
                            @csrf
                            <div class="row gy-4">

                                <div class="col-12 col-md-6">
                                    <label for="title" class="form-label">Nome Fumetto</label>
                                    <input type="text" class="form-control rounded-pill" name="title" id="title"
                                        placeholder="Nome" required>
                                </div>

                                <div class="col-12 col-md-6">
                                    <label for="thumb" class="form-label">Immagine</label>
                                    <input type="text" class="form-control rounded-pill" name="thumb" id="thumb"
                                        placeholder="URL Immagine" required>
                                </div>

                                <div class="col-12">
                                    <label for="description" class="form-label">Descrizione Fumetto</label>
                                    <textarea class="form-control rounded" name="description" id="description" rows="4" placeholder="Descrizione"
                                        required></textarea>
                                </div>

                                <div class="col-12 col-md-6">
                                    <label for="price" class="form-label">Prezzo</label>
                                    <input type="text" class="form-control rounded-pill" name="price" id="price"
                                        placeholder="Prezzo" required>
                                </div>

                                <div class="col-12 col-md-6">
                                    <label for="series" class="form-label">Serie</label>
                                    <input type="text" class="form-control rounded-pill" name="series" id="series"
                                        placeholder="Serie" required>
                                </div>

                                <div class="col-12 col-md-6">
                                    <label for="sale_date" class="form-label">Data di Vendita</label>
                                    <input type="date" class="form-control rounded-pill" name="sale_date" id="sale_date"
                                        required>
                                </div>

                                <div class="col-12 col-md-6">
                                    <label for="type" class="form-label">Tipo Fumetto</label>
                                    <input type="text" class="form-control rounded-pill" name="type" id="type"
                                        placeholder="Tipo" required>
                                </div>

                                <div class="col-12 text-center">
                                    <button type="submit" class="btn btn-success btn-lg rounded-pill px-5">Salva</button>
                                </div>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
