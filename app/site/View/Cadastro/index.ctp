<div class="col-md-12 fundo-subpaginas">
	<div class="container">
		<div class="titulo-interna">
			<span class="paginacao">Home / Cadastrar </span>
			<p>Faça seu cadastro</p>
		</div>
	</div>
</div>

<div class="container">
	<div class="formularios-cadastro col-md-12 col-xs-12">
		<!--<div class="formulario-login col-md-6 col-xs-12">
			<span>Já tem cadastro</span>
			<form>
				<div class="form-group">
					<input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email:">
				</div>
				<div class="form-group">
    				<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Senha:">
  				</div>
  				<div class="botao-formularios">
  					<button type="submit">Entrar</button>
  				</div>
			</form>
			<div class="esquecer-senha col-md-12 col-xs-12">
				<a href="#">*Esqueci minha senha</a>
			</div>
		</div>-->
		<div class="formulario-signin col-md-6 col-md-offset-3  col-xs-12">
			<span>Não tem cadastro? Cadastre-se agora!</span>

			<div class='box'>
        <div class='box-content'>
          <?php
            echo $this->Form->create('Cadastro', $this->FormAdmin->formConfigs);
            echo $this->Form->input('nome', array(
            "data-rule-minlength" => '5',
            "data-rule-required" => 'true',
            "placeholder" => 'Nome'
            ));
            echo $this->Form->input('email', array(
            "data-rule-email" => 'true',
            "data-rule-required" => 'true',
            "placeholder" => 'E-mail'
            ));
            echo $this->Form->input('password');

                //echo $this->Form->input('funcao');
                //echo $this->Form->input('tipo');
                //echo $this->Form->input('status', array('options' => array(1 => "Ativo", 0 => "Inativo"), 'empty' => 'Selecione'));

                //echo $this->Form->input("imagem", array('type' => 'file', "accept" => "image/gif, image/png, image/jpeg"));
          ?>
          <div class='form-actions form-actions-padding-sm'>
            <div class='row'>
              <div class='col-md-10 col-md-offset-2 botao-formularios'>
                <button class='btn btn-primary BtnSubmit ' type='submit'>
                  <i class='icon-save'></i>
                  Salvar
                </button>
                <?php echo $this->Html->link("Cancelar", array('action' => 'index'), array('class' => 'btn'));
                ?>
              </div>
            </div>
          </div>
          <?php
          echo $this->Form->end();
          echo $this->Html->script(array(
          '/imgadmin/js/ckeditor/ckeditor.js'
          ), array('inline' => false));
          ?>
        </div>
      </div>

			<!--<form method="POST" action="cadastro.php">
				<div class="form-group">
					<input type="text" class="form-control" id="nome" name="nome" placeholder="Nome:">
				</div>
				<div class="form-group">
					<input type="email" class="form-control" id="email" name="nome" placeholder="Email:">
				</div>
				<div class="form-group">
					<input type="text" class="form-control" id="cpf" name="nome" placeholder="CPF:">
				</div>
				<div class="form-group">
					<input type="text" class="form-control" id="telefone" name="nome" placeholder="Telefone:">
				</div>
				<div class="form-group">
					<select class="form-control">
  						<option>Masculino</option>
  						<option>Feminino</option>
					</select>
				</div>
				<div class="form-group">
    				<input type="password" class="form-control" id="senha" name="senha" placeholder="Senha:">
  				</div>
  				<div class="form-group">
    				<input type="password" class="form-control" id="exampleInputPassword2" placeholder="Confirmar Senha:">
  				</div>
  				<div class="botao-formularios">
  					<button type="submit" id="cadastrar" name="cadastrar">Cadastrar</button>
  				</div>
			</form> -->
		</div>
	</div>
</div>