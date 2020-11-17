<?php
require_once("database.php");

$id = $_GET['id'];
$statement = "SELECT * FROM guestbook WHERE id = '{$id}'";
$query = $db->query( $statement );
$result = $query->fetch_array();
?>
<!DOCTYPE html>
<html>
<head>
  <title>Comment Form</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <div class="page-form">
    <div class="container-fluid main-container">
      <div class="row">
        <div class="col">
          <form action="update.php" method="post" id="CommentForm">
            <input type="hidden" name="id" value="<?=$id;?>">
            <div class="form-group">
              <label for="exampleFormControlInput1" class="text">Name:</label>
              <input type="text" class="form-control" name="name" id="exampleFormControlInput1" placeholder="Name" value="<?=$result['Name'];?>">
            </div>

            <div class="form-group">
              <label for="exampleFormControlTextarea1" class="text">Comment:</label>
              <textarea class="form-control" name="comment" id="exampleFormControlTextarea1" rows="3" placeholder="Comment"><?=$result['Comment'];?></textarea>
            </div>

            <div class="text-right">
              <button type="submit" class="btn btn-info ml-auto">Submit</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

</body>

</html>