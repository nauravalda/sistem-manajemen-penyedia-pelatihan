/** @type {import('tailwindcss').Config} */
module.exports = {
  purge:['./app/Views/**/*.php', './app/Views/*.php', './app/Views/welcome_message.php'],
  content: ['./app/Views/**/*.php', './app/Views/*.php'],
  theme: {
    extend: {
      colors:{
        'light-primary'  : '#6750A4',
      },
      fontFamily: {
        'sans': ['Roboto', 'sans-serif'],
      },
      fontSize: {
        'label-sm' : '0.7rem',
        'label-md' : '0.75rem',
        'label-lg' : '0.9rem',
        'body-sm' : '0.8rem',
        'body-md' : '0.9rem',
        'body-lg' : '1rem',
        'title-sm' : '0.9rem',
        'title-md' : '1rem',
        'title-lg' : '1.4rem',
        'headline-sm' : '1.5rem',
        'headline-md' : '1.8rem',
        'headline-lg' : '2rem',
        'display-sm' : '2rem',
        'display-md' : '3rem',
        'display-lg' : '4rem',
      },
      fontWeight: {
        'light': 300,
        'normal': 400,
        'medium': 500,
        'semibold': 600,
        'bold': 700,
        'extrabold': 800,
      },
      borderRadius: {
        'small ': '1rem',
        'medium': '1.5rem',
        'large': '2rem',
      },
      gap: {
        '8' : '0.5rem',
        '12' : '0.8rem',
        '16' : '1rem',
        '24' : '1.5rem',
        '40' : '3rem',
      },
    },

  },
  plugins: [
    require('@tailwindcss/line-clamp'),
  ],
}


