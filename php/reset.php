<?php
if(isset($_POST['submit'])){
    $email = $_POST['email'];//complete this;
    $newpassword = $_POST['password'];//complete this;

    resetPassword($email, $password);
}

function resetPassword($email, $password){
    //open file and check if the username exist inside
    $csv = "/home/adedoyin/Desktop/userAuth/storage/users,csv";
    $fh = fopen($csv, "r+")
    while(list($email)) = fgetcsv($fh, 1024, ","){
    //if it does, replace the password
    $form_data = array(
      'password' => $password
    );
    fputcsv($file_open, $form_data);


}
echo "HANDLE THIS PAGE";
