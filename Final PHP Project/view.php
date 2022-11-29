<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
</head>

<body style="background-color:bisque;">
  <div class="container shadow-lg p-3 my-5 bg-body rounded w-50">
    <?php
    include "connection.php";
    if (isset($_GET["view"])) {
      $id = $_GET['S_no'];
      $sql = "SELECT * FROM project WHERE S_no = $id";
      $result = mysqli_query($conn, $sql);
      $n = mysqli_fetch_array($result);
      // print data 
      foreach ($n as $x => $val) {
        if ($x == 0 || $x == 1 || $x == 2 || $x == 3) {
          continue;
        }

        echo " 
    <div class='container bg-body p-2'>
      <div class='row fw-bold  text-center'>
        <div class= 'col-2 bg-warning text-dark py-3'>$x</div>
        <div class= 'col text-start bg-light py-3'>$val</div>
      </div>
  </div>";
      }
    }
    ?>
    <a href="project.php" class="btn btn-danger m-auto d-block w-25 mt-3">
      Back To <i class="bi bi-house-heart-fill"></i> Home
    </a>
  </div>

</body>

</html>