<?php
    $user = $this->session->userdata['ci_session']['username'];
?>
<div class="row">

<?php
    foreach ($h as $row) {
?>


<div class="col-md-4 d-flex flex-column" >
    <div class="card flex-fill mb-4">
        <img class="card-img-top" src="<?php echo base_url(). 'images/' . $row->logo; ?>" id="businesslogo" width="150px" height="150px">
             <?php //$id = $row->businessid; ?>
            <strong><?php echo ''.ucwords($row->business_name); ?></strong>
            <?php echo $row->description; ?><br>
            <?php echo $row->city; ?><?php echo ", "; ?><?php echo $row->country; ?><br>
            <?php echo $row->founder_name; ?><?php echo ", "; ?><?php echo $row->established_year; ?>
            <div class="d-flex justify-content-between align-items-center">
                <small></small>
                <!-- <a href="<?php //echo base_url().'singlepage/search/'.$row->businessid; ?>" class="btn btn-sm btn-outline-secondary mt-auto" type="button">View Details</a> -->
                <a href="<?php echo base_url().'singlepage/search/'.$row->businessid; ?>"><button class="btn btn-sm btn-outline-secondary mt-auto">View Details</button></a>
            </div>
        <!-- </div> -->
    </div>
    <br>
</div>


<?php
    }
?>
</div>
<div class="text-center">
    <?php
        echo $this->pagination->create_links();
    ?>
</div>