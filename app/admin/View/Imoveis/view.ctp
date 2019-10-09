<div class="imoveis view">
<h2><?php echo __('Imovel'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($imovel['Imovel']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nome'); ?></dt>
		<dd>
			<?php echo h($imovel['Imovel']['nome']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Slug'); ?></dt>
		<dd>
			<?php echo h($imovel['Imovel']['slug']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Codigo'); ?></dt>
		<dd>
			<?php echo h($imovel['Imovel']['codigo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Descricao'); ?></dt>
		<dd>
			<?php echo h($imovel['Imovel']['descricao']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Lancamento'); ?></dt>
		<dd>
			<?php echo h($imovel['Imovel']['lancamento']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Dormitorios'); ?></dt>
		<dd>
			<?php echo h($imovel['Imovel']['dormitorios']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Banheiros'); ?></dt>
		<dd>
			<?php echo h($imovel['Imovel']['banheiros']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Imagem'); ?></dt>
		<dd>
			<?php echo h($imovel['Imovel']['imagem']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Suites'); ?></dt>
		<dd>
			<?php echo h($imovel['Imovel']['suites']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Metragem Terreno'); ?></dt>
		<dd>
			<?php echo h($imovel['Imovel']['metragem_terreno']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Metragem Construcao'); ?></dt>
		<dd>
			<?php echo h($imovel['Imovel']['metragem_construcao']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Garagem'); ?></dt>
		<dd>
			<?php echo h($imovel['Imovel']['garagem']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Valor'); ?></dt>
		<dd>
			<?php echo h($imovel['Imovel']['valor']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Imoveis Tipo'); ?></dt>
		<dd>
			<?php echo $this->Html->link($imovel['ImoveisTipo']['id'], array('controller' => 'imoveis_tipos', 'action' => 'view', $imovel['ImoveisTipo']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cidade'); ?></dt>
		<dd>
			<?php echo $this->Html->link($imovel['Cidade']['id'], array('controller' => 'cidades', 'action' => 'view', $imovel['Cidade']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Bairro'); ?></dt>
		<dd>
			<?php echo $this->Html->link($imovel['Bairro']['id'], array('controller' => 'bairros', 'action' => 'view', $imovel['Bairro']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Logradouro'); ?></dt>
		<dd>
			<?php echo h($imovel['Imovel']['logradouro']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Imoveis Status'); ?></dt>
		<dd>
			<?php echo $this->Html->link($imovel['ImoveisStatus']['id'], array('controller' => 'imoveis_statuses', 'action' => 'view', $imovel['ImoveisStatus']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($imovel['Imovel']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($imovel['Imovel']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Imovel'), array('action' => 'edit', $imovel['Imovel']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Imovel'), array('action' => 'delete', $imovel['Imovel']['id']), array(), __('Are you sure you want to delete # %s?', $imovel['Imovel']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Imoveis'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Imovel'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Imoveis Tipos'), array('controller' => 'imoveis_tipos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Imoveis Tipo'), array('controller' => 'imoveis_tipos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Cidades'), array('controller' => 'cidades', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cidade'), array('controller' => 'cidades', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Bairros'), array('controller' => 'bairros', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Bairro'), array('controller' => 'bairros', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Imoveis Statuses'), array('controller' => 'imoveis_statuses', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Imoveis Status'), array('controller' => 'imoveis_statuses', 'action' => 'add')); ?> </li>
	</ul>
</div>
