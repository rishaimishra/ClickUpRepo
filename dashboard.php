<?php include_once ("header.php") ?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<style>
   .nav-pills-custom .nav-link {
    color: #202020;
    background: #fff;
    position: relative;
    font-size: 20px;
}
i {
        margin-right: 8px;
}
.nav-pills-custom .nav-link.active {
    color: #ffffff;
    background: #ba9235;
}

.tab-content {
    border: 1px solid #ffffff;
    background-color: #fff;
    border-top: 0;
    padding: 20px 18px;
    color: #999;
}
/* Add indicator arrow for the active tab */
@media (min-width: 992px) {
    .nav-pills-custom .nav-link::before {
        content: '';
        display: block;
        border-top: 8px solid transparent;
            border-left: 10px solid #ba9235;
        border-bottom: 8px solid transparent;
        position: absolute;
        top: 50%;
        right: -10px;
        transform: translateY(-50%);
        opacity: 0;
    }
}

.nav-pills-custom .nav-link.active::before {
    opacity: 1;
}
.module, .module-sm {
    background-color: #fff;
    padding: 40px 0;
    padding-top: 150px;
}
table { 
	border-collapse: collapse; 
	/*margin:50px auto;*/
	}

/* Zebra striping */
tr:nth-of-type(odd) { 
	background: #eee; 
	}

th { 
	background: #ba9235; 
	    color: white !important;
	font-weight: bold; 
	}

td, th { 
	padding: 10px; 
	border: 1px solid #ccc; 
	text-align: left; 
	font-size: 15px;
	color: #000;
	line-height: 22px;
	}

/* 
Max width before this PARTICULAR table gets nasty
This query will take effect for any screen smaller than 760px
and also iPads specifically.
*/
@media 
only screen and (max-width: 760px),
(min-device-width: 768px) and (max-device-width: 1024px)  {

	table { 
	  	width: 100%; 
	}

	/* Force table to not be like tables anymore */
	table, thead, tbody, th, td, tr { 
		display: block; 
	}
	
	/* Hide table headers (but not display: none;, for accessibility) */
	thead tr { 
		position: absolute;
		top: -9999px;
		left: -9999px;
	}
	
	tr { border: 1px solid #ccc; }
	
	td { 
		/* Behave  like a "row" */
		border: none;
		border-bottom: 1px solid #eee; 
		position: relative;
		padding-left: 50%; 
	}

	td:before { 
		/* Now like a table header */
		position: absolute;
		/* Top/left values mimic padding */
		top: 6px;
		left: 6px;
		width: 45%; 
		padding-right: 10px; 
		white-space: nowrap;
		/* Label the data */
		content: attr(data-column);

		color: #000;
		font-weight: bold;
	}

}
.table_class
{
        background: #fff;
    border-radius: 10px;
}
.card-container {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
        }

        .card {
            width: 250px;
            background-color: #fff;
            border-radius: 12px;
            overflow: hidden;
            transition: transform 0.2s ease-in-out;
        }

        .card:hover {
            transform: scale(1.05);
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .card-content {
            padding: 20px;
            text-align: left; /* Center the icon and text */
        }

        .icon {
            font-size: 24px; /* Adjust the size of the icon as needed */
            margin-bottom: 10px; /* Add space between the icon and title */
        }

        .card-title {
            font-size: 1.5rem; /* Adjust the title font size as needed */
            font-weight: bold;
            margin-bottom: 10px;
        }

        .card-description {
            font-size: 1rem;
        }
        .card-content h2
        {
            font-size: 18px;
    line-height: 25px;
        }
        .card-content i
        {
        background: #ba9235;
    padding: 13px 10px;
    border-radius: 50px;
    color: #fff;
    font-size: 30px;
    margin-bottom: 10px;
        }
        .card-content h2 span
        {
        color: #ba9235;
    font-weight: 200;
    font-size: 15px;
        }
        .p-5 {
    padding: 0rem 0rem!important;
}
</style>
			<!-- Wrapper-->
			<div class="wrapper">


				<section class="module page-sidebar-left" data-background="assets/images/about-bg-2.jpg">
					<div class="container">
						<div class="row">
            <div class="col-md-3">
                <!-- Tabs nav -->
                <div class="nav flex-column nav-pills nav-pills-custom" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    <a class="nav-link mb-3 p-3 shadow active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">
                        <i class="fas fa-tachometer-alt"></i>
                        <span class="font-weight-bold small ">Dashboard</span></a>

                    <a class="nav-link mb-3 p-3 shadow" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">
                        <i class="fas fa-users"></i>
                        <span class="font-weight-bold small ">Publisher List</span></a>

                    <a class="nav-link mb-3 p-3 shadow" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">
                        <i class="fas fa-users"></i>
                        <span class="font-weight-bold small ">Advertiser List</span></a>

                    <a class="nav-link mb-3 p-3 shadow" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">
                        <i class="fas fa-sign-out-alt"></i>
                        <span class="font-weight-bold small ">Logout</span></a>
                    </div>
            </div>


            <div class="col-md-9">
                <!-- Tabs content -->
                <div class="tab-content" id="v-pills-tabContent">
                    <div class="tab-pane fade  rounded bg-white show active p-5" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                        <div class="card-container module_2">
                            <div class="card">
                                <div class="card-content">
                                    <i class="fas fa-user-check"></i>
                                    <h2 class="card-title">Total Register of Publishers <span>(10)</span></h2>
                                 </div>
                            </div>
                            <div class="card">
                                <div class="card-content">
                                    <i class="fas fa-user-check"></i>
                                    <h2 class="card-title">Total Register of Advertisers <span>(10)</span></h2>
                                </div>
                            </div>
                            
                        </div>
                        		
                        </div>

                    
                    <div class="tab-pane fade  rounded bg-white p-5" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                        <div class="module_2 parallax ">

				<div class="table_class">
				    <h2>Publisher List</h2>
				    <table>
                        <thead>
                        <tr>
                          <th>Full Name</th>
                          <th>Email Address</th>
                          <th>Phone Number</th>
                          <th>What traffic do you want to monetize</th>
                          <th>Business Name</th>
                          <th>IP Address</th>
                          <th>Zipcode </th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                          <td data-column="Full Name">Test Test</td>
                          <td data-column="Email Address">Test@gmail.com</td>
                          <td data-column="Phone Number">9876543210</td>
                          <td data-column="How Did You Hear About Us">Test TestTest Test</td>
                          <td data-column="Business Name">Test Test</td>
                          <td data-column="IP Address">9.8.7.6.4.1</td>
                          <td data-column="Zipcode">654213</td>
                        </tr>
                        
                        </tbody>
                        </table>
                			</div>
                		</div>
                    </div>
                    
                    <div class="tab-pane fade  rounded bg-white p-5" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                        <div class="module_2 parallax ">

				<div class="table_class">
				    <h2>Advertiser List</h2>
				    <table>
                        <thead>
                        <tr>
                          <th>Full Name</th>
                          <th>Email Address</th>
                          <th>Phone Number</th>
                          <th>How Did You Hear About Us</th>
                          <th>Business Name</th>
                          <th>IP Address</th>
                          <th>Zipcode </th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                          <td data-column="Full Name">Test Test</td>
                          <td data-column="Email Address">Test@gmail.com</td>
                          <td data-column="Phone Number">9876543210</td>
                          <td data-column="How Did You Hear About Us">Test TestTest Test</td>
                          <td data-column="Business Name">Test Test</td>
                          <td data-column="IP Address">9.8.7.6.4.1</td>
                          <td data-column="Zipcode">654213</td>
                        </tr>
                        
                        </tbody>
                        </table>
                			</div>
                		</div>
                    </div>
                    
                    <!--<div class="tab-pane fade  rounded bg-white p-5" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
                        <h4 class="font-italic mb-4">Confirm booking</h4>
                        <p class="font-italic text-muted mb-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    </div>-->
                </div>
            </div>
        </div>
					</div>
				</section>

<?php include_once ("footer.php") ?>