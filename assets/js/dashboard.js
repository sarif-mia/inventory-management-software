document.addEventListener('DOMContentLoaded', function () {
    const chartInstances = {};

    function initSalesCharts() {
        if (chartInstances.channelSalesChart) chartInstances.channelSalesChart.destroy();
        const ctxChannel = document.getElementById('channelSalesChart').getContext('2d');
        chartInstances.channelSalesChart = new Chart(ctxChannel, {
            type: 'line',
            data: {
                labels: ['Sep 12', 'Sep 13', 'Sep 14', 'Sep 15', 'Sep 16', 'Sep 17', 'Sep 18'],
                datasets: [{
                    label: 'MYNTRAPMP',
                    data: [1200, 100, 700, 1100, 100, 1200, 0],
                    borderColor: 'rgba(54, 78, 162, 1)',
                    backgroundColor: 'rgba(54, 78, 162, 0.2)',
                    fill: true,
                    tension: 0.3,
                    pointRadius: 3,
                    pointHoverRadius: 5,
                    borderWidth: 2
                }]
            },
            options: {
                responsive: true,
                plugins: {
                    legend: { display: false },
                    tooltip: { mode: 'index', intersect: false }
                },
                scales: {
                    y: {
                        beginAtZero: true,
                        ticks: { stepSize: 200 }
                    }
                }
            }
        });

        if (chartInstances.topChannelsChart) chartInstances.topChannelsChart.destroy();
        const ctxChannels = document.getElementById('topChannelsChart').getContext('2d');
        chartInstances.topChannelsChart = new Chart(ctxChannels, {
            type: 'pie',
            data: {
                labels: ['MYNTRAPMP'],
                datasets: [{
                    data: [100],
                    backgroundColor: ['rgba(54, 78, 162, 1)']
                }]
            },
            options: {
                responsive: true,
                plugins: {
                    legend: { position: 'bottom' }
                }
            }
        });

        if (chartInstances.topCategoriesChart) chartInstances.topCategoriesChart.destroy();
        const ctxCategories = document.getElementById('topCategoriesChart').getContext('2d');
        chartInstances.topCategoriesChart = new Chart(ctxCategories, {
            type: 'pie',
            data: {
                labels: ['SHORTS', 'JOGGER', 'VEST'],
                datasets: [{
                    data: [60, 25, 15],
                    backgroundColor: ['#3650a2', '#d33c3c', '#5a8a3a']
                }]
            },
            options: {
                responsive: true,
                plugins: {
                    legend: { position: 'bottom' }
                }
            }
        });
    }

    function initFulfillmentCharts() {
        const chartConfigs = [
            {
                canvasId: 'fulfillmentPieChart',
                chartType: 'pie',
                dataPath: 'fulfillmentStatus',
                title: 'FULFILLMENT STATUS',
                options: {
                    responsive: true,
                    plugins: {
                        legend: {
                            position: 'bottom',
                            labels: {
                                boxWidth: 15,
                                padding: 10
                            }
                        }
                    }
                }
            },
            {
                canvasId: 'pendingShipmentsChart',
                chartType: 'bar',
                dataPath: 'pendingShipments',
                title: '700 PENDING SHIPMENTS',
                options: {
                    scales: {
                        y: {
                            beginAtZero: true,
                            title: {
                                display: true,
                                text: 'Shipping Packages'
                            }
                        },
                        x: {
                            title: {
                                display: true,
                                text: 'Hours'
                            }
                        }
                    },
                    plugins: {
                        legend: {
                            display: true,
                            position: 'bottom'
                        }
                    }
                }
            },
            {
                canvasId: 'pendingSaleOrdersChart',
                chartType: 'bar',
                dataPath: 'pendingSaleOrders',
                title: '1217 PENDING SALE ORDERS',
                options: {
                    scales: {
                        y: {
                            beginAtZero: true,
                            title: {
                                display: true,
                                text: 'Sale Orders'
                            }
                        },
                        x: {
                            title: {
                                display: true,
                                text: 'Hours'
                            }
                        }
                    },
                    plugins: {
                        legend: {
                            display: true,
                            position: 'bottom'
                        }
                    }
                }
            },
            {
                canvasId: 'saleOrderFlowChart',
                chartType: 'line',
                dataPath: 'saleOrderFlow',
                title: 'SALE ORDER FLOW',
                options: {
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    },
                    plugins: {
                        legend: {
                            display: false
                        }
                    }
                }
            }
        ];

        async function fetchData() {
            try {
                const response = await fetch('fulfillment_data.php');
                if (!response.ok) {
                    throw new Error(`HTTP error! status: ${response.status}`);
                }
                return await response.json();
            } catch (error) {
                console.error('Error fetching chart data:', error);
                return null;
            }
        }

        function renderChart(config, data) {
            if (chartInstances[config.canvasId]) chartInstances[config.canvasId].destroy();
            const ctx = document.getElementById(config.canvasId).getContext('2d');
            const chartData = {
                labels: data.labels,
                datasets: [{
                    label: config.title,
                    data: data.data,
                    backgroundColor: data.backgroundColor || '#36a2eb',
                    borderColor: data.backgroundColor || '#36a2eb',
                    fill: false
                }]
            };
            chartInstances[config.canvasId] = new Chart(ctx, {
                type: config.chartType,
                data: chartData,
                options: config.options
            });
        }

        async function init() {
            const allData = await fetchData();
            if (allData) {
                chartConfigs.forEach(config => {
                    const data = allData[config.dataPath];
                    if (data) {
                        renderChart(config, data);
                    } 
                });
            } 
        }

        init();
    }

    function initReturnsCharts() {
        if (chartInstances.returnReasonsChart) chartInstances.returnReasonsChart.destroy();
        const returnReasonsCtx = document.getElementById('returnReasonsChart').getContext('2d');
        chartInstances.returnReasonsChart = new Chart(returnReasonsCtx, {
            type: 'pie',
            data: {
                labels: ['Defective', 'Wrong Item', 'Not as Described', 'Damaged', 'Other'],
                datasets: [{
                    label: 'Return Reasons',
                    data: [30, 25, 15, 20, 10],
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.8)',
                        'rgba(54, 162, 235, 0.8)',
                        'rgba(255, 206, 86, 0.8)',
                        'rgba(75, 192, 192, 0.8)',
                        'rgba(153, 102, 255, 0.8)'
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                responsive: true,
                plugins: {
                    legend: {
                        position: 'top',
                    },
                    title: {
                        display: true,
                        text: 'Return Reasons Distribution'
                    }
                }
            }
        });

        if (chartInstances.monthlyReturnsChart) chartInstances.monthlyReturnsChart.destroy();
        const monthlyReturnsCtx = document.getElementById('monthlyReturnsChart').getContext('2d');
        chartInstances.monthlyReturnsChart = new Chart(monthlyReturnsCtx, {
            type: 'bar',
            data: {
                labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September'],
                datasets: [{
                    label: 'Number of Returns',
                    data: [65, 59, 80, 81, 56, 55, 40, 70, 90],
                    backgroundColor: 'rgba(75, 192, 192, 0.8)',
                    borderColor: 'rgba(75, 192, 192, 1)',
                    borderWidth: 1
                }]
            },
            options: {
                responsive: true,
                scales: {
                    y: {
                        beginAtZero: true
                    }
                },
                plugins: {
                    legend: {
                        display: false,
                    },
                    title: {
                        display: true,
                        text: 'Monthly Returns Trend'
                    }
                }
            }
        });
    }

    function initPurchasesCharts() {
        if (chartInstances.pendingPurchaseChart) chartInstances.pendingPurchaseChart.destroy();
        const ctx = document.getElementById('pendingPurchaseChart').getContext('2d');
        chartInstances.pendingPurchaseChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['0', '2-4', '4-6', '6-8', '8-10', '10+'],
                datasets: [{
                    label: 'Pending since days',
                    data: [1, 3, 5, 2, 4, 1],
                    backgroundColor: '#375a7f'
                }]
            },
            options: {
                responsive: true,
                scales: {
                    x: {
                        title: {
                            display: true,
                            text: 'Days'
                        }
                    },
                    y: {
                        beginAtZero: true,
                        title: {
                            display: true,
                            text: 'Purchase Order Items'
                        }
                    }
                },
                plugins: {
                    legend: { display: false }
                }
            }
        });
    }

    function initPaymentsCharts() {
        if (chartInstances.receivedPaymentChart) chartInstances.receivedPaymentChart.destroy();
        const receivedCtx = document.getElementById('receivedPaymentChart').getContext('2d');
        chartInstances.receivedPaymentChart = new Chart(receivedCtx, {
            type: 'bar',
            data: {
                labels: ['AMAZON_IN', 'FLIPKART', 'SNAPDEAL'],
                datasets: [
                    {
                        label: 'Marketplace Deduction',
                        data: [2000, 11000, 2000],
                        backgroundColor: '#375a7f'
                    },
                    {
                        label: 'Settlement Value',
                        data: [3500, 22000, 10000],
                        backgroundColor: '#c9302c'
                    }
                ]
            },
            options: {
                responsive: true,
                scales: {
                    y: {
                        beginAtZero: true
                    }
                },
                plugins: {
                    legend: { display: false }
                }
            }
        });

        if (chartInstances.outstandingPaymentChart) chartInstances.outstandingPaymentChart.destroy();
        const outstandingCtx = document.getElementById('outstandingPaymentChart').getContext('2d');
        chartInstances.outstandingPaymentChart = new Chart(outstandingCtx, {
            type: 'pie',
            data: {
                labels: ['Amazon India', 'Flipkart', 'SNAPDEAL'],
                datasets: [{
                    data: [20, 55, 25],
                    backgroundColor: ['#375a7f', '#c9302c', '#5cb85c']
                }]
            },
            options: {
                responsive: true,
                plugins: {
                    legend: { display: false }
                }
            }
        });
    }

    const tabs = document.querySelectorAll('#dashboardTabs .nav-link');
    tabs.forEach(tab => {
        tab.addEventListener('shown.bs.tab', function (event) {
            const target = event.target.getAttribute('data-bs-target');
            if (target === '#sales') {
                initSalesCharts();
            } else if (target === '#fulfillment') {
                initFulfillmentCharts();
            } else if (target === '#returns') {
                initReturnsCharts();
            } else if (target === '#purchases') {
                initPurchasesCharts();
            } else if (target === '#payments') {
                initPaymentsCharts();
            }
            // Update breadcrumb dynamically
            const breadcrumb = document.getElementById('breadcrumb');
            if (breadcrumb) {
                const activeTabText = event.target.textContent.trim();
                breadcrumb.textContent = `Dashboard > ${activeTabText}`;
            }
        });
    });

    // Initialize charts for the active tab on page load
    const activeTab = document.querySelector('#dashboardTabs .nav-link.active');
    if (activeTab) {
        const target = activeTab.getAttribute('data-bs-target');
        if (target === '#sales') {
            initSalesCharts();
        } else if (target === '#fulfillment') {
            initFulfillmentCharts();
        } else if (target === '#returns') {
            initReturnsCharts();
        } else if (target === '#purchases') {
            initPurchasesCharts();
        } else if (target === '#payments') {
            initPaymentsCharts();
        }
    }

    // Add event listeners for submenu items to activate corresponding tabs
    const submenuButtons = document.querySelectorAll('#dashboard-submenu .btn-link');
    submenuButtons.forEach(button => {
        button.addEventListener('click', function (event) {
            const targetTabId = this.getAttribute('data-bs-target'); // e.g., #overview
            const correspondingTabButton = document.querySelector(`#dashboardTabs .nav-link[data-bs-target="${targetTabId}"]`);
            if (correspondingTabButton) {
                const tab = new bootstrap.Tab(correspondingTabButton);
                tab.show();
            }
        });
    });
});
