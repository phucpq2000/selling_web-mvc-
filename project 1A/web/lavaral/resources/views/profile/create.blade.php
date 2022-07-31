@extends('layouts.app1')
@section('content')
<form class="beverage" action="{{ route('profiles.store',['profile' => $profile->id]) }}" method="POST">
    @csrf
    @method('POST')
    <div class="form-group" >
        <label class="text-uppercase font-weight-bold" for="name">name</label>
        <input type="text" name="full_name" class="form-control form-control-user" id="full_name" placeholder="Full Name" value="{{$profile->full_name}}">
    </div>
    <div class="form-group">
        <label class="text-uppercase font-weight-bold" for="name">name_producer</label>
        <input type="text" name="name_producer" class="form-control form-control-user" id="name_producer" placeholder="name_producer" value="{{$profile->name_producer}}">
    </div>
    {{-- <div class="form-group row">
        <div class="col-sm-6 mb-3 mb-sm-0">
            <input type="date" class="form-control form-control-user" name="country" id="country" placeholder="country" value="{{$profile->country}}">
        </div>
    </div> --}}
    <div class="form-group">
        <label class="text-uppercase font-weight-bold" for="name">country</label>
        <input type="text" name="country" class="form-control form-control-user" id="country" placeholder="country" value="{{$profile->country}}">
    </div>
    <input type="submit" class="btn btn-primary" value="Store">
</form>
@endsection