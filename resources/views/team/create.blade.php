@extends('admin.main')
@section('content')
        <div class="l-page-header">
          <h2 class="l-page-title">Add Team <small><i>Enter team details below</i></small></h2>
        </div>
        <div class="l-spaced-vertical">
        <div class="row">
        <div class="col-xs-10 col-xs-offset-1">
        @if(Session::has('team_created'))
        <div class="alert alert-success"><em>{!! Session('team_created') !!}</em>
        <button type="button" class="close" data-dismiss="alert" aria-label="close"><span aria-hideen="true">&times</span></button>
        </div>
        @endif
        <div class="row">
        <div class="col-xs-6 col-xs-offset-3">
        <div class="panel panel-body"> 

        <!-- Display Errors -->
        @include('common.errors')
        <!-- Error Ends  -->


          <!-- Create Team Form -->
          {!! Form::open(array('url' => 'team')) !!}
            <div class="form-group">
              {!! Form::label('name', 'Team Name', array('class'=>'control-label')) !!}
              {!! Form::text('name', null, array('class'=>'form-control','placeholder' => 'Enter Team Name')) !!}
            </div>
            <div class="form-group">
              {!! Form::label('team_dl', 'Email Address', array('class'=>'control-label')) !!}
              {!! Form::text('team_dl', null, array('class'=>'form-control','placeholder' => 'Enter email address')) !!}
            </div>
            <div class="form-group">
              {{Form::submit('Submit', ['class' => 'btn btn-large btn-primary openbutton btn-style'])}}
            </div>
          {!! Form::close() !!}
        </div>
        </div>
        <div class="col-xs-3"></div>
        </div>
        </div>
        </div>
        </div>
@endsection