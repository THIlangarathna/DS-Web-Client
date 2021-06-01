<!DOCTYPE html>
<html class="no-js" lang="en">
<head>

    <!--- basic page need ================================================== -->
    <meta charset="utf-8">
    <title>My Feed</title>
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- mobile specific metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- CSS
    ================================================== -->
    <link rel="stylesheet" href="css/base.css">
    <link rel="stylesheet" href="css/vendor.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.7.2/css/all.min.css'>

    <!-- script
    ================================================== -->
    <script src="js/modernizr.js"></script>
    <script src="js/pace.min.js"></script>



</head>

<body id="top">

  <!-- pageheader
    ================================================== -->
    <div class="s-pageheader">

        <header class="header">
            <div class="header__content row">

                <div class="header__logo">
                    <a class="logo" href="index.html">
                        <img src="images/logo.png" alt="Homepage">
                    </a>
                </div> <!-- end header__logo -->

                <ul class="header__social">
                    <li>
                        <a href="#0"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                    </li>
                    <li>
                        <a href="#0"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                    </li>
                    <li>
                        <a href="#0"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                    </li>
                    <li>
                        <a href="#0"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                    </li>
                </ul> <!-- end header__social -->

                <a class="header__search-trigger" href="#0"></a>

                <div class="header__search">

                    <form role="search" method="get" class="header__search-form" action="#">
                        <label>
                            <span class="hide-content">Search for:</span>
                            <input type="search" class="search-field" placeholder="Type Keywords" value="" name="s" title="Search for:" autocomplete="off">
                        </label>
                        <input type="submit" class="search-submit" value="Search">
                    </form>
        
                    <a href="#0" title="Close Search" class="header__overlay-close">Close</a>

                </div>  <!-- end header__search -->


                <a class="header__toggle-menu" href="#0" title="Menu"><span>Menu</span></a>

                <nav class="header__nav-wrap">

                    <h2 class="header__nav-heading h6">Site Navigation</h2>

                    <ul class="header__nav">
                        <li class="current"><a href="index.html" title="">Home</a></li>
                        <li class="has-children">
                            <a href="#0" title="">Categories</a>
                            <ul class="sub-menu">
                            <li><a href="/Question">Questions</a></li>
                            <li><a href="/Blog">Blog</a></li>
                            </ul>
                        </li>
                        
                        <li><a href="about.html" title="">About</a></li>
                        <li><a href="contact.html" title="">Contact</a></li>
                        <li class="has-children">
                            <a href="#0" title="">User</a>
                            <ul class="sub-menu">
                            <li><a href="MyDashboard">My Dashboard</a></li>
                            <li><a href="">Log Out</a></li>
                            </ul>
                        </li>
                    </ul> <!-- end header__nav -->

                    <a href="#0" title="Close Menu" class="header__overlay-close close-mobile-menu">Close</a>

                </nav> <!-- end header__nav-wrap -->

            </div> <!-- header-content -->
        </header> <!-- header -->

    </div> <!-- end s-pageheader -->


    <!-- s-content
    ================================================== -->
    <section class="s-content">

        <div class="row">
    
                <div class="row">

                    <div class="col-twelve tab-full">

                        <p><a class="btn btn--primary full-width" href="/CreateBlog">Create Blog</a>
                        </p>

                    </div>

                </div>
                <!-- end row -->

               



            </div> <!-- end s-content__main -->

        </div> <!-- end row -->
        

        @foreach ($response['blogs'] as $row)


        <div class="row masonry-wrap">
            <div class="col-md-6">
                <article class="masonry__brick entry format-standard" data-aos="fade-up">
                        
                    <div class="entry__thumb">
                            <img src="{{Storage::disk('s3')->url($row['img'])}}"  alt="">
                        </a>
                        
                    </div>

                </article>
            </div>
            <div class="col-md-6">
                
            </div>
            <div class="masonry">
                <article class="masonry__brick entry format-standard" data-aos="fade-up">
                        
                    <div class="entry__thumb">
                            <img src="{{Storage::disk('s3')->url($row['img'])}}" alt="">
                        </a>
                        
                    </div>

                </article>

                <div class="entry__text">
                    <div class="entry__header">
                        
                        
                        <h1 class="entry__title"><a href="/ShowBlog{{$row['id']}}">{{$row['title']}}</a></h1>
                        <div class="entry__date">
                            <ul class="entry__meta">
                                By:<a href="#0">{{$response['user']['name']}}</a><br>
                                {{$row['created_at']}}
                            </ul> 
                        </div>
                    </div>
                    <div class="entry__excerpt">
                        <p>
                            {{$row['intro']}}
                        </p>
                    </div>
                    <div class="entry__meta">
                        <span class="entry__meta-links">
                            <a href="category.html">{{$row['category']}}</a></span>
                            <a href="/Blog{{$row['id']}}"><button class="btnfeed" style="float: right;"><i class="fa fa-edit"></i>Edit</button></a>
                        <a href="/DeleteBlog{{$row['id']}}"><button class="btnfeed" style="float: right;"><i class="fa fa-trash"></i></button></a>
                        
                    </div>
                </div> <!-- end article -->

            </div> <!-- end masonry -->
        </div> <!-- end masonry-wrap -->
<br><br>

        @endforeach


        
    </section> <!-- s-content -->



    <!-- s-extra ================================================== -->
    <section class="s-extra">

        <div class="row top">

            <div class="col-eight md-six tab-full popular">
                <h3>Popular Blogs</h3>

                <div class="block-1-2 block-m-full popular__posts">
                    <article class="col-block popular__post">
                        <a href="#0" class="popular__thumb">
                            <img src="images/thumbs/small/wheel-150.jpg" alt="">
                        </a>
                        <h5><a href="#0">A Rich Man and His Son - A Moral Story</a></h5>
                        <section class="popular__meta">
                                <span class="popular__author"><span>By</span> <a href="#0">Team Idea Wall</a></span>
                            <span class="popular__date"><span>on</span> <time datetime="2017-12-19">December 29, 2020</time></span>
                        </section>
                    </article>
                    <article class="col-block popular__post">
                        <a href="#0" class="popular__thumb">
                            <img src="images/thumbs/small/wheel-150.jpg" alt="">
                        </a>
                        <h5><a href="#0">A Rich Man and His Son - A Moral Story</a></h5>
                        <section class="popular__meta">
                                <span class="popular__author"><span>By</span> <a href="#0">Team Idea Wall</a></span>
                            <span class="popular__date"><span>on</span> <time datetime="2017-12-19">December 29, 2020</time></span>
                        </section>
                    </article>
                    <article class="col-block popular__post">
                        <a href="#0" class="popular__thumb">
                            <img src="images/thumbs/small/wheel-150.jpg" alt="">
                        </a>
                        <h5><a href="#0">A Rich Man and His Son - A Moral Story</a></h5>
                        <section class="popular__meta">
                                <span class="popular__author"><span>By</span> <a href="#0">Team Idea Wall</a></span>
                            <span class="popular__date"><span>on</span> <time datetime="2017-12-19">December 29, 2020</time></span>
                        </section>
                    </article>
                    <article class="col-block popular__post">
                        <a href="#0" class="popular__thumb">
                            <img src="images/thumbs/small/wheel-150.jpg" alt="">
                        </a>
                        <h5><a href="#0">A Rich Man and His Son - A Moral Story</a></h5>
                        <section class="popular__meta">
                                <span class="popular__author"><span>By</span> <a href="#0">Team Idea Wall</a></span>
                            <span class="popular__date"><span>on</span> <time datetime="2017-12-19">December 29, 2020</time></span>
                        </section>
                    </article>
 

                </div> <!-- end popular_posts -->
            </div> <!-- end popular -->
            
            <div class="col-four md-six tab-full about">
                <h3>About Anwer Bug</h3>

                <p>
                Donec sollicitudin molestie malesuada. Nulla quis lorem ut libero malesuada feugiat. Pellentesque in ipsum id orci porta dapibus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Donec sollicitudin molestie malesuada.
                </p>

                <ul class="about__social">
                    <li>
                        <a href="#0"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                    </li>
                    <li>
                        <a href="#0"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                    </li>
                    <li>
                        <a href="#0"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                    </li>
                    <li>
                        <a href="#0"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                    </li>
                </ul> <!-- end header__social -->
            </div> <!-- end about -->

        </div> <!-- end row -->

    </section> <!-- end s-extra -->


    <!-- s-footer
    ================================================== -->
    <footer class="s-footer">

        <div class="s-footer__main">
            <div class="row">
                
                <div class="col-two md-four mob-full s-footer__sitelinks">
                        
                    <h4>Quick Links</h4>

                    <ul class="s-footer__linklist">
                        <li><a href="#0">Home</a></li>
                        <li><a href="#0">About</a></li>
                        <li><a href="#0">Contact</a></li>
                    </ul>

                </div> <!-- end s-footer__sitelinks -->



                <div class="col-two md-four mob-full s-footer__social">
                        
                    <h4>Social</h4>

                    <ul class="s-footer__linklist">
                        <li><a href="#0">Facebook</a></li>
                        <li><a href="#0">Instagram</a></li>
                        <li><a href="#0">Twitter</a></li>
                        <li><a href="#0">Pinterest</a></li>
                        <li><a href="#0">LinkedIn</a></li>
                    </ul>

                </div> <!-- end s-footer__social -->

                <div class="col-five md-full end s-footer__subscribe">
                        
                    <h4>Our Newsletter</h4>

                    <p>Sit vel delectus amet officiis repudiandae est voluptatem. Tempora maxime provident nisi et fuga et enim exercitationem ipsam. Culpa consequatur occaecati.</p>

                    <div class="subscribe-form">
                        <form id="mc-form" class="group" novalidate="true">

                            <input type="email" value="" name="EMAIL" class="email" id="mc-email" placeholder="Email Address" required="">
                
                            <input type="submit" name="subscribe" value="Send">
                
                            <label for="mc-email" class="subscribe-message"></label>
                
                        </form>
                    </div>

                </div> <!-- end s-footer__subscribe -->

            </div>
        </div> <!-- end s-footer__main -->

        <div class="s-footer__bottom">
            <div class="row">
                <div class="col-full">
                    <div class="s-footer__copyright">
                        <span>© Copyright Anwer BUG</span> 
                    
                    </div>

                    <div class="go-top">
                        <a class="smoothscroll" title="Back to Top" href="#top"></a>
                    </div>
                </div>
            </div>
        </div> <!-- end s-footer__bottom -->

    </footer> <!-- end s-footer -->


    <!-- Java Script
    ================================================== -->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js"></script>
    <script src="js/main.js"></script>

</body>

</html>