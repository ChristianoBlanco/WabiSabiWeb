@extends('layouts.principal')

@section('title','SisArt | Conteudo Site')

@section('content')
 <!-- Content Header (Page header) -->
 <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Conteúdo do Site</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{url('admweb')}}">Home</a></li>
            <li class="breadcrumb-item active">Conteúdo do site</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
           <br>
           <a href="{{url('admweb/conteudo/criar')}}" class="btn btn-sm btn-primary" role="button">Novo conteúdo</a>

          <div class="card-tools">
            <div class="input-group input-group-sm" style="width: 150px;">
              <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

              <div class="input-group-append">
                <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
              </div>
            </div>
          </div>
        </div>
        <!-- /.card-header -->
        <div class="card-body table-responsive p-0">
          <table class="table table-hover">
            <thead>
              <tr>
                <th>ID</th>
                <th>Título</th>
                <th>Última Alteração</th>
                <th>Status</th>
                <th>Ações</th>
              </tr>
            </thead>
            <tbody>
                @foreach($conteudos as $conteudo)
                 <tr>
                    <td>{{$conteudo->id}}</td>
                    <td>{{$conteudo->titulo}}</td>
                    <td>{{$conteudo->updated_at}}</td>
                    <td>0</td>
                    <td>
                    <a href="{{url('admweb/conteudos/editar')}}{{'/'}}{{$conteudo->id}}" class="btn btn-sm btn-primary">Editar</a>
                    <a href="{{url('admweb/conteudos/apagar')}}{{'/'}}{{$conteudo->id}}" class="btn btn-sm btn-danger">Apagar</a>
                    </td>
                 </tr>
                @endforeach
            </tbody>
          </table>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </div>
  </div>
  <!-- /.row -->

@endsection
