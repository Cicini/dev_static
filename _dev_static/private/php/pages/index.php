<?php header('Content-type: text/html;charset=utf-8'); ?><!DOCTYPE html><html class="no-js" lang="en"><head><meta charset="utf-8"><meta http-equiv="x-ua-compatible" content="ie=edge"><title>DevNetwork API</title><meta name="description" content="index - powered by dev_static v0.30.0 (https://devnet.work)"><meta name="viewport" content="width=device-width, initial-scale=1"><link rel="shortcut icon" href="<?= $public_href; ?>images/favicon/favicon-16-32.ico"><link rel="apple-touch-icon-precomposed" type="image/png" href="<?= $public_href; ?>images/favicon/favicon-152.png"><link rel="stylesheet" href="<?= $public_href; ?>css/styles.css"><?php if (!$fallback_mode) { ?><script src="<?= $public_href; ?>js/scripts.js" data-module="index"></script><?php } ?>
<?= $x_head_tags; ?></head><body class="index" id="root"><div id="fallback-hints"><?php if (!$fallback_mode) { ?><span class="noJsMsg">Works best with JavaScript enabled!</span><?php } ?><span class="backlink"><a href="https://devnet.work" title="dev_static v0.30.0 - Modern HTTP web server index.">Powered by DevNetwork</a></span></div><div id="fallback"><?= $fallback_html; ?></div></body></html><!-- dev_static v0.30.0 - https://devnet.work -->