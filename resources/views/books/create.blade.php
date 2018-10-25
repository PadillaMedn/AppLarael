@extends('books.layout')


@section('content')

<h1 class="text-center">Agregar Libros</h1>
<hr>
@if (Session::has('message'))
     <div class="alert alert-info">{{Session::get('message')}}</div>
@endif



<div class="container" >

<form action="{{route('books.store')}}" method="POST" >
@csrf
  
   <div class="row" >
     <div class="col-md-12">
        <div class="form-group">
           <strong>Titulo:</strong>
           <input type="text" name="title" class="form-control" Placeholder="Titulo del Libro">
        </div>
        <div class="col-md-12">
            <div class="form-group">
               <strong>Description:</strong>
               <textarea class="form-control" name="description" Placeholder="Reseña"></textarea>
            </div>
        </div>
     </div>
     <div class="col-md-12 text-center">
           <button type="submit" class="btn btn-primary">Enviar</button>
     </div>
   </div>
</form>
</div>
@endsection