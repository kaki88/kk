<div class="col-md-12 col-sm-12 col-xs-12">


    <div class="portlet-body">

        <div class="mt-element-list">
            <div class="col-md-4 col-sm-4 col-xs-4 colum">
                <div class="mt-list-head list-simple ext-1 font-white bg-blue">
                    <div class="list-head-title-container">
                        <h4 class="list-title">
                            TODO
                        </h4>
                    </div>
                </div>
                <div id="colum-1" class="colum">
                    <?php foreach ($project->tasks as $task): ?>
                        <?php if ($task->state->name === 'todo'): ?>
                            <div id="task-<?= $task->id ?>"
                                 class="mt-list-container list-simple ext-1 group portle">
                                <a class="list-toggle-container portlet-header"
                                   data-toggle="collapse"
                                   href="#pending-simple<?= $task->id ?>"
                                   aria-expanded="false">

                                    <div
                                        class="list-toggle uppercase"> <?= $task->name ?>

                                    </div>

                                </a>
                                <div class="panel-collapse collapse"
                                     id="pending-simple<?= $task->id ?>"
                                     aria-expanded="false">
                                    <ul>
                                        <li class="mt-list-item">
                                            <div class="list-icon-container pull-right">
                                                <?= $this->Form->postLink('<i class="glyphicon glyphicon-trash"></i>', ['controller' => 'Tasks', 'action' => 'delete', $task->id], ['class' => 'btn', 'escape' => false], ['confirm' => __('Are you sure you want to delete # {0}?', $task->id)]) ?>
                                            </div>
                                            <div class="list-icon-container pull-right">
                                                <?= $this->Html->link('<i class="glyphicon glyphicon-pencil"></i>', ['controller' => 'Tasks', 'action' => 'edit', $task->id], ['id' => 'task-' . $task->id, 'class' => 'btn edittask', 'escape' => false]) ?>
                                            </div>

                                            <div class="list-item-content">
                                                <p><?= $task->description ?></p>
                                                <div
                                                    class="list-datetime"> <?= $task->start_date ?>
                                                    au <?= $task->end_date ?></div>

                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        <?php endif; ?>
                    <?php endforeach; ?>
                    <div class="portlet portlet-sortable-empty"></div>
                </div>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-4">
                <div class="mt-list-head list-simple ext-1 font-white bg-yellow-soft">
                    <div class="list-head-title-container">
                        <h4 class="list-title">DOING</h4>
                    </div>
                </div>

                <div id="colum-2" class="colum">
                    <?php foreach ($project->tasks as $task): ?>
                        <?php if ($task->state->name === 'doing'): ?>
                            <div id="task-<?= $task->id ?>"
                                 class="mt-list-container list-simple ext-1 group">
                                <a class="list-toggle-container portlet-header"
                                   data-toggle="collapse"
                                   href="#pending-simple<?= $task->id ?>"
                                   aria-expanded="true">
                                    <div
                                        class="list-toggle uppercase"> <?= $task->name ?>
                                    </div>

                                </a>
                                <div class="panel-collapse collapse"
                                     id="pending-simple<?= $task->id ?>"
                                     aria-expanded="true">
                                    <ul>
                                        <li class="mt-list-item">
                                            <div class="list-icon-container pull-right">
                                                <?= $this->Form->postLink('<i class="glyphicon glyphicon-trash"></i>', ['controller' => 'Tasks', 'action' => 'delete', $task->id], ['class' => 'btn', 'escape' => false], ['confirm' => __('Are you sure you want to delete # {0}?', $task->id)]) ?>
                                            </div>
                                            <div class="list-icon-container pull-right">
                                                <?= $this->Html->link('<i class="glyphicon glyphicon-pencil"></i>', ['controller' => 'Tasks', 'action' => 'edit', $task->id], ['id' => 'task-' . $task->id, 'class' => 'btn edittask', 'escape' => false]) ?>
                                            </div>
                                            <div class="list-item-content">
                                                <p><?= $task->description ?></p>
                                                <div
                                                    class="list-datetime"> <?= $task->start_date ?>
                                                    au <?= $task->end_date ?></div>

                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        <?php endif; ?>
                    <?php endforeach; ?>
                    <div class="portlet portlet-sortable-empty"></div>
                </div>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-4">
                <div class="mt-list-head list-simple ext-1 font-white bg-green-jungle">
                    <div class="list-head-title-container">
                        <h4 class="list-title">DONE</h4>
                    </div>
                </div>
                <div id="colum-3" class="colum">
                    <?php foreach ($project->tasks as $task): ?>
                        <?php if ($task->state->name === 'done'): ?>
                            <div id="task-<?= $task->id ?>"
                                 class="mt-list-container list-simple ext-1 group">
                                <a class="list-toggle-container portlet-header"
                                   data-toggle="collapse"
                                   href="#pending-simple<?= $task->id ?>"
                                   aria-expanded="true">
                                    <div
                                        class="list-toggle uppercase"> <?= $task->name ?>
                                    </div>
                                </a>
                                <div class="panel-collapse collapse"
                                     id="pending-simple<?= $task->id ?>"
                                     aria-expanded="true">
                                    <ul>
                                        <li class="mt-list-item">
                                            <div class="list-icon-container pull-right">
                                                <?= $this->Form->postLink('<i class="glyphicon glyphicon-trash"></i>', ['controller' => 'Tasks', 'action' => 'delete', $task->id], ['class' => 'btn', 'escape' => false], ['confirm' => __('Are you sure you want to delete # {0}?', $task->id)]) ?>
                                            </div>
                                            <div class="list-icon-container pull-right">
                                                <?= $this->Html->link('<i class="glyphicon glyphicon-pencil"></i>', ['controller' => 'Tasks', 'action' => 'edit', $task->id], ['id' => 'task-' . $task->id, 'class' => 'btn edittask', 'escape' => false]) ?>
                                            </div>
                                            <div class="list-item-content">
                                                <p><?= $task->description ?></p>
                                                <div
                                                    class="list-datetime"> <?= $task->start_date ?>
                                                    au <?= $task->end_date ?></div>

                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        <?php endif; ?>
                    <?php endforeach; ?>
                    <div class="portlet-sortable-empty ui-state-disabled"></div>

                </div>
            </div>
        </div>
    </div>

</div>


<style>
    .ui-state-highlight {
        height: 3em;
        line-height: 1.2em;
    }
</style>
<script>

    //sortable stuff
    $("#colum-1, #colum-2, #colum-3").sortable({

        connectWith: ".colum",
        handle: ".portlet-header",
        cancel: ".portlet-toggle",
        placeholder: "ui-state-highlight",
        receive: function (event, ui) {
            //gets taks id and column id aka state id
            var elemID = ui.item.attr('id').split('-');
            var newPos = $(this).attr('id').split('-');

            //populates data for ajax post
            var data = {
                state_id: parseInt(newPos[1])
            };
            //ajax post
            $.ajax({
                type: "POST",
                data: data,
                url: '<?= $this->Url->build(["controller" => "Tasks", "action" => "editation"]); ?>' + '/' + elemID[1]
            });
        }
    });


    $(".portlet-toggle").on("click", function () {
        var icon = $(this);
        icon.toggleClass("ui-icon-minusthick ui-icon-plusthick");
        icon.closest(".portlet").find(".portlet-content").toggle();
    });
</script>
