<?php
# Get methods
$activationCode = $_GET['code'];
$email = $_GET['email'];

$conn  = include 'connect.php';
$sql = "SELECT * FROM users WHERE email = '$email' AND activation_code = '$activationCode'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $updateSql = "UPDATE users SET activate = true WHERE email = '$email' AND activation_code = '$activationCode'";
    $updateResult = $conn->query($updateSql);

    if ($updateResult) {
        $info =  "Activation successful!";
    } else {
        $info =  "Activation failed!";
    }
} else {
    $info =  "Invalid activation code!";
}
$conn->close();
header("Location: ../../information.php?message=$info");
?>
