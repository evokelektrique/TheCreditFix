<form action="/" method="get" class="mt-4">

    <!-- Search -->
    <div class="custom_input_row mb-2 is-relative">
      <label 
      for="search" 
      class="custom_label is-unselectable"
      >
          <?= __( "جستجو", 'a4a' );?>
      </label>

      <input 
      type="text"
      placeholder="<?= __("متن جستجوی خود را بنویسید...", "a4a") ?>"
      class="input custom_input is-shadowless custom_rounded py-5 mb-3" 
      type="text" name="s" id="search" value="<?php the_search_query(); ?>" 
      />
      <input type="hidden" value="product" name="post_type" id="post_type" />
    </div>

</form>
