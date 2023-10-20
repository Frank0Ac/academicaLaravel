@extends('adminlte::page')

@section('title', 'Facultades')

@section('content_header')
    <h1> Listado de Facultades </h1>
@stop

@section('content')
<div class="text-right">
    <a href="#" class="btn btn-primary">
        Registrarse <i class="fas fa-user-plus ml-2"></i>
    </a>
</div> <br>

<table class="table table-bordered border-primary">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col"> Código </th>
        <th scope="col"> Nombre </th>
        <th scope="col"> Opción </th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row"></th>
        <td></td>
        <td></td>
        <td>
            <a href="#" class="btn btn-warning">
                <i class="fas fa-edit"></i> Editar
            </a>
            <!-- Botón de Borrar con ícono -->
            <a href="#" class="btn btn-danger">
                <i class="fas fa-trash-alt"></i> Borrar
            </a>
        </td>
      </tr>
    </tbody>
  </table>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop