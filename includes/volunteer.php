<?php include "db.php"; ?>
<?php 

if(isset($_POST['submit'])) {

    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];

    $query = "INSERT INTO volunteer (vol_name, vol_email, vol_phone) VALUES ('{$name}', '{$email}', {$phone})";
    $result = mysqli_query($connection, $query);
    if(!$result) {
        die("Query Failed " . mysqli_error($connection));
    }

}

?>