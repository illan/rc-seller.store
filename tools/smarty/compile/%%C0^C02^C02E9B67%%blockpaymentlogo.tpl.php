<?php /* Smarty version 2.6.20, created on 2010-11-25 15:53:08
         compiled from /var/www/rc-seller.com/prestashop/modules/blockpaymentlogo/blockpaymentlogo.tpl */ ?>
<!-- Block payment logo module -->
<div id="paiement_logo_block_left" class="paiement_logo_block">
	<a href="<?php echo $this->_tpl_vars['link']->getCMSLink(5,$this->_tpl_vars['securepayment']); ?>
">
		<img src="<?php echo $this->_tpl_vars['img_dir']; ?>
logo_paiement_visa.jpg" alt="visa" />
		<img src="<?php echo $this->_tpl_vars['img_dir']; ?>
logo_paiement_mastercard.jpg" alt="mastercard" />
		<img src="<?php echo $this->_tpl_vars['img_dir']; ?>
logo_paiement_paypal.jpg" alt="paypal" />
	</a>
</div>
<!-- /Block payment logo module -->