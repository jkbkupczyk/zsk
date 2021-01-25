let sub = document.querySelector("#sub");
let kom = document.querySelector("#kom");

sub.addEventListener("click", () => {
    let plec = document.querySelector("#p").checked ? "kobieta" : "mezczyzna";
    kom.value = plec;
});