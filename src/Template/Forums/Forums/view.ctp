<div class="col-md-12">
    <?= $this->Html->link($forum->name, ['controller' => 'Forums', 'action' => 'view', $forum->id])  ?>
</div>
<div class="col-md-12 voffset2">

<div class="right">
<a href="<?= $this->Url->build([ 'controller' => 'Threads', 'action' => 'add' , $forum->id]); ?>" class="btn btn-success " role="button" aria-pressed="true">NOUVEAU SUJET</a>
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
            <td width="25%">le <br> par </br></td>
            <td width="5%" class="actions">
                <?= $this->Html->link(__('View'), ['controller' => 'Threads', 'action' => 'view', $threads->id]) ?>
                <?= $this->Html->link(__('Edit'), ['controller' => 'Threads', 'action' => 'edit', $threads->id]) ?>
                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Threads', 'action' => 'delete', $threads->id], ['confirm' => __('Are you sure you want to delete # {0}?', $threads->id)]) ?>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
    <?php endif; ?>
    <div class="right">
        <a href="<?= $this->Url->build([ 'controller' => 'Threads', 'action' => 'add' , $forum->id]); ?>" class="btn btn-success " role="button" aria-pressed="true">NOUVEAU SUJET</a>
    </div>
</div>
</div>

<script>
$('tr').click( function() {
    window.location = $(this).find('a').attr('href');
})

</script>