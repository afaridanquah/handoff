<html lang="en"><head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Starter Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    {{Html::style("css/bootstrap.min.css")}}

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="../../assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    {{Html::style("css/custom_2.css")}}
    {{Html::style("css/custom.css")}}
    {{Html::style("fonts/font-awesome/css/font-awesome.min.css")}}
    {{Html::style("fonts/themify-icons/themify-icons.css")}}
    


    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <div class="container">
      <div class="user-login">
        <div class="row">
            <div class="col-sm-6 col-sm-offset-4">
              @include('common.errors')
              <div style="width: 390px; ">
                <h2>Login to Handover</h2>
                <h4 style="font-size: 13px; color: #8C999A;">Welcome back. Enter your user id and password to continue</h4><hr style="border-color:#3C2F3D">
              </div>
              
                {{ Form::open(array('url' => 'login', 'class' => 'form-horizontal')) }}
                {!! csrf_field() !!}
                          <div class="form-group">
                            <div class="col-sm-8">
                              <div class="input-group">
                              <div class="input-group-addon"><i class="ti ti-user"></i></div>
                              <input type="text" class="form-control" id="inputEmail3" placeholder="Username" name="username">
                              </div>
                            </div>
                          </div>
                          <div class="form-group">
                            <div class="col-sm-8">
                              <div class="input-group">
                              <div class="input-group-addon"><i class="ti ti-key"></i></div>
                              <input type="password" class="form-control" id="inputPassword3" placeholder="Password" name="password">
                              </div>
                            </div>
                          </div>
                          <div class="form-group">
                            <div class="col-sm-8 ">
                              <input type="submit" class="btn btn-warning btn_width" value="Sign in">
                            </div>
                          </div>
                          <div class="form-group">
                            <div class="col-sm-8">
                              <center><a href="#">Forgot your username or password ?</a></center>
                            </div>
                          </div>
                          <div class="form-group">
                            <div class="col-sm-8">
                              <hr>
                            </div>
                          </div>
                {{ Form::close() }}
                    </div>
                </div>
            </div>

    </div><!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    {{Html::script("/js/basic/bootstrap.min.js")}}
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
    {{Html::script("../../../../../../www.google-analytics.com/analytics.js")}}
    {{Html::script("js/basic/jquery.min.js")}}
    {{Html::script("js/basic/jquery-migrate.min.js")}}

</body></html>