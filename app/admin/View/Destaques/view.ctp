<div class="destaques view">
<h2><?php echo __('Destaque'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($destaque['Destaque']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nome'); ?></dt>
		<dd>
			<?php echo h($destaque['Destaque']['nome']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Descricao'); ?></dt>
		<dd>
			<?php echo h($destaque['Destaque']['descricao']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Slug'); ?></dt>
		<dd>
			<?php echo h($destaque['Destaque']['slug']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ativo'); ?></dt>
		<dd>
			<?php echo h($destaque['Destaque']['ativo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Imagem'); ?></dt>
		<dd>
			<?php echo h($destaque['Destaque']['imagem']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Link'); ?></dt>
		<dd>
			<?php echo h($destaque['Destaque']['link']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Externo'); ?></dt>
		<dd>
			<?php echo h($destaque['Destaque']['externo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($destaque['Destaque']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($destaque['Destaque']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Destaque'), array('action' => 'edit', $destaque['Destaque']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Destaque'), array('action' => 'delete', $destaque['Destaque']['id']), array(), __('Are you sure you want to delete # %s?', $destaque['Destaque']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Destaques'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Destaque'), array('action' => 'add')); ?> </li>
	</ul>
</div>
