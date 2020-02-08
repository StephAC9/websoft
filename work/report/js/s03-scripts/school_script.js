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
    await fetch('../files-repo/municipalities.json')
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
document.getElementById('schools').addEventListener('click', loadMunicipalities())



//Get school related to the municipality
async function getSchools(kod) {
    console.log('function newfile. kod:' + kod)
    await fetch('../files-repo/swedish_schools.json')
        .then((res) => res.json())
        .then((data) => {
            console.log(data)
            const schools = data
            schoolArray = schools.Skolenheter.filter(school => school.Kommunkod == kod)
            console.log(schoolArray)
            if (schoolArray.length < 1) {
                document.getElementById('schools-table').innerHTML = `<h3>SORRY BUT WE COULD NOT FIND ANY SCHOOL RELATED TO THAT MUNICIPALITY. TRY ANOTHER!</h3>`
            }
            setTable(schoolArray, 'schools-table')
        })

}
//moving duck
document.getElementById('startLogo').addEventListener('click', () => {
    let areaHeight = window.innerHeight,
        areaWidth = window.innerWidth,
        points = document.getElementById('points'),
        duck = document.getElementById('duck'),
        holder = document.getElementById('scoreHolder'),
        startLogo = document.getElementById('startLogo'),
        exit = document.getElementById('exit');
    score = 0,
        timer = 1000;

    exit.style.visibility = "visible";
    duck.style.visibility = "visible";
    duck.style.zIndex = "10000";
    duck.style.position = "fixed";
    holder.style.visibility = "visible";
    startLogo.style.visibility = "hidden";

    duck.onclick = function() {
        score += 1;
        newPosition(duck, areaWidth, areaHeight);
        points.innerHTML = score;
    };
})

document.getElementById('exit').addEventListener('click', () => {
    let startLogo = document.getElementById('startLogo'),
        duck = document.getElementById('duck'),
        holder = document.getElementById('scoreHolder'),
        exit = document.getElementById('exit');

    exit.style.visibility = "hidden";
    startLogo.style.visibility = "visible";
    duck.style.visibility = "hidden";
    holder.style.visibility = "hidden";
})


function newPosition(duck, areaWidth, areaHeight) {
    var newX = Math.floor(Math.random() * (areaWidth - duck.width)),
        newY = Math.floor(Math.random() * (areaHeight - duck.height));

    duck.style.left = newX + "px";
    duck.style.top = newY + "px";
}