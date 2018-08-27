<?php
if($this->session->userdata('ci_session')){
$user = $this->session->userdata['ci_session']['username'];
?>

	<!-- <nav class="navbar navbar-expand-sm bg-light">
  		<!-- Links 
        <a class="navbar-brand" href="<?php //echo base_url(); ?>ajaxsearch">B2B Exchange Modules</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <nav class="navbar-nav" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="<?php //echo base_url().'user/profile/'.$user ?>"><?php //echo $user; ?> <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a href="<?php //echo base_url().'login/logout' ?>"  id="logout" class="btn btn-danger float-right">Logout</a>
                    </li>
                </ul>
            </nav>

    </nav> -->
    <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="<?php echo base_url(); ?>">B2B Exchange Module</a>
                </div>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="<?php echo base_url().'register'; ?>"><buton class="btn btn-primary">Register</buton></a></li>
                    <li><a href="<?php echo base_url().'login'; ?>"><button class="btn btn-primary">Login</button></a></li>
                </ul>
            </div>
        </nav>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>

<?php }
else{

} ?>