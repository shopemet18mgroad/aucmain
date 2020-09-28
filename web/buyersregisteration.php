<?php 
	include('./header.php');
?>
    <!---  body  design  -->
 <div class="content w-100">
	<div class="middleboxt w-75">
	<div class="table-container w-100">
	<div class="shead w-100">
				<p><strong>BUYER'S REGISTRATION FORM</strong></p>
				<p>(All field's marked with * are mandatory)</p>
			</div>
     
  <table class="table table-xs table-striped mt-2">
    <tbody>
      <tr>
        <td class="font"><b>Buyer origin</b></td>
        <td><input class="form-input-syle" type="radio" id="male" name="gender" value="male" size="50">
		<label for="male">Male</label>
		<input class="form-input-syle" type="radio" id="female" name="gender" value="female" size="50">
		<label for="female">Female</label><br></td>
       </tr>
      <tr>
        <td  class="font"><b>Company Type</b></td>
        <td><select class="form-input-syle w-50" style="text-align-last:center;" id="ctype" name="ctype">
		
			<option value="one" selected>--------category1-------</option>
			<option value="two">category2</option>
			<option value="three" >category3</option>
			<option value="four">category4</option>
			</select></td>
        </tr>
      <tr>
         <td class="font"><b>Buyer Type</b></td>
        <td><select class="form-input-syle w-50" style="text-align-last:center;" id="btype" name="btype">
			<option value="one" selected>-------category1--------</option>
			<option value="two">category2</option>
			<option value="three" >category3</option>
			<option value="four">category4</option>
			</select></td>
      </tr>
	  <tr>
	  <td class="font"><b>Company</b></td>
	  <td><input class="form-input-syle w-50" type="text" id="company" name="company" size="50"></td>
	  </tr>
	  
	   <tr>
	  <td  class="font"><b>Contact Person</b></td>
	  <td><input  class="form-input-syle w-50" type="text" id="cperson" name="cperson" size="50"></td>
	  </tr>
	  
	   <tr>
	  <td class="font"><b>Postal Address*:</b></td>
	  <td><input  class="form-input-syle w-50" type="text" id="address" name="address" size="50"></td>
	  </tr>
	  
	   
	  <td  class="font"><b>City*</b></td>
	  <td><input  class="form-input-syle w-50" type="text" id="city" name="city" size="50"></td>
	  </tr>
	  
	  <tr>
	  <td class="font"><b>Pin*:</b></td>
	  <td><input  class="form-input-syle w-50" type="text" id="pin" name="pin" size="50"></td>
	  </tr>
	  
	  <tr>
         <td class="font"><b>Buyer Type</b></td>
        <td><select class="form-input-syle w-50" style="text-align-last:center;" id="type" name="type">
			<option value="one" selected>------category1-------</option>
			<option value="two">category2</option>
			<option value="three">category3</option>
			<option value="four">category4</option>
			</select></td>
      </tr>
	  
	
	  <td class="font"><b>E Mail*:</b></td>
	  <td><input  class="form-input-syle w-50" type="text" id="email" name="email" size="50"></td>
	  </tr>
	  
	  <tr>
        <td class="font"><b>Security Code:</b></td>
        <td><input  class="form-input-syle w-50" type="text" name="capcha" id="capcha" size="50"></td>
        </td>
		</table>
		
		<div class="text-center" style="position:relative;">
		<a href="agreementforbuyer.php"><button type="button" class="btn btn-primary">Agree</button></a>
		
	    <a href="index.html"><button type="button" class="btn btn-primary">Disagree</button></a>
		
		</div>
		</tbody>
	
	
		
	

  </div>
</div>


	 <!---  body  design  -->

        <!---  footer  -->

<?php 
	include('./footer.php');
?>