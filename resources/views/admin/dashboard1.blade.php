@extends('admin.main')
@section('content')



<div class="l-row l-spaced-horizontal l-spaced-top">
          <!-- User Widget Info-->
          <div class="l-col-md-3 l-col-sm-6 l-spaced-bottom">
            <div data-ason-type="draggable" class="widget-info-wrapper ason-widget ui-drag-container ui-sortable">
              <div class="widget-info-refresh-helper">
                <div class="widget-info t-info-1 ui-drag-item">
                  <ul class="widget-options is-options-right">
                    <li class="option-main-item"><a href="#" class="ui-drag-handle ui-sortable-handle"><i class="fa fa-arrows"></i></a></li>
                    <li class="option-main-item"><a href="#" data-ason-type="refresh" data-ason-target=".widget-info-refresh-helper" data-ason-content="true" data-ason-duration="1100" class="ason-widget"><i class="fa fa-refresh"></i></a></li>
                    <li class="option-main-item"><a href="#" data-ason-type="toggle" data-ason-parent="false" data-ason-target="#user-info" data-ason-content="true" data-ason-duration="200" class="ason-widget"><i class="fa fa-chevron-down"></i></a></li>
                    <li class="option-main-item"><a href="#" data-ason-type="delete" data-ason-target=".widget-info-wrapper" data-ason-content="true" data-ason-animation="fadeOut" class="ason-widget"><i class="fa fa-times"></i></a></li>
                    <li>
                      <ul>
                        <li><a href="#" class="toggler-btn"><i class="fa fa-circle-thin"></i></a></li>
                        <li class="option-sub-item"><a href="#" class="details-btn"><i class="fa fa-file"></i></a></li>
                        <li class="option-sub-item"><a href="#" class="chart-btn"><i class="fa fa-line-chart"></i></a></li>
                      </ul>
                    </li>
                  </ul>
                  <div id="user-info" class="widget-info-details">
                    <div class="info-data open">
                      <h4>{{ $posted_today }} handover</h4>
                      <hr>
                      <p><span>Total</span> Handover
                      </p>
                      <div class="progress progress-no-border progress-mini">
                        <div role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%;" class="progress-bar"><span class="sr-only">75% Complete</span></div>
                      </div>
                    </div>
                    <div class="info-chart">
                      <div class="hide info-t-1-spark-1-c"></div>
                      <div id="customerChart"><canvas width="227" height="110" style="display: inline-block; width: 227px; height: 110px; vertical-align: top;"></canvas></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Orders Widget Info-->
          <div class="l-col-md-3 l-col-sm-6 l-spaced-bottom l-clear-sm">
            <div data-ason-type="draggable" class="widget-info-wrapper ason-widget ui-drag-container ui-sortable">
              <div class="widget-info-refresh-helper">
                <div class="widget-info t-info-2 ui-drag-item">
                  <ul class="widget-options is-options-right">
                    <li class="option-main-item"><a href="#" class="ui-drag-handle ui-sortable-handle"><i class="fa fa-arrows"></i></a></li>
                    <li class="option-main-item"><a href="#" data-ason-type="refresh" data-ason-target=".widget-info-refresh-helper" data-ason-content="true" data-ason-duration="1100" class="ason-widget"><i class="fa fa-refresh"></i></a></li>
                    <li class="option-main-item"><a href="#" data-ason-type="toggle" data-ason-parent="false" data-ason-target="#order-info" data-ason-content="true" data-ason-duration="200" class="ason-widget"><i class="fa fa-chevron-down"></i></a></li>
                    <li class="option-main-item"><a href="#" data-ason-type="delete" data-ason-target=".widget-info-wrapper" data-ason-content="true" data-ason-animation="fadeOut" class="ason-widget"><i class="fa fa-times"></i></a></li>
                    <li>
                      <ul>
                        <li><a href="#" class="toggler-btn"><i class="fa fa-circle-thin"></i></a></li>
                        <li class="option-sub-item"><a href="#" class="details-btn"><i class="fa fa-file"></i></a></li>
                        <li class="option-sub-item"><a href="#" class="chart-btn"><i class="fa fa-line-chart"></i></a></li>
                      </ul>
                    </li>
                  </ul>
                  <div id="order-info" class="widget-info-details">
                    <div class="info-data open">
                      <h4>{{ $team_today }} teams</h4>
                      <hr>
                      <p><span>Total</span> Teams
                      </p>
                      <div class="progress progress-no-border progress-mini">
                        <div role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%;" class="progress-bar"><span class="sr-only">50% Complete</span></div>
                      </div>
                    </div>
                    <div class="info-chart">
                      <div class="hide info-t-2-spark-1-c"></div>
                      <div class="hide info-t-2-spark-2-c"></div>
                      <div class="hide info-t-2-spark-3-c"></div>
                      <div id="ordersChart"><canvas width="200" height="102" style="display: inline-block; width: 200px; height: 102px; vertical-align: top;"></canvas></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Reports Widget Info-->
          <div class="l-col-md-3 l-col-sm-6 l-spaced-bottom">
            <div data-ason-type="draggable" class="widget-info-wrapper ason-widget ui-drag-container ui-sortable">
              <div class="widget-info-refresh-helper">
                <div class="widget-info t-info-3 ui-drag-item">
                  <ul class="widget-options is-options-right">
                    <li class="option-main-item"><a href="#" class="ui-drag-handle ui-sortable-handle"><i class="fa fa-arrows"></i></a></li>
                    <li class="option-main-item"><a href="#" data-ason-type="refresh" data-ason-target=".widget-info-refresh-helper" data-ason-content="true" data-ason-duration="1100" class="ason-widget"><i class="fa fa-refresh"></i></a></li>
                    <li class="option-main-item"><a href="#" data-ason-type="toggle" data-ason-parent="false" data-ason-target="#report-info" data-ason-content="true" data-ason-duration="200" class="ason-widget"><i class="fa fa-chevron-down"></i></a></li>
                    <li class="option-main-item"><a href="#" data-ason-type="delete" data-ason-target=".widget-info-wrapper" data-ason-content="true" data-ason-animation="fadeOut" class="ason-widget"><i class="fa fa-times"></i></a></li>
                    <li>
                      <ul>
                        <li><a href="#" class="toggler-btn"><i class="fa fa-circle-thin"></i></a></li>
                        <li class="option-sub-item"><a href="#" class="details-btn"><i class="fa fa-file"></i></a></li>
                        <li class="option-sub-item"><a href="#" class="chart-btn"><i class="fa fa-line-chart"></i></a></li>
                      </ul>
                    </li>
                  </ul>
                  <div id="report-info" class="widget-info-details">
                    <div class="info-data open">
                      <h4>{{ $user_today }} users</h4>
                      <hr>
                      <p><span>Total</span> Users
                      </p>
                      <div class="progress progress-no-border progress-mini">
                        <div role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%;" class="progress-bar"><span class="sr-only">20% Complete</span></div>
                      </div>
                    </div>
                    <div class="info-chart">
                      <div class="pt-10">
                        <div class="hide info-t-3-spark-1-c"></div>
                        <div id="reportsChart"><canvas width="200" height="100" style="display: inline-block; width: 200px; height: 100px; vertical-align: top;"></canvas></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>


        </div>




      <div class="l-row l-spaced-horizontal">
        <div class="l-col-lg-6 l-col-md-8 l-clear-md l-spaced-bottom">
            <div class="widget-latest-orders t-latest-orders-1">
              
              <div class="widget-latest-orders-info">
                <h4 class="widget-header">Latest Handover 
                </h4>
                <div class="table-order-body">
                  <div data-ason-type="scrollbar" data-ason-max-height="200" class="ason-widget ps-wrapper ps-container ps-active-y" style="max-height: 200px;" data-ps-id="5a93b615-1e25-74f0-d5ed-a0d704329885">
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
                          <td >{{ $post->created_at}}</td>
                          <td >{{ $post->created_at}}</td>
                          <td >{{ $post->created_by}}</td>
                        </tr>
                       @endforeach 
                      </tbody>
                    </table>
                  <div class="ps-scrollbar-x-rail" style="left: 0px; bottom: 2px;"><div class="ps-scrollbar-x" style="left: 0px; width: 0px;"></div></div><div class="ps-scrollbar-y-rail" style="top: 0px; height: 200px; right: 2px;"><div class="ps-scrollbar-y" style="top: 0px; height: 80px;"></div></div></div>
                </div>
                <div class="l-row">
                  <div class="l-col-xs-6"><a href="/post" class="view-all"><i class="fa fa-angle-double-down"></i> View All</a></div>
                </div>
              </div>
            </div>
          </div>


          <div class="l-col-lg-6 l-col-md-8 l-clear-md l-spaced-bottom">
            <div class="widget-latest-orders t-latest-orders-1">
              
              <div class="widget-latest-orders-info">
                <h4 class="widget-header">Latest Users 
                </h4>
                <div class="table-order-body">
                  <div data-ason-type="scrollbar" data-ason-max-height="200" class="ason-widget ps-wrapper ps-container ps-active-y" style="max-height: 200px;" data-ps-id="5a93b615-1e25-74f0-d5ed-a0d704329885">
                    <table class="table table-hover">
                    <thead>
                    <tr>
                   
                     
                      <th>Full Name</th>
                      <th>ATT UID</th>
                      <th>Created At</th>
                    </tr>
                  </thead>
                      <tbody>
                       @foreach ($users as $user)
                        <tr>
                          <td >{{ $user->name}}</td>
                          <td >{{ $user->username}}</td>
                          <td >{{ $user->created_at}}</td>
                        </tr>
                       @endforeach 
                      </tbody>
                    </table>
                  <div class="ps-scrollbar-x-rail" style="left: 0px; bottom: 2px;"><div class="ps-scrollbar-x" style="left: 0px; width: 0px;"></div></div><div class="ps-scrollbar-y-rail" style="top: 0px; height: 200px; right: 2px;"><div class="ps-scrollbar-y" style="top: 0px; height: 80px;"></div></div></div>
                </div>
                <div class="l-row">
                  <div class="l-col-xs-6"><a href="/post" class="view-all"><i class="fa fa-angle-double-down"></i> View All</a></div>
                </div>
              </div>
            </div>
          </div>
        </div>










         <!-- <div class="l-row l-spaced-horizontal l-spaced-top">
            <div class="col-md-8 col-sm-6">
              <div class="panel panel-body">
              <table class="table table-striped">
                <thead>
                  <th>Title</th>
                  <th>Date Created</th>
                  <th>ATT UID</th>
         
                </thead>
                <tbody>
                  <td>
                </tbody>
              </table>
              @foreach($posts as $post )
              <ul>
                <li>Handover {{$post->created_at}}</li>
              </ul>
              @endforeach
              </div>
            </div>
         
            
         
         
          </div> -->



@endsection