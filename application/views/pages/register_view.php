
<?php echo form_open('register'); ?>

    <form action="register.php" method="POST" class="form-control form-text">

        <div class="col-md-8 order-md-1">
            <?php
                echo validation_errors('<div class="alert alert-danger">','</div>');
            ?>
            <h4>Register</h4>
            <p>Please Register to continue...</p><br>
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="firstName">First name </label>
                    <input type="text" class="form-control" id="firstName" name="firstname" placeholder="" value="<?php echo set_value('firstname') ?>" autofocus>
                    <div class="invalid-feedback">
                    </div>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="lastName">Last name</label>
                    <input type="text" class="form-control" id="lastName" name="lastname" placeholder="" value="<?php echo set_value('lastname') ?>">
                    <div class="invalid-feedback">
                    </div>
                </div>
            </div><br>

            <div class="mb-3">
              <label for="username">Username <span class="text-muted"></span></label>
              <input type="text" class="form-control" id="username" name="username" value="<?php echo set_value('username'); ?>" placeholder="">
            </div>


            <!-- <div class="col-md-12 mb-3">
              <label for="username">Username</label>
                <div class="input-group">
                 <div class="input-group-prepend">
                  <span class="input-group-text">@</span>
                </div>
                <input type="text" class="form-control" id="username" name="username" placeholder="" value="<?php //echo set_value('firstname') ?>">
                <div class="invalid-feedback" style="width: 100%;">
                </div>
              </div>
            </div> -->
            <br>

            <div class="mb-3">
              <label for="email">Email <span class="text-muted"></span></label>
              <input type="email" class="form-control" id="email" name="email" value="<?php echo set_value('email'); ?>" placeholder="you@example.com">
            </div><br>

            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password" placeholder="" value="" name="password" >

                </div>
                <div class="col-md-6 mb-3">
                    <label for="confirmpassword"> Confirm password</label>
                    <input type="password" class="form-control" id="confirmpassword" placeholder="" value="" name="confirmpassword" >
                    <div class="invalid-feedback">
                    </div>
                </div>
            </div><br>

            <div class="row">
                <div class="col-sm-4">
                    <input type="submit" value="Register" class="btn btn-success text-center" value="" name="send" />
                </div>
            </div>
        </div>

        <!-- <input type="text" value="<?php //echo set_value('firstname') ?>" name="firstname" placeholder="enter first name" size="30" ><br><br>


        <input type="text" value="<?php //echo set_value('lastname') ?>" name="lastname" placeholder="enter last name" size="30" ><br><br>

        <input type="text" value="<?php //echo set_value('username') ?>" name="username" placeholder="enter username" size="30" ><br><br>

        <input type="password" value="" name="password" size="30" placeholder="enter password"><br><br>

        <input type="password" value="" name="confirmpassword" size="30" placeholder="Re-enter paassword"><br><br>

        <input type="text" value="<?php //echo set_value('email') ?>" name="email" size="30" placeholder="you@example.com"><br><br> -->



    </form>
</div>

    <!-- <div class="col-md-8 order-md-1">
        <div class="row">
            <div class="col-md-6 mb-3">
            <label for="firstName">First name</label>
            <input type="text" class="form-control" id="firstName" placeholder="" value="<?php echo set_value('firstname') ?>" name="firstname" required>
            <div class="invalid-feedback">
                Valid first name is required.
            </div>
            </div>
            <div class="col-md-6 mb-3">
            <label for="lastName">Last name</label>
            <input type="text" class="form-control" id="lastName" placeholder="" value="<?php echo set_value('lastname') ?>" required>
            <div class="invalid-feedback">
                Valid last name is required.
            </div>
            </div>
        </div>

            <div class="mb-3">
              <label for="username">Username</label>
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">@</span>
                </div>
                <input type="text" class="form-control" id="username" placeholder="Username" name="username" value="<?php echo set_value('username') ?>" required>
                <div class="invalid-feedback" style="width: 100%;">
                  Your username is required.
                </div>
              </div>
            </div>

            <div class="mb-3">
              <label for="email">Email <span class="text-muted"></span></label>
              <input type="email" class="form-control" id="email" name="email" placeholder="you@example.com">
              <div class="invalid-feedback">
                Please enter a valid email address for shipping updates.
              </div>
            </div>

            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password" placeholder="" value="" name="password" required>
                    <div class="invalid-feedback">
                        Valid Password is required.
                    </div>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="confirmpassword"> Confirm password</label>
                    <input type="password" class="form-control" id="confirmpassword" placeholder="" value="" name="confirmpassword" required>
                    <div class="invalid-feedback">
                        Valid password is required.
                    </div>
                </div>
            </div>
        </div> -->
            <!-- <hr class="mb-4"> -->


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
