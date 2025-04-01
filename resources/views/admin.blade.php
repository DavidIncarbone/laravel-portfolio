@extends('layouts.master')

@section('content')

@include("partials.sidebar")

  <!-- Contenuto principale -->
        <div class="content flex-grow-1 p-4">
            <div class="header d-flex justify-content-between align-items-center mb-4">
                <h1>Benvenuto nella tua Dashboard</h1>
                <button class="btn btn-danger">Esci</button>
            </div>

            <div class="row">
                <!-- Card per statistiche portfolio -->
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Progetti completati</h5>
                            <p class="card-text"></p>
                        </div>
                    </div>
                </div>
                <!-- Card per statistiche utenti -->
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Nuovi contatti</h5>
                            <p class="card-text"></p>
                        </div>
                    </div>
                </div>
                <!-- Card per altre informazioni -->
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Impostazioni</h5>
                            <p class="card-text"></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

@endsection