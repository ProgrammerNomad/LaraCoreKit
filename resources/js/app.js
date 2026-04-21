import './bootstrap';

// Alpine is bundled with Livewire 4 - don't import it separately
// This prevents conflicts and allows Livewire to work properly

// UI Showcase libraries - available globally
import Chart from 'chart.js/auto';
import Sortable from 'sortablejs';

// Make available globally for UIShowcase pages
window.Chart = Chart;
window.Sortable = Sortable;
