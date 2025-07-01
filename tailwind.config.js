/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      fontFamily: {
        'syne': ['Syne', 'sans-serif'],
        'clash': ['"Clash Display"', 'sans-serif'],
        'cabinet': ['"Cabinet Grotesk"', 'sans-serif']
      },
      colors: {
        'primary': '#00f2fe',
        'neon': {
          purple: '#B026FF',
          blue: '#4D4DFF',
          pink: '#FF26B9',
          cyan: '#26FFFF'
        },
        'dark': {
          DEFAULT: '#0A0A0F',
          100: '#13131A',
          200: '#1C1C26',
          300: '#262633'
        }
      },
      animation: {
        'float': 'float 6s ease-in-out infinite',
        'glow': 'glow 2s ease-in-out infinite alternate',
        'gradient': 'gradient 8s linear infinite',
        'border-flow': 'border-flow 2s linear infinite'
      },
      keyframes: {
        float: {
          '0%, 100%': { transform: 'translateY(0)' },
          '50%': { transform: 'translateY(-20px)' }
        },
        glow: {
          'from': { 'box-shadow': '0 0 20px #B026FF, 0 0 40px #4D4DFF' },
          'to': { 'box-shadow': '0 0 30px #FF26B9, 0 0 50px #26FFFF' }
        },
        gradient: {
          '0%': { backgroundPosition: '0% 50%' },
          '100%': { backgroundPosition: '100% 50%' }
        },
        'border-flow': {
          '0%': { backgroundPosition: '0% 50%' },
          '50%': { backgroundPosition: '100% 50%' },
          '100%': { backgroundPosition: '0% 50%' }
        }
      },
      backgroundImage: {
        'gradient-radial': 'radial-gradient(var(--tw-gradient-stops))',
        'gradient-conic': 'conic-gradient(var(--tw-gradient-stops))',
        'gradient-neon': 'linear-gradient(45deg, #B026FF, #4D4DFF, #FF26B9, #26FFFF)',
      }
    },
  },
  plugins: [
    require('@tailwindcss/aspect-ratio'),
  ],
} 