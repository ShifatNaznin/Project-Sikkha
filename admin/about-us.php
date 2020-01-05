<?php
    require_once('functions/function.php');
    needLogged();
    get_header();
    get_sidebar();
?>
    <div class="col-md-12">
    	<div class="panel panel-primary">
            <div class="panel-heading">
                <div class="col-md-9 heading_title">
                    All About Us Information
                 </div>
                 <div class="col-md-3 text-right">
                <a href="all-user.php" class="btn btn-sm btn btn-primary"><i class="fa fa-plus-square fa-lg"></i> Update About Us</a>
              </div>
                <div class="clearfix"></div>
            </div>
          <div class="panel-body">
              <table class="table table-responsive table-striped table-hover table_cus">
              		<thead class="table_head">
                     <th>About Us Feature</th>
                	</thead>
                    <tbody>

                    	<tr>
                        	<td>Banner
                            <div class="table_btn" >

                          	<a href="add-about-banner.php" class="btn btn-sm btn btn-primary" float="right">
                                   <i class="fa fa-plus-circle"></i> Add About Banner</a>
                           	<a href="all-about-banner.php" class="btn btn-sm btn btn-primary"><i class="fa fa-th"></i> All About Banner</a>
                              </div>
                          </td>
                        </tr>

                        <tr>
                        	<td>About Details
                            <div class="table_btn" >

                          	<a href="add-about-details.php" class="btn btn-sm btn btn-primary" float="right">
                                   <i class="fa fa-plus-circle"></i> Add About Details</a>
                           	<a href="all-about-details.php" class="btn btn-sm btn btn-primary"><i class="fa fa-th"></i> All About Details</a>
                              </div>
                            </td>
                            </tr>

                            <tr>
                              <td>About Mission
                                <div class="table_btn" >

                                <a href="add-about-mission.php" class="btn btn-sm btn btn-primary" float="right">
                                       <i class="fa fa-plus-circle"></i> Add About Mission</a>
                                <a href="all-about-mission.php" class="btn btn-sm btn btn-primary"><i class="fa fa-th"></i> All About Mission</a>
                                  </div>
                                </td>
                                </tr>

                        <tr>
                          	<td>University Banner
                              <div class="table_btn" >
                              <a href="addabout-university-banner.php" class="btn btn-sm btn btn-primary" float="right">
                                     <i class="fa fa-plus-circle"></i> Add University Banner</a>
                             	<a href="allabout-university-banner.php" class="btn btn-sm btn btn-primary"><i class="fa fa-th"></i> All University Banner</a>
                            </div>
                            </td>
                        </tr>
                        <tr>
                          <td>About Advisors Title/Subtitle
                            <div class="table_btn" >

                            <a href="addabout-advisors-title.php" class="btn btn-sm btn btn-primary" float="right">
                                   <i class="fa fa-plus-circle"></i> Add Advisors Title/Subtitle</a>
                            <a href="allabout-advisors-title.php" class="btn btn-sm btn btn-primary"><i class="fa fa-th"></i> All Advisors Title/Subtitle</a>
                              </div>
                          </td>
                        </tr>
                        	<tr>
                            <td>About Advisors Details
                              <div class="table_btn" >
                              <a href="addabout-advsior-details.php" class="btn btn-sm btn btn-primary" float="right">
                                     <i class="fa fa-plus-circle"></i> Add Advisors Details</a>
                              <a href="allabout-advisor-details.php" class="btn btn-sm btn btn-primary"><i class="fa fa-th"></i> All Advisors Details</a>
                                </div>
                            </td>
                          </tr>
                        	<tr>
                            	<td>About Student Title/Subtitle
                                <div class="table_btn" >

                                <a href="addabout-student-title.php" class="btn btn-sm btn btn-primary" float="right">
                                       <i class="fa fa-plus-circle"></i> Add Student Title/Subtitle</a>
                                <a href="allabout-student-title.php" class="btn btn-sm btn btn-primary"><i class="fa fa-th"></i> All Student Title/Subtitle</a>
                                  </div>
                              </td>
                          </tr>
                        <tr>
                          	<td>About Students Details
                              <div class="table_btn" >
                              <a href="addabout-student-details.php" class="btn btn-sm btn btn-primary" float="right">
                                     <i class="fa fa-plus-circle"></i> Add Student Details</a>
                              <a href="allabout-student-details.php" class="btn btn-sm btn btn-primary"><i class="fa fa-th"></i> All Student Details</a>
                                </div>
                            </td>
                        </tr>

                        </tr>

                    </tbody>
              </table>
          </div>
          <div class="panel-footer">
            <div class="col-md-4">
            	<a href="#" class="btn btn-sm btn-warning">EXCEL</a>
                <a href="#" class="btn btn-sm btn-primary">PDF</a>
                <a href="#" class="btn btn-sm btn-danger">SVG</a>
                <a href="#" class="btn btn-sm btn-success">PRINT</a>
            </div>
            <div class="col-md-4">
            </div>
            <div class="col-md-4 text-right">
            	<nav aria-label="Page navigation">
                  <ul class="pagination pagina_cus">
                    <li>
                      <a href="#" aria-label="Previous">
                        <span aria-hidden="true">&laquo;</span>
                      </a>
                    </li>
                    <li class="active"><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">5</a></li>
                    <li>
                      <a href="#" aria-label="Next">
                        <span aria-hidden="true">&raquo;</span>
                      </a>
                    </li>
                  </ul>
                </nav>
            </div>
            <div class="clearfix"></div>
          </div>
        </div>
    </div><!--col-md-12 end-->
<?php
    get_footer();
?>
