<?php
    require_once('functions/function.php');
    needLogged();
    if($_SESSION['role']==1){
    get_header();
    get_sidebar();

    if(!empty($_POST)){
          $title=$_POST['title'];
          $subtitle=$_POST['subtitle'];
          $photo=$_FILES['photo'];
          $photoName="banner_".time().'_'.rand(100000,1000000).'.'.pathinfo($photo['name'],PATHINFO_EXTENSION);


         $insert="INSERT INTO about_details(about_det_title, 	about_det_subtitle,about_det_photo ) VALUES('$title','$subtitle','$photoName')";
         if(mysqli_query($con,$insert)){
          move_uploaded_file($photo['tmp_name'],'uploads/'.$photoName);


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
                  Add About Detalis
                 </div>
                 <div class="col-md-3 text-right">
                 	<a href="all-about-details.php" class="btn btn-sm btn btn-primary"><i class="fa fa-th"></i> All About Details</a>
                </div>
                <div class="clearfix"></div>
            </div>
          <div class="panel-body">
              <div class="form-group">
                <label for="" class="col-sm-3 control-label">About Title</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" name="title">
                </div>
              </div>

              <div class="form-group">
                <label for="" class="col-sm-3 control-label">About Subtitle</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" name="subtitle">
                </div>
              </div>

              <div class="form-group">
                <label for="" class="col-sm-3 control-label">About Photo</label>
                <div class="col-sm-8">
                  <input type="file" name="photo" onchange="readURL(this);" >
                  <img id="upload_image" width="100" src="images/avatar.png" alt="your image" />
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
