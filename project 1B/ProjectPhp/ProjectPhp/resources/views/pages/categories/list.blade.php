@extends('layouts.app1')

@section('content')
<div class="content-wrapper">
    <div class="page-header">
<div class="col-lg-12 stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Table with list category</h4>
       
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
                <th> Content </th> 
                <th style="width:50px">&nbsp;  </th> 
              </tr>
            </thead>
            <tbody>
                @foreach($categories as $category)
                    <tr class="table-success">
                        <td>{{$category->id}}</a> </td>
                        <td>{{$category->name}}</td>
                        <td>{{$category->description}}</td>  
                        <td>{{$category->content}}</td>   
                        <td>
                          <form action="{{route('category.destroy',['category'=>$category->id])}}" method="POST">
                            <a class="btn btn-warning btn-sm" href="{{ route('category.edit',['category'=>$category->id]) }}"><i class="mdi mdi-rename-box"></i></a>
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
            {{ $categories->links('vendor.pagination.default') }}     
        </div> 

        @endsection

      </div>
    </div>
  </div>
</div>
</div>
</div>