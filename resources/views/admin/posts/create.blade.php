@extends('layouts.app')

@section('content')
<div class="container">

 <h1>Crea un Post</h1>

 <form action="{{ route('admin.posts.store') }}" method="POST">
    @csrf
    <div class="mb-3">
      <label for="title" class="form-label">Titolo</label>
      <input type="text" class="form-control" id="title" name="title" placeholder="Titolo">
    </div>
    <div class="mb-3">
      <label for="content" class="form-label">Contenuto</label>
      <textarea class="form-control" name="content" id="content" cols="30" rows="10"></textarea>

    </div>

    <button type="submit" class="btn btn-primary">Crea</button>

</div>
@endsection
