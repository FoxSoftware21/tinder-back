@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')

    <style>
        a {
            color: black;
        }

        .div-hover:hover {
            transition: ease-in-out;
            transition-duration: 500ms;
            background: #fe5d87;
            color: white;
        }
    </style>

    <div class="row">
        <div class="col-md-3 col-sm-6 col-xs-12">
            <a class="info-box div-hover">
                <span class="info-box-icon bg-aqua">
                    <i class="fas fa-users"></i>
                </span>

                <div class="info-box-content">
                    <span class="info-box-text">Usuários</span>
                    {{-- <span class="info-box-number">{{ $counts['users'] }}</span> --}}
                </div>
            </a>
        </div>



    </div>
@endsection
