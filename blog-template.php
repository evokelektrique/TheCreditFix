<?php

/**
 * Template Name: Blog
 */

global $post;
$author_id = $post->post_author;

get_header();
?>

<div class="container py-5 my-5">
  <div class="mb-5 pb-3 text-center">
    <p class="fw-bold text-orange fs-3 mb-2 pb-1">Our blog</p>
    <p class="fw-bold mb-3 pb-1 fs-xl-4">Resources and insights</p>
    <p class="fs-1 mb-4 pb-3">The latest industry news, interviews, technologies, and resources.</p>

    <div class="">
      FORM
    </div>
  </div>

  <div class="row row-cols-auto gx-lg-4 mb-5 pb-3" style="--bs-gutter-y: 4rem;">
    <?php
    $wp_query = new WP_Query();
    $total_pages = 4; // Hard coded total items in page
    $wp_query->query('posts_per_page=' . $total_pages . '&paged=' . $paged);
    $i = 0;

    while ($wp_query->have_posts()) : $wp_query->the_post();
    ?>
      <div class="col-12 col-lg-<?= $i === 0 ? "12" : "4" ?>">
        <a href="<?= get_the_permalink() ?>" class="text-decoration-none text-white d-block">
          <div class="w-100 mb-3 pb-3" style="background-image: url(<?= get_the_post_thumbnail_url(); ?>);height: 240px; background-size: cover; background-position: center;">
          </div>
          <p class="text-orange fw-bold mb-2 pb-1"><?= get_the_category()[0]->name ?></p>

          <div class="d-flex flex-row align-items-center justify-content-between mb-2 gap-3">
            <p class="fw-bold fs-xl-6 m-0 text-truncate"><?= get_the_title() ?></p>

            <div style="width: 24px;">
              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M7 17L17 7M17 7H7M17 7V17" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
              </svg>
            </div>
          </div>

          <p class="mb-4"><?= get_the_excerpt() ?></p>

          <div class="d-flex align-items-center flex-row justify-content-start">
            <div class=" me-2 pe-1">
              <img src="<?= get_avatar_url($author_id) ?>" alt="" class="mw-100 rounded-pill" width="40px" height="40px">
            </div>

            <div class="d-flex align-items-start justify-content-start flex-column">
              <p class="m-0"><?= get_the_author_meta("user_firstname", $author_id) . " " . get_the_author_meta("user_lastname", $author_id) ?></p>
              <p class="m-0"><?= get_the_date("") ?></p>
            </div>
          </div>
        </a>
      </div>
    <?php $i++;
    endwhile; ?>
  </div>

  <nav aria-label="Pagination" class="border-top border-dark-100 d-flex justify-content-between align-items-center py-3">
    <div class="pagination-link pagination-link-previous">
      <?= get_previous_posts_link('<span>Previous</span><svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"> <path d="M15.8332 9.99984H4.1665M4.1665 9.99984L9.99984 15.8332M4.1665 9.99984L9.99984 4.1665" stroke="white" stroke-width="1.66667" stroke-linecap="round" stroke-linejoin="round"/> </svg>'); ?>
    </div>

    <ul class="list-unstyled d-flex gap-1">
      <?php foreach ($GLOBALS["tcf"]->wpdocs_get_paginated_links($wp_query) as $link) : ?>
        <?php if ($link->isCurrent) : ?>
          <li class="btn btn-info text-white px-3" aria-current="page">
            <?php _e($link->page) ?>
          </li>
        <?php else : ?>
          <li class="">
            <a class="btn btn-transparent px-3 text-white" href="<?php esc_attr_e($link->url) ?>">
              <?php _e($link->page) ?>
            </a>
          </li>
        <?php endif; ?>
      <?php endforeach; ?>
    </ul>

    <div class="pagination-link">
      <?= get_next_posts_link('<span>Next</span><svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"> <path d="M4.1665 9.99984H15.8332M15.8332 9.99984L9.99984 4.1665M15.8332 9.99984L9.99984 15.8332" stroke="white" stroke-width="1.66667" stroke-linecap="round" stroke-linejoin="round" /> </svg>'); ?>
    </div>

  </nav>

</div>

<?php wp_reset_postdata(); ?>



<?php get_footer(); ?>
