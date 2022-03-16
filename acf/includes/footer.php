       <!-----Footer Start-->
        <!---Quick Link Model-->
        <div class="qclink modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle"><i class="fas fa-fighter-jet mr-2"></i>Quick Links</h5>
                </div>
                <div class="modal-body">
                    <div class="row qclnktext">
                        <div class="col-md-6">
                            <ul class="qlink">
                                <li><a href="nhppa">NHPPA</a></li>
                                <li><a href="healthasst">HEALTHASST</a></li>
                                <li><a href="membership">Membership</a></li>
                                <li><a href="certification">Certification</a></li>
                                <li><a href="continued-medical-education">Continued Medical Education</a></li>
                                <li><a href="oncall-support">Oncall Support</a></li>
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <ul class="qlink">
                                <li><a href="oncallCareAssistance">Oncall Care Assistance</a></li>
                                <li><a href="oncallHomeService">Oncall Home Services</a></li>
                                <li><a href="oncallService">Oncall Service</a></li>
                                <li><a href="http://www.vaishalinews.com/acf/h-r-staffing">H.R Staffing</a></li>
                                <li><a href="http://www.vaishalinews.com/acf/labasst-service">LABASST Service</a></li>
                                <li><a href="http://www.vaishalinews.com/acf/oncall-management">Oncall Management</a></li>
                            </ul>
                        </div>
                    </div>
           
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
            </div>
        </div>
        <!---Quick Link Model End-->

        <!-- Modal [responsive menu] -->
        <div id="menu" class="p-0 modal fade" role="dialog" aria-labelledby="menu" aria-hidden="true">
            <div class="modal-dialog modal-dialog-slideout" role="document">
                <div class="modal-content full">
                    <div class="modal-header" data-dismiss="modal">
                        <i class="icon-close fas fa-arrow-right"></i>
                    </div>
                    <div class="mobquick">
                        <a href="#exampleModalCenter"  data-toggle="modal" class="nav-link pl-0"><i class="fas fa-fighter-jet mr-2"></i>Quick Links</a>
                    </div>
                    <div class="menu modal-body">
                        <div class="row w-100">
                            <div class="items p-0 col-12 text-center">
                                <!-- Append [navbar] -->
                            </div>
                            <div class="contacts p-0 col-12 text-center">
                                <!-- Append [navbar] -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Footer -->
        <footer>
            <!-- Footer [content] -->
            <section id="footer" class="odd footer offers">
                <div class="container">
                    <div class="row">
                        <div class="col-12 footerllk">
                            <p><a href="http://vaishalinews.com/acf/">Home</a> | <a href="consulting2">Consulting</a> | <a href="http://www.vaishalinews.com/acf/service?name=Accounting&id=MjA=">Our Services</a> | <a href="contact_us">Contact us</a> | <a href="track">Track</a> | <a href="#">Terms of Use</a> | <a href="#">Privacy Policy</a> | <a href="#">Health Sector Services Consulting</a></p>
                            <p class="scnd"><a href="#">State sector services consulting</a> | <a href="#">National Medical Home and Health Association</a></p>
                        
                            <div class="vendorimg">
                               <p> <img src="assets/icon/vendor_img.png"  alt="Vendor Logo" class="vdimg"><span class="brandleft"> <img src="assets/images/aictflogo.png" alt="AICT-FIRM" class="brandlg"></span></p>
                               <div class="adds">
                                    <p>GLOBAL ADVANCED CONSULTANTS & NETWORK SERVICE FIRM</p>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </section>

            <!-- Copyright -->
            <section id="copyright" class="p-3 odd copyright">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-md-12 p-3 text-center">
                            <p>© 2020 Design & Developed </p>
                        </div>
                    </div>
                </div>
            </section>

        </footer>
        <!-- Scroll [to top] -->
        <div id="scroll-to-top" class="scroll-to-top">
            <a href="#header" class="smooth-anchor">
                <i class="fas fa-arrow-up"></i>
            </a>
        </div>        
        
        <!-- ==============================================
        Google reCAPTCHA // Put your site key here
        =============================================== -->
        <script src="../www.google.com/recaptcha/api9516.js?render=6Lf-NwEVAAAAAPo_wwOYxFW18D9_EKvwxJxeyUx7"></script>


         <script>
            var currentTab = 0; // Current tab is set to be the first tab (0)
            showTab(currentTab); // Display the current tab
            
            function showTab(n) {
              // This function will display the specified tab of the form...
              var x = document.getElementsByClassName("tab");
              //alert(n);
              x[n].style.display = "block";
              //... and fix the Previous/Next buttons:
              if (n == 0) {
                document.getElementById("prevBtn").style.display = "none";
              } else {
                document.getElementById("prevBtn").style.display = "inline";
              }
              if (n == (x.length - 1)) {
                document.getElementById("nextBtn").style.display="none";
                document.getElementById("nextBtnCust").style.display = "inline";

              } 
              else {
                document.getElementById("nextBtn").innerHTML = "Next";
              }
              //... and run a function that will display the correct step indicator:
              fixStepIndicator(n)
            }
            
            function nextPrev(n) {
          
                  var x = document.getElementsByClassName("tab");
                  // Exit the function if any field in the current tab is invalid:
                  // if (n == 1 && !validateForm()) return false;
                  // Hide the current tab:
                  x[currentTab].style.display = "none";
                  // Increase or decrease the current tab by 1:
                  currentTab = currentTab + n;
                  // if you have reached the end of the form...
                  if (currentTab >= x.length) {

                    
                    
                    // ... the form gets submitted:
                    document.getElementById("regForm").submit();
                    //document.getElementById("nextBtn").type = "submit";
                    return false;
                  }
                  // Otherwise, display the correct tab:

              //}
                  showTab(currentTab);
              
            }
            
            // function validateForm() {
            //   // This function deals with validation of the form fields
            //   var x, y, i, valid = true;
            //   x = document.getElementsByClassName("tab");
            //   y = x[currentTab].getElementsByTagName("input");
            //   // A loop that checks every input field in the current tab:
            //   for (i = 0; i < y.length; i++) {
            //     // If a field is empty...
            //     if (y[i].value == "") {
            //       // add an "invalid" class to the field:
            //       y[i].className += " invalid";
            //       // and set the current valid status to false
            //       valid = false;
            //     }
            //   }
            //   // If the valid status is true, mark the step as finished and valid:
            //   if (valid) {
            //     document.getElementsByClassName("step")[currentTab].className += " finish";
            //   }
            //   return valid; // return the valid status
            // }
            
            function fixStepIndicator(n) {
              // This function removes the "active" class of all steps...
              var i, x = document.getElementsByClassName("step");
              for (i = 0; i < x.length; i++) {
                x[i].className = x[i].className.replace(" active", "");
              }
              //... and adds the "active" class on the current step:
              x[n].className += " active";
            }
            </script>

        <!-- ==============================================
        Vendor Scripts
        =============================================== -->
        <script src="assets/js/vendor/jquery.min.js"></script>
        <script src="assets/js/vendor/jquery.easing.min.js"></script>
        <script src="assets/js/vendor/jquery.inview.min.js"></script>
        <script src="assets/js/vendor/popper.min.js"></script>
        <script src="assets/js/vendor/bootstrap.min.js"></script>
        <script src="assets/js/vendor/ponyfill.min.js"></script>
        <script src="assets/js/vendor/slider.min.js"></script>
        <script src="assets/js/vendor/animation.min.js"></script>
        <script src="assets/js/vendor/progress-radial.min.js"></script>
        <script src="assets/js/vendor/bricklayer.min.js"></script>
        <script src="assets/js/vendor/gallery.min.js"></script>
        <script src="assets/js/vendor/shuffle.min.js"></script>
        <script src="assets/js/vendor/particles.min.js"></script>
        <script src="assets/js/main.js"></script>
        
        <!-- ==============================================
        Particles
        =============================================== -->
        <script>
            particles('squares', 'particles-1');
        </script>

         <!-- ==============================================
        Vendor Scripts
        =============================================== -->
       
    </body>
</html>