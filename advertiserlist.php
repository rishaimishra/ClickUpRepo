<?php include_once ("header.php") ?>

        
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
table { 
	width: 750px; 
	border-collapse: collapse; 
	/*margin:50px auto;*/
	}

/* Zebra striping */
tr:nth-of-type(odd) { 
	background: #eee; 
	}

th { 
	background: #c9ad65; 
	    color: white !important;
	font-weight: bold; 
	}

td, th { 
	padding: 10px; 
	border: 1px solid #ccc; 
	text-align: left; 
	font-size: 18px;
	color: #000;
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
    padding: 20px;
    border-radius: 10px;
}
</style>	

<section class="module_2 parallax " data-background="assets/images/about-bg-2.jpg">
	<div class="container">
		<div class="row">
			
			<div class="col-md-9 cls_text">
				<div class="table_class">
				    <h2>Advertiser List</h2>
				    <table>
  <thead>
    <tr>
      <th>Full Name</th>
      <th>Email Address</th>
      <th>Phone Number</th>
      <th>How Did You Hear About Us</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td data-column="cls">Full Name</td>
      <td data-column="cls">Email Address</td>
      <td data-column="cls">Phone Number</td>
      <td data-column="cls">How Did You Hear About Us</td>
    </tr>
    
  </tbody>
</table>
				</div>
			</div>
			
		</div>
	</div>
</section>

		
	<?php include_once ("footer.php") ?>