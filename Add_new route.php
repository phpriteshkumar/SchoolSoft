<?php include 'header.php';?>

 <div class="row">
    <div class="col-lg-12">
        <div class="col-lg-6 col-sx-6">ritesh
            <div style="float: left; color: red; background-color: #ccccff; padding: 12px; border-radius: 10px;">Add Route & Transport</div>
        </div>
        <div class="col-lg-6 col-sx-6"><a href="Route detail.php">
                <div style="float: Right; color: #ffffff; background-color: #0044cc; padding: 12px; border-radius: 10px;">View_route_&_transport Details</div></a>
        </div>
    </div>

    <div class="route">
        <div class="col-md-12">
            
            <div class="panel-body">
                
                            <form role="form" action="" method="post" id="schoolregistration">
                                <div class="form-group">
                                    <label>Route name<sum style="color: red;">*</sum>:</label>
                                    <select type="text" name="Select_route_name" class="form-control"  required>
                                        <option>-Select route name-</option> 
                                                                                                                       
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Sub Route Pickup & Drop Time<sum style="color: red;">*</sum>:</label>
                                    <textarea class="form-control" name="Sub_route_name_picup" placeholder="Enter sub route name" required></textarea>
                                </div>
                                <div class="form-group">
                                    <label>Vehicle Type<sum style="color: red;">*</sum>:</label>
                                    <select type="text" class="form-control" name="Vehicle Type" placeholder="Enter route distance(one ways)" required>KM
                                        <option>-Select vahicle type-</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Vehicle Registration No.<sum style="color: red;">*</sum>:</label>
                                    <select type="text" class="form-control" name="Vehicle Registration" placeholder="Enter route distance(one ways)" required>KM
                                        <option>-Select Vehicle Registration No.-</option>
                                    </select>
                                </div>
                                
                                
            
                    <div class="form-group">
                                    <label>Rent/Fare <sum style="color: red;">*</sum>:</label>
                                    <input type="text" class="form-control" name="Rent/Fare " placeholder="Enter Rent/Fare" required>
                                </div>
                                <div class="form-group">
                                    <label>Driver Name<sum style="color: red;">*</sum>:</label>
                                    <input type="text" class="form-control" name="Driver Name here" placeholder="Enter Driver Name" required>
                                </div>
                                <div class="form-group">
                                    <label>Mobile No<sum style="color: red;">*</sum>:</label>
                                    <input type="number" class="form-control" name="Mobile No here" placeholder="Enter driver Mobile No." required>
                                </div>
                                <div class="form-group">
                                    <label>Description<sum style="color: red;"></sum>:</label>
                                    <textarea class="form-control" name="Description" placeholder="Enter route Description" required></textarea>
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