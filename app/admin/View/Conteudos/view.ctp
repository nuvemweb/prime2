<div class="conteudos view">
<h2><?php echo __('Conteudo'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($conteudo['Conteudo']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nome'); ?></dt>
		<dd>
			<?php echo h($conteudo['Conteudo']['nome']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Slug'); ?></dt>
		<dd>
			<?php echo h($conteudo['Conteudo']['slug']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Sintese'); ?></dt>
		<dd>
			<?php echo h($conteudo['Conteudo']['sintese']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Texto'); ?></dt>
		<dd>
			<?php echo h($conteudo['Conteudo']['texto']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Imagem'); ?></dt>
		<dd>
			<?php echo h($conteudo['Conteudo']['imagem']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($conteudo['Conteudo']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($conteudo['Conteudo']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Conteudo'), array('action' => 'edit', $conteudo['Conteudo']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Conteudo'), array('action' => 'delete', $conteudo['Conteudo']['id']), array(), __('Are you sure you want to delete # %s?', $conteudo['Conteudo']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Conteudos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Conteudo'), array('action' => 'add')); ?> </li>
	</ul>
</div>
