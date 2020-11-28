    <?php
    $student_id =  $_SESSION['student_id'];
    $query = "SELECT * FROM activity_table WHERE student_id = $student_id ORDER BY deadline ASC;";
    $result = mysqli_query($db, $query);
    $data = array();
    while ($rowws = mysqli_fetch_assoc($result)) {
        $data[] = $rowws;
    }
    ?>
    <?php foreach ($data as $key=>$row) : ?>
        <tr>
            <td><?php echo $row["course_name"]; ?></td>
            <td><?php echo $row["category"]; ?></td>
            <td><?php echo $row["topics"]; ?></td>
            <td><?php echo $row["deadline"]; ?></td>
            <td><a class="nochangeblue"  href="<?php echo $row["percentage_completed"]; ?>" target="_blank"><?php echo $row["percentage_completed"]; ?></a></td>
            <?php $activity_id = $row["activity_id"]; ?>
            <td><form method="POST" action="home.php">
                <p><button class="newbtn" name="delete" type="submit" value="<?php echo $activity_id; ?>">Delete</button></p>
            </form></td>
        </tr>
    <?php endforeach ?>