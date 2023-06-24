const productContainers = document.querySelectorAll('.product-container');
const nxtBtn = document.querySelector('.nxt-btn');
const preBtn = document.querySelector('.pre-btn');

productContainers.forEach((item) => {
    let containerDimensions = item.getBoundingClientRect();
    let containerWidth = containerDimensions.width;
    nxtBtn.addEventListener('click', () => {
        item.scrollLeft += containerWidth / 2;
    })

    preBtn.addEventListener('click', () => {
        item.scrollLeft -= containerWidth / 2;
    })
})

function change() {
    window.location.href = "signup.php";
}

function change2() {
    window.location.href = "../logout.php";
}
function back() {
    window.location.href = "index.php";
}
function adminback() {
    window.location.href = "../index.php";
}
