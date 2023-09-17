<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<script type="text/javascript">
    function goback() {
        window.location.href = "studentdashboard.php";
    }
</script>
<link rel="stylesheet" href="..\css\applyleave.css">

<?php
session_start();
$regno = $_SESSION['regno'];

require_once('../dbConnect.php');

$sql = "SELECT name, block, roomno FROM users WHERE regno='$regno';";
$query1 = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($query1);

$name = $row['name'];
$block = $row['block'];
$roomno = $row['roomno'];

$errmsg = "";
$sucmsg = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['complain'])) {
        $complain = $_POST['complain'];

        $sqlPendingCheck = "SELECT * FROM complainapplications WHERE regno='$regno' AND status='Pending'";
        $resultPendingCheck = mysqli_query($conn, $sqlPendingCheck);
        $count = mysqli_num_rows($resultPendingCheck);

        if ($count == 0) {
            $insertStmt = mysqli_prepare($conn, "INSERT INTO `complainapplications` (`name`, `regno`, `block`, `roomno`, `complain`, `status`) VALUES (?, ?, ?, ?, ?, 'Pending')");
            mysqli_stmt_bind_param($insertStmt, "sssss", $name, $regno, $block, $roomno, $complain);

            if (mysqli_stmt_execute($insertStmt)) {
                // $sucmsg = '*Entry successful';
                $errmsg = "";

                
            } else {
                // $errmsg = "*Error occurred: " . mysqli_stmt_error($insertStmt);
                $sucmsg = "";
            }            

            mysqli_stmt_close($insertStmt);
        } else {
             require_once('../dbConnect.php');
            $sql = "INSERT INTO `complainapplications` (`name`,`regno`,`block`,`roomno`,`complain`,`status`)VALUES ('$name','$regno','$block','$roomno','$complain','Pending')";
            $query = mysqli_query($conn, $sql);
            if ($query) {
                $sucmsg = '*Entry successful';
            } else {
                $errmsg = "*Error occoured";
            }
        }
    }
}
?>

<body>
    <div class="container">
        <div class="title">Complain Box</div>
        <div class="content">
            <form action="complain.php" method="post">
                <div class="user-details">
                <div class="input-box">
                        <span class="details">Full Name</span>
                        <input type="text" placeholder="Enter your name" pattern="[a-z A-Z]*"
                            value="<?php echo $name; ?>" required disabled>
                    </div>
                    <div class="input-box">
                        <span class="details">Reg No</span>
                        <input type="text" placeholder="Enter your regno" value="<?php echo $regno; ?>" disabled
                            required>
                    </div>
                    <div class="input-box">
                        <span class="details">Block Name</span>
                        <input type="text" placeholder="Enter your block name" value="<?php echo $block; ?>" disabled
                            required>
                    </div>
                    <div class="input-box">
                        <span class="details">Room no</span>
                        <input type="number" placeholder="Enter your room " value="<?php echo $roomno; ?>" disabled
                            required>
                    </div>                    
                    <div class="input-box">
                        <span class="details">Complain</span>
                        <input name="complain" id="complain" placeholder="Complain" required></input>
                    </div>

                </div>
                <div class="button">
                    <input type="button" value="Go Back" onclick="goback()">
                    <input type="submit" name="submit" style="margin-left: 85px;">
                </div>
            </form>
            <span style="color: red;"><?php echo $errmsg; ?></span>
            <span style="color: green;"><?php echo $sucmsg; ?></span>
        </div>
    </div>
</body>
</html>
