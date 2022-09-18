<?php /* Template Name: Signup Template */ ?>
<?php get_header() ?>
<script src='http://www.dev.millennialwebdevelopment.com/cargomatic/wp/wp-content/themes/cargomatic/js/frontend-modules.js?ver=5.6.2' id='bundle-frontend-modules-js'></script>
<script src='http://www.dev.millennialwebdevelopment.com/cargomatic/wp/wp-content/themes/cargomatic/js/signup.js?ver=5.6.2' id='bundle-js'></script>
<div id="signup" class="container full-page-form"
     style="background-image:url(<?php $image=get_field('signup-head_background'); echo $image["url"]; ?>)">
	<form id="form" class="form-container">
		<h2 id="title"><?php the_field('signup-title'); ?></h2>
		<p>Select one:</p>
		<div id="select_type" class="radio-group">
			<div class="shipper-container">
				<input id="user-shipper" type="radio" value="shipper" name="userType">
				<label class="checked" for="user-shipper">
					<span class="content">Shipper</span>
				</label>
			</div>

			<div class="carrier-container">
				<input id="user-carrier" type="radio" value="carrier" name="userType">
				<label for="user-carrier">
					<span class="content">Carrier</span>
				</label>
			</div>
		</div>

		<div class="names">
			<div class="form_field first-name">
				<input type="text" name="first_name" id="first_name"
					   placeholder="First name" required
					   maxlength="40">
				<div class="validation-error">
					Please enter your first name.
				</div>
			</div>

			<div class="form_field last-name">
				<input type="text" name="last_name" id="last_name"i
					   placeholder="Last name" required
					   maxlength="40">
				<div class="validation-error">
					Please enter your last name.
				</div>
			</div>
		</div>

		<div class="form_field">
			<input type="text" name="company_name" id="company_name"
			       placeholder="Company name" required
				   maxlength="60">
			<div class="validation-error">
					Please enter your company's name.
			</div>
		</div>

		<div class="form_field phone">
			<input type="text" name="phone" id="phone"
			       placeholder="Phone (555 555 5555)" required
				   maxlength="12" >
			<div class="validation-error">
				Please enter a valid US phone number.
			</div>
		</div>

		<div class="form_field city">
			<input type="text" name="city" id="city"
			       placeholder="City" required>
			<div class="validation-error">
				Please enter a valid city.
			</div>
		</div>

		<div class="form_field state">
			<input type="text" name="state" id="state"
			       placeholder="State" required
				   maxlength="5">
			<div class="validation-error">
				Please enter a valid state.
			</div>
		</div>

		<div class="form_field">
			<input type="text" name="dot_number" id="dot_number"
			       maxlength="20" placeholder="CA/MC number" required>
			<div class="validation-error">
				Please enter your CA/MC number.
			</div>
		</div>

		<div class="form_field">
			<input type="email" name="email" id="email" required
			       placeholder="Email address"
				   maxlength="40">
			<div class="validation-error">
				Please enter a valid email address.
			</div>
		</div>

		<div class="form_field">
			<input type="password" name="password" id="password" required
			       placeholder="Password">
			<div class="validation-error">
				Please enter a password.
			</div>
		</div>

		<div class="form_field terms checkbox-container">
			<label for="terms">
				<input type="checkbox" name="terms" id="terms">
				By Signing up I agree to the
				<a href="<?php the_field('signup-terms_link');?>">Terms of Service</a>
			</label>
			<div class="validation-error">
				Please accept our terms in order to continue.
			</div>
		</div>

		<div class="form_field" id="submit">
			<input type="submit" value="Submit">
		</div>

		<div class="form-error-message">
		</div>

<?php /*
		<div class="form_field">
			<div class="form-sending-field">...sending...</div>

			<a class="primary-button" href="#">
				Submit
			</a>

			<div class="form-sent-field">
				<b>Welcome! You are signed up.</b>
				<br>
				<span>Logging in...</span>
			</div>
		</div>
 */ ?>
	</form>

</div><!-- #signup  -->

<?php get_footer() ?>
