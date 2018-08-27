<?php
    $this->load->helper('url');

    if($this->session->userdata('ci_session')){

        $username = $this->session->userdata['ci_session']['username'];

?>


<?php
    echo validation_errors('<div class="alert alert-danger">', '</div>');
    if (isset($error_message)) {
        echo "<div class='alert alert-danger'>$error_message</div>";
    }
    echo form_open('user/confirm/'.$username);
?>
  <form action="" method="POST" class="form-signin">
        <p>Please enter your password</p>
        <div class="row">
            <div class="col-md-6">
                <input type="password" name="password" id="inputPassword" class="form-control mb-3" placeholder="Password" size="50" >
            </div>
        </div>
        <div class="row">
            <div class="col-md-2">
                <button class="btn btn-primary btn-block" type="submit">Submit</button>
            </div>

        </div>

        </form>

<?php
    }
?>