<h1>Variable Variables </h1>
<section>
  <div>
    Using PHP, we can access data through dynamic variable names. The name of 
    a variable can be stored in another variable, allowing it to be 
    accessed dynamically. Such variables are known as variable variables.
  </div>
  <div>
  To turn a variable into a variable variable, you put an extra $ sign in front of your variable
  </div>
</section>
<pre>
  $foo = "username"; // foo has value "username"
  $$foo = "rajesh"; // username has value "rajesh"
  echo "\$foo:\t"; 
  echo $foo; //prints username

  echo "\${\$foo}:\t"; 
  echo ${$foo}; //prints rajesh

  echo "\$\$foo:\t"; 
  echo $$foo; //prints rajesh

  echo "\$username:\t"; 
  echo $username; //prints rajesh
</pre>
<h3>Output</h3>
<?php
  $foo = "username"; // foo has value "username"
  $$foo = "rajesh"; // username has value "rajesh"
  echo "\$foo:\t"; 
  echo $foo; //prints username
  echo "<br/>"; 

  echo "\${\$foo}:\t"; 
  echo ${$foo}; //prints rajesh
  echo "<br/>"; 

  echo "\$\$foo:\t"; 
  echo $$foo; //prints data
  echo "<br/>"; 

  echo "\$username:\t"; 
  echo $username; //prints rajesh
  echo "<br/>"; 
?>