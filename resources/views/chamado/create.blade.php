@extends('adminlte::page')


@section('title', 'Chamado')

@section('content_header')
    <h1>Novo Chamado</h1>
@stop

@section('content')
    <div class="box">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    @include('alerts.messages')
                    <div class="card">
                        <form action="{{route('chamado.store')}}"
                              method="post"
                              enctype="multipart/form-data">
                            <div class="card-body">
                                {!! csrf_field() !!}
                                <div class="form-group">
                                    <label for="titulo">Titulo</label>
                                    <input type="text" name="titulo"
                                           placeholder="Titulo do chamado"
                                           class="form-control"
                                           value="ERRO SISTEMA IGSIS">
                                </div>

                                <div class="form-group">
                                    <label for="tipo">Tipo</label>
                                    <select name="tipochamado_id" class="form-control">
                                        @foreach($tipoList as $t)
                                            <option value="{{$t->id}}">
                                                {{$t->descricao}}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>

                                <label name="descricao">Descrição</label>
                                <div class="input-group">
        <textarea class="form-control mb-2" rows="5"
                  name="descricao"
                  aria-label="With textarea"
                  placeholder="Descreva a ocorrência">Favor elaborar um sistema de chamados</textarea>
                                </div>
                                <div class="form-group">
                                    <!-- <label for="customFile">Custom File</label> -->

                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="customFile" name="arquivo[]">
                                        <label class="custom-file-label" for="customFile">Escolha um arquivo (opcional)</label>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-info">
                                    Enviar
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
@stop
