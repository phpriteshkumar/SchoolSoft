<?php include 'header.php';?>

 <div class="row">
    <div class="col-lg-12">
        <div class="col-lg-6 col-sx-6">
            <div style="float: left; color: red; background-color: #ccccff; padding: 12px; border-radius: 10px;">Add vehicle type</div>
        </div>
        <div class="col-lg-6 col-sx-6"><a href="view_vehicle_type_detail.php">
                <div style="float: Right; color: #ffffff; background-color: #0044cc; padding: 12px; border-radius: 10px;">View vehicle type Details</div></a>
        </div>
    </div>

    <div class="route">
        <div class="col-md-12">
            <h4>Fields marked with <sum style="color: red;">*</sum> must be filled</h4>
            <div class="panel-body">
                
                            <form role="form" action="" method="post" id="schoolregistration">
                                <div class="form-group">
                                    <label>Vehicle Type<sum style="color: red;">*</sum>:</label>
                                    <input type="text" name="Vehicle Type" placeholder="Inter Vehicle Type" class="form-control"  required>
                                   
                                </div>
                                <div class="form-group">
                                    <label>Number of Vehicle <sum style="color: red;">*</sum>:</label>
                                    <input class="form-control" name="Number of Vehicle " placeholder="Enter Number of Vehicle " required>
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