<?php /* Smarty version 2.6.20, created on 2010-10-31 01:44:49
         compiled from /var/www/prestashop/modules/producttooltip/producttooltip.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'l', '/var/www/prestashop/modules/producttooltip/producttooltip.tpl', 6, false),array('function', 'dateFormat', '/var/www/prestashop/modules/producttooltip/producttooltip.tpl', 7, false),)), $this); ?>
<script type="text/javascript" src="<?php echo $this->_tpl_vars['base_dir']; ?>
js/jquery/jquery.jgrowl-1.2.1.min.js"></script>
<link href="<?php echo $this->_tpl_vars['base_dir']; ?>
css/jquery.jgrowl.css" rel="stylesheet" type="text/css" />

<script type="text/javascript">
$(document).ready(function() {
	<?php if (isset ( $this->_tpl_vars['nb_people'] )): ?>$.jGrowl('<?php echo $this->_tpl_vars['nb_people']; ?>
 <?php if ($this->_tpl_vars['nb_people'] == 1): ?><?php echo smartyTranslate(array('s' => 'person is currently watching','mod' => 'producttooltip'), $this);?>
<?php else: ?><?php echo smartyTranslate(array('s' => 'people are currently watching','mod' => 'producttooltip'), $this);?>
<?php endif; ?> <?php echo smartyTranslate(array('s' => 'this product','mod' => 'producttooltip'), $this);?>
', <?php echo '{ life: 3500 }'; ?>
);<?php endif; ?>
	<?php if (isset ( $this->_tpl_vars['date_last_order'] )): ?>$.jGrowl('<?php echo smartyTranslate(array('s' => 'This product was bought last','mod' => 'producttooltip'), $this);?>
 <?php echo Tools::dateFormat(array('date' => $this->_tpl_vars['date_last_order'],'full' => 1), $this);?>
', <?php echo '{ life: 3500 }'; ?>
);<?php endif; ?>
	<?php if (isset ( $this->_tpl_vars['date_last_cart'] )): ?>$.jGrowl('<?php echo smartyTranslate(array('s' => 'This product was added to cart last','mod' => 'producttooltip'), $this);?>
 <?php echo Tools::dateFormat(array('date' => $this->_tpl_vars['date_last_cart'],'full' => 1), $this);?>
', <?php echo '{ life: 3500 }'; ?>
);<?php endif; ?>
});
</script>