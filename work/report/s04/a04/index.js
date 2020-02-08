require('dotenv').config()
const express = require('express')
const app = express()
const port = process.env.PORT || 6201

app.get('/', (req, res) => {
    res.send('Hello guys!')
})

app.listen(port, () => {
    console.log(`Express server up running on port ${port} ...`)
})