<?php
session_start();
if (isset($_POST['submit'])) {
    $password = $_POST['password'];
    if (isset($_SESSION['registeredPassword']) && $_SESSION['registeredPassword'] == $_POST['oldPassword']) {
        $_SESSION['registeredPassword'] = $password;
        header('Location: editprofile.php');
        exit();
    } else {
        $error = 'Current password does not match';
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
                        <label for="oldPassword">Current Password:</label>
                        <input type="password" id="oldPassword" name="oldPassword" class="form-control" placeholder="Input current password" required>
                    </div>
                    <div class="form-group">
                        <label for="password">New Password:</label>
                        <input type="password" name="password" id="password" class="form-control" placeholder="Input new password" required>
                    </div>
                    <button type="submit" class="button" name="submit">Change Password</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>