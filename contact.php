<?php include_once ("header.php") ?>
<style>
	#text3d {
    color: #fff;
    /* color: #70869d; */
    letter-spacing: .1em;
    text-shadow: -1px -1px 1px #efede3, 0px 1px 0 #70869d, 0px 2px 0 #70869d, 0px 3px 0 #70869d, 0px 4px 0 #70869d, 0px 5px 0 #70869d, 0px 6px 0 #70869d, 2px 20px 5px rgb(0 0 0 / 12%), 5px 23px 5px rgb(0 0 0 / 9%), 8px 27px 8px rgb(0 0 0 / 11%), 8px 28px 35px rgb(0 0 0 / 0%);
}
label {
    display: inline-block;
    margin-bottom: 0px;
    color: #000;
    font-weight: 600;
    font-family: 'Lora';
}
label span {
    color: #fb0000;
}
.btn.btn-brand
{
	border-color: #ffc107;
    color: #fff;
    font-size: 16px;
    background: #000;
    border-radius: 5px;
}
.btn.btn-brand:hover
{
	border-color: #ffc107;
    color: #000;
    background: #ffc107;
}
.icon-list li {
    display: table;
    margin: 0 0 8px;
    padding: 15px;
    border: 1px solid #0000001c;
    border-radius: 5px;
    border-left: 3px solid #ffc107;
}
.icon-list i, .icon-list span {
    display: table-cell;
    vertical-align: middle;
    font-size: 18px;
    color: #000;
}
.icon-list .fa, .icon-list .icon {
    font-size: 30px;
    width: 1%;
    color: #ffc107;
    padding-right: 15px;
}
a {
    color: #282828;
    -webkit-transition: all 0.3s ease-in-out;
    transition: all 0.3s ease-in-out;
    font-weight: 600;
}
a:hover {
    color: #b89131;
}
</style>
			<!-- Wrapper-->
			<div class="wrapper">

				<!-- Page Header-->
				<section class="module-page-title banner_bg_img">
					<div class="container">
						<div class="row-page-title">
							<div class="page-title-captions">
								<h1 id="text3d" class="h5">Contact Us</h1>
							</div>
						
						</div>
					</div>
				</section>
				<!-- Page Header end-->

				<!-- Contact-->
				
				<!-- Contact end-->
				<section class="" style="    padding: 60px 0px;">
					<div class="container">
						<div class="row">
							<div class="col-md-12 m-auto">
								<div class="module-title text-left">
									<h2>Let´s Talk</h2>
									<p class="font-serif">Feel free to contact us using the following form and one of our account managers will contact you soon.</p>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-8 m-auto">
								<form class="contact_form_cls" action="mail.php" method="POST"  novalidate>
									<div class="row">
											
										<div class="col-md-6">
											<div class="form-group">
												<label for="">Your Name <span>*</span></label>
												<input class="form-control" type="text" name="name" placeholder="Full Name" required="">
												<p class="help-block text-danger"></p>
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label for="">Your Email<span>*</span></label>
												<input class="form-control" type="email" name="email" placeholder="E-mail" required="">
												<p class="help-block text-danger"></p>
											</div>
										</div>
										
	
										<div class="col-md-6">
											<div class="form-group">
												<label for="">Phone Number<span>*</span></label>
												<input class="form-control" type="text" name="number" placeholder="Phone" required="">
												<p class="help-block text-danger"></p>
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label for="">Inquiry Type<span>*</span></label>
												  <select class="form-control" id="demo" name="demo">
												  	<option disabled="" value="">Please Select</option>
		                                            <option value="">General Inquiries</option>
		                                            <option value="">Publisher Inquiries</option>
		                                            <option value="">Advertiser Inquiries</option>
		                                          </select>
											</div>
										</div>

										<div class="col-md-12">
											<div class="form-group">
												<label for="">Description</label>
												<textarea class="form-control" name="message" placeholder="Message" required=""></textarea>
											</div>
										</div>
										<div class="col-md-12">
											<div class="text-center">
												<input class="btn btn-round btn-brand" type="submit" value="Send Request">
											</div>
										</div>
									</div>
								</form>
								<!-- Ajax response-->
								<div class="ajax-response text-center" id="contact-response"></div>
							</div>
							<div class="col-md-4">
								<div class="special-heading">
									<h3>Office</h3>
								</div>
								<p style="font-size: 18px;  color: #000;">Contact Details:-</p>
								<ul class="icon-list">
									<li><span class="icon icon-basic-map"></span> <span>OFFICE (USA)<br>
										11601 Biscayne Blvd Suite 211 B,
										Miami, Florida 33181</span></li>
									<!-- <li><span class="icon icon-basic-headset"></span> <span>+123 45678910</span></li> -->
									<li><span class="icon icon-basic-printer"></span> <span><a href="tel:+1-800-533-8551">+1-800-533-8551</a></span></li>
									<li><span class="icon icon-basic-paperplane"></span> <span><a href="mailto:info@eupclick.com">info@eupclick.com</a></span></li>
								</ul>
							</div>
						</div>
					</div>
				</section>
		<section class="">
					<div class="container-fluid">
						<div class="row">
							<div class="col-md-12">
								<div class="maps-container map-widget ">
									<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2134.3885719918826!2d-80.16589080706618!3d25.88265912487863!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMjXCsDUyJzU3LjMiTiA4MMKwMDknNTYuNCJX!5e0!3m2!1sen!2sin!4v1636457757116!5m2!1sen!2sin" width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
								</div>
							</div>
							
						</div>
					</div>
				</section>
<?php include_once ("footer.php") ?>