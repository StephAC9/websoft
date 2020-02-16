require('dotenv').config()
const express = require('express')
const bodyParser = require('body-parser')
const cors = require('cors')
const path = require('path')
const Lotterie = new require('./assets/js/lotto')
let currentSerie = []

const app = express()

app.use(bodyParser())
app.use(cors())

app.set('views', path.join(__dirname, 'views'))
app.set('view engine', 'ejs')
app.use(express.static(__dirname + '/assets'))


app.get('/report', (req, res) => res.sendFile('/report/s02/report.html', { root: __dirname }))
app.get('/home', (req, res) => res.sendFile('/report/s01/home.html', { root: __dirname }))
app.get('/about', (req, res) => res.sendFile('/report/s02/about.html', { root: __dirname }))
app.get('/schools', (req, res) => res.sendFile('/report/s03/schools.html', { root: __dirname }))
app.get('/flags', (req, res) => res.sendFile('/report/s03/flags.html', { root: __dirname }))
app.get('/me', (req, res) => res.sendFile('/report/s02/me.html', { root: __dirname }))

app.get('/', (req, res) => res.render('/views/lotto'))
app.get('/lotto', async function(req, res) {
    currentSerie = Lotterie.newLotterieSerie()
    await res.render(__dirname + '/views/lotto', {
        numbers: currentSerie
    });
})
app.get('/lotto/lotto-json', (req, res) => {
    const query_serie = req.query.row

    if (query_serie == undefined || query_serie == null) {
        res.json({
            currentSerie: currentSerie
        })
    } else {
        var ownSerie = query_serie.split(',')
        var count = 0
        ownSerie.forEach(num => {
            currentSerie.forEach(element => {
                if (num == element)
                    count++
            });
        });

        res.json({
            currentSerie: currentSerie,
            lottoPlayer: {
                playerSerie: ownSerie,
                numberOfHits: count
            }
        })
    }
})

app.get('/lotto/play', (req, res) => res.render(__dirname + '/views/lotto-play'))

app.get('/lotto/result', async(req, res) => {
    const query_serie = req.query.row
    const ownSerie = query_serie.split(',')

    var count = 0
    let gameSerie = Lotterie.newLotterieSerie();
    gameSerie.forEach(element => {
        ownSerie.forEach(num => {
            if (element == num)
                count++
        })
    })
    await res.render(__dirname + '/views/lotto-result', {
        currentSerie: gameSerie,
        lottoPlayer: {
            playerSerie: ownSerie,
            numberOfHits: count
        }
    })
})



const port = process.env.PORT || 6005
app.listen(port, () => {
    console.log(`Express server up running listening at port ${port} ...`)
})