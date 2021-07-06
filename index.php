
<html>
    <head>
        <meta charset="UTF-8">
        <title>Baze de date </title>
    </head>
    <body>
        <?php
            //include connection file
            include 'connection.php';
            $sql='SELECT * FROM florii';
            $query=mysqli_query($con,$sql) or die(mysqli_error($con));
        ?>
        <table width="60%" cellpadding="10" cellspace="10">
            <tr>
                <td><strong>Nume</strong></td>
                <td><strong>Culoare</strong></td>
                <td><strong>Marime</strong></td>
                <td><strong>Pret</strong></td>
                <!--Prima metoda
                <td><strong>Actions</strong></td>-->
                <!--A doua modificare, dupa inserare-->
                <td colspan="3" align="center"><strong>Actions</strong></td>
            </tr>
            <?php while($row=mysqli_fetch_array($query)){ ?>
            <tr>
                <!--<td><?php echo $row["nume"];?></td>-->
                <td><?php echo "<a href=\"view.php?id=".$row['id']."\">".$row["nume"]."</a>";?></td>
                <td><?php echo $row["culoare"];?></td>
                <td><?php echo $row["marime"];?></td>
                <td><?php echo $row["pret"];?></td>
                <!--Prima metoda
                <td><?php echo "<a href=\"view.php?id=".$row['id']."\">View</a>"?></td>-->
                <!-- A doua modificare, dupa inserare -->
                <td><?php echo "
                        <a href=\"view.php?id=".$row['id']."\">View</a>
                        <a href=\"edit.php?id=".$row['id']."\">Edit</a>
                        <a href=\"delete.php?id=".$row['id']."\"onclick=\"return confirm('Are you sure?')\">Delete</a>
                        "?></td>
            </tr>
            <?php } ?>
        </table>
    </body>
</html>
