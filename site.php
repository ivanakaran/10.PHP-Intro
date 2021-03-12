  <?php

  $name = "Kathrin";
  if ($name === "Kathrin") {
    echo "Hello Kathrin! <br> <br>";
  } else {
    echo "Nice name! <br> <br>";
  }

  function greeting_msg($name)
  {
    $hour = date('H');
    if ($hour >= 19) {
      $greeting = "Good Evening  $name!";
    } elseif ($hour >= 12) {
      $greeting = "Good Afternoon  $name!";
    } elseif ($hour < 12) {
      $greeting = "Good Morning  $name!";
    }
    return $greeting;
  }

  echo greeting_msg($name);

  echo "<br><br>";



  $rating = 9;
  $rated = TRUE;
  $check = "";


  if ($rating >= 1 && $rating <= 10) {
    echo "Thank you for rating. <br><br>";
    if ($rated === true) {
      echo "You already voted <br> <br>";
    } else {
      echo "Thanks for voting <br> <br>";
    }
  } else {
    echo "Invalid
    rating, only numbers between 1 and 10. <br> <br>";
  }



  echo gettype($rating) . "<br><br>";

  $voters = ["John" => "false, 1", "Jane" => "true, 5", "Ricky" => "false, 9", "Diana" => "false, 11", "Ella" => "true, 5", "Martin" => "false, 9", "Sandra" => "false, 7", "Alex" => "true, 10", "James" => "false, 12", "Oliver" => "false,4"];




  foreach ($voters as $name => $rating) {

    $value = explode(',', $rating);
    $rating = (string) $value[0];
    $rated = (int) $value[1];

    print $name . ' => ' . $value[0] . ' ,' . $value[1] . "<br>";
    if ($rating === 'false' && $rated >= 1 && $rated <= 10) {
      echo  greeting_msg($name) . "<br>Thanks for voting with $rated <br> <br>";
    } elseif ($rating === 'true' && $rated >= 1 && $rated <= 10) {
      echo greeting_msg($name) . "<br>You already voted with $rated <br><br>";
    } else {
      echo "Invalid rating,
      only numbers between 1 and 10.<br><br>";
    }
  }



  ?>