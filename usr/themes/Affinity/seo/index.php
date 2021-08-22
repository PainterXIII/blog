
<?php
include 'inc/program.php';
//运行参数，路径自己修改
$sth_brand = '闪电云博客-分享你我';
//站点名称
$sth_home_url = 'https://blog.flashproxy.cn/seo/';
//本站域名/可以放在二级目录下面，后面加上二级目录地址就行了
$sth_qq = '446150793';//QQ自己修改，可以为空
$sth_logo = 'https://flashproxy.cn/favicon.png';//logo地址
$sth_email = '446150793@qq.com';//邮箱地址，可以为空
$sth_add = '中国-北京';//地址自己修改，可以为空
ob_start();
?>

<!DOCTYPE html>
<!--
                              _ooOoo_
                             o8888888o
                             88" . "88	
                             (| -_- |)         
                             O\  =  /O	
                          ____/`---'\____	
                        .'  \\|     |//  `.
                       /  \\|||  :  |||//  \
                      /  _||||| -:- |||||-  \
                      |   | \\\  -  /// |   |
                      | \_|  ''\---/''  |   |
                      \  .-\__  `-`  ___/-. /
                    ___`. .'  /--.--\  `. . __
                 ."" '<  `.___\_<|>_/___.'  >'"".
                | | :  `- \`.;`\ _ /`;.`/ - ` : | |
                \  \ `-.   \_ __\ /__ _/   .-` /  /
           ======`-.____`-.___\_____/___.-`____.-'======
                              `=---='
           ^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^

我佛保佑！排名上涨💹，流量上涨💹，蜘蛛上涨💹，收录上涨💹！  一直就是涨💹涨💹涨💹涨💹涨💹涨💹涨💹涨💹涨💹涨💹涨💹涨💹涨💹涨💹涨💹
-->
<html lang="zh-CN">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <title><?=$sth_key['0'];?></title>
<meta name="keywords" content="<?php echo $sth_key['5'] . '_' . $sth_key['6'] . '_' . $sth_key['7'] . '_' . $sth_key['8'] . '_' . $sth_key['9'];?>">
<meta name="description" content="<?php echo $sth_key['0'];?>,<?php echo $sth_brand;?>专注于网络工程项目，与国内多家上市企业与500强长期战略合作，拥有网络工程师20余名，专利证书与著作权70余项，百度营销师10余名，网络工程就选<?php echo $sth_brand;?>!"> 
 

  
    <link rel="stylesheet" href="/./seo/assets/css/flaticon.css">
    <link rel="stylesheet" href="/./seo/assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="/./seo/assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="/./seo/assets/css/animate.min.css">
    <link rel="stylesheet" href="/./seo/assets/css/slick.css">
    <link rel="stylesheet" href="/./seo/assets/css/custom-animation.css">
    <link rel="stylesheet" href="/./seo/assets/css/magnific-popup.css">
    <link rel="stylesheet" href="/./seo/assets/css/bootstrap-v4.1.3.min.css">
    <link rel="stylesheet" href="/./seo/assets/css/spacing.min.css">
    <link rel="stylesheet" href="/./seo/assets/css/mainmenu.css">
    <link rel="stylesheet" href="/./seo/assets/css/style.css">
    <link rel="stylesheet" href="/./seo/assets/css/responsive.css">

</head>

<body>

    <div class="page-wrapper">

        <div class="preloader"></div>



        <header class="main-header">

          
            <div class="header-upper">
                <div class="container-fluid clearfix">

                    <div class="header-inner clearfix">
                        <div class="logo-outer">
                            <div class="logo"><a href="<?php echo $sth_home_url;?>"><img src="<?=$sth_logo?>" ></a></div>
                        </div>

                      
                        <nav class="main-menu navbar-expand-lg ml-md-auto">
                            <div class="navbar-header clearfix">
                                <div class="logo"><a href="<?php echo $sth_home_url;?>"><img src="<?=$sth_logo?>" ></a></div>
                               
                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse-one">
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                            </div>

                            <div class="navbar-collapse navbar-collapse-one collapse clearfix">
                                <ul class="navigation clearfix">
       <?php for($i=0;$i<9;$i++){?><div class="<?=rand_n(mt_rand(8,15));?>"></div><?php }?>
                                    <li class="current"><a href="<?=$sth_home_url;?>">首页</a></li>
<?php for($i=2;$i<6;$i++){?>
<li><a href="<?php echo $sth_home_url;?><?php  echo $sth_key[$i];?>/<?=mt_rand(199,399);?>"><?php  echo $sth_key[$i];?></a></li>
                              <?php }?>       
                                </ul>
                            </div>
                        </nav>
                       
                       
                    </div>

                </div>
            </div>
            

        </header>

       
        <section class="hero-section rel pt-220 rpt-150 pb-130 rpb-0">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-7">
                        <div class="hero-content my-50">
                            <h1 class="wow customFadeInUp delay-0-1s slow">欢迎来到<?=$sth_brand;?></h1>
                            <p class="wow customFadeInUp delay-0-3s slow">-<?php echo $sth_key['0'];?>-我们是专业的，找我们就对了！</p>
                            <a href="http://wpa.qq.com/msgrd?v=3&uin=<?=$sth_qq;?>" class="theme-btn btn-big wow customFadeInUp delay-0-5s slow">联系客服</a>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="hero-img">
                            <img src="/./seo/assets/img/hero/hero.png" alt="Hero Image">
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="shape shapeAnimationOne l-10 t-60">
                <img src="/./seo/assets/img/shapes/shape1.png" alt="Shape">
            </div>
            <div class="shape shapeAnimationTwo l-70 t-60">
                <img src="/./seo/assets/img/shapes/shape2.png" alt="Shape">
            </div>
            <div class="shape shapeAnimationThree l-50 t-100">
                <img src="/./seo/assets/img/shapes/shape3.png" alt="Shape">
            </div>
        </section>
      
        <section class="services-section rel text-center mt-100 mb-70">
            <div class="container">
                <div class="row">
	
                   
                    <div class="col-lg-4 col-md-6">
					
                        <div class="single-service-box style-three">
                            <div class="service-icon">
                                <img src="/./seo/assets/img/services/service1.png" alt="<?php  echo $sth_key[$i];?>">
                            </div>
                            <div class="service-content">
								
                                <h4><a>网站优化</a></h4>
                                <p><?php echo $sth_brand;?>专业SEO优化,百度搜狗360等搜索引擎的关键词seo优化网站排名的网络营销推广平台。合作企业上万家,服务于全国各地企业,全方位解决企业SEO难题。</p>
								
                            </div>
                        </div>
						
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="single-service-box style-three">
                            <div class="service-icon">
                                <img src="/./seo/assets/img/services/service2.png" alt="<?php  echo $sth_key[$i];?>">
                            </div>
                            <div class="service-content">
                               								
                                <h4><a>网站建设</a></h4>
                                <p><?php echo $sth_brand;?>提供最专业的网站建设,网站设计,企业网站建设,高端网站制作,商城网站建设,为企业打造符合品牌形象的企业网站建设网站,众多品牌网站制作案例是对我们最好的证明!</p>
								
                            </div>
                        </div>
                    </div>

                   
                    <div class="col-lg-4 col-md-6">
                        <div class="single-service-box style-three">
                            <div class="service-icon">
                                <img src="/./seo/assets/img/services/service3.png" alt="<?php  echo $sth_key[$i];?>">
                            </div>
                            <div class="service-content">
                               								
                                <h4><a>数据营销</a></h4>
                                <p><?php echo $sth_brand;?>数据收集、数据治理和数据平台解决了大数据营销的基础和架构问题,准备这些的目的最终是为了帮助企业的营销和业务。<br></p>
								
                            </div>
                        </div>
                    </div>
				
                </div>
            </div>
            
            <div class="shape shapeAnimationOne l-10 t-0">
                <img src="/./seo/assets/img/shapes/shape3.png" alt="Shape">
            </div>
            <div class="shape shapeAnimationTwo t-100 r-5">
                <img src="/./seo/assets/img/shapes/shape1.png" alt="Shape">
            </div>
        </section>
       
        <section class="about-section rel mb-100">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-5">
                        <div class="about-content mr-20 rmr-0 rmb-50 wow customFadeInRight delay-0-1s slow">
                            <div class="section-title mb-35">
                                <span class="sub-title">关于我们</span>
                                <h2><?php echo $sth_brand;?>-用心服务每一位客户，给用户最好的体验！</h2>
                            </div>
                            <p><?php echo $sth_brand;?>成立于2013年初，2017年更名为<?php echo $sth_brand;?>，公司从事网站建设，网站优化，数据营销，APP开发，微信开发,公众号开发，小程序开发，支付系统开发。</p>
                            <p><?php echo $sth_brand;?>专注于网络工程项目，与国内多家上市企业与500强长期战略合作，拥有网络工程师20余名，专利证书与著作权70余项，百度营销师10余名，网络工程就选<?php echo $sth_brand;?>!</p>
                            <a href="http://wpa.qq.com/msgrd?v=3&uin=<?=$sth_qq;?>" class="theme-btn mt-20">联系我们</a>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="about-image wow customFadeInLeft delay-0-1s slow">
                            <img src="/./seo/assets/img/about/about.png" alt="about image">
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="shape shapeAnimationFour l-10 t-5">
                <img src="/./seo/assets/img/shapes/shape4.png" alt="Shape">
            </div>
            <div class="shape shapeAnimationFive r-10 t-100 zm-1">
                <img src="/./seo/assets/img/shapes/shape2.png" alt="Shape">
            </div>
        </section>
       
        <section class="success-section pt-105 pb-70">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="success-box">
                            <i class="flaticon-competition"></i>
                            <div class="count-wrap">
                                <span class="count-text" data-speed="5000" data-stop="<?=mt_rand(499,999);?>">0</span>
                                <p>等待优化</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="success-box">
                            <i class="flaticon-happy"></i>
                            <div class="count-wrap">
                                <span class="count-text" data-speed="5000" data-stop="<?=mt_rand(399,999);?>">0</span>
                                <p>正在优化</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="success-box">
                            <i class="flaticon-admin"></i>
                            <div class="count-wrap">
                                <span class="count-text" data-speed="5000" data-stop="<?=mt_rand(199,399);?>">0</span>
                                <p>等待交付</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="success-box">
                            <i class="flaticon-startup"></i>
                            <div class="count-wrap">
                                <span class="count-text" data-speed="5000" data-stop="<?=mt_rand(4999,8999);?>">0</span>
                                <p>已经交付</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="success-bg"></div>
            <div class="shape shapeAnimationFour r-5 t-100">
                <img src="/./seo/assets/img/shapes/shape3.png" alt="Shape">
            </div>
        </section>
       
        <section class="services-two rel mb-115">
            <div class="container">
                <div class="service-inner" style="background-image:url(/./seo/assets/img/services/bg.png);">

                    <div class="section-title text-center mb-15">
                        <span class="sub-title">热点新闻</span>
                        <h2>关于：<?php echo $sth_key['0'];?> <br>的所有新闻都在这</h2>
                    </div>

                    <div class="service-carousel owl-carousel">
                          <?php for ($i = 9; $i < 27; $i++) {?> 
                        <div class="service-style-two">
                            <div class="service-image">
                                <img src="https://acg.xydwz.cn/gqapi/gqapi.php?<?=mt_rand(1,20);?>" alt="Service Image">
                            </div>
                            <div class="service-two-content">
                                <h4><a href="<?php  echo $sth_home_url . $sth_key[$i]; ?>"><?php echo $sth_key[$i];?></a></h4>
                                <p><a href="<?php  echo $sth_home_url . $sth_key[$i]; ?>"><?php echo $sth_content[$i];?></a></p>
                                <a href="http://wpa.qq.com/msgrd?v=3&uin=<?=$sth_qq;?>" class="read-more"><i class="flaticon-logout"></i>联系客服</a>
                            </div>
                        </div><?php  }?>
                        

                    </div>
					
                </div>
            </div>
            
            <div class="shape shapeAnimationThree b-40 l-10">
                <img src="/./seo/assets/img/shapes/shape1.png" alt="Shape">
            </div>
            <div class="shape shapeAnimationFive b-5 l-5">
                <img src="/./seo/assets/img/shapes/shape3.png" alt="Shape">
            </div>
            <div class="shape left-right r-10 b-30">
                <img src="/./seo/assets/img/shapes/shape5.png" alt="Shape">
            </div>
            <div class="shape shapeAnimationOne r-10 b-0">
                <img src="/./seo/assets/img/shapes/shape2.png" alt="Shape">
            </div>
        </section>
   
        <section class="team-section rel mb-65">
            <div class="container">
                <div class="section-title mb-35 pr-65">
                    <span class="sub-title">我们还能做这些</span>
                    <h2>做互联网我们是很认真很专业的! </h2>
                </div>

                <div class="team-carousel owl-carousel text-center">
 <?php for ($i = 27; $i < 37; $i++) {?> 
                    <div class="team-item">
                        <img src="https://acg.xydwz.cn/gqapi/gqapi.php?<?=mt_rand(20,40);?>" alt="Team Image">
                        <div class="service-two-content">

                            <h5><a href="<?php  echo $sth_home_url . $sth_key[$i]; ?>"><?php echo $sth_key[$i];?></a></h5>
                            <h6><a href="<?php  echo $sth_home_url . $sth_key[$i + 15]; ?>"><?php echo $sth_key[$i + 15];?></a></h6>
                        </div>
                    </div><?php  }?>
     
                    
                    
                </div>
            </div>
            
            <div class="shape shapeAnimationThree b-30 r-10">
                <img src="/./seo/assets/img/shapes/shape1.png" alt="Shape">
            </div>
            <div class="shape shapeAnimationTwo t-90 l-10">
                <img src="/./seo/assets/img/shapes/shape4.png" alt="Shape">
            </div>
        </section>
      
        <section class="faq-section mb-90">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-xl-6 col-md-6">
                        <div class="faq-image">
                            <img src="/./seo/assets/img/faq.png" alt="FAQ">
                        </div>
                    </div>
                    <div class="col-xl-6 col-md-6">
                        <div class="faq-wrap ml-50 rml-0">
                            <div class="section-title mb-40">
                                <span class="sub-title">帮助</span>
                                <h2>关于[<?php echo $sth_key['0'];?>]的其他答案</h2>
                            </div>
                            <div id="accordion" class="faq-accordion">
							 <?php for ($i = 38; $i < 42; $i++) {?> 
                                <div class="card">
                                    <div class="card-header">
                                        <button class="collapsed" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false">
                                            <i class="flaticon-chevron"></i>
                                            <a href="<?php  echo $sth_home_url . $sth_key[$i]; ?>"><?php echo $sth_key[$i];?><a>
                                        </button>
                                    </div>
                                    <div id="collapseOne" class="collapse" data-parent="#accordion">
                                        <div class="card-body">
                                            <a href="<?php  echo $sth_home_url . $sth_key[$i]; ?>"> <?php echo $sth_content[$i];?><a>
                                        </div>
                                    </div>
                                </div>
                                <?php  }?>
                                </div>
                            </div>
                       
                        </div>
                    </div>
                </div>
            </div>
        </section>
   
        <section class="testimonials-section rel text-center mb-115">
            <div class="container">
                <div class="testimonials-wrap">
                    <div class="section-title mb-40">
                        <span class="sub-title">客户评价</span>
                        <h2>感谢客户对我们的评价</h2>
                    </div>
                    
                    <div class="testimonial-two-wrap">
                        <div class="testi-two-item">
                           <i class="flaticon-quote"></i>
                            <p><?php echo $sth_brand;?>是一家很不错的公司，公司实力强大，对待事情认真，网站排名很快</p>
                            <div class="author-info">
                                <div class="author-img">
                                    <img src="/./seo/assets/img/testimonials/testi1.png" alt="Testimonial Author">
                                </div>
                                <div class="author-about">
                                    <h4>长隆石化</h4>
                                    <h6>张经理</h6>
                                    <div class="rattings">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="testi-two-item">
                           <i class="flaticon-quote"></i>
                            <p>经朋友介绍，我认识了<?php echo $sth_brand;?>的经理，他们的SEO水平很高，做网站也很精美，速度快，我们有什么问题能很快的给我们解决，赞一个！</p>
                            <div class="author-info">
                                <div class="author-img">
                                    <img src="/./seo/assets/img/testimonials/testi2.png" alt="Testimonial Author">
                                </div>
                                <div class="author-about">
                                    <h4>国泰汉帛</h4>
                                    <h6>许经理</h6>
                                    <div class="rattings">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
            <div class="shape shapeAnimationFive r-20 t-5">
                <img src="/./seo/assets/img/shapes/shape2.png" alt="Shape">
            </div>
            <div class="shape left-right l-5 t-100">
                <img src="/./seo/assets/img/shapes/shape5.png" alt="Shape">
            </div>
            <div class="shape shapeAnimationOne r-5 t-100">
                <img src="/./seo/assets/img/shapes/shape3.png" alt="Shape">
            </div>
        </section>
      
        <section class="blot-section rel mb-90">
            <div class="container">
                <div class="section-title text-center mb-45">
                    <span class="sub-title">专业、实力</span>
                    <h2>专业的团队做专业的事！</h2>
                </div>
                
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="blog-item">
                            <div class="blog-img">
                                <img src="/./seo/assets/img/blog/blog1.png" alt="Blog Image">
                            </div>
                            <div class="blog-content">
                                <div class="name-date">
                                    <span class="name">网站开发</span>
                                    <span class="date"></span>
                                </div>
                                <h4><a href="<?php  echo $sth_home_url . $sth_key[71]; ?>"><?php echo $sth_content[55];?></a></h4>
                                <a href="http://wpa.qq.com/msgrd?v=3&uin=<?=$sth_qq;?>" class="read-more"><i class="flaticon-logout"></i>联系我们</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="blog-item">
                            <div class="blog-img">
                                <img src="/./seo/assets/img/blog/blog2.png" alt="Blog Image">
                            </div>
                            <div class="blog-content">
                                <div class="name-date">
                                    <span class="name">APP开发</span>
                                    <span class="date"></span>
                                </div>
                                <h4><a href="<?php  echo $sth_home_url . $sth_key[57]; ?>"><?php echo $sth_content[57];?></a></h4>
                                <a href="http://wpa.qq.com/msgrd?v=3&uin=<?=$sth_qq;?>" class="read-more"><i class="flaticon-logout"></i>联系我们</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="blog-item">
                            <div class="blog-img">
                                <img src="/./seo/assets/img/blog/blog3.png" alt="Blog Image">
                            </div>
                            <div class="blog-content">
                                <div class="name-date">
                                    <span class="name">SEO优化</span>
                                    <span class="date"></span>
                                </div>
                                <h4><a href="<?php  echo $sth_home_url . $sth_key[77]; ?>"><?php echo $sth_content[77];?></a></h4>
                                <a href="http://wpa.qq.com/msgrd?v=3&uin=<?=$sth_qq;?>" class="read-more"><i class="flaticon-logout"></i>联系我们</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="shape shapeAnimationOne l-5 t-30">
                <img src="/./seo/assets/img/shapes/shape3.png" alt="Shape">
            </div>
            <div class="shape shapeAnimationTwo r-10 t-100 zm-1">
                <img src="/./seo/assets/img/shapes/shape1.png" alt="Shape">
            </div>
        </section>
       
       <section class="call-for-action rel text-center">
           <div class="container">
               <div class="call-action-content">
                   <h2>请问还有什么能够帮到你吗？</h2>
                   <p> 如果还有需要我们帮助你的地方请联系我们哦！</p>
                   <a href="http://wpa.qq.com/msgrd?v=3&uin=<?=$sth_qq;?>" class="theme-btn">联系我们</a>
               </div>
           </div>
           
            <div class="shape shapeAnimationThree l-10 t-50">
                <img src="/./seo/assets/img/shapes/shape2.png" alt="Shape">
            </div>
       </section>
      
        <footer class="footer-section mt-125 pt-100">
            <div class="container">

                <div class="row">

                  
                    <div class="col-lg-7">
                        <div class="row">

                           
                            <div class="col-sm-7">
                                <div class="footer-widget logo-widget mr-35">
                                    <div class="footer-logo"><a href="<?php echo $sth_home_url;?><?=mt_rand(199,399);?>"><img src="<?=$sth_logo?>" alt="logo"></a></div>
                                    <div class="widget-content">
                                        <div class="text mt-30">
                                            <p><?php echo $sth_brand;?>专注于网络工程项目，与国内多家上市企业与500强长期战略合作，拥有网络工程师20余名，专利证书与著作权70余项，百度营销师10余名，网络工程就选<?php echo $sth_brand;?>!</p>
                                        </div>
                                        <div class="footer-social-icon mt-20">
                                            <div class="social-link-icon">
                                                <a href="<?php echo $sth_url1[1]; ?>"><i class="fa fa-facebook-f"></i></a>
                                                <a href="<?php echo $sth_url1[2]; ?>"><i class="fa fa-twitter"></i></a>
                                                <a href="<?php echo $sth_url1[3]; ?>"><i class="fa fa-skype"></i></a>
                                                <a href="<?php echo $sth_url1[4]; ?>"><i class="fa fa-instagram"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            
                            <div class="col-sm-5">
                                <div class="footer-widget links-widget">
                                    <h4 class="footer-title">友情链接</h4>
                                    <div class="widget-content">
									<?php for ($i = 1; $i < 4; $i++) { ?>
                                        <ul>
                                            <li><a href="<?php echo $sth_url1[$i]; ?>"><?php  echo $sth_key[$i];?></a></li>
                                            
                                        </ul>
										<?php }?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                   
                    <div class="col-lg-5">
                        <div class="row">

                           
                            <div class="col-sm-5">
                                <div class="footer-widget links-widget">
                                    <h4 class="footer-title">我们的客户</h4>
                                    <div class="widget-content">
                                       <?php for ($i = 5; $i < 9; $i++) { ?>
                                        <ul>
                                            <li><a href="<?php echo $sth_url1[$i]; ?>"><?php  echo $sth_key[$i];?></a></li>
                                           
                                        </ul>
										<?php }?>
                                    </div>
                                </div>
                            </div>

                           
                            <div class="col-sm-7">
                                <div class="footer-widget info-widget">
                                    <h4 class="footer-title">Contact</h4>
                                    <div class="office-info">
                                        <ul>
                                            <li><i class="flaticon-home"></i><?php echo $sth_add;?></li>
                                            <li><i class="flaticon-telephone"></i>QQ:<?php echo $sth_qq;?><br>WeChat:<?php echo $sth_qq;?></li>
                                            <li><i class="flaticon-email"></i><?php echo $sth_email;?></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            
            <div class="footer-bottom">
                <div class="copyright">Copyright @<?php echo date('Y年', $time);?> <?php echo $sth_brand;?> All rights reserved</div>
            </div>
        </footer>


        <button class="scroll-top scroll-to-target" data-target="html">
            <span class="fa fa-angle-up"></span>
        </button>

    </div>



  
    <script src="/./seo/assets/js/jquery-3.3.1.min.js"></script>
    <script src="/./seo/assets/js/bootstrap-v4.1.3.min.js"></script>
    <script src="/./seo/assets/js/owl.carousel.min.js"></script>
    <script src="/./seo/assets/js/jquery.countTo.js"></script>
    <script src="/./seo/assets/js/jquery.magnific-popup.min.js"></script>
    <script src="/./seo/assets/js/isotope.pkgd.min.js"></script>
    <script src="/./seo/assets/js/slick.min.js"></script>
    <script src="/./seo/assets/js/wow.min.js"></script>
    <script src="/./seo/assets/js/appear.js"></script>
    <script src="/./seo/assets/js/main.js"></script>

</body>

</html>
