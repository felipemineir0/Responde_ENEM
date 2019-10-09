<div class="col-xs-12 col-sm-12 col-md-12 paginacao text-center paginacao-prods">
    <?php
    echo $this->Paginator->prev(' ' . __(' '), array('tag' => ''), '', array(
        'tag' => 'a',
        'class' => 'disabled',
        'escape' => false
        ));
    echo $this->Paginator->numbers(array(
    'separator' => ' ',
    'tag' => 'span',
    'modulus' => '4',
    'currentTag' => 'a',
    'currentClass' => 'active',
    'first' => 0,
    'last' => 0,
    )
    );
    echo $this->Paginator->next(__(' ') . ' ', array('tag' => ''), '', array(
        'tag' => 'a',
        'class' => 'disabled',
        'escape' => false
        ));
    ?>
</div>

<style>

</style>