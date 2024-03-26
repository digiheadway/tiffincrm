<?php 
echo $phonetoken = $_COOKIE['phone'];
echo $phone = $phonetoken / '4578348';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Deliveries - iMeals</title>
    <link rel="stylesheet" href="css/base.css?v=0.0.1">
    <link rel="stylesheet" href="css/style.css?v1">
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:ital,wght@0,100..900;1,100..900&family=Roboto+Flex:opsz,wght@8..144,100..1000&display=swap"
        rel="stylesheet">
</head>

<body>
    <header class="pos-r">
        <div class="container noscroll header_box">
            <div class="hamburger" onclick="toggleMenu()">
                <svg width="18" height="24" viewBox="0 0 18 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M1 1H17M1 7H9M1 13H17" stroke="#3E3E3E" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" />
                </svg>
            </div>
            <div class="nav_logo">
                <span>iMeals</span>
            </div>
             <a href="https://api.whatsapp.com/send?phone=919068062563" class="whats_app_icon">
                    <img src="img/whast-app-btn-icon.svg" alt="Whats app icon">
                </a>
        </div>
        </div>
        <nav class="menu">
            <a href="#">Home</a>
            <a href="#">About</a>
            <a href="#">Services</a>
            <a href="#">Contact Us</a>
        </nav>
    </header>

    <main>
        <section class="hero_secion">
            <div class="container">
                <div class="delivery_name r-flex ali-c">
                    <div class="tool_kic_img">
                        <img src="img/tool-kitchen.svg" alt="nife icon">
                    </div>
                    <div class="name_deliry_text">Soumya Kitchen</div>
                </div>
                <div class="hero_cont_box">
                    <div class="cont_box_text">Hi Mohan, Welcome to Soumya Kitchen. Use iMeals app to manage your meals
                        and pay to Soumya kitchen. </div>
                    <div class="app_installation_guide_box r-flex ali-c jut-c">
                        <a href="#">See Installation Guide</a> <span> (App size: 2 MB only)</span>
                    </div>
                </div>
                <div class="active_deliveries_container">
                    <div class="active_deliveries_heading r-flex ali-c">
                        <span>Active Deliveries</span>
                        <img src="img/green-tik.svg" alt="green verification tik">
                    </div>
                    <div class="active_deliveries_box">
                        <div class="brk_tre_box r-flex ali-c jut-sb">
                            <div class="brk_box r-flex ali-c">
                                <img src="img/sun-set.svg" alt="sun set and date">
                                <span>BreakFast - Today</span>
                            </div>
                            <div class="pre_box r-flex ali-c">
                                <img src="img/pre.svg" alt="line up and down">
                                <span>Preparation Started</span>
                            </div>
                        </div>
                        <div class="meal_item_list r-flex ali-c">
                            <img src="img/meals_icon.svg" alt="meal icon">
                            <span>4 Chapati, Dal, Paneer, Raita</span>
                        </div>
                        <div class="req_can_box r-flex ali-c jut-sb">
                            <div class="req_box r-flex ali-c" onclick="request_edit();">
                                <img src="img/edite-icon.svg" alt="eddite text icon">
                                <span>Request Edit in this delivery</span>
                            </div>
                            <div class="can_box r-flex ali-c" onclick="cancel_delivery();">
                                <img src="img/cancel.svg" alt="cancel icon">
                                <span>Cancel This Delivery</span>
                            </div>
                        </div>

                        <div class="active_deloveries_note">
                            <b>Note:</b> Amount is Deducted for this Delivery and cannot be refunded. But You can still
                            cancel this to better utilisation of food prepared for you
                        </div>
                    </div>
                </div>
                <div class="active_deliveries_container">
                    <div class="active_deliveries_heading r-flex ali-c">
                        <span>Upcoming Delivery</span>
                    </div>
                    <div class="active_deliveries_box">
                        <div class="brk_tre_box r-flex ali-c jut-sb">
                            <div class="brk_box r-flex ali-c">
                                <img src="img/sun-set.svg" alt="sun set and date">
                                <span>Lunch - Today</span>
                            </div>
                            <div class="pre_box r-flex ali-c" style="color: #3E3D3D;">
                                <img src="img/clock.svg" alt="line up and down">
                                <span>Preparation Not Started</span>
                            </div>
                        </div>
                        <div class="meal_item_list r-flex ali-c">
                            <img src="img/meals_icon.svg" alt="meal icon">
                            <span>4 Chapati, Dal, Paneer, Raita</span>
                        </div>
                        <div class="req_can_box r-flex ali-c jut-sb">
                            <div class="req_box r-flex ali-c" onclick="request_edit();">
                                <img src="img/color-edite-icon.svg" alt="eddite text icon">
                                <span style="color: #5546AF;">Request Edit in this delivery</span>
                            </div>
                            <div class="can_box r-flex ali-c"  onclick="cancel_delivery()">
                                <img src="img/color-cancel.svg" alt="cancel icon">
                                <span style="color: #5546AF;">Cancel This Delivery</span>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="pause_deliveries_btn">
                    <button class="delivery_pause r-flex ali-c jut-c" onclick="pause_plan();">
                        <img src="img/pause.svg" alt="pause icon">
                        <span>Pause Future Deliveries</span>
                    </button>
                    <div class="delivery_pause_text">This will pause all your future deliveries until you resume it
                        back. Remember: This will not impact Active deliveries</div>

                </div>
            </div>
        </section>

        <section class="transactions_section">
            <div class="container">
                <div class="add_balance_box r-flex ali-c jut-sb">
                    <div class="left_wallet_box">
                        <div class="wallet_icon r-flex ali-c">
                            <img src="img/wallet-icon.svg" alt="wallet icon">
                            <div class="balance_box c-flex">
                                <div class="amount_balance_text">5,000</div>
                                <div class="balance_span_text">Balance</div>
                            </div>
                        </div>
                    </div>

                    <div class="right_add_balance_box" onclick="add_balance()">+Add Balance</div>
                </div>
                <button class="go_to_trans_box" onclick="toggleBtn()">Go to Transactions</button>
            </div>
        </section>

        <section class="meal_plasns_box">
            <div class="container">
                <div class="active_deliveries_container" style="margin-top: 25px;">
                    <div class="active_deliveries_heading r-flex ali-c">
                        <span>Your Active Meal Plans</span>
                        <img src="img/green-tik.svg" alt="">
                    </div>
                    <div class="active_deliveries_box">
                        <div class="brk_tre_box r-flex ali-c jut-sb">
                            <div class="brk_box r-flex ali-c">
                                <img src="img/sun-set.svg" alt="sun set and date">
                                <span>BreakFast - Today</span>
                            </div>
                            <div class="pre_box r-flex ali-c">
                                <img src="img/scooter-icon.svg" alt="scooter icon">
                                <span>24 Deliveries</span>
                            </div>
                        </div>
                        <div class="meal_item_list r-flex ali-c">
                            <img src="img/meals_icon.svg" alt="meal icon">
                            <span>4 Chapati, Dal, Paneer, Raita</span>
                        </div>
                        <div class="req_can_box r-flex ali-c jut-sb">
                            <div class="req_box r-flex ali-c">
                                <img src="img/tag-icon.svg" alt="tag icon">
                                <span><i>Rs. 40/Meal</i></span>
                            </div>
                            <div class="can_box r-flex ali-c">
                                <div class="eddite_meal_plan r-flex ali-c" onclick="request_edit();">
                                    <img src="img/color-edite-icon.svg" alt="cancel icon">
                                    <span>Request Edit</span>
                                </div>
                                &nbsp;
                                <div class="resume_meal_plan r-flex ali-c" onclick="pause_plan();">
                                    <img src="img/resume-icon.svg" alt="resume icon">
                                    <span>Pause Now</span>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="active_deliveries_container" style="margin-top: 40px;">
                    <div class="active_deliveries_heading r-flex ali-c">
                        <span>Your Paused Meal Plans</span>
                    </div>
                    <div class="active_deliveries_box">
                        <div class="brk_tre_box r-flex ali-c jut-sb">
                            <div class="brk_box r-flex ali-c">
                                <img src="img/sun-set.svg" alt="sun set and date">
                                <span>BreakFast - Today</span>
                            </div>
                            <div class="pre_box r-flex ali-c">
                                <img src="img/scooter-icon.svg" alt="scooter icon">
                                <span>24 Deliveries</span>
                            </div>
                        </div>
                        <div class="meal_item_list r-flex ali-c">
                            <img src="img/meals_icon.svg" alt="meal icon">
                            <span>4 Chapati, Dal, Paneer, Raita</span>
                        </div>
                        <div class="req_can_box r-flex ali-c jut-sb" >
                            <div class="req_box r-flex ali-c">
                                <img src="img/tag-icon.svg" alt="tag icon">
                                <span><i>Rs. 40/Meal</i></span>
                            </div>
                            <div class="can_box r-flex ali-c">
                                <div class="eddite_meal_plan r-flex ali-c"  onclick="request_edit();">
                                    <img src="img/color-edite-icon.svg" alt="cancel icon">
                                    <span>Request Edit</span>
                                </div>
                                &nbsp;
                                <div class="resume_meal_plan r-flex ali-c"  onclick="pause_plan();">
                                    <img src="img/resume-icon.svg" alt="resume icon">
                                    <span>Resume Now</span>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <p id="user_number">Loggen in With <?php echo $phone; ?></p>

                <button class="user_log_out_btn r-flex ali-c jut-c">
                    <img src="img/log-out-icon.svg" alt="log out icon">
                    <span>LogOut</span>
                </button>

                <div class="disclaimer_box">Disclaimer: This Information is provided by Soumya’s Kitchen.</div>
            </div>
        </section>

        <section class="popup_section">
            <div class="background_pop_up">
                <div class="overly-touch" onclick="toggleBtn()"></div>
                <div class="pop_up_container">
                    <div class="close_pop_up_box" onclick="toggleBtn()">
                        <img src="img/close_cross.svg" alt="cross icon">
                    </div>
                    <div class="pop_heading_text" id="popupTitle">Request Edit in Meal Plan</div>
                    <div class="dark_sub_heading"  id="descText" >You have to request this to Soumya’s Kitchen Management Team on
                        Whatsapp</div>
                    <div class="dark_sub_heading" id="steps_desc" style="text-align: start; font-size: 14px;display:none;">
                        1. Enter Payment Amount & Click Below Button
                        <br>
                        2. Pay via any UPI apps
                        <br>
                        3. Send Payment Screenshot to Soumya’s Kitchen
                    </div>
                    <div class="short_not_box" id="noteText">Remember: You must have to send payment screenshot to Soumya’sK Kitchen
                        to Add the Balance in your wallet</div>

                    <input type="number" name="amount" id="amount_input_box" placeholder="Enter Amount" class="amount_input_box" required>
                    <button class="pop_main_btn r-flex ali-c jut-c" id="popup_action_btn" onclick="toggleBtn()">
                        <span pop_main_btn_text id="btn_text">Send Message on Whatspp</span>
                        <img src="img/whast-app-btn-icon.svg" id="btn_icon" alt="what's app icon">
                    </button>
                    <a href="#" class="ss_on_whats_app_btn r-flex ali-c jut-c hideit" id="send_screenshot_link"> Send Screenshot on Whatsapp </a>
                </div>
            </div>
        </section>



        <footer>
            <div class="power_by_text">Powered By iSahayak</div>
        </footer>
    </main>



    <script src="js/script.js?v1.6"></script>
</body>

</html>
