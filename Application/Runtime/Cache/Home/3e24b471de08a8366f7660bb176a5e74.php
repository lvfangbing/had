<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>海德在线</title>

    <link rel="stylesheet" type="text/css" href="/Public/Css/App/home/header.css" />
    <link rel="stylesheet" type="text/css" href="/Public/Css/Base/bootstrap/3.3.0/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="/Public/Css/App/home/public.css">
    
    <link rel="stylesheet" type="text/css" href="/Public/Css/App/home/news.css" />

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script type="text/javascript" src="/Public/Js/Lib/seajs/2.3.0/sea.js"></script>
    <script type="text/javascript" src="/Public/Js/Conf/baseConfig.js"></script>
</head>
<body>
<!--头部导航-->


    
<div  class="global-fluid header-border-bottom" style="z-index: 999; position: relative;">
    <div class="nav-container">
        <div class="hadlink-logo"><a href="/"><img src="/Public/Images/hadlinkLOGO.png" alt="海德在在线" width="230" height="100"></a> </div>
        <ul class="nav-bar">
            <li class="bottom-active"><a href="/" id="firstPage">首页</a> </li>
            <li ><a href="<?php echo U('company/index');?>" id="companyInfo">公司信息</a>
                <!--<div class="sub-div5">-->
                    <!--<ul>-->
                        <!--<li><a href=""></a></li>-->
                        <!--<li><a href=""></a></li>-->
                        <!--<li><a href=""></a></li>-->
                        <!--<li><a href=""></a></li>-->
                        <!--<li><a href=""></a></li>-->
                    <!--</ul>-->
                <!--</div>-->
                <div class="panInfo_box" style=" height: 200px;">
                    <ul>
                        <li><a href="<?php echo U('company/index#companyIntro');?>">公司介绍</a></li>
                        <li><a href="<?php echo U('company/index#president');?>">总裁寄语</a></li>
                        <li><a href="<?php echo U('company/index#devCourse');?>">发展历程</a></li>
                        <li><a href="<?php echo U('company/index#organization');?>">组织结构</a></li>
                        <li><a href="<?php echo U('company/index#coreGroup');?>">核心团队</a></li>
                    </ul>
                    <div class="imcss">
                        <span class="triangle_bdr"></span>
                        <span class="triangle"></span>
                    </div>
                </div>
            </li>

            <li><a href="<?php echo U('news/index');?>" id="news">新闻中心</a>
                <div class="panInfo_box" style="height: 120px;">
                    <ul>
                        <li><a href="<?php echo U('news/index#companyNews');?>">公司新闻</a></li>
                        <li><a href="<?php echo U('news/index#industryInformation');?>">行业新闻</a></li>
                        <li><a href="<?php echo U('news/index#companyAnnounce');?>">企业发布</a></li>
                        <!--<li><a href="<?php echo U('company/index#organization');?>">组织结构</a></li>-->
                        <!--<li><a href="<?php echo U('company/index#coreGroup');?>">核心团队</a></li>-->
                    </ul>
                    <div class="imcss">
                        <span class="triangle_bdr"></span>
                        <span class="triangle"></span>
                    </div>
                </div>
            </li>
            <li><a href="<?php echo U('Culture/index');?>">企业文化</a>
                <div class="panInfo_box" style="height: 400px;">
                    <ul>
                        <li><a href="<?php echo U('Culture/index#corporateVision');?>" > 企业愿景</a></li>
                        <li><a href="<?php echo U('Culture/index#mission');?>" >使命</a></li>
                        <li><a href="<?php echo U('Culture/index#purpose');?>" >宗旨</a></li>
                        <li><a href="<?php echo U('Culture/index#value');?>" >核心价值观</a></li>
                        <li><a href="<?php echo U('Culture/index#culture');?>" >文化品格</a></li>
                        <li><a href="<?php echo U('Culture/index#product');?>" >产品理念</a></li>
                        <li><a href="<?php echo U('Culture/index#manage');?>" >管理理念</a></li>
                        <li><a href="<?php echo U('Culture/index#talent');?>" >人才战略</a></li>
                        <li><a href="<?php echo U('Culture/index#hadlink');?>" >海德印象</a></li>
                    </ul>
                    <div class="imcss">
                        <span class="triangle_bdr"></span>
                        <span class="triangle"></span>
                    </div>
                </div>
            </li>
            <li ><a href="<?php echo U('product/index');?>">业务体系</a>
                <div class="panInfo_box" style="height: 180px;">
                    <ul>
                        <li><a href="<?php echo U('product/index#kaiba');?>" >开呗</a></li>
                        <li><a href="<?php echo U('product/index#carNews');?>" >98车讯</a></li>
                        <li><a href="<?php echo U('product/index#shenzhenBranch');?>" >深圳分公司</a></li>
                        <li><a href="<?php echo U('product/index#guangzhouBranch');?>" >广州分公司</a></li>
                    </ul>
                    <div class="imcss">
                        <span class="triangle_bdr"></span>
                        <span class="triangle"></span>
                    </div>
                </div>
            </li>
            <li >
                <a href="<?php echo U('investor/index');?>">投资者关系</a>
                <div class="panInfo_box" style="height: 120px;">
                    <ul>
                        <li ><a href="<?php echo U('investor/index#corporateNotice');?>" > 投资章程</a></li>
                        <li  ><a href="<?php echo U('investor/index#companyRunReport');?>" >投资者关系</a></li>
                        <li  ><a href="<?php echo U('investor/index#companyManage');?>" >公司定期专栏</a></li>
                    </ul>
                    <div class="imcss">
                        <span class="triangle_bdr"></span>
                        <span class="triangle"></span>
                    </div>
                </div>

            </li>
            <li >
                <a href="<?php echo U('Cooperation/index');?>" id="cooperation">合作洽谈</a>
                <div class="panInfo_box" style="height: 70px;">
                    <ul>
                        <li ><a href="<?php echo U('Cooperation/index#headquarters');?>" > 投资章程</a></li>
                        <li  ><a href="<?php echo U('Cooperation/index#talentJoin');?>" >投资者关系</a></li>

                    </ul>
                    <div class="imcss">
                        <span class="triangle_bdr"></span>
                        <span class="triangle"></span>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</div>

<!--主体内容-->
<div id="contentContainer">


    <div id="news-nav" class="company-nav" >

        <div id="subIntro" class="nav-div active-font"><a  href="<?php echo U('index#companyNews');?>" class="">公司新闻</a></div>
        <div id="subPresident" class="nav-div"><a  href="<?php echo U('index#industryInformation');?>">行业资讯</a></div>
        <div id="subDev" class="nav-div"><a  href="<?php echo U('index#companyAnnounce');?>">企业公布</a></div>
        <!--<div id="subOrganization" class="nav-div"><a  href="">组织结构</a></div>-->
        <!--<div id="subGroup" class="nav-div"><a  href="">核心团队</a></div>-->
    </div>
    <div class="pic-center" style="width: 1000px;" ><img src="/Public/Images/news.png"></div>
    <div class="had-container bg-white" >
        <!--公司新闻-->
        <div id="companyNews" class="section-common div-center pd-20" style="min-height: 400px;">
            <h3 style="color: #ffa54a;padding-top: 25px;">公司新闻</h3>
            <ul class="news-ul pd-20">
                <!--<?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>-->
                    <!--<li><a href="" class="news-list" data-id="<?php echo ($vo["id"]); ?>"  target="_blank"><?php echo ($vo["title"]); ?></a> <span style="float: right"><?php echo ($vo["newsdate"]); ?></span></li>-->
                <!--<?php endforeach; endif; else: echo "" ;endif; ?>-->
                <!--<?php if(($count) > "10"): ?>-->
                    <!--<li><a href="">更多···</a></li>-->
                <!--<?php endif; ?>-->
                <li><a href="<?php echo U('news/news_20150306');?>" target="_blank">开呗上门保养 任性上线</a> <span class="news-date">2015-03-06</span></li>
                <li><a href="<?php echo U('news/news_20150225');?>" target="_blank">海德在线2015年会</a> <span class="news-date">2015-02-07</span></li>
                <li><a href="<?php echo U('news/news_20150207');?>" target="_blank">开呗2.0推出上门保养服务</a> <span class="news-date">2015-02-04</span></li>
                <li><a href="<?php echo U('news/news_20150204');?>" target="_blank">91车助手正式更名“开呗”</a> <span class="news-date">2015-01-17</span></li>
                <li><a href="<?php echo U('news/news_20150117');?>" target="_blank">1分钱洗车活动</a> <span class="news-date">2015-01-11</span></li>
                <li><a href="<?php echo U('news/news_20150111');?>" target="_blank">1元钱检测活动</a> <span class="news-date">2015-01-11</span></li>
                <li><a href="<?php echo U('news/news_20150110');?>" target="_blank">开呗产品发布会</a> <span class="news-date">2014-12-18</span></li>
                <li><a href="<?php echo U('news/news_20141218');?>" target="_blank">91车助手APP1.0盛大上线庆功晚宴</a> <span class="news-date">2014-11-29</span></li>
                <li><a href="<?php echo U('news/news_20141129');?>" target="_blank">绍光车业董事长何绍华先生莅临海德在线洽谈合作</a> <span class="news-date">2014-11-22</span></li>
                <li><a href="<?php echo U('news/news_20141122');?>" target="_blank">热烈庆祝海德在线乔迁之喜</a> <span class="news-date">2014-11-16</span></li>
                <li><a href="<?php echo U('news/news_20141116');?>" target="_blank">91车助手车友会车友莅临海德在线参观</a> <span class="news-date">2014-12-05</span></li>
                <li><a href="<?php echo U('news/news_20141205');?>" target="_blank">我有一个梦想———海德在线第一次公司战略级全员头脑风暴会议圆满落幕</a> <span class="news-date">2014-06-05</span></li>
            </ul>




        </div>
        <!--行业资讯-->
        <div id="industryInformation" class="section-common div-center pd-20" style="min-height: 150px;">
            <h3 style="color: #ffa54a;">行业资讯</h3>
            <ul class="news-ul pd-20">
                <li><a href="<?php echo U('news/news_20140605');?>" target="_blank">私家车主+汽车实体店+第三方平台=创新</a><span class="news-date">2014-09-30</span></li>
                <li><a href="<?php echo U('news/news_20140930');?>" target="_blank">汽车后市场互联网思维,这7点你必须知道!</a><span class="news-date">2014-09-30</span></li>
                <li><a href="<?php echo U('news/news_20140931');?>" target="_blank">中国汽车后市场规模超7000亿 各路资本淘金</a><span class="news-date">2014-12-06</span></li>
                <li><a href="<?php echo U('news/news_20141206');?>" target="_blank">汽修店如何升级做O2O</a><span class="news-date">2014-12-18</span></li>
            </ul>
        </div>
        <!--企业发布-->
        <div id="companyAnnounce" class="section-common div-center pd-20" style="height: 250px;">
            <h3 style="color: #ffa54a;">企业发布</h3>
            <ul class="news-ul pd-20">
                <li><a href="<?php echo U('news/news_20141219');?>" target="_blank">开呗2.0正式上线</a> <span class="news-date">2015-02-06</span></li>
                <li><a href="<?php echo U('news/news_20140206');?>" target="_blank">91车助手即将隆重上线、启动盛大公测</a><span class="news-date">2014-12-18</span></li>
                <li><a href="<?php echo U('news/news_20141220');?>" target="_blank">海德在线乔迁新址</a><span class="news-date">2014-11-03</span></li>
            </ul>
        </div>
    </div>

</div>
<!--底部版权-->

    

    <link rel="stylesheet" type="text/css" href="/Public/Css/App/home/footer.css" />

<div class="global-footer">
    <div class="global-fluid" >
        <div class="had-container" >
            <div class="global-footer">
                <div class="had-container">
                    <div class="section-one">
                        <ul >
                            <center><p class="title-font">企业核心价值</p></center>
                            <li style="margin-top: 0;"><a href="<?php echo U('Culture/index#value');?>" >激&nbsp;&nbsp;&nbsp;&nbsp;情</a></li>

                            <li ><a href="<?php echo U('Culture/index#value');?>" >创&nbsp;&nbsp;&nbsp;&nbsp;新</a></li>

                            <li ><a href="<?php echo U('Culture/index#value');?>" >价&nbsp;&nbsp;&nbsp;&nbsp;值</a></li>
                        </ul>
                    </div>
                    <div class="section-two">
                        <ul>
                            <center><p class="title-font">公司信息</p></center>
                            <li><a href="<?php echo U('company/index#companyIntro');?>" >海德简介</a></li>
                            <li><a href="<?php echo U('company/index#president');?>" >总裁致辞</a></li>
                            <li><a href="<?php echo U('company/index#devCourse');?>" >发展历程</a></li>
                            <li><a href="<?php echo U('company/index#organization');?>">组织结构</a></li>
                            <li><a href="<?php echo U('company/index#coreGroup');?>" >核心团队</a></li>
                        </ul>
                    </div>
                    <div class="section-two">
                        <ul>
                            <center><p class="title-font">业务体系</p></center>
                            <li><a href="<?php echo U('product/index#kaiba');?>" >开呗</a></li>
                            <li><a href="<?php echo U('product/index#carNews');?>" >98车讯</a></li>
                            <li><a href="<?php echo U('product/index#shenzhenBranch');?>" >深圳分公司</a></li>
                            <li><a href="<?php echo U('product/index#guangzhouBranch');?>" >广州分公司</a></li>
                        </ul>
                    </div>
                    <div class="section-two">
                        <ul>
                            <center><p class="title-font">企业文化</p></center>
                            <li><a href="<?php echo U('Culture/index#corporateVision');?>" >企业愿景</a></li>
                            <li><a href="<?php echo U('Culture/index#mission');?>" >企业使命</a></li>
                            <li><a href="<?php echo U('Culture/index#purpose');?>" >企业宗旨</a></li>
                            <li><a href="<?php echo U('Culture/index#value');?>" targetdiv="div5">核心价值观</a></li>
                            <li><a href="<?php echo U('Culture/index#culture');?>" targetdiv="div1">文化品格</a></li>
                            <li><a href="<?php echo U('Culture/index#product');?>" targetdiv="div2">产品理念</a></li>
                            <li><a href="<?php echo U('Culture/index#talent');?>" targetdiv="div4">人才策略</a></li>
                            <li><a href="<?php echo U('Culture/index#hadlink');?>" targetdiv="div5">海德印象</a></li>
                        </ul>
                    </div>
                    <div class="section-two">
                        <ul>
                            <center><p class="title-font">投资者关系</p></center>
                            <li><a href="<?php echo U('investor/index#corporateNotice');?>" >公司公告</a></li>
                            <li><a href="<?php echo U('investor/index#companyRunReport');?>">经营报告</a></li>
                            <li><a href="<?php echo U('investor/index#companyManage');?>">公司治理</a></li>
                            <li><a href="<?php echo U('investor/index#companyother');?>">其他动态</a></li>
                        </ul>
                    </div>
                    <div class="section-two">
                        <ul>
                            <center><p class="title-font">合作洽谈</p></center>
                            <li><a href="<?php echo U('Cooperation/index#headquarters');?>">联系我们</a></li>
                            <li><a href="<?php echo U('Cooperation/index#talentJoin');?>">招贤纳士</a></li>
                        </ul>
                    </div>
                </div>

                <div class="had-container" style="float: left;">
                    <div class="footer-copyright" style="color: #ffffff">
                        <div style="margin-top: 20px;"><center>
                            <script type="text/javascript"> var cnzz_protocol = (("https:" == document.location.protocol) ? " https://" : " http://");document.write(unescape("%3Cspan id='cnzz_stat_icon_1254129543'%3E%3C/span%3E%3Cscript src='" + cnzz_protocol+ "s11.cnzz.com/z_stat.php%3Fid%3D1254129543%26show%3Dpic' type='text/javascript'%3E%3C/script%3E"));</script>
                            <span style="color:#dcdcdc"><a href="javascript:void(0)">©2015 深圳市海德在线有限公司版权所有</a>  | <a href="http://www.miitbeian.gov.cn/">粤ICP备14066441号</a></span>
                        </center>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="slideUp" title="返回顶部" class="slideUp"><img data-id="" src="/Public/Images/backtopno.png" alt="返回顶部"> </div>

    <script type="text/javascript">
        seajs.use('baseController.js',function(main){
            main.base();
        });
    </script>


<!--JS脚本-->

    <script type="text/javascript">
        seajs.use('newsController.js',function(main){
            main.base();
        });
    </script>

</body>
</html>