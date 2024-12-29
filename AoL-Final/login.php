<?php
session_start();
if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    if (isset($_SESSION['registeredEmail']) && $_SESSION['registeredEmail'] == $email && $_SESSION['registeredPassword'] == $password) {
        $_SESSION['email'] = $_SESSION['registeredEmail'];
        $_SESSION['name'] = $_SESSION['registeredName'];
        $_SESSION['age'] = $_SESSION['registeredAge'];
        $_SESSION['address'] = $_SESSION['registeredAddress'];
        header('Location: home.php');
        exit();
    } else {
        $error = 'Invalid email or password';
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/loginStyle.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css" integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Maption</title>
</head>
<body>
    <div class="center-container">
        <h1 class="brand">
            Maption
        </h1>
        <div class="card">
            <div class="card-title">
                Login
            </div>
            <div class="card-body">
                <?php if(isset($error)):?>
                    <div class="alert" role="alert"><?php echo $error; ?></div>
                <?php endif;?>
                <form action=<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?> method="POST" class="form">
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" id="email" name="email" class="form-control" placeholder="Ex: John@gmail.com" required>
                    </div>
                    <div class="form-group">
                        <label for="password">Password:</label>
                        <input type="password" name="password" id="password" class="form-control" placeholder="Input your password here" required>
                    </div>
                    <button type="submit" class="button" name="submit">Login</button>
                    <p>Don't have an account yet? <a href="/register.php">Register</a></p>
                </form>
            </div>
        </div>
    </div>
</body>
</html>