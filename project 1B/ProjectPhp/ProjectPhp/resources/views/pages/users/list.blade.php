@extends('layouts.app1')

@section('content')


    {{-- <ul>
        @foreach($users as $user)
            <li>{{$user->name}}</li>
        @endforeach
    </ul> --}}
    <!-- partial -->

<div class="content-wrapper">
  <div class="page-header">
    <div class="col-lg-12 stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Table with list users</h4>
                   
                    <div class="table-responsive">
                      <table class="table table-bordered table-contextual">
                        <thead>
                          <tr>
                            <th>  ID </th>
                            <th> Name </th>
                            <th> Email </th>  
                          </tr>
                        </thead>
                        <tbody>
                            @foreach($users as $user)
                                <tr class="table-success">
                                    <td> <a href="/profiles/{{$user->id}}">{{$user->id}}</a> </td>
                                    <td>{{$user->name}}</td>
                                    <td>{{$user->email}}</td>   
                                </tr>
                          @endforeach
                        </tbody>
                      </table>  
                        {{ $users->links('vendor.pagination.default') }}     
                    </div> 

                    @endsection

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>


