<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h1 class="h2">Returns Management</h1>
                <div class="btn-toolbar mb-2 mb-md-0">
                    <div class="btn-group me-2">
                        <button type="button" class="btn btn-sm btn-outline-secondary">Share</button>
                        <button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
                    </div>
                    <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
                        <i class="bi bi-calendar3"></i>
                        This week
                    </button>
                </div>
            </div>

            <div class="row g-4 mb-4">
                <div class="col-md-4">
                    <div class="card text-white bg-primary">
                        <div class="card-body">
                            <h5 class="card-title"><i class="bi bi-arrow-return-left"></i> Total Returns</h5>
                            <p class="card-text fs-4">1,234</p>
                            <p class="card-text"><small>+20% from last month</small></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card text-white bg-warning">
                        <div class="card-body">
                            <h5 class="card-title"><i class="bi bi-hourglass-split"></i> Pending Returns</h5>
                            <p class="card-text fs-4">56</p>
                            <p class="card-text"><small>Action Required</small></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card text-white bg-success">
                        <div class="card-body">
                            <h5 class="card-title"><i class="bi bi-check-circle"></i> Processed Returns</h5>
                            <p class="card-text fs-4">1,178</p>
                            <p class="card-text"><small>Successfully handled</small></p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- New Charts Section -->
            <div class="row g-4 mb-4">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title">Return Reasons Distribution</h5>
                        </div>
                        <div class="card-body">
                            <canvas id="returnReasonsChart"></canvas>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title">Monthly Returns Trend</h5>
                        </div>
                        <div class="card-body">
                            <canvas id="monthlyReturnsChart"></canvas>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">Recent Returns</h5>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-hover">
                            <thead>
                                <tr>
                                    <th scope="col">Return ID</th>
                                    <th scope="col">Order ID</th>
                                    <th scope="col">Customer</th>
                                    <th scope="col">Product</th>
                                    <th scope="col">Reason</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Date</th>
                                    <th scope="col">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>RTN-001</td>
                                    <td>ORD-123</td>
                                    <td>John Doe</td>
                                    <td>Laptop</td>
                                    <td>Defective</td>
                                    <td><span class="badge bg-warning text-dark">Pending</span></td>
                                    <td>2025-09-18</td>
                                    <td>
                                        <button class="btn btn-sm btn-primary"><i class="bi bi-eye"></i></button>
                                        <button class="btn btn-sm btn-success"><i class="bi bi-check-lg"></i></button>
                                        <button class="btn btn-sm btn-danger"><i class="bi bi-x-lg"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>RTN-002</td>
                                    <td>ORD-124</td>
                                    <td>Jane Smith</td>
                                    <td>Mouse</td>
                                    <td>Wrong Item</td>
                                    <td><span class="badge bg-success">Processed</span></td>
                                    <td>2025-09-17</td>
                                    <td>
                                        <button class="btn btn-sm btn-primary"><i class="bi bi-eye"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>RTN-003</td>
                                    <td>ORD-125</td>
                                    <td>Peter Jones</td>
                                    <td>Keyboard</td>
                                    <td>Not as Described</td>
                                    <td><span class="badge bg-warning text-dark">Pending</span></td>
                                    <td>2025-09-16</td>
                                    <td>
                                        <button class="btn btn-sm btn-primary"><i class="bi bi-eye"></i></button>
                                        <button class="btn btn-sm btn-success"><i class="bi bi-check-lg"></i></button>
                                        <button class="btn btn-sm btn-danger"><i class="bi bi-x-lg"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>RTN-004</td>
                                    <td>ORD-126</td>
                                    <td>Mary Johnson</td>
                                    <td>Monitor</td>
                                    <td>Damaged</td>
                                    <td><span class="badge bg-danger">Rejected</span></td>
                                    <td>2025-09-15</td>
                                    <td>
                                        <button class="btn btn-sm btn-primary"><i class="bi bi-eye"></i></button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>