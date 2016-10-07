@extends('admin.main')
@section('content')
        <div class="l-page-header">
          <h2 class="l-page-title">View Team <small><i>List of team details below</i></small></h2>
        </div>
        <div class="l-spaced-vertical">
       		<div class="row">
       			<div class="col-xs-10 col-xs-offset-1 width90 pushright">
       			<nav class="navbar navbar-default">
				  <ul class= "nav navbar-nav">
				  <li><a href="team/create"> <i class="fa fa-plus-square-o" aria-hidden="true"></i> New Team /</a></li>
				  	
				  </ul>
				</nav>
				 @if(Session::has('team_updated'))
	              <div class="alert alert-success"><em>{!! Session('team_updated') !!}</em>
	              <button type="button" class="close" data-dismiss="alert" aria-label="close"><span aria-hideen="true">&times</span></button>
	              </div>
	              @endif

	              @if(Session::has('team_deleted'))
	              <div class="alert alert-success"><em>{!! Session('team_deleted') !!}</em>
	              <button type="button" class="close" data-dismiss="alert" aria-label="close"><span aria-hideen="true">&times</span></button>
	              </div>
	              @endif

       			 @if(count($teams) > 0)
		        <div class="panel panel-default">
		        	<div class="panel-heading">
		        		<h3>List of Teams</h3>
		        	</div>
		        	<div class="panel-body">
		        		<div class="table table-responsive table-striped">
		        		<table class="table table-hover task-table" cellspacing="0" cellpadding="0" id="myTable">
		        			<thead>
		        				<th><h4>Team Name</h4></th>
		        				<th><h4>Email Adress</h4></th>
		        				<th>&nbsp;</th>
		        			</thead>
		        			<tbody>
		        				@foreach($teams as $team)
		        				<tr>
		        					<td>
		        						<div><a href="{{url('team/'.$team->id)}}">{!! $team->name !!}</a></div>
		        					</td>
		        					<td>
		        						<div>{!! $team->team_dl !!}</div>
		        					</td>
		        					<td>
		        					<ul class="list-inline">
			                            <li><label class="span"><a href="{!! url('team/'. $team->id . '/edit') !!}">Edit</a></label></li>
			                            <li>
			                            {!!Form::open(array('url' => 'team/' . $team->id, 'method'=>'DELETE')) !!}
			                            {!! csrf_field() !!}
			                            {!! method_field('DELETE') !!}
			                            <button class="btn btn-danger"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
			                            {!! Form::close() !!}</li>
			                          </ul>
		        					</td>
		        				</tr>
		        				@endforeach
		        			</tbody>
		        			
		        		</table>
		        		</div>
		        	</div>
		        </div>
		        @endif
       				
       			</div>
       			<!-- <div class="col-xs-3">
       				
       			</div> -->
       		</div>
        
        </div>

@endsection
@section('script')
<script type="text/javascript">
  $(document).ready(function(){
    $('#myTable').DataTable();
});

</script>
@endsection