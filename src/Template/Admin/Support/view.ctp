<?php

$this->extend('Croogo/Core./Common/admin_view');

$this->Breadcrumbs
    ->add(__d('croogo', 'Support'), ['action' => 'index']);

    $this->Breadcrumbs->add($support->name, $this->request->here());

$this->append('action-buttons');
    echo $this->Croogo->adminAction(__('Edit Support'), ['action' => 'edit', $support->id]);
    echo $this->Croogo->adminAction(__('Delete Support'), ['action' => 'delete', $support->id], ['confirm' => __('Are you sure you want to delete # {0}?', $support->id)]);
    echo $this->Croogo->adminAction(__('List Support'), ['action' => 'index']);
    echo $this->Croogo->adminAction(__('New Support'), ['action' => 'add']);
$this->end();

$this->append('main');
?>
<div class="support view large-9 medium-8 columns">
    <table class="table vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($support->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($support->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Status') ?></th>
            <td><?= $this->Number->format($support->status) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Priority') ?></th>
            <td><?= $this->Number->format($support->priority) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cost') ?></th>
            <td><?= $this->Number->format($support->cost) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($support->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($support->modified) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Deadline') ?></th>
            <td><?= h($support->deadline) ?></td>
        </tr>
    </table>
    <div>
        <label>
            <strong><?= __('Description') ?></strong>
        </label>
        <?= $this->Text->autoParagraph(h($support->description)); ?>
    </div>
</div>
<?php
$this->end();
