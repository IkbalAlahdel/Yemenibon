@extends('layouts.master')
@section('content')
<section id="main-content">
      <section class="wrapper" >
        <div class="row">
        <div class="col-lg-12 main-chart">

<div class="row m-5">
<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
               
<div class="row mt" style="margin-left:5%;">
            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
              <div class="content-panel">
                <h4><i class="fa fa-angle-right"></i> Website Activity</h4>
                <div class="panel-body text-center ml-5">
                  <canvas id="bar" height="300" width="650" class="canav-bar"></canvas>
                  <script>
    var barChartData = {
        labels : ["User","Content","category","staticpage","banner"],
        datasets : [
            {
                fillColor : "rgba(220,220,220,0.5)",
                strokeColor : "rgba(220,220,220,1)",
                data : [{{$user}},{{$content}},{{$category}},{{$staticpage}},{{$banner}}]
            },
            {
                fillColor : "rgba(151,187,205,0.5)",
                strokeColor : "rgba(151,187,205,1)",
                data : [{{$user}},{{$content}},{{$category}},{{$staticpage}},{{$banner}}]
            }
        ]

    };
   var barChartData=new Chart(document.getElementById("bar").getContext("2d")).Bar(barChartData);


                  </script>
                </div>
              </div>
            </div>
        
        </div>


                    <div class="row mt" style="margin-left:5%; margin-top:5%;">
                      
               <!-- SERVER STATUS PANELS  -->
              <div class="col-md-4 col-sm-4 mb">
                <div class="grey-panel pn donut-chart">
                  <div class="grey-header">
                   <b> <h4 class="text-white">Admin Users</h4></b>
                  </div>
                  <canvas id="serverstatus01" height="120" width="120" class="canaves_cir"></canvas>
                  <script>
                    var doughnutData = [{
                        value: 100,
                        color: "#fdfdfd"
                      },
                      {
                        value: {{$user}},
                        color: "#CCD1D9"

                      }
                    ];
                    var myDoughnut = new Chart(document.getElementById("serverstatus01").getContext("2d")).Doughnut(doughnutData);
                  </script>
                  <!-- <div class="col-md-12 mb">
                
                                    <i class="fa fa-user-o fa-4x" style="color:white; margin-top:10%;"></i>
                            </div> -->

                  <div class="row">
                    <div class="col-sm-6 col-xs-6 goleft">
                      <p>Users<br/>Increase</p>
                    </div>
                    <div class="col-sm-6 col-xs-6">
                    <b> <h2 style="color:white;" class="m-5">{{$user}} %</h2></b>
                    </div>
                  </div>
                </div>
                
                <!-- /grey-panel -->
              </div>
              <div class="col-md-4 mb">
                <div class="weather pn">
                  <i class="fa fa-picture-o fa-4x"></i>
                  <b>  <h1 class="text-white" style="font-size:40px;">{{$banner}} %</h1>
                    <h4>Slider Images</h4></b>
                </div>
              </div>
              <!-- /col-md-4-->
              <div class="col-md-4 col-sm-4 mb">
                <div class="darkblue-panel pn">
                  <div class="darkblue-header">
                  <b><h4 >Categories</h4></b>
                  </div>
                  <canvas id="serverstatus02" height="120" width="120" class="canaves_cir"></canvas>
                  <script>
                    var doughnutData = [{
                        value: 100,
                        color: "#444C57"
                      },
                      {
                        value: {{$category}},
                        color: "#fdfdfd"
                      }
                    ];
                    var myDoughnut = new Chart(document.getElementById("serverstatus02").getContext("2d")).Doughnut(doughnutData);
                  </script>
                    <div class="text-center">
                    <b> <h1  class="text-white" style="font-size:40px;">{{$category}} % </h1></b>
                    </div>
                </div>
                <!--  /darkblue panel -->
              </div>
              
     

              <!-- /col-md-4 -->
            </div>
            <!-- /row -->
    
                    <!-- Column -->
                
                </div>

          <!-- /col-lg-3 -->
        </div>
        </div>
        <script src="{{asset('lib/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('lib/bootstrap/js/bootstrap.min.js')}}"></script>
  <script class="include" type="text/javascript" src="{{asset('lib/jquery.dcjqaccordion.2.7.js')}}"></script>
  <script src="{{asset('lib/jquery.scrollTo.min.js')}}"></script>
  <script src="{{asset('lib/jquery.nicescroll.js')}}" type="text/javascript"></script>
  <!--common script for all pages-->
  <script src="{{asset('lib/common-scripts.js')}}"></script>
  <!--script for this page-->
  <script src="{{asset('lib/chart-master/Chart.js')}}"></script>
  <script src="{{asset('lib/chartjs-conf.js')}}"></script>
        <!-- /row -->
      </section>
    </section>
@endsection