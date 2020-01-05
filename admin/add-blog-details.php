<?php
    require_once('functions/function.php');
    needLogged();
    if($_SESSION['role']==1){
    get_header();
    get_sidebar();

    if(!empty($_POST)){
          $btitle=$_POST['btitle'];
          $bsubtitle=$_POST['bsubtitle'];
          $bdate=$_POST['bdate'];
          $photo=$_FILES['photo'];

          $photoName="banner_".time().'_'.rand(100000,1000000).'.'.pathinfo($photo['name'],PATHINFO_EXTENSION);

         $insert="INSERT INTO blog_details(blog_det_title, 	blog_det_subtitle, 	blog_det_date,blog_det_photo  ) VALUES('$btitle','$bsubtitle','$bdate','$photoName')";
         if(mysqli_query($con,$insert)){

          move_uploaded_file($photo['tmp_name'],'uploads/'.$photoName);
           echo "blog Information Uploaded";
         }
         else{
           echo "blog Upload failed!";
         }

}

?>
    <div class="col-md-12">
    	<form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
    	<div class="panel panel-primary">
            <div class="panel-heading">
                <div class="col-md-9 heading_title">
                  Add blog Detalis
                 </div>
                 <div class="col-md-3 text-right">
                 	<a href="all-blog-details.php" class="btn btn-sm btn btn-primary"><i class="fa fa-th"></i> All blog Details</a>
                </div>
                <div class="clearfix"></div>
            </div>
          <div class="panel-body">
              <div class="form-group">
                <label for="" class="col-sm-3 control-label">Blog Title</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" name="btitle">
                </div>
              </div>
              <div class="form-group">
                <label for="" class="col-sm-3 control-label">Blog Subtitle</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" name="bsubtitle">
                </div>
              </div>

              <div class="form-group">
                <label for="" class="col-sm-3 control-label">Blog Date</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" name="bdate">
                </div>
              </div>

            
              <div class="form-group">
                <label for="" class="col-sm-3 control-label">blog Photo</label>
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
