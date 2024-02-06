<?php

include 'connect.php';

?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"
        integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
</head>

<body>
    <div class="container-fluid">
        <form method="post">
            <div class="container-fluid my-5">
                <div class="input-group">
                    <div class="input-group col-md-3 col-sm-6 col-xs-12 text-left">
                        <input type="text" class="form-control" name="search" placeholder="Search Data">
                        <button class="btn btn-dark" name="submit"><i class="fas fa-search"
                                aria-hidden="true"></i></button>
                    </div>
                    <button class="btn btn-primary"><a href="user.php" class="text-light">Add User</a></button>
                </div>
                <table class="my-5 table table-hover dt-responsive dataTable no-footer dtr-inline">

                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">name</th>
                            <th scope="col">email</th>
                            <th scope="col">mobile</th>
                            <th scope="col">password</th>
                            <th scope="col">operation</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php

                        if (isset($_POST['submit'])) {
                            $search = $_POST['search'];
                            $sql = "select * from `crud` where id like '%$search%' or name like '%$search%'";
                            $result = mysqli_query($con, $sql);
                            while ($row = mysqli_fetch_array($result)) {
                                $id = $row["id"];
                                $name = $row["name"];
                                $email = $row["email"];
                                $mobile = $row["mobile"];
                                $password = $row["password"];
                                echo '<tr>
                    <td scope="row">' . $id . '</td>
                    <td scope="row">' . $name . '</td>
                    <td scope="row">' . $email . '</td>
                    <td scope="row">' . $mobile . '</td>
                    <td scope="row">' . $password . '</td>
                    <td><button class="btn btn-primary col-md-5 col-sm-12 col-xs-12">
                    <a href="update.php? updateid=' . $id . '" 
                    class="text-light">update</a></button> 
                    <button class="btn btn-danger col-md-5 col-sm-12 col-xs-12">
                    <a href="delete.php? deleteid=' . $id . '"
                    class="text-light">delete.</a></button></td>
                    </tr>';
                            }
                        } else {
                            $sql = "select * from `crud`";
                            $result = mysqli_query($con, $sql);
                            while ($row = mysqli_fetch_array($result)) {
                                $id = $row["id"];
                                $name = $row["name"];
                                $email = $row["email"];
                                $mobile = $row["mobile"];
                                $password = $row["password"];
                                echo '<tr>
                    <td scope="row">' . $id . '</td>
                    <td scope="row">' . $name . '</td>
                    <td scope="row">' . $email . '</td>
                    <td scope="row">' . $mobile . '</td>
                    <td scope="row">' . $password . '</td>
                    <td><button class="btn btn-primary col-md-5 col-sm-12 col-xs-12">
                    <a href="update.php? updateid=' . $id . '" 
                    class="text-light">update</a></button> 
                    <button class="btn btn-danger col-md-5 col-sm-12 col-xs-12">
                    <a href="delete.php? deleteid=' . $id . '"
                    class="text-light">delete.</a></button></td>
                    </tr>';
                            }
                        }



                        ?>
                    </tbody>
                </table>

            </div>
        </form>
    </div>
</body>

</html>