<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Eddie Grey - Thank You</title>
<meta name="keywords" content="Eddie Grey" />
<meta name="description" content="Eddie Grey" />
<script type="text/javascript" src="jquery/jquery-1.4.2.min.js"></script>
<script type="text/javascript" src="jquery/jquery.slidertron-0.1.js"></script>

<link href="stylesheets/style.css" rel="stylesheet" type="text/css" media="screen" />

<style type="text/css">
@import "stylesheets/slidertron.css";
</style>
</head>
<body>


<?php
  $full_name = $_POST['full_name'];
  $email = $_POST['email'];
  $primary_phone = $_POST['primary_phone'];
  $comments = $_POST['comments'];
  $newsletter_signup = $_POST['newsletter_signup'];
  
  
  $to = 'eddiegrey8@hotmail.com';
  $subject = 'Eddie Grey Music - Contact Form';
  $msg = "Full Name: $full_name\n" .
		 "E-mail: $email\n" .
		 "Primary Phone: $primary_phone\n" .
		 "Comments: $comments\n" .
		 "Newsletter Signup?: $newsletter_signup";
  
  mail($to, $subject, $msg, 'From:' . $email);
  

?>

<!-- end #header-wrapper -->

<!--Start of entire "container" container (banner/menu/content/footer)-->


<div id="logo" align="center"> <a href="index.html"><img src="images/eddie_grey_banner2.jpg" alt="Eddie Grey banner" width="940" height="179" align="top" /></a>
</div>



<div id="container">

<div id="header">
	<div id="menu">
		<ul>
			<li class="current_page_item"><a href="index.html" class="first">Home</a></li>
            <li><a href="about.html">About</a></li>
			<li><a href="media.html">Press</a></li>
			<li><a href="news.html">Shop</a></li>
			<li><a href="contact.html">Community</a></li>
		</ul>
	</div>
	<!-- end #menu -->
    

<!--Start of Social Links HEADER -->
<div id="social_links_header">
  <a href="http://www.facebook.com/EddieGreyMusic" target="blank"><img src="images/facebook_icon_eddiegrey2.png" alt="Facebook" /></a>
  
<a href="http://twitter.com/#!/EddieGrey8" target="blank"><img src="images/twitter_icon_eddiegrey2.png" alt="Facebook" /></a>

<a href="http://www.youtube.com/user/eddiegrey8music" target="blank"><img src="images/youtube_icon_eddiegrey2.png" alt="Facebook" /></a>

<a href="http://eddiegrey8.tumblr.com/" target="blank"><img src="images/tumblr_icon_eddiegrey2.png" alt="Facebook" /></a>

	</div>
    
<!--http://www.reverbnation.com/eddiegreymusic-->
<!--http://www.youtube.com/user/eddiegrey8music-->
<!--Tumblr-->
<!--RSS feed-->    
    
<!--End of Social Links HEADER-->



<!-- Start of Search Form -->

<!--
	<div id="search">
		<form method="get" action="">
			<fieldset>
				<input type="text" name="s" id="search-text" size="15" />
			</fieldset>
		</form>
	</div>
-->

<!--End of Search Form-->

    
</div>
<!-- end #header -->
<hr />
<!-- end #logo -->



<div id="page">
	<div id="page-bgtop">
		<div id="content">
			<div class="post">
				
                
                <!--
                <p class="meta"><span class="date">Saturday, August 27, 2011</span> 3:00 PM Posted by <a href="#">Webmaster</a></p>
                -->
                
                
			  <h2 class="title"><a href="#">Message Sent</a></h2>
				<div class="entry">
                
                <h2><strong>&nbsp;Thank you for contacting Eddie Grey!</strong></h2>
			<p>&nbsp;&nbsp;Your message has been sent. We'll get back to you at our earliest convenience.</p>
			<h2>&nbsp;</h2>
             
				</div>
			</div>
		</div>
		<!-- end #content -->
        
		<div id="sidebar">
			<ul>
				<li>
					<h2>Tunes</h2>
					<p>
                    <img style="visibility:hidden;width:0px;height:0px;" border=0 width=0 height=0 src="http://c.gigcount.com/wildfire/IMP/CXNID=2000002.0NXC/bT*xJmx*PTEzMTQ2ODE*MjQyNDQmcHQ9MTMxNDY4MTQyOTAwMSZwPTI3MDgxJmQ9cHJvX3BsYXllcl9maXJzdF9nZW4mZz*xJm89/NzBmNWFkNDhmNDRhNGJjMmI2OTIxZmUwMjAzMTQyZTImb2Y9MA==.gif" /><object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" width="230" height="250"><param name="movie" value="http://cache.reverbnation.com/widgets/swf/40/pro_widget.swf?id=artist_1508781&posted_by=&skin_id=PWAS1002&border_color=000000&auto_play=false&shuffle=false"></param><param name="allowscriptaccess" value="always"></param><param name="allowNetworking" value="all"></param><param name="allowfullscreen" value="true"></param><param name="wmode" value="opaque"></param><param name="quality" value="best"></param><embed src="http://cache.reverbnation.com/widgets/swf/40/pro_widget.swf?id=artist_1508781&posted_by=&skin_id=PWAS1002&border_color=000000&auto_play=false&shuffle=false" type="application/x-shockwave-flash" allowscriptaccess="always" allowNetworking="all" allowfullscreen="true" wmode="opaque" quality="best" width="230" height="250"></embed></object><br/>
                    <img style="visibility:hidden;width:0px;height:0px;" border=0 width=0 height=0 src="http://www.reverbnation.com/widgets/trk/40/artist_1508781//t.gif" /></p>
				</li>
				<li>
				  <h2>Recent Tweets</h2>
					<ul>
<!--Start of Twitter feed.  This is HTML widget code from Twitter.-->                
                    <script src="http://widgets.twimg.com/j/2/widget.js"></script>
<script>
new TWTR.Widget({
  version: 2,
  type: 'profile',
  rpp: 7,
  interval: 30000,
  width: 240,
  height: 300,
  theme: {
    shell: {
      background: '#333333',
      color: '#ffffff'
    },
    tweets: {
      background: '#000000',
      color: '#ffffff',
      links: '#39f'
    }
  },
  features: {
    scrollbar: false,
    loop: false,
    live: false,
    hashtags: true,
    timestamp: true,
    avatars: false,
    behavior: 'all'
  }
}).render().setUser('eddiegrey8').start();
</script>
                    
<!--End of Twitter feed.-->   
                    </ul>
				</li>
                
                



<!--                
				<li>
					<h2>Facebook Feed</h2>
				
             
				</li>
-->
                
                
			</ul>
</div>
<!--End of #sidebar-->
		
        
<div style="clear: both;">&nbsp;
</div>

	
    
</div>

<!--End of #page-->
</div>


</div>
<!--End of #container-->
<div id="footer">
  <p>Copyright &copy; 2010 EddieGreyMusic.com. All rights reserved.</p>
    
    
</div>
<!--End of #footer-->


</body>
</html>