<?php
use \MapasCulturais\i;
?>
<div class="registration-fieldset">
    <h4>Alterar tipo de Avaliação</h4>
    <select type="text" id="opportunityType">
        <?php foreach ($opportunityTypes as $type) { ?>
            <option value="<?= $type[0] ?>" <?= $type[0] === $currentType->id ?? 'selected' ?>><?= $type[1] ?></option>
        <?php } ?>
    </select>

    <a class="btn btn-primary js-open-dialog" href="javascript:void(0)"
       data-dialog-block="true" data-dialog="#dialog-confirm-change" data-dialog-callback="MapasCulturais.addEntity"
       data-form-action='insert' data-dialog-title="<?php \MapasCulturais\i::esc_attr_e('Modal de Entidade'); ?>"
       id="editTypeConfirm"
    >Confirmar alteração</a>

    <div id="dialog-confirm-change" class="js-dialog" style="z-index:1901">
        <div class="js-dialog-content js-dialog-event-occurrence">
            <h3>
                Você tem certeza que deseja alterar o tipo de avaliação dessa oportunidade de <br>
                <span class="text-danger"><?= $currentType->name ?></span> para <span id="newOpportunityTypeShow" class="text-danger"></span>?
            </h3>

            <button class="js-close btn btn-primary" value=true>Sim</button>
            <button class="js-close btn btn--secondary">Cancelar</button>
        </div>
    </div>
</div>
