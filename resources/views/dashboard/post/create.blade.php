@extends('dashboard.master')
@section('content')
  @include('dashboard.partials.validation')
  <form action="{{ route('posts.store') }}" method="POST">
    @csrf
    <div class="form-group">
      <label for="title">Titulo</label>
      <input type="text" class="form-control" name="title" id="title" placeholder="Title" value="{{old('title')}}">
      @error('title')
        <small class="text-danger">{{ $message }}</small>
      @enderror
    </div>
    <div class="form-group">
      <label for="url_clean">Url limpia</label>
      <input type="text" class="form-control" name="url_clean" id="url_clean" placeholder="url clean" value="{{old('url_clean')}}">
      @error('url_clean')
        <small class="text-danger">{{ $message }}</small>
      @enderror
    </div>
    <div class="form-group">
      <label for="content">Contenido</label>
      <textarea class="form-control" id="content" name="content" rows="3">{{old('content')}}</textarea>
      @error('content')
        <small class="text-danger">{{ $message }}</small>
      @enderror
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@endsection
