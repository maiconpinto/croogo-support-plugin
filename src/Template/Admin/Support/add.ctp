<?php
/**
  * @var \App\View\AppView $this
  */
?>
<?php

$this->extend('Croogo/Core./Common/admin_edit');

$this->Breadcrumbs->add(__('Support'), ['action' => 'index']);
$action = $this->request->param('action');

if ($action == 'edit'):
    $this->Breadcrumbs->add($support->name);
else:
    $this->Breadcrumbs->add(__d('croogo', 'Add'), $this->request->here());
endif;

$this->append('action-buttons');
    echo $this->Croogo->adminAction(__('List Support'),
        ['action' => 'index']
    );
$this->end();
$this->append('form-start', $this->Form->create($support));

$this->append('tab-heading');
    echo $this->Croogo->adminTab('Support', '#support');
$this->end();

$this->append('tab-content');
    echo $this->Html->tabStart('support');
        echo $this->Form->input('name');
        echo $this->Form->input('description');
        echo $this->Form->input('status');
        echo $this->Form->input('priority');
        echo $this->Form->input('deadline');
        echo $this->Form->input('cost');
    echo $this->Html->tabEnd();
$this->end();
