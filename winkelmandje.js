function haalNotitiesOp() {
    // Maak notitie lijst leeg.
    NOTITIE_LIJST.innerHTML = "";

    // Pak de notities lijst die nog in string fromaat is en zet on in leesbaar JSON formaat.
    let notities = JSON.parse(localStorage.getItem("notities"));

    // Elke opgeslagen notitie pakken en in de HTML zetten.
    // onClick functie koppelen met de index van "i" zodat de functie kan indentificeren 
    // welk notitie uit de lijst is geklikt door de gebruiker.
    for (let i = 0; i < notities.length; i++) {
        NOTITIE_LIJST.innerHTML += "<h6 onClick='openNotitie(" + i + ")'>" + notities[i].titel + "</h6>";
        NOTITIE_LIJST.innerHTML += "<button onClick='verwijderNotitie(" + i + ")'>Verwijder notitie</button>";
        NOTITIE_LIJST.innerHTML += "<button id='bewerkNotitiesKnop' onClick='bewerkNotitie(" + i + ")'>Bewerk notitie</button>";
        
    }
}