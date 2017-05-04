@extends('layouts.black.black', ['title' => 'Dashboard'])

@section('content')
<div class="container-fluid main-container">
    <div class="col-md-2 sidebar">
        <div class="row">
            <!-- Menu -->
            <div class="side-menu">
                <nav class="navbar navbar-default" role="navigation">
                    <!-- Main Menu -->
                    <div class="side-menu-container">
                        <ul class="nav navbar-nav">
                            <li class="active"><a href="#"><span class="glyphicon glyphicon-dashboard"></span> Dashboard</a></li>
                            <li><a href="#"><span class="glyphicon glyphicon-plane"></span> Active Link</a></li>
                            <li><a href="#"><span class="glyphicon glyphicon-cloud"></span> Link</a></li>

                            <!-- Dropdown-->
                            <li class="panel panel-default" id="dropdown">
                                <a data-toggle="collapse" href="#dropdown-lvl1">
                                    <span class="glyphicon glyphicon-user"></span> Sub Level <span class="caret"></span>
                                </a>

                                <!-- Dropdown level 1 -->
                                <div id="dropdown-lvl1" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <ul class="nav navbar-nav">
                                            <li><a href="#">Link</a></li>
                                            <li><a href="#">Link</a></li>
                                            <li><a href="#">Link</a></li>

                                            <!-- Dropdown level 2 -->
                                            <li class="panel panel-default" id="dropdown">
                                                <a data-toggle="collapse" href="#dropdown-lvl2">
                                                    <span class="glyphicon glyphicon-off"></span> Sub Level <span class="caret"></span>
                                                </a>
                                                <div id="dropdown-lvl2" class="panel-collapse collapse">
                                                    <div class="panel-body">
                                                        <ul class="nav navbar-nav">
                                                            <li><a href="#">Link</a></li>
                                                            <li><a href="#">Link</a></li>
                                                            <li><a href="#">Link</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </li>

                            <li><a href="#"><span class="glyphicon glyphicon-signal"></span> Link</a></li>

                        </ul>
                    </div><!-- /.navbar-collapse -->
                </nav>

            </div>
        </div>
    </div>
    <div class="col-md-10">
    {!! Form::open(
   array(
     'url' => 'admin/documentos/upload',
     'method' => 'post',
      'class' => 'form',
      'novalidate' => 'novalidate',
      'files' => true)) !!}
<div class="form-group">
    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('file', 'Bestand:') !!}
    {!! Form::file('file',null,['class'=>'form-control']) !!}
</div>

@if(\Auth::user()->level == 2)
    <div class="form-group">
        {{ Form::label('approved', 'Beschikbaar voor:') }}
        {{ Form::select('approved', array(1 => 'Iedereen', 2 => 'monteurs', 3 => 'concept'), null, ['class' => 'form-control']) }}
    </div>
@else
    {{ Form::hidden('approved', 3) }}
@endif

<div class="form-group">
    {!! Form::submit('Upload',['class' => 'btn btn-primary form-control']) !!}
</div>
</div>
{!! Form::close() !!}
</div>
<footer class="pull-left footer">
    <p class="col-md-12">
        <hr class="divider">
        Todos os direitos reservados &copy; 2017 NOC | <a href="#">Rolim Net</a>
    </p>
</footer>
</div>
@endsection

