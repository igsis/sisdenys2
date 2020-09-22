@extends('adminlte::page')

@section('title', 'Meus Chamados')

@section('content_header')
    <h1>Meus Chamados
        <h1>
            @stop

            @section('content')
                <div class="ml-2">
                    @include('chamado.filtroMeusChamados')
                </div>
                <div class="box">
                    @include('alerts.messages')
                    <div class="container">
                        <div class="card">
                            <div class="card-header">
                                <div class="float-right">
                                    <a href="{{route('chamado.create')}}" class="btn btn-success">
                                        Novo Chamado</a>
                                </div>

                            </div>
                            <div class="card-body">
                                <table class="table table-borderred table-hover table-striped">
                                    <thead>
                                    <tr>
                                        <th>Número</th>
                                        <th>Titulo</th>
                                        <th>Status</th>
                                        <th>Data</th>
                                        <th></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($chamados as $key => $c)
                                        <tr class="{{$c->Status == 'Fechado' ?
              'text text-danger' : ''}}">
                                            <td>{{$c->id}}</td>
                                            <td>{{$c->Titulo}}</td>
                                            <td>{{$c->Status}}</td>
                                            <td>
                                                {{$helper::formatDate($c->Data)}}
                                            </td>
                                            <td>
                                                <form action="{{route('chamado.show')}}"
                                                      method="post">
                                                    @csrf
                                                    <input type="hidden" name="chamado_id"
                                                           value="{{$c->id}}">
                                                    <button type="submit"
                                                            class="btn btn-info btn-sm">
                                                        <i class="fas fa-search"></i>
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
@stop
