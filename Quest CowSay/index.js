const myInformation = require('./information')

const chalk = require("chalk")
const cowsay = require("cowsay")
console.log(myInformation.name)

console.log(chalk.bold(cowsay.say({
    text : chalk.magenta.bgRgb(14, 70, 14)(`Meuh all, C'est ${myInformation.name} du campus de ${myInformation.campus}, meulle journée`),
    e : "O°",
    T : "U ",
})))
