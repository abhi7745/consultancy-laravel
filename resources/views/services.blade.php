<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Shiji Sunny</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    {{-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css"> --}}

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700,700i,900,900i&display=swap" rel="stylesheet">

    <!-- services special style -->
    <link rel="stylesheet" href="https://technext.github.io/counselor/css/style.css">

    <link rel="stylesheet" href="{{ asset('assets/css/open-iconic-bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/aos.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/ionicons.min.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/icomoon.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">




  </head>
  <body>

    <nav class="navbar px-md-0 navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
        <div class="container-fluid px-md-5">
            <a class="navbar-brand" href="/">Dr. Shiji Sunny <span style="padding-top:5px;">PHD in Psycology</span></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
            </button>

            <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active"><a href="/" class="nav-link">Home</a></li>
                <li class="nav-item"><a href="/#about" class="nav-link">About Us</a></li>
                <li class="nav-item"><a href="/#practice-areas" class="nav-link">Practical Areas</a></li>
                <li class="nav-item"><a href="{{ route('services') }}" class="nav-link">Services</a></li>
                {{-- <li class="nav-item"><a href="attorneys.html" class="nav-link">Attorneys</a></li> --}}
                {{-- <li class="nav-item"><a href="blog.html" class="nav-link">Blog</a></li> --}}
                <li class="nav-item"><a href="/#contact" class="nav-link">Contact</a></li>
            </ul>
            </div>
        </div>
    </nav>
    <!-- END nav -->

    <section class="hero-wrap hero-wrap-2" style="background-image: url(https://img.freepik.com/premium-photo/young-indian-business-woman-isolated-white-showing-number-two-with-fingers_1187-128810.jpg?w=2000);" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-center">
          <div class="col-md-9 ftco-animate pb-5 text-center">
            <h1 class="mb-3 bread">Our Services</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="{{ route('homepage') }}">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Services <i class="ion-ios-arrow-forward"></i></span></p>
          </div>
        </div>
      </div>
    </section>

    <div class="container pt-5 mb-5">
        <div class="row justify-content-center mb-5">
            <div class="col-md-8 text-center heading-section ftco-animate fadeInUp ftco-animated">
                {{-- <span class="subheading">Our Services</span> --}}
                <h2 class="mb-3">We Can Help You With This Situation</h2>
            </div>
        </div>
        <div class="row tabulation mt-4 ftco-animate fadeInUp ftco-animated">
          <div class="col-md-4">
            <ul class="nav nav-pills nav-fill d-md-flex d-block flex-column">
                <li class="nav-item text-left">
                  <a class="nav-link py-4 show active" data-toggle="tab" href="#services-1">Counselling Program</a>
                </li>
                <li class="nav-item text-left">
                  <a class="nav-link py-4 show" data-toggle="tab" href="#services-2">Mind Training Program</a>
                </li>
                <li class="nav-item text-left">
                  <a class="nav-link py-4 show" data-toggle="tab" href="#services-3">Life Style Management Program</a>
                </li>
                <li class="nav-item text-left">
                  <a class="nav-link py-4 show" data-toggle="tab" href="#services-4">HR Training Program</a>
                </li>
                <li class="nav-item text-left">
                  <a class="nav-link py-4 show" data-toggle="tab" href="#services-5">Personal Mentoring Program</a>
                </li>
                <li class="nav-item text-left">
                  <a class="nav-link py-4 show" data-toggle="tab" href="#services-6">Soft Skills Development Program</a>
                </li>
                <li class="nav-item text-left">
                  <a class="nav-link py-4 show" data-toggle="tab" href="#services-7">Relationship Management Program</a>
                </li>
                <li class="nav-item text-left">
                  <a class="nav-link py-4 show" data-toggle="tab" href="#services-8">Meditation Program</a>
                </li>
              </ul>
            </div>
            <div class="col-md-8">
                <div class="tab-content">
                    <div class="tab-pane container p-0 show active" id="services-1">
                        <div class="img" style="background-image: url({{ asset('assets/images/counselling.jpg') }})"></div>
                        <h3><a href="#">Maanasamithra Counselling Program</a></h3>
                        <p>Counselling is a talking therapy that allows people to discuss their problems with trained professionals in a peaceful and safe ambiance.</p>
                        <p>
                          We offer a wide range of counseling services, including online and offline programs for families, students, and pre-marital situations.
                          We provide counseling to people of all ages and gender. Our flexible timing allows you to choose the best time suit to you.
                          Our counseling includes chakra meditations mind reprogramming techniques that can be used to help you with anything from self-esteem
                          issues to grief and loss. We work with you over three months and beyond as your mentor so that we can help you reach your goals together.
                        </p>
                    </div>

                    <div class="tab-pane container p-0 fade" id="services-2">
                        <div class="img" style="background-image: url({{ asset('assets/images/mind_trainer.jpg') }})"></div>
                        <h3><a href="#">Mind Training Program</a></h3>
                        <p>
                          So, the question becomes: how can you master your brain?<br>
                          Fortunately, neuroscientists and psychologists are uncovering more of the brain’s secrets every single day. While there is still a huge amount left to learn, we know more than we ever did,
                          and a lot of this information can be used practically to help us become happier,
                          smarter and more effective versions of ourselves.
                        </p>
                        <p>
                          Who this course is for: <br>
                          Anyone who wants a better life! I'm serious, if you want positive change in your life then learn to control your brain and how it controls your thoughts and actions
                        </p>
                    </div>
                    <div class="tab-pane container p-0 fade" id="services-3">
                        <div class="img" style="background-image: url({{ asset('assets/images/life_style_management.jpg') }})"></div>
                        <h3><a href="#">Life Style Management Program</a></h3>
                        <p>
                          Our Professional Lifestyle Consultancy course will enable you to set up in a professional capacity helping others to assess and revamp their lives improving how your clients think, feel and act. Although, it can be equally used to help you improve your own life providing you with the opportunity for personal empowerment.
                        </p>
                    </div>
                    <div class="tab-pane container p-0 fade" id="services-4">
                        <div class="img" style="background-image: url({{ asset('assets/images/hr_trainer.png') }})"></div>
                        <h3><a href="#">Human Resources(HR) Training Program</a></h3>
                        <p>
                          Have you ever wondered what it takes to be a successful project manager? Need to learn how to manage and lead your team on your next project? Are you a team leader or project manager looking for ways to improve your project management skills? Do you need to learn how to manage projects, but don't want to spend months in a classroom?
                          <br><br>
                          In this course, you'll learn the fundamentals of project management and leadership through a series of lectures, discussions, and hands-on activities. Project management is a controlled process that manages complex projects and the resources required to complete them.
                          <br><br>
                          By the end of the class, you'll have an in-depth understanding of how to lead teams through all stages of a project: planning and organizing; initiating, executing, and controlling; closing out the project. You'll also have the skills necessary and an understanding of how leadership fits into the process of leading your team toward success on any team-based project. This course is designed to help students learn about the difference between project management and leadership and how they can be used in tandem to achieve success.
                          <br><br>
                          By the end of this course, you'll feel confident about managing any project or team without getting overwhelmed.
                        </p>
                    </div>
                    <div class="tab-pane container p-0 fade show" id="services-5">
                        <div class="img" style="background-image: url({{ asset('assets/images/personal_mentor.jpg') }})"></div>
                        <h3><a href="#">Personal Mentoring Program</a></h3>
                        <p>
                          We look at mentoring, coaching, and mastermind groups. Which one is more effective and where and how do you go to find help for business and or personal development and success. What are you trying to achieve anyway? Are these your goals? Is this something that you really want to do, be or have, or have you just internalized other people's values and dreams? When we're not getting where we want to go, it's time to stop and reflect upon the journey. Who do we need to help us? How can we move from point A where we are now, to point B where we'd like to be?
                          <br><br>
                          This course is short, but practical and guides you through some steps that you can take to make things happen for you. No-one is an island, and we shouldn't try and do things alone and in isolation. This can just lead to stress and burnout. Seek the help or support necessary. Someone, somewhere has already trodden the path before you. There is no need to reinvent the wheel. But, we may need to upskill, so that we 'grow into' our future selves.
                          <br><br>
                          In order to be an effective leader, there are 7 key skills that we need to master. And there is a process by which we get there. Enjoy the mastermind session and experience what it is like to be coached on our goals.
                          <br><br>
                          Take this course if you are interested in developing personally or professionally. If you have an interest in personal development and in improving yourself, then you'll find this course interesting.
                        </p>
                    </div>

                    <div class="tab-pane container p-0 fade" id="services-6">
                      <div class="img" style="background-image: url({{ asset('assets/images/soft_kills.jpeg') }})"></div>
                      <h3><a href="#">Soft Skills Development Program</a></h3>
                      <p>
                          These are the traits, characteristics, habits, and skills needed to survive and thrive in the modern work world. Soft skills aren't usually taught in school, but you will learn them all here in this course. Are you someone that other people in your organization and industry like to work with, collaborate with, and partner with? Are you seen as a valuable asset to any new project that comes along?
                          <br><br>
                          This soft skills training course will teach you how to develop the skills that can make the difference between a lackluster career that tops out at middle management versus one that lands you in the executive suite or wherever you define career success. So many soft skills seem like common sense at first glance, but they are not commonly applied by most workers. This soft skills training course will give you an edge over your competitors. It will also make your job, your career and your life more rewarding and enjoyable.
                      </p>
                    </div>

                    <div class="tab-pane container p-0 fade" id="services-7">
                      <div class="img" style="background-image: url({{ asset('assets/images/relationship_management.jpg') }})"></div>
                      <h3><a href="#">Relationship Management Program</a></h3>
                      <p>
                          We all want better professional and personal relationships. Improving your questioning skills is a powerful way to build stronger, better relationships. That's why, according to Anthony Robbins, successful people ask better questions.
                          <br><br>
                          Asking questions is a critical communication skill that most of us pay little attention to. It is the linchpin to building stronger relationships, both professionally and personally. Learn to understand others before making, and acting on, inaccurate judgments that end up making things worse rather than better.
                      </p>
                    </div>

                    <div class="tab-pane container p-0 fade" id="services-8">
                      <div class="img" style="background-image: url({{ asset('assets/images/meditation.jpg') }})"></div>
                      <h3><a href="#">Meditation Program</a></h3>
                      <p>
                        Meditation is a powerful way to think about your life, your relationships, and the world around you. It can help you take control of your thoughts and emotions, which will eventually lead to a more positive outlook on life.
                        <br><br>
                        There are many ways to practice meditation, but one of the most effective is through guided meditation programs. These programs typically have someone leading you through a guided visualization that involves relaxing your body and breathing deeply. The goal is to clear your mind of negative thoughts and replace them with positive ones.
                      </p>
                    </div>

                  </div>
            </div>
        </div>
    </div>


    <footer class="ftco-footer ftco-bg-dark ftco-section">
        <div class="container">
          <div class="row mb-5">
            <div class="col-md">
              <div class="ftco-footer-widget mb-4">
                {{-- <h2 class="ftco-heading-2">About Judge</h2> --}}
                <p>‘ When you focus on problems you will have more problems..!
                  When you focus on possibilities you life is controlled by what you focus on ’</p>
                <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                  <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                  <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                  <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
                </ul>
              </div>
            </div>
            <div class="col-md">
              <div class="ftco-footer-widget mb-4 ml-md-5">
                {{-- <h2 class="ftco-heading-2">Practice Areas</h2> --}}
                <ul class="list-unstyled">
                  <li><a href="/" class="py-1 d-block"><span class="ion-ios-arrow-forward mr-3"></span>Home</a></li>
                  <li><a href="#about" class="py-1 d-block"><span class="ion-ios-arrow-forward mr-3"></span>About</a></li>
                  <li><a href="#practice-areas" class="py-1 d-block"><span class="ion-ios-arrow-forward mr-3"></span>Practical Areas</a></li>
                  <li><a href="#contact" class="py-1 d-block"><span class="ion-ios-arrow-forward mr-3"></span>Contact</a></li>
                  {{-- <li><a href="#" class="py-1 d-block"><span class="ion-ios-arrow-forward mr-3"></span>Criminal Law</a></li> --}}
                  {{-- <li><a href="#" class="py-1 d-block"><span class="ion-ios-arrow-forward mr-3"></span>Fire Accident</a></li>
                  <li><a href="#" class="py-1 d-block"><span class="ion-ios-arrow-forward mr-3"></span>Employment Law</a></li>
                  <li><a href="#" class="py-1 d-block"><span class="ion-ios-arrow-forward mr-3"></span>Property Law</a></li> --}}

                </ul>
              </div>
            </div>
            <!-- <div class="col-md">
               <div class="ftco-footer-widget mb-4">
                <h2 class="ftco-heading-2">Business Hours</h2>
                <div class="opening-hours">
                    <h4>Opening Days:</h4>
                    <p class="pl-3">
                        <span>Monday – Friday : 9am to 20 pm</span>
                        <span>Saturday : 9am to 17 pm</span>
                    </p>
                    <h4>Vacations:</h4>
                    <p class="pl-3">
                        <span>All Sunday Days</span>
                        <span>All Official Holidays</span>
                    </p>
                </div>
              </div>
            </div> -->
            <div class="col-md">
              <div class="ftco-footer-widget mb-4">
                  <h2 class="ftco-heading-2">Have a Questions?</h2>
                  <div class="block-23 mb-3">
                    <ul>
                      <!-- <li><span class="icon icon-map-marker"></span><span class="text">203 Fake St. Mountain View, San Francisco, California, USA</span></li> -->
                      <li><a href="https://wa.me/+919447911558"><span class="icon icon-phone"></span><span class="text">+919447911558</span></a></li>
                      <li><a href="https://wa.me/+971566405600"><span class="icon icon-phone"></span><span class="text">+971566405600</span></a></li>
                      <li><a href="mailto:shijisunny1@gmail.com"><span class="icon icon-envelope"></span><span class="text">shijisunny1@gmail.com</span></a></li>
                    </ul>
                  </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12 text-center">

              <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
              Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved
              {{-- | This template is made with <i class="icon-heart color-danger" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a> --}}
              <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
            </div>
          </div>
        </div>
      </footer>



  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


<!-- floating whatsapp button -->
<a href="https://wa.me/+919447911558" target="" style="text-decoration:none;z-index: 99999;" class="float hover-svg">
	<svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-whatsapp icon-btn " viewBox="0 0 16 16">
		<path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z"/>
	</svg>
</a>

<style>

	.float{
		position:fixed;
		width:75px;
		height:75px;
		bottom:10px;
		right:10px;
		background-color: #25D366;
		color:#FFF;
		border-radius:50px;
		text-align:center;
		box-shadow: 2px 2px 3px #999;
	}

	.icon-btn{
		margin-top: 18px;
	}

  	.hover-svg:hover {
        color: black;
	}


</style>
<!-- floating whatsapp button -->



  <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
  <script src="{{ asset('assets/js/jquery-migrate-3.0.1.min.js') }}"></script>

  <script src="{{ asset('assets/js/popper.min.js') }}"></script>
  <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('assets/js/jquery.easing.1.3.js') }}"></script>
  <script src="{{ asset('assets/js/jquery.waypoints.min.js') }}"></script>
  <script src="{{ asset('assets/js/jquery.stellar.min.js') }}"></script>
  <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
  <script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>
  <script src="{{ asset('assets/js/aos.js') }}"></script>
  <script src="{{ asset('assets/js/jquery.animateNumber.min.js') }}"></script>
  <script src="{{ asset('assets/js/scrollax.min.js') }}"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="{{ asset('assets/js/google-map.js') }}"></script>
  <script src="{{ asset('assets/js/main.js') }}"></script>

  {{-- <script src="https://technext.github.io/counselor/js/main.js"></script> --}}

  </body>
</html>




