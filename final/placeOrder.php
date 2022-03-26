<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="StyleSheet" href="CSS/stylesheet.css" />
	<script type="text/javascript" src="JavaScript/gold.js"></script>
    <title>Home page</title>
  </head>
  <body style="background-color: #fff77a">
    <header>
      <img width="100%" height="200px" src="images/banner_header.png" />
    </header>

    <nav>
      <a href="index.php"><span class="selected">Home</span></a>
      <a href="viewtransactions.php"><span> Transactions</span></a>
    </nav>

    <section>
      <div class="div1">
        <h3>Invest your money in Jewelry</h3>
        <?php
					$connection = mysqli_connect("localhost","root","","gold");
					$error = mysqli_connect_error();
					if($error != null)
						echo("There is a problem".$error);


                        $gold = $_POST['quan1'];
                        $silver = $_POST['quan2'];
                        $customerName = $_POST['fullName'];
                        $customerPhone = $_POST['phoneNumber'];

                        $sql = "insert into transaction(gold, silver,customerName, customerPhone) values('".$gold."', '".$silver."', '".$customerName."', '".$customerPhone."')";

                        if(mysqli_query($connection,$sql) )
                            echo "<h4> Your Order was Placed. Thank you! </h4>";
                        else
                            echo "<h4> An error occurred and your order could not be placed. Try again later! </h4>";
				?>
      </div>
    </section>

    <footer><nav>
      <span>Home  |</span>
      <span>Pravicy  |</span>
      <span>Site map  |</span>
      <span>Links  </span>
      <span style="float: right" class="Copyright">Copyright 2021; all Rights Reserved.</span
      >
    </footer></nav>
    <script src="JavaScript/gold.js"></script>
  </body>
</html>