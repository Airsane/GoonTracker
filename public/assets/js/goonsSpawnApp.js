let toggleCustomsBtn = document.getElementById("stCustoms");
let toggleLighthouseBtn = document.getElementById("stLighthouse");
let toggleShorelineBtn = document.getElementById("stShoreline");
let toggleWoodsBtn = document.getElementById("stWoods");
let customsInfo = document.getElementById("customs-info");
let lighthouseInfo = document.getElementById("lighthouse-info");
let shorelineInfo = document.getElementById("shoreline-info");
let woodsInfo = document.getElementById("woods-info");

// Initial
toggleCustomsBtn.classList.add("goon-active");
customsInfo.style.display = "grid";

toggleCustomsBtn.onclick = function() {
    toggleCustomsBtn.classList.add("goon-active");
    toggleLighthouseBtn.classList.remove("goon-active");
    toggleShorelineBtn.classList.remove("goon-active");
    toggleWoodsBtn.classList.remove("goon-active");

    customsInfo.style.display = "grid";
    lighthouseInfo.style.display = "none";
    shorelineInfo.style.display = "none";
    woodsInfo.style.display = "none";
}

toggleLighthouseBtn.onclick = function() {
    toggleCustomsBtn.classList.remove("goon-active");
    toggleLighthouseBtn.classList.add("goon-active");
    toggleShorelineBtn.classList.remove("goon-active");
    toggleWoodsBtn.classList.remove("goon-active");

    customsInfo.style.display = "none";
    lighthouseInfo.style.display = "grid";
    shorelineInfo.style.display = "none";
    woodsInfo.style.display = "none";
}

toggleShorelineBtn.onclick = function() {
    toggleCustomsBtn.classList.remove("goon-active");
    toggleLighthouseBtn.classList.remove("goon-active");
    toggleShorelineBtn.classList.add("goon-active");
    toggleWoodsBtn.classList.remove("goon-active");

    customsInfo.style.display = "none";
    lighthouseInfo.style.display = "none";
    shorelineInfo.style.display = "grid";
    woodsInfo.style.display = "none";
}

toggleWoodsBtn.onclick = function() {
    toggleCustomsBtn.classList.remove("goon-active");
    toggleLighthouseBtn.classList.remove("goon-active");
    toggleShorelineBtn.classList.remove("goon-active");
    toggleWoodsBtn.classList.add("goon-active");

    customsInfo.style.display = "none";
    lighthouseInfo.style.display = "none";
    shorelineInfo.style.display = "none";
    woodsInfo.style.display = "grid";
}