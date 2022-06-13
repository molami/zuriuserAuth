<?php
if(isset($_POST['submit'])){
    $email = $_POST['email'];//finish this line
    $password = $_POST['password'];//finish this

loginUser($email, $password);

}

function loginUser($email, $password){
    /*
        Finish this function to check if username and password
    from file match that which is passed from the form
    */
    $csv = "/home/adedoyin/Desktop/userAuth/storage/users,csv";
    $fh = fopen($csv, "r")
    while(list($email,$password)) = fgetcsv($fh, 1024, ","){
      $_session['email'] = $email;
      echo "OKAY"
}

echo "HANDLE THIS PAGE";


}
