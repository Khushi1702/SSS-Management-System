<?php include("conn.php"); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Application Management</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>

    <div class="container">
        <h1 class="text-center text-white bg-dark mt-5">PENDING LIST</h1>

        <table class="table table-bordered mt-3">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Name</th>
                    <th scope="col">Date Of Birth</th>
                    <th scope="col">Aadhar Number</th>
                    <th scope="col">State</th>
                    <th scope="col">City</th>
                    <th scope="col">Taluka</th>
                    <th scope="col">Village</th>
                    <th scope="col">Status</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>

            <tbody>
                <?php
                $query = "SELECT * FROM pending_list WHERE status = 'pending' ORDER BY id ASC";
                $result = mysqli_query($conn, $query);
                while ($row = mysqli_fetch_array($result)) { ?>
                    <tr>
                        <th scope="row"><?php echo $row['id']; ?></th>
                        <td><?php echo $row['name']; ?></td>
                        <td><?php echo $row['dob']; ?></td>
                        <td><?php echo $row['aadhar']; ?></td>
                        <td><?php echo $row['state']; ?></td>
                        <td><?php echo $row['city']; ?></td>
                        <td><?php echo $row['taluka']; ?></td>
                        <td><?php echo $row['village']; ?></td>
                        <td><?php echo $row['status']; ?></td>
                        <td>
                            <form action="admin-1.php" method="POST">
                                <input type="hidden" name="id" value="<?php echo $row['id']; ?>" />
                                <input type="submit" name="approve" value="Approve" class="btn btn-success" />
                                <input type="submit" name="delete" value="Delete" class="btn btn-danger" />
                            </form>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>

        <?php
        if (isset($_POST['approve'])) {
            $id = $_POST['id'];
            $select = "UPDATE pending_list SET status = 'approved' WHERE id = '$id' ";
            $resut = mysqli_query($conn, $select);
            header("location:admin-1.php");
        }

        if (isset($_POST['delete'])) {
            $id = $_POST['id'];
            $select = "DELETE FROM pending_list WHERE id = '$id' ";
            $resut = mysqli_query($conn, $select);
            header("location:admin-1.php");
        }
        ?>

        <h1 class="text-center text-white bg-success mt-5">APPROVED LIST</h1>

        <table class="table table-bordered mt-3">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Name</th>
                    <th scope="col">Date Of Birth</th>
                    <th scope="col">Aadhar Number</th>
                    <th scope="col">State</th>
                    <th scope="col">City</th>
                    <th scope="col">Taluka</th>
                    <th scope="col">Village</th>
                    <th scope="col">Status</th>
                </tr>
            </thead>

            <tbody>
                <?php
                $query = "SELECT * FROM pending_list";
                $result = mysqli_query($conn, $query);
                while ($row = mysqli_fetch_array($result)) { ?>
                    <tr>
                        <th scope="row"><?php echo $row['id']; ?></th>
                        <td><?php echo $row['name']; ?></td>
                        <td><?php echo $row['dob']; ?></td>
                        <td><?php echo $row['aadhar']; ?></td>
                        <td><?php echo $row['state']; ?></td>
                        <td><?php echo $row['city']; ?></td>
                        <td><?php echo $row['taluka']; ?></td>
                        <td><?php echo $row['village']; ?></td>
                        <td><?php echo $row['status']; ?></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</body>

</html>