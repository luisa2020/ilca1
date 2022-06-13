@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <div style="display: flex; justify-content: space-between; align-items: center;">

                        <span id="card_title">
                            {{ __('Insumo') }}
                        </span>

                         <div class="float-right">
                            <a href="{{ route('insumos.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                    
                                    <th>Idinsumo</th>
                                    <th>Descripcion</th>
                                    <th>Stockmin</th>
                                    <th>Stockmax</th>
                                    <th>Stock</th>
                                    <th>Unidadesmedida Idunidadmedida</th>

                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($insumos as $insumo)
                                    <tr>
                                        <td>{{ ++$i }}</td>
                                        
                                        <td>{{ $insumo->IdInsumo }}</td>
                                        <td>{{ $insumo->Descripcion }}</td>
                                        <td>{{ $insumo->StockMin }}</td>
                                        <td>{{ $insumo->StockMax }}</td>
                                        <td>{{ $insumo->Stock }}</td>
                                        <td>{{ $insumo->UnidadesMedida_IdUnidadMedida }}</td>

                                        <td>
                                            <form action="{{ route('insumos.destroy',$insumo->IdInsumo) }}" method="POST">
                                                <a class="btn btn-sm btn-primary " href="{{ route('insumos.show',$insumo->IdInsumo) }}"><i class="fa fa-fw fa-eye"></i> /a>
                                                <a class="btn btn-sm btn-success" href="{{ route('insumos.edit',$insumo->IdInsumo) }}"><i class="fa fa-fw fa-edit"></i> </a>
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
            {!! $insumos->links() !!}
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
