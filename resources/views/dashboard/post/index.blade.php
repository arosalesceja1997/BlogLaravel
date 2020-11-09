@extends('dashboard.master')
@section('content')
  <a href="{{ route('posts.create') }}" class="btn btn-success"> Add </a>
  <table class="table mt-2">
    <thead>
      <tr>
        <td>Id</td>
        <td>Titulo</td>
        <td>Posteado</td>
        <td>Creacion</td>
        <td>Actualizacion</td>
        <td>Acciones</td>
      </tr>
    </thead>
    <tbody>
      @foreach($posts as $post)
        <tr>
          <td>{{$post->id}}</td>
          <td>{{$post->title}}</td>
          <td>{{$post->posted}}</td>
          <td>{{$post->created_at->format('Y-m-d')}}</td>
          <td>{{$post->updated_at->format('Y-m-d')}}</td>
          <td>
            <input type="button" value="X" class="btn btn-sm btn-danger">
            <input type="button" value="X" class="btn btn-sm btn-warning">
            <input type="button" value="X" class="btn btn-sm btn-success">
          </td>
        </tr>
      @endforeach
    </tbody>
  </table>
  {{$posts->links()}}
@endsection
