<?php
session_start();

include_once 'db.php';

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$password = md5($_POST['pass']); //secure password
$cpassword = md5($_POST['cpass']); //secure password
$Role = 'user';
$verification_status = '0';

//checking field are not empty
if (!empty($fname) && !empty($lname) && !empty($email) && !empty($phone) && !empty($password) && !empty($cpassword)) {
    //if email is valid
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $sql = mysqli_query($conn, "SELECT email FROM users WHERE email ='{$email}'");
        if (mysqli_num_rows($sql) > 0) {
            echo "$email ~ Already Exists";
        }
         else {
            // checking password if it matches
            if ($password == $cpassword) {
                //lets check user upload file
                if (isset($_FILES['image'])) {
                    $img_name = $_FILES['image']['name'];  //getting image name
                    $img_typ = $_FILES['image']['type'];  //getting image type
                    $tmp_name = $_FILES['image']['tmp_name'];
                    // $img_explode = explode('.',$img_name);
                    // $img_extension = end($img_explode);
                    // $extension = ['png','jpeg','jpg']; // these are the accepted extensions


                    // if (in_array($img_extension, $extension) === true) {
                        $time = time();
                        $newimagename = $time . $img_name; //creating a unique name for image
                        if (move_uploaded_file($tmp_name, "../imag/" . $newimagename)) //set uploaded file store folder
                        {
                            $random_id = rand(time(), 10000000); //create user unique id
                            $otp = mt_rand(1111, 9999); //creating 4 digits otp

                            //inserting data into the table
                            $sql2 = mysqli_query($conn, "INSERT INTO users (`unique_id`, `fname`, `lname`, `email`, `phone`, `password`, `image`, `otp`, `verification_status`, `Role`) VALUES({$random_id}, '{$fname}', '{$lname}', '{$email}', '{$phone}', '{$password}', '{$newimagename}', '{$otp}', '{$verification_status}', '{$Role}')");
                            if ($sql2) {
                               echo "success";
                            } 
                            else {
                                echo "Something went wrong";
                            }
                        }
                     else {
                        echo "Please Select a Profile Image - JPG, PNG, JPEG NOT MORE THAN 4MB";
                    }
                } 
                else {
                    echo 'Please Select a Profile Image';
                }
            } else {
                echo "Confirm Password Don't match ";
            }
            
        }
        
    } 
    else {
        echo "$email ~ This is not a valid email";
    }
} 
else {
    echo "All inputs Fields are Required.";
}

?>
