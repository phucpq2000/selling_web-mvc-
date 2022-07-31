@extends('layouts.app1') 

@section('content')
<body class="g-sidenav-show  bg-gray-200">
    <div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <div class="card my-4">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
              <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                <h6 class="text-white text-capitalize ps-3">Menu </h6>
              </div>
            </div>
            <div class="card-body px-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"><h5>ID</h5></th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"><h5>Name</h5></th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2"><h5>Price</h5></th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"><h5>Type</h5></th>
                      {{-- <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Employed</th> --}}
                      <th class="text-secondary opacity-7"></th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($beverage as $beverages)
                    <tr>
                     
                              <td>
                                 <p class="text-xs font-weight-bold mb-0">{{$beverages->id}}</p>
                        
                               </td>        
                            <td>
                               <div class="d-flex px-2 py-1">
                                    <div>
                                      {{-- <img src="../assets/img/team-2.jpg" class="avatar avatar-sm me-3 border-radius-lg" alt="user1"> --}}
                                    </div>
                                    <div class="d-flex flex-column justify-content-center">
                                      <h6 class="mb-0 text-sm">{{$beverages->name}}</h6>
                                      <p class="text-xs text-secondary mb-0"></p>
                                    </div>
                                  </div>
                                </td>
                                <td>
                                  <p class="text-xs font-weight-bold mb-0">{{$beverages->price}}$</p>
                                  
                                </td>
                                <td class="align-middle text-center text-sm">
                                  <span class="badge badge-sm bg-gradient-success">{{$beverages->type}}</span>
                                </td>
                                
                                <td class="align-middle">
                                  <a href="javascript:;" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                                    Edit
                                  </a>
                                </td>
                       
                    </tr>
                    @endforeach  
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    
      <footer class="footer py-4  ">
        <div class="container-fluid">
          <div class="row align-items-center justify-content-lg-between">
            <div class="col-lg-6 mb-lg-0 mb-4">
              <div class="copyright text-center text-sm text-muted text-lg-start">
                © <script>
                  document.write(new Date().getFullYear())
                </script>,
                made with <i class="fa fa-heart"></i> by
                <a href="https://www.creative-tim.com" class="font-weight-bold" target="_blank">Creative Tim</a>
                for a better web.
              </div>
            </div>
            <div class="col-lg-6">
              <ul class="nav nav-footer justify-content-center justify-content-lg-end">
                <li class="nav-item">
                  <a href="https://www.creative-tim.com" class="nav-link text-muted" target="_blank">Creative Tim</a>
                </li>
                <li class="nav-item">
                  <a href="https://www.creative-tim.com/presentation" class="nav-link text-muted" target="_blank">About Us</a>
                </li>
                <li class="nav-item">
                  <a href="https://www.creative-tim.com/blog" class="nav-link text-muted" target="_blank">Blog</a>
                </li>
                <li class="nav-item">
                  <a href="https://www.creative-tim.com/license" class="nav-link pe-0 text-muted" target="_blank">License</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </footer>
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