@extends('layouts.app1')
@section('content')


<div class="container mt-3">
  <div class="d-flex flex-row">
    <div class="col-12 px-0">
      <form action="{{route('beverages.store')}}" method="post">
        <input type="hidden" name="_token" value="{{csrf_token()}}">
        <div class="form-group ">
          <label class="text-uppercase font-weight-bold" for="name">name</label>
          <input type="text" class="form-control rounded-0" id="name" placeholder="Name" name="name">
        </div>
        <div class="form-group ">
          <label class="text-uppercase font-weight-bold" for="email">Price</label>
          <input type="number" class="form-control rounded-0" id="price" placeholder="Price" name="price">
        </div>
        <div class="form-group ">
          <label class="text-uppercase font-weight-bold" for="password">type</label>
          <input type="text" class="form-control rounded-0" id="type" placeholder="Type" name="type">
        </div>
        <div class="form-group ">
          <button type="submit" class="btn btn-danger text-uppercase rounded-0 font-weight-bold">
            confirm
          </button>
        </div>
      </form>
    </div>
  </div>
</div>
@endsection