<?php
require_once('functions/function.php');
get_header();
?>
<!-- slider-start -->
<div class="slider-area">
  <div class="page-title">
    <?php

      $sel="SELECT * FROM about_banner ORDER BY about_ban_id DESC LIMIT 0,1";
      $Q=mysqli_query($con,$sel);
      while ($banner=mysqli_fetch_assoc($Q)) {
        // code...


     ?>
    <div class="single-slider slider-height slider-height-breadcrumb d-flex align-items-center" style="background-image: url(admin/uploads/<?= $banner['about_ban_photo'];  ?>);">
      <div class="container">
        <div class="row">
          <div class="col-xl-12">
            <div class="slider-content slider-content-breadcrumb text-center">
              <h1 class="white-color f-700"><?= $banner['about_ban_title']; ?></h1>
              <nav class="text-center" aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page">About Us</li>
                </ol>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php     } ?>
  </div>
</div>
<!-- slider-end -->
<!-- about start -->
<div id="about" class="about-area pt-100 pb-70">
  <div class="container">

    <div class="row">

      <?php

        $sel="SELECT * FROM about_details ORDER BY about_det_id DESC LIMIT 0,1";
        $Q=mysqli_query($con,$sel);
        while ($banner=mysqli_fetch_assoc($Q)) {
          // code...


       ?>

      <div class="col-xl-7 col-lg-7">

        <div class="about-img mb-55">

          <img height="551" width="670" src="admin/uploads/<?= $banner['about_det_photo'];  ?>" alt="">
        </div>

        <div class="about-title-section about-title-section-2 mb-30">
          <h1><?= $banner['about_det_title'] ?></h1>
          <p><?= $banner['about_det_subtitle'] ?></p>
        </div>
      </div>
    <?php } ?>
    <?php

      $sel="SELECT * FROM about_mission ORDER BY about_mis_id DESC LIMIT 0,1";
      $Q=mysqli_query($con,$sel);
      while ($banner=mysqli_fetch_assoc($Q)) {
        // code...


     ?>
      <div class="col-xl-5 col-lg-5">
        <div class="about-img mb-55">
          <img height="551" width="470" src="admin/uploads/<?= $banner['about_mis_photo'];  ?>" alt="">
        </div>
        <div class="about-title-section about-title-section-2 mb-30">
          <h1><?= $banner['about_mis_title'] ?></h1>
          <p><?= $banner['about_mis_subtitle'] ?></p>
        </div>
      </div>
    <?php } ?>
    </div>


    <div class="row mt-60">
      <?php

        $sel="SELECT * FROM about_uni_banner ORDER BY uni_ban_id DESC LIMIT 0,1";
        $Q=mysqli_query($con,$sel);
        while ($banner=mysqli_fetch_assoc($Q)) {
          // code...


       ?>
      <div class="col-xl-12">
        <div class="university-banner mb-30">
        <img height="538" width="1170" src="admin/uploads/<?= $banner['uni_ban_photo'];  ?>" alt="">
        </div>
      </div>
    <?php } ?>
    </div>
  </div>
</div>
<!-- about end -->

<!-- counter start -->
<div class="counter-area primary-bg">
  <div class="container pt-90 pb-65">
    <div class="row">
      <div class="col-xl-3 col-lg-3 col-md-3">
        <div class="couter-wrapper couter-wrapper-2 mb-30 text-center">
          <img src="img/counter/counter_icon1.png" alt="">
          <span class="counter">10532</span>
          <h3>Satisfied Students</h3>
        </div>
      </div>
      <div class="col-xl-3 col-lg-3 col-md-3">
        <div class="couter-wrapper couter-wrapper-2 mb-30 text-center">
          <img src="img/counter/counter_icon2.png" alt="">
          <span class="counter">7985</span>
          <h3>Courses Complated</h3>
        </div>
      </div>
      <div class="col-xl-3 col-lg-3 col-md-3">
        <div class="couter-wrapper couter-wrapper-2 mb-30 text-center">
          <img src="img/counter/counter_icon3.png" alt="">
          <span class="counter">5382</span>
          <h3>Satisfied Students</h3>
        </div>
      </div>
      <div class="col-xl-3 col-lg-3 col-md-3">
        <div class="couter-wrapper couter-wrapper-2 mb-30 text-center">
          <img src="img/counter/counter_icon4.png" alt="">
          <span class="counter">354</span>
          <h3>Expert Advisors</h3>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- counter end -->
<!-- team start -->
<div class="team-area pt-95 pb-70">
  <div class="container">
    <?php
    $sel="SELECT * FROM about_advisor_title ORDER BY about_adv_id DESC LIMIT 0,1";
    $Q=mysqli_query($con,$sel);
    while($data=mysqli_fetch_assoc($Q)){


   ?>
    <div class="row">
      <div class="col-xl-6 offset-xl-3 col-lg-8 offset-lg-2 col-md-10 offset-md-1">
        <div class="section-title mb-50 text-center">
          <div class="section-title-heading mb-20">
            <h1 class="primary-color"><?= $data['about_adv_title'];?></h1>
          </div>
          <div class="section-title-para">
            <p class="gray-color"><?= $data['about_adv_subtitle'];?></p>
          </div>
        </div>
      </div>
    </div>
  <?php }?>
    <div class="team-list">
      <div class="row">
        <?php
        $sel="SELECT * FROM about_adv_details ORDER BY about_all_adv_id DESC LIMIT 0,4";
        $Q=mysqli_query($con,$sel);
        while($data=mysqli_fetch_assoc($Q)){


       ?>
        <div class="col-xl-3 col-lg-3 col-md-6">
          <div class="team-wrapper mb-30">
            <div class="team-thumb">
              <img width="270" height="335" src="admin/uploads/<?= $data['about_all_adv_photo'];  ?>" alt="">
            </div>
            <div class="team-social-info text-center">
              <div class="team-social-para">
                <p><?= $data['about_all_adv_details'];?></p>
              </div>
              <div class="team-social-icon-list">
                <ul>
                  <li><a href="#"><span class="ti-facebook"></span></a></li>
                  <li><a href="#"><span class="ti-twitter-alt"></span></a></li>
                  <li><a href="#"><span class="ti-google"></span></a></li>
                  <li><a href="#"><span class="ti-linkedin"></span></a></li>
                </ul>
              </div>
            </div>
            <div class="team-teacher-info text-center">
              <h1><?= $data['about_all_adv_name'];?></h1>
              <h2><?= $data['about_all_adv_department'];?></h2>
            </div>
          </div>
        </div>
      <?php } ?>
      </div>
    </div>
  </div>
</div>
<!-- team end -->
<!-- testimonials start -->
<div class="testimonilas-area pt-100 pb-90 gray-bg">
  <div class="container">

    <div class="row">
      <?php
        $sel="SELECT * FROM about_student ORDER BY about_stud_id DESC LIMIT 0,1";
        $Q=mysqli_query($con,$sel);
        while ($data=mysqli_fetch_assoc($Q)) {

        ?>
      <div class="col-xl-6 offset-xl-3 col-lg-8 offset-lg-2 col-md-10 offset-md-1">

        <div class="section-title mb-50 text-center">
          <div class="section-title-heading mb-20">
            <h1 class="primary-color"><?= $data['about_stud_title']; ?></h1>
          </div>
          <div class="section-title-para">
            <p class="gray-color"><?= $data['about_stud_subtitle']; ?></p>
          </div>
        </div>

      </div>
<?php   } ?>
    </div>

    <div class="testimonilas-list">

      <div class="row testimonilas-active">
        <?php
          $sel="SELECT * FROM about_stud_details ORDER BY about_all_stud_id DESC";
          $Q=mysqli_query($con,$sel);
          while ($data=mysqli_fetch_assoc($Q)) {
            // code...


          ?>
        <div class="col-xl-12">

          <div class="testimonilas-wrapper ">
            <div class="testimonilas-heading d-flex">
              <div class="testimonilas-author-thumb">
                <img src="admin/uploads/<?= $data['about_all_stud_photo'];  ?>" alt="">
              </div>
              <div class="testimonilas-author-title">
                <h1><?= $data['about_all_stud_name'];  ?></h1>
                <h2><?= $data['about_all_stud_department'];  ?></h2>
              </div>
            </div>
            <div class="testimonilas-para">
              <p><?= $data['about_all_stud_details'];  ?></p>
            </div>
            <div class="testimonilas-rating">
              <ul>
                <li><span class="ti-star"></span></li>
                <li><span class="ti-star"></span></li>
                <li><span class="ti-star"></span></li>
                <li><span class="ti-star"></span></li>
                <li><span class="ti-star"></span></li>
              </ul>
            </div>
          </div>

        </div>
  <?php } ?>
      </div>

    </div>
  </div>
</div>
<!-- testimonials end -->
<?php
get_footer();
?>
