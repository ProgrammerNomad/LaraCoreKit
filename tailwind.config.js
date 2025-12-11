/** @type {import('tailwindcss').Config} */
module.exports = {
  // Enable class-based dark mode (recommended for Filament + custom UI)
  darkMode: 'class',

  // Specify all paths Tailwind should scan
  content: [
    './resources/**/*.blade.php',
    './resources/**/*.js',
    './resources/**/*.vue',

    // Livewire components
    './app/Http/Livewire/**/*.php',

    // Filament
    './app/Filament/**/*.php',
    './vendor/filament/**/*.blade.php',
    './vendor/filament/**/*.js',

    // Modules frontend + admin (important!)
    './modules/**/resources/**/*.blade.php',
    './modules/**/src/**/*.php',
  ],

  theme: {
    container: {
      center: true,
      padding: "1.5rem",
      screens: {
        sm: "600px",
        md: "728px",
        lg: "984px",
        xl: "1240px",
        "2xl": "1496px",
      },
    },

    extend: {
      fontFamily: {
        sans: ["Inter", "Poppins", "sans-serif"],
      },

      colors: {
        primary: {
          DEFAULT: "#FF2D20",  // Laravel Red
          soft: "#FF6B60",
        },
        secondary: {
          DEFAULT: "#3B82F6",  // Tailwind Blue
          soft: "#60A5FA",
        },
        accent: {
          DEFAULT: "#0EA5E9",
        },
        dark: {
          DEFAULT: "#0F172A", // slate-900-ish
        }
      },

      boxShadow: {
        soft: "0 4px 20px rgba(0, 0, 0, 0.08)",
      },
    },
  },

  plugins: [
    require('@tailwindcss/forms'),
    require('@tailwindcss/typography'),
  ],

  // Safelist for dynamic classes generated from DB (optional)
  safelist: [
    'bg-primary', 'text-primary', 'border-primary',
    'bg-secondary', 'text-secondary', 'border-secondary',
    'dark:bg-dark', 'dark:text-white',
  ],
};
