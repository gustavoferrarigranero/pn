<div class="tbOlheiros view">
<h2><?php echo __('Tb Olheiro'); ?></h2>
	<dl>
		<dt><?php echo __('Id Olheiro'); ?></dt>
		<dd>
			<?php echo h($tbOlheiro['TbOlheiro']['id_olheiro']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nome'); ?></dt>
		<dd>
			<?php echo h($tbOlheiro['TbOlheiro']['nome']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cpf'); ?></dt>
		<dd>
			<?php echo h($tbOlheiro['TbOlheiro']['cpf']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Rg'); ?></dt>
		<dd>
			<?php echo h($tbOlheiro['TbOlheiro']['rg']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Telefone'); ?></dt>
		<dd>
			<?php echo h($tbOlheiro['TbOlheiro']['telefone']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Celular'); ?></dt>
		<dd>
			<?php echo h($tbOlheiro['TbOlheiro']['celular']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Endereco'); ?></dt>
		<dd>
			<?php echo h($tbOlheiro['TbOlheiro']['endereco']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cidade'); ?></dt>
		<dd>
			<?php echo h($tbOlheiro['TbOlheiro']['cidade']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Estado'); ?></dt>
		<dd>
			<?php echo h($tbOlheiro['TbOlheiro']['estado']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Numero'); ?></dt>
		<dd>
			<?php echo h($tbOlheiro['TbOlheiro']['numero']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Entidade'); ?></dt>
		<dd>
			<?php echo h($tbOlheiro['TbOlheiro']['entidade']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Email'); ?></dt>
		<dd>
			<?php echo h($tbOlheiro['TbOlheiro']['email']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Senha'); ?></dt>
		<dd>
			<?php echo h($tbOlheiro['TbOlheiro']['senha']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tipo'); ?></dt>
		<dd>
			<?php echo h($tbOlheiro['TbOlheiro']['tipo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Bairro'); ?></dt>
		<dd>
			<?php echo h($tbOlheiro['TbOlheiro']['bairro']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cep'); ?></dt>
		<dd>
			<?php echo h($tbOlheiro['TbOlheiro']['cep']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Tb Olheiro'), array('action' => 'edit', $tbOlheiro['TbOlheiro']['id_olheiro'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Tb Olheiro'), array('action' => 'delete', $tbOlheiro['TbOlheiro']['id_olheiro']), array(), __('Are you sure you want to delete # %s?', $tbOlheiro['TbOlheiro']['id_olheiro'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Tb Olheiros'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tb Olheiro'), array('action' => 'add')); ?> </li>
	</ul>
</div>
