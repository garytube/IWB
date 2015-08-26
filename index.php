<!DOCTYPE HTML>
<html itemscope itemtype="http://schema.org/WebApp">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>#IWB</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta itemprop="name" content="#IWB <3 WebApp">
<meta itemprop="description" content="Dieses kleine Tool hilft dir dabei rauszufinden was der akutelle Status der Farm Spots ist. Finde herraus wo es die meisten AP gibt. Quick & Simple">
<meta itemprop="name" content="Der #Ingress Wetterbericht für Berlin">
<meta itemprop="description" content="Finde herraus wie es um die wichtigstens Farmspots & Leveling Grounds in Berlin steht. Dieses kleine Tool zeigt dir die wichtigsten Daten schnell und übersichtlich an. Quick &amp; Simple.">
<meta itemprop="image" content="http://btod.net/IWB/promo.jpg">
<link href="css/bootstrap.css" rel="stylesheet" type="text/css">
<link href="css/style.css" rel="stylesheet" type="text/css">
<link href="css/cards.css" rel="stylesheet" type="text/css">
<link href="css/bootstrap-responsive.css" rel="stylesheet" type="text/css">
<link rel="shortcut icon" type="image/x-icon" href="favicon.png" />
<link rel="apple-touch-icon-precomposed" href="57.png" />
<link rel="apple-touch-icon-precomposed" sizes="72x72" href="72.png" />
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="114.png" />
<meta name="apple-mobile-web-app-capable" content="yes" />
<link rel="canonical" href="http://www.btod.net/IWB" />
<script type="text/javascript" src="https://apis.google.com/js/plusone.js"></script>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>

<script src="js/parser.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/top.js"></script>
<!--<script type="text/javascript">
$(function(){
   $('#ajax-cont').jParse({
        ajaxOpts: {url: 'output.xml'},
        elementTag: ['id', 'portals', 'resist_portals', 'resist_level', 'resist_ap', 'entlight_portals', 'entlight_level', 'entlight_ap', 'datetime'],
        output: '<div id="jpet00" class="xml clearfix"><h4>jpet00 <span>(jpet01) <small> jpet08 </small></span></h4><ul class="stat clearfix"><li><span class="t">Resistance</span><span class="badge badge-info">jpet02</span></li><li><span class="t">Level</span><span class="badge badge-info">jpet03</span></li><li><span class="t">AP Wert</span><span class="badge badge-info">jpet04</span></li><li><span class="t">Frösche</span><span class="badge badge-success">jpet05</span></li><li><span class="t">Level</span><span class="badge badge-success">jpet06</span></li><li><span class="t">Ap Wert</span><span class="badge badge-success">jpet07</span></li></ul></div>',
        precallback: start,
        callback: finish
    });
});
</script>-->
<script type="text/javascript">
$(function(){
   $('#ajax-cont').jParse({
        ajaxOpts: {url: 'output.xml'},
        elementTag: ['id', 'portals', 'resist_portals', 'resist_level', 'resist_ap', 'entlight_portals', 'entlight_level', 'entlight_ap', 'datetime'],
        output: '<div class="card fade-in one" id="jpet00"><h2>jpet00<br><small class="jpet00">&nbsp;</small></h2>				<h4>jpet01</h4><hr><ul class="stats resist clearfix"><li class="portale first">Portale <span>jpet02</span></li><li class="portale">Level <span>jpet03</span></li><li class="portale">Ap Wert <span>jpet04</span></li></ul><hr><ul class="stats entlight clearfix"><li class="portale first">Portale <span>jpet05</span></li><li class="portale">Level <span>jpet06</span></li><li class="portale">Ap Wert <span>jpet07</span></li></ul><hr><div class="update">jpet08</div></div>',
        precallback: start,
        callback: finish
    });
});
</script>
</head>

<body>

<div class="container">
      <div class="masthead">
        <ul class="nav nav-pills pull-right">
          <li class="active"><a href="index.php">Start</a></li>
		  <li><a href="https://www.ingress.com/intel?latE6=52492711&lngE6=13484688&z=11" title="Zeigt den passenden Kartenausschnitt auf der Intel Map an" target="_blank">IITC Berlin</a></li>
        </ul>
		<script type="text/javascript">
  (function() {
    var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
    po.src = 'https://apis.google.com/js/plusone.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
  })();
</script>
		<?php require_once('inc/header.inc.php'); ?>
			<hr>
<nav id="nav" class=" fade-in two">
<a class="btn btn-link" href="#ANH">ANH</a>
<a class="btn btn-link" href="#CC">CC</a>
<a class="btn btn-link" href="#ESG">ESG</a>
<a class="btn btn-link" href="#GK">GK</a>
<a class="btn btn-link" href="#GM">GM</a>
<a class="btn btn-link" href="#GRP">GRP</a>
<a class="btn btn-link" href="#GS">GS</a>
<a class="btn btn-link" href="#KOE">KOE</a>
<a class="btn btn-link" href="#LG">LG</a>
<a class="btn btn-link" href="#NK">NK</a>
<a class="btn btn-link" href="#PDL">PDL</a>
<a class="btn btn-link" href="#PP">PP</a>
<a class="btn btn-link" href="#PKW">PKW</a>
<a class="btn btn-link" href="#SC">SC</a>
<a class="btn btn-link" href="#THF">THF</a>
<a class="btn btn-link" href="#TP">TP</a>
<a class="btn btn-link" href="#VFH">VFH</a>

</nav>
<br>

<div id="datax"></div>
 
 	<div id="ajax-cont"></div>

</div>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-37416622-2']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>

</body>
</html>