@extends('showcase::components.component-layout')

@section('demo')
<div x-data="{}" x-init="
    const ctx = $refs.canvas.getContext('2d');
    new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ['Product A', 'Product B', 'Product C', 'Product D'],
            datasets: [{
                label: 'Sales',
                data: [65, 59, 80, 81],
                backgroundColor: ['rgba(59,130,246,0.8)', 'rgba(16,185,129,0.8)', 'rgba(245,158,11,0.8)', 'rgba(239,68,68,0.8)']
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: true,
            plugins: { legend: { display: false } },
            scales: {
                y: { beginAtZero: true, ticks: { color: document.documentElement.classList.contains('dark') ? '#9ca3af' : '#6b7280' } },
                x: { ticks: { color: document.documentElement.classList.contains('dark') ? '#9ca3af' : '#6b7280' }, grid: { display: false } }
            }
        }
    });
" class="bg-white dark:bg-gray-800 rounded-lg shadow p-6">
    <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-4">Monthly Sales</h3>
    <canvas x-ref="canvas"></canvas>
</div>
@endsection

@section('code')
<div class="bg-white dark:bg-gray-800 rounded-lg shadow p-6">
    <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-4">Monthly Sales</h3>
    <canvas id="barChart"></canvas>
</div>
<script>
new Chart(document.getElementById('barChart').getContext('2d'), {
    type: 'bar',
    data: {
        labels: ['Product A', 'Product B', 'Product C', 'Product D'],
        datasets: [{ label: 'Sales', data: [65, 59, 80, 81], backgroundColor: ['rgba(59,130,246,0.8)', 'rgba(16,185,129,0.8)', 'rgba(245,158,11,0.8)', 'rgba(239,68,68,0.8)'] }]
    },
    options: { responsive: true }
});
</script>
@endsection
