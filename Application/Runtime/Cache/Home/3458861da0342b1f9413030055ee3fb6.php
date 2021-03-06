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
    
    <link rel="stylesheet" type="text/css" href="/Public/Css/App/home/product.css" />

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

    <div id="product" class="company-nav" >
        <div id="subKaibei" class="nav-div active-font"><a  href="<?php echo U('index#kaiba');?>" class="">开呗</a></div>
        <div id="subCarNews" class="nav-div"><a  href="<?php echo U('index#carNews');?>">98车讯</a></div>
        <div id="subShenzhen" class="nav-div"><a  href="<?php echo U('index#shenzhenBranch');?>">深圳分公司</a></div>
        <div id="subGuangzhou" class="nav-div"><a  href="<?php echo U('index#guangzhouBranch');?>">广州分公司</a></div>
    </div>
    <div  class="had-container bg-white" >
        <!--<div class="business-nav">-->
            <!--<ul>-->
                <!--<li id="js-comIntro" ><a data-id="1" href="#kaiba" > 开呗</a></li>-->
                <!--<li id="js-president"><a data-id="2" href="#carNews" >98车讯</a></li>-->
                <!--<li id="js-devCourse"><a data-id="3" href="#shenzhenBranch" >深圳分公司</a></li>-->
                <!--<li id="js-organization"><a data-id="4" href="#guangzhouBranch" >广州分公司</a></li>-->
            <!--</ul>-->
        <!--</div>-->
        <div class="pic-center"><img src="/Public/Images/yewu.png"></div>
        <!--开呗业务介绍-->
        <div id="kaiba" class="section-common div-center pd-20" style="min-height: 730px;">

            <h3 style="color: #ffa54a;padding-top: 25px;">开呗</h3>
            <p style="padding-top: 20px;">&nbsp;&nbsp;&nbsp;&nbsp;  开呗是由我公司研发并推出，一款专业面向广大车主的值得信赖的车生活深度应用工具，主要构建车主和车服务商之间的信息服务平台，主要的应用端口有PC端、APP端、移动端、车机端。</p>
            <p class="p-low">&nbsp;&nbsp;&nbsp;&nbsp;开呗——中国最具活力的车生活服务平台——围绕车主进行全面资源整合，深度解决车主的车生活痛点，开启车主快捷方便、轻松愉悦的车生活一键达成模式，具备“便捷、透明、质优、价廉”的功能，拥有体验超值化、服务多样化、交易方便化、应用广泛化四大特点，目前拥有50万车主用户，依据车生活需求整合了四方面庞大的资源形成了资源矩阵：四方面庞大的资源形成了资源矩阵：
            </p>
            <p style="color: #ff9326;">&nbsp;&nbsp; &nbsp; &nbsp; 1）为庞大的线下汽车维修门店及美容生活馆服务网络；
            <p style="color: #ff9326;"> &nbsp; &nbsp; &nbsp; &nbsp;2）为数百家正品汽车电子厂商和汽车精品销售商家；
            <p style="color: #ff9326;">&nbsp; &nbsp; &nbsp; &nbsp;3）包含车管所、驾校、代驾公司在内的相关代理服务；
            <p style="color: #ff9326;">&nbsp; &nbsp; &nbsp; &nbsp;4）交警和保险两个重要的支持渠道。

            <p >&nbsp; &nbsp; &nbsp; &nbsp; 平台主力推荐<font color="#ff9326">汽车养护、汽车美容、汽车装饰、精品销售、汽车电子、汽车改装、汽车维修、个性定制</font> 等八项热门服务。
                开呗为车主提供了一个简易、快捷、有效的车生活应用工具，全方位满足车主所需。开呗，应你而生。您身边车生活专业解决方案工具。
            </p>
            <!--<p class="p-low">&nbsp;&nbsp;&nbsp;&nbsp;-->
            <!--第一资源矩阵为庞大的线下汽车维修门店及美容生活馆服务网络；-->
            <!--</p>-->
            <!--<p class="p-low">&nbsp;&nbsp;&nbsp;&nbsp;-->
            <!--第二资源矩阵为数百家正品汽车电子厂商和汽车精品销售商家；-->
            <!--</p>-->

            <!--<p class="p-low"> &nbsp;&nbsp;&nbsp;&nbsp;-->
            <!--第四资源矩阵是交警和保险两个重要的支持渠道。 </p>-->

            <!--<p class="p-low">&nbsp;&nbsp;&nbsp;&nbsp;-->
            <!--平台主力推荐汽车养护、汽车美容、汽车装饰、精品销售、汽车电子、汽车改装、汽车维修、个性定制等八项热门服务，并具有本周推荐、本周热议等交互平台，在本周推荐板块，车主可以了解很多技术规范好、服务态度佳、顾客满意度强的优质线下服务商家，在本周热议板块，车主之间可以相互交流关于汽车维修养护的知识与攻略，并且开呗还配备了专业的汽车维修保养工程师团队，专门向车主解答汽车维修养护方面的相关问题。 </p>-->

            <!--<p class="p-low">&nbsp;&nbsp;&nbsp;&nbsp;-->
            <!--开呗为车主提供了一个简易、快捷、有效的车生活应用工具，全方位满足车主所需。开呗，应你而生。您身边的车生活解决方案全能助手。</p>-->


            <!--开呗——中国最具活力的车生活服务平台——围绕车主进行全面资源整合，深度解决车主的车生活痛点，开启车主快捷方便、轻松愉悦的车生活一键达成模式，具备“便捷、透明、质优、价廉”的功能，拥有体验超值化、服务多样化、交易方便化、应用广泛化四大特点，目前拥有50万车主用户，依据车生活需求整合了4方面庞大的资源形成了资源矩阵：分别是： （表格表示）-->
            <!--1）为庞大的线下汽车维修门店及美容生活馆服务网络；-->
            <!--2）为数百家正品汽车电子厂商和汽车精品销售商家；-->
            <!--3）包含车管所、驾校、代驾公司在内的相关代理服务；-->
            <!--4）交警和保险两个重要的支持渠道。-->

            <!--平台主力推荐汽车养护、汽车美容、汽车装饰、精品销售、汽车电子、汽车改装、汽车维修、个性定制（用表格表示）等八项热门服务。-->
            <!--开呗为车主提供了一个简易、快捷、有效的车生活应用工具，全方位满足车主所需。开呗，应你而生。您身边车生活专业解决方案工具。-->

            <div style="float: right;padding-top: 10px;">
                <a href="http://www.ikaibei.com" target="_blank"><img src="/Public/Images/kaibeilogo.png"></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <a href="http://www.ikaibei.com" target="_blank"><img src="/Public/Images/erweima.png"></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            </div>
        </div>
        <!--98车讯-->
        <div id="carNews" class="section-common div-center pd-20" style="min-height: 300px;">
            <h3 style="color: #ffa54a;">98车讯</h3>
            正在建设，敬请期待！

        </div>
        <!--深圳分公司-->
        <div id="shenzhenBranch" class="section-common div-center pd-20" style="min-height: 300px;">
            <h3 style="color: #ffa54a;">深圳分公司</h3>
            筹备建设中，敬请期待！
        </div>
        <!--广州分公司-->
        <div id="guangzhouBranch" class="section-common div-center pd-20" style="min-height: 300px;">
            <h3 style="color: #ffa54a;">广州分公司</h3>
            筹备建设中，敬请期待！
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
        seajs.use('productController.js',function(main){
            main.base();
        });
    </script>

</body>
</html>