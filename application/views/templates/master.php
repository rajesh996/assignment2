<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php if(isset($title)){ echo $title;}else{ echo null;}?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous"> -->

    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />

   <!--  <link href="https://getbootstrap.com/docs/4.1/dist/css/bootstrap.min.css" rel="stylesheet" /> -->

    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="./css/styles.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
<body>
    <div id="header">
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="<?php echo base_url(); ?>">B2B Exchange Module</a>
                </div>
                <ul class="nav navbar-nav navbar-right">
<!--                     <li><a href="<?php //echo base_url().'register'; ?>"><buton class="btn btn-primary">Register</buton></a></li> -->
                    <li><a href="<?php echo base_url().'login/logout'; ?>"><button class="btn btn-danger">Logout</button></a></li>
                </ul>
            </div>
        </nav>
    </div>

    <div class="container">
        <?php $this->load->view($content); ?>
    </div>

    <div id="footer">
        <p style="text-align: center"><strong>&copy; 2018 Alumni Businesses</strong></p>
    </div>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

    <script src="./js/select2script.js"></script>
</body>
</html>





<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php //if(isset($title)){ echo $title;}else{ echo null;}?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />

    <link href="https://getbootstrap.com/docs/4.1/dist/css/bootstrap.min.css" rel="stylesheet" />

    <link href='https://fonts.googleapis.com/css?family=Lato:300,400,500,600,700' rel='stylesheet' type='text/css'>

    <link href="./css/styles.css" rel="stylesheet" type="text/css">

</head>
<body>
    <div id="header" class="mb-4">
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="<?php //echo base_url(); ?>">B2B Exchange Module</a>
                </div>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="<?php //echo base_url().'register'; ?>"><buton class="btn btn-primary">Register</buton></a></li>
                    <li><a href="<?php //echo base_url().'login'; ?>"><button class="btn btn-primary">Login</button></a></li>
                </ul>
            </div>
        </nav>
        <?php //$this->load->view('templates/dashboard_header');?>
    </div><br><br>

    <div class="container">

        <?php //$this->load->view($content);?>

    </div>

    <div id="footer">
        <p class="text-center"><strong>&copy; 2018 Alumni Businesses</strong></p>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>

</body>
</html> -->