<?php
function logout(){
    /*
Check if the existing user has a session
if it does
destroy the session and redirect to login page
*/
if(isset($_session['email'] = $email;)){
  session_destroy();
  echo "<script> location.href='login.php'</script>";
}
else:
  echo "<script> location.href='login.php'</script>";
}

echo "HANDLE THIS PAGE";
