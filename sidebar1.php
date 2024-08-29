<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            height: 600px;
            background-color: lightgray;
            margin: 0px;
            font-family: Tahoma;
            }

            /* FLOATING SIDEBAR */
            ul {
            clear: both;
                position: fixed;
                display: block;
                list-style-type: none;
                right: -3.2em;
                top: 15%;
                -webkit-animation: slideright 1s forwards;
                -webkit-animation-delay: 0.5s;
                animation: slideright 1s forwards;
                animation-delay: 0.5s; 
            }

            @keyframes slideright {
                100% {
                    right: 0;
                }
            }

            li {
            margin-bottom: 40px;
            margin-right: -20px;
            padding: 15px;
            -webkit-transform: rotate(270deg);
                -moz-transform: rotate(270deg);
                -o-transform: rotate(270deg);
                background-color: rgba(30, 45, 127, 0.75);
                border-top-left-radius: 10px;
                border-top-right-radius: 10px;
            
                -webkit-transition: width .5s, background-color .1s;
                transition: width .5s, background-color .1s;

            }

            li a {
                font-size: 19px;
                text-transform: none;
                text-align: center;
                text-decoration: none;
                color: #ebebeb;
            }

            li:hover {
                background-color: rgba(30, 45, 127, 1);
                color: #fff;
            }
    </style>
</head>
<body>
    <ul>
    <li><a href="http://43folderstech.net"> Home</a></li>
    <li><a href="http://www.43folderstech.net/services/"> Quote </a></li>
        <li><a href="http://www.43folderstech.net/contact/">Contact </a></li>
    </ul>
    <div> <img src="http://www.43folderstech.net/wordpress/wp-content/uploads/2016/05/web-design-image-02-2.jpg" width=100%>
</body>
</html>