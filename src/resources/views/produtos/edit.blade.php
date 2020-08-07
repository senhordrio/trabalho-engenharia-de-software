@extends('base')
@section('main')
    <div class="row">
        <div class="col-sm-8 offset-sm-2">
            <h1 class="display-3">Atualizar produto</h1>

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                <br />
            @endif
            <form method="post" action="{{ route('produtos.update', $produto->id) }}">
                @method('PATCH')
                @csrf
                <div class="form-group">

                    <label for="nome">Nome:</label>
                    <input type="text" class="form-control" name="nome" value={{ $produto->nome }} />
                </div>

                <div class="form-group">
                    <label for="valor">Valor:</label>
                    <input type="number" class="form-control" name="valor" value={{ $produto->valor }} />
                </div>

                <div class="form-group">
                    <label for="quantidade">Email:</label>
                    <input type="number" class="form-control" name="quantidade" value={{ $produto->quantidade }} />
                </div>
                <button type="submit" class="btn btn-primary">Atualizar produto</button>
            </form>
        </div>
    </div>
@endsection
