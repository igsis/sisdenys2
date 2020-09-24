@extends('adminlte::page')

@section('title', 'Usuário')

@section('content_header')
    <h1>Edição de Usuário</h1>
@stop

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <form action="" method="POST">
                @method('PUT')
                @csrf
                <div class="card-body">
                    <div class="row">
                        <div class="col-12">
                            <label for="name">Nome:</label>
                            <input type="text" class="form-control" name="name" value="{{ $usuario->name }}">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <label for="rf">Usuário:</label>
                            <input type="text" class="form-control" name="rf" value="{{ $usuario->rf }}" readonly>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <label for="email">E-mail:</label>
                            <input type="email" class="form-control" name="email" readonly value="{{ $usuario->email }}">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <label for="email">E-mail Alternativo:</label>
                            <input type="email" class="form-control" name="emailAlternativo" readonly value="{{ $usuario->emailAlternativo }}">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <label for="email">E-mail Alternativo:</label>
                            <input type="email" class="form-control" name="emailAlternativo" readonly value="{{ $usuario->emailAlternativo }}">
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <a href="#" class="btn btn-default float-left">Voltar</a>
                    <button type="submit" class="btn btn-success float-right">Alterar</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
