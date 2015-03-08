<?php if (!defined('THINK_PATH')) exit();?>

<!DOCTYPE html>
<html>

<head lang="en">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>海德在线</title>
    <link rel="stylesheet" href="/Public/Css/App/home/newsdetail.css">
    <link rel="stylesheet" href="/Public/Css/App/home/newsmodule.css">
    <link rel="stylesheet" type="text/css" href="/Public/Css/Base/bootstrap/3.3.0/css/bootstrap.css">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script type="text/javascript" src="/Public/Js/Lib/seajs/2.3.0/sea.js"></script>
    <script type="text/javascript" src="/Public/Js/Conf/baseConfig.js"></script>
</head>
<body >
<div class="global-nav" style="height: 60px;line-height: 60px;">
    <div class="had-container">
    <div class="nav-bar" style="height: 40px;width: 100%;line-height: 40px;margin-top:10px;">
        <ul>
            <li >
                <a href="index.html" id="firstPage">海德首页</a>
            </li>
            <li>
                <a href="companyInfo.html" id="copanyInfo">公司信息</a>
                <ul class="company-tab" style="height:220px;margin: 0;">
                    <li><a href="<?php echo U('company/index#companyIntro');?>">公司介绍</a></li>
                    <li><a href="<?php echo U('company/index#president');?>">总裁寄语</a></li>
                    <li><a href="<?php echo U('company/index#devCourse');?>">发展历程</a></li>
                    <li><a href="<?php echo U('company/index#organization');?>">组织结构</a></li>
                    <li><a href="<?php echo U('company/index#coreGroup');?>">核心团队</a></li>
                </ul>
            </li>
            <li class="bottom-active" style="width: 120px;">
                <a href="news.html" id="news">新闻中心</a>
                <ul class="company-tab" style="height: 140px;padding-top: 10px;" >
                    <li><a href="<?php echo U('news/index#companyNews');?>">公司新闻</a></li>
                    <li><a href="<?php echo U('news/index#industryInformation');?>">行业新闻</a></li>
                    <li><a href="<?php echo U('news/index#companyAnnounce');?>">企业发布</a></li>
                </ul>
            </li>
            <li style="width: 120px;">
                <a href="corporateCulture.html">企业文化</a>
                <ul class="company-tab" style="height: 380px;padding-top: 10px;">
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
            </li>
            <li style="width: 120px;">
                <a href="businessSystem.html">业务体系</a>
                <ul class="company-tab" style="height: 180px;padding-top: 10px;">
                    <li><a href="<?php echo U('product/index#kaiba');?>" >开呗</a></li>
                    <li><a href="<?php echo U('product/index#carNews');?>" >98车讯</a></li>
                    <li><a href="<?php echo U('product/index#shenzhenBranch');?>" >深圳分公司</a></li>
                    <li><a href="<?php echo U('product/index#guangzhouBranch');?>" >广州分公司</a></li>
                </ul>
            </li>

            <li style="width: 120px;">
                <a href="investor.html">投资者关系</a>
                <ul class="company-tab" style="height: 140px;padding-top: 10px;" >
                    <li ><a href="<?php echo U('investor/index#corporateNotice');?>" > 投资章程</a></li>
                    <li  ><a href="<?php echo U('investor/index#companyRunReport');?>" >投资者关系</a></li>
                    <li  ><a href="<?php echo U('investor/index#companyManage');?>" >公司定期专栏</a></li>
                    <!--<li ><a href="investor.html#companyother" >其他动态</a></li>-->
                </ul>
            </li>
            <li style="width: 130px;">
                <a href="cooperate.html" id="cooperation">合作洽谈</a>
                <ul class="company-tab" style="height: 105px;width: 130px;padding-top: 10px;">
                    <li ><a href="<?php echo U('Cooperation/index#headquarters');?>" > 投资章程</a></li>
                    <li  ><a href="<?php echo U('Cooperation/index#talentJoin');?>" >投资者关系</a></li>
                    <!--<li id="navoperation" style="width: 120px;"><a href="cooperate.html#operation" >运营推广中心</a></li>-->
                    <!--<li id="nav-business" style="width: 120px;"><a href="cooperate.html#business" >商务拓展中心</a></li>-->
                    <!--<li id="navsupplyChain" style="width: 120px;"><a href="cooperate.html#supplyChain" >供应链管理中心</a></li>-->
                    <!--<li id="navshenzhen" style="width: 120px;"><a href="cooperate.html#shenzhen" >深圳分公司</a></li>-->
                    <!--<li id="navguangzhou" style="width: 120px;"><a href="cooperate.html#guangzhou" >广州分公司</a></li>-->
                </ul>
            </li>

        </ul>
    </div>
</div> 

</div>
<div class="had-container"style="height: auto;">
    <div class="news-center">
        <a href="<?php echo U('Index/index');?>"><img src="/Public/Images/newscenter.png"></a>
        <span>&nbsp;&nbsp;
          <a class="bread-crumbs" href="<?php echo U('News/index');?>">  新闻中心</a>
            <span class="bread-crumbs">></span>
            <a class="bread-crumbs" href="<?php echo U('News/index#companyNews');?>">公司新闻</a>
        </span>
    </div>
    <div id="companyNews" class="section-news">
        <h3 style="text-align:center">开呗上门保养 任性上线</h3>
        <h4 style="text-align:center; color:#666">发布日期：2015-03-06</h4>
        <hr style="border: 1px solid #808080;">
        <br>
        <div >
        <h3>活动期间上门保养低至99元啦！就这么省钱！就这么任性！</h3>
        <p> </p>
        <br>&nbsp;<strong>99元套餐：</strong>嘉实多金嘉护（5L）＋&nbsp;曼牌正品机滤+上门服务费&nbsp;<br>&nbsp;<strong>适用车型</strong>：20万以下不含涡轮增压车型<br><p></p>&nbsp;<strong>199元套餐：</strong>嘉实多磁护（5L）＋曼牌正品机滤+上门服务费&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br>&nbsp;<strong>适用车型</strong>：50万以下车型<br><p></p>&nbsp;<strong>299元套餐：</strong>嘉实多极护（5L）＋曼牌正品机滤+上门服务费&nbsp;&nbsp;<br>&nbsp;<strong>适用车型</strong>：50万以上车型<br><p></p>&nbsp;<strong>现在预约，尊享专属服务。约么？</strong>
            <br>&nbsp;<strong>关注开呗微信公众账号：“开呗”</strong><br>&nbsp;<strong>登录开呗官方网站：<a href="http://www.ikaibei.com">http://www.ikaibei.com</a> </strong><br><br>&nbsp;<strong>活动时间：</strong>3月6日－4月6日<br>&nbsp;<strong>保养时间</strong>：3月6日-5月6日<br>&nbsp;<strong>活动区域</strong>：南山、宝安、福田<br>&nbsp;注：机油超过5L用量需要补差价，最终价格以客服确认为准。<br><br><br>&nbsp;<strong>开呗&nbsp;，您身边的上门养车专家</p>
        <p>&nbsp;方便<br>&nbsp;有停车位即可保养，45分钟内完成服务<br>&nbsp;专业<br>&nbsp;资深4S店高级技师，免费赠送41项安全检测消除车辆隐患<br>&nbsp;低价<br>&nbsp;上门保养仅需99元，国际品牌垂直供货，配件假一罚百<br>&nbsp;保障<br>&nbsp;全程录像绝对透明，服务后30天或2000公里内质量保障<br></strong></p>
        <p><br></p>
            <a href="http://www.ikaibei.com"> <img src="/Public/Images/qrcode.png" alt="二维码" width="30%"  style="position: relative;top:-450px;left: 500px;"></a>
        </div>
    </div>
</div>
<div class="global-fluid" style=" background: #666666;">
    

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
<div id="slideUp" title="返回顶部" class="slideUp"><img src="/Public/Images/backtop.png"> </div>

    <script type="text/javascript">
        seajs.use('baseController.js',function(main){
            main.base();
        });
    </script>
 
</div>

</body>
</html>