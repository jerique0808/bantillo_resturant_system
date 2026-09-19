<?php
include 'db.php';
$id = $_GET['id'];
$user = $conn->query("SELECT * FROM users WHERE id=$id")->fetch_assoc();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $conn->query("UPDATE users SET name='$name', email='$email' WHERE id=$id");
    header("Location: index.php");
}
?>
<h2>Edit User</h2>
<form method="POST">
    Name: <input type="text" name="name" value="<?= $user['name'] ?>" required><br><br>
    Email: <input type="email" name="email" value="<?= $user['email'] ?>" required><br><br>
    <button type="submit">Update User</button>
</form>