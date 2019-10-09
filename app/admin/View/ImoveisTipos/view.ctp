<div class="imoveisTipos view">
<h2><?php echo __('Imoveis Tipo'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($imoveisTipo['ImoveisTipo']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nome'); ?></dt>
		<dd>
			<?php echo h($imoveisTipo['ImoveisTipo']['nome']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Slug'); ?></dt>
		<dd>
			<?php echo h($imoveisTipo['ImoveisTipo']['slug']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($imoveisTipo['ImoveisTipo']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($imoveisTipo['ImoveisTipo']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Imoveis Tipo'), array('action' => 'edit', $imoveisTipo['ImoveisTipo']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Imoveis Tipo'), array('action' => 'delete', $imoveisTipo['ImoveisTipo']['id']), array(), __('Are you sure you want to delete # %s?', $imoveisTipo['ImoveisTipo']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Imoveis Tipos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Imoveis Tipo'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Imoveis'), array('controller' => 'imoveis', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Imovel'), array('controller' => 'imoveis', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Imoveis'); ?></h3>
	<?php if (!empty($imoveisTipo['Imovel'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Nome'); ?></th>
		<th><?php echo __('Slug'); ?></th>
		<th><?php echo __('Codigo'); ?></th>
		<th><?php echo __('Descricao'); ?></th>
		<th><?php echo __('Lancamento'); ?></th>
		<th><?php echo __('Dormitorios'); ?></th>
		<th><?php echo __('Banheiros'); ?></th>
		<th><?php echo __('Imagem'); ?></th>
		<th><?php echo __('Suites'); ?></th>
		<th><?php echo __('Metragem Terreno'); ?></th>
		<th><?php echo __('Metragem Construcao'); ?></th>
		<th><?php echo __('Garagem'); ?></th>
		<th><?php echo __('Valor'); ?></th>
		<th><?php echo __('Imoveis Tipo Id'); ?></th>
		<th><?php echo __('Cidade Id'); ?></th>
		<th><?php echo __('Bairro Id'); ?></th>
		<th><?php echo __('Logradouro'); ?></th>
		<th><?php echo __('Imoveis Status Id'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($imoveisTipo['Imovel'] as $imovel): ?>
		<tr>
			<td><?php echo $imovel['id']; ?></td>
			<td><?php echo $imovel['nome']; ?></td>
			<td><?php echo $imovel['slug']; ?></td>
			<td><?php echo $imovel['codigo']; ?></td>
			<td><?php echo $imovel['descricao']; ?></td>
			<td><?php echo $imovel['lancamento']; ?></td>
			<td><?php echo $imovel['dormitorios']; ?></td>
			<td><?php echo $imovel['banheiros']; ?></td>
			<td><?php echo $imovel['imagem']; ?></td>
			<td><?php echo $imovel['suites']; ?></td>
			<td><?php echo $imovel['metragem_terreno']; ?></td>
			<td><?php echo $imovel['metragem_construcao']; ?></td>
			<td><?php echo $imovel['garagem']; ?></td>
			<td><?php echo $imovel['valor']; ?></td>
			<td><?php echo $imovel['imoveis_tipo_id']; ?></td>
			<td><?php echo $imovel['cidade_id']; ?></td>
			<td><?php echo $imovel['bairro_id']; ?></td>
			<td><?php echo $imovel['logradouro']; ?></td>
			<td><?php echo $imovel['imoveis_status_id']; ?></td>
			<td><?php echo $imovel['created']; ?></td>
			<td><?php echo $imovel['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'imoveis', 'action' => 'view', $imovel['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'imoveis', 'action' => 'edit', $imovel['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'imoveis', 'action' => 'delete', $imovel['id']), array(), __('Are you sure you want to delete # %s?', $imovel['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Imovel'), array('controller' => 'imoveis', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
