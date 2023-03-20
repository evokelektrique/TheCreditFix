<?php

/**
 * My Account navigation
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/myaccount/navigation.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 2.6.0
 */

if (!defined('ABSPATH')) {
  exit;
}

do_action('woocommerce_before_account_navigation');
?>
<div class="container py-5 my-5">
  <div class="row cols-auto gx-lg-4 gy-4">
    <div class="col-12 col-lg-3">
      <nav class="bg-dark-100 rounded p-3">
        <ul class="p-0 m-0 list-unstyled d-flex flex-column gap-1">
          <?php foreach (wc_get_account_menu_items() as $endpoint => $label) : ?>
            <li class="<?php echo wc_get_account_menu_item_classes($endpoint); ?>">
              <a href="<?php echo esc_url(wc_get_account_endpoint_url($endpoint)); ?>" class="btn py-2 text-white fw-bold d-flex align-items-center">
                <span class="me-2 pe-1 d-flex align-items-center">
                  <!-- Dashboard -->
                  <?php if (trim(strtolower($label)) === "dashboard") : ?>
                    <svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M8 15.0715V17.0715M12 11.0715V17.0715M16 7.07153V17.0715M7.8 21.0715H16.2C17.8802 21.0715 18.7202 21.0715 19.362 20.7446C19.9265 20.4569 20.3854 19.998 20.673 19.4335C21 18.7918 21 17.9517 21 16.2715V7.87153C21 6.19138 21 5.3513 20.673 4.70956C20.3854 4.14508 19.9265 3.68613 19.362 3.39851C18.7202 3.07153 17.8802 3.07153 16.2 3.07153H7.8C6.11984 3.07153 5.27976 3.07153 4.63803 3.39851C4.07354 3.68613 3.6146 4.14508 3.32698 4.70956C3 5.3513 3 6.19138 3 7.87153V16.2715C3 17.9517 3 18.7918 3.32698 19.4335C3.6146 19.998 4.07354 20.4569 4.63803 20.7446C5.27976 21.0715 6.11984 21.0715 7.8 21.0715Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                  <?php endif; ?>

                  <!-- Credit Cards -->
                  <?php if (trim(strtolower($label)) === "credit cards") : ?>
                    <svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M2 12.2144L11.6422 17.0355C11.7734 17.1011 11.839 17.1339 11.9078 17.1468C11.9687 17.1583 12.0313 17.1583 12.0922 17.1468C12.161 17.1339 12.2266 17.1011 12.3578 17.0355L22 12.2144M2 17.2144L11.6422 22.0355C11.7734 22.1011 11.839 22.1339 11.9078 22.1468C11.9687 22.1583 12.0313 22.1583 12.0922 22.1468C12.161 22.1339 12.2266 22.1011 12.3578 22.0355L22 17.2144M2 7.21442L11.6422 2.39331C11.7734 2.32771 11.839 2.29492 11.9078 2.28201C11.9687 2.27058 12.0313 2.27058 12.0922 2.28201C12.161 2.29492 12.2266 2.32771 12.3578 2.39331L22 7.21442L12.3578 12.0355C12.2266 12.1011 12.161 12.1339 12.0922 12.1468C12.0313 12.1583 11.9687 12.1583 11.9078 12.1468C11.839 12.1339 11.7734 12.1011 11.6422 12.0355L2 7.21442Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                  <?php endif; ?>

                  <!-- My Orders -->
                  <?php if (trim(strtolower($label)) === "my orders") : ?>
                    <svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M6 15.3572L8 17.3572L12.5 12.8572M8 8.35718V5.55718C8 4.43707 8 3.87702 8.21799 3.4492C8.40973 3.07287 8.71569 2.76691 9.09202 2.57516C9.51984 2.35718 10.0799 2.35718 11.2 2.35718H18.8C19.9201 2.35718 20.4802 2.35718 20.908 2.57516C21.2843 2.76691 21.5903 3.07287 21.782 3.4492C22 3.87702 22 4.43707 22 5.55718V13.1572C22 14.2773 22 14.8373 21.782 15.2652C21.5903 15.6415 21.2843 15.9474 20.908 16.1392C20.4802 16.3572 19.9201 16.3572 18.8 16.3572H16M5.2 22.3572H12.8C13.9201 22.3572 14.4802 22.3572 14.908 22.1392C15.2843 21.9474 15.5903 21.6415 15.782 21.2652C16 20.8373 16 20.2773 16 19.1572V11.5572C16 10.4371 16 9.87702 15.782 9.4492C15.5903 9.07287 15.2843 8.76691 14.908 8.57516C14.4802 8.35718 13.9201 8.35718 12.8 8.35718H5.2C4.0799 8.35718 3.51984 8.35718 3.09202 8.57516C2.71569 8.76691 2.40973 9.07287 2.21799 9.4492C2 9.87702 2 10.4371 2 11.5572V19.1572C2 20.2773 2 20.8373 2.21799 21.2652C2.40973 21.6415 2.71569 21.9474 3.09202 22.1392C3.51984 22.3572 4.07989 22.3572 5.2 22.3572Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                  <?php endif; ?>

                  <!-- Credit Calculator -->
                  <?php if (trim(strtolower($label)) === "credit calculator") : ?>
                    <svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M12 2.5C13.3132 2.5 14.6136 2.75866 15.8268 3.26121C17.0401 3.76375 18.1425 4.50035 19.0711 5.42893C19.9997 6.35752 20.7363 7.45991 21.2388 8.67317C21.7413 9.88643 22 11.1868 22 12.5M12 2.5V12.5M12 2.5C6.47715 2.5 2 6.97715 2 12.5C2 18.0228 6.47715 22.5 12 22.5C17.5228 22.5 22 18.0229 22 12.5M12 2.5C17.5228 2.5 22 6.97716 22 12.5M22 12.5L12 12.5M22 12.5C22 14.0781 21.6265 15.6338 20.9101 17.0399C20.1936 18.446 19.1546 19.6626 17.8779 20.5902L12 12.5" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                  <?php endif; ?>

                  <!-- Disputes -->
                  <?php if (trim(strtolower($label)) === "disputes") : ?>
                    <svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M22 21.6426V19.6426C22 17.7787 20.7252 16.2126 19 15.7686M15.5 3.93334C16.9659 4.52672 18 5.96389 18 7.64258C18 9.32127 16.9659 10.7584 15.5 11.3518M17 21.6426C17 19.7788 17 18.8469 16.6955 18.1118C16.2895 17.1317 15.5108 16.353 14.5307 15.9471C13.7956 15.6426 12.8638 15.6426 11 15.6426H8C6.13623 15.6426 5.20435 15.6426 4.46927 15.9471C3.48915 16.353 2.71046 17.1317 2.30448 18.1118C2 18.8469 2 19.7788 2 21.6426M13.5 7.64258C13.5 9.85172 11.7091 11.6426 9.5 11.6426C7.29086 11.6426 5.5 9.85172 5.5 7.64258C5.5 5.43344 7.29086 3.64258 9.5 3.64258C11.7091 3.64258 13.5 5.43344 13.5 7.64258Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                  <?php endif; ?>


                  <!-- Profile -->
                  <?php if (trim(strtolower($label)) === "profile") : ?>
                    <svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M3 20.7856C5.33579 18.3082 8.50702 16.7856 12 16.7856C15.493 16.7856 18.6642 18.3082 21 20.7856M16.5 8.28564C16.5 10.7709 14.4853 12.7856 12 12.7856C9.51472 12.7856 7.5 10.7709 7.5 8.28564C7.5 5.80036 9.51472 3.78564 12 3.78564C14.4853 3.78564 16.5 5.80036 16.5 8.28564Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                  <?php endif; ?>

                  <!-- Subscriptions -->
                  <?php if (trim(strtolower($label)) === "subscriptions") : ?>
                    <svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M12.9996 11.9281L3.49964 21.4281M14.0181 4.4666C15.2361 5.2748 16.4068 6.22763 17.5008 7.32162C18.6042 8.42505 19.564 9.60654 20.3767 10.8359M9.2546 8.82427L6.37973 7.86598C6.04865 7.75562 5.68398 7.82585 5.41756 8.05128L2.56041 10.4689C1.97548 10.9638 2.14166 11.9057 2.86064 12.1706L5.56784 13.168M11.6807 19.2807L12.6781 21.9879C12.943 22.7068 13.8849 22.873 14.3798 22.2881L16.7974 19.4309C17.0228 19.1645 17.0931 18.7998 16.9827 18.4688L16.0244 15.5939M19.3482 3.19886L14.4418 4.0166C13.9119 4.1049 13.426 4.36531 13.0591 4.75755L6.446 11.8267C4.73185 13.6591 4.77953 16.5206 6.55378 18.2949C8.32803 20.0691 11.1896 20.1168 13.022 18.4027L20.0911 11.7896C20.4834 11.4227 20.7438 10.9367 20.8321 10.4069L21.6498 5.50044C21.8754 4.1468 20.7019 2.97325 19.3482 3.19886Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                  <?php endif; ?>

                  <!-- Logout -->
                  <?php if (trim(strtolower($label)) === "logout") : ?>
                    <svg width="21" height="20" viewBox="0 0 21 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M16.3332 9.99984H4.6665M4.6665 9.99984L10.4998 15.8332M4.6665 9.99984L10.4998 4.1665" stroke="white" stroke-width="1.66667" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                  <?php endif; ?>

                </span>

                <span><?php echo esc_html($label); ?></span>
              </a>
            </li>
          <?php endforeach; ?>
        </ul>
      </nav>
    </div>

    <?php do_action('woocommerce_after_account_navigation'); ?>
