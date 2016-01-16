<?php include 'header.php';?>

 <div class="row">
    <div class="col-lg-12">
        <div class="col-lg-6 col-sx-6">
            <div style="float: left; color: red; background-color: #ccccff; padding: 12px; border-radius: 10px;">Add Time Table</div>
        </div>
        <div class="col-lg-6 col-sx-6"><a href="View_Attendance_Report.php">
                <div style="float: Right; color: #ffffff; background-color: #0044cc; padding: 12px; border-radius: 10px;">View Time Table</div></a>
        </div>
    </div>
     <div class="col-lg-12">
<div class="col-lg-4">
       
    <div class="panel padder-v item">
                                    <div class="form-group">
                                        
                                        <label><bold>Class/Course</bold><sum style="color: red;">*</sum></label>
                                        <select type="text" name="Atte Class/Course"  class="form-control"  required="">
                                            <option>-Select-</option>
                                            
                                            
                                            </select>
                                      
                                    
                                    
                                </div>
    </div>
    
</div>
         <div class="col-lg-4">
             
             <div class="panel padder-v item">
                                    <div class="form-group">
                                        
                                        <label><bold>Section</bold><sum style="color: red;">*</sum></label>
                                        <select type="text" name="Att Section"  class="form-control"  required="">
                                            <option>-Select-</option>
                                            
                                            
                                            </select>
                                      
                                    
                                    
                                </div>
    </div>
    
             
         </div>
    
    
         <div class="col-lg-4">
             <div class="panel padder-v item">
             
                 <div class="form-group">
                                    <button type="submit"  class="btn-success" style="width:100px; margin-top:20px; padding: 5px;" value="Next">Continue</button>    
                     <button type="submit"  class="btn-danger" style="width:100px; margin-top:20px; padding: 5px;" value="Next">Reset</button>
                                      
                  </div>
                      
    
             </div>
             
               </div>
         </div>
 </div>   
        
<?php include 'footer.php';?>