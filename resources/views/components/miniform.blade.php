

<form action="{{$action}}" method="POST">

@csrf

{{$method}}

<div class="form-control d-flex flex-column gap-2 pb-3 mb-3">
<label for="{{$inputName}}">Inserisci la tipologia da {{$actionTodo}}</label>
<input type="text" name="{{$inputName}}" id="{{$inputName}}" value="{{$name}}">
</div>
<div class="form-control d-flex flex-column gap-2 pb-3 mb-3">
<label for="{{$areaName}}">Inserisci una descrizione</label>
<textarea type="text" name="{{$areaName}}" id="{{$areaName}}" rows="5">{{$description}}</textarea>
</div>
<input type="submit" value="Aggiungi" class="btn btn-success">
</form>