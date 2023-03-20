<?php
require_once(__DIR__ . '../../../tables/cards/class-card-list-table.php');
?>
<div class="wrap">
  <h2><?php _e('Cards', 'tcf'); ?> <a href="<?php echo admin_url('admin.php?page=tcf-cards&action=new'); ?>" class="add-new-h2"><?php _e('Add New', 'tcf'); ?></a></h2>

  <form method="post">
    <input type="hidden" name="page" value="ttest_list_table">

    <?php
    $list_table = new TCF_Cards_List_Table();
    $list_table->prepare_items();
    $list_table->search_box('search', 'search_id');
    $list_table->display();
    ?>
  </form>
</div>
