
    <?php include 'header.php';?>
    
      <div class="row">
          <form action="" method="post" id="studentsearch" novalidate="novalidate">
        <div class="col-md-12">
                    
            
            
            
            
            
            
          <div class="row row-sm text-center">
              
              
                 
           
              
            <div class="col-xs-12 col-md-4">
             <!-- <div class="panel padder-v item"></-->
                  
                  
                  
                  
                                    <div class="form-group">
                                        <label>Course/Class<sum style="color: red;">*</sum></label>
                                    <select type="text" name="Course/Class" class="form-control valid"  required>
                                        
                                        <option value="">-Select course/class-/</option>
                                        <option value="">-1-A-/</option>
                                        <option value="">-1-B-/</option>
                                        <option value="">-1-C-/</option>
                                        <option value="">-2-A-/</option>
                                        <option value="">-2-B-/</option>
                                        <option value="">-2-C-/</option>
                                        
                                        
                                        
                                        
                                        
                                    </select>
                                        
                                        <h5><td>Normal Search<sum style="color: red;">*</sum></td></h5>
                                            <td>  <input type="radio" name="Normal" style="width: 20px; height: 20px;"   required>
                                        
                                        
                                        
                                </div>
                  
              
                </div>
              
              
              
              
              
              
              <div class="col-xs-12 col-md-4">
            <!--  <div class="panel padder-v item"></-->
                  
                                    <div class="form-group">
                                       
                                        <label>Section<sum style="color: red;">*</sum></label>
                                    <select type="text" name="select/section" class="form-control"  required>
                                        
                                        <option value="--select/section--/">--select/section--/</option>
                                         <option value="--A--">--A--/</option>
                                          <option value="--B--">--B--/</option>
                                           <option value="">--C--/</option>
                                            <option value="">--D--/</option>
                                             <option value="">--E--/</option>
                                              <option value="">--F--/</option>
                                               <option value="">--G--/</option>
                                                <option value="">--H--/</option>
                                                 <option value="">--I--/</option>
                                        
                                        
                                        
                                        
                                        
                                        
                                    </select>
                                        <tr>
                                            
                                        <h5> <td>Advance search<sum style="color: red;">*</sum></td></h5>
                                            <td>  <input type="radio" name="schoolname" style="width: 20px; height: 20px;"  placeholder="Search student name or father name" required>
                                  </td>
                                    </tr>
                                        
                                </div>
                  
          
                </div>
              
              <div class="col-xs-12 col-md-4">
              <!--<div class="panel padder-v item">/-->
                  
                                    <div class="form-group">
                                        <label>Search<sum style="color: red;">*</sum></label>
                                        <input type="text" name="Search" class="form-control" placeholder="Search student name or father name" required>
                                    
                                   
                                        <label></label>
                                        <button type="submit" class="btn btn-lg btn-primary btn-block">Search</button>
                                    
                                        
                                        
                                </div>
                  
              </div>
                
                  
            </div>
                
        
              
          </div>
              </form>
        </div>
      
      </div>
      <!-- / stats -->


      <!-- tasks -->
      <div class="panel wrapper">
        <div class="row">
          <div class="col-md-6 b-r b-light no-border-xs">
            <a href class="text-muted pull-right text-lg"><i class="icon-arrow-right"></i></a>
            <h4 class="font-thin m-t-none m-b-md text-muted">My Tasks</h4>
            <div class=" m-b">
              <div class="m-b">
                <span class="label text-base bg-warning pos-rlt m-r"><i class="arrow right arrow-warning"></i> 19:30</span>
                <a href>Feed cat</a>
              </div>
              <div class="m-b">
                <span class="label text-base bg-info pos-rlt m-r"><i class="arrow right arrow-info"></i> 12:30</span>
                <a href>Fishing Time</a>
              </div>
              <div class="m-b">
                <span class="label text-base bg-primary pos-rlt m-r"><i class="arrow right arrow-primary"></i> 10:30</span>
                <a href>Kick-off meeting</a>
              </div>
              <div class="m-b">
                <span class="label text-base bg-light pos-rlt m-r"><i class="arrow right arrow-light"></i> 07:30</span>
                <a href>Morning running</a>
              </div>
            </div>
          </div>
          <div class="col-md-6">            
            <div class="row row-sm">
              <div class="col-xs-6 text-center">
                <div ui-jq="easyPieChart" ui-options="{
                    percent: 75,
                    lineWidth: 4,
                    trackColor: '#e8eff0',
                    barColor: '#7266ba',
                    scaleColor: false,
                    size: 115,
                    rotate: 90,
                    lineCap: 'butt'
                  }" class="inline m-t">
                  <div>
                    <span class="text-primary h4">75%</span>
                  </div>
                </div>
                <div class="text-muted font-bold text-xs m-t m-b">Work Done</div>
              </div>
              <div class="col-xs-6 text-center">
                <div ui-jq="easyPieChart" ui-options="{
                    percent: 50,
                    lineWidth: 4,
                    trackColor: '#e8eff0',
                    barColor: '#23b7e5',
                    scaleColor: false,
                    size: 115,
                    rotate: 180,
                    lineCap: 'butt'
                  }" class="inline m-t">
                  <div>
                    <span class="text-info h4">50%</span>
                  </div>
                </div>
                <div class="text-muted font-bold text-xs m-t m-b">Started</div>
              </div>
            </div>            
          </div>
        </div>
      </div>
      <!-- / tasks -->
    </div>
  </div>
  <!-- / main -->
  <!-- right col -->
  
  
  <div class="col w-md bg-white-only b-l bg-auto no-border-xs">
  	<div class="nav-tabs-alt">
	  	<ul class="nav nav-tabs" role="tablist">
		    <li class="active"><a href="#follow" data-toggle="tab"><i class="glyphicon glyphicon-user text-md text-muted wrapper-sm"></i></a></li>
		    <li><a href="#chat" data-toggle="tab"><i class="glyphicon glyphicon-comment text-md text-muted wrapper-sm"></i></a></li>
		    <li><a href="#trans" data-toggle="tab"><i class="glyphicon glyphicon-transfer text-md text-muted wrapper-sm"></i></a></li>
		  </ul>
	  </div>
    <div class="tab-content">
      <div class="tab-pane active" id="follow">
        <div class="wrapper-md">
          <div class="m-b-sm text-md">Who to follow</div>
          <ul class="list-group no-bg no-borders pull-in">
            <li class="list-group-item">
              <a herf class="pull-left thumb-sm avatar m-r">
                <img src="img/a4.jpg" alt="..." class="img-circle">
                <i class="on b-white bottom"></i>
              </a>
              <div class="clear">
                <div><a href>Chris Fox</a></div>
                <small class="text-muted">Designer, Blogger</small>
              </div>
            </li>
            <li class="list-group-item">
              <a herf class="pull-left thumb-sm avatar m-r">
                <img src="img/a5.jpg" alt="..." class="img-circle">
                <i class="on b-white bottom"></i>
              </a>
              <div class="clear">
                <div><a href>Mogen Polish</a></div>
                <small class="text-muted">Writter, Mag Editor</small>
              </div>
            </li>
            <li class="list-group-item">
              <a herf class="pull-left thumb-sm avatar m-r">
                <img src="img/a6.jpg" alt="..." class="img-circle">
                <i class="busy b-white bottom"></i>
              </a>
              <div class="clear">
                <div><a href>Joge Lucky</a></div>
                <small class="text-muted">Art director, Movie Cut</small>
              </div>
            </li>
            <li class="list-group-item">
              <a herf class="pull-left thumb-sm avatar m-r">
                <img src="img/a7.jpg" alt="..." class="img-circle">
                <i class="away b-white bottom"></i>
              </a>
              <div class="clear">
                <div><a href>Folisise Chosielie</a></div>
                <small class="text-muted">Musician, Player</small>
              </div>
            </li>
            <li class="list-group-item">
              <a herf class="pull-left thumb-sm avatar m-r">
                <img src="img/a8.jpg" alt="..." class="img-circle">
                <i class="away b-white bottom"></i>
              </a>
              <div class="clear">
                <div><a href>Aron Gonzalez</a></div>
                <small class="text-muted">Designer</small>
              </div>
            </li>
          </ul>
          <div class="text-center">
            <a href class="btn btn-sm btn-primary padder-md m-b">More Connections</a>
          </div>
        </div>
      </div>
      <div class="tab-pane" id="chat">
        <div class="wrapper-md">
          <div class="m-b-sm text-md">Chat</div>
          <ul class="list-group no-borders pull-in auto">
            <li class="list-group-item">
              <span class="pull-left thumb-sm m-r"><img src="img/a1.jpg" alt="..." class="img-circle"></span>
              <a href class="text-muted" ui-toggle="show" target=".app-aside-right"><i class="fa fa-comment-o pull-right m-t-sm text-sm"></i></a>
              <div class="clear">
                <div><a href="">Chris Fox</a></div>
                <small class="text-muted">about 2 minutes ago</small>
              </div>
            </li>
            <li class="list-group-item">
              <span class="pull-left thumb-sm m-r"><img src="img/a2.jpg" alt="..." class="img-circle"></span>
              <a href class="text-muted" ui-toggle="show" target=".app-aside-right"><i class="fa fa-comment-o pull-right m-t-sm text-sm"></i></a>
              <div class="clear">
                <div><a href="">Amanda Conlan</a></div>
                <small class="text-muted">about 2 hours ago</small>
              </div>
            </li>
            <li class="list-group-item">
              <span class="pull-left thumb-sm m-r"><img src="img/a3.jpg" alt="..." class="img-circle"></span>
              <a href class="text-muted" ui-toggle="show" target=".app-aside-right"><i class="fa fa-comment-o pull-right m-t-sm text-sm"></i></a>
              <div class="clear">
                <div><a href="">Dan Doorack</a></div>
                <small class="text-muted">3 days ago</small>
              </div>
            </li>
            <li class="list-group-item">
              <span class="pull-left thumb-sm m-r"><img src="img/a4.jpg" alt="..." class="img-circle"></span>
              <a href class="text-muted" ui-toggle="show" target=".app-aside-right"><i class="fa fa-comment-o pull-right m-t-sm text-sm"></i></a>
              <div class="clear">
                <div><a href="">Lauren Taylor</a></div>
                <small class="text-muted">about 2 minutes ago</small>
              </div>
            </li>
          </ul>
        </div>
      </div>
      <div class="tab-pane" id="trans">
        <div class="wrapper-md">
          <div class="m-b-sm text-md">Transaction</div>
          <ul class="list-group list-group-sm list-group-sp list-group-alt auto m-t">
            <li class="list-group-item">
              <span class="text-muted">Transfer to Jacob at 3:00 pm</span>
              <span class="block text-md text-info">B 15,000.00</span>
            </li>
            <li class="list-group-item">
              <span class="text-muted">Got from Mike at 1:00 pm</span>
              <span class="block text-md text-primary">B 23,000.00</span>
            </li>
            <li class="list-group-item">
              <span class="text-muted">Sponsored ORG at 9:00 am</span>
              <span class="block text-md text-warning">B 3,000.00</span>
            </li>
            <li class="list-group-item">
              <span class="text-muted">Send to Jacob at 8:00 am</span>
              <span class="block text-md">B 11,000.00</span>
            </li>
          </ul>
        </div>
      </div>      
    </div>
    <div class="padder-md">      
      <!-- streamline -->
      <div class="m-b text-md">Recent Activity</div>
      <div class="streamline b-l m-b">
        <div class="sl-item">
          <div class="m-l">
            <div class="text-muted">5 minutes ago</div>
            <p><a href class="text-info">Jessi</a> commented your post.</p>
          </div>
        </div>
        <div class="sl-item">
          <div class="m-l">
            <div class="text-muted">11:30</div>
            <p>Join comference</p>
          </div>
        </div>
        <div class="sl-item b-success b-l">
          <div class="m-l">
            <div class="text-muted">10:30</div>
            <p>Call to customer <a href class="text-info">Jacob</a> and discuss the detail.</p>
          </div>
        </div>
        <div class="bg-info wrapper-sm m-l-n m-r-n m-b r r-2x">
          Create tasks for the team
        </div>
        <div class="sl-item b-primary b-l">
          <div class="m-l">
            <div class="text-muted">Wed, 25 Mar</div>
            <p>Finished task <a href class="text-info">Testing</a>.</p>
          </div>
        </div>
        <div class="sl-item b-warning b-l">
          <div class="m-l">
            <div class="text-muted">Thu, 10 Mar</div>
            <p>Trip to the moon</p>
          </div>
        </div>
        <div class="sl-item b-info b-l">
          <div class="m-l">
            <div class="text-muted">Sat, 5 Mar</div>
            <p>Prepare for presentation</p>
          </div>
        </div>
        <div class="sl-item b-l">
          <div class="m-l">
            <div class="text-muted">Sun, 11 Feb</div>
            <p><a href class="text-info">Jessi</a> assign you a task <a href class="text-info">Mockup Design</a>.</p>
          </div>
        </div>
        <div class="sl-item b-l">
          <div class="m-l">
            <div class="text-muted">Thu, 17 Jan</div>
            <p>Follow up to close deal</p>
          </div>
        </div>
      </div>
      <!-- / streamline -->
    </div>
    
  <!-- aside right -->
  <div class="app-aside-right pos-fix no-padder w-md w-auto-xs bg-white b-l animated fadeInRight hide">
    <div class="vbox">
      <div class="wrapper b-b b-t b-light m-b">
        <a href class="pull-right text-muted text-md" ui-toggle-class="show" target=".app-aside-right"><i class="icon-close"></i></a>
        Chat
      </div>
      <div class="row-row">
        <div class="cell">
          <div class="cell-inner padder">
            <!-- chat list -->
            <div class="m-b">
              <a href class="pull-left thumb-xs avatar"><img src="img/a2.jpg" alt="..."></a>
              <div class="clear">
                <div class="pos-rlt wrapper-sm b b-light r m-l-sm">
                  <span class="arrow left pull-up"></span>
                  <p class="m-b-none">Hi John, What's up...</p>
                </div>
                <small class="text-muted m-l-sm"><i class="fa fa-ok text-success"></i> 2 minutes ago</small>
              </div>
            </div>
            <div class="m-b">
              <a href class="pull-right thumb-xs avatar"><img src="img/a3.jpg" class="img-circle" alt="..."></a>
              <div class="clear">
                <div class="pos-rlt wrapper-sm bg-light r m-r-sm">
                  <span class="arrow right pull-up arrow-light"></span>
                  <p class="m-b-none">Lorem ipsum dolor :)</p>
                </div>
                <small class="text-muted">1 minutes ago</small>
              </div>
            </div>
            <div class="m-b">
              <a href class="pull-left thumb-xs avatar"><img src="img/a2.jpg" alt="..."></a>
              <div class="clear">
                <div class="pos-rlt wrapper-sm b b-light r m-l-sm">
                  <span class="arrow left pull-up"></span>
                  <p class="m-b-none">Great!</p>
                </div>
                <small class="text-muted m-l-sm"><i class="fa fa-ok text-success"></i>Just Now</small>
              </div>
            </div>
            <!-- / chat list -->
          </div>
        </div>
      </div>
      <div class="wrapper m-t b-t b-light">
        <form class="m-b-none">
          <div class="input-group">
            <input type="text" class="form-control" placeholder="Say something">
            <span class="input-group-btn">
              <button class="btn btn-default" type="button">SEND</button>
            </span>
          </div>
        </form>
      </div>
    </div>
  </div>
  <!-- / aside right -->

  </div>
  <!-- / right col -->
</div>


    </div>
  </div>
  <!-- / content -->

  <!-- footer -->
  <footer id="footer" class="app-footer" role="footer">
        <div class="wrapper b-t bg-light">
      <span class="pull-right">2.0.1 <a href ui-scroll="app" class="m-l-sm text-muted"><i class="fa fa-long-arrow-up"></i></a></span>
    	&copy; 2015 Copyright.
    </div>
  </footer>
  <!-- / footer -->

</div>

<script src="bower_components/jquery/dist/jquery.min.js"></script>
<script src="bower_components/bootstrap/dist/js/bootstrap.js"></script>
<script src="js/ui-load.js"></script>
<script src="js/ui-jp.config.js"></script>
<script src="js/ui-jp.js"></script>
<script src="js/ui-nav.js"></script>
<script src="js/ui-toggle.js"></script>
<script src="js/jquery.validate.min.js"></script>
        <script src="js/scripts.js"></script>
        
   
        
</body>
</html>
