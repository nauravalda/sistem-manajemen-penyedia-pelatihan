/** @type {import('tailwindcss').Config} */
module.exports = {
  purge:['./app/Views/**/*.php', './app/Views/*.php', './app/Views/welcome_message.php'],
  content: ['./app/Views/**/*.php', './app/Views/*.php'],
  theme: {
    extend: {
      colors:{
          "white": "#FFFFFF",
          "black": "#000000",
          "sys-light-primary": "#6750A4",
          "sys-light-on-primary": "#FFFFFF",
          "sys-light-primary-container": "#EADDFF",
          "sys-light-on-primary-container": "#21005D",
          "sys-light-primary-fixed": "#EADDFF",
          "sys-light-on-primary-fixed": "#21005D",
          "sys-light-primary-fixed-dim": "#D0BCFF",
          "sys-light-on-primary-fixed-variant": "#4F378B",
          "sys-light-secondary": "#625B71",
          "sys-light-on-secondary": "#FFFFFF",
          "sys-light-secondary-container": "#E8DEF8",
          "sys-light-on-secondary-container": "#1D192B",
          "sys-light-secondary-fixed": "#E8DEF8",
          "sys-light-on-secondary-fixed": "#1D192B",
          "sys-light-secondary-fixed-dim": "#CCC2DC",
          "sys-light-on-secondary-fixed-variant": "#4A4458",
          "sys-light-tertiary": "#7D5260",
          "sys-light-on-tertiary": "#FFFFFF",
          "sys-light-tertiary-container": "#FFD8E4",
          "sys-light-on-tertiary-container": "#31111D",
          "sys-light-tertiary-fixed": "#FFD8E4",
          "sys-light-on-tertiary-fixed": "#31111D",
          "sys-light-tertiary-fixed-dim": "#EFB8C8",
          "sys-light-on-tertiary-fixed-variant": "#633B48",
          "sys-light-error": "#B3261E",
          "sys-light-on-error": "#FFFFFF",
          "sys-light-error-container": "#F9DEDC",
          "sys-light-on-error-container": "#410E0B",
          "sys-light-outline": "#79747E",
          "sys-light-surface": "#FEF7FF",
          "sys-light-on-surface": "#1D1B20",
          "sys-light-on-surface-variant": "#49454F",
          "sys-light-inverse-surface": "#322F35",
          "sys-light-inverse-on-surface": "#F5EFF7",
          "sys-light-inverse-primary": "#D0BCFF",
          "sys-light-shadow": "#000000",
          "sys-light-outline-variant": "#CAC4D0",
          "sys-light-scrim": "#000000",
          "sys-light-surface-container-highest": "#E6E0E9",
          "sys-light-surface-container-high": "#ECE6F0",
          "sys-light-surface-container": "#F3EDF7",
          "sys-light-surface-container-low": "#F7F2FA",
          "sys-light-surface-container-lowest": "#FFFFFF",
          "sys-light-surface-bright": "#FEF7FF",
          "sys-light-surface-dim": "#DED8E1",
          "sys-dark-primary": "#D0BCFF",
          "sys-dark-on-primary": "#381E72",
          "sys-dark-primary-container": "#4F378B",
          "sys-dark-on-primary-container": "#EADDFF",
          "sys-dark-primary-fixed": "#EADDFF",
          "sys-dark-on-primary-fixed": "#21005D",
          "sys-dark-primary-fixed-dim": "#D0BCFF",
          "sys-dark-on-primary-fixed-variant": "#4F378B",
          "sys-dark-secondary": "#CCC2DC",
          "sys-dark-on-secondary": "#332D41",
          "sys-dark-secondary-container": "#4A4458",
          "sys-dark-on-secondary-container": "#E8DEF8",
          "sys-dark-secondary-fixed": "#E8DEF8",
          "sys-dark-on-secondary-fixed": "#1D192B",
          "sys-dark-secondary-fixed-dim": "#CCC2DC",
          "sys-dark-on-secondary-fixed-variant": "#4A4458",
          "sys-dark-tertiary": "#EFB8C8",
          "sys-dark-on-tertiary": "#492532",
          "sys-dark-tertiary-container": "#633B48",
          "sys-dark-on-tertiary-container": "#FFD8E4",
          "sys-dark-tertiary-fixed": "#FFD8E4",
          "sys-dark-on-tertiary-fixed": "#31111D",
          "sys-dark-tertiary-fixed-dim": "#EFB8C8",
          "sys-dark-on-tertiary-fixed-variant": "#633B48",
          "sys-dark-error": "#F2B8B5",
          "sys-dark-on-error": "#601410",
          "sys-dark-error-container": "#8C1D18",
          "sys-dark-on-error-container": "#F9DEDC",
          "sys-dark-outline": "#938F99",
          "sys-dark-surface": "#141218",
          "sys-dark-on-surface": "#E6E0E9",
          "sys-dark-on-surface-variant": "#CAC4D0",
          "sys-dark-inverse-surface": "#E6E0E9",
          "sys-dark-inverse-on-surface": "#322F35",
          "sys-dark-inverse-primary": "#6750A4",
          "sys-dark-shadow": "#000000",
          "sys-dark-outline-variant": "#49454F",
          "sys-dark-scrim": "#000000",
          "sys-dark-surface-container-highest": "#36343B",
          "sys-dark-surface-container-high": "#2B2930",
          "sys-dark-surface-container": "#211F26",
          "sys-dark-surface-container-low": "#1D1B20",
          "sys-dark-surface-container-lowest": "#0F0D13",
          "sys-dark-surface-bright": "#3B383E",
          "sys-dark-surface-dim": "#141218",
          "ref-primary-primary0": "#000000",
          "ref-primary-primary10": "#21005D",
          "ref-primary-primary20": "#381E72",
          "ref-primary-primary30": "#4F378B",
          "ref-primary-primary40": "#6750A4",
          "ref-primary-primary50": "#7F67BE",
          "ref-primary-primary60": "#9A82DB",
          "ref-primary-primary70": "#B69DF8",
          "ref-primary-primary80": "#D0BCFF",
          "ref-primary-primary90": "#EADDFF",
          "ref-primary-primary95": "#F6EDFF",
          "ref-primary-primary99": "#FFFBFE",
          "ref-primary-primary100": "#FFFFFF",
          "ref-secondary-secondary0": "#000000",
          "ref-secondary-secondary10": "#1D192B",
          "ref-secondary-secondary20": "#332D41",
          "ref-secondary-secondary30": "#4A4458",
          "ref-secondary-secondary40": "#625B71",
          "ref-secondary-secondary50": "#7A7289",
          "ref-secondary-secondary60": "#958DA5",
          "ref-secondary-secondary70": "#B0A7C0",
          "ref-secondary-secondary80": "#CCC2DC",
          "ref-secondary-secondary90": "#E8DEF8",
          "ref-secondary-secondary95": "#F6EDFF",
          "ref-secondary-secondary100": "#FFFFFF",
          "ref-tertiary-tertiary0": "#000000",
          "ref-tertiary-tertiary10": "#31111D",
          "ref-tertiary-tertiary20": "#492532",
          "ref-tertiary-tertiary30": "#633B48",
          "ref-tertiary-tertiary40": "#7D5260",
          "ref-tertiary-tertiary50": "#986977",
          "ref-tertiary-tertiary60": "#B58392",
          "ref-tertiary-tertiary70": "#D29DAC",
          "ref-tertiary-tertiary80": "#EFB8C8",
          "ref-tertiary-tertiary90": "#FFD8E4",
          "ref-tertiary-tertiary95": "#FFECF1",
          "ref-tertiary-tertiary99": "#FFFBFA",
          "ref-tertiary-tertiary100": "#FFFFFF",
          "ref-error-error0": "#000000",
          "ref-error-error10": "#410E0B",
          "ref-error-error20": "#601410",
          "ref-error-error30": "#8C1D18",
          "ref-error-error40": "#B3261E",
          "ref-error-error50": "#DC362E",
          "ref-error-error60": "#E46962",
          "ref-error-error70": "#EC928E",
          "ref-error-error80": "#F2B8B5",
          "ref-error-error90": "#F9DEDC",
          "ref-error-error95": "#FCEEEE",
          "ref-error-error99": "#FFFBF9",
          "ref-error-error100": "#FFFFFF",
          "ref-neutral-neutral0": "#000000",
          "ref-neutral-neutral10": "#1D1B20",
          "ref-neutral-neutral20": "#322F35",
          "ref-neutral-neutral30": "#48464C",
          "ref-neutral-neutral40": "#605D64",
          "ref-neutral-neutral50": "#79767D",
          "ref-neutral-neutral60": "#938F96",
          "ref-neutral-neutral70": "#AEA9B1",
          "ref-neutral-neutral80": "#CAC5CD",
          "ref-neutral-neutral90": "#E6E0E9",
          "ref-neutral-neutral95": "#F5EFF7",
          "ref-neutral-neutral100": "#FFFFFF",
          "ref-neutral-variant-neutral-variant0": "#000000",
          "ref-neutral-variant-neutral-variant10": "#1D1A22",
          "ref-neutral-variant-neutral-variant20": "#322F37",
          "ref-neutral-variant-neutral-variant30": "#49454F",
          "ref-neutral-variant-neutral-variant40": "#605D66",
          "ref-neutral-variant-neutral-variant50": "#79747E",
          "ref-neutral-variant-neutral-variant60": "#938F99",
          "ref-neutral-variant-neutral-variant70": "#AEA9B4",
          "ref-neutral-variant-neutral-variant80": "#CAC4D0",
          "ref-neutral-variant-neutral-variant90": "#E7E0EC",
          "ref-neutral-variant-neutral-variant95": "#F5EEFA",
          "ref-neutral-variant-neutral-variant100": "#FFFFFF"
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
        '10' : '0.6rem',
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


