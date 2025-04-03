@extends("layouts.master");

@section("content")

<x-form>
    
<x-slot:route>{{route("projects.store")}}</x-slot>
<x-slot:method></x-slot>
<x-slot:name></x-slot>
<x-slot:type></x-slot>
<x-slot:customer></x-slot>
<x-slot:period></x-slot>
<x-slot:summary></x-slot>
<x-slot:link></x-slot>

</x-form>

@endsection

