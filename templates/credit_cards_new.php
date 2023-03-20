<div class="">
  <div>
    <p class="fw-bold fs-2 mb-1">Add new Card</p>
    <p class="fs-4 m-0">Send us your card details and we will have a review on it.</p>
  </div>

  <div class="my-4 w-100 bg-dark-100" style="height: 1px;"></div>

  <!-- Form -->
  <form action="#" method="POST" id="new_card" enctype="multipart/form-data">
    <div class="row row-cols-auto gx-lg-5 gx-md-4 gx-0 gy-3">

      <!-- Card details -->
      <div class="col-12 col-lg-4">
        <p class="m-0 fw-bold fs-4">Cart details</p>
      </div>
      <div class="col-12 col-lg-8">
        <div class="row row-cols-auto gy-3 gx-lg-3">

          <!-- Name on card -->
          <div class="col-12 col-lg-8">
            <label for="name" class="mb-1">Name on card</label>
            <input type="text" class="form-control shadow-none" id="name" name="name" required>
          </div>

          <!-- Expiry -->
          <div class="col-12 col-lg-4">
            <label for="expiry" class="mb-1">Expiry</label>
            <input type="text" class="form-control shadow-none mask_element" id="expiry" name="expiry" required data-mask="00/0000">
          </div>

          <!-- Card number -->
          <div class="col-12">
            <label for="card_number" class="mb-1">Card number</label>
            <input type="text" class="form-control shadow-none mask_element" id="card_number" name="card_number" required data-mask="0000-0000-0000-0000">
          </div>

          <!-- Opened -->
          <div class="col-12 col-lg-4">
            <label for="opened" class="mb-1">Opened</label>
            <input type="text" class="form-control shadow-none mask_element" id="opened" name="opened" required data-mask="0000">
          </div>

          <!-- Limit -->
          <div class="col-12 col-lg-4">
            <label for="limit" class="mb-1">Limit</label>
            <input type="text" class="form-control shadow-none mask_number_element" id="limit" name="limit" required>
          </div>

          <!-- Utilization -->
          <div class="col-12 col-lg-4">
            <label for="utilization" class="mb-1">Utilization</label>
            <input type="text" class="form-control shadow-none mask_element" id="utilization" name="utilization" required data-mask="{%}000">
          </div>

        </div>
      </div>

      <div class="col-12">
        <div class="my-4 w-100 bg-dark-100" style="height: 1px;"></div>
      </div>

      <!-- Email address -->
      <div class="col-12 col-lg-4">
        <p class="m-0 fw-bold fs-4">Email address</p>
        <p class="m-0 fs-4">Invoices will be sent to this email address.</p>
      </div>
      <div class="col-12 col-lg-8">
        <div class="row row-cols-auto gy-3">
          <div class="col-12">
            <input type="email" class="form-control shadow-none" name="email" required >
          </div>
        </div>
      </div>

      <div class="col-12">
        <div class="my-4 w-100 bg-dark-100" style="height: 1px;"></div>
      </div>

      <!-- Street address -->
      <div class="col-12 col-lg-4">
        <p class="m-0 fw-bold fs-4">Street address</p>
      </div>
      <div class="col-12 col-lg-8">
        <div class="row row-cols-auto gy-3">
          <div class="col-12">
            <input type="text" class="form-control shadow-none" name="street_address" required >
          </div>
        </div>
      </div>

      <div class="col-12">
        <div class="my-4 w-100 bg-dark-100" style="height: 1px;"></div>
      </div>

      <!-- City -->
      <div class="col-12 col-lg-4">
        <p class="m-0 fw-bold fs-4">City</p>
      </div>
      <div class="col-12 col-lg-8">
        <div class="row row-cols-auto gy-3">
          <div class="col-12">
            <input type="text" class="form-control shadow-none" name="city" required >
          </div>
        </div>
      </div>

      <div class="col-12">
        <div class="my-4 w-100 bg-dark-100" style="height: 1px;"></div>
      </div>

      <!-- State / Province -->
      <div class="col-12 col-lg-4">
        <p class="m-0 fw-bold fs-4">State / Province</p>
      </div>
      <div class="col-12 col-lg-8">
        <div class="row row-cols-auto gy-3 gx-lg-4">
          <div class="col-12 col-lg-4">
            <input type="text" class="form-control shadow-none" name="state" required >
          </div>

          <div class="col-12 col-lg-4">
            <input type="text" class="form-control shadow-none mask_element" data-mask="00000" name="province" required >
          </div>
        </div>
      </div>

      <div class="col-12">
        <div class="my-4 w-100 bg-dark-100" style="height: 1px;"></div>
      </div>

      <!-- Card Reports -->
      <div class="col-12 col-lg-4">
        <p class="m-0 fw-bold fs-4">Card Reports</p>
        <p class="m-0 fs-4">Upload your updated credit reports like Bill utility and Licences</p>
      </div>
      <div class="col-12 col-lg-8">
        <div class="row row-cols-auto gy-3 gx-lg-4">
          <div class="col-12 col-lg-6">
            <input type="file" class="form-control shadow-none" name="card_report_one" required >
          </div>

          <div class="col-12 col-lg-6">
            <input type="file" class="form-control shadow-none" name="card_report_two" required >
          </div>
        </div>
      </div>

      <div class="col-12">
        <div class="my-4 w-100 bg-dark-100" style="height: 1px;"></div>
      </div>
    </div>

    <div class="d-flex justify-content-end align-items-center flex-column flex-md-row gap-3">
      <a href="<?= site_url('/my-account/credit_cards/') ?>" class="btn btn-white fw-bold text-dark fs-4 px-3 py-2">Cancel</a>
      <button type="submit" class="btn btn-indigo fw-bold text-white fs-4 px-3 py-2">Send details</button>
    </div>

    <div class="alert alert-success d-none mt-3" id="success-message" role="alert">
      We've successfully recieved your credit card details, reloading current page...
    </div>

    <div class="alert alert-danger d-none mt-3" id="error-message" role="alert">
      Something went wrong, reloading current page...
    </div>
  </form>
</div>

<script>
const form = document.getElementById("new_card");
form.addEventListener('submit', e => {
  e.preventDefault();
  new_card(form);
});
function new_card(form) {
  const formData = new FormData(form);
  formData.append('action', "new_card");

  jQuery.ajax({
    url: window.settings.ajax_url,
    type: "POST",
    data: formData,
    success: function (response) {
      console.log(response, "success")

      document.getElementById("success-message").classList.remove("d-none");
      setTimeout(() => {
        window.location.reload();
      }, 4000)
    },
    error: function(response) {
      console.log(response, "error")

      document.getElementById("error-message").classList.remove("d-none");
      setTimeout(() => {
        window.location.reload();
      }, 4000)
    },
    cache: false,
    contentType: false,
    processData: false
  });
}
</script>
