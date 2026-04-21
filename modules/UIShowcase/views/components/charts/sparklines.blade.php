@extends('showcase::components.component-layout')

@section('demo')
<div class="bg-white dark:bg-gray-800 rounded-lg shadow p-6">
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        <div x-data="{}" x-init="
            const ctx = $refs.canvas.getContext('2d');
            new Chart(ctx, {
                type: 'line',
                data: { labels: Array(12).fill(''), datasets: [{ data: [20,25,22,30,28,35,32,40,38,45,42,48], borderColor: 'rgb(16,185,129)', borderWidth: 2, fill: false, tension: 0.4 }] },
                options: { responsive: true, maintainAspectRatio: false, plugins: { legend: { display: false } }, scales: { x: { display: false }, y: { display: false } } }
            });
        " class="text-center">
            <p class="text-sm text-gray-600 dark:text-gray-400 mb-2">Revenue</p>
            <canvas x-ref="canvas" height="40"></canvas>
            <p class="text-2xl font-bold text-gray-900 dark:text-white mt-2">$45,231</p>
        </div>
        <div x-data="{}" x-init="
            const ctx = $refs.canvas.getContext('2d');
            new Chart(ctx, {
                type: 'line',
                data: { labels: Array(12).fill(''), datasets: [{ data: [100,120,115,130,125,140,135,145,142,150,148,155], borderColor: 'rgb(59,130,246)', borderWidth: 2, fill: false, tension: 0.4 }] },
                options: { responsive: true, maintainAspectRatio: false, plugins: { legend: { display: false } }, scales: { x: { display: false }, y: { display: false } } }
            });
        " class="text-center">
            <p class="text-sm text-gray-600 dark:text-gray-400 mb-2">Orders</p>
            <canvas x-ref="canvas" height="40"></canvas>
            <p class="text-2xl font-bold text-gray-900 dark:text-white mt-2">1,293</p>
        </div>
        <div x-data="{}" x-init="
            const ctx = $refs.canvas.getContext('2d');
            new Chart(ctx, {
                type: 'line',
                data: { labels: Array(12).fill(''), datasets: [{ data: [50,48,52,55,53,58,60,57,62,65,63,68], borderColor: 'rgb(245,158,11)', borderWidth: 2, fill: false, tension: 0.4 }] },
                options: { responsive: true, maintainAspectRatio: false, plugins: { legend: { display: false } }, scales: { x: { display: false }, y: { display: false } } }
            });
        " class="text-center">
            <p class="text-sm text-gray-600 dark:text-gray-400 mb-2">Customers</p>
            <canvas x-ref="canvas" height="40"></canvas>
            <p class="text-2xl font-bold text-gray-900 dark:text-white mt-2">573</p>
        </div>
    </div>
</div>
@endsection

@section('code')
<div class="text-center">
    <p class="text-sm text-gray-600 dark:text-gray-400 mb-2">Revenue</p>
    <canvas id="sparkline1" height="40"></canvas>
    <p class="text-2xl font-bold text-gray-900 dark:text-white mt-2">$45,231</p>
</div>

<script>
new Chart(document.getElementById('sparkline1').getContext('2d'), {
    type: 'line',
    data: { labels: Array(12).fill(''), datasets: [{ data: [20,25,22,30,28,35,32,40,38,45,42,48], borderColor: 'rgb(16,185,129)', borderWidth: 2, fill: false, tension: 0.4 }] },
    options: { responsive: true, maintainAspectRatio: false, plugins: { legend: { display: false } }, scales: { x: { display: false }, y: { display: false } } }
});
</script>
@endsection
