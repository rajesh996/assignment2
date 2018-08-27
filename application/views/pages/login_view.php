
<div class="row" id="signin-body">
  <div class="col-md-4"></div>
  <div class="col-md-4" id="signin-form">
    <div class="text-center">
      <?php
        echo validation_errors('<div class="alert alert-danger">', '</div>');
        if (isset($error_message)) {
            echo "<div class='alert alert-danger'>$error_message</div>";
        }
        echo form_open('login'); ?>
        <div class="col-sm-4">
          <a class="facebook-btn social-connect-btn mb-5" href="https://www.facebook.com/v3.1/dialog/oauth?client_id=444583216053575
          &redirect_uri=http://localhost/assignment2/ajaxsearch" >
            <!-- <span class="social social-facebook">Login with Facebook</span> -->
            <!-- <button class="fb-login social social-facebook">Login with Facebook</button> -->
          </a>
        </div><br>
        <form action="" method="POST" class="form-signin">
          <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
          <input type="text" name="username" id="username" class="form-control" placeholder="Username" value="<?php echo set_value('username'); ?>" size="50"  autofocus><br>
          <input type="password" name="password" id="inputPassword" class="form-control mb-3" placeholder="Password" size="50" >
          <p>Haven't registered yet? <a href="<?php echo base_url() . 'register'; ?>">register here</a></p>

          <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button><br>
          <!-- <p class="mt-5 mb-3 text-muted" style="text-align: center;">&copy; 2018 - Business Exchange Module</p> -->
      </form>
    </div>
  </div>
  <div class="col-md-4"></div>
</div>

