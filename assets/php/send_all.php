<?php
$conn  = include 'connect.php';
$sql = "select email from users";

$result = $conn->query($sql);
$sql = "SELECT email, first_name FROM users";
$result = $conn->query($sql);

include 'mail.php';
$mailSubject = "Building3D Tallinn Dataset Released";


if ($result->num_rows > 0) {
    // Fetch and output the data
    while ($row = $result->fetch_assoc()) {
        // echo $row["email"] . "<br>";
        if ($row["email"]) {
            echo $row["email"];
            $mailContent = "<p>Hi $row[first_name],</p> Thanks for using Building3D dataset. <p>On August 3rd, we published the Tallinn dataset, comprising approximately 36,000 building point clouds. 
            You can find further information in the Building3D paper available on the website's <a href='https://building3d.ucalgary.ca/'>homepage</a>.</p> <p>In addition, the issue of mismatched indices in the Entry-level 
            dataset has also been addressed in the latest release.</p> <p> </p> <p>Regards,</p> <p>Building3D Team</p>";
            
            // echo $mailContent;
            // send_email($to=$row["email"], $subject=$mailSubject, $content=$mailContent);
        }
    }
} else {
    echo "No data found.";
}

// Close the connection
$conn->close();
?>
