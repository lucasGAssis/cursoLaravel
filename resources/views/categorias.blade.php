@extends('layout.app', ["current" => "categorias"])

@section('body')
<div class="card border">
    <div class="card-body">
        <h5 class="card-title">Cadastro de Categorias</h5>
        <!---Aqui vai verificar se existem categorias cadastradas no banco -->
        @if(count($cats) > 0)
        <table class="table table-ordered table-hover">
            <thead>
                <tr>
                    <th>Código</th>
                    <th>Nome da Categoria</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                <!---Aqui vai pegar os dados cadastrados do banco. Essas variáveis est]ao sedo chamadas no controlador de categorias -->
                @foreach ($cats as $cat)
                    <tr>
                        <td>{{$cat->id}}</td>
                        <td>{{$cat->nome}}</td>
                        <td>
                            <a href="/categorias/editar/{{$cat->id}}" class="btn btn-sm btn-primary">Editar</a>
                            <a href="/categorias/apagar/{{$cat->id}}" class="btn btn-sm btn-danger">Apagar</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        @else
        <p>Não Existem categorias cadastradas</p>
        @endif
    </div>
    <div class="card-footer">
        <a href="/categorias/novo" class="btn btn-sm btn-primary" role="button">Nova Categoria</a>
    </div>
</div>


@endsection