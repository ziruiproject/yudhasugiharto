module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./node_modules/flowbite/**/*.js",
    ],
    theme: {
        fontFamily: {
            sans: ["Oxygen"],
        },
        extend: {},
    },
    plugins: [require("flowbite/plugin"), require("@tailwindcss/typography")],
};
