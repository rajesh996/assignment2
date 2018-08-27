<?php
    if($this->session->userdata('ci_session')){
        $username = $this->session->userdata['ci_session']['username'];
?>

<div class="container">

    <?php echo form_open('user/edit/'.$username); ?>

    <form action="" method="POST" class="form-control form-text">

        <div class="col-md-8 order-md-1">
            <?php
                // echo validation_errors('<div class="alert alert-danger">','</div>');
            ?>

            <p>Edit your details here...</p><br>
                <div class="mb-3">
                    <label for="firstName">First name</label>
                    <input type="text" class="form-control" id="firstName" name="firstname" placeholder="" value="<?php echo set_value('firstname') ?>" autofocus>
                    <p class="error"><?php echo form_error('firstname', '<div class="alert-danger error">', '</div>'); ?></p>
                </div>
                <div class="mb-3">
                    <label for="lastName">Last name</label>
                    <input type="text" class="form-control" id="lastName" name="lastname" placeholder="" value="<?php echo set_value('lastname') ?>">
                    <p class="error"><?php echo form_error('lastname', '<div class="alert-danger error">', '</div>'); ?></p>
                </div>

            <div class="mb-3">
              <label for="username">Username <span class="text-muted"></span></label>
              <input type="text" class="form-control" id="username" name="username" value="<?php echo set_value('username'); ?>" placeholder="">
              <p class="error"><?php echo form_error('username', '<div class="alert-danger error">', '</div>'); ?></p>
            </div>

            <div class="mb-3">
              <label for="email">Email <span class="text-muted"></span></label>
              <input type="email" class="form-control" id="email" name="email" value="<?php echo set_value('email'); ?>" placeholder="you@example.com">
              <p class="error"><?php echo form_error('email', '<div class="alert-danger error">', '</div>'); ?></p>
            </div>

            <div class="row">
                <div class="col-sm-4">
                    <input type="submit" value="Edit" class="btn btn-primary text-center" value="" name="edit" />
                    <a href="<?php echo base_url().'user/profile/'.$username; ?>"><input type="button" value="Cancel" class="btn btn-secondary text-center" value="" name="cancel" /></a>
                </div>
            </div>
        </div>

    </form>
</div>



    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<?php
    }
?>