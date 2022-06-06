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
            <?= $this->Html->link(__('List Tests'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="tests form content">
            <?= $this->Form->create($test) ?>
            <fieldset>
                <legend><?= __('Add Test') ?></legend>
                <?php
                    echo $this->Form->control('question');
                    echo $this->Form->control('answer1');
                    echo $this->Form->control('answer2');
                    echo $this->Form->control('answer3');
                    echo $this->Form->control('answer4');
                    echo $this->Form->control('rightanswer');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
