<?php
    require_once('functions/function.php');
    needLogged();
    if($_SESSION['role']==1){
    get_header();
    get_sidebar();

    if(!empty($_POST)){
          $cname=$_POST['cname'];
          $ctitle=$_POST['ctitle'];
          $csubtitle=$_POST['csubtitle'];
          $banner=$_FILES['banner'];
          $photo=$_FILES['photo'];
          $bannerName="banner_".time().'_'.rand(100000,1000000).'.'.pathinfo($banner['name'],PATHINFO_EXTENSION);
          $photoName="banner_".time().'_'.rand(100000,1000000).'.'.pathinfo($photo['name'],PATHINFO_EXTENSION);

         $insert="INSERT INTO course_details(course_det_name, 	course_det_title, 	course_det_subtitle, 	course_det_background, 	course_det_photo ) VALUES('$cname','$ctitle','$csubtitle','$bannerName','$photoName')";
         if(mysqli_query($con,$insert)){
           move_uploaded_file($banner['tmp_name'],'uploads/'.$bannerName);
          move_uploaded_file($photo['tmp_name'],'uploads/'.$photoName);
           echo "Course Information Uploaded";
         }
         else{
           echo "Course Upload failed!";
         }

}

?>
    <div class="col-md-12">
    	<form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
    	<div class="panel panel-primary">
            <div class="panel-heading">
                <div class="col-md-9 heading_title">
                  Add Course Detalis
                 </div>
                 <div class="col-md-3 text-right">
                 	<a href="all-course-details.php" class="btn btn-sm btn btn-primary"><i class="fa fa-th"></i> All Course Details</a>
                </div>
                <div class="clearfix"></div>
            </div>
          <div class="panel-body">
              <div class="form-group">
                <label for="" class="col-sm-3 control-label">Course Name</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" name="cname">
                </div>
              </div>
              <div class="form-group">
                <label for="" class="col-sm-3 control-label">Course Title</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" name="ctitle">
                </div>
              </div>

              <div class="form-group">
                <label for="" class="col-sm-3 control-label">Course Subtitle</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" name="csubtitle">
                </div>
              </div>

              <div class="form-group">
                <label for="" class="col-sm-3 control-label">Course Banner</label>
                <div class="col-sm-8">
                  <input type="file" name="banner" onchange="readURL(this);" >
                  <img id="upload_image" width="100" src="images/avatar.png" alt="your image" />
                </div>
              </div>
              <div class="form-group">
                <label for="" class="col-sm-3 control-label">Course Photo</label>
                <div class="col-sm-8">
                  <input type="file" name="photo" onchange="readURL_two(this);" >
                  <img id="upload_image_two" width="100" src="images/avatar.png" alt="your image" />
                </div>
              </div>
          </div>
          <div class="panel-footer text-center">
            <button class="btn btn-sm btn-primary">UPLOAD</button>
          </div>
        </div>
        </form>
    </div><!--col-md-12 end-->
<?php
    get_footer();
  }else{
    echo "Invalid! You have no permission visit this page.";
  }
?>
