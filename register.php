<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="css/form.css">
    <link href="css/font-awesome.css" rel="stylesheet">
    <!-- //font-awesome icons -->
    <!-- js -->
    
    <!-- //js -->
</head>

<body>
    <div class="form">
        <h2>Signup form</h2>
        <p>Signup now</p>
        <form action="" enctype="multipart/form-data">
            <div class="error-text">Error</div>
            <div class="grid-details">
                <div class="input">
                    <label for="">First Name</label>
                    <input type="text" name="fname" id="" placeholder="First Name: " required>
                </div>
                <div class="input">
                    <label for="">Last Name</label>
                    <input type="text" name="lname" id="" placeholder="Last Name: " required>
                </div>
            </div>
            <div class="input">
                <label for="">Email</label>
                <input type="email" name="email" id="" placeholder="Enter Your Email: " required>
            </div>
            <div class="input">
                <label for="">Phone</label>
                <input type="phone" name="phone" id="" placeholder="Phone Number: " required pattern="[0-9]{11}"
                    oninvalid="this.setCustomValidity('Enter 11 Digits Number')" oninput="this.setCustomValidity('')">
            </div>
            <div class="grid-details">
                <div class="input">
                    <label for="">Password</label>
                    <input type="password" name="pass" id="" placeholder="Enter Password: " required>
                </div>
                <div class="input">
                    <label for="">Confirm Password</label>
                    <input type="password" name="cpass" id="" placeholder="Confirm Password: " required>
                </div>
            </div>
            <div class="profile-img">
                <div class="file-upload">
                    <input type="file" name="image" id="image-preview"  class="file-input" required oninvalid="this.setCustomValidity('Select a Profile Image')"oninput="this.setCustomValidity('')" accept=".png, .jpg, .jpeg, .JPG, .PNG, .JPEG">
                    <i class="fa fa-user" aria-hidden="true"></i>
                </div>
            </div>
            <div class="submit">
                <input type="submit" value="Signup Now" class="button" name="submit">
            </div>
        </form>
        <div class="link">Already signed up? <a href="login.php">Login Now</a></div>
    </div>
    <script src="js/register.js"></script>
    <script src="js/jquery-3.7.1.min.js"></script>
</body>

</html>