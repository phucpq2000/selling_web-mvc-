@extends('layouts.app1')

@section('content')

<div class="content-wrapper">
  <div class="page-header">
    <div class="col-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Sửa danh mục sản phẩm</h4>
        <form class="forms-sample" action="{{ route('category.update', ['category'=>$category->id]) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="exampleInputName1">Tên danh mục</label>
                <input type="text" name="name" class="form-control"  placeholder="Nhập tên danh mục" value="{{$category->name}}">
              </div>
             
              <div class="form-group">
                <label for="exampleInputCity1">Mô tả</label>
                <textarea name="description" class="form-control"></textarea>
              </div>
    
              <div class="form-group">
                <label for="exampleInputCity1">Mô tả chi tiết</label>
                <textarea name="content" class="form-control"></textarea>
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
