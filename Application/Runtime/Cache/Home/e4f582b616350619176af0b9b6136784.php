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
<div class="had-container" style="min-height: 700px;">
    <div class="news-center">
        <a href="<?php echo U('Index/index');?>"><img src="/Public/Images/newscenter.png"></a>
        <span>&nbsp;&nbsp;
          <a class="bread-crumbs" href="<?php echo U('News/index');?>">  新闻中心</a>
            <span class="bread-crumbs">></span>
            <a class="bread-crumbs" href="<?php echo U('News/index#companyNews');?>">公司新闻</a>
        </span>
    </div>
    <div id="companyNews" class="section-news" style="height: 400px;">
        <h3 style="text-align:center">91车助手正式更名“开呗”</h3>
        <h4 style="text-align:center; color:#666">发布日期：2015-01-17</h4>
        <br>
        <center><img src="/Public/Images/shouye.jpg" style="height: 400px;" ></center>
        <p class="p-low" style="padding-top: 20px;">

            &nbsp; &nbsp;&nbsp; &nbsp;
           为了准确的产品定位，能在其他更多的应用平台推广公司产品，以便联合众多合作伙伴，为广大车主、商家提供便捷、透明、质优、价廉的服务，我公司决策层经过深思熟虑决定，将我公司原品牌“91车助手”应用于公司旗下其它战略产品，将原“91车助手”品牌产品正式更名为“开呗”，原域名：www.91czs.com正式更换为：<mark><a style="color: #ff9326;" href="http://www.91czs.com">www.ikaibei.com</a> </mark>。其它保持不变。
        </p>

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