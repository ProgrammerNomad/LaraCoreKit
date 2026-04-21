import './bootstrap';

// Alpine is bundled with Livewire 4 - don't import it separately
// This prevents conflicts and allows Livewire to work properly

// UI Showcase libraries - available globally
import Chart from 'chart.js/auto';
import Sortable from 'sortablejs';

// Prism.js for syntax highlighting
import Prism from 'prismjs';
import 'prismjs/components/prism-markup'; // HTML
import 'prismjs/themes/prism-tomorrow.css';

// Make available globally for UIShowcase pages
window.Chart = Chart;
window.Sortable = Sortable;
window.Prism = Prism;

// Alpine component for code blocks - defined before Alpine starts
window.showcaseCodeBlock = function(codeText) {
    return {
        codeVisible: false,
        copied: false,
        toggle() {
            this.codeVisible = !this.codeVisible;
            if (this.codeVisible) {
                this.$nextTick(() => {
                    Prism.highlightElement(this.$refs.codeEl);
                });
            }
        },
        copy() {
            navigator.clipboard.writeText(codeText).then(() => {
                this.copied = true;
                setTimeout(() => { this.copied = false; }, 2000);
            });
        }
    };
};
