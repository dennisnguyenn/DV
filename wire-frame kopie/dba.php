<?php
/**
 * Created by PhpStorm.
 * User: dennis
 * Date: 24-09-18
 * Time: 10:34
 */
?>

<?php
session_start();
$host = "localhost";
$username = "root";
$password = "";
$database = "loginsystem";
$message = "";

try {
    $connect = new PDO ("mysql:host=$host;dbname=$database, $username, $password");
    $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    if (isset($_POST["login"])){
        if (empty($_POST['username']) || empty($_POST["password"])) {
            $message = '<label> All field are required </label>';
        }
    }
    else {
        $query = "SELECT * FROM users WHERE username = :username AND password = :password";
        $statement = $connect->prepare($query);
        $statement->execute(
            array(
                'username' => $_POST['username'],
                'password' => $_POST ['password']
            )
        );
        $count = $statement->rowCount();
        if ($count > 0) {
            $_SESSION["username"] = $_POST["username"];
            header("location:index.php");
        }
        else {
            $message = '<label>Wrong Data</label>';
        }
    }
}
catch (PDOException $error){
    $message = $error->getMessage();
}

?>
