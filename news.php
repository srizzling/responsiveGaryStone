<?php require_once( 'couch/cms.php' ); ?>
<!DOCTYPE html>
<html><head>
<title>Gary Stone Surgeon</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<meta name="description" content="" />
<link rel="stylesheet" type="text/css" href="css/kickstart.css" media="all" />                  <!-- KICKSTART -->
<link rel="stylesheet" type="text/css" href="style.css" media="all" />                          <!-- CUSTOM STYLES -->
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript" src="js/kickstart.js"></script>                                  <!-- KICKSTART -->

	<style type="text/css">
 .rslides {
  position: relative;
  list-style: none;
  overflow: hidden;
  width: 100%;
  height:100%
  padding: 0;
  margin: 0;
  margin-top:-10px;
  margin-bottom:-5px;
  }

.rslides li {
  -webkit-backface-visibility: hidden;
  position: absolute;
  display: none;
  width: 100%;
  left: 0;
  top: 0;
  }

.rslides li:first-child {
  position: relative;a
  float: left;
  }

.rslides img {
  height: auto;
  float: left;
  width: 100%;
  }

body{
background:#272628;

}







</style>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script src="js/responsiveslides.min.js"></script>
<script>
  $(function() {
    $(".rslides").responsiveSlides({
  auto: true,             // Boolean: Animate automatically, true or false
  speed: 4000,            // Integer: Speed of the transition, in milliseconds
  timeout: 8000,          // Integer: Time between slide transitions, in milliseconds
  pager: false,           // Boolean: Show pager, true or false
  nav: false,             // Boolean: Show navigation, true or false
  random: false,          // Boolean: Randomize the order of the slides, true or false
  pause: false,           // Boolean: Pause on hover, true or false
  pauseControls: true,    // Boolean: Pause when hovering controls, true or false
  prevText: "Previous",   // String: Text for the "previous" button
  nextText: "Next",       // String: Text for the "next" button
  maxwidth: "",           // Integer: Max-width of the slideshow, in pixels
  navContainer: "",       // Selector: Where controls should be appended to, default is after the 'ul'
  manualControls: "",     // Selector: Declare custom pager navigation
  namespace: "rslides",   // String: Change the default namespace used
  before: function(){},   // Function: Before callback
  after: function(){}     // Function: After callback
});
  });
  
  	$(function() {
			var pull 		= $('#pull');
				menu 		= $('nav ul');
				menuHeight	= menu.height();

			$(pull).on('click', function(e) {
				e.preventDefault();
				menu.slideToggle();
			});

			$(window).resize(function(){
        		var w = $(window).width();
        		if(w > 320 && menu.is(':hidden')) {
        			menu.removeAttr('style');
        		}
    		});
		});
</script>
<script>
			$(function(){
				var $mwo = $('.marquee-with-options');
				$('.marquee').marquee();
				$('.marquee-with-options').marquee({
					//speed in milliseconds of the marquee
					speed: 2,
					//gap in pixels between the tickers
					gap: 50,
					//gap in pixels between the tickers
					delayBeforeStart: 0,
					//'left' or 'right'
					direction: 'left',
					//true or false - should the marquee be duplicated to show an effect of continues flow
					duplicated: true,
					//on hover pause the marquee - using jQuery plugin https://github.com/tobia/Pause
					pauseOnHover: true
				});

				//pause and resume links
				$('.pause').click(function(e){
					e.preventDefault();
					$mwo.trigger('pause');
				});
				$('.resume').click(function(e){
					e.preventDefault();
					$mwo.trigger('resume');
				});
				//toggle
				$('.toggle').hover(function(e){
					$mwo.trigger('pause');
				},function(){
					$mwo.trigger('resume');
				})
				.click(function(e){
					e.preventDefault();
				})
			});
</script>
</head><body>


<div class="grid">
<!-- ===================================== END HEADER ===================================== -->



	<div class="col_12" style="background: #182c67">
<div id="navi" style="background: #182c67">
		
	
			
		<img src="images/logo.jpg" style="width:100px; height:53px; float:left;"/>

		<ul class="menu" style="float:left">
				
				<li><a href="index.html">HOME</a></li>		
				<li><a href="profile.html">PROFILE</a></li>
				<li><a href="procedures.html">PROCEDURES</a></li>
				<li><a href="contact.html">CONTACT</a></li>
				<li><a href="news.html">NEWS</a></li>
			
		</ul>

		</div>
	

	</div>
	<div class="col_12" style="background: white">
	<div class="show-desktop">
	

			<div class="col_6">
			
				<img src="http://i.imgur.com/xWu0DnA.jpg">	
					
					
				
			</div>
			
			<div class="col_6">	
				<cms:editable name='main_content' type='richtext'> 

	
			<font size="1%">
				<h3> GUIDELINES FOR SCREENING COLONOSCOPY </h3>
			</font>
			<b>03 AUGUST 2013</b>

  			<p>


				"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."


			</p>

 
			<font size="1%">
				<h3> A RISING SPORTS INJURY </h3>
			</font>
			<b>22 JULY 2013</b>

 			<p>



 				"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."



 			</p>

				</cms:editable>
		
 			</div>

						
						
										
				
				
				
			
	</div>
	
		

	
	<div class="show-tablet">
	
		<div class="col_6">
			
			<img src="http://i.imgur.com/xWu0DnA.jpg">
						
					
					
				
			</div>
			
			<div class="col_6">	
			This is the news page							
						
										
				
				
				
			</div>
	</div>
	
	
	<div class="show-phone">
			<div class="col_6">
			
		<img src="http://i.imgur.com/xWu0DnA.jpg">
						
					
					
				
			</div>
			
			<div class="col_6">	
			This is the news page							
						
										
				
				
				
			</div>
	</div>





<!-- ===================================== START FOOTER ===================================== -->
</div><!-- END GRID-->
<div class="clear"></div>
<center>
<div class="col_12" style="color:white; background: #182c67; height:12%;">
	
	<font face="Futura" color="white" size="4%">
		P:&nbsp;&nbsp;	
	</font>
	<font face="light" color="white" size="4%">
		04 381 8120 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	</font>

	<font face="Futura" color="white" size="4%">
		E:&nbsp;&nbsp;	
	</font>
	<font face="light" color="white" size="4%">
		GARY.STONE@CCDHB.ORG.NZ &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	</font>


	<font face="Futura" color="white" size="4%">
		F: &nbsp;&nbsp;	
	</font>
	<font face="light" color="white" size="4%">
		04 381 8120 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	</font>



	<font face="light" color="white" size="4%">
		POWERED BY COUCHCMS &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	</font>

</div>
</div>
</center>






</body></html>
<?php COUCH::invoke(); ?>