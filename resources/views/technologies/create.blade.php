@extends("layouts.master")

@section("content")

<a href="{{route("technologies.index")}}" class="btn btn-primary my-3">< Torna alle tecnologie</a>

<h1 class="text-center py-5">Aggiungi tecnologia</h1>

<x-miniform>
<x-slot:method></x-slot>
<x-slot:action>{{ route( "technologies.store" ) }}</x-slot>
<x-slot:subject>tecnologia</x-slot>
<x-slot:actionTodo>aggiungere</x-slot>
<x-slot:inputName>name</x-slot>
<x-slot:name></x-slot>
<x-slot:areaName>description</x-slot>
<x-slot:description></x-slot>
<x-slot:color>
    <x-slot:color>
    <div class="form-control d-flex flex-column gap-2 pb-3 mb-3">
<label for="color">Scegli il colore</label>
<input type="color" name="color" id="color" value="#">
</div>
</x-slot>




</x-miniform>

@endsection