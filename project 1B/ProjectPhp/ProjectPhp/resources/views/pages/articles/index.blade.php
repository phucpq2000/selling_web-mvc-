@extends('layouts.app1')

@section('content')
<div class="content-wrapper">
  <div class="page-header">
    <div class="col-lg-12 stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Table with list articles</h4>
                   
                    <a class="btn btn-primary mr-2">Add New Articles</a>
                    </p>
                    <div class="table-responsive">
                      <table class="table table-bordered table-contextual">
                        <thead>
                          <tr>
                            <th>  ID </th>
                            <th> Title </th>
                            <th> Body </th>  
                            <th> Name </th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach($articles as $article)
                                @foreach($article->tags as $tag)
                                 <tr class="table-success">
                                    <td>{{$article->id}}</a> </td>
                                    <td>{{$article->title}}</td>
                                    <td>{{$article->body}}</td> 
                                    <td> {{$tag->name}} </td>
                                   
                                </tr>
                                @endforeach
                          @endforeach
                        </tbody>
                      </table>  
                        {{ $articles->links('vendor.pagination.default') }}     
                    </div> 

                    @endsection

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>


