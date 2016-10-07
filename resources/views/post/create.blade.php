@extends('admin.main')
@section('content')
        <div class="l-page-header">
          <h2 class="l-page-title">Add Handover  <small><i>Enter details to create handover message</i></small></h2>
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
              
             <!--  <div class="panel-body">
                 <div class="form-group width49 pull-left">
                   {!! Form::label('handoverYesNo', 'Anything to Handover? ',array('class'=>'control-label')) !!} <br>
                   <label class="radio-inline">
                     <input type="radio" name="handoverYesNo" id="inlineRadio1" value="Yes" checked> Yes
                   </label>
                   <label class="radio-inline">
                     <input type="radio" name="handoverYesNo" id="inlineRadio3" value="Nothing" > Nothing
                   </label>
                 </div>
                 <div class="form-group width49 pull-left margin2">
                   <label class="control-label">Number of Handover </label><br/>
                   <button class="btn btn-danger"> - </button>
                   <button class="btn btn-success"> + </button>
                   <label><i>Please click this button if there is nothing to HO</i></label><br>
                   <input type="submit" class="btn btn-success" value="Submit" id="btn-nothing" disabled>
                 </div>
               </div> -->
              </div>
              <div class="panel panel-default" id="handoverDetails">

                
                <div class="panel-body">
                  {!! Form::open(array('url'=>'post','files'=>'true')) !!}
                  
                    <div class="form-group width49 pull-left">
                      {!! Form::label('ticket', 'Ticket Number', array('class'=>'control-label')) !!}
                      {!! Form::text('ticket', null, array('class'=>'form-control','placeholder' => 'Enter Ticket Number','maxlength'=>'15')) !!}
                    </div>
                    <div class="form-group width49 margin2 pull-left">
                      {!! Form::label('app_name', 'Application', array('class'=>'control-label ')) !!}
                      {!! Form::text('app_name', null, array('class'=>'form-control','placeholder' => 'Enter Application Name')) !!}
                      </div>
                    <div class="form-group ">
                      {!! Form::label('description', 'Handover Text', array('class'=>'control-label')) !!}
                      {!! Form::textarea('description', null, array('class'=>'form-control','placeholder' => 'Enter Handoff Message')) !!}
                    </div>
                    <div class="form-group width49 pull-left">
                      <div class="withplaceholder">
                        <!-- <span class="placeholder">Handover To</span> -->
                        <label>Handover To</label>
                        <select class="form-control" name="handover_to">
                          <option value="" disabled selected >Select One</option>
                          <option value="Morning Shift">Morning Shift</option>
                          <option value="Evening Shift">Evening Shift</option>
                          <option value="Night Shift">Night Shift</option>
                        </select>
                      </div>
                    </div>
                    <div class="form-group width49 pull-left margin2">
                      {!! Form::label('datetimepicker1', 'Todo Date/Time', array('class'=>'control-label')) !!}
                      <div class="input-group date">
                      {!! Form::text('todo_datetime',null, array('class' =>'form-control', 'id' =>'datetimepicker1')) !!}
                        <span class="input-group-addon">
                          <i class="fa fa-calendar" aria-hidden="true"></i>
                        </span>
                      </div>
                    </div>

                    <div class="form-group">
                      {!! Form::submit('Submit', ['class' => 'btn btn-large btn-primary openbutton btn-style']) !!}
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

