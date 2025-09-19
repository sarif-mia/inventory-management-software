<div class="d-flex justify-content-between align-items-center mb-3">
    <h5 class="fulfillment-header">FULFILLMENT</h5>
    <small class="text-muted">Sep 19, 7:46 PM <i class="bi bi-clock"></i></small>
  </div>
  <div class="row g-3">
    <div class="col-md-6">
      <div class="card shadow-sm">
        <div class="card-header fw-bold text-uppercase">FULFILLMENT STATUS</div>
        <div class="card-body">
          <canvas id="fulfillmentPieChart"></canvas>
          <ul class="list-group list-group-flush mt-3">
            <li class="list-group-item d-flex justify-content-between align-items-center">
              Pending
              <span class="badge bg-warning rounded-pill">300</span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
              Shipped
              <span class="badge bg-info rounded-pill">400</span>
            </li>
            <li class_="list-group-item d-flex justify-content-between align-items-center">
              Delivered
              <span class="badge bg-success rounded-pill">500</span>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="card shadow-sm">
        <div class="card-header fw-bold text-uppercase">700 PENDING SHIPMENTS</div>
        <div class="card-body">
          <canvas id="pendingShipmentsChart"></canvas>
        </div>
      </div>
    </div>
  </div>
  <div class="row g-3 mt-3">
    <div class="col-md-6">
      <div class="card shadow-sm">
        <div class="card-header fw-bold text-uppercase">1217 PENDING SALE ORDERS</div>
        <div class="card-body">
          <canvas id="pendingSaleOrdersChart"></canvas>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="card shadow-sm">
        <div class="card-header fw-bold text-uppercase text-center">SALE ORDER FLOW</div>
        <div class="card-body text-center">
          <canvas id="saleOrderFlowChart"></canvas>
        </div>
      </div>
    </div>
  </div>