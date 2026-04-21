@extends('showcase::components.component-layout')

@section('demo')
<div x-data="{}" x-init="
    const ctx = $refs.canvas.getContext('2d');
    new Chart(ctx, {
        type: 'line',
        data: {
            labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'],
            datasets: [{
                label: 'Revenue',
                data: [12000, 19000, 15000, 25000, 22000, 30000],
                borderColor: 'rgb(59, 130, 246)',
                backgroundColor: 'rgba(59, 130, 246, 0.1)',
                tension: 0.4,
                fill: true
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: true,
            plugins: {
                legend: { display: true, labels: { color: document.documentElement.classList.contains('dark') ? '#fff' : '#000' } }
            },
            scales: {
                y: {
                    ticks: { color: document.documentElement.classList.contains('dark') ? '#9ca3af' : '#6b7280' },
                    grid: { color: document.documentElement.classList.contains('dark') ? '#374151' : '#e5e7eb' }
                },
                x: {
                    ticks: { color: document.documentElement.classList.contains('dark') ? '#9ca3af' : '#6b7280' },
                    grid: { color: document.documentElement.classList.contains('dark') ? '#374151' : '#e5e7eb' }
                }
            }
        }
    });
" class="bg-white dark:bg-gray-800 rounded-lg shadow p-6">
    <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-4">Revenue Overview</h3>
    <canvas x-ref="canvas"></canvas>
</div>
@endsection

@section('code')
<div class="bg-white dark:bg-gray-800 rounded-lg shadow p-6">
    <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-4">Revenue Overview</h3>
    <canvas id="lineChart"></canvas>
</div>

<script>
const ctx = document.getElementById('lineChart').getContext('2d');
new Chart(ctx, {
    type: 'line',
    data: {
        labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'],
        datasets: [{
            label: 'Revenue',
            data: [12000, 19000, 15000, 25000, 22000, 30000],
            borderColor: 'rgb(59, 130, 246)',
            backgroundColor: 'rgba(59, 130, 246, 0.1)',
            tension: 0.4
        }]
    },
    options: { responsive: true }
});
</script>
@endsection
