<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>Data</title>
  <style type="text/css">
    table{
      font-size: 15px;
      text-align: left;
      padding:30px;
    }

  </style>

  <meta charset="utf-8">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="main.css">
  <nav class="navbar navbar-default">
    <div class="container">
      <div class="navbar-header">
        <p class="navbar-brand" style="color: #1abc9c">CONTACT ME</p>
      </div>
        <ul class="nav navbar-nav navbar-right">
          <!-- 6 -->
          <li id="home"><a href="/email/index.html">HOME</a></li>
          <li id="about"><a href="/email/table.php">DATA</a></li>
          <li id="contact"><a href="#">ABOUT</a></li>
        </ul>
    </div>
  </nav>

  <body>
    <table>
      <tr>
        <th style="padding-left: 50px;">First name</th>
        <th style="padding-left: 50px;">Last name</th>
        <th style="padding-left: 50px;">Email</th>
        <th style="padding-left: 50px;">Message</th>
      </tr>

      <?php
          $conn = mysqli_connect("localhost", "root", "mysql", "messages");
          if($conn->connect_error){
          die("Connection failed: " . $conn->connect_error);
        }
            $sql = "SELECT `First name`, `Last name`, `Email`, `Message` from `messages`";
            $result = $conn->query($sql);
            if ($result->num_rows>0) {
              while ($row = $result->fetch_assoc()) {
                echo "<tr><td>" . $row["First name"] . "</td><td>" . $row["Last name"] . "</td><td>" . $row["Email"] . "</td><td>" . $row["Message"] . "</td></td>" ;
              }
              echo "</table>";
            }
            else{echo "0 result!";
          }$conn->close();

         ?>

    </table>

    <div>
    <footer>© Sabina Bojadžić 2020</footer>
  </div>
</body>
</html>
