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
                    All Home Information
                 </div>
                 <div class="col-md-3 text-right">
                <a href="all-user.php" class="btn btn-sm btn btn-primary"><i class="fa fa-plus-square fa-lg"></i> Update Home</a>
              </div>
                <div class="clearfix"></div>
            </div>
          <div class="panel-body">
              <table class="table table-responsive table-striped table-hover table_cus">
              		<thead class="table_head">
                     <th>Home Feature</th>
                	</thead>
                    <tbody>

                    	<tr>
                        	<td>Home Banner
                            <div class="table_btn" >

                          	<a href="add-banner.php" class="btn btn-sm btn btn-primary" float="right">
                                   <i class="fa fa-plus-circle"></i> Add Home Banner</a>
                           	<a href="all-banner.php" class="btn btn-sm btn btn-primary"><i class="fa fa-th"></i> All Home Banner</a>
                              </div>
                          </td>
                        </tr>
                        <tr>
                        	<td>Sikkha Details
                            <div class="table_btn" >

                          	<a href="add-sikkha-details.php" class="btn btn-sm btn btn-primary" float="right">
                                   <i class="fa fa-plus-circle"></i> Add Sikkha Details</a>
                           	<a href="all-sikkha-details.php" class="btn btn-sm btn btn-primary"><i class="fa fa-th"></i> All Sikkha Details</a>
                              </div>
                            </td>
                            </tr>

                        <tr>
                          	<td>Sikkha Feature
                              <div class="table_btn" >
                              <a href="add-feature.php" class="btn btn-sm btn btn-primary" float="right">
                                     <i class="fa fa-plus-circle"></i> Add Sikkha Feature</a>
                             	<a href="all-feature.php" class="btn btn-sm btn btn-primary"><i class="fa fa-th"></i> All Sikkha Feature</a>
                            </div>
                            </td>
                        </tr>
                        <tr>
                          <td>Homes Course Title/Subtitle
                            <div class="table_btn" >

                            <a href="addhome-course-title.php" class="btn btn-sm btn btn-primary" float="right">
                                   <i class="fa fa-plus-circle"></i> Add Home Course Title/Subtitle</a>
                            <a href="allhome-course-title.php" class="btn btn-sm btn btn-primary"><i class="fa fa-th"></i> All Home Course Title/Subtitle</a>
                              </div>
                          </td>
                        </tr>

                        <tr>
                          <td>Homes Event Title/Subtitle
                            <div class="table_btn" >

                            <a href="addhome-event-title.php" class="btn btn-sm btn btn-primary" float="right">
                                   <i class="fa fa-plus-circle"></i> Add Home Event Title/Subtitle</a>
                            <a href="allhome-event-title.php" class="btn btn-sm btn btn-primary"><i class="fa fa-th"></i> All Home Event Title/Subtitle</a>
                              </div>
                          </td>
                        </tr>

                        <tr>
                          <td>Homes Latest News Title/Subtitle
                            <div class="table_btn" >

                            <a href="addhome-news-title.php" class="btn btn-sm btn btn-primary" float="right">
                                   <i class="fa fa-plus-circle"></i> Add Home Latest News Title/Subtitle</a>
                            <a href="allhome-news-title.php" class="btn btn-sm btn btn-primary"><i class="fa fa-th"></i> All Home Latest News Title/Subtitle</a>
                              </div>
                          </td>
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
