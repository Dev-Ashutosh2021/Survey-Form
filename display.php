<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" />
  <link rel="stylesheet" href="style.css" />
  <title>Display</title>
  <style>
    h2{
      margin: 20px 0;
      color: white;
    }

    h1{
      margin: 50px 0;
      color:red;
    }

  </style>
</head>

<body>
  <div class="box">
    <h1 class="text-center">Form Submitted Successfully</h1>
    <h2 class="text-center">All Registered Data</h2>
    <table class="table table-dark table-striped">
      <thead>
        <tr>
          <th scope="col">ID</th>
          <th scope="col">Name</th>
          <th scope="col">Email</th>
          <th scope="col">Age</th>
          <th scope="col">Role</th>
          <th scope="col">Recommendation</th>
          <th scope="col">Favourite</th>
          <th scope="col">Improvements</th>
          <th scope="col">Comments</th>
        </tr>
      </thead>
      <tbody>

        <?php

        include 'connect.php';

        $sql = "select * from survey";
        $result = mysqli_query($conn, $sql);
        if (!$result) {
          die("Error :" . mysqli_error($conn));
        } else {
          while ($row = mysqli_fetch_assoc($result)) {
            $id = $row['id'];
            $name = $row['name'];
            $email = $row['email'];
            $age = $row['age'];
            $role = $row['role'];
            $recomm = $row['recommend'];
            $fav = $row['fav'];
            $imp = $row['improvement'];
            $comm = $row['comments'];
            echo '<tr>
                <th scope="row">' . $id . '</th>
                <td>' . $name . '</td>
                <td>' . $email . '</td>
                <td>' . $age . '</td>
                <td>' . $role . '</td>
                <td>' . $recomm . '</td>
                <td>' . $fav . '</td>
                <td>' . $imp . '</td>
                <td>' . $comm . '</td>
              </tr>';
          }
        }
        ?>

      </tbody>

    </table>
  </div>
  <script src="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>