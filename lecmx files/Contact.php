<?php include ('classes/page.class1.php'); include ('functions/le-format.php'); include ('functions/convert-characters.php'); $Contact = new Page; $filename = "textfiles/Contact.txt"; if (file_exists($filename)) { $file_contents = file_get_contents($filename); $file_contents = autop($file_contents, 0); $file_contents = convert_chars($file_contents, 0); $output = $file_contents; } else { $output = "<p>No content. The associated text file could not be found.</p>"; } $Contact->Title = "Contact"; $Contact->MetaDescription = "Contact"; $Contact->MetaKeywords = "Contact"; $Contact->ThisPage = "Contact"; $Contact->SetContent($output); $Contact->Template(); ?>