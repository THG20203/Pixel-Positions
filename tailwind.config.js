/** @type {import('tailwindcss').Config} */
export default {
    content: ["./resources/**/*.blade.php", "./resources/**/*.js"],
    theme: {
        extend: {
            colors: {
                /* changing black to a slightly different shade */
                black: "#060606",
            },
            fontFamily: {
                "hanken-grotest": ["Hanken Grotesk", "sans-serif"],
            },
            fontSize: {
                "2xs": "0.625rem", // 10px
            },
        },
    },
    plugins: [],
};
