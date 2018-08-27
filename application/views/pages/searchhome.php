
<?php
  $this->load->helper('url');

  if($this->session->userdata('ci_session')){


?>


<div class="row">
  <div class="col-md-9">
    <h4>Search by Products/services</h4>
  </div>
  <div class="col-md-3">
    <a href="<?php echo base_url(); ?>form" id="heading-button"><button type="button" class="btn btn-success float-right">+ create a business listing</button></a>
  </div>
</div>

<div class="form-group">
  <div class="input-group">
    <span class="input-group-addon"></span>
    <input type="text" name="search_text" id="search_text" placeholder="name, founder or date" class="form-control" autofocus/>
  </div><br>
  <div id="result"></div>
</div>


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
}
else{
    redirect('login');
}
?>

