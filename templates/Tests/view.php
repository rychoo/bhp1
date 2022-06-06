<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Test $test
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Test'), ['action' => 'edit', $test->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Test'), ['action' => 'delete', $test->id], ['confirm' => __('Are you sure you want to delete # {0}?', $test->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Tests'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Test'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="tests view content">
            <h3><?= h($test->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Rightanswer') ?></th>
                    <td><?= h($test->rightanswer) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($test->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($test->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($test->modified) ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Question') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($test->question)); ?>
                </blockquote>
            </div>
            <div class="text">
                <strong><?= __('Answer1') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($test->answer1)); ?>
                </blockquote>
            </div>
            <div class="text">
                <strong><?= __('Answer2') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($test->answer2)); ?>
                </blockquote>
            </div>
            <div class="text">
                <strong><?= __('Answer3') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($test->answer3)); ?>
                </blockquote>
            </div>
            <div class="text">
                <strong><?= __('Answer4') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($test->answer4)); ?>
                </blockquote>
            </div>
        </div>
    </div>
</div>
