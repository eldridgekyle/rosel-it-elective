<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col">
                <form action="register_process.php" method="post">
                    <div class="mb-3">
                        <label class="Header">Registration</label>

                        First Name :
                        <input type="text" name="fname" class="form-control"><br>
                        Last Name :
                        <input type="text" name="lname" class="form-control"><br>
                        E-mail :
                        <input type="text" name="email" class="form-control"><br>

                        Password :
                        <div class="input-group mb-3">
                            <input type="password" name="password" id="password" class="form-control">
                            <button class="btn btn-eye" type="button" id="togglePassword" aria-label="Show password">
                                <i class="bi bi-eye" aria-hidden="true"></i>
                            </button>
                        </div>

                        Confirm Password :
                        <div class="input-group mb-3">
                            <input type="password" name="cpassword" id="cpassword" class="form-control">
                            <button class="btn btn-eye" type="button" id="toggleCPassword" aria-label="Show password">
                                <i class="bi bi-eye" aria-hidden="true"></i>
                            </button>
                        </div>

                        Birthday :
                        <input type="date" name="birthday" class="form-control"><br>
                        Gender : <br><br>
                        <input type="radio" id="male" name="gender" value="Male">
                        Male
                        <input type="radio" id="female" name="gender" value="Female">
                        Female 
                        <br><br>

                        Course :<br>
                        <select name="course" class="form-select">
                            <option value="Bachelor of Information Technology">BSIT</option>
                            <option value="Bachelor of Education">BSED</option>
                            <option value="Bachelor of Science in Nursing">BSN</option>
                            <option value="Bachelor of Science in Accountancy">BSA</option>
                            <option value="Bachelor of Science in Business Administration">BSBA</option>
                        </select>
                        <br>
                        <input type="submit">
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>

        function bindPasswordToggle(buttonId, inputId) {
            const btn = document.getElementById(buttonId);
            const input = document.getElementById(inputId);
            const icon = btn.querySelector("i");

            btn.addEventListener("click", function () {
                const isPassword = input.type === "password";
                input.type = isPassword ? "text" : "password";
                icon.classList.toggle("bi-eye");
                icon.classList.toggle("bi-eye-slash");
            });
        }

        bindPasswordToggle("togglePassword", "password");
        bindPasswordToggle("toggleCPassword", "cpassword");
    </script>
</body>
</html>
