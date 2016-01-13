<!DOCTYPE html>

<html>
<head>
  <link rel="stylesheet" type="text/css" href="cupcakes.css">
</head>
<body>

  <?php
  if(!isset($_SESSION)){
    session_start();
  }

  
  include_once("connect.php");
  include_once("cupcakes_config_file.php");


  /* Post with data from Search
  * Run the Search sql and get ready with the
  * result for display
  */

  if (isset($_GET['search'])) {
    if ($_GET['search'] == "cupcakes") {
      unset($_SESSION["pd_name"]);
      unset($_SESSION["pd_type"]);
      unset($_SESSION["pd_price"]);
    }

    if (isset($_GET['pd_name'])){
      $_SESSION["pd_name"] = $_GET["pd_name"];
    }

    if (isset($_GET['pd_price'])){
      $_SESSION["pd_price"] = $_GET["pd_price"];
    }

    if (isset($_GET['pd_type'])){
      $_SESSION["pd_type"] = $_GET["pd_type"];
    }


    $query = "SELECT pd_name,pd_id,pd_price  FROM product_details where 1 ";

    if (isset($_SESSION['pd_name'])){
      echo $_SESSION['pd_name'];
    }

    if (isset($_SESSION['pd_type'])){
      echo $_SESSION['pd_type'];
    }
	if
	(isset($_SESSION['pd_price'])){
      echo $_SESSION['pd_price'];
    }
   

    if (isset($_SESSION['pd_name'])){
      $query = $query. " and pd_id ='".$_SESSION['pd_name']."'";
    }

    if (isset($_SESSION['pd_type'])){
      $query = $query. " and pd_type = '".$_SESSION['pd_type']."'";
    }

    echo $query;

    $result = mysqli_query($conn, $query);
    if (!$result) {
      die(mysqli_error($conn));
    }
  }

  ?>

  <div class= "main">
    <div class="title">
      <h1>Shoe@mart</h1>
    </div>
    

    <div class ="Center-Nav" style="text-align: center;width:1250px">

      <?php
      if (isset($result)) {
        ?>
        <table class ="result-table">
          <?php
          $columnMax=5;
          $columnCount=$columnMax;
          $status="Start";
          while ($row = mysqli_fetch_array($result)) {
            if($columnCount == $columnMax){
              echo "<tr>";
            }
              /*Image*/
                echo "<td>" ."<img src='assets/shoe_img/".$row[1]."' class='border' >". "</td>";
                echo "<td> <b>Model:</b>" . $row[2] . "</br>";
                echo "<b>Price:</b>" . $row[3] . "</br>";
                echo "<b>Size:</b>" . $row[4] . "</br>";
                echo " <form method='post' action='search.php?action=add&search=Search'>";
                  echo " <input type='hidden' name='pd_id' value='".$row[0]."'/> ";
                  echo " <input type='hidden' name='pd_name' value='".$row[2]."'/> ";
                  echo " <input type='hidden' name='pd_price' value='".$row[3]."'/> ";
                  echo " <input type='submit' value='Add to cart'/>";
                  echo "</form>";

                  echo " <form action='review.php' method='post'>";
				  echo " <input type='hidden' name='reviews' value='".$row[0]."'/> ";
                    echo " <input type='submit' name ='review_submit' value='Reviews'>";
                    echo " </form>";
                  $columnCount = $columnCount - 1;

                  echo "</td>";

                  if($columnCount == 1){
                    $columnCount=$columnMax;
                    $status="End";
                  }
                }

                if($status="Start"){
                  echo "</tr>";
                }

                ?>
              </table>
              <?php
            }
            ?>

          </div>

          <div class="footer">
            Copyright © Team-7
          </div>
        </div>
      </body>
      </html>
