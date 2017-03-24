<div class="animais view">
<h2><?php echo __('Animal'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($animal['Animal']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nome'); ?></dt>
		<dd>
			<?php echo h($animal['Animal']['nome']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Descricao'); ?></dt>
		<dd>
			<?php echo h($animal['Animal']['descricao']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Imagem'); ?></dt>
		<dd>
			<?php echo h($animal['Animal']['imagem']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($animal['Animal']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($animal['Animal']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Animal'), array('action' => 'edit', $animal['Animal']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Animal'), array('action' => 'delete', $animal['Animal']['id']), array(), __('Are you sure you want to delete # %s?', $animal['Animal']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Animais'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Animal'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Albuns Animais'), array('controller' => 'albuns_animais', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Albuns Animal'), array('controller' => 'albuns_animais', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Albuns Animais'); ?></h3>
	<?php if (!empty($animal['AlbunsAnimal'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Animal Id'); ?></th>
		<th><?php echo __('Imagem'); ?></th>
		<th><?php echo __('Legenda'); ?></th>
		<th><?php echo __('Ordem'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($animal['AlbunsAnimal'] as $albunsAnimal): ?>
		<tr>
			<td><?php echo $albunsAnimal['id']; ?></td>
			<td><?php echo $albunsAnimal['animal_id']; ?></td>
			<td><?php echo $albunsAnimal['imagem']; ?></td>
			<td><?php echo $albunsAnimal['legenda']; ?></td>
			<td><?php echo $albunsAnimal['ordem']; ?></td>
			<td><?php echo $albunsAnimal['created']; ?></td>
			<td><?php echo $albunsAnimal['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'albuns_animais', 'action' => 'view', $albunsAnimal['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'albuns_animais', 'action' => 'edit', $albunsAnimal['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'albuns_animais', 'action' => 'delete', $albunsAnimal['id']), array(), __('Are you sure you want to delete # %s?', $albunsAnimal['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Albuns Animal'), array('controller' => 'albuns_animais', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
