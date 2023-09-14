<?php
session_start();
include_once ("header.php") ?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        
<style>
   .module_2
   {
     padding-top: 120px;
   }
   .pub_cls_h h4
   {
       font-size: 40px;
   }
   .pub_cls_h h3
   {
           font-weight: 400;
   }
   .ul_li_cls ul li
   {
           display: flex;
    margin-bottom: 30px;
        align-items: center;
   }
   .ul_li_cls_2 ul li
   {
    display: flex;
    margin-bottom: 30px;
    align-items: center;
    background: #fff;
    box-shadow: 0px 0px 10px 0px #0000001f;
    border-radius: 10px;
    border-left: 5px solid #ba9235;
    border-left-style: double;
    padding: 20px;
   }
   .icon_cls_div img
   {
      margin-right: 20px;
   }
   .form-control {
    height: 45px;
}
label {
    display: inline-block;
    color: #484848;
    margin-bottom: 0px;
    font-weight: 700;
}
.checkbox label {
    font-weight: 400;
}
.btn.btn-brand {
    border-color: #ffc107;
    color: #fff;
    background: #383838;
    font-size: 18px;
    border-radius: 6px;
    padding: 10px 30px;
    text-transform: capitalize;
}
.contact_form_cls {
    box-shadow: 0px 1px 2px 1px #0000005c;
    padding: 25px 40px;
    border-radius: 6px;
    background: #fff;
}
.form-control, .input-group-addon {
    border-color: #cbcbcb;
}
.pub_cls_h
{
    margin-top: 70px;
}
.text_cls_div h3
{
    margin-bottom: 10px; 
}
.text_cls_div p
{
      margin-bottom: 0px;  
}
.text_cls_div p
{
        font-size: 17px;
    line-height: 22px;
    color: #424242;
}
.icon_cls_div i
{
    font-size: 30px;
    background: #ba9235;
    border: 1px solid #38393b;
    padding: 5px;
    margin-right: 20px;
    border-radius: 50px;
    color: #fff;
}
.cls_text p {
    font-size: 18px;
    color: #000;
    line-height: 22px;
}
h4
{
        font-size: 22px;
    margin-bottom: 10px;
}
</style>

<script>
	function validateAdvertiserForm() {
	let x = document.forms["myAdvForm"]["name"].value;
	let y = document.forms["myAdvForm"]["email"].value;
	let pass = document.forms["myAdvForm"]["pass"].value;
	let z = document.forms["myAdvForm"]["number"].value;
	let business_name = document.forms["myAdvForm"]["business_name"].value;
	let business_address = document.forms["myAdvForm"]["business_address"].value;
	let demo = document.forms["myAdvForm"]["demoQ"].value;
	let zip = document.forms["myAdvForm"]["zip"].value;
	if (x == "") {
		alert("Name must be filled out");
		return false;
	}
	if (y == "") {
		alert("Email must be filled out");
		return false;
	}else{
		var emailFormat = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
		if (!emailFormat.test(y)) {
			alert('Please provide a valid email address');
			return false;
		}
	}
    if (pass == "") {
		alert("Password must be filled out");
		return false;
	}
    if (z == "") {
		alert("Phone must be filled out");
		return false;
	}else{
		// var phoneno = /^\d{10}$/;
		var phoneno = /^(\d{3})[- ]?(\d{3})[- ]?(\d{4})$/;
		if(z.match(phoneno))
		{
			console.log(1111);
			// return true;
		}
		else
		{
			console.log(2222);
			alert("Not a valid Phone Number");
			return false;
		}
	}

    
    if (demo == 0) {
		alert("Choose how you hear about us");
		return false;
	}

    if (business_name == "") {
		alert("Business name must be filled out");
		return false;
	}
    if (business_address == "") {
		alert("Business address must be filled out");
		return false;
	}

	
	
    if (zip == "") {
		alert("Zip Code must be filled out");
		return false;
	}else{
		var phoneno = /^\d{5}$/;
		// var phoneno = /^(\d{3})[- ]?(\d{3})[- ]?(\d{4})$/;
		if(zip.match(phoneno))
		{
			console.log(1111);
			return true;
		}
		else
		{
			console.log(2222);
			alert("Not a valid Zip Code");
			return false;
		}
	}


}

</script>


<section class="module_2 parallax " data-background="assets/images/about-bg-2.jpg">
	<div class="container">
		<div class="row">
			
			<div class="col-md-6 cls_text">
				<div class="pub_cls_h">
					<h4>Looking for Traffic?</h4>
					<h3>Start here - it's quick and easy!</h3>
				</div>
				<div class="ul_li_cls">
				    <ul>
				        <li>
				            <div class="icon_cls_div">
				                <img src="assets/images/icon-l4.png">
				            </div>
				            <div class="text_cls_div">
				                <h3>Endless Direct Traffic</h3>
				                <p>Over 1 Billion highly performing users.</p>
				            </div>
				        </li>
				        <li>
				            <div class="icon_cls_div">
				                <img src="assets/images/icon-l2.png">
				            </div>
				            <div class="text_cls_div">
				                <h3>Dedicated Support</h3>
				                <p>A dedicated account manager.</p>
				            </div>
				        </li>
				        <li>
				            <div class="icon_cls_div">
				                <img src="assets/images/icon-l5.png">
				            </div>
				            <div class="text_cls_div">
				                <h3>Transparency</h3>
				                <p>Accurate reports on your online reporting panel.</p>
				            </div>
				        </li>
				        <li>
				            <div class="icon_cls_div">
				                <img src="assets/images/icon-l6.png">
				            </div>
				            <div class="text_cls_div">
				                <h3>Multiple Ad Formats</h3>
				                <p>From full-screen ads to push notifications.</p>
				            </div>
				        </li>
				    </ul>
				</div>
			</div>
                                  
			<div class="col-md-6">
                                    <?php 
									if (isset($_SESSION['successAdv'])) { ?>
									<div class="alert alert-warning alert-dismissible fade show" role="alert">
									<strong>Hey!</strong> <?php echo $_SESSION['successAdv']; ?>
									<button type="button" class="close" data-dismiss="alert" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
									</div>
									<?php 	
											unset($_SESSION['successAdv']);
										}
									?>
				<form class="contact_form_cls" name="myAdvForm" action="mail.php" method="POST" onsubmit="return validateAdvertiserForm()" novalidate="">
				    <h3 style="color: #b99334;">Register</h3>
                    <div class="row">
                    <div class="col-md-12">
                    <div class="form-group">
                    <label for="">Full Name <span>*</span></label>
                    <input class="form-control" type="text" name="name" placeholder="Full Name" required="">
                    <p class="help-block text-danger"></p>
                    </div>
                    </div>
                    <div class="col-md-12">
                    <div class="form-group">
                    <label for="">Your Email<span>*</span></label>
                    <input class="form-control" type="email" name="email" placeholder="@email" required="">
                    <p class="help-block text-danger"></p>
                    </div>
                    </div>
                    <div class="col-md-12">
                    <div class="form-group">
                    <label for="">Password<span>*</span></label>
                    <input class="form-control" type="password" name="pass" placeholder="Password" required="">
                    <p class="help-block text-danger"></p>
                    </div>
                    </div>
                    <div class="col-md-12">
                    <div class="form-group">
                    <label for="">Phone Number<span>*</span></label>
                    <input class="form-control" type="text" name="number" placeholder="#" required="">
                    <p class="help-block text-danger"></p>
                    </div>
                    </div>
                    <div class="col-md-12">
                    <div class="form-group">
                    <label for="">How Did You Hear About Us?<span>*</span></label>
                    <select class="form-control" id="demo" name="demoQ" required>
                     <option value="0" selected="" disabled="" hidden="">Choose from the list</option>
                    <option value="conference">Conference</option><option value="google">Google Search</option><option value="blog">Forum/Blog</option><option value="social">Social</option><option value="ad">Advertisement</option><option value="friend">A Friend Recommended</option><option value="other">Other</option>
                    </select>
                    </div>
                    </div>
                    
                    <div class="col-md-12">
                    <div class="form-group">
                    <label for="">Business Name</label>
                    <input class="form-control" type="text" name="business_name" placeholder="Business Name" required="">
                    <p class="help-block text-danger"></p>
                    </div>
                    </div>
                    <div class="col-md-12">
                    <div class="form-group">
                    <label for="">Business Address</label>
                    <input class="form-control" type="text" name="business_address" placeholder="Business Address" required="">
                    <p class="help-block text-danger"></p>
                    </div>
                    </div>
                    <div class="col-md-4">
                    <div class="form-group">
                    <label for="">City</label>
                    <input class="form-control" type="text" name="city" placeholder="City" required="">
                    <p class="help-block text-danger"></p>
                    </div>
                    </div>
                    <div class="col-md-4">
                    <div class="form-group">
                    <label for="">State</label>
                    <select class="form-control" id="demo" name="state">
                     <option value="" selected="" disabled="" hidden="">Select State..</option>
                    <option value="Alabama">Alabama</option>
                    <option value="Alaska">Alaska</option>
                    <option value="Arizona">Arizona</option>
                    <option value="California">California</option>
                    <option value="Colorado">Colorado</option>
                    <option value="Delaware">Delaware</option>
                    <option value="Florida">Florida</option>
                    <option value="Georgia">Georgia</option>
                    <option value="Hawaii">Hawaii</option>
                    </select>
                    </div>
                    </div>
                    <div class="col-md-4">
                    <div class="form-group">
                    <label for="">Zipcode</label>
                    <input class="form-control" type="text" name="zip" placeholder="Zipcode" required="">
                    <p class="help-block text-danger"></p>
                    </div>
                    </div>
                    
                    <div class="col-md-12">
                    <div class="form-group">
                        <div class="checkbox">
                        <label><input type="checkbox"> I agree to eUpClick's <a href="terms-of-use.php"><strong>Terms of Use</strong></a> and to receive emails & updates.</label>
                      </div>
                    </div>
                    </div>
                    <div class="col-md-12">
                    <div class="text-center">
                    <input class="btn btn-round btn-brand" type="submit" name="AdvSubmit" value="Sign up">
                    </div>
                    </div>
                    <div class="col-md-12">
                    <div class="text-center" style="    margin-top: 10px;">
                    <!--<a href="#" style="font-size: 20px;color: #ba9235;">I'm already a member! Login</a>-->
                    </div>
                    </div>
                    </div>
                    </form>
			</div>
		</div>
	</div>
</section>
<section class="module">
<div class="container">
<div class="row">
<div class="col-md-12">
<div class="special-heading">
	<h4>Our Advertisers Love Us – This Is Why</h4>
</div>
<div class="ul_li_cls_2">
<ul>
<li>
<div class="icon_cls_div">
<i class="fas fa-hand-point-right"></i>
</div>
<div class="text_cls_div">
<h3>Lots of Traffic</h3>
<p>Over 2 billion daily impressions worldwide, generated from native push notifications, popunders and other ad formats.</p>
</div>
</li>
<li>
<div class="icon_cls_div">
<i class="fas fa-hand-point-right"></i>
</div>
<div class="text_cls_div">
<h3>High Performance</h3>
<p>Whether it's CPM, CPC or CPA - we aim for an increased ROI from your campaign budget.</p>
</div>
</li>
<li>
<div class="icon_cls_div">
<i class="fas fa-hand-point-right"></i>
</div>
<div class="text_cls_div">
<h3>Easy Integration</h3>
<p>Self-service, managed CPA with auto optimization or programmatic endpoint integration - we support it all. Just name it.</p>
</div>
</li>
<li>
<div class="icon_cls_div">
<i class="fas fa-hand-point-right"></i>
</div>
<div class="text_cls_div">
<h3>Dedicated Support</h3>
<p>We are here for you! eUpClick isn't just an ad network - it's a place to grow together. Our support will assist you with any question.</p>
</div>
</li>
<li>
<div class="icon_cls_div">
<i class="fas fa-hand-point-right"></i>
</div>
<div class="text_cls_div">
<h3>Multiple Payment Options</h3>
<p>Use your favorite payment method to advertise with us: Paypal, credit card, Payoneer, wire and more!</p>
</div>
</li>
<li>
<div class="icon_cls_div">
<i class="fas fa-hand-point-right"></i>
</div>
<div class="text_cls_div">
<h3>Protect Your Brand</h3>
<p>Ad fraud is rare with eUpClick. We use the market's strongest anti-fraud tools together with our in-house technology.</p>
</div>
</li>
</ul>
</div>
</div>

</div>
</div>
</section>
<section class="module_2 parallax" data-background="assets/images/about-bg-2.jpg" style="padding-top: 40px;">
	<div class="container">
		<div class="row">
			
			<div class="col-md-6 cls_text">
				<div class="special-heading">
					<h4>Start Your Campaign Immediately</h4>
				</div>
				<p>
					Our self-service platform makes setup quick, easy and hassle-free. Time is money!
				</p>
				<p>Advanced reporting, API access, multiple targeting options and dedicated support are available.</p>
				<p>
					Making money out of your content is quick and easy with eUpClick - give us 5 minutes, and we'll have you up and running!
				</p>
				<a class="btn btn-lg btn-circle btn-dark bg-warning text-dark"  href="#">Monetize your traffic</a>
			</div>
			<div class="col-md-6">
				<p>
					<img src="assets\images\digital-marketing-megaphone-advertising-5.png">
				</p>
			</div>
		</div>
	</div>
</section>


	<?php include_once ("footer.php") ?>