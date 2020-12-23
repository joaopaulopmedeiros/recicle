const path = require('path')

module.exports = {
    mode: "development",
    entry: [
        "./assets/js/index.js"
    ],
    output: {
        filename: "main.js",
        path: path.resolve(__dirname, "./assets/js/dist"),
    }
}