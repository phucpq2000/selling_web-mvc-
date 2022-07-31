@extends('layouts.app1')
@section('content')
{{-- <form class="beverage"  action="{{route('beverages.update', $beverages->id)}}" method="post">
    @csrf
    @method('PATCH')
    <div class="form-group" >
        <input type="text" name="name" class="form-control form-control-user" id="name" placeholder="Name" value="{{$beverages->name}}">
    </div>
    <div class="form-group">
        <input type="text" name="price" class="form-control form-control-user" id="price" placeholder="Price" value="{{$beverages->price}}">
    </div>
  
    <div class="form-group">
        <input type="text" name="type" class="form-control form-control-user" id="country" placeholder="type" value="{{$beverages->type}}">
    </div>
    <input type="submit" class="btn btn-primary" value="Update">
</form> --}}
<br>
<br>
<br>



<div class="row">
  <div class="col-lg-4 col-md-8 col-12 mx-auto">
    <div class="card z-index-0 fadeIn3 fadeInBottom">
      <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
        <div class="bg-gradient-primary shadow-primary border-radius-lg py-3 pe-1">
          <h4 class="text-white font-weight-bolder text-center mt-2 mb-0">Edit</h4>
        </div>
      </div>
      <form class="beverage"  action="{{route('beverages.update', $beverages->id)}}" method="post">
    
              @csrf
              @method('PATCH')
              <div class="card-body">
                <form role="form" class="text-start">
                  <div class="input-group input-group-outline my-3">
                    <input type="text" name="name" class="form-control form-control-user" id="name" placeholder="Name" value="{{$beverages->name}}">
                  </div>
                  <div class="input-group input-group-outline mb-3">
                    <input type="text" name="price" class="form-control form-control-user" id="price" placeholder="Price" value="{{$beverages->price}}">
                  </div>
                  <div class="input-group input-group-outline mb-3">
                    <input type="text" name="type" class="form-control form-control-user" id="country" placeholder="type" value="{{$beverages->type}}">
                  </div>
              
                  <div class="text-center">
                    <input type="submit" class="btn btn-primary" value="Update">
                  </div>
        </form>
          <p class="mt-4 text-sm text-center">
            
          </p>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection