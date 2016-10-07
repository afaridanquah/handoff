<!DOCTYPE html>
<html lang="en" class=" js flexbox flexboxlegacy canvas canvastext webgl no-touch geolocation postmessage websqldatabase indexeddb hashchange history draganddrop websockets rgba hsla multiplebgs backgroundsize borderimage borderradius boxshadow textshadow opacity cssanimations csscolumns cssgradients cssreflections csstransforms csstransforms3d csstransitions fontface generatedcontent video audio localstorage sessionstorage webworkers applicationcache svg inlinesvg smil svgclippaths js flexbox flexboxlegacy canvas canvastext webgl no-touch geolocation postmessage websqldatabase indexeddb hashchange history draganddrop websockets rgba hsla multiplebgs backgroundsize borderimage borderradius boxshadow textshadow opacity cssanimations csscolumns cssgradients cssreflections csstransforms csstransforms3d csstransitions fontface generatedcontent video audio localstorage sessionstorage webworkers applicationcache svg inlinesvg smil svgclippaths"><!-- Mirrored from themes.loxdesign.net/proteus/themes/admin/bootstrap/theme/page-blank.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 19 May 2016 13:27:39 GMT --><head>
    <title>Handoff - Dashboard {{Auth::user()->name}}</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <!-- ===== FAVICON =====-->
    <link rel="shortcut icon" href="favicon.ico">
    <!-- ===== CSS =====-->
    <!-- General-->
    {{Html::style("css/basic.css")}}
    {{Html::style("css/general.css")}}
    {{Html::style("css/theme.css")}}
    {{Html::style("css/bootstrap.min.css")}}
    {{Html::style("css/custom.css")}}
    {{Html::style("css/floatPlaceHolder.css")}}
    {{Html::style('//cdn.datatables.net/1.10.12/css/jquery.dataTables.min.css')}}
    {{Html::style("/fonts/themify-icons/themify-icons.css")}}

    
    <!--[if lt IE 9]>
    <script src="js/basic/respond.min.js"></script>
    <script src="js/basic/html5shiv.min.js"></script>
    <![endif]-->
  </head>
  <body class=" pace-done" cz-shortcut-listen="true"><div class="pace-effect-1 pace  pace-inactive"><div class="pace-progress" data-progress-text="100%" data-progress="99" style="transform: translate3d(100%, 0px, 0px);">
  <div class="pace-progress-inner"></div>
</div>
<div class="pace-activity"></div></div><div class="pace-effect-1 pace  pace-inactive"><div class="pace-progress" data-progress-text="100%" data-progress="99" style="transform: translate3d(100%, 0px, 0px);">
  <div class="pace-progress-inner"></div>
</div>
<div class="pace-activity"></div></div>
    
    <!--[if lt IE 9]>
    <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
    
    <!--THEME SETTINGS-->
    
    <!--THEME SETTINGS-->
    <div class="widget-theme-settings t-theme-settings-2">
      <div class="theme-settings-wrapper">
        <h3>Theme Settings</h3>
        <div class="theme-collapsible-cointainer">
          <div data-ason-type="scrollbar" data-ason-max-height="400px" class="ason-widget ps-wrapper ps-container" style="max-height: 400px;" data-ps-id="2c1e753e-f032-9335-76b6-e5b2ad0c1470">
            <div id="themeSection1" class="theme-collapsible collapse-close">Default<span></span></div>
            <div style="display: none;">
              <div class="cont">
                <div class="content"><a href="page-blank.html" title="" class="theme-skin-wrapper skin-default tt-theme-settings" data-original-title="Amber">
                    <div class="l-row">
                      <div class="l-span-xs-4 theme-skin skin-c-1"></div>
                      <div class="l-span-xs-4 theme-skin skin-c-2"></div>
                      <div class="l-span-xs-4 theme-skin skin-c-3"></div>
                    </div></a><a href="http://themes.loxdesign.net/proteus/themes/admin/bootstrap/theme_medium_purple/page-blank.html" title="" class="theme-skin-wrapper skin-medium-purple tt-theme-settings" data-original-title="Medium Purple">
                    <div class="l-row">
                      <div class="l-span-xs-3 theme-skin skin-c-1"></div>
                      <div class="l-span-xs-3 theme-skin skin-c-2"></div>
                      <div class="l-span-xs-3 theme-skin skin-c-3"></div>
                      <div class="l-span-xs-3 theme-skin skin-c-4"></div>
                    </div></a>
                </div>
              </div>
            </div>
            <div id="themeSection2" class="theme-collapsible collapse-close">Material<span></span></div>
            <div style="display: none;">
              <div class="cont">
                <div class="content">
                  <div title="" class="theme-skin-wrapper skin-soon tt-theme-settings" data-original-title="Material Design Soon">
                    <div class="l-row">
                      <div class="l-span-xs-12 theme-skin skin-c-soon">Material Design Soon</div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          <div class="ps-scrollbar-x-rail" style="left: 0px; bottom: 2px;"><div class="ps-scrollbar-x" style="left: 0px; width: 0px;"></div></div><div class="ps-scrollbar-y-rail" style="top: 0px; right: 2px;"><div class="ps-scrollbar-y" style="top: 0px; height: 0px;"></div></div><div class="ps-scrollbar-x-rail" style="left: 0px; bottom: 2px;"><div class="ps-scrollbar-x" style="left: 0px; width: 0px;"></div></div><div class="ps-scrollbar-y-rail" style="top: 0px; right: 2px;"><div class="ps-scrollbar-y" style="top: 0px; height: 0px;"></div></div></div>
        </div>
      </div>
    </div>
    <!--SECTION-->
    <section class="l-main-container">
      <!--Left Sidebar Content-->
      <aside id="sb-left" class="l-sidebar l-sidebar-1 t-sidebar-1 l-sidebar-left l-initial">
        <!--Switcher-->
        <div class="l-side-box"><a href="#" data-ason-type="sidebar" data-ason-to-sm="sidebar" data-ason-target="#sb-left" class="sidebar-switcher switcher t-switcher-side ason-widget"><i class="fa fa-bars"></i></a></div>
        <div class="l-side-box">
          <!--Logo-->
          <div class="widget-logo logo-in-side">
            <h1>
            <a href="{!! URL::to('/') !!}">
               <img src="/img/logo.png" />
            </a>
            <!-- <a href="#"><img src="img/logo.png"></a> --></h1>
          </div> 
        </div>
        <!--Main Menu-->
        <div class="l-side-box">
          <!--MAIN NAVIGATION MENU-->
          <nav class="navigation">
            <ul data-ason-type="menu" class="ason-widget ason-nav">

              
              @if(Auth::user()->admin == 'admin')
              <li {{{ (Request::is('dashboard') ? 'class=active' : '') }}}><a href="/dashboard"><i class="icon ti ti-home"> </i><span class="title">Home</span></a></li> 

              <li ><a href="#"><i class="icon fa fa-database"></i><span class="title">Teams </span><span class="arrow"><i class="fa fa-angle-left"></i></span></a>
                <ul>
                  <li {{{ (Request::is('/team/create') ? 'class=active' : '') }}}><a href="/team/create"><span class="title">Add Team</span></a>
                  </li>
                  <li {{{ (Request::is('/team') ? 'class=active' : '') }}}><a href="/team"><span class="title">View Teams</span></a>
                  </li>
                </ul>
              </li>
              <li ><a href="#"><i class="icon ti ti-user"></i><span class="title">Users </span><span class="arrow"><i class="fa fa-angle-left"></i></span></a>
                <ul>
                  <li><a href="/user/create"><span class="title">Add New</span></a>
                  </li>
                  <li><a href="/user"><span class="title">View List</span></a>
                  </li>
                </ul>
              </li>
              <li><a href="#"><i class="icon fa fa-rocket"></i><span class="title">Handover </span><span class="arrow"><i class="fa fa-angle-left"></i></span></a>
                <ul>
                  <li><a href="/post/create"><span class="title">Add New</span></a>
                  </li>
                  <li><a href="/post"><span class="title">View List</span></a>
                  </li>
                </ul>
              </li>
              @else
              <li {{{ (Request::is('dashboard') ? 'class=active' : '') }}}><a href="/dashboard"><i class="icon ti ti-home"> </i><span class="title">Home</span></a></li> 
              <li><a href="#"><i class="icon fa fa-rocket"></i><span class="title">Handover Message</span><span class="arrow"><i class="fa fa-angle-left"></i></span></a>
                <ul>
                  <li><a href="/post/create"><span class="title">Add New</span></a>
                  </li>
                  <li><a href="/post"><span class="title">View List</span></a>
                  </li>
                </ul>
              </li>
              @endif
              <li {{{ (Request::is('/team/create') ? 'class=active' : '') }}}><a href="/team/create"><i class="icon fa fa-cogs"></i><span class="title">Account</span></a></li>
            </ul>
          </nav>
        </div>
      </aside>
      <!--Main Content-->
      <section class="l-container">
        <!--HEADER-->
        <header class="l-header l-header-1 t-header-1">
          <div class="navbar navbar-ason">
            <div class="container-fluid">
              <!-- <div class="navbar-header">
                <button type="button" data-toggle="collapse" data-target="#ason-navbar-collapse" class="navbar-toggle collapsed"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button><a href="index-2.html" class="navbar-brand widget-logo"><span class="logo-default-header"><img src="img/logo_dark.png" alt="Proteus"></span></a>
              </div> -->
              <div id="ason-navbar-collapse" class="collapse navbar-collapse">
                
                <ul class="nav navbar-nav navbar-right">
                  <li>
                    <!-- Search Widget-->
                    <div class="widget-search search-in-header is-search-right t-search-1">
                      <form role="form" action="http://themes.loxdesign.net/proteus/themes/admin/bootstrap/theme/page-search.html">
                        <input type="text" placeholder="Search..." class="form-control" name="keyword">
                        <button type="submit" class="btn"><i class="fa fa-search"></i></button>
                      </form>
                    </div>
                  </li>
                  <li>
                    <!-- Profile Widget-->
                    <div class="widget-profile profile-in-header">
                      <button type="button" data-toggle="dropdown" class="btn dropdown-toggle"><span class="name"></span>{{Auth::user()->name}} <span class="fa-stack fa-lg">
  <i class="fa fa-circle fa-stack-2x"></i>
  <i class="fa fa-user fa-stack-1x fa-inverse"></i>
</span></button>
                      <ul role="menu" class="dropdown-menu">

                        <li class="power"><a href="page-login.html"><i class="fa fa-power-off"></i>Settings</a></li>
                        <li class="power"><a href="/logout"><i class="fa fa-power-off"></i>Sign Out</a></li>
                      </ul>
                    </div>
                  </li>

                </ul>
              </div>
            </div>
          </div>
        </header>
        @yield('content')
        <!--FOOTER-->
        <!-- <footer class="l-footer l-footer-1 t-footer-1">
          <div class="group pt-10 pb-10 ph">
            <div class="copyright pull-left">
              © Copyright 2015
              <a href="#">Proteus.</a>
              Powered by
              <a href="#">LoxDesign.</a>
              All rights reserved.
            </div>
            <div class="version pull-right">v 1.0</div>
          </div>
        </footer> -->
      </section>
    </section>
    <!-- ===== JS =====-->
  <!--    jQuery-- -->
 <!--    {{Html::script("../../../../../../www.google-analytics.com/analytics.js")}}
    {{Html::script("js/basic/jquery.min.js")}}
    {{Html::script("js/basic/jquery-migrate.min.js")}} -->
    <script async="" src="../../../../../../www.google-analytics.com/analytics.js"></script><script src="{{ asset('js/basic/jquery.min.js') }}"></script>
    <script src="{{ asset('js/basic/jquery-migrate.min.js') }}"></script>
    <!-- General-->

   {{Html::script("js/basic/modernizr.min.js")}}
   {{Html::script("js/basic/bootstrap.min.js")}}
   {{Html::script("js/shared/jquery.asonWidget.js")}}
   {{Html::script("js/plugins/plugins.js")}}
   {{Html::script("js/general.js")}}
   {{Html::script("js/placeholder-pop.js")}}

 
 
 
<!--  {{Html::script("js/basic/bootstrap.min.js")}}
 {{Html::script("js/moment.js")}} -->
   <!-- <script src="{{ asset('js/basic/modernizr.min.js') }}"></script>
    <script src="{{ asset('js/basic/jquery.min.js') }}"></script>
    <script src="{{ asset('js/shared/jquery.asonWidget.js') }}"></script>
    <script src="{{ asset('js/plugins/plugins.js') }}"></script>
    <script src="{{ asset('js/general.js') }}"></script> 
    -->
  
    <script type="text/javascript">
      var paceSemiGeneral = { restartOnPushState: false };
      if (typeof paceSpecific != 'undefined'){
        var paceOptions = $.extend( {}, paceSemiGeneral, paceSpecific );
        paceOptions = paceOptions;
      }else{
        paceOptions = paceSemiGeneral;
      }
      
    </script>
    <script src="{{ asset('js/plugins/pageprogressbar/pace.min.js') }}"></script>
  
    <script src="{{ asset('js/shared/classie.js') }}"></script>
    <script src="{{ asset('js/shared/jquery.cookie.min.js') }}"></script>
    <script src="{{ asset('js/plugins/accordions/jquery.collapsible.min.js') }}"></script>
    <script src="{{ asset('js/plugins/forms/elements/jquery.bootstrap-touchspin.min.js') }}"></script>
    <script src="{{ asset('js/plugins/forms/elements/jquery.switchery.min.js') }}"></script>
    <script src="{{ asset('js/plugins/page/jquery.blank.min.js') }}"></script>
    <script src="{{ asset('js/plugins/datetime/bootstrap-datepicker.min.js') }}"></script>
    <script src="{{ asset('js/moment.js') }}"></script> 
  
    <script src="{{ asset('js/plugins/tooltip/jquery.tooltipster.min.js') }}"></script>
    <script src="{{ asset('js/calls/page.blank.js') }}"></script>
    <script src="{{ asset('js/calls/part.header.1.js') }}"></script>
    <script src="{{ asset('js/bootstrap-datetimepicker.js') }}"></script>
    <script src="{{ asset('js/moment.js') }}"></script> 
    <script src="{{ asset('js/basic/bootstrap.min.js') }}"></script> 
    <script src="{{ asset('js/bootstrap.js') }}"></script> 
    {{Html::script('//cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js')}}
    @yield('script')
    
    <!--<script type="text/javascript">
      (function(i, s, o, g, r, a, m) {
              i['GoogleAnalyticsObject'] = r;
              i[r] = i[r] || function() {
                  (i[r].q = i[r].q || []).push(arguments)
              }, i[r].l = 1 * new Date();
              a = s.createElement(o),
                  m = s.getElementsByTagName(o)[0];
              a.async = 1;
              a.src = g;
              m.parentNode.insertBefore(a, m)
      })(window, document, 'script', '../../../../../../www.google-analytics.com/analytics.js', 'ga');
      ga('create', 'UA-31818910-9', 'auto');
      ga('send', 'pageview');
    </script> -->

 
  <script>
    $(document).ready(function(){
        $('input[name=handoverYesNo]').on('click init handoverYesNo', function(){
          $('#handoverDetails').toggle($('#inlineRadio1').prop('checked'));
        }).trigger('init-handoverYesNo');
    });
  </script>


  <script type="text/javascript">
      $(function(){
        $('#datetimepicker1').datetimepicker();
      });
    </script>

    <script>
        $('input[name=handoverYesNo]').on('click init handoverYesNo', function(){
          $('#handoverDetails').toggle($('#inlineRadio1').prop('checked'));
        }).trigger('init-handoverYesNo');
  
    </script>

  
  

<!-- Mirrored from themes.loxdesign.net/proteus/themes/admin/bootstrap/theme/page-blank.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 19 May 2016 13:27:39 GMT -->
<a id="scrollUp" href="#top" style="position: fixed; z-index: 2147483647; display: none;"><i class="fa fa-chevron-up"></i></a><div id="scrollUp-active" style="position: absolute; top: 300px; width: 100%; border-top-width: 1px; border-top-style: dotted; border-top-color: rgb(0, 255, 255); z-index: 2147483647;"></div><a id="scrollUp" href="#top" style="display: none; position: fixed; z-index: 2147483647;"><i class="fa fa-chevron-up"></i></a><div id="scrollUp-active" style="position: absolute; top: 300px; width: 100%; border-top-width: 1px; border-top-style: dotted; border-top-color: rgb(0, 255, 255); z-index: 2147483647;"></div></body></html>