<?php
session_start();
function checkset($value){
    if(isset($value) && !($value == ''))
        return true;
    else
        return false;
}
function bestInput($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
function redirectMessage($message , $url){
    echo $message;
    header( "refresh:2;url=$url" );
}
if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['accept'])){
    $user_id = $_POST['id_needed'];
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "durgak";
    $mysqli = new mysqli($servername, $username, $password, $dbname);
    $query = "UPDATE Main_Details SET active='1' WHERE id=$user_id";
    $mysqli->query($query);
    $mysqli->close();
    header("Refresh:0");
}
if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['reject'])){
    $user_id = $_POST['id_needed'];
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "durgak";
    $mysqli = new mysqli($servername, $username, $password, $dbname);
    $query1 = "DELETE FROM Main_Details WHERE id=$user_id";
    $query2 = "DELETE FROM address WHERE user_id=$user_id";
    $query3 = "DELETE FROM Additional_details WHERE user_id=$user_id";
    $mysqli->query($query1);
    $mysqli->query($query2);
    $mysqli->query($query3);
    $mysqli->close();
    header("Refresh:0");
}
$username = 'manager';
$password = 'manager';
if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['managerLogin']) &&  checkset($_POST['username']) && checkset($_POST['password'])){
    if(bestInput($_POST['username']) == $username && bestInput($_POST['password']) == $password){
        $_SESSION['login'] = "YesLoggedIn";
    }else{
        redirectMessage("Incorrect Username/Password Please Re-enter", "manager.php");
    }
}

if(isset($_SESSION['login']) || $_SESSION['login'] == "YesLoggedIn"){
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "durgak";
    $mysqli = new mysqli($servername, $username, $password, $dbname);
    /* check connection */
    if (mysqli_connect_errno()) {
        printf("Connect failed: %s\n", mysqli_connect_error());
        exit();
    }
    function printAllDetailsOfID($id){
        global $mysqli;
        $query = "SELECT full_name, marital_status, Account_Type, customer_type, occupation_type FROM Main_Details WHERE id = $id";
        if ($result = $mysqli->query($query)) {
            /* fetch object array */
            while ($item = $result->fetch_row()) {
                echo "</br>Full Name :".$item[0]. "</br>";
                echo "Marital Status :".$item[1]."</br>";
                echo "Account Type :".$item[2]."</br>";
                echo "Customer Name :".$item[3]."</br>";
                echo "Occupation Type :".$item[4]."</br>";
            }
            /* close connection */
            $result->close();
        }
        $query = "SELECT email, phone, pan_no, adhar_no FROM Additional_details WHERE user_id = $id";
        if ($result = $mysqli->query($query)) {
            /* fetch object array */
            while ($item = $result->fetch_row()) {
                echo "Email :".$item[0]. "</br>";
                echo "Phone No. :".$item[1]."</br>";
                echo "Pan No :".$item[2]."</br>";
                echo "Adhar No. :".$item[3]."</br> </br>";
            }
            echo '<form method="POST" action="activateUsers.php">';
            echo "<input type='hidden' value= '$id' name='id_needed'>";
            echo "<input type = 'submit' name='reject' value='Reject'>";
            echo "        ";
            echo "<input type = 'submit' name='accept' value='Accept'>";
            echo "</form>";
            echo "<hr>";
            /* close connection */
            $result->close();
        }

    }
    $query = "SELECT id FROM Main_Details WHERE active = 0";
    if ($result = $mysqli->query($query)) {
        /* fetch object array */
        while ($item = $result->fetch_row()) {
            printAllDetailsOfID($item[0]);
        }
        /* close connection */
        $result->close();
        $mysqli->close();
    }
}else{
        redirectMessage("Please Fill All The Feilds In The Form", "manager.php");
}

?>
    <a href="?click=1" class="btn">Logout</a>
<?php
function doSomething(){
    session_destroy();
    header("Location: manager.php");
}
if(isset($_GET['click'])){
    doSomething();
}
