<?php include 'db.php'; ?>
<h2>Login</h2>
<form method="post">
  Username: <input name="username"><br>
  Password: <input name="password" type="password"><br>
  <input type="submit" value="Login">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $u = $_POST['username'];
    $p = $_POST['password'];
    $res = $conn->query("SELECT password FROM users WHERE username='$u'");
    if ($res->num_rows > 0) {
        $row = $res->fetch_assoc();
        if (password_verify($p, $row['password'])) {
            echo "Login successful!";
        } else {
            echo "Invalid password.";
        }
    } else {
        echo "User not found.";
    }
}
?>

