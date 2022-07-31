@extends('layouts.app1') 
@section('content')
{{-- <p>họ tên: {{$uprofile->full_name}}</p>
<p>hảng: {{$uprofile->address}}</p>
<p>Quốc gia: {{$uprofile->birthday}}</p> --}}
{{-- <a href="{{route('profiles.edit',['profile' => $profile->id])}}">Edit</a> --}}

<div class="card card-body ">
    <div class="row gx-4 mb-2">
      <div class="col-auto">
        <div class="avatar avatar-xl position-relative">
          <img src="../assets/img/bruce-mars.jpg" alt="profile_image" class="w-100 border-radius-lg shadow-sm">
        </div>
      </div>
      <div class="col-auto my-auto">
        <div class="h-100">
          <h5 class="mb-1">
            Richard Davis
          </h5>
          <p class="mb-0 font-weight-normal text-sm">
            CEO / Co-Founder
          </p>
        </div>
      </div>
     
    </div>
    <div class="row">
      <div class="row">
       
        <div class="card card-plain h-100">
            <div class="card-header pb-0 p-3">
              <div class="row">
                <div class="col-md-8 d-flex align-items-center">
                  <h6 class="mb-0">Profile Information</h6>
                </div>
                <div class="col-md-4 text-end">
                  <a href="/uprofiles/{{$uprofile->id}}/edit">
                    <i class="fas fa-user-edit text-secondary text-sm" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit Profile" ></i>
                  </a>
                </div>
              </div>
            </div>
            <div class="card-body p-3">
              <p class="text-sm">
                Hi, I’m Alec Thompson, Decisions: If you can’t decide, the answer is no. If two equally difficult paths, choose the one more painful in the short term (pain avoidance is creating an illusion of equality).
              </p>
              <hr class="horizontal gray-light my-4">
              <ul class="list-group">
                <li class="list-group-item border-0 ps-0 pt-0 text-sm"><strong class="text-dark">Full Name:</strong> &nbsp; {{$uprofile->full_name}}</li>
                <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">Address:</strong> &nbsp; {{$uprofile->address}}</li>
                <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">Birthday:</strong> &nbsp;{{$uprofile->birthday}}</li>
                <a href="{{route('uprofiles.edit',['uprofile' => $uprofile->id])}}">Edit</a>
                <li class="list-group-item border-0 ps-0 pb-0">
                  <strong class="text-dark text-sm">Social:</strong> &nbsp;
                  <a class="btn btn-facebook btn-simple mb-0 ps-1 pe-2 py-0" href="javascript:;">
                    <i class="fab fa-facebook fa-lg"></i>
                  </a>
                  <a class="btn btn-twitter btn-simple mb-0 ps-1 pe-2 py-0" href="javascript:;">
                    <i class="fab fa-twitter fa-lg"></i>
                  </a>
                  <a class="btn btn-instagram btn-simple mb-0 ps-1 pe-2 py-0" href="javascript:;">
                    <i class="fab fa-instagram fa-lg"></i>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        
        
      </div>
    </div>
  </div>
@endsection