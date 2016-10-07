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
              @include('common.errors')
              @if(Session::has('post_created'))
              <div class="alert alert-success"><em>{!! Session('post_created') !!}</em>
              <button type="button" class="close" data-dismiss="alert" aria-label="close"><span aria-hideen="true">&times</span></button>
              </div>
              @endif
              <div class="panel panel-default">
                <div class="panel-headng">
                  <!-- <h3>List of All Handover Messages </h3> -->
                </div>
                <div class="panel-body">
                  <ul class="list-inline">
                    @foreach($posts as $post)

                    <li>
                      <div class="post_title">
                      <span>Handover {!! date('F d, Y', strtotime($post->created_at)) !!} </span>
                      <!-- <span class="pull-right btn_function">
                        <button class="btn btn-info btn-size"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
                        <button class="btn btn-danger btn-size"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                      </span> -->
                      </div>
                      <div class="post_description">{!! $post->description !!}</div>
                      <div class="post_meta">
                        <i class="fa fa-calendar" aria-hidden="true"></i> {!! $post->created_at !!} |
                        <i class="fa fa-user" aria-hidden="true"></i> {{Auth::user()->username}} 
                        <span class="label label-success">Completed</span>
                      </div>
                    </li>
                    <hr>
                   
                    @endforeach
                  </ul>
                  <center>{!! $posts->render() !!}</center>
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