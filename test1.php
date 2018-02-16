    <?php include('includes/header.php'); ?>
    <link href='css/mapcanvas.css' rel='stylesheet' type='text/css'>
    <title>Development work visualization</title>
    <!-- Our Custom CSS -->
    <link href="css/mapscss.css" rel='stylesheet' type='text/css'>
    <link href="css/counter.css" rel='stylesheet' type='text/css'>
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="https://code.highcharts.com/modules/exporting.js"></script>
    <link rel="stylesheet" href="ncss/css/custom.css">
    <link href="css/checkbox.css" rel='stylesheet' type='text/css'>

    <meta charset="utf-8" name="viewport" content="width device-width" minimum-scalable="1.0" maximum-scalable="1.0">


<div class="clearfix"></div>
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-6">
          <div id="container2"></div>
          <div class="col-md-6">
            <div class="panel-caption">
              <div class="text-center">Total Budget : $989876</div>
            </div>
          </div>
            <div class="col-md-6">
              <div class="panel-caption ">
              <div class="text-center"><a data-toggle="tab" href="#table1">Table</a></div>
              <!--<li><a data-toggle="tab" href="#menu2">View In Map</a></li> -->
          </div>
          </div>
          <div class="tab-content col-md-offset-2 col-md-8">
          <div id="table1" class="tab-pane fade">
            <table class="table table-hover">
              <thead>
                <tr>
                  <th>#</th>
                  <th>First Name</th>
                  <th>Last Name</th>
                  <th>Username</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">1</th>
                  <td>Mark</td>
                  <td>Otto</td>
                  <td>@mdo</td>
                </tr>
                <tr>
                  <th scope="row">2</th>
                  <td>Jacob</td>
                  <td>Thornton</td>
                  <td>@foreigner</td>
                </tr>
                <tr>
                  <th scope="row">3</th>
                  <td>Larry </td>
                  <td>Pimenta</td>
                  <td>@twitter</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        </div>
        <div class="col-md-6">
          <div id="container3"></div>
           <nav aria-label="Page navigation example" class="col-md-12 text-center example">
            <ul class="pagination pagination-sm justify-content-right">
              <li class="pages-item disabled">
                <a class="page-link" href="#" tabindex="-1">Previous</a>
              </li>
              <li class="page-item"><a class="page-link" href="#">1</a></li>
              <li class="page-item"><a class="page-link" href="#">2</a></li>
              <li class="page-item"><a class="page-link" href="#">3</a></li>
              <li class="page-item">
                <a class="page-link" href="#">Next</a>
              </li>
            </ul>
          </nav>
        </div>
</div>
</div>

    <script type="text/javascript">
      // Build the chart
      Highcharts.chart('container2', {
        chart: {
          plotBackgroundColor: null,
          plotBorderWidth: null,
          plotShadow: false,
          type: 'pie'
        },
        title: {
          text: 'Budget'
        },
        tooltip: {
          pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
        },
        plotOptions: {
          pie: {
            allowPointSelect: true,
            cursor: 'pointer',
            dataLabels: {
              enabled: false
            },
            showInLegend: true
          }
        },
        series: [{
          name: 'Brands',
          colorByPoint: true,
          data: [{
            name: 'Road',
            y: 56.33
          }, {
            name: 'Education',
            y: 24.03,
            sliced: true,
            selected: true
          }, {
            name: 'Electricity',
            y: 10.38
          }, {
            name: 'Water',
            y: 4.77
          }, {
            name: 'Garbage',
            y: 0.91
          }, {
            name: 'Internet',
            y: 0.2
          }]
        }]
      });
    </script>
<script type="text/javascript">
  var chart = Highcharts.chart('container3', {

    title: {
        text: 'Yearly Budget'
    },

    subtitle: {
        text: 'Plain'
    },

    xAxis: {
        categories: ['2010', '2011', '2012', '2013', '2014', '2015', '2016', '2017', '2018']
    },

    series: [{
        type: 'column',
        colorByPoint: true,
        data: [300878, 418524, 14524, 145622, 70500, 800004, 154522, 147520.5, 145257],
        showInLegend: false
    }]

});


$('#plain').click(function () {
    chart.update({
        chart: {
            inverted: false,
            polar: false
        },
        subtitle: {
            text: 'Plain'
        }
    });
});

$('#inverted').click(function () {
    chart.update({
        chart: {
            inverted: true,
            polar: false
        },
        subtitle: {
            text: 'Inverted'
        }
    });
});

$('#polar').click(function () {
    chart.update({
        chart: {
            inverted: false,
            polar: true
        },
        subtitle: {
            text: 'Polar'
        }
    });
});
</script>

<!-- map tab 
<div id="menu2" class="tab-pane fade">
     <div class="card card-block" style="width: 400px;">
   <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d56517.022565290084!2d85.29574873627928!3d27.707592562752843!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb198a307baabf%3A0xb5137c1bf18db1ea!2sKathmandu+44600!5e0!3m2!1sen!2snp!4v1516264292293" width="400" height="250" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div>
   
  </div> -->





  <section class="probootstrap-section" id="probootstrap-counter">
    <div class="container">

      <div class="row">
        <div class="col-md-3 col-sm-6 col-xs-6 col-xs-12 probootstrap-animate">
          <div class="probootstrap-counter-wrap" align="center">
            <div class="probootstrap-icon">
              <i class="fa fa-money fa-3x fa-fw" aria-hidden="true"></i>
            </div>
            <div class="probootstrap-text">
              <span class="probootstrap-counter">
                <span class="js-counter" data-from="0" data-to="20203" data-speed="5000" data-refresh-interval="50">1</span>
              </span>
              <span class="probootstrap-counter-label">Total Budget</span>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-6 col-xs-6 col-xs-12 probootstrap-animate">
          <div class="probootstrap-counter-wrap" align="center">
            <div class="probootstrap-icon">
              <i class="fa fa-tasks fa-3x fa-fw" aria-hidden="true"></i>
            </div>
            <div class="probootstrap-text">
              <span class="probootstrap-counter">
                <span class="js-counter" data-from="0" data-to="139" data-speed="5000" data-refresh-interval="50">1</span>
              </span>
              <span class="probootstrap-counter-label">Total Projects</span>
            </div>
          </div>
        </div>
        <div class="clearfix visible-sm-block visible-xs-block"></div>
        <div class="col-md-3 col-sm-6 col-xs-6 col-xs-12 probootstrap-animate">
          <div class="probootstrap-counter-wrap" align="center">
            <div class="probootstrap-icon">
              <i class="fa fa-cogs fa-3x fa-fw" aria-hidden="true"></i>
            </div>
            <div class="probootstrap-text">
              <span class="probootstrap-counter">
                <span class="js-counter" data-from="0" data-to="99" data-speed="5000" data-refresh-interval="50">1</span>%
              </span>
              <span class="probootstrap-counter-label">Ongoing Projects</span>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-6 col-xs-6 col-xs-12 probootstrap-animate">

         <div class="probootstrap-counter-wrap" align="center">
          <div class="probootstrap-icon">
            <i class="fa fa-flag-checkered fa-3x fa-fw" aria-hidden="true"></i>
          </div>
          <div class="probootstrap-text">
            <span class="probootstrap-counter">
             <span class="js-counter" data-from="0" data-to="100" data-speed="5000" data-refresh-interval="50">1</span>%
           </span>
           <span class="probootstrap-counter-label">Completed Projects</span>
         </div>
       </div>
     </div>
   </div>
 </div>
</section>

<!--counter script-->
<script type="text/javascript">

  $(document).ready(function(){

   $('.js-counter').countTo();
   $('.probootstrap-counter-wrap').appear(function() {
    $('.js-counter').countTo();
  },{
    accY: -100
  });  

 });
</script>

<!-- Page Content Holder -->
<div id="content">
  <nav class="navbar navbar-default">
    <div class="container-fluid">
      <div class="row">

        <div class="navbar-header col-md-4 col-sm-12 col-xs-12 col-lg-4 col-offset-1">
          <ul class="nav navbar-nav navbar-left" >
           <li class="nav-head"><a href="#" title="map"><i class="fa fa-map" aria-hidden="true"></i> MAP</a></li>
           <li class="nav-head"><a href="datasets.php" title="data"><i class="fa fa-database" aria-hidden="true"></i> DATA</a></li>
           <li class="nav-head"><a href="#" title="charts"><i class="fa fa-line-chart" aria-hidden="true"></i> CHARTS</a></li>
         </ul>
       </div>

       <div class="col-md-4 col-sm-12 col-xs-12 col-lg-4 pull-left">
        <div class="input-group">
          <div class="input-group-btn search-panel">
            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
              <span id="search_concept">Filter by</span> <span class="caret"></span>
            </button>
            <ul class="dropdown-menu" role="menu">
              <li><a href="#contains">Contains</a></li>
              <li><a href="#its_equal">It's equal</a></li>
              <li><a href="#greather_than">Greather than ></a></li>
              <li><a href="#less_than">Less than</a></li>
              <li class="divider"></li>
              <li><a href="#all">Anything</a></li>
            </ul>
          </div>
          <input type="hidden" name="search_param" value="all" id="search_param">         
          <input type="text" class="form-control" name="x" placeholder="Search term...">
          <span class="input-group-btn">
            <button class="btn btn-default" type="button"><span class="glyphicon glyphicon-search"></span></button>
          </span>
        </div>
      </div>

      <div class="collapse navbar-collapse col-md-4 col-sm-12 col-xs-12 col-lg-4 pull-right" id="bs-example-navbar-collapse-1">

        <div class="dropdown pull-right">
          <button class="btn btn-outline-danger dropdown-toggle" type="button" data-toggle="dropdown"><i class="fa fa-ellipsis-v" aria-hidden="true"></i>
            <span class="caret"></span></button>
            <ul class="dropdown-menu">
              <li><a href="#" title="Pan"><i class="fa fa-arrows-alt" aria-hidden="true"></i> Pan</a></li>
              <li><a href="#" title="Measure"><i class="fa fa-balance-scale" aria-hidden="true"></i> Measure</a></li>
            </ul>
          </div>
          <ul class="nav navbar-nav pull-right list-inline">
            <li><a href="#" class="test" data-toggle="tooltip" data-placement="bottom" title="Zoom-in"><i class="fa fa-search-plus" aria-hidden="true"></i></a></li>
            <li><a href="#" class="test" data-toggle="tooltip" data-placement="bottom" title="Zoom-out"><i class="fa fa-search-minus" aria-hidden="true"></i></a></li>
            <li><a href="#" class="test" data-toggle="tooltip" data-placement="bottom" title="Print/download resource"><i class="fa fa-print" aria-hidden="true"></i></a></li>
            <li><a href="#" class="test" data-toggle="tooltip" data-placement="bottom" title="Refresh this map"><i class="fa fa-refresh" aria-hidden="true"></i></a></li>
          </ul>
        </div>

      </div>

      <!--search panel dropdown validation-->
      <script>
        $(document).ready(function(e){
          $('.search-panel .dropdown-menu').find('a').click(function(e) {
            e.preventDefault();
            var param = $(this).attr("href").replace("#","");
            var concept = $(this).text();
            $('.search-panel span#search_concept').text(concept);
            $('.input-group #search_param').val(param);
          });
        });
      </script>

    </div>
  </nav>

  <div class="wrapper">
    <!-- Sidebar Holder -->
    <nav id="sidebar">
      <div class="row yesto">
       <div class="col-md-5 dropdown pull-left" style=" color: #000;">
        <button class="btn btn-outline-default dropdown-toggle" type="button" data-toggle="dropdown" title="Filters"><i class="fa fa-bars" aria-hidden="true"></i> Select category <span class="caret"></span></button>
        <ul class="dropdown-menu">
         <form>
          <div class="form-check">
            <label>
              <input type="checkbox" name="check" checked> <span class="label-text">Completed</span>
            </label>
          </div>
          <div class="form-check">
            <label>
              <input type="checkbox" name="check"> <span class="label-text">Ongoing</span>
            </label>
          </div>
        </form>
      </ul>
    </div>
  </div>
  <div class="row">
    <div class="col-sm-12">
      <div class="list-group">
        <label class="list-group-item list-group-item-action"><input type="checkbox" name="check"><span class="label-text"> Construction Projects</span></label>
        <label  class="list-group-item list-group-item-action"><input type="checkbox" name="check"><span class="label-text"> Drinking Water Projects</span></label>
        <label  class="list-group-item list-group-item-action"><input type="checkbox" name="check"> <span class="label-text">Dumping Sites Projects</span></label>
        <label  class="list-group-item list-group-item-action "><input type="checkbox" name="check"><span class="label-text"> Road Projects</span></label>
        <label  class="list-group-item list-group-item-action "><input type="checkbox" name="check"><span class="label-text"> Electricity Projects</span></label>
        <label  class="list-group-item list-group-item-action "><input type="checkbox" name="check"><span class="label-text"> School Projects</span></label>
        <label  class="list-group-item list-group-item-action "><input type="checkbox" name="check"><span class="label-text"> Internet Projects</span></label>
        <label  class="list-group-item list-group-item-action "><input type="checkbox" name="check"><span class="label-text"> Solar Projects</span></label>
      </div>

    </div>
  </div>
</nav>


<div class="container-fluid">
  <div class="row">
    <div id="map"></div>
    <button type="button" id="sidebarCollapse" class="btn btn-outline-warning btn-sm navbar-btn">
     <i class="fa fa-angle-left" aria-hidden="true"></i>
     <i class="fa fa-angle-right" aria-hidden="true"></i>
   </button>
   <div class="popup-map">
    <ul class="nav nav-pills" style="">
      <li><a data-toggle="pill" href="#home">Import <i class="fa fa-upload" aria-hidden="true"></i></a></li>
      <li><a data-toggle="pill" href="#menu1">Analyze <i class="fa fa-wpexplorer" aria-hidden="true"></i></a></li>
      <li><a data-toggle="pill" href="#menu2">Base map <i class="fa fa-map-pin" aria-hidden="true"></i></a></li>
    </ul>

    <div class="tab-content">
     <div id="home" class="tab-pane fade">
      <!-- <h3>HOME</h3>
        <p>Some content.</p> -->
      </div>
      <div id="menu1" class="tab-pane fade">
      <!-- <h3>Menu 1</h3>
        <p>Some content in menu 1.</p> -->
      </div>
      <div id="menu2" class="tab-pane fade">
        <h6>Street</h6>
        <div class="list-group">
          <a href="#"> <img src="images/street.png" height="50px" width="50px" alt="image"></a>
          <a href="#"> <img src="images/street.png" height="50px" width="50px" alt="image"></a>
          <a href="#"> <img src="images/street.png" height="50px" width="50px" alt="image"></a>
          <a href="#"> <img src="images/street.png" height="50px" width="50px" alt="image"></a>
        </div>
        <h6>Satellite</h6>
        <div class="list-group">
          <a href="#"> <img src="images/osm.jpg" height="50px" width="50px" alt="image"></a>
          <a href="#"> <img src="images/osm.jpg" height="50px" width="50px" alt="image"></a>
          <a href="#"> <img src="images/osm.jpg" height="50px" width="50px" alt="image"></a>
          <a href="#"> <img src="images/osm.jpg" height="50px" width="50px" alt="image"></a>
        </div>
      </div>
    </div>
  </div>

  <div class="container-fluid">
    <p style="visibility: hidden; font-size: 9px;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
  </div>
</div>
</div>
</div>
</div>

<!--sidebar collapse-->
<script>
  $(document).ready(function () {
   $('#sidebarCollapse').on('click', function () {
     $('#sidebar').toggleClass('active');
   });
 });
</script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB7exZMUKU7pPZifDhZq1x3qplK1Cxk6AE"></script>
<!-- <script src="js/category_details.js"></script> -->
<script src="multiple_markers/js/map.js"></script> 
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script> <!--bar chat -->
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script><!--pie chat -->
<!--stats counter-->
<script src="js/count-to.js"></script>
<script src="js/jquery.appear.js"></script>
<?php include('includes/footer.php'); ?>