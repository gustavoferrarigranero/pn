<div class="tbOlheiros index">
	<h2><?php echo __('Olheiros'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id_olheiro'); ?></th>
			<th><?php echo $this->Paginator->sort('nome'); ?></th>
			<th><?php echo $this->Paginator->sort('telefone'); ?></th>
			<th><?php echo $this->Paginator->sort('celular'); ?></th>
			<th><?php echo $this->Paginator->sort('endereco'); ?></th>
			<th><?php echo $this->Paginator->sort('numero'); ?></th>
			<th><?php echo $this->Paginator->sort('cidade'); ?></th>
			<th><?php echo $this->Paginator->sort('entidade'); ?></th>
			<th><?php echo $this->Paginator->sort('email'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($tbOlheiros as $tbOlheiro): ?>
	<tr>
		<td><?php echo h($tbOlheiro['TbOlheiro']['id_olheiro']); ?>&nbsp;</td>
		<td><?php echo h($tbOlheiro['TbOlheiro']['nome']); ?>&nbsp;</td>
		<td><?php echo h($tbOlheiro['TbOlheiro']['telefone']); ?>&nbsp;</td>
		<td><?php echo h($tbOlheiro['TbOlheiro']['celular']); ?>&nbsp;</td>
		<td><?php echo h($tbOlheiro['TbOlheiro']['endereco']); ?>&nbsp;</td>
		<td><?php echo h($tbOlheiro['TbOlheiro']['numero']); ?>&nbsp;</td>
		<td><?php echo h($tbOlheiro['TbOlheiro']['cidade']); ?>&nbsp;</td>
		<td><?php echo h($tbOlheiro['TbOlheiro']['entidade']); ?>&nbsp;</td>
		<td><?php echo h($tbOlheiro['TbOlheiro']['email']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Ver'), array('action' => 'view', $tbOlheiro['TbOlheiro']['id_olheiro'])); ?>
			<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $tbOlheiro['TbOlheiro']['id_olheiro'])); ?>
			<?php echo $this->Form->postLink(__('Deletar'), array('action' => 'delete', $tbOlheiro['TbOlheiro']['id_olheiro']), array(), __('Você quer deletar # %s?', $tbOlheiro['TbOlheiro']['id_olheiro'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('P&aacute;gina {:page} de {:pages}, mostrando {:current} resultado de {:count} no total, come&ccedil;ando no registro {:start}, terminando em {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('anterior'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('proximo') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('A&ccedil;&otilde;es'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Novo Olheiro'), array('action' => 'add')); ?></li>
	</ul>
</div>
