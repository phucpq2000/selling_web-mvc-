{{-- @extends('layouts.app')

	@section('content')
		<ul>
			@foreach($users as $user)
				<li>{{$user->user_name}}</li>
				<li>{{$user->full_name}}</li>
				<li>{{$user->password}}</li>

			@endforeach
		</ul>
	@endsection --}}
	
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
					<table class="table table-hover table-bordered">
					  <thead>
						<tr >
						  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"><h5>ID</h5></th>
						  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"><h5>Name</h5></th>
						  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"><h5>Email</h5></th>
						  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"><h5>password</h5></th>
						  {{-- <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Employed</th> --}}
						  <th class="text-secondary opacity-7"></th>
						</tr>
					  </thead>
					  <tbody>
						@foreach ($users as $user)
						<tr>
						 
								  <td class="align-middle text-center text-sm">
									 <p class="text-xs font-weight-bold mb-0">{{$user->id}}</p>
							
								   </td>        
					
							  
							
										<td class="align-middle text-center text-sm">
										  <h1 class="text-xs font-weight-bold mb-0">{{$user->name}}</h1>
										</td>
									 
								  
									<td class="align-middle text-center text-sm">
									  <p class="text-xs font-weight-bold mb-0">{{$user->email}}</p>
									  
									</td>
									<td class="align-middle text-center text-sm">
									  <span class="badge badge-sm bg-gradient-success">{{$user->password}}</span>
									</td>
									
									<td class="d-flex align-items-center justify-content-around">
								
										<form action="{{route('uprofiles.show',$user->id)}}" method="get">
											<button class="btn btn-sm btn-primary rounded-0">
											  Show prorilfe
											</button>
										  </form>
								
								
									
									</td>
									
						</tr>
						@endforeach  
					  </tbody>
					</table>
					{{-- <span>{{ $beverages->links(); }}</span> --}}
				  </div>
				</div>
			  </div>
			</div>
		  </div>
		
		 
	
	</body>
	
	@endsection	