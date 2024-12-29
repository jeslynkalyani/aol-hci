<?php
session_start();
if (isset($_POST['submit'])) {
    $_SESSION['registeredName'] = $_POST['name'];
    $_SESSION['registeredAge'] = $_POST['age'];
    $_SESSION['registeredAddress'] = $_POST['address'];
    $_SESSION['registeredEmail'] = $_POST['email'];
    $_SESSION['registeredPassword'] = $_POST['password'];
    header('Location: login.php');
    exit();
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
                Register
            </div>
            <div class="card-body">
                <form action=<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?> method="POST" class="form">
                    <div class="form-group">
                        <label for="name">Name:</label>
                        <input type="text" id="name" name="name" class="form-control" placeholder="Ex: John Doe" required>
                    </div>
                    <div class="form-group">
                        <label for="age">Age:</label>
                        <input type="number" id="age" name="age" class="form-control" placeholder="Input your age" required>
                    </div>
                    <div class="form-group">
                        <label for="address">Address:</label>
                        <input type="text" id="address" name="address" class="form-control" placeholder="Your home address" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" id="email" name="email" class="form-control" placeholder="Ex: John@gmail.com" required>
                    </div>
                    <div class="form-group">
                        <label for="password">Password:</label>
                        <input type="password" name="password" id="password" class="form-control" placeholder="Input your password here" required>
                    </div>
                    <button type="submit" class="button" name="submit">Register</button>
                    <p>Already have an account? <a href="/login.php">Login</a></p>
                </form>
            </div>
        </div>
    </div>
</body>
</html>