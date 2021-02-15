<?php
  print '<h3> PHP echo and print Statements</h3>';
  print '<p>';
  print "echo and print are more or less the same.";
  print '<br>';
  print "They are both used to output data to the screen.";
  print '<br>';
  print "The differences are small: echo has no return value while print has a return value of 1 so it can be used in expressions.";
  print '<br><br>';

  print "echo can take multiple parameters (although such usage is rare) while print can take one argument.";
  print'<br>';
  print "echo is marginally faster than print.<br>";

  echo "<a href='https://www.w3schools.com/php/php_echo_print.asp#:~:text=echo%20and%20print%20are%20more,print%20can%20take%20one%20argument./'>link1</a>";
  print '</p>';

  print '<p>';
  print '<h3>php.net/manual/en/function.print</h3>';
  print 'print - Output a string<br>';
  print '<h4>Description</h4>print (string $arg) : int';
  print '<h4>Parameters</h4>arg - The input data.';
  print '<h4>Return values</h4>Return 1, always.<br>';
  echo "<a href='https://www.php.net/manual/en/function.print'>link2</a>";
  print '</p>';

  print '<p>';
  print '<h3>php.net/manual/en/function.echo.php</h3>';
  print 'echo - Output one or more strings<br>';
  print '<h4>Description</h4>echo (string $arg, string...$args) : void<br>';
  print 'Outputs all parameters. No additional newline is appended.<br>';
  print 'echo is not actually a function(it is a language construct), so you are not required to use parentheses with it.<br>';
  print 'echo(unlike some other language constructs) does not behave like a function, so it cannot always be used in the context of a function.<br>';
  print "The major differences to print are that echo accepts an argument list and doesn't have a return value";
  print '<h4>Parameters</h4>arg - The parameter to output.<br>args';
  print '<h4>Return values</h4>No value is returned<br>';
  echo "<a href='https://www.php.net/manual/en/function.echo.php'>link3</a>";
  print '</p>';
?>
