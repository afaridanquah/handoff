@extends('admin.main')
@section('content')
        <div class="l-page-header">
          <!-- <h2 class="l-page-title">Add Handover  <small><i>Enter details to create handover message</i></small></h2> -->
        </div>
        <div class="l-spaced-vertical">
       		<div class="row">
       			<div class="col-xs-10 col-xs-offset-1">
         			<nav class="navbar navbar-default">
      				  <ul class= "nav navbar-nav">
      				  <li><a href="team/create"> <i class="fa fa-plus-square-o" aria-hidden="true"></i> New Handover /</a></li>
      				  	
      				  </ul>
  				    </nav>
                @if(Session::has('rec_created'))
                <div class="alert alert-success"><em>{!! Session('rec_created') !!}</em>
                <button type="button" class="close" data-dismiss="alert" aria-label="close"><span aria-hideen="true">&times</span></button>
                </div>
                @endif
                @include('common.errors')
              <div class="panel panel-default">
              
             
              </div>
              <div class="panel panel-default" id="handoverDetails">

                
                <div class="panel-body">
                  {!! Form::open(array('url'=>'post','files'=>'true','method' => 'GET')) !!}
                  
                    <div class="form-group width49 pull-left">
                      <label for="ticket">Ticket Number</label>
                      <!-- <input type="text" class="form-control" id="ticket" value="{{$posts->ticket}}"> -->
                      <p>{{$posts->ticket}}</p>
                    </div>
                    <div class="form-group width49 margin2 pull-left">
                      <label for="app_name">Application Name</label>
                      <!-- <input type="text" class="form-control" id="ticket" value="{{$posts->app_name}}"> -->
                      <p>{{$posts->app_name}}</p>
                      </div>
                    <div class="form-group">
                      <label for="ticket">Handover Text</label>
                      <!-- <textarea class="form-control" value="">{{$posts->app_name}}</textarea>  -->
                      <p>{{$posts->description}}</p>
                    </div>
                    <div class="form-group width49 pull-left">
                        <label>Handover To</label>
                        <!-- <select class="form-control" name="handover_to">
                          <option  disabled selected >{{$posts->handover_to}}</option>
                        </select> -->
                        <p>{{$posts->handover_to}}</p>
                    </div>
                    <div class="form-group width49 pull-left margin2">
                      {!! Form::label('datetimepicker1', 'Todo Date/Time', array('class'=>'control-label')) !!}
                      <!-- <div class="input-group date">
                      <input type="text" class="form-control"  value="{{$posts->todo_datetime}}">

                        <span class="input-group-addon">
                          <i class="fa fa-calendar" aria-hidden="true"></i>
                        </span>
                      </div> -->
                      <p>{{$posts->todo_datetime}}</p>
                    </div>
                    <div class="form-group">
                      <a href="url()"><button class="btn btn-primary btn-style">Back</button></a>
                    </div>
                  {!! Form::close() !!}

                </div>
              </div>
       			 
       				
       			</div>
       			<!-- <div class="col-xs-3">
       				
       			</div> -->
       		</div>
        
        </div>

@endsection

