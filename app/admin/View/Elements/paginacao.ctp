<?php /*
  echo $this->Paginator->counter(array(
  'format' => __('Página {:page} de {:pages}')
  ));
 */ ?>	
<div class="pagination">
    <?php
    echo $this->Paginator->prev('< ' . __('anterior'), array('tag' => 'li'), '<a href="#"><<</a>', array(
        'tag' => 'li',
        'class' => 'disabled',
        'escape' => false
    ));
    echo $this->Paginator->numbers(array(
        'separator' => '',
        'tag' => 'li',
        'modulus' => '5',
        'currentTag' => 'a',
        'currentClass' => 'active'
            )
    );
    echo $this->Paginator->next(__('próximo') . ' >', array('tag' => 'li'), '<a href="#">>></a>', array(
        'tag' => 'li',
        'class' => 'disabled',
        'escape' => false
    ));
    ?>
</div>