<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the `#content` element and all content thereafter.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package travel-republiq
 */

?>

	</div><!-- #content -->

	<?php //get_template_part( 'template-parts/layout/footer', 'content' ); ?>
<!-- <footer id="footer" style="background: linear-gradient(to right, #15717B,#80915A);background-image: url(https://travels.mobilesapplication.com/uploads/settings/17497176429815.png);"> -->
<footer id="footer" style="background: linear-gradient(to right, #15717B,#80915A);">
            <div class="footer-top">
            <div class="container mx-auto px-10">
                <div class="row  flex flex-wrap gap-4 lg:flex-row flex-col">

                    <div class="lg:w-[45%] w-full">
                        <div class="footer-contact-card">
                            <h4 class="font-body font-normal text-2xl md:text-3xl text-white footer-contact-title">Office Location</h4>

                                                            <div class="contact-item">
                                    <span class="ci-icon">
										<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#FFFFFF" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
											<path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10m0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6"/>
										</svg>
									</span>
                                    <div class="ci-text">
                                        <div class="ci-label font-body text-xl font-normal">Location</div>
                                        <address class="ci-value font-body text-lg font-normal">
                                            3B1 Oceanfront Residence,
                                            Fithiroanu magu, K.Hulhumale,
                                            Maldives
                                        </address>
                                    </div>
                                </div>
                            
                                                            <div class="contact-item">
                                    <span class="ci-icon">
										<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#FFFFFF" class="bi bi-telephone-fill" viewBox="0 0 16 16">
											<path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.68.68 0 0 0 .178.643l2.457 2.457a.68.68 0 0 0 .644.178l2.189-.547a1.75 1.75 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.6 18.6 0 0 1-7.01-4.42 18.6 18.6 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877z"/>
										</svg>
									</span>
                                    <div class="ci-text">
                                        <div class="ci-label font-body text-xl font-normal">Contact Us</div>
                                        <a class="ci-value" href="tel:+960 7562222">
                                            <span dir="ltr font-body text-lg font-normal">+960 7562222</span>
                                        </a>
                                    </div>
                                </div>
                            
                                                            <div class="contact-item">
                                    <span class="ci-icon">
										<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#FFFFFF" class="bi bi-envelope-fill" viewBox="0 0 16 16">
											<path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414zM0 4.697v7.104l5.803-3.558zM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586zm3.436-.586L16 11.801V4.697z"/>
										</svg>
									</span>
                                    <div class="ci-text">
                                        <div class="ci-label font-body text-xl font-normal">Email Address</div>
                                        <a class="ci-value font-body text-lg font-normal" href="mailto:sales@trmaldives.com">
                                            sales@trmaldives.com
                                        </a>
                                    </div>
                                </div>
                                                    </div>
                    </div>


                    <style>
                        /* Footer card style */
						#footer .footer-top {
    padding: 80px 0 30px;
    box-shadow: 0 2px 15px rgba(25, 119, 204, .1);
}

.row {
    --bs-gutter-x: 1.5rem;
    --bs-gutter-y: 0;
    display: flex;
    flex-wrap: wrap;
    margin-top: calc(-1 * var(--bs-gutter-y));
    margin-right: calc(-.5 * var(--bs-gutter-x));
    margin-left: calc(-.5 * var(--bs-gutter-x));
}

@media (min-width: 1024px) {
    .col-lg-4 {
        flex: 0 0 auto;
        width: 33.33333333%;
    }
}

@media (min-width: 768px) {
    .col-md-12 {
        flex: 0 0 auto;
        width: 100%;
    }
}

@media (min-width: 1024px) {
    .col-lg-3 {
        flex: 0 0 auto;
        width: 25%;
    }
}

@media (min-width: 768px) {
    .col-md-12 {
        flex: 0 0 auto;
        width: 100%;
    }
}

@media (min-width: 1024px) {
    .col-lg-5 {
        flex: 0 0 auto;
        width: 41.66666667%;
    }
}

@media (min-width: 768px) {
    .col-md-12 {
        flex: 0 0 auto;
        width: 100%;
    }
}

.footer-title, .form-control, .select2-container, article .row {
    margin-bottom: 15px;
}

.contact-item {
    display: flex;
    align-items: center;
    margin-bottom: 10px;
    font-size: 14px;
    color: #333;
}

.contact-item {
    display: flex;
    gap: 14px;
    align-items: flex-start;
    margin: 18px 0;
}

.ci-icon {
    width: 44px;
    height: 44px;
    border-radius: 50%;
    background: linear-gradient(to right, #1ebea5, #61ce70);
    display: inline-flex;
    align-items: center;
    justify-content: center;
    flex: 0 0 44px;
}

.ci-text {
    display: flex;
    flex-direction: column;
    gap: 4px;
}

.ci-label {
    color: #E0B44F;
    font-weight: 600;
    font-size: 12px;
}

.ci-value {
    color: #fff;
    font-size: 16px;
    font-weight: 500;
    text-decoration: none;
}
                        /* Items */
                        .contact-item {
                            display: flex;
                            gap: 14px;
                            align-items: flex-start;
                            margin: 18px 0;
                        }

                        .ci-icon {
                            width: 44px;
                            height: 44px;
                            border-radius: 50%;
                            background: linear-gradient(to right, #1ebea5, #61ce70);
                            /* teal circle from your mock */
                            display: inline-flex;
                            align-items: center;
                            justify-content: center;
                            flex: 0 0 44px;
                        }

                        .ci-icon i {
                            font-size: 20px;
                            color: #fff;
                            line-height: 1;
                        }

                        .ci-text {
                            display: flex;
                            flex-direction: column;
                            gap: 4px;
                        }

                        .ci-label {
                            color: #E0B44F;
                            /* golden/yellow label */
                            font-weight: 600;
                            font-size: 12px;
                        }

                        .ci-value {
                            color: #fff;
                            font-size: 16px;
                            font-weight: 500;
                            text-decoration: none;
                        }





                        .company-info {
                            margin-top: -64px;
                        }

                        .legal-info p {
                            font-size: 12px;
                            color: white;
                            /* margin-bottom: 5px; */
                            line-height: 1.4;
                            margin-top: -11px;
                        }

                        .contact-details {
                            margin-top: 20px;
                        }

                        .contact-item {
                            display: flex;
                            align-items: center;
                            margin-bottom: 10px;
                            font-size: 14px;
                            color: #333;
                        }

                        .contact-item i {
                            color: #ffffff;
                        }

                        .contact-item a {
                            color: #ffffff;
                            text-decoration: none;
                        }

                        .contact-item a:hover {
                            color: #022B57;
                            text-decoration: underline;
                        }




                        .newsletter {
                            max-width: 800px;
                            margin: auto;
                            padding: 50px 20px;
                            color: white;
                        }

                        .newsletter h2 {
                            font-size: 28px;
                            font-weight: bold;
                            margin-bottom: 30px;
                        }

                        .form-row {
                            display: flex;
                            gap: 20px;
                            margin-bottom: 20px;
                            flex-wrap: wrap;
                        }

                        .form-group {
                            flex: 1;
                        }

                        label {
                            display: block;
                            font-size: 14px;
                            margin-bottom: 8px;
                        }

                        input {
                            width: 100%;
                            padding: 10px;
                            font-size: 14px;
                            border: none;
                            border-bottom: 1px solid #f9f9f9;
                            background: transparent;
                            color: white;
                            outline: none;
                        }

                        button {
                            padding: 10px 25px;
                            font-size: 14px;
                            border: 1px solid white;
                            background: transparent;
                            color: white;
                            border-radius: 5px 20px 5px 20px;
                            cursor: pointer;
                            transition: 0.3s;
                        }

                        button:hover {
                            background: white;
                            color: black;
                        }

                        .button_new {
                            padding: 10px 25px;
                            font-size: 14px;
                            border: 1px solid white;
                            background: transparent;
                            color: white;
                            border-radius: 5px 20px 5px 20px;
                            cursor: pointer;
                            transition: 0.3s;
                        }

                        button_new:hover {
                            background: white;
                            color: black;
                        }

                        .whatsapp-btn {
                            /* display: inline-block; */
                            padding: 10px 25px;
                            font-size: 14px;
                            border-radius: 30px;
                            background: linear-gradient(to right, #1ebea5, #61ce70);
                            color: white;
                            text-decoration: none;
                            margin-left: 20px;
                        }

                        .whatsapp-btn:hover {
                            opacity: 0.9;
                        }
                    </style>



                    <!-- <div class="footer-links lg:w-1/4 w-full">

                        <div class="footer-title">
                            <h4 class="font-body font-normal text-2xl md:text-3xl text-white">Quick Links</h4>
                        </div>
                        <ul>
                            <li><a class="nav-link font-body text-lg text-white" href="/" target=""> Home
                                </a>
                            </li>
                            <li><a class="nav-link font-body text-lg text-white" href="/travel-guide" target=""> Explore
                                </a>
                            </li>
                            <li><a class="nav-link font-body text-lg text-white" href="/service" target=""> Services
                                </a>
                            </li>
                            <li><a class="nav-link font-body text-lg text-white" href="/spo" target=""> Exclusive
                                </a>
                            </li>
                            <li><a class="nav-link font-body text-lg text-white" href="make-an-enquiry" target=""> Travel With Us
                                </a>
                            </li>
                        </ul>
                    </div> -->
                    <div class="footer-links lg:w-[45%] w-full">
                        <div class="footer-title">
                            <h4 class="font-body font-normal text-2xl md:text-3xl text-white">Newsletter</h4>
                            <form>
                                <div class="form-row">
                                    <div class="form-group">
                                        <label class="font-body text-lg text-white">First Name*</label>
                                        <input type="text" name="first_name" required="">
                                    <div data-lastpass-icon-root="" style="position: relative !important; height: 0px !important; width: 0px !important; display: initial !important; float: left !important;"></div></div>
                                    <div class="form-group">
                                        <label class="font-body text-lg text-white">Last Name*</label>
                                        <input type="text" name="last_name" required="">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="font-body text-lg text-white">Email Address*</label>
                                    <input type="email" name="email" required="">
                                </div>
                                <div style="margin-top: 20px;">
                                    <div class="row">
                                        <div class="col-6 font-body text-xl font-normal"> <button type="submit">Subscribe</button></div>
                                        <div class="col-6 font-body text-xl font-normal"> 
                                            <a href="<?php the_field('whatsapp', 'option'); ?>" class="whatsapp-btn flex flex-row gap-2 items-center" target="_blank">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="#FFFFFF" class="bi bi-whatsapp" viewBox="0 0 16 16">
                                                    <path d="M13.601 2.326A7.85 7.85 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 
                                                    16l4.204-1.102a7.9 7.9 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.9 7.9 0 0 0 13.6 2.326zM7.994 
                                                    14.521a6.6 6.6 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 
                                                    6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.56 6.56 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592m3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.73.73 0 0 0-.529.247c-.182.198-.691.677-.691 1.654s.71 1.916.81 2.049c.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232"/>
                                                </svg> 
                                                <span>Chat on <br>WhatsApp</span>
                                            </a>
                                        </div>
                                        <div class="col-6 font-body text-xl font-normal"> 
                                            <a href="<?php the_field('telegram', 'option'); ?>" class="whatsapp-btn flex flex-row gap-2 items-center" target="_blank">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="#FFFFFF" class="bi bi-telegram" viewBox="0 0 16 16">
                                                    <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0M8.287 5.906q-1.168.486-4.666 2.01-.567.225-.595.442c-.03.243.275.339.69.47l.175.055c.408.133.958.288 1.243.294q.39.01.868-.32 3.269-2.206 3.374-2.23c.05-.012.12-.026.166.016s.042.12.037.141c-.03.129-1.227 1.241-1.846 1.817-.193.18-.33.307-.358.336a8 8 0 0 1-.188.186c-.38.366-.664.64.015 1.088.327.216.589.393.85.571.284.194.568.387.936.629q.14.092.27.187c.331.236.63.448.997.414.214-.02.435-.22.547-.82.265-1.417.786-4.486.906-5.751a1.4 1.4 0 0 0-.013-.315.34.34 0 0 0-.114-.217.53.53 0 0 0-.31-.093c-.3.005-.763.166-2.984 1.09"/>
                                                </svg>
                                                <span>Chat on <br>Telegram</span>
                                            </a>
                                        </div>
                                    </div>


                                </div>
                            </form>
                        </div>
                        <!-- Floating Buttons for Telegram and Botim -->
                        <!-- Floating Round Buttons for Telegram and Botim -->
                        <div style="position: fixed; bottom: 80px; right: 20px; z-index: 9999; display: flex; flex-direction: column; gap: 14px;">

                            <!-- Telegram Button -->
                            <!-- <a href="#" target="_blank"
                                style="width: 56px; height: 56px; background: #0088cc; border-radius: 50%; display: flex; align-items: center; justify-content: center; box-shadow: 0 2px 10px rgba(0,0,0,0.2);">
                                <img src="https://travels.mobilesapplication.com/assets/frontend/images/telegram.png" alt="Telegram"
                                    style="width: 28px; height: 28px;">
                            </a> -->

                            <!-- Botim Button -->
                            <!-- <a href="#" target="_blank"
                                style="width: 56px; height: 56px; background: #4fb0f4; border-radius: 50%; display: flex; align-items: center; justify-content: center; box-shadow: 0 2px 10px rgba(0,0,0,0.2);">
                                <img src="https://travels.mobilesapplication.com/assets/frontend/images/botim.png" alt="Botim"
                                    style="width: 28px; height: 28px;">
                            </a> -->

                        </div>



                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom" style="background-color: #080a0c;">
        <div class="container flex py-1">
            <div class="me-md-auto text-center text-md-start">
                <div class="copyright" style="text-align: center; font-family: 'Montserrat', sans-serif; color: #ffffff; margin-top: 8px;">
                    © 2025&nbsp;Travel RepubliQ.&nbsp;All Rights Reserved
                </div>

            </div>
            <div class="privacy-text" style="font-family: 'Montserrat', sans-serif; color: #3d3333; font-size: 14px; margin-top: 8px;">

                <div class="social-links flex text-center text-md-right pt-3 lg:pt-0">
    
                 <a href="#" title="Instagram" data-bs-placement="top" target="_blank" class="social-instagram me-3" style="background-color: #FFFFFF36 ;"><i class="bi bi-instagram" style="color:#ffffff;"></i></a>
    
        
        <a href="#" title="Telegram" data-bs-placement="top" target="_blank" class="social-telegram me-3" style="background-color: #FFFFFF36;">
        <img src="https://travels.mobilesapplication.com/assets/frontend/images/telegram.png" alt="Telegram" style="width: 20px;">
    </a>
    
    
    
        <a href="#" title="Bottom" data-bs-placement="top" target="_blank" class="social-bottom me-3" style="background-color: #FFFFFF36;">
        <img src="https://travels.mobilesapplication.com/assets\frontend\images\botim (1).png" alt="Bottom" style="width: 20px;">
    </a>


</div>
            </div>
        </div>
        
</div></footer>


</div><!-- #page -->

<style>

@media (min-width: 768px) {
    .me-md-auto {
        margin-right: auto !important;
    }
}

	#footer .footer-bottom, .section-border-top {
		border-top: 1px solid #edf3f2;
	}

</style>

<!-- JavaScript -->
<script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>

<?php wp_footer(); ?>

</body>
</html>
