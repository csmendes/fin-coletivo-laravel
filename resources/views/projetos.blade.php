@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      <div class="panel panel-default">
        <div class="panel-heading">Dashboard</div>

        {{ csrf_field() }}
        <div class="panel-body">
          @if (session('status'))
          <div class="alert alert-success">
            {{ session('status') }}
          </div>
          @endif
          <li><a href="{{ route('projetos') }}">Ver Projetos</a></li>
          <li><a href="{{ url('/cadastrar') }}">Cadastrar</a></li>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection