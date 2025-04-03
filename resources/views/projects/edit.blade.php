@extends("layouts.master");

@section("content")

<x-form>
    
<x-slot:route>{{route("projects.update", $project )}}</x-slot>
<x-slot:method>@method("PUT")</x-slot>
<x-slot:name>{{$project->name}}</x-slot>
<x-slot:type>{{$project->type}}</x-slot>
<x-slot:customer>{{$project->customer}}</x-slot>
<x-slot:period>{{$project->period}}</x-slot>
<x-slot:summary>{{$project->summary}}</x-slot>
<x-slot:link>{{$project->link}}</x-slot>

</x-form>

@endsection

