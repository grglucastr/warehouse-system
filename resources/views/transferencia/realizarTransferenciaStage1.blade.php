@extends('layout')
@section('title', 'Realizar Transferência')
@section('content')

<div class="row">
    <div class="col-md-12">
        <div class="page-header">
            <h2>Realizar Transferências <small>Pallets</small> </h2>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-6">
        <form action="/transferencia-stage-1" method="post" class="form-horizontal">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="form-group">
                <label for="warehouse-origin" class="col-sm-4">Warehouse Origin</label>
                <div class="col-sm-8">
                    <select name="warehouse_origin" value="{{Request::old('warehouse-origin')}}" id="warehouse-origin" class="form-control">
                        <option value="1">Warehouse Origin 1</option>
                        <option value="2">Warehouse Origin 2</option>
                        <option value="3">Warehouse Origin 3</option>
                        <option value="4">Warehouse Origin 4</option>
                    </select>
                </div>
            </div>

            <div class="form-group">
                <label for="warehouse-destiny" class="col-sm-4">Warehouse Destiny</label>
                <div class="col-sm-8">
                    <select name="warehouse_destiny" id="warehouse-destiny" class="form-control">
                        <option value="1">Warehouse Destiny 1</option>
                        <option value="2">Warehouse Destiny 2</option>
                        <option value="3">Warehouse Destiny 3</option>
                        <option value="4">Warehouse Destiny 4</option>
                    </select>
                </div>
            </div>

            <div class="form-group">
                <label for="pallet" class="col-sm-4">Pallet Mover</label>
                <div class="col-sm-8">
                    <select name="pallet" id="pallet" class="form-control">
                        <option value="1">Pallet 1</option>
                        <option value="2">Pallet 2</option>
                        <option value="3">Pallet 3</option>
                        <option value="4">Pallet 4</option>
                    </select>
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-8 col-sm-offset-4">
                    <a href="/" class="btn btn-default">Cancelar</a>

                    <button class="btn btn-primary" type="submit" name="acao" value="save"><i class="fa fa-floppy-o" aria-hidden="true"></i> Salvar</button>

                    <button class="btn btn-success pull-right" type="submit" name="acao" value="forward">Próximo <i class="fa fa-chevron-right" aria-hidden="true"></i></button>
                </div>
            </div>
        </form>
    </div>
</div>

@endsection
