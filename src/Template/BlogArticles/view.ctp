<?php $this->layout = 'front'; ?>
<?= $this->Html->css('../assets/global/plugins/bootstrap/css/bootstrap.min.css') ?>
<?= $this->Html->css('forum-styles.css') ?>
<?= $this->Html->css('../assets/global/css/components.min.css') ?>
<?= $this->Html->css('../assets/css/animate.css') ?>
<?= $this->Html->css('../assets/global/plugins/font-awesome/css/font-awesome.min.css') ?>
<?= $this->Html->css('../assets/css/font-awesome.css') ?>
<?= $this->Html->css('../assets/css/nexus.css') ?>
<?= $this->Html->css('../assets/css/responsive.css') ?>
<?= $this->Html->css('../assets/css/custom.css') ?>

<div class="row margin-vert-30" style="border: 2px solid rgba(228, 228, 228, 0.42) ">
    <div class="col-md-9">
            <div class="blog-post">
                <div class="blog-item-header">
                    <div class="blog-post-date pull-left"><span class="day"><?= h($blogArticle->modified->day) ?></span>
                        <span
                            class="month"><?= h($blogArticle->modified->i18nFormat('MMM', 'Europe/Paris', 'fr-FR')); ?></span>
                    </div>
                    <h2><a href="#"><?= h($blogArticle->title) ?></a></h2>
                    <div class="blog-post-details">
                        <div
                            class="blog-post-details-item blog-post-details-item-left blog-post-details-tags tags-icon">
                            <i class="fa fa-tag"></i>
                            <a href="#"><?= h($blogArticle->blog_category->name) ?></a>
                        </div>
                    </div>
                    <div class="blog">
                        <div class="clearfix"></div>
                        <div class="blog-post-body row margin-top-15">
                            <div class="col-md-5">
                                <?= $this->html->image("../uploads/imgs/" . $blogArticle->picture,['class'=>"pull-left img-reponsive"]) ?>
                            </div>
                            <div class="col-md-7">
                                <p><?=h($blogArticle->body) ?></p>
                            </div>
                        </div>
                        <div class="blog-item-footer">
                            <div class="row">
                                <div class="col-md-10">
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>




    <div class="margin-top-30">
        <div class="col-md-3" style="background-color: #f0eef3;border-radius: 12px / 65px;box-shadow: 0 2px 5px #555; color: black;">
            <div class="recent-posts">
                <h3>Derniers postes</h3>
                <ul class="posts-list margin-top-10">
                    <?php foreach ($last_news as $last_new): ?>

                        <li>
                            <div class="recent-post"><a href=<?=$this->Url->build( ['controller' => 'BlogCategories', 'action' => 'view', $last_new->id]);?>>
                                    <?= $this->html->image("../uploads/imgs/" . $last_new->picture,[
                                        'class'=>"pull-left img-responsive",
                                        'alt'=>"news images",
                                        'style'=>'max-width:50px;'
                                    ]) ?>
                                    <a  class="posts-list-title" href=<?=$this->Url->build(
                                        ['controller' => 'BlogCategories',
                                            'action' => 'view', $last_new->id]);?>>
                                        <?=h($last_new->title);?></a>
                                </a><br>
                                <span class="recent-post-date"><?= h($last_new->modified->i18nFormat('MMM,dd,yyyy', 'Europe/Paris', 'fr-FR')); ?></span></div>
                            <div class="clearfix"></div>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
    </div>
</div>
