@extends('showcase::layouts.showcase')

@section('page-title', 'Charts & Analytics')
@section('page-description', 'Data visualization with Chart.js - line, bar, pie, donut charts')

@section('content')
<div class="max-w-7xl mx-auto space-y-8">

    <!-- Line Chart -->
    @component('showcase::components.showcase-item', [
        'title' => 'Line Chart',
        'description' => 'Interactive line chart with multiple datasets using Chart.js',
        'code' => '<div class="bg-white dark:bg-gray-800 rounded-lg shadow p-6">
    <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-4">Revenue Overview</h3>
    <canvas id="lineChart"></canvas>
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
const ctx = document.getElementById(&#39;lineChart&#39;).getContext(&#39;2d&#39;);
new Chart(ctx, {
    type: &#39;line&#39;,
    data: {
        labels: [&#39;Jan&#39;, &#39;Feb&#39;, &#39;Mar&#39;, &#39;Apr&#39;, &#39;May&#39;, &#39;Jun&#39;],
        datasets: [{
            label: &#39;Revenue&#39;,
            data: [12000, 19000, 15000, 25000, 22000, 30000],
            borderColor: &#39;rgb(59, 130, 246)&#39;,
            backgroundColor: &#39;rgba(59, 130, 246, 0.1)&#39;,
            tension: 0.4
        }]
    },
    options: {
        responsive: true,
        plugins: {
            legend: { display: true }
        }
    }
});
</script>'
    ])
        @slot('preview')
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
                            legend: { 
                                display: true,
                                labels: { color: document.documentElement.classList.contains('dark') ? '#fff' : '#000' }
                            }
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
        @endslot
    @endcomponent

    <!-- Bar Chart -->
    @component('showcase::components.showcase-item', [
        'title' => 'Bar Chart',
        'description' => 'Vertical bar chart for comparing data across categories',
        'code' => '<div class="bg-white dark:bg-gray-800 rounded-lg shadow p-6">
    <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-4">Monthly Sales</h3>
    <canvas id="barChart"></canvas>
</div>

<script>
const ctx = document.getElementById(&#39;barChart&#39;).getContext(&#39;2d&#39;);
new Chart(ctx, {
    type: &#39;bar&#39;,
    data: {
        labels: [&#39;Product A&#39;, &#39;Product B&#39;, &#39;Product C&#39;, &#39;Product D&#39;],
        datasets: [{
            label: &#39;Sales&#39;,
            data: [65, 59, 80, 81],
            backgroundColor: [
                &#39;rgba(59, 130, 246, 0.8)&#39;,
                &#39;rgba(16, 185, 129, 0.8)&#39;,
                &#39;rgba(245, 158, 11, 0.8)&#39;,
                &#39;rgba(239, 68, 68, 0.8)&#39;
            ]
        }]
    },
    options: {
        responsive: true,
        plugins: {
            legend: { display: false }
        }
    }
});
</script>'
    ])
        @slot('preview')
            <div x-data="{}" x-init="
                const ctx = $refs.canvas.getContext('2d');
                new Chart(ctx, {
                    type: 'bar',
                    data: {
                        labels: ['Product A', 'Product B', 'Product C', 'Product D'],
                        datasets: [{
                            label: 'Sales',
                            data: [65, 59, 80, 81],
                            backgroundColor: [
                                'rgba(59, 130, 246, 0.8)',
                                'rgba(16, 185, 129, 0.8)',
                                'rgba(245, 158, 11, 0.8)',
                                'rgba(239, 68, 68, 0.8)'
                            ]
                        }]
                    },
                    options: {
                        responsive: true,
                        maintainAspectRatio: true,
                        plugins: {
                            legend: { display: false }
                        },
                        scales: {
                            y: {
                                beginAtZero: true,
                                ticks: { color: document.documentElement.classList.contains('dark') ? '#9ca3af' : '#6b7280' },
                                grid: { color: document.documentElement.classList.contains('dark') ? '#374151' : '#e5e7eb' }
                            },
                            x: {
                                ticks: { color: document.documentElement.classList.contains('dark') ? '#9ca3af' : '#6b7280' },
                                grid: { display: false }
                            }
                        }
                    }
                });
            " class="bg-white dark:bg-gray-800 rounded-lg shadow p-6">
                <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-4">Monthly Sales</h3>
                <canvas x-ref="canvas"></canvas>
            </div>
        @endslot
    @endcomponent

    <!-- Pie Chart -->
    @component('showcase::components.showcase-item', [
        'title' => 'Pie Chart',
        'description' => 'Circular chart showing proportional data',
        'code' => '<div class="bg-white dark:bg-gray-800 rounded-lg shadow p-6">
    <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-4">Market Share</h3>
    <canvas id="pieChart"></canvas>
</div>

<script>
const ctx = document.getElementById(&#39;pieChart&#39;).getContext(&#39;2d&#39;);
new Chart(ctx, {
    type: &#39;pie&#39;,
    data: {
        labels: [&#39;Chrome&#39;, &#39;Firefox&#39;, &#39;Safari&#39;, &#39;Edge&#39;, &#39;Others&#39;],
        datasets: [{
            data: [65, 15, 10, 5, 5],
            backgroundColor: [
                &#39;rgba(59, 130, 246, 0.8)&#39;,
                &#39;rgba(245, 158, 11, 0.8)&#39;,
                &#39;rgba(16, 185, 129, 0.8)&#39;,
                &#39;rgba(139, 92, 246, 0.8)&#39;,
                &#39;rgba(156, 163, 175, 0.8)&#39;
            ]
        }]
    },
    options: {
        responsive: true,
        plugins: {
            legend: { position: &#39;bottom&#39; }
        }
    }
});
</script>'
    ])
        @slot('preview')
            <div x-data="{}" x-init="
                const ctx = $refs.canvas.getContext('2d');
                new Chart(ctx, {
                    type: 'pie',
                    data: {
                        labels: ['Chrome', 'Firefox', 'Safari', 'Edge', 'Others'],
                        datasets: [{
                            data: [65, 15, 10, 5, 5],
                            backgroundColor: [
                                'rgba(59, 130, 246, 0.8)',
                                'rgba(245, 158, 11, 0.8)',
                                'rgba(16, 185, 129, 0.8)',
                                'rgba(139, 92, 246, 0.8)',
                                'rgba(156, 163, 175, 0.8)'
                            ]
                        }]
                    },
                    options: {
                        responsive: true,
                        maintainAspectRatio: true,
                        plugins: {
                            legend: { 
                                position: 'bottom',
                                labels: { color: document.documentElement.classList.contains('dark') ? '#fff' : '#000' }
                            }
                        }
                    }
                });
            " class="bg-white dark:bg-gray-800 rounded-lg shadow p-6">
                <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-4">Market Share</h3>
                <div class="max-w-md mx-auto">
                    <canvas x-ref="canvas"></canvas>
                </div>
            </div>
        @endslot
    @endcomponent

    <!-- Donut Chart -->
    @component('showcase::components.showcase-item', [
        'title' => 'Donut Chart',
        'description' => 'Pie chart with a hollow center',
        'code' => '<div class="bg-white dark:bg-gray-800 rounded-lg shadow p-6">
    <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-4">Traffic Sources</h3>
    <canvas id="donutChart"></canvas>
</div>

<script>
const ctx = document.getElementById(&#39;donutChart&#39;).getContext(&#39;2d&#39;);
new Chart(ctx, {
    type: &#39;doughnut&#39;,
    data: {
        labels: [&#39;Direct&#39;, &#39;Organic&#39;, &#39;Referral&#39;, &#39;Social&#39;],
        datasets: [{
            data: [45, 30, 15, 10],
            backgroundColor: [
                &#39;rgba(59, 130, 246, 0.8)&#39;,
                &#39;rgba(16, 185, 129, 0.8)&#39;,
                &#39;rgba(245, 158, 11, 0.8)&#39;,
                &#39;rgba(139, 92, 246, 0.8)&#39;
            ]
        }]
    },
    options: {
        responsive: true,
        plugins: {
            legend: { position: &#39;right&#39; }
        }
    }
});
</script>'
    ])
        @slot('preview')
            <div x-data="{}" x-init="
                const ctx = $refs.canvas.getContext('2d');
                new Chart(ctx, {
                    type: 'doughnut',
                    data: {
                        labels: ['Direct', 'Organic', 'Referral', 'Social'],
                        datasets: [{
                            data: [45, 30, 15, 10],
                            backgroundColor: [
                                'rgba(59, 130, 246, 0.8)',
                                'rgba(16, 185, 129, 0.8)',
                                'rgba(245, 158, 11, 0.8)',
                                'rgba(139, 92, 246, 0.8)'
                            ]
                        }]
                    },
                    options: {
                        responsive: true,
                        maintainAspectRatio: true,
                        plugins: {
                            legend: { 
                                position: 'right',
                                labels: { color: document.documentElement.classList.contains('dark') ? '#fff' : '#000' }
                            }
                        }
                    }
                });
            " class="bg-white dark:bg-gray-800 rounded-lg shadow p-6">
                <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-4">Traffic Sources</h3>
                <div class="max-w-md mx-auto">
                    <canvas x-ref="canvas"></canvas>
                </div>
            </div>
        @endslot
    @endcomponent

    <!-- Area Chart -->
    @component('showcase::components.showcase-item', [
        'title' => 'Area Chart',
        'description' => 'Filled line chart showing trends over time',
        'code' => '<div class="bg-white dark:bg-gray-800 rounded-lg shadow p-6">
    <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-4">User Growth</h3>
    <canvas id="areaChart"></canvas>
</div>

<script>
const ctx = document.getElementById(&#39;areaChart&#39;).getContext(&#39;2d&#39;);
new Chart(ctx, {
    type: &#39;line&#39;,
    data: {
        labels: [&#39;Week 1&#39;, &#39;Week 2&#39;, &#39;Week 3&#39;, &#39;Week 4&#39;, &#39;Week 5&#39;, &#39;Week 6&#39;],
        datasets: [{
            label: &#39;Active Users&#39;,
            data: [1200, 1900, 1500, 2500, 2200, 3000],
            borderColor: &#39;rgb(16, 185, 129)&#39;,
            backgroundColor: &#39;rgba(16, 185, 129, 0.2)&#39;,
            fill: true,
            tension: 0.4
        }]
    },
    options: {
        responsive: true,
        plugins: {
            legend: { display: true }
        }
    }
});
</script>'
    ])
        @slot('preview')
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
                        plugins: {
                            legend: { 
                                display: true,
                                labels: { color: document.documentElement.classList.contains('dark') ? '#fff' : '#000' }
                            }
                        },
                        scales: {
                            y: {
                                beginAtZero: true,
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
                <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-4">User Growth</h3>
                <canvas x-ref="canvas"></canvas>
            </div>
        @endslot
    @endcomponent

    <!-- Multi-line Chart -->
    @component('showcase::components.showcase-item', [
        'title' => 'Multi-line Chart',
        'description' => 'Comparing multiple datasets on one chart',
        'code' => '<div class="bg-white dark:bg-gray-800 rounded-lg shadow p-6">
    <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-4">Sales Comparison</h3>
    <canvas id="multiLineChart"></canvas>
</div>

<script>
const ctx = document.getElementById(&#39;multiLineChart&#39;).getContext(&#39;2d&#39;);
new Chart(ctx, {
    type: &#39;line&#39;,
    data: {
        labels: [&#39;Jan&#39;, &#39;Feb&#39;, &#39;Mar&#39;, &#39;Apr&#39;, &#39;May&#39;, &#39;Jun&#39;],
        datasets: [
            {
                label: &#39;2024&#39;,
                data: [12, 19, 15, 25, 22, 30],
                borderColor: &#39;rgb(59, 130, 246)&#39;,
                backgroundColor: &#39;rgba(59, 130, 246, 0.1)&#39;,
                tension: 0.4
            },
            {
                label: &#39;2025&#39;,
                data: [15, 23, 18, 28, 25, 35],
                borderColor: &#39;rgb(16, 185, 129)&#39;,
                backgroundColor: &#39;rgba(16, 185, 129, 0.1)&#39;,
                tension: 0.4
            }
        ]
    },
    options: {
        responsive: true,
        plugins: {
            legend: { display: true }
        }
    }
});
</script>'
    ])
        @slot('preview')
            <div x-data="{}" x-init="
                const ctx = $refs.canvas.getContext('2d');
                new Chart(ctx, {
                    type: 'line',
                    data: {
                        labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'],
                        datasets: [
                            {
                                label: '2024',
                                data: [12, 19, 15, 25, 22, 30],
                                borderColor: 'rgb(59, 130, 246)',
                                backgroundColor: 'rgba(59, 130, 246, 0.1)',
                                tension: 0.4
                            },
                            {
                                label: '2025',
                                data: [15, 23, 18, 28, 25, 35],
                                borderColor: 'rgb(16, 185, 129)',
                                backgroundColor: 'rgba(16, 185, 129, 0.1)',
                                tension: 0.4
                            }
                        ]
                    },
                    options: {
                        responsive: true,
                        maintainAspectRatio: true,
                        plugins: {
                            legend: { 
                                display: true,
                                labels: { color: document.documentElement.classList.contains('dark') ? '#fff' : '#000' }
                            }
                        },
                        scales: {
                            y: {
                                beginAtZero: true,
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
                <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-4">Sales Comparison</h3>
                <canvas x-ref="canvas"></canvas>
            </div>
        @endslot
    @endcomponent

    <!-- Horizontal Bar Chart -->
    @component('showcase::components.showcase-item', [
        'title' => 'Horizontal Bar Chart',
        'description' => 'Bar chart with horizontal orientation',
        'code' => '<div class="bg-white dark:bg-gray-800 rounded-lg shadow p-6">
    <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-4">Top Products</h3>
    <canvas id="horizontalBarChart"></canvas>
</div>

<script>
const ctx = document.getElementById(&#39;horizontalBarChart&#39;).getContext(&#39;2d&#39;);
new Chart(ctx, {
    type: &#39;bar&#39;,
    data: {
        labels: [&#39;Laptop&#39;, &#39;Smartphone&#39;, &#39;Tablet&#39;, &#39;Headphones&#39;, &#39;Smartwatch&#39;],
        datasets: [{
            label: &#39;Units Sold&#39;,
            data: [450, 380, 290, 510, 340],
            backgroundColor: &#39;rgba(59, 130, 246, 0.8)&#39;
        }]
    },
    options: {
        indexAxis: &#39;y&#39;,
        responsive: true,
        plugins: {
            legend: { display: false }
        }
    }
});
</script>'
    ])
        @slot('preview')
            <div x-data="{}" x-init="
                const ctx = $refs.canvas.getContext('2d');
                new Chart(ctx, {
                    type: 'bar',
                    data: {
                        labels: ['Laptop', 'Smartphone', 'Tablet', 'Headphones', 'Smartwatch'],
                        datasets: [{
                            label: 'Units Sold',
                            data: [450, 380, 290, 510, 340],
                            backgroundColor: 'rgba(59, 130, 246, 0.8)'
                        }]
                    },
                    options: {
                        indexAxis: 'y',
                        responsive: true,
                        maintainAspectRatio: true,
                        plugins: {
                            legend: { display: false }
                        },
                        scales: {
                            x: {
                                beginAtZero: true,
                                ticks: { color: document.documentElement.classList.contains('dark') ? '#9ca3af' : '#6b7280' },
                                grid: { color: document.documentElement.classList.contains('dark') ? '#374151' : '#e5e7eb' }
                            },
                            y: {
                                ticks: { color: document.documentElement.classList.contains('dark') ? '#9ca3af' : '#6b7280' },
                                grid: { display: false }
                            }
                        }
                    }
                });
            " class="bg-white dark:bg-gray-800 rounded-lg shadow p-6">
                <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-4">Top Products</h3>
                <canvas x-ref="canvas"></canvas>
            </div>
        @endslot
    @endcomponent

    <!-- Radar Chart -->
    @component('showcase::components.showcase-item', [
        'title' => 'Radar Chart',
        'description' => 'Spider/web chart for multivariate data',
        'code' => '<div class="bg-white dark:bg-gray-800 rounded-lg shadow p-6">
    <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-4">Skill Assessment</h3>
    <canvas id="radarChart"></canvas>
</div>

<script>
const ctx = document.getElementById(&#39;radarChart&#39;).getContext(&#39;2d&#39;);
new Chart(ctx, {
    type: &#39;radar&#39;,
    data: {
        labels: [&#39;HTML&#39;, &#39;CSS&#39;, &#39;JavaScript&#39;, &#39;PHP&#39;, &#39;Laravel&#39;, &#39;Vue.js&#39;],
        datasets: [{
            label: &#39;Skills&#39;,
            data: [90, 85, 80, 75, 70, 65],
            borderColor: &#39;rgb(59, 130, 246)&#39;,
            backgroundColor: &#39;rgba(59, 130, 246, 0.2)&#39;
        }]
    },
    options: {
        responsive: true,
        plugins: {
            legend: { display: true }
        }
    }
});
</script>'
    ])
        @slot('preview')
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
                        plugins: {
                            legend: { 
                                display: true,
                                labels: { color: document.documentElement.classList.contains('dark') ? '#fff' : '#000' }
                            }
                        },
                        scales: {
                            r: {
                                ticks: { 
                                    color: document.documentElement.classList.contains('dark') ? '#9ca3af' : '#6b7280',
                                    backdropColor: 'transparent'
                                },
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
        @endslot
    @endcomponent

    <!-- Sparkline (Mini Charts) -->
    @component('showcase::components.showcase-item', [
        'title' => 'Sparklines',
        'description' => 'Small inline charts for showing trends',
        'code' => '<div class="bg-white dark:bg-gray-800 rounded-lg shadow p-6">
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        <div class="text-center">
            <p class="text-sm text-gray-600 dark:text-gray-400 mb-2">Revenue</p>
            <canvas id="sparkline1" height="40"></canvas>
            <p class="text-2xl font-bold text-gray-900 dark:text-white mt-2">$45,231</p>
        </div>
        <div class="text-center">
            <p class="text-sm text-gray-600 dark:text-gray-400 mb-2">Orders</p>
            <canvas id="sparkline2" height="40"></canvas>
            <p class="text-2xl font-bold text-gray-900 dark:text-white mt-2">1,293</p>
        </div>
        <div class="text-center">
            <p class="text-sm text-gray-600 dark:text-gray-400 mb-2">Customers</p>
            <canvas id="sparkline3" height="40"></canvas>
            <p class="text-2xl font-bold text-gray-900 dark:text-white mt-2">573</p>
        </div>
    </div>
</div>

<script>
// Revenue sparkline
new Chart(document.getElementById(&#39;sparkline1&#39;).getContext(&#39;2d&#39;), {
    type: &#39;line&#39;,
    data: {
        labels: Array(12).fill(&#39;&#39;),
        datasets: [{
            data: [20, 25, 22, 30, 28, 35, 32, 40, 38, 45, 42, 48],
            borderColor: &#39;rgb(16, 185, 129)&#39;,
            borderWidth: 2,
            fill: false,
            tension: 0.4
        }]
    },
    options: {
        responsive: true,
        maintainAspectRatio: false,
        plugins: { legend: { display: false } },
        scales: { x: { display: false }, y: { display: false } }
    }
});
</script>'
    ])
        @slot('preview')
            <div class="bg-white dark:bg-gray-800 rounded-lg shadow p-6">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    <div x-data="{}" x-init="
                        const ctx = $refs.canvas.getContext('2d');
                        new Chart(ctx, {
                            type: 'line',
                            data: {
                                labels: Array(12).fill(''),
                                datasets: [{
                                    data: [20, 25, 22, 30, 28, 35, 32, 40, 38, 45, 42, 48],
                                    borderColor: 'rgb(16, 185, 129)',
                                    borderWidth: 2,
                                    fill: false,
                                    tension: 0.4
                                }]
                            },
                            options: {
                                responsive: true,
                                maintainAspectRatio: false,
                                plugins: { legend: { display: false } },
                                scales: { x: { display: false }, y: { display: false } }
                            }
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
                            data: {
                                labels: Array(12).fill(''),
                                datasets: [{
                                    data: [100, 120, 115, 130, 125, 140, 135, 145, 142, 150, 148, 155],
                                    borderColor: 'rgb(59, 130, 246)',
                                    borderWidth: 2,
                                    fill: false,
                                    tension: 0.4
                                }]
                            },
                            options: {
                                responsive: true,
                                maintainAspectRatio: false,
                                plugins: { legend: { display: false } },
                                scales: { x: { display: false }, y: { display: false } }
                            }
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
                            data: {
                                labels: Array(12).fill(''),
                                datasets: [{
                                    data: [50, 48, 52, 55, 53, 58, 60, 57, 62, 65, 63, 68],
                                    borderColor: 'rgb(245, 158, 11)',
                                    borderWidth: 2,
                                    fill: false,
                                    tension: 0.4
                                }]
                            },
                            options: {
                                responsive: true,
                                maintainAspectRatio: false,
                                plugins: { legend: { display: false } },
                                scales: { x: { display: false }, y: { display: false } }
                            }
                        });
                    " class="text-center">
                        <p class="text-sm text-gray-600 dark:text-gray-400 mb-2">Customers</p>
                        <canvas x-ref="canvas" height="40"></canvas>
                        <p class="text-2xl font-bold text-gray-900 dark:text-white mt-2">573</p>
                    </div>
                </div>
            </div>
        @endslot
    @endcomponent

</div>

<!-- Load Chart.js from CDN -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
@endsection
