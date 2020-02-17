@extends('layout.app', ["current" => "produtos"])

@section('body')
<div class="card border">
    <div class="card-body">
        <h5 class="card-title">Cadastro de Produtos</h5>
        <!---Aqui vai verificar se existem produtos cadastradas no banco -->
        @if(count($prods) > 0)
        <table class="table table-ordered table-hover">
            <thead>
                <tr>
                    <th>Código</th>
                    <th>Nome do produto</th>
                    <th>Estoque</th>
                    <th>Preço</th>
                    <th>Nome da categoria</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                <!---Aqui vai pegar os dados cadastrados do banco. Essas variáveis estão sedo chamadas no controlador de produtos -->
                @foreach ($prods as $prod)
                    <tr>
                        <td>{{$prod->id}}</td>
                        <td>{{$prod->nome}}</td>
                        <td>{{$prod->estoque}}</td>
                        <td>{{$prod->preco}}</td>
                        <td>{{$prod->categoria_id}}</td>
                        <td>
                            <a href="/categorias/editar/{{$prod->id}}" class="btn btn-sm btn-primary">Editar</a>
                            <a href="/categorias/apagar/{{$prod->id}}" class="btn btn-sm btn-danger">Apagar</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        @else
        <p>Não Existem produtos cadastrados</p>
        @endif
    </div>
    <div class="card-footer">
        <a href="/produtos/novo" class="btn btn-sm btn-primary" role="button">Novo Produto</a>
    </div>
</div>


@endsection