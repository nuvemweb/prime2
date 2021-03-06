<div class='col-xs-12'>
    <div class='page-header page-header-with-buttons'>
        <h1 class='pull-left'>
            <i class='fa fa-address-card-o' aria-hidden='true'></i>
            <span><?php echo __(' Publicidades'); ?></span>
        </h1>
    </div>
</div>

<div class='row'>
    <div class='col-sm-12'>
        <div class='box'>
            <div class='box-content'>
                <div class="destaques form">
                    <?php echo $this->Form->create('Publicidade', $this->FormAdmin->formConfigs); ?>
                        <?php
                        echo $this->Form->input('id');
                        echo $this->Form->input('nome');
                        echo $this->Form->input('link');
                        echo $this->Form->input('local', array('options' => array("hometopo" => "hometopo", "homelateral" => "homelateral", "homecentro1" => "homecentro1", "homecentro2" => "homecentro2", "galeria" => "galeria", "contatolateral" => "contatolateral", "contatofim" => "contatofim", "parceiros" => "parceiros"), 'empty' => 'Selecione')); 
                        echo $this->Form->input("imagem", array('type' => 'file', "accept" => "image/gif, image/png, image/jpeg"));
                    ?>  
                    <?php if ($this->request->data["Publicidade"]["imagem"] != "") { ?>
                    <div class="form-group">
                        <label class="col-md-2 control-label" for="arquivo">Imagem atual</label>
                        <div class="col-md-5 controls">
                            <?php echo $this->Html->image('../../site/upload/publicidades/' . $this->request->data["Publicidade"]["id"] . '/s_' . $this->request->data["Publicidade"]["imagem"]); ?>
                        </div>
                    </div>
                    <?php } ?>
                    <div class='form-actions form-actions-padding-sm'>
                        <div class='row'>
                            <div class='col-md-10 col-md-offset-2'>
                                <button class='btn btn-primary BtnSubmit' type='submit'>
                                    <i class='icon-save'></i>
                                    Salvar
                                </button>
                                <?php echo $this->Html->link('Cancelar', array('action' => 'index'), array('class' => 'btn'));?>
                            </div>
                        </div>
                    </div>
                    <?php echo $this->Form->end(); ?>
                </div>
            </div>
        </div>
    </div>
</div>