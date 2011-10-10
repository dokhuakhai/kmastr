<?php $thisLocation = 'root'; ?>
<?php
  require_once('./config.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"><head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title><?php echo $siteTitle ?></title>
<meta name="description" content="<?php echo $metaDescription ?>" />
<meta name="keywords" content="<?php echo $metaKeyWords ?>" />
<?php 
//TG 20/7/09
require_once('./cms/admin/theme/maintheme.php');
?>
</head>
<body>


<div id="wrap">
	<div id="header">
    <?php  
     //TG 20/7/09
     require_once('./cms/includes/header.php'); echo "\n"; 
    ?>
  </div>
	<div id="content">

<?php

  //TG 20/7/09
  include ('./cms/functions/le-format.php');
  include ('./cms/functions/convert-characters.php');

  $filename = "cms/textfiles/index.txt";
  if (file_exists($filename)) {
    // Get the contents
    $file_contents = file_get_contents($filename);
    $file_contents = autop($file_contents, 0);
    $file_contents = convert_chars($file_contents, 0);
    $output = $file_contents;
    // Print the contents
    echo $output;
  } else {
    echo '<p>No content. The associated text file could not be found.</p>';
  }

?>

	</div><!-- content_eof //-->
	<div id="navigation">

<ul id="menu">
<li><a href="cms/admin/" title="Admin">Admin</a></li>
<li><a href="<?php echo $wwwroot ?>" title="Home Page">Home Page</a></li>
<?php
  //TG 20/7/09
  include ('./cms/classes/makebutton.class.php');
  include ('./cms/includes/menu.php');

?>
<li><a href="contact.php" title="Contact">Contact</a></li>
</ul>

	</div><!-- navigation_eof //-->
	<div id="extra">

<?php include ('./cms/includes/extra.php'); echo "\n"; ?>

	</div><!-- extra_eof //-->
	<div id="search">

<?php include ('./cms/includes/searchform.php'); ?>

	</div><!-- search_eof //-->
	<div id="footer">

<p>CMS by <a href="http://www.patricktaylor.com/" title="Patrick Taylor">Patrick Taylor</a></p>

<?php include ('./cms/includes/tracking.php'); ?>

	</div><!-- footer_eof //-->
</div><!-- wrap_eof //-->

</body>
</html>
