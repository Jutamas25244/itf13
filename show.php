<?php
$conn = mysqli_init();
mysqli_real_connect($conn, 'labitf13.mysql.database.azure.com', 'Jutamas@labitf13', 'DMJbvc45', 'itflab', 3306);
if (mysqli_connect_errno($conn)){
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}
$res = mysqli_query($conn, 'SELECT * FROM guestbook');
?>

<html>

<head>
  <title>ITF Lab</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <div class="page-show">
    <div class="container-fluid main-container">
      <div class="row">
        <div class="col">
          <table class="table">
            <thead>
              <tr>
                <th width="20%">
                  <div align="center" class="text">Name</div>
                </th>
                <th>
                  <div align="center" class="text">Comment </div>
                </th>
                <th width="30%">
                  <div align="center" class="text">Link </div>
                </th>
              </tr>
            </thead>
            <tbody>
              <?php while($Result = mysqli_fetch_array($res)) : ?>
              <tr>
                <td><?php echo $Result['Name'];?></div>
                </td>
                <td><?php echo $Result['Comment'];?></td>
                <td><?php echo $Result['Link'];?></td>
              </tr>
              <?php endwhile; ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
<?php
mysqli_close($conn);
?>