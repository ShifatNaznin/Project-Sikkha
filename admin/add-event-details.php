<?php
    require_once('functions/function.php');
    needLogged();
    if($_SESSION['role']==1){
    get_header();
    get_sidebar();

    if(!empty($_POST)){
          $ename=$_POST['ename'];
          $esubtitle=$_POST['esubtitle'];
          $edate=$_POST['edate'];
          $emonth=$_POST['emonth'];
          $etime=$_POST['etime'];
          $espeaker=$_POST['espeaker'];
          $photo=$_FILES['photo'];

          $photoName="banner_".time().'_'.rand(100000,1000000).'.'.pathinfo($photo['name'],PATHINFO_EXTENSION);

         $insert="INSERT INTO event_details(event_det_name, 	event_det_subtitle, 	event_det_date, event_det_month, 	event_det_time,	event_det_speaker, 	event_det_photo  ) VALUES('$ename','$esubtitle','$edate','$emonth','$etime','$espeaker','$photoName')";
         if(mysqli_query($con,$insert)){

          move_uploaded_file($photo['tmp_name'],'uploads/'.$photoName);
           echo "Event Information Uploaded";
         }
         else{
           echo "Event Upload failed!";
         }

}

?>
    <div class="col-md-12">
    	<form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
    	<div class="panel panel-primary">
            <div class="panel-heading">
                <div class="col-md-9 heading_title">
                  Add Event Detalis
                 </div>
                 <div class="col-md-3 text-right">
                 	<a href="all-event-details.php" class="btn btn-sm btn btn-primary"><i class="fa fa-th"></i> All Event Details</a>
                </div>
                <div class="clearfix"></div>
            </div>
          <div class="panel-body">
              <div class="form-group">
                <label for="" class="col-sm-3 control-label">Event Name</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" name="ename">
                </div>
              </div>
              <div class="form-group">
                <label for="" class="col-sm-3 control-label">Event Subtitle</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" name="esubtitle">
                </div>
              </div>

              <div class="form-group">
                <label for="" class="col-sm-3 control-label">Event Date</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" name="edate">
                </div>
              </div>

              <div class="form-group">
                <label for="" class="col-sm-3 control-label">Event Month</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" name="emonth">
                </div>
              </div>

              <div class="form-group">
                <label for="" class="col-sm-3 control-label">Event Time</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" name="etime">
                </div>
              </div>

              <div class="form-group">
                <label for="" class="col-sm-3 control-label">Event Speaker</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" name="espeaker">
                </div>
              </div>

              <div class="form-group">
                <label for="" class="col-sm-3 control-label">Event Photo</label>
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
