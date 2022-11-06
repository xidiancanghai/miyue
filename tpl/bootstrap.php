<?php
use PrivateBin\I18n;
$isCpct = substr($template, 9, 8) === '-compact';
$isDark = substr($template, 9, 5) === '-dark';
$isPage = substr($template, -5) === '-page';
?><!DOCTYPE html>
<html lang="<?php echo I18n::_('en'); ?>">
	<head>
	<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-S7MXSXG6ML"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-S7MXSXG6ML');
</script>
		<meta charset="utf-8" />
		<meta http-equiv="Content-Security-Policy" content="<?php echo I18n::encode($CSPHEADER); ?>">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="robots" content="noindex" />
		<meta name="google" content="notranslate">
		<title><?php echo I18n::_($NAME); ?></title>
<?php
if (!$isDark) :
?>
		<link type="text/css" rel="stylesheet" href="css/bootstrap/bootstrap-3.4.1.css" />
<?php
endif;
?>
		<link type="text/css" rel="stylesheet" href="css/bootstrap/bootstrap-theme-3.4.1.css" />
<?php
if ($isDark) :
?>
		<link type="text/css" rel="stylesheet" href="css/bootstrap/darkstrap-0.9.3.css" />
<?php
endif;
?>
		<link type="text/css" rel="stylesheet" href="css/bootstrap/privatebin.css?<?php echo rawurlencode($VERSION); ?>" />
<?php
if ($SYNTAXHIGHLIGHTING) :
?>
		<link type="text/css" rel="stylesheet" href="css/prettify/prettify.css?<?php echo rawurlencode($VERSION); ?>" />
<?php
    if (strlen($SYNTAXHIGHLIGHTINGTHEME)) :
?>
		<link type="text/css" rel="stylesheet" href="css/prettify/<?php echo rawurlencode($SYNTAXHIGHLIGHTINGTHEME); ?>.css?<?php echo rawurlencode($VERSION); ?>" />
<?php
    endif;
endif;
?>
		<noscript><link type="text/css" rel="stylesheet" href="css/noscript.css" /></noscript>
		<script type="text/javascript" data-cfasync="false" src="js/jquery-3.6.0.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous"></script>
<?php
if ($QRCODE) :
?>
		<script async type="text/javascript" data-cfasync="false" src="js/kjua-0.9.0.js" integrity="sha512-CVn7af+vTMBd9RjoS4QM5fpLFEOtBCoB0zPtaqIDC7sF4F8qgUSRFQQpIyEDGsr6yrjbuOLzdf20tkHHmpaqwQ==" crossorigin="anonymous"></script>
<?php
endif;
if ($ZEROBINCOMPATIBILITY) :
?>
		<script type="text/javascript" data-cfasync="false" src="js/base64-1.7.js" integrity="sha512-JdwsSP3GyHR+jaCkns9CL9NTt4JUJqm/BsODGmYhBcj5EAPKcHYh+OiMfyHbcDLECe17TL0hjXADFkusAqiYgA==" crossorigin="anonymous"></script>
<?php
endif;
?>
		<script type="text/javascript" data-cfasync="false" src="js/zlib-1.2.12.js" integrity="sha512-Ewve1dyEW/Vf97OY91/aWqMx9NaaUK5d8Z6JB1RR5gFXtMhse/Ya7D/5CE/UrQTwOWqmkvn97JjP4YDUrmq/yA==" crossorigin="anonymous"></script>
		<script type="text/javascript" data-cfasync="false" src="js/base-x-4.0.0.js" integrity="sha512-nNPg5IGCwwrveZ8cA/yMGr5HiRS5Ps2H+s0J/mKTPjCPWUgFGGw7M5nqdnPD3VsRwCVysUh3Y8OWjeSKGkEQJQ==" crossorigin="anonymous"></script>
		<script type="text/javascript" data-cfasync="false" src="js/rawinflate-0.3.js" integrity="sha512-g8uelGgJW9A/Z1tB6Izxab++oj5kdD7B4qC7DHwZkB6DGMXKyzx7v5mvap2HXueI2IIn08YlRYM56jwWdm2ucQ==" crossorigin="anonymous"></script>
		<script type="text/javascript" data-cfasync="false" src="js/bootstrap-3.4.1.js" integrity="sha512-oBTprMeNEKCnqfuqKd6sbvFzmFQtlXS3e0C/RGFV0hD6QzhHV+ODfaQbAlmY6/q0ubbwlAM/nCJjkrgA3waLzg==" crossorigin="anonymous"></script>
		
		<script type="text/javascript">
//<![CDATA[
var owa_baseUrl = 'https://miyue.io/state/';
var owa_cmds = owa_cmds || [];
owa_cmds.push(['setSiteId', '6d8f5ef426d21f4fe60b01667b45c389']);
owa_cmds.push(['trackPageView']);
owa_cmds.push(['trackClicks']);

(function() {
    var _owa = document.createElement('script'); _owa.type = 'text/javascript'; _owa.async = true;
    owa_baseUrl = ('https:' == document.location.protocol ? window.owa_baseSecUrl || owa_baseUrl.replace(/http:/, 'https:') : owa_baseUrl );
    _owa.src = owa_baseUrl + 'modules/base/dist/owa.tracker.js';
    var _owa_s = document.getElementsByTagName('script')[0]; _owa_s.parentNode.insertBefore(_owa, _owa_s);
}());
//]]>
</script>

<?php
if ($SYNTAXHIGHLIGHTING) :
?>
		<script type="text/javascript" data-cfasync="false" src="js/prettify.js?<?php echo rawurlencode($VERSION); ?>" integrity="sha512-puO0Ogy++IoA2Pb9IjSxV1n4+kQkKXYAEUtVzfZpQepyDPyXk8hokiYDS7ybMogYlyyEIwMLpZqVhCkARQWLMg==" crossorigin="anonymous"></script>
<?php
endif;
if ($MARKDOWN) :
?>
		<script type="text/javascript" data-cfasync="false" src="js/showdown-2.0.3.js" integrity="sha512-vcfjvW3UKHD/4vlQx804cqWK88jFmjsWRsZ8/u5YEcyHB1IituxrXDU7TvdqsFVsMnxpE/UIEo25/SYW+puWHw==" crossorigin="anonymous"></script>
<?php
endif;
?>
		<script type="text/javascript" data-cfasync="false" src="js/purify-2.3.6.js" integrity="sha512-N1GGPjbqLbwK821ZN7C925WuTwU4aDxz2CEEOXQ6/s6m6MBwVj8fh5fugiE2hzsm0xud3q7jpjZQ4ILnpMREYQ==" crossorigin="anonymous"></script>
		<script type="text/javascript" data-cfasync="false" src="js/legacy.js?<?php echo rawurlencode($VERSION); ?>" integrity="sha512-LYos+qXHIRqFf5ZPNphvtTB0cgzHUizu2wwcOwcwz/VIpRv9lpcBgPYz4uq6jx0INwCAj6Fbnl5HoKiLufS2jg==" crossorigin="anonymous"></script>
		<script type="text/javascript" data-cfasync="false" src="js/privatebin.js?<?php echo rawurlencode($VERSION); ?>" integrity="sha512-/F0+9bIbFUC8mKQzrcAjIs2Jg92w1DMcczT2Y/KqHVkFEXH1ZSrqtUX7QjLH6RgVR0YhTxhmWkZ2c8scGCwpkQ==" crossorigin="anonymous"></script>
		<script>document.write(new Date().getFullYear())</script>
		<!-- icon -->
		<link rel="apple-touch-icon" href="<?php echo I18n::encode($BASEPATH); ?>img/apple-touch-icon.png" sizes="180x180" />
		<link rel="icon" type="image/png" href="img/favicon-32x32.png" sizes="32x32" />
		<link rel="icon" type="image/png" href="img/favicon-16x16.png" sizes="16x16" />
		<link rel="manifest" href="manifest.json?<?php echo rawurlencode($VERSION); ?>" />
		<link rel="mask-icon" href="img/safari-pinned-tab.svg" color="#ffcc00" />
		<link rel="shortcut icon" href="img/favicon.ico">
		<meta name="msapplication-config" content="browserconfig.xml">
		<meta name="theme-color" content="#ffe57e" />
		<!-- Twitter/social media cards -->
		
		<meta property="og:title" content="<?php echo I18n::_($NAME); ?>" />
		<meta property="og:site_name" content="<?php echo I18n::_($NAME); ?>" />
		<meta property="og:description" content="<?php echo I18n::_('Visit this link to see the note. Giving the URL to anyone allows them to access the note, too.') ?>" />
		<meta property="og:image" content="<?php echo I18n::encode($BASEPATH); ?>img/apple-touch-icon.png" />
		<meta property="og:image:type" content="image/png" />
		<meta property="og:image:width" content="180" />
		<meta property="og:image:height" content="180" />
	</head>
	
	
	<body role="document" data-compression="<?php echo rawurlencode($COMPRESSION); ?>"<?php
$class = array();
if ($isCpct) {
    $class[] = 'navbar-spacing';
}
if ($isDark) {
    $class[] = 'dark-theme';
}
if (count($class)) {
    echo ' class="', implode(' ', $class), '"';
}
?>>
		<div id="passwordmodal" tabindex="-1" class="modal fade" role="dialog" aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-body">
						<form id="passwordform" role="form">
							<div class="form-group">
								<label for="passworddecrypt"><span class="glyphicon glyphicon-eye-open"></span> <?php echo I18n::_('Please enter the password for this paste:') ?></label>
								<input id="passworddecrypt" type="password" class="form-control" placeholder="<?php echo I18n::_('Enter password') ?>" required="required">
							</div>
							<button type="submit" class="btn btn-success btn-block"><span class="glyphicon glyphicon-off"></span> <?php echo I18n::_('Decrypt') ?></button>
						</form>
					</div>
				</div>
			</div>
		</div>
<?php
if ($QRCODE) :
?>
		<div id="qrcodemodal" tabindex="-1" class="modal fade" aria-labelledby="qrcodemodalTitle" role="dialog" aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-body">
						<div class="mx-auto" id="qrcode-display"></div>
					</div>
					<div class="row">
						<div class="btn-group col-xs-12">
							<span class="col-xs-12">
								<button type="button" class="btn btn-primary btn-block" data-dismiss="modal"><?php echo I18n::_('Close') ?></button>
							</span>
						</div>
					</div>
				</div>
			</div>
		</div>
<?php
endif;
?>
		<div id="emailconfirmmodal" tabindex="-1" class="modal fade" aria-labelledby="emailconfirmmodalTitle" role="dialog" aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-body">
						<div id="emailconfirm-display"></div>
					</div>
					<div class="row">
						<div class="btn-group col-xs-12" data-toggle="buttons">
							<span class="col-xs-12 col-md-4">
								<button id="emailconfirm-timezone-current" type="button" class="btn btn-danger btn-block" data-dismiss="modal"><?php echo I18n::_('Use Current Timezone') ?></button>
							</span>
							<span class="col-xs-12 col-md-4">
								<button id="emailconfirm-timezone-utc" type="button" class="btn btn-default btn-block" data-dismiss="modal"><?php echo I18n::_('Convert To UTC') ?></button>
							</span>
							<span class="col-xs-12 col-md-4">
								<button type="button" class="btn btn-primary btn-block" data-dismiss="modal"><?php echo I18n::_('Close') ?></button>
							</span>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div>
		<center>
		<p>
		<img src="img/logo.png"><h5>保护数据隐私  畅享私密阅览</h5><p>
		</center>
		<font color="red" size="2">
		<ul>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<li>您创建的数据是在浏览器内经过加密运行，我们对其内容毫不知情，也不会对其保存，请在其它地方备份好您的数据。</li>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<li>点击“分享”按钮，会得到一个分享链接，将链接发送给需要分享的人。推荐使用电脑端浏览器分享。</li>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<li>“阅后即焚”，即链接只生效一次。如需分享给多人，请不要用”阅后即焚”模式。注意链接有效期，超过有效期后链接失效。</li>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<li>********<b>强烈推荐分享链接在电脑端浏览器中打开</b>********</li>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<li>附件上传大小限制：10MB。支持图片（jpg、png等）、office、WPS、PDF、各种压缩包、 视频(MP4等格式)。</li>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<li>部分文件、如图片、MP4等格式文件，分享后支持在线预览。</li>
		</ul>
		</font>
		</div>
		
		
		<nav class="navbar navbar-<?php echo $isDark ? 'inverse' : 'default'; ?> navbar-<?php echo $isCpct ? 'fixed' : 'static'; ?>-top"><?php
if ($isCpct) :
?><div class="container"><?php
endif;
?>
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
					<span class="sr-only"><?php echo I18n::_('Toggle navigation'); ?></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
			
			</div>
			<div id="navbar" class="navbar-collapse collapse">
				<ul class="nav navbar-nav">
					<li id="loadingindicator" class="navbar-text hidden">
						<span class="glyphicon glyphicon-time" aria-hidden="true"></span>
						<?php echo I18n::_('Loading…'), PHP_EOL; ?>
					</li>
					<li>
						<button id="retrybutton" type="button" class="reloadlink hidden btn btn-<?php echo $isDark ? 'warning' : 'primary'; ?> navbar-btn">
							<span class="glyphicon glyphicon-repeat" aria-hidden="true"></span> <?php echo I18n::_('Retry'), PHP_EOL; ?>
						</button>
					</li>
					<li>
<?php
if ($isPage) :
?>
						<button id="sendbutton" type="button" class="hidden btn btn-<?php echo $isDark ? 'warning' : 'primary'; ?> navbar-btn">
							<span class="glyphicon glyphicon-upload" aria-hidden="true"></span> <?php echo I18n::_('Send'), PHP_EOL;
else :
?>
						<button id="newbutton" type="button" class="hidden btn btn-<?php echo $isDark ? 'warning' : 'default'; ?> navbar-btn">
							<span class="glyphicon glyphicon-file" aria-hidden="true"></span> <?php echo I18n::_('New'), PHP_EOL;
endif;
?>
						</button>
						<button id="clonebutton" type="button" class="hidden btn btn-<?php echo $isDark ? 'warning' : 'default'; ?> navbar-btn">
							<span class="glyphicon glyphicon-duplicate" aria-hidden="true"></span> <?php echo I18n::_('Clone'), PHP_EOL; ?>
						</button>
						<button id="rawtextbutton" type="button" class="hidden btn btn-<?php echo $isDark ? 'warning' : 'default'; ?> navbar-btn">
							<span class="glyphicon glyphicon-text-background" aria-hidden="true"></span> <?php echo I18n::_('Raw text'), PHP_EOL; ?>
						</button>
						<button id="downloadtextbutton" type="button" class="hidden btn btn-<?php echo $isDark ? 'warning' : 'default'; ?> navbar-btn">
							<span class="glyphicon glyphicon glyphicon-download-alt" aria-hidden="true"></span> <?php echo I18n::_('Save paste'), PHP_EOL; ?>
						</button>
						<button id="emaillink" type="button" class="hidden btn btn-<?php echo $isDark ? 'warning' : 'default'; ?> navbar-btn">
							<span class="glyphicon glyphicon-envelope" aria-hidden="true"></span> <?php echo I18n::_('Email'), PHP_EOL; ?>
						</button>
<?php
if ($QRCODE) :
?>
						<button id="qrcodelink" type="button" data-toggle="modal" data-target="#qrcodemodal" class="hidden btn btn-<?php echo $isDark ? 'warning' : 'default'; ?> navbar-btn">
							<span class="glyphicon glyphicon-qrcode" aria-hidden="true"></span> <?php echo I18n::_('QR code'), PHP_EOL; ?>
						</button>
<?php
endif;
?>
					</li>
					<li class="dropdown">
						<select id="pasteExpiration" name="pasteExpiration" class="hidden">
<?php
foreach ($EXPIRE as $key => $value) :
?>
							<option value="<?php echo $key; ?>"<?php
    if ($key == $EXPIREDEFAULT) :
?> selected="selected"<?php
    endif;
?>><?php echo $value; ?></option>
<?php
endforeach;
?>
						</select>
						<a id="expiration" href="#" class="hidden dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?php echo I18n::_('Expires'); ?>: <span id="pasteExpirationDisplay"><?php echo $EXPIRE[$EXPIREDEFAULT]; ?></span> <span class="caret"></span></a>
						<ul class="dropdown-menu">
<?php
foreach ($EXPIRE as $key => $value) :
?>
							<li>
								<a href="#" data-expiration="<?php echo $key; ?>">
									<?php echo $value, PHP_EOL; ?>
								</a>
							</li>
<?php
endforeach;
?>
						</ul>
					</li>
<?php
if ($isCpct) :
?>
					<li class="dropdown">
						<a id="formatter" href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?php echo I18n::_('Options'); ?> <span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li id="burnafterreadingoption" class="checkbox hidden">
								<label>
									<input type="checkbox" id="burnafterreading" name="burnafterreading"<?php
    if ($BURNAFTERREADINGSELECTED) :
?> checked="checked"<?php
    endif;
?> />
									<?php echo I18n::_('Burn after reading'), PHP_EOL; ?>
								</label>
							</li>
<?php
    if ($DISCUSSION) :
?>
							<li id="opendiscussionoption" class="checkbox hidden">
								<label>
									<input type="checkbox" id="opendiscussion" name="opendiscussion"<?php
        if ($OPENDISCUSSION) :
?> checked="checked"<?php
        endif;
?> />
									<?php echo I18n::_('Open discussion'), PHP_EOL; ?>
								</label>
							</li>
<?php
    endif;
?>
							<li role="separator" class="divider"></li>
							<li>
								<div>
									<?php echo I18n::_('Format'); ?>: <span id="pasteFormatterDisplay"><?php echo $FORMATTER[$FORMATTERDEFAULT]; ?></span> <span class="caret"></span>
								</div>
							</li>
<?php
    foreach ($FORMATTER as $key => $value) :
?>
							<li>
								<a href="#" data-format="<?php echo $key; ?>">
									<?php echo $value, PHP_EOL; ?>
								</a>
							</li>
<?php
    endforeach;
?>
						</ul>
						<select id="pasteFormatter" name="pasteFormatter" class="hidden">
<?php
    foreach ($FORMATTER as $key => $value) :
?>
							<option value="<?php echo $key; ?>"<?php
        if ($key == $FORMATTERDEFAULT) :
?> selected="selected"<?php
        endif;
?>><?php echo $value; ?></option>
<?php
    endforeach;
?>
						</select>
					</li>
<?php
else :
?>
					<li>
						<div id="burnafterreadingoption" class="navbar-text checkbox hidden">
							<label>
								<input type="checkbox" id="burnafterreading" name="burnafterreading"<?php
    if ($BURNAFTERREADINGSELECTED) :
?> checked="checked"<?php
    endif;
?> />
								<?php echo I18n::_('Burn after reading'), PHP_EOL; ?>
							</label>
						</div>
					</li>
<?php
    if ($DISCUSSION) :
?>
					<li>
						<div id="opendiscussionoption" class="navbar-text checkbox hidden">
							<label>
								<input type="checkbox" id="opendiscussion" name="opendiscussion"<?php
        if ($OPENDISCUSSION) :
?> checked="checked"<?php
        endif;
?> />
								<?php echo I18n::_('Open discussion'), PHP_EOL; ?>
							</label>
						</div>
					</li>
<?php
    endif;
endif;
if ($PASSWORD) :
?>
					<li>
						<div id="password" class="navbar-form hidden">
							<input type="password" id="passwordinput" placeholder="<?php echo I18n::_('Password (recommended)'); ?>" class="form-control" size="23" />
						</div>
					</li>
<?php
endif;
if ($FILEUPLOAD) :
?>
					<li id="attach" class="hidden dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?php echo I18n::_('Attach a file'); ?> <span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li id="filewrap">
								<div>
									<input type="file" id="file" name="file" />
								</div>
								<div id="dragAndDropFileName" class="dragAndDropFile"><?php echo I18n::_('alternatively drag & drop a file or paste an image from the clipboard'); ?></div>
							</li>
							<li id="customattachment" class="hidden"></li>
							<li>
								<a id="fileremovebutton"  href="#">
									<?php echo I18n::_('Remove attachment'), PHP_EOL; ?>
								</a>
							</li>
						</ul>
					</li>
<?php
endif;
if (!$isCpct) :
?>
					<li class="dropdown">
						<select id="pasteFormatter" name="pasteFormatter" class="hidden">
<?php
    foreach ($FORMATTER as $key => $value) :
?>
							<option value="<?php echo $key; ?>"<?php
        if ($key == $FORMATTERDEFAULT) :
?> selected="selected"<?php
        endif;
?>><?php echo $value; ?></option>
<?php
    endforeach;
?>
						</select>
						<a id="formatter" href="#" class="hidden dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?php echo I18n::_('Format'); ?>: <span id="pasteFormatterDisplay"><?php echo $FORMATTER[$FORMATTERDEFAULT]; ?></span> <span class="caret"></span></a>
						<ul class="dropdown-menu">
<?php
    foreach ($FORMATTER as $key => $value) :
?>
							<li>
								<a href="#" data-format="<?php echo $key; ?>">
									<?php echo $value, PHP_EOL; ?>
								</a>
							</li>
<?php
    endforeach;
?>
						</ul>
					</li>
<?php
endif;
?>
				</ul>
				<ul class="nav navbar-nav pull-right">
<?php
if (strlen($LANGUAGESELECTION)) :
?>
					<li id="language" class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-flag" aria-hidden="true"></span> <?php echo $LANGUAGES[$LANGUAGESELECTION][0]; ?> <span class="caret"></span></a>
						<ul class="dropdown-menu dropdown-menu-right">
<?php
    foreach ($LANGUAGES as $key => $value) :
?>
							<li>
								<a href="#" data-lang="<?php echo $key; ?>">
									<?php echo $value[0]; ?> (<?php echo $value[1]; ?>)
								</a>
							</li>
<?php
    endforeach;
?>
						</ul>
					</li>
<?php
endif;
?>
				</ul>
			</div>
		<?php
if ($isCpct) :
?></div><?php
endif;
?></nav>
		<main>
			<section class="container">
<?php
if (strlen($NOTICE)) :
?>
				<div role="alert" class="alert alert-info">
					<span class="glyphicon glyphicon-info-sign" aria-hidden="true"></span>
					<?php echo I18n::encode($NOTICE), PHP_EOL; ?>
				</div>
<?php
endif;
?>
				<div id="remainingtime" role="alert" class="hidden alert alert-info">
					<span class="glyphicon glyphicon-fire" aria-hidden="true"></span>
				</div>
<?php
if ($FILEUPLOAD) :
?>
				<div id="attachment" role="alert" class="hidden alert alert-info">
					<span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span>
					<a class="alert-link"><?php echo I18n::_('Download attachment'), PHP_EOL; ?></a>
				</div>
<?php
endif;
?>
				<div id="status" role="alert" class="alert alert-info<?php echo empty($STATUS) ? ' hidden' : '' ?>">
					<span class="glyphicon glyphicon-info-sign" aria-hidden="true"></span>
					<?php echo I18n::encode($STATUS), PHP_EOL; ?>
				</div>
				<div id="errormessage" role="alert" class="<?php echo empty($ERROR) ? 'hidden' : '' ?> alert alert-danger">
					<span class="glyphicon glyphicon-alert" aria-hidden="true"></span>
					<?php echo I18n::encode($ERROR), PHP_EOL; ?>
				</div>
				<noscript>
					<div id="noscript" role="alert" class="alert alert-<?php echo $isDark ? 'error' : 'warning'; ?>">
						<span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
						<?php echo I18n::_('JavaScript is required for %s to work. Sorry for the inconvenience.', I18n::_($NAME)), PHP_EOL; ?>
					</div>
				</noscript>
				<div id="oldnotice" role="alert" class="hidden alert alert-danger">
					<span class="glyphicon glyphicon-alert" aria-hidden="true"></span>
					<?php echo I18n::_('%s requires a modern browser to work.', I18n::_($NAME)), PHP_EOL; ?>
					<a href="https://www.mozilla.org/firefox/">Firefox</a>,
					<a href="https://www.opera.com/">Opera</a>,
					<a href="https://www.google.com/chrome">Chrome</a>…<br />
					
				</div>
<?php
if ($HTTPWARNING) :
?>
				<div id="httpnotice" role="alert" class="hidden alert alert-danger">
					<span class="glyphicon glyphicon-alert" aria-hidden="true"></span>
					<?php echo I18n::_('This website is using an insecure connection! Please only use it for testing.'), PHP_EOL; ?><br />
					
				</div>
				<div id="insecurecontextnotice" role="alert" class="hidden alert alert-danger">
					<span class="glyphicon glyphicon-alert" aria-hidden="true"></span>
					<?php echo I18n::_('Your browser may require an HTTPS connection to support the WebCrypto API. Try <a href="%s">switching to HTTPS</a>.', $HTTPSLINK); ?>
				</div>
<?php
endif;
?>
				<div id="pastesuccess" class="hidden">
					<div role="alert" class="alert alert-success">
						<span class="glyphicon glyphicon-ok" aria-hidden="true"></span>
						<div id="deletelink"></div>
						<div id="pastelink"></div>
					</div>
<?php
if (strlen($URLSHORTENER)) :
?>
					<p>
						<button id="shortenbutton" data-shortener="<?php echo I18n::encode($URLSHORTENER); ?>" type="button" class="btn btn-<?php echo $isDark ? 'warning' : 'primary'; ?> btn-block">
						<span class="glyphicon glyphicon-send" aria-hidden="true"></span> <?php echo I18n::_('Shorten URL'), PHP_EOL; ?>
					</button>
					</p>
					<div role="alert" class="alert alert-danger">
						<span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
						<?php echo I18n::_('URL shortener may expose your decrypt key in URL.'), PHP_EOL; ?>
					</div>
<?php
endif;
?>
				</div>
				<ul id="editorTabs" class="nav nav-tabs hidden">
					<li role="presentation" class="active"><a role="tab" aria-selected="true" aria-controls="editorTabs" id="messageedit" href="#"><?php echo I18n::_('Editor'); ?></a></li>
					<li role="presentation"><a role="tab" aria-selected="false" aria-controls="editorTabs" id="messagepreview" href="#"><?php echo I18n::_('Preview'); ?></a></li>
					<li role="presentation" class="pull-right">
<?php
if ($isPage) :
?>
						<button id="newbutton" type="button" class="reloadlink hidden btn btn-<?php echo $isDark ? 'warning' : 'default'; ?>">
							<span class="glyphicon glyphicon-file" aria-hidden="true"></span> <?php echo I18n::_('New'), PHP_EOL;
else :
?>
						<button id="sendbutton" type="button" class="hidden btn btn-<?php echo $isDark ? 'warning' : 'primary'; ?>">
							<span class="glyphicon glyphicon-upload" aria-hidden="true"></span> <?php echo I18n::_('Send'), PHP_EOL;
endif;
?>
						</button>
					</li>
				</ul>
			</section>
			<section class="container">
				<article class="row">
					<div id="placeholder" class="col-md-12 hidden"><?php echo I18n::_('+++ no paste text +++'); ?></div>
					<div id="attachmentPreview" class="col-md-12 text-center hidden"></div>
					<div id="prettymessage" class="col-md-12 hidden">
						<pre id="prettyprint" class="col-md-12 prettyprint linenums:1"></pre>
					</div>
					<div id="plaintext" class="col-md-12 hidden"></div>
					<p class="col-md-12"><textarea id="message" name="message" cols="66" rows="13" class="form-control hidden"></textarea></p>
				</article>
			</section>
			<section class="container">
				<div id="discussion" class="hidden">
					<h4><?php echo I18n::_('Discussion'); ?></h4>
					<div id="commentcontainer"></div>
				</div>
			</section>
			<section class="container">
				<div id="noscript" role="alert" class="alert alert-info noscript-hide">
					<span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
					<?php echo I18n::_('Loading…'); ?><br />
					
				</div>
			</section>
			<footer class="container">
				<div class="row">
					<h6 class="col-md-5 col-xs-8"><?php echo I18n::_($NAME); ?> &nbsp;&nbsp;&nbsp;&nbsp;<?php echo I18n::_('愿与愚昧的战争终有胜利的一天。'); ?></small></h6>
					<p class="col-md-1 col-xs-4 text-center"><?php echo "0.1.1.1010"; ?></p>
					<p id="aboutbox" class="col-md-6 col-xs-12">
					&copy;<?php echo date('Y'), ' ', PHP_EOL;
                        ?>miyue.io
						<?php echo '  ',"E-Mail:info.miyueio[at]gmail.com", ' ', PHP_EOL;
                        ?>
					</p>
				</div>
			</footer>
		</main>
<?php
if ($DISCUSSION) :
?>
		<div id="serverdata" class="hidden" aria-hidden="true">
			<div id="templates">
				<article id="commenttemplate" class="comment"><div class="commentmeta"><span class="nickname">name</span><span class="commentdate">0000-00-00</span></div><div class="commentdata">c</div><button class="btn btn-default btn-sm"><?php echo I18n::_('Reply'); ?></button></article>
				<p id="commenttailtemplate" class="comment"><button class="btn btn-default btn-sm"><?php echo I18n::_('Add comment'); ?></button></p>
				<div id="replytemplate" class="reply hidden"><input type="text" id="nickname" class="form-control" title="<?php echo I18n::_('Optional nickname…'); ?>" placeholder="<?php echo I18n::_('Optional nickname…'); ?>" /><textarea id="replymessage" class="replymessage form-control" cols="60" rows="7"></textarea><br /><div id="replystatus" role="alert" class="statusmessage hidden alert"><span class="glyphicon" aria-hidden="true"></span> </div><button id="replybutton" class="btn btn-default btn-sm"><?php echo I18n::_('Post comment'); ?></button></div>
			</div>
		</div>
<?php
endif;
?>
<?php
if ($FILEUPLOAD) :
?>
		<div id="dropzone" class="hidden" tabindex="-1" aria-hidden="true"></div>
<?php
endif;
?>
	</body>
</html>
