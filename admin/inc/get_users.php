<?php include('db.php') ?>

<?php

if ($_SERVER['REQUEST_METHOD'] === 'GET') {

    $query = "SELECT * FROM users ORDER BY id DESC";


    $result = $con->query($query);

    if (mysqli_num_rows($result) > 0) {

        while ($row = $result->fetch_assoc()) {

            $fetched_data[] = $row;
        }
    }

    echo json_encode($fetched_data);
}

?>