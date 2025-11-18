@extends('admin.layout.master')

@section('title', 'Flight Management Dashboard')

@section('content')
<div class="container mt-4">
    <div class="card shadow-lg border-0">
        <div class="card-body p-4">
            <h2 class="text-center text-primary fw-bold mb-4">
                ✈️ Flight Management Dashboard
            </h2>
            @if(session('success'))
            <div class="alert alert-success" role="alert">
                {{ session('success') }}
            </div>
            @endif

            {{-- Summary Cards --}}
            <div class="row g-4 mb-4 text-center">
                <div class="col-md-4">
                    <div class="card text-white border-0 shadow-sm" style="background: linear-gradient(135deg, #007bff, #0056b3);">
                        <div class="card-body py-4">
                            <h5>Total Tickets</h5>
                            <h2 class="fw-bold">1,245</h2>
                            <small>+8% from last month</small>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card text-white border-0 shadow-sm" style="background: linear-gradient(135deg, #28a745, #218838);">
                        <div class="card-body py-4">
                            <h5>Total Sales</h5>
                            <h2 class="fw-bold">$56,720</h2>
                            <small>+12% growth</small>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card text-white border-0 shadow-sm" style="background: linear-gradient(135deg, #ffc107, #ff9800);">
                        <div class="card-body py-4">
                            <h5>Total Revenue</h5>
                            <h2 class="fw-bold">$18,540</h2>
                            <small>Net Profit This Month</small>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Charts Row --}}
            <div class="row mb-4">
                <!-- Chart 1: Sales & Revenue -->
                <div class="col-md-6">
                    <div class="card shadow-sm border-0 mb-3">
                        <div class="card-body">
                            <h5 class="text-secondary text-center mb-3 fw-semibold">📊 Sales & Revenue</h5>
                            <div id="salesRevenueChart" style="height: 350px;"></div>
                        </div>
                    </div>
                </div>

                <!-- Chart 2: Tickets & Orders -->
                <div class="col-md-6">
                    <div class="card shadow-sm border-0 mb-3">
                        <div class="card-body">
                            <h5 class="text-secondary text-center mb-3 fw-semibold">🎫 Tickets & Orders</h5>
                            <div id="ticketsOrdersChart" style="height: 350px;"></div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Flight Table --}}
            <div class="table-responsive shadow-sm border rounded-3">
                <table class="table table-hover align-middle mb-0">
                    <thead class="table-primary text-center">
                        <tr>
                            <th>#</th>
                            <th>Flight Name</th>
                            <th>From</th>
                            <th>To</th>
                            <th>Departure</th>
                            <th>Arrival</th>
                            <th>Price</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody class="text-center">
                        <tr>
                            <td>1</td>
                            <td>BD Airways 102</td>
                            <td>Dhaka</td>
                            <td>Chittagong</td>
                            <td>08:30 AM</td>
                            <td>09:45 AM</td>
                            <td>$85</td>
                            <td>
                                <a href="#" class="btn btn-sm btn-outline-primary">Details</a>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Air Asia 220</td>
                            <td>Dhaka</td>
                            <td>Kuala Lumpur</td>
                            <td>02:00 PM</td>
                            <td>06:15 PM</td>
                            <td>$310</td>
                            <td>
                                <a href="#" class="btn btn-sm btn-outline-primary">Details</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <p class="text-center text-muted mt-3 mb-0">
                Showing 2 available flights
            </p>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
<script>
    // Chart 1: Sales & Revenue
    var options1 = {
        chart: {
            type: 'area',
            height: 350,
            toolbar: {
                show: false
            }
        },
        series: [{
                name: 'Sales ($)',
                data: [8000, 9500, 7500, 10000, 11500, 12000, 14000, 16000, 15500, 17500, 19000, 21000]
            },
            {
                name: 'Revenue ($)',
                data: [3500, 4100, 3200, 4800, 5200, 5600, 6100, 7000, 6800, 7600, 8200, 8800]
            }
        ],
        colors: ['#008FFB', '#FEB019'],
        fill: {
            type: 'gradient',
            gradient: {
                opacityFrom: 0.4,
                opacityTo: 0.1
            }
        },
        stroke: {
            curve: 'smooth',
            width: 3
        },
        xaxis: {
            categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec']
        },
        legend: {
            position: 'top',
            horizontalAlign: 'center'
        }
    };
    new ApexCharts(document.querySelector("#salesRevenueChart"), options1).render();

    // Chart 2: Tickets & Orders
    var options2 = {
        chart: {
            type: 'bar',
            height: 350,
            toolbar: {
                show: false
            }
        },
        series: [{
                name: 'Tickets Sold',
                data: [120, 150, 100, 180, 200, 170, 250, 300, 280, 350, 400, 420]
            },
            {
                name: 'Orders',
                data: [30, 45, 25, 50, 55, 48, 60, 70, 65, 80, 85, 90]
            }
        ],
        colors: ['#00E396', '#FF4560'],
        plotOptions: {
            bar: {
                horizontal: false,
                columnWidth: '45%'
            }
        },
        dataLabels: {
            enabled: false
        },
        xaxis: {
            categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec']
        },
        legend: {
            position: 'top',
            horizontalAlign: 'center'
        }
    };
    new ApexCharts(document.querySelector("#ticketsOrdersChart"), options2).render();
</script>
@endsection