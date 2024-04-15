<!DOCTYPE html>
<html lang="en">

 <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">

    <!-- Custom CSS -->
    <style type="text/css">
        body {
            background: url('image/wave.png');
            background-size: cover;
            transition: background 0.5s ease-in-out;
        }

        .container-fluid {
            margin-top: 60px;
            margin-bottom: 60px;
            color: #34495E;
            transition: margin 0.5s ease-in-out, color 0.5s ease-in-out;
        }

        .card {
            background-color: rgba(255, 255, 255, 0.8);
            transition: background 0.5s ease-in-out;
            box-shadow: 0 6px 36px rgba(24, 101, 192,0.3);
        }

        .card:hover {
            background-color: rgba(255, 255, 255, 0.95);
        }

        #inputbtn {
            cursor: pointer;
            transition: transform 0.3s ease-in-out;
            font-size: 15px;
  line-height: 1.5;
  color: #fff;
  text-transform: uppercase;
  width: 70%;
  height: 45px;
  border-radius: 25px;
  background: #1565c0;
  display: -webkit-box;
  display: -webkit-flex;
  display: -moz-box;
  display: -ms-flexbox;
  display: flex;
  justify-content: center;
  align-items: center;
  padding: 0 25px;
  -webkit-transition: all .4s;
  -o-transition: all .4s;
  -moz-transition: all .4s;
  transition: all .4s;
        }

        #inputbtn:hover {
            transform: scale(1.1);
        }
    </style>
</head>

<body>

<div class="container-fluid">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-4">
                
            <img src="image/gym.svg" class="card-img-top" style="margin-left: -47px;">
                    
      
      </div>
      </div>
      </div>
      </div>
      
      
 

  
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6"></div>
            <div class="col-md-4">
                <div class="card" style="margin-top: -344px;">
                    <img src="image/logo.png" class="card-img-top">
                    <div class="card-body">
                        <center>
                            <h5>Gym Management System | Admin Login</h5><br>
                            <form class="form-group" method="POST" action="admin-panel.php">
                                <div class="row">
                                    <div class="col-md-4"><label>Username: </label></div>
                                    <div class="col-md-8"><input type="text" name="username" class="form-control" placeholder="Enter Username" required /></div><br><br>
                                    <div class="col-md-4"><label>Password: </label></div>
                                    <div class="col-md-8"><input type="password" class="form-control" name="password" placeholder="Enter Password" required /></div><br><br><br>
                                </div>
                                <br><center><input type="submit" id="inputbtn" name="login_submit" value="Login" class="btn btn-primary"></center>
                            </form>
                        </center>
                    </div>
                </div>
            </div>
            <div class="col-md-7"></div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
</body>

</html>
