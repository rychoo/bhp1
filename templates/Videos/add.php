<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Video $video
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Videos'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="videos form content">
            <?= $this->Form->create($video, ['type' => 'file']) ?>
            <fieldset>
                <legend><?= __('Add Video') ?></legend>
                <?php
                    echo $this->Form->control('title');
                    echo $this->Form->control('slug');
                    echo $this->Form->control('body');
                    echo $this->Form->control('filename', ['type' => 'file']);
                    echo $this->Form->control('picturename', ['type' => 'file']);
                    echo $this->Form->control('published');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
