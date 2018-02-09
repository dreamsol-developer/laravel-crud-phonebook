<!doctype html>
<html lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Contacts</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            .mybutton{
                padding:5px;
                background-color:graytext;
                color: white;
            }
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
            
        </style>
    </head>
    <body>
 
        <h1>New Contact</h1>
        
     

        <form action="{{action('ContactController@create')}}" method="post">
                {{ csrf_field() }}
           
            <label for="firstname">First Name</label>
            <input name="firstname" value="" type="text">
            <br>
            <label for="lastname">Last Name</label>
            <input name="lastname" value="" type="text">
            <br>
            <label for="phone">Phone</label>
            <input name="phone" value="" type="text">
            <br>
            <label for="email">Email</label>
            <input name="email" value="" type="email">
            <br>
            <label for="city">City</label>
            <input name="city"  value="" type="text">
            <br>
            <input type="submit" value="Save">
           
        </form>


    </body>
</html>
