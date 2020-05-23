<!DOCTYPE html>
<html lang="es">
    <head>        
        <!-- META SECTION -->
        <title>@yield('titulo')</title>            
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        
        <link rel="icon" href='{{url("/admin-lte")}}/favicon.ico' type="image/x-icon" />
        <!-- END META SECTION -->
        
        <!-- CSS INCLUDE -->        
        <link rel="stylesheet" type="text/css" id="theme" href='{{url("/admin-lte")}}/css/theme-default.css'/>
        <!-- EOF CSS INCLUDE -->                                    
    </head>
    <body>
        <!-- START PAGE CONTAINER -->
        <div class="page-container">
            
            <!-- START PAGE SIDEBAR -->
            <div class="page-sidebar">
                <!-- START X-NAVIGATION -->
                <ul class="x-navigation">
                    @yield('menu')
                </ul>
                <!-- END X-NAVIGATION -->
            </div>
            <!-- END PAGE SIDEBAR -->
            
            <!-- PAGE CONTENT -->
            <div class="page-content">
                
                    <!-- START X-NAVIGATION VERTICAL -->
                        <ul class="x-navigation x-navigation-horizontal x-navigation-panel">
                        <!-- TOGGLE NAVIGATION -->
                    <li class="xn-icon-button">
                        <a href="#" class="x-navigation-minimize"><span class="fa fa-dedent"></span></a>
                    </li>
                    <!-- END TOGGLE NAVIGATION -->
                    <!-- SEARCH -->
                    <li class="xn-search">
                        <form role="form">
                            <input type="text" name="search" placeholder="Search..."/>
                        </form>
                    </li>   
                    <!-- END SEARCH -->
                    <!-- SIGN OUT -->
                    <li class="xn-icon-button pull-right">
                                                            
                    
                    </li> 
                   
                </ul>
                <!-- END X-NAVIGATION VERTICAL -->                     

                <!-- START BREADCRUMB -->
                <ul class="breadcrumb">
                    @yield('menubar')
                </ul>
                <!-- END BREADCRUMB -->    

                <!-- PAGE TITLE -->
                <div class="page-title">                    
                   @yield('titlepage')
                </div>
                <!-- END PAGE TITLE -->                   
                
                <!-- PAGE CONTENT WRAPPER -->
                <div class="page-content-wrap">                  
                         @yield('contenido')
                </div>
                <!-- END PAGE CONTENT WRAPPER -->                                
            </div>            
            <!-- END PAGE CONTENT -->
        </div>
        <!-- END PAGE CONTAINER -->

        <!-- MESSAGE BOX-->
        <div class="message-box animated fadeIn" data-sound="alert" id="mb-signout">
            <div class="mb-container">
                <div class="mb-middle">
                    <div class="mb-title"><span class="fa fa-sign-out"></span> Log <strong>Out</strong> ?</div>
                    <div class="mb-content">
                        <p>Are you sure you want to log out?</p>                    
                        <p>Press No if youwant to continue work. Press Yes to logout current user.</p>
                    </div>
                    <div class="mb-footer">
                        <div class="pull-right">
                            <a href="pages-login.html" class="btn btn-success btn-lg">Yes</a>
                            <button class="btn btn-default btn-lg mb-control-close">No</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END MESSAGE BOX-->

        <!-- START PRELOADS -->
        <audio id="audio-alert" src='{{url("/admin-lte")}}/audio/alert.mp3' preload="auto"></audio>
        <audio id="audio-fail" src='{{url("/admin-lte")}}/audio/fail.mp3' preload="auto"></audio>
        <!-- END PRELOADS -->                  
        
    <!-- START SCRIPTS -->
        <!-- START PLUGINS -->
        <script type="text/javascript" src='{{url("/admin-lte")}}/js/plugins/jquery/jquery.min.js'></script>
        <script type="text/javascript" src='{{url("/admin-lte")}}/js/plugins/jquery/jquery-ui.min.js'></script>
        <script type="text/javascript" src='{{url("/admin-lte")}}/js/plugins/bootstrap/bootstrap.min.js'></script> 

        @stack('scripts')         
        <!-- END PLUGINS -->

        <!-- START THIS PAGE PLUGINS-->        
        <script type='text/javascript' src='{{url("/admin-lte")}}/js/plugins/icheck/icheck.min.js'></script>        
        <script type="text/javascript" src='{{url("/admin-lte")}}/js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js'></script>
        <script type="text/javascript" src='{{url("/admin-lte")}}/js/plugins/scrolltotop/scrolltopcontrol.js'></script>
        
        <script type="text/javascript" src='{{url("/admin-lte")}}/js/plugins/morris/raphael-min.js'></script>
        <!-- <script type="text/javascript" src='{{url("/admin-lte")}}/js/plugins/morris/morris.min.js'></script>        -->
        <script type="text/javascript" src='{{url("/admin-lte")}}/js/plugins/rickshaw/d3.v3.js'></script>
        <script type="text/javascript" src='{{url("/admin-lte")}}/js/plugins/rickshaw/rickshaw.min.js'></script>
        <script type='text/javascript' src='{{url("/admin-lte")}}/js/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js'></script>
        <script type='text/javascript' src='{{url("/admin-lte")}}/js/plugins/jvectormap/jquery-jvectormap-world-mill-en.js'></script>                
        <script type='text/javascript' src='{{url("/admin-lte")}}/js/plugins/bootstrap/bootstrap-datepicker.js'></script>                
        <script type="text/javascript" src='{{url("/admin-lte")}}/js/plugins/owl/owl.carousel.min.js'></script>                 
        
        <script type="text/javascript" src='{{url("/admin-lte")}}/js/plugins/datatables/jquery.dataTables.min.js'></script>
        <script type="text/javascript" src='{{url("/admin-lte")}}/js/plugins/tableexport/tableExport.js'></script>
        <script type="text/javascript" src='{{url("/admin-lte")}}/js/plugins/moment.min.js'></script>
        <script type="text/javascript" src='{{url("/admin-lte")}}/js/plugins/daterangepicker/daterangepicker.js'></script>
        <!-- END THIS PAGE PLUGINS-->        

        <!--MAS SCRIPT -->
        <script type="text/javascript" src='{{url("/admin-lte")}}/js/plugins/bootstrap/bootstrap-datepicker.js'></script>                
        <script type="text/javascript" src='{{url("/admin-lte")}}/js/plugins/bootstrap/bootstrap-file-input.js'></script>
        <script type="text/javascript" src='{{url("/admin-lte")}}/js/plugins/bootstrap/bootstrap-select.js'></script>
        <script type="text/javascript" src='{{url("/admin-lte")}}/js/plugins/tagsinput/jquery.tagsinput.min.js'></script>
        <!--MAS SCRIPT -->

        <!-- START TEMPLATE -->
        <!--<script type="text/javascript" src='{{url("/admin-lte")}}/js/settings.js'></script>-->
        
        <script type="text/javascript" src='{{url("/admin-lte")}}/js/plugins.js'></script>        
        <script type="text/javascript" src='{{url("/admin-lte")}}/js/actions.js'></script>
        
        <!-- <script type="text/javascript" src='{{url("/admin-lte")}}/js/demo_dashboard.js'></script> -->
        <!-- END TEMPLATE -->
    <!-- END SCRIPTS -->         
    </body>
</html>






