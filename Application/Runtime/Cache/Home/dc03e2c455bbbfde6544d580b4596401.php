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
    <div id="companyNews" class="section-news" >
        <p>
        </p><h3 style="text-align:center">中国汽车后市场规模超7000亿 各路资本淘金</h3>
        <h4 style="text-align:center; color:#666">发布日期：2014-12-06</h4>
        <center><img src="/Public/Images/gold.jpg" width="600"></center>
        <p class="p-low">
            &nbsp; &nbsp;&nbsp; &nbsp;“中国的汽车后市场服务电商领域未来很有可能会出现一到两家市值超300亿~500亿美元的公司。”某国际大牌VC合伙人伍茗（化名）告诉《第一财经日报》记者，中国仅狭义汽车后市场（指汽车的维修保养、美容装潢改装、洗车养护等直接与车辆日常维护直接相关的服务）的规模已超过7000亿元，5年内将超过1万亿元。“比照美国的现状，以中国的汽车保有量基数，诞生一家比肩甚至市值超过美国AUTOZONE的后市场巨人只是时间问题。”</p>
        <p class="p-low">&nbsp; &nbsp;&nbsp; &nbsp; 10月2日，巴菲特旗下伯克希尔·哈撒韦公司宣布收购美国第五大汽车经销集团VanTuylGroup。这家年收入超过80亿美元的集团在美国10个州拥有78家经销商，是全美第五大经销商。此前伯克希尔·哈撒韦公司在Geico汽车保险、通用汽车、比亚迪等公司均已占有一席之地，中信证券方面分析认为，此次收购意在将收购标的作为产业兼并重组的平台，并在公司现有业务基础上进一步拓展汽车后市场业务。</p>
        <p class="p-low">&nbsp; &nbsp;&nbsp; &nbsp;9月19日，神州租车在香港挂牌上市融资34.5亿港元。神州租车路演期间获超额认购逾200倍，上市首日股价涨幅近29%，引发资本市场追捧。10月3日，一嗨租车向美国证券交易委员会递交IPO申请，计划赴纽交所上市，融资2亿美元，再次引起资本市场关注。研究数据显示，2013年中国租车市场规模达380亿元，未来3~5年将保持20%以上的快速增长。而移动互联网为载体的后市场模式创新，如配件电商、O2O维修服务等更是得到广大VC/PE的热捧。</p>

        <p class="p-low">&nbsp; &nbsp;&nbsp; &nbsp;
            “已经有16家国际大牌VC/PE向我们这个基于后市场服务电商的创业项目伸出了橄榄枝。”养车无忧网创始合伙人陈文凯向《第一财经日报》记者透露，在养车无忧网计划发起第二轮融资后，他只稍稍释放了下消息，就引来了16家风投与其谈判。“具体机构名称我不方便透露，但可以肯定的是，一些叫得出名的国际大牌VC/PE都在此列。”</p>

        <p class="p-low">&nbsp; &nbsp;&nbsp; &nbsp;
            伍茗也表示，公司最近的确在汽车后市场方面寻找投资机会，但有这样想法的投资机构远不止一家。“有一次我们被告知作为第12家机构与一家后市场创业公司谈，但走出会议室时，发现还有几家熟悉的同行在休息室等候。”伍茗说。
        </p>

        <p class="p-low">&nbsp; &nbsp;&nbsp; &nbsp;
            <strong>中国何时能出AUTOZONE</strong>
        </p>

        <p class="p-low">&nbsp; &nbsp;&nbsp; &nbsp;
            伍茗认为，VC/PE对中国汽车后市场的热衷一方面是因为，从宏观格局来看，整个汽车产业的价值链重心已经向后市场转移，资本先知先觉提前布局很正常；另一方面，以美国的后市场现状很有可能就是中国后市场的未来。直接面向消费者车主提供服务的AUTOZONE，不管是全球金融危机时期（2008~2009年）还是经济增长期，过去十年股价上涨约18倍，市值也达到180亿美元，成为一个传奇式企业。“美国汽车后市场规模全球最大，其汽车保有量近2.8亿辆，美国已经诞生了好几家市值超过100亿美元的后市场上市公司，按这样的发展规律，中国未来诞生一家AUTOZONE一点也不奇怪。”
        </p>

        <p class="p-low">&nbsp; &nbsp;&nbsp; &nbsp;
            按汽车产业发展规律，后市场的规模与汽车的保有量及平均车龄有关，保有量和平均车龄越大，市场规模越大。美国汽车后市场规模全球最大，其汽车保有量近2.8亿辆，而平均车龄也超过10年。中国2014年底预计汽车保有量达到1.6亿辆，但平均车龄仅4年左右，因而，与美国这样的成熟市场相比，市场规模还相对较小。不过，由于中国是全球最大的新车销售市场，因此，保有量的增速全球第一，预计十年内，中国汽车保有量将超过3.5亿辆，居全球首位，平均车龄也将逐步增加到6~8年。因此，中美后市场规模在不断拉近，10年左右可能会反超美国。
        </p>

        <p class="p-low">&nbsp; &nbsp;&nbsp; &nbsp;
            陈文凯认为，互联网对汽车后市场的渗透将解构传统业务领域的边界。就像淘宝天猫本是一个大集市，但因为需要统一收银，涉足了第三方支付这个金融领域，为满足用户需求，还要涉足到物流、引流等其他业务中去，这些在传统商业中完全不同的行业，会因为用户一致性体验需要，而被打造成一个整体生态圈。“在中国最终产生一个4S以外的互联网虚拟形态的品牌服务生态圈是一个大概率事件。”
        </p>
        <p class="p-low">&nbsp; &nbsp;&nbsp; &nbsp;
            <strong>三界交汇方能有所建树</strong>
        </p>
        <p class="p-low">&nbsp; &nbsp;&nbsp; &nbsp;
            汽车后市场是一个借助规模才能形成成本优势的产业，支撑整个后市场的是配件，而配件的生产和物流都需要现代化的服务体系来支撑。陈文凯认为，从中国汽车产业的业态来看，汽车服务电商的机会更大。“要在这一领域有所建树，必须有三界交汇的能力。”陈文凯所指的三界交汇，一是互联网特质，二是供应链优势，三是服务链环节。伍茗也认为，如果只是把传统企业简单互联网化，很难形成持久的竞争力，核心竞争能力才是企业最后胜出的关键。
        </p>
        <p class="p-low">&nbsp; &nbsp;&nbsp; &nbsp;
            美国汽车后市场的竞争格局呈现两大明显特征：一是以配件流通为核心业务的公司成为市场支配地位者，其他服务型态的公司规模偏小。后市场涉及几十种服务形态但最终只有配件零售沟通商成为巨头和市场支配地位者；二是后服务市场将会在部分存在规模效应的领域达到较高的集中度。以配件流通为例，美国前十大连锁机构销售的配件占据了全美市场的50%以上，这个比例还在不断地上升。只有市场集中度提高，巨头的产生才有可能。
        </p>
        <p class="p-low">&nbsp; &nbsp;&nbsp; &nbsp;
            伍茗认为，中国当前在后市场的各个业态都还极为离散，这与中国后市场平均车龄偏低，市场还处在培育期有关，但随着私家车比例越来越高，中国市场车主消费心理和消费结构与美国非常接近，因而最终的竞争格局也将与美国趋同。“中国汽车产业链价值中枢已经在向后端转移。”伍茗预计，未来十年汽车后市场有望达到4万亿~5万亿的规模。在美国汽车后市场除了AUTOZONE还产生了包括NAPA、ADVANCE、O’REILLY等在内的多家市值超过100亿美元的上市公司。“以中国汽车保量的增长态势，未来出现一家市值超过AUTOZONE的企业是一定会发生的”。
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