@extends('template')

@section('content')

<div class="container">
  <table class="table">
    <thead>
      <tr>
        <th scope="col">No</th>
        <th scope="col">Judul</th>
        <th scope="col">Category</th>
        <th scope="col">Aksi</th>
      </tr>
    </thead>
    <tbody>
      <?php $i = 1; ?>
      @foreach( $blogs as $item)
      <tr>
        <th scope="row">{{$i++}}</th>
        <td>{{ $item->judul }}</td>
        <td>{{ $item->category_relation->judul }}</td>
        <td>
          <a href="/detail/{{$item->id}}" type="button" class="btn btn-primary">Detail</a>
          <a href="/update/{{$item->id}}" type="button" class="btn btn-success">Update</a>
          <form action="/delete/action" method="POST">
            @csrf
            <input type="hidden" name="id" value="{{$item->id}}">
            <button onclick="return confirm('yakin dihapus nih?')" type="submit" class="btn btn-danger">Hapus</button>
          </form>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>

@endsection