@extends('admin.main')
@section('content')



   <div class="l-row l-spaced-horizontal l-spaced-top">
    
    <div class="l-col-md-2 l-col-sm-6 l-spaced-bottom">
    <ul>
    <li>
    <div data-ason-type="draggable" class="widget-info-wrapper ason-widget ui-drag-container ui-sortable align-all">
              <div class="widget-info-refresh-helper">
                <div class="widget-info t-info-1 ui-drag-item">
                  <div id="user-info" class="widget-info-details">
                    <div class="info-data open">
                    <ul class="list-inline">
                      <li>
                      <!-- <span class="fa-stack fa-lg">
                        <i class="fa fa-circle fa-stack-2x"></i>
                        <i class="fa fa-file-text fa-stack-1x fa-inverse style-fa style-fa-text"></i>
                      </span> -->
                        <span class="fa-stack fa-lg">
                          <i class="fa fa-square fa-stack-2x fa-bg-1"></i>
                          <i class="fa fa-file-text fa-stack-1x style-fa"></i>
                        </span>
                      </li>
                      <li><h5 class="color-title">{{ $posted_today }}</h5></li>
                    </ul>
                      
                      <hr>
                      <p class="color-title"><span>Total</span> Handover</p>
                    </div>
                  </div>
                </div>
              </div>
      </div>
    </li>

    <li>
            <div data-ason-type="draggable" class="widget-info-wrapper ason-widget ui-drag-container ui-sortable align-all">
              <div class="widget-info-refresh-helper">
                <div class="widget-info t-info-2 ui-drag-item">
                 
                  <div id="order-info" class="widget-info-details">
                    <div class="info-data open">
                    <ul class="list-inline">
                      <li>
                        <span class="fa-stack fa-lg">
                          <i class="fa fa-square fa-stack-2x fa-bg-2"></i>
                          <i class="fa fa-users fa-stack-1x style-fa" ></i>
                        </span>
                      </li>
                      <li><h5 class="color-title">{{ $team_today }} </h5></li>
                    </ul>
                      <hr>
                      <p class="color-title"><span>Total</span> Teams</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
    </li>

    <li>
    <div data-ason-type="draggable" class="widget-info-wrapper ason-widget ui-drag-container ui-sortable align-all">
              <div class="widget-info-refresh-helper">
                <div class="widget-info t-info-3 ui-drag-item">
                  <div id="user-info" class="widget-info-details">
                    <div class="info-data open">
                    <ul class="list-inline">
                      <li>
                        <span class="fa-stack fa-lg">
                          <i class="fa fa-square fa-stack-2x fa-bg-1"></i>
                          <i class="fa fa-user fa-stack-1x style-fa" ></i>
                        </span>
                      </li>
                      <li><h5 class="color-title">{{ $user_today }}</h5></li>
                    </ul>
                      <hr>
                      <p class="color-title"><span>Total</span> Users</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
    </li>

    </ul>
            
          </div>




           <div class="col-md-5 col-sm-6">
             <div class="panel panel-body">
             <h4 class="widget-header">Latest Handover </h4>
             <table class="table table-hover">
                    <thead>
                    <tr>
                      <th>Title</th>
                      <th >Created At</th>
                      <th >ATT UID</th>
                    </tr>
                  </thead>
                      <tbody>
                       @foreach ($posts as $post)
                        <tr>
                          <td >{{ $post->title}}</td>
                          <td >{{ $post->created_at}}</td>
                          <td >{{ $post->created_by}}</td>
                        </tr>
                       @endforeach 
                      </tbody>
                    </table>
                    
                    <div class="l-col-xs-6"><a href="/post" class="view-all"><i class="fa fa-angle-double-down"></i> View All</a></div>
                    
             </div>
           </div> 

           <div class="col-md-4 col-sm-6">
             <div class="panel panel-body">
             <h4 class="widget-header">Latest Users</h4>
            <table class="table table-hover">
              <thead>
              <tr>
                <!-- <th>Full Name</th> -->
                <th>ATT UID</th>
                <th>Created At</th>
              </tr>
              </thead>
                <tbody>
                 @foreach ($users as $user)
                  <tr>
                    <!-- <td >{{ $user->name}}</td> -->
                    <td >{{ $user->username}}</td>
                    <td >{{ $user->created_at}}</td>
                  </tr>
                 @endforeach 
                </tbody>
              </table>
              
                  <div class="l-col-xs-6"><a href="/post" class="view-all"><i class="fa fa-angle-double-down"></i> View All</a></div>
            
             </div>
           </div> 


 
          </div> 



@endsection