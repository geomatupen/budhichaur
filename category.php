    <?php include('includes/header.php'); ?>
    <link href='css/mapcanvas.css' rel='stylesheet' type='text/css'>
    <title>Category list description</title>
    <!-- Our Custom CSS -->
    <link href="css/mapscss.css" rel='stylesheet' type='text/css'>


        <!-- Page Content Holder -->
    <div id="content">
      <nav class="navbar navbar-default">
        <div class="container-fluid">
          <div class="row">

            <div class="navbar-header col-md-4 col-sm-6 col-xs-6 col-lg-4">
              <ul class="nav navbar-nav navbar-left" >
               <li class="nav-head"><a href="#" title="map"><i class="fa fa-map" aria-hidden="true"></i> MAP</a></li>
               <li class="nav-head"><a href="#" title="data"><i class="fa fa-database" aria-hidden="true"></i> DATA</a></li>
               <li class="nav-head"><a href="#" title="charts"><i class="fa fa-line-chart" aria-hidden="true"></i> CHARTS</a></li>
               <li class="nav-head"><a href="#" title="charts"><i class="fa fa-database" aria-hidden="true"></i> DATASETS</a></li>
             </ul>
           </div>

           <div class="col-md-4 col-sm-12 col-xs-12 col-lg-4">
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

              <div class="col-md-10 col-sm-8 col-xs-8 col-lg-10">
                <ul class="nav navbar-nav list-inline">
                <li class="col-xs-3"><a href="#" class="test" data-toggle="tooltip" data-placement="bottom" title="Zoom-in"><i class="fa fa-search-plus" aria-hidden="true"></i></a></li>
                <li class="col-xs-3"><a href="#" class="test" data-toggle="tooltip" data-placement="bottom" title="Zoom-out"><i class="fa fa-search-minus" aria-hidden="true"></i></a></li>
                <li class="col-xs-3"><a href="#" class="test" data-toggle="tooltip" data-placement="bottom" title="Print/download resource"><i class="fa fa-print" aria-hidden="true"></i></a></li>
                <li class="col-xs-3"><a href="#" class="test" data-toggle="tooltip" data-placement="bottom" title="Refresh this map"><i class="fa fa-refresh" aria-hidden="true"></i></a></li>
              </ul>
            </div>
              <div class="dropdown  col-md-2 col-sm-4 col-xs-4 col-lg-2">
              <button class="btn btn-outline-danger dropdown-toggle" type="button" data-toggle="dropdown"><i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                <span class="caret"></span></button>
                <ul class="dropdown-menu">
                  <li><a href="#" title="Pan"><i class="fa fa-arrows-alt" aria-hidden="true"></i> Pan</a></li>
                  <li><a href="#" title="Measure"><i class="fa fa-balance-scale" aria-hidden="true"></i> Measure</a></li>
                </ul>
              </div>

            </div>
          </div>

           <div class="col-md-4 col-sm-12 col-xs-12 col-lg-4">
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
         <div class="sidebar-header">
          <h4>Layers</h4>
        </div>
        <ul id="tree1" class="list-group components">
          <li class="list-group"><a href="#">Administrative data</a>
            <ul>
              <li class="list-group-item"><input type="checkbox"><a href="#">ward</a></li>
              <li><a href="#">Old ward</a>
                <ul>
                                  <!-- <style>.list-group.panel > .list-group-item {
    border-bottom-right-radius: 4px;
    border-bottom-left-radius: 4px;
    width: 250px;
    background: white;
    color: #666;
    }
    .list-group-submenu {
    width: 250px;
    }

    .strong { font-weight: bold; }
    </style> -->
    <li><a href="#">ward list</a>
    <ul>
     <li class="list-group-item"><input type="checkbox"><a href="#">ward no 1</a></li>
     <li class="list-group-item"><input type="checkbox"><a href="#">ward no 2</a></li>
     <li class="list-group-item"><input type="checkbox"><a href="#">ward no 3</a></li>
    </ul>
    </li>
    <li class="list-group-item"><input type="checkbox"><a href="#">Employee Maint.</a></li>
    </ul>
    </li>
    <li class="list-group-item"><input type="checkbox"><a href="#">Old VDC</a></li>
    </ul>
    </li>
    <li class="list-group"><a href="#">Education Institution</a>
    <ul>
      <li class="list-group-item"><input type="checkbox"><a href="#">College</a></li>
      <li><a href="#">School</a>
        <ul>
          <li><a href="#">Private</a>
            <ul>
              <li class="list-group-item"><input type="checkbox"><a href="#">Content</a></li>
              <li class="list-group-item"><input type="checkbox"><a href="#">Content</a></li>
              <li class="list-group-item"><input type="checkbox"><a href="#">Content</a></li>
            </ul>
          </li>
          <li class="list-group-item"><input type="checkbox"><a href="#">Public</a></li>
        </ul>
      </li>
      <li class="list-group-item"><input type="checkbox"><a href="#">Monteshwori</a></li>
    </ul>
    </li>
    <li class="list-group"><a href="#">Urban Utility</a>
    <ul>
     <li class="list-group-item"><input type="checkbox"><a href="#">Hospital</a></li>
     <li><a href="#"> School</a>
      <ul>
        <li><a href="#">Public</a>
          <ul>
           <li class="list-group-item"><input type="checkbox"><a href="#">Society operated</a></li>
           <li class="list-group-item"><input type="checkbox"><a href="#">Content</a></li>
           <li class="list-group-item"><input type="checkbox"><a href="#">Content</a></li>
         </ul>
       </li>
       <li class="list-group-item"><input type="checkbox"><a href="#">Private</a></li>
       <li class="list-group-item"><input type="checkbox"><a href="#">Government</a></li>
       <li class="list-group-item"><input type="checkbox"><a href="#">Institution</a></li>
     </ul>
    </li>
    <li class="list-group-item"><input type="checkbox"><a href="#">Restaurent</a></li>
    </ul>
    </li>
    <li class="list-group"><a href="#">Natural Resources</a>
    <ul>
      <li class="list-group-item"><input type="checkbox"><a href="#">Forest</a></li>
      <li><a href="#">Mines</a>
        <ul>
          <li><a href="#">Ores</a>
            <ul>
              <li class="list-group-item"><input type="checkbox"><a href="#">Content</a></li>
              <li class="list-group-item"><input type="checkbox"><a href="#">Content</a></li>
              <li class="list-group-item"><input type="checkbox"><a href="#">Content</a></li>
            </ul>
          </li>
          <li class="list-group-item"><input type="checkbox"><a href="#">Raw</a></li>
        </ul>
      </li>
      <li class="list-group-item"><input type="checkbox"><a href="#">Vegetation</a></li>
    </ul>
    </li>
    <li class="list-group"><a href="#">Hazards & Risks</a>
    <ul>
     <li class="list-group-item"><input type="checkbox"><a href="#">Risk</a></li>
     <li><a href="#">Open Spaces</a>
      <ul>
        <li><a href="#">Public</a>
          <ul>
           <li class="list-group-item"><input type="checkbox"><a href="#">fertile</a></li>
           <li class="list-group-item"><input type="checkbox"><a href="#">Infertile</a></li>
           <li class="list-group-item"><input type="checkbox"><a href="#">inhabitable</a></li>
         </ul>
       </li>
       <li class="list-group-item"><input type="checkbox"><a href="#">Private</a></li>
     </ul>
    </li>
    <li class="list-group-item"><input type="checkbox"><a href="#">Hazards</a></li>
    </ul>
    </li>
    <li class="list-group"><a href="#">House Hold</a>
    <ul>
      <li class="list-group-item"><input type="checkbox"><a href="#">Inhabitants</a></li>
      <li><a href="#">Native</a>
        <ul>
          <li><a href="#"> Reports</a>
            <ul>
             <li class="list-group-item"><input type="checkbox"><a href="#">Content</a></li>
             <li class="list-group-item"><input type="checkbox"><a href="#">Content</a></li>
             <li class="list-group-item"><input type="checkbox"><a href="#">Content</a></li>
           </ul>
         </li>
         <li class="list-group-item"><input type="checkbox"><a href="#">radical castes</a></li>
       </ul>
     </li>
     <li class="list-group-item"><input type="checkbox"><a href="#">Indegenious</a></li>
    </ul>
    </li>
    </ul>

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
    <script src="js/tree.js"></script>
    <?php include('includes/footer.php'); ?>