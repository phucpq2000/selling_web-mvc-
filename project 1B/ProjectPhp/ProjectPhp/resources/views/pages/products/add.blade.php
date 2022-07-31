@extends('layouts.app1')

@section('content')
<div class="content-wrapper">
    <div class="page-header">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
        <h4 class="card-title">{{$title}}</h4>
        <form class="forms-sample" action="{{route('products.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
          <div class="form-group">
            <label for="exampleInputName1">Tên sản phẩm</label>
            <input type="text" name="name" class="form-control"  placeholder="Nhập tên sản phẩm">
          </div>
         
          <div class="form-group">
            <label for="exampleInputCity1">Mô tả</label>
            <textarea name="description" class="form-control"></textarea>
          </div>

          
            <div class="form-group">
              <label >Danh mục</label>
              
                <select class="form-control"  name="category_id">
                  @foreach($categories as $category)
                  <option value="{{$category->id}}">{{$category->name}}</option>
                  @endforeach
                </select>
              
            </div>
     

          <div class="form-group">
            <label for="exampleInputName1">Giá tiền</label>
            <input type="text" name="price" class="form-control"  placeholder="Nhập giá tiền">
          </div>

          <div class="form-group">
            <label for="exampleInputName1">Số lượng</label>
            <input type="number" name="quantity" class="form-control"  placeholder="Nhập số lượng">
          </div>

          <div class="form-group">
            <label for="exampleInputPassword4">Hình ảnh</label>
            <div class="custom-file">
              <input type="file" class="custom-file-input form-control" id="image" name="image" >
              <label for="image" class="custom-file-label form-control"></label>
            </div>
          </div>

          <button type="submit" class="btn btn-primary mr-2">Thêm sản phẩm</button>
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
  $('#image').on('change',function(){
    //get the file name
    var fileName = $(this).val();
    //replace the "Choose a file" label
    $(this).next('.custom-file-label').html(fileName);
  })
</script>
@endsection