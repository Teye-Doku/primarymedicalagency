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
                                        <li class="breadcrumb-item active" aria-current="page">Web Design</li>
                                    </ol>
                                </nav>
                                <h1 class="mb-0 title effect-static-text">Web Design</h1>
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
                            <h2><span class="featured"><span>Web Design</span></span></h2>
                            <blockquote><p>Assistance Business Service Web Design® mission is to provide professional and 
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
                            <h1>What is your web design requirement?</h1>
                            <div class="number1">
                                <input type="radio" id="cnw" name="webdesign" value="newweb_design">
                                <label for="nw"> Create a new website</label><br>
                            </div>
                            <div class="number2">
                                <input type="radio" id="mjwc" name="webdesign" value="major_web_chnages">
                                <label for="web_chnages"> Major changes to my website</label><br>
                            </div>
                            <div class="number3">   
                                <input type="radio" id="mjwb" name="webdesign" value="minor_web_changes">
                                <label for="minor_changes"> Minor changes to my website</label>
                            </div>
                            <div class="number5">   
                                <input type="radio" id="others" name="webdesign" value="other">
                                <label for="other">Other</label>
                            </div>
                        </div>
                        <div class="tab">
                            <h1>Which platform is your website built on?</h1>
                            <div class="number1">
                                <input type="radio" id="nots" name="webdesign2" value="not-sure">
                                <label for="not-sure"> I'm not sure</label><br>
                            </div>
                            <div class="number2">
                                <input type="radio" id="cb" name="webdesign2" value="Custom_Build">
                                <label for="Custom_Build"> Custom Built</label><br>
                            </div>
                            <div class="number3">   
                                <input type="radio" id="joomla" name="webdesign2" value="Joomla">
                                <label for="joomla"> Joomla</label>
                            </div>
                            <div class="number4">   
                                <input type="radio" id="shopify" name="webdesign2" value="shopify">
                                <label for="shopify"> Shopify</label>
                            </div>
                            <div class="number5">   
                                <input type="radio" id="squarespace" name="webdesign2" value="squarespace">
                                <label for="squarespace">SquareSpace</label>
                            </div>
                            <div class="number6">   
                                <input type="radio" id="wix" name="webdesign2" value="wix">
                                <label for="wix">Wix</label>
                            </div>
                            <div class="number6">   
                                <input type="radio" id="wordpress" name="webdesign2" value="wordpress">
                                <label for="wordpress">Wordpress</label>
                            </div>
                            <div class="number7">   
                                <input type="radio" id="other" name="webdesign2" value="other">
                                <label for="other">Other</label>
                            </div>
                        </div>
                        <div class="tab">
                            <h1>What type of business is this for?</h1>
                            <div class="number1">
                                <input type="radio" id="pp" name="webdesign3" value="personal_project">
                                <label for="pp">Personal project</label><br>
                            </div>
                            <div class="number2">   
                                <input type="radio" id="st" name="webdesign3" value="st">
                                <label for="st">Sole trader/self-employed</label>
                            </div>
                            <div class="number3">   
                                <input type="radio" id="sb" name="webdesign3" value="sb">
                                <label for="sb">Small business (1 - 9 employees)</label>
                            </div>
                            <div class="number4">   
                                <input type="radio" id="mb" name="webdesign3" value="mb">
                                <label for="mb">Medium business (10 - 29 employees)</label>
                            </div>
                            <div class="number5">   
                                <input type="radio" id="lb" name="webdesign3" value="lb">
                                <label for="lb">Large business (30 - 99 employees)</label>
                            </div>
                            <div class="number6">   
                                <input type="radio" id="elb" name="webdesign3" value="elb">
                                <label for="elb">Extra large business (100 or more employees)</label>
                            </div>
                            <div class="number7">   
                                <input type="radio" id="cnp" name="webdesign3" value="cnp">
                                <label for="cnp">Charity/non-profit</label>
                            </div>
                            <div class="number7">   
                                <input type="radio" id="other" name="webdesign3" value="other">
                                <label for="other">Other</label>
                            </div>
                        </div>
                        <div class="tab">
                            <h1>What industry do you operate in?</h1>
                            <div class="number1">
                                <input type="radio" id="buss" name="webdesign4" value="buss">
                                <label for="buss">Business services</label><br>
                            </div>
                            <div class="number2">   
                                <input type="radio" id="cii" name="webdesign4" value="cii">
                                <label for="cii">Creative industries</label>
                            </div>
                            <div class="number3">   
                                <input type="radio" id="entev" name="webdesign4" value="entev">
                                <label for="entev">Entertainment & events</label>
                            </div>
                            <div class="number4">
                                <input type="radio" id="finss" name="webdesign4" value="finss">
                                <label for="finss">Financial services</label><br>
                            </div>
                            <div class="number5">   
                                <input type="radio" id="helft" name="webdesign4" value="helft">
                                <label for="helft">Health & fitness</label>
                            </div>
                            <div class="number6">   
                                <input type="radio" id="hmserv" name="webdesign4" value="hmserv">
                                <label for="hmserv">Home services</label>
                            </div>
                            <div class="number7">   
                                <input type="radio" id="rsfood" name="webdesign4" value="rsfood">
                                <label for="rsfood">Restaurant/food</label>
                            </div>
                            <div class="number7">   
                                <input type="radio" id="rtgoods" name="webdesign4" value="rtgoods">
                                <label for="rtgoods">Retail/consumer goods</label>
                            </div>
                            <div class="number7">   
                                <input type="radio" id="techsoft" name="webdesign4" value="techsoft">
                                <label for="techsoft">Technology/software</label>
                            </div>
                            <div class="number7">   
                                <input type="radio" id="other" name="webdesign4" value="other">
                                <label for="other">Other</label>
                            </div>
                        </div>
                        <div class="tab">
                            <h1>What is your estimated budget for this project?</h1>
                            <div class="number1">
                                <input type="radio" id="budget" name="webdesign5" value="budget">
                                <label for="budget">Less than £250</label><br>
                            </div>
                            <div class="number2">
                                <input type="radio" id="budgetone" name="webdesign5" value="budgetone">
                                <label for="budgetone">£250 - £999</label><br>
                            </div>
                            <div class="number3">   
                                <input type="radio" id="budgetwo" name="webdesign5" value="budgetwo">
                                <label for="budgetwo">£1,000 - £1,999</label>
                            </div>
                            <div class="number4">   
                                <input type="radio" id="budgethree" name="webdesign5" value="budgethree">
                                <label for="budgethree">£2,000 - £2,999</label>
                            </div>
                            <div class="number5">   
                                <input type="radio" id="budgetfour" name="webdesign5" value="budgetfour">
                                <label for="budgetfour">£3,000 - £4,999</label>
                            </div>
                            <div class="number6">   
                                <input type="radio" id="budgetfive" name="webdesign5" value="budgetfive">
                                <label for="budgetfive">£5,000 or more</label>
                            </div>
                            <div class="number7">   
                                <input type="radio" id="other" name="webdesign5" value="other">
                                <label for="other">Other</label>
                            </div>
                        </div>
                        <div class="tab">
                            <h1>Where do you need the Web Designer?</h1>
                            <p>The postcode or town for the address where you want the Web Designer.</p>
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