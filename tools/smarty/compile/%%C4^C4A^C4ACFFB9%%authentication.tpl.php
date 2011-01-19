<?php /* Smarty version 2.6.20, created on 2010-11-23 07:22:27
         compiled from /homepages/30/d346662254/htdocs/prestashop/modules/referralprogram/authentication.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'l', '/homepages/30/d346662254/htdocs/prestashop/modules/referralprogram/authentication.tpl', 3, false),array('modifier', 'escape', '/homepages/30/d346662254/htdocs/prestashop/modules/referralprogram/authentication.tpl', 6, false),)), $this); ?>
<!-- MODULE ReferralProgram -->
<fieldset class="account_creation">
	<h3><?php echo smartyTranslate(array('s' => 'Referral program','mod' => 'referralprogram'), $this);?>
</h3>
	<p>
		<label for="referralprogram"><?php echo smartyTranslate(array('s' => 'E-mail address of your sponsor','mod' => 'referralprogram'), $this);?>
</label>
		<input type="text" size="52" maxlength="128" class="text" id="referralprogram" name="referralprogram" value="<?php if (isset ( $_POST['referralprogram'] )): ?><?php echo ((is_array($_tmp=$_POST['referralprogram'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall', 'UTF-8') : smarty_modifier_escape($_tmp, 'htmlall', 'UTF-8')); ?>
<?php endif; ?>" />
	</p>
</fieldset>
<!-- END : MODULE ReferralProgram -->