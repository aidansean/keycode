<?php
$title = 'What\'s my keycode?' ;
$js_scripts  = array('functions.js') ;
$stylesheets = array('style.css') ;
include_once($_SERVER['FILE_PREFIX'] . '/_core/preamble.php') ;
?>
  <div class="right">
    <h3>Keystroke detector</h3>
    <div class="blurb">
      <p>This page tells you the javascript keycode for any given keystroke.</p>
      <div id="div_keydown">-</div>
    </div>
  </div>

<?php foot() ; ?>
