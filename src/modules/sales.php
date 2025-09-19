  <!-- Tenant Wise Sales Performance -->
  <div class="card mb-4 shadow-sm">
    <div class="card-header d-flex justify-content-between align-items-center">
      <h2 class="h5 mb-0 text-uppercase">Tenant Wise Sales Performance</h2>
      <div>
        <button class="btn btn-sm btn-primary me-2">REVENUE</button>
        <button class="btn btn-sm btn-outline-primary">ORDER ITEMS</button>
      </div>
    </div>
    <div class="card-body d-flex justify-content-between text-center">
      <div>
        <div class="text-muted">Today's</div>
        <div class="fs-4 fw-bold">₹0.00</div>
      </div>
      <div>
        <div class="text-muted">Yesterday</div>
        <div class="fs-6">₹0.00</div>
        <div class="text-muted small">₹1,259.00 (-100.00%)</div>
      </div>
      <div>
        <div class="text-muted">Current Month</div>
        <div class="fs-6">₹17,483.00</div>
        <div class="text-muted small">₹29,435.00 (-40.60%)</div>
      </div>
    </div>
  </div>

  <!-- Channel-wise Sales Performance Chart -->
  <div class="card mb-4 shadow-sm">
    <div class="card-header d-flex justify-content-between align-items-center">
      <h3 class="h6 mb-0 text-uppercase">Channel-wise Sales Performance</h3>
      <small class="text-muted">₹4,607.00 Revenue</small>
    </div>
    <div class="card-body">
      <canvas id="channelSalesChart" height="100"></canvas>
    </div>
  </div>

  <div class="row g-3 mb-4">
    <!-- Top Performing Channels -->
    <div class="col-md-6">
      <div class="card shadow-sm h-100">
        <div class="card-header fw-bold text-uppercase">Top Performing Channels</div>
        <div class="card-body">
          <canvas id="topChannelsChart" height="200"></canvas>
        </div>
      </div>
    </div>
    <!-- Top Performing Categories -->
    <div class="col-md-6">
      <div class="card shadow-sm h-100">
        <div class="card-header fw-bold text-uppercase">Top Performing Categories</div>
        <div class="card-body">
          <canvas id="topCategoriesChart" height="200"></canvas>
        </div>
      </div>
    </div>
  </div>

  <!-- Top Performing Products Table -->
  <div class="card shadow-sm">
    <div class="card-header fw-bold text-uppercase">Top Performing Products</div>
    <div class="card-body p-0">
      <table class="table table-striped mb-0">
        <thead>
          <tr>
            <th>SKU Code</th>
            <th>SKU Name</th>
            <th>% of Total</th>
            <th>Revenue</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>9988999989912039</td>
            <td>LBW-DBLU-102_30</td>
            <td>30.37</td>
            <td>₹1,399.00</td>
          </tr>
          <tr>
            <td>9988999989912059</td>
            <td>LBW-LBLU-101_34</td>
            <td>27.33</td>
            <td>₹1,259.00</td>
          </tr>
          <tr>
            <td>9988999989911953</td>
            <td>24DR2JOGERLTGRN_M</td>
            <td>26.05</td>
            <td>₹1,200.00</td>
          </tr>
          <tr>
            <td>9988999989911856</td>
            <td>24DR2TSLBEIGE_S</td>
            <td>16.26</td>
            <td>₹749.00</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>