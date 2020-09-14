<!-- contact section start -->
            <div id="contact-section" class="contact-section pad-top120 parallax bg-img-2 alter-text">
                <div class="container">

                    <!-- indicactor start -->
                    <div class="row">
                        <div class="col-xs-12">
                            <a href="#contact-section" class="indicator dark right scroll">
                                <p><i class="fa fa-long-arrow-down"></i></p>
                                <p><i class="fa fa-phone"></i></p>
                            </a>
                        </div> <!--/.col-->

                    </div> <!--/.row-->
                    <!-- indicactor end -->
                    
                    <!-- section title start -->
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="section-title text-right">
                                <h3 class="title-text">Contact</h3>
                            </div>
                        </div> <!--/.col-->
                    </div> <!--/.row-->
                    <!-- section title end -->

                    <div class="row pad-bottom60">
                        <div class="col-md-5 col-sm-12">
                            <h1  class="banner-title" style="color:#ff8a00;margin-bottom: 20px;"><?=$fullname;?></h1>
                            <div class="foot-widget">
                                <p class="brand-text-color mb40"><?=$contact_content;?></p>
                                <p><i class="fa fa-map-marker"></i><?=$address;?></p>
                                <p><i class="fa fa-paper-plane"></i><?=$email;?></p>
                            
                                <p class="mb40"><i class="fa fa-phone"></i><?=$phone;?></p>
                                <ul class="social-icon">
                                    <li><a href="<?=$fb_link;?>" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="<?=$twitter_link;?>" target="_blank"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="<?=$Linkedin_link;?>" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                                    <li><a href="<?=$insta_link;?>" target="_blank"><i class="fa fa-instagram"></i></a></li>
                                </ul>
                            </div>
                        </div> <!--/.col-->
                        <div class="col-md-7 col-sm-12">
                            <!-- contact form start -->
                        <form id="contact-form" class="contact-form" data-toggle="validator">
                            <div class="row">
                                <div class="col-xs-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="name" placeholder="Name *" required data-error="Enter your name">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div> <!-- /.col -->
                                <div class="col-xs-12">
                                    <div class="form-group">
                                        <input type="email" class="form-control" id="email" placeholder="Email *" required data-error="Enter valid email address">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div> <!-- /.col -->
                                <div class="col-xs-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="msg_subject" placeholder="Subject" data-error="Enter your message subject">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div> <!-- /.col -->
                            </div> <!-- /.row -->
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <textarea id="message" class="form-control" rows="6" placeholder="Message" required data-error="Enter your message"></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div> <!-- /.col -->
                            </div> <!-- /.row -->
                            <div class="row">
                                <div class="col-md-3">
                                    <button id="submit" type="submit" class="btn btn-primary hvr-in" data-error="Write your message">Send Message</button>
                                </div> <!-- /.col -->
                            </div> <!-- /.row -->
                            <div id="msgalert" class="hidden"></div>
                        </form>
                        <!-- contact form end -->
                        </div> <!--/.col-->
                    </div> <!--/.row-->
                    
