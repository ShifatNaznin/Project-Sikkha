  <?php
  require_once('functions/function.php');
  needLogged();
  if($_SESSION['role']==1){
    get_header();
    get_sidebar();

    if(!empty($_POST)){
      $title=$_POST['title'];
      $image=$_FILES['pic'];
      $imageName="banner_".time().'_'.rand(100000,10000000).'.'.pathinfo($image['name'],PATHINFO_EXTENSION);

      $insert="INSERT INTO about_banner(about_ban_title,about_ban_photo)
      VALUES('$title','$imageName')";
      if(mysqli_query($con,$insert)){
        move_uploaded_file($image['tmp_name'],'uploads/'.$imageName);
        echo "Banner Information Uploaded";
      }
      else{
        echo "Banner Upload failed!";
      }

    }

    ?>
    <div class="col-md-12">
      <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
        <div class="panel panel-primary">
          <div class="panel-heading">
            <div class="col-md-9 heading_title">
              About Banner Information
            </div>
            <div class="col-md-3 text-right">
              <a href="all-about-banner.php" class="btn btn-sm btn btn-primary"><i class="fa fa-th"></i> All About Banner</a>
            </div>
            <div class="clearfix"></div>
          </div>
          <div class="panel-body">
            <div class="form-group">
              <label for="" class="col-sm-3 control-label">Banner Title</label>
              <div class="col-sm-8">
                <input type="text" class="form-control" name="title">
              </div>
            </div>
            <div class="form-group">
              <label for="" class="col-sm-3 control-label">Banner Image </label>
              <div class="col-sm-8">
                <input type="file" name="pic" onchange="readURL(this);" >
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
