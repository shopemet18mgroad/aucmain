<?php 
	include('./header.php');
?>
    <!---  body  design  -->
    
  
	<div class="content w-100">
	<div class="middleboxt w-75">
	<div class="table-container w-100">

		<div class="shead w-100">
				<p><strong>SELLER'S REGISTRATION FORM</strong></p>
				<p>(All field's marked with * are mandatory)</p>
			</div>
  <table class="table table-xs table-striped mt-2">
   
    <tbody>
      <tr>
        <td class="font"><b>Company*</b></td>
        <td><input class="form-input-syle w-50" type="text" id="fname" name="fname" size="50"></td>       
      </tr>
      <tr>
        <td class="font"><b>Type of seller*</b></td>
        <td><input class="form-input-syle w-50" type="text" id="seller" name="seller" size="50"></td>
      </tr>
      <tr>
        <td class="font"><b>Street*</b></td>
        <td><input class="form-input-syle w-50" type="text" id="street" name="street" size="50"></td>       
      </tr>
	   <tr>
        <td class="font"><b>City*</b></td>
        <td><input class="form-input-syle w-50" type="text" id="city" name="city" size="50"></td>      
      </tr>
	  <tr>
        <td class="font"><b>Pin*</b></td>
        <td><input class="form-input-syle w-50" type="text" id="pin" name="pin" size="50"></td>      
      </tr>
	  <tr>
        <td class="font"><b>State/Union Ter.*:</b></td>
        <td><select class="form-input-syle w-50" style="text-align-last:center;" id="state" name="state" >
			<option value="one" selected>Arunachal Pradesh</option>
			<option value="two">Andra Pradesh</option>
			<option value="three" >Bihar</option>
			<option value="four">Chandigarh</option>
			<option value="five" >Chhattishgarh</option>
			<option value="six">Delhi</option>
			</select></td>      
      </tr>	
	  <tr>
        <td class="font"><b>Country *:</b></td>
        <td><input class="form-input-syle w-50" type="text" id="country" name="country" size="50"></td>       
      </tr>
      <tr>
        <td class="font"><b>Location *:</b></td>
        <td><input class="form-input-syle w-50" type="text" id="location" name="location" size="50"></td>
      </tr>
      <tr>
        <td class="font"><b>Email*</b></td>
        <td><input class="form-input-syle w-50" type="text" id="email" name="email" size="50"></td>       
      </tr>
	   <tr>
        <td class="font"><b>Phone*</b></td>
        <td><input class="form-input-syle w-50" type="text" id="phone" name="phone" size="50"></td>      
      </tr>
	  <tr>
        <td class="font"><b>Fax*</b></td>
        <td><input class="form-input-syle w-50" type="text" id="fax" name="fax" size="50"></td>      
      </tr>
	   </tbody>
	   </table>
		
    
		<div class="text-center" style="position:relative;">
	
		<a href="agreementforseller.php"><button type="button" class="btn btn-primary">Agree</button></a>
	
		
	    <a href="index.php"><button type="button" class="btn btn-primary">Disagree</button></a>
		
		</div>


</div>
</div>
	
	 <!---  body  design  -->

        <!---  footer  -->

    <?php 
	include('./footer.php');
?>