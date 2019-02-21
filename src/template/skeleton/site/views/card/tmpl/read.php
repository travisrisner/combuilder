<?php declare(strict_types = 1);
/**
 * This file contains the layout and supporting logic for the component's
 * "Item" view and is used exclusively by the `ViewItem` class.
 *
 * @author     {{author}} <{{email}}>
 * @copyright  2018 {{author}}. All rights reserved.
 * @license    GNU General Public License v3 (GPL-3.0).
 */

// Prevent direct access to this file according to Joomla! best practices
defined('_JEXEC') or exit;

use Joomla\CMS\Language\Text;
?>
<h1><?= $this->escape($this->card->name ?? '') ?></h1>
<div>
  <span style='font-weight: bold'>
    <?= $this->escape(Text::_('COM_{{NAME}}_CARD_COL_PHONE')) ?>:
  </span>
  <code><?= $this->escape($this->card->phone ?? '') ?></code>
</div>
