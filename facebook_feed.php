<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>

<!--START of FACEBOOK feed-->
                   <ul>
 <!--?<span class="hiddenSpellError" pre=""-->php
 //function to retrieve posts from facebook's server
 function loadFB($fbID){
 $url="http://graph.facebook.com/".$fbID."/feed?limit=3";
 //load and setup CURL
 $c = curl_init($url);
 curl_setopt($c, CURLOPT_RETURNTRANSFER, 1);
 //get data from facebook and decode JSON
 $page = json_decode(curl_exec($c));
 //close the connection
 curl_close($c);
 //return the data as an object
 return $page->data;
 }
 
 //BE SURE to enter your facebook id here
 $fbid="EddieGreyMusic";
 //how many posts to show
 $fbLimit=10;
 //variable used to count how many we've loaded
 $fbCount=0;
 
 //call the function and get the posts from facebook
 $myPosts=loadFB($fbid);
 
 //set timezone (change this to your timezone)
 date_default_timezone_set("America/Chicago");
 
 //loop through all the posts we got from facebook
 foreach($myPosts as $dPost){
 //only show posts that are posted by the page admin
 if($dPost->from->id==$fbid){
 //get the post date / time and convert to unix time
 $dTime = strtotime($dPost->created_time);
 //format the date / time into something human readable
 //if you want it formatted differently look up the php date function
 $myTime=date("M d Y h:ia",$dTime);
 ?>
<ul>
    <li><!--?<span class="hiddenSpellError" pre=""-->php echo($dPost->message);?>
<!--?php echo $myTime;?--></li>
</ul>
 <!--?<span class="hiddenSpellError" pre=""-->php
 //increment counter
 $fbCount++;
 //if we've outputted the number set above in fblimit we're done
 if($fbCount >= $fbLimit) break;
 }
 }
 ?>
 </ul>
<!--END of FACEBOOK feed-->



</body>
</html>