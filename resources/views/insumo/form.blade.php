<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('IdInsumo') }}
            {{ Form::text('IdInsumo', $insumo->IdInsumo, ['class' => 'form-control' . ($errors->has('IdInsumo') ? ' is-invalid' : ''), 'placeholder' => 'Idinsumo']) }}
            {!! $errors->first('IdInsumo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Descripcion') }}
            {{ Form::text('Descripcion', $insumo->Descripcion, ['class' => 'form-control' . ($errors->has('Descripcion') ? ' is-invalid' : ''), 'placeholder' => 'Descripcion']) }}
            {!! $errors->first('Descripcion', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('StockMin') }}
            {{ Form::text('StockMin', $insumo->StockMin, ['class' => 'form-control' . ($errors->has('StockMin') ? ' is-invalid' : ''), 'placeholder' => 'Stockmin']) }}
            {!! $errors->first('StockMin', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('StockMax') }}
            {{ Form::text('StockMax', $insumo->StockMax, ['class' => 'form-control' . ($errors->has('StockMax') ? ' is-invalid' : ''), 'placeholder' => 'Stockmax']) }}
            {!! $errors->first('StockMax', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Stock') }}
            {{ Form::text('Stock', $insumo->Stock, ['class' => 'form-control' . ($errors->has('Stock') ? ' is-invalid' : ''), 'placeholder' => 'Stock']) }}
            {!! $errors->first('Stock', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('UnidadesMedida_IdUnidadMedida') }}
            {{ Form::text('UnidadesMedida_IdUnidadMedida', $insumo->UnidadesMedida_IdUnidadMedida, ['class' => 'form-control' . ($errors->has('UnidadesMedida_IdUnidadMedida') ? ' is-invalid' : ''), 'placeholder' => 'Unidadesmedida Idunidadmedida']) }}
            {!! $errors->first('UnidadesMedida_IdUnidadMedida', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>