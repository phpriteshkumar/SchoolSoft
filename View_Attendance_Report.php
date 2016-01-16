<?php include 'header.php';?>

 <div class="row">
    <div class="col-lg-12">
        <div class="col-lg-6 col-sx-6">
            <div style="float: left; color: red; background-color: #ccccff; padding: 12px; border-radius: 10px;">View Attendance Report</div>
        </div>
        <div class="col-lg-6 col-sx-6"><a href="Add_Mark_Attendance.php">
                <div style="float: Right; color: #ffffff; background-color: #0044cc; padding: 12px; border-radius: 10px;">Add Mark Attendance</div></a>
        </div>
    </div>
     <div class="col-lg-12">
<div class="col-lg-3">
       
    <div class="panel padder-v item">
                                    <div class="form-group">
                                        
                                        <label><bold>Class/Course</bold><sum style="color: red;">*</sum></label>
                                        <select type="text" name="View Class/Course"  class="form-control"  required="">
                                            <option>-Select-</option>
                                            
                                            
                                            </select>
                                      
                                    
                                    
                                </div>
    </div>
    
</div>
         <div class="col-lg-3">
             
             <div class="panel padder-v item">
                                    <div class="form-group">
                                        
                                        <label><bold>Section</bold><sum style="color: red;">*</sum></label>
                                        <select type="text" name="ViewSection"  class="form-control"  required="">
                                            <option>-Select-</option>
                                            
                                            
                                            </select>
                                      
                                    
                                    
                                </div>
    </div>
    
             
         </div>
    
    
         <div class="col-lg-3">
             
             
                 <div class="panel padder-v item">
                                    <div class="form-group">
                                        
                                        <label><bold>From</bold><sum style="color: red;">*</sum></label>
                                        <input type="text" name="From" placeholder="Inter Date From"  class="form-control"  required="">
                                        <img style="height: 30px; width: 30px;" src="img/colander.png">
                                            
                                            
                                            </select>
                                      
                                    
                                    
                                </div>
    </div>
    
             
             
               </div>
         <div class="col-lg-3">
             
             
             <div class="panel padder-v item">
                                    <div class="form-group">
                                        
                                        <label><bold>To</bold><sum style="color: red;">*</sum></label>
                                        <input type="text" name="Inter Date To"  placeholder="Inter Date To" class="form-control"  required="">
                                            <img style="height: 30px; width: 30px;" src="img/colander.png">
                                            
                                            
                                            </select>
                                      
                                    
                                    
                                </div>
    </div>
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