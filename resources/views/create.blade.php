@extends('template')

@section('content')
<div class="container">
  <form action="/create/action" method="POST">
    @csrf
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Judul</label>
      <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="judul">
      <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Image</label>
      <input type="text" class="form-control" id="exampleInputPassword1" name="image">
    </div>
    <div class="form-floating">
      <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px" name="description"></textarea>
      <label for="floatingTextarea2">Description</label>
    </div>
    <select class="form-select my-3" aria-label="Default select example" name="id_category">
      @foreach($categories as $item)
        <option value="{{$item->id}}">{{$item->judul}}</option>
      @endforeach
    </select>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>
@endsection