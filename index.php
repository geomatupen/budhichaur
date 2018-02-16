
    <!DOCTYPE html>
<html>
<head>
<style>
/* width */
::-webkit-scrollbar {
   width: 5px;
}

/* Track */
::-webkit-scrollbar-track {
   box-shadow: inset 0 10px 10px silver;
   border-radius: 10px;
}

/* Handle */
::-webkit-scrollbar-thumb {
   background: grey;
   border-radius: 25px;
}

/* Handle on hover */
::-webkit-scrollbar-thumb:hover {
   background: rgba(0,0,0,0.7); 
}

</style>
  <meta http-equiv="X-UA Compatible" content="text/html"; charset="utf-8"/>
    <meta name="viewport" content="width=device-width" initial-scale="1" user-scalable="no">
  <title>Budhichaur VDC | Digitalnagar</title>
<link rel="shortcut icon" href="images/logo.png">
  <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css" >
  <link rel="stylesheet" href="css/bootstrap/css/bootstrap-theme.min.css" >
  <link rel="stylesheet" href="css/navigationbar.css">

    <link href="https://fonts.googleapis.com/css?family=Hind" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Hind|Rajdhani" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
 <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <!--<script src="jquery-3.2.1.min.js"</script>-->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>

<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Tangerine">
<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" type="text/css">



	<!--<link rel="stylesheet" href="./css/mapbox.css" />-->
	<link rel="stylesheet" href="./css/leaflet.css" />
	<link rel="stylesheet" href="./css/popuptableinmap.css" />
	<!--<link rel="stylesheet" href="./css/bootstrap.min.css" />-->
	

	

	<script src="./js/leaflet.js"></script>
	<!--<script src="./js/mapbox.js"></script>-->
	<script src="./js/leaflet.ajax.min.js"></script>	
	<!--<script src="./js/jquery-2.1.1.min.js"></script>-->
	<script src="./js/randomColor.js"></script>
	<script src="./js/jquery.dataTables.min.js"></script>
	<!--<script src="./js/geometry_styles.js"></script>
	<!--<script src="./js/bootstrap.min.js"></script>-->




<!-- <script> for hiding the sensitive css
window['_fs_debug'] = false;
window['_fs_host'] = 'fullstory.com';
window['_fs_org'] = 'A5H2F';
window['_fs_namespace'] = 'FS';
(function(m,n,e,t,l,o,g,y){
    if (e in m) {if(m.console && m.console.log) { m.console.log('FullStory namespace conflict. Please set window["_fs_namespace"].');} return;}
    g=m[e]=function(a,b){g.q?g.q.push([a,b]):g._api(a,b);};g.q=[];
    o=n.createElement(t);o.async=1;o.src='https://'+_fs_host+'/s/fs.js';
    y=n.getElementsByTagName(t)[0];y.parentNode.insertBefore(o,y);
    g.identify=function(i,v){g(l,{uid:i});if(v)g(l,v)};g.setUserVars=function(v){g(l,v)};
    y="rec";g.shutdown=function(i,v){g(y,!1)};g.restart=function(i,v){g(y,!0)};
    g.identifyAccount=function(i,v){o='account';v=v||{};v.acctId=i;g(o,v)};
    g.clearUserCookie=function(){};
})(window,document,window['_fs_namespace'],'script','user');
</script> -->
<style type="text/css">
  body{
    font-family: 'Poppins', sans-serif;
    background: #fafafa;
    font-style: inherit;
    font-weight: 400;
  }
  .leaflet-clickable{
	cursor: pointer !important;
  }
  .leaflet-popup{
	z-index: 300 !important;
  }
  .leaflet-map-pane svg{
	z-index: 4 !important;
  }
  .leaflet-marker-icon{
	pointer-events:auto !important;
  }
  
  
</style>
</head>
<body>
    <header>
      
  <div class="navbar navbar-default navbar-fixed-top"  id="navbar">
          <a href="index.php">
          <div class="logo ">
              <img src="images/logo.png" class="img-responsive logo-image" alt="" height="auto" width="auto">
          </div>

      
          <div class="navbar-header" href="index.php">
              <div class="navbar-brand" href="index.php" id="navbarhead"><strong>Participatory Community Mapping Portal</strong>
                  <h5 class="text-center" id="mainheadings">Government of Nepal, Budhichaur VDC, Hetauda, Makwanpur, Nepal </h5>
              </div>
          </div></a>

<div class="container">
  <div class="row">

          <button class="navbar-toggle" data-toggle="collapse" data-target=".navHeaderCollapse">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
          </button>


          <div class="collapse navbar-collapse navHeaderCollapse">
              <!--<ul class="nav navbar-nav navbar-right">
                  <li><a href="index.php" id="navli" >????????</a></li>
                  <li><a href="badapatra.php" id="navli">?????? ???????</a></li>
                  <li><a href="hamronagar.php" id="navli">?????? ???</a></li>
                  <li><a href="test1.php" id="navli">??????? ??????</a></li>
                  <li><a href="janagunaso.php"  id="navli">????????</a></li>
              </ul>-->
          </div><!-- /.navbar-collapse -->
          </div>
        </div>
      </div>
    </header>
<!--<script>
    var prev = 0;
    var $window = $(window);
    var nav = $('.navbar');

    $window.on('scroll', function(){
        var scrollTop = $window.scrollTop();
        nav.toggleClass('hidden', scrollTop > prev);
        prev = scrollTop;
    });


    /*
        * Replace all SVG images with inline SVG
        */
    jQuery('img.svg').each(function(){
        var $img = jQuery(this);
        var imgID = $img.attr('id');
        var imgClass = $img.attr('class');
        var imgURL = $img.attr('src');

        jQuery.get(imgURL, function(data) {
            // Get the SVG tag, ignore the rest
            var $svg = jQuery(data).find('svg');

            // Add replaced image's ID to the new SVG
            if(typeof imgID !== 'undefined') {
                $svg = $svg.attr('id', imgID);
            }
            // Add replaced image's classes to the new SVG
            if(typeof imgClass !== 'undefined') {
                $svg = $svg.attr('class', imgClass+' replaced-svg');
            }

            // Remove any invalid XML tags as per http://validator.w3.org
            $svg = $svg.removeAttr('xmlns:a');

            // Replace image with new SVG
            $img.replaceWith($svg);

        }, 'xml');

    });
</script>-->
<script>
$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip({animation: true});   
});
</script>    <link href='css/mapcanvas.css' rel='stylesheet' type='text/css'>
    <!--<title>Development work visualization</title>-->
    <!-- Our Custom CSS -->
    <link href="css/mapscss.css" rel='stylesheet' type='text/css'>
    <link href="css/counter.css" rel='stylesheet' type='text/css'>
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="https://code.highcharts.com/modules/exporting.js"></script>
    <link rel="stylesheet" href="ncss/css/custom.css">
    <link href="css/checkbox.css" rel='stylesheet' type='text/css'>

    <meta charset="utf-8" name="viewport" content="width device-width" minimum-scalable="1.0" maximum-scalable="1.0">


<!--<div class="clearfix"></div>
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
    </script>-->
<script type="text/javascript">
 /* var chart = Highcharts.chart('container3', {

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
});*/
</script>

<!-- map tab 
<div id="menu2" class="tab-pane fade">
     <div class="card card-block" style="width: 400px;">
   <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d56517.022565290084!2d85.29574873627928!3d27.707592562752843!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb198a307baabf%3A0xb5137c1bf18db1ea!2sKathmandu+44600!5e0!3m2!1sen!2snp!4v1516264292293" width="400" height="250" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div>
   
  </div> -->





  <!--<section class="probootstrap-section" id="probootstrap-counter">
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
 </div>-->
</section>

<!--counter script-->
<script type="text/javascript">

 
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
           <!--<li class="nav-head"><a href="#" title="charts"><i class="fa fa-line-chart" aria-hidden="true"></i> CHARTS</a></li>-->
         </ul>
       </div>

       <!--<div class="col-md-4 col-sm-12 col-xs-12 col-lg-4 pull-left">
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
      </div>-->

      <div class="collapse navbar-collapse col-md-4 col-sm-12 col-xs-12 col-lg-4 pull-right" id="bs-example-navbar-collapse-1">

        <!--<div class="dropdown pull-right">
          <button class="btn btn-outline-danger dropdown-toggle" type="button" data-toggle="dropdown"><i class="fa fa-ellipsis-v" aria-hidden="true"></i>
            <span class="caret"></span></button>
            <ul class="dropdown-menu">
              <li><a href="#" title="Pan"><i class="fa fa-arrows-alt" aria-hidden="true"></i> Pan</a></li>
              <li><a href="#" title="Measure"><i class="fa fa-balance-scale" aria-hidden="true"></i> Measure</a></li>
            </ul>
          </div>-->
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
      <!--<div class="row yesto">
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
  </div>-->
  <div class="row">
    <div class="col-sm-12">
      <div class="list-group">
        <label  class="list-group-item list-group-item-action"><input class="CheckBox" type="checkbox" name="check" value = "Ward_Boundary" checked><span class="label-text"> Administrative Boundary</span></label>
        <label  class="list-group-item list-group-item-action"><input class="CheckBox" type="checkbox" name="check" value = "road"> <span class="label-text">Roads</span></label>
        <label  class="list-group-item list-group-item-action "><input class="CheckBox" type="checkbox" name="check" value = "foot_trails"><span class="label-text"> Foot Trails</span></label>
        <label  class="list-group-item list-group-item-action "><input class="CheckBox" type="checkbox" name="check" value = "river"><span class="label-text"> River <span></label>
        <label  class="list-group-item list-group-item-action "><input class="CheckBox" type="checkbox" name="check" value = "school"><span class="label-text"> Schools</span></label>
        <label  class="list-group-item list-group-item-action "><input class="CheckBox" type="checkbox" name="check" value = "health_centre"><span class="label-text"> Health Centres</span></label>
        <label  class="list-group-item list-group-item-action "><input class="CheckBox" type="checkbox" name="check" value = "religious_places"><span class="label-text"> Religious Places</span></label>
        <label  class="list-group-item list-group-item-action "><input class="CheckBox" type="checkbox" name="check" value = "organizations"><span class="label-text"> Organizations</span></label>
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
    <!--<ul class="nav nav-pills" style="">
      <li><a data-toggle="pill" href="#home">Import <i class="fa fa-upload" aria-hidden="true"></i></a></li>
      <li><a data-toggle="pill" href="#menu1">Analyze <i class="fa fa-wpexplorer" aria-hidden="true"></i></a></li>
      <li><a data-toggle="pill" href="#menu2">Base map <i class="fa fa-map-pin" aria-hidden="true"></i></a></li>
    </ul>-->

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
  

		var map = L.map('map', {
			center: [27.73672, 85.31942],
			zoom: 7//,
			//layers: [streetLayer ]
		});
		 
		 var osm = L.tileLayer('http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
			attribution: '&copy; <a href="http://openstreetmap.org">OpenStreetMap</a> contributors'
		});
		
		googleStreets = L.tileLayer('http://{s}.google.com/vt/lyrs=m&x={x}&y={y}&z={z}',{
			maxZoom: 20,
			subdomains:['mt0','mt1','mt2','mt3']
		});
		googleHybrid = L.tileLayer('http://{s}.google.com/vt/lyrs=s,h&x={x}&y={y}&z={z}',{
			maxZoom: 20,
			subdomains:['mt0','mt1','mt2','mt3']
		});
		googleSat = L.tileLayer('http://{s}.google.com/vt/lyrs=s&x={x}&y={y}&z={z}',{
			maxZoom: 20,
			subdomains:['mt0','mt1','mt2','mt3']
		});
		googleTerrain = L.tileLayer('http://{s}.google.com/vt/lyrs=p&x={x}&y={y}&z={z}',{
			maxZoom: 20,
			subdomains:['mt0','mt1','mt2','mt3']
		});
		var none = "";
		var baseLayers = {
			"OpenStreetMap": osm,
			"Google Streets": googleStreets,
			"Google Hybrid": googleHybrid,
			"Google Satellite": googleSat,
			"Google Terrain": googleTerrain
		};
		map.addLayer(osm);
	
		L.control.layers(baseLayers,null,{collapsed:true}).addTo(map);
			
			
		map.options.maxZoom = 17;
		map.options.minZoom = 1;
		
		/*Nepal_Boundary = new L.geoJson.ajax("./geojson/Nepal_Boundary.geojson", {
                });
                Nepal_Boundary.on('data:loaded', function (data) {
                    Nepal_Boundary.setStyle(function style_Nepal_Boundary_unique(oneNepal_Boundary) {
                        return {
                            fillColor: '#FFFFFF',
                            weight: 4,
                            opacity: 1,
                            color: '#EEF021',
                            dashArray: '6',
                            fillOpacity: 0.0
                        };
                    });
                });
        //Nepal_Boundary.addTo(map);
		
		District = new L.geoJson.ajax("./geojson/district.geojson", {
                    onEachFeature: function (feature, layer) {
                        
						var popUpContent = "";
                        popUpContent += '<table style="width:100%;" id="District-popup" class="popuptable">';
                        //console.log(layer.feature.properties);
						for (data in layer.feature.properties) {
                            
                            //var dataspaced = underscoreToSpace(data);
							//console.log(data);
                            popUpContent += "<tr>" + "<td>" + data + "</td>" + "<td>" + "  " + layer.feature.properties[data] + "</td>" + "</tr>";
							//console.log(popUpContent);
					   }
                        popUpContent += '</table>';
						//console.log(popUpContent);
                        layer.bindPopup(L.popup({
                            closeOnClick: true,
                            closeButton: true,
                            keepInView: true,
                            autoPan: true,
                            maxHeight: 200,
                            minWidth: 250
                        }).setContent(popUpContent));
                    }
                });
                District.on('data:loaded', function (data) {
                    District.setStyle(function style_District_unique(oneDistrict) {
						//console.log("asdfsfsad");
                        return {
                            fillColor: randomColor(),
                            weight: 2,
                            opacity: 1,
                            color: 'black',
                            dashArray: '3',
                            fillOpacity: 0.0
                        };
                    });
                    console.log("District Layer Added");
                    // 
                });
                //District.addTo(map);
				District.bringToBack();
				
                VDC_Boundary = new L.geoJson.ajax("./geojson/VDC_Boundary.geojson", {
                    onEachFeature: function (feature, layer) { console.log(feature);
                        var popUpContent = "";
                        popUpContent += '<table style="width:100%;" id="CHAL-popup" class="popuptable">';
                        for (data in layer.feature.properties) {
                            // console.log('feature ', feature);
                            //dataspaced = underscoreToSpace(data);
                            popUpContent += "<tr>" + "<td>" + data + "</td>" + "<td>" + "  " + layer.feature.properties[data] + "</td>" + "</tr>";
                        }
                        popUpContent += '</table>';

                        layer.bindPopup(L.popup({
                            closeOnClick: true,
                            closeButton: true,
                            keepInView: true,
                            autoPan: true,
                            maxHeight: 200,
                            minWidth: 250
                        }).setContent(popUpContent));
                    }
                });
                VDC_Boundary.on('data:loaded', function (data) {
                    VDC_Boundary.setStyle(function style_CHAL_unique(oneCHAL) {
                        return {
                            fillColor: randomColor(),
                            weight: 2,
                            opacity: 1,
                            color: 'black',
                            dashArray: '3',
                            fillOpacity: 0.9
                        };
                    });
                    console.log("VDC Layer Added");
                    // 
                });
                VDC_Boundary.addTo(map);
				//CHAL.bringToBack();
				*/
                Ward_Boundary = new L.geoJson.ajax("./geojson/Ward_Boundary.geojson", {
                    onEachFeature: function (feature, layer) {
                        var popUpContent = "";
                        popUpContent += '<table style="width:100%;" id="TAL-popup" class="popuptable">';
                        //for (data in layer.feature.properties) {
                            // console.log('feature ', feature);
                            //dataspaced = underscoreToSpace(data);
                            popUpContent += "<tr>" + "<td>Ward No: </td>" + "<td>" + "  " + layer.feature.properties.WNO + "</td>" + "</tr>";
							popUpContent += "<tr>" + "<td>Area (m2) </td>" + "<td>" + "  " + layer.feature.properties.AREA + "</td>" + "</tr>";
							//popUpContent += "<tr>" + "<td>Perimeter </td>" + "<td>" + "  " + layer.feature.properties.Perimeter + "</td>" + "</tr>";
                        //}
                        popUpContent += '</table>';

                        layer.bindPopup(L.popup({
                            closeOnClick: true,
                            closeButton: true,
                            keepInView: true,
                            autoPan: true,
                            maxHeight: 200,
                            minWidth: 250
                        }).setContent(popUpContent));
						
						layer.on("mouseover", function (e) {
                                 e.target.setStyle({weight:2,fillOpacity:0.4});
                                 $("#labelDiv").html("<table class='popuptable'><tr><td><h5>"+feature.properties['DISTRICT']+"</h5></td><tr></table>");
                        }).on("mouseout", function(e){
                                 e.target.setStyle({weight:1,fillOpacity:0.2});
                                 $("#labelDiv").html("");
                        });
                    }
                });
                Ward_Boundary.on('data:loaded', function (data) {
                    Ward_Boundary.setStyle({
                            fillColor: 'green',
                            weight: 1,
                            opacity: 1,
                            color: '#369',
                            //dashArray: '3',
                            fillOpacity: 0.2
                        
                    });
                    console.log("Ward Layer Added");
                    map.fitBounds(Ward_Boundary.getBounds());
                });
                Ward_Boundary.addTo(map);

                foot_trails = new L.geoJson.ajax("./geojson/Foot_trails.geojson", {
                    onEachFeature: function (feature, layer) {
                        var popUpContent = "";
                        popUpContent += '<table style="width:100%;" id="tal_cbrp-popup" class="popuptable">';
                        for (data in layer.feature.properties) {
                            // console.log('feature ', feature);
                            //dataspaced = underscoreToSpace(data);
                            popUpContent += "<tr>" + "<td>" + data + "</td>" + "<td>" + "  " + layer.feature.properties[data] + "</td>" + "</tr>";
                        }
                        popUpContent += '</table>';

                        layer.bindPopup(L.popup({
                            closeOnClick: true,
                            closeButton: true,
                            keepInView: true,
                            autoPan: true,
                            maxHeight: 200,
                            minWidth: 250
                        }).setContent(popUpContent));
                    }
                });
                foot_trails.on('data:loaded', function (data) {
                    foot_trails.setStyle(function style_tal_cbrp_unique(onetal_cbrp) {
                        return {
                            fillColor: 'red',
                            weight: 2,
                            opacity: 1,
                            color: 'red',
                            dashArray: '8',
                            fillOpacity: 0.9
                        };
                    });
                    console.log("foot trail Layer Added");
                    // 
                });
                //foot_trails.addTo(map);				

               road = new L.geoJson.ajax("./geojson/Road.geojson", {
                    onEachFeature: function (feature, layer) {
                        var popUpContent = "";
                        popUpContent += '<table style="width:100%;" id="SHL-popup" class="popuptable">';
                        for (data in layer.feature.properties) {
                            // console.log('feature ', feature);
                            //dataspaced = underscoreToSpace(data);
                            popUpContent += "<tr>" + "<td>" + data + "</td>" + "<td>" + "  " + layer.feature.properties[data] + "</td>" + "</tr>";
                        }
                        popUpContent += '</table>';

                        layer.bindPopup(L.popup({
                            closeOnClick: true,
                            closeButton: true,
                            keepInView: true,
                            autoPan: true,
                            maxHeight: 200,
                            minWidth: 250
                        }).setContent(popUpContent));
                    }
                });
                road.on('data:loaded', function (data) {
                    road.setStyle(function style_SHL_unique(oneSHL) {
                        return {
                            fillColor: 'red',
                            weight: 2,
                            opacity: 1,
                            color: 'red',
                            //dashArray: '3',
                            fillOpacity: 0.9
                        };
                    });
                    console.log("SHL Layer Added");
                    // 
                });
                //road.addTo(map);
				//SHL.bringToBack();
				
				
                river = new L.geoJson.ajax("./geojson/River.geojson", {
                    onEachFeature: function (feature, layer) {
                        var popUpContent = "";
                        popUpContent += '<table style="width:100%;" id="Protected_Area-popup" class="popuptable">';
                        for (data in layer.feature.properties) {
                            // console.log('feature ', feature);
                            //dataspaced = underscoreToSpace(data);
                            popUpContent += "<tr>" + "<td>" + data + "</td>" + "<td>" + "  " + layer.feature.properties[data] + "</td>" + "</tr>";
                        }
                        popUpContent += '</table>';

                        layer.bindPopup(L.popup({
                            closeOnClick: true,
                            closeButton: true,
                            keepInView: true,
                            autoPan: true,
                            maxHeight: 200,
                            minWidth: 250
                        }).setContent(popUpContent));
                    }
                });
                river.on('data:loaded', function (data) {
                    river.setStyle(function style_Protected_Area_unique(oneProtected_Area) {
                        return {
                            fillColor: 'blue',
                            weight: 3,
                            opacity: 1,
                            color: 'blue',
                            //dashArray: '3',
                            fillOpacity: 0.9
                        };
                    });
                    console.log("River Layer Added");
                    // 
                });
                //river.addTo(map);


				school = new L.geoJson.ajax("./geojson/school.geojson", {
				pointToLayer: function(feature, latlng) {
					icons = L.icon({
									//iconSize: [27, 27],
									iconAnchor: [13, 27],
									popupAnchor:  [2, -24],
									iconUrl: './css/images/school.png'
									});
					//console.log(icon.options);
					var marker = L.marker(latlng, {icon: icons});
					return marker;
					
				}, 
				onEachFeature: function(feature, layer) {
					layer.bindPopup(feature.properties.Name);
					//feature.properties.layer_name = "transit_stops";
					
				}
			});
			
			school.on('data:loaded', function (data) {

				
			});
			//school.addTo(map);
			
			health_centre = new L.geoJson.ajax("./geojson/Health_Center.geojson", {
				pointToLayer: function(feature, latlng) {
					icons = L.icon({
									//iconSize: [27, 27],
									iconAnchor: [13, 27],
									popupAnchor:  [2, -24],
									iconUrl: './css/images/hospital-building.png'
									});
					//console.log(icon.options);
					var marker = L.marker(latlng, {icon: icons});
					return marker;
					
				}, 
				onEachFeature: function(feature, layer) {
					layer.bindPopup(feature.properties.Name);
					//feature.properties.layer_name = "transit_stops";
					
				}
			});
			
			health_centre.on('data:loaded', function (data) {

				
			});
			//health_centre.addTo(map);
			
			
			
			
			religious_places = new L.geoJson.ajax("./geojson/Religious_Places.geojson", {
				pointToLayer: function(feature, latlng) {
					icons = L.icon({
									//iconSize: [27, 27],
									iconAnchor: [13, 27],
									popupAnchor:  [2, -24],
									iconUrl: './css/images/pagoda-2.png'
									});
					//console.log(icon.options);
					var marker = L.marker(latlng, {icon: icons});
					return marker;
					
				}, 
				onEachFeature: function(feature, layer) {
					layer.bindPopup(feature.properties.Name);
					//feature.properties.layer_name = "transit_stops";
					
				}
			});
			
			religious_places.on('data:loaded', function (data) {

				
			});
			//religious_places.addTo(map);
			
			/*caves = new L.geoJson.ajax("./geojson/Cave.geojson", {
				pointToLayer: function(feature, latlng) {
					icons = L.icon({
									//iconSize: [27, 27],
									iconAnchor: [13, 27],
									popupAnchor:  [2, -24],
									iconUrl: './css/images/marker-icon.png'
									});
					//console.log(icon.options);
					var marker = L.marker(latlng, {icon: icons});
					return marker;
					
				}, 
				onEachFeature: function(feature, layer) {
					//layer.bindPopup(feature.properties.Route_Stop);
					//feature.properties.layer_name = "transit_stops";
					
				}
			});
			
			caves.on('data:loaded', function (data) {

				
			});
			caves.addTo(map);*/
			
			organizations = new L.geoJson.ajax("./geojson/Organization.geojson", {
				pointToLayer: function(feature, latlng) {
					icons = L.icon({
									//iconSize: [27, 27],
									iconAnchor: [13, 27],
									popupAnchor:  [2, -24],
									iconUrl: './css/images/office-building.png'
									});
					//console.log(icon.options);
					var marker = L.marker(latlng, {icon: icons});
					return marker;
					
				}, 
				onEachFeature: function(feature, layer) {
					layer.bindPopup(feature.properties.Name);
					//feature.properties.layer_name = "transit_stops";
					
				}
			});
			
			organizations.on('data:loaded', function (data) {
				console.log('Organization layer added');
				
			});
			//organizations.addTo(map);
			
		$( ".CheckBox" ).click(function( event ) {
        layerClicked = window[event.target.value];
		//console.log(event);
            if (map.hasLayer(layerClicked)) {
                map.removeLayer(layerClicked);
            }
            else{
                map.addLayer(layerClicked);
            } ;
		});

		
		
   
   
 });
</script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB7exZMUKU7pPZifDhZq1x3qplK1Cxk6AE"></script>
<!-- <script src="js/category_details.js"></script> -->
<!--<script src="multiple_markers/js/map.js"></script>--> 
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script> <!--bar chat -->
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script><!--pie chat -->
<!--stats counter-->
<!--<script src="js/count-to.js"></script>
<script src="js/jquery.appear.js"></script>--


<div class="navbar navbar-inverse navbar-static-bottom text-center"  style="font-size:14px; background-color: #262626; color: white;  padding-top: 10px; margin-bottom: 0">
				<p class="left-center">Copyright &copy 2018 Nagarpalika.com. All right reserved</p>
			</div>


<!--<script src="script.js" type="text/javascript"></script>-->
</body>
</html>
