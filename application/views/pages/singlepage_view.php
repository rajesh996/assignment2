<?php
    $this->load->helper('url');
    if($this->session->userdata('ci_session')){
        $user = $this->session->userdata['ci_session']['userid'];

    foreach ($y->result() as $row) {
?>

<div>
    <a href="<?php echo base_url().'ajaxsearch/' ?>" class="btn btn-secondary float-left" id="back-button">Back<a>

    <?php
        if($user == $row->userid){
    ?>
    <a href="<?php echo base_url().'singlepage/edit/'.$row->businessid; ?>"><button class="btn btn-secondary float-right" id="edit_button">Edit</button></a>
    <?php
        }
    ?>
</div>

<div class="row">
    <div class="col-md-8">
        <img src="<?php echo base_url(). 'images/' . $row->logo; ?>" />
    </div>
</div>


<div class="row">
    <div class="col-2">
        <strong>Business Name</strong>
    </div>
    <div class="col-2">
        <?php echo ucfirst($row->business_name); ?>
    </div>
</div>

<div class="row">
    <div class="col-2">
        <strong>Description</strong>
    </div>
    <div class="col-6">
        <?php echo ucfirst($row->description); ?>
    </div>
</div>

<div class="row">
    <div class="col-2">
        <strong>Industry </strong>
    </div>
    <div class="col-2">
        <?php echo ucfirst($row->industry); ?>
    </div>
</div>
<!-- <hr class="mb-4"> -->

<div class="row">
    <div class="col-2">
        <strong>Contact</strong>
    </div>
    <div class="col-2">
        <?php echo $row->contact; ?>
    </div>
</div>

<div class="row">
    <div class="col-2">
        <strong>Twitter</strong>
    </div>
    <div class="col-2">
        <a href="<?php echo $row->twitter; ?>" target="_blank"><?php echo $row->twitter; ?></a>
    </div>
</div>
<div class="row">
    <div class="col-2">
        <strong>LinkedIn</strong>
    </div>
    <div class="col-2">
        <a href="<?php echo $row->linkedin; ?>" target="_blank"><?php echo $row->linkedin; ?></a>
    </div>
</div>

<div class="row">
    <div class="col-2">
        <strong>Facebook Page</strong>
    </div>
    <div class="col-2">
        <a href="<?php echo $row->facebook_page; ?>" target="_blank"><?php echo $row->facebook_page; ?></a>
    </div>
</div>

<div class="row">
    <div class="col-2">
        <strong>Instagram</strong>
    </div>
    <div class="col-2">
        <?php echo $row->instagram; ?>
    </div>
</div>

<div class="row">
    <div class="col-2">
        <strong>Website</strong>
    </div>
    <div class="col-2">
        <a href="<?php echo $row->website; ?>" target="_blank"><?php echo $row->website; ?></a>
    </div>
</div>

<div class="row">
    <div class="col-2">
        <strong>Email Address</strong>
    </div>
    <div class="col-2">
        <?php echo $row->email; ?>
    </div>
</div>

<div class="row">
    <div class="col-2">
        <strong>City</strong>
    </div>
    <div class="col-2">
        <?php echo $row->city; ?>
    </div>
</div>


<div class="row">
    <div class="col-2">
        <strong>State</strong>
    </div>
    <div class="col-2">
        <?php echo $row->state; ?>
    </div>
</div>
<div class="row">
    <div class="col-2">
        <strong>Country</strong>
    </div>
    <div class="col-2">
        <?php echo $row->country; ?>
    </div>
</div>
<div class="row">
    <div class="col-2">
        <strong>Established Year</strong>
    </div>
    <div class="col-2">
        <?php echo $row->established_year; ?>
    </div>
</div>
<div class="row">
    <div class="col-2">
        <strong>Products/services</strong>
    </div>
    <div class="col-3">
        <?php echo ucwords($row->products); ?>
    </div>
</div>
<div class="row">
    <div class="col-2">
        <strong>Founder Name</strong>
    </div>
    <div class="col-2">
        <?php echo ucwords($row->founder_name); ?>
    </div>
</div>
<div class="row">
    <div class="col-2">
        <strong>Dsignation</strong>
    </div>
    <div class="col-3">
    <?php echo ucwords($row->designation); ?>
    </div>
</div>
<div class="row">
    <div class="col-2">
        <strong>Batch Label</strong>
    </div>
    <div class="col-2">
        <?php echo $row->batch_label; ?>
    </div>
</div>
<div class="row">
    <div class="col-2">
        <strong>Founder Image</strong>
    </div>
    <div class="col-2">
        <img src="<?php echo base_url() . 'images/' . $row->founder_image; ?>" name="founderimage" />
    </div>
</div>


<?php
}
}
?>




