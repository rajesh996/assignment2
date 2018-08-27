<?php
    $this->load->helper('url');

    if($this->session->userdata('ci_session')){

    // $this->load->view('templates/dashboard_header');

    // $this->load->view('pages/body_header_view');

    foreach ($y->result() as $row  /* $h as $key => $value*/) {
?>

<h6>Your profile details</h6>

    <div class="mb-3" id="username" >
        Username: <input class="form-control" placeholder="<?php echo $row->username; ?>" disabled/>
    </div>
    <div class="mb-3" id="firstname">
        First name: <input class="form-control" placeholder="<?php echo $row->firstname; ?>" disabled />
    </div>
    <div class="mb-3" id="lastname">
        Last name: <input class="form-control" placeholder="<?php echo $row->lastname; ?>" disabled />
    </div>
    <div class="mb-3" id="email">
        Email: <input class="form-control" placeholder="<?php echo $row->email; ?>" disabled />
    </div>

    <?php
        //echo md5("12345678");?><br>
    <?php
        //echo md5("12345678");
    ?>

    <!-- <div>
        <div class="dropdown">
            <button class="dropbtn">Dropdown</button>
            <div class="dropdown-content">
                <a href="#">Link 1</a>
                <a href="#">Link 2</a>
                <a href="#">Link 3</a>
            </div>
        </div>
    </div> -->

    <div class="row">
        <div class="col-md-4">
            <a href="<?php echo base_url().'user/confirm/'.$row->username; ?>" type="button" class="btn btn-primary">Edit details</a>
            <a href="<?php echo base_url().'ajaxsearch/' ?>" type="button" class="btn btn-secondary"> Back</a>
        </div>
    </div>

<?php
        }
    }
?>