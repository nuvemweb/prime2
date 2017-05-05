<div class='col-xs-12'>
    <div class='page-header page-header-with-buttons'>
        <h1 class='pull-left'>
            <i class='icon-user'></i>
            <span><?php echo __('Anuncios'); ?></span>
        </h1>
    </div>
</div>

<div class='row'>
    <div class='col-sm-12'>
        <div class='box'>
            <div class='box-content'>
                <div class="cursos form">
                    <?php echo $this->Form->create('Anuncio', $this->FormAdmin->formConfigs); ?>
                    	<?php
        echo $this->Form->input('id');
		echo $this->Form->input('anunciante');
        echo $this->Form->input('telefone');
        echo $this->Form->input('preco');
        echo $this->Form->input('titulo');
        echo $this->Form->input('categoria', array('options' => array("animais" => "animais", "automoveis" => "automóveis", "bicicletas" => "bicicletas", "caminhoes" => "caminhões", "celulares" => "celulares", "computadores" => "computadores", "construcao" => "construção", "diversos" => "diversos", "eletrodomesticos" => "eletrodomésticos", "empregos" => "empregos", "imoveis" => "imóveis", "maquinas" => "máquinas", "motos" => "motos", "multimidia" => "multimídia", "servicos" => "serviços"  ), 'empty' => 'Selecione')); 
        
        echo $this->Form->input('descricao'); 
        echo $this->Form->input('destaque', array('options' => array(1 => "Sim", 0 => "Não"), 'empty' => 'Selecione'));
        echo $this->Form->input('liberado', array('options' => array(1 => "Sim", 0 => "Não"), 'empty' => 'Selecione'));
		echo $this->Form->input("imagem", array('type' => 'file', "accept" => "image/gif, image/png, image/jpeg"));

         

	?>
          <?php if ($this->request->data["Anuncio"]["imagem"] != "") { ?>
                    <div class="form-group">
                        <label class="col-md-2 control-label" for="arquivo">Imagem atual</label>
                        <div class="col-md-5 controls">
                            <?php echo $this->Html->image('../../site/upload/anuncio/' . $this->request->data["Anuncio"]["id"] . '/s_' . $this->request->data["Anuncio"]["imagem"]); ?>
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