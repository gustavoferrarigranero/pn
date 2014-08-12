<div class="tbOlheiros form">
<?php echo $this->Form->create('TbOlheiro'); ?>
	<fieldset>
		<legend><?php echo __('Admin Edit Tb Olheiro'); ?></legend>
	<?php
		echo $this->Form->input('id_olheiro');
		echo $this->Form->input('nome');
		echo $this->Form->input('cpf');
		echo $this->Form->input('rg');
		echo $this->Form->input('telefone');
		echo $this->Form->input('celular');
		echo $this->Form->input('endereco');
		echo $this->Form->input('cidade');
		echo $this->Form->input('estado');
		echo $this->Form->input('numero');
		echo $this->Form->input('entidade');
		echo $this->Form->input('email');
		echo $this->Form->input('senha');
		echo $this->Form->input('tipo');
		echo $this->Form->input('bairro');
		echo $this->Form->input('cep');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('TbOlheiro.id_olheiro')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('TbOlheiro.id_olheiro'))); ?></li>
		<li><?php echo $this->Html->link(__('List Tb Olheiros'), array('action' => 'index')); ?></li>
	</ul>
</div>
