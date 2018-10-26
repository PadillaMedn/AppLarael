@extends('books.layout')


@section('content')

<h1 class="text-center" style="color:white">Actualizar Libros</h1>
<hr>
@if (Session::has('message'))
     <div class="alert alert-info">{{Session::get('message')}}</div>
@endif

<div class="container">

<form action="{{route('books.update',$book->id)}}" method="POST">
@csrf
@method('PUT')
   <div class="row">
     <div class="col-md-12">
        <div class="form-group">
           <strong style="color:white">Titulo:</strong>
           <input type="text" name="title" value="{{$book->title}}" class="form-control" Placeholder="Titulo del Libro">
        </div>
        <div class="col-md-12">
            <div class="form-group">
               <strong style="color:white">Description:</strong>
               <textarea class="form-control" name="description" Placeholder="Reseña">{{$book->description}}</textarea>
            </div>
        </div>
     </div>
     <div class="col-md-12 text-center">
           <button type="submit" class="btn pos" style="color:black">Enviar</button>
     </div>
   </div>
</form>
</div>
@endsection
