<?php
$card = tcf_get_card($id);
$current_url = admin_url("admin.php?page=tcf-cards&action=view&id=" . $id);

if(isset($_POST["status"])) {
  $status = $_POST["status"];
  tcf_change_status_card($id, $status);
  wp_safe_redirect($current_url);
  exit;
}

?>

<div id="wrap">
  <h2><?php _e('Card', 'tcf'); ?> #<?= $id ?> information</h2>

  <div>
    <ul>
      <li><b>ID</b>&nbsp;<?= $card->id ?></li>
      <li><b>Name on the card</b>&nbsp;<?= $card->name ?></li>
      <li><b>Expiry</b>&nbsp;<?= $card->expiry ?></li>
      <li><b>Card number</b>&nbsp;<?= $card->card_number ?></li>
      <li><b>Opened</b>&nbsp;<?= $card->opened ?></li>
      <li><b>Limit</b>&nbsp;<?= $card->limit ?></li>
      <li><b>Utilization</b>&nbsp;<?= $card->utilization ?></li>
      <li><b>Email</b>&nbsp;<?= $card->email ?></li>
      <li><b>Street</b>&nbsp;<?= $card->street_address ?></li>
      <li><b>City</b>&nbsp;<?= $card->city ?></li>
      <li><b>State address</b>&nbsp;<?= $card->state ?></li>
      <li><b>Province</b>&nbsp;<?= $card->province ?> </li>
    </ul>

    <hr>

    <h2>Uploaded files</h2>

    <a href="<?= $card->card_report_one ?>"><b>Click here to open file - Card report one (<?= basename($card->card_report_one) ?>)</b></a>
    <br>
    <a href="<?= $card->card_report_two ?>"><b>Click here to open file - Card report two (<?= basename($card->card_report_two) ?>)</b></a>

    <hr>
    <h2>Status</h2>
    <b>current status:</b>&nbsp;<?= tcf_get_status($card); ?>
    <form action="<?= $current_url ?>" method="POST">
      <select name="status" id="status">
        <option value="0">Review</option>
        <option value="1">Rejected</option>
        <option value="2">Accepted</option>
      </select>

      <button type="submit" class="button button-primary">Change</button>
    </form>
  </div>
</div>
