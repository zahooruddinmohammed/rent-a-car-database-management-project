<?php
	 include_once 'conn.php';
?> 
   

<!doctype html>
<html lang=''>
<head>
   <meta charset='utf-8'>
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <!--<link rel="stylesheet" href="style.css">-->
   <link rel="Stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">

   <title>Group By</title>

</head>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark d-none d-lg-block" style="z-index: 2000;">
      <div class="container-fluid">
        <!-- Navbar brand -->
        <a class="navbar-brand" target="_blank">
          <strong>OLA CABS</strong>
        </a>
        <!--<button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarExample01"
          aria-controls="navbarExample01" aria-expanded="false" aria-label="Toggle navigation">
          <i class="fas fa-bars"></i>
        </button> -->
        
        
        <!--<div class="collapse navbar-collapse" id="navbarExample01">
            <ul  class="navbar-nav me-auto mb-2 mb-lg-0">
                <li id="column1"class="nav-item active">
                    <a class="nav-link" aria-current="page" href="home.php">Home</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" rel="nofollow" href = "renting.php"
                target="_blank">rent a car</a>
                </li> 
                <li id="column2" class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        queries</a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="query1.php">query1</a>
                            <a class="dropdown-item" href="query2.php">query2</a>
                    </div>
                <li id="column3" class="nav-item">
                        <a class="nav-link" rel="nofollow" href = "index.php" target="_blank">logout</a>
                </li>
            </ul>
          
        </div> -->
      </div>
    </nav>



<div style="position: relative" , ><p style="position: fixed; bottom: 0; width:100%; text-align: center">Result of query 2</p></div>

<?php  include_once 'conn.php';
$query="SELECT  bill_date,bill_id,total_amount,bill_status
FROM billing_amt GROUP BY bill_status
HAVING total_amount>1;";
//$query = "SELECT MODEL_ID, MAKE, MODEL_YEAR, SUM(WEEKLY_PRICE) AS weekly_fares, SUM(DAILY_PRICE) AS daily_fares
            //FROM model m
            //JOIN car_class c
            ///ON c.CLASS_TYPE = m.CLASS_TYPE
            //group by 1
            //HAVING weekly_fares > 600
            //ORDER BY daily_fares;"
echo "<b>"."Group by Query:"."</b><br>";
print("Print bill,date,bill_id,total_amount,bill_status where total_amount>1 and is grouped by bill_status");
print("SELECT  bill_date,bill_id,total_amount,bill_status
FROM billing_amt GROUP BY bill_status
HAVING total_amount>1;");
         print("<br><br>");
         $result = mysqli_query($conn, $query);
         $num_supp_name = mysqli_num_rows($result);
         echo "<b>"."Query Result:"."</b><br><br>";
         ?>
         <table>
         <tr>
         <th >bill_date &nbsp </th>
         <th align="left">&nbsp bill_id &nbsp </th>
         <th align="left">&nbsp total_amount &nbsp </th>
         <th align="left">&nbsp bill_status &nbsp </th>
         <!--<th align="left">&nbsp bill_status &nbsp </th>-->
         </tr>
         <?php
         
         while ($row = mysqli_fetch_array($result)) {
         
         echo "<tr>";
         echo "<td>  &nbsp &nbsp ".$row[0]."</td>";
         echo "<td > &nbsp ".$row[1]."</td>";
         echo "<td > &nbsp ".$row[2]."</td>";
         echo "<td > &nbsp ".$row[3]."</td>";
         //echo "<td > &nbsp ".$row[4]."</td>";
         ?>
         
         <?php
         echo "</tr>";
         }
         ?>
         
          </table>
<BR>
<br>
          <div id="column4">
        <a class="nav-link" rel="nofollow" href = "index.php" target="_blank">LOGOUT</a>
        </div>
         </body>
         </html>