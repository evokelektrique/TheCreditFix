<div class="">
  <p class="mb-1 fs-2 fw-bold">Credit Calculator</p>
  <p class="mb-4 fs-4">You can change your Payback type and calculate by that.</p>
  <form action="" id="loan_calculator">
    <div class="row align-items-end">
      <div class="col-12 col-lg-3">
        <label class="form-label" for="balance">Balance ($)</label>
        <input type="text" class="form-control" id="balance">
      </div>

      <div class="col-12 col-lg-3">
        <label class="form-label" for="rate">Interest Rate (%)</label>
        <input type="text" class="form-control" id="rate">
      </div>

      <div class="col-12 col-lg-3">
        <label class="form-label" for="time">Time</label>
        <input type="text" class="form-control" id="time">
      </div>

      <div class="col-12 col-lg-3">
        <button type="submit" class="btn btn-indigo text-white fw-bold px-3 w-100 text-center">Calculate</button>
      </div>
    </div>
  </form>

  <div class="my-4 d-block w-100 bg-dark-100" style="height: 1px;"></div>

  <p class="fw-bold" id="result">
  It will take <span class="text-orange" id="result-year">10 years and 11 months</span> to payoff the balance. The total interest is <span class="text-orange" id="result-number">$2,574.43</span>.
  </p>
</div>
<script>
  function calcualate_interest(P, R, T) {
    return P * (R / 100) * T;
  }

  const form = document.getElementById('loan_calculator');
  form.addEventListener("submit", e => {
    e.preventDefault();

    const P = document.getElementById("balance").value;
    const R = document.getElementById("rate").value;
    const T = document.getElementById("time").value;

    const result_years = parseInt(T / 365);
    const result_months = parseInt((T % 365) / 30);
    const result_number = calcualate_interest(P, R, T)

    document.getElementById("result-year").innerText = `${result_years} years and ${result_months} months`;
    document.getElementById("result-number").innerText = result_number;

  });
</script>
