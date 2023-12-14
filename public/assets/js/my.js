function openNav() {
    document.getElementById("mySidenav").style.animation =
        "expand 0.3s forwards";
    document.getElementById("closeBtn").style.display = "block";
    document.getElementById("closeBtn").style.animation = "show 0.3s";
    // overlay
    document.getElementById("overlay").style.dispaly = "block";
    document.getElementById("overlay").style.animation = "show 0.3s";
}
function closeNav() {
    // alert('close');
    document.getElementById("mySidenav").style.animation =
        "collapse 0.3s forwards";
    // closeBtn
    document.getElementById("closeBtn").style.animation = "hide 0.3s";
    // overlay
    document.getElementById("overlay").style.animation = "hide 0.3s";
    setTimeout(() => {
        document.getElementById("closeBtn").style.display = "none";
        // overlay
        document.getElementById("overlay").style.dispaly = "none";
        // reset menu
        document.getElementById("main-container").style.animation = "";
        document.getElementById("main-container").style.transform =
            "translateX(0px)";
        document.getElementById("sub-container").style.animation = "";
        document.getElementById("sub-container").style.transform =
            "translateX(300px)";
    }, 300);
}
let firstDropDownOpen = false;
function firstDropdown() {
    firstDropDownOpen = !firstDropDownOpen;
    if (firstDropDownOpen) {
        document
            .querySelector("#firstDropDown i")
            .setAttribute("class", "fas fa-chevron-up");
        document.querySelector("#firstDropDown div").innerHTML = "See Less";
        //Handle  container
        document.getElementById("firstContainer").style.dispaly = "block";
        document.getElementById("firstContainer").style.animation =
            "expandDropDown 0.3s forwards";
        document.getElementById("firstContainer").style.transition =
            "height 0.3s";
        document.getElementById("firstContainer").style.height = "auto";
    } else {
        document
            .querySelector("#firstDropDown i")
            .setAttribute("class", "fas fa-chevron-down");
        document.querySelector("#firstDropDown div").innerHTML = "See All";
        document.getElementById("firstContainer").style.animation =
            "collapseDropDown 0.2s forwards";
        document.getElementById("firstContainer").style.transition =
            "height 0.2s";
        document.getElementById("firstContainer").style.height = "0px";
        setTimeout(() => {
            document.getElementById("firstContainer").style.dispaly = "none";
            // alert('bhouth kuvh  hil chuka he he');
        }, 200);
    }
}
let secondDropDownOpen = false;

function secondDropdown() {
    secondDropDownOpen = !secondDropDownOpen;
    if (secondDropDownOpen) {
        document
            .querySelector("#secondDropDown i")
            .setAttribute("class", "fas fa-chevron-up");
        document.querySelector("#secondDropDown div").innerHTML = "See Less";
        //Handle  container
        document.getElementById("secondContainer").style.dispaly = "block";
        document.getElementById("secondContainer").style.animation =
            "expandDropDown 0.3s forwards";
        document.getElementById("secondContainer").style.transition =
            "height 0.3s";
        document.getElementById("secondContainer").style.height = "auto";
    } else {
        document
            .querySelector("#secondDropDown i")
            .setAttribute("class", "fas fa-chevron-down");
        document.querySelector("#secondDropDown div").innerHTML = "See All";
        document.getElementById("secondContainer").style.animation =
            "collapseDropDown 0.2s forwards";
        document.getElementById("secondContainer").style.transition =
            "height 0.2s";
        document.getElementById("secondContainer").style.height = "0px";
        setTimeout(() => {
            document.getElementById("secondContainer").style.dispaly = "none";
            // alert('bhouth kuvh  hil chuka he he');
        }, 200);
    }
}
document.querySelectorAll(".sidenavRow").forEach((row) => {
    row.addEventListener("click", () => {
        document.getElementById("main-container").style.animation =
            "mainAway 0.3s forwards";
        document.getElementById("sub-container").style.animation =
            "subBack 0.3s forwards";
    });
});
document.getElementById("mainMenu").addEventListener("click", () => {
    document.getElementById("main-container").style.animation =
        "mainBack 0.3s forwards";
    document.getElementById("sub-container").style.animation =
        "subPush 0.3s forwards";
});

function openPrimeVideo() {
    document.getElementById("sub-container-content").innerHTML = `
<div class="sidenavContentHeader">Prime chack oyee</div>
<a href="" class="">  <div class="sidenavContent">All videos</div></a> `;
}
let category_bread = false;
function showme() {
    category_bread = !category_bread;
    if (category_bread) {
        document.getElementById("filters_navbar").style.display = "block";
        document.getElementById("gd-4").setAttribute("class", "col-span-3");
        document
            .getElementById("gd-5")
            .setAttribute("class", "grid grid-cols-2 sm:grid-cols-3  gap-6");
    } else {
        setTimeout(() => {
            document.getElementById("filters_navbar").style.display = "none";
            document
                .getElementById("gd-4")
                .setAttribute("class", "col-span-4 ");
            document
                .getElementById("gd-5")
                .setAttribute(
                    "class",
                    "grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 gap-6"
                );
        }, 200);
    }
}

// jquery
const myJsmedia = (widthSize) => {
    if (widthSize.matches) {
        $(".mainImg").extmDestroy();
        // alert("destroid");
    } else {
        $(".mainImg").extm({
            squareOverlay: true,
            position: "right",
            // position:false,
            rightPad: 10,
            lazy: false,
            zoomLevel: 1,
            zoomSize: false,
            loadingText: false,
            loadingImage: true,
        });
    }
};

let widthSize = window.matchMedia("(max-width:780px)");
myJsmedia(widthSize);
widthSize.addEventListener("change", myJsmedia);
// let vidimg = false;
// if (!vidimg) {
//     const img = new Image();
// img.src = "../assets/images/products/product1.jpg";
//  img.style = "border:1px solid red; width:full; hight:full;"
// img.setAttribute("class","w-full  mainImg");
// img.setAttribute("id","main");
// document.getElementById('abcd').appendChild(img);
// }
// else {
// const video = document.createElement('video');
// video.src =
//   'https://archive.org/download/C.E.PriceCatWalksTowardCamera/cat_walks_toward_camera_512kb.mp4';

// video.muted = false;
// video.height = 240; // in px
// video.width = 400; // in px
// const box = document.getElementById('abcd');
// box.appendChild(video);
// }

// change image
let loading = false;
function changeimage(e) {
    document.getElementById("main").src = e;
    // let widthSize = window.matchMedia("(max-width:780px)");
    myJsmedia(widthSize);
    // widthSize.addEventListener("change", myJsmedia);
}
function videochange() {
    document.getElementById("main").style.display = none;
    document.getElementById("main").setAttribute("class", " mainImg hidden");
    document.getElementById("mainvid").style.display = block;
    document.getElementById("mainvid").setAttribute("class", "block");
    alert("image change to video");
}
function ShowHidePassword(elementId, iconId) {
    a = elementId.id;
    e = iconId.id;
    console.log(a);
    console.log(e);
    b = document.getElementById(a);
    f = document.getElementById(e);
    console.log(b);
    console.log(f);
    if (b.type === "password") {
        b.type = "text";
        f.setAttribute(
            "class",
            "absolute font-bold text-lg  right-0 pr-4 fa fa-eye-slash cursor-pointer"
        );
    } else {
        b.type = "password";
        f.setAttribute(
            "class",
            "absolute font-bold text-lg  right-0 pr-4 fa fa-eye cursor-pointer"
        );
    }
}
var sidenav2 = document.getElementById("sidenav-2");
const setsideover = (wsize) => {
    if (wsize.matches) {
       sidenav2.setAttribute("data-te-sidenav-mode","over")
       alert("kuch match howa he or over lagaa diya he");
    } else {
        sidenav2.setAttribute("data-te-sidenav-mode","side")
        alert("side laga diya he");
    }
};

let wsize = window.matchMedia("(max-width:780px)");
setsideover(wsize);
wsize.addEventListener("change", setsideover);


