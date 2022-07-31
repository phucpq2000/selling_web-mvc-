@extends('layouts.app1')
@section('content')
{{-- <form class="beverage" action="{{ route('profiles.update',['profile' => $profile->id]) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="form-group" >
        <input type="text" name="full_name" class="form-control form-control-user" id="full_name" placeholder="Full Name" value="{{$profile->full_name}}">
    </div>
    <div class="form-group">
        <input type="text" name="producer" class="form-control form-control-user" id="producer" placeholder="producer" value="{{$profile->producer}}">
    </div>
   
    <div class="form-group">
        <input type="text" name="country" class="form-control form-control-user" id="country" placeholder="country" value="{{$profile->country}}">
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
       <form class="beverage" action="{{ route('profiles.update',['profile' => $profile->id]) }}" method="POST">
              @csrf
            @method('PUT')
              <div class="card-body">
                <form role="form" class="text-start">
                  <div class="input-group input-group-outline my-3">
                    <input type="text" name="full_name" class="form-control form-control-user" id="full_name" placeholder="Full Name" value="{{$profile->full_name}}">
                  </div>
                  <div class="input-group input-group-outline mb-3">
                    <input type="text" name="producer" class="form-control form-control-user" id="producer" placeholder="producer" value="{{$profile->producer}}">
                  </div>
                  <div class="input-group input-group-outline mb-3">
                    <input type="text" name="country" class="form-control form-control-user" id="country" placeholder="country" value="{{$profile->country}}">
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
