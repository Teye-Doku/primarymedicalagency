<?php 
    include('includes/header.php');
    include('includes/navbar.php'); 
?>
   
        <!-- Hero -->
        <section id="slider" class="hero p-0 odd featured">
            <div class="swiper-container no-slider animation slider-h-50 slider-h-auto">
                <div class="swiper-wrapper">

                    <!-- Item 1 -->
                    <div class="swiper-slide slide-center">

                        <!-- Media -->
                        <img src="assets/images/bg-wide.jpg" alt="Full Image" class="full-image" data-mask="80">

                        <div class="slide-content row text-center">
                            <div class="col-12 mx-auto inner">

                                <!-- Content -->
                                <nav data-aos="zoom-out-up" data-aos-delay="800" aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Consulting</li>
                                    </ol>
                                </nav>
                                <h1 class="mb-0 title effect-static-text">Consulting</h1>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!-- Result -->
        <section id="result" class="section-1 offers">
            <div class="container">
            <div class="row items">
                <div class="col-12 col-md-4 pr-md-5 text">
                    <div data-aos="fade-up"  class="row intro">
                        <div class="col-12 p-0">
                            <span class="pre-title m-0">Services</span>
                            <h2><span class="featured"><span>Consulting</span></span></h2>
                            <blockquote><p>Assistance Business Service Consulting® mission is to provide professional and 
                                paraprofessional services to clients in their homes, assisting them to achieve the 
                                highest level of potential in their day-to-day self-care activities.</p>
                            </blockquote>
                        </div>
                    </div>
                </div>
                <div data-aos="fade-up" class="col-12 col-md-7 item acts">
                     <form id="regForm" action="">
                        <!-- One "tab" for each step in the form: -->
                        <div class="tab">
                            <h1>What are your counselling needs?</h1>
                            <div class="number1">
                                <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                                <label for="vehicle1"> Anger management</label><br>
                            </div>
                            <div class="number2">
                                <input type="checkbox" id="vehicle2" name="vehicle2" value="Car">
                                <label for="vehicle2"> Building confidence and esteem</label><br>
                            </div>
                            <div class="number3">   
                                <input type="checkbox" id="vehicle2" name="vehicle2" value="Car">
                                <label for="vehicle2"> Changing negative habit</label><br>
                            </div>
                            <div class="number4">   
                                <input type="checkbox" id="vehicle2" name="vehicle2" value="Car">
                                <label for="vehicle2"> Dealing with a loss</label><br>
                            </div>
                            <div class="number5">   
                                <input type="checkbox" id="vehicle2" name="vehicle2" value="Car">
                                <label for="vehicle2"> Dealing with stress or depression</label><br>
                            </div>
                            <div class="number6">   
                                <input type="checkbox" id="vehicle2" name="vehicle2" value="Car">
                                <label for="vehicle2"> Other</label><br>
                            </div>
                        </div>
                        <div class="tab">
                            <h1>Is this service for you?</h1>
                            <div class="number1">
                                <input type="radio" id="forme" name="gender" value="female">
                                <label for="female"> Yes, this is for me</label><br>
                            </div>
                            <div class="number2">
                                <input type="radio" id="female" name="gender" value="female">
                                <label for="female"> Yes, for me and my family</label><br>
                            </div>
                            <div class="number3">   
                                <input type="radio" id="yess" name="gender" value="other">
                                <label for="other"> Yes, for me and my partner</label>
                            </div>
                            <div class="number4">   
                                <input type="radio" id="esea" name="gender" value="other">
                                <label for="other"> No, this is for someone else</label>
                            </div>
                            <div class="number5">   
                                <input type="radio" id="others" name="gender" value="other">
                                <label for="other">Other</label>
                            </div>
                        </div>
                        <div class="tab">
                            <h1>Have you ever had counselling before?</h1>
                            <div class="number1">
                                <input type="radio" id="female" name="gender" value="female">
                                <label for="female">Yes</label><br>
                            </div>
                            <div class="number2">   
                                <input type="radio" id="other" name="gender" value="other">
                                <label for="other">No</label>
                            </div>
                            <div class="number3">   
                                <input type="radio" id="other" name="gender" value="other">
                                <label for="other">Other</label>
                            </div>
                        </div>
                        <div class="tab">
                            <h1>How would you like to receive this service, remotely or in-person?</h1>
                            <div class="number1">
                                <input type="radio" id="male" name="gender" value="male">
                                <label for="male">I would prefer remote - Video call etc</label><br>
                            </div>
                            <div class="number2">   
                                <input type="radio" id="other" name="gender" value="other">
                                <label for="other">I don’t mind, either are fine</label>
                            </div>
                            <div class="number3">   
                                <input type="radio" id="other" name="gender" value="other">
                                <label for="other">I would prefer in-person</label>
                            </div>
                        </div>
                        <div class="tab">
                            <h1>Which kind(s) of counselling would you consider?</h1>
                            <div class="number1">
                                <input type="radio" id="male" name="gender" value="male">
                                <label for="male">Face to face - I visit the professional</label><br>
                            </div>
                            <div class="number2">
                                <input type="radio" id="female" name="gender" value="female">
                                <label for="female">Face to face - professional visits me</label><br>
                            </div>
                            <div class="number3">   
                                <input type="radio" id="other" name="gender" value="other">
                                <label for="other">Group session</label>
                            </div>
                            <div class="number4">   
                                <input type="radio" id="other" name="gender" value="other">
                                <label for="other">Other</label>
                            </div>
                        </div>
                        <div class="tab">
                            <h1>Where do you need the Counsellor?</h1>
                            <p>The postcode or town for the address where you want the Counsellor.</p>
                            <div class="number1 textnumber">
                                
                                <input type="text" name="name" class="form-control field-name" placeholder="Enter your postcode or town">
                            </div>
                        </div>
                        <div style="overflow:auto;">
                          <div class="pvbtns">
                            <button type="button" id="prevBtn" onclick="nextPrev(-1)">Back</button>
                            <button type="button" id="nextBtn" onclick="nextPrev(1)">Continue</button>
                          </div>
                        </div>
                        <!-- Circles which indicates the steps of the form: -->
                        <div style="text-align:center;margin-top:40px;">
                          <span class="step"></span>
                          <span class="step"></span>
                          <span class="step"></span>
                          <span class="step"></span>
                          <span class="step"></span>
                        </div>
                      </form>
                </div>
            </div>
            </div>
        </section>
  
       
<?php include('includes/footer.php'); ?>