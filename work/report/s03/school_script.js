//Moving my duck
document.getElementsByClassName("movingImg")[0].addEventListener('mouseover', () => {
    let top = document.getElementsByClassName("movingImg")[0].style.top
    top = top === '-40%' ? '-55%' :
        top = top === '-55%' ? 0 : '-40%'
    let left = document.getElementsByClassName("movingImg")[0].style.left
    left = left === '-40%' ? 0 : '-40%';

    document.getElementsByClassName("movingImg")[0].style.left = left
    document.getElementsByClassName("movingImg")[0].style.top = top

});

//Set table callback function
function setTable(array, elementId) {
    let newArray = []
    array.forEach(element => {
        const schoolObj = {
            Skolenhetskod: element.Skolenhetskod,
            Skolenhetsnamn: element.Skolenhetsnamn
        }
        newArray.push(schoolObj)
    });
    var col = [];
    for (var i = 0; i < newArray.length; i++) {
        for (var key in newArray[i]) {
            if (col.indexOf(key) === -1) {
                col.push(key);
            }
        }
    }
    var table = document.createElement("table");


    var tr = table.insertRow(-1);

    for (var i = 0; i < col.length; i++) {
        var th = document.createElement("th");
        th.innerHTML = col[i];
        tr.appendChild(th);
    }
    for (var i = 0; i < newArray.length; i++) {

        tr = table.insertRow(-1);

        for (var j = 0; j < col.length; j++) {
            var tabCell = tr.insertCell(-1);
            tabCell.innerHTML = newArray[i][col[j]];
        }
    }
    var divContainer = document.getElementById(elementId);
    divContainer.innerHTML = "";
    divContainer.appendChild(table);
}

function compare(a, b) {
    // Use toUpperCase() to ignore character casing
    const nameA = a.kom_namn.toUpperCase();
    const nameB = b.kom_namn.toUpperCase();

    let comparison = 0;
    if (nameA > nameB) {
        comparison = 1;
    } else if (nameA < nameB) {
        comparison = -1;
    }
    return comparison;
}

//Loading municipalities
async function loadMunicipalities() {
    let citiesArray = []
    await fetch('../repo/municipalities.json')
        .then((res) => res.json())
        .then((data) => {
            citiesArray = data.kommuns
            citiesArray.sort(compare)
            let element = ''

            for (const i in citiesArray) {
                let city = {
                    name: citiesArray[i].kom_namn,
                    kod: citiesArray[i].id
                }

                element += `
                <menu>
                    <menuitem style="cursor:pointer" onclick="getSchools(${city.kod})" >${city.name} </menuitem>
                </menu>
                 `
            }
            document.getElementById('menu-list').innerHTML = element
        })
}
// Fill up the menu with municipalities
//document.getElementById('cityLoader').addEventListener('click', loadMunicipalities())
document.getElementById('schools').addEventListener('click', loadMunicipalities())



//Get school related to the municipality
async function getSchools(kod) {
    console.log('function newfile. kod:' + kod)
    await fetch('../repo/swedish_schools.json')
        .then((res) => res.json())
        .then((data) => {
            console.log(data)
            const schools = data
            schoolArray = schools.Skolenheter.filter(school => school.Kommunkod == kod)
            console.log(schoolArray)
            setTable(schoolArray, 'schools-table')
        })

}