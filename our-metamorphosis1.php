<?php include_once( 'header.php'); ?>
<style>
	.main-timeline1:after{
    content: '';
    display: block;
    clear: both;
}
.main-timeline1:before{
    content: '';
    height: 100%;
    width: 3px;
    border-left: 3px solid #555;
    transform: translateX(-50%);
    position: absolute;
    top: 0;
    left: 50%;
}
.main-timeline1 .timeline1{
    width: 50%;
    padding: 15px 15px 15px 55px;
    margin: 100px 0 0 5px;
    float: right;
    position: relative;
    z-index: 1;
}
.main-timeline1 .timeline1:before{
    content: '';
    background-color: #52d648;
    height: 20px;
    width: 20px;
    border-radius: 50%;
    transform: translateY(-50%);
    position: absolute;
    left: -10px;
    top: 25%;
}
.main-timeline1 .timeline-content1{
    color: #777;
    background: rgba(255,255,255,0.9);
    text-align: center;
    padding: 15px;
    border-radius: 20px;
    box-shadow: 0 0 15px rgba(0, 0, 0, 0.08);
    display: block;
    position: relative;
}
.main-timeline1 .timeline-content1:hover{ text-decoration: none; }
.main-timeline1 .timeline-content1:before,
.main-timeline1 .timeline-content1:after{
    content: "";
    background: #d4d4d4;
    width: 35px;
    height: 35px;
    transform: translateY(-50%) rotate(45deg);
    position: absolute;
    top: 25%;
    left: -16px;
    z-index: -1;
}
/*.main-timeline1 .timeline-content1:after{
    background: linear-gradient(to left, transparent, #52d648);
    height: auto;
    width: auto;
    border-radius: 20px;
    transform: translateY(0);
    left: -15px;
    right: -15px;
    top: -15px;
    bottom: -15px;
    z-index: -2;
}*/
.main-timeline1 .timeline-icon1{
    color: #555;
    font-size: 30px;
    font-weight: 600;
    line-height: 35px;
    margin: 0 0 10px;
}
.main-timeline1 .title{
    color: #52d648;
    font-size: 25px;
    font-weight: 500;
    text-transform: uppercase;
    margin: 0 0 10px 0;
}
.main-timeline1 .description{
    font-size: 14px;
    line-height: 22px;
    letter-spacing: 1px;
    margin: 0;
}
.main-timeline1 .timeline1:nth-child(even){
    padding: 15px 55px 15px 15px;
    margin: 0 5px 0 0;
    float: left;
}
.main-timeline1 .timeline1:nth-child(even):before{
    left: auto;
    right: -10px;
}
.main-timeline1 .timeline1:nth-child(even) .timeline-content1:before{
    left: auto;
        right: -15px;
    z-index: -1;
}
 
.main-timeline1 .timeline1:nth-child(4n+2) .timeline-content1:after{
    background: linear-gradient(to left, transparent, #37B2DE);
    display: none;
}
.main-timeline1 .timeline1:nth-child(4n+2) .title{     color: #37B2DE; }
.main-timeline1 .timeline1:nth-child(4n+3):before,
.main-timeline1 .timeline1:nth-child(4n+3) .timeline-content1:before{
    background-color: #F38F31
}
.main-timeline1 .timeline1:nth-child(4n+3) .timeline-content1:after{
    background: linear-gradient(to left, transparent, #F38F31);
}
.main-timeline1 .timeline1:nth-child(4n+3) .title{ color: #F38F31; }
.main-timeline1 .timeline1:nth-child(4n+4):before,
.main-timeline1 .timeline1:nth-child(4n+4) .timeline-content1:before{
    background-color: #E65455
}
.main-timeline1 .timeline1:nth-child(4n+4) .timeline-content1:after{
    background: linear-gradient(to left, transparent, #E65455);
}
.main-timeline1 .timeline1:nth-child(4n+4) .title{ color: #E65455; }
@media screen and (max-width:767px){
    .main-timeline1:before{
        transform: translateX(-50%);
        left: 18px;
    }
    .main-timeline1 .timeline1,
    .main-timeline1 .timeline1:nth-child(even){
        width: 100%;
        padding: 15px 15px 15px 55px;
        margin: 0 0 30px;
    }
    .main-timeline1 .timeline1:before,
    .main-timeline1 .timeline1:nth-child(even):before{
        left: -7px;
    }
    .main-timeline1 .timeline-content1:before,
    .main-timeline1 .timeline1:nth-child(even) .timeline-content1:before{
        left: -33px;
        right: auto;
    }
    .main-timeline1 .timeline1:nth-child(even) .timeline-content1:after{ transform: rotate(0); }
    .main-timeline1 .title{ font-size: 23px; }
}
.main-timeline1 .timeline-year {
    color: #fff;
    border: 6px solid #565656;
    font-size: 25px;
    font-weight: 600; 
    line-height: 87px;
    height: 100px;
    width: 100px;
    border-radius: 50%;
    position: absolute;
    left: -108px;
    top: -100px;
    z-index: 1;
    background-color: #fff;
}
.main-timeline1 .timeline-year:before {
    content: '';
        background-color: #4fb1a5;
    height: 90%;
    width: 90%;
    border-radius: 50%;
    transform: translateX(-50%) translateY(-50%);
    position: absolute;
    left: 50%;
    top: 50%;
    z-index: -1;
}
.main-timeline1 .year {
    display: inline-block;
    padding: 5px 8px;
    margin: 0;
    border-radius: 4px;
    font-size: 32px;
    font-weight: bold;
    color: #0c0c0c; 
    text-align: center;
    position: absolute;
    top: 9%;
    left: -60%; 
}
.main-timeline1 .timeline1:nth-child(2n) .year {
    left: auto;
    right: -67%;
}
</style>
		<!-- Page Title
		============================================= -->
		<section id="page-title" class="page-title-parallax page-title-dark" style="background-image: url(img/banners/3.jpg);">
			<div class="container clearfix">
				<h1 class="pdb-60">CSR METAMORPHOSIS THROUGH AUROBINDO <br/> RURAL INNOVATIONS</h1>  
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="#">Home</a></li>
					<li class="breadcrumb-item"><a href="#">Sustainability</a></li> 
					<li class="breadcrumb-item"><a href="#">Testimonials</a></li>
					<li class="breadcrumb-item active" aria-current="page">Our Metamorphosis</li>
				</ol> 
			</div> 
		</section><!-- #page-title end --> 
		<!-- Content
		============================================= -->
		<section id="content">
			<div class="content-wrap">
				<div class="container">
					<div class="row col-mb-50">
						<div class="col-12">
							<div class="head-title">
								<h2 class="text-center">Our Metamorphosis</h2> 
							</div> 
						</div>  
					</div> 
				</div>

				<div class="container">
				    <div class="row">
				        <div class="col-md-12">
				            <div class="main-timeline1">
				                <div class="timeline1">
				                    <a href="#" class="timeline-content1">
				                    	<span class="year">January 2014</span>
				                    	<div class="timeline-year">
		                                    <span>2014</span>
		                                </div>
				                        <div class="timeline-icon1"><i class="fa fa-globe"></i></div>
				                        <h3 class="title">Web Designing</h3>
				                        <p class="description">
				                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer males uada tellus lorem, et condimentum neque commodo Integer males uada tellus lorem, et condimentum neque commodo.
				                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer males uada tellus lorem, et condimentum neque commodo Integer males uada tellus lorem, et condimentum neque commodo.
				                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer males uada tellus lorem, et condimentum neque commodo Integer males uada tellus lorem, et condimentum neque commodo		                        
				                        
				                        </p>
				                    </a>
				                </div>
				                <div class="timeline1">
				                    <a href="#" class="timeline-content1"> 
				                    	<span class="year">September 2014</span>
				                        <div class="timeline-icon1"><i class="fa fa-globe"></i></div>
				                        <h3 class="title">Web Designing</h3>
				                        <p class="description">
				                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer males uada tellus lorem, et condimentum neque commodo Integer males uada tellus lorem, et condimentum neque commodo
				                        </p>
				                    </a>
				                </div>
				                <div class="timeline1">
				                    <a href="#" class="timeline-content1">
				                        <div class="timeline-icon1"><i class="fa fa-rocket"></i></div>
				                        <h3 class="title">Web Development</h3>
				                        <p class="description">
				                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer males uada tellus lorem, et condimentum neque commodo Integer males uada tellus lorem, et condimentum neque commodo
				                        </p>
				                    </a>
				                </div>
				            </div>
				        </div>
				    </div>
				</div>


			</div>
		</section><!-- #content end -->

		<?php  include_once( 'footer.php'); ?>