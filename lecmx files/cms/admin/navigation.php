<?php
require_once('../../config.php');

  echo '<h1>'. $siteTitle . ' admin</h1>';

  echo "\n\n";

  echo '<div id="navigation">';

  //echo '<a href="/" title="Home Page">Home Page</a>';
  echo '<a href="'.$wwwroot.'" title="Home Page">Home Page</a>';
  echo ' | ';

  if ($thisPage == "upload") {
    echo '<strong>Upload an Image</strong>';
  } else {
    echo '<a href="upload.php" title="Upload an Image">Upload an Image</a>';
  }

  echo ' | ';

  if ($thisPage == "deleteimage") {
    echo '<strong>Delete an Image</strong>';
  } else {
    echo '<a href="deleteimage.php" title="Delete an Image">Delete an Image</a>';
  }

  echo ' | ';

  if ($thisPage == "addsearch") {
    echo '<strong>Add to Search</strong>';
  } else {
    echo '<a href="addsearch.php" title="Add to Search">Add to Search</a>';
  }

  echo ' | ';

  if ($thisPage == "searchindex") {
    echo '<strong>Edit Search</strong>';
  } else {
    echo '<a href="searchindex.php" title="Edit Search">Edit Search</a>';
  }

  echo "<br />";

  if ($thisPage == "create") {
    echo '<strong>Create/Edit Page</strong>';
  } else {
    echo '<a href="create.php" title="Create/Edit Page">Create/Edit Page</a>';
  }

  echo ' | ';

/*  if ($thisPage == "write") {
    echo '<strong>Write to Page</strong>';
  } else {
    echo '<a href="write.php" title="Write to Page">Write to Page</a>';
  }

  echo ' | ';
*/
  if ($thisPage == "delete") {
    echo '<strong>Delete a Page</strong>';
  } else {
    echo '<a href="delete.php" title="Delete a Page">Delete a Page</a>';
  }

  echo ' | ';

  if ($thisPage == "menu") {
    echo '<strong>Add to Menu</strong>';
  } else {
    echo '<a href="menu.php" title="Add to Menu">Add to Menu</a>';
  }

  echo ' | ';

  if ($thisPage == "editmenu") {
    echo '<strong>Edit Menu</strong>';
  } else {
    echo '<a href="editmenu.php" title="Edit Menu">Edit Menu</a>';
  }

  echo ' | ';

  if ($thisPage == "extra") {
    echo '<strong>Extra</strong>';
  } else {
    echo '<a href="extra.php" title="Extra">Extra</a>';
  }
  
  echo ' | ';

  
  if ($thisPage == "changetheme") {
    echo '<strong>Change Theme</strong>';
  } else {
    echo '<a href="changetheme.php" title="changetheme">Change Theme</a>';
  }
  
  echo ' | ';

  if ($thisPage == "logout") {
    echo '<strong>Logout</strong>';
  } else {
    echo '<a href="logout.php" title="logout">Logout</a>';
  }
  echo "\n";

  echo '</div>';

?>
