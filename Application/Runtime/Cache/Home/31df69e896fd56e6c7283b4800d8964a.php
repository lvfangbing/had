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
        <a href="news.html"><img src="/Public/Images/newscenter.png"></a>
        <span>&nbsp;&nbsp;
          <a class="bread-crumbs" href="news.html">  新闻中心</a>
            <span class="bread-crumbs">></span>
             <a class="bread-crumbs" href="news.html#industryInformation">行业资讯</a>
        </span>
    </div>
    <div id="companyNews" class="section-news" style="height: auto;">
        <p>
        </p><h3 style="text-align:center">汽修店如何升级做O2O</h3>
        <h4 style="text-align:center; color:#666">发布日期：2014-12-18</h4>
        <hr style="border: 1px solid #808080;">
        <br>
        <p class="p-low">
           汽修店如何升级做O2O环顾今年的汽修市场，我们遇到了网上卖汽配，卖完后让用户到线下店去安装；也遇到了上门汽车保养，用户网上下单后，技工开着车、带着配件去你家楼下给你换机油三滤；更遇到了传统座店经营的汽修店老板，面对这突如其来的变化，焦虑不安。
            这些老板们虽然意识到互联网时代的挑战和冲击，但是又很纠结。为什么呢？因为大家都知道现在用户的整个生活方式都在随着移动互联网而迁徙和改变。自己不做互联网吧，怕失去机会；做吧，又不知道从何下手。所以，对于我们这些传统汽修企业来说，不是做不做互联网的问题，而是必须要把自己的店进行互联网化，把自己的传统企业升级成O2O（线上线下融合）企业。</p>

         <p class="p-low">互联网时代做事，正确的思维理解是什么？我总结了三条

         <p class="p-low"><strong>1、用户思维</strong>

         <p class="p-low">用户思维是互联网思维的第一核心，这个概念毋庸赘述。其他思维都是用户思维在价值链不同层面的延展。雷军所谓"专注、极致、口碑、快"都是用户思维的体现，周鸿祎所谓"体验至上、免费策略"也都是用户思维的体现。

         <p class="p-low"><strong>2、数据思维</strong>

        <p class="p-low">用数据驱动商业机会，是互联网思维很典型的特征。从桌面互联网到移动互联网，再到O2O，都是数据化的过程。万物连接的本质是万物的数据化。物理世界和虚拟世界的融合，最后都会变成了数据。

        <p class="p-low"><strong>3、生态思维</strong>

        <p class="p-low">读过《失控》这本书，就知道绝大多数理念都是生态思维。企业与用户之间的关系将不再是产品售卖型的交易关系，消费者与生产者之间的边界也不再那么明显；老板与员工之间的关系也不再是简单的雇佣关系，而变成了合伙关系，大家是利益共同体。
        <p class="p-low">那么，传统汽修店如何升级成O2O企业？

        <p class="p-low">我非常认同海尔张瑞敏的这句话："没有成功的企业，只有时代的企业。传统企业也好、互联网企业也罢，都是时代的企业。"企业只有拥抱趋势、不断变化、顺势而为，才可能获得持续的成功。

        <p class="p-low">一提到传统汽修店做互联网，很多汽修店老板马上会联想到，不就是在网上投投广告、搞搞宣传，花点钱从网上帮我带点客户过来嘛。其实，这都是对互联网认识不够清晰造成的。准确的说，互联网分为PC互联网和移动互联网，二者差异非常大。

        <p class="p-low"><mark>1、PC互联网时代</mark>（俗称网络经济的1.0时代），是被线上企业主导的，他们控制着大量的流量，如百度、腾讯、阿里、360等，线下传统企业想搞搞网络宣传和营销，就需要给这些企业付钱，所以提起互联网三个字，传统企业老板脑子里立刻浮现出这几个关键词：花钱、宣传、广告，这也不足为奇。

        <p class="p-low"><mark>2、移动互联网时代</mark>（俗称网络经济的2.0时代）则完全不同，手机随时随地能上网的天然属性，让每个用户全时在线了，使得用户更容易与线下店发生交易关系。所以我们说，移动互联网时代，是由线下企业主导的、是所有线下企业借助移动互联网反扑线上的时代。对于服务类企业，提早升级转型成O2O企业形态，才是未来可持续发展的根本所在。

        <p class="p-low">O2O的立足点是线下店面的IT化改造；
        <p class="p-low">O2O的本质是线上线下数据流的打通；
        <p class="p-low">O2O的核心是线下企业借助移动互联网、大数据等手段，使企业数据化高效运营、建立起新的竞争优势，捕获新的生存形式。

        <p class="p-low">传统汽修店升级O2O的"道"和"术"

        <p class="p-low">汽修企业要搞好O2O，最重要的就要明白其中的"道"和"术"。

        <p class="p-low">什么是"道"：互联网思维即道；
        <p class="p-low">什么是"术"：移动互联网工具的使用和数据化运营即术。
        <p class="p-low">有道无术、有术无道，皆不可。

        <p class="p-low">"道"是什么？换算成汽修模式又该怎样做？我个人总结了三个方面

        <p class="p-low"><strong>1、以用户为中心</strong>
        <p class="p-low">第一、从经营服务项目、从维修技术驱动，升级为用户体验驱动。（汽修企业不是只懂维修技术和施工干活的劳动力企业，而是懂得如何为车主提供服务的服务类企业）；

        <p class="p-low">第二、从企业和用户每次交易时才能发生接触，转变为实时接触、实时连接。（让我们的用户扫店里的微信二维码，把用户从线下迁移到线上）。

        <p class="p-low">第三、从交易关系，变为朋友关系。（既然是朋友，就勇敢的让用户来给我们挑刺，无论流程上还是用户感受上，我们快速了解并即时改进）。

        <p class="p-low"><strong>2、运营的数据化</strong>

        <p class="p-low">O2O的本质是线上线下的数据流打通；O2O的核心是企业利用数据来高效运营。

        <p class="p-low">汽修企业如同医院，需要帮用户建立车辆健康档案和病例本。把企业留存的车辆健康档案和用户微信上的车辆健康档案数据打通，让用户和企业两方实时共享车辆的健康状况和下次来店时间。这样，不但用户深受关怀，而且这些数据会告诉企业，每天会有多少用户来店里看病。

        <p class="p-low"><strong>3、组织的社群化</strong>

        <p class="p-low">未来的组织边界会很模糊，企业内外边界将很难界定。原来的组织管理，基本上都是内部员工。未来的组织管理，既有内部员工，同时也有外部用户。这样的组织会更高效。那么，如何扁平化、无边界的建立社群化组织呢？通过移动互联网，这一切变为可能。

        <p class="p-low">威牛科技的解决方案是，通过新产品威牛修车通，实现老板与员工的连接、老板与用户的连接、员工与用户的连接。三者连接后，从传统工业时代的管理方式，转变为移动互联网时代的关系链管理方式。而在这个社群组织中，如何激发用户的参与感，如何调动员工的主动性，相信每位汽修企业领导者都做好了充分的准备。

        <p class="p-low">"术"是何物？就是用移动互联网和数据来高效运营企业

        <p class="p-low">1、首先，汽修企业通过掌握移动互联网工具，有效的把老板、员工、用户，三者进行实时连接，建立成社群化组织；

        <p class="p-low">2、其次，用移动互联网的方式给用户建立车辆健康档案；

        <p class="p-low">3、最后，用数据化高效运营，来提高客户进店的频次和营业收入。这些方面的操作方法和技巧，就是术。

        <p class="p-low">在未来的商业社会中，也许是2年、5年。一定没有互联网企业和传统企业之分，因为移动互联网就像水和电等基础设施一样，润物细无声的渗透到每家企业中。以后所有的汽修企业，都会是O2O企业，就看哪家企业更先、更快、更好的掌握以"道"与"术"的本领。如此，才能在移动互联网的变革浪潮之中，不被时代抛弃。
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