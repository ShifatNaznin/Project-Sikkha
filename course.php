<?php

require_once('functions/function.php');
get_header();
?>
<!-- slider-start -->
<div class="slider-area">
  <div class="page-title">

    <?php
     $sel="SELECT * FROM course_banner ORDER BY course_ban_id DESC LIMIT 0,9";
     $Q=mysqli_query($con,$sel);

     while ($data=mysqli_fetch_assoc($Q)) {
       // code...


     ?>
    <div class="single-slider slider-height slider-height-breadcrumb d-flex align-items-center" style="background-image: url(admin/uploads/<?= $data['course_ban_photo']; ?>);">
      <div class="container">
        <div class="row">
          <div class="col-xl-12">
            <div class="slider-content slider-content-breadcrumb text-center">
              <h1 class="white-color f-700"><?= $data['course_ban_title']; ?></h1>
              <nav class="text-center" aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Our Course</li>
                </ol>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </div>
  <?php } ?>
  </div>
</div>
<!-- slider-end -->
<!-- courses start -->
<div class="courses-area courses-bg-height gray-bg pt-100 pb-70">
  <div class="container">
    <div class="courses-list">
      <div class="row">
        <?php
         $sel="SELECT * FROM course_details ORDER BY course_det_id DESC LIMIT 0,9";
         $Q=mysqli_query($con,$sel);

         while ($data=mysqli_fetch_assoc($Q)) {
           // code...


         ?>
        <div class="col-xl-4 col-lg-4 col-md-6">

          <div class="courses-wrapper course-radius-none mb-30">
            <div class="courses-thumb">
              <a href="course_details.html"><img height="230" width="370" src="admin/uploads/<?= $data['course_det_background'];?>" alt=""></a>
            </div>
            <div class="courses-author">
              <img   height="59" width="61" src="admin/uploads/<?= $data['course_det_photo'];?>" alt="">
            </div>
            <div class="course-main-content clearfix">
              <div class="courses-content">
                <div class="courses-category-name">
                  <span>
                    <a href="#"><?= $data['course_det_name']; ?></a>
                  </span>
                </div>
                <div class="courses-heading">
                  <h1><a href="course_details.html"><?= $data['course_det_title']; ?></a></h1>
                </div>
                <div class="courses-para">
                  <p><?= $data['course_det_subtitle']; ?></p>
                </div>
              </div>
            </div>
            <div class="courses-wrapper-bottom clearfix">
              <div class="courses-icon d-flex f-left">
                <div class="courses-single-icon">
                  <span class="ti-user"></span>
                  <span class="user-number">35</span>
                </div>
                <div class="courses-single-icon">
                  <span class="ti-heart"></span>
                  <span class="user-number">35</span>
                </div>
              </div>
              <div class="courses-button f-right">
                <a href="course_details.html">View Details</a>
              </div>
            </div>
          </div>

        </div>
        <?php } ?>

      <!-- <div class="row"> -->
        <div class="col-xl-12">
          <div class="single-courses-btn text-center mt-15 mb-30">
            <button class="btn black-border">View all course</button>
          </div>
        </div>
      <!-- </div> -->
    </div>
  </div>
</div>
</div>
<!-- courses end -->
<?php
get_footer();
?>
