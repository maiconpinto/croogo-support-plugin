<?php

$this->extend('Croogo/Core./Common/admin_index');
$this->Breadcrumbs->add(__('Support'), ['action' => 'index']);

$this->append('action-buttons');
    echo $this->Croogo->adminAction(__('New Support'), ['action' => 'add']);
$this->end();

$this->append('table-heading');
?>
<thead>
    <tr>
        <th scope="col"><?= $this->Paginator->sort('id') ?></th>
        <th scope="col"><?= $this->Paginator->sort('created') ?></th>
        <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
        <th scope="col"><?= $this->Paginator->sort('name') ?></th>
        <th scope="col"><?= $this->Paginator->sort('status') ?></th>
        <th scope="col"><?= $this->Paginator->sort('priority') ?></th>
        <th scope="col"><?= $this->Paginator->sort('deadline') ?></th>
        <th scope="col"><?= $this->Paginator->sort('cost') ?></th>
        <th scope="col" class="actions"><?= __('Actions') ?></th>
    </tr>
</thead>
<?php
$this->end();

$this->append('table-body');

?>
<tbody>
    <?php foreach ($support as $support): ?>
        <?php $actions = []; ?>
    <tr>
        <td><?= $this->Number->format($support->id) ?></td>
        <td><?= h($support->created) ?></td>
        <td><?= h($support->modified) ?></td>
        <td><?= h($support->name) ?></td>
        <td><?= $this->Number->format($support->status) ?></td>
        <td><?= $this->Number->format($support->priority) ?></td>
        <td><?= h($support->deadline) ?></td>
        <td><?= $this->Number->format($support->cost) ?></td>
<?php
        $actions[] = $this->Croogo->adminRowActions($support->id);
        $actions[] = $this->Croogo->adminRowAction('', ['action' => 'view', $support->id], ['icon' => 'read']);
        $actions[] = $this->Croogo->adminRowAction('', ['action' => 'edit', $support->id], ['icon' => 'update']);
        $actions[] = $this->Croogo->adminRowAction('', ['action' => 'delete', $support->id], ['icon' => 'delete']);
?>
        <td class="actions">
            <div class="item-actions">
            <?= implode(' ', $actions); ?>
            </div>
        </td>
    </tr>
    <?php endforeach; ?>
</tbody>
<?php

$this->end();

?>
