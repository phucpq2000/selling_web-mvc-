@extends('layouts.app1') 
@section('content')
<p>họ tên: {{$profile->full_name}}</p>
<p>hảng: {{$profile->producer}}</p>
<p>Quốc gia: {{$profile->country}}</p>
<a href="{{route('profiles.edit',['profile' => $profile->id])}}">Edit</a>

@endsection