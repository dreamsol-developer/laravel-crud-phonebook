<!doctype html>
<html lang="{{ app()->getLocale() }}">
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
        <h1>
            Contacts
        </h1>
                        <form action=" {{url('/newcontact')}}" method="get">
                                {{csrf_field()}}
                              <input type="submit" value="New Contact"/>
                          </form>
        <br>
        <div style="visibility: hidden">abc</div>
        <table border="1">
            <thead>
                <tr>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Phone</th>
                    <th>Email</th>
                    <th>City</th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
               
              
                @foreach($model as $data)
                    <tr>    
                      <td>{{$data->contact_first_name}}</td>
                      <td>{{$data->contact_last_name}}</td>
                      <td>{{$data->contact_phone}}</td>
                      <td>{{$data->contact_email}}</td>
                      <td>{{$data->contact_city}}</td>     
                      <td>
                          <form action="{{ route('edit', $data -> id)}}" method="get">
                                {{csrf_field()}}
                              <input type="submit" value="EDIT"/>
                          </form>
                      </td>
                      <td>
                          <form action="{{ route('delete', $data -> id)}}" method="post">
                                {{csrf_field()}}
                              <input type="submit" value="DELETE"/>
                          </form>
                      </td>
                    </tr>
                @endforeach
               
            </tbody>
        </table>

        
    </body>
</html>
