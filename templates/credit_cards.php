<?php
require_once(__DIR__ . "/../includes/tables/cards/card-functions.php");
$user = wp_get_current_user();
$user_id = $user->ID;
$cards = tcf_get_user_cards([], $user_id);
?>
<div class="bg-dark-100 rounded p-4">
  <div class="d-flex flex-column flex-md-row justify-content-between gap-3 mb-4">
    <div>
      <p class="fw-bold fs-2 mb-1">Credit Cards List</p>
      <p class="m-0 fs-4">You can see the details of every card you add.</p>
    </div>

    <a href="<?= site_url("/my-account/credit_cards_new/") ?>" class="btn btn-indigo fw-bold gap-2 d-flex align-items-center">
      <span>
        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M9.99984 4.1665V15.8332M4.1665 9.99984H15.8332" stroke="white" stroke-width="1.66667" stroke-linecap="round" stroke-linejoin="round" />
        </svg>
      </span>

      <span>
        Add New Card
      </span>
    </a>
  </div>


  <div class="table-responsive">
    <table class="table table-borderless text-white table-sm">
      <thead>
        <tr>
          <th class="pb-4" scope="col">Credit Card</th>
          <th class="pb-4" scope="col">Last assessed</th>
          <th class="pb-4" scope="col">Status</th>
          <th class="pb-4" scope="col">Account</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($cards as $card) : ?>
          <tr>
            <th class="pb-3">
              <p class="m-0 fs-4 fw-bold"><?= $card->card_number ?></p>
              <p class="m-0 fs-4"><?= $card->name ?></p>
            </th>

            <th class="pb-3">
              <?php
              $updated_at = date_create($card->updated_at);
              $date = date_format($updated_at, "d M Y");
              echo $date;
              ?>
            </th>

            <th class="pb-3">
              <?php
                $status_classes = "";
                if($card->status == 0) {
                  $status_classes = "bg-white text-indigo";
                }
                if($card->status == 1) {
                  $status_classes = "bg-white text-dark-200";
                }
                if($card->status == 2) {
                  $status_classes = "bg-success-100 text-success";
                }
              ?>
              <span class="rounded-pill py-1 px-2 <?= $status_classes ?>">
                <?php if ($card->status == 2) : ?>
                  <svg width="6" height="6" viewBox="0 0 6 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <circle cx="3" cy="3" r="3" fill="#12B76A" />
                  </svg>
                <?php else : ?>
                  <svg width="6" height="6" viewBox="0 0 6 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <circle cx="3" cy="3" r="3" fill="#667085" />
                  </svg>
                <?php endif; ?>
                <?= tcf_get_status($card) ?>
              </span>
            </th>

            <th class="pb-3">
              <div class="d-flex gap-3 align-items-center">
                <div>
                  <svg width="46" height="32" viewBox="0 0 46 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect x="0.5" y="0.5" width="45" height="31" rx="5.5" fill="white" />
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M22.9053 22.4392C21.3266 23.7699 19.2787 24.5732 17.0409 24.5732C12.0478 24.5732 8 20.5736 8 15.6399C8 10.7061 12.0478 6.70654 17.0409 6.70654C19.2787 6.70654 21.3266 7.50987 22.9053 8.8406C24.484 7.50987 26.5319 6.70654 28.7697 6.70654C33.7628 6.70654 37.8106 10.7061 37.8106 15.6399C37.8106 20.5736 33.7628 24.5732 28.7697 24.5732C26.5319 24.5732 24.484 23.7699 22.9053 22.4392Z" fill="#ED0006" />
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M22.9053 22.4392C24.8492 20.8006 26.0818 18.3625 26.0818 15.6399C26.0818 12.9173 24.8492 10.4791 22.9053 8.8406C24.484 7.50987 26.5319 6.70654 28.7697 6.70654C33.7628 6.70654 37.8106 10.7061 37.8106 15.6399C37.8106 20.5736 33.7628 24.5732 28.7697 24.5732C26.5319 24.5732 24.484 23.7699 22.9053 22.4392Z" fill="#F9A000" />
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M22.9055 22.4393C24.8494 20.8008 26.082 18.3627 26.082 15.6401C26.082 12.9175 24.8494 10.4794 22.9055 8.84082C20.9616 10.4794 19.729 12.9175 19.729 15.6401C19.729 18.3627 20.9616 20.8008 22.9055 22.4393Z" fill="#FF5E00" />
                    <rect x="0.5" y="0.5" width="45" height="31" rx="5.5" stroke="#F2F4F7" />
                  </svg>
                </div>

                <div class="d-flex flex-column align-items-center">
                  <p class="m-0 fs-4">Expiry <?= $card->expiry ?></p>
                </div>
              </div>
            </th>
          </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  </div>

</div>
