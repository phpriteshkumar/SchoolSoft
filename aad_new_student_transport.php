<?php include 'header.php';?>

 <div class="row">
    <div class="col-lg-12">
        <div class="col-lg-6 col-sx-6">
            <div style="float: left; color: red; background-color: #ccccff; padding: 12px; border-radius: 10px;">Add route</div>
        </div>
        <div class="col-lg-6 col-sx-6"><a href="Allocate_new_student.php">
                <div style="float: Right; color: #ffffff; background-color: #0044cc; padding: 12px; border-radius: 10px;">View route details</div></a>
        </div>
    </div>

    <div class="route">
        <div class="col-md-12">
            
            <div class="panel-body">
                            <form role="form" action="" method="post" id="schoolregistration">
                                <div class="form-group">
                                    <label>Route name<sum style="color: red;">*</sum>:</label>
                                    <input type="text" name="Route_name" class="form-control" placeholder="Enter route name" required>
                                </div>
                                <div class="form-group">
                                    <label>Sub route name<sum style="color: red;">*</sum></label>
                                    <textarea class="form-control" name="Sub_route_name" placeholder="Enter sub route name" required></textarea>
                                </div>
                                <div class="form-group">
                                    <label>Distance(one ways)<sum style="color: red;">*</sum>:</label>
                                    <input type="text" class="form-control" name="Distance" placeholder="Enter route distance(one ways)" required>KM
                                </div>
                                <div class="form-group">
                                    <label>Discription<sum style="color: red;">*</sum></label>
                                    <textarea class="form-control" name="Discription" placeholder="Enter Discription" required></textarea>
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