<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $support->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $support->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Support'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="support form large-9 medium-8 columns content">
    <?= $this->Form->create($support) ?>
    <fieldset>
        <legend><?= __('Edit Support') ?></legend>
        <?php
            echo $this->Form->control('name');
            echo $this->Form->control('description');
            echo $this->Form->control('status');
            echo $this->Form->control('priority');
            echo $this->Form->control('deadline');
            echo $this->Form->control('cost');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
