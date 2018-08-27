

<?php
    $this->load->helper('url');
    if($this->session->userdata('ci_session')){

        echo validation_errors('<div class="alert alert-danger">','</div>');
?>

<h5 class="text-center mb-4">Fill the below form for ur business idea...</h5>
<p class="help-text mb-5">fields marked with <span class="required">*</span> are required</p>

<div id="form">
    <?php echo form_open_multipart('form'); ?>

    <form method="POST" class="form-control">
        <div class="row mb-4">
            <div class="col-md-6">
                <label>Business Name  <span class="required">*</span></label>
                <input class="form-control" type="text" value="<?php echo set_value('businessname') ?>" name="businessname" size="50">
            </div>
        </div>


        <div class="row mb-4">
            <div class="col-md-6">
                <label>Description  <span class="text-muted">(80 characters only)</span> <span class="required">*</span></label>
                <input class="form-control" type="text" value="<?php echo set_value('description') ?>" name="description" size="50">
            </div>
        </div>


        <div class="row mb-5">
            <div class="col-md-6">
                <label>Industry  <span class="required">*</span></label><br>
                <input class="form-control" type="text" value="<?php echo set_value('industry') ?>" name="industry" size="50">
            </div>
        </div>

        <div class="row mb-5">
            <div class="col-md-6">
                <label class="control-label">Contact <span class="text-muted">(10 digits only)</span></label><br>
                <input class="form-control" type="tel" value="<?php echo set_value('contact') ?>" name="contact" size="50" placeholder="mobile no." pattern="^\d{10}$" >
            </div>
        </div>

        <h6>Social accounts</h6>
        <div>
            <div class="row mb-5">
                <div class="col-sm-6">
                    <label>Twitter url <span class="text-muted">(Optional)</span></label><br>
                    <input class="form-control" type="text" value="<?php echo set_value('twitter') ?>" name="twitter" size="50" placeholder="provide full link including https">
                </div>
                <div class="col-sm-6">
                    <label>Linkedin url  <span class="required">*</span></label><br>
                    <input class="form-control" type="text" value="<?php echo set_value('linkedin') ?>" name="linkedin" size="50" placeholder="provide full link including https">
                </div>
            </div>
            <div class="row mb-5">
                <div class="col-sm-6">
                    <label>Facebook page <span class="text-muted">(Optional)</span></label><br>
                    <input class="form-control" type="text" value="<?php echo set_value('facebookpage') ?>" name="facebookpage" size="50" placeholder="provide full link including https">
                </div>
                <div class="col-sm-6">
                    <label>Instagram url <span class="text-muted">(Optional)</span></label><br>
                    <input class="form-control" type="text" value="<?php echo set_value('instagram') ?>" name="instagram" size="50" placeholder="provide full link including https">
                </div>
            </div>
        </div>


        <div class="row mb-5">
            <div class="col-sm-6">
                <label>Website <span class="text-muted">(Optional)</span></label><br>
                <input class="form-control" type="text" value="<?php echo set_value('website') ?>" name="website" size="50" placeholder="website link">
            </div>
            <div class="col-sm-6">
                <label>Email  <span class="required">*</span></label><br>
                <input class="form-control" type="text" value="<?php echo set_value('email') ?>" name="email" size="50" placeholder="email address">
            </div>
        </div>


        <label>Address  <span class="required">*</span></label>
        <div class="row mb-5">
            <div class="col-sm-4">
                <label>City</label>
                <select class="city form-control" value="<?php echo set_value('city') ?>" name="city">
                    <option></option>
                    <option>---select city---</option>
                    <option value="asifabad" <?php echo  set_select('city', 'asifabad'); ?>>Asifabad</option>
                    <option value="bangalore" <?php echo  set_select('city', 'bangalore'); ?>>Bangalore</option>
                    <option value="chennai" <?php echo  set_select('city', 'chennai'); ?>>Chennai</option>
                    <option value="delhi" <?php echo  set_select('city', 'delhi'); ?>>Delhi</option>
                    <option value="faridabad" <?php echo  set_select('city', 'faridabad'); ?>>Faridbad</option>
                    <option value="gandhinagar" <?php echo  set_select('city', 'gandhinagar'); ?>>Gandhinagar</option>
                    <option value="hyderabad" <?php echo  set_select('city', 'hyderabad'); ?>>Hyderabad</option>
                    <option value="indore" <?php echo  set_select('city', 'indore'); ?>>Indore</option>
                    <option value="jaipur" <?php echo  set_select('city', 'jaipur'); ?>>Jaipur</option>
                    <option value="karimnagar" <?php echo  set_select('city', 'karimnagar'); ?>>karimnagar</option>
                    <option value="kolkata" <?php echo  set_select('city', 'kolkata'); ?>>Kolkata</option>
                    <option value="lucknow" <?php echo  set_select('city', 'lucknow'); ?>>Lucknow</option>
                    <option value="mumbai" <?php echo  set_select('city', 'mumbai'); ?>>Mumbai</option>
                    <option value="mysore" <?php echo  set_select('city', 'mysore'); ?>>Mysore</option>
                    <option value="nagpur" <?php echo  set_select('city', 'nagpur'); ?>>Nagpur</option>
                    <option value="ongole" <?php echo  set_select('city', 'ongole'); ?>>Ongole</option>
                    <option value="pune" <?php echo  set_select('city', 'pune'); ?>>Pune</option>
                    <option value="raipur" <?php echo  set_select('city', 'raipur'); ?>>Raipur</option>
                    <option value="ranchi" <?php echo  set_select('city', 'ranchi'); ?>>Ranchi</option>
                    <option value="udaipur" <?php echo  set_select('city', 'udaipur'); ?>>Udaipur</option>
                    <option value="vijayawada" <?php echo  set_select('city', 'vijayawada'); ?>>Vijayawada</option>
                    <option value="vizag" <?php echo  set_select('city', 'vizag'); ?>>Vizag</option>
                    <option value="warangal" <?php echo  set_select('city', 'warangal'); ?>>Warangal</option>
                </select>
            </div>
            <div class="col-sm-4">
                <label>State</label>
                <select class="state form-control" value="<?php echo set_value('state') ?>" name="state">
                    <option></option>
                    <option>---select state---</option>
                    <option value="Andhra Pradesh" <?php echo  set_select('state', 'Andhra Pradesh'); ?>>Andhra Pradesh</option>
                    <option value="Arunachal Pradesh" <?php echo  set_select('state', 'Arunachal Pradesh'); ?>>Arunachal Pradesh</option>
                    <option value="Chattisgarh" <?php echo  set_select('state', 'Chattisgarh'); ?>>Chattisgarh</option>
                    <option value="delhi" <?php echo  set_select('state', 'delhi'); ?>>Delhi</option>
                    <option value="gujarat" <?php echo  set_select('state', 'gujarat'); ?>>Gujarat</option>
                    <option value="himachal pradesh" <?php echo  set_select('state', 'himachal pradesh'); ?>>Himachal Pradesh</option>
                    <option value="haryana" <?php echo  set_select('state', 'haryana'); ?>>Haryana</option>
                    <option value="jharkhand" <?php echo  set_select('state', 'jharkhand'); ?>>Jharkhand</option>
                    <option value="Karnataka" <?php echo  set_select('city', 'karnataka'); ?>>Karnataka</option>
                    <option value="kerala" <?php echo  set_select('state', 'kerala'); ?>>Kerala</option>
                    <option value="madhya pradesh" <?php echo  set_select('state', 'Mmdhya pradesh'); ?>>Madhya Pradesh</option>
                    <option value="maharashtra" <?php echo  set_select('state', 'maharashtra'); ?>>Maharashtra</option>
                    <option value="orissa" <?php echo  set_select('state', 'orissa'); ?>>Orissa</option>
                    <option value="punjab" <?php echo  set_select('state', 'punjab'); ?>>Punjab</option>
                    <option value="rajasthan" <?php echo  set_select('state', 'rajasthan'); ?>>Rajasthan</option>
                    <option value="tamilnadu" <?php echo  set_select('state', 'tamilnadu'); ?>>Tamilnadu</option>
                    <option value="telangana" <?php echo  set_select('state', 'telangana'); ?>>Telangana</option>
                    <option value="uttar pradesh" <?php echo  set_select('state', 'uttar pradesh'); ?>>Uttar Pradesh</option>
                    <option value="west bengal" <?php echo  set_select('state', 'west bengal'); ?>>West Bengal</option>
                </select>
            </div>
            <div class="col-sm-4">
                <label>Country</label>
                <select class="country form-control" value="<?php echo set_value('country') ?>" name="country">
                    <option></option>
                    <option>---select country---</option>
                    <option value="Alaska" <?php echo  set_select('country', 'Alaska'); ?>>Alaska</option>
                    <option value="Australia" <?php echo  set_select('country', 'Australia'); ?>>Australia</option>
                    <option value="bangladesh" <?php echo  set_select('country', 'bangladesh'); ?>>Bangladesh</option>
                    <option value="Canada" <?php echo  set_select('country', 'Canada'); ?>>Canada</option>
                    <option value="Chile" <?php echo  set_select('country', 'Chile'); ?>>Chile</option>
                    <option value="China" <?php echo  set_select('country', 'China'); ?>>China</option>
                    <option value="Croatia" <?php echo  set_select('country', 'Croatia'); ?>>Croatia</option>
                    <option value="Denmark" <?php echo  set_select('country', 'Denmark'); ?>>Denmark</option>
                    <option value="Egypt" <?php echo  set_select('country', 'Egypt'); ?>>Egypt</option>
                    <option value="England" <?php echo  set_select('country', 'England'); ?>>England</option>
                    <option value="France" <?php echo  set_select('country', 'France'); ?>>France</option>
                    <option value="Germany" <?php echo  set_select('country', 'Germany'); ?>>Germany</option>
                    <option value="Greenland" <?php echo  set_select('country', 'Greenland'); ?>>Greenland</option>
                    <option value="Iceland" <?php echo  set_select('country', 'Iceland'); ?>>Iceland</option>
                    <option value="Ireland" <?php echo  set_select('country', 'Ireland'); ?>>Ireland</option>
                    <option value="India" <?php echo  set_select('country', 'India'); ?>>India</option>
                    <option value="Indonesia" <?php echo  set_select('country', 'Indonesia'); ?>>Indonesia</option>
                    <option value="Italy" <?php echo  set_select('country', 'Italy'); ?>>Italy</option>
                    <option value="Mexico" <?php echo  set_select('country', 'Mexico'); ?>>Mexico</option>
                    <option value="Maldives" <?php echo  set_select('country', 'Maldives'); ?>>Maldives</option>
                    <option value="Nigeria" <?php echo  set_select('country', 'Nigeria'); ?>>Nigeria</option>
                    <option value="Pakistan" <?php echo  set_select('country', 'Pakistan'); ?>>pakistan</option>
                    <option value="Peru" <?php echo  set_select('country', 'Peru'); ?>>Peru</option>
                    <option value="Russia" <?php echo  set_select('country', 'Russia'); ?>>Russia</option>
                    <option value="Srilanka" <?php echo  set_select('country', 'Srilanka'); ?>>Srilanka</option>
                    <option value="South Africa" <?php echo  set_select('country', 'South Africa'); ?>>South Africa</option>
                    <option value="United States of America" <?php echo  set_select('country', 'United States of America'); ?>>United States of America</option>
                </select>
            </div>
        </div>

        <div class="row mb-5">
            <div class="col-md-4">
                <label>Business Logo </label>
                <input type="file" name="logo" size="50" />
            </div>
        </div>

        <div class="row mb-5">
            <div class="col-md-6">
                <label>Established Year  <span class="required">*</span></label>
                <select class="year form-control" id="yearpicker" value="<?php echo set_value('year'); ?>" name="year">
                    <option></option><option>---select year---</option>
                </select>
            </div>
        </div>

        <div class="row mb-5">
            <div class="col-md-6">
                <label>Products/Services  <span class="required">*</span></label><br>
                <select class="products form-control" value="<?php echo set_value('products') ?>" name="products">
                    <option></option>
                    <option disabled>---select products/services---</option>
                    <option value="software services" <?php echo  set_select('products', 'software services'); ?>>Software Services</option>
                    <option value="web development" <?php echo  set_select('products', 'web development'); ?>>Web Development</option>
                    <option value="mobile development" <?php echo  set_select('products', 'mobile development'); ?>>Mobile Development</option>
                    <option value="enterprise software development" <?php echo  set_select('products', 'enterprise software development'); ?>>Enterprise Software Development</option>
                    <option value="hardware services" <?php echo  set_select('products', 'hardware services'); ?>>Hardware Services</option>
                    <option value="home services" <?php echo  set_select('products', 'home services'); ?>>Home Services</option>
                    <option value="cloud computing" <?php echo  set_select('products', 'cloud computing'); ?>>Cloud Computing</option>
                    <option value="big data" <?php echo  set_select('products', 'big data'); ?>>Big Data</option>
                    <option value="cyber security" <?php echo  set_select('products', 'cyber security'); ?>>Cyber Security</option>
                    <option value="broadband services" <?php echo  set_select('products', 'broadband services'); ?>>Broadband Services</option>
                    <option value="car services" <?php echo  set_select('products', 'car services'); ?>>Car Services</option>
                    <option value="health services" <?php echo  set_select('products', 'health services'); ?>>Health Services</option>
                    <option value="computer/laptop/mobile repair services" <?php echo  set_select('products', 'computer/laptop/mobile repair services'); ?>>Computer/laptop/mobile repair services</option>
                </select>
            </div>
        </div>


        <div class="row mb-5">
            <div class="col-sm-6 col-md-6">
                <label>Founded By  <span class="required">*</sdelhipan></label><br>
                <input class="form-control" type="text" value="<?php echo set_value('founder') ?>" name="founder" size="50" placeholder="founder name">
            </div>
            <div class="col-sm-6 col-md-6">
                <label>Designation  <span class="required">*</delhispan></label><br>
                <select class="designation form-control form-cdelhiontrol-lg" value="<?php echo set_value('designation') ?>" name="designation">
                    <option></option>
                    <option>---Select designation---</option>
                    <option value="ceo" <?php echo  set_select('designation', 'ceo'); ?>>Chief Executive Officer (C.E.O)</option>
                    <option value="cfo" <?php echo  set_select('designation', 'cfo'); ?>>Chief Financial Officer (C.F.O)</option>
                    <option value="cto" <?php echo  set_select('designation', 'cto'); ?>>Chief Technical Officer (C.T.O)</option>
                    <option value="md" <?php echo  set_select('designation', 'md'); ?>>Managing Director</option>
                    <option value="software lead" <?php echo  set_select('designation', 'software lead'); ?>>Software Lead</option>
                    <option value="hr lead" <?php echo  set_select('designation', 'hr lead'); ?>>Human Resources Lead</option>
                    <option value="sales lead" <?php echo  set_select('designation', 'sales lead'); ?>>Sales Lead</option>
                    <option value="senior software developer" <?php echo  set_select('designation', 'senior software developer'); ?>>Senior Software Developer</option>
                    <option value="software developer" <?php echo  set_select('designation', 'software developer'); ?>>Software Developer</option>
                    <option value="software mentor" <?php echo  set_select('designation', 'software mentor'); ?>>Software Mentor</option>
                    <option value="board member" <?php echo  set_select('designation', 'board member'); ?>>Board Member</option>
                    <option value="founder/executive" <?php echo  set_select('designation', 'founder/executive'); ?>>Founder/Executive</option>
                    <option value="cofounder" <?php echo  set_select('designation', 'cofounder'); ?>>Co-founder</option>
                    <option></option>
                </select>
            </div>
        </div>

        <div class="row mb-4">
            <div class="col-md-6">
                <h5>Batch Label  <span class="required">*</span></h5>
                <input class="form-control" type="text" value="<?php echo set_value('batchlabel') ?>" name="batchlabel" placeholder="enter founder graduated year" />
            </div>
        </div>

        <div class="row mb-5">
            <div class="col-md-4">
                <h5>Picture</h5>
                <input type="file" value="<?php echo set_value('founderimage') ?>" name="founderimage"/>
            </div>
        </div>


        <div>
            <input type="submit" value="Submit" value="<?php echo set_value('send') ?>" name="send" class="btn btn-primary"/>
            <a href="<?php echo base_url().'ajaxsearch' ?>"><input type="button" value="Cancel" name="cancel" class="btn btn-danger" /></a>
        </div>


    </form>
</div>

<?php
    }
    else{
        redirect('login');
    }
?>
