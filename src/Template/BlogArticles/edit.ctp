<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $blogArticle->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $blogArticle->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Blog Articles'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Blog Categories'), ['controller' => 'BlogCategories', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Blog Category'), ['controller' => 'BlogCategories', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="blogArticles form large-9 medium-8 columns content">
    <?= $this->Form->create($blogArticle) ?>
    <fieldset>
        <legend><?= __('Edit Blog Article') ?></legend>
        <?php
            echo $this->Form->input('title', ['class' => 'form-control']);
            echo $this->Form->input('body', ['class' => 'form-control']);
            echo $this->Form->input('blog_category_id', ['options' => $blogCategories, 'empty' => true, 'class' => 'form-control']);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit'), ['class' => 'btn btn-info']) ?>
    <?= $this->Form->end() ?>
</div>