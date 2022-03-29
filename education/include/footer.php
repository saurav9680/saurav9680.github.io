 <!--Footer-->
 <footer class="container-fluid bg-dark text-center p-2">
        <small class="text-white">Copyright &copy: 2022 || Designed by Saurav Kumar || <a href="#login" data-bs-toggle="modal" data-bs-target="#adminloginmodal">E-Learning (Admin Login)</a></small>
    </footer>
    <!--Footer end-->
      <!--student Registration form start -->
  
  <!-- Modal -->
  <div class="modal fade" id="signupmodal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="signupmodalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="signupmodal">Student Sign Up</h5>
          
<button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
 
    <span aria-hidden="true">&times;</span>
 
</button>
        </div>
        <div class="modal-body">
        
            <form id="studentsignupform">
                <div class="form-group">
                    <i class="fas fa-user"></i>
                  <label for="studentname" class="pl-2 font-weight-bold">Full Name</label>
                  <small id="statusmsg1"></small>
                  <input type="text" class="form-control" placeholder="Full Name" name="studentname" id="studentname">
                </div>
                <div class="form-group">
                <i class="fa-solid fa-envelope"></i>
                  <label for="studentemail" class="pl-2 font-weight-bold">E-Mail</label><small id="statusmsg2"></small>
                  <input type="email" class="form-control" placeholder="E-mail" name="studentemail" id="studentemail">
                  <small class="form-text">We Will Never share your email id with anyone else.</small>
            </div>
            <div class="form group">
                   <i class="fas fa-key"></i>
                  <label for="studentpwd" class="pl-2 font-weight-bold">Password</label><small id="statusmsg3"></small>
                  <input type="password" class="form-control" placeholder="Password" name="studentpwd" id="studentpwd">
                  
                   </div>
              </form>
             
        </div>
        <div class="modal-footer">
          <span id="successmsg"></span>
            <button type="button" class="btn btn-primary"
             onclick="addstudent()" id="signup">Sign Up</button>
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
          
        </div>
      </div>
    </div>
  </div>
  <!--student signup form end-->
  <!--student login form container start-->
  
  <div class="modal fade" id="loginmodal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="signupmodalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="loginmodal">Student Login</h5>
          
<button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
 
    <span aria-hidden="true">&times;</span>
 
</button>
        </div>
        <div class="modal-body">
            <!--form start-->
            <form id="studentLoginForm">
            
                    <div class="form-group">
                   <i class="fas fa-envelope"></i>
                  <label for="studentloginemail" class="pl-2 font-weight-bold">E-Mail</label>
                  <input type="email" class="form-control" placeholder="E-mail" name="studentloginemail" id="studentloginemail">
                   </div>
                        <div class="form-group">
                   <i class="fas fa-key"></i>
                  <label for="studentloginpwd" class="pl-2 font-weight-bold">Password</label>
                  <input type="password" class="form-control" placeholder="Password" name="studentloginpwd" id="studentloginpwd">
                  
                   </div>
              </form>
              <!--Form end-->
        </div>
        <div class="modal-footer">
          <small id="statusloginmsg"></small>
            <button type="button" class="btn btn-primary" id="studentloginbtn" onclick="checkstudentlogin()">Login</button>
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
          
        </div>
      </div>
    </div>
  </div>
  <!--student login form end-->
    <!--admin login form container start-->
  
    <div class="modal fade" id="adminloginmodal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="signupmodalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="adminloginmodal">Admin Login</h5>
              
    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
     
        <span aria-hidden="true">&times;</span>
     
    </button>
            </div>
            <div class="modal-body">
                <!--form start-->
                <form id="studentLoginForm">
                
                        <div class="form-group">
                       <i class="fas fa-envelope"></i>
                      <label for="adminloginemail" class="pl-2 font-weight-bold">E-Mail</label>
                      <input type="email" class="form-control" placeholder="E-mail" name="adminloginemail" id="adminloginemail">
                       </div>
                            <div class="form-group">
                       <i class="fas fa-key"></i>
                      <label for="adminloginpwd" class="pl-2 font-weight-bold">Password</label>
                      <input type="password" class="form-control" placeholder="Password" name="adminloginpwd" id="adminloginpwd">
                      
                       </div>
                  </form>
                  <!--Form end-->
            </div>
            <div class="modal-footer">
            <small id="statusadminloginmsg"></small>
                <button type="button" class="btn btn-primary" id="adminloginbtn" onclick="checkadminlogin()">Login</button>
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
              
            </div>
          </div>
        </div>
      </div>
      <!--admin login form end-->
    <!--jquery and bootsrap js -->
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/all.min.js"></script>
    <!--Student ajax request-->
    <script type="text/javascript" src="js/ajaxrequest.js"></script>
    <!--admin ajax request-->
    <script type="text/javascript" src="js/adminajaxrequest.js"></script>

</body>

</html>