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
  <title>Budhichaur VDC </title>
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
</style>
</head>
<body>
    <header>
      
  <div class="navbar navbar-default navbar-fixed-top"  id="navbar">
          <a href="index.php">
          <div class="logo ">
              <img src="images/logo.png" class="img-responsive" alt="" height="auto" width="auto">
          </div>

      
          <div class="navbar-header" href="index.php">
              <div class="navbar-brand" href="index.php" id="navbarhead" ><strong>Budhichaur VDC</strong>
                  <h5 class="text-center" id="mainheadings" >Government of Nepal</h5>
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
                  <li><a href="index.php" id="navli" >गृहपृष्ठ</a></li>
                  <li><a href="badapatra.php" id="navli">नागरिक बडापत्र</a></li>
                  <li><a href="hamronagar.php" id="navli">हाम्रो नगर</a></li>
                  <li><a href="test1.php" id="navli">विकासको अवस्था</a></li>
                  <li><a href="janagunaso.php"  id="navli">जनगुनासो</a></li>
              </ul>-->
          </div><!-- /.navbar-collapse -->
          </div>
        </div>
      </div>
    </header>
<script>
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
</script>
<script>
$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip({animation: true});   
});
</script>