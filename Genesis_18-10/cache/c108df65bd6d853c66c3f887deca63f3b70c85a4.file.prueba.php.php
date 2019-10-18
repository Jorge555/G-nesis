<?php /* Smarty version Smarty-3.1.21, created on 2019-06-01 09:02:43
         compiled from "views\reportes\prueba.php" */ ?>
<?php /*%%SmartyHeaderCode:4991967875cf216a8d23a15-10260250%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c108df65bd6d853c66c3f887deca63f3b70c85a4' => 
    array (
      0 => 'views\\reportes\\prueba.php',
      1 => 1559372514,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4991967875cf216a8d23a15-10260250',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5cf216a8dce710_23078962',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cf216a8dce710_23078962')) {function content_5cf216a8dce710_23078962($_smarty_tpl) {?><?php echo '<?php'; ?>

require('pdf/fpdf.php');
$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);
$pdf->Cell(40,10,'¡Hola, Mundo!');
$pdf->Output();
<?php echo '?>'; ?>

<?php }} ?>
