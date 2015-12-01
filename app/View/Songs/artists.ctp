<div data-scroll-container="true" data-view="artists">
    <?php echo $this->element('artists_view'); ?>
    <?php echo $this->element('add_to_playlist'); ?>
    <?php echo $this->element('pagination');?>
</div>

<div class="left-panel">
    <div class="alphabet">
        <ul>
            <?php
            foreach(range('A', 'Z') as $letter) {
                echo '<li class="text-center">'.$this->Html->link($letter, array('action' => 'artists', '?' => array('l' => $letter))).'</li>';
            }
            ?>
        </ul>
    </div>
</div>