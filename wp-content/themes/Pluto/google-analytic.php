<?php
	//Get Google Analytic ID
	
	$pp_ga_id = get_option('pp_ga_id');
	
	if(!empty($pp_ga_id))
	{
?>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-36459056-1']);
  _gaq.push(['_setDomainName', 'puritancambridge.com']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'stats.g.doubleclick.net/dc.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
<?php
	}
?>