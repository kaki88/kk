<div class="col-md-12">
    <?= $this->Html->link($forum->name, ['controller' => 'Forums', 'action' => 'view', $forum->id])  ?>
</div>
<div class="col-md-12 voffset2">

<div class="right">
    <a href="<?= $this->Url->build([ 'controller' => 'Threads', 'action' => 'add' , $forum->id]); ?>"
       class="btn btn-success " role="button" aria-pressed="true"> <i class="fa fa-plus"></i> CREER UN SUJET</a>
</div>

<div class="row"></div>
<div class="table-responsive voffset2">
    <?php if (!empty($forum->threads)): ?>
    <table class="table">
        <tr>
            <th scope="col" class="category" colspan="5"><?= h($forum->name) ?></th>
        </tr>
        <tr class="ssthead">
            <th scope="col" >Sujets / Auteurs</th>
            <th scope="col" >Réponses</th>
            <th scope="col" >Vues</th>
            <th scope="col" >Derniers messages</th>
            <th scope="col" ></th>
        </tr>
        <?php foreach ($forum->threads as $threads): ?>
        <tr class="sscategory">
            <td width="50%"><?= $this->Html->link(__($threads->subject), ['controller' => 'Threads','action' => 'view', $threads->id]) ?>
            <br> par <?= h($threads->user->username) ?></td>
            <td width="10%"><?= count($threads->posts) ?></td>
            <td width="10%" ><?= $threads->countview ?></td>
            <td width="25%">

            <?php if ($threads->lastpost) : ?>
            le <?= $threads->lastpost->i18nformat('dd/MM/YY à HH:mm', 'Europe/Paris') ?>
                <br> par <?= $threads->lastuserthread->username ?> </br>

            <?php else: ?>
            Aucun Message
            <?php endif ?>
            </td>
            <td width="5%" class="actions">
                <?= $this->Form->postLink(__('<i class="fa fa-times"></i>'),[ 'controller' => 'Threads'
                , 'action' => 'delete' , $threads->id],['escape'=>false , 'class'=>'btn btn-sm btn-danger']); ?>
            </td>



        </tr>
        <?php endforeach; ?>
    </table>
    <?php endif; ?>
    <div class="right">
        <a href="<?= $this->Url->build([ 'controller' => 'Threads', 'action' => 'add' , $forum->id]); ?>"
           class="btn btn-success " role="button" aria-pressed="true"> <i class="fa fa-plus"></i> CREER UN SUJET</a>
    </div>
</div>
</div>

