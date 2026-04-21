@extends('showcase::components.component-layout')

@section('demo')
<div x-data="{}" x-init="
    const ctx = $refs.canvas.getContext('2d');
    new Chart(ctx, {
        type: 'radar',
        data: {
            labels: ['HTML', 'CSS', 'JavaScript', 'PHP', 'Laravel', 'Vue.js'],
            datasets: [{
                label: 'Skills',
                data: [90, 85, 80, 75, 70, 65],
                borderColor: 'rgb(59, 130, 246)',
                backgroundColor: 'rgba(59, 130, 246, 0.2)'
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: true,
            plugins: { legend: { display: true, labels: { color: document.documentElement.classList.contains('dark') ? '#fff' : '#000' } } },
            scales: {
                r: {
                    ticks: { color: document.documentElement.classList.contains('dark') ? '#9ca3af' : '#6b7280', backdropColor: 'transparent' },
                    grid: { color: document.documentElement.classList.contains('dark') ? '#374151' : '#e5e7eb' },
                    pointLabels: { color: document.documentElement.classList.contains('dark') ? '#fff' : '#000' }
                }
            }
        }
    });
" class="bg-white dark:bg-gray-800 rounded-lg shadow p-6">
    <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-4">Skill Assessment</h3>
    <div class="max-w-md mx-auto">
        <canvas x-ref="canvas"></canvas>
    </div>
</div>
@endsection

@section('code')
<div class="bg-white dark:bg-gray-800 rounded-lg shadow p-6">
    <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-4">Skill Assessment</h3>
    <canvas id="radarChart"></canvas>
</div>
<script>
new Chart(document.getElementById('radarChart').getContext('2d'), {
    type: 'radar',
    data: {
        labels: ['HTML', 'CSS', 'JavaScript', 'PHP', 'Laravel', 'Vue.js'],
        datasets: [{ label: 'Skills', data: [90, 85, 80, 75, 70, 65], borderColor: 'rgb(59, 130, 246)', backgroundColor: 'rgba(59, 130, 246, 0.2)' }]
    },
    options: { responsive: true }
});
</script>
@endsection
