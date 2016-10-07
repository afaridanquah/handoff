@extends('admin.main')
@section('content')
        <div class="l-page-header">
          <h2 class="l-page-title">View Users <small><i>List of user details below</i></small></h2>
        </div>
        <div class="l-spaced-vertical">
       		<div class="row">
       			<div class="col-xs-10 col-xs-offset-1 width90 pushright">
       			<nav class="navbar navbar-default">
				  <ul class= "nav navbar-nav">
				  <li><a href="user/create"> <i class="fa fa-plus-square-o" aria-hidden="true"></i> New User /</a></li>
				  	
				  </ul>
				</nav>
				@include('common.errors')
		        <div class="panel panel-default">
		        	<!-- <div class="panel-heading">
		        		<h3>List of Users</h3>
		        	</div> -->
		        	<div class="panel-body">
		        		<div class="table table-responsive table-striped">
		        		<table class="table table-hover table-striped task-table" id="myTable">
		        			<thead>
		        				<th><h4>Full Name</h4></th>
		        				<th><h4>Team Name</h4></th>
		        				<th>&nbsp;</th>
		        			</thead>
		        			<tbody class="td-members">
		        				@foreach($users as $user)
		        				<tr class="member-row">
		        					<td>
		        						<div>{!! $user->name !!}</div>
		        					</td>
		        					<td>
		        						<div>{!! $user->team->name !!}</div>
		        					</td>
		        					<td>
		        						<ul class="list-inline">
		        							<li><label class="span"><a href="{!! url('user/'. $user->id . '/edit') !!}">Edit</a></label></li>
											<li>
											{!!Form::open(array('url' => 'user/' . $user->id, 'method'=>'DELETE')) !!}
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