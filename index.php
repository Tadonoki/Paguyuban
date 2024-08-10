<html>
    <head>
    <link rel="stylesheet" type="text/css" href="style.css">
    </head>
<body>
    

<?php 
session_start(); 
 
 
$users = [ 
    'akun1' => 'password1', 
    'akun2' => 'password2', 
    
]; 
 
if ($_SERVER['REQUEST_METHOD'] === 'POST') { 
    $username = $_POST['username']; 
    $password = $_POST['password']; 
 
    if (array_key_exists($username, $users) && $users[$username] === $password) { 
        $_SESSION['username'] = $username; 
        header("Location: home.php"); 
        exit(); 
    } else { 
        $error = "Username atau Password salah."; 
    } 
} 
?> 
<style> 
    form { 
        width: 300px; 
        margin: 20px auto; 
        text-align: center; 
    } 
</style> 
 
<h2>Silakan Login</h2>
<form action="" method="POST"> 
    <label for="username">Username</label> 
    <input type="text" id="username" name="username" required><br><br> 
     
    <label for="password">Password</label> 
    <input type="password" id="password" name="password" required><br><br> 
     
    <input type="submit" value="Login"> 
</form> 
 
<?php if (isset($error)) { ?> 
    <p><?php echo $error; ?></p> 
<?php } 
 
?>
</body>
</html>