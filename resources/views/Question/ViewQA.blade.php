<!DOCTYPE html>
<!--[if lt IE 8 ]><html class="no-js ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="no-js ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 8)|!(IE)]><!--><html class="no-js" lang="en"> <!--<![endif]-->
<head>

   <!--- Basic Page Needs
   ================================================== -->
   <meta charset="utf-8">
	<title>Blog Post | Sparrow</title>
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
               <a href="index.html"><img alt="" src="images/logo.png"></a>
            </div>

            <nav id="nav-wrap">

               <a class="mobile-btn" href="#nav-wrap" title="Show navigation">Show navigation</a>
	            <a class="mobile-btn" href="#" title="Hide navigation">Hide navigation</a>

               <ul id="nav" class="nav">

	               <li><a href="index.html">Home</a></li>
	               <li class="current"><span><a href="blog.html">Blog</a></span>
                     <ul>
                        <li><a href="blog.html">Blog Index</a></li>
                        <li><a href="single.html">Post</a></li>
                     </ul>
                  </li>
                  <li><span><a href="portfolio-index.html">Portfolio</a></span>
                     <ul>
                        <li><a href="portfolio-index.html">Portfolio Index</a></li>
                        <li><a href="portfolio.html">Portfolio Entry</a></li>
                     </ul>
                  </li>
	               <li><a href="about.html">About</a></li>
                  <li><a href="contact.html">Contact</a></li>
                  <li><a href="styles.html">Features</a></li>

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
            <h1>Our Blog<span>.</span></h1>

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

            <article class="post">

               <div class="entry-header cf">

                  <h1>{{$response['question']['title']}}</h1>

                  <p class="post-meta">

                     <time class="date" datetime="2014-01-14T11:24">{{$response['question']['created_at']}}</time>
                     /
                     <span class="categories">
                     <a href="#">{{$response['question']['category']}}</a> /
                     </span>

                  </p>

               </div>

               <div class="post-content">

                  <p><?php echo $response['question']['description'] ?></p>


                  <div class="bio cf">

                     <div class="gravatar">
                        <img src="{{Storage::disk('s3')->url($response['user']['img'])}}" alt="">
                     </div>
                     <div class="about">
                        <h5><a title="Posts by {{$response['user']['name']}}" href="#" rel="author">Post By:{{$response['user']['name']}}</a></h5>
                        <p>{{$response['user']['description']}}</p>
                     </div>

                  </div>


               </div>

            </article> <!-- post end -->

            <!-- Comments
            ================================================== -->
            <div id="comments">

               <h3>Answers</h3>

               <!-- commentlist -->
               <ol class="commentlist">

               @foreach ($response['my_answer'] as $row)
                  <li class="depth-1">

                     <div class="avatar">
                        <img width="50" height="50" class="avatar" src="{{Storage::disk('s3')->url($row['img'])}}" alt="">
                     </div>

                     <div class="comment-info">
                        <cite>{{$row['name']}}</cite>

                        <div class="comment-meta">
                           <time class="comment-time" datetime="2014-01-14T23:05">{{$row['created_at']}}</time>
                        </div>
                     </div>

                     <div class="comment-text">
                        <p><?php echo $row['answer'] ?></p>
                     </div>

                  </li>
                  @endforeach
               </ol> <!-- Commentlist End -->

               <!-- commentlist -->
               <ol class="commentlist">

               @foreach ($response['others_answer'] as $row)
                  <li class="depth-1">

                     <div class="avatar">
                        <img width="50" height="50" class="avatar" src="{{Storage::disk('s3')->url($row['img'])}}" alt="">
                     </div>

                     <div class="comment-info">
                        <cite>{{$row['name']}}</cite>

                        <div class="comment-meta">
                           <time class="comment-time" datetime="2014-01-14T23:05">{{$row['created_at']}}</time>
                        </div>
                     </div>

                     <div class="comment-text">
                        <p><?php echo $row['answer'] ?></p>
                     </div>

                  </li>
                  @endforeach
               </ol> <!-- Commentlist End -->
               <div class="respond">

                <h3 class="h2">Add Answer</h3>

                <form name="contactForm" id="contactForm" method="post" action="/AddAnswer">
                    <fieldset>
                    <input type="hidden" name="id" value="{{$response['question']['id']}}">
                        <div class="message form-field">
                        <textarea name="content" id="content" class="form-control ckeditor"></textarea>
                        </div>

                        <button type="submit" class="submit btn--primary btn--large full-width">Submit</button>

                    </fieldset>
                </form> <!-- end form -->

                </div> <!-- end respond -->

            </div>  <!-- Comments End -->
            

         </div>

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
                  <h5 class="widget-title">Text Widget</h5>
                  <div class="textwidget">Proin gravida nibh vel velit auctor aliquet.
                  Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum,
                  nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus
                  a sit amet mauris. Morbi accumsan ipsum velit. </div>
		         </div>

               <div class="widget widget_categories">
                  <h5 class="widget-title">Categories</h5>
                  <ul class="link-list cf">
                     <li><a href="#">Designs</a></li>
                     <li><a href="#">Internet</a></li>
                     <li><a href="#">Typography</a></li>
                     <li><a href="#">Photography</a></li>
                     <li><a href="#">Web Development</a></li>
                     <li><a href="#">Projects</a></li>
                     <li><a href="#">Other Stuff</a></li>
                  </ul>
               </div>


            </aside> <!-- Sidebar End -->

         </div> <!-- Comments End -->

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

   </section> <!-- Tweet Section End-->

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

   <!-- Java Script
    ================================================== -->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js"></script>
    <script src="js/main.js"></script>

</body>

</html>

<script>
 CKEDITOR.replace( 'content', {
  height: 300,
  filebrowserUploadUrl: "/Qimg"
 });
</script>
