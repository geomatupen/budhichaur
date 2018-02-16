  <?php include('includes/header.php'); ?>
  <link href='css/mapcanvas.css' rel='stylesheet' type='text/css'>
  <title>Recent public complains and problems</title>
  <!-- Our Custom CSS -->
  <link href="css/mapscss.css" rel='stylesheet' type='text/css'>
  <link href="css/checkbox.css" rel='stylesheet' type='text/css'>

  <!-- Page Content Holder -->
  <div id="content">
    <nav class="navbar navbar-default">
      <div class="container-fluid">
        <div class="row">

          <div class="navbar-header col-md-4 col-offset-1">
            <ul class="nav navbar-nav navbar-left" >
             <li class="nav-head"><a href="#" title="map"><i class="fa fa-map" aria-hidden="true"></i> MAP</a></li>
             <li class="nav-head"><a href="datasets.php" title="data"><i class="fa fa-database" aria-hidden="true"></i> DATA</a></li>
             <li class="nav-head"><a href="#" title="charts"><i class="fa fa-line-chart" aria-hidden="true"></i> CHARTS</a></li>
           </ul>
         </div>

         <div class="col-md-4 pull-left">
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

        <div class="collapse navbar-collapse col-md-4 pull-right" id="bs-example-navbar-collapse-1">

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


    <style type="text/css">
    #reportrange{
      background: #fff; cursor: pointer; 
    }
    #reportrange span{

    }
    .yesto div.dropdown{
      color: #000;
    } 
  </style>
  <div class="wrapper">
    <!-- Sidebar Holder -->
    <nav id="sidebar1">
      <div class="row yesto1">
        <div id="reportrange" class="col-md-6 sidebar-header">
          <i class="glyphicon glyphicon-calendar fa fa-calendar"></i>&nbsp;
          <span></span> <b class="caret"></b>
        </div>
        <div class="col-md-5 dropdown pull-right">
          <button class="btn btn-outline-default dropdown-toggle" style="margin-left:15px;  " type="button" data-toggle="dropdown" title="Filters"><i class="fa fa-bars" aria-hidden="true" style="padding-right: 3px; "></i>Category <span class="caret"></span></button>
          <ul class="dropdown-menu">
           <form>
            <div class="form-check">
              <label>
                <input type="checkbox" name="check" checked> <span class="label-text">पानि</span>
              </label>
            </div>
            <div class="form-check">
              <label>
                <input type="checkbox" name="check"> <span class="label-text">फोहोर</span>
              </label>
            </div>
            <div class="form-check">
              <label>
                <input type="checkbox" name="check"> <span class="label-text">बाटो</span>
              </label>
            </div>
            <div class="form-check">
              <label>
                <input type="checkbox" name="check"> <span class="label-text">बत्ति</span>
              </label>
            </div>
            <div class="form-check">
              <label>
                <input type="checkbox" name="check" disabled> <span class="label-text">समस्या</span>
              </label>
            </div>
          </form>
        </ul>
      </div>
    </div>
    <div class="sidepanel col-md-12">
     <div class="news-panel">
      <div class="row">
        <div class="col-md-3 blog-panel">
          <a href="#" class="thumbnail">
            <img src="images/4.jpg" alt="image">
          </a>
        </div>
        <div class="fancy col-md-9"> 
          <h5><b>फोहोरको समस्या</b></h5>     
          <p class="small">
            My name is ram bahadur and i have road problems in my area at baneshwor
            <a class="naya" id="btnitem" href="#myModal">.... Read more</a>
          </p>
          
        </div>
      </div>
      <hr class="horz">
      <div class="row">
        <div class="col-md-12">
          <p class="tiny">
            <i class="fa fa-user" aria-hidden="true"></i> Category: <a href="#"> road</a> 
            | <i class="icon-calendar" aria-hidden="true"></i> Status: <a href="#"> problem</a>
            | <i class="fa fa-calendar" aria-hidden="true"></i> 2 hours ago
            | <i class="fa fa-share" aria-hidden="true"></i> Sender: <a href="#"> Ram bahadur</a>
          </p>
        </div>
      </div>
    </div>

    <div class="news-panel">
      <div class="row">
        <div class="col-md-3 blog-panel">
          <a href="#" class="thumbnail">
            <img src="images/3.jpg" alt="image">
          </a>
        </div>
        <div class="fancy col-md-9"> 
          <h5><b>बत्तिको समस्या</b></h5>     
          <p class="small">
            My name is ram bahadur and i have road problems in my area at baneshwor
            <a class="naya" id="btnitem" href="#myModal">.... Read more</a>
          </p>
          
        </div>
      </div>
      <hr class="horz">
      <div class="row">
        <div class="col-md-12">
          <p class="tiny">
            <i class="fa fa-user" aria-hidden="true"></i> Category: <a href="#"> road</a> 
            | <i class="icon-calendar" aria-hidden="true"></i> Status: <a href="#"> problem</a>
            | <i class="fa fa-calendar" aria-hidden="true"></i> 2 hours ago
            | <i class="fa fa-share" aria-hidden="true"></i> Sender: <a href="#"> Ram bahadur</a>
          </p>
        </div>
      </div>
    </div>

    <div class="news-panel">
      <div class="row">
        <div class="col-md-3 blog-panel">
          <a href="#" class="thumbnail">
            <img src="images/1.jpg" alt="image">
          </a>
        </div>
        <div class="fancy col-md-9"> 
          <h5><b>पानिको समस्या</b></h5>     
          <p class="small">
            My name is ram bahadur and i have road problems in my area at baneshwor
            <a class="naya" id="btnitem" href="#myModal">.... Read more</a>
          </p>
          
        </div>
      </div>
      <hr class="horz">
      <div class="row">
        <div class="col-md-12">
          <p class="tiny">
            <i class="fa fa-user" aria-hidden="true"></i> Category: <a href="#"> road</a> 
            | <i class="icon-calendar" aria-hidden="true"></i> Status: <a href="#"> problem</a>
            | <i class="fa fa-calendar" aria-hidden="true"></i> 2 hours ago
            | <i class="fa fa-share" aria-hidden="true"></i> Sender: <a href="#"> Ram bahadur</a>
          </p>
        </div>
      </div>
    </div>
    <div class="news-panel">
      <div class="row">
        <div class="col-md-3 blog-panel">
          <a href="#" class="thumbnail">
            <img src="images/2.jpg" alt="image">
          </a>
        </div>
        <div class="fancy col-md-9"> 
          <h5><b>बाटो समस्या</b></h5>     
          <p class="small">
            My name is ram bahadur and i have road problems in my area at baneshwor
            <a class="naya" id="btnitem" href="#myModal">.... Read more</a>
          </p>
          
        </div>
      </div>
      <hr class="horz">
      <div class="row">
        <div class="col-md-12">
          <p class="tiny">
            <i class="fa fa-user" aria-hidden="true"></i> Category: <a href="#"> road</a> 
            | <i class="icon-calendar" aria-hidden="true"></i> Status: <a href="#"> problem</a>
            | <i class="fa fa-calendar" aria-hidden="true"></i> 2 hours ago
            | <i class="fa fa-share" aria-hidden="true"></i> Sender: <a href="#"> Ram bahadur</a>
          </p>
        </div>
      </div>
    </div>
  </div>

  </nav>


  <div class="container-fluid">
    <div class="row">
      <div id="map"></div>
      <button type="button" id="sidebar1Collapse" class="btn btn-outline-warning btn-sm navbar-btn">
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

  <p style="visibility: hidden; font-size: 9px;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
  </div>
  </div>
  </div>

      <?php include('modal-box.php'); ?>


  <script>
                      // Get the modal
                      var modal = document.getElementById('myModal');

                      // Get the button that opens the modal
                      var btn = document.getElementById("btnitem");

                      // Get the <span> element that closes the modal
                      var span = document.getElementsByClassName("close")[0];

                      // When the user clicks the button, open the modal
                      btn.onclick = function() {
                        modal.style.display = "block";
                      }

                      // When the user clicks on <span> (x), close the modal
                      span.onclick = function() {
                        modal.style.display = "none";
                      }

                      // When the user clicks anywhere outside of the modal, close it
                      window.onclick = function(event) {
                        if (event.target == modal) {
                          modal.style.display = "none";
                        }
                      }
                    </script>
                    <script>
                     $(document).ready(function () {
                       $('#sidebar1Collapse').on('click', function () {
                         $('#sidebar1').toggleClass('active');
                       });
                     });
                   </script>
                   <script>
                    $(function() {

                      var start = moment().subtract(29, 'days');
                      var end = moment();

                      function cb(start, end) {
                        $('#reportrange span').html(start.format('YYYY/M/D') + ' - ' + end.format('YYYY/M/D'));
                      }

                      $('#reportrange').daterangepicker({
                        startDate: start,
                        endDate: end,
                        ranges: {
                         'Today': [moment(), moment()],
                         'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                         'Last 7 Days': [moment().subtract(6, 'days'), moment()],
                         'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                         'This Month': [moment().startOf('month'), moment().endOf('month')],
                         'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
                       }
                     }, cb);

                      cb(start, end);

                    });
                  </script>
                  <!-- Include Required Prerequisites -->

                  <script type="text/javascript" src="//cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>


                  <!-- Include Date Range Picker -->
                  <script type="text/javascript" src="//cdn.jsdelivr.net/bootstrap.daterangepicker/2/daterangepicker.js"></script>
                  <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/bootstrap.daterangepicker/2/daterangepicker.css" />
                  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB7exZMUKU7pPZifDhZq1x3qplK1Cxk6AE"></script>
                  <!-- <script src="js/category_details.js"></script> -->
                  <script src="multiple_markers/js/map.js"></script>
                  <?php include('includes/footer.php'); ?>