<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; 
if($GLOBALS['miraclesIfCompressHTML']=='on') ob_start(); //ob 截取开始 ?>
<!DOCTYPE HTML>
<html<?php if($this->options->grayTheme && $this->options->grayTheme=1): ?> class="html-filter-gray"<?php endif; ?>>
  <head>
    <meta charset="<?php $this->options->charset(); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="renderer" content="webkit">
    <meta name="HandheldFriendly" content="true">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <?php 
    $banner = '';
    $description = '';
    if($this->is('post') || $this->is('page')){
        if(isset($this->fields->excerpt))
            $description = $this->fields->excerpt;
    }else{
        $description = Helper::options()->description;
    }?>
    <title><?php Contents::title($this); ?></title>
    <meta itemprop="name" content="<?php Contents::title($this); ?>"/>
    <meta itemprop="image" content="<?php Utils::indexTheme('favicon.ico'); ?>" />
    <meta name="author" content="<?php $this->author(); ?>" />
    <meta name="description" content="<?php if($description != '') echo $description; else $this->excerpt(50); ?>" />
    <meta property="og:title" content="<?php Contents::title($this); ?>" />
    <meta property="og:description" content="<?php if($description != '') echo $description; else $this->excerpt(50); ?>" />
    <meta property="og:site_name" content="<?php Helper::options()->title(); ?>" />
    <meta property="og:type" content="<?php if($this->is('post') || $this->is('page')) echo 'article'; else echo 'website'; ?>" />
    <meta property="og:url" content="<?php $this->permalink(); ?>" />
    <meta property="og:image" content="<?php echo $banner; ?>" />
    <meta property="article:published_time" content="<?php echo date('c', $this->created); ?>" />
    <meta property="article:modified_time" content="<?php echo date('c', $this->modified); ?>" />
    <meta name="twitter:title" content="<?php Contents::title($this); ?>" />
    <meta name="twitter:description" content="<?php if($description != '') echo $description; else $this->excerpt(50); ?>" />
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:image" content="<?php if(($this->is('post') || $this->is('page')) && $this->fields->banner!=''){$this->fields->banner();}
	else{
		if(empty($this->options->bannerUrl)):
			echo Utils::indexTheme('favicon.ico');
		else:
			$this->options->bannerUrl();
	endif;}?>" />
	<link rel="icon" id="icon" type="image/png" href="<?php if($this->options->favicon):$this->options->favicon();else:echo Utils::indexTheme('favicon.ico');endif;	?>" />
    <?php $this->header('generator=&pingback=&xmlrpc=&wlw=&commentReply=&description=&antiSpam='); ?>
	<?php $this->options->headerEcho(); ?>
	<!-- css -->
    <?php
	$css_files=array("codestyle","owo.min","nprogress","gazeimg","hint.min","main/miracles.min","toaster");
	if($this->options->customCDN): $custom=$this->options->customCDN; else: $custom=Helper::options()->themeUrl("","Miracles"); endif;
	Utils::addRequires($css_files,"css",$this->options->CDN,$custom);
	?>
	<!-- icon font -->
    <link rel="stylesheet" href="//at.alicdn.com/t/font_1165190_1djdjjwge4m.css" /><?php 
    if($GLOBALS['miraclesFontCDN']['if']=='on'): 
        if($GLOBALS['miraclesFontCDN']['cdn']=='google_font'):
            $theme_font_url = "https://fonts.googleapis.com/css?family=Noto+Sans+SC:300|Noto+Serif+SC&display=swap";
        elseif($GLOBALS['miraclesFontCDN']['cdn']=='font_lolinet'):
            $theme_font_url = "https://fonts.loli.net/css?family=Noto+Sans+SC:300|Noto+Serif+SC&display=swap";
        else:
            $theme_font_url = $GLOBALS['miraclesFontCDN']['cdn'];
        endif; ?>
	<!-- Font CDN -->
    <link href="<?php echo $theme_font_url; ?>" rel="stylesheet">
    <?php endif; ?><style>.body-dark .pio-action .pio-home{background-image: url(<?php Utils::indexTheme('images/icons/home.png'); ?>);}.body-dark .pio-action .pio-close{background-image: url(<?php Utils::indexTheme('images/icons/remove.png'); ?>);}.body-dark .pio-action .pio-skin{background-image: url(<?php Utils::indexTheme('images/icons/skin.png'); ?>);}.body-dark .pio-action .pio-info{background-image: url(<?php Utils::indexTheme('images/icons/info.png'); ?>);}.body-dark .pio-action .pio-night{background-image: url(<?php Utils::indexTheme('images/icons/night.png'); ?>);}
    .comment-by-author > .comment-body-inner > .comment-main > .comment-meta > .comment-date:before {content: '<?php gtecho('commentListTexts','byAuthor'); ?>'!important}<?php $this->options->cssEcho(); ?></style>
  </head>
  <body class="<?php if($this->options->bodyFonts && $this->options->bodyFonts=1): ?>body-serif<?php endif; ?>">