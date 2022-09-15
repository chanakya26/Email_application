<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.2/js/bootstrapValidator.min.js"></script>
<script src="js/validation.js"></script>
<link rel="stylesheet" href="https://unpkg.com/mvp.css@1.10.2/mvp.css">



<form action="compose-process.php" method="post" id="emailForm"  id="compose" novalidate>

	<div class="form-group">				  
	  <label class="control-label col-sm-2" for="fname">sender*:</label>
	  <div class="col-sm-10">          
		<input type="email" class="form-control" id="sender" name="sender" placeholder="sender" >
	  </div>
	</div>				
	<div class="form-group">
	  <label class="control-label col-sm-2" for="email">reciever*:</label>
	  <div class="col-sm-10">
		<input type="email" class="form-control" id="reciever" name="reciever" placeholder="reciever" >
	  </div>
	</div>
    <div class="form-group">
	  <label class="control-label col-sm-2" for="comment">Subject*:</label>
	  <div class="col-sm-10">
		<textarea class="form-control" rows="1" name="subject" id="subject"></textarea>
	  </div>
	</div>
	<div class="form-group">
	  <label class="control-label col-sm-2" for="comment">Message*:</label>
	  <div class="col-sm-10">
		<textarea class="form-control" rows="5" name="message" id="message"></textarea>
	  </div>
	</div>
	<div class="form-group">        
	  <div class="col-sm-offset-2 col-sm-10">
        <input type="submit" name="submit" value = "sent">
	  </div>
      <div class="form-group">        
	  <div class="col-sm-offset-2 col-sm-13">
        <input type="submit" name="submit" value = "save">
	  </div>
	</div>
	</div>
</form>