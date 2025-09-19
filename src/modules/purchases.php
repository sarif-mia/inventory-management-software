<h3 class="mb-4">Purchases Dashboard</h3>
  <div class="row g-3">
    <div class="col-md-6">
      <div class="card p-3 purchases-card">
        <h5 class="card-title">PENDING ORDER ITEMS (PROCUREMENT)</h5>
        <ul class="list-group">
          <li class="list-group-item d-flex justify-content-between align-items-center">
            Item A
            <span class="badge bg-primary rounded-pill">5</span>
          </li>
          <li class="list-group-item d-flex justify-content-between align-items-center">
            Item B
            <span class="badge bg-primary rounded-pill">3</span>
          </li>
          <li class="list-group-item d-flex justify-content-between align-items-center">
            Item C
            <span class="badge bg-primary rounded-pill">8</span>
          </li>
        </ul>
      </div>
    </div>
    <div class="col-md-6">
      <div class="card p-3 purchases-card">
        <h5 class="card-title">PENDING PURCHASE ORDER ITEMS</h5>
        <canvas id="pendingPurchaseChart" height="200"></canvas>
        <div class="legend mt-2">
          <span><span class="legend-color pending"></span> Pending since days</span>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="card p-3 purchases-card">
        <h5 class="card-title">TOP PERFORMING VENDORS</h5>
        <ul class="list-group">
          <li class="list-group-item d-flex justify-content-between align-items-center">
            Vendor X
            <span class="badge bg-success rounded-pill">95%</span>
          </li>
          <li class="list-group-item d-flex justify-content-between align-items-center">
            Vendor Y
            <span class="badge bg-success rounded-pill">90%</span>
          </li>
          <li class="list-group-item d-flex justify-content-between align-items-center">
            Vendor Z
            <span class="badge bg-success rounded-pill">88%</span>
          </li>
        </ul>
      </div>
    </div>
    <div class="col-md-6">
      <div class="card p-3 purchases-card">
        <h5 class="card-title">WORST PERFORMING VENDORS</h5>
        <ul class="list-group">
          <li class="list-group-item d-flex justify-content-between align-items-center">
            Vendor A
            <span class="badge bg-danger rounded-pill">40%</span>
          </li>
          <li class="list-group-item d-flex justify-content-between align-items-center">
            Vendor B
            <span class="badge bg-danger rounded-pill">35%</span>
          </li>
          <li class="list-group-item d-flex justify-content-between align-items-center">
            Vendor C
            <span class="badge bg-danger rounded-pill">30%</span>
          </li>
        </ul>
      </div>
    </div>
  </div>