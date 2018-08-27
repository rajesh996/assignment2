<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Form Output</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script> -->

    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
    <!-- <link rel="stylesheet" type="text/css" media="screen" href="main.css" /> -->
    <!-- <script src="main.js"></script> -->

    <style>
        #heading{
            width: 100%;
        }
        #heading-text{
            width: 80%;
            float: left;
        }
        /* #heading-button{
            width: 20%;
            float: right;
        } */

    </style>

</head>
<body>

    <div class="container">
        <?php
            if($this->session->userdata('ci_session')){
                // $username = $this->session->userdata('username');
                // echo "Username is $username";


        ?>

        <?php
                foreach ($y->result() as $row  /* $h as $key => $value*/) {
                    # code...

        ?>

        <br>
        <a href="/assignment/login/logout"><button id="logout" class="btn btn-danger">Logout</button></a>
        <br><br>
        Business Name:

        <?php
            }
        ?>

        <?php
            }
        ?>

        </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>



</body>
</html>