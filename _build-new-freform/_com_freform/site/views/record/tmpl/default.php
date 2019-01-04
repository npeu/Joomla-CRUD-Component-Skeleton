<?php
// No direct access to this file
defined('_JEXEC') or die('Restricted access');

// Set page title
$page_title = $this->item->title;

$skip = array(
    'id',
    'title'
);
?>
<h1><?php echo $page_title ?></h1>

<?php foreach ($this->form->getFieldsets() as $name => $fieldset): ?>
<?php /*<h2><?php echo JText::_($fieldset->label); ?></h2>*/ ?>
<dl>
    <?php foreach ($this->form->getFieldset($name) as $field): if(!in_array($field->fieldname, $skip)): ?>
    <dt><?php echo JText::_($field->getAttribute('label')); ?></dt>
    <dd><?php echo $field->value; ?></dd>
    <?php endif; endforeach; ?>
</dl>
<?php endforeach; ?>
<p>
    <a href="<?php echo JRoute::_('index.php?option=com__freform&task=record.edit&id=' . $this->item->id); ?>">
        <?php echo JText::_('COM_FREFORM_RECORDS_ACTION_EDIT'); ?>
    </a>
</p>
<p>
    <a href="<?php echo JRoute::_('index.php?option=com__freform'); ?>">Back</a>
</p>