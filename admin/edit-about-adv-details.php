    <?php
    require_once('functions/function.php');
    get_header();
    get_sidebar();

    $id=$_GET['e'];
    $sel="SELECT * FROM about_adv_details WHERE about_all_adv_id='$id'";
    $Q=mysqli_query($con,$sel);
    $data=mysqli_fetch_assoc($Q);

    if(!empty($_POST)){

      $name=$_POST['name'];
      $department=$_POST['department'];
      $details=$_POST['details'];
      $photo=$_FILES['photo'];
      $photoName="banner_".time().'_'.rand(100000,1000000).'.'.pathinfo($photo['name'],PATHINFO_EXTENSION);

        $update="UPDATE about_adv_details SET about_all_adv_name='$name', about_all_adv_department='$department', about_all_adv_details='$details', about_all_adv_photo='$photoName' WHERE about_all_adv_id='$id'";

      if(mysqli_query($con,$update)){
          move_uploaded_file($photo['tmp_name'],'uploads/'.$photoName);

           header('Location:view-about-adv-details.php?v='.$id);

      }
      else {
        echo "Update failed!";
      }
    }
    ?>
    <div class="col-md-12">
      <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
        <div class="panel panel-primary">
          <div class="panel-heading">
            <div class="col-md-9 heading_title">
              Update About Details Information
            </div>
            <div class="col-md-3 text-right">
              <a href="allabout-advisor-details.php" class="btn btn-sm btn btn-primary"><i class="fa fa-th"></i> All Advisor Details</a>
            </div>
            <div class="clearfix"></div>
          </div>
          <div class="panel-body">
            <div class="form-group">
              <label for="" class="col-sm-3 control-label">Name</label>
              <div class="col-sm-8">

                <input type="text" class="form-control" name="name" value="<?= $data['about_all_adv_name'];?>" >
              </div>
            </div>
            <div class="form-group">
              <label for="" class="col-sm-3 control-label">Department</label>
              <div class="col-sm-8">
                <input type="text" class="form-control" name="department" value="<?= $data['about_all_adv_department'];?>">
              </div>
            </div>
            <div class="form-group">
              <label for="" class="col-sm-3 control-label">Details</label>
              <div class="col-sm-8">
                <input type="text" class="form-control" name="details" value="<?= $data['about_all_adv_details'];?>">
              </div>
            </div>
            <div class="form-group">
              <label for="" class="col-sm-3 control-label">Photo</label>
              <div class="col-sm-8">
                <?php
                if(!empty($data['about_all_adv_photo'])){
                  ?>
                  <img id="upload_image" height="50" width="50" src="uploads/<?= $data['about_all_adv_photo'];?>" alt="photo"/>
                  <?php
                }else{
                  ?>
                  <img height="50" src="images/avatar.png" alt="photo"/>
                <?php } ?>

                <input type="file" name="photo" onchange="readURL(this);" >



              </div>
            </div>
      </div>
      <div class="panel-footer text-center">
        <button class="btn btn-sm btn-primary">UPDATE</button>
      </div>
    </div>
    </form>
    </div><!--col-md-12 end-->
    <?php
    get_footer();
    ?>
