<?php
global $post;
$author_id = $post->post_author;

get_header();
?>

<div class="container py-5 my-5">
  <div class="text-center">

    <!-- Date -->
    <p class="text-orange fw-bold fs-3 mb-2 pb-1"><?= get_the_date("") ?></p>

    <!-- Title -->
    <p class="fw-bold mb-4 fs-xl-3 mb-5 pb-3"><?= get_the_title() ?></p>

    <!-- Thumbnail -->
    <img src="<?= get_the_post_thumbnail_url() ?>" alt="<?= get_the_title() ?>" class="mb-5 pb-5 img-fluid">
  </div>

  <!-- Content -->
  <div class="fs-2 lh-md mb-5">
    <?= get_the_content(); ?>
  </div>

  <div class="d-flex align-items-center justify-content-between flex-column flex-md-row border-top border-light-200 py-4">

    <!-- Author details -->
    <div class="d-flex align-items-center flex-row justify-content-start">
      <div class=" me-2 pe-1">
        <img src="<?= get_avatar_url($author_id) ?>" alt="" class="mw-100 rounded-pill" width="40px" height="40px">
      </div>

      <div class="d-flex align-items-start justify-content-start flex-column">
        <p class="m-0"><?= get_the_author_meta("user_firstname", $author_id) . " " . get_the_author_meta("user_lastname", $author_id) ?></p>
        <p class="m-0"><?= get_the_date("") ?></p>
      </div>
    </div>

    <!-- Share social media links -->
    <div class="d-flex gap-2">

      <!-- Copy link -->
      <button class="btn btn-dark-100 fs-4 fw-bold gap-2 d-flex">
        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
          <g clip-path="url(#clip0_405_78562)">
            <path d="M4.1665 12.5003C3.38993 12.5003 3.00165 12.5003 2.69536 12.3735C2.28698 12.2043 1.96253 11.8798 1.79337 11.4715C1.6665 11.1652 1.6665 10.7769 1.6665 10.0003V4.33366C1.6665 3.40024 1.6665 2.93353 1.84816 2.57701C2.00795 2.2634 2.26292 2.00844 2.57652 1.84865C2.93304 1.66699 3.39975 1.66699 4.33317 1.66699H9.99984C10.7764 1.66699 11.1647 1.66699 11.471 1.79386C11.8794 1.96302 12.2038 2.28747 12.373 2.69585C12.4998 3.00214 12.4998 3.39042 12.4998 4.16699M10.1665 18.3337H15.6665C16.5999 18.3337 17.0666 18.3337 17.4232 18.152C17.7368 17.9922 17.9917 17.7372 18.1515 17.4236C18.3332 17.0671 18.3332 16.6004 18.3332 15.667V10.167C18.3332 9.23357 18.3332 8.76686 18.1515 8.41034C17.9917 8.09674 17.7368 7.84177 17.4232 7.68198C17.0666 7.50033 16.5999 7.50033 15.6665 7.50033H10.1665C9.23308 7.50033 8.76637 7.50033 8.40985 7.68198C8.09625 7.84177 7.84128 8.09674 7.68149 8.41034C7.49984 8.76686 7.49984 9.23357 7.49984 10.167V15.667C7.49984 16.6004 7.49984 17.0671 7.68149 17.4236C7.84128 17.7372 8.09625 17.9922 8.40985 18.152C8.76637 18.3337 9.23308 18.3337 10.1665 18.3337Z" stroke="white" stroke-width="1.66667" stroke-linecap="round" stroke-linejoin="round" />
          </g>
          <defs>
            <clipPath id="clip0_405_78562">
              <rect width="20" height="20" fill="white" />
            </clipPath>
          </defs>
        </svg>

        <span>Copy link</span>
      </button>

      <!-- Twitter -->
      <button class="btn btn-dark-100 fs-4 fw-bold gap-2 d-flex">
        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M6.2896 18.126C13.8368 18.126 17.9648 11.8732 17.9648 6.45084C17.9648 6.27324 17.9648 6.09644 17.9528 5.92044C18.7559 5.33957 19.4491 4.62034 20 3.79644C19.2512 4.12844 18.4567 4.34607 17.6432 4.44204C18.4998 3.92928 19.141 3.12269 19.4472 2.17244C18.6417 2.65045 17.7605 2.9873 16.8416 3.16844C16.2229 2.51059 15.4047 2.07497 14.5135 1.92901C13.6223 1.78305 12.7078 1.93487 11.9116 2.36098C11.1154 2.7871 10.4819 3.46375 10.109 4.28623C9.73605 5.10871 9.64462 6.03116 9.8488 6.91084C8.21741 6.82901 6.62146 6.40503 5.16455 5.66644C3.70763 4.92786 2.4223 3.89116 1.392 2.62364C0.867274 3.52697 0.70656 4.59633 0.942583 5.61399C1.17861 6.63165 1.79362 7.5211 2.6624 8.10124C2.00936 8.08211 1.37054 7.90594 0.8 7.58764V7.63964C0.800259 8.58702 1.12821 9.50514 1.72823 10.2383C2.32824 10.9714 3.16338 11.4744 4.092 11.662C3.4879 11.8268 2.85406 11.8509 2.2392 11.7324C2.50151 12.5477 3.01202 13.2606 3.69937 13.7716C4.38671 14.2825 5.21652 14.5658 6.0728 14.582C5.22203 15.2508 4.24776 15.7452 3.20573 16.037C2.16369 16.3289 1.07435 16.4124 0 16.2828C1.87653 17.487 4.05994 18.1258 6.2896 18.1228" fill="white" />
        </svg>
      </button>

      <!-- Facebook -->
      <button class="btn btn-dark-100 fs-4 fw-bold gap-2 d-flex">
        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
          <g clip-path="url(#clip0_405_78570)">
            <path d="M20 10C20 4.47715 15.5229 0 10 0C4.47715 0 0 4.47715 0 10C0 14.9912 3.65684 19.1283 8.4375 19.8785V12.8906H5.89844V10H8.4375V7.79688C8.4375 5.29063 9.93047 3.90625 12.2146 3.90625C13.3084 3.90625 14.4531 4.10156 14.4531 4.10156V6.5625H13.1922C11.95 6.5625 11.5625 7.3334 11.5625 8.125V10H14.3359L13.8926 12.8906H11.5625V19.8785C16.3432 19.1283 20 14.9912 20 10Z" fill="white" />
            <path d="M13.8926 12.8906L14.3359 10H11.5625V8.125C11.5625 7.33418 11.95 6.5625 13.1922 6.5625H14.4531V4.10156C14.4531 4.10156 13.3088 3.90625 12.2146 3.90625C9.93047 3.90625 8.4375 5.29063 8.4375 7.79688V10H5.89844V12.8906H8.4375V19.8785C9.47287 20.0405 10.5271 20.0405 11.5625 19.8785V12.8906H13.8926Z" fill="#36444F" />
          </g>
          <defs>
            <clipPath id="clip0_405_78570">
              <rect width="20" height="20" fill="white" />
            </clipPath>
          </defs>
        </svg>
      </button>

      <!-- LinkedIn -->
      <button class="btn btn-dark-100 fs-4 fw-bold gap-2 d-flex">
        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
          <g clip-path="url(#clip0_405_78574)">
            <path d="M18.5236 0H1.47639C1.08483 0 0.709301 0.155548 0.432425 0.432425C0.155548 0.709301 0 1.08483 0 1.47639V18.5236C0 18.9152 0.155548 19.2907 0.432425 19.5676C0.709301 19.8445 1.08483 20 1.47639 20H18.5236C18.9152 20 19.2907 19.8445 19.5676 19.5676C19.8445 19.2907 20 18.9152 20 18.5236V1.47639C20 1.08483 19.8445 0.709301 19.5676 0.432425C19.2907 0.155548 18.9152 0 18.5236 0ZM5.96111 17.0375H2.95417V7.48611H5.96111V17.0375ZM4.45556 6.1625C4.11447 6.16058 3.7816 6.05766 3.49895 5.86674C3.21629 5.67582 2.99653 5.40544 2.8674 5.08974C2.73826 4.77404 2.70554 4.42716 2.77336 4.09288C2.84118 3.7586 3.0065 3.4519 3.24846 3.21148C3.49042 2.97107 3.79818 2.80772 4.13289 2.74205C4.4676 2.67638 4.81426 2.71133 5.12913 2.84249C5.44399 2.97365 5.71295 3.19514 5.90205 3.47901C6.09116 3.76288 6.19194 4.09641 6.19167 4.4375C6.19488 4.66586 6.15209 4.89253 6.06584 5.104C5.97959 5.31547 5.85165 5.50742 5.68964 5.66839C5.52763 5.82936 5.33487 5.95607 5.12285 6.04096C4.91083 6.12585 4.68389 6.16718 4.45556 6.1625ZM17.0444 17.0458H14.0389V11.8278C14.0389 10.2889 13.3847 9.81389 12.5403 9.81389C11.6486 9.81389 10.7736 10.4861 10.7736 11.8667V17.0458H7.76667V7.49306H10.6583V8.81667H10.6972C10.9875 8.22917 12.0042 7.225 13.5556 7.225C15.2333 7.225 17.0458 8.22083 17.0458 11.1375L17.0444 17.0458Z" fill="white" />
          </g>
          <defs>
            <clipPath id="clip0_405_78574">
              <rect width="20" height="20" fill="white" />
            </clipPath>
          </defs>
        </svg>
      </button>

    </div>

  </div>
</div>

<!-- Section divider -->
<div class="border-top border-light-200"></div>

<!-- Latest blog posts -->
<div class="container py-5 my-5">

  <div class="mb-5 pb-3">
    <p class="fw-bold fs-xl-4">From the blog</p>
    <p class="fs-1 m-0">The latest industry news, interviews, technologies, and resources.</p>
  </div>

  <div class="row row-cols-auto gx-lg-4 mb-5 pb-3" style="--bs-gutter-y: 4rem;">
    <?php
    $wp_query = new WP_Query();
    $total_pages = 4; // Hard coded total items in page
    $wp_query->query('posts_per_page=' . $total_pages . '&paged=' . $paged);

    while ($wp_query->have_posts()) : $wp_query->the_post();
    ?>
      <div class="col-12 col-lg-6">
        <a href="<?= get_the_permalink() ?>" class="text-decoration-none text-white d-block">
          <div class="w-100 mb-3 pb-3 position-relative" style="background-image: url(<?= get_the_post_thumbnail_url(); ?>);height: 280px; background-size: cover; background-position: center;">
            <div class="d-flex align-items-center flex-row justify-content-between position-absolute bottom-0 start-0 w-100 p-4" style="background: rgba(255, 255, 255, 0.3);border-top: 1px solid rgba(255, 255, 255, 0.5);backdrop-filter: blur(12px);">
              <div class="d-flex align-items-start justify-content-start flex-column">
                <p class="m-0 fw-bold"><?= get_the_author_meta("user_firstname", $author_id) . " " . get_the_author_meta("user_lastname", $author_id) ?></p>
                <p class="m-0"><?= get_the_date("") ?></p>
              </div>

              <p class="fw-bold mb-2 pb-1"><?= get_the_category()[0]->name ?></p>
            </div>
          </div>

          <div class="d-flex flex-row align-items-center justify-content-between mb-2 gap-3">
            <p class="fw-bold fs-xl-6 m-0 text-truncate"><?= get_the_title() ?></p>

            <div style="width: 24px;">
              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M7 17L17 7M17 7H7M17 7V17" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
              </svg>
            </div>
          </div>

          <p class="mb-4"><?= get_the_excerpt() ?></p>

          <p class="text-orange fw-bold d-flex gap-2 align-items-center">
            <span>Read post</span>
            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M5.8335 14.1663L14.1668 5.83301M14.1668 5.83301H5.8335M14.1668 5.83301V14.1663" stroke="#F39C12" stroke-width="1.66667" stroke-linecap="round" stroke-linejoin="round" />
            </svg>
          </p>
        </a>
      </div>
    <?php endwhile; ?>
  </div>

  <div class="border-top border-light-200 py-3 text-center text-lg-end">
    <a href="<?= site_url("/blog") ?>" class="fw-bold fs-3 btn btn-info text-white py-2 px-3">
      View all posts
    </a>
  </div>
</div>


<?php get_footer(); ?>
