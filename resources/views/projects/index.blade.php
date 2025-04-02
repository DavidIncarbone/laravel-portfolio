@extends("layouts.master")

@section("content")

 
            <header class="header mt-5">
                <h1>Lista dei Progetti</h1>
                <p>Scopri i dettagli dei miei progetti più recenti.</p>
            </header>

            <div class="d-flex gap-3 py-4">
    <a class="btn btn-outline-primary" href="{{ route("projects.create") }}">Aggiungi un nuovo progetto</a>
         
             </div>

            <!-- Table of Projects -->
            <section id="projects" class="my-5">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Nome Progetto</th>
                            <th>Nome Cliente</th>
                            <th>Periodo di Realizzazione</th>
                            <th>Descrizione</th>
                            <th>Dettagli</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach($projects as $project)
                        <tr>
                            <td>{{$project->name}}</td>
                            <td>{{$project->customer}}</td>
                            <td>{{$project->period}}</td>
                            @php
    $maxWords = 10; // Numero massimo di parole
    $words = explode(' ', $project->summary); // Suddividi il testo in parole
    $shortenedDescription = implode(' ', array_slice($words, 0, $maxWords)); // Prendi solo le prime $maxWords parole
@endphp
                            <td>{{$shortenedDescription}}...</td>
                            <td><a id="project-details-btn" href="{{route("projects.show", $project)}}" class="btn btn-dark">Dettagli</a></td>
                        </tr>

                        @endforeach
                       
                    </tbody>
                </table>
            </section>
        

@endsection