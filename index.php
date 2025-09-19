<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Dashboard Overview</title>
    <!-- Bootstrap CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
        <link rel="stylesheet" href="assets/css/styles.css" />
    <!-- Bootstrap Icons CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  </head>
<body>
  <!-- Topbar (included from src/includes/components/topbar.php) -->
  <?php include 'src/includes/components/topbar.php'; ?>

  <!-- Sidebar (included from src/includes/components/sidebar.php) -->
  <?php include 'src/includes/components/sidebar.php'; ?>

  <!-- Main Content -->
  <div id="main-content">
    <div class="mb-3">
      <small class="text-muted" id="breadcrumb">Dashboard > Overview</small>
    </div>
    <!-- Tabs -->
    <ul class="nav nav-tabs mb-3" id="dashboardTabs" role="tablist">
      <li class="nav-item" role="presentation">
        <button class="nav-link active" id="overview-tab" data-bs-toggle="tab" data-bs-target="#overview" type="button" role="tab" aria-controls="overview" aria-selected="true">Overview</button>
      </li>
      <li class="nav-item" role="presentation">
        <button class="nav-link" id="sales-tab" data-bs-toggle="tab" data-bs-target="#sales" type="button" role="tab" aria-controls="sales" aria-selected="false">Sales</button>
      </li>
      <li class="nav-item" role="presentation">
        <button class="nav-link" id="fulfillment-tab" data-bs-toggle="tab" data-bs-target="#fulfillment" type="button" role="tab" aria-controls="fulfillment" aria-selected="false">Fulfillment</button>
      </li>
      <li class="nav-item" role="presentation">
        <button class="nav-link" id="purchases-tab" data-bs-toggle="tab" data-bs-target="#purchases" type="button" role="tab" aria-controls="purchases" aria-selected="false">Purchases</button>
      </li>
      <li class="nav-item" role="presentation">
        <button class="nav-link" id="returns-tab" data-bs-toggle="tab" data-bs-target="#returns" type="button" role="tab" aria-controls="returns" aria-selected="false">Returns</button>
      </li>
      <li class="nav-item" role="presentation">
        <button class="nav-link" id="inventory-tab" data-bs-toggle="tab" data-bs-target="#inventory" type="button" role="tab" aria-controls="inventory" aria-selected="false">Inventory</button>
      </li>
      <li class="nav-item" role="presentation">
        <button class="nav-link" id="payments-tab" data-bs-toggle="tab" data-bs-target="#payments" type="button" role="tab" aria-controls="payments" aria-selected="false">Payments</button>
      </li>
    </ul>

    <div class="tab-content" id="dashboardTabsContent" style="min-height: 600px;">
      <!-- Overview Tab -->
      <div class="tab-pane fade show active" id="overview" role="tabpanel" aria-labelledby="overview-tab">
        <div class="row g-3">
          <!-- Today's Revenue -->
          <div class="col-md-6">
            <div class="card">
              <div class="card-header d-flex justify-content-between align-items-center">
                <span>Today's Revenue</span>
                <small class="timestamp">Sep 19, 11:40 AM <i class="bi bi-arrow-clockwise"></i></small>
              </div>
              <div class="card-body text-center">
                <div class="revenue-amount">₹0.00</div>
                <div class="revenue-subtext">Yesterday's Revenue: <span class="revenue-highlight">₹0.00</span></div>
              </div>
            </div>
          </div>
          <!-- Today's Order Items -->
          <div class="col-md-6">
            <div class="card">
              <div class="card-header d-flex justify-content-between align-items-center">
                <span>Today's Order Items</span>
                <small class="timestamp">Sep 19, 11:40 AM <i class="bi bi-arrow-clockwise"></i></small>
              </div>
              <div class="card-body text-center">
                <div class="revenue-amount">0</div>
                <div class="revenue-subtext">Yesterday's Order Items: <span class="revenue-highlight">0</span></div>
              </div>
            </div>
          </div>
        </div>

        <div class="row g-3 mt-1">
          <!-- Order Alerts -->
          <div class="col-md-4">
            <div class="card">
              <div class="card-header d-flex justify-content-between align-items-center">
                <span>Order Alerts</span>
                <small class="timestamp">Sep 19, 11:55 AM <i class="bi bi-arrow-clockwise"></i></small>
              </div>
              <ul class="list-group list-group-flush">
                <li class="list-group-item d-flex justify-content-between align-items-center">
                  Pending Retail Orders
                  <span>0 <i class="bi bi-chevron-right arrow-icon"></i></span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                  Pending Business Orders
                  <span>0 <i class="bi bi-chevron-right arrow-icon"></i></span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                  SLA Breached
                  <span class="text-alert">0 <i class="bi bi-chevron-right arrow-icon"></i></span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                  Near SLA Breach
                  <span class="text-alert">0 <i class="bi bi-chevron-right arrow-icon"></i></span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                  Shipment Count Error
                  <span class="text-alert">0 <i class="bi bi-chevron-right arrow-icon"></i></span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                  Failed Notification Count
                  <span class="text-alert">0 <i class="bi bi-chevron-right arrow-icon"></i></span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                  Failed Orders
                  <span class="text-alert">0 <span><i class="bi bi-chevron-right arrow-icon"></i></span></span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                  Unverified Orders
                  <span>0 <i class="bi bi-chevron-right arrow-icon"></i></span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                  Unfulfillable Retail Order Items
                  <span>0 <i class="bi bi-chevron-right arrow-icon"></i></span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                  Unfulfillable Business Order Items
                  <span>0 <i class="bi bi-chevron-right arrow-icon"></i></span>
                </li>
              </ul>
            </div>
          </div>
          <!-- Product Alerts -->
          <div class="col-md-4">
            <div class="card">
              <div class="card-header d-flex justify-content-between align-items-center">
                <span>Product Alerts</span>
                <small class="timestamp">Sep 19, 11:55 AM <i class="bi bi-arrow-clockwise"></i></small>
              </div>
              <ul class="list-group list-group-flush">
                <li class="list-group-item d-flex justify-content-between align-items-center">
                  Failed Inventory
                  <span class="text-alert">0 <i class="bi bi-chevron-right arrow-icon"></i></span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                  Disabled Inventory
                  <span>0 <i class="bi bi-chevron-right arrow-icon"></i></span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                  Failed Price Sync
                  <span><i class="bi bi-chevron-right arrow-icon"></i></span>
                </li>
              </ul>
            </div>
          </div>
          <!-- Channel Alerts -->
          <div class="col-md-4">
            <div class="card">
              <div class="card-header d-flex justify-content-between align-items-center">
                <span>Channel Alerts</span>
                <small class="timestamp">Sep 19, 11:55 AM <i class="bi bi-arrow-clockwise"></i></small>
              </div>
              <ul class="list-group list-group-flush">
                <li class="list-group-item d-flex justify-content-between align-items-center">
                  Connectors
                  <span class="text-alert">0 <i class="bi bi-chevron-right arrow-icon"></i></span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                  Pending Configuration
                  <span>0 <i class="bi bi-chevron-right arrow-icon"></i></span>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <!-- Resources Section -->
        <div class="row g-3 mt-3">
          <div class="col-12">
            <div class="card">
              <div class="card-header fw-bold text-uppercase">
                RESOURCES
              </div>
              <ul class="list-group list-group-flush">
                <li class="list-group-item">
                  <strong>Reach Us</strong><br />
                  A chat service for raising your queries <a href="#" class="link-primary">Learn More</a>
                </li>
                <li class="list-group-item">
                  <strong>Take a Tour</strong><br />
                  <a href="#" class="link-primary">Orders</a> | <a href="#" class="link-primary">Shipments</a> | <a href="#" class="link-primary">Manifest</a> | <a href="#" class="link-primary">Order Details</a>
                </li>
                <li class="list-group-item">
                  <strong>Get an overview</strong><br />
                  <a href="#" class="link-primary">Multichannel</a> | <a href="#" class="link-primary">WMS Solution</a> | <a href="#" class="link-primary">Omnichannel</a> | <a href="#" class="link-primary">ERP Integration</a>
                </li>
                <li class="list-group-item">
                  <strong>Raise Cybersecurity Concern</strong><br />
                  If you suspect a potential security issue regarding information processed by you through lovegen systems or want to report a cybersecurity concern, please write to <a href="mailto:erp@lovegen.com" class="link-primary">erp@lovegen.com</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <!-- Other tabs placeholders -->
        <div class="tab-pane fade" id="sales" role="tabpanel" aria-labelledby="sales-tab">
          <?php include 'src/modules/sales.php'; ?>
        </div>
        <div class="tab-pane fade" id="fulfillment" role="tabpanel" aria-labelledby="fulfillment-tab">
          <?php include 'src/modules/fulfillment.php'; ?>
        </div>
        <div class="tab-pane fade" id="purchases" role="tabpanel" aria-labelledby="purchases-tab">
          <?php include 'src/modules/purchases.php'; ?>
        </div>
        <div class="tab-pane fade" id="returns" role="tabpanel" aria-labelledby="returns-tab">
          
          <?php include 'src/modules/returns.php'; ?>
        
        </div>
      <div class="tab-pane fade" id="inventory" role="tabpanel" aria-labelledby="inventory-tab">
          <?php include 'src/modules/inventory.php'; ?>
      </div>
        <div class="tab-pane fade" id="payments" role="tabpanel" aria-labelledby="payments-tab">
          <?php include 'src/modules/payments.php'; ?>
        </div>
      </div>
    </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <script src="assets/js/dashboard.js"></script>
  <script src="assets/js/submenu-toggle.js"></script>
  <script src="assets/js/topbar-mobile.js"></script>
  </body>
</html>
