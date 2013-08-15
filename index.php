
<!DOCTYPE html>
<!-- I use git.-->
<!--git is cool-->
<html>
  <head>
    <meta charset='utf-8' />
    <meta content="Albert Toledo's personal website." name='title' />
    <meta content='width=device-width' name='viewport' />
    <title>Albert Toledo | Personal Website</title>
    <link href='css/foundation.css' rel='stylesheet' type='text/css' />
    <link href='css/styles.css' rel='stylesheet' type='text/css' />
    <script src='https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js'></script>
    <script src='js/modernizr.foundation.js'></script>
    <script src='js/jquery.tooltips.js'></script>
    <script src='js/site.js'></script>
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
$(document).ready(function(){

$("#aboutnav").parent().addClass("active");
$("#education").hide();
    $("#projects").hide(); 
    $("#experience").hide();
    $("#gezi").hide();
    $("#photos").hide(); 
    $("#blog").hide();
    $("#about").show();

  $("#edunav").click(function(){
  	$("#edunav").parent().addClass("active");
    $("#education").show(); 
    $("#gezi").hide(); $("#gezinav").parent().removeClass("active");
    $("#projects").hide(); $("#projnav").parent().removeClass("active");
    $("#experience").hide(); $("#expnav").parent().removeClass("active");
    $("#about").hide(); $("#aboutnav").parent().removeClass("active");
    $("#photos").hide(); $("#photosnav").parent().removeClass("active");
    $("#blog").hide(); $("#blognav").parent().removeClass("active");
  });
  
  $("#projnav").click(function(){
  $("#projnav").parent().addClass("active");
    $("#education").hide(); $("#edunav").parent().removeClass("active");
    $("#projects").show();
    $("#gezi").hide(); $("#gezinav").parent().removeClass("active");
    $("#experience").hide(); $("#expnav").parent().removeClass("active");
    $("#about").hide(); $("#aboutnav").parent().removeClass("active");
    $("#photos").hide(); $("#photosnav").parent().removeClass("active");
    $("#blog").hide(); $("#blognav").parent().removeClass("active");
  });
  
  $("#expnav").click(function(){
  $("#expnav").parent().addClass("active");
    $("#education").hide(); $("#edunav").parent().removeClass("active");
    $("#projects").hide(); $("#projnav").parent().removeClass("active");
    $("#experience").show(); 
    $("#gezi").hide(); $("#gezinav").parent().removeClass("active");
    $("#about").hide(); $("#aboutnav").parent().removeClass("active");
    $("#photos").hide(); $("#photosnav").parent().removeClass("active");
    $("#blog").hide(); $("#blognav").parent().removeClass("active");
  });
  
  $("#aboutnav").click(function(){
  $("#aboutnav").parent().addClass("active");
    $("#education").hide(); $("#edunav").parent().removeClass("active");
    $("#projects").hide(); $("#projnav").parent().removeClass("active");
    $("#experience").hide(); $("#expnav").parent().removeClass("active");
    $("#about").show(); 
    $("#gezi").hide(); $("#gezinav").parent().removeClass("active");
    $("#photos").hide(); $("#photosnav").parent().removeClass("active");
    $("#blog").hide(); $("#blognav").parent().removeClass("active");
  });
  
  $("#photosnav").click(function(){
  $("#photosnav").parent().addClass("active");
    $("#education").hide(); $("#edunav").parent().removeClass("active");
    $("#projects").hide(); $("#projnav").parent().removeClass("active");
    $("#experience").hide(); $("#expnav").parent().removeClass("active");
    $("#about").hide(); $("#aboutnav").parent().removeClass("active");
    $("#photos").show(); 
    $("#gezi").hide(); $("#gezinav").parent().removeClass("active");
    $("#blog").hide(); $("#blognav").parent().removeClass("active");
  });
  
  $("#photographer").click(function(){
  $("#photosnav").parent().addClass("active");
    $("#education").hide(); $("#edunav").parent().removeClass("active");
    $("#projects").hide(); $("#projnav").parent().removeClass("active");
    $("#experience").hide(); $("#expnav").parent().removeClass("active");
    $("#about").hide(); $("#aboutnav").parent().removeClass("active");
    $("#photos").show(); 
    $("#gezi").hide(); $("#gezinav").parent().removeClass("active");
    $("#blog").hide(); $("#blognav").parent().removeClass("active");
  });
  
  $("#blognav").click(function(){
  $("#blognav").parent().addClass("active");
    $("#education").hide(); $("#edunav").parent().removeClass("active");
    $("#projects").hide(); $("#projnav").parent().removeClass("active");
    $("#experience").hide(); $("#expnav").parent().removeClass("active");
    $("#about").hide(); $("#aboutnav").parent().removeClass("active");
    $("#photos").hide(); $("#photosnav").parent().removeClass("active");
    $("#gezi").hide(); $("#gezinav").parent().removeClass("active");
    $("#blog").show(); 
  });

  $("#gezinav").click(function(){
  $("#gezinav").parent().addClass("active");
    $("#education").hide(); $("#edunav").parent().removeClass("active");
    $("#projects").hide(); $("#projnav").parent().removeClass("active");
    $("#experience").hide(); $("#expnav").parent().removeClass("active");
    $("#about").hide(); $("#aboutnav").parent().removeClass("active");
    $("#photos").hide(); $("#photosnav").parent().removeClass("active");
    $("#blog").hide(); $("#blognav").parent().removeClass("active");
    $("#gezi").show(); 
  });
  
  
});




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

<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-32667788-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>

  </head>
  <body>
  <div id="top_border"></div>
    <header>
      <div class='row'>
        <div class='twelve columns' id='headers'>
          <div class='row'>
            <h1 class='three columns'>Albert Toledo</h1>
          </div>
          <div class='row'>
            <h2 class='eight columns'>enjoying life, creating things..</h2>
          </div>
          <div class='row'>
            <p class='five columns'>
              I am a
              <span class='label'>student</span>
              at Hampton University, a
              <a id = "photographer" class='label success' href='#' >photographer</a>
              , a
              <a id = "photographer" target="blank "class='label success' href='http://www.hamptonpirates.com/roster.aspx?rp_id=1683&path=sailing' >sailor</a>, an
              <span class='label'>equestrian</span>
              , a
              <span class='label'>software developer.</span>
              , and a proud
              <a id = "photographer" target="blank "class='label success' href='http://www.afs.org/afs-and-volunteerism/' >AFS volunteer</a>
            </p>
          </div>
        </div>
      </div>
    </header>
    
    

    
    
    
    <nav id='nav-bar'>
      <div class='row'>
        <div class='twelve columns'>
          <ul class='nav-bar'>
            <li>
              <a href='#' id='aboutnav'>About</a>
            </li>
            <li>
              <a href='#' id='blognav'>Blog</a>
            </li>
            <li>
              <a href='#' id="edunav" >Education</a>
            </li>
            <li>
              <a href='#' id='expnav'>Experience</a>
            </li>
            <li>
              <a href='#' id='projnav'>Projects</a>
            </li>
            <li>
              <a href='#' id='photosnav'>Photography</a>
            </li>
            <li>
              <a href='#' id='gezinav'>What is hapenning in Turkey?</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <section id="navdown" class='row'>
      <div class='nine columns'>
      
      
        <div class='row' id='about'>
          <div class='twelve columns'>
            <h2>About</h2>
            <p>
              <p>My name is Albert. I was born and raised in the beautiful city of <a target='_blank' href="http://en.wikipedia.org/wiki/Istanbul">Istanbul</a>, in  
              <a target='_blank' href="http://en.wikipedia.org/wiki/Turkey">Turkey</a>. <br><br>

                <div class="tumblr_quote">
                    <span class="tumblr_open_quote">“</span>If the world was only one country, Istanbul would be its capital.<span class="tumblr_close_quote">”</span>
                </div>
                <div class="tumblr_source">
                        Napoleon
                    </div><br><br><br>


              I went to the 
              <a target='_blank' href="http://en.wikipedia.org/wiki/St._George's_Austrian_High_School">Austrian High School</a> and 
              spent my junior year in <a target='_blank' href="http://en.wikipedia.org/wiki/Oviedo">Oviedo</a>, 
              Spain as an <a target='_blank' href="http://en.wikipedia.org/wiki/AFS_Intercultural_Programs">AFS Exchange</a>
              student. <br><br><br>

              After graduating from high school, I came to America in order to 
              pursue my Bachelors degree in Computer Science at <a target='_blank' href="http://en.wikipedia.org/wiki/Hampton_University">Hampton University</a>. 
              <br><br><br>

              I finished my
              sophomore year in May 2013 and I am currently interning at Carnegie Mellon University's
              <a target='_blank' href="http://en.wikipedia.org/wiki/Robotics_Institute">Robotics Institute</a> 
              as a researcher under <a target='_blank' href="http://en.wikipedia.org/wiki/David_S._Touretzky">Dr. Dave Touretzky</a>.


              <br><br><br>
              Here is an interview of my great aunt <a target="_blank" href="http://en.wikipedia.org/wiki/Seyla_Benhabib" >Seyla Benhabib</a> 
              explaining her family background which is very similar to mine.
            

              <br><br>
                  <div videoID="nfQqPdcAG60" startTime="66" endTime="581" height="400" width="600" id="youtube-player"></div>
 
                  <script src="http://labnol.googlecode.com/files/youtube-embed.js"></script>
        
              <br><br><br>
              

              </p>
            </p>
          </div>
        </div>
        
        
        
        <div class='row' id='blog'>
          <div class='twelve columns'>
            <h2><a href="http://alberttoledo.tumblr.com">Blog</a></h2>
            
            <script type="text/javascript" src="http://alberttoledo.tumblr.com/js"></script> 
            
            
          </div>
        </div>


        <div class='row' id='gezi'>
          <div class='twelve columns'>
            <h2><a href="http://whatishappeninginturkey.tumblr.com">What is happening in Turkey?</a></h2>
            
              <h4 class="subheader">The AKP government in Turkey has been in the power for more than
                10 years. Slowly they started to use more and more pressure on the Turkish
                people's lives. They wanted to control what we watch, what we read,
                what we say, what we drink, where we drink, when we drink... 
                They made our own police attack our own people. 
                They used political power to make dishonest fortunes. </br> </br>
                Today, countless friends of mine along with hundreds of thousands of other people
                all over the country are resisting against the AKP government in a peaceful, smart and creative way.</br></br>
                I am 8 thousand kilometers away from home, and I am supporting them with this feed where I will publish news, creative work and more about
                the resistance. #direnGezi
              </h4>

            <script type="text/javascript" src="http://whatishappeninginturkey.tumblr.com/js"></script> 
            
            
          </div>
        </div>
        
        
        
        <div class='row' id='photos'>
          <div class='twelve columns'>
            <h2>Photography</h2>
  		
  			<p>
  				I have always been interested in visual arts. I filmed a short movie when I was
  				 in middle school. I still do some volunteer graphic design work. But freezing the moment 
  				 is just so magical to me. 
  				 That's why, I have been taking photos for a while. Here is a selection of my photos..
  			</p>
  		
			
			<?php
  				
  					foreach(glob("photos/".'*.*') as $filename){
  					
  					echo '<a class="singlephoto" rel="photogallery" href="'.$filename.'" title="'.$filename.'">';
					echo '<img src="photos/'.$filename.'"/>';
					echo '</a>';
     				
					}
  				
  				?>
			
  
          </div>
        </div>
        
        
        
        
        <div class='row' id='education'>
          <div class='twelve columns'>
            <div class='row'>
              <div class='twelve columns'>
                <h2>Education</h2>
                <h3>Hampton University</h3>
                <h4 class='subheader'>B.S. Computer Science, Mathematics 2011-2015</h4>
                <h4 class='subheader'>Student Athlete | Varsity Sailing Team</h4>
                <h4 class='subheader'>Current Cumulative GPA: 3.96</h4>
                <div class='row'>
                  <div class='six columns'>
                    <h4>CS courses:</h4>
                    <ul class='square'>
                    	<li>
                        <span class='radius label success'>CSC 100</span>
                        Problem Solving in Computer Science
                      </li>
                      <li>
                        <span class='radius label success'>CSC 120</span>
                        Introduction to Computers
                      </li>
                      <li>
                        <span class='radius label success'>CSC 151</span>
                        Computer Programming I
                      </li>
                      <li>
                        <span class='radius label success'>CSC 152</span>
                        Computer Programming II
                      </li>
                      <li>
                        <span class='radius label success'>CSC 204</span>
                        Computer Architecture I
                      </li>
                      <li>
                        <span class='radius label success'>CSC 205</span>
                        Computer Architecture II
                      </li>
                      <li>
                        <span class='radius label success'>CSC 215</span>
                        Discrete Structures
                      </li>
                      <li>
                        <span class='radius label success'>CSC 251</span>
                        Data Structures and Algorithms I
                      </li>
                      <li>
                        <span class='radius label success'>CSC 252</span>
                        Data Structures and Algorithms II
                      </li>
                      <li>
                        <span class='radius label success'>CSC 295</span>
                        Introduction to Robotics
                      </li>
                      <li>
                        <span class='radius label success'>CSC 395</span>
                        Advanced Robotics
                      </li>
                      
                    </ul>
                         
                    
                    
                  </div>
                  <div class='six columns' id='extracurricular'>
                  <h4>Math courses:</h4>
                    <ul class='square'>
                    	<li>
                        <span class='radius label success'>MAT 151</span>
                        Calculus I
                      </li>
                      <li>
                        <span class='radius label success'>MAT 152</span>
                        Calculus II
                      </li>
                      <li>
                        <span class='radius label success'>MAT 305</span>
                        Probability and Statistics
                      </li>
                      <li>
                        <span class='radius label success'>MAT 208</span>
                        Linear Algebra
                      </li>
                    </ul>
               <h4>Extracurricular:</h4>
                    <ul class='square'>
                      <li>
                      	<acronym class='has-tip' title='Association for Computing Machinery'>
                          ACM
                        </acronym>
                        <acronym class='has-tip' title='Hampton University'>
                          HU
                        </acronym>  
                       Student Chapter Vice President
                      </li>
                      <li>
                        Volunteer Teaching Assistant for
                        <acronym class='has-tip' title='Introduction to Programming'>
                          CSC 151
                        </acronym> Lab
                      </li>
                      <li>
                        <acronym class='has-tip' title='Institute for Electrical and Electronics Engineers'>
                          IEEE
                        </acronym> 
                         <acronym class='has-tip' title='Hampton University'>
                          HU
                        </acronym>  Student Chapter Board Liasion
                      </li>           
                      <li>
                        <acronym class='has-tip' title='Hampton University'>
                          HU
                        </acronym>
                        Robotics Team Leader
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class='row'>
              
              
              <div class='six columns'>
                <h4>Achievements:</h4>
                <ul class='square'>
                  <li>
					Hampton University Honors Student 
                  </li>
                  <li>
                    Golden Key International Honors Society
                  </li>
                  <li>
                    Hampton Renaissance Scholars Honors Society
                  </li>
                  <li>
                    Hampton University Athletic Academic Award 
                  </li>
                  <li>
                    Hampton University International Student Scholarship Award 
                  </li>
                  <li>
                    Hampton University Dean’s List 
                  </li>
                  <li>
                    Outstanding Freshman in Sailing Award
                  </li>
                </ul>
              </div>
              
              
              
            </div>
            <h3>Sankt Georgs Austrian High School</h3>
                <h4 class='subheader'>Science and Math Matura 2006 - 2011</h4>
                <h4 class='subheader'>Istanbul, TURKEY</h4>
            
            <h3>IES Pando</h3>
                <h4 class='subheader'>Science and Technology (AFS Exchange Student) 2009 - 2010</h4>
                <h4 class='subheader'>Oviedo, Spain</h4>
                <br><br><br>
          </div>
          
        </div>
        <div class='row' id='experience'>
          <div class='twelve columns'>
            <h2>Experience</h2>
            <h3>
              <a href='http://cmu.edu' target='_blank'>
                Carnegie Mellon University
              </a>
              /
              <a href='http://hamptonu.edu' target='_blank'>
                Hampton University
              </a>
            </h3>
            <h4 class='subheader'>
              Researcher
              <small>February 2013 - Present</small>
            </h4>
            <ul class='inline'>
              <li>
                <span class='label'>Eclipse RCP</span>
              </li>
              <li>
                <span class='label'>Java</span>
              </li>
              <li>
                <span class='label'>Tekkotsu</span>
              </li>
              <li>
                <span class='label'>C++</span>
              </li>
              
            </ul>
            <p class='clear'>
              <p>Working under the instruction of Dr. David Touretzky and Dr. Chutima Boonthum.
			The Tekkotsu State Machine Composer is a graphical editor for creating state machines for controlling intelligent robots.
			The Tekkotsu State Machine Composer will be built on top of the Eclipse RCP framework.
			Currently in the planning and design process.</p>
            </p>
            <hr />
            
            <h3>
              <a href='http://www.afs.org.tr' target='_blank'>
                AFS Intercultural Programs Turkey
              </a>
            </h3>
            <h4 class='subheader'>
              Volunteer Web Developer
              <small>August 2012 - Present</small>
            </h4>
            <ul class='inline'>
              <li>
                <span class='label'>HTML</span>
              </li>
              <li>
                <span class='label'>CSS</span>
              </li>
              <li>
                <span class='label'>PHP</span>
              </li>
              <li>
                <span class='label'>JavaScript</span>
              </li>
              <li>
                <span class='label'>MySQL</span>
              </li>
              
            </ul>
            <p class='clear'>
              <p>Developing an interactive social platform where volunteers can come together, apply for seminars, create and attend events, share photos.
					Serves as an online database of members’ information for the association board.
					Working in a team of two, major responsibility: back-end engineering using PHP and MySQL and advising the front-end engineer in HTML, 
					CSS and JavaScript.</p>
            </p>
            <hr />
            
            
            <h3>
              <a href='http://www.hamptonu.edu' target='_blank'>
                Hampton University
              </a>
            </h3>
            <h4 class='subheader'>
              Researcher
              <small>September 2012 - December 2012</small>
            </h4>
            <ul class='inline'>
              <li>
                <span class='label'>Custom Hardware</span>
              </li>
              <li>
                <span class='label'>Handy Cricket Microcontroller</span>
              </li>
              <li>
                <span class='label'>Cricket Logo</span>
              </li>
              
            </ul>
            <p class='clear'>
              <p>Worked under the instruction of Dr. Chutima Boonthum.
				Involved in research including the creation of an autonomous aquatic robot.
				Used the Cricket Logo programming language to develop and execute programs.
				Designed and built a boat that carried the Handy Cricket microcontroller used during research.
				Developed programs that enabled autonomous control of the robot’s sensor, motor and rotor.
			</p>
            </p>
            <hr />
            
            
          </div>
        </div>
        <div class='row' id='projects'>
          <div class='twelve columns'>
            <h2>Projects</h2>
            
            <h3>  
            <a target="_blank" href="http://github.com/toledoalbert/Tekkotsu-Syntax.git">
                Tekkotsu Syntax Highlighting
                </a>
            </h3>
            <h4 class='subheader'>
              Independent
              <small>July 2013</small>
            </h4>
            <ul class='inline'>
              <li>
                <span class='label'>JSON</span>
              </li>
              <li>
                <span class='label'>Plist</span>
              </li>
            </ul>
            <p class='clear'>
              <p>We were working on Tekkotsu programming but our text editors could
                only highlight the C++ part of the code. So, we decided to make
                a syntax definition for Tekkotsu and put it public on Github
                for tens of schools who teach robotics using Tekkotsu.</p>
            </p>
            
            <h3>
                ReYou Android App
            </h3>
            <h4 class='subheader'>
              Spelman College CS Olympiad <span class="label radius">Winner!</span>
              <small>March 2013</small>
            </h4>
            <ul class='inline'>
              <li>
                <span class='label'>Java</span>
              </li>
              <li>
                <span class='label'>XML</span>
              </li>
              <li>
                <span class='label'>Eclipse</span>
              </li>
              <li>
                <span class='label'>Android API</span>
              </li>
            </ul>
            <p class='clear'>
              <p>We developed an Android application that allows students
              to easily browse and get informed about the research internship
              opportunities. It also helps keeping track of the applications
              submitted to these programs.</p>
            </p>
            
            
            <h3>	
            <a href="http://alberttoledo.com/team8">
                Team 8 Maze Generator
                </a>
            </h3>
            <h4 class='subheader'>
              Final Project for <abbr class="has-tip" title="Data Structures and Algorithms II">CSC 252</abbr>
              <small>April 2013</small>
            </h4>
            <ul class='inline'>
              <li>
                <span class='label'>JavaScript</span>
              </li>
              <li>
                <span class='label'>HTML</span>
              </li>
              <li>
                <span class='label'>CSS</span>
              </li>
            </ul>
            <p class='clear'>
              <p>We developed a random maze generator that generates and solves
              a random maze according to the user inputs such as width, height,
              complexity and cell size.</p>
            </p>
            
            
            <h3>	
            <a href="http://alberttoledo.com/team8">
                IEEE XTreme 2012
                </a>
            </h3>
            <h4 class='subheader'>
              Programming Competition
              <small>November 2012</small>
            </h4>
            <ul class='inline'>
              <li>
                <span class='label'>Java</span>
              </li>
              
            </ul>
            <p class='clear'>
              <p>I brought 3 students from my school together and convinced them
              to participate in a 24 hour programming competition. We got support
              from hour professor for food. We met in my apartment and solved 
              problems using Java. Didn't win, but definitely had fun.</p>
            </p>
            
            
            <h3>	
            <a href="http://alberttoledo.com/sourceFiles">
                PHP Register & Login
                </a>
            </h3>
            <h4 class='subheader'>
              Independent Project 
              <small>June 2012</small>
            </h4>
            <ul class='inline'>
              <li>
                <span class='label'>PHP</span>
              </li>
              <li>
                <span class='label'>HTML</span>
              </li>
              <li>
                <span class='label'>CSS</span>
              </li>
              <li>
                <span class='label'>MySQL</span>
              </li>
            </ul>
            <p class='clear'>
              <p>This is a web project that I did to teach myself web development. It
              uses a MySQL database to store user information. Users can register,
              login, recover password etc. Logged in users can see protected pages. It
              has an email account activation feature and more.</p>
            </p>
            
            
            <h3>
                Study Buddy Android App
            </h3>
            <h4 class='subheader'>
              Independent Project 
              <small>March 2012</small>
            </h4>
            <ul class='inline'>
              <li>
                <span class='label'>Java</span>
              </li>
              <li>
                <span class='label'>XML</span>
              </li>
              <li>
                <span class='label'>Eclipse</span>
              </li>
              <li>
                <span class='label'>Android API</span>
              </li>
            </ul>
            <p class='clear'>
              <p>We developed an Android application for HU CS department that helps incoming freshmen
              computer science majors with their classes. It gives information about
              each class offered in the department and the professors, the common
              mistakes and practice questions as well as tutoring hours and news
              from the department.</p>
            </p>
            
            <h3>
              <a href='http://alberttoledo.com/work/gpaCalculator.html' target='_blank'>
                GPA Calculator Windows Phone Application
              </a>
            </h3>
            <h4 class='subheader'>
              Independent Project
              <small>Summer 2012</small>
            </h4>
            <ul class='inline'>
              <li>
                <span class='label'>C#</span>
              </li>
              <li>
                <span class='label'>XML</span>
              </li>
              <li>
                <span class='label'>Silverlight</span>
              </li>
              <li>
                <span class='label'>Visual Studio</span>
              </li>
            </ul>
            <p class='clear'>
              <p>Created a simple Windows Phone application that allows students calculate their weighted GPA's by entering
              the grades they earned.</p>
            </p>
            
          </div>
        </div>
      </div>
      <div class='three columns' id='nav-list'>
        <nav>
          <ul class='nav-bar vertical'>
            <li>
              <a href='http://github.com/toledoalbert' target='_blank'>
                GitHub
              </a>
            </li>
            <li>
              <a href='http://twitter.com/toledoalbert' target='_blank'>
                Twitter
              </a>
            </li>
            <li>
              <a href='skype:mrtoledo10?call' target='_blank'>
                Skype
              </a>
            <li>
              <a href='http://alberttoledo.tumblr.com' target='_blank'>
                Tumblr
              </a>
            </li>
            <li>
              <a href='http://instagram.com/toledoalbert' target='_blank'>
                Instagram
              </a>
            </li>
            <li>
              <a href='http://open.spotify.com/user/farfan24' target='_blank'>
                Spotify
              </a>
            <li>
              <a href='https://facebook.com/toledoalbert' target='_blank'>
                Facebook
              </a>
            </li>
            <li>
              <a href='http://linkedin.com/in/toledoalbert' target='_blank'>
                LinkedIn
              </a>
            </li>
            <li>
              <a href='http://alberttoledo.com/files/ToledoResume.pdf' target='_blank'>
                Résumé
              </a>
            </li>
            <li>
              <a href='mailto:toledoalbert@gmail.com'>
                Email
              </a>
            </li>
          </ul>
        </nav>
      </div>
    </section>
    
    
    <!-- begin olark code -->
<script data-cfasync="false" type='text/javascript'>/*<![CDATA[*/window.olark||(function(c){var f=window,d=document,l=f.location.protocol=="https:"?"https:":"http:",z=c.name,r="load";var nt=function(){
f[z]=function(){
(a.s=a.s||[]).push(arguments)};var a=f[z]._={
},q=c.methods.length;while(q--){(function(n){f[z][n]=function(){
f[z]("call",n,arguments)}})(c.methods[q])}a.l=c.loader;a.i=nt;a.p={
0:+new Date};a.P=function(u){
a.p[u]=new Date-a.p[0]};function s(){
a.P(r);f[z](r)}f.addEventListener?f.addEventListener(r,s,false):f.attachEvent("on"+r,s);var ld=function(){function p(hd){
hd="head";return["<",hd,"></",hd,"><",i,' onl' + 'oad="var d=',g,";d.getElementsByTagName('head')[0].",j,"(d.",h,"('script')).",k,"='",l,"//",a.l,"'",'"',"></",i,">"].join("")}var i="body",m=d[i];if(!m){
return setTimeout(ld,100)}a.P(1);var j="appendChild",h="createElement",k="src",n=d[h]("div"),v=n[j](d[h](z)),b=d[h]("iframe"),g="document",e="domain",o;n.style.display="none";m.insertBefore(n,m.firstChild).id=z;b.frameBorder="0";b.id=z+"-loader";if(/MSIE[ ]+6/.test(navigator.userAgent)){
b.src="javascript:false"}b.allowTransparency="true";v[j](b);try{
b.contentWindow[g].open()}catch(w){
c[e]=d[e];o="javascript:var d="+g+".open();d.domain='"+d.domain+"';";b[k]=o+"void(0);"}try{
var t=b.contentWindow[g];t.write(p());t.close()}catch(x){
b[k]=o+'d.write("'+p().replace(/"/g,String.fromCharCode(92)+'"')+'");d.close();'}a.P(2)};ld()};nt()})({
loader: "static.olark.com/jsclient/loader0.js",name:"olark",methods:["configure","extend","declare","identify"]});
/* custom configuration goes here (www.olark.com/documentation) */
olark.identify('8688-465-10-8445');/*]]>*/</script><noscript><a href="https://www.olark.com/site/8688-465-10-8445/contact" title="Contact us" target="_blank">Questions? Feedback?</a> powered by <a href="http://www.olark.com?welcome" title="Olark live chat software">Olark live chat software</a></noscript>
<!-- end olark code -->
    


  </body>
</html>
