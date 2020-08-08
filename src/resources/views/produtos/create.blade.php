@extends('base')

@section('main')
    <div class="row">
        <div class="col-sm-8 offset-sm-2">
            <h1 class="display-3">Adicionar produto: </h1>
            <div>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div><br />
                @endif
                <form method="post" action="{{ route('produtos.store') }}">
                    @csrf
                    <div class="form-group">
                        <label for="nome">Nome do produto: </label>
                        <input type="text" class="form-control" name="nome"/>
                    </div>

                    <div class="form-group">
                        <label for="last_name">Valor: </label>
                        <input type="number" class="form-control" name="valor"/>
                    </div>

                    <div class="form-group">
                        <label for="quantidade">Quantidade: </label>
                        <input type="number" class="form-control" name="quantidade"/>
                    </div>

                    <button type="submit" class="btn btn-primary-outline">Adicionar produto</button>
                </form>
            </div>
        </div>
    </div>
@endsection
