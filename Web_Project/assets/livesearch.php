<?php
include("database/db_con.php");
echo "Fuck world";

if (isset($_POST['str'])){
    $input = $_POST['str'];
    $qur = "SELECT * FROM signUp_info WHERE Fname LIKE '{$input}%'";

    $res = mysqli_query($con, $qur);

    if (mysqli_num_rows($res) > 0){
        ?>
            <table>
                <thead>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Grades</th>
                </thead>
                <tbody>
                <?php
                    while($row = mysqli_fetch_assoc($res)){
                    $id = $row['id'];
                    $name = $row['Fname'];
                    $email = $row['email'];
                    // $id = $row['id'];
                        ?>
                        <tr>
                            <td><?php echo $id;?></td>
                            <td><?php echo $name;?></td>
                            <td><?php echo $email;?></td>
                        </tr>
                        <?php
                    }
                ?>
                </tbody>
            </table>

        <?php

    }else{
        echo "<h6>No Data Found</h6>";
    }
}
?>