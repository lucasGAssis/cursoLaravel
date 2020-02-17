@extends('layout.app', ["current" => "produtos"])

@section('body')
<div class="card border">
    <div class="card-body">
        <form action="/categorias" method="POST">
            @csrf
            <div class="form-group">
                <label for="nomeCategoria">Nome do Produto</label>
                <input type="text" class="form-control" name="nomeProduto" id="nomeProduto" placeholder="Produto">
                <label for="nomeCategoria">Estoque</label>
                <input type="text" class="form-control" name="estoque" id="estoque" placeholder="Produto">
                <label for="nomeCategoria">Preço</label>
                <input type="text" class="form-control" name="preco" id="preco" placeholder="Produto">
                <label for="nomeCategoria">Categoria</label>
                <select name="marca_id" >
                    @foreach ($prods as $m)
                        @if($m->id == $produto->prods)
                        <option value="{‌{ $m->id }}" selected>{‌{ $m->nome }}</option>
                        @else
                        <option value="{‌{ $m->id }}">{‌{ $m->nome }}</option>
                        @endif
                    @endforeach
                </select> 
                <!--<input type="text" class="form-control" name="preco" id="preco" placeholder="Produto">-->
            </div>
            <button type="submit" class="btn btn-primary btn-sm">Salvar</button>
            <button type="Cancel" class="btn btn-danger btn-sm">Cancel</button>
        </form>
    </div>
</div>
@endsection