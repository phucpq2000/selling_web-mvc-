@extends('layouts.app1')

@section('content')
<div class="content-wrapper">
    <div class="page-header">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
        <h4 class="card-title">{{$title}}</h4>
        @if (Session::has('thongbao'))
            <div class="alert alert-success">
              {{Session::get('thongbao')}}
              </div>
          @endif
        <form class="forms-sample" action="{{route('category.store')}}" method="POST">
            @csrf
          <div class="form-group">
            <label for="exampleInputName1">Tên danh mục</label>
            <input type="text" name="name" class="form-control"  placeholder="Nhập tên danh mục">
          </div>
         
          <div class="form-group">
            <label for="exampleInputCity1">Mô tả</label>
            <textarea name="description" class="form-control"></textarea>
          </div>

          <div class="form-group">
            <label for="exampleInputCity1">Mô tả chi tiết</label>
            <textarea name="content" class="form-control"></textarea>
          </div>

          <button type="submit" class="btn btn-primary mr-2">Tạo danh mục</button>
          <button class="btn btn-dark">Cancel</button>

        </form>
      </div>
    </div>
  </div>

</div>
</div>
@endsection