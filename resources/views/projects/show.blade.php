@extends("layouts.master")

@section("content")

 <div class="container-fluid">
            <header class="header mt-5">
                <h1>{{$project->name}}</h1>
                <p>Esplora i dettagli completi del mio progetto.</p>
            </header>

            <!-- Project Details -->
            <section id="project-details" class="my-5">
                <div class="row">
                    <!-- Project Image -->
                    <div class="col-md-6">
                        <img src="{{ Vite::asset('resources/img/' . $project->name . '.png')}}" alt="{{$project->name}}" class="img-fluid rounded shadow-lg">
                    </div>
                    
                    <!-- Project Information -->
                    <div class="col-md-6">
                        <h2>{{$project->name}}</h2>
                        <p><strong>Cliente:</strong> {{$project->customer}}</p>
                        <p><strong>Periodo di Realizzazione:</strong> {{$project->period}}</p>
                        <p><strong>Descrizione:</strong>{{$project->summary}} </p>
                    </div>
                </div>

                <!-- Action Buttons -->
                <div class="mt-4">
                    <a href="{{$project->link}}" class="btn btn-success" target="_blank">Visita il Sito del Progetto</a>
                    <a href="{{route("projects.index")}}" class="btn btn-secondary ml-3">Torna ai Progetti</a>
                </div>
            </section>
        </div>

@endsection