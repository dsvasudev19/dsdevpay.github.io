<html>
    <head>
        <title>PAYMENT GATEWAY</title>
        <link rel="stylesheet" href="styles.css">
        <style>

            input{
                width:440px;
                height:46px;
                
            }
            label{
                border-radius:5px;
            }
            

        </style>
    </head>
    <body>
        <div class="main">
            <div class="header">
                <div class="logo">
                    <div class="image">
                        <img src="logo.jpg" alt="logoimage" style="width: 70px; margin-top: 6px; height:80px; border-radius:5px;">

                    </div>
                    <div class="logotext">
                       <span style="color: black; font-size:50px">DSDEV</span> <br> 
                       <span style=" font-size: 25px; margin-left:21px ;">PAYMENTS <span style="font-size: 10px;">(since 2001)</span> </span> 
                    </div>

                </div>
                <div class="navbar">
                <ul>
                        <a href="index.php" style="color: white;"><li>HOME</li></a>
                        <a href="payment.php" style="color: black;"><li>PAYMENT</li></a>
                        
                        <a href="about.php" style="color: white;"><li>ABOUT ME</li></a>
                        <img id="dsdevimage" src="image.jpg" alt="vasudev" style="margin-bottom: 10px; width: 60px; margin-top: 10px; height:60px; border-radius:60%;">
                    </ul>

                </div>

            </div>
            <div class="definition">
                <div class="form" style="width:40%">
                    <form action="gateway.php" method="POST">
                       
                           
                            <label>NAME</label><input type="text" name="name" placeholder="enter your name here"><br>
                            <label>MOBILE</label><input type="text" name="mobile" placeholder="enter your mobile here">
                            <label>E-MAIL</label><input type="text" name="email"><br>
                        
                            
                            <label>ADDRESS</label><input type="text" name="address"><br>
                            <label>AMOUNT</label><input type="number" step="0.001" name="amount"><br>
                            <!-- <table>
                                <tr>
                                    <td class="label">NAME</td>
                                    <td><input type="text" placeholder="NAME"></td>
                                </tr>
                            </table>
                         -->
                    <button type="submit" value="paynow" id="paybutton">CLICK HERE TO PROCEED</button>
                    </form>
                    
                </div>

            </div>
            <div class="footer">
                <div class="cp">
                <img src="copyright.jpg" alt="cp" style="width:20px; height:20px; border-radius:15px;"><p>MADE BY DS.VASUDEV</p>
                </div>
                <br>
                <p id="cpp">UNDER THE INTERNSHIP PROGRAM AT THE SPARK'S FOUNDATION</p>

            </div>
        </div>
    </body>
</html>
