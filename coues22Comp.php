<?php

  /*
    Operators
    - Used To Perform Operations On Values.

    Comparison Operators
    - Used To Compare Two Values

    - Part 1
    - ==    => Equal  just val
    - !=    => Not Equal
    - <>    => Not Equal
    - ===   => Identical
    - !==   => Not Identical
  */

  // Test Equal
  var_dump(100 == 100);//t
  echo '<br>';
  var_dump(100 == "100");//t
  echo '<br>';
  var_dump(100.0 == "100");//t
  echo '<br>';
  var_dump(100.0 != "100");//f
  echo '<br>';
  var_dump(100.0 <> "100");//f

  echo '<br>';
  echo '##############';
  echo '<br>';

  // Test Identical val et type 
  var_dump(100 === 100);//t
  echo '<br>';
  var_dump(100 === "100");//f
  echo '<br>';
  var_dump(100.0 === "100");//f
  echo '<br>';
  var_dump(100.0 === 100);//false!!!! car float int 
  echo '<br>';
  var_dump(100.0 !== "100");//t
  echo '<br>';
  var_dump(100.0 !== 100);//t?>