@extends('showcase::components.component-layout')

@section('demo')
<div x-data="{}" x-init="
    const ctx = $refs.canvas.getContext('2d');
    new Chart(ctx, {
        type: 'line',
        data: {
            labels: ['Week 1', 'Week 2', 'Week 3', 'Week 4', 'Week 5', 'Week 6'],
            datasets: [{
                label: 'Active Users',
                data: [1200, 1900, 1500, 2500, 2200, 3000],
                borderColor: 'rgb(16, 185, 129)',
                backgroundColor: 'rgba(16, 185, 129, 0.2)',
                fill: true,
                tension: 0.4
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: true,
            plugins: { legend: { display: true, labels: { color: document.documentElement.classList.contains('dark') ? '#fff' : '#000' } } },
            scales: {
                y: { beginAtZero: true, ticks: { color: document.documentElement.classList.contains('dark') ? '#9ca3af' : '#6b7280' } },
                x: { ticks: { color: document.documentElement.classList.contains('dark') ? '#9ca3af' : '#6b7280' } }
            }
        }
    });
" class="bg-white dark:bg-gray-800 rounded-lg shadow p-6">
    <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-4">User Growth</h3>
    <canvas x-ref="canvas"></canvas>
</div>
@endsection

@section('code')
<div class="bg-white dark:bg-gray-800 rounded-lg shadow p-6">
    <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-4">User Growth</h3>
    <canvas id="areaChart"></canvas>
</div>
<script>
new Chart(document.getElementById('areaChart').getContext('2d'), {
    type: 'line',
    data: {
        labels: ['Week 1', 'Week 2', 'Week 3', 'Week 4', 'Week 5', 'Week 6'],
        datasets: [{ label: 'Active Users', data: [1200, 1900, 1500, 2500, 2200, 3000], borderColor: 'rgb(16, 185, 129)', backgroundColor: 'rgba(16, 185, 129, 0.2)', fill: true, tension: 0.4 }]
    },
    options: { responsive: true }
});
</script>
@endsection
