<!DOCTYPE html>

<?php
  //By Connor Krauss
  //With assistance from the sample code, Keevan Dance, 
  //and solutions for stackoverflow.com and w3schools.com
  

  // Creates an array for the fields
  // Initializes each field to be displayed
  $labels = array("email"=>"Email Address:", 
		  "name"=>"Name:",
		  "subject"=>"Subject:",
		  "message"=>"Message:",
		  "category"=>"Type of Response:");
  $to = 'cdk82@nau.edu';
?>

<html>
  <head>
    <title>Contact Me</title>
    <style type="text/css">
    <!--
    h3 {text-align: center;
		font-family: Verdana, Helvetica, sans-serif;}
    p {text-align: center;
		font-family: Verdana, Helvetica, sans-serif;}
    form {margin: 1.0em 0 0 0; padding: 0; min-width: 700px;}
    .field {padding-top: .9em;}
    label {font-family: Verdana, Helvetica, sans-serif; 
	 float: left; width: 20%;margin-right: 1em; 
	text-align: right;}
   #submit {margin-left: 50%; padding-top: 1em;}
   -->
    </style>
  </head>
  <body>
    <h3>Contact Me</h3>
    <p><A HREF="index.html">Home Page</A>
    <A HREF="page2.html">Project 2 Page</A></p>
      <form action="test.php" method="post">
        <?php

          // iterates through list, assigning values to $field and formatting
	  foreach($labels as $field=>$label) {
            echo "<div class='field'>\n
                    <label for='$field'>$label</label>\n";

            // when validating the email space
            if($field == 'email') {
              // validates email field using regex, checking for text, then an @ sign,
	      // then more text before a period, and then one of the four patterns expected.
	      // requires the pattern to ensure the field isn't left blank.
              echo "<input type='email' name='$field' id='$field' 
			pattern='[a-z0-9._%+-]+@[a-z0-9.-]+\.(com)*(edu)*(net)*(gov)*$' required/>\n";
            }
	    // when validating the message space
	    else if($field == 'message') {
		// creates a text area, expecting any normal character, but requiring some characters.
	     	echo "<textarea cols='60' rows='8' name='$field' 
			pattern='[a-zA-Z0-9._%+ -]' required></textarea>";
	    }
	    // when validating all other fields, expects regular characters, requires some text.
	    
	    else if($field == 'category') {
	      echo "<select name='formcategory'>
 		<option value='Complaint'>Complaint</option>
		<option value='Question'>Question</option>
  		<option value='Suggestion'>Suggestion</option>
		<option value='Praise'>Praise</option>
		<option value='Other'>Other</option>
		</select>";
	    }
	    else {
	      echo "<input type='text' name='$field' id='$field'
			pattern='[a-zA-Z0-9._%+ -]*' required/>\n";
	    }
 
            // echoes the end of the field div 
            echo "</div>\n";
          }

          //Submit button and closing of tags
          echo "<div id='submit'>\n
                <input type='submit' value='Submit'>\n
	   
                </div>\n
                </form>\n
                </body>\n
                </html>";
        ?>
