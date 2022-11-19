@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<h1>Meu Perfil</h1>
@stop

@section('content')
<h3>Bem vind{{ Auth::user()->gender == 'female' ? 'a' : 'o' }}, <b>{{ strtoupper(current(explode(" ", Auth::user()->name))) }}</b></h3>

<div class="row">
    <div class="col-md-5">
        <div class="card card-primary card-outline">
            <div class="card-body box-profile">
                <div class="text-center">
                    <img class="profile-user-img img-fluid img-circle" src="{{ Auth::user()->gender == 'female' ? 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSqpPVjUDyXU5zHAanbNxxVcBvGFnSwmCcJ6Q&usqp=CAU' : 'data:image/jpeg;base64,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' }}"
                        alt="User profile picture">
                </div>
                <h3 class="profile-username text-center">{{ strtoupper(Auth::user()->name) }}</h3>
                <p class="text-muted text-center">{{ __('content.user.enum.profile.' . Auth::user()->profile) }}</p>
                <ul class="list-group list-group-unbordered mb-3">
                    <li class="list-group-item">
                        <b>Status</b> <a class="float-right">{{ __('content.user.enum.status.' . Auth::user()->status) }}</a>
                    </li>
                    <li class="list-group-item">
                        <b>Gênero</b> <a class="float-right">{{ __('content.user.enum.gender.' . Auth::user()->gender) }}</a>
                    </li>
                    <li class="list-group-item">
                        <b>E-mail</b> <a class="float-right">{{ Auth::user()->email }}</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="col-6">
        <!-- About Me Box -->
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Sobre mim</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <strong><i class="fas fa-book mr-1"></i> Descrição</strong>

                <p class="text-muted">
Agricultor de bananas sem agrotoxicos com ajuda de cooperativas agroecologicas. 
            </p>

                <hr>

                <strong><i class="fas fa-map-marker-alt mr-1"></i> Localização</strong>

                <p class="text-muted">São Lourenço da Mata, PE</p>

                <hr>

            

              

                <hr>

                <strong><i class="far fa-file-alt mr-1"></i> Notas</strong>

                <p class="text-muted">Gosto de conversa sobre politica</p>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
</div>
@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
<script>
    console.log('Hi!');
</script>
@stop
