
// Auto Image Slider

var spanIndex = 0;
autoSlider();
opacityIndex = 0;

function autoSlider() {
    
    const spans = document.querySelectorAll('.span');
    const images = document.querySelectorAll('.image');

    for(var i = 0; i < spans.length; i++) {
        spans[i].style.backgroundColor = 'transparent';
    }

    spanIndex++;

    if(spanIndex > spans.length) {
        spanIndex = 1;
    }

    spans[spanIndex - 1].style.backgroundColor = '#0177C1';
    images[spanIndex - 1].style.display = "block";
    
    if(spanIndex > 1) {
        for(var i = 0; i < spanIndex - 1; i++) {
            spans[i].style.backgroundColor = 'transparent';
            images[i].style.display = "none";
        }
    }

    setTimeout(autoSlider, 4000);
}


// Counter

const myNum = document.querySelectorAll(".count");
let range = 100;


myNum.forEach((myCount) => {

    let target_count = myCount.dataset.count;
    let init_count = +myCount.innerText;
        
    let new_range = Math.floor(target_count / range);
        
    const updateNumber = () => {
        
        init_count += new_range;
        myCount.innerText = init_count + ' +';
        
        if(init_count < target_count) {
            setTimeout(() => {updateNumber()}, 2);
        }
    };
        
    updateNumber();
});


// Information Panel

let infoLinks = document.querySelectorAll(".infoLink");
let infoPanels = document.querySelectorAll(".infoPanel");

function showPanel(panelIndex, colorCode) {
    infoLinks.forEach(function(node) {
        node.style.backgroundColor = "";
        node.style.color = "";
    });
    infoLinks[panelIndex].style.backgroundColor = colorCode;
    infoLinks[panelIndex].style.color = "black";

    infoPanels.forEach(function(node) {
        node.style.display = "none";
    });
    infoPanels[panelIndex].style.display = "flex";
    infoPanels[panelIndex].style.backgroundColor = colorCode;
}

showPanel(0, '#87cdec');
