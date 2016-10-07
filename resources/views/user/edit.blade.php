@extends('admin.main')
@section('content')

        <div class="l-page-header">
          <h2 class="l-page-title">Add User <small><i> Enter user details below</i></small></h2>
        </div>
        <div class="l-spaced-vertical">
        <div class="row">
        <div class="col-xs-6 col-xs-offset-3">
        @if(Session::has('user_update'))
        <div class="alert alert-success"><em>{!! Session('user_update') !!}</em>
        <button type="button" class="close" data-dismiss="alert" aria-label="close"><span aria-hideen="true">&times</span></button>
        </div>
        @endif
        @if(Session::has('user_create'))
        <div class="alert alert-success"><em>{!! Session('user_create') !!}</em>
        <button type="button" class="close" data-dismiss="alert" aria-label="close"><span aria-hideen="true">&times</span></button>
        </div>
        @endif
        <div class="panel panel-body"> 

        <!-- Display Errors -->
        @include('common.errors')
        <!-- Error Ends  -->


          <!-- Create Team Form -->
          {!! Form::model($users, array('route' =>array('user.update', $users->id), 'method'=>'PUT')) !!}
            <div class="form-group">
              {!! Form::label('name', 'Full Name', array('class'=>' control-label')) !!}
              {!! Form::text('name', null, array('class'=>'form-control')) !!}
            </div>
            <div class="form-group">
              {!! Form::label('email', 'Email Address', array('class'=>'s control-label')) !!}
              {!! Form::email('email', null, array('class'=>'form-control')) !!}
            </div>
            <div class="form-group">
              {!! Form::label('username', 'AttUID', array('class'=>' control-label')) !!}
              {!! Form::text('username', null, array('class'=>'form-control')) !!}
              
            </div>
            <!-- <div class="form-group">
            {!! Form::label('password', 'Password', array('class'=>' control-label')) !!}
            {!! Form::email('password', null, array('class'=>'form-control')) !!}
            </div> -->
          <div class="form-group width49 pull-left">
              {!! Form::label('Team Name') !!}<br />
              {!! Form::select('team_id', 
                  (['0' => 'Select a Team'] + $teams), 
                      null, 
                      ['class' => 'form-control']) !!}
          </div>
            <div class="form-group width49 pull-left margin2">
              <label for="User_role">User Role</label>
              <select class="form-control" name="admin">
      				  <option disabled selected>Role - Select One</option>
      				  <option value="0">User</option>
      				  <option value="1">Admin</option>
      			  </select>
            </div>
            <div class="form-group">
              {{Form::submit('Update Info', ['class' => 'btn btn-large btn-primary openbutton btn-style'])}}
            </div>
          {!! Form::close() !!}
        </div>
        </div>
        <div class="col-xs-3"></div>
        </div>
        </div>








@endsection