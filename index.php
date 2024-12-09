<?php include_once('includes/url.inc.php'); ?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="assets/images/favicon.ico" type="image/x-icon"> 
    <title>Info Tech</title>
 
    <!-- All Stylesheets -->
    <?php include_once('includes/stylesheets.inc.php'); ?> 
</head>
<body> 

    <!-- Preloader, Main Navigation Menu --> 
    <?php include_once('includes/header.inc.php'); ?> 

    <main> 
        <!-- Header Wrapper Start -->
        <header class="header__wrapper py-5 bg-primary position-relative">
            <img 
                src="assets/images/home/header-bg-image.webp" 
                alt="Image"
                class="img-fluid position-absolute top-0 start-0 w-100 h-100 object-fit-cover"
            >
            <div class="container position-relative z-3">
                <div class="row g-4 gx-lg-5 align-items-center">
                    <div class="col-lg-7 text-center text-lg-start"> 
                        <h1 class="display-5 fw-normal text-capitalize text-white">
                            The Academic Papers UK Committed to <span class="text-yellow">Get You Top Grades!</span>
                        </h1>
                        <p class="lead fw-normal text-white mt-4">
                            The Academic Papers UK is committed to helping students with all their academic writing projects. So, if you are looking for the most reliable yet professional help for your essays, assignments or homework, just click on the live chat button to discuss your paper requirements with an academic expert or simply place an order. Our team of professionals is ready to help you ace your class through the best academic writing service in the UK
                        </p>
                        <div class="d-flex gap-4 justify-content-center justify-content-lg-start mt-4">
                            <div class="d-inline-flex gap-2 align-items-center">
                                <figure class="mb-0 icon">
                                    <img src="assets/images/icons/smile.svg" width="44" alt="" class="img-fluid">
                                </figure>
                                <div class="col lh-sm">
                                    <span class="text-white fw-light d-block">No AI Used</span>
                                    <span class="text-yellow d-block">Written By A Human</span>
                                </div>
                            </div>
                            <div class="divider"></div>
                            <div class="d-inline-flex gap-2 align-items-center">
                                <figure class="mb-0 icon">
                                    <img src="assets/images/icons/quote.svg" width="44" alt="" class="img-fluid">
                                </figure>
                                <div class="col lh-sm">
                                    <span class="text-white fw-light d-block">Get Free</span>
                                    <span class="text-yellow d-block">Plagiarism Report</span>
                                </div>
                            </div>
                            <div class="divider"></div>
                            <div class="d-inline-flex gap-2 align-items-center">
                                <figure class="mb-0 icon">
                                    <img src="assets/images/icons/review.svg" width="44" alt="" class="img-fluid">
                                </figure>
                                <div class="col lh-sm">
                                    <span class="text-white fw-light d-block">249k+ Reviews</span>
                                    <span class="text-yellow d-block">Rated 4.9/5</span>
                                </div>
                            </div>
                        </div>

                        <div class="row g-4 mt-3">
                            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-8">
                                <div class="bg-white pe-3 ps-4 py-2 rounded-pill rating__box">
                                    <div class="row gy-0 gx-4 row-cols-2 row-cols-md-3 text-center">
                                        <div class="column">
                                            <img 
                                                src="assets/images/icons/trustpilot-reviews.svg" 
                                                alt="trust pilot"
                                            >
                                        </div>
                                        <div class="column">
                                            <img 
                                                src="assets/images/icons/google-reviews.svg" 
                                                alt="trust pilot"
                                            >
                                        </div>
                                        <div>
                                            <img 
                                                src="assets/images/icons/bank-reviews.svg" 
                                                alt="trust pilot"
                                            >
                                        </div>
                                    </div>
                                </div> 
                            </div>
                            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-4 d-flex">
                                <a href="#" class="btn btn-white write__paper__btn rounded-pill w-100 fw-bold fs-5" aria-label="Write My Paper">
                                    <span>Write My Paper</span>
                                </a> 
                            </div>
                        </div>
                    </div><!--.col-->

                    <div class="col-lg-5 col-xxl-4 offset-xxl-1">
                        <div class="bg-white rounded-4 overflow-hidden">
                            <div class="border-bottom p-3">
                                <p class="text-center m-0 fs-5 fw-semibold ">
                                    <img src="assets/images/icons/fire.svg" alt="Fire">
                                    PLACE AN ORDER NOW
                                </p>
                            </div>
                            <div class="p-4">
                                <form action="#" method="post">
                                    <div class="row gx-2 gy-3">
                                        <div class="col-md-4">
                                            <label for="" class="small fw-medium text-primary pt-md-2">Academic level <span class="text-danger">*</span></label>
                                        </div>
                                        <div class="col-md-8">
                                            <select aria-label="Academic level" name="education_level" id="education_level" class="form-select rounded-pill">
                                                <option value="A Level / O Level">A Level / O Level</option>
                                                <option value="Undergraduate">Undergraduate</option>
                                                <option value="Graduate / Master's">Graduate / Master's</option>
                                                <option value="PhD">PhD</option>
                                                <option value="Other">Other</option>
                                            </select>
                                        </div>
                                        <div class="col-md-4">
                                            <label for="" class="small fw-medium text-primary pt-md-2">Type of paper <span class="text-danger">*</span></label>
                                        </div>
                                        <div class="col-md-8">
                                            <select aria-label="Type of paper" class="form-select rounded-pill" name="type_of_paper" id="type_of_paper" required="">
                                                <option value="Admission Essay">Admission Essay</option>
                                                <option value="Annotated Bibliography">Annotated Bibliography</option>
                                                <option value="Article critique">Article critique</option>
                                                <option value="Article">Article</option>
                                                <option value="Assignment">Assignment</option>
                                                <option value="Book report">Book report</option>
                                                <option value="Book review">Book review</option>
                                                <option value="Capstone Project">Capstone Project</option>
                                                <option value="Case Analysis">Case Analysis</option>
                                                <option value="Case Study">Case Study</option>
                                                <option value="Copywriting">Copywriting</option>
                                                <option value="Course Work">Course Work</option>
                                                <option value="Coursework">Coursework</option>
                                                <option value="Cover letter">Cover letter</option>
                                                <option value="Critical essay">Critical essay</option>
                                                <option value="CV/Resume writing">CV/Resume writing</option>
                                                <option value="Debate">Debate</option>
                                                <option value="Discussion board post">Discussion board post</option>
                                                <option value="Dissertation - Analysis Chapter">Dissertation - Analysis Chapter</option>
                                                <option value="Dissertation - Conclusion Chapter">Dissertation - Conclusion Chapter</option>
                                                <option value="Dissertation Editing and Proof Reading">Dissertation Editing and Proof Reading</option>
                                                <option value="Dissertation - Introduction Chapter">Dissertation - Introduction Chapter</option>
                                                <option value="Dissertation - Literature Review Chapter">Dissertation - Literature Review Chapter</option>
                                                <option value="Dissertation - Methodology Chapter">Dissertation - Methodology Chapter</option>
                                                <option value="Dissertation Proposal">Dissertation Proposal</option>
                                                <option value="Dissertation Topics">Dissertation Topics</option>
                                                <option value="Dissertation">Dissertation</option>
                                                <option value="Dissertation - Abstract">Dissertation-Abstract</option>
                                                <option value="Essay">Essay</option>
                                                <option value="Information and Communication/ Computer Technology">Information and Communication/ Computer Technology</option>
                                                <option value="Lab report">Lab report</option>
                                                <option value="Laboratory Report">Laboratory Report</option>
                                                <option value="Movie Review">Movie Review</option>
                                                <option value="Multiple Choice Questions">Multiple Choice Questions</option>
                                                <option value="Online Exam">Online Exam</option>
                                                <option value="Other">Other</option>
                                                <option value="Outline">Outline</option>
                                                <option value="Personal statement">Personal statement</option>
                                                <option value="Power Point Presentation">Power Point Presentation</option>
                                                <option value="Project">Project</option>
                                                <option value="Proposal">Proposal</option>
                                                <option value="Reaction Paper">Reaction Paper</option>
                                                <option value="Reflective writing">Reflective writing</option>
                                                <option value="Report">Report</option>
                                                <option value="Research Paper">Research Paper</option>
                                                <option value="Research Proposal">Research Proposal</option>
                                                <option value="Research summary">Research summary</option>
                                                <option value="Scholarship Essay">Scholarship Essay</option>
                                                <option value="Speech">Speech</option>
                                                <option value="Statistics Project">Statistics Project</option>
                                                <option value="Summary">Summary</option>
                                                <option value="Term Paper">Term Paper</option>
                                                <option value="Thesis Proposal">Thesis Proposal</option>
                                                <option value="Thesis">Thesis</option>
                                                <option value="Other">Other</option>
                                            </select>
                                        </div>
                                        <div class="col-md-4">
                                            <label for="" class="small fw-medium text-primary pt-md-2">Type of subject <span class="text-danger">*</span></label>
                                        </div>
                                        <div class="col-md-8">
                                            <select aria-label="Type of subject" class="form-select rounded-pill" name="type_of_subject" id="type_of_subject" required="">
                                                <option>Accounting</option>
                                                <option>Accounts Law</option>
                                                <option>Advertising</option>
                                                <option>Aeronautical Engineering</option>
                                                <option>Agency Law</option>
                                                <option>Agriculture</option>
                                                <option>Animal Management</option>
                                                <option>Anthropology</option>
                                                <option>Architecture</option>
                                                <option>Art</option>
                                                <option>Astrophysics</option>
                                                <option>Biochemistry</option>
                                                <option>Biology</option>
                                                <option>Biotechnology</option>
                                                <option>Business</option>
                                                <option>Chemical Engineering</option>
                                                <option>Chemistry</option>
                                                <option>Child Care</option>
                                                <option>Civil Engineering</option>
                                                <option>Civil Litigation Law</option>
                                                <option>Classics</option>
                                                <option>Computer Science</option>
                                                <option>Commercial Law</option>
                                                <option>Commercial Property Law</option>
                                                <option>Communication Strategies</option>
                                                <option>Communications &amp; Media</option>
                                                <option>Communications</option>
                                                <option>Company Law / Business Law</option>
                                                <option>Comparative Law</option>
                                                <option>Computer Engineering</option>
                                                <option>Computing</option>
                                                <option>Constitutional / Administrative Law</option>
                                                <option>Consumer Law</option>
                                                <option>Contract Law</option>
                                                <option>Criminal Law</option>
                                                <option>E-commerce</option>
                                                <option>Economics</option>
                                                <option>Education</option>
                                                <option>Engineering</option>
                                                <option>English</option>
                                                <option>Finance</option>
                                                <option>Healthcare &amp; Medicine</option>
                                                <option>History</option>
                                                <option>Human Resource</option>
                                                <option>Investment</option>
                                                <option>IT &amp; Technology</option>
                                                <option>Journalism</option>
                                                <option>Law</option>
                                                <option>Literature</option>
                                                <option>Logistics</option>
                                                <option>Marketing</option>
                                                <option>Medicine &amp; Dentistry</option>
                                                <option>Movies</option>
                                                <option>Nursing</option>
                                                <option>Paintings</option>
                                                <option>Pathogenesis of disease</option>
                                                <option>Physical Studies</option>
                                                <option>Political Science</option>
                                                <option>Psychology</option>
                                                <option>Public relations</option>
                                                <option>Social Work</option>
                                                <option>Sociology</option>
                                                <option>Theatre</option>
                                                <option>Trade</option>
                                                <option>Other</option>
                                            </select>
                                        </div>

                                        <div class="col-md-4">
                                            <label for="" class="small fw-medium text-primary pt-md-2">Deadline <span class="text-danger">*</span></label>
                                        </div>
                                        <div class="col-md-8">
                                            <select aria-label="Deadline" class="form-select rounded-pill" name="deadline" id="deadline" required="">
                                                <option value="1">1 Day</option>
                                                <option value="2">2 Days</option>
                                                <option value="3">3 Days</option>
                                                <option value="5">4 - 5 Days</option>
                                                <option value="10">6 - 10 Days</option>
                                                <option value="15">15 Days</option>
                                                <option value="15+">15+ Days</option>
                                            </select>
                                        </div>

                                        <div class="col-md-4">
                                            <label for="" class="small fw-medium text-primary pt-md-2">Pages or Words <span class="text-danger">*</span></label>
                                        </div>
                                        <div class="col-md-8">
                                            <select aria-label="Deadline" class="form-select rounded-pill" name="deadline" id="deadline" required="">
                                                <option value="1 Page / 250 Words">1 Page / 250 Words</option> 
                                                <option value="2 Page / 500 Words">2 Page / 500 Words</option> 
                                            </select>
                                        </div>
                                        <div class="col-sm-6">
                                            <p class="mb-0 text-dark fw-semibold text-start mt-2">Total Price: £21.80</p>
                                        </div>
                                        <div class="col-sm-6 text-center text-md-end">
                                            <div class="mt-2"> 
                                                <span class="mb-0 text-dark fw-semibold text-start text-decoration-line-through">(£22.95)</span>
                                                <span class="rounded-pill px-3 py-2 off__box small fw-bold">5% OFF</span>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <button class="btn btn-success rounded-pill w-100 text-white gap-2 mt-2">
                                                <svg width="18" height="18" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M144 144l0 48 160 0 0-48c0-44.2-35.8-80-80-80s-80 35.8-80 80zM80 192l0-48C80 64.5 144.5 0 224 0s144 64.5 144 144l0 48 16 0c35.3 0 64 28.7 64 64l0 192c0 35.3-28.7 64-64 64L64 512c-35.3 0-64-28.7-64-64L0 256c0-35.3 28.7-64 64-64l16 0z"/></svg>
                                                <span> Proceed To Order Now </span>
                                                <svg width="18" height="18" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path d="M310.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-192 192c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L242.7 256 73.4 86.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l192 192z"/></svg>
                                            </button>
                                        </div>

                                        <div class="col-12">
                                            <p class="mt-2 mb-0 small text-center">
                                                <svg width="14" height="14" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M64 80c-8.8 0-16 7.2-16 16l0 320c0 8.8 7.2 16 16 16l320 0c8.8 0 16-7.2 16-16l0-320c0-8.8-7.2-16-16-16L64 80zM0 96C0 60.7 28.7 32 64 32l320 0c35.3 0 64 28.7 64 64l0 320c0 35.3-28.7 64-64 64L64 480c-35.3 0-64-28.7-64-64L0 96zM337 209L209 337c-9.4 9.4-24.6 9.4-33.9 0l-64-64c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l47 47L303 175c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9z"/></svg>
                                                Unlimited Free Revisions And Money-back Guarantee
                                            </p>
                                        </div>
                                    </div><!--.row-->
                                </form>
                            </div>
                        </div><!--.bg-->
                    </div><!--.col-->
                </div><!--.//row-->
            </div><!--.//container-->
        </header>
        <!-- Header Wrapper End -->
    
        <!-- Order Tracking Wrapper Start -->
        <section class="py-5 bg-yellow">
            <div class="container">
                <div class="row g-4 gx-xl-5">
                    <div class="col-lg-4">
                        <div class="d-flex align-items-center gap-3">
                            <img src="assets/images/icons/truck.svg" alt="truck icon" width="60" height="48" class="img-fluid">
                            <h2 class="mb-0">Track Your Order</h2>
                        </div>
                    </div>
                    <div class="col-lg-8"> 
                        <form action="#" method="post">
                            <div class="row g-3">
                                <div class="col-md-4">
                                    <input type="text" name="email" class="form-control rounded-3 py-4" placeholder="Enter Your Email">
                                </div>
                                <div class="col-md-4">
                                    <input type="text" name="email" class="form-control rounded-3 py-4" placeholder="Enter Your Order ID">
                                </div>
                                <div class="col-md-4 d-flex">
                                    <button class="btn btn-primary w-100 fw-bold">Start Tracking</button>
                                </div>
                            </div>
                        </form>
                    </div><!--.//col--> 
                </div><!--.//row-->
            </div><!--.//container-->
        </section>
        <!-- Order Tracking Wrapper End -->
    
        <!-- Service Wrapper Start -->
        <section class="py-5">
            <div class="container"> 
                <h2 class="fs-2 text-primary fw-bold text-center">The Academic Papers UK Offers Reliable, Convenient & Affordable Help</h2>
                <p class="text-center text-muted">
                    Worried About Writing an Academic Paper? In Search of Affordable, Reliable and Convenient Academic Writing Services? The Academic Papers UK’s Top Rated Academic Writers are Online to Assist You in Achieving Your Desired Grades!
                </p>
    
                <div class="row g-3 g-md-4 mt-4">
                    <div class="col-md-6 d-flex">
                        <div class="service__card rounded-4 card card-body d-block w-100 p-md-4 transition ">
                            <div class="row g-3"> 
                                <div class="col-lg-3 col-xl-2 d-flex align-items-center order-lg-2">
                                    <img 
                                        src="assets/images/icons/Quick-Turnaround.svg" 
                                        alt="Quick Turnaround"
                                        class="img-fluid  icon"
                                        width="84" height="48" loading="lazy"
                                    >
                                </div>
                                <div class="col-xl-10 col-lg-9 order-lg-1"> 
                                    <h3 class="h4 title fw-semibold mb-3 text-primary">
                                        Quick Turnaround 
                                    </h3>
                                    <p class="fs-15 text-dark fw-light">
                                        Our academic writing specialists are accessible 24/7 for prompt writing assistance. They have the ability to meet urgent deadlines and come up with an equally successful academic paper like the one prepared in many days. Above all, we have multiple customer care executives and support staff to respond quickly to your calls and emails.
                                    </p>   
                                    <a href="#" class="btn btn-primary rounded-pill fs-6 fw-bold gap-2">
                                        <span>Get Started Now</span>
                                        <svg width="19" height="13" viewBox="0 0 19 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M13.1232 12.7427L18.742 7.12626C18.7827 7.08568 18.8193 7.041 18.8514 6.9931C18.8592 6.98136 18.8642 6.96815 18.8715 6.95609C18.8937 6.91929 18.9156 6.88225 18.9323 6.8422C18.9393 6.82542 18.9425 6.80741 18.9485 6.79023C18.9611 6.75348 18.9747 6.71714 18.9825 6.67836C18.994 6.62159 19 6.56348 19 6.50472C19 6.44597 18.994 6.38786 18.9825 6.33109C18.9747 6.29231 18.9611 6.25597 18.9485 6.21922C18.9425 6.20204 18.9393 6.18403 18.9323 6.16725C18.9156 6.1272 18.8937 6.09016 18.8715 6.05336C18.8642 6.0413 18.8592 6.02808 18.8514 6.01635C18.8193 5.96845 18.7827 5.92377 18.742 5.88319L13.114 0.257307C12.771 -0.0857693 12.2146 -0.0857693 11.8716 0.257307C11.7 0.428842 11.6142 0.653559 11.6142 0.878274C11.6142 1.10299 11.7 1.3277 11.8716 1.49924L16.0002 5.62645L0.878612 5.62644C0.393404 5.62644 -2.63129e-07 6.0197 -2.8433e-07 6.50472C-3.05531e-07 6.98974 0.393404 7.38299 0.878612 7.38299L16.0001 7.38299L11.8808 11.5008C11.5376 11.8438 11.5376 12.3996 11.8808 12.7427C12.2238 13.0858 12.7802 13.0858 13.1232 12.7427Z" fill="#FFCE00"></path>
                                        </svg>
                                    </a>
                                </div> 
                            </div>
                        </div>
                    </div><!--.col-->
                    <div class="col-md-6 d-flex">
                        <div class="service__card rounded-4 card card-body d-block w-100 p-md-4 transition ">
                            <div class="row g-3"> 
                                <div class="col-lg-3 col-xl-2 d-flex align-items-center order-lg-2">
                                    <img 
                                        src="assets/images/icons/UK-PhD-Writers.svg" 
                                        alt="UK PhD Writers"
                                        class="img-fluid  icon"
                                        width="84" height="48" loading="lazy"
                                    >
                                </div>
                                <div class="col-xl-10 col-lg-9 order-lg-1"> 
                                    <h3 class="h4 title fw-semibold mb-3 text-primary">
                                        UK PhD Writers 
                                    </h3>
                                    <p class="fs-15 text-dark fw-light">
                                        Our team comprises skilled academic writers who provide high-calibre work per your requirements. Unlike most writing agencies, our writers are UK-native PhD-qualified individuals with expertise in their field of work. We maintain a standard while hiring writers for our platform to ensure quality and uniqueness in all the work we provide. 
                                    </p>   
                                    <a href="#" class="btn btn-primary rounded-pill fs-6 fw-bold gap-2">
                                        <span>View Our Writers</span>
                                        <svg width="19" height="13" viewBox="0 0 19 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M13.1232 12.7427L18.742 7.12626C18.7827 7.08568 18.8193 7.041 18.8514 6.9931C18.8592 6.98136 18.8642 6.96815 18.8715 6.95609C18.8937 6.91929 18.9156 6.88225 18.9323 6.8422C18.9393 6.82542 18.9425 6.80741 18.9485 6.79023C18.9611 6.75348 18.9747 6.71714 18.9825 6.67836C18.994 6.62159 19 6.56348 19 6.50472C19 6.44597 18.994 6.38786 18.9825 6.33109C18.9747 6.29231 18.9611 6.25597 18.9485 6.21922C18.9425 6.20204 18.9393 6.18403 18.9323 6.16725C18.9156 6.1272 18.8937 6.09016 18.8715 6.05336C18.8642 6.0413 18.8592 6.02808 18.8514 6.01635C18.8193 5.96845 18.7827 5.92377 18.742 5.88319L13.114 0.257307C12.771 -0.0857693 12.2146 -0.0857693 11.8716 0.257307C11.7 0.428842 11.6142 0.653559 11.6142 0.878274C11.6142 1.10299 11.7 1.3277 11.8716 1.49924L16.0002 5.62645L0.878612 5.62644C0.393404 5.62644 -2.63129e-07 6.0197 -2.8433e-07 6.50472C-3.05531e-07 6.98974 0.393404 7.38299 0.878612 7.38299L16.0001 7.38299L11.8808 11.5008C11.5376 11.8438 11.5376 12.3996 11.8808 12.7427C12.2238 13.0858 12.7802 13.0858 13.1232 12.7427Z" fill="#FFCE00"></path>
                                        </svg>
                                    </a>
                                </div> 
                            </div>
                        </div>
                    </div><!--.col-->
                    <div class="col-md-6 d-flex">
                        <div class="service__card rounded-4 card card-body d-block w-100 p-md-4 transition ">
                            <div class="row g-3"> 
                                <div class="col-lg-3 col-xl-2 d-flex align-items-center order-lg-2">
                                    <img 
                                        src="assets/images/icons/5-Stars-Rating.svg" 
                                        alt="5 Stars Rating"
                                        class="img-fluid  icon"
                                        width="84" height="48" loading="lazy"
                                    >
                                </div>
                                <div class="col-xl-10 col-lg-9 order-lg-1"> 
                                    <h3 class="h4 title fw-semibold mb-3 text-primary">
                                        5 Stars Rating 
                                    </h3>
                                    <p class="fs-15 text-dark fw-light">
                                        Since 2003, we have provided our services to thousands of students. Our goal is to provide the entire project flawlessly. We put the needs of our customers first, which is why we always deliver the best quality work, ensuring 100% satisfaction. This is the main reason we have a success rate of 100% and received a 5-star rating from our customers.
                                    </p>   
                                    <a href="#" class="btn btn-primary rounded-pill fs-6 fw-bold gap-2">
                                        <span>Our Reviews</span>
                                        <svg width="19" height="13" viewBox="0 0 19 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M13.1232 12.7427L18.742 7.12626C18.7827 7.08568 18.8193 7.041 18.8514 6.9931C18.8592 6.98136 18.8642 6.96815 18.8715 6.95609C18.8937 6.91929 18.9156 6.88225 18.9323 6.8422C18.9393 6.82542 18.9425 6.80741 18.9485 6.79023C18.9611 6.75348 18.9747 6.71714 18.9825 6.67836C18.994 6.62159 19 6.56348 19 6.50472C19 6.44597 18.994 6.38786 18.9825 6.33109C18.9747 6.29231 18.9611 6.25597 18.9485 6.21922C18.9425 6.20204 18.9393 6.18403 18.9323 6.16725C18.9156 6.1272 18.8937 6.09016 18.8715 6.05336C18.8642 6.0413 18.8592 6.02808 18.8514 6.01635C18.8193 5.96845 18.7827 5.92377 18.742 5.88319L13.114 0.257307C12.771 -0.0857693 12.2146 -0.0857693 11.8716 0.257307C11.7 0.428842 11.6142 0.653559 11.6142 0.878274C11.6142 1.10299 11.7 1.3277 11.8716 1.49924L16.0002 5.62645L0.878612 5.62644C0.393404 5.62644 -2.63129e-07 6.0197 -2.8433e-07 6.50472C-3.05531e-07 6.98974 0.393404 7.38299 0.878612 7.38299L16.0001 7.38299L11.8808 11.5008C11.5376 11.8438 11.5376 12.3996 11.8808 12.7427C12.2238 13.0858 12.7802 13.0858 13.1232 12.7427Z" fill="#FFCE00"></path>
                                        </svg>
                                    </a>
                                </div> 
                            </div>
                        </div>
                    </div><!--.col-->
                    <div class="col-md-6 d-flex">
                        <div class="service__card rounded-4 card card-body d-block w-100 p-md-4 transition ">
                            <div class="row g-3"> 
                                <div class="col-lg-3 col-xl-2 d-flex align-items-center order-lg-2">
                                    <img 
                                        src="assets/images/icons/Safe-Trusted.svg" 
                                        alt="Safe & Trusted"
                                        class="img-fluid  icon"
                                        width="84" height="48" loading="lazy"
                                    >
                                </div>
                                <div class="col-xl-10 col-lg-9 order-lg-1"> 
                                    <h3 class="h4 title fw-semibold mb-3 text-primary">
                                        Safe & Trusted 
                                    </h3>
                                    <p class="fs-15 text-dark fw-light">
                                        We protect our client's privacy by conforming to the United Kingdom’s Data Protection Act (GDPR). We recognise the value of privacy and never compromise on it. Your information and identity are 100% safe and secure with us. So, with our 100% privacy guarantee, you can enjoy our premium services without being conscious of identity theft.
                                    </p>   
                                    <a href="#" class="btn btn-primary rounded-pill fs-6 fw-bold gap-2">
                                        <span>Our Guarantees</span>
                                        <svg width="19" height="13" viewBox="0 0 19 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M13.1232 12.7427L18.742 7.12626C18.7827 7.08568 18.8193 7.041 18.8514 6.9931C18.8592 6.98136 18.8642 6.96815 18.8715 6.95609C18.8937 6.91929 18.9156 6.88225 18.9323 6.8422C18.9393 6.82542 18.9425 6.80741 18.9485 6.79023C18.9611 6.75348 18.9747 6.71714 18.9825 6.67836C18.994 6.62159 19 6.56348 19 6.50472C19 6.44597 18.994 6.38786 18.9825 6.33109C18.9747 6.29231 18.9611 6.25597 18.9485 6.21922C18.9425 6.20204 18.9393 6.18403 18.9323 6.16725C18.9156 6.1272 18.8937 6.09016 18.8715 6.05336C18.8642 6.0413 18.8592 6.02808 18.8514 6.01635C18.8193 5.96845 18.7827 5.92377 18.742 5.88319L13.114 0.257307C12.771 -0.0857693 12.2146 -0.0857693 11.8716 0.257307C11.7 0.428842 11.6142 0.653559 11.6142 0.878274C11.6142 1.10299 11.7 1.3277 11.8716 1.49924L16.0002 5.62645L0.878612 5.62644C0.393404 5.62644 -2.63129e-07 6.0197 -2.8433e-07 6.50472C-3.05531e-07 6.98974 0.393404 7.38299 0.878612 7.38299L16.0001 7.38299L11.8808 11.5008C11.5376 11.8438 11.5376 12.3996 11.8808 12.7427C12.2238 13.0858 12.7802 13.0858 13.1232 12.7427Z" fill="#FFCE00"></path>
                                        </svg>
                                    </a>
                                </div> 
                            </div>
                        </div>
                    </div><!--.col-->
                     
                </div><!--.//row-->
            </div><!--.//container-->
        </section>
        <!-- Service Wrapper End -->
    
        <!-- Info Wrapper Start -->
        <section class="py-5">
            <div class="container pb-lg-4"> 
                <div class="row g-4 gx-xl-5">
                    <div class="col-lg-5 order-lg-2">
                        <img 
                            src="assets/images/home/Professional-academic-writing-help-for-every-students-needs.webp" 
                            alt="Why Choose Us"
                            class="img-fluid rounded-4"
                        >
                    </div>
                    <div class="col-lg-7 order-lg-1"> 
                        <h2 class="fs-2 text-primary fw-bold">Professional academic writing help for every student’s needs</h2>
                        <p>
                            Writing academic papers is a vital part of academic life of a student. There is always one assignment on your table that you must hand to your tutor on a deadline. But we have come with a solution to provide the best academic papers writing helps in UK. Our highly qualified, UK-based academic and research writers can help you write your papers from scratch. <i>With the help of <a href="#" class="link">The Academic Papers UK</a>, you can <strong class="fw-bold">get your degree with distinction</strong>, guaranteed!</i>
                        </p>
                        <ul class="check__list">
                            <li>
                                It is 2:30 AM, and you are thinking about the coursework assignment due for submission tomorrow; otherwise, you will fail the class. At the same time, you are doing a part-time job and don’t have enough time to complete it. You are in trouble and don’t know any way out, so you are looking for the best coursework writing service..!!
                            </li>
                            <li>
                                You are a Graduate student and have been postponing your dissertation writing task for the last few months. You have done some research and have class notes, but now you don’t have enough time to complete it, meeting all its requirements. Conducting research, gathering relevant data, putting it into the proper thesis format, and proofreading for spelling, grammar, and format is impossible in a few days.
                            </li>
                            <li>
                                You have only one week left to submit your PhD thesis, and have been striving hard for the last several weeks to complete it. You have spent all day but completed only one page. Your professor is strict about the Content, Format, and Structure of the paper. You are stuck with it and don’t know how to complete it; an authentic PhD writing service may help you escape this situation..!!
                            </li>
                        </ul>
                        <p><strong>If you want to complete your academic assignments on time. We can assist you in writing:</strong></p>
                        <ul class="check__list"> 
                            <li>Academic Essays</li>
                            <li>Coursework Assignments</li>
                            <li>Dissertations</li>
                            <li>Thesis</li> 
                        </ul>
                        <p>Without compromising on the quality of content, hiring an <strong>authentic academic paper writing service</strong> is the only way to be out of such troubles.</p>
                    </div>
                </div>
            </div><!--.//container-->
        </section>
        <!-- Info Wrapper End -->

        <!-- quote wrapper start -->
        <section class="py-5 bg-yellow">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-6 col-lg-7">
                        <h2 class="fs-3 fw-bold text-dark">
                            Quote Our Academic Writing Service To Elevate Your Grades!
                        </h2>
                        <p class="mb-0">
                            Get our expert UK writers to overcome your academic challenges with confidence
                        </p>
                    </div>
                    <div class="col-md-6 col-lg-5">
                        <div class="row g-3">
                            <div class="col-6"> 
                                <a href="#" class="height btn btn-success w-100 rounded-pill d-inline-flex align-items-center gap-2 lh-1 fs-6 text-white">
                                    <svg width="32" height="32" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" fill="#fff"><path d="M88.2 309.1c9.8-18.3 6.8-40.8-7.5-55.8C59.4 230.9 48 204 48 176c0-63.5 63.8-128 160-128s160 64.5 160 128s-63.8 128-160 128c-13.1 0-25.8-1.3-37.8-3.6c-10.4-2-21.2-.6-30.7 4.2c-4.1 2.1-8.3 4.1-12.6 6c-16 7.2-32.9 13.5-49.9 18c2.8-4.6 5.4-9.1 7.9-13.6c1.1-1.9 2.2-3.9 3.2-5.9zM208 352c114.9 0 208-78.8 208-176S322.9 0 208 0S0 78.8 0 176c0 41.8 17.2 80.1 45.9 110.3c-.9 1.7-1.9 3.5-2.8 5.1c-10.3 18.4-22.3 36.5-36.6 52.1c-6.6 7-8.3 17.2-4.6 25.9C5.8 378.3 14.4 384 24 384c43 0 86.5-13.3 122.7-29.7c4.8-2.2 9.6-4.5 14.2-6.8c15.1 3 30.9 4.5 47.1 4.5zM432 480c16.2 0 31.9-1.6 47.1-4.5c4.6 2.3 9.4 4.6 14.2 6.8C529.5 498.7 573 512 616 512c9.6 0 18.2-5.7 22-14.5c3.8-8.8 2-19-4.6-25.9c-14.2-15.6-26.2-33.7-36.6-52.1c-.9-1.7-1.9-3.4-2.8-5.1C622.8 384.1 640 345.8 640 304c0-94.4-87.9-171.5-198.2-175.8c4.1 15.2 6.2 31.2 6.2 47.8l0 .6c87.2 6.7 144 67.5 144 127.4c0 28-11.4 54.9-32.7 77.2c-14.3 15-17.3 37.6-7.5 55.8c1.1 2 2.2 4 3.2 5.9c2.5 4.5 5.2 9 7.9 13.6c-17-4.5-33.9-10.7-49.9-18c-4.3-1.9-8.5-3.9-12.6-6c-9.5-4.8-20.3-6.2-30.7-4.2c-12.1 2.4-24.8 3.6-37.8 3.6c-61.7 0-110-26.5-136.8-62.3c-16 5.4-32.8 9.4-50 11.8C279 439.8 350 480 432 480z"/></svg>
                                    <span>Live Chat</span>
                                </a>
                            </div>
                            <div class="col-6"> 
                                <a href="#" class="height btn btn-white w-100 rounded-pill d-inline-flex align-items-center gap-2 lh-1 fs-6 "> 
                                    <span>Place An Order Now</span>
                                    <svg width="20" height="20" fill="#000" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z"/></svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div> 
            </div>
        </section>
        <!-- quote wrapper end -->

        <!-- Info Wrapper Start -->
        <section class="py-5">
            <div class="container"> 
                <h2 class="fs-2 text-primary fw-bold text-center">Key Reasons Students Prefer The Academic Papers UK Over Others </h2>
                <p class="text-center text-muted">
                    The Academic Papers UK has been serving students and researchers since 2013. Since its initiation, we have strived to achieve one goal, providing top-notch academic papers help within affordable prices. The reputation and respect that we enjoy today is the fruit of our hard work and struggle that all the staff has incorporated including live chat support staff, our developers, writers, editors, administrators, academic consultants, and our SEO team. Jointly, we have worked towards one goal, 100% customer satisfaction and best user experience on-site. We proudly claim to be the best academic paper writing help provider in the United Kingdom. Some of the unique features that differentiate us from other academic writing services in the UK. 
                </p>
    
                <div class="row g-3 g-md-4 mt-4">
                    <div class="col-md-6 d-flex">
                        <div class="service__card rounded-4 card card-body d-block w-100 p-md-4 transition ">
                            <div class="row g-3"> 
                                <div class="col-lg-3 col-xl-2 d-flex align-items-center order-lg-2">
                                    <img 
                                        src="assets/images/icons/Quick-Turnaround.svg" 
                                        alt="Quick Turnaround"
                                        class="img-fluid  icon"
                                        width="84" height="48" loading="lazy"
                                    >
                                </div>
                                <div class="col-xl-10 col-lg-9 order-lg-1"> 
                                    <h3 class="h4 title fw-semibold mb-3 text-primary">
                                        All in One Academic Papers Writing Help 
                                    </h3>
                                    <p class="fs-15 text-dark fw-light">
                                        You have come to a place where you can get help in writing all types of academic papers under one roof. The Academic Papers UK offers expert assistance to students in essay writing, assignment writing, dissertation writing, coursework writing, case study writing, and thesis writing. Our best services can help you to complete your academic papers with paramount quality within 6-12 hours.
                                    </p>    
                                </div> 
                            </div>
                        </div>
                    </div><!--.col-->
                    <div class="col-md-6 d-flex">
                        <div class="service__card rounded-4 card card-body d-block w-100 p-md-4 transition ">
                            <div class="row g-3"> 
                                <div class="col-lg-3 col-xl-2 d-flex align-items-center order-lg-2">
                                    <img 
                                        src="assets/images/icons/UK-PhD-Writers.svg" 
                                        alt="Custom Creation "
                                        class="img-fluid  icon"
                                        width="84" height="48" loading="lazy"
                                    >
                                </div>
                                <div class="col-xl-10 col-lg-9 order-lg-1"> 
                                    <h3 class="h4 title fw-semibold mb-3 text-primary">
                                        Custom Creation 
                                    </h3>
                                    <p class="fs-15 text-dark fw-light">
                                        We are aware of the consequences of plagiarism for a student and thus have a very strict policy towards plagiarism. At The Academic Papers UK, we provide a guarantee of 100% original & custom written an academic paper. Additionally, we will provide a plagiarism report of each completed academic paper without any additional charges.
                                    </p>    
                                </div> 
                            </div>
                        </div>
                    </div><!--.col-->
                    <div class="col-md-6 d-flex">
                        <div class="service__card rounded-4 card card-body d-block w-100 p-md-4 transition ">
                            <div class="row g-3"> 
                                <div class="col-lg-3 col-xl-2 d-flex align-items-center order-lg-2">
                                    <img 
                                        src="assets/images/icons/5-Stars-Rating.svg" 
                                        alt="On Time Always "
                                        class="img-fluid  icon"
                                        width="84" height="48" loading="lazy"
                                    >
                                </div>
                                <div class="col-xl-10 col-lg-9 order-lg-1"> 
                                    <h3 class="h4 title fw-semibold mb-3 text-primary">
                                        On Time Always  
                                    </h3>
                                    <p class="fs-15 text-dark fw-light">
                                        We know the importance of time. Don’t Worry! You will get your paper within the given time frame or even before your deadline, guaranteed. We have in-house writers and editors available with us to meet the deadlines. So, no matter your paper is due within 24 hours or more than 15 days, we have the capacity to meet strict deadlines.
                                    </p>   
                                </div> 
                            </div>
                        </div>
                    </div><!--.col-->
                    <div class="col-md-6 d-flex">
                        <div class="service__card rounded-4 card card-body d-block w-100 p-md-4 transition ">
                            <div class="row g-3"> 
                                <div class="col-lg-3 col-xl-2 d-flex align-items-center order-lg-2">
                                    <img 
                                        src="assets/images/icons/Safe-Trusted.svg" 
                                        alt="Your Satisfaction is Our Priority "
                                        class="img-fluid  icon"
                                        width="84" height="48" loading="lazy"
                                    >
                                </div>
                                <div class="col-xl-10 col-lg-9 order-lg-1"> 
                                    <h3 class="h4 title fw-semibold mb-3 text-primary">
                                        Your Satisfaction is Our Priority  
                                    </h3>
                                    <p class="fs-15 text-dark fw-light">
                                        We Ensure 100% customer satisfaction. This we achieve with our; Highly qualified and experienced UK writers. On time Delivery Confidentiality and Privacy Policy Free Work Samples and Free Topic Suggestion Drafts for review before Final submission to ensure the best grades
                                    </p>   
                                </div> 
                            </div>
                        </div>
                    </div><!--.col-->
                     
                </div><!--.//row-->
            </div><!--.//container-->
        </section>
        <!-- Info Wrapper End -->

        <!-- writers wrapper start -->
        <section class="py-5 bg-light">
            <div class="container">
                <div class="col-lg-9"> 
                    <h2 class="fs-2 text-primary fw-bold">Hire British Native Experienced Academic Writers </h2>
                    <p class="">
                        We have most qualified and experienced writers in our team who have years of experience in academic writing. Choose your preferred writer that matches with your subject area. You can also ask our customer support team to allocate the best writer from our team. 
                    </p>
                </div>

                <div class="owl-carousel writterCarousel">
                    <div class="writter__card p-3 rounded-4 bg-white">
                        <div class="d-flex gap-3">
                            <img 
                                src="assets/images/home/user.jpg" 
                                alt="Writer 1" 
                                class="img-fluid rounded-circle thumbnail" 
                                width="100" height="100" loading="lazy"
                            >
                            <div class="col">
                                <p class="fs-5 fw-bold text-primary mb-1">Morgan M.</p>
                                <div class="d-flex gap-3 small text-grey">
                                    <div class="d-inline-flex align-items-center gap-1">
                                        <img src="assets/images/icons/graduate-icon.svg" alt="icon" width="18" height="18">
                                        <span>Phd</span>
                                    </div>
                                    <div class="d-inline-flex align-items-center gap-1">
                                        <img src="assets/images/icons/case-icon.svg" alt="icon" width="16" height="15">
                                        <span>Teacher</span>
                                    </div> 
                                </div>
                            </div>
                        </div>
                        <p class="mt-3 text-grey fw-light">Focus area</p>
                        <div class="d-flex flex-wrap gap-2 info__list">
                            <span class="d-inline-flex align-items-center gap-1 fw-light">
                                <img src="assets/images/icons/literature.webp" alt="literature" width="16" height="16">
                                Literature
                            </span>
                            <span class="d-inline-flex align-items-center gap-1 fw-light">
                                <img src="assets/images/icons/philosophy.png" alt="literature" width="16" height="16">
                                Philosophy
                            </span>
                            <span class="d-inline-flex align-items-center gap-1 fw-light">
                                <img src="assets/images/icons/history.png" alt="history" width="16" height="16">
                                History
                            </span>
                        </div>

                        <p class="mt-3 text-grey fw-light mb-0">Loves to write</p>
                        <p>Essay, Case study, Coursework</p>
                        <div class="w-100" style="height: 1px;border-bottom: 1px dashed #d3d3d3;"></div>
                        <div class="row g-2 row-cols-3 info__box mt-3">
                            <div>
                                <p class="text-success mb-0 fs-5 fw-medium">100%</p>
                                <p class="text mb-0">Satisfaction Rate</p>
                            </div>
                            <div>
                                <p class="text-success mb-0 fs-5 fw-medium">100%</p>
                                <p class="text mb-0">On Time Rate</p>
                            </div>
                            <div>
                                <p class="text-success mb-0 fs-5 fw-medium">8h+</p>
                                <p class="text mb-0">Delivery</p>
                            </div>
                        </div>
                        <div class="mt-3">
                            <a href="#" class="btn btn-success rounded-pill w-100 text-white fw-normal gap-2">
                                <svg width="18" height="18" fill="#fff" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path d="M288 32c-80.8 0-145.5 36.8-192.6 80.6C48.6 156 17.3 208 2.5 243.7c-3.3 7.9-3.3 16.7 0 24.6C17.3 304 48.6 356 95.4 399.4C142.5 443.2 207.2 480 288 480s145.5-36.8 192.6-80.6c46.8-43.5 78.1-95.4 93-131.1c3.3-7.9 3.3-16.7 0-24.6c-14.9-35.7-46.2-87.7-93-131.1C433.5 68.8 368.8 32 288 32zM144 256a144 144 0 1 1 288 0 144 144 0 1 1 -288 0zm144-64c0 35.3-28.7 64-64 64c-7.1 0-13.9-1.2-20.3-3.3c-5.5-1.8-11.9 1.6-11.7 7.4c.3 6.9 1.3 13.8 3.2 20.7c13.7 51.2 66.4 81.6 117.6 67.9s81.6-66.4 67.9-117.6c-11.1-41.5-47.8-69.4-88.6-71.1c-5.8-.2-9.2 6.1-7.4 11.7c2.1 6.4 3.3 13.2 3.3 20.3z"/></svg>
                                <span>View Profile</span>
                            </a>
                        </div>
                    </div><!--.item-->
                    <div class="writter__card p-3 rounded-4 bg-white">
                        <div class="d-flex gap-3">
                            <img 
                                src="assets/images/home/user.jpg" 
                                alt="Writer 1" 
                                class="img-fluid rounded-circle thumbnail" 
                                width="100" height="100" loading="lazy"
                            >
                            <div class="col">
                                <p class="fs-5 fw-bold text-primary mb-1">Morgan M.</p>
                                <div class="d-flex gap-3 small text-grey">
                                    <div class="d-inline-flex align-items-center gap-1">
                                        <img src="assets/images/icons/graduate-icon.svg" alt="icon" width="18" height="18">
                                        <span>Phd</span>
                                    </div>
                                    <div class="d-inline-flex align-items-center gap-1">
                                        <img src="assets/images/icons/case-icon.svg" alt="icon" width="16" height="15">
                                        <span>Teacher</span>
                                    </div> 
                                </div>
                            </div>
                        </div>
                        <p class="mt-3 text-grey fw-light">Focus area</p>
                        <div class="d-flex flex-wrap gap-2 info__list">
                            <span class="d-inline-flex align-items-center gap-1 fw-light">
                                <img src="assets/images/icons/literature.webp" alt="literature" width="16" height="16">
                                Literature
                            </span>
                            <span class="d-inline-flex align-items-center gap-1 fw-light">
                                <img src="assets/images/icons/philosophy.png" alt="literature" width="16" height="16">
                                Philosophy
                            </span>
                            <span class="d-inline-flex align-items-center gap-1 fw-light">
                                <img src="assets/images/icons/history.png" alt="history" width="16" height="16">
                                History
                            </span>
                        </div>

                        <p class="mt-3 text-grey fw-light mb-0">Loves to write</p>
                        <p>Essay, Case study, Coursework</p>
                        <div class="w-100" style="height: 1px;border-bottom: 1px dashed #d3d3d3;"></div>
                        <div class="row g-2 row-cols-3 info__box mt-3">
                            <div>
                                <p class="text-success mb-0 fs-5 fw-medium">100%</p>
                                <p class="text mb-0">Satisfaction Rate</p>
                            </div>
                            <div>
                                <p class="text-success mb-0 fs-5 fw-medium">100%</p>
                                <p class="text mb-0">On Time Rate</p>
                            </div>
                            <div>
                                <p class="text-success mb-0 fs-5 fw-medium">8h+</p>
                                <p class="text mb-0">Delivery</p>
                            </div>
                        </div>
                        <div class="mt-3">
                            <a href="#" class="btn btn-success rounded-pill w-100 text-white fw-normal gap-2">
                                <svg width="18" height="18" fill="#fff" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path d="M288 32c-80.8 0-145.5 36.8-192.6 80.6C48.6 156 17.3 208 2.5 243.7c-3.3 7.9-3.3 16.7 0 24.6C17.3 304 48.6 356 95.4 399.4C142.5 443.2 207.2 480 288 480s145.5-36.8 192.6-80.6c46.8-43.5 78.1-95.4 93-131.1c3.3-7.9 3.3-16.7 0-24.6c-14.9-35.7-46.2-87.7-93-131.1C433.5 68.8 368.8 32 288 32zM144 256a144 144 0 1 1 288 0 144 144 0 1 1 -288 0zm144-64c0 35.3-28.7 64-64 64c-7.1 0-13.9-1.2-20.3-3.3c-5.5-1.8-11.9 1.6-11.7 7.4c.3 6.9 1.3 13.8 3.2 20.7c13.7 51.2 66.4 81.6 117.6 67.9s81.6-66.4 67.9-117.6c-11.1-41.5-47.8-69.4-88.6-71.1c-5.8-.2-9.2 6.1-7.4 11.7c2.1 6.4 3.3 13.2 3.3 20.3z"/></svg>
                                <span>View Profile</span>
                            </a>
                        </div>
                    </div><!--.item-->
                    <div class="writter__card p-3 rounded-4 bg-white">
                        <div class="d-flex gap-3">
                            <img 
                                src="assets/images/home/user.jpg" 
                                alt="Writer 1" 
                                class="img-fluid rounded-circle thumbnail" 
                                width="100" height="100" loading="lazy"
                            >
                            <div class="col">
                                <p class="fs-5 fw-bold text-primary mb-1">Morgan M.</p>
                                <div class="d-flex gap-3 small text-grey">
                                    <div class="d-inline-flex align-items-center gap-1">
                                        <img src="assets/images/icons/graduate-icon.svg" alt="icon" width="18" height="18">
                                        <span>Phd</span>
                                    </div>
                                    <div class="d-inline-flex align-items-center gap-1">
                                        <img src="assets/images/icons/case-icon.svg" alt="icon" width="16" height="15">
                                        <span>Teacher</span>
                                    </div> 
                                </div>
                            </div>
                        </div>
                        <p class="mt-3 text-grey fw-light">Focus area</p>
                        <div class="d-flex flex-wrap gap-2 info__list">
                            <span class="d-inline-flex align-items-center gap-1 fw-light">
                                <img src="assets/images/icons/literature.webp" alt="literature" width="16" height="16">
                                Literature
                            </span>
                            <span class="d-inline-flex align-items-center gap-1 fw-light">
                                <img src="assets/images/icons/philosophy.png" alt="literature" width="16" height="16">
                                Philosophy
                            </span>
                            <span class="d-inline-flex align-items-center gap-1 fw-light">
                                <img src="assets/images/icons/history.png" alt="history" width="16" height="16">
                                History
                            </span>
                        </div>

                        <p class="mt-3 text-grey fw-light mb-0">Loves to write</p>
                        <p>Essay, Case study, Coursework</p>
                        <div class="w-100" style="height: 1px;border-bottom: 1px dashed #d3d3d3;"></div>
                        <div class="row g-2 row-cols-3 info__box mt-3">
                            <div>
                                <p class="text-success mb-0 fs-5 fw-medium">100%</p>
                                <p class="text mb-0">Satisfaction Rate</p>
                            </div>
                            <div>
                                <p class="text-success mb-0 fs-5 fw-medium">100%</p>
                                <p class="text mb-0">On Time Rate</p>
                            </div>
                            <div>
                                <p class="text-success mb-0 fs-5 fw-medium">8h+</p>
                                <p class="text mb-0">Delivery</p>
                            </div>
                        </div>
                        <div class="mt-3">
                            <a href="#" class="btn btn-success rounded-pill w-100 text-white fw-normal gap-2">
                                <svg width="18" height="18" fill="#fff" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path d="M288 32c-80.8 0-145.5 36.8-192.6 80.6C48.6 156 17.3 208 2.5 243.7c-3.3 7.9-3.3 16.7 0 24.6C17.3 304 48.6 356 95.4 399.4C142.5 443.2 207.2 480 288 480s145.5-36.8 192.6-80.6c46.8-43.5 78.1-95.4 93-131.1c3.3-7.9 3.3-16.7 0-24.6c-14.9-35.7-46.2-87.7-93-131.1C433.5 68.8 368.8 32 288 32zM144 256a144 144 0 1 1 288 0 144 144 0 1 1 -288 0zm144-64c0 35.3-28.7 64-64 64c-7.1 0-13.9-1.2-20.3-3.3c-5.5-1.8-11.9 1.6-11.7 7.4c.3 6.9 1.3 13.8 3.2 20.7c13.7 51.2 66.4 81.6 117.6 67.9s81.6-66.4 67.9-117.6c-11.1-41.5-47.8-69.4-88.6-71.1c-5.8-.2-9.2 6.1-7.4 11.7c2.1 6.4 3.3 13.2 3.3 20.3z"/></svg>
                                <span>View Profile</span>
                            </a>
                        </div>
                    </div><!--.item-->
                    <div class="writter__card p-3 rounded-4 bg-white">
                        <div class="d-flex gap-3">
                            <img 
                                src="assets/images/home/user.jpg" 
                                alt="Writer 1" 
                                class="img-fluid rounded-circle thumbnail" 
                                width="100" height="100" loading="lazy"
                            >
                            <div class="col">
                                <p class="fs-5 fw-bold text-primary mb-1">Morgan M.</p>
                                <div class="d-flex gap-3 small text-grey">
                                    <div class="d-inline-flex align-items-center gap-1">
                                        <img src="assets/images/icons/graduate-icon.svg" alt="icon" width="18" height="18">
                                        <span>Phd</span>
                                    </div>
                                    <div class="d-inline-flex align-items-center gap-1">
                                        <img src="assets/images/icons/case-icon.svg" alt="icon" width="16" height="15">
                                        <span>Teacher</span>
                                    </div> 
                                </div>
                            </div>
                        </div>
                        <p class="mt-3 text-grey fw-light">Focus area</p>
                        <div class="d-flex flex-wrap gap-2 info__list">
                            <span class="d-inline-flex align-items-center gap-1 fw-light">
                                <img src="assets/images/icons/literature.webp" alt="literature" width="16" height="16">
                                Literature
                            </span>
                            <span class="d-inline-flex align-items-center gap-1 fw-light">
                                <img src="assets/images/icons/philosophy.png" alt="literature" width="16" height="16">
                                Philosophy
                            </span>
                            <span class="d-inline-flex align-items-center gap-1 fw-light">
                                <img src="assets/images/icons/history.png" alt="history" width="16" height="16">
                                History
                            </span>
                        </div>

                        <p class="mt-3 text-grey fw-light mb-0">Loves to write</p>
                        <p>Essay, Case study, Coursework</p>
                        <div class="w-100" style="height: 1px;border-bottom: 1px dashed #d3d3d3;"></div>
                        <div class="row g-2 row-cols-3 info__box mt-3">
                            <div>
                                <p class="text-success mb-0 fs-5 fw-medium">100%</p>
                                <p class="text mb-0">Satisfaction Rate</p>
                            </div>
                            <div>
                                <p class="text-success mb-0 fs-5 fw-medium">100%</p>
                                <p class="text mb-0">On Time Rate</p>
                            </div>
                            <div>
                                <p class="text-success mb-0 fs-5 fw-medium">8h+</p>
                                <p class="text mb-0">Delivery</p>
                            </div>
                        </div>
                        <div class="mt-3">
                            <a href="#" class="btn btn-success rounded-pill w-100 text-white fw-normal gap-2">
                                <svg width="18" height="18" fill="#fff" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path d="M288 32c-80.8 0-145.5 36.8-192.6 80.6C48.6 156 17.3 208 2.5 243.7c-3.3 7.9-3.3 16.7 0 24.6C17.3 304 48.6 356 95.4 399.4C142.5 443.2 207.2 480 288 480s145.5-36.8 192.6-80.6c46.8-43.5 78.1-95.4 93-131.1c3.3-7.9 3.3-16.7 0-24.6c-14.9-35.7-46.2-87.7-93-131.1C433.5 68.8 368.8 32 288 32zM144 256a144 144 0 1 1 288 0 144 144 0 1 1 -288 0zm144-64c0 35.3-28.7 64-64 64c-7.1 0-13.9-1.2-20.3-3.3c-5.5-1.8-11.9 1.6-11.7 7.4c.3 6.9 1.3 13.8 3.2 20.7c13.7 51.2 66.4 81.6 117.6 67.9s81.6-66.4 67.9-117.6c-11.1-41.5-47.8-69.4-88.6-71.1c-5.8-.2-9.2 6.1-7.4 11.7c2.1 6.4 3.3 13.2 3.3 20.3z"/></svg>
                                <span>View Profile</span>
                            </a>
                        </div>
                    </div><!--.item-->

                </div><!--.carousel-->

                <div class="row g-4 mt-1">
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <a href="#" class="p-3 rounded-4 fs-5 large__link__box d-flex w-100 align-items-center justify-content-center gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24">
                                <g fill="none">
                                    <path stroke="#18c240" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M20.25 10.907V7.272c0-.829-.633-1.521-1.453-1.644c-.951-.142-2.18-.376-3.078-.722c-.907-.349-1.997-1.007-2.762-1.505a1.76 1.76 0 0 0-1.914 0c-.764.498-1.855 1.156-2.762 1.505c-.899.346-2.127.58-3.078.722c-.82.123-1.453.815-1.453 1.644v3.635a10.13 10.13 0 0 0 5.363 8.939l.23.123l1.962.946a1.6 1.6 0 0 0 1.39 0l1.961-.946l.23-.123a10.13 10.13 0 0 0 5.364-8.939" />
                                    <circle cx="12" cy="10.5" r="2" fill="#18c240" />
                                    <path stroke="#18c240" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 14.75v-2.5" />
                                </g>
                            </svg>
                            <span>Privacy Policy</span>
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <a href="#" class="p-3 rounded-4 fs-5 large__link__box d-flex w-100 align-items-center justify-content-center gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24">
                                <path fill="#18c240" d="m5.77 8.16l3.61.64h.01l-1.73 1.73l-4.81-.85L2 4.87l1.73-1.72l.63 3.61l1.12-1.12a8.98 8.98 0 0 1 12.72 0q.059.061.11.125q.051.065.11.125c.15.16.3.33.44.5c.09.11.18.23.27.35c.16.22.3.44.44.67l.037.057q.033.047.063.103a9 9 0 0 1 .49 1.02l.02.05c.35.88.56 1.79.63 2.72l-2.04-.29a7.2 7.2 0 0 0-.63-2.1l-.06-.12a7 7 0 0 0-.5-.84q-.026-.029-.05-.065a6.4 6.4 0 0 0-.75-.905a6.995 6.995 0 0 0-9.89 0zm10.25 5.31l4.81.85l.01.01l.85 4.81l-1.73 1.73l-.64-3.61l-1.12 1.12c-3.52 3.51-9.22 3.51-12.73 0l-.24-.27a8.96 8.96 0 0 1-2.37-5.46l2.04.29c.2 1.47.86 2.89 1.99 4.02c.23.23.48.44.73.63c2.74 2.07 6.66 1.87 9.16-.63l1.12-1.12l-3.61-.64z" />
                            </svg>
                            <span>Free Revisions</span>
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <a href="#" class="p-3 rounded-4 fs-5 large__link__box d-flex w-100 align-items-center justify-content-center gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24">
                                <path fill="#18c240" d="M5.676 4.257c3.928-3.219 9.733-2.995 13.4.672c3.905 3.905 3.905 10.237 0 14.142s-10.237 3.905-14.142 0a9.99 9.99 0 0 1-2.678-9.304l.077-.313l1.934.51a8 8 0 1 0 3.053-4.45l-.22.166l1.017 1.017l-4.596 1.06l1.06-4.596zM13.005 6v2h2.5v2h-5.5a.5.5 0 0 0-.09.992l.09.008h4a2.5 2.5 0 0 1 0 5h-1v2h-2v-2h-2.5v-2h5.5a.5.5 0 0 0 .09-.992l-.09-.008h-4a2.5 2.5 0 1 1 0-5h1V6z" />
                            </svg>
                            <span>Money-back Guarantee</span>
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <a href="#" class="p-3 rounded-4 fs-5 large__link__box d-flex w-100 align-items-center justify-content-center gap-2">
                            <svg width="24" height="24" fill="#18c240" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path d="M288 32c-80.8 0-145.5 36.8-192.6 80.6C48.6 156 17.3 208 2.5 243.7c-3.3 7.9-3.3 16.7 0 24.6C17.3 304 48.6 356 95.4 399.4C142.5 443.2 207.2 480 288 480s145.5-36.8 192.6-80.6c46.8-43.5 78.1-95.4 93-131.1c3.3-7.9 3.3-16.7 0-24.6c-14.9-35.7-46.2-87.7-93-131.1C433.5 68.8 368.8 32 288 32zM144 256a144 144 0 1 1 288 0 144 144 0 1 1 -288 0zm144-64c0 35.3-28.7 64-64 64c-7.1 0-13.9-1.2-20.3-3.3c-5.5-1.8-11.9 1.6-11.7 7.4c.3 6.9 1.3 13.8 3.2 20.7c13.7 51.2 66.4 81.6 117.6 67.9s81.6-66.4 67.9-117.6c-11.1-41.5-47.8-69.4-88.6-71.1c-5.8-.2-9.2 6.1-7.4 11.7c2.1 6.4 3.3 13.2 3.3 20.3z"/></svg>
                            <span>View All Writers</span>
                        </a>
                    </div>
                </div><!--.row-->
            </div><!--.container-->
        </section>
        <!-- writers wrapper end -->

        <!-- quote wrapper start -->
        <?php
            $title="Exclusive Offer! Save 20% on Your First Order!";
            $description="Our 500+ professional UK writers are ready to give you a hand-made assignment"; 
            include('includes/quote.inc.php');
        ?> 
        <!-- quote wrapper end -->

        <!-- price wrapper start -->
        <section class="py-5 bg-light">
            <div class="container">
                <div class="row g-4 align-items-center">
                    <div class="col-lg-7">
                        <h2 class="fs-3 text-primary fw-bold">Our Prices Are Low, And Payment Methods Are Secured!</h2>
                        <p>
                            Managing academic expenses is hard. Most of the time, students are tight on budget. If you are in such a situation, we can still help you. We keep our prices reasonably low. Thus, our academic writing services are light on your pockets and heavy with an A+. Moreover, we use secure gateways for all transactions. We use world-class encryption for high payment protection
                        </p>

                        <h3 class="fs-4 text-primary fw-bold">100% Personalised Best Paper Prices</h3>
                        <table class="table info__table">
                            <tr>
                                <td>Academic paper writing</td>
                                <td>from £12.95/page</td>
                            </tr>
                            <tr>
                                <td>Copywriting</td>
                                <td>from £12.95/page</td>
                            </tr>
                            <tr>
                                <td>Proofreading</td>
                                <td>from £12.95/page</td>
                            </tr>
                            <tr>
                                <td>Dissertation services</td>
                                <td>from £12.95/page</td>
                            </tr>
                            <tr>
                                <td>Editing</td>
                                <td>from £12.95/page</td>
                            </tr>
                            <tr>
                                <td>Rewriting</td>
                                <td>from £12.95/page</td>
                            </tr>
                        </table>
                        <div class="">
                            <a href="#" class="px-4 height btn btn-success rounded-pill d-inline-flex align-items-center gap-2 lh-1 fs-6 text-white">
                                <svg width="32" height="32" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" fill="#fff"><path d="M88.2 309.1c9.8-18.3 6.8-40.8-7.5-55.8C59.4 230.9 48 204 48 176c0-63.5 63.8-128 160-128s160 64.5 160 128s-63.8 128-160 128c-13.1 0-25.8-1.3-37.8-3.6c-10.4-2-21.2-.6-30.7 4.2c-4.1 2.1-8.3 4.1-12.6 6c-16 7.2-32.9 13.5-49.9 18c2.8-4.6 5.4-9.1 7.9-13.6c1.1-1.9 2.2-3.9 3.2-5.9zM208 352c114.9 0 208-78.8 208-176S322.9 0 208 0S0 78.8 0 176c0 41.8 17.2 80.1 45.9 110.3c-.9 1.7-1.9 3.5-2.8 5.1c-10.3 18.4-22.3 36.5-36.6 52.1c-6.6 7-8.3 17.2-4.6 25.9C5.8 378.3 14.4 384 24 384c43 0 86.5-13.3 122.7-29.7c4.8-2.2 9.6-4.5 14.2-6.8c15.1 3 30.9 4.5 47.1 4.5zM432 480c16.2 0 31.9-1.6 47.1-4.5c4.6 2.3 9.4 4.6 14.2 6.8C529.5 498.7 573 512 616 512c9.6 0 18.2-5.7 22-14.5c3.8-8.8 2-19-4.6-25.9c-14.2-15.6-26.2-33.7-36.6-52.1c-.9-1.7-1.9-3.4-2.8-5.1C622.8 384.1 640 345.8 640 304c0-94.4-87.9-171.5-198.2-175.8c4.1 15.2 6.2 31.2 6.2 47.8l0 .6c87.2 6.7 144 67.5 144 127.4c0 28-11.4 54.9-32.7 77.2c-14.3 15-17.3 37.6-7.5 55.8c1.1 2 2.2 4 3.2 5.9c2.5 4.5 5.2 9 7.9 13.6c-17-4.5-33.9-10.7-49.9-18c-4.3-1.9-8.5-3.9-12.6-6c-9.5-4.8-20.3-6.2-30.7-4.2c-12.1 2.4-24.8 3.6-37.8 3.6c-61.7 0-110-26.5-136.8-62.3c-16 5.4-32.8 9.4-50 11.8C279 439.8 350 480 432 480z"/></svg>
                                <span>Live Chat</span>
                            </a>
                            <a href="#" class="px-4 height btn btn-yellow rounded-pill d-inline-flex align-items-center gap-2 lh-1 fs-6 "> 
                                <span>Place An Order Now</span>
                                <svg width="20" height="20" fill="#000" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z"/></svg>
                            </a>
                        </div>
                    </div><!--.col-->
                    <div class="col-lg-5">
                        <img 
                            src="assets/images/home/payment-img.webp" 
                            alt="Payment Image"
                            class="img-fluid w-100 price__image"
                        >
                    </div>
                </div><!--.row-->
            </div><!--.container-->
        </section>
        <!-- price wrapper end -->

        <!-- process wrapper start -->
        <section class="py-5">
            <div class="container">
                <h2 class="fs-2 text-primary fw-bold text-center">Quick and Easy Process for Writing an Academic Paper </h2>

                <div class="row g-4 mt-4">
                    <div class="col-lg-4">
                        <ul class="d-flex flex-column gap-3 process__info__list">
                            <li class="d-flex gap-3">
                                <figure class="mb-0 icon">
                                    <img 
                                        src="assets/images/icons/proven-results.webp" 
                                        alt="Process Image"
                                        class="img-fluid"
                                        width="64" height="64" loading="lazy"
                                    >
                                </figure>
                                <div class="col">
                                    <h3 class="mb-0 fs-5 fw-semibold text-primary mb-2">Fill Out The Form </h3>
                                    <p class="fs-15">We keep our help service streamlined for maximum satisfaction. So, to place an order, you have to fill out all the requirements and details on our online order form. Ensure you fill it out correctly. </p>
                                </div>
                            </li>
                            <li class="d-flex gap-3">
                                <figure class="mb-0 icon">
                                    <img 
                                        src="assets/images/icons/make-the-payment-icon.svg" 
                                        alt="Make The Payment"
                                        class="img-fluid"
                                        width="64" height="49" loading="lazy"
                                    >
                                </figure>
                                <div class="col">
                                    <h3 class="mb-0 fs-5 fw-semibold text-primary mb-2">Make The Payment</h3>
                                    <p class="fs-15">The next step is to make the transaction. You can pay through credit cards, debit cards, or online bank transfers. No unauthorised transactions will occur, and no financial data will be stored. </p>
                                </div>
                            </li>
                            <li class="d-flex gap-3">
                                <figure class="mb-0 icon">
                                    <img 
                                        src="assets/images/icons/get-in-touch-with-your-writer.svg" 
                                        alt="writer"
                                        class="img-fluid"
                                        width="64" height="86" loading="lazy"
                                    >
                                </figure>
                                <div class="col">
                                    <h3 class="mb-0 fs-5 fw-semibold text-primary mb-2">Get in touch with your writer</h3>
                                    <p class="fs-15">When done with the payment, we link you up with a top-choice writer based on the requirements. So, directly brief the writer with further guidelines if you want a perfectly composed paper. </p>
                                </div>
                            </li>
                        </ul>
                    </div><!--.col-->
                    <div class="col-lg-4">
                        <img 
                            src="assets/images/home/process-image.webp" 
                            alt="Process Image"
                            class="img-fluid w-100"
                        >
                    </div>
                    <div class="col-lg-4">
                        <ul class="d-flex flex-column gap-3 process__info__list">
                            <li class="d-flex gap-3">
                                <figure class="mb-0 icon">
                                    <img 
                                        src="assets/images/icons/download-paper.svg" 
                                        alt="Paper"
                                        class="img-fluid"
                                        width="64" height="64" loading="lazy"
                                    >
                                </figure>
                                <div class="col">
                                    <h3 class="mb-0 fs-5 fw-semibold text-primary mb-2">Download The Paper </h3>
                                    <p class="fs-15">The paper is available for you to download once we complete it. Besides, we keep you in the loop throughout the service procedure. So you will get regular updates regarding the progress.</p>
                                </div>
                            </li>
                            <li class="d-flex gap-3">
                                <figure class="mb-0 icon">
                                    <img 
                                        src="assets/images/icons/submit.webp" 
                                        alt="Submit"
                                        class="img-fluid"
                                        width="64" height="64" loading="lazy"
                                    >
                                </figure>
                                <div class="col">
                                    <h3 class="mb-0 fs-5 fw-semibold text-primary mb-2">Submit For An A+</h3>
                                    <p class="fs-15">After revisions, confidently submit your paper to the professor. After all, the paper is custom created for you. Plus, we respect your confidentiality. You have complete ownership of the paper. </p>
                                </div>
                            </li> 
                        </ul>
                        <a href="#" class="btn btn-primary w-100 fw-normal mt-3 min-h-70" aria-label="Yes! I want to get Top Grades">Yes! I want to get Top Grades</a>
                    </div><!--.col-->
                </div><!--.row-->
            </div><!--.container-->
        </section>
        <!-- process wrapper end -->
    
        <!-- quote wrapper start -->
        <?php
            $title="Grab the Custom Academic Papers To Tailor Your Needs!";
            $description="Our subject specialist writer always focuses on your paper's instructions "; 
            include('includes/quote.inc.php');
        ?>
        <!-- quote wrapper end -->

        <!-- discount wrapper start -->
        <section class="py-5 bg-primary">
            <div class="container">
                <h2 class="fs-2 text-yellow fw-bold text-center">We Offer Special Discounts that You Would Not Find Anywhere Else</h2>

                <div class="row g-4 mt-4">
                    <div class="col-lg-4">
                        <ul class="d-flex flex-column gap-3 process__info__list">
                            <li class="d-flex gap-3">
                                <figure class="mb-0 icon">
                                    <img 
                                        src="assets/images/icons/referral-discount.webp" 
                                        alt="Process Image"
                                        class="img-fluid"
                                        width="64" height="64" loading="lazy"
                                    >
                                </figure>
                                <div class="col">
                                    <h3 class="mb-0 fs-5 fw-semibold text-yellow mb-2">Referral Discounts</h3>
                                    <p class="fs-15 text-white">You’re eligible to avail referral discount based on how many friends you refer our service to.</p>
                                </div>
                            </li>
                            <li class="d-flex gap-3">
                                <figure class="mb-0 icon">
                                    <img 
                                        src="assets/images/icons/5-percent-discount.webp" 
                                        alt="Make The Payment"
                                        class="img-fluid"
                                        width="64" height="49" loading="lazy"
                                    >
                                </figure>
                                <div class="col">
                                    <h3 class="mb-0 fs-5 fw-semibold text-yellow mb-2">Up to 5% off</h3>
                                    <p class="fs-15 text-white">You’re eligible to avail 5% discount when you place an order of 250 to 5000 word. </p>
                                </div>
                            </li> 
                        </ul>
                    </div><!--.col-->
                    <div class="col-lg-4 text-center">
                        <img 
                            src="assets/images/home/discount-banner.webp" 
                            alt="Process Image"
                            class="img-fluid rounded-4"
                        >
                    </div>
                    <div class="col-lg-4">
                        <ul class="d-flex flex-column gap-3 process__info__list">
                            <li class="d-flex gap-3">
                                <figure class="mb-0 icon">
                                    <img 
                                        src="assets/images/icons/10-percent-discount.webp" 
                                        alt="Paper"
                                        class="img-fluid"
                                        width="64" height="64" loading="lazy"
                                    >
                                </figure>
                                <div class="col">
                                    <h3 class="mb-0 fs-5 fw-semibold text-yellow mb-2">Up to 10% off </h3>
                                    <p class="fs-15 text-white">You’re eligible to avail 10% discount when you place an order of 5250 to 10000 words.</p>
                                </div>
                            </li>
                            <li class="d-flex gap-3">
                                <figure class="mb-0 icon">
                                    <img 
                                        src="assets/images/icons/15-percent-discount.webp" 
                                        alt="Submit"
                                        class="img-fluid"
                                        width="64" height="64" loading="lazy"
                                    >
                                </figure>
                                <div class="col">
                                    <h3 class="mb-0 fs-5 fw-semibold text-yellow mb-2">Up to 15% off</h3>
                                    <p class="fs-15 text-white">You’re eligible to avail 15% discount when you place an order of more than 10000 words. </p>
                                </div>
                            </li> 
                        </ul> 
                    </div><!--.col-->
                </div><!--.row-->
            </div><!--.container-->
        </section>
        <!-- discount wrapper end -->

        <!-- Quality wrapper start -->
        <section class="py-5">
            <div class="container">
                <h2 class="fs-2 text-primary fw-bold text-center">No Compromise on the Quality of Our Services for All Type of Academic Writing Projects</h2>
                <p class="text-center">We place a high value on quality and go above and beyond to make sure that every order complies with stringent academic criteria. </p>

                <div class="row g-4 mt-4 text-center">
                    <div class="col-lg-3 col-md-5 col-sm-6">
                        <div class="service__card rounded-4 card card-body py-md-4 d-block w-100 transition ">
                            <figure>
                                <img 
                                    src="assets/images/icons/3x-Plagiarism-Check.svg" 
                                    alt="3x Plagiarism Check"
                                    class="img-fluid icon__grid"
                                    width="84" height="73" loading="lazy"
                                >
                            </figure>
                            <h3 class="h4 title fw-semibold mb-3 text-primary">
                                3x Plagiarism Check 
                            </h3>
                            <p class="fs-15 text-dark">
                                We have a rigorous no-plagiarism policy. We check your papers three times to ensure your paper is 100% original and plagiarism-free. 
                            </p>  
                        </div>
                    </div><!--.col-->
                    <div class="col-lg-3 col-md-5 col-sm-6">
                        <div class="service__card rounded-4 card card-body py-md-4 d-block w-100 transition ">
                            <figure>
                                <img 
                                    src="assets/images/icons/Zero-Cost-Re-Edits-1.svg" 
                                    alt="Zero-Cost Re-Edits"
                                    class="img-fluid icon__grid"
                                    width="84" height="73" loading="lazy"
                                >
                            </figure>
                            <h3 class="h4 title fw-semibold mb-3 text-primary">
                                Zero-Cost Re-Edits
                            </h3>
                            <p class="fs-15 text-dark">
                                Client satisfaction is among our top priorities. So, we willingly provide unlimited free revisions until the client approves the work.  
                            </p>  
                        </div>
                    </div><!--.col-->
                    <div class="col-lg-3 col-md-5 col-sm-6">
                        <div class="service__card rounded-4 card card-body py-md-4 d-block w-100 transition ">
                            <figure>
                                <img 
                                    src="assets/images/icons/No-Hidden-Charges.svg" 
                                    alt="No Hidden Charges"
                                    class="img-fluid icon__grid"
                                    width="84" height="73" loading="lazy"
                                >
                            </figure>
                            <h3 class="h4 title fw-semibold mb-3 text-primary">
                                No Hidden Charges
                            </h3>
                            <p class="fs-15 text-dark">
                                We give our clients an all-inclusive quote for our academic writing services. Thus, there are no hidden or extra charges involved.  
                            </p>  
                        </div>
                    </div><!--.col-->
                    <div class="col-lg-3 col-md-5 col-sm-6">
                        <div class="service__card rounded-4 card card-body py-md-4 d-block w-100 transition ">
                            <figure>
                                <img 
                                    src="assets/images/icons/expert-working-teams-1.svg" 
                                    alt="Expert Working Teams"
                                    class="img-fluid icon__grid"
                                    width="84" height="73" loading="lazy"
                                >
                            </figure>
                            <h3 class="h4 title fw-semibold mb-3 text-primary">
                                Expert Working Teams
                            </h3>
                            <p class="fs-15 text-dark">
                                Our writing and quality assurance units have top-line experts. We take care of everything to provide you with perfect service outcomes.
                            </p>  
                        </div>
                    </div><!--.col-->
                     
                </div><!--.row-->
            </div><!--.container-->
        </section>
        <!-- Quality wrapper end -->

        <!-- discount wrapper start -->
        <section class="py-5 bg-primary">
            <div class="container">
                <h2 class="fs-2 text-yellow fw-bold text-center">Get Your Degree with Distinction</h2>

                <div class="row g-4 mt-4">
                    <div class="col-lg-4">
                        <ul class="d-flex flex-column gap-3 process__info__list">
                            <li class="d-flex gap-3">
                                <figure class="mb-0 icon">
                                    <img 
                                        src="assets/images/icons/best-quality.webp" 
                                        alt="The Best Quality"
                                        class="img-fluid"
                                        width="64" height="64" loading="lazy"
                                    >
                                </figure>
                                <div class="col">
                                    <h3 class="mb-0 fs-5 fw-semibold text-yellow mb-2">The Best Quality</h3>
                                    <p class="fs-15 text-white">At The Academic Papers UK, We provide the best quality work that always meets your requirements.</p>
                                </div>
                            </li>
                            <li class="d-flex gap-3">
                                <figure class="mb-0 icon">
                                    <img 
                                        src="assets/images/icons/100-percent.webp" 
                                        alt="Make The Payment"
                                        class="img-fluid"
                                        width="64" height="49" loading="lazy"
                                    >
                                </figure>
                                <div class="col">
                                    <h3 class="mb-0 fs-5 fw-semibold text-yellow mb-2">Thorough Work </h3>
                                    <p class="fs-15 text-white">Our writers properly pen each section of your work per your requirements.</p>
                                </div>
                            </li> 
                            <li class="d-flex gap-3">
                                <figure class="mb-0 icon">
                                    <img 
                                        src="assets/images/icons/transparency.webp" 
                                        alt="Make The Payment"
                                        class="img-fluid"
                                        width="64" height="49" loading="lazy"
                                    >
                                </figure>
                                <div class="col">
                                    <h3 class="mb-0 fs-5 fw-semibold text-yellow mb-2">High Transparency</h3>
                                    <p class="fs-15 text-white">You are in the procedure loop. We keep you updated on the order status.</p>
                                </div>
                            </li> 
                        </ul>
                    </div><!--.col-->
                    <div class="col-lg-4 text-center">
                        <div class="px-xxl-5"> 
                            <img 
                                src="assets/images/home/Get-Your-Degree-with-Distinction-img.webp" 
                                alt="Process Image"
                                class="img-fluid rounded-4"
                                width="320" height="362" loading="lazy"
                            >
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <ul class="d-flex flex-column gap-3 process__info__list">
                            <li class="d-flex gap-3">
                                <figure class="mb-0 icon">
                                    <img 
                                        src="assets/images/icons/confidentiality.webp" 
                                        alt="Paper"
                                        class="img-fluid"
                                        width="64" height="64" loading="lazy"
                                    >
                                </figure>
                                <div class="col">
                                    <h3 class="mb-0 fs-5 fw-semibold text-yellow mb-2">Full Confidentiality</h3>
                                    <p class="fs-15 text-white">Your personal details are never revealed to anyone, no matter what.</p>
                                </div>
                            </li>
                            <li class="d-flex gap-3">
                                <figure class="mb-0 icon">
                                    <img 
                                        src="assets/images/icons/Privacy-Protection.webp" 
                                        alt="Submit"
                                        class="img-fluid"
                                        width="64" height="64" loading="lazy"
                                    >
                                </figure>
                                <div class="col">
                                    <h3 class="mb-0 fs-5 fw-semibold text-yellow mb-2">Privacy Protection</h3>
                                    <p class="fs-15 text-white">We do not store or share your data. There are no third parties involved.</p>
                                </div>
                            </li> 
                            <li class="d-flex gap-3">
                                <figure class="mb-0 icon">
                                    <img 
                                        src="assets/images/icons/on-time.webp" 
                                        alt="Submit"
                                        class="img-fluid"
                                        width="64" height="64" loading="lazy"
                                    >
                                </figure>
                                <div class="col">
                                    <h3 class="mb-0 fs-5 fw-semibold text-yellow mb-2">On-time Delivery</h3>
                                    <p class="fs-15 text-white">We always deliver your work on time and don’t charge extra for deliveries.</p>
                                </div>
                            </li> 
                        </ul> 
                    </div><!--.col-->
                </div><!--.row-->
            </div><!--.container-->
        </section>
        <!-- discount wrapper end -->

        <!-- popular services wrapper start -->
        <section class="py-5">
            <div class="container">
                <h2 class="fs-2 text-primary fw-bold text-center">TAKE A LOOK AT OUR MOST POPULAR SERVICES</h2>

                <ul class="popular__service__list row g-1 row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 list-unstyled ps-0">
                    <li><a href="#">Dissertation Writing Services</a>
                    </li>
                    <li><a href="#">Masters Dissertation Help</a>
                    </li>
                    <li><a href="#">PhD Dissertation Help</a>
                    </li>
                    <li><a href="#">Dissertation Editing Services</a>
                    </li>
                    <li><a href="#">Buy Dissertation Online</a>
                    </li>
                    <li><a href="#">Dissertation Topics</a>
                    </li>
                    <li><a href="#">Dissertation Proposal Writing Service</a>
                    </li>
                    <li><a href="#">Essay Writing Services</a>
                    </li>
                    <li><a href="#">Buy Essays Online</a>
                    </li>
                    <li><a href="#">Law Essay Writing Services</a>
                    </li>
                    <li><a href="#">Admission Essay Writing Services</a>
                    </li>
                    <li><a href="#">Psychology Essay Writing Services</a>
                    </li>
                    <li><a href="#">Assignment Writing Services</a>
                    </li>
                    <li><a href="#">Buy Assignment Online</a>
                    </li>
                    <li><a href="#">Coursework Writing Services</a>
                    </li>
                    <li><a href="#">Case Study Services</a>
                    </li>
                    <li><a href="#">Case Study Help</a>
                    </li>
                    <li><a href="#">Term Paper Services</a>
                    </li>
                    <li><a href="#">Research Paper Services</a>
                    </li>
                    <li><a href="#">Copywriting Services</a>
                    </li>
                    <li><a href="#">CV Writing Services</a>
                    </li>
                    <li><a href="#" class="last">View All Services</a></li>
                </ul>
            </div><!--.container-->
        </section>
        <!-- popular services wrapper end -->

        <!-- faq wrapper start -->
        <section class="py-5">
            <div class="container">
                <h2 class="fs-2 text-primary fw-bold text-center mb-4">Frequently Asked Questions</h2>


                <div class="row gx-4 gy-0">
                    <div class="col-lg-6">
                        <div class="accordion faq__accordion" id="accordionFaq001">
                            <div class="accordion-item">
                                <h3 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse001" aria-expanded="false" aria-controls="flush-collapse001">
                                        What Makes You Better than Other Writing Services?
                                    </button>
                                </h3>
                                <div id="flush-collapse001" class="accordion-collapse collapse" data-bs-parent="#accordionFaq001">
                                    <div class="accordion-body">
                                        <p>
                                            Our team of ENL writers, keen researchers, expert data analysts, QA professionals, and supportive customer executives make us the best academic writing service in the UK. We guarantee 100% client satisfaction and leave no stone unturned in satisfying the demands of clients. We also offer our customers several welcome bonuses, plenty of discounts, and numerous freebies, and we have no hidden charges. The Academic Papers UK boasts a wealth of experience in providing academic support, and most UK students love the top-quality of our academic papers!
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h3 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse002" aria-expanded="false" aria-controls="flush-collapse002">
                                        Can I Communicate with My Writer?
                                    </button>
                                </h3>
                                <div id="flush-collapse002" class="accordion-collapse collapse" data-bs-parent="#accordionFaq001">
                                    <div class="accordion-body">
                                        <p>
                                            Yes, you will be free to communicate with your writer when you hire The Academic Papers UK for academic writing. We ensure direct contact of the client with the writer working on their order so that the client will be free to get a progress update or provide the writer with guidelines if any. 
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h3 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse003" aria-expanded="false" aria-controls="flush-collapse003">
                                        Can you write my academic paper for me?
                                    </button>
                                </h3>
                                <div id="flush-collapse003" class="accordion-collapse collapse" data-bs-parent="#accordionFaq001">
                                    <div class="accordion-body">
                                        <p>
                                            Yes, our skilled writers have a penchant for writing top-class academic papers tailored to your needs. You will only need to specify your requirements and tell us your desired grade; we will do the rest for you.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h3 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse004" aria-expanded="false" aria-controls="flush-collapse004">
                                        How Can I Buy Academic Papers Online?
                                    </button>
                                </h3>
                                <div id="flush-collapse004" class="accordion-collapse collapse" data-bs-parent="#accordionFaq001">
                                    <div class="accordion-body">
                                        <p>
                                            The process of buying academic papers online from The Academic Papers UK is very simple. You will need to follow these 3 steps:
                                        </p>
                                        <ul class="disc__list"> 
                                            <li>Place an order on our easy-to-use website and specify your requirements.</li>
                                            <li>We will assign an accomplished writer to work on your project.</li>
                                            <li>Download and submit your academic papers once completed. You will achieve your desired grade!</li> 
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h3 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse005" aria-expanded="false" aria-controls="flush-collapse005">
                                        I would like to remain confidential. Are you able to ensure that?
                                    </button>
                                </h3>
                                <div id="flush-collapse005" class="accordion-collapse collapse" data-bs-parent="#accordionFaq001">
                                    <div class="accordion-body">
                                        <p>
                                            Yes, completely! The Academic Papers UK adheres to UK Data Protection Act, PECR (Privacy and Electronic Communications Regulation), and GDPR (General Data Protection Regulations). Order from us, and be sure that we will never disclose your personal information, order details, or anything thing to 3rd parties – it’s all safe and secure with us!
                                        </p> 
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h3 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse006" aria-expanded="false" aria-controls="flush-collapse006">
                                        What services do you offer?
                                    </button>
                                </h3>
                                <div id="flush-collapse006" class="accordion-collapse collapse" data-bs-parent="#accordionFaq001">
                                    <div class="accordion-body">
                                        <p>
                                            We provide our clients with the best, most authentic, and most affordable academic writing services in the UK. Some of the writing services include:
                                        </p> 
                                        <ul class="blue-list">
                                            <li><a href="https://www.theacademicpapers.co.uk/dissertation-writing-services/">Custom Dissertation Writing (Undergrad, Masters, PhD)</a></li>
                                            <li><a href="https://www.theacademicpapers.co.uk/assignment-writing-services/">Assignment Writing Services</a></li>
                                            <li><a href="https://www.theacademicpapers.co.uk/essay-writing-services/">Essay Writing Services</a></li>
                                            <li><a href="https://www.theacademicpapers.co.uk/coursework-writing-services/">Coursework Writing Services</a></li>
                                            <li><a href="https://www.theacademicpapers.co.uk/case-study-writing-services/">Case Study Writing Services</a></li>
                                            <li><a href="https://www.theacademicpapers.co.uk/dissertation-editing-service/">Editing and Proofreading Services</a></li>
                                            <li><a href="https://www.theacademicpapers.co.uk/research-paper-writing-services/">Research Paper Writing Services</a></li>
                                            <li><a href="https://www.theacademicpapers.co.uk/term-paper-writing-services/">Term Paper Writing Services</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div><!--.accordion-->
                    </div><!--.col-->

                    <div class="col-lg-6">
                        <div class="accordion faq__accordion" id="accordionFaq002">
                            <div class="accordion-item">
                                <h3 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse001b" aria-expanded="false" aria-controls="flush-collapse001b">
                                        How Is the Price Calculated?
                                    </button>
                                </h3>
                                <div id="flush-collapse001b" class="accordion-collapse collapse" data-bs-parent="#accordionFaq002">
                                    <div class="accordion-body">
                                        <p>
                                            When you specify the requirements of your order, the price calculator will automatically show you the detail of your order price. The price of your order depends on these factors:
                                        </p>
                                        <ul class="disc__list">
                                            <li>Your academic level</li>
                                            <li>Number of pages required</li>
                                            <li>Your deadline</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h3 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse002b" aria-expanded="false" aria-controls="flush-collapse002b">
                                        What academic writing styles can you write in?
                                    </button>
                                </h3>
                                <div id="flush-collapse002b" class="accordion-collapse collapse" data-bs-parent="#accordionFaq002">
                                    <div class="accordion-body">
                                        <p>
                                            Our professional academic writers are highly qualified individuals from well-reputed universities in the UK. They are well-versed in different writing styles and will craft the paper in the writing style of your choice, such as
                                        </p>
                                        <ul class="disc__list">
                                            <li>APA</li>
                                            <li>MLA</li>
                                            <li>Chicago</li>
                                            <li>Harvard etc.</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h3 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse003b" aria-expanded="false" aria-controls="flush-collapse003b">
                                        CCan there be a risk of plagiarism in the order?
                                    </button>
                                </h3>
                                <div id="flush-collapse003b" class="accordion-collapse collapse" data-bs-parent="#accordionFaq002">
                                    <div class="accordion-body">
                                        <p>
                                            No, you will not find even a trace of plagiarised content in the academic papers crafted by us. After its completion, each paper is scanned for plagiarism through Turnitin. You are also provided with a free plagiarism scan report to confirm the originality of the work. The citations used in your work are properly referenced, so there is zero chance of plagiarism in the academic papers we write for you.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h3 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse004b" aria-expanded="false" aria-controls="flush-collapse004b">
                                        Is it possible to attach supplementary materials to my order?
                                    </button>
                                </h3>
                                <div id="flush-collapse004b" class="accordion-collapse collapse" data-bs-parent="#accordionFaq002">
                                    <div class="accordion-body">
                                        <p>
                                            You can attach supplementary materials to your order if you want. However, if including the supplementary material increases the dedicated word count, you’ll need to pay additional charges. If adding the supplementary material to your order doesn’t disturb the dedicated word count, no extra cost will be incurred!
                                        </p> 
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h3 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse005b" aria-expanded="false" aria-controls="flush-collapse005b">
                                        What will happen if I do not exactly like my paper?
                                    </button>
                                </h3>
                                <div id="flush-collapse005b" class="accordion-collapse collapse" data-bs-parent="#accordionFaq002">
                                    <div class="accordion-body">
                                        <p>
                                            If you don’t like your paper, you can turn to our customer support executives and explain why you want the paper to be revised. If you want modifications, we will do it for free – no hidden charges are involved!
                                        </p> 
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h3 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse006b" aria-expanded="false" aria-controls="flush-collapse006b">
                                        How will I be certain my paper is definitely authentic?
                                    </button>
                                </h3>
                                <div id="flush-collapse006b" class="accordion-collapse collapse" data-bs-parent="#accordionFaq002">
                                    <div class="accordion-body">
                                        <p>
                                            Our skilled writers craft your academic papers from scratch, ensuring the freshness and originality of your papers. We also provide you with a free plagiarism scan report to ensure you of the uniqueness of our work. The citations we use in your work belong to authentic sources and are properly referenced, hence 100% authenticity and zero plagiarism in your work.
                                        </p>  
                                    </div>
                                </div>
                            </div>
                        </div><!--.accordion-->
                    </div><!--.col-->
                </div><!--.row-->
            </div><!--.container-->
        </section>
        <!-- faq wrapper end -->
         
    </main>

    <!-- testimonial wrapper start -->
    <section class="py-5 bg-light">
        <div class="container">
            <h2 class="text-primary fs-2 fw-bold text-center">Our Customers Testimonials</h2>
            <p class="text-center text-xl-9 mx-auto">Students of all grades get help from us in their writing tasks regularly. We help them and make sure they achieve their dream grades. If you want to know more about their experience with us, read our clients' most recent reviews below.</p>

            <div class="owl-carousel testimonialCarousel">
                <div class="writter__card rounded-0 shadow-none bg-white">
                    <div class="border-bottom p-3 px-md-4"> 
                        <div class="row g-2 align-items-center">
                            <div class="col-sm-7">
                                <div class="d-flex gap-3 align-items-center">
                                    <img 
                                        src="assets/images/home/user.jpg" 
                                        alt="Writer 1" 
                                        class="img-fluid rounded-circle thumbnail" 
                                        width="100" height="100" loading="lazy"
                                    >
                                    <div class="col">
                                        <p class="fs-6 fw-bold text-primary mb-0">Gregory Dubose</p>
                                        <p class="fs-15 fw-light mb-0">TAP-83296469</p>
                                    </div>
                                </div> 
                            </div>
                            <div class="col-sm-5 d-flex justify-content-center justify-content-sm-end">
                                <img src="assets/images/icons/5-stars.webp" class="img-fluid" width="110" height="20" alt="stars">
                            </div>
                        </div>
                    </div>
                    <div class="p-3 px-md-4 lh-sm pb-5"> 
                        <p class="fs-15 text-dark mb-0">
                            Good evening, thank you very much for your service and supporting me at this stressful time. How else can I support you, is there any way I can rate your service as it I am happy with everything. And thank you again, have a good evening and a merry Christmas and New Year.
                        </p> 
                    </div>
                </div><!--.item-->
                <div class="writter__card rounded-0 shadow-none bg-white">
                    <div class="border-bottom p-3 px-md-4"> 
                        <div class="row g-2 align-items-center">
                            <div class="col-sm-7">
                                <div class="d-flex gap-3 align-items-center">
                                    <img 
                                        src="assets/images/home/user.jpg" 
                                        alt="Writer 1" 
                                        class="img-fluid rounded-circle thumbnail" 
                                        width="100" height="100" loading="lazy"
                                    >
                                    <div class="col">
                                        <p class="fs-6 fw-bold text-primary mb-0">Gregory Dubose</p>
                                        <p class="fs-15 fw-light mb-0">TAP-83296469</p>
                                    </div>
                                </div> 
                            </div>
                            <div class="col-sm-5 d-flex justify-content-center justify-content-sm-end">
                                <img src="assets/images/icons/5-stars.webp" class="img-fluid" width="110" height="20" alt="stars">
                            </div>
                        </div>
                    </div>
                    <div class="p-3 px-md-4 lh-sm pb-5"> 
                        <p class="fs-15 text-dark mb-0">
                            Good evening, thank you very much for your service and supporting me at this stressful time. How else can I support you, is there any way I can rate your service as it I am happy with everything. And thank you again, have a good evening and a merry Christmas and New Year.
                        </p> 
                    </div>
                </div><!--.item-->
                <div class="writter__card rounded-0 shadow-none bg-white">
                    <div class="border-bottom p-3 px-md-4"> 
                        <div class="row g-2 align-items-center">
                            <div class="col-sm-7">
                                <div class="d-flex gap-3 align-items-center">
                                    <img 
                                        src="assets/images/home/user.jpg" 
                                        alt="Writer 1" 
                                        class="img-fluid rounded-circle thumbnail" 
                                        width="100" height="100" loading="lazy"
                                    >
                                    <div class="col">
                                        <p class="fs-6 fw-bold text-primary mb-0">Gregory Dubose</p>
                                        <p class="fs-15 fw-light mb-0">TAP-83296469</p>
                                    </div>
                                </div> 
                            </div>
                            <div class="col-sm-5 d-flex justify-content-center justify-content-sm-end">
                                <img src="assets/images/icons/5-stars.webp" class="img-fluid" width="110" height="20" alt="stars">
                            </div>
                        </div>
                    </div>
                    <div class="p-3 px-md-4 lh-sm pb-5"> 
                        <p class="fs-15 text-dark mb-0">
                            Good evening, thank you very much for your service and supporting me at this stressful time. How else can I support you, is there any way I can rate your service as it I am happy with everything. And thank you again, have a good evening and a merry Christmas and New Year.
                        </p> 
                    </div>
                </div><!--.item-->
            </div><!--.caropusel-->
        </div><!--.container-->
    </section>
    <!-- testimonial wrapper end -->

    <!-- quote wrapper start -->
    <?php
        $title="Where Quality Meets Commitment in Academic Writing!";
        $description="We deliver your project with expert insights, 100% originality and personalised support"; 
        include('includes/quote.inc.php');
    ?>
    <!-- quote wrapper end -->
 
    <!-- Footer and Script List --> 
    <?php include_once('includes/footer.inc.php'); ?> 
 
</body>
</html>
 