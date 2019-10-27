<div class="cooperados view">
<h2><?php echo __('Cooperado'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($cooperado['Cooperado']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nome'); ?></dt>
		<dd>
			<?php echo h($cooperado['Cooperado']['nome']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Email'); ?></dt>
		<dd>
			<?php echo h($cooperado['Cooperado']['email']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Password'); ?></dt>
		<dd>
			<?php echo h($cooperado['Cooperado']['password']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Matricula'); ?></dt>
		<dd>
			<?php echo h($cooperado['Cooperado']['matricula']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($cooperado['Cooperado']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($cooperado['Cooperado']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Cooperado'), array('action' => 'edit', $cooperado['Cooperado']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Cooperado'), array('action' => 'delete', $cooperado['Cooperado']['id']), array(), __('Are you sure you want to delete # %s?', $cooperado['Cooperado']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Cooperados'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cooperado'), array('action' => 'add')); ?> </li>
	</ul>
</div>
