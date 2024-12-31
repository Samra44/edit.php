<?php
include("include/_header.php");
include("include/_sidebar.php");
include("include/_navbar.php");
?>

<div class="card">
    <div class="card-body" style="margin-top 100px;"> 
    <h1 class="mb-4">Edit Data</h1>
    <?php
    include("include/_connection.php");
    $userid = $_GET['id'];
    $sql = "SELECT * FROM `users` WHERE user_id ={$userid}";
    $result = mysqli_query($conn, $sql) or die ("Query Unscessful.");

    if(mysqli_num_rows($result)){
        while($row = mysqli_fetch_assoc($result)){
    }
}
      
    ?>
   <form action="update users.php" methode="post">
    <div class="mb-3">
        <label for="exampleInputEmail" class="form-lable">Username</label>
        <input type="hidden" name="id" value="<?php echo $row['user_id']; ?>" class="form-control" id="exampleInputEmail" aria-describedby="emailHelp">
        <input type="text" name="name" value="<?php echo $row['user_name']; ?>" class="form-control" id="exampleInputEmail" aria-describedby="emailHelp">
    </div>
    <div class="mb-3">
    <label for="exampleInputEmail" class="form-label">Email Address</label>
    <input type="email" name="email" value="<?php echo $row['user_email']; ?>" class="form-control" id="exampleInputEmail" aria-describedby="emailHelp">
    </div>
    <div>
        <label for="exampleInputEmail" class="form-label">Password</label>
        <input type="password" name="password" value="<?php echo $row['user_password']; ?>" class="form-control" id="exampleInputPassword1" >
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
   </form>

    </div>