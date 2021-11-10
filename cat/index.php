<?php
if(isset($_POST['submit']) and !empty($_POST['submit'])){
    $name=$_POST['name'];
    $phone=$_POST['phone'];
    $email=$_POST['email'];

    $mail1_subject="Time Thrissur CAT enquiry from Google Ads - " . $name;
    $mail1_txt="Name :" . $name . "<br>" . "Mobile :" . $phone . "<br>" . "E-Mail :" . $email . "<br>";

    $mail2_subject="Thank You, " . $name;
    $mail2_txt="We are receiveing your request. We contact soon thank you !!";

    // Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: <trichur@time4education.com>' . "\r\n";

    $complete=mail("viralmafiacs2@gmail.com, cyril.viralmafia@gmail.com, suneshkrishnan@gmail.com, trichur@time4education.com, leads.viralmafia@gmail.com",$mail1_subject,$mail1_txt, $headers);

    if($complete){
        header("location:sucess/index.html");
    }
}


if(isset($_POST['quicksubmit']) and !empty($_POST['quicksubmit'])){
    $name=$_POST['name'];
    $phone=$_POST['phone'];
    $email=$_POST['email'];
    $message=$_POST['message'];

    $mail1_subject="Time Thrissur CAT Quick enquiry from Google Ads - " . $name;
    $mail1_txt="Name :" . $name . "<br>" . "Mobile :" . $phone . "<br>" . "E-Mail :" . $email . "<br>". "Message :" . $message . "<br>";

    $mail2_subject="Thank You, " . $name;
    $mail2_txt="We are receiveing your request. We contact soon thank you !!";

    // Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: <trichur@time4education.com>' . "\r\n";

    $complete=mail("viralmafiacs2@gmail.com, cyril.viralmafia@gmail.com, suneshkrishnan@gmail.com, trichur@time4education.com, leads.viralmafia@gmail.com",$mail1_subject,$mail1_txt, $headers);

    if($complete){
        header("location:sucess/index.html");
    }
}


if(isset($_POST['coursesubmit']) and !empty($_POST['coursesubmit'])){
    $coursename=$_POST['coursename'];
    $coursephone=$_POST['coursephone'];
    $courseemail=$_POST['courseemail'];

    $mail1_subject="Time Thrissur CAT Quick enquiry from Google Ads - " . $coursename;
    $mail1_txt="Name :" . $coursename . "<br>" . "Mobile :" . $coursephone . "<br>" . "E-Mail :" . $courseemail . "<br>";

    $mail2_subject="Thank You, " . $coursename;
    $mail2_txt="We are receiveing your request. We contact soon thank you !!";

    // Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: <trichur@time4education.com>' . "\r\n";

    $complete=mail("viralmafiacs2@gmail.com, cyril.viralmafia@gmail.com, suneshkrishnan@gmail.com, trichur@time4education.com, leads.viralmafia@gmail.com",$mail1_subject,$mail1_txt, $headers);

    if($complete){
        header("location:sucess/index.html");
    }
}
?>
<!doctype html>
<html>

<head>
    <meta charset="utf-8">
<title>Coaching for CAT Entrance Exam</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <link rel="shortcut icon" href="images/favicon.png">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/font-awesome.css">
    <link rel="stylesheet" href="css/fontawesome-all.css">
    <link rel="stylesheet" href="css/linea-arrows.css">
    <link rel="stylesheet" href="css/custom.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/niecelesect.css"> 
    <link rel="stylesheet" href="css/slick.css">
     <link rel="stylesheet" href="css/jquery.fancybox.css">


<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-5PVX78C');</script>
<!-- End Google Tag Manager -->
    
    
	
</head>

<body>

<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5PVX78C"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
  
 <div class="body_wraper">

<section>
<div class="header_sec">
<div class="header_fixed">
<div class="container">
<div class="top_headerleft">
<div class="header_logo">
<a href="#"><img src="images/time-logo.png"></a>
</div>
<div class="header_contact">
<ul>
<li class="li_phone ">
<span><i class="fas fa-headphones blink"></i> Call Us</span>
<a href="tel:+919745664425"> +91 9745 664 425 / +91 9987 201 670 </a></li>
<li class=" ">
<span><i class="fas fa-envelope-open"></i> Mail Us</span>
<a href="mailto:trichur@time4education.com"> trichur@time4education.com </a></li>
</ul>
</div>
</div>

</div>
</div>
</div>
</section>
     
<section>
<div class="banner_sec" id="top-enquiry">
<div class="container">
<div class="row">
<div class="col-lg-7 align_items_center">
<div class="bnr_cap">
<h3>T.I.M.E IS YOUR BEST <br>BET FOR
CAT 2021/ 2022</h3>  
<div class="scroll_down"><a href="#courseID" class="theme_btn">View all COURSES</a></div> 
</div>    
</div> 
<div class="col-lg-5">
<div class="top_formsec">
<div class="fomouter">
    <h4>TO KNOW MORE ABOUT OUR
<span> ENTRANCE COURSES</span></h4>
<form name="form1" method="post" action="#">
<div class="input_sec">
<input placeholder="Name" type="text" name="name" required>   
</div>  
<div class="input_sec">
<input placeholder="Phone" type="number" name="phone" required>   
</div>  
<div class="input_sec">
<input placeholder="Email" type="email" name="email">   
</div>   
<div class="input_sec">
<input type="submit" value="Submit" name="submit">   
</div>  
</form>   
</div>   
</div>    
</div> 
    
</div>    
</div>    
</div>     
</section>
     
<section>
<div class="course_sec" id="courseID">
<div class="container">
<div class="row">
<div class="col-lg-12">
<h2 class="hm_title">CAT</h2>    
</div>  


<div class="col-lg-12 col-sm-12">
<div class="course_box">
<!--<div class="course_box_img">
 <img src="images/course/1.jpg">   
</div>-->
<div class="course_box_content">   
<p>T.I.M.E. is acclaimed as the best CAT coaching centre in Kerala. Its CAT coaching centre in Thrissur is an excellent MBA coaching centre which offers outstanding coaching for CAT as well as other MBA entrance exams with stunning results. It is a one-stop shop for your preparation to get into top B-Schools. As one of the best CAT coaching centres in Kerala, the course that T.I.M.E. offers, takes care of your CAT exam preparation. CAT online coaching that T.I.M.E offers is another attractive learning experience. Excellent infrastructure with the best MBA coaching in Thrissur, T.I.M.E is your entrance exam solution!</p>

        <div class="clearfix"></div>
        <div class="row">
        <div class="cat_fistsec">
        <div class="div_cat_left cat_main_bult">
        <ul>
        <li>Excellent infrastructure, best in Thrissur and among other T.I.M.E. centres.
        <ul class="site_bult">
        <li>Air conditioned Library & Reading Room  </li>
        <li>Computer Lab to practice Online Sectional Tests, All India Mock CATs (AIMCAT), View MOCK CAT Solutions, Discussion Videos with headset facility.</li>
        <li>Smart Seminar Hall which can seat more than 120 students.</li>
        <li>11 neat and spacious Classrooms</li>
        <li>Hostel facilities </li>
        <li>Personal Mentoring </li>
        <li>Weekly Doubt Clarification Sessions </li>
        <li>Separate High Performers CAT batch from 4 months before CAT </li>
        <li>Bridge / Additional Support Classes for Students weak in Maths and English</li>
        <li>Rigorous Knowledge Sessions for GD, WAT, PI </li>
        <li>Personal B-School Selection Guidance </li>
        </ul>
        </li>
        </ul>
        </div>
        </div>
        
    
        <div class="cat_result_Sec">
        <div class="col-lg-12"><h5>T.I.M.E. Thrissur Recent CAT Results </h5></div>
        <div class="div_cat_left">
        <ul class="site_bult">
        <li>31 Students get 315 IIM Calls in CAT 2019 </li>
        <li>51 Students get 80+ percentile in CAT 2019 </li>
        <li>11 Students joined IIMs in CAT 2018 </li>
        <li>77 Students joined top 50 B-Schools in CAT 2018</li>
        <li>153 Students joined top 100 B-Schools in CAT 2018</li>
        
        </ul>
        </div>

        
        <h5 class="div_cat_left1">Batches – Weekday / Weekend</h5>
        
        </div>
    
        
        </div>

<!--<a href="#" class="theme_btn" data-toggle="modal" data-target="#coursemodal1">Learn More</a>-->
</div>
</div>    
</div> 



 <!--   
    <div class="col-lg-4 col-sm-6">
<div class="course_box">
<div class="course_box_img">
 <img src="images/course/2.jpg">   
</div>
<div class="course_box_content">
 <h3>BANK EXAMS</h3>   
<div class="text_para"><p>T.I.M.E is one of the most preferred IBPS & SBI coaching centre in Thrissur. We prepare you for series of Common Written Examinations (CWEs) conducted by  IBPS for the selection of personnel for Probationary Officer / Management Trainee / Clerk / Specialist, </p></div>
<a href="#" class="theme_btn" data-toggle="modal" data-target="#coursemodal2">Learn More</a>
</div>
</div>    
</div> 
    
    <div class="col-lg-4 col-sm-6">
<div class="course_box">
<div class="course_box_img">
 <img src="images/course/3.jpg">   
</div>
<div class="course_box_content">
 <h3>SSC EXAMS</h3>   
<div class="text_para"><p>T.I.M.E excels as one of the best SSC coaching centres in Thrissur. It is also one of the prominent SSC coaching centres in Palakkad. </p></div>
<a href="#" class="theme_btn" data-toggle="modal" data-target="#coursemodal3">Learn More</a>
</div>
</div>    
</div> 
    
    <div class="col-lg-3 col-sm-6">
<div class="course_box">
<div class="course_box_img">
 <img src="images/course/4.jpg">   
</div>
<div class="course_box_content">
 <h3>KERALA PSC</h3>   
<div class="text_para"><p>T.I.M.E IS one of the predominant PSC coaching centres in Thrissur. Being the top PSC coaching centre in Thrissur, T.I.M.E offers comprehensive coverage of all test areas of PSC Examinations - 10th, 12th and Degree level.  We offer comprehensive study materials and mock papers modelled on the PSC exam pattern. </p></div>
<a href="#" class="theme_btn" data-toggle="modal" data-target="#coursemodal4">Learn More</a>
</div>
</div>    
</div> 
    
    
    
    <div class="col-lg-3 col-sm-6">
<div class="course_box">
<div class="course_box_img">
 <img src="images/course/5.jpg">   
</div>
<div class="course_box_content">
 <h3>GRE</h3>   
<div class="text_para"><p>Want to do your higher studies abroad? Welcome to the best GRE test coaching centre in Thrissur!  Small batch sizes ensure personal attention, while extensive input and practice study materials, sample online tests and detailed result analysis help prepare the candidate for the real GRE test. Diagnostic tests, topic-wise tests, verbal reasoning (comprising exclusive practice tests for reading comprehension, text completion and sentence completion), quantitative reasoning (comprising exclusive chapter-wise practice test, analytical writing, sectional tests and Computer Adaptive Tests are practised. </p></div>
<a href="#" class="theme_btn" data-toggle="modal" data-target="#coursemodal5">Learn More</a>
</div>
</div>    
</div> 
    
    <div class="col-lg-3 col-sm-6">
<div class="course_box">
<div class="course_box_img">
 <img src="images/course/6.jpg">   
</div>
<div class="course_box_content">
 <h3>GMAT</h3>   
<div class="text_para"><p>Designed specifically for Indian students, T.I.M.E. Thrissur’s GMAT classroom programme is comprehensive, with about 64 hours (32 sessions) of classroom coaching that covers all the concepts and test-taking techniques. Over the years, we have coached over a million students for various competitive examinations, and truly understand the strengths and weaknesses of Indian graduates. Hence, we give extra attention to key areas where most students are likely to underperform.</p></div>
<a href="#" class="theme_btn" data-toggle="modal" data-target="#coursemodal6">Learn More</a>
</div>
</div>    
</div> 

    <div class="col-lg-3 col-sm-6">
<div class="course_box">
<div class="course_box_img">
 <img src="images/course/7.jpg">   
</div>
<div class="course_box_content">
 <h3>GATE</h3>   
<div class="text_para"><p>T.I.M.E offers the best GATE coaching in Kerala to help students pursue their dream of an M. Tech in prestigious institutions. DigiGATE by T.I.M.E. is designed to assist you in your preparation for GATE through 400+ hours of video lectures by the best faculty.</p></div>
<a href="#" class="theme_btn" data-toggle="modal" data-target="#coursemodal7">Learn More</a>
</div>
</div>    
</div> 


-->
<!--
    <div class="col-lg-3 col-sm-6">
<div class="course_box">
<div class="course_box_img">
 <img src="images/course/7.jpg">   
</div>
<div class="course_box_content">
 <h3>HUMANITIES AND SOCIAL SCIENCE ENTRANCE EXAMINATION</h3>   

<a href="#" class="theme_btn" data-toggle="modal" data-target="#coursemodal7">Learn More</a>
</div>
</div>    
</div> 
    
<div class="col-lg-3 col-sm-6">
<div class="course_box">
<div class="course_box_img">
 <img src="images/course/8.jpg">   
</div>
<div class="course_box_content">
 <h3>CDS EXAMS</h3>   
<div class="text_para"><p>At present, T.I.M.E is the no.1 CDS coaching centre in Kozhikode. It is also one of the supreme CDS coaching centres in Malappuram. The "Combined Defence Services" Examination (CDS) is conducted twice a year (FEB and NOV) by UPSC for recruitment into one of the following:</p></div>
<a href="#" class="theme_btn" data-toggle="modal" data-target="#coursemodal8">Learn More</a>
</div>
</div>    
</div>     
    
    <div class="col-lg-3 col-sm-6">
<div class="course_box">
<div class="course_box_img">
 <img src="images/course/9.jpg">   
</div>
<div class="course_box_content">
 <h3>GRE</h3>   
<div class="text_para"><p>Want to do your higher studies abroad? Welcome to the best GRE test coaching centre in Calicut! </p></div>
<a href="#" class="theme_btn" data-toggle="modal" data-target="#coursemodal9">Learn More</a>
</div>
</div>    
</div> 
    
    <div class="col-lg-3 col-sm-6">
<div class="course_box">
<div class="course_box_img">
 <img src="images/course/10.jpg">   
</div>
<div class="course_box_content">
 <h3>GMAT</h3>   
<div class="text_para"><p>Designed specifically for Indian students, T.I.M.E. Kozhikode’s GMAT classroom programme is comprehensive, with about 64 hours </p></div>
<a href="#" class="theme_btn" data-toggle="modal" data-target="#coursemodal10">Learn More</a>
</div>
</div>    
</div> 

-->
    
</div>    
</div>    
</div>     
</section> 
    
     
     <div class="time-landing_aboutsec">
                <div class="container">
                    <div class="row">

                        <div class="col-md-12">
                            <div class="home_aboutleft">
                              
                                    <h1 class="hm_title">Triumphant Institute of Management Education</h1>
                              
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="home_aboutright">
                               
<p>Triumphant Institute of Management Education Pvt. Ltd. (T.I.M.E.) is India's leading test-prep institute with a pan-India presence and is headquartered in Hyderabad. Established in 1992, T.I.M.E. operates out of 237 offices in 118 towns and cities across the country. Over 40 IIT/IIM graduates form part of the core team at T.I.M.E.</p>
                                <div class="row">
                                    <div class="col-lg-3">
                                        <div class="overview-block">
                                            <img src="images\time-about\T4E_Overview1.png">
                                            <p>Established in
                                                <br> <strong>1992</strong></p>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="overview-block">
                                            <img src="images\time-about\T4E_Overview2.png">
                                            <p><strong>237</strong> offices in <strong>118</strong><br> cities/towns
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="overview-block">
                                            <img src="images\time-about\T4E_Overview3.png">
                                            <p>Over <strong>40 IIT/IIM<br>
                                              graduates</strong> core team</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="overview-block">
                                            <img src="images\time-about\T4E_Overview4.png">
                                            <p>India's <strong>Leading<br>
                                              Test-prep</strong> Institute</p>
                                        </div>
                                    </div>
                                </div>
<p>Started in a small 120 sq.ft. room on 26 May 1992 in Hyderabad with just one centre, T.I.M.E. has completed 28 years of dedicated service to the student community - helping to build a few hundred thousand careers along the way. From one office to 237, it has been a long and satisfying journey for T.I.M.E.'s promoters who had chucked their high flying corporate jobs to pursue their dream and passion!</p>
<p>Today, T.I.M.E. is recognised as a multi-location, multi-programme training specialist ran along corporate lines and offers a wide range of programmes not only for national and state-level entrance exams like CAT, MAT, CLAT, IPM, HSEE, NCHMCT JEE, JEE MAIN, and JEE ADVANCED but also for international exams like GMAT, GRE, IELTS and TOEFL.</p>
<p>Through its Campus Recruitment Training conducted annually at various engineering colleges across the country, T.I.M.E. trains thousands of students in aptitude tests and communication skills as a part of preparing them for their campus placements.</p>
<p>T.I.M.E. also offers a unique IIT Foundation programme aimed at students of 7th, 8th, 9th and 10th classes. This programme focuses on strengthening the student's conceptual clarity of the fundamentals of Mathematics, Physics and Chemistry.</p>

                                
                            </div>
                        </div>
                    </div>

                </div>
            </div>


<!--   
     
 <section>
            <div class="video_tessec">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="vidtes_title">
                                <h3 class="hm_title">Some Success Stories</h3>
                                <p>Let's listen to some of the students who have lived their dreams through T. I. M. E. Calicut.</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="testimonial_box tes_img1">
    <a data-fancybox class="vibtn" href="https://youtu.be/QJ11pZRYaE0"><span><i class="fa fa-play"></i></span></a>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="row">
                                <div class="col-sm-6 col-6">
                                    <div class="testimonial_box tes_img2">
      <a data-fancybox class="vibtn" href="https://youtu.be/LZQfBqkYAIg"><span><i class="fa fa-play"></i></span></a>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-6">
                                    <div class="testimonial_box tes_img3">
     <a data-fancybox class="vibtn" href="https://youtu.be/B4CIqWndH2s"><span><i class="fa fa-play"></i></span></a>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-6">
                                    <div class="testimonial_box tes_img4">
         <a data-fancybox class="vibtn" href="https://youtu.be/uN0Nu0NtXfk"><span><i class="fa fa-play"></i></span></a>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-6">
                                    <div class="testimonial_box tes_img5">
         <a data-fancybox class="vibtn" href="https://youtu.be/DvfypQF9I10"><span><i class="fa fa-play"></i></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>  

-->

<section class="testimonial_sec ">
                <div class="container">
                    
    <h3 class="hm_title">What our students say about us</h3>
               
                    <div class="con_testimonial_slider_info  slick_customstyle" >
                        <div class="con_testimonial_slider_two" id="testimonila_slider">
                             <div class="item ">
                                <div class="testimonial_item_two">
                          <div class="tes_para">
                              <div class="tesicondiv">
                               <img class="" src="images/tes.svg" alt="">
                              </div>
   <p>I thank the faculty members at T.I.M.E. who helped and guided me right from the start, and instilled a strong sense of confidence in me. The practice tests went a long way in helping me sail through
                                                            the exam. I owe my entry into the banking sector to the T.I.M.E. team.
                                                        </p> 
                              <h6 >Asmita Saha <span>Selection: Bank of India (Clerk) As of now</span> </h6>
                          </div>
                                    
                                </div>
                            </div>
                            
                            <div class="item ">
                                <div class="testimonial_item_two">
                          <div class="tes_para">
                              <div class="tesicondiv">
                               <img class="" src="images/tes.svg" alt="">
                              </div>
         <p>The AIMGATE (online test series) provided by T.I.M.E. was one of the key contributors to my success in GATE. The questions were similar to the level of Actual GATE exam and they covered almost the
                                                            entire syllabus.
                                                        </p>
                              <h6 >Thaduri Naveen  <span>AIR 1 (IN) in GATE 2017, IIIT Basara, Batch (2010 - 2014)</span>  </h6>      
                          </div>
                                    
                                </div>
                            </div>
            <div class="item ">
                                <div class="testimonial_item_two">
                          <div class="tes_para">
                              <div class="tesicondiv">
                               <img class="" src="images/tes.svg" alt="">
                              </div>
  <p>I joined T.I.M.E for CAT preparation. I found the classroom sessions conducted by T.I.M.E. to be very useful in my preparation.The methods taught in these lectures were very helpful. The way the faculty helped analyze my performance in AIMCATs ensured that i did well in CAT exam. The GDPI classes conducted later on were also very good.</p>  
                              <h6 >Aswini <span>(Joined IIM Lucknow )</span> </h6>
                          </div>
                                    
                                </div>
                            </div>
                            
                          
                   <div class="item ">
                                <div class="testimonial_item_two">
                          <div class="tes_para">
                              <div class="tesicondiv">
                               <img class="" src="images/tes.svg" alt="">
                              </div>
          <p>Attending classes at T.I.M.E. was very important for me as i had a very hectic work schedule at office. The knowledge that i gathered during these classes and the AIMCATs that i took every weekend ensured that i secured a good percentile in CAT and XAT exams.</p>
                              <h6 >Ashrita <span>(Joined XLRI )</span> </h6>
                          </div>
                                    
                                </div>
                            </div>
                
                            <div class="item ">
                                <div class="testimonial_item_two">
                          <div class="tes_para">
                              <div class="tesicondiv">
                               <img class="" src="images/tes.svg" alt="">
                              </div>
               <p>T.I.M.E. gave me that extra 'something' for clearing bank exams.Today i have achieved my goal of getting into SBI as probationary officer beause of this institute.The comprehensive study materials,tips from experienced faculties and especially the series of mock tests......</p>     <h6 >T. Shalini
                                                            <span>Selected as PO in SBI</span>
                                                          </h6>    
                          </div>
  
                                </div>
                            </div>
                            
                     
      
                        </div>
                    </div>
                </div>
            </section>  


   <section>
            <div class="footersec">
                <div class="container">
                    <div class="footer_margin">
                        <div class="row">
                            <div class="col-md-5">
                                <div class="footer_category">
                                    <div class="footer_contact">
                                        <h4>Contact Us</h4>
                                        <ul>
                                            <li><i class="fa fa-map-marker"></i>T.I.M.E., 3rd Floor, Pottokaran Estate, Opp to Jubilee Mission Hospital Gate 2, Fathima Nagar, East Fort, Thrissur 680005</li>
                                            <li><i class="fa fa-phone"></i>+91 9745 664 425 / +91 9987 201 670</li>
                                            <li class="email_li"><i class="fa fa-envelope"></i><a href="mailto:trichur@time4education.com">trichur@time4education.com</a></li>
                                            <li><i class="fa fa-globe"></i><a href="https://www.time4education.com" target="_blank">www.time4education.com</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-7">
                                <div class="footer_category">
                                    <div class="footer_form">
                                        <h4>Quick Enquiry</h4>
                                        <form name="form3" method="post" action="">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="footer_form_input">
             <input placeholder="Name" name="name" type="text" required>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="footer_form_input">
                                                        <input placeholder="Phone" name="phone" type="text" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="footer_form_input">
                                                        <input placeholder="Email ID" name="email" type="email">
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="footer_form_input">
                                                        <textarea placeholder="Message" name="message"></textarea>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="footer_form_input">
                                                        <input type="submit" value="Send Now" name="quicksubmit">
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="landing_map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3922.760929990537!2d76.2238790142853!3d10.519486666761367!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ba7ee429ce98d25%3A0xd3c0e437e996624f!2sT.I.M.E.%20Thrissur%20-%20CAT%2C%20BANK%2C%20SSC%2C%20GMAT%2C%20GRE%2C%20IELTS%2C%20Bank%20Exams%20Coaching!5e0!3m2!1sen!2sin!4v1589887545998!5m2!1sen!2sin" width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen=""></iframe>
                </div>

                <div class="footer_copyright">
                    <div class="container">
                        <p>Copyright © 2020 Triumphant Institute of Management Education Pvt. Ltd., All rights reserved. Designed by
                            <a href="http://www.theviralmafia.com/?utm_source=time4education" target="_blank"> <img src="images/viralmafia.svg"></a>
                        </p>
                    </div>
                </div>
            </div>
        </section>

     
      <a title="WhatsApp" target="_blank"
 href="https://api.whatsapp.com/send?phone=919987201670" class="whatsapp_icon"><i class="fab fa-whatsapp"></i></a>
 
 	 <a title="Call Now" target="_blank"
 href="tel:+919987201670" class="call_iconbtn"><i class="fa fa-phone" aria-hidden="true"></i></a>
 

 <div class="totop " >
 <span title="Top"><i class="fa fa-angle-up" aria-hidden="true"></i></span>
 </div>

 <a href="#" class="vertical_btn" data-toggle="modal" data-target="#myModal2">Enquire</a> 


 </div> <!-- bodywrapper -->
    
 
      <div class="modal fade course_pop_outsec " id="coursemodal1">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">

                    <div class="modal-body">
  <button type="button" class="close" data-dismiss="modal"><i class="fa fa-times" aria-hidden="true"></i></button>
<div class="course_modal_body">
<div class="row">
<div class="col-lg-4">
<div class="cp_imgsec">
<img src="images/course/1.jpg">   
</div>     
</div>   
<div class="col-lg-8">
<div class="cour_popcont">
<h3>cat</h3>
<p >T.I.M.E. is acclaimed as one of the best CAT coaching centres in Thrissur which , offers outstanding coaching for CAT and other MBA entrance exams with stunning results. It is a one-stop shop for your preparation to get into top B-Schools. </p>
        <p >The course that T.I.M.E. offers take care of your preparation for the written exam,  Group Discussions, Written Ability Test (WAT/Essay) and Personal or Group Interviews. T.I.M.E.'s training programme prepares you for CAT,  XAT, SNAP, NMAT, TISSNET, CMAT, IIFT, etc. </p>
        <div class="clearfix"></div>
        <div class="row">
        <div class="cat_fistsec">
        <div class="div_cat_left cat_main_bult">
        <ul>
        <li>Excellent Infrastructure, best in Thrissur and among other T.I.M.E. Centers
        <ul class="site_bult">
        <li>Air conditioned Library & Reading Room  </li>
        <li>Computer Lab to practice Online Sectional Tests, All India Mock CATs (AIMCAT), view Mock CAT Solutions Discussion Videos with headset facility</li>
        <li>Smart Seminar Hall which can seat more than 120 students</li>
        <li>11 neat and spacious Classrooms</li>
        <li>Hostel facilities </li>
        <li>Personal Mentoring</li>
        <li>Weekly Doubt Clarification Sessions </li>
        <li>Separate High Performers CAT Batch from 4 months before CAT</li>
        <li>Bridge / Additional Support Classes for Students weak in Maths and English</li>
        <li>Rigorous Knowledge Sessions for GD, WAT,  PI </li>
        <li>Personal B School Selection Guidance</li>
        </ul>
        </li>
        </ul>
        </div>
        </div>
        
    
        <div class="cat_result_Sec">
        <div class="col-lg-12"><h5>T.I.M.E. Thrissur Recent CAT Results </h5></div>
        <div class="cat_result_left">
        <ul class="site_bult">
        <li>31 Students get 315 IIM Calls in CAT 2019</li>
        <li>51 Students get 80+ percentile in CAT 2019</li>
        <li>11 Students joined IIMs in CAT 2018</li>
        <li>77 Students joined top 50 B Schools in CAT 2018</li>
        <li>153 Students joined top 100 B Schools in CAT 2018 </li>
        
        </ul>
        </div>

        
        <h5>Batches – Weekday / Weekend</h5>
        
        </div>
    
        
        </div>
</div>      
</div>
</div>                         
</div>                     
                      
                    </div>

                </div>
            </div>
        </div>
    
    
 <div class="modal fade course_pop_outsec " id="coursemodal2">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">

                    <div class="modal-body">
  <button type="button" class="close" data-dismiss="modal"><i class="fa fa-times" aria-hidden="true"></i></button>
<div class="course_modal_body">
<div class="row">
<div class="col-lg-4">
<div class="cp_imgsec">
<img src="images/course/2.jpg">   
</div>     
</div>   
<div class="col-lg-8">
<div class="cour_popcont">
<h3>BANK EXAMS</h3>
<div class="row">

    <div class="col-lg-12">
      <div class="course-block">
     <p >T.I.M.E is one of the most preferred IBPS & SBI coaching centre in Thrissur. We prepare you for series of Common Written Examinations (CWEs) conducted by  IBPS for the selection of personnel for Probationary Officer / Management Trainee / Clerk / Specialist, </p>
     <p > Officer posts in Public Sector banks (other than SBI) and for Officers and Office Assistants in Regional Rural Banks. </p>
     <p >Exam conducted by SBI for recruitment to the posts of Clerks and Officers. </p>
     <p >Recruitment by Private banks and PSBs through one year Post Graduate Diploma in Banking and Finance (PGDBF) course in Manipal Global Education Services Pvt Ltd. Bangalore (MaGE). </p>
     <p >In addition to the Class room coaching following supports are also provided to Bank & SSC students: </p>
     
     <ul class="site_bult">
     <li>Unlimited support and training</li>
     <li>Train till you get placed</li>
     <li>Mentoring Facility</li>
     <li>Excellent Infrastructure</li>
     <li>Numerous Doubt Clarification Sessions</li>
     <li>Daily Tests</li>
     <li>Excellent Online Support by Tests, Full length Mock Tests, All India Mock Test</li>
     </ul>
     <h5>Batches – Weekday / Weekend</h5>
                                        </div>
                                    </div>  
          </div>

</div>      
</div>
</div>                         
</div>                     
                      
                    </div>

                </div>
            </div>
        </div>
    
 <div class="modal fade course_pop_outsec " id="coursemodal3">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">

                    <div class="modal-body">
  <button type="button" class="close" data-dismiss="modal"><i class="fa fa-times" aria-hidden="true"></i></button>
<div class="course_modal_body">
<div class="row">
<div class="col-lg-4">
<div class="cp_imgsec">
<img src="images/course/3.jpg">   
</div>     
</div>   
<div class="col-lg-8">
<div class="cour_popcont">
<h3>SSC EXAMS</h3>
<div class="row">
         <div class="col-lg-12">
    <div class="course-block">  
    <p >T.I.M.E excels as one of the best SSC coaching centres in Thrissur.</p>
    <p >SSC Conducts the following exams : </p>
    <p >Combined Graduate Level Examination (CGLE),    
     Combined Higher Secondary level examination,  
     Junior Engineers Examination </p>
    <ul class="site_bult">
    <li>Unlimited support and training</li>
    <li>Train till you get placed</li>
    <li>Mentoring Facility</li>
    <li>Excellent Infrastructure</li>
    <li>Numerous Doubt Clarification Sessions</li>
    <li>Daily Tests</li>
    </ul>
    <p>Excellent Online Support by Tests, Full length Mock Tests, All India Mock Tests</p>
    <h5>Batches – Weekday / Weekend</h5>
                                        </div>
                                    </div>
          </div>
</div>      
</div>
</div>                         
</div>                     
                      
                    </div>

                </div>
            </div>
        </div>
    
    <div class="modal fade course_pop_outsec " id="coursemodal4">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">

                    <div class="modal-body">
  <button type="button" class="close" data-dismiss="modal"><i class="fa fa-times" aria-hidden="true"></i></button>
<div class="course_modal_body">
<div class="row">
<div class="col-lg-4">
<div class="cp_imgsec">
<img src="images/course/4.jpg">   
</div>     
</div>   
<div class="col-lg-8">
<div class="cour_popcont">
<h3>KERALA PSC</h3>
<div class="row">
      <div class="col-lg-12">
    <div class="course-block">
    <p >T.I.M.E IS one of the predominant PSC coaching centres in Thrissur.   </p>
    <p >Being the top PSC coaching centre in Thrissur, T.I.M.E offers comprehensive coverage of all test areas of PSC Examinations - 10th, 12th and Degree level.  We offer comprehensive study materials and mock papers modelled on the PSC exam pattern. </p>
    <p >Also,  </p>
    <p >Intensive training and Study materials in order to crack the exams is imparted by qualified and experienced Faculty </p>
    <p > Personal doubt-clearing and mentoring sessions.  </p>
    <p >Candidates appearing for LGS,LDC, Village field assistant, CPO, Civil excise officer, Lab assistant, Fire and rescue, Secretariat assistant, University assistant, Sub- Inspector exams etc can enrol for our courses. </p>
    <h5>Batches – Weekday / Weekend</h5>
 
                                        </div>
                                    </div>
          </div>
</div>      
</div>
</div>                         
</div>                     
                      
                    </div>

                </div>
            </div>
        </div>
    
    <div class="modal fade course_pop_outsec " id="coursemodal5">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">

                    <div class="modal-body">
  <button type="button" class="close" data-dismiss="modal"><i class="fa fa-times" aria-hidden="true"></i></button>
<div class="course_modal_body">
<div class="row">
<div class="col-lg-4">
<div class="cp_imgsec">
<img src="images/course/5.jpg">   
</div>     
</div>   
<div class="col-lg-8">
<div class="cour_popcont">
<h3>GRE</h3>
<p>Want to do your higher studies abroad? Welcome to the best GRE test coaching centre in Thrissur!  Small batch sizes ensure personal attention, while extensive input and practice study materials, sample online tests and detailed result analysis help prepare the candidate for the real GRE test. Diagnostic tests, topic-wise tests, verbal reasoning (comprising exclusive practice tests for reading comprehension, text completion and sentence completion), quantitative reasoning (comprising exclusive chapter-wise practice test, analytical writing, sectional tests and Computer Adaptive Tests are practised.</p>
    <h5>Batches – Weekday / Weekend</h5>
</div>      
</div>
</div>                         
</div>                     
                      
                    </div>

                </div>
            </div>
        </div>
    
<div class="modal fade course_pop_outsec " id="coursemodal6">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">

                    <div class="modal-body">
  <button type="button" class="close" data-dismiss="modal"><i class="fa fa-times" aria-hidden="true"></i></button>
<div class="course_modal_body">
<div class="row">
<div class="col-lg-4">
<div class="cp_imgsec">
<img src="images/course/6.jpg">   
</div>     
</div>   
<div class="col-lg-8">
<div class="cour_popcont">
<h3>GMAT</h3>
<p >Designed specifically for Indian students, T.I.M.E. Thrissur’s GMAT classroom programme is comprehensive, with about 64 hours (32 sessions) of classroom coaching that covers all the concepts and test-taking techniques. Over the years, we have coached over a million students for various competitive examinations, and truly understand the strengths and weaknesses of Indian graduates. Hence, we give extra attention to key areas where most students are likely to underperform.</p>
    <p >Comprehensive study material includes 90 online sectional practise tests and many full-length computer-based tests. Students also receive sufficient practice in all test areas, GMAT official guides, and assistance in writing that most important part of your application for admission - the Statement of Purpose.</p>
    <h5>Batches – Weekday / Weekend</h5>

</div>      
</div>
</div>                         
</div>                     
                      
                    </div>

                </div>
            </div>
        </div>




 <div class="modal fade course_pop_outsec " id="coursemodal7">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">

                    <div class="modal-body">
  <button type="button" class="close" data-dismiss="modal"><i class="fa fa-times" aria-hidden="true"></i></button>
<div class="course_modal_body">
<div class="row">
<div class="col-lg-4">
<div class="cp_imgsec">
<img src="images/course/7.jpg">   
</div>     
</div>   
<div class="col-lg-8">
<div class="cour_popcont">
<h3>GATE</h3>
<p >T.I.M.E offers the best GATE coaching in Kerala to help students pursue their dream of an M. Tech in prestigious institutions. DigiGATE by T.I.M.E. is designed to assist you in your preparation for GATE through 400+ hours of video lectures by the best faculty.
</p>

<ul class="site_bult">
    <li>Numerous practice tests</li>
    <li>20 self-administered mock GATEs (SAMGATE)</li>
    <li>10 All-India Mock GATEs (AIMGATE)</li>
    <li>15+ study books with theory explanation, solved examples, practice questions, PSU questions, bank and previous years’ GATE papers with solutions</li>
    <li>Soft copies of study material including 800+ PDFs</li>
</ul>

</div>      
</div>
</div>                         
</div>                     
                      
                    </div>

                </div>
            </div>
        </div>
    

<!--

    <div class="modal fade course_pop_outsec " id="coursemodal8">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">

                    <div class="modal-body">
  <button type="button" class="close" data-dismiss="modal"><i class="fa fa-times" aria-hidden="true"></i></button>
<div class="course_modal_body">
<div class="row">
<div class="col-lg-4">
<div class="cp_imgsec">
<img src="images/course/6.jpg">   
</div>     
</div>   
<div class="col-lg-8">
<div class="cour_popcont">
<h3>HOTEL MANAGEMENT ENTRANCE EXAMINATION</h3>
<p>T.I.M.E. Kozhikode is recognised as one of the best management exam coaching centres and has been helping students train for NCHMCT JEE and other hotel management entrance examinations for the last 20 years. Candidates benefit from subject delivery by accomplished faculty who are alumni of IITs, IIMs, and other premier colleges, top quality study materials, access to online sectional tests, and detailed analysis of results. Shortlisted students also receive personal interview training, as well as individual doubt clarification and counselling sessions to boost preparation performance.</p>

</div>      
</div>
</div>                         
</div>                     
                      
                    </div>

                </div>
            </div>
        </div>
    
    <div class="modal fade course_pop_outsec " id="coursemodal7">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">

                    <div class="modal-body">
  <button type="button" class="close" data-dismiss="modal"><i class="fa fa-times" aria-hidden="true"></i></button>
<div class="course_modal_body">
<div class="row">
<div class="col-lg-4">
<div class="cp_imgsec">
<img src="images/course/7.jpg">   
</div>     
</div>   
<div class="col-lg-8">
<div class="cour_popcont">
<h3>HUMANITIES AND SOCIAL SCIENCE ENTRANCE EXAMINATION</h3>
<p>T.I.M.E. Kozhikode has been helping students train for such competitive exams over the last two decades. Candidates benefit from subject delivery by accomplished faculty who are alumni of IITs, IIMs, and other premier colleges, top quality study materials, access to online sectional tests, and detailed analysis of results.</p>

</div>      
</div>
</div>                         
</div>                     
                      
                    </div>

                </div>
            </div>
        </div>
    
    <div class="modal fade course_pop_outsec " id="coursemodal9">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">

                    <div class="modal-body">
  <button type="button" class="close" data-dismiss="modal"><i class="fa fa-times" aria-hidden="true"></i></button>
<div class="course_modal_body">
<div class="row">
<div class="col-lg-4">
<div class="cp_imgsec">
<img src="images/course/9.jpg">   
</div>     
</div>   
<div class="col-lg-8">
<div class="cour_popcont">
<h3>GRE</h3>
<p>Want to do your higher studies abroad? Welcome to the best GRE test coaching centre in Calicut! T.I.M.E. Kozhikode will help you crack the GRE test with ease! Small batch sizes ensure personal attention, while extensive input and practice study materials, sample online tests and detailed result analysis help prepare the candidate for the real GRE test. Diagnostic tests, topic-wise tests, verbal reasoning (comprising exclusive practice tests for reading comprehension, text completion and sentence completion), quantitative reasoning (comprising exclusive chapter-wise practice tests), analytical writing, sectional tests and Computer Adaptive Tests show why we are the best GRE subject test coaching centre in Calicut. We offer batches during weekdays and weekends. Exclusive batches for NIT students are conducted near NIT Calicut Campus.</p>

</div>      
</div>
</div>                         
</div>                     
                      
                    </div>

                </div>
            </div>
        </div>
    
    <div class="modal fade course_pop_outsec " id="coursemodal10">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">

                    <div class="modal-body">
  <button type="button" class="close" data-dismiss="modal"><i class="fa fa-times" aria-hidden="true"></i></button>
<div class="course_modal_body">
<div class="row">
<div class="col-lg-4">
<div class="cp_imgsec">
<img src="images/course/10.jpg">   
</div>     
</div>   
<div class="col-lg-8">
<div class="cour_popcont">
<h3>GMAT</h3>
<p>Designed specifically for Indian students, T.I.M.E. Kozhikode’s GMAT classroom programme is comprehensive, with about 64 hours (32 sessions) of classroom coaching that covers all the concepts and test-taking techniques. Over the years, we have coached over a million students for various competitive examinations, and truly understand the strengths and weaknesses of Indian graduates, which are very different from those of American students. Hence, we give extra attention to key areas where most students are likely to underperform.</p>
<p>Comprehensive study material includes 90 online sectional practise tests and many full-length computer-based tests. Students also receive sufficient practice in all test areas, GMAT official guides, and of course, assistance in writing that most important part of your application for admission - the Statement of Purpose.</p>

</div>      
</div>
</div>                         
</div>                     
                      
                    </div>

                </div>
            </div>
        </div>
    
-->    
    
      <div class="modal fade popsec onload_pop" id="myModal2">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">

                    <div class="modal-body">
                        <button type="button" class="close" data-dismiss="modal"><i class="fa fa-times" aria-hidden="true"></i></button>
                        <div class="onload_left ">

                            
                            <h3>GET A <span> FREE </span> CONSULTATION!   </h3>
                            <h4>OUR CONSULTANT WILL GET IN TOUCH WITH YOU.</h4>

                        </div>
                        <div class="onload_right">
                            <form name="form2" method="post">
                                 <div class="input_load">
                                    <input placeholder="Name" type="text" name="name" required>
                                </div>
                                
                                 <div class="input_load">
                                    <input placeholder="Email" type="email" name="email">
                                </div>
                                
                                 <div class="input_load">
                                    <input placeholder="Phone" type="number" name="phone" required>
                                </div>
                                

                                <div class="input_load">
                                    <input value="Submit" type="submit" name="submit">
                                </div>

                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>

 


<script src="js/jquery-1.12.4.min.js"></script>
<script src="js/bootstrap.js"></script>
    <script type="text/javascript">
            $(document).ready(function() {
                setTimeout(function() {
                    $("#myModal2").modal('show');
                }, 7000);
            });
        </script>
<script src="js/jquery.easing.min.js"></script>
<script src="js/totop.js"></script>
<script src="js/niceselect.js"></script>
<script src="js/niceselect-custom.js"></script>
<script src="js/slick.min.js"></script>	
<script src="js/custom.js"></script>
<script src="js/jquery.fancybox.js"></script>
<script>
$('.scroll_down a').on('click', function(event) {
    var $anchor = $(this);
    $('html, body').stop().animate({
        scrollTop: $($anchor.attr('href')).offset().top - 40
    }, 1500, 'easeInOutExpo');
    event.preventDefault();
});    
</script> 
 <script>
        $('.totop').tottTop({
            scrollTop: 100
        });
    </script>
</body>

</html>