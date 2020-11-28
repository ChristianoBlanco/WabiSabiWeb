@extends('layouts.principal')

@section('title','SisArt | Conteudo Site')

@section('content')
 <!-- Content Header (Page header) -->
 <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Novo Conteúdo</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{url('admweb')}}">Home</a></li>
            <li class="breadcrumb-item active">Conteúdo do site</li>
            <li class="breadcrumb-item active">Novo conteúdo</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
   <form name="fomr1" action="{{url('admweb/conteudos')}}" method="POST" enctype="multipart/form-data" >
    @csrf
    <div class="form-group col-sm-6">
        <label class="col-form-label">Título: </label>
        <input type="text" class="form-control" name="titulo" id="inputSuccess" placeholder="Título...">
    </div>
    <div class="form-group col-sm-6">
        <label class="col-form-label">Conteúdo:</label>
        <input type="text" class="form-control" name="conteudo" id="inputSuccess" placeholder="Conteúdo...">
    </div>
    <div class="form-group col-sm-6">
    <button type="submit" class="btn btn-primary btn-sm">Salvar</button>
    <a href="{{url()->previous()}}" class="btn btn-danger btn-sm">Cancelar</a>
    </div>
   </form>
  <!-- /.card-body -->



@endsection
