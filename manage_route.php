<?php include 'header.php';?>

 <div class="row">
    <div class="col-lg-12">
        <div class="col-lg-6 col-sx-6">
            <div style="float: left; color: red; background-color: #ccccff; padding: 12px; border-radius: 10px;">Add Route</div>
        </div>
        <div class="col-lg-6 col-sx-6"><a href="Allocate_new_student.php">
                <div style="float: Right; color: #ffffff; background-color: #0044cc; padding: 12px; border-radius: 10px;">View route Details</div></a>
        </div>
    </div>

    <div class="route">
        <div class="col-md-12">
            
            <div class="panel-body">
                
                            <form role="form" action="" method="post" id="schoolregistration">
                                <div class="form-group">
                                    <label>Route name<sum style="color: red;">*</sum>:</label>
                                    <input type="text" name="Rt name" placeholder="Inter Route name" class="form-control"  required>
                                   
                                </div>
                                <div class="form-group">
                                    <label>Sub Route Time<sum style="color: red;">*</sum>:</label>
                                    <textarea class="form-control" name="Sub_route_name_picup" placeholder="Enter sub route name" required></textarea>
                                </div>
                                <div class="form-group">
                                    <label>Distance (one ways)<sum style="color: red;">*</sum>:</label>
                                    <input type="text" class="form-control" name="Distance rt" placeholder="Enter route sdistance(one ways)">KM
                                                                            </select>
                                </div>
                               
                                
                                <div class="form-group">
                                    <label>Description<sum style="color: red;"></sum>:</label>
                                    <textarea class="form-control" name="Description rt" placeholder="Enter route Description" required></textarea>
                                </div>
                                <div class="col-lg-6">
                           
                                    <input type="submit" class="btn btn-lg btn-info btn-block" value="Save">

                                </div>
                  
                           
                                  <div class="col-lg-6">
                           
                                    <input type="submit" class="btn btn-lg btn-danger btn-block" value="Reset">

                                </div>
                                
            </div>
        </div>
    </div>
            
    </div>
        
<?php include 'footer.php';?>