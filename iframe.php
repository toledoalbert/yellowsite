
<!DOCTYPE html>
<html>
  <head>
    <meta charset='utf-8' />
    <meta content="The official website of Gerard O'Neill, hackNY Fellow, blogger, aspiring software engineer, and student at Rutgers University." name='title' />
    <meta content='width=device-width' name='viewport' />
    <title>Albert Toledo | Personal Website</title>
    <link href='css/foundation.css' rel='stylesheet' type='text/css' />
    <link href='css/styles.css' rel='stylesheet' type='text/css' />
    <script src='https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js'></script>
    <script src='js/modernizr.foundation.js'></script>
    <script src='js/jquery.tooltips.js'></script>
    <script src='js/deneme.js'></script>
    <script>
    
    <!-- Add jQuery library -->
	<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>

	<!-- Add mousewheel plugin (this is optional) -->
	<script type="text/javascript" src="fancybox/lib/jquery.mousewheel-3.0.6.pack.js"></script>

	<!-- Add fancyBox -->
	<link rel="stylesheet" href="fancybox/source/jquery.fancybox.css?v=2.1.4" type="text/css" media="screen" />
	<script type="text/javascript" src="fancybox/source/jquery.fancybox.pack.js?v=2.1.4"></script>

	<!-- Optionally add helpers - button, thumbnail and/or media -->
	<link rel="stylesheet" href="fancybox/source/helpers/jquery.fancybox-buttons.css?v=1.0.5" type="text/css" media="screen" />
	<script type="text/javascript" src="fancybox/source/helpers/jquery.fancybox-buttons.js?v=1.0.5"></script>
	<script type="text/javascript" src="fancybox/source/helpers/jquery.fancybox-media.js?v=1.0.5"></script>

	<link rel="stylesheet" href="fancybox/source/helpers/jquery.fancybox-thumbs.css?v=1.0.7" type="text/css" media="screen" />
	<script type="text/javascript" src="fancybox/source/helpers/jquery.fancybox-thumbs.js?v=1.0.7"></script>

	<script>
	$(".singlephoto").fancybox({

		openEffect	: 'elastic',
    	closeEffect	: 'elastic',

          helpers: {
              title : {
                  type : 'float'
              }
          }
      });
</script>
	
  </head>
  <body>
  
  			 <div class='row' id='photos'>
          <div class='twelve columns'>
          <div>
  			<?php
  				
  					foreach(glob("photos/".'*.*') as $filename){
  					
  					echo '<a class="singlephoto" rel="photogallery" href="'.$filename.'" title="'.$filename.'">';
					echo '<img src="photos/'.$filename.'"/>';
					echo '</a>';
     				
					}
  				
  				?>
  				</div>
			</div>
			</div>
	
  </body>
</html>


