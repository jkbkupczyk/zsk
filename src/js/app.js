document.querySelector("input[type=text]").addEventListener("change", () => {
    val.innerText = '';
    const key = (document.querySelector("input[type=text]").value).toUpperCase();

    const regex = new RegExp("[A-Za-z]{1,}");
    const regex2 = /^[A-Za-z]{1,}$/;

    if (!key.match(regex)) {
        val.innerText = "Invalid character";
        return;
    }

    for (let i = 0; i < key.length; i++) {
        let charCode = (key.charCodeAt(i) + 2);
        val.innerText += `${String.fromCharCode(charCode > 90 ? charCode - 26 : charCode)}`;
    }
})