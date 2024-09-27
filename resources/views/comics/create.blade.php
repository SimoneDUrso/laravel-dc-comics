@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Aggiungi nuovo fumetto</h1>
            </div>
            <div class="col-12">
                <form action="{{ route('comics.store') }}" method="POST">
                    @csrf
                    <div class="row gy-3">

                        <div class="col-12 col-md-6">
                            <label for="" class="control-label">Nome Fumetto</label>
                            <input type="text" class="form-control" name="title" placeholder="Nome">
                        </div>
                        <div class="col-12 col-md-6">
                            <label for="" class="control-label">Immagine</label>
                            <input type="text" class="form-control" name="thumb" placeholder="immagine">
                        </div>
                        <div class="col-12">
                            <label for="" class="control-label">Descrizione fumetto</label>
                            <textarea type="text" class="form-control" name="description" placeholder="Descrizione"></textarea>
                        </div>
                        <div class="col-12 col-md-6">
                            <label for="" class="control-label">Prezzo</label>
                            <input type="text" class="form-control" name="price" placeholder="Prezzo">
                        </div>
                        <div class="col-12 col-md-6">
                            <label for="" class="control-label">Serie</label>
                            <input type="text" class="form-control" name="series" placeholder="Serie">
                        </div>
                        <div class="col-12 col-md-6">
                            <label for="" class="control-label">Data di vendita</label>
                            <input type="text" class="form-control" name="sale_date" placeholder="Vendita">
                        </div>
                        <div class="col-12 col-md-6">
                            <label for="" class="control-label">Tipo fumetto</label>
                            <input type="text" class="form-control" name="type" placeholder="Tipo">
                        </div>
                        <div class="col-12">
                            <button type="submit" class="btn btn-sm btn-success">Salva</button>
                        </div>
                </form>
            </div>
        </div>
    </div>
    </div>
@endsection
