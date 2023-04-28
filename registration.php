<?PHP

include_once 'conn.php';

session_start();
header('location:login.php');
$con = mysqli_connect('localhost', 'root');
mysqli_select_db($con, 'termproj');
$username = $_POST['username'];
$name = $_POST['name'];
$address = $_POST['address'];
$Licenseno = $_POST['Licenseno'];
$password = $_POST['password'];
$s = " select * from customer where username= '$username'";
$result = mysqli_query($con, $s);
$num = mysqli_num_rows($result);

if($num==1){
    echo " username already taken";

}else{
    $reg = "insert into customer(username,name,address,licenseno , passowrd) values(''$username',$name','$address','$Licenseno','$password')";
    mysqli_query($con, $reg);
    echo " registration Successful";

}


?>