<!DOCTYPE html>
<html>
    <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css2?family=Merienda+One&family=Modak&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="tour-style.css" rel="stylesheet" type="text/css" media="all" />
    </head>


     <!-- Header Part  -->  


             <?php 
              include('header.php');

              ?>


      <!-- Main menu and image -->
              <body>
              <div class="bg-img">
                <div class="container" align="center">
                  <div class="topnav" >
                      <ul >
                          <li><a href="#home">HOME</a></li>
                          <li><a href="#contact">ABOUT US</a></li>
                          <li> <a href="#news">DESTINATIONS</a>
                                      <div class="sub-menu1" align="center">
                                            <ul>
                                              <li><a href="#">MANALI</a></li>
                                              <li><a href="#">DALHOUSIE</a></li>
                                              <li><a href="#">LEH</a></li>
                                            </ul>
                                      </div>

                          </li>
                          <li> <a href="#contact">PACAKAGES</a></li>
                          <li><a href="#contact">GALLERY</a>
                                <div class="sub-menu">
                                  <ul>
                                    <li><a href="#">MANALI PICS</a></li>
                                    <li><a href="#">DALHOUSIE PICS</a></li>
                                    <li><a href="#">LEH PICS</a></li>
                                  </ul>
                                </div>

                          </li>

                          <li><a href="#contact">REVIEWS</a></li>
                          <li><a href="#contact">BLOG</a></li>
                          <li><a href="#contact">CONTACT US</a></li>

                      </ul>                  
                  </div>
                </div>
              </div> <br>

      <!-- Availability check  -->

             <div class="availability" align="right">
                     <form action="availability-check.php" method="post">     

                          Select Destination :  <select name="destination">
                                                    <option>Select your destination</option>
                                                    <option>Manali</option>
                                                    <option>Dalhousie</option>                                             
                                                </select>&nbsp;&nbsp;&nbsp;&nbsp;
                                     
                          Select Date : <input type="date" name="fromdate">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                          
      <!-- Submit button  -->

                         <input type="submit" name="check" value="Check Availability">
                    </form>
             </div><br><br>



      <!-- Main body part -->

              <div class="heading" align="center">
                   <h1 >OUR DESTINATIONS<hr width="900"></hr></h1></div>

                        <table align="center" cellspacing="15">
                          <tr >
                            <td><div class="img-circle"></div> </td>
                            <td align="center"><div class="manali-back"><div class="box"><h1 style="background-color:powderblue" class="heading" >MANALI TRIP</h1>
                                                  <span class="fa fa-star checked"></span>
                                                  <span class="fa fa-star checked"></span>
                                                  <span class="fa fa-star checked"></span>
                                                  <span class="fa fa-star checked"></span>
                                                  <span class="fa fa-star"></span> 4/5 <br><br>

                                                  <span style="background-color:orange;" class="heading">This is beautiful trip to Manali. This is beautiful trip to Manali. This is beautiful trip to Manali. This is beautiful trip to Manali. This is beautiful trip to Manali. This is beautiful trip to Manali </span><br><br><br>
                                                  <span ><input type="submit" name="book" value="BOOK-NOW" class="button"></span></div></td>
                          </tr>
                          <tr >
                            <td align="center"><div class="manali-back"><div class="box"><h1 style="background-color:powderblue;" class="heading">DALHOUSIE TRIP</h1> 
                                                  <span class="fa fa-star checked"></span>
                                                  <span class="fa fa-star checked"></span>
                                                  <span class="fa fa-star checked"></span>
                                                  <span class="fa fa-star checked"></span>
                                                  <span class="fa fa-star"></span> 4/5 <br><br>

                                                  <span style="background-color:orange;" class="heading">This is beautiful trip to Dalhousie. This is beautiful trip to Dalhousie. This is beautiful trip to Dalhousie. This is beautiful trip to Dalhousie. This is beautiful trip to Dalhousie. This is beautiful trip to Dalhousie </span><br><br><br>
                                                  <span><input type="submit" name="book" value="BOOK-NOW" class="button"></span></div></td>
                            <td><div class="img-circle"></div> </td>
                          </tr>
                        </table>


              </body><br><br><br>

<!-- Footer starts from here  -->

<?php 
include('footer.php');

 ?>
</html>
