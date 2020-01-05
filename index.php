  <?php
  require_once('functions/function.php');
  get_header();
  ?>
  <!-- slider-start -->
  <div class="slider-area pos-relative">
    <div class="slider-active">
      <?php

      $sel="SELECT * FROM cs_banner ORDER BY ban_id DESC LIMIT 0,3";
      $Q=mysqli_query($con,$sel);
      while ($banner=mysqli_fetch_assoc($Q)) {
        // code...


        ?>
        <div class="single-slider slider-height d-flex align-items-center justify-content-center" style="background-image: url(admin/uploads/<?= $banner['ban_photo'];  ?>);">
          <div class="container">
            <div class="row">
              <div class="col-xl-9 col-md-12">
                <div class="slider-content slider-content-2">
                  <h1 class="white-color f-700" data-animation="fadeInUp" data-delay=".2s"><?= $banner['ban_title']; ?></h1>
                  <p data-animation="fadeInUp" data-delay=".4s"><?= $banner['ban_subtitle'] ?></p>
                  <a href="<?= $banner['ban_url']; ?>" class="theme-btn" data-animation="fadeInUp" data-delay=".6s"><span class="btn-text"><?= $banner['ban_button']; ?></a>
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
        <?php

        $sel="SELECT * FROM sikkha_details ORDER BY sikkha_det_id DESC LIMIT 0,1";
        $Q=mysqli_query($con,$sel);
        while ($data=mysqli_fetch_assoc($Q)) {
          // code...


          ?>
        <div class="row">
          <div class="col-xl-7 col-lg-7">
            <div class="about-title-section mb-30">
              <h1><?= $data['sikkha_det_title']; ?></h1>
              <p><?= $data['sikkha_det_subtitle']; ?></p>
              <!-- <p>Horem ipsum dolor sit amet consectetur adipisicing elit, sed do eiusmod temin cididunt ut labore et dolore magna aliqua Ut enim ad minim veniam,quis nostrude</p> -->
              <a href="<?= $data['sikkha_det_url']; ?>" class="theme-btn blue-bg-border mt-20"><span class="btn-text"><?= $data['sikkha_det_button']; ?></span></a>
            </div>
          </div>
          <div class="col-xl-5 col-lg-5">
            <div class="about-right-img mb-30">
              <img  height="413" width="422" src="admin/uploads/<?= $data['sikkha_det_photo'];  ?>" alt="">
            </div>
          </div>
        </div>
      <?php } ?>
        <div class="row pt-65">
          <?php

          $i=1;
          $sel="SELECT * FROM cs_feature ORDER BY feat_id DESC LIMIT 0,3";
          $Q=mysqli_query($con,$sel);
          while ($feature=mysqli_fetch_assoc($Q)) {
            // code...


            ?>
            <div class="col-xl-4 col-lg-4 col-md-6">
              <div class="feature-wrapper mb-30">
                <div class="feature-title-heading">
                  <h3><?= $feature['feat_title']; ?></h3>
                  <span>0<?= $i++; ?></span>
                </div>
                <div class="feature-text">
                  <p><?= $feature['feat_subtitle']; ?></p>
                </div>
              </div>
            </div>
          <?php  } ?>

        </div>
      </div>
    </div>
    <!-- about end -->
    <!-- courses start -->
    <div id="courses" class="courses-area courses-bg-height pt-100 pb-70" style="background-image: url(img/courses/courses_bg.png);">
      <div class="container">
        <div class="row">
          <?php
           $sel="SELECT * FROM  home_course_title ORDER BY home_cour_id DESC LIMIT 0,1";
           $Q=mysqli_query($con,$sel);
           while ($data=mysqli_fetch_assoc($Q)) {
             // code...

           ?>
          <div class="col-xl-6 offset-xl-3 col-lg-8 offset-lg-2 col-md-10 offset-md-1">
            <div class="section-title mb-50 text-center">
              <div class="section-title-heading mb-20">
                <h1 class="white-color"><?= $data['home_cour_title']; ?></h1>
              </div>
              <div class="section-title-para">
                <p class="white-color"><?= $data['home_cour_subtitle']; ?></p>
              </div>
            </div>
          </div>
          <?php } ?>
        </div>
        <div class="courses-list">
          <div class="row courses-active">
            <?php
            $sel="SELECT * FROM course_details ORDER BY course_det_id DESC ";
            $Q=mysqli_query($con,$sel);

            while ($data=mysqli_fetch_assoc($Q)) {
              // code...


              ?>
              <div class="col-xl-12">

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
          </div>
        </div>
      </div>
    </div>
    <!-- courses end -->
    <!-- team start -->
    <div class="team-area pt-95 pb-70">
      <div class="container">
        <div class="row">
          <div class="col-xl-6 offset-xl-3 col-lg-8 offset-lg-2 col-md-10 offset-md-1">
            <?php
            $sel="SELECT * FROM about_advisor_title ORDER BY about_adv_id DESC LIMIT 0,1";
            $Q=mysqli_query($con,$sel);
            while($data=mysqli_fetch_assoc($Q)){


           ?>
            <div class="section-title mb-50 text-center">
              <div class="section-title-heading mb-20">
                <h1 class="primary-color"><?= $data['about_adv_title'];?></h1>
              </div>
              <div class="section-title-para">
                <p class="gray-color"><?= $data['about_adv_subtitle'];?></p>
              </div>
            </div>
          <?php } ?>
          </div>
        </div>
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
    <!-- events start -->
    <div id="events" class="events-area events-bg-height pt-100 pb-95" style="background-image: url(img/courses/courses_bg.png)">
      <div class="container">
        <div class="row">
          <?php
          $sel="SELECT * FROM home_event_title ORDER BY home_event_id DESC LIMIT 0,1";
          $Q=mysqli_query($con,$sel);
          while($data=mysqli_fetch_assoc($Q)){


         ?>
          <div class="col-xl-6 offset-xl-3 col-lg-8 offset-lg-2 col-md-10 offset-md-1">
            <div class="section-title mb-50 text-center">
              <div class="section-title-heading mb-20">
                <h1 class="white-color"><?= $data['home_event_title']; ?></h1>
              </div>
              <div class="section-title-para">
                <p class="white-color"><?= $data['home_event_subtitle']; ?></p>
              </div>
            </div>
          </div>
        <?php } ?>
        </div>
        <div class="events-list mb-30">
          <div class="row">
            <?php

            $sel="SELECT * FROM event_details ORDER BY event_det_id ASC LIMIT 0,2";
            $Q=mysqli_query($con,$sel);
            while ($data=mysqli_fetch_assoc($Q)) {

              ?>
            <div class="col-xl-6 col-lg-6">

              <div class="single-events mb-30">

                <div class="events-wrapper">
                  <div class="events-inner d-flex">
                    <div class="events-thumb">
                      <img height="212" width="200" src="admin/uploads/<?= $data['event_det_photo']; ?>" alt="">
                    </div>
                    <div class="events-text white-bg">
                      <div class="event-text-heading mb-20">
                        <div class="events-calendar text-center f-left">
                          <span class="date"><?= $data['event_det_date']; ?></span>
                          <span class="month"><?= $data['event_det_month']; ?></span>
                        </div>
                        <div class="events-text-title clearfix">
                          <a href="#">
                            <h4><?= $data['event_det_name']; ?></h4>
                          </a>
                          <div class="time-area">
                            <span class="ti-time"></span>
                            <span class="published-time"><?= $data['event_det_time']; ?></span>
                          </div>
                        </div>
                      </div>
                      <div class="events-para">
                        <p><?= substr($data['event_det_subtitle'],0,60); ?></p>
                      </div>
                      <div class="events-speaker">
                        <h2>Speaker : <span><?= $data['event_det_speaker']; ?></span></h2>
                      </div>
                    </div>
                  </div>
                </div>

              </div>


            </div>
            <?php } ?>

            <?php

            $sel="SELECT * FROM event_details ORDER BY event_det_id DESC LIMIT 0,2";
            $Q=mysqli_query($con,$sel);
            while ($data=mysqli_fetch_assoc($Q)) {

              ?>
            <div class="col-xl-6 col-lg-6">

              <div class="single-events mb-30">

                <div class="events-wrapper">
                  <div class="events-inner d-flex">
                    <div class="events-thumb">
                      <img height="212" width="200" src="admin/uploads/<?= $data['event_det_photo']; ?>" alt="">
                    </div>
                    <div class="events-text white-bg">
                      <div class="event-text-heading mb-20">
                        <div class="events-calendar text-center f-left">
                          <span class="date"><?= $data['event_det_date']; ?></span>
                          <span class="month"><?= $data['event_det_month']; ?></span>
                        </div>
                        <div class="events-text-title clearfix">
                          <a href="#">
                            <h4><?= $data['event_det_name']; ?></h4>
                          </a>
                          <div class="time-area">
                            <span class="ti-time"></span>
                            <span class="published-time"><?= $data['event_det_time']; ?></span>
                          </div>
                        </div>
                      </div>
                      <div class="events-para">
                        <p><?= substr($data['event_det_subtitle'],0,60); ?></p>
                      </div>
                      <div class="events-speaker">
                        <h2>Speaker : <span><?= $data['event_det_speaker']; ?></span></h2>
                      </div>
                    </div>
                  </div>
                </div>

              </div>


            </div>
            <?php } ?>
          </div>
        </div>
        <div class="events-view-btn">
          <div class="row">
            <div class="col-xl-12">
              <div class="view-all-events text-center">
                <button class="yewello-btn">view all events<span>&rarr;</span></button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- events end -->
    <!-- testimonials start -->
    <div class="testimonilas-area pt-100 pb-90">
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
        <?php } ?>
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
              <div class="testimonilas-wrapper mb-110">
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
    <!-- video start -->
    <div class="video-area">
      <div class="container">
        <div class="row">
          <div class="col-xl-12">
            <div class="video-wrapper text-center">
              <div class="video-content">
                <a class="popup-video" href="https://www.youtube.com/watch?v=i8nLrvcNcrg"><img src="img/video/play_icon.png" alt=""></a>
                <span>Watch Our Latest Video</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- video end -->
    <!-- counter start -->
    <div class="counter-area">
      <div class="container pt-90 pb-65">
        <div class="row">
          <div class="col-xl-3 col-lg-3 col-md-3">
            <div class="couter-wrapper mb-30 text-center">
              <img src="img/counter/counter_icon1.png" alt="">
              <span class="counter">10532</span>
              <h3>Satisfied Students</h3>
            </div>
          </div>
          <div class="col-xl-3 col-lg-3 col-md-3">
            <div class="couter-wrapper mb-30 text-center">
              <img src="img/counter/counter_icon2.png" alt="">
              <span class="counter">7985</span>
              <h3>Courses Complated</h3>
            </div>
          </div>
          <div class="col-xl-3 col-lg-3 col-md-3">
            <div class="couter-wrapper mb-30 text-center">
              <img src="img/counter/counter_icon3.png" alt="">
              <span class="counter">5382</span>
              <h3>Satisfied Students</h3>
            </div>
          </div>
          <div class="col-xl-3 col-lg-3 col-md-3">
            <div class="couter-wrapper mb-30 text-center">
              <img src="img/counter/counter_icon4.png" alt="">
              <span class="counter">354</span>
              <h3>Expert Advisors</h3>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- counter end -->
    <!-- latest_news start -->
    <div id="blog" class="latest_news-area gray-bg pt-100 pb-70">
      <div class="container">
        <div class="row">
          <?php
            $sel="SELECT * FROM home_news_title ORDER BY home_news_id DESC LIMIT 0,1";
            $Q=mysqli_query($con,$sel);
            while ($data=mysqli_fetch_assoc($Q)) {

            ?>
          <div class="col-xl-6 offset-xl-3 col-md-8 offset-md-2">
            <div class="section-title mb-50 text-center">
              <div class="section-title-heading mb-20">
                <h1 class="primary-color"><?= $data['home_news_title']; ?></h1>
              </div>
              <div class="section-title-para">
                <p class="gray-color"><?= $data['home_news_subtitle']; ?></p>
              </div>
            </div>
          </div>
        <?php } ?>
        </div>
        <div class="row">
          <?php

          $sel="SELECT * FROM blog_details ORDER BY blog_det_id ASC LIMIT 0,3";
          $Q=mysqli_query($con,$sel);
          while ($data=mysqli_fetch_assoc($Q)) {

            ?>
          <div class="col-xl-4 col-lg-4 col-md-6">

            <div class="blog-wrapper mb-30">
              <div class="blog-thumb mb-25">
                <a href="news_details.html"><img height="260" width="370" src="admin/uploads/<?= $data['blog_det_photo']; ?>" alt=""></a>
                <span class="blog-category">news</span>
              </div>
              <div class="blog-content">
                <div class="blog-meta">
                  <span><?= $data['blog_det_date']; ?></span>
                </div>
                <h5><a href="news_details.html"><?= $data['blog_det_title']; ?></a></h5>
                <p><?= $data['blog_det_subtitle']; ?></p>
                <div class="read-more-btn">
                  <button>Read more</button>
                </div>
              </div>
            </div>
          </div>
          <?php } ?>
          <!-- <div class="col-xl-4 col-lg-4 col-md-6">
            <div class="blog-wrapper mb-30">
              <div class="blog-thumb mb-25">
                <a href="news_details.html"><img src="img/blog/blog_thumb_2.jpg" alt=""></a>
                <span class="blog-category">news</span>
              </div>
              <div class="blog-content">
                <div class="blog-meta">
                  <span>Auguest 25, 2018</span>
                </div>
                <h5><a href="news_details.html">Education gives us a knowledge of the world around us and changes </a></h5>
                <p>Belis nisl adipiscing sapien sed malesu diame lacus eget erat Cras mollis scele.</p>
                <div class="read-more-btn">
                  <button>Read more</button>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-4 col-lg-4 col-md-6">
            <div class="blog-wrapper mb-30">
              <div class="blog-thumb mb-25">
                <a href="news_details.html"><img src="img/blog/blog_thumb_3.jpg" alt=""></a>
                <span class="blog-category">news</span>
              </div>
              <div class="blog-content">
                <div class="blog-meta">
                  <span>Auguest 25, 2018</span>
                </div>
                <h5><a href="news_details.html">One thing I wish I can do is, to provide education for all child left behind </a></h5>
                <p>Belis nisl adipiscing sapien sed malesu diame lacus eget erat Cras mollis scele.</p>
                <div class="read-more-btn">
                  <button>Read more</button>
                </div>
              </div>
            </div>
          </div> -->
        </div>
      </div>
    </div>
    <!-- latest_blog end -->
    <?php

    get_footer();

    ?>
