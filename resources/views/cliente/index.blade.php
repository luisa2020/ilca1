@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Clientes</h1>
@stop

@section('content')
<div class="container-fluid">
                         <div class="align-left">
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong">
                                <a href="{{ route('clientes.create') }}">
                                    {{ __('Crear nuevo') }}
                                  </a>
                              </button>
                          </div>
                    </div>
                </div>
                @if ($message = Session::get('success'))
                    <div class="alert alert-success">
                        <p>{{ $message }}</p>
                    </div>
                @endif

                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-hover">
                            <thead class="thead">
                                <tr>
                                    <th>No</th>
                                    
                                    <th>Idcliente</th>
                                    <th>Nombre</th>
                                    <th>Apellido</th>
                                    <th>Cedula</th>
                                    <th>Telefono</th>
                                    <th>Direccion</th>
                                    <th>Email</th>
                                    <th>Estado</th>

                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($clientes as $cliente)
                                    <tr>
                                        <td>{{ ++$i }}</td>
                                        
                                        <td>{{ $cliente->IdCliente }}</td>
                                        <td>{{ $cliente->Nombre }}</td>
                                        <td>{{ $cliente->Apellido }}</td>
                                        <td>{{ $cliente->Cedula }}</td>
                                        <td>{{ $cliente->Telefono }}</td>
                                        <td>{{ $cliente->Direccion }}</td>
                                        <td>{{ $cliente->Email }}</td>
                                        <td>{{ $cliente->Estado }}</td>

                                        <td>
                                            <form action="{{ route('clientes.destroy',$cliente->IdCliente) }}" method="POST">
                                                <a class="btn btn-sm btn-primary " href="{{ route('clientes.show',$cliente->IdCliente) }}"><i class="fa fa-fw fa-eye"></i></a>
                                                <a class="btn btn-sm btn-success" href="{{ route('clientes.edit',$cliente->IdCliente) }}"><i class="fa fa-fw fa-edit"></i></a>
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i></button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            {!! $clientes->links() !!}
        </div>
    </div>
</div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
