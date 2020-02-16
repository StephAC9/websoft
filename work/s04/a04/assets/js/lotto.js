function generateNewLottoSerie() {
    window.location = "./lotto"
}

function find_duplicate_in_array(arr) {
    var object = {};
    var result = false;


    arr.forEach(function(item) {
        if (!object[item])
            object[item] = 0;
        object[item] += 1;
    })

    for (var prop in object) {
        if (object[prop] >= 2) {
            result = true
        }
    }

    return result;

}

function invalid_number_in_array(arr) {
    let result = false
    arr.forEach(item => {
        if (item < 1 || item > 35) {
            result = true
        }
    })
    return result
}


function sumbitOwnSerie() {
    console.log('btn submit pressed')
    let first = document.getElementById('first').value
    let second = document.getElementById('second').value
    let third = document.getElementById('third').value
    let fourth = document.getElementById('fourth').value
    let fifth = document.getElementById('fifth').value
    let sixth = document.getElementById('sixth').value
    let seventh = document.getElementById('seventh').value
    const arr = [first, second, third, fourth, fifth, sixth, seventh]

    console.log(arr)


    const result1 = find_duplicate_in_array(arr)
    const result2 = invalid_number_in_array(arr)

    if (result1 == true || result2 == true) {
        document.getElementById('errMsg').innerHTML = `<h4>Wrong value or duplicate entry!</h4>`
    } else {
        window.location = `http://localhost:6005/lotto/result?row=${first},${second},${third},${fourth},${fifth},${sixth},${seventh}`
    }
}


exports.newLotterieSerie = () => {
    const maxLength = 7
    const lotNumbers = []
    const usedNumbers = []
    do {
        var num = Math.floor(Math.random() * 35) + 1
        if (!usedNumbers.includes(num)) {
            lotNumbers.push(num)
            usedNumbers.push(num)
        }
    }
    while (lotNumbers.length < maxLength)
    return lotNumbers
}