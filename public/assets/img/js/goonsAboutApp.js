let toggleBigPipeBtn = document.getElementById("gtBigPipe");
let toggleBirdEyeBtn = document.getElementById("gtBirdEye");
let toggleKnightBtn = document.getElementById("gtKnight");
let BigPipeInfo = document.getElementById("BigPipeInfo");
let BirdEyeInfo = document.getElementById("BirdEyeInfo");
let KnightInfo = document.getElementById("KnightInfo");

// Initial
toggleBigPipeBtn.classList.add("goon-active");
BigPipeInfo.style.display = "grid";

toggleBigPipeBtn.onclick = function() {
    toggleBigPipeBtn.classList.add("goon-active");
    toggleBirdEyeBtn.classList.remove("goon-active");
    toggleKnightBtn.classList.remove("goon-active");

    BigPipeInfo.style.display = "grid";
    BirdEyeInfo.style.display = "none";
    KnightInfo.style.display = "none";
}

toggleBirdEyeBtn.onclick = function() {
    toggleBigPipeBtn.classList.remove("goon-active");
    toggleBirdEyeBtn.classList.add("goon-active");
    toggleKnightBtn.classList.remove("goon-active");

    BigPipeInfo.style.display = "none";
    BirdEyeInfo.style.display = "grid";
    KnightInfo.style.display = "none";
}

toggleKnightBtn.onclick = function() {
    toggleBigPipeBtn.classList.remove("goon-active");
    toggleBirdEyeBtn.classList.remove("goon-active");
    toggleKnightBtn.classList.add("goon-active");

    BigPipeInfo.style.display = "none";
    BirdEyeInfo.style.display = "none";
    KnightInfo.style.display = "grid";
}