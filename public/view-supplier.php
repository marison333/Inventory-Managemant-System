<?php
session_start();
require_once '../src/inc/session_check.php';
require_once __DIR__ . '/../src/bootstrap.php';
view('header', ['title' => 'View supplier']);

$id = $_GET['id'];
$sql = "SELECT * FROM suppliers WHERE id='$id'";
$result = $con->query($sql);
$row = $result->fetch_assoc();
?>

<h1>View
    <?php echo $row['name']; ?>
</h1>
<a class="edit-data" href="editCustomers.php?id=<?php echo $id; ?>">Edit</a>
<div class="form-container">
    <form action="">
        <label for="">Name:</label>
        <input type="text" value="<?php echo $row['name']; ?>" disabled>
        <label for="">Phone number:</label>
        <input type="text" value="<?php echo $row['number']; ?>" disabled>
        <label for="">Email:</label>
        <input type="text" value="<?php echo $row['email']; ?>" disabled>
        <label for="">Street:</label>
        <input type="text" value="<?php echo $row['street']; ?>" disabled>
        <label for="">Postal code:</label>
        <input type="text" value="<?php echo $row['postcode']; ?>" disabled>
        <label for="">City:</label>
        <input type="text" value="<?php echo $row['city']; ?>" disabled>
        <label for="">Country:</label>
        <input type="text" value="<?php echo $row['country']; ?>" disabled>
        <a class="cancel-button" href="products.php">Back</a>
    </form>
</div>
<?php view('footer') ?>
