<?php
require_once( 'database.php' );

$res = mysqli_query( $db, 'SELECT * FROM guestbook' );
?>
<html>

<head>
  <title>WEB ที่สามารถรองรับ CRUD</title>
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
                  <div align="center" class="text">Comment</div>
                </th>
                <th width="30%">
                  <div align="center" class="text">Action</div>
                </th>
              </tr>
            </thead>
            <tbody>
              <?php while($Result = mysqli_fetch_array($res)) : ?>
              <tr>
                <td>
                    <?php echo $Result['Name'];?></div>
                </td>
                <td><?php echo $Result['Comment'];?></td>
                <td class="text-center">
                    <a href="delete.php?id=<?=$Result['ID'];?>" class="btn btn-secondary">Delete</a>
                    <a href="update-form.php?id=<?=$Result['ID'];?>" class="btn btn-success">Update</a>
                </td>
              </tr>
              <?php endwhile; ?>
            </tbody>
          </table>
        </div>
      </div>
      <div class="row">
        <div class="col text-center">
          <a href="insert-form.php" class="btn btn-danger">Add</a>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
<?php
mysqli_close($db);
?>