<div class="logo">
	<img src="images/logo.png" alt="">
</div>

<ul class="fb-slideshow">
<?php
	$facebook = new Facebook(array(
		'appId'  => '226663804022170',
		'secret' => 'a43a9fbc0ed2b081d0526b254df0ff92',
		'cookie' => false
	));

	$fb_rdata = $facebook->api(array(
		'method'   => 'fql.query',
		'query'    => 'SELECT pid, src, src_small, src_big, caption FROM photo WHERE album_object_id = "604579966262993" ORDER BY created DESC',
		'callback' => ''
	));

	$time = 0;
	foreach ($fb_rdata as $fb_jkeys => $fb_jdata ) {
		$anim_cls = '-webkit-animation-delay:'.$time.'s; -moz-animation-delay:'.$time.'s; -o-animation-delay:'.$time.'s; -ms-animation-delay:'.$time.'s; animation-delay:'.$time.'s;';
		echo(chr(13).chr(10));
		echo('<li>'.chr(13).chr(10));
		echo('<span style="background-image:url(\''.$fb_jdata['src_big'].'\'); '.$anim_cls.'">&nbsp;</span>'.chr(13).chr(10));
		echo('<div style="'.$anim_cls.'">'.chr(13).chr(10));
		echo('<h3>'.$fb_jdata['caption'].'</h3>'.chr(13).chr(10));
		echo('</div>'.chr(13).chr(10));
		echo('</li>'.chr(13).chr(10));
		echo(chr(13).chr(10));
		$time = $time + 6;
	}
?>
</ul>
