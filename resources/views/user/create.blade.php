@extends('admin.main')
@section('content')

        <div class="l-page-header">
          <h2 class="l-page-title">Add User <small><i> Enter user details below</i></small></h2>
        </div>
        <div class="l-spaced-vertical">
        <div class="row">
        <div class="col-xs-6 col-xs-offset-3">
        @if(Session::has('user_create'))
        <div class="alert alert-success"><em>{!! Session('user_create') !!}</em>
        <button type="button" class="close" data-dismiss="alert" aria-label="close"><span aria-hideen="true">&times</span></button>
        </div>
        @endif
        <div class="panel-body"> 

        <!-- Display Errors -->
        @include('common.errors')
        <!-- Error Ends  -->


          <!-- Create Team Form -->
          {!! Form::open(array('url' => 'user')) !!}
            <div class="form-group">
	            <label for="fullName" >Full Name</label>
	    		    <input type="text" class="form-control" id="fullName" placeholder="Enter Full Name" name="name">
            </div>
            <div class="form-group">
              <label for="emailAddress" >Email Address</label>
              <input type="text" class="form-control" id="fullName" placeholder="Enter Email Address" name="email">
            </div>
            <div class="form-group">
              <label for="attID" >Att UID</label>
	    	      <input type="text" class="form-control" id="attID" placeholder="Enter AttUID" name="username" maxlength="6">
            </div>
            <div class="form-group">
              <label for="attID" >Password</label>
	    	  <input type="password" class="form-control" id="attID" placeholder="Enter Password" name="password">
            </div>
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
      				  <option value="user">User</option>
      				  <option value="admin">Admin</option>
      			  </select>
            </div>
            <div class="form-group">
              {{Form::submit('Create User', ['class' => 'btn btn-large btn-primary openbutton'])}}
            </div>
          {!! Form::close() !!}
        </div>
        </div>
        <div class="col-xs-3"></div>
        </div>
        </div>








@endsection