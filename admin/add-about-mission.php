<?php
    require_once('functions/function.php');
    needLogged();
    if($_SESSION['role']==1){
    get_header();
    get_sidebar();

    if(!empty($_POST)){
          $mtitle=$_POST['mtitle'];
          $msubtitle=$_POST['msubtitle'];
          $mphoto=$_FILES['mphoto'];
          $mphotoName="banner_".time().'_'.rand(100000,1000000).'.'.pathinfo($mphoto['name'],PATHINFO_EXTENSION);

         $insert="INSERT INTO about_mission(about_mis_title, 	about_mis_subtitle,about_mis_photo,about_mis_title, 	about_mis_subtitle,about_mis_photo ) VALUES('$title','$subtitle','$photoName','$mtitle','$msubtitle','$mphotoName')";
         if(mysqli_query($con,$insert)){
          move_uploaded_file($photo['tmp_name'],'uploads/'.$photoName);
          move_uploaded_file($mphoto['tmp_name'],'uploads/'.$mphotoName);

           echo "About Information Uploaded";
         }
         else{
           echo "About Upload failed!";
         }

}

?>
    <div class="col-md-12">
    	<form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
    	<div class="panel panel-primary">
            <div class="panel-heading">
                <div class="col-md-9 heading_title">
                  Add About misalis
                 </div>
                 <div class="col-md-3 text-right">
                 	<a href="all-about-mission.php" class="btn btn-sm btn btn-primary"><i class="fa fa-th"></i> All About mission</a>
                </div>
                <div class="clearfix"></div>
            </div>
          <div class="panel-body">
            
              <div class="form-group">
                <label for="" class="col-sm-3 control-label">About Mission Title</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" name="mtitle">
                </div>
              </div>

              <div class="form-group">
                <label for="" class="col-sm-3 control-label">About Mission Subtitle</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" name="msubtitle">
                </div>
              </div>

              <div class="form-group">
                <label for="" class="col-sm-3 control-label">About Mission Photo</label>
                <div class="col-sm-8">
                  <input type="file" name="mphoto" onchange="readURL_two(this);" >
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
