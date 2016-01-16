<?php include 'header.php';?>

 <div class="row">
    <div class="col-lg-12">
        <div class="col-lg-6 col-sx-6">
            <div style="float: left; color: red; background-color: #ccccff; padding: 12px; border-radius: 10px;">Add Vehicle</div>
        </div>
        <div class="col-lg-6 col-sx-6"><a href="View Vehicle Details.php">
                <div style="float: Right; color: #ffffff; background-color: #0044cc; padding: 12px; border-radius: 10px;">View Vehicle Details</div></a>
        </div>
    </div>

    <div class="route">
        <div class="col-md-12">
            
            <div class="panel-body">
                            <form role="form" action="" method="post" id="schoolregistration">
                                <div class="form-group">
                                    <label>Vehicle type<sum style="color: red;">*</sum>:</label>
                                    <select type="text" name="Vehicle type" class="form-control"  required>
                                        <option>-Select Vehicle type-</option> 
                                                                                                                       
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Vehicle Registration No.<sum style="color: red;">*</sum>:</label>
                                    <input type="text" class="form-control" name="Sub_route_name_picup" placeholder="Enter Vehicle Registration No." required>
                                </div>
                                <div class="form-group">
                                    <label>Vehicle Registration Date:</label>
                                    <input type="text" class="form-control" name="Registration Date" placeholder="Enter Vehicle Registration Date" required>
                                        
                                    </select>
                                </div>
                                
                                <div class="form-group">
                                    <label>Number Of Seats<sum style="color: red;">*</sum>:</label>
                                    <input type="text" class="form-control" name="Number Of Seats" placeholder="Enter Number Of Seats" required>
                                </div>
                                <div class="form-group">
                                    <label>Milage (1 liter)<sum style="color: red;">*</sum>:</label>
                                    <input type="text" class="form-control" name="Milage" placeholder="Enter Milage (1 liter)" required>km
                                </div>
                                    
                                <div class="form-group">
                                    <label>Start Service Date<sum style="color: red;">*</sum>:</label>
                                    <input type="number" class="form-control" name="Service Date" placeholder="Enter Start Service Date" required>
                                </div>
                                <div class="form-group">
                                    <label>Vehicle Owner Name<sum style="color: red;"></sum>:</label>
                                    <input type="text" class="form-control" name="Vehicle Owner Name" placeholder="Enter Vehicle Owner Name" required>
                                </div>
                                <div class="form-group">
                                    <label>Mobile No.<sum style="color: red;"></sum>:</label>
                                    <input type="text" class="form-control" name="Vehicle Owner Mobile No." placeholder="Enter Mobile No." required>
                                </div>
                                <div class="form-group">
                                    <label>Description<sum style="color: red;"></sum>:</label>
                                    <textarea type="text" class="form-control" name="Vehicle Description" placeholder="Enter Description" required></textarea>
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
        
<?php include 'footer.php';?>﻿