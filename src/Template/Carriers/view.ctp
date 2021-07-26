<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Carrier $carrier
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Carrier'), ['action' => 'edit', $carrier->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Carrier'), ['action' => 'delete', $carrier->id], ['confirm' => __('Are you sure you want to delete # {0}?', $carrier->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Carriers'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Carrier'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Patients'), ['controller' => 'Patients', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Patient'), ['controller' => 'Patients', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="carriers view large-9 medium-8 columns content">
    <h3><?= h($carrier->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($carrier->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Carrier Code') ?></th>
            <td><?= h($carrier->carrier_code) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($carrier->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($carrier->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($carrier->modified) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Patients') ?></h4>
        <?php if (!empty($carrier->patients)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Carrier Id') ?></th>
                <th scope="col"><?= __('Name') ?></th>
                <th scope="col"><?= __('Phone') ?></th>
                <th scope="col"><?= __('Address') ?></th>
                <th scope="col"><?= __('City') ?></th>
                <th scope="col"><?= __('Zipcode') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($carrier->patients as $patients): ?>
            <tr>
                <td><?= h($patients->id) ?></td>
                <td><?= h($patients->carrier_id) ?></td>
                <td><?= h($patients->name) ?></td>
                <td><?= h($patients->phone) ?></td>
                <td><?= h($patients->address) ?></td>
                <td><?= h($patients->city) ?></td>
                <td><?= h($patients->zipcode) ?></td>
                <td><?= h($patients->created) ?></td>
                <td><?= h($patients->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Patients', 'action' => 'view', $patients->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Patients', 'action' => 'edit', $patients->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Patients', 'action' => 'delete', $patients->id], ['confirm' => __('Are you sure you want to delete # {0}?', $patients->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
