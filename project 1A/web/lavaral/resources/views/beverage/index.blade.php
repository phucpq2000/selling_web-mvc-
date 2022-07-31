@extends('layouts.app1') 

@section('content')
<body class="g-sidenav-show  bg-gray-200">
    <div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <div class="card my-4">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
              <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
               
                  <div class="row">
                    <div class="col-6 d-flex align-items-center">
                      <h6 class="text-white text-capitalize ps-3">Menu </h6>
                    </div>
                    <div class="col-6 text-end">
                      <a class="btn bg-gradient-dark mb-0" href="{{route('beverages.create')}}" method="get"><i class="material-icons text-sm">add</i>&nbsp;&nbsp;Add New Card</a>
                    </div>
                  </div>
                </div>
                
               
              </div>
              {{-- <form action="{{route('beverages.create')}}" method="get">
                <button type="submit" class="btn btn-info text-uppercase font-weight-bold rounded-0">
                     create a new beverage 
                </button>
            </form> --}}

            {{-- button create --}}
            
            {{-- <div class="col-6 text-end">
              <a class="btn bg-gradient-dark mb-0" href="{{route('beverages.create')}}" method="get"><i class="material-icons text-sm">add</i>&nbsp;&nbsp;Add New Card</a>
            </div> --}}
            </div>
            <div class="card-body px-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table table-hover table-bordered">
                  <thead>
                    <tr >
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"><h5>ID</h5></th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"><h5>Name</h5></th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"><h5>Price</h5></th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"><h5>Type</h5></th>
                      {{-- <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Employed</th> --}}
                      <th class="text-secondary opacity-7"></th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($beverages as $beverage)
                    <tr>
                     
                              <td class="align-middle text-center text-sm">
                                 <p class="text-xs font-weight-bold mb-0">{{$beverage->id}}</p>
                        
                               </td>        
                
                          
                        
                                    <td class="align-middle text-center text-sm">
                                      <h1 class="text-xs text-uppercase font-weight-bold mb-3">{{$beverage->name}}</h1>
                                    </td>
                                 
                              
                                <td class="align-middle text-center text-sm">
                                  <p class="text-xs font-weight-bold mb-0">{{$beverage->price}}$</p>
                                  
                                </td>
                                <td class="align-middle text-center text-sm">
                                  <span class="badge badge-sm bg-gradient-success">{{$beverage->type}}</span>
                                </td>
                                {{-- // action  button--}}
                                {{-- <td class="align-middle">
                                  <a href="/profiles/{{$beverages->id}}">profiles</a>
                                </td> --}}
                                <td class="d-flex align-items-center justify-content-around">
                            
                                  <form action="{{route('profiles.show',$beverage->id)}}" method="get">
                                    <button class="btn btn-sm btn-primary rounded-0">
                                      Show prorilfe
                                    </button>
                                  </form>
                                  {{-- <form action="{{route('profiles.create',$beverages->id)}}" method="get">
                                    <button class="btn btn-sm btn-primary rounded-0">
                                      create prorilfe
                                    </button>
                                  </form> --}}
                                  <form action="{{route('beverages.edit',$beverage->id)}}" method="get">
                                    <a class="btn btn-link text-dark px-3 mb-0" href="{{route('beverages.edit',$beverage->id)}}"   method="get"><i class="material-icons text-sm me-2">edit</i>Edit</a>
                                  </form>
                                  <form action="{{route('beverages.destroy',$beverage->id)}}" method="post">
                                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                                    <input type="hidden" name="_method" value="delete">
                                    <button class="btn btn-sm btn-danger rounded-0">
                                      Delete
                                    </button>
                                  </form>
                                </td>
                                
                    </tr>
                    @endforeach  
                  </tbody>
                </table>
                <span>{{ $beverages->links(); }}</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    
    </div>
  </main>
  <div class="fixed-plugin">
    <a class="fixed-plugin-button text-dark position-fixed px-3 py-2">
      <i class="material-icons py-2">settings</i>
    </a>
    <div class="card shadow-lg">
      <div class="card-header pb-0 pt-3">
        <div class="float-start">
          <h5 class="mt-3 mb-0">Material UI Configurator</h5>
          <p>See our dashboard options.</p>
        </div>
        <div class="float-end mt-4">
          <button class="btn btn-link text-dark p-0 fixed-plugin-close-button">
            <i class="material-icons">clear</i>
          </button>
        </div>
        <!-- End Toggle Button -->
      </div>
      <hr class="horizontal dark my-1">
      <div class="card-body pt-sm-3 pt-0">
        <!-- Sidebar Backgrounds -->
        <div>
          <h6 class="mb-0">Sidebar Colors</h6>
      
      </div>
    </div>
  </div>

</body>

@endsection