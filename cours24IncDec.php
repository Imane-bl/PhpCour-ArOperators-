<?php

  /*
    Operators
    - Used To Perform Operations On Values.

    Incrementing &#038; Decrementing Operators
    - Increase And Decrease Values
  */

  $likes = 0;
  $likes++;
  $likes++;
  $likes++;//ici 3
  $likes--;

  echo $likes; // 2
  echo '<br>';

  $a = 0;

//post 
  echo $a--; // 0 yhat awl val lwla 
  echo '<br>';
  echo $a; // -1 apres  calc
  echo '<br>';

  $b = 0;
  
//pre
  echo --$b; // -1 calc 
  echo '<br>';
  echo $b; // -1