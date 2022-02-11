@extends('front.layouts.master')

@section('content')
<!-- Start Blog Details Area -->
<section class="blog-details-area ptb-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="blog-details">
                    <div class="article-img">
                        <img src="/assets/img/blog-details.jpg" alt="blog-details">
                        <div class="date">20 <br> Jan</div>
                    </div>

                    <div class="article-content">
                        <ul class="category">
                            <li><a href="#">IT</a></li>
                            <li><a href="#">Mobile</a></li>
                            <li><a href="#">Marketing</a></li>
                            <li><a href="#">Design</a></li>
                            <li><a href="#">Development</a></li>
                        </ul>

                        <h3>The Fastest Growing Apps in 2019</h3>

                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. In necessitatibus provident facere, reiciendis voluptate dolorem iste consectetur veniam aperiam suscipit ad ipsum et labore a repellendus debitis explicabo quisquam obcaecati....</p>

                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Atque eum alias debitis suscipit, sint dignissimos minus quisquam recusandae nostrum quas eligendi odit, fugiat eius rem. Cumque, labore placeat! Velit, vitae. Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo, iste? Aut ipsam consequuntur non rem tenetur dolore consequatur ducimus a labore excepturi quae nisi, quisquam, maxime voluptates magnam aliquid. Cupiditate!</p>

                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo, iste? Aut ipsam consequuntur non rem tenetur dolore consequatur ducimus a labore excepturi quae nisi, quisquam, maxime voluptates magnam aliquid. Cupiditate!</p>

                        <blockquote class="blockquote">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo, iste? Aut ipsam consequuntur non rem tenetur dolore consequatur ducimus a labore excepturi quae nisi, quisquam, maxime voluptates magnam aliquid. Cupiditate.</p>
                        </blockquote>

                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Atque eum alias debitis suscipit, sint dignissimos minus quisquam recusandae nostrum quas eligendi odit, fugiat eius rem. Cumque, labore placeat! Velit, vitae. Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo, iste? Aut ipsam consequuntur non rem tenetur dolore consequatur ducimus a labore excepturi quae nisi, quisquam, maxime voluptates magnam aliquid. Cupiditate!</p>

                        <div class="share-post">
                            <ul>
                                <li><a href="#"><i class="icofont-facebook"></i></a></li>
                                <li><a href="#"><i class="icofont-twitter"></i></a></li>
                                <li><a href="#"><i class="icofont-linkedin"></i></a></li>
                                <li><a href="#"><i class="icofont-instagram"></i></a></li>
                                <li><a href="#"><i class="icofont-vimeo"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="post-controls-buttons">
                    <div class="controls-left">
                        <a href="#"><i class="icofont-double-left"></i> Prev Post</a>
                    </div>

                    <div class="controls-right">
                        <a href="#">Next Post <i class="icofont-double-right"></i></a>
                    </div>
                </div>

                <div class="post-comments">
                    <h3>Comments</h3>
                    <div class="single-comment">
                        <div class="comment-img">
                            <img src="/assets/img/client1.jpg" alt="client">
                        </div>
                        <div class="comment-content">
                            <h4>John Smith</h4>
                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Et minus, saepe porro a voluptatem, quidem aut libero consequatur unde molestiae quae impedit accusantium dolor est corporis! Dolores ut dignissimos doloribus?</p>
                            <span>Jan 19, 2018 - 9:10AM</span>
                            <a href="#">Reply</a>
                        </div>
                    </div>

                    <div class="single-comment left-m">
                        <div class="comment-img">
                            <img src="/assets/img/client2.jpg" alt="client">
                        </div>
                        <div class="comment-content">
                            <h4>Doe John</h4>
                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Et minus, saepe porro a voluptatem, quidem aut libero consequatur unde molestiae quae impedit accusantium dolor est corporis! Dolores ut dignissimos doloribus?</p>
                            <span>Jan 19, 2018 - 9:10AM</span>
                            <a href="#">Reply</a>
                        </div>
                    </div>

                    <div class="single-comment">
                        <div class="comment-img">
                            <img src="/assets/img/client3.jpg" alt="client">
                        </div>
                        <div class="comment-content">
                            <h4>Steven Doe</h4>
                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Et minus, saepe porro a voluptatem, quidem aut libero consequatur unde molestiae quae impedit accusantium dolor est corporis! Dolores ut dignissimos doloribus?</p>
                            <span>Jan 19, 2018 - 9:10AM</span>
                            <a href="#">Reply</a>
                        </div>
                    </div>

                    <div class="single-comment">
                        <div class="comment-img">
                            <img src="/assets/img/client4.jpg" alt="client">
                        </div>
                        <div class="comment-content">
                            <h4>John Cina</h4>
                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Et minus, saepe porro a voluptatem, quidem aut libero consequatur unde molestiae quae impedit accusantium dolor est corporis! Dolores ut dignissimos doloribus?</p>
                            <span>Jan 19, 2018 - 9:10AM</span>
                            <a href="#">Reply</a>
                        </div>
                    </div>
                </div>

                <div class="leave-a-reply">
                    <h3>Leave a Reply</h3>
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Full Name">
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6">
                            <div class="form-group">
                                <input type="email" class="form-control" placeholder="E-Mail">
                            </div>
                        </div>

                        <div class="col-lg-12 col-md-12">
                            <div class="form-group">
                                <textarea name="comment" cols="30" rows="5" class="form-control" placeholder="Your Comment"></textarea>
                            </div>
                        </div>

                        <div class="col-lg-12 col-md-12">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="sidebar-area">
                    <div class="widget widget-search">
                        <form>
                            <input type="text" class="form-control" placeholder="Search">
                            <button type="submit"><i class="icofont-search-2"></i></button>
                        </form>
                    </div>

                    <div class="widget widget_post_categories">
                        <h3 class="widget-title">Post Categories</h3>
                        <div class="bar"></div>

                        <ul>
                            <li><a href="#"><i class="icofont-bubble-right"></i> Art</a></li>
                            <li><a href="#"><i class="icofont-bubble-right"></i> Book</a></li>
                            <li><a href="#"><i class="icofont-bubble-right"></i> Watch</a></li>
                            <li><a href="#"><i class="icofont-bubble-right"></i> TV</a></li>
                            <li><a href="#"><i class="icofont-bubble-right"></i> Gifts</a></li>
                            <li><a href="#"><i class="icofont-bubble-right"></i> Design</a></li>
                            <li><a href="#"><i class="icofont-bubble-right"></i> Smart TV</a></li>
                        </ul>
                    </div>

                    <div class="widget widget_recent_posts">
                        <h3 class="widget-title">Recent Post</h3>
                        <div class="bar"></div>

                        <ul>
                            <li>
                                <div class="recent-post-thumb">
                                    <a href="#">
                                        <img src="/assets/img/blog-img1.jpg" alt="blog-image">
                                    </a>
                                </div>

                                <div class="recent-post-content">
                                    <h3><a href="#">The Fastest Growing Apps in 2019</a></h3>
                                    <span class="date">23 January 2019</span>
                                </div>
                            </li>

                            <li>
                                <div class="recent-post-thumb">
                                    <a href="#">
                                        <img src="/assets/img/blog-img2.jpg" alt="blog-image">
                                    </a>
                                </div>

                                <div class="recent-post-content">
                                    <h3><a href="#">The Most Popular New Business Apps</a></h3>
                                    <span class="date">16 January 2019</span>
                                </div>
                            </li>

                            <li>
                                <div class="recent-post-thumb">
                                    <a href="#">
                                        <img src="/assets/img/blog-img3.jpg" alt="blog-image">
                                    </a>
                                </div>

                                <div class="recent-post-content">
                                    <h3><a href="#">3 WooCommerce Plugins to Boost Sales</a></h3>
                                    <span class="date">14 January 2019</span>
                                </div>
                            </li>

                            <li>
                                <div class="recent-post-thumb">
                                    <a href="#">
                                        <img src="/assets/img/blog-img4.jpg" alt="blog-image">
                                    </a>
                                </div>

                                <div class="recent-post-content">
                                    <h3><a href="#">CakeMail Review – Design Custom Emails</a></h3>
                                    <span class="date">06 January 2019</span>
                                </div>
                            </li>
                        </ul>
                    </div>

                    <div class="widget widget_tag_cloud">
                        <h3 class="widget-title">Popular Tags</h3>
                        <div class="bar"></div>

                        <div class="tagcloud">
                            <a href="#">Art</a>
                            <a href="#">Book</a>
                            <a href="#">Watch</a>
                            <a href="#">TV</a>
                            <a href="#">Gifts</a>
                            <a href="#">Smart TV</a>
                            <a href="#">Design</a>
                        </div>
                    </div>

                    <div class="widget widget_text">
                        <h3 class="widget-title">Instagram</h3>
                        <div class="bar"></div>

                        <ul>
                            <li>
                                <a href="#">
                                    <img src="/assets/img/work-img1.jpg" alt="image">
                                </a>
                            </li>

                            <li>
                                <a href="#">
                                    <img src="/assets/img/work-img2.jpg" alt="image">
                                </a>
                            </li>

                            <li>
                                <a href="#">
                                    <img src="/assets/img/work-img3.jpg" alt="image">
                                </a>
                            </li>

                            <li>
                                <a href="#">
                                    <img src="/assets/img/work-img4.jpg" alt="image">
                                </a>
                            </li>

                            <li>
                                <a href="#">
                                    <img src="/assets/img/work-img5.jpg" alt="image">
                                </a>
                            </li>

                            <li>
                                <a href="#">
                                    <img src="/assets/img/work-img6.jpg" alt="image">
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Blog Details Area -->
@endsection
