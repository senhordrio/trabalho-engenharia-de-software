@extends('base')

@section('main')

    <div class="col-sm-12">

        @if(session()->get('success'))
            <div class="alert alert-success">
                {{ session()->get('success') }}
            </div>
        @endif
    </div>
    <div class="row">
        <div class="col-sm-12">
            <h1 class="display-3">Produtos</h1>

            <div>
                <a style="margin: 19px;" href="{{ route('produtos.create')}}" class="btn btn-primary">Novo produto</a>
            </div>

            <table class="table table-striped">
                <thead>
                <tr>
                    <td>Nome</td>
                    <td>Valor</td>
                    <td>Quantidade</td>
                    <td colspan = 2>Actions</td>
                </tr>
                </thead>
                <tbody>
                @foreach($produtos as $produto)
                    <tr>
                        <td>{{$produto->id}}</td>
                        <td>{{$produto->nome}}</td>
                        <td>{{$produto->valor}}</td>
                        <td>{{$produto->quantidade}}</td>
                        <td>
                            <a href="{{ route('produtos.edit',$produto->id)}}" class="btn btn-primary">Editar produto</a>
                        </td>
                        <td>
                            <form action="{{ route('produtos.destroy', $produto->id)}}" method="post">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger" type="submit">Deletar produto</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            <div>
            </div>
@endsection
