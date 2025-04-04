@extends("layouts.master")

@section("content")



<h1 class="text-center py-5">Modifica tecnologia</h1>

<x-miniform>
<x-slot:method>@method("PUT")</x-slot>
<x-slot:action>{{ route("technologies.update", $technology) }}</x-slot>
<x-slot:subject>tecnologia</x-slot>
<x-slot:actionTodo>modificare</x-slot>
<x-slot:inputName>name</x-slot>
<x-slot:name>{{$technology->name}}</x-slot>
<x-slot:areaName>description</x-slot>
<x-slot:description>{{$technology->description}}</x-slot>
<x-slot:color>
    <x-slot:color>
    <div class="form-control d-flex flex-column gap-2 pb-3 mb-3">
<label for="color">Scegli il colore</label>
<input type="color" name="color" id="color" value="{{$technology->color}}">
</div>
</x-slot>
<x-slot:btnAction>Salva modifiche</x-slot>
</x-miniform>

@endsection