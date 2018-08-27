<?php
    $user = $this->session->userdata['ci_session']['username'];
    // echo 'welcome '.$user;
?>

<style>
#heading{
      width: 100%;
        }
        #heading-text{
            width: 70%;
            float: left;
        }
</style>


<?php
    $this->load->helper('url');

    echo 'welcome';
    // if($this->session->userdata('ci_session')){

    $this->load->view('templates/dashboard_header');

    $this->load->view('pages/body_header_view');

?>

<!-- <a href="<?php //echo base_urlloat: right(); ?>login/logout"><button id="logout" class="btn btn-danger">Logout</button></a> -->
<div class="container">

        <div id="heading">
            <?php echo 'welcome'; ?>
            <h4 id="heading-text">Search by Products/services</h4>
            <?php echo 'welcome'; ?>
            <a href="<?php echo base_url(); ?>form" id="heading-button"><button type="button" class="btn btn-success">+ create a business listing</button></a>
        </div><br>
        <div class="form-group">
            <div class="input-group">
            <span class="input-group-addon"></span>
            <input type="text" name="search_text" id="search_text" placeholder="Search by business details" class="form-control" />
        </div><br>
        <div id="result"></div>
</div>

<?php

    //

    $this->load->view('templates/footer');
?>


<script>
$(document).ready(function(){
    load_data();

 function load_data(query)
 {
  $.ajax({
   url:"<?php echo base_url(); ?>ajaxsearch/fetch",
   method:"POST",
   data:{query:query},
   success:function(data){
    $('#result').html(data);
    console.log(data);
   }
  })
 }

 $('#search_text').keyup(function(){
  var search = $(this).val();
  if(search != '')
  {
   load_data(search);
  }
  else
  {
   load_data();
  }
 });
});
</script>

<?php
// }
// else{
//     redirect('login');
// }
?>

