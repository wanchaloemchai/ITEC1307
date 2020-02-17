<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Wombat Coffee Roasters</title>

    <link rel="stylesheet" href="css/listing2.css">
    <link rel="stylesheet" href="css/listing3.css">
    <link rel="stylesheet" href="css/listing5.css">
    <link rel="stylesheet" href="css/listing7.css">
    <link rel="stylesheet" href="css/listing8.css">
    <link rel="stylesheet" href="css/listing9.css">
    <link rel="stylesheet" href="css/listing10.css">
</head>
<body>
        <header id="header" class="page-header">
                <div class="title">
                  <h1>Wombat Coffee Roasters</h1>
                  <div class="slogan">We love coffee</div>
                </div>
        </header>

                <nav class="menu" id="main-menu">
                <button class="menu-toggle" id="toggle-menu">
                  toggle menu
                </button>
                <div class="menu-dropdown">
                  <ul class="nav-menu">
                    <li><a href="/about">About</a></li>
                    <li><a href="/shop">Shop</a></li>
                    <li><a href="/menu">Menu</a></li>
                    <li><a href="/brew">Brew</a></li>
                  </ul>
                </div>
                </nav>

                <style>

                    body {
                         /* background-image: url('img/bg2.jpg'); */
                         /* <background-image: url('img/bg2.jpg' width="1920" height="1080") > */
                         background-image: url('img/bg3.jpg');
                         background-repeat: no-repeat;
                         background-attachment: fixed;
                        background-size: auto;
                    }


                    table {
                      width:50%;
                    }
                    table, th, td {
                      border: 1px solid black;
                      border-collapse: collapse;
                    }
                    th, td {
                      padding: 10px;
                      text-align: left;
                    }
                    table#t01 tr:nth-child(even) {
                      background-color: #fff;
                    }
                    table#t01 tr:nth-child(odd) {
                     background-color: #fff;
                    }
                    table#t01 th {
                      background-color: black;
                      color: white;
                    }
                    </style>

                <body>

                    <h1>Menu</h1>

                    <table id="t01">
                        <tr>
                          <th>Image</th>
                          <th>Name</th>
                          <th>Price</th>
                        </tr>
                        <tr>
                          <td><img src="img/coffee.jpg" width="150" height="100"></td>
                          <td>Coffee</td>
                          <td>30 Bath</td>
                        </tr>
                        <tr>
                          <td><img src="img/cocoa.jpg" width="150" height="100"></td>
                          <td>Cocoa</td>
                          <td>50 Bath</td>
                        </tr>
                        <tr>
                          <td><img src="img/cappuccino.jpg" width="150" height="100"></td>
                          <td>Cappuccino</td>
                          <td>40 Bath</td>
                        </tr>
                        <tr>
                          <td><img src="img/espresso.jpg" width="150" height="100"></td>
                          <td>Espresso</td>
                          <td>40 Bath</td>
                        </tr>
                        <tr>
                          <td><img src="img/green tea.jpg" width="150" height="100"></td>
                          <td>Green tea</td>
                          <td>50 Bath</td>
                        </tr>
                        <tr>
                          <td><img src="img/latte.jpg" width="150" height="100"></td>
                          <td>Latte</td>
                          <td>40 Bath</td>
                        </tr>
                      </table>
                      <br>

                      {{-- <img src="img/bg2.jpg" alt="Smiley face" width="1920" height="1080"> --}}



                </body>



              <script type="text/javascript" src="listing4.js"></script>


</body>
</html>
