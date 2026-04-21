@extends('showcase::components.component-layout')

@section('demo')
<div x-data="{}" x-init="
    const ctx = $refs.canvas.getContext('2d');
    new Chart(ctx, {
        type: 'doughnut',
        data: {
            labels: ['Direct', 'Organic', 'Referral', 'Social'],
            datasets: [{
                data: [45, 30, 15, 10],
                backgroundColor: ['rgba(59,130,246,0.8)', 'rgba(16,185,129,0.8)', 'rgba(245,158,11,0.8)', 'rgba(139,92,246,0.8)']
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: true,
            plugins: {
                legend: { position: 'right', labels: { color: document.documentElement.classList.contains('dark') ? '#fff' : '#000' } }
            }
        }
    });
" class="bg-white dark:bg-gray-800 rounded-lg shadow p-6">
    <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-4">Traffic Sources</h3>
    <div class="max-w-md mx-auto">
        <canvas x-ref="canvas"></canvas>
    </div>
</div>
@endsection

@section('code')
<div class="bg-white dark:bg-gray-800 rounded-lg shadow p-6">
    <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-4">Traffic Sources</h3>
    <canvas id="donutChart"></canvas>
</div>
<script>
new Chart(document.getElementById('donutChart').getContext('2d'), {
    type: 'doughnut',
    data: {
        labels: ['Direct', 'Organic', 'Referral', 'Social'],
        datasets: [{ data: [45, 30, 15, 10], backgroundColor: ['rgba(59,130,246,0.8)', 'rgba(16,185,129,0.8)', 'rgba(245,158,11,0.8)', 'rgba(139,92,246,0.8)'] }]
    },
    options: { responsive: true }
});
</script>
@endsection
