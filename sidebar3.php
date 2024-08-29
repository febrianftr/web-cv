<!DOCTYPE html>
<!-- Created By CodingNepal -->
<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <title>Floating Icons on Left Border</title>
      <link rel="stylesheet" href="style.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
      <style>
          @import url('https://fonts.googleapis.com/css?family=Montserrat:600&display=swap');
            *{
            margin: 0;
            padding: 0;
            list-style: none;
            text-decoration: none;
            box-sizing: border-box;
            }
            body{
            font-family: 'Montserrat', sans-serif;
            background: url(bg.jpeg);
            background-position: center;
            background-size: cover;
            height: 100vh;
            }
            nav{
            position: fixed;
            width: 70px;
            margin-top: 150px;
            transition: all 0.3s linear;
            box-shadow: 2px 2px 8px 0px rgba(0,0,0,.4);
            }
            nav li{
            height: 60px;
            position:relative;
            }
            nav li a{
            color: white;
            display: block;
            height: 100%;
            width: 100%;
            line-height: 60px;
            padding-left:25%;
            border-bottom: 1px solid rgba(0,0,0,.4);
            transition: all .3s linear;
            }
            nav li:nth-child(1) a{
            background: #4267B2;
            }
            nav li:nth-child(2) a{
            background: #1DA1F2;
            }
            nav li:nth-child(3) a{
            background: #E1306C;
            }
            nav li:nth-child(4) a{
            background: #2867B2;
            }
            nav li:nth-child(5) a{
            background: #333;
            }
            nav li:nth-child(6) a{
            background: #ff0000;
            }
            nav li a i{
            position:absolute;
            top: 17px;
            left: 20px;
            font-size: 27px;
            }
            ul li a span{
            display: none;
            font-weight: bold;
            letter-spacing: 1px;
            text-transform: uppercase;
            }
            a:hover {
            z-index:1;
            width: 200px;
            border-bottom: 1px solid rgba(0,0,0,.5);
            box-shadow: 0 0 1px 1px rgba(0,0,0,.3);
            }
            ul li:hover a span{
            padding-left: 30%;
            display: block;
            }
      </style>
   </head>
   <body>
      <nav>
         <ul>
            <li><a href="#"><i class="fab fa-facebook-f"></i><span>Facebook</span></a></li>
            <li><a href="#"><i class="fab fa-twitter"></i><span>Twitter</span></a></li>
            <li><a href="#"><i class="fab fa-instagram"></i><span>Instagram</span></a></li>
            <li><a href="#"><i class="fab fa-linkedin-in"></i><span>Linkedin</span></a></li>
            <li><a href="#"><i class="fab fa-github"></i><span>Github</span></a></li>
            <li><a href="#"><i class="fab fa-youtube"></i><span>Youtube</span></a></li>
         </ul>
      </nav>
   </body>
</html>