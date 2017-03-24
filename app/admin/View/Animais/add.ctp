<div class='col-xs-12'>
    <div class='page-header page-header-with-buttons'>
        <h1 class='pull-left'>
            <i class='icon-user'></i>
            <span><?php echo __('Animais'); ?></span>
        </h1>
    </div>
</div>

<div class='row'>
    <div class='col-sm-12'>
        <div class='box'>
            <div class='box-content'>
                <div class="animais form">
                    <?php echo $this->Form->create('Animal', $this->FormAdmin->formConfigs); ?>
                    	<?php
		echo $this->Form->input('nome');
		echo $this->Form->input('descricao');
        

		echo $this->Form->input('imagem', array('class' => '','type' => 'file','accept' => 'image/gif, image/png, image/jpeg','label' => array('text' => 'Imagem','class' => 'col-md-2 control-label')));
        echo $this->Form->input('video');
	?>
         <span style="margin-left:182px; color:#FFB14E">Informe o código do vídeo vindo do youtube</span><br>
                    <span style="margin-left:182px; color:#FFB14E"><u>Exemplo</u>: https://www.youtube.com/watch?v=<strong><u>U8G4FhyTw5o</strong></u></span>

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