<div class='col-xs-12 conteudo-administrador'>

    <div class='page-header page-header-with-buttons'>
        <h1 class='pull-left'>
            <i class='fa fa-globe' aria-hidden='true'></i>
            <span><?php echo __(' Anuncios no site'); ?></span>
        </h1>
        			 <!--<?php echo $this->Html->link('<i class=\'icon-plus\'></i><span> Adicionar</span>', array('action' => 'add'), array('class' => 'btn btn-primary btn-lg', 'title' => 'Adicionar novo Registro', 'style' => 'float: right; margin: 18px 0 0 0;', 'escape' => false)); ?>-->
    </div>
    <div class='row'>
        <div class='col-sm-12'>
            <div class='box bordered-box orange-border' style='margin-bottom:0;'>
                <div class='box-content box-no-padding'>
                    <div class=''>
                        <table class='data-table table table-bordered table-striped' style='margin-bottom:0;' >
                            <thead>
                                <tr>
                                                                            <!--<th><?php echo $this->Paginator->sort('id'); ?></th>-->
                                                                            <th><?php echo $this->Paginator->sort('Anunciante'); ?></th>
                                                                            <th><?php echo $this->Paginator->sort('Titulo'); ?></th>
                                                                            <th><?php echo $this->Paginator->sort('descricao'); ?></th>
                                                                            <th><?php echo $this->Paginator->sort('created'); ?></th>
                                                                        <th class="actions">Ações</th>
                                </tr>
                            </thead>
                            <tbody>
                            
                                <?php foreach ($anuncios as $anuncio): ?>
                                    <?php if($anuncio['Anuncio']['liberado']) { ?>
                                    
	<tr>
		<!--<td><?php echo h($curso['Curso']['id']); ?>&nbsp;</td>-->
        <td><?php echo h($anuncio['Anuncio']['anunciante']); ?>&nbsp;</td>
		<td><?php echo h($anuncio['Anuncio']['titulo']); ?>&nbsp;</td>
        <td><?php echo h($anuncio['Anuncio']['descricao']); ?>&nbsp;</td>
        <td><?php echo h($anuncio['Anuncio']['created']); ?>&nbsp;</td>
		<td>
		<div class="text-center">
			 <?php 
            
             echo $this->Html->link('<i class=\'icon-ok\'></i> Publicar', array('action' => 'edit', $anuncio['Anuncio']['id']), array('class' => 'btn btn-success btn-xs has-tooltip','title'=> 'Publicarr','data-original-title' => 'Publicar','data-placement' => 'top','escape' => false)) . '&nbsp;'; 
			 echo $this->Form->postLink('<i class=\'icon-remove\'></i>', array('action' => 'delete', $anuncio['Anuncio']['id']), array('escape' => false, 'class' => 'btn btn-danger btn-xs alert-delete has-tooltip', 'title' => 'Excluir', 'data-original-title' => 'Excluir', 'data-placement' => 'top', ), __('Tem certeza que deseja excluir? %s', $anuncio['Anuncio']['id'])); 
?>		</div>
		</td>
	</tr>
   <?php } ?>
<?php endforeach; ?>
  
                            </tbody>
                        </table>
                        <?php  echo $this->element('paginacao'); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>