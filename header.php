
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Required meta tags -->

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Satisfy&display=swap" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>secret diary</title><link rel="icon" href="./graphics/images-removebg-preview.png" type="image/x-icon">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Teko:wght@500&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Rampart+One&display=swap" rel="stylesheet">
    
    <style>
        .container {
            text-align: center;
            width: 400px;
            /* margin-top: 150px; */
        }
        #home-container {
            /* text-align: center;
            width: 400px; */
            margin-top: 150px;
        }

        html {
            background: url(./graphics/background.gif) no-repeat center center fixed;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
        }

        body {
            background: none;
            color: white;
        }
        #login{
            display: none;
        }
        #diary{
            height: 100%;
            width: 100%;
            background-image: url("./graphics/dairy1.png");
            background-repeat: no-repeat;
            background-size: cover;
            font-size: 27px;
            font-family: 'Lobster', cursive;
            /* display: none; */
            
        }
        #container-loggedinpage{
            margin-top: 75px;
        }

        .zoom {
  /* padding: 50px; */

  transition: transform .5s;
  /* width: 200px; */
  /* height: 200px; */
  /* margin: 0 auto;  */
}

.zoom:hover {
  -ms-transform: scale(1.1); /* IE 9 */
  -webkit-transform: scale(1.1); /* Safari 3-8 */
  transform: scale(1.1); 
  border: 1px solid;
  padding: 10px;
  box-shadow: rgba(0, 0, 0, 0.35) 0px -50px 36px -28px inset;
}
.zoom1 {
  /* padding: 50px; */

  transition: transform .7s;
  /* width: 200px; */
  /* height: 200px; */
  /* margin: 0 auto;  */
}

.zoom1:hover {
  -ms-transform: scale(1.1); /* IE 9 */
  -webkit-transform: scale(1.1); /* Safari 3-8 */
  transform: scale(1.1); 
  /* border: 1px solid; */
  padding: 10px;
  /* box-shadow: rgba(0, 0, 0, 0.35) 0px -50px 36px -28px inset; */
}
.toggleforms {
  box-shadow: inset 0 0 0 0 #54b3d6;
  color: #54b3d6;
  padding: 0 .25rem;
  margin: 0 -.25rem;
  transition: color .3s ease-in-out, box-shadow .3s ease-in-out;
}
.toggleforms:hover {
  color: #fff;
  box-shadow: inset 200px 0 0 0 #54b3d6;;
}

/* Presentational styles */
.toggleforms {
  color: #54b3d6;
  font-family: 'Poppins', sans-serif;
  /* font-size: 27px; */
  font-weight: 700;
  line-height: 1.5;
  text-decoration: none;
}

    </style>


</head>

<body>