<!doctype html>
<html lang="en-US">
	<head>

		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>Lohaslife Laravel Admin</title>
		<meta name="description" content="Unika - Responsive One Page HTML5 Template">
		<meta name="keywords" content="HTML5, Bootsrtrap, One Page, Responsive, Template, Portfolio" />
		<meta name="author" content="imransdesign.com">

		<!-- Mobile Metas -->
		<meta name="viewport" content="width=device-width, initial-scale=1">
        
        <!-- Google Fonts  -->
		<link href='http://fonts.googleapis.com/css?family=Roboto:400,700,500' rel='stylesheet' type='text/css'> <!-- Body font -->
		<link href='http://fonts.googleapis.com/css?family=Lato:300,400' rel='stylesheet' type='text/css'> <!-- Navbar font -->

		<!-- Libs and Plugins CSS -->
		<link rel="stylesheet" href="/front/inc/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="/front/inc/animations/css/animate.min.css">
		<link rel="stylesheet" href="/front/inc/font-awesome/css/font-awesome.min.css"> <!-- Font Icons -->
		<link rel="stylesheet" href="/front/inc/owl-carousel/css/owl.carousel.css">
		<link rel="stylesheet" href="/front/inc/owl-carousel/css/owl.theme.css">

		<!-- Theme CSS -->
        <link rel="stylesheet" href="/front/css/reset.css">
		<link rel="stylesheet" href="/front/css/style.css">
		<link rel="stylesheet" href="/front/css/mobile.css">

		<!-- Skin CSS -->
		<link rel="stylesheet" href="/front/css/skin/cool-gray.css">
        <!-- <link rel="stylesheet" href="css/skin/ice-blue.css"> -->
        <!-- <link rel="stylesheet" href="css/skin/summer-orange.css"> -->
        <!-- <link rel="stylesheet" href="css/skin/fresh-lime.css"> -->
        <!-- <link rel="stylesheet" href="css/skin/night-purple.css"> -->

		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->

		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

        <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>

	</head>

    <body data-spy="scroll" data-target="#main-navbar">
        <div class="page-loader"></div>  <!-- Display loading image while page loads -->
    	<div class="body">
        
            <!--========== BEGIN HEADER ==========-->
            <header id="header" class="header-main">

                <!-- Begin Navbar -->
                <nav id="main-navbar" class="navbar navbar-default navbar-fixed-top" role="navigation"> <!-- Classes: navbar-default, navbar-inverse, navbar-fixed-top, navbar-fixed-bottom, navbar-transparent. Note: If you use non-transparent navbar, set "height: 98px;" to #header -->

                  <div class="container">

                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                      </button>
                      <a class="navbar-brand page-scroll" href="/">Lohaslife Laravel Admin</a>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav navbar-right">
                            <li><a class="page-scroll" href="body">{{$other_text['home']->text}}</a></li>
                            <li><a class="page-scroll" href="#about-section">{{$other_text['about']->text}}</a></li>
                            <li><a class="page-scroll" href="#pages-section">{{$other_text['page']->text}}</a></li>
                            <li><a class="page-scroll" href="#categories-section">{{$other_text['category']->text}}</a></li>
                            <li><a class="page-scroll" href="#articles-section">{{$other_text['article']->text}}</a></li>
                            <li><a class="page-scroll" href="#portfolio-section">{{$other_text['portfolio']->text}}</a></li>
                            <li>
                                <a class="page-scroll">
                                    <select id="lang">
                                        <option value="tw">tw</option>
                                        <option value="en">en</option>
                                        <option value="jp">jp</option>
                                    </select>
                                </a>
                            </li>
                            
                        </ul>
                    </div><!-- /.navbar-collapse -->
                  </div><!-- /.container -->
                </nav>
                <!-- End Navbar -->

            </header>
            <!-- ========= END HEADER =========-->
            
            
            
            
        	<!-- Begin text carousel intro section -->
			<section id="text-carousel-intro-section" class="parallax" data-stellar-background-ratio="0.5" style="background-image: url(/front/img/slider-bg.jpg);">
	
				<div class="container">
					<div class="caption text-center text-white" data-stellar-ratio="0.7">
                        
                        
						<div id="owl-intro-text" class="owl-carousel">
                            @foreach($banners as $key=>$row)
							<div class="item">
								<h1>{{$row['title']}}</h1>
								<p>{{$row['content']}}</p>
                                <div class="extra-space-l"></div>
								<a class="btn btn-blank" href="#" target="_blank" role="button">{{$other_text['test_text']->text}}</a>
							</div>
                            @endforeach
							{{-- <div class="item">
								<h1>{{$row['title']}}</h1>
								<p>{{$row['content']}}</p>
                                <div class="extra-space-l"></div>
								<a class="btn btn-blank" href="#" target="_blank" role="button">瀏覽更多!</a>
							</div> --}}
							{{-- <div class="item">
								<h1>I'm Unika</h1>
								<p>One Page Responsive Theme</p>
								<div class="extra-space-l"></div>
								<a class="btn btn-blank" href="https://creativemarket.com/Themetorium" target="_blank" role="button">View More!</a>
							</div> --}}
						</div>
                        
					</div> <!-- /.caption -->
				</div> <!-- /.container -->

			</section>
			<!-- End text carousel intro section -->
                
                
                
                
            <!-- Begin about section -->
			<section id="about-section" class="page bg-style1">
                <!-- Begin page header-->
                <div class="page-header-wrapper">
                    <div class="container">
                        <div class="page-header text-center wow fadeInUp" data-wow-delay="0.3s">
                            <h2>{{$other_text['about']->text}}</h2>
                            <div class="devider"></div>
                            <p class="subtitle">{{$other_text['about']->text}}</p>
                        </div>
                    </div>
                </div>
                <!-- End page header-->

                <!-- Begin rotate box-1 -->
                <div class="rotate-box-1-wrapper">
                    <div class="container">
                        <div class="row">
                            @for($i=1;$i<=4;$i++)
                            <div class="col-md-3 col-sm-6">
                                <a href="#" class="rotate-box-1 square-icon wow zoomIn" data-wow-delay="0">
                                    <span class="rotate-box-icon"><i class="fa fa-users"></i></span>
                                    <div class="rotate-box-info">
                                        <h4>介紹{{$i}}</h4>
                                        <p>我是介紹我是介紹我是介紹我是介紹我是介紹我是介紹我是介紹我是介紹我是介紹我是介紹我是介紹我是介紹
                                        </p>
                                    </div>
                                </a>
                            </div>
                            @endfor
                        </div> <!-- /.row -->
                    </div> <!-- /.container -->
                </div>
                <!-- End rotate box-1 -->
                
                <div class="extra-space-l"></div>
                
                <!-- Begin page header--> 
                <div class="page-header-wrapper">
                    <div class="container">
                        <div class="page-header text-center wow fadeInUp" data-wow-delay="0.3s">
                            <h4>技能</h4>
                        </div>
                    </div>
                </div>
                <!-- End page header-->
                
                <!-- Begin Our Skills -->
                <div class="our-skills">
                	<div class="container">
                    	<div class="row">
                        
                        	<div class="col-sm-6">
                                <div class="skill-bar wow slideInLeft" data-wow-delay="0.2s">
                                    <div class="progress-lebel">
                                        <h6>Photoshop & Illustrator</h6>
                                    </div>
                                    <div class="progress">
                                      <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%;">
                                      </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-sm-6">
                                <div class="skill-bar wow slideInRight" data-wow-delay="0.2s">
                                    <div class="progress-lebel">
                                        <h6>WordPress</h6>
                                    </div>
                                    <div class="progress">
                                      <div class="progress-bar" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 85%;">
                                      </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-sm-6">
                                <div class="skill-bar wow slideInLeft" data-wow-delay="0.4s">
                                    <div class="progress-lebel">
                                        <h6>Html & Css</h6>
                                    </div>
                                    <div class="progress">
                                      <div class="progress-bar" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100" style="width: 95%;">
                                      </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-sm-6">
                                <div class="skill-bar wow slideInRight" data-wow-delay="0.4s">
                                    <div class="progress-lebel">
                                        <h6>Javascript</h6>
                                    </div>
                                    <div class="progress">
                                      <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%;">
                                      </div>
                                    </div>
                                </div>
                            </div>
                            
                        </div> <!-- /.row -->
                    </div> <!-- /.container -->
                </div>
                <!-- End Our Skill -->
          </section>
          <!-- End about section -->

                          <!-- Begin Portfolio -->
            <section id="articles-section" class="page bg-style1">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="portfolio">
                                <!-- Begin page header-->
                                <div class="page-header-wrapper">
                                    <div class="container">
                                        <div class="page-header text-center wow fadeInDown" data-wow-delay="0.4s">
                                            <h2>頁面</h2>
                                            <div class="devider"></div>
                                            <p class="subtitle">頁面列表</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- End page header-->
                                <div class="portfoloi_content_area" >
                                    {{-- <div class="portfolio_menu" id="filters">
                                        <ul>
                                            <li class="active_prot_menu"><a href="#porfolio_menu" data-filter="*">全部</a></li>
                                            <li><a href="#porfolio_menu" data-filter=".websites">網站</a></li>
                                            <li><a href="#porfolio_menu" data-filter=".webDesign">網路設計</a></li>
                                            <li><a href="#porfolio_menu" data-filter=".appsDevelopment">APP開發</a></li>
                                            <li><a href="#porfolio_menu" data-filter=".GraphicDesign">圖像設計</a></li>
                                            <li><a href="#porfolio_menu" data-filter=".responsive">響應式</a></li>
                                        </ul>
                                    </div> --}}
                                    <div class="portfolio_content">
                                        <div class="row"  id="portfolio">
                                            @foreach($portfolios as $key=>$row)
                                            <div class="col-xs-12 col-sm-4 appsDevelopment">
                                                <div class="article_single_content">
                                                    <img src="{{$row['picture']}}" alt="title"/>
                                                    <div>
                                                        <span><a href="#">{{$row['content']}}</a></span>
                                                        <span>{{$row['title']}}</span>
                                                    </div>
                                                </div>
                                            </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- End portfolio -->
                
            <!-- Begin Portfolio -->
            <section id="pages-section" class="page bg-style1">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="portfolio">
                                <!-- Begin page header-->
                                <div class="page-header-wrapper">
                                    <div class="container">
                                        <div class="page-header text-center wow fadeInDown" data-wow-delay="0.4s">
                                            <h2>類別</h2>
                                            <div class="devider"></div>
                                            <p class="subtitle">類別列表</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- End page header-->
                                
                                <div class="portfoloi_content_area" >
                                    {{-- <div class="portfolio_menu" id="filters">
                                        <ul>
                                            <li class="active_prot_menu"><a href="#porfolio_menu" data-filter="*">全部</a></li>
                                            <li><a href="#porfolio_menu" data-filter=".websites">網站</a></li>
                                            <li><a href="#porfolio_menu" data-filter=".webDesign">網路設計</a></li>
                                            <li><a href="#porfolio_menu" data-filter=".appsDevelopment">APP開發</a></li>
                                            <li><a href="#porfolio_menu" data-filter=".GraphicDesign">圖像設計</a></li>
                                            <li><a href="#porfolio_menu" data-filter=".responsive">響應式</a></li>
                                        </ul>
                                    </div> --}}
                                    
                                    <div class="portfolio_content">
                                        <div class="row"  id="portfolio">
                                            @foreach($categories as $key=>$row)
                                            <div class="col-xs-12 col-sm-4 appsDevelopment">
                                                <div class="article_single_content">
                                                    <img src="{{$row['picture']}}" alt="title"/>
                                                    <div>
                                                        <span><a href="#">{{$row['content']}}</a></span>
                                                        <span>{{$row['title']}}</span>
                                                    </div>
                                                </div>
                                            </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                               
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- End portfolio -->
                

            <!-- Begin Portfolio -->
            <section id="articles-section" class="page bg-style1">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="portfolio">
                                <!-- Begin page header-->
                                <div class="page-header-wrapper">
                                    <div class="container">
                                        <div class="page-header text-center wow fadeInDown" data-wow-delay="0.4s">
                                            <h2>文章</h2>
                                            <div class="devider"></div>
                                            <p class="subtitle">文章列表</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- End page header-->
                                <div class="portfoloi_content_area" >
                                    {{-- <div class="portfolio_menu" id="filters">
                                        <ul>
                                            <li class="active_prot_menu"><a href="#porfolio_menu" data-filter="*">全部</a></li>
                                            <li><a href="#porfolio_menu" data-filter=".websites">網站</a></li>
                                            <li><a href="#porfolio_menu" data-filter=".webDesign">網路設計</a></li>
                                            <li><a href="#porfolio_menu" data-filter=".appsDevelopment">APP開發</a></li>
                                            <li><a href="#porfolio_menu" data-filter=".GraphicDesign">圖像設計</a></li>
                                            <li><a href="#porfolio_menu" data-filter=".responsive">響應式</a></li>
                                        </ul>
                                    </div> --}}
                                    <div class="portfolio_content">
                                        <div class="row"  id="portfolio">
                                            @foreach($articles as $key=>$row)
                                            <div class="col-xs-12 col-sm-4 appsDevelopment">
                                                <div class="article_single_content">
                                                    <img src="{{$row['picture']}}" alt="title"/>
                                                    <div>
                                                        <span><a href="#">{{$row['content']}}</a></span>
                                                        <span>{{$row['title']}}</span>
                                                    </div>
                                                </div>
                                            </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- End portfolio -->

            <!-- Begin Portfolio -->
            <section id="portfolio-section" class="page bg-style1">
            	<div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="portfolio">
                                <!-- Begin page header-->
                                <div class="page-header-wrapper">
                                    <div class="container">
                                        <div class="page-header text-center wow fadeInDown" data-wow-delay="0.4s">
                                            <h2>{{$other_text['portfolio']->text}}</h2>
                                            <div class="devider"></div>
                                            <p class="subtitle">{{str_repeat($other_text['test_title']->text,2)}}</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- End page header-->
                                <div class="portfoloi_content_area" >
                                    <div class="portfolio_menu" id="filters">
                                        <ul>
                                            <li class="active_prot_menu"><a href="#porfolio_menu" data-filter="*">{{$other_text['all']->text}}</a></li>
                                            <li><a href="#porfolio_menu" data-filter=".websites">{{$other_text['website']->text}}</a></li>
                                            <li><a href="#porfolio_menu" data-filter=".webDesign">{{$other_text['web-design']->text}}</a></li>
                                            <li><a href="#porfolio_menu" data-filter=".appsDevelopment">{{$other_text['app-development']->text}}</a></li>
                                            <li><a href="#porfolio_menu" data-filter=".GraphicDesign">{{$other_text['graph-design']->text}}</a></li>
                                            <li><a href="#porfolio_menu" data-filter=".responsive">{{$other_text['rwd']->text}}</a></li>
                                        </ul>
                                    </div>
                                    <div class="portfolio_content">
                                        <div class="row"  id="portfolio">
                                            @foreach($portfolios as $key=>$row)
                                            <div class="col-xs-12 col-sm-4 appsDevelopment">
                                                <div class="portfolio_single_content">
                                                    <img src="{{$row['picture']}}" alt="title"/>
                                                    <div>
                                                        <span><a href="#">{{$row['content']}}</a></span>
                                                        <span>{{$row['title']}}</span>
                                                    </div>
                                                </div>
                                            </div>
                                            @endforeach
                                            {{-- <div class="col-xs-12 col-sm-4 GraphicDesign">
                                                <div class="portfolio_single_content">
                                                    <img src="/front/img/portfolio/p2.jpg" alt="title"/>
                                                    <div>
                                                        <a href="#">Photo Frame</a>
                                                        <span>Subtitle</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xs-12 col-sm-4 responsive">
                                                <div class="portfolio_single_content">
                                                    <img src="/front/img/portfolio/p3.jpg" alt="title"/>
                                                    <div>
                                                        <a href="#">Hand Shots</a>
                                                        <span>Subtitle</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xs-12 col-sm-4 webDesign websites">
                                                <div class="portfolio_single_content">
                                                    <img src="/front/img/portfolio/p4.jpg" alt="title"/>
                                                    <div>
                                                        <a href="#">Night Abstract</a>
                                                        <span>Subtitle</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xs-12 col-sm-4 appsDevelopment websites">
                                                <div class="portfolio_single_content">
                                                    <img src="/front/img//portfolio/p5.jpg" alt="title"/>
                                                    <div>
                                                        <a href="#">Joy of Independence</a>
                                                        <span>Subtitle</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xs-12 col-sm-4 GraphicDesign">
                                                <div class="portfolio_single_content">
                                                    <img src="/front/img/portfolio/p6.jpg" alt="title"/>
                                                    <div>
                                                        <a href="#">Night Crawlers</a>
                                                        <span>Subtitle</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xs-12 col-sm-4 responsive">
                                                <div class="portfolio_single_content">
                                                    <img src="/front/img/portfolio/p7.jpg" alt="title"/>
                                                    <div>
                                                        <a href="#">Last Motel</a>
                                                        <span>Subtitle</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xs-12 col-sm-4 GraphicDesign">
                                                <div class="portfolio_single_content">
                                                    <img src="/front/img/portfolio/p8.jpg" alt="title"/>
                                                    <div>
                                                        <a href="#">Dirk Road</a>
                                                        <span>Subtitle</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xs-12 col-sm-4 websites">
                                                <div class="portfolio_single_content">
                                                    <img src="/front/img/portfolio/p9.jpg" alt="title"/>
                                                    <div>
                                                        <a href="#">Old is Gold</a>
                                                        <span>Subtitle</span>
                                                    </div>
                                                </div>
                                            </div> --}}
                                        </div>
                                    </div>
                                </div>
                            
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- End portfolio -->
              
              
          <!-- Begin cta -->
          {{-- <section id="cta-section">
          	<div class="cta">
            	<div class="container">
                	<div class="row">
                    
                    	<div class="col-md-9">
                        	<h1>Download Our Pdf</h1>
                            <p>Inspired by nature, follow technology, appreciate the classics. You can build modern & professional websites with Unika. The possibilities are just endless.</p>
                        </div>
                        
                        <div class="col-md-3">
                        	<div class="cta-btn wow bounceInRight" data-wow-delay="0.4s">
                        <a class="btn btn-default btn-lg" href="http://www.imransdesign.com/" target="_blank" role="button">Download</a>
                        	</div>
                        </div>
                        
                    </div> <!-- /.row -->
                </div> <!-- /.container -->
            </div>
          </section> --}}
          <!-- End cta -->

              
              
              
            <!-- Begin Services -->
            <section id="services-section" class="page text-center">
                <!-- Begin page header-->
                <div class="page-header-wrapper">
                    <div class="container">
                        <div class="page-header text-center wow fadeInDown" data-wow-delay="0.4s">
                            <h2>{{$other_text['test_title']->text}}</h2>
                            <div class="devider"></div>
                            <p class="subtitle">{{str_repeat($other_text['test_text']->text,2)}}</p>
                        </div>
                    </div>
                </div>
                <!-- End page header-->
            
                <!-- Begin roatet box-2 -->
                <div class="rotate-box-2-wrapper">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-3 col-sm-6">
                                <a href="#" class="rotate-box-2 square-icon text-center wow zoomIn" data-wow-delay="0">
                                    <span class="rotate-box-icon"><i class="fa fa-mobile"></i></span>
                                    <div class="rotate-box-info">
                                        <h4>App 開發</h4>
                                        <p>{{str_repeat($other_text['test_text']->text,6)}}</p>
                                    </div>
                                </a>
                            </div>
            
                            <div class="col-md-3 col-sm-6">
                                <a href="#" class="rotate-box-2 square-icon text-center wow zoomIn" data-wow-delay="0.2s">
                                    <span class="rotate-box-icon"><i class="fa fa-pie-chart"></i></span>
                                    <div class="rotate-box-info">
                                        <h4>UI 設計</h4>
                                        <p>{{str_repeat($other_text['test_text']->text,6)}}</p>
                                    </div>
                                </a>
                            </div>
            
                            <div class="col-md-3 col-sm-6">
                                <a href="#" class="rotate-box-2 square-icon text-center wow zoomIn" data-wow-delay="0.4s">
                                    <span class="rotate-box-icon"><i class="fa fa-cloud"></i></span>
                                    <div class="rotate-box-info">
                                        <h4>雲端主機</h4>
                                        <p>{{str_repeat($other_text['test_text']->text,6)}}</p>
                                    </div>
                                </a>
                            </div>
                            
                            <div class="col-md-3 col-sm-6">
                                <a href="#" class="rotate-box-2 square-icon text-center wow zoomIn" data-wow-delay="0.6s">
                                    <span class="rotate-box-icon"><i class="fa fa-pencil"></i></span>
                                    <div class="rotate-box-info">
                                        <h4>程式紀錄</h4>
                                        <p>{{str_repeat($other_text['test_text']->text,6)}}</p>
                                    </div>
                                </a>
                            </div>
                            
                        </div> <!-- /.row -->
                    </div> <!-- /.container -->
                    
                    <div class="container">
                        <!-- Cta Button -->
                        <div class="extra-space-l"></div>
                        <div class="text-center">
                    		<a class="btn btn-default btn-lg-xl" href="http://www.imransdesign.com/" target="_blank" role="button">{{str_repeat($other_text['test_text']->text,1)}}</a>
                        </div>
                    </div> <!-- /.container -->                       
                </div>
                <!-- End rotate-box-2 -->
            </section>
            <!-- End Services -->
              
              
              
              
            <!-- Begin testimonials -->
            <section id="testimonial-section">
                <div id="testimonial-trigger" class="testimonial text-white parallax" data-stellar-background-ratio="0.5" style="background-image: url(/front/img/testimonial-bg.jpg);">
                    <div class="cover"></div>
                    <!-- Begin page header-->
                    <div class="page-header-wrapper">
                        <div class="container">
                            <div class="page-header text-center wow fadeInDown" data-wow-delay="0.4s">
                                <h2>評論</h2>
                                <div class="devider"></div>
                                <p class="subtitle">{{str_repeat($other_text['test_text']->text,2)}}</p>
                            </div>
                        </div>
                    </div>
                    <!-- End page header-->
                    <div class="container">
                        <div class="testimonial-inner center-block text-center">
                            <div id="owl-testimonial" class="owl-carousel">
                                <div class="item">
                                    <blockquote>
                                        <p>{{str_repeat($other_text['test_text']->text,6)}}</p>
                                        <footer><cite title="Source Title">{{str_repeat($other_text['test_text']->text,1)}}</cite></footer>
                                    </blockquote>
                                </div>
                                <div class="item">
                                    <blockquote>
                                        <p>{{str_repeat($other_text['test_text']->text,6)}}</p>
                                        <footer><cite title="Source Title">{{str_repeat($other_text['test_text']->text,1)}}</cite></footer>
                                    </blockquote>
                                </div>
                                <div class="item">
                                    <blockquote>
                                        <p>{{str_repeat($other_text['test_text']->text,10)}}</p>
                                        <footer><cite title="Source Title">{{str_repeat($other_text['test_text']->text,1)}}</cite></footer>
                                    </blockquote>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- End testimonials -->
                
            <!-- Begin counter up -->
            <section id="counter-section">                					
				<div id="counter-up-trigger" class="counter-up text-white parallax" data-stellar-background-ratio="0.5" style="background-image: url(/front/img/counter-bg.jpg);">
					<div class="cover"></div>
                    <!-- Begin page header-->
                    <div class="page-header-wrapper">
                        <div class="container">
                            <div class="page-header text-center wow fadeInDown" data-wow-delay="0.4s">
                                <h2>{{str_repeat($other_text['test_text']->text,2)}}</h2>
                                <div class="devider"></div>
                                <p class="subtitle">{{str_repeat($other_text['test_text']->text,4)}}</p>
                            </div>
                        </div>
                    </div>
                    <!-- End page header-->
					<div class="container">

						<div class="row">

							<div class="fact text-center col-md-3 col-sm-6">
								<div class="fact-inner">
									<i class="fa fa-users fa-3x"></i>
                                    <div class="extra-space-l"></div>
									<span class="counter">{{rand(10, 30)}}</span>
									<p class="lead">{{str_repeat($other_text['test_text']->text,4)}}</p>
								</div>
							</div>

							<div class="fact text-center col-md-3 col-sm-6">
								<div class="fact-inner">
									<i class="fa fa-leaf fa-3x"></i>
                                    <div class="extra-space-l"></div>
									<span class="counter">{{rand(10, 30)}}</span>
									<p class="lead">{{str_repeat($other_text['test_text']->text,4)}}</p>
								</div>
							</div>

							<div class="fact text-center col-md-3 col-sm-6">
								<div class="fact-inner">
									<i class="fa fa-trophy fa-3x"></i>
                                    <div class="extra-space-l"></div>
									<span class="counter">{{rand(10, 30)}}</span>
									<p class="lead">{{str_repeat($other_text['test_text']->text,4)}}</p>
								</div>
							</div>

							<div class="fact last text-center col-md-3 col-sm-6">
								<div class="fact-inner">
									<i class="fa fa-coffee fa-3x"></i>
                                    <div class="extra-space-l"></div>
									<span class="counter">{{rand(10, 30)}}</span>
									<p class="lead">{{str_repeat($other_text['test_text']->text,4)}}</p>
								</div>
							</div>

						</div> <!-- /.row -->
					</div> <!-- /.container -->
				</div>
            </section>
			<!-- End counter up -->
                
                
                
                
            <!-- Begin team-->
            <section id="team-section" class="page">
                <!-- Begin page header-->
                <div class="page-header-wrapper">
                    <div class="container">
                        <div class="page-header text-center wow fadeInDown" data-wow-delay="0.4s">
                            <h2>團隊</h2>
                            <div class="devider"></div>
                            <p class="subtitle">{{str_repeat($other_text['test_text']->text,2)}}</p>
                        </div>
                    </div>
                </div>
                <!-- End page header-->
                <div class="container">
                    <div class="row">
                        <div class="team-items">
                            <div class="col-md-2">
                                <div class="team-container wow bounceIn" data-wow-delay="0.2s">
                                    <div class="team-item">
                                        <div class="team-triangle">
                                            <div class="content">
                                                <img src="#" alt="title"/>
                                                <div class="team-hover text-center">
                                                    <i class="fa fa-male"></i>
                                                    <p>{{str_repeat($other_text['test_text']->text,1)}}</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="team-container wow bounceIn" data-wow-delay="0.3s">
                                    <div class="team-item">
                                        <div class="team-triangle">
                                            <div class="content">
                                                <img src="#" alt="title"/>
                                                <div class="team-hover text-center">
                                                    <i class="fa fa-female"></i>
                                                    <p>{{str_repeat($other_text['test_text']->text,1)}}</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="team-container wow bounceIn" data-wow-delay="0.4s">
                                    <div class="team-item">
                                        <div class="team-triangle">
                                            <div class="content">
                                                <img src="/front/img/team/1.jpg" alt="title"/>
                                                <div class="team-hover text-center">
                                                    <i class="fa fa-male"></i>
                                                    <p>{{str_repeat($other_text['test_text']->text,1)}}</p>
                                                </div>
                                            </div>  
                                        </div>
                                    </div>
                                </div>
                            </div>
    
                            <div class="col-md-2">
                                <div class="team-container wow bounceIn" data-wow-delay="0.5s">
                                    <div class="team-item">
                                        <div class="team-triangle">
                                            <div class="content">
                                                <img src="/front/img/team/1.jpg" alt="title"/>
                                                <div class="team-hover text-center">
                                                    <i class="fa fa-male"></i>
                                                    <p>{{str_repeat($other_text['test_text']->text,1)}}</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="team-container wow bounceIn" data-wow-delay="0.6s">
                                    <div class="team-item">
                                        <div class="team-triangle">
                                            <div class="content">
                                                <img src="/front/img/team/1.jpg" alt="title"/>
                                                <div class="team-hover text-center">
                                                    <i class="fa fa-male"></i>
                                                    <p>{{str_repeat($other_text['test_text']->text,1)}}</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="team-container wow bounceIn" data-wow-delay="0.7s">
                                    <div class="team-item">
                                        <div class="team-triangle">
                                            <div class="content">
                                                <img src="/front/img/team/1.jpg" alt="title"/>
                                                <div class="team-hover text-center">
                                                    <i class="fa fa-male"></i>
                                                    <p>{{str_repeat($other_text['test_text']->text,1)}}</p>
                                                </div>
                                            </div>  
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="team-container wow bounceIn" data-wow-delay="0.8s">
                                    <div class="team-item">
                                        <div class="team-triangle">
                                            <div class="content">
                                                <img src="/front/img/team/1.jpg" alt="title"/>
                                                <div class="team-hover text-center">
                                                    <i class="fa fa-female"></i>
                                                    <p>{{str_repeat($other_text['test_text']->text,1)}}</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>  
                    </div>
                </div>

            </section>
            <!-- End team-->
                
                
                
                
            <!-- Begin partners -->
            <section id="partners-section">
                <!-- Begin page header-->
                <div class="page-header-wrapper">
                    <div class="container">
                        <div class="page-header text-center wow fadeInDown" data-wow-delay="0.4s">
                            <h2>夥伴</h2>
                            <div class="devider"></div>
                            <p class="subtitle">{{str_repeat($other_text['test_text']->text,3)}}</p>
                        </div>
                    </div>
                </div>
                <!-- End page header-->
                <div class="container">
                    <div id="owl-partners" class="owl-carousel">
                        <img src="/front/img/partners/1.png" alt="img">
                        <img src="/front/img/partners/2.png" alt="img">
                        <img src="/front/img/partners/3.png" alt="img">
                        <img src="/front/img/partners/4.png" alt="img">
                        <img src="/front/img/partners/5.png" alt="img">
                        <img src="/front/img/partners/6.png" alt="img">
                        <img src="/front/img/partners/7.png" alt="img">
                    </div>
                </div>
            </section>
            <!-- End partners -->
                
                
                
                
            <!-- Begin prices section -->
			<section id="prices-section" class="page">

                <!-- Begin page header-->
                <div class="page-header-wrapper">
                    <div class="container">
                        <div class="page-header text-center wow fadeInDown" data-wow-delay="0.4s">
                            <h2>價格</h2>
                            <div class="devider"></div>
                            <p class="subtitle">{{str_repeat($other_text['test_text']->text,1)}}</p>
                        </div>
                    </div>
                </div>
                <!-- End page header-->

				<div class="extra-space-l"></div>

				<!-- Begin prices -->
				<div class="prices">
					<div class="container">
						<div class="row">
							
							<div class="price-box col-sm-6 col-md-3 wow flipInY" data-wow-delay="0.3s">
								<div class="panel panel-default">
									<div class="panel-heading text-center">
										<i class="fa fa-plug fa-2x"></i>
										<h3>{{str_repeat($other_text['test_text']->text,1)}}</h3>
									</div>
									<div class="panel-body text-center">
										<p class="lead"><strong>{{str_repeat($other_text['test_text']->text,1)}}</strong></p>
									</div>
									<ul class="list-group text-center">
										<li class="list-group-item">{{str_repeat($other_text['test_text']->text,1)}}</li>
										<li class="list-group-item">{{str_repeat($other_text['test_text']->text,1)}}</li>
										<li class="list-group-item">{{str_repeat($other_text['test_text']->text,1)}}</li>
										<li class="list-group-item">{{str_repeat($other_text['test_text']->text,1)}}n</li>
										<li class="list-group-item">{{str_repeat($other_text['test_text']->text,1)}}</li>
									</ul>
									<div class="panel-footer text-center">
										<a class="btn btn-default" href="#">{{str_repeat($other_text['test_text']->text,1)}}</a>
									</div>
								</div>										
							</div>

							<div class="price-box col-sm-6 col-md-3 wow flipInY" data-wow-delay="0.5s">
								<div class="panel panel-default">
									<div class="panel-heading text-center">
										<i class="fa fa-cog fa-2x"></i>
										<h3>{{str_repeat($other_text['test_text']->text,1)}}</h3>
									</div>
									<div class="panel-body text-center">
										<p class="lead"><strong>{{str_repeat($other_text['test_text']->text,1)}}</strong></p>
									</div>
									<ul class="list-group text-center">
										<li class="list-group-item">{{str_repeat($other_text['test_text']->text,1)}}</li>
										<li class="list-group-item">{{str_repeat($other_text['test_text']->text,1)}}</li>
										<li class="list-group-item">{{str_repeat($other_text['test_text']->text,1)}}</li>
										<li class="list-group-item">{{str_repeat($other_text['test_text']->text,1)}}</li>
										<li class="list-group-item">{{str_repeat($other_text['test_text']->text,1)}}</li>
									</ul>
									<div class="panel-footer text-center">
										<a class="btn btn-default" href="#">{{str_repeat($other_text['test_text']->text,1)}}</a>
									</div>
								</div>										
							</div>
							
							<div class="price-box col-sm-6 price-box-featured col-md-3 wow flipInY" data-wow-delay="0.7s">
								<div class="panel panel-default">
									<div class="panel-heading text-center">
										<i class="fa fa-star fa-2x"></i>
										<h3>{{str_repeat($other_text['test_text']->text,1)}}</h3>
									</div>
									<div class="panel-body text-center">
										<p class="lead"><strong>{{str_repeat($other_text['test_text']->text,1)}}</strong></p>
									</div>
									<ul class="list-group text-center">
										<li class="list-group-item">{{str_repeat($other_text['test_text']->text,1)}}</li>
										<li class="list-group-item">{{str_repeat($other_text['test_text']->text,1)}}</li>
										<li class="list-group-item">{{str_repeat($other_text['test_text']->text,1)}}</li>
										<li class="list-group-item">{{str_repeat($other_text['test_text']->text,1)}}</li>
										<li class="list-group-item">{{str_repeat($other_text['test_text']->text,1)}}</li>
									</ul>
									<div class="panel-footer text-center">
										<a class="btn btn-default" href="#">{{str_repeat($other_text['test_text']->text,1)}}</a>
									</div>
									<div class="price-box-ribbon"><strong>{{str_repeat($other_text['test_text']->text,1)}}</strong></div>
								</div>										
							</div>
							
							<div class="price-box col-sm-6 col-md-3 wow flipInY" data-wow-delay="0.9s">
								<div class="panel panel-default">
									<div class="panel-heading text-center">
										<i class="fa fa-plus fa-2x"></i>
										<h3>{{str_repeat($other_text['test_text']->text,1)}}</h3>
									</div>
									<div class="panel-body text-center">
										<p class="lead"><strong>{{str_repeat($other_text['test_text']->text,1)}}</strong></p>
									</div>
									<ul class="list-group text-center">
										<li class="list-group-item">{{str_repeat($other_text['test_text']->text,1)}}</li>
										<li class="list-group-item">{{str_repeat($other_text['test_text']->text,1)}}</li>
										<li class="list-group-item">{{str_repeat($other_text['test_text']->text,1)}}</li>
										<li class="list-group-item">{{str_repeat($other_text['test_text']->text,1)}}</li>
										<li class="list-group-item">{{str_repeat($other_text['test_text']->text,1)}}</li>
									</ul>
									<div class="panel-footer text-center">
										<a class="btn btn-default" href="#">{{str_repeat($other_text['test_text']->text,1)}}</a>
									</div>
								</div>										
							</div>
							
						</div> <!-- /.row -->
					</div> <!-- /.container -->
				</div>
				<!-- End prices -->
				<div class="extra-space-l"></div>
			</section>
			<!-- End prices section -->
                
                
                
                
            <!-- Begin social section -->
			<section id="social-section">
            
                 <!-- Begin page header-->
                <div class="page-header-wrapper">
                    <div class="container">
                        <div class="page-header text-center wow fadeInDown" data-wow-delay="0.4s">
                            <h2>加入我們</h2>
                            <div class="devider"></div>
                            <p class="subtitle">{{str_repeat($other_text['test_text']->text,2)}}</p>
                        </div>
                    </div>
                </div>
                <!-- End page header-->
                
                <div class="container">
                	<ul class="social-list">
                		<li> <a href="#" class="rotate-box-1 square-icon text-center wow zoomIn" data-wow-delay="0.3s"><span class="rotate-box-icon"><i class="fa fa-facebook"></i></span></a></li>
                		<li> <a href="#" class="rotate-box-1 square-icon text-center wow zoomIn" data-wow-delay="0.4s"><span class="rotate-box-icon"><i class="fa fa-twitter"></i></span></a></li>
                		<li> <a href="#" class="rotate-box-1 square-icon text-center wow zoomIn" data-wow-delay="0.5s"><span class="rotate-box-icon"><i class="fa fa-google-plus"></i></span></a></li>
                		<li> <a href="#" class="rotate-box-1 square-icon text-center wow zoomIn" data-wow-delay="0.6s"><span class="rotate-box-icon"><i class="fa fa-pinterest-p"></i></span></a></li>
                		<li> <a href="#" class="rotate-box-1 square-icon text-center wow zoomIn" data-wow-delay="0.7s"><span class="rotate-box-icon"><i class="fa fa-tumblr"></i></span></a></li>
                		<li> <a href="#" class="rotate-box-1 square-icon text-center wow zoomIn" data-wow-delay="0.8s"><span class="rotate-box-icon"><i class="fa fa-dribbble"></i></span></a></li>                      
                    </ul>
                </div>
                
            </section>
            <!-- End social section -->
                
                
                
                
            <!-- Begin contact section -->
			<section id="contact-section" class="page text-white parallax" data-stellar-background-ratio="0.5" style="background-image: url(/front/img/map-bg.jpg);">
            <div class="cover"></div>
            
                 <!-- Begin page header-->
                <div class="page-header-wrapper">
                    <div class="container">
                        <div class="page-header text-center wow fadeInDown" data-wow-delay="0.4s">
                            <h2>聯絡我們</h2>
                            <div class="devider"></div>
                            <p class="subtitle">{{str_repeat($other_text['test_text']->text,2)}}</p>
                        </div>
                    </div>
                </div>
                <!-- End page header-->
                
                <div class="contact wow bounceInRight" data-wow-delay="0.4s">
                    <div class="container">
                    	<div class="row">
                        
                            <div class="col-sm-6">
                                <div class="contact-info">
                                    <h4>Our Address</h4>
                                    <ul class="contact-address">
			                            <li><i class="fa fa-map-marker fa-lg"></i>{{str_repeat($other_text['test_text']->text,10)}}</li>
			                            <li><i class="fa fa-phone"></i>&nbsp;{{str_repeat($other_text['test_text']->text,3)}}</li>
			                            <li><i class="fa fa-print"></i>&nbsp;{{str_repeat($other_text['test_text']->text,3)}}</li>
			                            <li><i class="fa fa-envelope"></i> {{str_repeat($other_text['test_text']->text,3)}}</li>
			                            <li><i class="fa fa-skype"></i> {{str_repeat($other_text['test_text']->text,3)}}</li>
			                        </ul>
                                </div>
                            </div>
                        
                        	<div class="col-sm-6">
                                <div class="contact-form">
                                	<h4>{{str_repeat($other_text['test_text']->text,2)}}</h4>
                                    <form role="form">
                                        <div class="form-group">
                                            <input type="text" class="form-control input-lg" placeholder="名字" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="email" class="form-control input-lg" placeholder="E-mail" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control input-lg" placeholder="標題" required>
                                        </div>
                                        <div class="form-group">
                                            <textarea class="form-control input-lg" rows="5" placeholder="訊息" required></textarea>
                                        </div>
                                        <button type="submit" class="btn wow bounceInRight" data-wow-delay="0.8s">{{str_repeat($other_text['test_text']->text,1)}}</button>
                                    </form>
                                </div>	
                            </div>
                                                                                
                        </div> <!-- /.row -->
                    </div> <!-- /.container -->
                </div>
            </section>
            <!-- End contact section -->
                
                

                
            <!-- Begin footer -->
            <footer class="text-off-white">
            
                <div class="footer-top">
                	<div class="container">
                    	<div class="row wow bounceInLeft" data-wow-delay="0.4s">

                            <div class="col-sm-6 col-md-4">
                            	<h4>{{$other_text['test_text']->text}}</h4>
                                <ul class="imp-links">
                                	<li><a href="">{{$other_text['test_text']->text}}</a></li>
                                	<li><a href="">{{$other_text['test_text']->text}}</a></li>
                                	<li><a href="">{{$other_text['test_text']->text}}</a></li>
                                	<li><a href="">{{$other_text['test_text']->text}}</a></li>
                                	<li><a href="">{{$other_text['test_text']->text}}</a></li>
                                	<li><a href="">{{$other_text['test_text']->text}}</a></li>
                                </ul>
                            </div>
                        
                        	<div class="col-sm-6 col-md-4">
                                <h4>{{$other_text['test_text']->text}}</h4>
                            	<div id="footer_signup">
                                    <div id="email">
                                        <form id="subscribe" method="POST">
                                            <input type="text" placeholder="Enter email address" name="email" id="address" data-validate="validate(required, email)"/>
                                            <button type="submit">{{str_repeat($other_text['test_text']->text,1)}}</button>
                                            <span id="result" class="section-description"></span>
                                        </form> 
                                    </div>
                                </div> 
                                <p>{{str_repeat($other_text['test_text']->text,10)}}</p> 
                            </div>

                            <div class="col-sm-12 col-md-4">
                                <h4>最近推文</h4>
                                <div class="single-tweet">
                                    <div class="tweet-content"><span>@Lohaslife</span> {{str_repeat($other_text['test_text']->text,4)}}</div>
                                    <div class="tweet-date">1 小時前</div>
                                </div>
                                <div class="single-tweet">
                                    <div class="tweet-content"><span>@Lohaslife</span> {{str_repeat($other_text['test_text']->text,4)}}</div>
                                    <div class="tweet-date">1 小時前</div>
                                </div>
                            </div>
                            
                        </div> <!-- /.row -->
                    </div> <!-- /.container -->
                </div>
                
                <div class="footer">
                    <div class="container text-center wow fadeIn" data-wow-delay="0.4s">
                        <p class="copyright">版權 &copy; 2022 - 設計 <a href="#" class="theme-author">{{str_repeat($other_text['test_text']->text,2)}}</a> &amp; Developed by <a href="#" class="theme-author">Lohaslife</a></p>
                    </div>
                </div>

            </footer>
            <!-- End footer -->

            <a href="#" class="scrolltotop"><i class="fa fa-arrow-up"></i></a> <!-- Scroll to top button -->
                                              
        </div><!-- body ends -->
        
        
        
        
        <!-- Plugins JS -->
		<script src="/front/inc/jquery/jquery-1.11.1.min.js"></script>
		<script src="/front/inc/bootstrap/js/bootstrap.min.js"></script>
		<script src="/front/inc/owl-carousel/js/owl.carousel.min.js"></script>
		<script src="/front/inc/stellar/js/jquery.stellar.min.js"></script>
		<script src="/front/inc/animations/js/wow.min.js"></script>
        <script src="/front/inc/waypoints.min.js"></script>
		<script src="/front/inc/isotope.pkgd.min.js"></script>
		<script src="/front/inc/classie.js"></script>
		<script src="/front/inc/jquery.easing.min.js"></script>
		<script src="/front/inc/jquery.counterup.min.js"></script>
		<script src="/front/inc/smoothscroll.js"></script>

		<!-- Theme JS -->
		<script src="/front/js/theme.js"></script>
        <script>
            $(document).ready(function(){
                $("#lang").val("{{$lang}}");
                $("#lang").on('change',function(){
                    let lang = $(this).val();
                    console.log(lang);
                    $.ajax({
                        url: "/ajaxLangChange",
                        type: "POST",
                        cache: false,
                        data:{
                            lang:lang,
                            _token:"{{ csrf_token() }}"
                        },
                        success: function(response){
                            console.log(response)
                            
                            window.location.reload();
                        }
                    });
                })
            })
        </script>
    </body> 
   
</html>
