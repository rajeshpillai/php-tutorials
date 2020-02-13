<h1>Data Types </h1>

<ul>
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
</ul>
