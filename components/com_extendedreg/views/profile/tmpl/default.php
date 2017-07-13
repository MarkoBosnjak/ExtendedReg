<?php 
/**
 * @package		ExtendedReg
 * @version		2.11
 * @date		2014-03-29
 * @copyright	Copyright (C) 2007 - 2013 jVitals Digital Technologies Inc. All rights reserved.
 * @license		http://www.gnu.org/copyleft/gpl.html GNU/GPLv3 or later
 * @link		http://jvitals.com
 */

// no direct access
defined('_JEXEC') or die('Restricted access');

echo $this->html->wrapperStart();

if ((int)$this->params->get('show_page_heading', 0)) : ?>
<div class="componentheading<?php echo $this->escape($this->params->get('pageclass_sfx')); ?>">
	<h1><?php echo $this->escape($this->params->get('page_heading')); ?></h1>
</div>
<?php endif;  ?>
<?php if (trim($this->conf->html_before_profile)) : ?><div class="clrboth fltnone"><?php echo $this->conf->html_before_profile; ?></div><?php endif; ?>
<?php erHelperJavascript::OnDomBegin('', false); ?>
<noscript><?php echo JText::_('COM_EXTENDEDREG_NOSCRIPT_WARNING'); ?></noscript>
<div class="extreg_forms">
<?php echo $this->formHTML; ?>
</div>
<?php if (trim($this->conf->html_after_profile)) : ?><div class="clrboth fltnone"><?php echo $this->conf->html_after_profile; ?></div><?php endif; ?>

<?php 

erHelperJavascript::OnDomReady('', false);

echo $this->html->wrapperEnd();