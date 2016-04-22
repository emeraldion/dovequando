<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
		<link type="text/css" href="/css/tiger.css" rel="stylesheet" title="Sleek theme" media="screen" />
		<link type="text/css" href="/css/common.css" rel="alternate stylesheet" title="Hairpin theme" media="screen" />
		<link type="text/css" href="/css/tiger-print.css" rel="stylesheet" media="print" />
		<link type="text/png" href="/img/money.png" rel="icon" />
		<title><?php print $this->title; ?></title>
		<script src="/js/common.js" type="text/javascript" language="javascript"></script>
		<script src="/js/jquery-1.2.3.min.js" type="text/javascript" language="javascript"></script>
		<script src="/js/jquery.coolupdate.js" type="text/javascript" language="javascript"></script>

	</head>
	<body>
		<div class="toolbar">
			<table cellpadding="0" cellspacing="0" border="0">
				<tr valign="middle">
					<td class="tbout">
						<a class="tb" href="/">
							<img src="/img/home.png" alt="Inizio" />
							<br />
							Inizio
						</a>
					</td>
          <td class="tbout"><img class="tbseparator" src="/img/separator.png" /></td>
					<td class="<?php echo $_REQUEST['controller'] == 'track' ? 'tbon' : 'tbout'; ?>">
						<a class="tb" href="<?php echo $this->url_to(array('controller' => 'track')); ?>">
							<img src="/img/dovequando.png" alt="Dovequando" />
							<br />
							Dovequando
						</a>
					</td>
					<td class="tbout"><img class="tbseparator" src="/img/separator.png" /></td>
					<td class="<?php echo $_REQUEST['controller'] == 'preferences' ? 'tbon' : 'tbout'; ?>">
						<a class="tb" href="<?php echo $this->url_to(array('controller' => 'preferences')); ?>">
							<img src="/img/preferences.png" alt="Preferenze" />
							<br />
							Preferenze
						</a>
					</td>
				</tr>
			</table>
		</div>
		<div align="center">
<?php
	// include(dirname(__FILE__) . "/../views/login_controls.php");
?>
			<table id="content" cellpadding="0" cellspacing="0" border="0">
				<tr>
					<td class="shd_nw"></td>
					<td class="panel">

<?php
	print $this->content_for_layout;
?>

					</td>
					<td class="shd_ne"></td>
				</tr>
				<tr>
					<td colspan="3">
						<div class="shd_sw"><div class="shd_se"><div class="shd_s"></div></div></div>
					</td>
				</tr>
			</table>

			<div id="credits">Developed by Claudio. Served by <a href="http://httpd.apache.org">Apache 2</a> running on <a href="http://localhost:8888/server.php">Electra</a>. Powered by <a href="http://www.php.net">PHP 5</a>, <a href="http://www.mysql.com">MySQL</a></div>
		</div>
	</body>
</html>
