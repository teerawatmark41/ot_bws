<?php
$path_theme = Yii::app()->theme->baseUrl."/assets";
$clientScript = Yii::app()->clientScript;
 ?>

<?php
$clientScript->registerCssFile($path_theme.'/plugins/chartist/css/chartist.min.css');
$clientScript->registerCssFile($path_theme.'/css/bootstrap.min.css');
$clientScript->registerCssFile($path_theme.'/css/atlantis.min.css');
$clientScript->registerCssFile($path_theme.'/css/demo.css');
$clientScript->registerCssFile($path_theme.'/css/fonts.min.css');

  ?>
<?php
$clientScript->registerScriptFile($path_theme.'/js/custom.min.js',CClientScript::POS_END);
$clientScript->registerScriptFile($path_theme.'/js/plugin/webfont/webfont.min.js',CClientScript::POS_END);
  $clientScript->registerScriptFile($path_theme.'/js/core/jquery.3.2.1.min.js',CClientScript::POS_END);
  $clientScript->registerScriptFile($path_theme.'/js/core/popper.min.js',CClientScript::POS_END);
  $clientScript->registerScriptFile($path_theme.'/js/core/bootstrap.min.js',CClientScript::POS_END);

  // <!-- jQuery UI -->
  $clientScript->registerScriptFile($path_theme.'/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js',CClientScript::POS_END);
  $clientScript->registerScriptFile($path_theme.'/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js',CClientScript::POS_END);

  // <!-- jQuery Scrollbar -->
  $clientScript->registerScriptFile($path_theme.'/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js',CClientScript::POS_END);


  // <!-- Chart JS -->
  $clientScript->registerScriptFile($path_theme.'/js/plugin/chart.js/chart.min.js',CClientScript::POS_END);

  // <!-- jQuery Sparkline -->
  $clientScript->registerScriptFile($path_theme.'/js/plugin/jquery.sparkline/jquery.sparkline.min.js',CClientScript::POS_END);

  // <!-- Chart Circle -->
  $clientScript->registerScriptFile($path_theme.'/js/plugin/chart-circle/circles.min.js',CClientScript::POS_END);

  // <!-- Datatables -->
  $clientScript->registerScriptFile($path_theme.'/js/plugin/datatables/datatables.min.js',CClientScript::POS_END);

  // <!-- Bootstrap Notify -->
  $clientScript->registerScriptFile($path_theme.'/js/plugin/bootstrap-notify/bootstrap-notify.min.js',CClientScript::POS_END);

  // <!-- jQuery Vector Maps -->
  $clientScript->registerScriptFile($path_theme.'/js/plugin/jqvmap/jquery.vmap.min.js',CClientScript::POS_END);
  $clientScript->registerScriptFile($path_theme.'/js/plugin/jqvmap/maps/jquery.vmap.world.js',CClientScript::POS_END);

  // <!-- Sweet Alert -->
  $clientScript->registerScriptFile($path_theme.'/js/plugin/sweetalert/sweetalert.min.js',CClientScript::POS_END);

  // <!-- Atlantis JS -->
  $clientScript->registerScriptFile($path_theme.'/js/atlantis.min.js',CClientScript::POS_END);

  // <!-- Atlantis DEMO methods, don't include it in your project! -->
  $clientScript->registerScriptFile($path_theme.'/js/setting-demo.js',CClientScript::POS_END);
  $clientScript->registerScriptFile($path_theme.'/js/demo.js',CClientScript::POS_END);
?>
