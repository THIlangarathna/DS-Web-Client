<!DOCTYPE html>
<html class="no-js" lang="en">
<head>

    <!--- basic page needs
    ================================================== -->
    <meta charset="utf-8">
    <title>User Dashboard</title>
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
                            <li><a href="category.html">Stories</a></li>
                            <li><a href="category.html">Poems</a></li>
                            <li><a href="category.html">Quotes</a></li>
                            <li><a href="category.html">Events</a></li>

                            </ul>
                        </li>
                        <li><a href="style-guide.html" title="">Styles</a></li>
                        <li><a href="about.html" title="">About</a></li>
                        <li><a href="contact.html" title="">Contact</a></li>
                        <li><a href="/l" title="">Sign In</a></li>
                        <li><a href="contact.html" title="">Sign Up</a></li>
                    </ul> <!-- end header__nav -->

                    <a href="#0" title="Close Menu" class="header__overlay-close close-mobile-menu">Close</a>

                </nav> <!-- end header__nav-wrap -->

            </div> <!-- header-content -->
        </header> <!-- header -->

    </div> <!-- end s-pageheader -->


    <!-- s-content
    ================================================== -->
    <section class="s-content s-content--narrow s-content--no-padding-bottom">

        <article class="row format-standard">

            <div class="s-content__header col-full">
                <h1 class="s-content__header-title">
                    My Dashboard
                </h1>

            </div> <!-- end s-content__header -->
    
            <div class="s-content__media col-four">
                <div class="s-content__post-thumb">
                    <img src="{{Storage::disk('s3')->url($response['user']['img'])}}"
                         sizes="(max-width: 2000px) 100vw, 2000px" alt="" >
                </div>
                <h3>{{$response['user']['name']}}</h3>
                <p>
                {{$response['user']['description']}}
                </p>
                    <button type="edit" class="submit btn btn--primary full-width"><a href="EditUser">Edit Details</a></button>


            </div> <!-- end s-content__media -->

            <div class="col-eight s-content__maine">

                <h3>My Blogs</h3>
    
                @foreach ($response['blogs'] as $row)
                <div >
                    <article class="col-block popular__post">
 
                        <h5><a href="/ShowBlog{{$row['id']}}">{{$row['title']}}</a></h5>
                        <section class="popular__meta">
                                <span class="popular__author"><span>By</span> <a href="#0">{{$response['user']['name']}}</a></span>
                            <span class="popular__date"><span>on</span> <time datetime="2017-12-19">{{$row['created_at']}}</time></span>
                            <div class="entry__meta">
                        <span class="entry__meta-links">
                            <a href="category.html">{{$row['category']}}</a></span>
                            <a href="/Blog{{$row['id']}}"><button class="btnfeed" style="float: right;"><i class="fa fa-edit"></i>Edit</button></a>
                        <a href="/DeleteBlog{{$row['id']}}"><button class="btnfeed" style="float: right;"><i class="fa fa-trash"></i></button></a>
                        
                    </div>
                        </section>
                    </article>
                </div> <!-- end s-content__main -->
                @endforeach

                
                <hr style="height:2px;border-width:0;color:gray;background-color:gray">
                
                <h3>My Questions</h3>
    
                @foreach ($response['questions'] as $row) 
                <div >
                    <article class="col-block popular__post">
 
                        <h5><a href="/ShowBlog{{$row['id']}}">{{$row['title']}}</a></h5>
                        <section class="popular__meta">
                                <span class="popular__author"><span>By</span> <a href="#0">{{$response['user']['name']}}</a></span>
                            <span class="popular__date"><span>on</span> <time datetime="2017-12-19">{{$row['created_at']}}</time></span>
                            <div class="entry__meta">
                        <span class="entry__meta-links">
                            <a href="category.html">{{$row['category']}}</a></span>
                            <a href="/Blog{{$row['id']}}"><button class="btnfeed" style="float: right;"><i class="fa fa-edit"></i>Edit</button></a>
                        <a href="/DeleteBlog{{$row['id']}}"><button class="btnfeed" style="float: right;"><i class="fa fa-trash"></i></button></a>
                        
                    </div>
                        </section>
                    </article>
                </div> <!-- end s-content__main -->
                @endforeach

        </article>


      

        
    </section> <!-- s-content -->


  


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
                        <span>© Copyright Answer Bug</span> 
                    
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
    <script src="js/main.js"></script>

</body>

</html>