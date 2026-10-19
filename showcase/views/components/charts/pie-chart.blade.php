@extends('showcase::components.component-layout')

@section('demo')
<div x-data="{}" x-init="
    const ctx = $refs.canvas.getContext('2d');
    new Chart(ctx, {
        type: 'pie',
        data: {
            labels: ['Chrome', 'Firefox', 'Safari', 'Edge', 'Others'],
            datasets: [{
                data: [65, 15, 10, 5, 5],
                backgroundColor: ['rgba(59,130,246,0.8)', 'rgba(245,158,11,0.8)', 'rgba(16,185,129,0.8)', 'rgba(139,92,246,0.8)', 'rgba(156,163,175,0.8)']
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: true,
            plugins: {
                legend: { position: 'bottom', labels: { color: document.documentElement.classList.contains('dark') ? '#fff' : '#000' } }
            }
        }
    });
" class="bg-white dark:bg-gray-800 rounded-lg shadow p-6">
    <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-4">Market Share</h3>
    <div class="max-w-md mx-auto">
        <canvas x-ref="canvas"></canvas>
    </div>
</div>
@endsection

@section('code')
<div class="bg-white dark:bg-gray-800 rounded-lg shadow p-6">
    <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-4">Market Share</h3>
    <canvas id="pieChart"></canvas>
</div>
<script>
new Chart(document.getElementById('pieChart').getContext('2d'), {
    type: 'pie',
    data: {
        labels: ['Chrome', 'Firefox', 'Safari', 'Edge', 'Others'],
        datasets: [{ data: [65, 15, 10, 5, 5], backgroundColor: ['rgba(59,130,246,0.8)', 'rgba(245,158,11,0.8)', 'rgba(16,185,129,0.8)', 'rgba(139,92,246,0.8)', 'rgba(156,163,175,0.8)'] }]
    },
    options: { responsive: true, plugins: { legend: { position: 'bottom' } } }
});
</script>
@endsection
