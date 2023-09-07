<?php include_once ('header.php') ?>
<style>
    .service-item:hover .service-text {
    background: rgb(10 95 152);
}
.contact_f_cls {
    background: #f1f1f1;
    padding-top: 40px;
    border: 1px solid #d0e6f000;
    border-radius: 5px;
    box-shadow: none;
}
.review_cls
{
       display: flex;
    justify-content: space-between;
    background: #f1f1f1ad;
    align-items: center;
    padding: 5px 20px;
    border-radius: 6px;
    border: 1px solid #f34d3424;
    border-style: dashed;
    margin-bottom: 15px;
}
.section-title {
        position: relative;
    display: block;
    margin-top: -7px;
    margin-bottom: 10px;
}
.text-primary {
       color: #bf9c3b!important;
    font-size: 20px;
}

.btn-primary {
    color: #fff;
    background-color: #38393b;
    border-color: #ffc107;
}
.btn-primary:hover {
        color: #38393b;
    background-color: #ffc107;
    border-color: #38393b;
}
.form_cls
{
    background: #fff;
    padding: 25px 10px;
    border-radius: 10px;
}
.review_text h4
{
        margin-bottom: 0px;
    font-size: 18px;
    font-weight: 500;
}
.lebel_cls {
    display: inline-block;
    margin-bottom: 0px;
    color: #000;
    font-weight: 500;
}
.form-floating
{
    margin-bottom: 15px;
}
.form-control, .input-group-addon {
    border-color: #ced4da;
}
</style>
<!-- Page Header-->
				<section class="module-page-title banner_bg_img">
					<div class="container">
						<div class="row-page-title">
							<div class="page-title-captions">
								<h1 id="text3d" class="h5">Customer Reviews</h1>
							</div>
						
						</div>
					</div>
				</section>
				<!-- Page Header end-->

    <!-- About Start -->
    <div class="section_pad" style="padding-bottom: 40px;padding-top: 50px;border-top: 1px solid #e1e1e1;">
        <div class="container">
            <div class="row g-5">                
                <div class="col-lg-12 wow fadeInUp" data-wow-delay="0.3s">
                    <h6 class="section-title bg-white text-start text-primary pe-3">Customer Reviews</h6>
                    <h1 class="mb-4">Your opinion matters!</h1>
                    <p style="    font-size: 17px;    color: #000;">Help us to improve by sharing your experience for your recent order.<br> Rate your experience on the quality of service of our representatives.</p>                   
                </div>
            </div>
        </div>
    </div>
   
    <form class="contact_f_cls" action="#" method="post" data-background="assets/images/4853433.jpg" style="background-size: cover;
    background-repeat: no-repeat;">
    <div class="section_pad" style="padding-bottom: 15px;">
        <div class="container">
            <div class="row g-5"> 
            <div class="col-lg-12 wow fadeInUp" data-wow-delay="0.3s">
                    <h6 class="section-title  text-start text-primary pe-3">Overall rating</h6>
                </div>
                <div class="col-lg-12 wow fadeInUp" data-wow-delay="0.3s" style="margin-top: 0px;">
                    <div class="review_cls bg-white">
                        <div class="review_text">
                        <h4>Overall how would you rate our service?</h4>
                    </div>
                    <div id="full-stars-example-two">
                    <div class="rating-group">
                        <input disabled checked class="rating__input rating__input--none" name="rating4" id="rating4-none" value="0" type="radio">
                        <label aria-label="1 star" class="rating__label" for="rating4-1"><i class="rating__icon rating__icon--star fa fa-star"></i></label>
                        <input class="rating__input" name="rating4" id="rating4-1" value="1" type="radio">
                        <label aria-label="2 stars" class="rating__label" for="rating4-2"><i class="rating__icon rating__icon--star fa fa-star"></i></label>
                        <input class="rating__input" name="rating4" id="rating4-2" value="2" type="radio">
                        <label aria-label="3 stars" class="rating__label" for="rating4-3"><i class="rating__icon rating__icon--star fa fa-star"></i></label>
                        <input class="rating__input" name="rating4" id="rating4-3" value="3" type="radio">
                        <label aria-label="4 stars" class="rating__label" for="rating4-4"><i class="rating__icon rating__icon--star fa fa-star"></i></label>
                        <input class="rating__input" name="rating4" id="rating4-4" value="4" type="radio">
                        <label aria-label="5 stars" class="rating__label" for="rating4-5"><i class="rating__icon rating__icon--star fa fa-star"></i></label>
                        <input class="rating__input" name="rating4" id="rating4-5" value="5" type="radio">
                    </div>
                    </div>
                    </div>
                </div>
                <div class="col-lg-12 wow fadeInUp" data-wow-delay="0.3s" style="margin-top: 0px;">
                    <div class="review_cls bg-white">
                        <div class="review_text">
                        <h4>Would you tell your friends or colleagues about our services?</h4>
                    </div>
                    <div id="full-stars-example-two">
                    <div class="rating-group">
                        <input disabled checked class="rating__input rating__input--tw" name="rating3" id="rating3-tw" value="0" type="radio">
                        <label aria-label="1 star" class="rating__label" for="rating3-1"><i class="rating__icon rating__icon--star fa fa-star"></i></label>
                        <input class="rating__input" name="rating3" id="rating3-1" value="1" type="radio">
                        <label aria-label="2 stars" class="rating__label" for="rating3-2"><i class="rating__icon rating__icon--star fa fa-star"></i></label>
                        <input class="rating__input" name="rating3" id="rating3-2" value="2" type="radio">
                        <label aria-label="3 stars" class="rating__label" for="rating3-3"><i class="rating__icon rating__icon--star fa fa-star"></i></label>
                        <input class="rating__input" name="rating3" id="rating3-3" value="3" type="radio">
                        <label aria-label="4 stars" class="rating__label" for="rating3-4"><i class="rating__icon rating__icon--star fa fa-star"></i></label>
                        <input class="rating__input" name="rating3" id="rating3-4" value="4" type="radio">
                        <label aria-label="5 stars" class="rating__label" for="rating3-5"><i class="rating__icon rating__icon--star fa fa-star"></i></label>
                        <input class="rating__input" name="rating3" id="rating3-5" value="5" type="radio">
                    </div>
                    </div>
                    </div>
                </div>
                <div class="col-lg-12 wow fadeInUp" data-wow-delay="0.3s" style="margin-top: 0px;">
                    <div class="review_cls bg-white">
                        <div class="review_text">
                        <h4>How was your experience with customer support? </h4>
                    </div>
                    <div id="full-stars-example-two">
                    <div class="rating-group">
                        <input disabled checked class="rating__input rating__input--th" name="rating-5" id="rating-5-th" value="0" type="radio">
                        <label aria-label="1 star" class="rating__label" for="rating-5-1"><i class="rating__icon rating__icon--star fa fa-star"></i></label>
                        <input class="rating__input" name="rating-5" id="rating-5-1" value="1" type="radio">
                        <label aria-label="2 stars" class="rating__label" for="rating-5-2"><i class="rating__icon rating__icon--star fa fa-star"></i></label>
                        <input class="rating__input" name="rating-5" id="rating-5-2" value="2" type="radio">
                        <label aria-label="3 stars" class="rating__label" for="rating-5-3"><i class="rating__icon rating__icon--star fa fa-star"></i></label>
                        <input class="rating__input" name="rating-5" id="rating-5-3" value="3" type="radio">
                        <label aria-label="4 stars" class="rating__label" for="rating-5-4"><i class="rating__icon rating__icon--star fa fa-star"></i></label>
                        <input class="rating__input" name="rating-5" id="rating-5-4" value="4" type="radio">
                        <label aria-label="5 stars" class="rating__label" for="rating-5-5"><i class="rating__icon rating__icon--star fa fa-star"></i></label>
                        <input class="rating__input" name="rating-5" id="rating-5-5" value="5" type="radio">
                    </div>
                    </div>
                    </div>
                </div>
                <div class="col-lg-12 wow fadeInUp" data-wow-delay="0.3s" style="margin-top: 0px;">
                    <div class="review_cls bg-white">
                        <div class="review_text">
                        <h4>How do you rate the quality of our services as compared to our competitors?</h4>
                    </div>
                    <div id="full-stars-example-two">
                    <div class="rating-group">
                        <input disabled checked class="rating__input rating__input--fo" name="rating-6" id="rating-6-fo" value="0" type="radio">
                        <label aria-label="1 star" class="rating__label" for="rating-6-1"><i class="rating__icon rating__icon--star fa fa-star"></i></label>
                        <input class="rating__input" name="rating-6" id="rating-6-1" value="1" type="radio">
                        <label aria-label="2 stars" class="rating__label" for="rating-6-2"><i class="rating__icon rating__icon--star fa fa-star"></i></label>
                        <input class="rating__input" name="rating-6" id="rating-6-2" value="2" type="radio">
                        <label aria-label="3 stars" class="rating__label" for="rating-6-3"><i class="rating__icon rating__icon--star fa fa-star"></i></label>
                        <input class="rating__input" name="rating-6" id="rating-6-3" value="3" type="radio">
                        <label aria-label="4 stars" class="rating__label" for="rating-6-4"><i class="rating__icon rating__icon--star fa fa-star"></i></label>
                        <input class="rating__input" name="rating-6" id="rating-6-4" value="4" type="radio">
                        <label aria-label="5 stars" class="rating__label" for="rating-6-5"><i class="rating__icon rating__icon--star fa fa-star"></i></label>
                        <input class="rating__input" name="rating-6" id="rating-6-5" value="5" type="radio">
                    </div>
                    </div>
                    </div>
                </div>
                <div class="col-lg-12 wow fadeInUp" data-wow-delay="0.3s" style="margin-top: 0px;">
                    <div class="review_cls bg-white">
                        <div class="review_text">
                        <h4>How pleased are you with the selection of services we provide?</h4>
                    </div>
                    <div id="full-stars-example-two">
                    <div class="rating-group">
                        <input disabled checked class="rating__input rating__input--fi" name="rating7" id="rating7-fi" value="0" type="radio">
                        <label aria-label="1 star" class="rating__label" for="rating7-1"><i class="rating__icon rating__icon--star fa fa-star"></i></label>
                        <input class="rating__input" name="rating7" id="rating7-1" value="1" type="radio">
                        <label aria-label="2 stars" class="rating__label" for="rating7-2"><i class="rating__icon rating__icon--star fa fa-star"></i></label>
                        <input class="rating__input" name="rating7" id="rating7-2" value="2" type="radio">
                        <label aria-label="3 stars" class="rating__label" for="rating7-3"><i class="rating__icon rating__icon--star fa fa-star"></i></label>
                        <input class="rating__input" name="rating7" id="rating7-3" value="3" type="radio">
                        <label aria-label="4 stars" class="rating__label" for="rating7-4"><i class="rating__icon rating__icon--star fa fa-star"></i></label>
                        <input class="rating__input" name="rating7" id="rating7-4" value="4" type="radio">
                        <label aria-label="5 stars" class="rating__label" for="rating7-5"><i class="rating__icon rating__icon--star fa fa-star"></i></label>
                        <input class="rating__input" name="rating7" id="rating7-5" value="5" type="radio">
                    </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End --> 
    <div class="section_pad" style="padding-bottom: 40px;">
        <div class="container">
            <div class="row g-5">                
                <div class="col-lg-7 col-md-12 wow fadeInUp" data-wow-delay="0.5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;">
                        <div class="row g-3 form_cls">
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <label for="name" class="lebel_cls">Your Name</label>
                                    <input type="text" class="form-control" id="name" name="name" placeholder="Your Name" required>
                                    
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <label for="email" class="lebel_cls">Your Email</label>
                                    <input type="email" class="form-control" id="email" name="email" placeholder="Your Email"  required>
                                    
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-floating">
                                    <label for="pnone_number" class="lebel_cls">Phone Number</label>
                                    <input type="text" class="form-control" id="pnone_number" name="phone" placeholder="Pnone Number" required>
                                    
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-floating">
                                    <label for="order_number" class="lebel_cls">Order Number</label>
                                    <input type="text" class="form-control" id="order_number" name="order" placeholder="Order Number" required>
                                    
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <label for="message" class="lebel_cls">Add a written review</label>
                                    <textarea class="form-control" placeholder="Leave a message here" id="message" style="height: 150px" name="review" required></textarea>
                                    
                                </div>
                            </div>
                            <div class="col-12 text-center">
                                <!-- <button class="btn btn-primary " type="submit" style=" padding: 3px 40px;  border-radius: 6px;">Submit reviews</button> -->
                                <input type="submit" class="btn btn-primary " name="submit" style="padding: 8px 40px;border-radius: 6px;font-size: 18px;text-transform: capitalize;">
                            </div>
                        </div>
                </div>
                <div class="col-lg-5 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="assets/images/customerservice.png" alt="" style="object-fit: cover;">
                    </div>                   
                </div>
                
            </div>
        </div>
    </div>
    </form>
    <!-- About End --> 
    <div class="section_pad" style="padding: 40px 0px;">
        <div class="container">
            <div class="row g-5">                
                <div class="col-lg-12 wow fadeInUp" data-wow-delay="0.3s">
                    <h1 class="mb-4">Why reviews are important</h1>
                    <p class="mb-4" style="    font-size: 17px;    color: #000;">Our representative looks forward for your reviews, which makes them feel confident providing services to customers. Think about your experience with our representative & the effort they put in giving you the best services. Which quality of ours do you want other customers to know? Honest feedback creates trust, and we look forward to your review to provide you with the best services.</p>  
                    <p style="    font-size: 17px;    color: #000;">Thank You for your feedback<br><strong>eUpClick Team</strong></p>
                </div>
            </div>
        </div>
    </div>

 <?php include_once ("footer.php") ?>