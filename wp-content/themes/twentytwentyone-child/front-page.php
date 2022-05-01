<?php

if (get_option('show_on_front') == 'posts') {
	get_template_part('index');
} elseif ('page' == get_option('show_on_front')) {

	get_header(); ?>

	<!-- STATIC MEDIA IMAGE -->
	<div class="sm-img-bg-fullscr parallax-section" style="background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/framework/images/static-media/stat3-1080.jpg)" data-stellar-background-ratio="0.5">
		<div class="container sm-content-cont js-height-fullscr">
			<div class="sm-cont-middle">

				<!-- OPACITY container -->
				<div class="opacity-scroll2">

					<!-- LAYER NR. 1 -->
					<h1 class="cd-headline zoom font-raleway light-72-wide font-white mt-0  mb-20">
						<span class="text-uppercase">Let's start talking</span>

						<!-- <span class="cd-words-wrapper waiting">
							<b class="is-visible">Health</b>
							<b>Happiness</b>
							<b>Fitness</b>
						</span>
						<br>
						<span>A HABIT</span> -->
					</h1>
					<p class="font-raleway font-white norm-16-wide hide-0-736 mb-50"">
							For a fit body and a relaxed mind
						</p>

					<!-- LAYER NR. 2 -->
					<!-- <div class=" font-raleway font-white norm-16-wide hide-0-736 mb-50">
						world class personal training programs at your doorstep
				</div> -->


				<div class="center-0-478">
					<div class="topbtn">
						<!-- <a class="button thin medium full-rounded hover-dark tp-button1 white" href="#about">INVITEE ?</a> -->
						<a class="button thin medium full-rounded hover-dark tp-button1 white" href="<?php echo esc_url(home_url('/')); ?>login/">Login/Signup</a>
					</div>
				</div>



			</div>

		</div>
	</div>
	<!-- SCROLL ICON -->
	<div class="local-scroll-cont font-white">
		<a href="#about" class="scroll-down smooth-scroll">
			<div class="icon icon-arrows-down"></div>
		</a>
	</div>
	</div>

	<div class="videoPart page-section bg-gray pt-100 pb-100 mx-auto">
		<div class="container">
			<video controls class="w-100">
				<source src=http://techslides.com/demos/sample-videos/small.webm type=video/webm>
				<source src=http://techslides.com/demos/sample-videos/small.ogv type=video/ogg>
				<source src=http://techslides.com/demos/sample-videos/small.mp4 type=video/mp4>
				<source src=http://techslides.com/demos/sample-videos/small.3gp type=video/3gp>
			</video>
		</div>

	</div>

	<!-- FEATURES 15 WE ARE CREATIVE -->
	<div id="about" class="page-section">
		<div class="container fes1-cont pb-0">
			<div class="row">

				<div class="col-md-12">

					<div class="row text-center">
						<div class="col-md-12">
							<div class="fes1-main-title-cont wow fadeInDown">
								<div class="fes1-title-50 font-raleway" style="color: rgb(102, 99, 99);">
									Transforming your sedentary lifestyle into a thriving fit lifestyle is easier than you can imagine. All you need to do is -
								</div>

								<div class="fes1-title-50 font-poppins" style="color: rgb(190,1, 1); font-stretch:extra-expanded; font-weight:bolder;">
									LOVE YOURSELF
								</div>
								<div class="fes1-title-50 font-raleway" style="color: rgb(102, 99, 99);">
									AND LEAVE THE REST TO US.
								</div>

							</div>
						</div>
					</div>

					<div class="row">

						<div class="col-md-6 col-sm-6">
							<div class="fes1-box wow fadeIn">
								<div class="fes1-box-icon">
									<div></div>
								</div>
								<h3 style="color: rgb(102, 99, 99);"></h3>

							</div>
						</div>

						<div class="col-md-6 col-sm-6">
							<div class="fes1-box wow fadeIn" data-wow-delay="200ms">
								<div class="fes1-box-icon">
									<div></div>
								</div>
								<h3 style="color: rgb(102, 99, 99);"></h3>

							</div>
						</div>

					</div>

					<div class="row">

						<div class="col-md-6 col-sm-6">
							<div class="fes1-box wow fadeIn" data-wow-delay="400ms">
								<div class="fes1-box-icon">
									<div></div>
								</div>
								<h3 style="color: rgb(102, 99, 99);"></h3>

							</div>
						</div>

						<div class="col-md-6 col-sm-6">
							<div class="fes1-box wow fadeIn" data-wow-delay="600ms">
								<div class="fes1-box-icon">
									<div></div>
								</div>
								<h3 style="color: rgb(102, 99, 99);"></h3>

							</div>
						</div>

					</div>

				</div>


		

			</div>
		</div>
	</div>


	<div class="page-section bg-gray">
		<div class="container">
			<div class="video-ads-text-cont video-ads-text-black clearfix">
				<span class="video-ads-text font-raleway"> Our Programs include a whole lot of personal care and ... </span>
			</div>
		</div>
	</div>

	<div class="page-section">
		<div class="container-fluid">
			<div class="row row-sm-fix">

				<div class="col-md-6 pos-l-md-50pc wow fadeInRight equal-height">
					<div class="fes2-main-text-cont">
						<div class="fes2-title-45 font-poppins">
							Regularised<br>
							<strong> Fitness Training</strong>
						</div>
						<div class="fes2-text-cont">A structured and scientific approach followed by our personal trainers to work on your Posture Correction, Movement Efficiency, Core Conditioning, Body Balance, Cardiorespiratory Fitness, Agility, Flexibility, Strength and most importantly a Health Behaviour Change. In-short we hand hold you to a fit body. </div>
					</div>
				</div>

				<div class="col-md-6 pos-r-md-50pc">
					<div class="row">
						<div class="fes2-img equal-height"></div>
					</div>
				</div>

			</div>
		</div>
	</div>

	<div class="page-section">
		<div class="container-fluid">
			<div class="row row-sm-fix">

				<div class="col-md-6 wow fadeInLeft equal-height ">
					<div class="fes2-main-text-cont">
						<div class="fes2-title-45 font-montserrat">
							Adaptive<br>
							<strong>Nutrional Support</strong>
						</div>
						<div class="fes2-text-cont">Following the assessment of your current food habits and your goals, we make gradual and agreeable changes to what you can eat to maintain a healthy balance of vitamins, minerals, proteins, carbs and good fats in your body. Eventually turning your relationship with food more intimate.
						</div>
					</div>
				</div>

				<div class="col-md-6">
					<div class="row">
						<div class="fes3-img equal-height"></div>
					</div>
				</div>

			</div>
		</div>
	</div>

	<div class="page-section">
		<div class="container-fluid">
			<div class="row row-sm-fix">

				<div class="col-md-6 pos-l-md-50pc wow fadeInRight equal-height">
					<div class="fes2-main-text-cont">
						<div class="fes2-title-45 font-poppins">
							Personalised<br>
							<strong>Wellness Support</strong>
						</div>
						<div class="fes2-text-cont">Tips and Strategies to tackle stress, learn meditation , increase deep sleep, improve gut health, explore healthy cuisines, monitor water intake and so much more to make you slightly happier than every preceding day.
						</div>
					</div>
				</div>

				<div class="col-md-6 pos-r-md-50pc">
					<div class="row">
						<div class="fes55-img equal-height"></div>
					</div>
				</div>

			</div>
		</div>
	</div>

	<div class="container-fluid p-110-cont bg-gray">
		<div class="row">

			<div class="col-lg-3 col-md-6 col-sm-6">
				<div class="work-proc2-cont wow fadeIn">
					<div class="work-proc2-icon-cont pos-l-12">
						01
					</div>
					<h3 class="font-raleway"><strong>Empathy</strong></h3>
					<p>Our foremost value to drive you from a contemplation stage to an action stage. </p>
				</div>
			</div>

			<div class="col-lg-3 col-md-6 col-sm-6">
				<div class="work-proc2-cont wow fadeIn" data-wow-delay="200ms">
					<div class="work-proc2-icon-cont">
						02
					</div>
					<h3 class="font-raleway"><strong>Ability</strong></h3>
					<p>Wellness Trainers, Psychologist, Engineers, Sociologist and Designers working together to make you happier and fitter. </p>
				</div>
			</div>

			<div class="col-lg-3 col-md-6 col-sm-6">
				<div class="work-proc2-cont wow fadeIn" data-wow-delay="400ms">
					<div class="work-proc2-icon-cont">
						03
					</div>
					<h3 class="font-raleway"><strong>Belief</strong></h3>
					<p>Happiness comes from solving problems. </p>
				</div>
			</div>





			<div class="col-lg-3 col-md-6 col-sm-6">
				<div class="work-proc2-a-cont wow fadeIn" data-wow-delay="600ms">
					<a class="work-proc2-a" href="#">
						<div class="work-proc2-a-text font-raleway">
							What We Always Carry <br><span class="border-bot">With Us</span>
						</div>
						<div class="work-proc2-bg-block"></div>
					</a>
				</div>
			</div>

		</div>
	</div>


	<div class="page-section bg-gray-light clearfix">
		<div class="fes7-img-cont col-md-5">
			<div class="fes7-img" style="background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/framework/images/fes7.jpg)"></div>
		</div>

		<div class="container">
			<div class="row">
				<div class="col-md-6 col-md-offset-6 fes7-text-cont p-80-cont">
					<h1><span class="font-raleway"> Are You Suffering ? </span></h1>
					<p class="mb-60">
						Nearly 78 percent of the urban poplulation suffers from the eveils of a bad lifestyle. And it has been seen that people tend to keep silent over such issues over many many years.
						Such issues take shape of chronic diseases.
					</p>

					<div class="row">

						<div class="col-md-6 col-sm-6">
							<div class="fes7-box wow fadeIn">
								<div class="fes7-box-icon">
									<div class="icon icon-arrows-fit-horizontal"></div>
								</div>
								<h3 class="font-raleway">Weight Issues</h3>
								<p>A constant struggle with weight gain and increased BMI</p>
							</div>
						</div>

						<div class="col-md-6 col-sm-6">
							<div class="fes7-box wow fadeIn" data-wow-delay="200ms">
								<div class="fes7-box-icon">
									<div class="icon icon-basic-hammer"></div>
								</div>
								<h3 class="font-raleway"> Tiredness & Body Pain</h3>
								<p>Lack of agility, feeling fatigued throughout the day and a score of body aches such as back pain, neck pain and joint pain etc.</p>
							</div>
						</div>

					</div>

					<div class="row">

						<div class="col-md-6 col-sm-6">
							<div class="fes7-box wow fadeIn" data-wow-delay="400ms">
								<div class="fes7-box-icon">
									<div class="icon icon-arrows-shrink-diagonal2"></div>
								</div>
								<h3 class="font-raleway">Stress & Anxiety</h3>
								<p>Inclusion of unbelievable amount of stress and anxiety due to an overtly competetive urban life. </p>
							</div>
						</div>

						<div class="col-md-6 col-sm-6">
							<div class="fes7-box wow fadeIn" data-wow-delay="600ms">
								<div class="fes7-box-icon">
									<div class="icon icon-ecommerce-graph1"></div>
								</div>
								<h3 class="font-raleway">Eating Disorders</h3>
								<p>Uninhibited eating habits and irrational timings giving scope to all kinds of metabolic diseases.</p>
							</div>
						</div>

					</div>

				</div>
			</div>
			<!--end of row-->

		</div>
	</div>

	<div class="page-section bg-gray" style="background-color: #67b6ca;">
		<div class="container">
			<div class="video-ads-text-cont video-ads-text-black clearfix">
				<span class="video-ads-text font-raleway colorWhite"> Our Programs include a whole lot of personal care and ... </span>
			</div>
		</div>
	</div>
	<div class="page-section">
		<div class="container-fluid">
			<div class="row row-sm-fix">

				<div class="col-md-6 wow fadeInLeft equal-height bg-gray">
					<div class="fes2-main-text-cont">
						<div class="fes2-title-45 font-montserrat">
							<strong>PAP</strong>
						</div>
						<div class="fes2-text-cont mb-20">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Consequatur cumque, suscipit ipsum vero animi autem eius nulla illum sequi temporibus provident labore. Recusandae molestias deserunt blanditiis aliquam odit temporibus quo?
						</div>

						<a class="button thin medium full-rounded hover-dark tp-button1 btnRed" href="http://localhost/law/login/">Go to PAP</a>
					</div>
				</div>

				<div class="col-md-6">
					<div class="row ">
						<div class="fes2-main-text-cont">
							<div class="fes2-title-45 font-montserrat">
								<strong>HEP</strong>
							</div>
							<div class="fes2-text-cont mb-20">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Consequatur cumque, suscipit ipsum vero animi autem eius nulla illum sequi temporibus provident labore. Recusandae molestias deserunt blanditiis aliquam odit temporibus quo?
							</div>

							<a class="button thin medium full-rounded hover-dark tp-button1 btnYellow" href="http://localhost/law/login/">Go to HEP</a>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>

	<div class="page-section">
		<div class="container-fluid">
			<div class="row row-sm-fix">

				<div class="col-md-6 wow fadeInLeft equal-height ">
					<div class="fes2-main-text-cont">
						<div class="fes2-title-45 font-montserrat">
							Customer<br>
							<strong>Reviews</strong>
						</div>
						<div class="fes2-text-cont mb-20">Following the assessment of your current food habits and your goals, we make gradual and agreeable changes to what you can eat to maintain a healthy balance of vitamins, minerals, proteins, carbs and good fats in your body. Eventually turning your relationship with food more intimate.
						</div>
						<a class="button thin medium full-rounded hover-dark tp-button1 btnRed" href="http://localhost/law/login/">View all reviews</a>
					</div>
				</div>

				<div class="col-md-6">
					<div class="row h-100">
					<video class="h-100 cover"  controls class="w-100">
							<source src=http://techslides.com/demos/sample-videos/small.webm type=video/webm>
							<source src=http://techslides.com/demos/sample-videos/small.ogv type=video/ogg>
							<source src=http://techslides.com/demos/sample-videos/small.mp4 type=video/mp4>
							<source src=http://techslides.com/demos/sample-videos/small.3gp type=video/3gp>
						</video>
					</div>
					
				</div>

			</div>
		</div>
	</div>


	<div class="page-section">
		<div class="container-fluid">
			<div class="row row-sm-fix">
				<div class="col-md-6 align-items-end d-flex">
					<div class="fes2-main-text-cont">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/framework/images/fes11-2.png" alt="img">
					</div>

				</div>
				<div class="col-md-6 wow fadeInLeft equal-height bg-gray">
					<div class="fes2-main-text-cont">
						<div class="fes2-title-45 font-montserrat mb30">
							<strong>GET IN TOUCH</strong>
						</div>
						<ul class="noUl mb30">
							<li class="d-flex mb20">
								<span class="mr10">
									<svg xmlns="http://www.w3.org/2000/svg" width="29.25" height="20.25" viewBox="0 0 29.25 20.25">
										<g id="Icon_ionic-ios-mail" data-name="Icon ionic-ios-mail" transform="translate(-3.375 -7.875)">
											<path id="Path_1" data-name="Path 1" d="M32.386,10.357,24.82,18.063a.136.136,0,0,0,0,.2L30.115,23.9a.912.912,0,0,1,0,1.294.917.917,0,0,1-1.294,0l-5.273-5.618a.144.144,0,0,0-.2,0l-1.287,1.308a5.661,5.661,0,0,1-4.036,1.7,5.775,5.775,0,0,1-4.12-1.751l-1.238-1.259a.144.144,0,0,0-.2,0L7.186,25.193a.917.917,0,0,1-1.294,0,.912.912,0,0,1,0-1.294l5.295-5.639a.15.15,0,0,0,0-.2L3.614,10.357a.139.139,0,0,0-.239.1v15.42a2.257,2.257,0,0,0,2.25,2.25h24.75a2.257,2.257,0,0,0,2.25-2.25V10.455A.141.141,0,0,0,32.386,10.357Z" fill="#303036" />
											<path id="Path_2" data-name="Path 2" d="M18,20.749A3.823,3.823,0,0,0,20.749,19.6L31.781,8.367a2.21,2.21,0,0,0-1.392-.492H5.618a2.2,2.2,0,0,0-1.392.492L15.258,19.6A3.823,3.823,0,0,0,18,20.749Z" fill="#303036" />
										</g>
									</svg>

								</span>
								<span>
									example@gmail.com
								</span>
							</li>
							<li class="d-flex">
								<span class="mr10">

									<svg xmlns="http://www.w3.org/2000/svg" width="29.085" height="28.303" viewBox="0 0 29.085 28.303">
										<path id="Icon_awesome-whatsapp" data-name="Icon awesome-whatsapp" d="M24.729,6.363A14.507,14.507,0,0,0,14.536,2.25,14.24,14.24,0,0,0,.123,16.275a13.75,13.75,0,0,0,1.922,7.013L0,30.553,7.641,28.6a14.684,14.684,0,0,0,6.888,1.706h.006c7.94,0,14.549-6.292,14.549-14.025a13.9,13.9,0,0,0-4.356-9.919ZM14.536,27.944a12.211,12.211,0,0,1-6.1-1.624L8,26.068,3.467,27.224l1.208-4.3-.286-.442a11.389,11.389,0,0,1-1.831-6.2A11.838,11.838,0,0,1,14.543,4.619a12.041,12.041,0,0,1,8.466,3.418,11.554,11.554,0,0,1,3.642,8.245A11.958,11.958,0,0,1,14.536,27.944Zm6.57-8.731c-.357-.177-2.129-1.023-2.461-1.137s-.571-.177-.812.177-.928,1.137-1.143,1.377-.422.265-.779.088a9.729,9.729,0,0,1-4.9-4.17c-.37-.619.37-.575,1.058-1.914a.634.634,0,0,0-.032-.613c-.091-.177-.812-1.9-1.11-2.6-.292-.682-.591-.588-.812-.6s-.448-.013-.688-.013a1.351,1.351,0,0,0-.961.436,3.9,3.9,0,0,0-1.26,2.925,6.771,6.771,0,0,0,1.467,3.626,15.928,15.928,0,0,0,6.155,5.294c2.285.96,3.181,1.042,4.324.878A3.689,3.689,0,0,0,21.58,21.3a2.858,2.858,0,0,0,.208-1.668C21.7,19.472,21.463,19.383,21.106,19.213Z" transform="translate(0 -2.25)" fill="#303036" />
									</svg>


								</span>

								<span>
									<a href="https://api.whatsapp.com/send?phone=+919711571907&amp;text=Hello Jyoti">+91 97115 71907</a>

								</span>
							</li>
						</ul>

						<a class="button thin medium full-rounded hover-dark tp-button1 btnRed" href="http://localhost/law/login/">Contact us</a>
					</div>
				</div>



			</div>
		</div>
	</div>

<?php
	get_footer();
}
?>