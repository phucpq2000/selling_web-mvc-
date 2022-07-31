@extends('layouts.app1')

@section('content')
<div class="content-wrapper">
    <div class="page-header">
<div class="col-lg-12 stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Table with list product</h4>
        <a class="btn btn-primary" href="{{ route('products.create') }}"><i class="mdi mdi-plus-box"></i></a>
        <p></p>
        <div class="table-responsive">
          @if (Session::has('thongbao'))
            <div class="alert alert-success">
              {{Session::get('thongbao')}}
              </div>
          @endif
          <table class="table table-bordered table-contextual">
            <thead>
              <tr>
                <th>  ID </th>
                <th> Name </th>
                <th> Description </th>  
                <th> Category </th> 
                <th> Price </th> 
                <th> Image </th> 
                <th> Quantity </th> 
                <th style="width:50px">&nbsp;  </th> 
              </tr>
            </thead>
            <tbody>
                @foreach($products as $product)
                    <tr class="table-success">
                        <td>{{$product->id}}</a> </td>
                        <td>{{$product->name}}</td>
                        <td>{{$product->description}}</td>  
                        <td>{{$product->category_id}}</td> 
                        <td>{{$product->price}}</td> 
                        <td>{{$product->image}}</td> 
                        <td>{{$product->quantity}}</td>   
                        <td>
                          <form action="{{route('products.destroy',['product'=>$product->id])}}" method="POST">
                            <a class="btn btn-warning btn-sm" href="{{ route('products.edit',['product'=>$product->id]) }}"><i class="mdi mdi-rename-box"></i></a>
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">
                              <i class="mdi mdi-delete-forever"></i>
                            </a>
                          </form>
                        </td> 
                    </tr>
              @endforeach
            </tbody>
          </table>  
            {{ $products->links('vendor.pagination.default') }}     
        </div> 

        @endsection

      </div>
    </div>
  </div>
</div>
</div>
</div>