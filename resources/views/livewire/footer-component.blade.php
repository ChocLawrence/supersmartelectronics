<div>
    <footer id="footer">
		<div class="wrap-footer-content footer-style-1">

			<div class="wrap-function-info">
				<div class="container">
					<ul>
						<li class="fc-info-item">
							<i class="fa fa-truck" aria-hidden="true"></i>
							<div class="wrap-left-info">
								<h4 class="fc-name">Free Shipping</h4>
								<p class="fc-desc">Free On Oder Over $99</p>
							</div>

						</li>
						<li class="fc-info-item">
							<i class="fa fa-recycle" aria-hidden="true"></i>
							<div class="wrap-left-info">
								<h4 class="fc-name">Guarantee</h4>
								<p class="fc-desc">30 Days Money Back</p>
							</div>

						</li>
						<li class="fc-info-item">
							<i class="fa fa-credit-card-alt" aria-hidden="true"></i>
							<div class="wrap-left-info">
								<h4 class="fc-name">Safe Payment</h4>
								<p class="fc-desc">Safe your online payment</p>
							</div>

						</li>
						<li class="fc-info-item">
							<i class="fa fa-life-ring" aria-hidden="true"></i>
							<div class="wrap-left-info">
								<h4 class="fc-name">Online Suport</h4>
								<p class="fc-desc">We Have Support 24/7</p>
							</div>

						</li>
					</ul>
				</div>
			</div>
			<!--End function info-->

            
            @if($setting)
                <div class="main-footer-content">

                    <div class="container">

                        <div class="row">

                            <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
                                <div class="wrap-footer-item">
                                    <h3 class="item-header">Contact Details</h3>
                                    <div class="item-content">
                                        <div class="wrap-contact-detail">
                                            <ul>
                                                <li>
                                                    <i class="fa fa-map-marker" aria-hidden="true"></i>
                                                    <p class="contact-txt">{{$setting->address}}</p>
                                                </li>
                                                <li>
                                                    <i class="fa fa-phone" aria-hidden="true"></i>
                                                    <p class="contact-txt">+1{{$setting->phone}}</p>
                                                </li>
                                                <li>
                                                    <i class="fa fa-envelope" aria-hidden="true"></i>
                                                    <p class="contact-txt">{{$setting->email}}</p>
                                                </li>											
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">

                                <div class="wrap-footer-item">
                                    <h3 class="item-header">Hot Line</h3>
                                    <div class="item-content">
                                        <div class="wrap-hotline-footer">
                                            <span class="desc">Call Us toll Free</span>
                                            <b class="phone-number">+1{{$setting->phone}}</b>
                                        </div>
                                        <div class="wrap-hotline-footer" title="Get to us on whatsapp">
                                            <span class="desc">Reach out via whatsapp</span>
                                            <a href="https://api.whatsapp.com/send?phone=+1{{$setting->phone}}&text='Hello Super smart electronics'">
                                               <img src="{{asset('assets/images/whatsapp.png')}}" style="max-width: 50px;">
                                            </a>
                                        </div>
                                    </div>
                                </div>

                                {{-- <div class="wrap-footer-item footer-item-second">
                                    <h3 class="item-header">Sign up for newsletter</h3>
                                    <div class="item-content">
                                        <div class="wrap-newletter-footer">
                                            <form action="#" class="frm-newletter" id="frm-newletter">
                                                <input type="email" class="input-email" name="email" value="" placeholder="Enter your email address">
                                                <button class="btn-submit">Subscribe</button>
                                            </form>
                                        </div>
                                    </div>
                                </div> --}}

                            </div>

                            <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12 box-twin-content ">
                                <div class="row">
                                    <div class="wrap-footer-item twin-item">
                                        <h3 class="item-header">My Account</h3>
                                        <div class="item-content">
                                            <div class="wrap-vertical-nav">
                                                <ul>
                                                    <li class="menu-item"><a href="/cart" class="link-term">My cart</a></li>
                                                    <li class="menu-item"><a href="/checkout" class="link-term">My Checkout</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="wrap-footer-item twin-item">
                                        <h3 class="item-header">Infomation</h3>
                                        <div class="item-content">
                                            <div class="wrap-vertical-nav">
                                                <ul>
                                                    <li class="menu-item"><a href="/shop" class="link-term">Specials</a></li>
                                                    <li class="menu-item"><a href="/contact-us" class="link-term">Contact Us</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="row">

                            <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12" title="Pay through Bitcoin, Zelle or Cashapp">
                                <div class="wrap-footer-item">
                                    <h3 class="item-header">We Using Safe Payments:</h3>
                                    <div class="item-content">
                                        <div class="wrap-list-item wrap-gallery">
                                            <img src="{{asset('assets/images/payment.png')}}" style="max-width: 260px;">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            {{-- <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
                                <div class="wrap-footer-item">
                                    <h3 class="item-header">Social network</h3>
                                    <div class="item-content">
                                        <div class="wrap-list-item social-network">
                                            <ul>
                                                <li><a href="{{$setting->twitter}}" class="link-to-item" title="twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                                <li><a href="{{$setting->facebook}}" class="link-to-item" title="facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                                <li><a href="{{$setting->pinterest}}" class="link-to-item" title="pinterest"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
                                                <li><a href="{{$setting->instagram}}" class="link-to-item" title="instagram"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                                <li><a href="{{$setting->youtube}}" class="link-to-item" title="youtube"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div> --}}

                            {{-- <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
                                <div class="wrap-footer-item">
                                    <h3 class="item-header">Dowload App</h3>
                                    <div class="item-content">
                                        <div class="wrap-list-item apps-list">
                                            <ul>
                                                <li><a href="#" class="link-to-item" title="our application on apple store"><figure><img src="{{asset('assets/images/brands/apple-store.png')}}" alt="apple store" width="128" height="36"></figure></a></li>
                                                <li><a href="#" class="link-to-item" title="our application on google play store"><figure><img src="{{asset('assets/images/brands/google-play-store.png')}}" alt="google play store" width="128" height="36"></figure></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div> --}}

                        </div>
                    </div>

                    <div class="wrap-back-link">
                        <div class="container">
                            <div class="back-link-box">
                                <h3 class="backlink-title">Quick Links</h3>
                                <div class="back-link-row">
                                    @foreach($categories as $category)
                                        <ul class="list-back-link" >
                                            <li><span class="row-title">{{$category->name}}</span></li>
                                            @if(count($category->subCategories) > 0)
                                               @foreach($category->subCategories as $scategory)
                                                <li><a href="/product-category/{{$category->slug}}/{{$scategory->slug}}" class="redirect-back-link" title="mobile">{{$scategory->name}}</a></li>
                                               @endforeach 
                                            @endif
                                        </ul>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            @endif

			<div class="coppy-right-box">
				<div class="container">
					<div class="coppy-right-item item-left">
						<p class="coppy-right-text">Copyright © 2022 Super Smart Electronics. All rights reserved</p>
					</div>
					<div class="coppy-right-item item-right">
						<div class="wrap-nav horizontal-nav">
							<ul>
								<li class="menu-item"><a href="about-us.html" class="link-term">About us</a></li>								
								<li class="menu-item"><a href="privacy-policy.html" class="link-term">Privacy Policy</a></li>
								<li class="menu-item"><a href="terms-conditions.html" class="link-term">Terms & Conditions</a></li>
								<li class="menu-item"><a href="return-policy.html" class="link-term">Return Policy</a></li>								
							</ul>
						</div>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>		
	</footer>
</div>
