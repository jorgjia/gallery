<?php

if (!empty($_POST['name'] && $_POST['surname'] && $_POST['email'] && $_POST['phone'] && $_POST['message']  )){


        $name = $_POST['name'];
        $surname = $_POST['surname'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $message= $_POST['message'];

    $domain = substr($email, strpos($email, '@') + 1);
     
    $headers = 'From:' .$email. "."; 
    // $headers .= 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
    
    $to = 'gjorgjiametellari@gmail.com';
    $message = 'The subject:' .$name. "";
    $message = '<html><body>';
    $message .= '<h3> FROM: ' .$message. '</h3>';
    $message .= '<p style="font-size:18px;">Email: ' .$email. '</p><br>';
    $message .= '<p style="font-size:18px;">Message: ' .$message. '</p>';
    $message .= '</body></html>';
    

if (checkdnsrr($domain) == FALSE) {
    echo "<p style='font-weight: bold; color: #cb2211'>Please enter a valid email!</p>
    ";
}
else{ 

    echo "<p style='font-weight: bold; color: #cb2211;'>Your email was sent!</p>";
    mail($to, $message, $headers) or die("Error!"); 
    
}   
}

else{
    echo "<p style='font-weight: bold; color: #cb2211'>Please fill all fiels!</p>";
}

    
?>



<html>
    <head>
 
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
        <link href='https://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css'>
        <link href='custom.css' rel='stylesheet' type='text/css'>
    </head>
    <body>

        <nav class="navbar navbar-inverse" >
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">Jori's Gallery</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Home</a></li>
        <li><a href="about.html">About</a></li>
        <li><a href="#">Gallery</a></li>
        <li><a href="contact.html">Contact</a></li>
       
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> logout</a></li>
       

      </ul>
    </div>
  </div>
</nav>

                 <br><br><br>

<div class="jumbotron">
  <div class="container text-center">
 <h2 style="font-family: New Century Schoolbook, serif ";>Please Contact us </h2>
<img src="http://field-energy.com/images/contact_us_turkey_tours.jpg" class="img-responsive">
<br><br>
                    <form id="contact-form" method="post" action="contact.php" role="form" style="margin-left: 60px;margin-right: 60px;">

                        <div class="messages"></div>

                        <div class="controls">

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="form_name">Firstname *</label>
                                        <input id="form_name" type="text" name="name" class="form-control" placeholder="Please enter your firstname *" required="required" data-error="Firstname is required.">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="form_lastname">Lastname *</label>
                                        <input id="form_lastname" type="text" name="surname" class="form-control" placeholder="Please enter your lastname *" required="required" data-error="Lastname is required.">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="form_email">Email *</label>
                                        <input id="form_email" type="email" name="email" class="form-control" placeholder="Please enter your email *" required="required" data-error="Valid email is required.">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="form_phone">Phone</label>
                                        <input id="form_phone" type="tel" name="phone" class="form-control" placeholder="Please enter your phone">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="form_message">Message *</label>
                                        <textarea id="form_message" name="message" class="form-control" placeholder="Message for me *" rows="4" required="required" data-error="Please,leave us a message."></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <input type="submit" class="btn btn-success btn-send" value="Send message">
                                </div>
                            </div>
                           
                            </div>
                        </div>

                    </form>

                </div><!-- /.8 -->

            </div> <!-- /.row-->

        </div> <!-- /.container-->

        <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        <script src="validator.js"></script>
        <script src="contact.js"></script>
    </body>
</html>
