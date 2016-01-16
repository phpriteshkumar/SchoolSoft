
    <?php include 'header.php';?>
    
        
        <div class="topik">
            <span  class="ritesh">Student Personal Details</span>
            <span  class="ritesh">></span>
            <span  class="ritesh">Address Details</span>
            <span  class="ritesh">></span>
            
            <span  class="ritesh">Parents/Local Guardian Details</span>
            <span  class="ritesh">></span>
            
            <span  class="ritesh">Previous Class Details</span>
            <span  class="ritesh">></span>
            <span  class="ritesh">Allocate Library A/C</span>
            <span  class="ritesh">></span>
            
            <span  class="ritesh">Allocate Hostel A/C</span>
            <span  class="ritesh">></span>
            
            <span  class="ritesh">Finish</span>
            
        </div>
        
        
      <!-- stats -->
      <div class="row" style="background: #f0f0f0;">
        <div class="col-md-12">
                    
            
            <p style="border-bottom: 4px solid #ccccff;  padding: 10px;">Fields marked with<sum style="color: red;">*</sum>  must be filled.</p>
            
            <h3 style="border-bottom: 4px solid #ccccff; padding: 10px;" >Class or section ditail</h3>
            
            
          <div class="row row-sm text-center">
              
              <form action="address_detail.php" method="post" id="schoolregistration">
                 
           <div class="col-md-12">
              
                        
             <div class="col-xs-12 col-md-6">
              <div class="panel padder-v item">
                  
                                    <div class="form-group">
                                        <label><bold> course/class</bold><sum style="color: red;">*</sum></label>
                                        <select type="text" name="course/class" class="form-control"  required>
                                            <option>1</option>
                                        
                                        </select>
                                    
                                        
                                </div>
                  
              </div>
                </div> 
              
              <div class="col-xs-12 col-md-6">
              <div class="panel padder-v item">
                  
                                    <div class="form-group">
                                        <label>Select section<sum style="color: red;">*</sum></label>
                                        <select type="text" id="Select section" name="schoolname" class="form-control" placeholder="Search student name or father name" required>
                                    
                                            <option>A</option>
                                            <option>B</option>
                                            <option>C</option>
                                            <option>D</option>
                                            <option>E</option>
                                            <option>F</option>
                                        
                                        </select>
                                        
                                </div>
                  
              </div>
                </div> 
             
                  
           </div>
                  
                  <h3 style="border-bottom: 2px solid #ccccff; padding: 10px;">Student presonal detail</h3> 
                  
                  <div class="col-xs-12 col-md-6" >
              <div class="panel padder-v item">
                  
                                    <div class="form-group">
                                        <label><bold>Full name</bold><sum style="color: red;">*</sum></label>
                                        <input type="text" name="student full name" placeholder="Enter Full name" class="form-control"  required>
                                     
                                </div>
                  
                  <div class="form-group">
                                        <label><bold>Date of Birth</bold><sum style="color: red;">*</sum></label>
                                        <input type="text" name="student full name" placeholder="Enter Date of Birth" class="form-control"  required>
                                     
                                </div>
                  
                  <div class="form-group">
                                        <label><bold> Birth palace</bold><sum style="color: red;">*</sum></label>
                                        <input type="text" name="student full name" placeholder="Enter Birth palace" class="form-control"  required>
                                     
                                </div>
                  
                  
                  <div class="form-group">
                                        <label><bold>Religion</bold><sum style="color: red;">*</sum></label>
                                        <input type="text" name="course/class" placeholder="Enter Religion" class="form-control"  required>
                                       
                                        
                                </div>
                  
                   <div class="form-group">
                                        <label><bold>Category </bold><sum style="color: red;">*</sum></label>
                                        <select type="text" name="Category " placeholder="Enter Religion" class="form-control"  required>
                                            <option>General</option>
                                            <option>OBC</option>
                                            <option>ST</option>
                                            <option>General</option>
                                        </select>
                                </div>
                  
                  <div class="form-group">
                                        <label><bold>mobiles</bold><sum style="color: red;">*</sum></label>
                                        <input type="number" name="mobile" placeholder="Enter mobile no." class="form-control"  required>
                                       
                                        
                                </div>
                  <div class="form-group">
                                        <label><bold>Handicapped</bold><sum style="color: red;">*</sum></label>
                                        <select type="text" name="Handicapped" class="form-control"  required>
                                       
                                            <option>Handicapped:</option>
                                            
                                        </select>
                                </div>
                  
                  
                
                  
              </div>
                </div> 
                  
                  
                  <div class="col-xs-12 col-md-6" >
              <div class="panel padder-v item">
                  
                                    <div class="form-group">
                                        <label><bold>Gender </bold><sum style="color: red;">*</sum></label>
                                        <select type="text" name="sGender" placeholder="Enter Full name" class="form-control"  required>
                                            <option>Male</option>
                                            <option>Female</option>
                                            <option>Other</option>
                                        </select>
                                </div>
                  
                   <div class="form-group">
                                        <label><bold>Blood Group</bold><sum style="color: red;">*</sum></label>
                                        <select type="text" name="Blood Group " placeholder="Select your Blood Group	" class="form-control"  required>
                                            <option>A</option>
                                            <option>B</option>
                                            <option>C</option>
                                        </select>
                                </div>
                  
                  <div class="form-group">
                                        <label><bold>Nationality </bold><sum style="color: red;">*</sum></label>
                                        <input type="text" name="Nationality " placeholder="Enter your Nationality " class="form-control"  required>
                                     
                                </div>
                  
                  <div class="form-group">
                                        <label><bold> Mother Tongue</bold><sum style="color: red;">*</sum></label>
                                        <input type="text" name="Mother Tongue" placeholder="Enter Mother Tongue" class="form-control"  required>
                                     
                                </div>
                  
                  
                  <div class="form-group">
                                        <label><bold>Sub Category</bold><sum style="color: red;">*</sum></label>
                                        <input type="text" name="Sub Category" placeholder="Enter Sub Category" class="form-control"  required>
                                       
                                        
                                </div>
                  
                  <div class="form-group">
                                        <label><bold>Email id	</bold><sum style="color: red;">*</sum></label>
                                        <input type="text" name="Email id" placeholder="Enter valid Email id	" class="form-control"  required>
                                       
                                        
                                </div>
                  
                   
                  
                  <div class="form-group">
                                        <label><bold>mobiles</bold><sum style="color: red;">*</sum></label>
                                        <input type="number" name="mobile" placeholder="Enter mobile no." class="form-control"  required>
                                       
                                        
                                </div>
                  
                  
                  
                
                  
              </div>
                  </div>
                  
                  
                  
                  
                  <div style="font-size:18px; border-bottom: 3px solid #ccccff; padding: 10px; text-align: left; "><strong>Upload Student Profile Picture</strong></div> 
                  <div class="col-md-12">
                      <div class="col-md-6">
                 <div class="form-group">
                                        
                                        <input type="file" name="Handicapped" class="form-control"  required>
                                      
                  </div>
                      </div>
                      
                      <div class="col-md-6">
                 <div class="form-group">
                     <a href="address_detail.php">            
                     <button type="submit"  class="btn-success" style="width:100px; margin-top:20px; padding: 5px;" value="Next">Next</button>
                     </a>
                  </div>
                      </div>
                      
                      
                  </div>
              </form>
              
            
                
         
            
              
              
              
              
          </div>
        </div>
      </div>
    
     <?php include 'footer.php'; ?>