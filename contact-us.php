<!DOCTYPE HTML>
<html>
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<?php include 'partials/head.php';?>

<body>
    <!--wrap inner start here-->
    <div id="wraper_inner">
        <!--wraper start here-->
        <div id="wraper">

            <!--header start here-->
            <?php include 'partials/header.php';?>
            <!--header ends here-->

            <div class="clear"></div>

            <?php include 'partials/banner.php';?>

            <div id="content">
                <?php include 'partials/sidebar.php';?>
                
                <!--content start here-->
                <div id="cnt"><span class="call">Contact <span>Us</span></span>
                    <br />
                    <be>
                        <img src="images/welbg.png" width="640" height="10" />
                        <br />
                        <table width="96%" border="0" align="center" cellpadding="0" cellspacing="0">
                            <tr>
                                <td width="50%" align="left" valign="top">
                                    <iframe width="340" height="300" frameborder="0" style="border:0"
                                    src="https://www.google.com/maps/embed/v1/place?q=place_id:ChIJHbCUwrqWj4AR177UkL9RkCM&zoom=15&key=AIzaSyCrRUlhJcvqqQwYVrpSP6Jdy2p34IbP7bs" allowfullscreen></iframe>
                                </td>
                                <td align="left" valign="top">
                                    <form action="contactform/send-mail.php" name="myform" id="contactForm" method="post">
                                        <table width="100%" border="0" cellspacing="10" cellpadding="0">
                                            <?php if(@$_REQUEST['status'] == "200") { ?>
                                                <div id="contact-mail-success-alert" class="alert alert-success" style="display: block;">
                                                    <strong>Thank you!</strong> Your message has been sent. 
                                                </div>
                                            <?php } if(@$_REQUEST['status'] == "500") { ?>
                                                <div id="contact-mail-success-alert" class="alert alert-danger" style="display: block;">
                                                    <strong>Sorry !!</strong> Something went wrong. 
                                                </div>
                                            <?php } ?>
                                            <tr>    
                                                <td width="80" align="left" valign="middle"> Frist Name </td>
                                                <td width="5" align="left" valign="middle">:</td>
                                                <td align="left" valign="middle">
                                                    <input type="text" name="fname" id="fname" required>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td align="left" valign="middle">Last Name</td>
                                                <td align="left" valign="middle">:</td>
                                                <td align="left" valign="middle">
                                                    <input type="text" name="lname" id="lname" required>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td align="left" valign="middle">Address</td>
                                                <td align="left" valign="middle">:</td>
                                                <td align="left" valign="middle">
                                                    <input type="text" name="address" id="address">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td align="left" valign="middle">Phone</td>
                                                <td align="left" valign="middle">:</td>
                                                <td align="left" valign="middle">
                                                    <input type="number" name="phone" id="phone" required>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td align="left" valign="middle">Fax</td>
                                                <td align="left" valign="middle">:</td>
                                                <td align="left" valign="middle">
                                                    <input type="text" name="fax" id="fax">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td align="left" valign="middle">Email</td>
                                                <td align="left" valign="middle">:</td>
                                                <td align="left" valign="middle">
                                                    <input type="email" name="email" id="email" required>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td align="left" valign="top">Comment</td>
                                                <td align="left" valign="top">:</td>
                                                <td align="left" valign="middle">
                                                    <textarea name="comment" cols="22" rows="3" id="comment"></textarea>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td align="left" valign="middle">&nbsp;</td>
                                                <td align="left" valign="middle">&nbsp;</td>
                                                <td align="left" valign="middle">
                                                    <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                                        <tr>
                                                            <td width="70">
                                                                <input class="btn-warning" type="submit" name="submit" id="button" value="submit">
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </td>
                                            </tr>
                                        </table>
                                    </form>
                                </td>
                            </tr>
                        </table>
                        <span class="call"><br>
                        Latest  <span>Products</span><span> </span></span>
                        <br>
                        <img src="images/welbg.png" width="640" height="10" />
                        <br> &nbsp;&nbsp;
                        <img src="images/product_1.jpg" width="220" height="163" class="brdr">&nbsp;&nbsp;&nbsp;<img src="images/product_2.jpg" width="220" height="163" class="brdr">&nbsp;&nbsp;&nbsp;<img src="images/product_3.jpg" width="220" height="163" class="brdr">
                        <br />
                </div>
                <!--content ends here-->

                <div class="clear"></div>
            </div>
        </div>
        <!--wraper ends here-->

        <?php include 'partials/footer.php';?>

    </div>
    <!--wrap inner ends start here-->
    <?php include 'partials/scripts.php';?>
</body>

</html>