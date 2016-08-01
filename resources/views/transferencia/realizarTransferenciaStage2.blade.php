@extends('layout')
@section('title', 'Realizar Transferência')
@section('content')

<div class="row">
    <div class="col-md-12">
        <div class="page-header">
            <h2>Realizar Transferências <small>Masters</small> </h2>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-7">
        <form action="" class="form-horizontal">
            <div class="form-group">
                <div class="col-sm-10">
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" value="1" name="mover_pallet_inteiro">Mover Pallet Inteiro
                        </label>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label for="master" class="col-sm-4">Masters no Pallet</label>
                <div class="col-sm-6">
                    <select name="master"  id="master" class="form-control">
                        <option value="1">Master 1</option>
                        <option value="2">Master 2</option>
                        <option value="3">Master 3</option>
                        <option value="4">Master 4</option>
                    </select>
                </div>
                <div class="col-sm-2">
                    <button class="btn btn-warning pull-right">Adicionar</button>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-12">Masters para transferência</label>
            </div>
            <div class="form-group">
                <table class="col-sm-12 table table-striped">
                    <thead>
                        <tr>
                            <th>Code</th>
                            <th>Qtde IMEIs</th>
                            <th>Editar</th>
                            <th>Remover</th>
                        </tr>
                    </thead>
                </table>
            </div>

            <div class="form-group">
                <div class="col-sm-12">
                    <a href="/realizar-transferencia-stage-1" class="btn btn-default">
                    <i class="fa fa-chevron-left" aria-hidden="true"></i>
                    Voltar
                </a>
                <a href="#" class="btn btn-primary">
                   <i class="fa fa-floppy-o" aria-hidden="true"></i>
                    Salvar
                </a>
                <a href="#" class="btn btn-success pull-right">
                    Próximo <i class="fa fa-chevron-right" aria-hidden="true"></i>
                </a>
                </div>
            </div>
        </form>
    </div>
</div>

@endsection
