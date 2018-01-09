<div class="header" style="background: black;">
<div class="container ">



<form action="doprofile.php" name="profileForm" id="profileForm" method="POST">
<div class="profile-form">
<div class="in-title">
<h3>Profile Details</h3>
</div>
<div class="form-group">
<label>Name : <span>*</span></label>
<input type="text" name="profile_name" placeholder="Name" class="form-control" style="width: 100% !important;" required />
</div>

<div class="form-group">
<label>Email : <span>*</span></label>
<input type="text" name="profile_email" placeholder="Email" class="form-control" style="width: 100% !important;" required />
</div>

<div class="form-group">
<label>Mobile : <span>*</span></label>
<input type="text" name="profile_mobile" placeholder="Mobile" class="form-control" style="width: 100% !important;" required />
</div>
<div class="form-group">
<label>Address : <span>*</span></label>
<textarea name="profile_address" placeholder="Address" class="form-control" style="width: 100% !important;" required ></textarea>
</div>
<div class="form-group">
<label>Country : <span>*</span></label>
<select name="profile_country" class="form-control" style="width: 100% !important;" required />
<option value="">Select Country</option>
<?php foreach($country_results as $country_result) { ?>
<option value="<?php echo $country_result['id']; ?>"><?php echo $country_result['name']; ?></option> 
<?php } ?>
</select>
</div>
<div class="form-group">
<label>State : <span>*</span></label>
<select name="profile_state" class="form-control" style="width: 100% !important;" required />
<option value="">Select State</option>
<?php foreach($state_results as $state_result) { ?>
<option value="<?php echo $state_result['id']; ?>"><?php echo $state_result['name']; ?></option> 
<?php } ?>
</select>
</div>
<div class="form-group">
<label>City : <span>*</span></label>
<select name="profile_city" class="form-control" style="width: 100% !important;" required />
<option value="">Select City</option>
<?php foreach($city_results as $city_result) { ?>
<option value="<?php echo $city_result['id']; ?>"><?php echo $city_result['name']; ?></option> 
<?php } ?>
</select>
</div>
<div class="form-group">
<label>Pincode : <span>*</span></label>
<input type="text" name="profile_pincode" placeholder="Pincode" class="form-control" style="width: 100% !important;" required />
</div>

<div class="form-group request-submit">
<input type="submit" name="profileUpdate" value="Update Profile" class="submit" />
</div>
 
</div><!--Query Form-->
</form>

