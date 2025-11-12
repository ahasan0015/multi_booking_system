@extends('admin.layout.master')
@section('title', 'Add Airlines')


@section('content')
<h2>Airlines Form</h2>
<form action="{{ route('airline.store') }}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
        <div class="">
            <label for="air_name">Airline Name</label>
            <input type="text" class="form-control" id="air_name" name="airline_name">
            @error('airline_name')
            <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="">
            <label for="air_country">Airline Country</label>
            <input type="text" class="form-control" id="air_country" name="country">
            @error('airline_country')
            <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="col-12 mb-3">
            @if($errors->any())
            <ul class="text-danger">
                @foreach ($errors->all() as $item)
                <li>{{ $item }}</li>
                @endforeach
            </ul>
            @endif
        </div>
        <div class="col-md-12 ">
            <input type="submit" value="Submit" class="btn btn-success">
        </div>
    </div>

</form>
@endsection