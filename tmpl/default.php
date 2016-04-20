<?php 

/**
 * @version	$Id: default.php 1.0 2012-03-13 $
 * @package	Joomla
 * @copyright   Copyright (C) 2016
 * @license     GNU/GPL http://www.gnu.org/licenses/gpl-2.0.html
 */

defined('_JEXEC') or die('Restricted access');

$titles = $items['data'][0];
$songs  = $items['data'][1];

?>

<!-- script src="<?= JURI::root() ?>modules/mod_bplayer/assets/mediaelement/jquery.js"></script -->
<script src="https://cdn.jsdelivr.net/mediaelement/2.20.1/mediaelement-and-player.min.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/mediaelement/2.20.1/mediaelementplayer.min.css" />

<script type="text/javascript" src="<?= JURI::root() ?>modules/mod_bplayer/assets/mep-feature-playlist/mep-feature-playlist.js"></script>
<link type="text/css" rel="stylesheet" href="<?= JURI::root() ?>modules/mod_bplayer/assets/mep-feature-playlist/mep-feature-playlist.css" />

<style type="text/css">
  <?= $items['css'] ?>

  .bplayerwrapper { width: <?= $items['width'] ?>;  height: <?= $items['height'] ?>; }
  mejs-playlist { height: <?= $items['height'] ?> !important; }
  mejs-container { height: 100% !important; }
  mejs-container .mejs-controls { height: 100% !important; position: relative !important; }
</style>

<div class="bplayerwrapper" id="bplayer-<?= $module->id ?>">
  <audio controls="controls" style="width: <?= $items['width'] ?>" width="<?= $items['width'] ?>">
<?php
    if ($items["playlist"] == 1) {
        for ($i=0, $n = count($songs); $i < $n; $i++) {
        echo "    <source src=\"{$songs[$i]}\" title=\"$titles[$i]\"></source>";
        
        }
    }
?>
    </audio>
</div>


<script>
  jQuery("#bplayer-<?= $module->id ?> audio").mediaelementplayer({
    audioHeight: 30,
    //audioHeight: "100%",
    //defaultAudioHeight: "100%",
    audioVolume: 'vertical', // vertical/horizontal
    videoVolume: 'vertical',
    loop: false,
    shuffle: false,
    playlist: true,
    playlistposition: 'bottom', // bottom
    startVolume: <?= $items['volumelevel'] ?>,
    features: ['playlistfeature','stop', 'prevtrack', 'playpause', 'nexttrack', 'loop', 'shuffle', 'playlist','current','progress','duration','volume'],// 'tracks','skipback','postroll','overlays','poster'
    keyActions: [],
    enableAutosize: true,
    enablePluginDebug: false,
    pluginPath: 'https://cdn.jsdelivr.net/mediaelement/2.20.1/',
    flashName: 'flashmediaelement.swf',
    silverlightName: 'silverlightmediaelement.xap',
    plugins: ['flash','silverlight']

//    iPadUseNativeControls: true,
//    iPhoneUseNativeControls: true, 
//    AndroidUseNativeControls: true
  });
</script>