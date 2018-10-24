<?php 
include "koneksi.php";
 ?>

<html>
    <head>
        <title></title>
    </head>
    <body>
        <table align="center" border="1" width="70%">
        <tr>
            <td colspan="6">
                <h3><center>DATA SISWA</center></h3>
                <a href="inputan.php"><center>Tambah</center></a>
            </td>
        </tr>
        
            <tr>
                <td bgcolor="#D6D8DC" align="center">Id</td>
                <td bgcolor="#D6D8DC" align="center">Username</td>
                <td bgcolor="#D6D8DC" align="center">Level</td>
                <td bgcolor="#D6D8DC" align="center">Fullname</td>
            </tr>
            <?php 
                
                $qry = mysqli_query($conn,"SELECT * FROM users");
                while($conn = mysqli_fetch_array($qry)){
             ?>
           
                 <tr>
                    <td><?php echo $conn["id"] ?></td>
                    <td><?php echo $conn["username"] ?></td>
                    <td><?php echo $conn["level"] ?></td>
                    <td><?php echo $conn["fullname"] ?></td>
                 </tr>
                <?php 
                    }
                ?>
        </table>
    </body>
</html>