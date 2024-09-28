@extends('layouts.app')

@section('content')
    <div class="d-flex flex-column container-home"> <!-- Modifica qui -->
        <div class="container-fluid p-0">
            <!-- Sezione Hero -->
            <div class="row">
                <div class="col-12 hero-section d-flex justify-content-center align-items-center text-center">
                    <div class="content">
                        <h1 class="display-3 text-white mb-4">Benvenuti nel mondo dei Fumetti!</h1>
                        <p class="lead text-white-50 mb-4">Scopri una vasta collezione di fumetti, nuove uscite e serie
                            classiche.</p>
                        <a href="{{ route('comics.index') }}" class="btn btn-primary btn-lg rounded-pill">Esplora ora</a>
                    </div>
                </div>
            </div>

            <!-- Sezione di categorie o informazioni -->
            <div class="container py-5">
                <div class="row text-center">
                    <div class="col-md-4 mb-4 p-3">
                        <div class="card shadow-lg border-0">
                            <div class="card-body">
                                <h3 class="card-title">Nuove Uscite</h3>
                                <p class="card-text">Rimani aggiornato con le ultime novità nel mondo dei fumetti. Non
                                    perderti
                                    i nuovi numeri delle tue serie preferite!</p>
                                <a href="{{ route('comics.index') }}" class="btn btn-outline-primary rounded-pill">Scopri di
                                    più</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <div class="card shadow-lg border-0">
                            <div class="card-body">
                                <h3 class="card-title">Serie Popolari</h3>
                                <p class="card-text">Esplora le serie che hanno fatto la storia dei fumetti e sono diventate
                                    dei
                                    veri e propri cult.</p>
                                <a href="#" class="btn btn-outline-primary rounded-pill">Vedi le Serie</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4 p-3">
                        <div class="card shadow-lg border-0">
                            <div class="card-body">
                                <h3 class="card-title">Autori Iconici</h3>
                                <p class="card-text">Conosci meglio i creatori dietro i tuoi fumetti preferiti. Scopri la
                                    storia
                                    e il lavoro degli autori più celebri.</p>
                                <a href="#" class="btn btn-outline-primary rounded-pill">Leggi di più</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
