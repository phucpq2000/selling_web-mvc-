@extends('layouts.app1')

@section('content')

<div class="content-wrapper">
  <div class="page-header">
<div class="col-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">PROFILE USER</h4>
        <p class="card-description"> Profile User </p>
        <hr color="white">
        <br>
        <form class="forms-sample">
          <div class="form-group row">
            <label for="exampleInputName1"><b> Full Name:</b> {{$profile->full_name}}</label>
          </div>
          <div class="form-group row">
            <label for="exampleInputEmail3"><b> Address:</b> {{$profile->address}}</label>
          </div>
          <div class="form-group row">
            <label for="exampleSelectGender"><b> Birthday:</b> {{$profile->birthday}}</label>
          </div>
          <div class="form-group row">
            <label for="exampleSelectGender"><b> Avatar:</b> 
              <img src="{{asset($profile->avatar)}}" width="50px" height="50px">
              
            </label>
          </div>
          <a class="btn btn-primary mr-2" href="{{route('profiles.store',['profile' => $profile->id])}}">ADD</a>
          <a class="btn btn-primary mr-2" href="{{route('profiles.edit',['profile' => $profile->id])}}">EDIT</a>
          <form method="post" action="{{route('profiles.destroy',['profile' => $profile->id])}}" class="pull-left">
            @method('DELETE')
            @csrf
            {{-- {{ csrf_field() }} --}}
            <button type="submit" class="btn btn-danger">DELETE</button>
        </form>
         
        </form>
      </div>
    </div>
  </div>
</div>
</div>

@endsection