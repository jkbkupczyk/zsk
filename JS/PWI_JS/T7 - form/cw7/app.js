let btn = document.getElementById("btn");

btn.addEventListener("click", () => {
    let char = document.getElementById("sele").value;
    let height = parseInt(document.getElementById("h").value);
    let p = document.getElementById("p");

    p.innerHTML = "";

    for (let i = 0; i < height ; i++) {
        for (let j = 0; j < i + 1; j++) {
            p.innerHTML += char;
        }
        p.innerHTML += "<br>";
    }
});