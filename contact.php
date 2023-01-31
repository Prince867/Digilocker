
<?php


if (isset($_POST['btn'])) {
    $to = 'pandeyvus@gmail.com';
    $sub = $_POST['name'];
    $mes = $_POST['query'];
    $mes2 = $_POST['email'];
// 	$header =$_post['email'];

    $send = mail($to, $sub, $mes2."\n".$mes);
    if ($send){
        echo "<div class='alert alert-success' role='alert'>
  Massege send Successfully We will Contact you soon !
</div>";
    } else {
        $ret = "Mesaage not send";
    }
}
?>
<html lang="en">

    <head>
        <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-8196806567926054"
     crossorigin="anonymous"></script>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    </head>
    <body>

      
      <u><p class="ml-5 mt-3 font-weight-bold">Contact Us</p></u>
      <h5 class="ml-5">Email Us:- care@doclocker.in</h5>
      <h5 class="ml-5 mb-5"></h5>
      <div class="card  m-3 mt-5">
        <h5 class="card-header">Elaborate your Query</h5>
        <div class="card-body">
            <form method="post">
                <div class="form-group">
                  <label for="exampleInputEmail1">Enter Your Name</label>
                  <input type="text" class="form-control" name="name"  required id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter your Name">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Enter your Email</label>
                  <input type="email" class="form-control" name="email" id="exampleInputPassword1" placeholder="Enter your Email" required>
                  <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>

                </div>
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Query</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" name="query" placeholder="Elaborate your Query" rows="3"></textarea required>
                </div>
                <button type="submit" name="btn" class="btn btn-primary">Submit</button>
              </form>
        </div>
      </div>
      

    </body>
    
    </html>