<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Detail $detail
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Detail'), ['action' => 'edit', $detail->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Detail'), ['action' => 'delete', $detail->id], ['confirm' => __('Are you sure you want to delete # {0}?', $detail->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Details'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Detail'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="details view large-9 medium-8 columns content">
    <h3><?= h($detail->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($detail->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Location') ?></th>
            <td><?= h($detail->location) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($detail->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Calories') ?></th>
            <td><?= $this->Number->format($detail->calories) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cost') ?></th>
            <td><?= $this->Number->format($detail->cost) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($detail->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($detail->modified) ?></td>
        </tr>
    </table>
</div>
