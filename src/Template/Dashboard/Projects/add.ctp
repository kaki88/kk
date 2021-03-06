
<?= $this->Html->css('multi-select.css') ?>


<div id="taskModal" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">×</button>
                <div class="tasks form large-9 medium-8 columns content">
                    <?= $this->Form->create($project) ?>
                    <fieldset>
                        <legend><?= __('Créer un projet') ?></legend>
                        <div class="form-group">
                        <?php
                        echo $this->Form->input('name', ['class' => 'form-control', 'label' => 'Nom du projet']);
                        echo $this->Form->input('description', ['class' => 'form-control', 'label' => 'Description']);
                        echo $this->Form->input('users_number', ['class' => 'form-control', 'label' => 'Nombre de membres']);
                        echo $this->Form->input('start_date', ['type' => 'text', 'id' => 'start', 'class' => 'form-control', 'label' => 'Date de début']);
                        echo $this->Form->input('end_date', ['type' => 'text', 'id' => 'end', 'class' => 'form-control', 'label' => 'Date de fin']);
                        echo $this->Form->input('users._ids', ['options' => $users, 'class' => 'multi-select', 'label' => 'Inscription des membres du projet']);
                        ?>
                            </div>
                    </fieldset>
                    <?= $this->Form->button(__('Créer'), ['class' => 'btn btn-default']) ?>
                    <?= $this->Form->end() ?>

                </div>
                <!--<div class="modal-footer">
                    <button class="btn" data-dismiss="modal">Annuler</button>
                </div>-->
            </div>
        </div>
    </div>
    <?= $this->Html->css('../assets/global/plugins/jquery-ui/jquery-ui.min.css') ?>
    <?= $this->Html->script('../assets/global/plugins/jquery-ui/jquery-ui.min.js') ?>
    <?= $this->Html->script('jquery.datetimepicker.full.min.js') ?>
    <?= $this->Html->css('jquery.datetimepicker.css') ?>



    <?= $this->Html->script('jquery.multi-select.js') ?>



    <script>
        $('.multi-select').multiSelect();
    </script>


    <script>


        //datetimepicker on date fields
        //todo: fix startdate
        $('#start').datetimepicker({
            timepicker:false,
            format: "Y-m-d"
        });

        $('#end').datetimepicker({
            timepicker:false,
            format: "Y-m-d"
        });

    </script>