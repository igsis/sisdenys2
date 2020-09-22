@extends('adminlte::page')

@section('title', 'Usuário')

@section('content_header')
    <h1>Atualização de Usuário</h1>
@stop

@section('content')
    <div class="box">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    @include('alerts.messages')
                    <div class="card">
                        <form action="{{route('user.update')}}" method="post">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="name">Nome</label>
                                    <input type="text" name="name"
                                           placeholder="Nome do Usuário"
                                           class="form-control"
                                           value="{{$user->name}}">
                                </div>
                                <div class="form-group">
                                    <label for="name">RF</label>
                                    <input type="text" name="rf"
                                           placeholder="RF"
                                           class="form-control"
                                           value="{{$user->rf}}" maxlength="7" readonly>
                                </div>

                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" name="email"
                                           placeholder="Email do Usuário"
                                           class="form-control" value="{{$user->email}}">
                                </div>

                                <div class="form-group">
                                    <label for="email">Email Alternativo</label>
                                    <input type="email" name="email"
                                           placeholder="Email do Usuário"
                                           class="form-control" value="{{$user->emailAlternativo}}">
                                </div>

                                <div class="form-group">
                                    <label for="password">Senha</label>
                                    <input type="password" name="password"
                                           placeholder="Senha"
                                           class="form-control">
                                </div>
                                <div>
                                    <label name="unidade_id">Unidade</label>
                                    <select name="unidade_id"
                                            class="form-control mb-1">Unidade
                                        <option value="">Selecione uma Unidade</option>
                                        @foreach($unidadeList as $key => $u)
                                            {{$selected = $u->id == $user->unidade_id
                                            ? 'selected' : ''}}
                                            <option value="{{$u->id}}" <?=$selected?>>
                                                {{$u->nome}}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-info">Atualizar
                                </button>
                            </div>
                        </form>
                        <!-- /.card-body -->
                    </div>
                </div>

            </div>
        </div>
    </div>
@stop
