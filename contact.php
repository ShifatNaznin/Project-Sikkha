<?php
require_once('functions/function.php');
get_header();

?>
<!-- slider-start -->
<div class="slider-area">
  <?php
   $sel="SELECT * FROM contact_banner ORDER BY contact_ban_id DESC LIMIT 0,1";
   $Q=mysqli_query($con,$sel);

   while ($data=mysqli_fetch_assoc($Q)) {
     // code...


   ?>
  <div class="page-title">
    <div class="single-slider slider-height slider-height-breadcrumb d-flex align-items-center" style="background-image: url(admin/uploads/<?= $data['contact_ban_photo']; ?>);">
      <div class="container">
        <div class="row">
          <div class="col-xl-12">
            <div class="slider-content slider-content-breadcrumb text-center">
              <h1 class="white-color f-700"><?= $data['contact_ban_title']; ?></h1>
              <nav class="text-center" aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
                </ol>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
<?php } ?>
</div>
<!-- slider-end -->
<!-- courses start -->
<div class="advisors-area gray-bg pt-95 pb-70">
  <div class="container">
    <div class="row">
      <div class="col-xl-5 col-lg-6 col-md-10 offset-md-1 ml-md-auto">
        <div class="contact-info-text">
          <div class="section-title mb-20">
            <div class="section-title-heading mb-10">
              <h1>Contact Info</h1>
            </div>
            <div class="section-title-para">
              <p>Lorem ipsum dolor sit amet, consecte adipisicing elit sed do eiusmod tempor incididunt.</p>
            </div>
          </div>
        </div>
        <div class="contact-info mb-50 wow fadeInRight" data-wow-delay=".3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInRight;">
          <ul>
            <li>
              <div class="contact-icon">
                <i class="ti-headphone"></i>
              </div>
              <div class="contact-text">
                <h5>Call Us</h5>
                <span>+0123456789</span>
              </div>
            </li>
            <li>
              <div class="contact-icon">
                <i class="ti-email"></i>
              </div>
              <div class="contact-text">
                <h5>Email Us</h5>
                <span>support@gmail.com</span>
              </div>
            </li>
            <li>
              <div class="contact-icon">
                <i class="ti-location-pin"></i>
              </div>
              <div class="contact-text">
                <h5>Location</h5>
                <span>123 Business Avenue, Hoston, USA</span>
              </div>
            </li>
          </ul>
        </div>
      </div>
      <div class="col-xl-7 col-lg-6 col-md-10 offset-md-1 ml-md-auto">
        <div class="events-details-form faq-area-form mb-30 p-0">

          <?php

          if(isset($_POST['submit'])){

            $name=htmlentities($_POS['name'],ENT_QUOTES);
            $phone=$_POST['phone'];
            $email=$_POST['email'];
            $subject=$_POST['subject'];
            $message=$_POST['message'];
            $msg='Name:'.$name.'\n'.'Phone:'.$phone.'\n';
            if(!empty($name)){
              $insert="INSERT INTO contactus(con_name,con_phone,con_email,con_subject,con_message)
              VALUES('$name','$phone','$email','$subject','$message')";

              if(mysqli_query($con,$insert)){
                //mail("shahi@gmail.com","Website Contact Us Message",$msg);
                echo "Message send successfully";
              }
              else {
                echo "Message send failed!";
              }
            }
            else {
              echo "please enter your name!";
            }
          }

          ?>

          <form action="" method="post" >
            <div class="row">
              <div class="col-xl-8">
                <div class="events-form-title mb-25">
                  <h2>Do You Have Any Questions</h2>
                </div>
              </div>
              <div class="col-xl-6 col-lg-6 col-md-6">
                <input placeholder="Name :" type="text" name="name">
              </div>
              <div class="col-xl-6 col-lg-6 col-md-6">
                <input placeholder="Phone :" type="text" name="phone">
              </div>
              <div class="col-xl-6 col-lg-6 col-md-6">
                <input placeholder="Email :" type="email" name="email">
              </div>
              <div class="col-xl-6 col-lg-6 col-md-6">
                <input placeholder="Subject :" type="text" name="subject">
              </div>
              <div class="col-xl-12">
                <textarea cols="30" rows="10" placeholder="Message :" name="message"></textarea>
              </div>
              <div class="col-xl-12">
                <div class="faq-form-btn events-form-btn">
                  <button type="submit" name="submit" class="btn m-0">submit now</button>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- courses end -->
<!-- map start -->
<div class="map-area" style="background-image: url(img/map/contact_us_map.jpg); height: 700px;">

</div>
<!-- map end -->
<?php
get_footer();
?>
