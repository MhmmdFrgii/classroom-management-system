import defaultTheme from "tailwindcss/defaultTheme";
import forms from "@tailwindcss/forms";

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/views/**/*.blade.php",
    ],

    theme: {
        container: {
            center: true,
            padding: "12px",
        },
        safelist: [
            "navbar-fixed", // Tambahkan ini agar kelas tidak dihapus
        ],
        extend: {
            fontFamily: {
                sans: ["Figtree", ...defaultTheme.fontFamily.sans],
                anton: ['"Anton SC"', "sans-serif"], // mendefinisikan font "Anton SC"
                inter: ['"Inter"', "sans-serif"],
            },
            colors: {
                primary: "#14b8a6",
                secondary: "#64748b",
                dark: "#0f172a",
            },
        },
        screens: {
            xl: "1120px",
        },
    },

    plugins: [forms],
};
