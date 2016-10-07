@extends('admin.main')
@section('content')
        <div class="l-page-header">
          <h2 class="l-page-title">View Handoff  <small><i>List of handoff details below</i></small></h2>
        </div>
        <div class="l-spaced-vertical">
       	<div class="row">
       			<div class="col-xs-10 col-xs-offset-1 width90 pushright">
             	<nav class="navbar navbar-default">
      				  <ul class= "nav navbar-nav">
      				  <li><a href="post/create"> <i class="fa fa-plus-square-o" aria-hidden="true"></i> New Handoff /</a></li>
      				  </ul>
      				</nav>
              @if(Session::has('post_deleted'))
                <div class="alert alert-success"><em>{!! Session('post_deleted') !!}</em>
                <button type="button" class="close" data-dismiss="alert" aria-label="close"><span aria-hideen="true">&times</span></button>
                </div>
                @endif
              @if(Session::has('post_updated'))
                <div class="alert alert-success"><em>{!! Session('post_updated') !!}</em>
                <button type="button" class="close" data-dismiss="alert" aria-label="close"><span aria-hideen="true">&times</span></button>
                </div>
                @endif
              @include('common.errors')
              <div class="panel panel-default">
                <div class="panel-headng">
                  <!-- <h3>List of All Handover Messages </h3> -->
                </div>
                <div class="panel-body">
                  <table class="table table-responsive table-striped " id="myTable">
                  <thead>
                    <th>Title</th>
                    <th>Date Created</th>
                    <th>UserID</th>
                    <th></th>
                  </thead>

                    <tbody>
                      @foreach($posts as $post)
                      <tr>
                        <td>
                          <div class="post_title">
                          <span><a href="{{url('post/'.$post->id)}}">Handover {!! date('F d, Y', strtotime($post->created_at)) !!} </a></span>
                          </div>
                          <div class="post_description">{!! $post->description !!}</div>
                          <div class="post_meta">
                            
                            <!-- <span class="label label-success">Completed</span> -->
                          </div>
                        </td>
                        <td>
                          <i class="fa fa-calendar" aria-hidden="true"></i> {!! $post->created_at !!}
                        </td>
                        <td>
                          <i class="fa fa-user" aria-hidden="true"></i> {{$post->created_by}} 
                        </td>
                        <td>
                          <ul class="list-inline">
                            <li><label class="span"><a href="{!! url('post/'. $post->id . '/edit') !!}">Edit</a></label></li>
                            <li>
                            {!!Form::open(array('url' => 'post/' . $post->id, 'method'=>'DELETE')) !!}
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