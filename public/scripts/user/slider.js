const slideCont = document.querySelector("main .slides");
const slideNav = slideCont.nextElementSibling;

const intObs = new IntersectionObserver(entries => {
    entries.forEach(entry => {
        if (entry.intersectionRatio < 1) return;
        checkNavItem(entry.target);
    });
}, { threshold: 1 });

for (let slide of slideCont.children) {
    const label = document.createElement("label"),
        input = document.createElement("input");
    input.type = "radio";
    input.name = "dot";
    input.slide = slide;
    input.oninput = scrollToCard;
    slide.input = input;
    label.appendChild(input);
    slideNav.appendChild(label);
    intObs.observe(slide);
}

function scrollToCard(e) {
    slideCont.scrollLeft = e.target.slide.offsetLeft;
}
function checkNavItem(slide) {
    slide.input.checked = true;
}