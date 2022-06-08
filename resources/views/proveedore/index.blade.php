@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Proveedores</h1>
@stop

@section('content')
<div class="container-fluid">
                         <div class="align-left">
                            <a href="{{ route('proveedores.create') }}" class="btn btn-primary btn-sm align-left"  data-placement="left">
                              {{ __('Create New') }}
                            </a>
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
                                    
                                    <th>Idproveedor</th>
                                    <th>Nombreempresa</th>
                                    <th>Nit</th>
                                    <th>Email</th>
                                    <th>Nombre</th>

                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($proveedores as $proveedore)
                                    <tr>
                                        <td>{{ ++$i }}</td>
                                        
                                        <td>{{ $proveedore->IdProveedor }}</td>
                                        <td>{{ $proveedore->NombreEmpresa }}</td>
                                        <td>{{ $proveedore->Nit }}</td>
                                        <td>{{ $proveedore->Email }}</td>
                                        <td>{{ $proveedore->Nombre }}</td>

                                        <td>
                                            <form action="{{ route('proveedores.destroy',$proveedore->IdProveedor) }}" method="POST">
                                                <a class="btn btn-sm btn-primary " href="{{ route('proveedores.show',$proveedore->IdProveedor) }}"><i class="fa fa-fw fa-eye"></i> </a>
                                                <a class="btn btn-sm btn-success" href="{{ route('proveedores.edit',$proveedore->IdProveedor) }}"><i class="fa fa-fw fa-edit"></i> </a>
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            {!! $proveedores->links() !!}
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
