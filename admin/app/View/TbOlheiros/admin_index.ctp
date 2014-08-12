<div class="tbOlheiros index">
	<h2><?php echo __('Tb Olheiros'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id_olheiro'); ?></th>
			<th><?php echo $this->Paginator->sort('nome'); ?></th>
			<th><?php echo $this->Paginator->sort('cpf'); ?></th>
			<th><?php echo $this->Paginator->sort('rg'); ?></th>
			<th><?php echo $this->Paginator->sort('telefone'); ?></th>
			<th><?php echo $this->Paginator->sort('celular'); ?></th>
			<th><?php echo $this->Paginator->sort('endereco'); ?></th>
			<th><?php echo $this->Paginator->sort('cidade'); ?></th>
			<th><?php echo $this->Paginator->sort('estado'); ?></th>
			<th><?php echo $this->Paginator->sort('numero'); ?></th>
			<th><?php echo $this->Paginator->sort('entidade'); ?></th>
			<th><?php echo $this->Paginator->sort('email'); ?></th>
			<th><?php echo $this->Paginator->sort('senha'); ?></th>
			<th><?php echo $this->Paginator->sort('tipo'); ?></th>
			<th><?php echo $this->Paginator->sort('bairro'); ?></th>
			<th><?php echo $this->Paginator->sort('cep'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($tbOlheiros as $tbOlheiro): ?>
	<tr>
		<td><?php echo h($tbOlheiro['TbOlheiro']['id_olheiro']); ?>&nbsp;</td>
		<td><?php echo h($tbOlheiro['TbOlheiro']['nome']); ?>&nbsp;</td>
		<td><?php echo h($tbOlheiro['TbOlheiro']['cpf']); ?>&nbsp;</td>
		<td><?php echo h($tbOlheiro['TbOlheiro']['rg']); ?>&nbsp;</td>
		<td><?php echo h($tbOlheiro['TbOlheiro']['telefone']); ?>&nbsp;</td>
		<td><?php echo h($tbOlheiro['TbOlheiro']['celular']); ?>&nbsp;</td>
		<td><?php echo h($tbOlheiro['TbOlheiro']['endereco']); ?>&nbsp;</td>
		<td><?php echo h($tbOlheiro['TbOlheiro']['cidade']); ?>&nbsp;</td>
		<td><?php echo h($tbOlheiro['TbOlheiro']['estado']); ?>&nbsp;</td>
		<td><?php echo h($tbOlheiro['TbOlheiro']['numero']); ?>&nbsp;</td>
		<td><?php echo h($tbOlheiro['TbOlheiro']['entidade']); ?>&nbsp;</td>
		<td><?php echo h($tbOlheiro['TbOlheiro']['email']); ?>&nbsp;</td>
		<td><?php echo h($tbOlheiro['TbOlheiro']['senha']); ?>&nbsp;</td>
		<td><?php echo h($tbOlheiro['TbOlheiro']['tipo']); ?>&nbsp;</td>
		<td><?php echo h($tbOlheiro['TbOlheiro']['bairro']); ?>&nbsp;</td>
		<td><?php echo h($tbOlheiro['TbOlheiro']['cep']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $tbOlheiro['TbOlheiro']['id_olheiro'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $tbOlheiro['TbOlheiro']['id_olheiro'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $tbOlheiro['TbOlheiro']['id_olheiro']), array(), __('Are you sure you want to delete # %s?', $tbOlheiro['TbOlheiro']['id_olheiro'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Tb Olheiro'), array('action' => 'add')); ?></li>
	</ul>
</div>
