<style type="text/css">
#hellopreloader>p{
	display:none;
	}

#hellopreloader_preload{
	display: block;
	position: fixed;
	z-index: 99999;
	top: 0;
	left: 0;
	width: 100%;
	height: 100%;
	background: white url(../img/van.gif) center/contain no-repeat;
	background-size:500px;}
	</style>
<div id="hellopreloader"><div id="hellopreloader_preload"></div></div>
<script type="text/javascript">var hellopreloader = document.getElementById("hellopreloader_preload");function fadeOutnojquery(el){el.style.opacity = 1;var interhellopreloader = setInterval(function(){el.style.opacity = el.style.opacity - 0.05;if (el.style.opacity <=0.05){ clearInterval(interhellopreloader);hellopreloader.style.display = "none";}},16);}window.onload = function(){setTimeout(function(){fadeOutnojquery(hellopreloader);},500);};</script>