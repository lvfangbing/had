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
<body>
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
<div class="had-container">
    <div class="news-center">
        <a href="<?php echo U('Index/index');?>"><img src="/Public/Images/newscenter.png"></a>
        <span>&nbsp;&nbsp;
          <a class="bread-crumbs" href="<?php echo U('News/index');?>">  新闻中心</a>
            <span class="bread-crumbs">></span>
            <a class="bread-crumbs" href="<?php echo U('News/index#companyNews');?>">公司新闻</a>
        </span>
    </div>
    <div id="companyNews" class="section-news" style="height: auto;">

        <h3 style="text-align:center;padding-top: 15px;">热烈庆祝海德在线乔迁之喜</h3>
        <h4 style="text-align:center; color:#666">发布日期：2014-11-16</h4>
        <hr style="border: 1px solid #808080;">
        <br>
        <p class="p-low">
            2014年12月18日，由海德在线团队研发的能够迅速推进汽车后市场行业互联网化的革命性产品<mark><a style="color: #ff9326;" target="_blank"  href="http://www.91czs.com">开呗</a></mark>APP V1.0正式上线耀世发布，这标志着在打车APP、租车APP、代驾APP之后，专注汽车后市场行业、实现汽车本地生活移动O2O的APP“<mark><a style="color: #ff9326;" target="_blank"  href="http://www.91czs.com">开呗</a></mark>”也进军了汽车行业的移动端。
        </p>
        <p class="p-low">  2014年11月16日，是一个所有海德人值得纪念和庆贺的日子，我们的心情无比的激动！经过所有海德伙伴们的积极努力，深圳市海德在线有限公司企业总部于今天正式乔迁至新址——研祥科技大厦。</p>

        <p class="p-low">
            随着海德在线进入快速发展期，旧址已不适应新变，因此于2014年11月16日搬迁至新址办公，新址坐落在深圳市南山区科技园区，是深圳市的高新科技产业园区，新址提供了更现代化的办公条件以及更先进的办公设备，更为广大海德在线的伙伴提供了一个更加舒适宜人的办公环境，为今后企业实现跨越式发展、不断壮大企业实力打下了坚实的硬件基础。
        </p>
        <p class="p-low">
             长风破浪会有时，直挂云帆济沧海！踏在新的起点，海德在线将在接下来的事业发展征程中披荆斩棘、乘风破浪，我们展开胸怀迎接每一个未来的挑战，海德在线将乘着乔迁之喜，让海德在线的发展再上一个巅峰。
        </p>
        <center><img src="/Public/Images/yx-1.jpg" width="600" height="400"></center>
        <h3 style=" text-align:center; padding-top:5px">海德在线前台</h3>
        <center><img src="/Public/Images/yx-2.jpg" width="600" height="400"></center>
        <h3 style=" text-align:center; padding-top:5px">海德在线前台</h3>

        <center><img src="/Public/Images/yx-3.jpg" width="600" height="400"></center>
        <h3 style=" text-align:center; padding-top:5px">咖啡厅</h3>

        <center><img src="/Public/Images/yx-4.jpg" width="600" height="400"></center>
        <h3 style=" text-align:center; padding-top:5px">办公区</h3>

        <center><img src="/Public/Images/yx-5.jpg" width="600" height="400"></center>
        <h3 style=" text-align:center; padding-top:5px">会议室</h3>
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