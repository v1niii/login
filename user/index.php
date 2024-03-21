<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo $_POST["username"]; ?></title>
  <link rel="stylesheet" href="style.css">
  <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
      rel="stylesheet"
    />
</head>

<body>
  <?php
  echo "<form class='info'>";
  if (isset ($_POST["enviar"])) {
  echo "<h1>Login success!</h1>";
  $username = $_POST["username"]; 
  $password = $_POST["password"];
  }
  else
  {
    echo "<h1>Login error!</h1>";
  }
  echo "<div class='field'>";
  echo "<span>Welcome, <div class='text'>$username</div></span>";
  echo "</div>";
  echo "<div class='field'>";
  echo "<span>Your password is: <div class='text'>$password</div></span>";
  echo "</div>";
  echo "<div class='gif_container'>";
  echo "<img src='https://media.tenor.com/IM836m7kzcQAAAAi/spinning-cat.gif' alt='cool cat' class='gif' style='max-width: 20%; height: auto;'>";
  echo "</div>";
  echo "</form>";
  echo "<div class='watermark'>v1ni©</div>"
  ?>
</body>

</html>