<!DOCTYPE html>
<!--[if lt IE 8 ]><html class="no-js ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="no-js ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 8)|!(IE)]><!--><html class="no-js" lang="en"> <!--<![endif]-->
<head>

   <!--- Basic Page Needs
   ================================================== -->
   <meta charset="utf-8">
	<title>Blog | Sparrow</title>
	<meta name="description" content="">
	<meta name="author" content="">

   <!-- Mobile Specific Metas
   ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- CSS
    ================================================== -->
   <link rel="stylesheet" href="css/default.css">
	<link rel="stylesheet" href="css/layout.css">
   <link rel="stylesheet" href="css/media-queries.css">

   <!-- Script
   ================================================== -->
	<script src="js/modernizr.js"></script>

   <!-- Favicons
	================================================== -->
	<link rel="shortcut icon" href="favicon.ico" >


    <!-- CSS
    ================================================== -->
    <link rel="stylesheet" href="css/base.css">
    <link rel="stylesheet" href="css/vendor.css">
    <link rel="stylesheet" href="css/main.css">

    <!-- script
    ================================================== -->
    <script src="js/modernizr.js"></script>
    <script src="js/pace.min.js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <script src="http://cdn.ckeditor.com/4.6.2/standard-all/ckeditor.js"></script>

</head>

<body>

   <!-- Header
   ================================================== -->
   <header>

   <div class="row">

<div class="twelve columns">

   <div class="logo">
      <a href="/index"><img alt="" src="images/logo.png"></a>
   </div>

   <nav id="nav-wrap">

      <a class="mobile-btn" href="#nav-wrap" title="Show navigation">Show navigation</a>
      <a class="mobile-btn" href="#" title="Hide navigation">Hide navigation</a>

      <ul id="nav" class="nav">

         <li class="current"><a href="/index">Home</a></li>
         <li><span><a href="/AllblogsAuth">Blog</a></span>
            <ul>
               <li><a href="/Blog">My Blogs</a></li>
               <li><a href="/AllblogsAuth">View Blogs</a></li>
               <li><a href="/CreateBlog">Create Blog</a></li>
            </ul>
         </li>
         <li><span><a href="/AllquestionsAuth">QnA</a></span>
            <ul>
               <li><a href="/Question">My QnAs</a></li>
               <li><a href="/AllquestionsAuth">View QnAs</a></li>
               <li><a href="/CreateQuestion">Ask Questions</a></li>
            </ul>
         </li>
         <li><span><a href="/categories">Categories</a></span>
         <ul>
               <li><a href="blog.html">Category 1</a></li>
               <li><a href="blog.html">Category 2</a></li>
               <li><a href="blog.html">Category 3</a></li>
               <li><a href="blog.html">Category 4</a></li>
               <li><a href="blog.html">Category 5</a></li>
               <li><a href="blog.html">Category 6</a></li>
               <li><a href="blog.html">Category 7</a></li>
               <li><a href="blog.html">Category 8</a></li>
            </ul>
         </li>
         <li><a href="/aboutAuth">About</a></li>
         <li><a href="/contactAuth">Contact</a></li>
         <li><span><a href="/MyDashboard">My Account</a></span>
                  <ul>
                        <li><a href="/MyDashboard">My Dashboard</a></li>
                        <li><a href="/">Sign Out</a></li>
                     </ul>
                  </li>

      </ul> <!-- end #nav -->

   </nav> <!-- end #nav-wrap -->

</div>

</div>

   </header> <!-- Header End -->

   <!-- Page Title
   ================================================== -->
   <div id="page-title">

      <div class="row">

         <div class="ten columns centered text-center">
            <h1>Edit User<span>.</span></h1>

            <p>Aenean condimentum, lacus sit amet luctus lobortis, dolores et quas molestias excepturi
            enim tellus ultrices elit, amet consequat enim elit noneas sit amet luctu. </p>
         </div>

      </div>

   </div> <!-- Page Title End-->

        
    </section> <!-- s-content -->

    <!-- s-content
    ================================================== -->
    <section class="s-content s-content--narrow">

        <div class="row">
          

                <form name="cForm" id="cForm" method="POST" action="UpdateUser" enctype="multipart/form-data">
                    <fieldset>
                        <input type="hidden" name="id" value="{{$response['user']['id']}}">
                        
                        <div class="form-field col-five">
                            <img src="{{Storage::disk('s3')->url($response['user']['img'])}}"
                                sizes="(max-width: 200px) 100vw, 200px" alt="" style= "text-align:center;">
                            <div class="form-group">
                                <input type="file" class="form-control-file" id="img" name="img">
                              </div>
                        </div>

                    	<div class="form-field">
                            <input name="name" type="text" id="name" class="full-width" placeholder="Name" value="{{$response['user']['name']}}" required>
                        </div>

                        <div class="form-field">
                            <input name="email" type="text" id="email" class="full-width" placeholder="Email" value="{{$response['user']['email']}}" required readonly>
                        </div>

                        <div class="form-field">
                            <input name="description" type="text" id="description" class="full-width" placeholder="User Description" value="{{$response['user']['description']}}" required>
                        </div>

                        <button type="submit" class="submit btn btn--primary full-width">Update Details</button>

                    </fieldset>
                </form> <!-- end form -->


            </div> <!-- end s-content__main -->

        </div> <!-- end row -->

    </section> <!-- s-content -->
  

<!-- Call-To-Action Section
   ================================================== -->
   <section id="call-to-action">

      <div class="row">

         <div class="eight columns offset-1">

            <h1><a href="blog-single.html">Voluptate Velit Esse</a><a href="http://www.dreamhost.com/r.cgi?287326|STYLESHOUT">.</a></h1>
            <p>Ducimus qui blanditiis praesentium voluptatum
            deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate<!-- Simply type	the promocode in the box labeled ???Promo Code??? when placing your order. -->. </p>

         </div>

         <div class="three columns action">

            

         </div>

      </div>

   </section> <!-- Call-To-Action Section End-->
   <!-- Tweets Section
   ================================================== -->
   <section id="tweets">

      <div class="row">

         <div class="tweeter-icon align-center">
            <i class="fa fa-twitter"></i>
         </div>

         <ul id="twitter" class="align-center">
            <li>
               <span>
               This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet.
               Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum
               <a href="#">http://t.co/CGIrdxIlI3</a>
               </span>
               <b><a href="#">2 Days Ago</a></b>
            </li>
            <!--
            <li>
               <span>
               This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet.
               Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum
               <a href="#">http://t.co/CGIrdxIlI3</a>
               </span>
               <b><a href="#">3 Days Ago</a></b>
            </li>
            -->
         </ul>

         <p class="align-center"><a href="#" class="button">Follow us</a></p>

      </div>

   </section> <!-- Tweets Section End-->

   <!-- footer
   ================================================== -->
   <footer>

      <div class="row">

         <div class="twelve columns">

             <ul class="footer-nav">
					<li><a href="/index">Home.</a></li>
              	<li><a href="blog.html">Blog.</a></li>
              	<li><a href="portfolio-/index">Portfolio.</a></li>
              	<li><a href="about.html">About.</a></li>
              	<li><a href="contact.html">Contact.</a></li>
               <li><a href="styles.html">Features.</a></li>
			   </ul>

            <ul class="footer-social">
               <li><a href="#"><i class="fa fa-facebook"></i></a></li>
               <li><a href="#"><i class="fa fa-twitter"></i></a></li>
               <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
               <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
               <li><a href="#"><i class="fa fa-skype"></i></a></li>
               <li><a href="#"><i class="fa fa-rss"></i></a></li>
            </ul>

            <ul class="copyright">
               <li>Copyright &copy; 2014 Sparrow</li> 
               <li>Design by <a href="http://www.styleshout.com/" target="_blank">Styleshout</a></li>               
            </ul>

         </div>

         <div id="go-top" style="display: block;"><a title="Back to Top" href="#">Go To Top</a></div>

      </div>

   </footer> <!-- Footer End-->

   <!-- Java Script
   ================================================== -->
   <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
   <script>window.jQuery || document.write('<script src="js/jquery-1.10.2.min.js"><\/script>')</script>
   <script type="text/javascript" src="js/jquery-migrate-1.2.1.min.js"></script>

   <script src="js/jquery.flexslider.js"></script>
   <script src="js/doubletaptogo.js"></script>
   <script src="js/init.js"></script>
</body>

</html>
