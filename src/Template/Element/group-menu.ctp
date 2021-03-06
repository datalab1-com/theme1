<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
		<?php if (isset($showEdit) && $showEdit) : ?>
			<li><?= $this->Html->link(__('EDIT RECORD'), ['action' => 'edit', $kbase->id]) ?> </li>
		<?php endif; ?>
		
		<?php if (isset($showDelete) && $showDelete) : ?>
			<li><?= $this->Form->postLink(
					__('DELETE RECORD'),
					['action' => 'delete', $kbase->id],
					['confirm' => __('Are you sure you want to delete # {0}?', $kbase->id)]
				)
			?></li>
		<?php endif; ?>
		
        <li><?= $this->Html->link(__('ADD RECORD'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('SHOW ALL'), ['action' => 'admin']) ?></li>
		
		<?php if (isset($categories)) : ?>
		
			<?php foreach ($categories as $cat) : ?>
				<?php //dump($cat['nickname']); die; ?>
				<li><?= $this->Html->link($cat['name'] . ' (' . $cat['nickname'] . ')', ['action' => 'group', $cat['nickname']]) ?></li>
			<?php endforeach; ?>
			
		<?php endif; ?>
    </ul>
</nav>
