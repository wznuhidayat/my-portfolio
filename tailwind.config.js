module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: { // defaults to these values
    textFillColor: theme => theme('borderColor'),
    textStrokeColor: theme => theme('borderColor'),
    textStrokeWidth: theme => theme('borderWidth'),
    paintOrder: {
      'fsm': { paintOrder: 'fill stroke markers' },
      'fms': { paintOrder: 'fill markers stroke' },
      'sfm': { paintOrder: 'stroke fill markers' },
      'smf': { paintOrder: 'stroke markers fill' },
      'mfs': { paintOrder: 'markers fill stroke' },
      'msf': { paintOrder: 'markers stroke fill' },
    },
    extend: {
      height: {
        '120': '30rem',
        '128': '32rem',
      },
      animation: {
        'fade-in-up': 'fadeinup 0.5s ease-in',
        'fade-in-up-1': 'fadeinup 1s ease-in',
        'fade-in-down': 'fade-in-down 0.5s ease-in',
        'fade-in-down': 'fade-in-down 1s ease-in',
        'fade-in-left': 'fade-in-left 0.5s ease-in',
        'fade-in-left-1': 'fade-in-left 1s ease-in',
        'fade-in-right': 'fade-in-right 0.5s ease-in',
        'fade-in-right-1': 'fade-in-right 1s ease-in',

      },
      keyframes: {
        fadeinup: {
          '0%': {
            opacity: '0',
            transform: 'translateY(+100px)'
          },
          '100%': { opacity: '1', transform: 'translateY(0)' },
        },
        'fade-in-down': {
          '0%': {
            opacity: '0',
            transform: 'translateY(-10px)'
          },
          '100%': {
            opacity: '1',
            transform: 'translateY(0)'
          },
        },
        'fade-in-left': {
          '0%': {
            opacity: '0',
            transform: 'translateX(-100px)'
          },
          '100%': {
            opacity: '1',
            transform: 'translateX(0)'
          },
        },
        'fade-in-right': {
          '0%': {
            opacity: '0',
            transform: 'translateX(+100px)'
          },
          '100%': {
            opacity: '1',
            transform: 'translateX(0)'
          },
        }
      }
    }
  },

  variants: { // all the following default to ['responsive']
    textFillColor: ['responsive'],
    textStrokeColor: ['responsive'],
    textStrokeWidth: ['responsive'],
    paintOrder: ['responsive'],
  },

  plugins: [
    require('tailwindcss-text-fill-stroke')(), 
    require('@tailwindcss/forms'),
  ],
}
