@extends('template')

@section('content')
<div class="container">
<div class="card" style="width: 18rem;">
  <img src="..." class="card-img-top" alt="{{$blog->image}}">
  <div class="card-body">
    <h5 class="card-title">{{$blog->judul}}</h5>
    <p class="card-text">{{$blog->description}}</p>
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item">{{$blog->category_relation->judul}}</li>
  </ul>
</div>
</div>
@endsection