@extends('adminlte::page')

@section('title', 'Usuário')

@section('content_header')
    <h1>Lista de Usuário</h1>
@stop

@section('content')
    <div class="box">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    @include('alerts.messages')
                    <div class="card">
                        <div class="card-body">
                            <table id="tbUsuario" class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                    <th>Nome</th>
                                    <th>RF</th>
                                    <th>E-mail</th>
                                    <th>E-mail Alternativo</th>
                                    <th>Unidade</th>
                                    <th></th>
                                </tr>
                                </thead>
                                <tbody>
                                @forelse($usuarios as $usuario)
                                    <tr>
                                        <td>{{ $usuario->name }}</td>
                                        <td>{{ $usuario->rf }}</td>
                                        <td>{{ $usuario->email }}</td>
                                        <td>{{ $usuario->emailAlternativo }}</td>
                                        <td>{{ $usuario->unidade->nome }}</td>
                                        <td>
                                            <div class="d-flex justify-content-center">
                                                <a class="btn btn-primary mr-2" href="{{ url('/usuario/edit/'.$usuario->id) }}">Editar</a>
                                                <form action="" method="POST" class="mr-2">
                                                    @method('PUT')
                                                    @csrf
                                                    <input type="hidden" value="{{ $usuario->id }}">
                                                    <button class="btn btn-warning" type="submit">Resetar Senha</button>
                                                </form>
                                                <button class="btn btn-danger">Desativar</button>
                                            </div>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="6">
                                            Nenhum usuario cadastrado
                                        </td>
                                    </tr>
                                @endforelse
                                </tbody>
                                <tfoot>
                                <tr>
                                    <th>Nome</th>
                                    <th>RF</th>
                                    <th>E-mail</th>
                                    <th>E-mail Alternativo</th>
                                    <th>Unidade</th>
                                    <th></th>
                                </tr>
                                </tfoot>
                            </table>
                        </div>
                        <div class="card-footer">

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <script src="{{asset('site/jquery.js')}}"></script>
    <script type="text/javascript" charset="utf8"
            src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.js"></script>
    <script>
        $(document).ready(function () {
            $.noConflict();
            $('#tbUsuario').DataTable();
        });
    </script>
@stop
