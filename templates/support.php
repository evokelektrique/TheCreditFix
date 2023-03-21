<?php

/**
 * Template Name: Support
 */

get_header();
?>

<!-- Hero -->
<div class="mb-5 pb-5">
  <div class="py-5 bg-dark-100">
    <div class="container py-5 text-center d-flex align-items-center justify-content-center flex-column">
      <div class="mb-4 pb-3">
        <p class="fw-bold fs-3 mb-2 pb-1">Contact us</p>
        <p class="fw-bold fs-xl-3 mb-4">Everything you need to know</p>
        <p class="fs-1 m-0">Need something cleared up? Here are our most frequently asked questions.</p>
      </div>

      <div class="input-group rounded-1 overflow-hidden mw-100" style="width: 460px">
        <span class="input-group-prepend">
          <button class="btn btn-outline-secondary bg-white border-end-0 border rounded-0 ms-n3" type="button">
            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M17.5 17.5L14.5834 14.5833M16.6667 9.58333C16.6667 13.4954 13.4954 16.6667 9.58333 16.6667C5.67132 16.6667 2.5 13.4954 2.5 9.58333C2.5 5.67132 5.67132 2.5 9.58333 2.5C13.4954 2.5 16.6667 5.67132 16.6667 9.58333Z" stroke="#667085" stroke-width="1.66667" stroke-linecap="round" stroke-linejoin="round" />
            </svg>
          </button>
        </span>
        <input class="form-control shadow-none border-start-0 border" type="text" placeholder="Search">
      </div>
    </div>
  </div>
</div>

<!-- Description -->
<div class="mb-5 pb-3 text-center">
  <p class="fw-bold fs-xl-4 mb-3 pb-1">Frequently asked questions</p>
  <p class="fs-1 m-0">Everything you need to know about the product and billing.</p>
</div>

<!-- FAQ accordion -->
<div class="container mb-5 pb-3">
  <div class="accordion accordion-flush" id="accordionFlushExample">
    <?php foreach(carbon_get_theme_option("tcf_faqs") as $key => $faq): ?>
    <div class="accordion-item">
      <h2 class="accordion-header" id="flush-heading-<?= $key ?>">
        <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse-<?= $key ?>" aria-expanded="false" aria-controls="flush-collapse-<?= $key ?>">
          <?= $faq["title"] ?>
        </button>
      </h2>
      <div id="flush-collapse-<?= $key ?>" class="accordion-collapse collapse" aria-labelledby="flush-heading-<?= $key ?>" data-bs-parent="#accordionFlushExample">
        <div class="accordion-body"><?= $faq["description"] ?></div>
      </div>
    </div>
    <?php endforeach; ?>
  </div>
</div>

<!-- Still have questions -->
<div class="container py-5 my-5">
  <div class="bg-dark-100 rounded-3 py-5">
    <div class="py-3 text-center">
      <p class="fs-xl-4 mb-3 pb-1 fw-bold">Still have questions?</p>
      <p class="fs-1 mb-3 pb-3">Join over 4,000+ startups already growing with Untitled.</p>

      <div class="d-inline-flex flex-column flex-md-row gap-3">
        <button class="btn btn-white fw-bold p-3">Learn more</button>
        <button class="btn btn-info fw-bold text-white p-3">Get started</button>
      </div>
    </div>
  </div>
</div>

<!-- No catches ! -->
<div class="container py-5 my-5">
  <div class="row gx-lg-5 gy-5 align-items-center">
    <div class="col-12 col-lg-6">
      <p class="fw-bold fs-xl-3 mb-4">No long-term contracts. No catches.</p>
      <p class="fs-1 mb-4 pb-3">Start your 30-day free trial today.</p>

      <div class="d-inline-flex flex-column flex-md-row gap-3">
        <button class="btn btn-white fw-bold p-3 fs-3">Learn more</button>
        <button class="btn btn-info fw-bold text-white p-3 fs-3">Get started</button>
      </div>
    </div>

    <div class="col-12 col-lg-6">
      <img src="<?= get_template_directory_uri() ?>/public/images/support.png" alt="" class="mw-100">
    </div>
  </div>
</div>

<!-- Newsletter -->
<div class="container py-5 my-5">
  <div class="bg-dark-100 rounded-3 py-5">
    <div class="py-3 text-center">
      <p class="fs-xl-4 mb-3 pb-1 fw-bold">Still thinking about it?</p>
      <p class="fs-1 mb-3 pb-3">Sign up for our newsletter and get 10% off your next purchase.</p>

      FORM
    </div>
  </div>
</div>

<?php get_footer(); ?>
