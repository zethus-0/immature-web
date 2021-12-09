module.exports = {
    purge: [
      './resources/views/**/*.blade.php',
      './resources/css/**/*.css',
    ],
    theme: {
      extend: {
        colors: {
          primary: "var(--primary)",
          secondary: "var(--secondary)",
          main: "var(--main)",
          background: "var(--background)",
          accent: "var(--accent)"
        }
      }
    },
    variants: {},
    plugins: [
      require('@tailwindcss/ui'),
      require('@tailwindcss/forms'),
    ]
  }
