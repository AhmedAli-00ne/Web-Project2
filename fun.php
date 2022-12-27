<?php
    ob_start();
    require('DBconnectionFun.php');
    ob_end_clean();
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <script defer src="theme.js"></script>
    <link rel="stylesheet" href="LandingPageStyle.css" />
    <link rel="stylesheet" href="christmas.css"/>
    <link rel="stylesheet" href="cardat.css" />
    <script src="christmas.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed&display=swap" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>     
    <title>Kharagny-Fun</title>
</head>
<body>
      <main>
      <div id="wrapper">
          <?php
          $sql = "SELECT * FROM sections";
          $result = mysqli_query($conn, $sql);
          $queryResults = mysqli_num_rows($result);
          $quote = '"';
          if ($queryResults > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
              echo "<div class='wholeCard'>
              <h1 class='cardHeading'>" . $row['desc'] . "</h1>
              <div class='cardHolder'>
                <div class='cardImg'>".'<img class="cardImgel" src="data:image/png;base64,'.base64_encode($row['photo']).'"/>'."</div>
                <span class='cardDesc'><p>".$row['HTML']."</p></span>
                <div class='detailBtn'>Details</div>
              </div>
            </div>";
            }
          }
          ?>
        </div>
      </main>
      <script src="addNavBar.js"></script>
</body>
</html>