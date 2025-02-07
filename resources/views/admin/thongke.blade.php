@extends('layouts.index')

@section('content')
    <div class="dashboard-container">
        @include('admin.nav')

        <div class="dashboard-content">
            <div class="dashboard-summary">
                <div class="summary-card">
                    <div class="card-icon text-primary">
                        <i class="fas fa-users"></i>
                    </div>
                    <div class="card-content">
                        <h3>{{ $totalKhachHang }}</h3>
                        <p>Khách hàng</p>
                    </div>
                </div>
                <div class="summary-card">
                    <div class="card-icon text-success">
                        <i class="fas fa-car"></i>
                    </div>
                    <div class="card-content">
                        <h3>{{ $totalXe }}</h3>
                        <p>Tổng xe</p>
                    </div>
                </div>
                <div class="summary-card">
                    <div class="card-icon text-warning">
                        <i class="fas fa-hand-holding-usd"></i>
                    </div>
                    <div class="card-content">
                        <h3>{{ number_format($totalMoney) }} VNĐ</h3>
                        <p>Doanh thu</p>
                    </div>
                </div>
            </div>

            <div class="dashboard-charts">
                <div class="chart-container">
                    <h4>Doanh Thu Theo Tháng</h4>
                    <canvas id="revenueChart"></canvas>
                </div>
                <div class="chart-container">
                    <h4>Top Xe Được Thuê</h4>
                    <canvas id="topXeChart"></canvas>
                </div>
            </div>

            <div class="dashboard-tables">
                <div class="table-container">
                    <h4>Giao Dịch Hôm Nay ({{ date('d/m/Y') }})</h4>
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>STT</th>
                                    <th>Xe</th>
                                    <th>Biển Số</th>
                                    <th>Khách Hàng</th>
                                    <th>Thành Tiền</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($giaoDichTodays as $index => $giaoDichToday)
                                    <tr>
                                        <td>{{ $index + 1 }}</td>
                                        <td>{{ $giaoDichToday->xe->tenxe }}</td>
                                        <td>{{ $giaoDichToday->xe->bienso }}</td>
                                        <td>{{ $giaoDichToday->user->hoten }}</td>
                                        <td>{{ number_format($giaoDichToday->tongtien) }} VNĐ</td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="5" class="text-center">Không có dữ liệu</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('script')
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Revenue Chart
    var revenueCtx = document.getElementById('revenueChart').getContext('2d');
    var revenueChart = new Chart(revenueCtx, {
        type: 'bar',
        data: {
            labels: ['Tháng 1', 'Tháng 2', 'Tháng 3', 'Tháng 4', 'Tháng 5', 'Tháng 6'],
            datasets: [{
                label: 'Doanh Thu',
                data: [120000, 150000, 200000, 180000, 250000, 300000],
                backgroundColor: 'rgba(54, 162, 235, 0.6)',
                borderColor: 'rgba(54, 162, 235, 1)',
                borderWidth: 1
            }]
        },
        options: {
            responsive: true,
            scales: {
                y: {
                    beginAtZero: true,
                    ticks: {
                        callback: function(value) {
                            return value.toLocaleString() + ' VNĐ';
                        }
                    }
                }
            }
        }
    });

    // Top Xe Chart
    var topXeCtx = document.getElementById('topXeChart').getContext('2d');
    var topXeChart = new Chart(topXeCtx, {
        type: 'pie',
        data: {
            labels: @json($topXes->pluck('tenxe')),
            datasets: [{
                data: @json($topXes->pluck('times')),
                backgroundColor: [
                    'rgba(255, 99, 132, 0.6)',
                    'rgba(54, 162, 235, 0.6)',
                    'rgba(255, 206, 86, 0.6)',
                    'rgba(75, 192, 192, 0.6)',
                    'rgba(153, 102, 255, 0.6)'
                ]
            }]
        },
        options: {
            responsive: true
        }
    });
});
</script>

<style>
.dashboard-container {
    display: flex;
}

.dashboard-content {
    flex-grow: 1;
    padding: 20px;
}

.dashboard-summary {
    display: flex;
    justify-content: space-between;
    margin-bottom: 30px;
}

.summary-card {
    background-color: white;
    border-radius: 10px;
    box-shadow: 0 4px 6px rgba(0,0,0,0.1);
    display: flex;
    align-items: center;
    padding: 20px;
    width: 30%;
}

.card-icon {
    font-size: 3rem;
    margin-right: 20px;
}

.card-content h3 {
    margin: 0;
    font-size: 1.5rem;
}

.dashboard-charts {
    display: flex;
    gap: 20px;
    margin-bottom: 30px;
}

.chart-container {
    background-color: white;
    border-radius: 10px;
    box-shadow: 0 4px 6px rgba(0,0,0,0.1);
    padding: 20px;
    width: 50%;
}

.table-container {
    background-color: white;
    border-radius: 10px;
    box-shadow: 0 4px 6px rgba(0,0,0,0.1);
    padding: 20px;
}

.text-primary { color: #007bff; }
.text-success { color: #28a745; }
.text-warning { color: #ffc107; }

@media (max-width: 992px) {
    .dashboard-container {
        flex-direction: column;
    }

    .dashboard-summary,
    .dashboard-charts {
        flex-direction: column;
    }

    .summary-card,
    .chart-container {
        width: 100%;
        margin-bottom: 20px;
    }
}
</style>
@endpush
