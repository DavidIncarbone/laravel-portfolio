@extends("layouts.master")

@section("content")

<h1 class="text-center py-5">Aggiungi tipologia</h1>

<form action="{{route("types.store")}}" method="POST">

@csrf

<div class="form-control d-flex flex-column gap-2 pb-3 mb-3">
<label for="name">Inserisci la tipologia da aggiungere</label>
<input type="text" name="name" id="name">
</div>
<div class="form-control d-flex flex-column gap-2 pb-3 mb-3">
<label for="description">Inserisci una descrizione</label>
<textarea type="text" name="description" id="description" rows="5"></textarea>
</div>
<input type="submit" value="Aggiungi" class="btn btn-success">
</form>

@endsection