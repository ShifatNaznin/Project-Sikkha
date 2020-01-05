<?php

require_once('functions/function.php');
get_header();

?>
<!-- slider-start -->
<div class="slider-area">

  <?php

  $sel="SELECT * FROM event_banner ORDER BY event_ban_id DESC LIMIT 0,1";
  $Q=mysqli_query($con,$sel);
  while ($data=mysqli_fetch_assoc($Q)) {


    ?>
    <div class="pages-title">
      <div class="single-slider slider-height slider-height-breadcrumb d-flex align-items-center" height="600" width="1920" style="background-image: url(admin/uploads/<?= $data['event_ban_photo']; ?>);">
        <div class="container">
          <div class="row">
            <div class="col-xl-12">
              <div class="slider-content slider-content-breadcrumb text-center">
                <h1 class="white-color f-700"><?= $data['event_ban_title']; ?></h1>
                <nav class="text-center" aria-label="breadcrumb">
                  <ol class="breadcrumb justify-content-center">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Our Events</li>
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
<div class="events-area gray-bg pt-100 pb-70">
  <div class="container">
    <div class="events-list">
      <div class="row">
        <?php

        $sel="SELECT * FROM event_details ORDER BY event_det_id DESC LIMIT 0,6";
        $Q=mysqli_query($con,$sel);
        while ($data=mysqli_fetch_assoc($Q)) {

          ?>
          <div class="col-xl-6 offset-xl-0 col-lg-6 offset-lg-0 col-md-10 offset-md-1">
            <div class="single-events mb-30">

              <div class="events-wrapper events-wrapper-padding">


                <div class="events-inner d-flex">
                  <div class="events-thumb">
                    <a href="event_details.html"><img height="154" width="170" src="admin/uploads/<?= $data['event_det_photo']; ?>" alt=""></a>
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
                      <p><?= $data['event_det_subtitle']; ?></p>
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
      <div class="row">
        <div class="col-xl-12 text-center">
          <div class="single-events-btn mt-15 mb-30">
            <nav class="course-pagination mb-30" aria-label="Page navigation example">
              <ul class="pagination justify-content-center">
                <li class="page-item">
                  <a class="page-link" href="#"><span class="ti-angle-left"></span></a>
                </li>
                <li class="page-item active">
                  <a class="page-link" href="#">1</a>
                </li>
                <li class="page-item">
                  <a class="page-link" href="#">2</a>
                </li>
                <li class="page-item">
                  <a class="page-link" href="#">3</a>
                </li>
                <li class="page-item">
                  <a class="page-link" href="#">4</a>
                </li>
                <li class="page-item">
                  <a class="page-link" href="#"><span class="ti-angle-right"></span></a>
                </li>
              </ul>
            </nav>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- courses end -->
<?php
get_footer();
?>
