import defaultTheme from "tailwindcss/defaultTheme";

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/**/*.blade.php",
        "./resources/**/*.jsx",
        "./resources/**/*.js",
    ],
    theme: {
        extend: {
            colors: {
                primary: {
                    DEFAULT: "hsl(147, 100%, 30%)",
                },
                background: {
                    DEFAULT: "hsl(0, 0%, 100%)",
                },
                accent: {
                    DEFAULT: "hsl(240, 4.76%, 95.88%)",
                    foreground: "hsl(240, 5.88%, 10%)",
                },
            },
            fontFamily: {
                sans: ["Figtree", ...defaultTheme.fontFamily.sans],
                poppins: ["Poppins", "sans-serif"],
            },
        },
    },
    plugins: [],
};
