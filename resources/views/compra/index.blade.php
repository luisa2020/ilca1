@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Compras</h1>
@stop

@section('content')
<!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#crearComprasModal">
        <i class="fas fa-user-plus"></i> Crear nuevo </i>
    </button>

    <!-- Modal -->
    <div class="modal fade" id="crearComprasModal" tabindex="-1" role="dialog"
        aria-labelledby="crearComprasModal" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Nueva compra</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body">
                    @csrf
                    @if ($errors->any())
                        @foreach ($errors->all() as $error)
                            <p>{{ $error }}</p>
                        @endforeach
                    @endif
                    <form action="{{ route('comprasGuardar') }}" method="POST">
                        @csrf

                        <div class="form-group">
                            <label for="nombre">Numero de factura</label>
                            <input type="text" class="form-control" name="NombreEmpresa" id="NombreEmpresa"
                                placeholder="Ingrese nombre de la empresa" value="{{ old('Nombreempresa') }}">
                            <small class="text-danger">{{ $errors->first('NombreEmpresa') }}</small>
                        </div>
                    

                    <div class="form-group">
                        <label for="nombre">Total</label>
                        <input type="text" class="form-control" name="Nit" id="Nit" placeholder="Ingrese el NIT"
                            value="{{ old('Nit') }}">
                        <small class="text-danger">{{ $errors->first('Nit') }}</small>
                    </div>

                    <div class="form-group">
                        <label for="nombre">Fecha</label>
                        <input type="date" class="form-control" name="Fecha" id="Fecha" placeholder="Ingrese la fecha" value="{{ old('Fecha') }}">
                        <small class="text-danger">{{ $errors->first('Fecha') }}</small>
                    </div>

                    <div class="form-group">
                        <label for="nombre">Estado</label>
                        <input type="text" class="form-control" name="Nombre" id="Nombre"
                            placeholder="Ingrese el nombre" value="{{ old('Nombre') }}">
                        <small class="text-danger">{{ $errors->first('Nombre') }}</small>
                    </div>
                    {{--  <div class="form-group">
                        <label for="nombre">Id proveedor</label>
                        <input type="text" class="form-control" name="Nombre" id="Nombre"
                            placeholder="Ingrese el nombre" value="{{ old('Nombre') }}">
                        <small class="text-danger">{{ $errors->first('Nombre') }}</small>
                    </div>  --}}
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        <button type="submit" class="btn btn-primary">Guardar</button>
                    </div>
            </div>
        </div>
    </div>
    </form>



                         <div class="float-right">
                            <a href="{{ route('compras.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                <div class="container">
                    @yield('contenido')
                </div>

                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-hover">
                            <thead class="thead">
                                <tr>
                                    <th>No</th>
                                    
                                    <th>Idcompra</th>
                                    <th>Factura</th>
                                    <th>Total</th>
                                    <th>Fecha</th>
                                    <th>Estado</th>
                                    <th>Proveedores Idproveedor</th>

                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($compras as $compra)
                                    <tr>
                                        <td>{{ ++$i }}</td>
                                        
                                        <td>{{ $compra->IdCompra }}</td>
                                        <td>{{ $compra->Factura }}</td>
                                        <td>{{ $compra->Total }}</td>
                                        <td>{{ $compra->Fecha }}</td>
                                        <td>{{ $compra->Estado }}</td>
                                        <td>{{ $compra->Proveedores_IdProveedor }}</td>

                                        <td>
                                            <form action="{{ route('compras.destroy',$compra->IdCompra) }}" method="POST">
                                                <a class="btn btn-sm btn-primary " href="{{ route('compras.show',$compra->IdCompra) }}"><i class="fa fa-fw fa-eye"></i></a>
                                                <a class="btn btn-sm btn-success" href="{{ route('compras.edit',$compra->IdCompra) }}"><i class="fa fa-fw fa-edit"></i></a>
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
            {!! $compras->links() !!}
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
