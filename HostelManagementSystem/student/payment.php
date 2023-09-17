<!DOCTYPE html>

<html lang="en" dir="ltr">

<head>
  <meta charset="UTF-8">

  <link rel="stylesheet" href="..\css\pay.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<script type="text/javascript">

  function goback() {
    window.location.href = "studentdashboard.php";
  }
</script>

<body>

  <div class="container">
    <div class="title">Payments</div>
    <div class="content">
      <form action="https://wa.me/+919832670211">
          <div class="input-box">
            <span class="details">Scan The QR and Pay Now</span>
            <img style="width:300px;" src="../images/qr.jpg" alt="">
          </div>
         
         

        <div class="button">
          <input type="button" value="Go Back" onclick="goback()">
          <input type="submit" name="submit" value="Send Proof">
        </div>
      </form>
      
    </div>
  </div>

</body>

</html>