<form id="pop-up-form">
    
    <div class="pop-up-wrapper">


        <div class="close-pop-up">
            <svg width="18" height="18">
                <use href="#close"></use>
            </svg>
        </div>


        <div class="titles">
            <h3>SELECT MEETING LOCATION</h3>
            <p>Your request has been successfully submitted</p>
        </div>


        <div class="step">
            <h4>Step 1: Location</h4>
            
            <div class="locations">


                <label class="location">
                    <input type="radio" name="location" hidden>
                    <img src="/assets/images/location-1.png" alt="">
                    <div class="top-part">
                        <p class="adress">Los Angeles, CA 742 Evergreen Terrace, CA 90012</p>
                    </div>
                    <div class="bottom-part">
                        <span class="location-name">OUR LOBBY</span>
                        <p class="location-text">Our HQ Lobby (Coffee included)</p>
                    </div>
                </label>

                  <label class="location">
                    <input type="radio" name="location" hidden>
                    <img src="/assets/images/location-3.png" alt="">
                    <div class="top-part">
                        <p class="adress">Los Angeles, CA 742 Evergreen Terrace, CA 90012</p>
                    </div>
                    <div class="bottom-part">
                        <span class="location-name">OUR LOBBY</span>
                        <p class="location-text">Our HQ Lobby (Coffee included)</p>
                    </div>
                </label>

                  <label class="location">
                    <input type="radio" name="location" hidden>
                    <img src="/assets/images/location-3.png" alt="">
                    <div class="top-part">
                        <p class="adress">Los Angeles, CA 742 Evergreen Terrace, CA 90012</p>
                    </div>
                    <div class="bottom-part">
                        <span class="location-name">OUR LOBBY</span>
                        <p class="location-text">Our HQ Lobby (Coffee included)</p>
                    </div>
                </label>
                

            </div>
        </div>

        <div class="step">
            <h4>Step 2: Date/Time</h4>

            <div class="data-picker">
                <div class="month__wrapper">
                    <svg width="24" height="24">
                        <use href="#arrow-right"></use>
                    </svg>
                    <div class="month">December</div>
                    <svg class="next" width="24" height="24">
                        <use href="#arrow-right"></use>
                    </svg>
                </div>
                <div class="date__wrapper">
                    <label class="date">
                        <input type="radio" name="date" hidden>
                        <span class="w">Sun</span>
                        <span class="n">1</span>
                    </label>

                    <label class="date">
                        <input type="radio" name="date" hidden>
                        <span class="w">Mon</span>
                        <span class="n">2</span>
                    </label>

                    <label class="date">
                        <input type="radio" name="date" hidden>
                        <span class="w">Tue</span>
                        <span class="n">3</span>
                    </label>

                    <label class="date">
                        <input type="radio" name="date" hidden>
                        <span class="w">Wen</span>
                        <span class="n">4</span>
                    </label>
                </div>
            </div>
        </div>

        <div class="step">
            <h4>Step 2: Contact Information</h4>
            <div class="contact-form">
                <div class="input-wrapper">
                    <label class="input-label">Phone Number *</label>
                    <div class="input-block">
                        <input type="text" placeholder="+1 234 567 8900">
                    </div>
                </div>

                <div class="input-wrapper">
                    <label class="input-label">Full Name *</label>
                    <div class="input-block">
                        <input type="text" placeholder="+1 234 567 8900">
                    </div>
                </div>

                <div class="input-wrapper">
                    <label class="input-label">Your Address*</label>
                    <div class="input-block">
                        <input type="text" placeholder="+1 234 567 8900">
                    </div>
                </div>
            </div>
        </div>

        <div class="btn-glass-effect">
            Schedule a Meeting
        </div>

    </div>

</form>
<script src="../assets/scripts/pop-up.js"></script>