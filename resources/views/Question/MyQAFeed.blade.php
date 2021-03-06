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
            <h1>My Questions<span>.</span></h1>

            <p>Aenean condimentum, lacus sit amet luctus lobortis, dolores et quas molestias excepturi
            enim tellus ultrices elit, amet consequat enim elit noneas sit amet luctu. </p>
         </div>

      </div>

   </div> <!-- Page Title End-->

   <!-- Content
   ================================================== -->
   <div class="content-outer">

      <div id="page-content" class="row">

         <div id="primary" class="eight columns">

         @foreach ($response['questions'] as $row)
            <article class="post">

               <div class="entry-header cf">

                  <h1><a href="/ShowQuestion{{$row['id']}}" title="">{{$row['title']}}</a></h1>

                  <p class="post-meta">

                     <time class="date" datetime="2014-01-14T11:24">{{$row['created_at']}}</time>
                     /
                     <span class="categories">
                     <a href="/MyDashBoard">By {{$response['user']['name']}}</a> /
                     <a href="#">{{$row['category']}}</a> /
                     </span>

                  </p>
                  <a href="/Question{{$row['id']}}" style="float: right;"><i class="fa fa-edit"></i>Edit</a><br>
<a href="/DeleteQuestion{{$row['id']}}" style="float: right;"><i class="fa fa-trash"></i>Delete</a>
               </div>


            </article> <!-- post end -->
            @endforeach


         </div> <!-- Primary End-->

         <div id="secondary" class="four columns end">

            <aside id="sidebar">

               <div class="widget widget_search">
                  <h5>Search</h5>
                  <form action="#">

                     <input class="text-search" type="text" onfocus="if (this.value == 'Search here...') { this.value = ''; }" onblur="if(this.value == '') { this.value = 'Search here...'; }" value="Search here...">
                     <input type="submit" class="submit-search" value="">

                  </form>
               </div>

               <div class="widget widget_text">
                  <h5 class="widget-title">AnswerBug</h5>
                  <div class="textwidget">Proin gravida nibh vel velit auctor aliquet.
                  Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum,
                  nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus
                  a sit amet mauris. Morbi accumsan ipsum velit. </div>
		         </div>

               <div class="widget widget_categories">
                  <h5 class="widget-title">Categories</h5>
                  <ul class="link-list cf">
                     <li><a href="#">Technology</a></li>
                     <li><a href="#">Nature</a></li>
                     <li><a href="#">Health</a></li>
                     <li><a href="#">Journalism</a></li>
                     <li><a href="#">Education</a></li>
                     <li><a href="#">Writing</a></li>
                     <li><a href="#">Science</a></li>
                     <li><a href="#">Design</a></li>
                  </ul>
               </div>


            </aside>

         </div> <!-- Secondary End-->

      </div>

   </div> <!-- Content End-->

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
					<li><a href="index.html">Home.</a></li>
              	<li><a href="blog.html">Blog.</a></li>
              	<li><a href="portfolio-index.html">Portfolio.</a></li>
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