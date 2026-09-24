<?php
$regex = "/^(?=.*[a-z])(?=.*[0-9])[a-z0-9]{5,20}$/"; // regex
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$password = $_POST['password'];
$confirmationPassword = $_POST['cpassword'];
$birthday = $_POST['birthday'];
$gender = $_POST['gender'] ?? '';
$course = $_POST['course'];
$sanitizePassword = sanitizeInput($password);
$sanitizeConfirmationPassword = sanitizeInput($confirmationPassword);

function sanitizeInput($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

if(empty($fname) || empty($lname) || empty($email) || empty($password) || empty($confirmationPassword) || empty($birthday) || empty($gender) || empty($course)) {
    $title = "Missing Required Fields !";
    $message = "Please fill in all the required fields.";
    $alertClass = "alert-danger";
} else {
if ($sanitizePassword == $sanitizeConfirmationPassword) {
    if (!preg_match($regex, $sanitizePassword)) {
        $title = "Password complexity requirements does not meet.";
        $message = "Password must contain: Only lowercase, atleast (1) number, no special character, and no white spaces.";
        $alertClass = "alert-danger";
    } else {
        $title = "Password Accepted !";
        $message = "Full Name: " . htmlspecialchars($fname . ' ' . $lname) .
            "<br>Email : " . htmlspecialchars($email) .
            "<br>Birthday : " . htmlspecialchars($birthday) .
            "<br>Gender : " . htmlspecialchars($gender) .
            "<br>Course : " . htmlspecialchars($course);
        $alertClass = "alert-success";
    }
} else {
    $title = "Wrong Confirmation Password !";
    $message = "The passwords you entered do not match.";
    $alertClass = "alert-danger";
}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <title>Registration Result</title>
</head>
<body>
  
<div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6">
                <div class="card shadow text-center">
                    <div class="card-body p-4">
                        <h2 class="h4 mb-3 text-primary"><?php echo $title; ?></h2>
                        <div class="alert <?php echo $alertClass; ?>">
                            <p class="mb-0"><?php echo $message; ?></p>
                        </div>
                        <a href="register.php" class="btn btn-primary">Back to Register</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
   
</body>
</html>
