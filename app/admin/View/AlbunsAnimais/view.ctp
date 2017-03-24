<div class="albunsAnimais view">
<h2><?php echo __('Albuns Animal'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($albunsAnimal['AlbunsAnimal']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Animal'); ?></dt>
		<dd>
			<?php echo $this->Html->link($albunsAnimal['Animal']['id'], array('controller' => 'animais', 'action' => 'view', $albunsAnimal['Animal']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Imagem'); ?></dt>
		<dd>
			<?php echo h($albunsAnimal['AlbunsAnimal']['imagem']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Legenda'); ?></dt>
		<dd>
			<?php echo h($albunsAnimal['AlbunsAnimal']['legenda']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ordem'); ?></dt>
		<dd>
			<?php echo h($albunsAnimal['AlbunsAnimal']['ordem']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($albunsAnimal['AlbunsAnimal']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($albunsAnimal['AlbunsAnimal']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Albuns Animal'), array('action' => 'edit', $albunsAnimal['AlbunsAnimal']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Albuns Animal'), array('action' => 'delete', $albunsAnimal['AlbunsAnimal']['id']), array(), __('Are you sure you want to delete # %s?', $albunsAnimal['AlbunsAnimal']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Albuns Animais'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Albuns Animal'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Animais'), array('controller' => 'animais', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Animal'), array('controller' => 'animais', 'action' => 'add')); ?> </li>
	</ul>
</div>
