<!DOCTYPE html>
<html>
<head>
    <title>XD</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <!-- Latest compiled and minified CSS -->

</head>
<style type="text/css">
    body{
        background-image: linear-gradient(rgba(0,0,0,0.1),rgba(0,0,0,0.8)), url(../img/ppp.jpg);
        background-size:  100% 100%;
        background-attachment: fixed;
        background-repeat: no-repeat;
    }
    
    a{
        text-decoration: none;
    }
    a h1:hover{
        color: white;
        font-size: 2.8em;
    }
    .navbar a:hover{
        font-size: 1.3em;
    }
    .dropdown{
        position: relative;
        float: right;
        display: inline-block;
        margin-left: 1em; 
    }
    .dropdown .dropbtn{
        font-size: 1.5em;
        font-family: "times new roman",times,serif;
        font-weight: 900;
        padding: 0.1em;
        margin-top: 0.4em;
        background: #d3d3d3;
        border-style: outset;
        border: none;
    }
    .navbar a{

        padding: 0.6em;
        font-size: 1.5em;
        font-weight: 900;
        font-family: "times new roman",times,serif;
        float: right;
        border-radius: 0.6em;
        color: black;
        text-decoration: none;
        padding-left: 1em;

    }
    .navbar{
        
        text-align: center;
        display: inline-block;
        margin-left: 12em;
        
    }
    .dropdown-content{
        display: none;
        position: absolute;
        box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
        z-index: 1;
        border: solid;
    }
    .dropdown:hover .dropdown-content{
        display: block;

    }
    .dropdown-content a{
        display: block;
    }
    .dropdown-content a:hover{
        background: #d3d3d3;
    }
    .first{
        margin-top: 6em;
        text-align: justify;
        text-align: right;
        color: bisque;
        font-size: 1.5em;
        font-family: "vogue";
        margin-right: 2em;
    }
    .second{
        margin-top: 3em;
        text-align: justify;
        color: bisque;
        text-align: right;
        font-size: 1.5em;
        font-family: "vogue";
        margin-right: 2em;
    }
    
</style>
    
<body >

    <?php include 'header.html' ?>

    <p class="first">"ONLINE COURIER SERVICES" is a Web based Courier delivery Service  <br>which supports high availability of courier services to the customer.The  <br>website is used for sending parcels to anyone you want in your city..<br> sending gifts to them, sending food to ur loved ones, sending the urgent<br> needed stuffs and many more...</p>

    <p class="second">The online platform where custmors can send or receive the couriers / <br>Parcels.It's a <span style="font-weight: bold; font-style: italic; color: whitesmoke;">"DOMESTIC"</span> courier service which wil deliver to your <br>city only.Customers have to create account first to use the services lifetime. </p>
        
</body>

<footer>
    <?php include "footer.html" ?>
</footer>
</html>


