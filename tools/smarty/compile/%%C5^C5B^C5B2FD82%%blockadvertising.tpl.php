<?php /* Smarty version 2.6.20, created on 2010-11-04 03:40:24
         compiled from /var/www/prestashop/modules/blockadvertising/blockadvertising.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'l', '/var/www/prestashop/modules/blockadvertising/blockadvertising.tpl', 3, false),)), $this); ?>
<!-- MODULE Block advertising -->
<div class="advertising_block">
	<a href="<?php echo $this->_tpl_vars['adv_link']; ?>
" title="<?php echo smartyTranslate(array('s' => 'Advertising','mod' => 'blockadvertising'), $this);?>
"><img src="<?php echo $this->_tpl_vars['image']; ?>
" alt="<?php echo smartyTranslate(array('s' => 'Advertising','mod' => 'blockadvertising'), $this);?>
" /></a>
</div>
<!-- /MODULE Block advertising -->