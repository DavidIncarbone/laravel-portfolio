@extends("layouts.master");

@section("content")

<x-form>
    
<x-slot:route>{{route("projects.update", $project )}}</x-slot>
<x-slot:method>@method("PUT")</x-slot>
<x-slot:name>{{$project->name}}</x-slot>
<x-slot:type>
     @foreach($types as $type)

    <option value="{{$type->id}}" {{ $project->type_id === $type->id ? "selected" : "" }}>{{$type->name}}</option>
    
    @endforeach
</x-slot>
<x-slot:customer>{{$project->customer}}</x-slot>
<x-slot:period>{{$project->period}}</x-slot>
<x-slot:summary>{{$project->summary}}</x-slot>
<x-slot:link>{{$project->link}}</x-slot>

</x-form>

@endsection

