<?php include ('classes/page.class1.php'); include ('functions/le-format.php'); include ('functions/convert-characters.php'); $about = new Page; $filename = "textfiles/about.txt"; if (file_exists($filename)) { $file_contents = file_get_contents($filename); $file_contents = autop($file_contents, 0); $file_contents = convert_chars($file_contents, 0); $output = $file_contents; } else { $output = "<p>No content. The associated text file could not be found.</p>"; } $about->Title = "about"; $about->MetaDescription = "about"; $about->MetaKeywords = ""; $about->ThisPage = "about"; $about->SetContent($output); $about->Template(); ?>