<?php /*a:6:{s:68:"F:\gitProject\tofu_pudding\application\index\view\profit\equity.html";i:1594891146;s:66:"F:\gitProject\tofu_pudding\application\index\view\public\base.html";i:1594787886;s:68:"F:\gitProject\tofu_pudding\application\index\view\public\header.html";i:1592982431;s:65:"F:\gitProject\tofu_pudding\application\index\view\public\nav.html";i:1592548201;s:68:"F:\gitProject\tofu_pudding\application\index\view\public\footer.html";i:1594801923;s:67:"F:\gitProject\tofu_pudding\application\index\view\public\model.html";i:1593326855;}*/ ?>
<!DOCTYPE html>
<html lang="zxx">

<head>
    <title><?php echo htmlentities($title); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <meta name="keywords" content="" />
    <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <link href="/static/index/css/bootstrap.css" rel='stylesheet' type='text/css' />
    <!--<link rel="stylesheet" href="/static/index/css/flexslider.css" type="text/css" media="screen" property="" />-->
    <link href="/static/index/css/style.css" rel='stylesheet' type='text/css' />
    <link href="/static/index/css/fontawesome-all.css" rel="stylesheet">
    <link href="/static/index/css/simpleLightbox.css" rel='stylesheet' type='text/css' />
    <link href="http://fonts.googleapis.com/css?family=Poiret+One" rel="stylesheet">
    <link href="http://fonts.googleapis.com/css?family=Lato:100i,300,300i,400,400i,700,700i,900" rel="stylesheet">
    <link href="http://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700" rel="stylesheet">
    <!-- js -->
    <script src="/static/index/js/jquery-2.2.3.min.js"></script>
    <!-- //js -->
    <!-- 当前页面的样式及JS -->
    
</head>
<body>
<header>
    <div class="top-bar_sub container-fluid">
        <div class="row">
            <div class="col-md-4 top-forms text-left mt-4"  data-aos="fade-up">
                <span>Welcome Back!</span>
                <span class="mx-lg-4 mx-md-2  mx-1">
						<a href="#">
							<i class="fas fa-lock"></i> Sign In</a>
					</span>
                <span>
						<a href="#">
							<i class="far fa-user"></i> Register</a>
					</span>
            </div>
            <div class="col-md-4 logo text-center" data-aos="fade-up">
                <a class="navbar-brand" href="index.html">
                    <!--<i class="fab fa-gitkraken"></i> Baked-->
                    <img src="<?php echo htmlentities(get_file_path($config['logo'])); ?>" height="70px">
                </a>
            </div>
            <div class="col-md-4 log-icons text-right"  data-aos="fade-up">
                <ul class="social_list1 mt-4">
                    <li>
                        <a href="#" class="mx-2">
                            <img src="/static/index/images/common/message.png" title="在线申请">
                        </a>
                    </li>
                    <li>
                        <a class="mx-2" target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=2854196306&site=qq&menu=yes">
                            <img src="/static/index/images/common/QQ.png" title="QQ">
                        </a>
                    </li>
                    <li>
                        <a href="#" class="mx-2">
                            <img src="/static/index/images/common/tel.png" title="400-8068-918">
                        </a>
                    </li>
                    <li>
                        <a href="javascript:layer_load()" class="mx-2">
                            <img src="/static/index/images/common/load.png" title="可行性报告">
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</header>
<script src="/static/libs/layer/layer.js"></script>
<script>
    function layer_load() {
        //页面层-图片
      /*  layer.open({
            type: 1,
            title: false,
            closeBtn: 0,
            area: 'auto',
            skin: 'layui-layer-molv', //没有背景色
            shadeClose: true,
            content: '<a href="https://rrx.cn/view-y4p1a5" target="_blank"><img src="/static/index/images/common/code.png" width="200px"></a>'
        });*/
        //自定页
        layer.open({
            type: 1,
            title: '可行性报告',
            skin: 'layui-layer-molv', //样式类名
            closeBtn: 1, //不显示关闭按钮
            anim: 1,
            offset: 'auto',
            shade: [0.8,'black'],    //遮罩层,
            shadeClose: true, //开启遮罩关闭
            content: '<a href="https://rrx.cn/view-y4p1a5" target="_blank"><img src="/static/index/images/common/code.png" width="200px"></a>'
        });
    }
</script>
<!--/banner-->
<?php if(empty($page_img) || (($page_img instanceof \think\Collection || $page_img instanceof \think\Paginator ) && $page_img->isEmpty())): ?>
<div class="banner-inner">
</div>
<?php endif; if(!(empty($page_img) || (($page_img instanceof \think\Collection || $page_img instanceof \think\Paginator ) && $page_img->isEmpty()))): ?>
<div>
    <img src="<?php echo htmlentities(get_file_path($page_img['img'])); ?>" height="100%" width="100%">
</div>
<?php endif; ?>
<!--//banner-->
<!--/nav-->


<div class="header_top" id="home">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <button class="navbar-toggler navbar-toggler-right mx-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>


        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <?php if(!(empty($nav) || (($nav instanceof \think\Collection || $nav instanceof \think\Paginator ) && $nav->isEmpty()))): ?>
            <ul class="navbar-nav mx-auto">
                <?php if(is_array($nav) || $nav instanceof \think\Collection || $nav instanceof \think\Paginator): $i = 0; $__LIST__ = $nav;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$val): $mod = ($i % 2 );++$i;if(empty($val['arr']) || (($val['arr'] instanceof \think\Collection || $val['arr'] instanceof \think\Paginator ) && $val['arr']->isEmpty())): ?>
                    <li class="nav-item" id="my-nav-pid-<?php echo htmlentities($val['id']); ?>">
                        <a class="nav-link" href="<?php echo url($val['url_value']); if($val['params'] != ''): ?>?<?php echo htmlentities($val['params']); ?><?php endif; ?>"><?php echo htmlentities($val['title']); ?></a>
                    </li>
                    <?php endif; if(!(empty($val['arr']) || (($val['arr'] instanceof \think\Collection || $val['arr'] instanceof \think\Paginator ) && $val['arr']->isEmpty()))): ?>
                    <li class="nav-item dropdown" id="my-nav-pid-<?php echo htmlentities($val['id']); ?>">
                        <a class="nav-link dropdown-toggle" href="#" id="brandDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
                           aria-expanded="false">
                            <?php echo htmlentities($val['title']); ?>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="brandDropdown">
                            <?php if(is_array($val['arr']) || $val['arr'] instanceof \think\Collection || $val['arr'] instanceof \think\Paginator): $i = 0; $__LIST__ = $val['arr'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?>
                            <a class="dropdown-item" href="<?php echo url($v['url_value']); if($v['params'] != ''): ?>?<?php echo htmlentities($v['params']); ?><?php endif; ?>"><?php echo htmlentities($v['title']); ?></a>
                            <?php if($i != count($val['arr'])): ?>
                            <div class="dropdown-divider"></div>
                            <?php endif; ?>
                            <?php endforeach; endif; else: echo "" ;endif; ?>
                        </div>
                    </li>
                    <?php endif; ?>
                <?php endforeach; endif; else: echo "" ;endif; ?>
            </ul>
            <?php endif; ?>
        </div>
    </nav>
    <script>
        $(document).ready(function(){
            var nav_pid = <?php echo htmlentities($nav_pid); ?>;
            var str1 = '#my-nav-pid-' + nav_pid;
            $(str1).addClass('active');
        })
    </script>
</div>

<!--
<div class="header_top" id="home">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <button class="navbar-toggler navbar-toggler-right mx-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>


        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo url('index/index/index'); ?>">首页</a>
                </li>
                <li class="nav-item dropdown active">
                    <a class="nav-link dropdown-toggle" href="#" id="brandDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
                       aria-expanded="false">
                        公司文化
                    </a>
                    <div class="dropdown-menu" aria-labelledby="brandDropdown">
                        <a class="dropdown-item" href="<?php echo url('index/brand/index'); ?>">品牌简介</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="<?php echo url('index/brand/index'); ?>">品牌文化</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="<?php echo url('index/brand/index'); ?>">品牌风采</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="<?php echo url('index/brand/index'); ?>">品牌动态</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="productDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
                       aria-expanded="false">
                        产品展示
                    </a>
                    <div class="dropdown-menu" aria-labelledby="productDropdown">
                        <a class="dropdown-item" href="<?php echo url('index/product/index'); ?>">纸包鱼</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="<?php echo url('index/product/index'); ?>">纸火锅</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="<?php echo url('index/product/index'); ?>">冒菜</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="<?php echo url('index/product/index'); ?>">卤菜</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="<?php echo url('index/product/index'); ?>">凉菜</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="<?php echo url('index/product/index'); ?>">饮品</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="projectDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
                       aria-expanded="false">
                        项目优势
                    </a>
                    <div class="dropdown-menu" aria-labelledby="projectDropdown">
                        <a class="dropdown-item" href="<?php echo url('index/project/index'); ?>">产品优势</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="<?php echo url('index/project/index'); ?>">扶持优势</a>
                    </div>
                </li>
                &lt;!&ndash;<li class="nav-item">
                    <a class="nav-link scroll" href="#menu">Menu</a>
                </li>&ndash;&gt;
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="profitDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
                       aria-expanded="false">
                        盈利模式
                    </a>
                    <div class="dropdown-menu" aria-labelledby="brandDropdown">
                        <a class="dropdown-item" href="<?php echo url('index/profit/index'); ?>">合作支持</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="<?php echo url('index/profit/index'); ?>">客户权益</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="<?php echo url('index/profit/index'); ?>">合作流程</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="<?php echo url('index/profit/index'); ?>">合作条件</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="storiesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
                       aria-expanded="false">
                        成功案例
                    </a>
                    <div class="dropdown-menu" aria-labelledby="storiesDropdown">
                        <a class="dropdown-item" href="<?php echo url('index/stories/index'); ?>">效果图</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="<?php echo url('index/stories/index'); ?>">实体店</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="<?php echo url('index/stories/index'); ?>">加盟商</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo url('index/poster/index'); ?>">项目海报</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="contactDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
                       aria-expanded="false">
                        联系我们
                    </a>
                    <div class="dropdown-menu" aria-labelledby="contactDropdown">
                        <a class="dropdown-item" href="<?php echo url('index/contact/index'); ?>">联系我们</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="<?php echo url('index/contact/index'); ?>">在线留言</a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>

</div>-->

<!--//nav-->
<ol class="breadcrumb" style="margin-bottom: 0px;">
    <li class="breadcrumb-item">
        <a href="<?php echo url('index/index/index'); ?>">首页</a>
    </li>
    <li class="breadcrumb-item active"><?php echo htmlentities($title); ?></li>
</ol>


<section class="banner-bottom" style="background-color: #28272F;">
	<div class="container">
		<h3 class="tittle">
			<span class="span-f">
				<?php echo htmlentities($title); ?>
			</span>
		</h3>
		<div class="row inner-sec" >
			<img alt="" width="100%" src="/static/index/images/profit/e01.jpg" />

			<div class="col-lg-6 banner-btm-left">
				<div class="banner-btm-top">
					<div class="banner-btm-inner a1 text-left">
						<a href="javascript:void(0);" class="blog-btn" data-aos="fade-down">
							品牌形象使用权
						</a>
						<p class="paragraph">
							品牌资源共享权。如品牌形象营销方案、装修方案、设备器具方案、产品技术等，确保合作伙伴顺利运营。
						</p>
					</div>
					<div class="banner-btm-inner a1 text-left" style="background-color: #28272F;">
						<a href="javascript:void(0);" class="blog-btn" data-aos="fade-down">
							行销物料使用权
						</a>
						<p class="paragraph">
							自力逗花厂统一设计制定的posm辅助销售材料的使用权。
						</p>
					</div>
				</div>
				<div class="banner-btm-bottom">
					<div class="banner-btm-inner a1 text-left" style="background-color: #28272F;">
						<a href="javascript:void(0);" class="blog-btn" data-aos="fade-down">
							持续督导服务权
						</a>
						<p class="paragraph">
							总部建有完善的督导网络，督导专员不定期下店巡回指导经营，对各品牌店服务人员进行系统培训等。
						</p>
					</div>
					<div class="banner-btm-inner a4 text-left">
						<a href="javascript:void(0);" class="blog-btn" data-aos="fade-down">
							区域经营保护权
						</a>
						<p class="paragraph">
							实行严格的商圈保护政策，一定区域内限额开店，通过完善运营、监管机制稳定市场，避免恶性竞争。
						</p>
					</div>
				</div>
			</div>
			<div class="col-lg-6 banner-btm-left">
				<div class="banner-btm-top">
					<div class="banner-btm-inner a1 text-left">
						<a href="javascript:void(0);" class="blog-btn" data-aos="fade-down">
							建店开业支持权
						</a>
						<p class="paragraph">
							严格规范的店面装修布置以及开业方案等开业筹备工作，确保品牌店运营的标准化和一致性。
						</p>
					</div>
					<div class="banner-btm-inner a1 text-left" style="background-color: #28272F;">
						<a href="javascript:void(0);" class="blog-btn" data-aos="fade-down">
							快速物流配送权
						</a>
						<p class="paragraph">

							总部统一供应配送物料，严格精选商品质量。共享集团采购价格及快速物流配送。
						</p>
					</div>
				</div>
				<div class="banner-btm-bottom">
					<div class="banner-btm-inner a1 text-left" style="background-color: #28272F;">
						<a href="javascript:void(0);" class="blog-btn" data-aos="fade-down">
							广告资源分享权
						</a>
						<p class="paragraph">
							总部将长期提供统一的品牌全国性广告宣传，提升品牌形象，扩大品牌声誉度、市场感召力。
						</p>
					</div>
					<div class="banner-btm-inner a4 text-left">
						<a href="javascript:void(0);" class="blog-btn" data-aos="fade-down">
							市场信息分享权
						</a>
						<p class="paragraph">
							市场分析及相关区域客户数据库的分享权；向总部汇报市场信息、客户数据和建议权。
						</p>
					</div>
				</div>
			</div>

			<div class="col-lg-6 banner-btm-left">
				<div class="banner-btm-top">
					<div class="banner-btm-inner a1 text-left">
						<a href="javascript:void(0);" class="blog-btn" data-aos="fade-down">
							技术服务培训权
						</a>
						<p class="paragraph">
							自力逗花厂全套技术工艺、设备器具使用等培训权，接受培训人员须通过考核后方能毕业上岗，确保合作店独立运营。
						</p>
					</div>
					<div class="banner-btm-inner a2" style="background-image: url(/static/index/images/profit/bge01.png);">
					</div>
				</div>
			</div>
			<div class="col-lg-6 banner-btm-left">
				<div class="banner-btm-top">
					<div class="banner-btm-inner a1 text-left" style="padding-bottom: 0px;">
						<a href="javascript:void(0);" class="blog-btn" data-aos="fade-down">
							经营资产使用权
						</a>
						<p class="paragraph">
							总部的经营技术资产，如：营销理念、广告策划、广告投放、员工培训、人力资源、品牌管理、财务管理、物流管理、风险预警等经营技术资产。
						</p>
					</div>
					<div class="banner-btm-inner a5" style="background-image: url(/static/index/images/profit/bge02.png);">
					</div>
				</div>
			</div>
		</div>
	</div>
</section>


<style>
    footer {
        color: #FFF;
    }
    footer .footer-grid img {
        width: 80%;
        max-width: 200px ;
    }
    footer .footer-grid h4{
        color: #FFFFFF;
    }
    footer ul {
        float: right;
        margin-top: 17px;
        margin-right: 30px;
    }

    footer li {
        width: 125px;
        float: left
    }

    footer li dl {
        text-align: center
    }

    footer li dt {
        font-size: 18px;
        margin-bottom: 10px
    }

    footer li dd a {
        display: block;
        line-height: 26px;
        color: #fff;
        -webkit-transition: all .3s;
        transition: all .3s;
        padding-bottom: 3px;
    }

    footer li dd a:hover {
        color: cyan;
    }

    footer .text-right p {
        color: #FFF;
    }

    footer .text-right a:hover {
        color: #FFF;
    }

    footer li:first-child dd {
        border-left: 0
    }
    .normlist {
        list-style: none;
        margin: 0;
        padding: 0
    }
    footer .subscribe-main{
        padding-bottom: 0px;
    }
</style>

<footer>
    <div class="container">
        <div class="row" style="margin-bottom: 1em;">
            <div class="col-lg-2 footer-grid text-center" data-aos="fade-right" >
                <img src="/static/index/images/common/footer_logo.png">
            </div>
            <!-- subscribe -->
            <div class="col-lg-10 subscribe-main footer-grid text-left" data-aos="fade-left">
                <?php if(!(empty($footer) || (($footer instanceof \think\Collection || $footer instanceof \think\Paginator ) && $footer->isEmpty()))): ?>
                <ul class="normlist">
                    <?php if(is_array($footer) || $footer instanceof \think\Collection || $footer instanceof \think\Paginator): $i = 0; $__LIST__ = $footer;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$val): $mod = ($i % 2 );++$i;?>
                    <li>
                        <dl>
                            <dt><?php echo htmlentities($val['title']); ?></dt>
                            <?php if(!(empty($val['arr']) || (($val['arr'] instanceof \think\Collection || $val['arr'] instanceof \think\Paginator ) && $val['arr']->isEmpty()))): ?>
                            <dd>
                                <?php if(is_array($val['arr']) || $val['arr'] instanceof \think\Collection || $val['arr'] instanceof \think\Paginator): $i = 0; $__LIST__ = $val['arr'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?>
                                <a href="<?php echo url($v['url_value']); if($v['params'] != ''): ?>?<?php echo htmlentities($v['params']); ?><?php endif; ?>"><?php echo htmlentities($v['title']); ?></a>
                                <?php endforeach; endif; else: echo "" ;endif; ?>
                            </dd>
                            <?php endif; ?>
                        </dl>
                    </li>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                </ul>
                <?php endif; ?>
            </div>
        </div>
    </div>
    <div style="width: 100%;height: 1em;border-top: 1px dotted #000000;"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-5 footer-grid text-left" data-aos="fade-right" style="padding: 0 0 0 15px;">
                <h5>免费财富热线</h5>
                <h4 style="padding-bottom: 15px;"><?php echo htmlentities($config['mobile']); ?></h4>
                <b>总部地址：<?php echo htmlentities($config['address']); ?></b>
            </div>
            <!-- subscribe -->
            <div class="col-lg-7 subscribe-main text-right" data-aos="fade-left">
                <img src="<?php echo htmlentities(get_file_path($config['logo_f'])); ?>" style="height: 70px;">
                <p>
                    成都餐协餐饮管理有限公司@版权所有信息备案号：<a href="http://www.beian.miit.gov.cn/">蜀ICP备12020698号-9</a>
                </p>
            </div>
        </div>
    </div>
</footer>

<!-- /js files -->
<link href='/static/index/css/aos.css' rel='stylesheet prefetch' type="text/css" media="all" />
<link href='/static/index/css/aos-animation.css' rel='stylesheet prefetch' type="text/css" media="all" />
<script src='/static/index/js/aos.js'></script>
<script src="/static/index/js/aosindex.js"></script>
<!-- //js files -->
<!--/ start-smoth-scrolling -->
<script src="/static/index/js/move-top.js"></script>
<script src="/static/index/js/easing.js"></script>
<script>
    jQuery(document).ready(function ($) {
        $(".scroll").click(function (event) {
            event.preventDefault();
            $('html,body').animate({
                scrollTop: $(this.hash).offset().top
            }, 900);
        });
    });
</script>
<!--// end-smoth-scrolling -->

<script>
    $(document).ready(function () {
        /*
                                var defaults = {
                                      containerID: 'toTop', // fading element id
                                    containerHoverID: 'toTopHover', // fading element hover id
                                    scrollSpeed: 1200,
                                    easingType: 'linear'
                                 };
                                */

        $().UItoTop({
            easingType: 'easeOutQuart'
        });

    });
</script>
<a href="#home" class="scroll" id="toTop" style="display: block;">
    <span id="toTopHover" style="opacity: 1;"> </span>
</a>

<!-- //Custom-JavaScript-File-Links -->
<script src="/static/index/js/bootstrap.js"></script>

</body>
</html>