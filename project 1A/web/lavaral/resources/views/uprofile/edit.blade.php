@extends('layouts.app1')
@section('content')
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
       <form class="beverage" action="{{ route('uprofiles.update',['uprofile' => $uprofile->id]) }}" method="POST" enctype="multipart/form-data">
              @csrf
            @method('PUT')
              <div class="card-body">
                <form role="form" class="text-start">
                  <div class="input-group input-group-outline my-3">
                    <input type="text" name="full_name" class="form-control form-control-user" id="full_name" placeholder="Full Name" value="{{$uprofile->full_name}}">
                  </div>
                  <div class="input-group input-group-outline mb-3">
                    <input type="text" name="address" class="form-control form-control-user" id="address" placeholder="address" value="{{$uprofile->address}}">
                  </div>
                  <div class="input-group input-group-outline mb-3">
                    <input type="date" name="birthday" class="form-control form-control-user" id="birthday" placeholder="birthday"  value="{{$uprofile->birthday}}" required pattern="\d{2}-\d{2}-\d{4}">
                  </div>
                  
                  <div class="custom-file">
                    <input type="file" class="custom-file-input " id="avatar" name="avatar" >
                    <label for="avatar" class="custom-file-label">{{$uprofile->avatar}}</label>
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
@section('js')
<script>
  $('#avatar').on('change',function(){
    //get the file name
    var fileName = $(this).val();
    //replace the "Choose a file" label
    $(this).next('.custom-file-label').html(fileName);
  })
</script>
@endsection('js')