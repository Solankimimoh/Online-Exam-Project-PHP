<?php
/**
 * Created by PhpStorm.
 * User: solan
 * Date: 05-Feb-19
 * Time: 5:55 PM
 */

session_start();
require "include/Database.php";

$db = new Database();

if (isset($_REQUEST['sbmt'])) {

    $email = $_REQUEST['email'];
    $password = $_REQUEST['password'];

    if ($email == "" || $password == "") {
        ?>
        <script>
            alert("Please enter the details");
            window.location.href = "index.php";
        </script>
        <?php
    } else {

        $selectUser = "SELECT * FROM `faculty` WHERE `email`=? AND `password`=?";

        // prepare and bind
        $stmt = $db->db_connect()->prepare($selectUser);
        $stmt->bind_param("ss", $email, $password);

        $rowCount = $stmt->execute();

        $rowCount = $stmt->fetch();

        if ($rowCount > 0) {
            $_SESSION['username'] = $email;
            ?>
            <script>
                alert("Login SuccessFully");
                window.location.href = "index.php";
            </script>
            <?php
        } else {
            ?>
            <script>
                alert("Invalid Email and Password ");
                window.location.href = "index.php";
            </script>
            <?php
        }
    }

} else {
    ?>
    <script>
        window.location.href = "registration.php";
    </script>
    <?php
}

?>