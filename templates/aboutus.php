<?php

/**
 * Template Name: About us
 */

get_header();
?>

<!-- Hero -->
<div class="container my-5 py-5">
  <div class="row row-cols-auto gx-lg-5">
    <div class="col-12">
      <p class="fw-bold fs-3 text-orange mb-2 pb-1">Nice to meet you</p>
    </div>

    <div class="col-12 col-md-8">
      <p class="fw-bold fs-xl-3">Our mission is to increase the GDP of your startup</p>
    </div>

    <div class="col-12 col-md-4">
      <p class="m-0 pt-lg-3">Untitled is a technology company that builds infrastructure for your startup, so you don’t have to. Businesses of every size—from new startups to public companies—use our software to manage their businesses.</p>
    </div>
  </div>
</div>

<!-- Stats -->
<div class="container my-5 py-5">
  <div class="bg-dark-100 rounded py-5">
    <div class="py-3">
      <div class="row">
        <div class="col-12 col-md-4 text-center">
          <p class="fw-bold fs-xl-2 mb-2 pb-1 text-orange">400+</p>
          <p class="m-0 fs-2">Projects completed</p>
        </div>

        <div class="col-12 col-md-4 text-center">
          <p class="fw-bold fs-xl-2 mb-2 pb-1 text-orange">600%</p>
          <p class="m-0 fs-2">Return on investment</p>
        </div>

        <div class="col-12 col-md-4 text-center">
          <p class="fw-bold fs-xl-2 mb-2 pb-1 text-orange">10k</p>
          <p class="m-0 fs-2">Global downloads</p>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Our story -->
<div class="container my-5 py-5">
  <div class="mb-5 pb-3">
    <p class="text-orange fw-bold fs-3 mb-2 pb-1">Our story</p>
    <p class="fw-bold fs-xl-3 pb-3 mb-1">We’re just getting started</p>
    <p class="fs-1 m-0">We’ve already helped over 4,000 companies achieve remarkable results.</p>
  </div>

  <div class="row gy-5 gx-lg-5">
    <div class="col-12 col-md-6">
      Mi tincidunt elit, id quisque ligula ac diam, amet. Vel etiam suspendisse morbi eleifend faucibus eget vestibulum felis. Dictum quis montes, sit sit. Tellus aliquam enim urna, etiam.
      Eget quis mi enim, leo lacinia pharetra, semper. Eget in volutpat mollis at volutpat lectus velit, sed auctor. Porttitor fames arcu quis fusce augue enim. Quis at habitant diam at. Suscipit tristique risus, at donec. In turpis vel et quam imperdiet. Ipsum molestie aliquet sodales id est ac volutpat.
      Odio felis sagittis, morbi feugiat tortor vitae feugiat fusce aliquet. Nam elementum urna nisi aliquet erat dolor enim. Ornare id morbi eget ipsum. Sapien, dictum molestie sem tempor. Diam elit, orci, tincidunt aenean tempus. Quis velit eget ut tortor tellus. Sed vel, congue felis elit erat nam nibh orci.
    </div>

    <div class="col-12 col-md-6">
      Sagittis et eu at elementum, quis in. Proin praesent volutpat egestas sociis sit lorem nunc nunc sit. Eget diam curabitur mi ac. Auctor rutrum lacus malesuada massa ornare et. Vulputate consectetur ac ultrices at diam dui eget fringilla tincidunt. Arcu sit dignissim massa erat cursus vulputate gravida id. Sed quis auctor vulputate hac elementum gravida cursus dis.
      Lectus id duis vitae porttitor enim gravida morbi.
      Eu turpis posuere semper feugiat volutpat elit, ultrices suspendisse. Auctor vel in vitae placerat.
      Suspendisse maecenas ac donec scelerisque diam sed est duis purus.
      Ipsum sit mattis nulla quam nulla. Gravida id gravida ac enim mauris id. Non pellentesque congue eget consectetur turpis. Sapien, dictum molestie sem tempor.
    </div>
  </div>
</div>

<!-- Success stories -->
<div class="container my-5 py-5">
  <div class="d-flex flex-column justify-content-between flex-md-row gap-3 align-items-start mb-5 pb-3">
    <div>
      <p class="fw-bold fs-xl-4 mb-3 pb-1">We’re proud of our success stories</p>
      <p class="m-0 fs-1">Case studies from some of our amazing customers who are building faster.</p>
    </div>

    <div class="d-inline-flex flex-column flex-md-row gap-3">
      <a href="#" class="btn btn-dark-100 fw-bold text-white">Our customers</a>
      <a href="<?= site_url("/register") ?>" class="btn btn-info fw-bold text-white">Create account</a>
    </div>
  </div>

  <div class="swiper swiper-navigational">
    <div class="swiper-wrapper mb-3 pb-3">
      <?php foreach(carbon_get_theme_option("tcf_case_studies") as $case): ?>
      <div class="swiper-slide">
        <div class="p-4" style="background-color: <?= $case["background_color"] ?>;">
          <img src="<?= $case["image"] ?>" alt="" class="mb-5 pb-5">
          <div class="mt-4 pt-2">
            <div class="p-3" style="background: rgba(255, 255, 255, 0.3);border: 1px solid rgba(255, 255, 255, 0.5);">
              <div class="p-3">
                <p class="fw-bold mb-3 fs-xl-4"><?= $case["title"] ?></p>
                <p class="fs-2 mb-3 pb-3"><?= $case["description"] ?></p>
                <a href="<?= $case["url"] ?>" class="text-decoration-none fw-bold gap-1 text-white d-inline-flex align-items-center justify-content-start">
                  <span>Read case study</span>

                  <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M5.83325 14.1668L14.1666 5.8335M14.1666 5.8335H5.83325M14.1666 5.8335V14.1668" stroke="white" stroke-width="1.66667" stroke-linecap="round" stroke-linejoin="round" />
                  </svg>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <?php endforeach; ?>
    </div>

    <div class="d-inline-flex gap-3">
      <div class="swiper-button-prev" role="button">
        <svg width="56" height="56" viewBox="0 0 56 56" fill="none" xmlns="http://www.w3.org/2000/svg">
          <g filter="url(#filter0_b_396_64677)">
            <rect width="56" height="56" rx="28" fill="#36444F" />
            <path d="M35 28H21M21 28L28 35M21 28L28 21" stroke="#F39C12" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
            <rect x="0.5" y="0.5" width="55" height="55" rx="27.5" stroke="#36444F" />
          </g>
          <defs>
            <filter id="filter0_b_396_64677" x="-8" y="-8" width="72" height="72" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
              <feFlood flood-opacity="0" result="BackgroundImageFix" />
              <feGaussianBlur in="BackgroundImageFix" stdDeviation="4" />
              <feComposite in2="SourceAlpha" operator="in" result="effect1_backgroundBlur_396_64677" />
              <feBlend mode="normal" in="SourceGraphic" in2="effect1_backgroundBlur_396_64677" result="shape" />
            </filter>
          </defs>
        </svg>
      </div>

      <div class="swiper-button-next" role="button">
        <svg width="56" height="56" viewBox="0 0 56 56" fill="none" xmlns="http://www.w3.org/2000/svg">
          <g filter="url(#filter0_b_396_64680)">
            <rect width="56" height="56" rx="28" fill="#36444F" />
            <path d="M21 28H35M35 28L28 21M35 28L28 35" stroke="#F39C12" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
            <rect x="0.5" y="0.5" width="55" height="55" rx="27.5" stroke="#36444F" />
          </g>
          <defs>
            <filter id="filter0_b_396_64680" x="-8" y="-8" width="72" height="72" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
              <feFlood flood-opacity="0" result="BackgroundImageFix" />
              <feGaussianBlur in="BackgroundImageFix" stdDeviation="4" />
              <feComposite in2="SourceAlpha" operator="in" result="effect1_backgroundBlur_396_64680" />
              <feBlend mode="normal" in="SourceGraphic" in2="effect1_backgroundBlur_396_64680" result="shape" />
            </filter>
          </defs>
        </svg>
      </div>
    </div>
  </div>
</div>


<!-- Team members -->
<div class="container my-5 py-5">
  <div class="d-flex flex-column justify-content-between flex-md-row gap-3 align-items-start mb-5 pb-3">
    <div>
      <p class="fw-bold fs-xl-4 mb-3 pb-1">We’re proud of our success stories</p>
      <p class="m-0 fs-1">Case studies from some of our amazing customers who are building faster.</p>
    </div>

    <div class="d-inline-flex flex-column flex-md-row gap-3">
      <a href="#" class="btn btn-dark-100 fw-bold text-white">Our customers</a>
      <a href="<?= site_url("/register") ?>" class="btn btn-info fw-bold text-white">Create account</a>
    </div>
  </div>

  <div class="swiper swiper-navigational">
    <div class="swiper-wrapper mb-3 pb-3">

      <?php foreach(carbon_get_theme_option("tcf_team") as $team): ?>
      <div class="swiper-slide position-relative" style="background-image: url(<?= $team["image"] ?>);background-size:cover;background-position:center;background-repeat:no-repeat;">
        <div class="member-card">
          <div class="member-card-content position-absolute bottom-0 start-0 w-100 p-4">
            <a href="<?= $team["url_twitter"] ?>" class="text-white text-decoration-none d-flex align-items-center justify-content-between gap-3 mb-3">
              <span class="fw-bold fs-xl-4"><?= $team["title"] ?></span>

              <svg width="24" height="30" viewBox="0 0 24 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M7 23L17 13M17 13H7M17 13V23" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
              </svg>
            </a>

            <p class="fw-bold fs-2 mb-1"><?= $team["subject"] ?></p>
            <p class="mb-3 pb-3 fs-3"><?= $team["description"] ?></p>

            <div>
              <!-- Twitter -->
              <a href="<?= $team["url_twitter"] ?>" class="text-decoration-none me-3 pe-1">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M7.55016 21.7502C16.6045 21.7502 21.5583 14.2469 21.5583 7.74211C21.5583 7.53117 21.5536 7.31554 21.5442 7.1046C22.5079 6.40771 23.3395 5.5445 24 4.55554C23.1025 4.95484 22.1496 5.21563 21.1739 5.32898C22.2013 4.71315 22.9705 3.74572 23.3391 2.60601C22.3726 3.1788 21.3156 3.58286 20.2134 3.80085C19.4708 3.01181 18.489 2.48936 17.4197 2.3143C16.3504 2.13923 15.2532 2.32129 14.2977 2.83234C13.3423 3.34339 12.5818 4.15495 12.1338 5.14156C11.6859 6.12816 11.5754 7.23486 11.8195 8.29054C9.86249 8.19233 7.94794 7.68395 6.19998 6.79834C4.45203 5.91274 2.90969 4.66968 1.67297 3.14976C1.0444 4.23349 0.852057 5.51589 1.13503 6.73634C1.418 7.95678 2.15506 9.02369 3.19641 9.72023C2.41463 9.69541 1.64998 9.48492 0.965625 9.10617V9.1671C0.964925 10.3044 1.3581 11.4068 2.07831 12.287C2.79852 13.1672 3.80132 13.7708 4.91625 13.9952C4.19206 14.1934 3.43198 14.2222 2.69484 14.0796C3.00945 15.0577 3.62157 15.9131 4.44577 16.5266C5.26997 17.14 6.26512 17.4808 7.29234 17.5015C5.54842 18.8714 3.39417 19.6144 1.17656 19.6109C0.783287 19.6103 0.390399 19.5861 0 19.5387C2.25286 20.984 4.87353 21.7516 7.55016 21.7502Z" fill="white" />
                </svg>
              </a>

              <!-- Linkedin -->
              <a href="<?= $team["url_linkedin"] ?>" class="text-decoration-none me-3 pe-1">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <g clip-path="url(#clip0_396_66184)">
                    <path d="M22.2234 0H1.77187C0.792187 0 0 0.773438 0 1.72969V22.2656C0 23.2219 0.792187 24 1.77187 24H22.2234C23.2031 24 24 23.2219 24 22.2703V1.72969C24 0.773438 23.2031 0 22.2234 0ZM7.12031 20.4516H3.55781V8.99531H7.12031V20.4516ZM5.33906 7.43438C4.19531 7.43438 3.27188 6.51094 3.27188 5.37187C3.27188 4.23281 4.19531 3.30937 5.33906 3.30937C6.47813 3.30937 7.40156 4.23281 7.40156 5.37187C7.40156 6.50625 6.47813 7.43438 5.33906 7.43438ZM20.4516 20.4516H16.8937V14.8828C16.8937 13.5562 16.8703 11.8453 15.0422 11.8453C13.1906 11.8453 12.9094 13.2937 12.9094 14.7891V20.4516H9.35625V8.99531H12.7687V10.5609H12.8156C13.2891 9.66094 14.4516 8.70938 16.1813 8.70938C19.7859 8.70938 20.4516 11.0813 20.4516 14.1656V20.4516Z" fill="white" />
                  </g>
                  <defs>
                    <clipPath id="clip0_396_66184">
                      <rect width="24" height="24" fill="white" />
                    </clipPath>
                  </defs>
                </svg>

              </a>

              <!-- Deribbble -->
              <a href="<?= $team["url_dribbble"] ?>" class="text-decoration-none me-3 pe-1">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M12 0C5.37527 0 0 5.37527 0 12C0 18.6248 5.37527 24 12 24C18.6117 24 24 18.6248 24 12C24 5.37527 18.6117 0 12 0ZM19.9262 5.53145C21.3579 7.27549 22.217 9.50107 22.243 11.9089C21.9046 11.8439 18.5206 11.154 15.1106 11.5835C15.0325 11.4143 14.9675 11.2321 14.8894 11.0499C14.6811 10.5554 14.4469 10.0477 14.2126 9.56618C17.9869 8.0304 19.705 5.81779 19.9262 5.53145ZM12 1.77007C14.603 1.77007 16.9848 2.74621 18.7939 4.34707C18.6117 4.60738 17.0629 6.67679 13.4186 8.04338C11.7397 4.95878 9.87855 2.43384 9.5922 2.04338C10.3601 1.86117 11.1671 1.77007 12 1.77007ZM7.63995 2.73319C7.91325 3.09761 9.73538 5.63558 11.4404 8.65508C6.65076 9.9306 2.42083 9.90458 1.96529 9.90458C2.62907 6.72885 4.77657 4.08676 7.63995 2.73319ZM1.74404 12.0131C1.74404 11.9089 1.74404 11.8048 1.74404 11.7007C2.18655 11.7136 7.15835 11.7787 12.2733 10.243C12.5727 10.8156 12.846 11.4013 13.1063 11.9869C12.9761 12.026 12.8329 12.0651 12.7028 12.1041C7.41865 13.8091 4.60738 18.4685 4.3731 18.859C2.7462 17.0499 1.74404 14.6421 1.74404 12.0131ZM12 22.256C9.6312 22.256 7.44469 21.449 5.71367 20.0954C5.89588 19.718 7.97827 15.7094 13.757 13.692C13.783 13.679 13.7961 13.679 13.8221 13.666C15.2668 17.4013 15.8525 20.5379 16.0087 21.436C14.7722 21.9696 13.4186 22.256 12 22.256ZM17.7136 20.4989C17.6096 19.8742 17.0629 16.8807 15.7223 13.1974C18.9371 12.6898 21.7484 13.5228 22.0998 13.6399C21.6573 16.4902 20.0173 18.9501 17.7136 20.4989Z" fill="white" />
                </svg>

              </a>
            </div>
          </div>
        </div>
      </div>
      <?php endforeach; ?>

    </div>

    <div class="d-inline-flex gap-3">
      <div class="swiper-button-prev" role="button">
        <svg width="56" height="56" viewBox="0 0 56 56" fill="none" xmlns="http://www.w3.org/2000/svg">
          <g filter="url(#filter0_b_396_64677)">
            <rect width="56" height="56" rx="28" fill="#36444F" />
            <path d="M35 28H21M21 28L28 35M21 28L28 21" stroke="#F39C12" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
            <rect x="0.5" y="0.5" width="55" height="55" rx="27.5" stroke="#36444F" />
          </g>
          <defs>
            <filter id="filter0_b_396_64677" x="-8" y="-8" width="72" height="72" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
              <feFlood flood-opacity="0" result="BackgroundImageFix" />
              <feGaussianBlur in="BackgroundImageFix" stdDeviation="4" />
              <feComposite in2="SourceAlpha" operator="in" result="effect1_backgroundBlur_396_64677" />
              <feBlend mode="normal" in="SourceGraphic" in2="effect1_backgroundBlur_396_64677" result="shape" />
            </filter>
          </defs>
        </svg>
      </div>

      <div class="swiper-button-next" role="button">
        <svg width="56" height="56" viewBox="0 0 56 56" fill="none" xmlns="http://www.w3.org/2000/svg">
          <g filter="url(#filter0_b_396_64680)">
            <rect width="56" height="56" rx="28" fill="#36444F" />
            <path d="M21 28H35M35 28L28 21M35 28L28 35" stroke="#F39C12" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
            <rect x="0.5" y="0.5" width="55" height="55" rx="27.5" stroke="#36444F" />
          </g>
          <defs>
            <filter id="filter0_b_396_64680" x="-8" y="-8" width="72" height="72" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
              <feFlood flood-opacity="0" result="BackgroundImageFix" />
              <feGaussianBlur in="BackgroundImageFix" stdDeviation="4" />
              <feComposite in2="SourceAlpha" operator="in" result="effect1_backgroundBlur_396_64680" />
              <feBlend mode="normal" in="SourceGraphic" in2="effect1_backgroundBlur_396_64680" result="shape" />
            </filter>
          </defs>
        </svg>
      </div>
    </div>
  </div>
</div>

<?php get_footer(); ?>
