<div class="albunsImagens view">
<h2><?php echo __('Albuns Imagem'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($albunsImagem['AlbunsImagem']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Album'); ?></dt>
		<dd>
			<?php echo $this->Html->link($albunsImagem['Album']['id'], array('controller' => 'albuns', 'action' => 'view', $albunsImagem['Album']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Imagem'); ?></dt>
		<dd>
			<?php echo h($albunsImagem['AlbunsImagem']['imagem']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Descricao'); ?></dt>
		<dd>
			<?php echo h($albunsImagem['AlbunsImagem']['descricao']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Legenda'); ?></dt>
		<dd>
			<?php echo h($albunsImagem['AlbunsImagem']['legenda']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ordem'); ?></dt>
		<dd>
			<?php echo h($albunsImagem['AlbunsImagem']['ordem']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($albunsImagem['AlbunsImagem']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($albunsImagem['AlbunsImagem']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Albuns Imagem'), array('action' => 'edit', $albunsImagem['AlbunsImagem']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Albuns Imagem'), array('action' => 'delete', $albunsImagem['AlbunsImagem']['id']), array(), __('Are you sure you want to delete # %s?', $albunsImagem['AlbunsImagem']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Albuns Imagens'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Albuns Imagem'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Albuns'), array('controller' => 'albuns', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Album'), array('controller' => 'albuns', 'action' => 'add')); ?> </li>
	</ul>
</div>
