<?php
$conn = include 'connect.php';

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    if (isset($_GET['record'])) {
        $sql = "SELECT SUM(visit_count) AS total_visits FROM visit_counter";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $totalVisits = $row['total_visits'];

            $response = json_encode($totalVisits);
            header('Content-Type: application/json');
            echo $response;

        } else {
            echo json_encode(null);
        }
    }
    else if (isset($_GET['country'])) {
        $sql = "SELECT * FROM visitors";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            $rows = array(); // Initialize an empty array to store all rows

            while ($row = $result->fetch_assoc()) {
                // Append each row to the $rows array
                $rows[] = $row;
            }

            $response = json_encode($rows);
            header('Content-Type: application/json');
            echo $response;

        } else {
            echo json_encode(null);
        }
    }
} 

$conn->close();

function users_table(){
    session_start();
    // echo $_SESSION['email'];
    if ($_SESSION['email'] !='ruiswang@ucalgary.ca' && $_SESSION['email'] !='shangfeng.huang@ucalgary.ca') {
        return null;
    }
    try {
        $conn = include 'connect.php';
        $sql = "select email, first_name, last_name, organization, supervisor from users";
        $result = $conn->query($sql);
        $data = mysqli_fetch_all($result, MYSQLI_ASSOC);
        $conn->close();
    
        return $data;
    } catch (Exception $e) {
        return null;
    }
}
?>
