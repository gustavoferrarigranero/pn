<div class="tbOlheiros form">
<?php echo $this->Form->create('TbOlheiro'); ?>
	<fieldset>
		<legend><?php echo __('Adicionar Olheiro'); ?></legend>
	<?php
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
	<h3><?php echo __('A&ccedil;&otilde;es'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Listar Olheiros'), array('action' => 'index')); ?></li>
	</ul>
</div>
