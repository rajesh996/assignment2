
<?php echo validation_errors('<div class="alert alert-danger">','</div>'); ?>

<?php
    if($this->session->userdata('ci_session')){

        foreach ($y->result() as $row  /* $h as $key => $value*/) {

?>

<a href="<?php echo base_url().'singlepage/search/'.$row->businessid; ?>"><input type="button" value="Back" name="back" class="btn btn-secondary" /></a>

<br>
<!-- <a href="/assignment/login/logout"><button id="logout" class="btn btn-danger">Logout</button></a> -->


<h6>Edit your business details here...</h6><br>

<?php echo form_open('form/editform/'.$row->businessid); ?>

<form action="form.php" method="POST" class="form-control">
<div class="row">
        <div class="col-md-6">
            <label>Business Name  <span class="required">*</span></label><br>
            <input class="form-control" type="text" value="<?php echo $row->business_name; ?>" name="businessname" id="businessname">
        </div>
    </div>
    <br>

    <div class="row">
        <div class="col-md-6">
            <label>Description  <span class="required">*</span></label><br>
            <input class="form-control" type="text" value="<?php echo $row->description; ?>" name="description" size="50">
        </div>
    </div>
    <br>


    <div class="row">
        <div class="col-md-6">
            <label>Industry  <span class="required">*</span></label><br>
            <input class="form-control" type="text" value="<?php echo $row->industry; ?>" name="industry" size="50">
        </div>
    </div>
    <br><br>

    <div class="row">
        <div class="col-md-6">
            <label class="control-label">Contact <span class="text-muted">(10 digits only)</span></label><br>
            <input class="form-control" type="tel" value="<?php echo $row->contact; ?>" name="contact" size="50" placeholder="mobile no." pattern="^\d{10}$" >
        </div>
    </div>
    <br><br>

    <h5>Social accounts</h5>
    <div>
        <div class="row">
            <div class="col-sm-6">
                <label>Twitter url <span class="text-muted">(Optional)</span></label><br>
                <input class="form-control" type="text" value="<?php echo $row->twitter; ?>" name="twitter" size="50" placeholder="twitter account url">
            </div>
            <div class="col-sm-6">
                <label>Linkedin url  <span class="required">*</span></label><br>
                <input class="form-control" type="text" value="<?php echo $row->linkedin; ?>" name="linkedin" size="50" placeholder="linkedin profile url">
            </div>
        </div><br><br>
        <div class="row">
            <div class="col-sm-6">
                <label>Facebook page <span class="text-muted">(Optional)</span></label><br>
                <input class="form-control" type="text" value="<?php echo $row->facebook_page; ?>" name="facebookpage" size="50" placeholder="facebook page url">
            </div>
            <div class="col-sm-6">
                <label>Instagram url <span class="text-muted">(Optional)</span></label><br>
            <input class="form-control" type="text" value="<?php echo $row->instagram; ?>" name="instagram" size="50" placeholder="instagram profile url">
            </div>
        </div>
    </div>
    <br><br>


    <div class="row">
        <div class="col-sm-6">
            <label>Website <span class="text-muted">(Optional)</span></label><br>
            <input class="form-control" type="text" value="<?php echo $row->website; ?>" name="website" size="50" placeholder="website link">
        </div>
        <div class="col-sm-6">
            <label>Email  <span class="required">*</span></label><br>
            <input class="form-control" type="text" value="<?php echo $row->email; ?>" name="email" size="50" placeholder="email address">
        </div>
    </div>
    <br><br>


    <h5>Address  <span class="required">*</span></h5><br>
    <div class="row">
        <div class="col-sm-12 col-md-4">
            <?php
            $city = $row->city;
            ?>
            <label>City</label>
            <select class="city form-control" value="<?php echo $row->city; ?>" name="city" >
                <option></option>
                <option>---select city---</option>
                <option>Asifabad</option>
                <option>Bangalore</option>
                <option>Chennai</option>
                <option>Delhi</option>
                <option>Faridbad</option>
                <option>Gandhinagar</option>
                <option>Hyderabad</option>
                <option>Indore</option>
                <option>Jaipur</option>
                <option>karimnagar</option>
                <option>Kolkata</option>
                <option>Lucknow</option>
                <option>Mumbai</option>
                <option>Mysore</option>
                <option>Nagpur</option>
                <option>Ongole</option>
                <option>Pune</option>
                <option>Raipur</option>
                <option>Ranchi</option>
                <option>Udaipur</option>
                <option>Vijayawada</option>
                <option>Vizag</option>
                <option>Warangal</option>
            </select>
        </div>
        <div class="col-sm-12 col-md-4">
            <label>State</label>
            <select class="state form-control" value="<?php echo $row->state; ?>" name="state">
                <option></option>
                <option>---select state---</option>
                <option>Andhra Pradesh</option>
                <option>Arunachal Pradesh</option>
                <option>Assam</option>
                <option>Chattisgarh</option>
                <option>Delhi</option>
                <option>Gujarat</option>
                <option>Himachal Pradesh</option>
                <option>Haryana</option>
                <option>Jharkhand</option>
                <option>Karnataka</option>
                <option>Kerala</option>
                <option>Lakshadweep</option>
                <option>Madhya Pradesh</option>
                <option>Manipur</option>
                <option>Meghalaya</option>
                <option>Maharashtra</option>
                <option>Nagaland</option>
                <option>Orissa</option>
                <option>Punjab</option>
                <option>Pondicherry</option>
                <option>Rajasthan</option>
                <option>Sikkim</option>
                <option>Tamilnadu</option>
                <option>Telangana</option>
                <option>Uttar Pradesh</option>
                <option>West Bengal</option>
            </select>
        </div>
        <div class="col-sm-12 col-md-4">
            <label>Country</label>
            <select class="country form-control" value="<?php echo set_select($row->country); ?>" name="country" >
                <option></option>
                <option>---select country---</option>
                <option>Alaska</option>
                <option>Australia</option>
                <option>Bangladesh</option>
                <option>Canada</option>
                <option>Chile</option>
                <option>China</option>
                <option>Croatia</option>
                <option>Denmark</option>
                <option>Egypt</option>
                <option>England</option>
                <option>France</option>
                <option>Germany</option>
                <option>Greenland</option>
                <option>Iceland</option>
                <option>Ireland</option>
                <option>India</option>
                <option>Indonesia</option>
                <option>Italy</option>
                <option>Khazakistan</option>
                <option>Mexico</option>
                <option>Maldives</option>
                <option>Nigeria</option>
                <option>pakistan</option>
                <option>Paraguay</option>
                <option>Peru</option>
                <option>Russia</option>
                <option>Srilanka</option>
                <option>South Africa</option>
                <option>Tibet</option>
                <option>Tanzania</option>
                <option>United States of America</option>
                <option>uruguay</option>
                <option>Uzbekisthan</option>
                <option>Venezuela</option>
                <option>Zambia</option>
            </select>
        </div>
    </div>

    <br><br>

    <label>Business Logo  <span class="required">*</span></label><br>
    <img src="<?php echo base_url() . 'images/' . $row->logo; ?>" width="300" height="240"/><br>
    <input type="file" name="logo" size="50" /><br><br><br>

    <div class="row">
        <div class="col-sm-6">
            <label>Established Year  <span class="required">*</span></label><br>
            <input class="form-control" type="text" name="year" value="<?php echo $row->established_year; ?>" /><br><br>
        </div>
    </div><br>

    <div class="row">
        <div class="col-sm-6">
            <label>Products/Services  <span class="required">*</span></label><br>
            <select class="products form-control" value="<?php echo set_select($row->products); ?>" name="products" >
                <option></option>
                <option disabled>---select products/services---</option>
                <option>Software Services</option>
                <option>Web Development</option>
                <option>Mobile Development</option>
                <option>Enterprise Software Development</option>
                <option>Hardware Services</option>
                <option>Home Services</option>
                <option>Cloud Computing</option>
                <option>Big Data</option>
                <option>Cyber Security</option>
                <option>Broadband Services</option>
                <option>Car Services</option>
                <option>Health Services</option>
                <option>Computer/laptop/mobile repair services</option>
            </select>
        </div>
    </div><br><br>


    <div class="row">
        <div class="col-sm-6">
            <label>Founded By  <span class="required">*</span></label><br>
            <input class="form-control" type="text" value="<?php echo $row->founder_name; ?>" name="founder" size="50" placeholder="founder name" >
        </div>
        <div class="col-sm-6">
            <label>Designation  <span class="required">*</span></label><br>
            <select class="designation form-control" value="<?php echo set_select($row->designation); ?>" name="designation" style="width: 90%; height: 20px;">
                <option></option>
                <option>---Select designation---</option>
                <option>Chief Executive Officer (C.E.O)</option>
                <option>Chief Financial Officer (C.F.O)</option>
                <option>Chief Technical Officer (C.T.O)</option>
                <option>Managing Director</option>
                <option>Software Lead</option>
                <option>Human Resources Lead</option>
                <option>Sales Lead</option>
                <option>Senior Software Developer</option>
                <option>Software Developer</option>
                <option>Software Mentor</option>
                <option>Board Member</option>
                <option>Founder/Executive</option>
                <option>Co-founder</option>
                <option></option>
            </select>
        </div>
    </div>

    <br><br>

    <h5>Batch Label  <span class="required">*</span></h5>
    <input class="form-control" type="text" value="<?php echo $row->batch_label; ?>" name="batchlabel" size="50"><br><br>

    <h5>Picture  <span class="required">*</span></h5>
    <img src="<?php echo base_url() . 'images/' . $row->founder_image; ?>" width="200" height="160" /><br>
    <input type="file" value="<?php echo $row->founder_image; ?>" name="founderimage" size="50" /><br><br>

    <div>
        <input type="submit" value="Submit" value="<?php echo set_value('send') ?>" name="send" class="btn btn-primary"/>
        <a href="<?php echo base_url().'singlepage/search/'.$row->businessid; ?>"><input type="button" value="Cancel" name="cancel" class="btn btn-danger" /></a>
    </div>


</form>

<?php
    }
}
?>

