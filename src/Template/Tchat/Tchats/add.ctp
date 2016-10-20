<div class="row">
    <div class="row_tchat"><?= $this->Html->image('Preloader_3.gif',['class'=>'lod']) ?></div>
</div>
<div class="count"></div>
<hr>
<div class="row">
    <div class="container">
        <?= $this->Form->create($tchat) ?>
        <fieldset>
            <?= $this->Form->input('message', ['type' => 'text', 'class' => 'col-md-11 in', 'label' => false, 'placeholder' => 'Message', 'id' => 'mess']) ?>
            <div class="col-md-1 btn btn-primary" id="but">Envoyer</div>
        </fieldset>
        <?= $this->Form->end() ?>
    </div>
</div>
<style>
    .lod{
        margin-left: 45%;
    }
    fieldset {
        -webkit-box-shadow: 10px 15px 15px 0px rgba(0, 0, 0, 0.30);
        -moz-box-shadow: 10px 15px 15px 0px rgba(0, 0, 0, 0.30);
        box-shadow: 10px 15px 15px 0px rgba(0, 0, 0, 0.30);
    }

    .error-message {
        display: none;
    }

    .in {
        display: inline-block;
        height: 35px;
        border: none;
    }

    .date {
        font-size: 11px;
        color: black;
    }

    .lui {
        margin-top: 2%;
        left: 10px;
        position: relative;
        width: 180px;
        height: auto;
        padding: 0px;
        background: #0c5eff;
        border-radius: 10% !important;
    }

    .lui:after {
        content: '';
        position: absolute;
        border-style: solid;
        border-width: 15px 15px 15px 0;
        border-color: transparent #0c5eff;
        display: block;
        width: 0;
        z-index: 1;
        left: -12px;
        top: 25px;
    }

    .moi {
        margin-top: 2%;
        left: 83%;
        position: relative;
        width: 180px;
        height: auto;
        padding: 0px;
        background: #00A000;
        border-radius: 10px !important;
    }

    .moi:after {
        content: '';
        position: absolute;
        border-style: solid;
        border-width: 15px 0 15px 15px;
        border-color: transparent #00A000;
        display: block;
        width: 0;
        z-index: 1;
        right: -12px;
        top: 25px;
    }

    p a {
        color: white;
        text-decoration: none;
        text-transform: capitalize;
    }

    .pad {
        padding: 10px;
    }

    hr, p {
        font-size: 11px;
        margin: 20px 0;
        margin-bottom: 0;
        word-wrap: break-word;

    }

    .message {
        font-size: 18px;
        margin: 0 0;
    }
</style>
<script>
    $('.in').removeAttr('required');
    $(function () {
        $("#but").on('click', function () {
            $.ajax({
                url: "<?= $this->Url->build(['controller' => 'Tchats', 'action' => 'add'])?>",
                data: {message: $("#mess").val()},
                dataType: 'html',
                type: 'post'
            });
            tchat = $('.tchat');
            $('.count').load('/tchat/tchats/counttchat');
            tchat.scrollTop(tchat[0].scrollHeight);
        });
    });
    setInterval(function () {
        $('.count').load('/tchat/tchats/counttchat');
    }, 500);
    setInterval(function () {

        var countay = $('.count p');
        var countay_message = $('.countay_message');
        if (countay.attr('data') != countay_message.attr('countay_message')) {


            $('.row_tchat').load('/tchat');
            $('.in').val('');

        } else if (countay.attr('data') == countay_message.attr('hjh')) {
            return false;
        }
    }, 700);
</script>