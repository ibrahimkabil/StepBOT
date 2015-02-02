<?php include('functions.php'); ?>
<html>
   <head>
      <title>StepBOT</title>
      <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300">
      <link href="css/style.css" rel="stylesheet">
	  <link href="http://vjs.zencdn.net/4.11/video-js.css" rel="stylesheet">
      <script src="http://vjs.zencdn.net/4.11/video.js"></script>
      <script src="http://code.jquery.com/jquery-1.11.2.min.js"></script>
      <script src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
      <!-- Add fancyBox main JS and CSS files -->
      <script type="text/javascript" src="fancybox/source/jquery.fancybox.js?v=2.1.5"></script>
      <link rel="stylesheet" type="text/css" href="fancybox/source/jquery.fancybox.css?v=2.1.5" media="screen" />
   </head>
   <body>
      <center>
         <div id="main">
            <div id="video_container">
               <video class="video-js vjs-default-skin" controls
                  preload="auto" width="750" height="422" poster="imgs/poster.png"
                  data-setup="{}">
                  <source src="video/Kickstarter-Final.mp4" type='video/mp4'>
                  <p class="vjs-no-js">To view this video please enable JavaScript, and consider upgrading to a web browser that <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a></p>
               </video>
            </div>
            <br clear='all'>
            <form id='submit_form'><input type='text' id='email'></form>
            <img src='imgs/beta-tester.png' border=0 width=135 id='beta'>
         </div>
         <br clear='all'>
      </center>
   </body>
</html>