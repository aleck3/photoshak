<!-- Tab panes -->
<div class="tab-content">
    <div role="tabpanel" class="tab-pane active" id="all">

        <?php
        $row_counter = 0;
        foreach ($images as $item):
            if ($row_counter == 0) {
                ?>
                <div class="row"> <?php
            }
            ?>

            <div class="col-md-4">
                <a href="<?php echo base_url('/bootstrap/img/' . $item->img_name); ?>"
                   data-lightbox="gallery" data-title="<?php echo $item->img_desc ?>"> <img
                        src="<?php echo base_url('/bootstrap/img/' . $item->img_name); ?>" class="img-thumbnail"></a>
                <div class="title"><?php echo $item->img_desc ?></div>
            </div>

            <?php
            if ($row_counter == 2) {
                $row_counter = 0;
                ?>
                </div> <?php
            } else {
                $row_counter++;
            }

        endforeach;
        if ($row_counter != 0) { ?>
    </div>
    <?php
    }
    ?>

</div>

<div role="tabpanel" class="tab-pane" id="one">
    <?php
    $row_counter = 0;
    foreach ($images as $item):
        if ($item->img_category == "Category One") {

            if ($row_counter == 0) {
                ?>
                <div class="row"> <?php
            }
            ?>

            <div class="col-md-4">
                <a href="<?php echo base_url('/bootstrap/img/' . $item->img_name); ?>"
                   data-lightbox="gallery" data-title="<?php echo $item->img_desc ?>"> <img
                        src="<?php echo base_url('/bootstrap/img/' . $item->img_name); ?>"
                        class="img-thumbnail"></a>
                <div class="title"><?php echo $item->img_desc ?></div>
            </div>

            <?php
            if ($row_counter == 2) {
                $row_counter = 0;
                ?>
                </div> <?php
            } else {
                $row_counter++;
            }

        }endforeach;
    if ($row_counter != 0) { ?>
</div>
<?php
}
?>
</div>

<div role="tabpanel" class="tab-pane" id="two">
    <?php
    $row_counter = 0;
    foreach ($images as $item):
        if ($item->img_category == "Category Two") {

            if ($row_counter == 0) {
                ?>
                <div class="row"> <?php
            }
            ?>

            <div class="col-md-4">
                <a href="<?php echo base_url('/bootstrap/img/' . $item->img_name); ?>"
                   data-lightbox="gallery" data-title="<?php echo $item->img_desc ?>"> <img
                        src="<?php echo base_url('/bootstrap/img/' . $item->img_name); ?>"
                        class="img-thumbnail"></a>
                <div class="title"><?php echo $item->img_desc ?></div>
            </div>

            <?php
            if ($row_counter == 2) {
                $row_counter = 0;
                ?>
                </div> <?php
            } else {
                $row_counter++;
            }

        }endforeach;
    if ($row_counter != 0) { ?>
</div>
<?php
}
?>
</div>
</div>

</div>

</div>
</section>