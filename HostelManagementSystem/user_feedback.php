<!DOCTYPE html>
<html>
<head>
    <title>User Feedback Form</title>
    <style>
        /* Add your CSS styling here */
        .container {
            max-width: 500px;
            margin: 0 auto;
            padding: 30px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }

        input[type="text"],
        input[type="email"],
        textarea {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }

        button[type="submit"] {
            background-color: #007bff;
            color: #fff;
            padding: 8px 15px;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }

        button[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>User Feedback Form</h2>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Database connection setup
            $conn= mysqli_connect('localhost','root','','hms') or die("Connection failed:" .mysqli_connect_error());

            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            // Retrieve user input from the form
            $name = $_POST['nameId'];
            $feedback = $_POST['feedback'];

            // Prepare and execute SQL query
           if($feedback!=null)
           {
            $sql = "INSERT INTO feedback (nameId, feedback) VALUES ('$name', '$feedback')";
            $sql = "INSERT INTO feedback (nameId,feedback) VALUES ('$name','$feedback')";
            if ($conn->query($sql) === TRUE) {
                // Redirect to the confirmation page after successful submission
                header("Location: feedback_confirmation.php");
                exit(); 
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
           }

            $conn->close();
        }
        ?>



            <form action="user_feedback.php" method="POST">            
            <label for="name">Name:</label>
            <input type="text" id="nameId" name="nameId" required>
            <label for="feedback">Feedback:</label>
            <textarea id="feedback" name="feedback" required></textarea>
            <button type="submit">Submit Feedback</button>
        </form>
    </div>
</body>
</html>
