<h1>PHP Data Types </h1>

<div>
  <h1>Variables</h1>
  <div>
  Variables #
  A variable in any programming language is a named piece of computer memory, 
  containing some information inside. Variables are one of the essential parts of 
  a computer program. You can declare a variable in PHP using a $ sign followed 
  by its name, e.g., $myVariable
  </div>
</div>

<div>
  <h1>Data types</h1>
  <div>Along with the name of variables, their sizes may vary too. In most programming 
  languages (like C++ and Java) you can use different data types for your variables. PHP, however, does not have explicit type definitions, but the type of a variable is determined by the type of the value that it is assigned, or by the type that it is cast to.</div>

  <div>There are different data types for different purposes, i.e., null, boolean, 
  integer, float, string, object, resource, and an array. Here is a brief overview of the types. For a detailed documentation and examples, see the PHP documentation.</div>
</div>

<ol>
  <li><h2>Null</h2>
    <pre>
      $foo = null;
      echo $foo;
    </pre>
  </li>
  <li><h2>Boolean</h2>
    <pre>
      $foo = true;
      $bar = false;
      echo $bar;
    </pre>
  </li>
  <li>
    <h2>If/else statement </h2>
    <pre>
      $foo = true;
      if ($foo) {
          echo "true";
      } else {
          echo "false";
      }
    </pre>
    <h3>Output</h3>
    <?php
      $foo = true;
      if ($foo == true) {
          echo "true";
      } else {
          echo "false";
      }
    ?>
  </li>
  <li>
    <h2>Integer</h2>
    <pre>
      $negative = -3; // negative
      $zero = 0; // zero (can also be null or false (as boolean)
      $positive = 123; // positive decimal
      $zeroPos = 0123; //0 prefix is used to specify octal - octal value = 83 decimal
      $hex = 0xAB; //0x prefix is used to specify hexadecimal - hexadecimal value = 171 decimal
      $bin = 0b1010; // 0b prefix is used to specify binary - binary value = 10 decimal
      var_dump($negative, $zero, $positive, $zeroPos, $hex, $bin);
    </pre>
    <?php 
      $negative = -3; // negative
      $zero = 0; // zero (can also be null or false (as boolean)
      $positive = 123; // positive decimal
      $zeroPos = 0123; //0 prefix is used to specify octal - octal value = 83 decimal
      $hex = 0xAB; //0x prefix is used to specify hexadecimal - hexadecimal value = 171 decimal
      $bin = 0b1010; // 0b prefix is used to specify binary - binary value = 10 decimal
      var_dump($negative, $zero, $positive, $zeroPos, $hex, $bin); ?>
  </li>
  <li>
    <h2>Array</h2>
    <pre>
      $foo = array(1, 2, 3); // An array of integers created using array fucntion
      $bar = ["A", true, 123 => 5]; // Short array syntax, PHP 5.4+
      echo $bar[0]; // Returns "A"
      echo "\n";
      echo $bar[1]; // Returns 1 for true
      echo "\n";
      echo $bar[123]; // Returns 5
    </pre>
  </li>
  <li>
    <h2>String</h2>
    <div>A string is like an array of characters. Like an array, a string can be indexed to return its individual characters:</div>
    <pre>
    $foo = "I am a string";
    echo $foo; // outputs "I am a string"
    echo "\n";
    echo $foo[3]; // Prints 'm', the third character of the string in $foo.
    </pre>
  </li>
</ol>
