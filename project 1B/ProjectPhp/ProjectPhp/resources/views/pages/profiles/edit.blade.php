@extends('layouts.app1')

@section('content')

<!-- lấy thông tin thông báo đã thêm vào session để hiển thị -->
@if ($message = Session::get('success'))
<div class="alert alert-success"> <!-- tự chuyển sang sử dụng alert component đã tạo các tuần trước -->
  <li>{{ $message }}  </li>
@if ($message = Session::get('file'))
  <li>{{ $message }}  </li> 
@endif

</div>
@endif

<!-- lấy thông tin thông báo đã thêm vào session để hiển thị -->
@if ($message = Session::get('error'))
<div class="alert alert-danger"> <!-- tự chuyển sang sử dụng alert component đã tạo các tuần trước -->
  <li>{{ $message }}  </li>
@if ($message = Session::get('file'))
  <li>{{ $message }}  </li> 
@endif

</div>
@endif

<!-- lấy thông tin lỗi khi validate hiển thị trên màn hình -->
@if (count($errors) > 0)
<div class="alert alert-danger"> <!-- tự chuyển sang sử dụng alert component đã tạo các tuần trước -->
  <li>{{ $message }}  </li>
  <ul>
    @foreach ($errors->all() as $error)
      <li>{{ $error }}</li>
    @endforeach
  </ul>
</div>
@endif

<div class="content-wrapper">
  <div class="page-header">
    <div class="col-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">UPDATE PROFILE USER</h4>
        <p class="card-description"> Update Profile User </p>
        <form class="forms-sample" action="{{ route('profiles.update',['profile' => $profile->id]) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group">
            <label for="exampleInputName1">Full Name</label>
            <input type="text" name="full_name" class="form-control" id="exampleInputName1" placeholder="Name" value="{{$profile->full_name}}">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail3">Address</label>
            <input type="text" name="address" class="form-control" id="exampleInputEmail3" placeholder="Address" value="{{$profile->address}}">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword4">BirthDay</label>
            <input type="date" name="birthday" class="form-control" id="exampleInputPassword4" placeholder="BirthDay" value="{{$profile->birthday}}">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword4">Avatar</label>
            <div class="custom-file">
              <input type="file" class="custom-file-input form-control" id="avatar" name="avatar" >
              <label for="avatar" class="custom-file-label form-control">{{$profile->avatar}}</label>
            </div>
          </div>
          <button type="submit" class="btn btn-primary mr-2">Submit</button>
          <button class="btn btn-dark">Cancel</button>
        </form>
      </div>
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
@endsection
