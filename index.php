<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<style>
  table,
  th,
  td {
    border: 1px solid black;
  }
</style>

<body>
  <table>
    <?php

    $start = microtime();

    for ($i = 1; $i < 31; $i++) {
      echo ("<tr>");
      $second = $i ** 2;
      $third = $i ** 3;

      echo ("<td>" . $i . "</td>");
      echo ("<td>" . $second . "</td>");
      echo ("<td>" . $third . "</td>");

      echo ("</tr>");
    }

    $end = microtime();
    $time = (getmicrotime($end) - getmicrotime($start));

    echo ($time . " micro-seconds");

    function getmicrotime($t)
    {
      list($usec, $sec) = explode(" ", $t);
      return ((float)$usec + (float)$sec);
    }
    ?>
  </table>
</body>

</html>