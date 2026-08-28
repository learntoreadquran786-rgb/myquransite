// =============================
// My Quran Majeed Reader
// =============================

const image = document.getElementById("bookImage");
const pageNumber = document.getElementById("pageNumber");

let page = 1;
const qaidaLastPage = 33;

// Quran
const quranJuz = [
    {folder:"01",start:1,end:20},
    {folder:"02",start:21,end:38},
    {folder:"03",start:39,end:56},
    {folder:"04",start:57,end:74},
    {folder:"05",start:75,end:92},
    {folder:"06",start:93,end:110},
    {folder:"07",start:111,end:128},
    {folder:"08",start:129,end:146},
    {folder:"09",start:147,end:164},
    {folder:"10",start:165,end:182},
    {folder:"11",start:183,end:200},
    {folder:"12",start:201,end:218},
    {folder:"13",start:219,end:236},
    {folder:"14",start:237,end:254},
    {folder:"15",start:255,end:272},
    {folder:"16",start:273,end:290},
    {folder:"17",start:291,end:308},
    {folder:"18",start:309,end:326},
    {folder:"19",start:327,end:344},
    {folder:"20",start:345,end:362},
    {folder:"21",start:363,end:380},
    {folder:"22",start:381,end:398},
    {folder:"23",start:399,end:416},
    {folder:"24",start:417,end:434},
    {folder:"25",start:435,end:452},
    {folder:"26",start:453,end:470},
    {folder:"27",start:471,end:488},
    {folder:"28",start:489,end:508},
    {folder:"29",start:509,end:528},
    {folder:"30",start:529,end:549}
];

function pad(num){
    return String(num).padStart(4,"0");
}

function currentFolder(){

    for(let i=0;i<quranJuz.length;i++){

        if(page>=quranJuz[i].start && page<=quranJuz[i].end){

            return quranJuz[i].folder;

        }

    }

    return "01";
}

function loadPage(){

    if(book==="quran"){

        image.src =
        "coloured_quran/"
        +currentFolder()
        +"/Page"
        +pad(page)
        +".gif";

        pageNumber.innerHTML =
        "Page "+page+" / 549";

    }

    if(book==="qaida"){

        image.src =
        "noorani_qaida/"
        +String(page).padStart(2,"0")
        +".jpg";

        pageNumber.innerHTML =
        "Page "+page;

    }
if(book==="fiqh"){

    image.src =
    "books/fiqh/"
    +String(page).padStart(2,"0")
    +".jpg";

    pageNumber.innerHTML =
    "Page "+page;

}

if(book==="tajweed"){

    image.src =
    "books/tajweed/"
    +String(page).padStart(2,"0")
    +".jpg";

    pageNumber.innerHTML =
    "Page "+page;

}

if(book==="grammar"){

    image.src =
    "books/grammar/"
    +String(page).padStart(2,"0")
    +".jpg";

    pageNumber.innerHTML =
    "Page "+page;

}
}
// =============================
// Juz Selector
// =============================

const juzStartPages = [
    1,21,39,57,75,
    93,111,129,147,165,
    183,201,219,237,255,
    273,291,309,327,345,
    363,381,399,417,435,
    453,471,489,509,529
];

const juzSelect = document.getElementById("juzSelect");

if(juzSelect){

    juzSelect.onchange = function(){

        page = juzStartPages[this.value - 1];

        loadPage();

    };

}

document.getElementById("nextBtn").onclick = function(){

    if(book === "quran"){

        if(page < 549){
            page++;
        }

    }else if(book === "qaida"){

        if(page < qaidaLastPage){
            page++;
        }

    }

    loadPage();

};

document.getElementById("prevBtn").onclick = function(){

    if(page > 1){
        page--;
    }
document.addEventListener("keydown", function(e){

    if(e.key === "ArrowRight"){
        document.getElementById("nextBtn").click();
    }

    if(e.key === "ArrowLeft"){
        document.getElementById("prevBtn").click();
    }

});
    loadPage();

};
if(juzSelect && book==="quran"){

    for(let i=0;i<quranJuz.length;i++){

        if(page>=quranJuz[i].start && page<=quranJuz[i].end){

            juzSelect.value=i+1;

            break;

        }

    }

}
// =============================
// PDF Viewer
// =============================

if(book === "pdf"){

    const pdfViewer = document.getElementById("pdfViewer");

    if(juzSelect){

        juzSelect.onchange = function(){

            pdfViewer.src = "quran_pdf/" + this.value + ".pdf";

        };

    }

}