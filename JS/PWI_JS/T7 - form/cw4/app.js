let kom = document.querySelector("#kom");

let kolory = document.querySelectorAll("input[type='checkbox']");

sub.addEventListener("click", () => {
    let text = "";

    for (let i = 0; i < kolory.length; i++) {
        if(kolory[i].checked){
            text += `${kolory[i].value},`
        }
    }

    kom.value = text;
});