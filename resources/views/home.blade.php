@extends('adminlte::page')

@section('title', 'Home - Sistema de Chamados')

@section('content_header')
    <h1 class="m-0 text-dark">Dashboard</h1>
@stop


@section('content')
    @include('alerts.messages')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <p class="mb-0">You are logged in!</p>
                </div>
            </div>
        </div>
    </div>
@stop
