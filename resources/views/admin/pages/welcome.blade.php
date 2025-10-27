@extends ('admin.layout.master')


@section('title', 'Home')
@section('content')
<h1 class="text-success">Hello {{$name}}</h1>
<h1 class="text-success">Hello {{$country}}</h1>
<x-button bg="danger" :disable="false">
    Don't Click Me
</x-button>


@endsection
