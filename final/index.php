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

        <p>
          Regardless of which jewelry you buy, it gives high returns.
          Invest your money in gold and silver. Use our calculator below to check how much the amount of gold and silver grams you can buy.
        </p>
      </div>
      <div class="div2">
         <form id="mainForm" action="placeOrder.php" method="post">
          <table>
            <tr class="tableTitle">
              <th>Jewelry Type</th>
              <th>QUANTITY (in grams)</th>
              <th>Price</th>
            </tr>
            <tr>
              <td>Gold (1 gram = 216.5 SAR)</td>
              <td>
                <input type="number" id="quan1" name="quan1" class="quan1" value="0" placeholder="item number"  />
              </td>
              <td><label id="tot1" class="tot1" >SAR</label></td>
            </tr>
            <tr>
              <td>Silver (1 gram = 2.72 SAR)</td>
              <td>
                <input type="number" id="quan2" name="quan2" class="quan2" value="0" placeholder="item number" />
              </td>
              <td><label id="tot2" class="tot2" >SAR</label></td>
            </tr>
            <tr>
              <td colspan="3">
			  <label> Your Full Name: </label> <input id="fullName" name="fullName" type="text" name="fullname" id = "fullname">
			  </td>
            </tr>
            
            <tr>
              <td colspan="3">
                <label>Your Phone number: </label> <input id="phoneNumber" name="phoneNumber" type="text" name="phone" id = "phone">
              </td>
                
              
            </tr>
			<tr>
			<td colspan="3">
				<input class="btn" type="Submit" value="Place an Order" />
				<input class="btn" type="reset" value="RESET" />
			</td>
			</tr>
          </table>
          
        </form>
      </div>
    </section>

    <footer><nav>
      <span>Home  |</span>
      <span>Pravicy  |</span>
      <span>Site map  |</span>
      <span>Links  </span>
      <span style="float: right" class="Copyright">Copyright 2021; all Rights Reserved.</span
      >
      </nav></footer>
    <script src="JavaScript/gold.js"></script>
  </body>
</html>