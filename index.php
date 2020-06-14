<!DOCTYPE HTML>
<!--Site edited by David M. Turner, Chairman of Communications 2016-2017 - Saint John's Lutheran Church Statesville, NC -->

<HTML class="no-js" lang="en-US">
<HEAD>

<META content="IE=11.0000" http-equiv="X-UA-Compatible">
<META charset="UTF-8">
<!--[if lte IE 8]><meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=IE8" /><![endif]--> 
<META name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"> 

<TITLE>SJ – Home</TITLE>  

		 

<LINK rel="stylesheet" id="risen-parent-style-css" href="./SaintJohns_files/style.css" type="text/css" media="all"/> 
<LINK rel="stylesheet" id="risen-style-css" href="./SaintJohns_files/style(1).css" type="text/css" media="all"/> 
<LINK rel="stylesheet" id="risen-base-style-css" href="./SaintJohns_files/style(2).css"  type="text/css" media="all"/> <LINK id="google-fonts-css" href="./SaintJohns_files/css.css" 
rel="stylesheet" type="text/css" media="all"/> 
<LINK id="jetpack_css-css" href="./SaintJohns_files/jetpack.css" 
rel="stylesheet" type="text/css" media="all"/> 
<link rel="stylesheet" href="./SaintJohns_files/css/jquery-ui.css">

<SCRIPT src="./js/jquery-3.1.1.min.js.download" type="text/javascript"></SCRIPT>
<SCRIPT src="./js/jquery-migrate.min.js" type="text/javascript"></SCRIPT>
<SCRIPT src="./js/modernizr.custom.js" type="text/javascript"></SCRIPT>
<SCRIPT src="./js/jquery.backstretch.min.js" type="text/javascript"></SCRIPT>
<SCRIPT src="./js/superfish.min.js" type="text/javascript"></SCRIPT>
<SCRIPT src="./js/supersubs.js" type="text/javascript"></SCRIPT>
<SCRIPT src="./js/selectnav.min.js" type="text/javascript"></SCRIPT>
<SCRIPT src="./js/jquery.flexslider-min.js" type="text/javascript"></SCRIPT> 
<SCRIPT src="./js/jquery.fitvids.js" type="text/javascript"></SCRIPT>


 
<script type='text/javascript'>
/* <![CDATA[ */
var risen_wp = {"is_home":"1","current_protocol":"https","ie_unsupported_message":"You are using an outdated version of Internet Explorer. Please upgrade your browser to use this site.","ie_unsupported_redirect_url":"http:\/\/browsehappy.com\/","mobile_menu_label":"Menu","slider_enabled":"1","slider_slideshow":"1","slider_speed":"6000","lightbox_prev":"Prev","lightbox_next":"Next","lightbox_expand":"Expand","lightbox_close":"Close"};
/* ]]> */
</script>

<SCRIPT src="./js/main.js" type="text/javascript"></SCRIPT>
<SCRIPT src="./js/webfont.js" type="text/javascript"></SCRIPT>
<SCRIPT src="./js/colorpicker.js" type="text/javascript"></SCRIPT>
<SCRIPT src="./js/demo.js" type="text/javascript"></SCRIPT>
 
<script type="text/javascript">
jQuery(document).ready(function($) {
	var dt = new Date();
	var m = dt.getMonth() + 1;
	var dy = dt.getDate();
	var y = dt.getFullYear();
	var color = "#6a8fab";
	var alt_color = "#486d89";

	if (screen.width > 80) { // mobile performance - no full image background if device not capable of showing media query width 480px
		if (m == 7 && dy == 4){
			color = '#ff0c00';
			alt_color = '#dd0a00';
			jQuery.backstretch('./SaintJohns_files/images/backgrounds/fireworks.jpg');
	}else if (m == 10 && dy == 31){
			color = '#ff9400';
			alt_color = '#dd7200';
			jQuery.backstretch('./SaintJohns_files/images/backgrounds/pumpkin.jpg');
	}else if (m == 11){
			if (dy > 19 && dy < 27){
				if (dt.getDay() == 4){
			color = '#995901';
			alt_color = '#773700';
			jQuery.backstretch('./SaintJohns_files/images/backgrounds/thanksgiving.jpg');
				}else{
					jQuery.backstretch('./SaintJohns_files/images/backgrounds/sun.jpg');
				}
			}else{
				jQuery.backstretch('./SaintJohns_files/images/backgrounds/sun.jpg');
			}
	}else if (m == 12 && dy == 25){
			color = '#016000';
			alt_color = '#004000';
			jQuery.backstretch('./SaintJohns_files/images/backgrounds/christmas.jpg');
	}else if (m == 1 && dy == 1){
			jQuery.backstretch('./SaintJohns_files/images/backgrounds/newyear.jpeg');
			color = '#00137f';
			alt_color = '#00015d';
	}else if (m == 2 && dy == 14){
			color = '#af0f0f';
			alt_color = '#8d0d0d';
			jQuery.backstretch('./SaintJohns_files/images/backgrounds/valentine.jpg');
	}else if (y == 2018){
				if (m == 4 && dy ==1){
				color = '#f7aaed';
				alt_color = '#d588cb';
				jQuery.backstretch('./SaintJohns_files/images/backgrounds/easter.jpg');
					}else{jQuery.backstretch('./SaintJohns_files/images/backgrounds/sun.jpg');}			
	}else if (y == 2019){
				if (m == 4 && dy ==21){
				color = '#f7aaed';
				alt_color = '#d588cb';
				jQuery.backstretch('./SaintJohns_files/images/backgrounds/easter.jpg');
					}else{jQuery.backstretch('./SaintJohns_files/images/backgrounds/sun.jpg');}
	}else if (y == 2020){
				if (m == 4 && dy ==12){
				color = '#f7aaed';
				alt_color = '#d588cb';
				jQuery.backstretch('./SaintJohns_files/images/backgrounds/easter.jpg');
					}else{jQuery.backstretch('./SaintJohns_files/images/backgrounds/sun.jpg');}
	}else if (y == 2021){
				if (m == 4 && dy ==4){
				color = '#f7aaed';
				alt_color = '#d588cb';
				jQuery.backstretch('./SaintJohns_files/images/backgrounds/easter.jpg');
					}else{jQuery.backstretch('./SaintJohns_files/images/backgrounds/sun.jpg');}
	}else if (y == 2022){
				if (m == 4 && dy ==17){
				color = '#f7aaed';
				alt_color = '#d588cb';
				jQuery.backstretch('./SaintJohns_files/images/backgrounds/easter.jpg');
						}else{jQuery.backstretch('./SaintJohns_files/images/backgrounds/sun.jpg');}
	}else if (y == 2023){
				if (m == 4 && dy ==9){
				color = '#f7aaed';
				alt_color = '#d588cb';
				jQuery.backstretch('./SaintJohns_files/images/backgrounds/easter.jpg');
					}else{jQuery.backstretch('./SaintJohns_files/images/backgrounds/sun.jpg');}
	}else if (m == 6 && dy ==14){
				color = '#04147a';
				alt_color = '#020258';
				jQuery.backstretch('./SaintJohns_files/images/backgrounds/flag.jpg');}
			else{
		jQuery.backstretch('./SaintJohns_files/images/backgrounds/sun.jpg');
		 }
	}
	
	document.getElementById("menuStyle").innerHTML = '<style type="text/css"> a, .resurrect-list-icons a:hover, .flex-caption a {color: ' + color +';} #header-menu, #footer-bottom, .flex-caption, .flex-control-nav li a.active, #home-row-widgets .widget-image-title, #page-header h1, .sidebar-widget-title {background-color: ' + color + ';}</style>';
	document.getElementById("bday-style").innerHTML = '<style type="text/css"> #popupBirthdays {margin: auto; background-color:  ' + color + '; padding: 10px; color: white;} .closebtn {margin-left: 10px; color: white; font-weight: bold; float: right; font-size: 22px; line-height: 20px; cursor: pointer; transition: 0.3s; } .closebtn:hover {color: black;} #bday-table {width: 100%; color: white;} .bday-header {background-color: ' + alt_color +'; color: white; font-weight: bold; text-align: center;}</style>';
});
</script>
<a id = "menuStyle"></a>

<style type="text/css">

a, .resurrect-list-icons a:hover, .flex-caption a {
	color: #6a8fab;
}


body, input, textarea, select, .multimedia-short h1, #cancel-comment-reply-link, .accordion-section-title, .staff header h1 a {
	font-family: 'Open Sans', Arial, Helvetica, sans-serif;
}

#header-menu-links, .flex-caption, #home-row-widgets .widget-image-title, #page-header h1, h1.sidebar-widget-title, a.button, a.comment-reply-link, a.comment-edit-link, a.post-edit-link, .nav-left-right a, input[type=submit] {
	font-family: 'Open Sans', Arial, Helvetica, sans-serif;
}

.heading, .page-title, .post-content h1, .post-content h2, .post-content h3, .post-content h4, .post-content h5, .post-content h6, .author-box h1, .staff header h1, .location header h1, #reply-title, #comments-title, .home-column-widgets-title, .ppt, #tagline, #intro {
	font-family: 'Shadows Into Light Two', Georgia, 'Bitstream Vera Serif', 'Times New Roman', Times, cursive;
}
</style>
<script type="text/javascript">
/* <![CDATA[ */

// jQuery.browser.mobile (http://detectmobilebrowser.com/)
// Updated Nov 18, 2013 (Version: Sep 9, 2013)
(function(a){(jQuery.browser=jQuery.browser||{}).mobile=/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i.test(a)||/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(a.substr(0,4))})(navigator.userAgent||navigator.vendor||window.opera);

// For preview purposes, break out of ThemeForest frame on mobile devices
// Also on IE 9+ as frame prevents theme from working properly
if ((jQuery.browser.mobile || Modernizr.touch || (jQuery.browser.msie && parseInt(jQuery.browser.version) >= 9)) && top.location != self.location) {
	top.location = self.location;
}

/* ]]> */
</script>		<style type="text/css">.recentcomments a{display:inline !important;padding:0 !important;margin:0 !important;}</style>
		</head>

<body class="home blog" >

<!-- Birthday pop-up container -->
<div style = "width: 95%; margin: 10px auto; max-width: 960px;">
	<div data-role="popup" id="popupBirthdays" style = "width: 95%; margin: 18px auto; " data-overlay-theme="b" data-theme="a"
		data-tolerance="15,15" class="ui-content">
		<span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
<?PHP
//*****Code that populates the Birthday Table****
	$file = 'SaintJohns_files/SJ_Birthdays.csv';
	//Load next 6 birthdays and put into table
	$birthday_array;
	$bday_file = fopen( $file,"r");
	$i = 0;
	
	while (($line = fgetcsv($bday_file)) !== FALSE){
		 $birthday_array[$i] = $line;
		$i++;
	}
	
	$size = count($birthday_array);
	
	//puts beginning 4 birthdays at end of the array too to ease the loop process
	$birthday_array[$i] = $birthday_array[0];
	$birthday_array[$i + 1] = $birthday_array[1];
	$birthday_array[$i + 2] = $birthday_array[2];
	$birthday_array[$i + 3] = $birthday_array[3];
	
	$j = 0;
	$found = 0;
	$t_date = new DateTime('now');
	$todays_date =  $t_date->format('M d');
	$todays_month = $t_date->format('M');
	$todays_day = (int)$t_date->format('d');

	$display_array; 
		
	switch($todays_month){
		case "Jan":
			$bmonth = "January";
			break;
		case "Feb":
			$bmonth = "February";
			break;
		case "Mar":
			$bmonth = "March";
			break;
		case "April":
			$bmonth = "April";
			break;
		case "May":
			$bmonth = "May";
			break;
		case "Jun":
			$bmonth = "June";		
			break;
		case "Jul":
			$bmonth = "July";		
			break;
		case "Aug":
			$bmonth = "August";		
			break;
		case "Sep":
			$bmonth = "September";		
			break;
		case "Oct":
			$bmonth = "October";		
			break;
		case "Nov":
			$bmonth = "November";		
			break;
		case "Dec":
			$bmonth = "December";		
			break;
		default:
			echo "something went wrong..." . $todays_month. "<br>";
	}
	$i=-1;
	$bdmonth = "";
	while ($bmonth != $bdmonth){
			$i++;
			$split = explode (" ",$birthday_array[$i][0]);
			$bdmonth = $split[0];
	}	
	//$i--;
	$bdday = 0;

	while ($todays_day > $bdday){
		$i++;
		$split = explode (" ",$birthday_array[$i][0]);
		$bdday = (int)$split[1];
	}
	
	$j=0;
	while($j <4){
		 $display_array[$j] = $birthday_array[$i+$j];
		 $j++;
	}
	
	echo '	<table id="bday-table">
			<header class = "bday-header">Upcoming Birthdays</header>
				<tr>
				<td class="bday-date">' . $display_array[0][0] . '</td>
				<td class="bday-name">' . $display_array[0][1] . '</td>
				<td class="bday-date">' . $display_array[1][0] . '</td>
				<td class="bday-name">' . $display_array[1][1] . '</td>

			</tr>
			<tr>
				<td class="bday-date">' . $display_array[2][0] . '</td>
				<td class="bday-name">' . $display_array[2][1] . '</td>
				<td class="bday-date">' . $display_array[3][0] . '</td>
				<td class="bday-name">' . $display_array[3][1] . '</td>
			</tr>
		</table>';
			
?>
	</div>
</div>
<!-- CSS for Birthday Pop-Up -->
<a id = "bday-style"></a>

<!-- Container Start -->

<div id="container">
<div id="container-inner">

<!-- Header Start -->

<HEADER id="header">
	<DIV id="header-inner">
	<DIV id="header-content">
	<DIV class="has-hidpi-logo" id="logo">

<a href="index.php"><IMG id="logo-regular" alt="Saint John's" src="./SaintJohns_files/logo2.png">
		<IMG id="logo-hidpi" alt="Risen" src="./SaintJohns_files/logo2.png">
</a></DIV>

<DIV id="top-right">
<DIV id="top-right-inner">
<DIV id="top-right-content">
<DIV id="tagline"><p>Connecting Growing Serving</div>

  <UL class="risen-list-font-icons" id="header-icons">
  <li><a  href="https://www.facebook.com/stjohnsnalc/"  target ="_blank"><img src = "./SaintJohns_files/facebook.jpg" title="Facebook" type="" media=""></a></li>
  <li><a href="https://www.youtube.com/channel/UCiF-JRUppMAjaiLM2z9TMRg"  target="_blank"> <img src = "./SaintJohns_files/youtube.jpg" title="YouTube"></a></li>
  </UL>
</div></div></div></div></div>

<!-- Menu Start -->

<nav id="header-menu">
<div id="header-menu-inner">

<ul id="header-menu-links" class="sf-menu"><li id="menu-item-983" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-983">
	 <a href="index.php">Home</a></li>
<li id="menu-item-984" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-984"><a href="./index.php#publications">News</a>
<ul class="sub-menu">
	<li id="menu-item-985" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-985"><a href="./index.php#publications">Publications</a></li>
</ul>
</li>
<li id="menu-item-990" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-990"><a href="SaintJohns_Gallery.php">Gallery</a>
<ul class="sub-menu">
	<li id="menu-item-991" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-991"><a href="SaintJohns_Gallery.php#churchtour">Church Tour</a>
</li>
	<li id="menu-item-1012" class="menu-item menu-item-type-post_type menu-item-object-risen_gallery menu-item-has-children menu-item-1012"><a href="SaintJohns_Gallery.php#worship">Worship</a>
</li>
	<li id="menu-item-994" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-994"><a href="SaintJohns_Gallery.php#congregation">Congregation</a></li>
	<li id="menu-item-993" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-993"><a href="SaintJohns_Gallery.php#youthgroup">Youth Group</a></li>
</ul>
</li>
<li id="menu-item-996" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-996"><a href="SaintJohns_Events.php">Events</a>
<ul class="sub-menu">
	<li id="menu-item-1017" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1017"><a href="SaintJohns_Events.php">Upcoming Events</a></li>
	<li id="menu-item-1018" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1018"><a href="https://calendar.google.com/calendar/embed?src=stjohnsluth740%40gmail.com&ctz=America/New_York" target="blank">Calendar</a></li>
</ul>
</li>
<li id="menu-item-997" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-997"><a href="SaintJohns_Location.php">Location</a></li>
<li id="menu-item-988" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-988"><a href="SaintJohns_People.php">Our People</a></li>
<li id="menu-item-982" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-982"><a href="./SaintJohns_Visit.php">Visit Us</a>
</li>

<!--**************NEW MENU OPTIONS***************** -->
<li id="menu-item-990" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-990"><a>More</a>
<ul class="sub-menu">
	<li id="menu-item-991" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-991"><a href="http://www.thenalc.org" target = "blank">NALC Homepage</a>
</li>
<!--THE NALC TOOK DOWN THIER DEVOTIONAL...COMMENTING OUT THIS CODE <?php
$ch = curl_init(); 
	$month = date('F');
	$day = date('j');
	$year = date('Y');
	$NALCwebsite = 'http://thenalc.org/nalc-devotions-' . $month . '-' . $day . '-' . $year . '/';
	
	//checks to see if the NALC devotional target is valid. If so, create a menu link to it.
	curl_setopt($ch, CURLOPT_URL, $NALCwebsite); 
	curl_setopt($ch, CURLOPT_HEADER, 1); 
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
	$data = curl_exec($ch); 
	curl_close($ch); 
		
	$parsedData = preg_split("/\\r\\n|\\r|\\n/", $data);
		if ($data != NULL){
			
	echo '<li id="menu-item-1012" class="menu-item menu-item-type-post_type menu-item-object-risen_gallery menu-item-has-children menu-item-1012"><a href="' .$NALCwebsite.'" target = "blank">Daily Devotional</a>';
		}
?> -->
	
</li>
	<li id="menu-item-994" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-994"><a href="http://carolinasnalc.org/" target = "blank">Carolinas Mission District</a></li>
	<li id="menu-item-993" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-993"><a href="http://onlinelutheranbiblestudy.weebly.com/bible-studies.html" target="blank">Bible Studies</a></li>
</ul>
</li>



</ul>	
	<div class="clear"></div>
	</div>
    <div id="header-menu-bottom"></div>
    </nav>
<!-- Menu End -->
</header>
<!-- Header End -->

<div class="home-column-widgets-both">

<!--Video Slides-->	
<div id="slider">
<div class="flexslider">
<ul class="slides">

<?PHP
if (is_file("./SaintJohns_files/first_slide/slide.png")){
echo '<LI>
  <DIV class="flex-image-container">
  <IMG 
  width="960" height="350" title="" class=" wp-post-image" alt="" src="./SaintJohns_files/first_slide/slide.png" 
  sizes="(max-width: 960px) 100vw, 960px" srcset="./SaintJohns_files/first_slide/slide.png 960w, ./SaintJohns_files/first_slide/slide.png 300w"></a>
  <DIV class="flex-play-overlay"></DIV></a>								</DIV>
  <DIV class="flex-caption"><B>';
	
	if (is_file ("./SaintJohns_files/first_slide/slide_text.txt")){
	$file_handle = fopen("./SaintJohns_files/first_slide/slide_text.txt", "rb");
	$line_of_text = fgets($file_handle);
	echo $line_of_text;
	}
	else{
		echo 'Saint Johns';
	}
	echo '</B></div></li>;';
fclose($file_handle);
}
?>

<!--SLIDE that cancels sunday school due to cold weather conditions.  Comment out when not in use.-
<LI>
  <DIV class="flex-image-container">
  <IMG width="960" height="350" title="" class=" wp-post-image" alt="" src="./SaintJohns_files/icyroads.png" 
  sizes="(max-width: 960px) 100vw, 960px" srcset="./SaintJohns_files/icyroads.png 960w, ./SaintJohns_files/icyroads.png" 300w"></a>
  <DIV class="flex-play-overlay"></DIV></a>								</DIV>
  <DIV class="flex-caption"><B>ALERT</B> Winter Weather Conditions</div>
</li>
*******End cancel sunday school slide********-->'

<LI>
  <DIV class="flex-image-container">
  <a href="./SaintJohns_Visit.php"><IMG 
  width="960" height="350" title="" class=" wp-post-image" alt="" src="./SaintJohns_files/church.jpg" 
  sizes="(max-width: 960px) 100vw, 960px" srcset="./SaintJohns_files/worship.jpg 960w, ./SaintJohns_files/worship.jpg 300w"></a>
  <DIV class="flex-play-overlay"></DIV></a>								</DIV>
  <DIV class="flex-caption"><B>Worship</B> Sundays at 10:30AM</div>
</li>

<li>
<div class="flex-image-container">
	<a href = "./SaintJohns_Visit.php">
	<img width="960" height="350" src="./SaintJohns_files/group.jpg" class=" wp-post-image" alt="" title="" srcset="./SaintJohns_files/group.jpg 960w, ./SaintJohns_files/group-300x109.jpg 300w" sizes="(max-width: 960px) 100vw, 960px" />							
	</a>
	</div>
	<a class="flex-caption"><b>Bible Studies</b> Sundays 9:30AM</a>
	</li>
	
	<!--NALC TOOK DOWN THIER DEVOTIONAL...COMMENTING OUT THIS CODE<?php 
	date_default_timezone_set("America/New_York");
	//use curl to store entire devitional website (based on date) in $data
	$ch = curl_init(); 
//	curl_setopt( $ch, CURLOPT_FOLLOWLOCATION, true );
	$month = date('F');
	$day = date('j');
	$year = date('Y');

	$NALCwebsite = 'https://www.thenalc.org/nalc-devotions-' . $month . '-' . $day . '-' . $year . '/';

	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); //need this for https site
	curl_setopt($ch, CURLOPT_URL, $NALCwebsite); 
	curl_setopt($ch, CURLOPT_HEADER, 1); 
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
	$data = curl_exec($ch); 
	curl_close($ch); 

	//parse through $data to known location of devotional material and post to our website
	$parsedData = preg_split("/\\r\\n|\\r|\\n/", $data);
		//check if there is connectivity to the website.  If not, throw up generic NALC image
		if ($data != NULL){
	$i = 380;
	while ($parsedData[$i] != '			<div class="long-description">' && $i < 420){
		$i++;
	}
	$i++;
	if ($i <420){
	$try = preg_split('/\s+/',$parsedData[$i]);
		if ($try[1] == '<p>&nbsp;</p>'){
		$i++;
		$try = preg_split('/\s+/',$parsedData[$i]);
	}
	}
	if ($i >419){

	echo '<LI><DIV class="flex-image-container"><div>';
	echo '<a href = "http://www.thenalc.org" target= "blank"> <img src="./SaintJohns_files/images/NALC.gif" width="960" height="350"';
	echo '"></div></div>
		<a class="flex-caption"><b>NALC Home Page</b></a></li>';
	

	}else{
	$insertCode = str_replace("1600", "940", $parsedData[$i]);
	

	$insertCode = str_replace("900", "350", $insertCode);
	$parsedData = preg_split("/[\s]+/", $insertCode);

	echo '<LI><DIV class="flex-image-container" style="background-color:#ABC7EA;"><div style="margin:auto; width:65%; height:auto;">';
	
	echo '<a href = "' . $NALCwebsite . '" target= "blank"> <img ';
	
	if ($parsedData[6] == 'alt=""'){
		echo $parsedData[5];
	}else{
	echo $parsedData[6];
	}
	echo 'style ="max-width:100%;"></div></div>
		<a class="flex-caption"><b>NALC Daily Devotional</b></a></li>';
	}
		}else{

		echo '<LI><DIV class="flex-image-container"><div>';
	
	echo '<a href = "' . $NALCwebsite. '" target= "blank"> <img src="./SaintJohns_files/images/NALC.gif" width="960" height="350"';
	echo '"></div></div>
		<a class="flex-caption"><b>NALC Daily Devotional</b></a></li>';
		}

?>-->
	<LI><DIV class="flex-image-container"><div>
	<a href = "https://www.thenalc.org/" target= "blank"> <img src="./SaintJohns_files/images/NALC.gif" width="960" height="350">
	</div></div>
		<a class="flex-caption"><b>NALC Website</b></a></li>
<!--  -->
	
	
	 <LI>
  <DIV class="flex-image-container">
  <a href="./SaintJohns_Gallery.php#churchtour"><IMG 
  width="960" height="350" title="" class=" wp-post-image" alt="" src="./SaintJohns_files/church.jpg" 
  sizes="(max-width: 960px) 100vw, 960px" srcset="./SaintJohns_files/church.jpg 960w, ./SaintJohns_files/church.jpg 300w"></a>
  <DIV class="flex-play-overlay"></DIV></a>								</DIV>
  <DIV class="flex-caption"><B>Saint John's</B> Church Tour</div>
</li>

	<li>
<DIV class="flex-image-container">
<a href="./SaintJohns_Gallery.php#youthgroup"><IMG 
  width="960" height="350" title="" class=" wp-post-image" alt="" src="./SaintJohns_files/mission1.png" 
  sizes="(max-width: 960px) 100vw, 960px" srcset="./SaintJohns_files/mission1.png 960w, ./SaintJohns_files/mission1.png 300w"></a>
  	</DIV><a class="flex-caption" href=""><B>Youth Group</B> photos</a>					
	</li>		
</ul></div></div>

<DIV id="intro"><B>Welcome to St. John's Lutheran Church </b>
Following Jesus,
Leading Others to Jesus,
Serving in Jesus' Name.</DIV>

<div id="home-row-widgets">
	<div class="thumb-grid">	
	<div class="widget thumb-grid-item image-frame">
	<a href="SaintJohns_Location.php">
								
	<DIV class="thumb-grid-image-container">
	<IMG class="thumb-grid-item-placeholder" 
alt="" src="./SaintJohns_files/thumb-placeholder.png">
						 <IMG width="600" height="400" title="" class="thumb-grid-image wp-post-image" 
alt="" src="./SaintJohns_files/map-pin-600x400.jpg">					</DIV>
<DIV class="widget-image-title">Location &amp Times</div>
</a>
	</div>
	<div class="widget thumb-grid-item image-frame">
<a href="./SaintJohns_Visit.php">
	<DIV class="thumb-grid-image-container">
	<IMG class="thumb-grid-item-placeholder" 
	alt="" src="SaintJohns_files/thumb-placeholder.png">
	<IMG width="600" height="400" title="" class="thumb-grid-image wp-post-image" alt="" src="./SaintJohns_files/cross.jpg" 
sizes="(max-width: 600px) 100vw, 600px" srcset="./SaintJohns_files/cross.jpg 600w,./SaintJohns_files/cross.jpg 300w, ./SaintJohns_files/cross.jpg 1024w, ./SaintJohns_files/cross.jpg 1200w"> </DIV>
<DIV class="widget-image-title">Visitors </div></a>
</div>

<DIV class="widget thumb-grid-item image-frame">
	<a href="SaintJohns_People.php">
<DIV class="thumb-grid-image-container">
	<IMG class="thumb-grid-item-placeholder" 
	alt="" src="SaintJohns_files/thumb-placeholder.png">
						 
	<IMG width="600" height="400" title="" class="thumb-grid-image wp-post-image" 
	alt="" src="./SaintJohns_files/staff.jpg">					</DIV>
<DIV class="widget-image-title">Our People</div></a>
	</div>
<div class="clear"></div></div></div>
<div id="home-column-widgets">
<div id="home-column-widgets-left">

<SECTION class="widget content-widget widget_risen-multimedia" 
id="risen-multimedia-1"><HEADER>
<H1 class="home-column-widgets-title">Upcoming Events</H1></HEADER><ARTICLE 

#event1
<?PHP
//Checks to see if there is an event in the appropriate Event folder
//If so, assigns description to $file1

$directory = "./SaintJohns_Events_files/Events/Event1/";
$files1 = scandir($directory);
if (sizeof($files1) > 2 ){
$file1 = "no event";
$dirSize = sizeof($files1);
$finfo = finfo_open(FILEINFO_MIME);
$fileInfo = finfo_file($finfo, "./SaintJohns_Events_files/Events/Event1/".$files1[2]);

//parsing fileInfo to isolate file type to avoid extra charset clutter from affecting "if" statments
$parsedInfo = preg_split("/[\s,]+/", $fileInfo);

switch ($dirSize){
	case 2:
		break;
	case 3:
		if ($parsedInfo[0] == "text/plain" || $parsedInfo[0] == "text/plain;"){
			$file1 = $files1[2];
		} 
		break;
	default:	
		if ($parsedInfo[0] == "text/plain" || $parsedInfo[0] == "text/plain;"){
			$file1 = $files1[2];
			}else{
			$file1 = $files1[3];
			}
		break;
	
}
	$fileLocation1 = $directory . $file1;
	//If there is an event, write to HTML which posts it
	if ($file1 != "no event"){
		$file_handle = fopen("$fileLocation1", "rb");
echo '<ARTICLE class="multimedia-widget-item multimedia-widget-item-first">
		<header>
		<div class="image-frame multimedia-widget-item-thumb widget-thumb">';
		
echo	'<a href=""><img width="55" height="55" src="./SaintJohns_files/images/logo_55.png" " class="attachment-risen-tiny-thumb size-risen-tiny-thumb wp-post-image" alt=""></a>
		</div>';
$line_of_text = fgets($file_handle);
echo '<h1 class="multimedia-widget-item-title"><a href="SaintJohns_Events.php#event1">' . $line_of_text . '</a></h1>
	<div class="multimedia-widget-item-date">';
$line_of_text = fgets($file_handle);

echo $line_of_text . '	</div>
	<div class="events-widget-item-time">';
$line_of_text = fgets($file_handle);
echo $line_of_text . '</div>
	</header>

<div class="clear"></div></article>';					


fclose($file_handle);
	}
}
?>
				

<?PHP
//Checks to see if there is an event in the appropriate Event folder
//If so, assigns description to $file1

$directory = "./SaintJohns_Events_files/Events/Event2/";
$files1 = scandir($directory);
if (sizeof($files1) > 2 ){
$file1 = "no event";
$dirSize = sizeof($files1);
$finfo = finfo_open(FILEINFO_MIME);
$fileInfo = finfo_file($finfo, "./SaintJohns_Events_files/Events/Event2/".$files1[2]);

//parsing fileInfo to isolate file type to avoid extra charset clutter from affecting "if" statments
$parsedInfo = preg_split("/[\s,]+/", $fileInfo);

switch ($dirSize){
	case 2:
		break;
	case 3:
		if ($parsedInfo[0] == "text/plain" || $parsedInfo[0] == "text/plain;"){
			$file1 = $files1[2];
		} 
		break;
	default:	
		if ($parsedInfo[0] == "text/plain" || $parsedInfo[0] == "text/plain;"){
			$file1 = $files1[2];
			}else{
			$file1 = $files1[3];
			}
		break;
	
}
	
	$fileLocation1 = $directory . $file1;
	
//If there is an event, write to HTML which posts it
	if ($file1 != "no event"){
		$file_handle = fopen("$fileLocation1", "rb");
echo '<ARTICLE 	class="multimedia-widget-item multimedia-widget-item-first">
		<header>
		<div class="image-frame multimedia-widget-item-thumb widget-thumb">
		<a href=""><img width="55" height="55" src="./SaintJohns_files/images/logo_55.png" " class="attachment-risen-tiny-thumb size-risen-tiny-thumb wp-post-image" alt=""></a>
		</div>';
$line_of_text = fgets($file_handle);
echo '<h1 class="multimedia-widget-item-title"><a href="SaintJohns_Events.php#event2">' . $line_of_text . '</a></h1>
	<div class="multimedia-widget-item-date">';
$line_of_text = fgets($file_handle);
echo $line_of_text . '	</div>
	<div class="events-widget-item-time">';
$line_of_text = fgets($file_handle);
echo $line_of_text . '</div>
	</header>

<div class="clear"></div></article>';					


fclose($file_handle);
	}
}
?>
				

<?PHP
//Checks to see if there is an event in the appropriate Event folder
//If so, assigns description to $file1

$directory = "./SaintJohns_Events_files/Events/Event3/";
$files1 = scandir($directory);
if (sizeof($files1) > 2 ){
$file1 = "no event";
$dirSize = sizeof($files1);
$finfo = finfo_open(FILEINFO_MIME);
$fileInfo = finfo_file($finfo, "./SaintJohns_Events_files/Events/Event3/".$files1[2]);

//parsing fileInfo to isolate file type to avoid extra charset clutter from affecting "if" statments
$parsedInfo = preg_split("/[\s,]+/", $fileInfo);

switch ($dirSize){
	case 2:
		break;
	case 3:
		if ($parsedInfo[0] == "text/plain" || $parsedInfo[0] == "text/plain;"){
			$file1 = $files1[2];
		} 
		break;
	default:	
		if ($parsedInfo[0] == "text/plain" || $parsedInfo[0] == "text/plain;"){
			$file1 = $files1[2];
			}else{
			$file1 = $files1[3];
			}
		break;
	
}
	$fileLocation1 = $directory . $file1;
	
//If there is an event, write to HTML which posts it
	if ($file1 != "no event"){
		$file_handle = fopen("$fileLocation1", "rb");
echo '<ARTICLE 	class="multimedia-widget-item multimedia-widget-item-first">
		<header>
		<div class="image-frame multimedia-widget-item-thumb widget-thumb">
		<a href=""><img width="55" height="55" src="./SaintJohns_files/images/logo_55.png" " class="attachment-risen-tiny-thumb size-risen-tiny-thumb wp-post-image" alt=""></a>
		</div>';
$line_of_text = fgets($file_handle);
echo '<h1 class="multimedia-widget-item-title"><a href="SaintJohns_Events.php#event3">' . $line_of_text . '</a></h1>
	<div class="multimedia-widget-item-date">';
$line_of_text = fgets($file_handle);

echo $line_of_text . '	</div>
	<div class="events-widget-item-time">';
$line_of_text = fgets($file_handle);
echo $line_of_text . '</div>
	</header>

<div class="clear"></div></article>';					


fclose($file_handle);
	}
}
?>
				

<?PHP
//Checks to see if there is an event in the appropriate Event folder
//If so, assigns description to $file1

$directory = "./SaintJohns_Events_files/Events/Event4/";
$files1 = scandir($directory);
if (sizeof($files1) > 2 ){
$file1 = "no event";
$dirSize = sizeof($files1);
$finfo = finfo_open(FILEINFO_MIME);
$fileInfo = finfo_file($finfo, "./SaintJohns_Events_files/Events/Event4/".$files1[2]);

//parsing fileInfo to isolate file type to avoid extra charset clutter from affecting "if" statments
$parsedInfo = preg_split("/[\s,]+/", $fileInfo);

switch ($dirSize){
	case 2:
		break;
	case 3:
		if ($parsedInfo[0] == "text/plain" || $parsedInfo[0] == "text/plain;"){
			$file1 = $files1[2];
		} 
		break;
	default:	
		if ($parsedInfo[0] == "text/plain" || $parsedInfo[0] == "text/plain;"){
			$file1 = $files1[2];
			}else{
			$file1 = $files1[3];
			}
		break;
	
}
	$fileLocation1 = $directory . $file1;
	
//If there is an event, write to HTML which posts it
	if ($file1 != "no event"){
		$file_handle = fopen("$fileLocation1", "rb");
echo '<ARTICLE 	class="multimedia-widget-item multimedia-widget-item-first">
		<header>
		<div class="image-frame multimedia-widget-item-thumb widget-thumb">
		<a href=""><img width="55" height="55" src="./SaintJohns_files/images/logo_55.png" " class="attachment-risen-tiny-thumb size-risen-tiny-thumb wp-post-image" alt=""></a>
		</div>';
$line_of_text = fgets($file_handle);
echo '<h1 class="multimedia-widget-item-title"><a href="SaintJohns_Events.php#event4">' . $line_of_text . '</a></h1>
	<div class="multimedia-widget-item-date">';
$line_of_text = fgets($file_handle);
echo $line_of_text . '	</div>
	<div class="events-widget-item-time">';
$line_of_text = fgets($file_handle);
echo $line_of_text . '</div>
	</header>

<div class="clear"></div></article>';					


fclose($file_handle);
	}
}
?>


</SECTION><SECTION class="widget content-widget widget_risen-posts" 
id="risen-posts-2"><HEADER>
<H1 id = "publications" class="home-column-widgets-title">Publications</H1></HEADER><aRTICLE class="blog-widget-post blog-widget-post-first">

<DIV class="image-frame blog-widget-post-thumb widget-thumb"><a href="./SaintJohns_files/publications/proclaimer.pdf" target = "blank"><IMG 
width="55" height="55" title="" class="attachment-risen-tiny-thumb size-risen-tiny-thumb wp-post-image" src="./SaintJohns_files/images/proclaimer_55.png" </a>
	 </DIV>					
<header>

	<h1 class="blog-widget-post-title"><a href="./SaintJohns_files/publications/goodnews.pdf" title="The Good News" target = "blank">The Good News</a></h1>

	<div class="blog-widget-post-author">
	Weekly Newsletter</div>								
			
	<time class="blog-widget-post-date" id = "proclaimer_date">
	</time>											
				</header>							
				<div class="clear"></div>				
			</article>
		
<!--next publication-->			
	<aRTICLE class="blog-widget-post blog-widget-post-first">
<DIV class="image-frame blog-widget-post-thumb widget-thumb">
<IMG 
width="55" height="55" title="" class="attachment-risen-tiny-thumb size-risen-tiny-thumb wp-post-image" 
alt="Sample image with caption" src="./SaintJohns_files/images/nalc-logo.png" 
sizes="(max-width: 55px) 100vw, 55px"></a>
	 </DIV>					
<header>
	<h1 class="blog-widget-post-title">
	<a href="https://www.thenalc.org/newsletter/" target="blank">NALC Newsletters</a></h1>
	<div class="blog-widget-post-author">
	Monthly Newsletter</div>
	<div>
	<time class="blog-widget-post-date" id = "proclaimer_date">

	</time>										
					</div>
				
				</header>							
				<div class="clear"></div>				
			</article>	
			
<!--next publication-->
<aRTICLE class="blog-widget-post blog-widget-post-first">
<DIV class="image-frame blog-widget-post-thumb widget-thumb"><a href="./SaintJohns_files/publications/wingsnewsletter.pdf" target = "blank"><IMG 
width="55" height="55" title="" class="attachment-risen-tiny-thumb size-risen-tiny-thumb wp-post-image" 
alt="Sample image with caption" src="./SaintJohns_files/images/wings55.png" 
sizes="(max-width: 55px) 100vw, 55px"></a>
	 </DIV>					
<header>

	<h1 class="blog-widget-post-title"><a href="./SaintJohns_files/publications/wingsnewsletter.pdf" target = "blank" title="Monthly Newsletter">WINGS Newsletter</a></h1>

	<div class="blog-widget-post-author">
	Periodic Newsletter</div>
									
					<div>
	<time class="blog-widget-post-date" id = "proclaimer_date">
	

	</time>										
					</div>
				
				</header>							
				<div class="clear"></div>				
			</article>		
			
			<!--next publicationi-->
<aRTICLE class="blog-widget-post blog-widget-post-first">
<DIV class="image-frame blog-widget-post-thumb widget-thumb"><a href="./SaintJohns_files/publications/bulletin.pdf"target = "blank"><IMG 
width="55" height="55" title="" class="attachment-risen-tiny-thumb size-risen-tiny-thumb wp-post-image" 
alt="Sample image with caption" src="./SaintJohns_files/images/logo_55.png" 
sizes="(max-width: 55px) 100vw, 55px"></a>
	 </DIV>					
<header>

	<h1 class="blog-widget-post-title"><a href="./SaintJohns_files/publications/bulletin.pdf" target = "blank" title="Weekly Worship Bulletin">Sunday Bulletin</a></h1>

	<div class="blog-widget-post-author">
	Weekly Worship Bulletin</div>
									
					<div>
	<time class="blog-widget-post-date" id = "proclaimer_date">
	

	</time>										
					</div>
				
				</header>							
				<div class="clear"></div>				
			</article>		
<!--next publication-->			
	
			</section>	
</div>


		

<div id="home-column-widgets-right">

	<section id="risen-events-1" class="widget content-widget widget_risen-events"><header>

	<H1 class="home-column-widgets-title">At a Glance</H1></HEADER><aRTICLE 
class="events-widget-item events-widget-item-first">


<iframe src="https://calendar.google.com/calendar/embed?showNav=0&amp;showPrint=0&amp;showTabs=0&amp;showCalendars=0&amp;showTz=0&amp;mode=AGENDA&amp;height=350&amp;wkst=1&amp;bgcolor=%23FFFFFF&amp;src=stjohnsluth740%40gmail.com&amp;color=%231B887A&amp;ctz=America%2FNew_York" style="border-width:0" height="325" frameborder="0" scrolling="no"></iframe>


</aRTICLE>
</section>

			
<section id="risen-gallery-1" class="widget content-widget widget_risen-gallery"><header><h1 class="home-column-widgets-title">Office Hours</h1></header>			

</section>
					Office hours are <b>12 - 3 PM</b>, Monday through Thursday. Pastor is available in an emergency anytime (828-612-6439), and is usually in the office from 8 am - 4 pm, Monday through Thursday. If you need to meet with him, call to schedule a time.
</div>

<div class="clear"></div>
</div>
</div>

<!-- Footer Start -->
			
<footer id="footer">

<div id="footer-left">
				
	<ul id="footer-menu-links" class="menu"><li id="menu-item-901" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-901"><a href="index.php">Home</a></li>
<li id="menu-item-1000" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1000"><a href="index.php#publications">News</a></li>
<li id="menu-item-998" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-998"><a href="SaintJohns_Events.php">Events</a></li>
<li id="menu-item-1001" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1001"><a href="SaintJohns_People.php">People</a></li>
<li id="menu-item-999" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-999"><a href="SaintJohns_Visit.php">Visit Us</a></li></ul>

<UL class="risen-list-font-icons" id="footer-icons">
  <li><a  href="https://www.facebook.com/stjohnsnalc/"target ="_blank"><img src = "./SaintJohns_files/facebook.jpg" title="Facebook" type="" media=""></a></li>
  <li><a href="https://www.youtube.com/channel/UCiF-JRUppMAjaiLM2z9TMRg" target="_blank"> <img src = "./SaintJohns_files/youtube.jpg" title="YouTube"></a></li></ul>			
					<div class="clear"></div>
					
				</div>			
				
				<div id="footer-right">
				
										<ul id="footer-contact">
					
												<li><SPAN class="footer-icon church"></SPAN> 740 North Center St. - Statesville, NC 28677</li>
  <li><SPAN class="footer-icon phone"></SPAN> (704)873-0222</li>
  <li>stjohnsluth740@gmail.com<li>
						
					</ul>						
				</div>
				
				<div class="clear"></div>
				
			</footer>
			
			<div id="footer-bottom"></div>
			
			<!-- Footer End -->

		</div>
	
	</div>
	
	<!-- Container End -->
	
<SCRIPT src="./js/devicepx-jetpack.js" type="text/javascript"></SCRIPT>
<SCRIPT src="./js/hoverIntent.min.js" type="text/javascript"></SCRIPT>
<SCRIPT src="./js/wp-embed.min.js" type="text/javascript"></SCRIPT>

</body>
</html>