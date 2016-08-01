@extends('layout')

@section('title', 'Transferência')

@section('content')

<div class="row">
    <div class="col-md-12">
        <div class="page-header">
            <h2>Transferências</h2>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-6 col-sm-12">
        <div class="row">
            <div class="col-md-12">
                <a href="realizar-transferencia-stage-1" class="btn btn-primary">
                    Realizar Transferências
                </a>
                <button class="btn btn-warning">
                    Acompanhar Status de Transferências
                </button>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <div class="page-header">
            <h3>Históricos e registros de transferências</h3>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-4 col-sm-12">
        <form action="" class="form-horizontal">
            <div class="form-group">
                <label for="data" class="col-sm-2">Data</label>
                <div class="col-sm-10">
                    <input type="text" id="data" class="form-control" placeholder="Data">
                </div>
            </div>

            <div class="form-group">
                <label for="code" class="col-sm-2">Code</label>
                <div class="col-sm-10">
                    <input type="text" id="code" class="form-control" placeholder="Code">
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-10 col-sm-offset-2">
                    <button type="submit" class="btn btn-primary pull-right">Pesquisar</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
