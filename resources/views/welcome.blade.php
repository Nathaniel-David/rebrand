@extends('layouts.app')

@section('content')
        <!-- start home wrapper -->
        <div class="home_wrapper">
            <!-- start landing content -->
            <div class="landing_content text-center">
                <div class="container">
                    <div class="row">
                        <div class="col text-white cd-intro">
                            <h5 class="title-slide-in" data-splitting>Oh Hello, I'm</h5>
                            <h1 class="title-slide-in" data-splitting>Nathaniel David Medrano</h1>
                            <h4 class="title-slide-in" data-splitting>Freelance Web Developer</h4>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end landing content -->
        </div>
        <!-- end home wrapper -->
    </div>
    <!-- end landing wrapper  -->
    <div class="container">
        <div class="row">
            <div class="col">
                <!-- start about wrapper -->
                <div id="about" class="about_wrapper">
                    <div class="about">
                        <div class="row justify-content-center align-items-center">
                            <div class="col-lg-4 col-md-5">
                                <!-- start about image -->
                                <div class="about_img">
                                    <img class="about_img_1 top" src="img/about_photo_1.jpg" alt="">
                                    <img class="about_img_2 bottom" src="img/about_photo_2.jpg" alt="">
                                </div>
                                <!-- end about image -->
                            </div>
                            <div class="col-lg-6 col-md-7">
                                <!-- start about details -->
                                <div class="about_info">
                                    <h4>Full-Stack Web &amp; Software Developer, Otherwise known as a Semi-Colon Slingin Cowboy. <br>Based in New York City.</h4>
                                    <img class="zigzag" src="img/zigzag.svg" alt="">
                                    <p class="about_desc">Software development and all of its possibilities are only limited by our imagination and ingenuity, so let's get creative and make something great together!</p>
                                    <!-- start social links -->
                                    <ul class="social_links">
                                        <li><a href="https://www.instagram.com/_nathanieldavid_/"><span class="ion-social-instagram-outline"></span></a></li>
                                        <li><a href="https://www.facebook.com/nathaniel.david.medrano"><span class="ion-social-facebook"></span></a></li>
                                        <li><a href="https://www.linkedin.com/in/nathanielmedrano/"><span class="ion-social-linkedin"></span></a></li>
                                        <li><a href="/resume"><span class="ion-ios-cloud-download-outline"></span> <span id="resume">Resume</span></a></li>
                                    </ul>
                                    <!-- end social links -->
                                </div>
                                <!-- end about details -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end about wrapper -->
                <!-- start services wrapper -->
                <div id="service" class="services">
                    <div class="row justify-content-center">
                        <div class="col-lg-10">
                            <!-- section title -->
                            <div class="text-center">
                                <h2 class="section_title">Services</h2>
                            </div>
                            <!-- start service items -->
                            <div class="service_items">
                                <div class="row">
                                    <!-- start service single items -->
                                    <div class="col-lg-4 col-md-6 col-sm-6">
                                        <div class="service_single_item">
                                            <i class="mbri-growing-chart"></i>
                                            <h6 data-hover="Consulting">Consulting</h6>
                                            <p>Want to start an online company but don't know where to start? Have a website but not sure how to scale it for more users? With my consulting services we can get you going on the right track by using proven best practices.</p>
                                        </div>
                                    </div>
                                    <!-- end service single items -->
                                    <!-- start service single items -->
                                    <div class="col-lg-4 col-md-6 col-sm-6">
                                        <div class="service_single_item">
                                            <i class="mbri-website-theme"></i>
                                            <h6 data-hover="Design">Design</h6>
                                            <p>Let's work together to create a beautiful and user friendly application that fits your aesthetic. My services include detailed wireframing to design the entire project to your exact specifications.</p>
                                        </div>
                                    </div>
                                    <!-- end service single items -->
                                    <!-- start service single items -->
                                    <div class="col-lg-4 col-md-6 col-sm-6">
                                        <div class="service_single_item">
                                            <i class="mbri-extension"></i>
                                            <h6 data-hover="Development">Development</h6>
                                            <p>I specialize in PHP/Laravel and have professional experience working with MySQL, Microsoft SQL Server, JQuery, VueJS, Bootstrap 3/4, AWS, Stripe, WordPress/Membermouse, and Flutter/Dart. </p>
                                        </div>
                                    </div>
                                    <!-- end service single items -->
                                    <!-- start service single items -->
                                    <div class="col-lg-4 col-md-6 col-sm-6">
                                        <div class="service_single_item">
                                            <i class="mbri-to-ftp"></i>
                                            <h6 data-hover="Server Configuration">Server Configuration</h6>
                                            <p>I have in depth experience working with Ubuntu, NGINX, Apache, and Docker. This includes configuring domains, firewalls, SSL, and full migrations to remote servers.</p>
                                        </div>
                                    </div>
                                    <!-- end service single items -->
                                    <!-- start service single items -->
                                    <div class="col-lg-4 col-md-6 col-sm-6">
                                        <div class="service_single_item">
                                            <i class="mbri-database"></i>
                                            <h6 data-hover="Database Architecture">Database Architecture</h6>
                                            <p>Whether you're starting from scratch or looking to optimize and scale your existing database, a detailed approach is necessary to properly maintain your data. My approach uses best practices and foresight to ensure a stable and scalable structure.</p>
                                        </div>
                                    </div>
                                    <!-- end service single items -->
                                    <!-- start service single items -->
                                    <div class="col-lg-4 col-md-6 col-sm-6">
                                        <div class="service_single_item">
                                            <i class="mbri-shopping-cart"></i>
                                            <h6 data-hover="eCommerce">eCommerce</h6>
                                            <p>My services include Search Engine Optimization, Google Analytics, CMS Builds, Custom Checkouts, Split-Testing, and Sales Funnels. Let's work together to create a safe and seamless website to handle your online sales.</p>
                                        </div>
                                    </div>
                                    <!-- end service single items -->
                                </div>
                            </div>
                            <!-- end service items -->
                        </div>
                    </div>
                </div>
                <!-- end services wrapper -->
                <!-- start work wrapper -->
                <div id="works" class="work_wrapper">
                    <div class="row justify-content-center">
                        <div class="col-lg-10">
                            <!-- section title -->
                            <div class="text-center">
                                <h2 class="section_title">Recent Projects</h2>
                            </div>
              
                            <div class="row works">
                                <!-- work single item  -->
                                <div class="col-lg-6 col-md-6 col-sm-6 uiux">
                                    <div class="work_single_item">
                                        <img class="img-fluid" src="img/works/tailored.jpg" alt="">
                                        <div class="work_info">
                                            <h6 title="Tailored Health &amp; Fitness">Tailored Health &amp; Fitness</h6>
                                            <a data-toggle="modal" href="" data-target=".bd-tailored-modal-xl"><span class="ion-android-expand"></span></a>
                                        </div>
                                    </div>
                                </div>
                                <!-- work single item  -->
                                <div class="col-lg-6 col-md-6 col-sm-6 web">
                                    <div class="work_single_item">
                                        <img class="img-fluid" src="img/works/ascension.jpg" alt="">
                                        <div class="work_info">
                                            <h6 title="Ascension Dental Partners">Ascension Dental Partners</h6>
                                            <a data-toggle="modal" href="" data-target=".bd-ascension-modal-xl"><span class="ion-android-expand"></span></a>
                                        </div>
                                    </div>
                                </div>
                                <!-- work single item  -->
                                <div class="col-lg-6 col-md-6 col-sm-6 branding">
                                    <div class="work_single_item">
                                        <img class="img-fluid" src="img/works/om.jpg" alt="">
                                        <div class="work_info">
                                            <h6 title="Institution of OM">Institution of OM</h6>
                                            <a data-toggle="modal" href="" data-target=".bd-om-modal-xl"><span class="ion-android-expand"></span></a>
                                        </div>
                                    </div>
                                </div>
                                <!-- work single item  -->
                                <div class="col-lg-6 col-md-6 col-sm-6 web">
                                    <div class="work_single_item">
                                        <img class="img-fluid" src="img/works/pixycam1.jpg" alt="">
                                        <div class="work_info">
                                            <h6 title="PixyCam - CharmedLabs">PixyCam - CharmedLabs</h6>
                                            <a data-toggle="modal" href="" data-target=".bd-pixycam-modal-xl"><span class="ion-android-expand"></span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end work wrapper -->
                <!-- start testimonials wrapper -->
                <div id="testimonial" class="testimonials">
                    <div class="row justify-content-center">
                        <div class="col-md-8">
                            <!-- section title -->
                            <div class="text-center">
                                <h2 class="section_title">Reviews</h2>
                            </div>
                            <div class="owl-carousel testimonial_slider">
                                <div class="testimonial_single_item">
                                    <img src="img/testimonials/ann_hittner.jpg" alt="photo" id="ann_hittner">                                    
                                    <h4>Ann Hittner</h4>
                                    <span>Director of Housing Assistance Payments - Southwest Housing Compliance Corporation</span>
                                    <hr>
                                    <p>Nathaniel is an extremely competent, highly self-motivated, and easy to work with Full-Stack Developer.
									He was tasked with creating a web application solution for tracking, monitoring, and routing work throughout our company, and exceeded my expectations by far. He worked with the VP and Directors of each department to determine our specific needs, and coordinated with us throughout the project to ensure that the system worked the way it was intended. One of his strengths is how quickly he learned our internal workflows and existing systems, which made communicating our needs to him infinitely easier. He suggested solutions that we didn’t even know were possible, so we quickly expanded the scope of the project. He quickly created and delivered the program as envisioned. The resulting program he created for us has become an integral part of our day-to-day workflow and monitoring, and in time is expected to result in a need for fewer staff members to complete our tasks. I would absolutely recommend Nathaniel to anyone looking for a Full-Stack Developer.</p>
                                </div>
                                <div class="testimonial_single_item">
                                    <img src="img/testimonials/ascension_logo.jpg" alt="photo" id="ascension_logo">
                                    <h4>Eric Johnson</h4>
                                    <span>CEO - Ascension Dental</span>
                                    <hr>
                                    <p>Nathaniel is a skilled full stack developer and a true professional. If your company is looking for IT help, I would highly recommend you hire Nathaniel for the job. I promise you won't be disappointed!</p>
                                </div>
                                <div class="testimonial_single_item">
                                    <img src="img/testimonials/kleiman.jpg" alt="photo" id="kleiman">
                                    <h4>Anna Kleiman</h4>
                                    <span>Owner/Designer - Anna Leigh Jewelry</span>
                                    <hr>
                                    <p>I am a small business owner and I had a consultation with Nathaniel regarding brand visibility on the internet and social media channels. Not only is Nathaniel knowledgeable and experienced, he is also very approachable! He came very prepared to our meeting and was eager to discuss solutions and ideas for my small business. I felt heard in my questions and thoughts, and left the meeting feeling more empowered and equipped to make changes. He brought up some great points and ideas that I hadn't even heard or thought of, so I definitely learned a lot! Nathaniel is very versatile in that he can help smaller businesses (like me) but also provide large scale services for companies. He is easy going, yet professional- perfect for Austin 😊Definitely recommend!</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end testimonials wrapper -->
                <!-- start contact wrapper -->
                <div id="contact" class="contact_wrapper">
                    <div class="text-center">
                        <h2 class="section_title">Drop a line</h2>
                    </div>
                    <div class="row justify-content-center">
                        <!-- start contact info ( email - phone) -->
                        <div class="col-lg-3 col-md-12">
                            <div class="contact_item">
                                <h5>Phone</h5>
                                <p>+1-210-367-3596</p>
                            </div>
                            <div class="contact_item">
                                <h5>Email</h5>
                                <p><a href="mailto:me@nathaniel-david.com">me@nathaniel-david.com</a></p>
                            </div>
                        </div>
                        <!-- end contact info ( email - phone) -->
                        <!-- start contact form -->
                        <div class="col-lg-7 col-md-12">
                            <form id="contact-form" action="/contact" method="POST">
      						{{ csrf_field() }}
                                <div class="row">
                                    <div class="col">
                                        <p class="form-message"></p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-5">
                                        <!-- input field for NAME -->
                                        <input class="input_field required" type="text" name="name" placeholder="Name">
                                        <!-- input field for EMAIL -->
                                        <input class="input_field required" type="email" name="email" placeholder="Email">
                                    </div>
                                    <div class="col-md-7">
                                        <!-- input field for MESSAGE -->
                                        <textarea class="input_field required" name="message" placeholder="Tell Me About Your Query."></textarea>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 text-center">
                                        <!-- button for MESSAGE-SEND -->
                                        <button class="button slide-vertical" type="submit" data-splitting>send message</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!-- end contact form -->
                    </div>
                </div>

                <!-- start modals -->
				<div class="modal fade bd-tailored-modal-xl" tabindex="-1" role="dialog" aria-labelledby="TailoredHealthAndFitness" aria-hidden="true">
				  <div class="modal-dialog modal-lg">
				    <div class="modal-content shadow mb-5 bg-light rounded-0">
						<div id="tailoredCarousel" class="carousel slide" data-ride="carousel">
						  <div class="carousel-inner">
						    <div class="carousel-item active">
						      <img class="d-block w-100" src="img/works/tailored.jpg" alt="Home Page">
						    </div>
						    <div class="carousel-item">
						      <img class="d-block w-100" src="img/works/tailored2.jpg" alt="App Page">
						    </div>
						    <div class="carousel-item">
						      <img class="d-block w-100" src="img/works/tailored3.jpg" alt="Store Page">
						    </div>
						  </div>
						  <a class="carousel-control-prev" href="#tailoredCarousel" role="button" data-slide="prev">
						    <span class="ion-chevron-left" aria-hidden="true"></span>
						    <span class="sr-only">Previous</span>
						  </a>
						  <a class="carousel-control-next" href="#tailoredCarousel" role="button" data-slide="next">
						    <span class="ion-chevron-right" aria-hidden="true"></span>
						    <span class="sr-only">Next</span>
						  </a>
						</div>
						<div class="col-lg-12 px-3 pt-3">
							<h4><a href="https://tailoredhealthandfitness.com">Tailored Health &amp; Fitness</a></h4>
							<p class="text-muted">Health & Wellness</p>
							<hr>
							<p>Tailored Health and Fitness offers custom online coaching for those looking to improve their general health and wellness, as well as a wide range of training and sport specific programs.</p>
						</div>
						<div class="col-lg-12 row px-3 pb-1">
							<div class="col-lg-6">
								<a class="button slide-vertical" data-splitting href="https://tailoredhealthandfitness.com">View Site</a>
							</div>
							<div class="col-lg-6">
								<button type="button" class="close mt-4 pt-3" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true"><i class="mbri-close"></i></span>
								</button>
							</div>
						</div>
				    </div>
				  </div>
				</div>

				<div class="modal fade bd-pixycam-modal-xl" tabindex="-1" role="dialog" aria-labelledby="TailoredHealthAndFitness" aria-hidden="true">
				  <div class="modal-dialog modal-lg">
				    <div class="modal-content shadow mb-5 bg-light rounded-0">
						<div id="pixycamCarousel" class="carousel slide" data-ride="carousel">
						  <div class="carousel-inner">
						    <div class="carousel-item active">
						      <img class="d-block w-100" src="img/works/pixycam1.jpg" alt="Home Page">
						    </div>
						    <div class="carousel-item">
						      <img class="d-block w-100" src="img/works/pixycam2.jpg" alt="Documentation Page">
						    </div>
						    <div class="carousel-item">
						      <img class="d-block w-100" src="img/works/pixycam3.jpg" alt="Forum Page">
						    </div>
						  </div>
						  <a class="carousel-control-prev" href="#pixycamCarousel" role="button" data-slide="prev">
						    <span class="ion-chevron-left" aria-hidden="true"></span>
						    <span class="sr-only">Previous</span>
						  </a>
						  <a class="carousel-control-next" href="#pixycamCarousel" role="button" data-slide="next">
						    <span class="ion-chevron-right" aria-hidden="true"></span>
						    <span class="sr-only">Next</span>
						  </a>
						</div>
						<div class="col-lg-12 px-3 pt-3">
							<h4><a href="https://pixycam.com/">PixyCam - CharmedLabs</a></h4>
							<p class="text-muted">Technology & Software</p>
							<hr>
							<p>Pixy got its start in 2013 as part of a successful Kickstarter campaign, and as a partnership between Charmed Labs and CMU.</p>
						</div>
						<div class="col-lg-12 row px-3 pb-1">
							<div class="col-lg-6">
								<a class="button slide-vertical" data-splitting href="https://pixycam.com">View Site</a>
							</div>
							<div class="col-lg-6">
								<button type="button" class="close mt-4 pt-3" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true"><i class="mbri-close"></i></span>
								</button>
							</div>
						</div>
				    </div>
				  </div>
				</div>

				<div class="modal fade bd-om-modal-xl" tabindex="-1" role="dialog" aria-labelledby="InstitutionOfOM" aria-hidden="true">
				  <div class="modal-dialog modal-lg">
				    <div class="modal-content shadow mb-5 bg-light rounded-0">
						<div id="omCarousel" class="carousel slide" data-ride="carousel">
						  <div class="carousel-inner">
						    <div class="carousel-item active">
						      <img class="d-block w-100" src="img/works/om.jpg" alt="Home Page">
						    </div>
						    <div class="carousel-item">
						      <img class="d-block w-100" src="img/works/om2.jpg" alt="Search Page">
						    </div>
						    <div class="carousel-item">
						      <img class="d-block w-100" src="img/works/om3.jpg" alt="Article Page">
						    </div>
						  </div>
						  <a class="carousel-control-prev" href="#omCarousel" role="button" data-slide="prev">
						    <span class="ion-chevron-left" aria-hidden="true"></span>
						    <span class="sr-only">Previous</span>
						  </a>
						  <a class="carousel-control-next" href="#omCarousel" role="button" data-slide="next">
						    <span class="ion-chevron-right" aria-hidden="true"></span>
						    <span class="sr-only">Next</span>
						  </a>
						</div>
						<div class="col-lg-12 px-3 pt-3">
							<h4><a href="https://instituteofom.com">Institution Of OM - One Taste</a></h4>
							<p class="text-muted">Meditation & Wellness</p>
							<hr>
							<p>The Institute of OM helps people to increase health, happiness and connection through scientifically-proven methods combining mindfulness and sexuality. </p>
						</div>
						<div class="col-lg-12 row px-3 pb-1">
							<div class="col-lg-6">
								<a class="button slide-vertical" data-splitting href="https://instituteofom.com/">View Site</a>
							</div>
							<div class="col-lg-6">
								<button type="button" class="close mt-4 pt-3" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true"><i class="mbri-close"></i></span>
								</button>
							</div>
						</div>
				    </div>
				  </div>
				</div>

				<div class="modal fade bd-ascension-modal-xl" tabindex="-1" role="dialog" aria-labelledby="InstitutionOfOM" aria-hidden="true">
				  <div class="modal-dialog modal-lg">
				    <div class="modal-content shadow mb-5 bg-light rounded-0">
						<div id="ascensionCarousel" class="carousel slide" data-ride="carousel">
						  <div class="carousel-inner">
						    <div class="carousel-item active">
						      <img class="d-block w-100" src="img/works/ascension.jpg" alt="Home Page">
						    </div>
						    <div class="carousel-item">
						      <img class="d-block w-100" src="img/works/ascension2.jpg" alt="App Page">
						    </div>
						    <div class="carousel-item">
						      <img class="d-block w-100" src="img/works/ascension3.jpg" alt="Store Page">
						    </div>
						    <div class="carousel-item">
						      <img class="d-block w-100" src="img/works/ascension4.jpg" alt="Store Page">
						    </div>
						    <div class="carousel-item">
						      <img class="d-block w-100" src="img/works/ascension5.jpg" alt="Store Page">
						    </div>
						  </div>
						  <a class="carousel-control-prev" href="#ascensionCarousel" role="button" data-slide="prev">
						    <span class="ion-chevron-left" aria-hidden="true"></span>
						    <span class="sr-only">Previous</span>
						  </a>
						  <a class="carousel-control-next" href="#ascensionCarousel" role="button" data-slide="next">
						    <span class="ion-chevron-right" aria-hidden="true"></span>
						    <span class="sr-only">Next</span>
						  </a>
						</div>
						<div class="col-lg-12 px-3 pt-3">
							<h4><a href="https://affiliate.ascensiondental.com">Ascension Dental Partners - Now Membersy</a></h4>
							<p class="text-muted">Dental Plans</p>
							<hr>
							<p>Membersy provides dental practices with thoughtfully designed membership plans to make dental care more approachable.</p>
						</div>
						<div class="col-lg-12 row px-3 pb-1">
							<div class="col-lg-6">
								<a class="button slide-vertical" data-splitting href="https://myloyaldentalplan.com/">View Site</a>
							</div>
							<div class="col-lg-6">
								<button type="button" class="close mt-4 pt-3" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true"><i class="mbri-close"></i></span>
								</button>
							</div>
						</div>
				    </div>
				  </div>
				</div>
				<!-- end modals -->
@endsection
