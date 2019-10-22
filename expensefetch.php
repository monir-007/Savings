<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>

    <style>
    table {
        width: 100%;
        border-collapse: collapse;
    }

    table, td, th {
        border: 1px solid black;
        padding: 5px;
    }

    th {
      text-align: left;
      background-color: 	#FFA500;
    }
    </style>

  </head>
  <body>
    <?php
    require_once 'connection.php';

    	$p=$_GET["p"];

    		$result2 = mysqli_query($conn,"SELECT * FROM expense WHERE category LIKE '$p%'" );
        echo "<table>
        <tr>
        <th>Date</th>
        <th>Category</th>
        <th>Amount</th>
        </tr>";

    	 while($row = mysqli_fetch_array($result2))
    		{

          echo "<tr>";
          echo "<td>" . $row['date'] . "</td>";
          echo "<td>" . $row['category'] . "</td>";
          echo "<td>" . $row['amount'] . "</td>";
          echo "</tr>";
    		}

        echo "</table>";
        mysqli_close($conn);
     ?>
  </body>
</html>
