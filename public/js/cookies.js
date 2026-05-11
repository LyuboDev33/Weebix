window.addEventListener('load', function () {
    cookies();
})

function cookies() {
    const cookieBox = document.querySelector(".cookies__modal");
    const acceptButton = document.querySelector("#acceptBtn");
    const declineButton = document.querySelector("#declineBtn");

    if (document.cookie.includes("cookieBy=Weebix") ||
        document.cookie.includes("cookieDeclined=true")) {
        return;
    }

    console.log('test');


    cookieBox.classList.add("show");

    acceptButton.addEventListener("click", () => {
        cookieBox.classList.remove("show");
        document.cookie = "cookieBy=Weebix; max-age=" + 60 * 60 * 24 * 30 + "; path=/";
        window.location.reload();
    });

    declineButton.addEventListener("click", () => {
        cookieBox.classList.remove("show");
        document.cookie = "cookieDeclined=true; max-age=" + 60 * 60 * 24 * 30 + "; path=/";
        window.location.reload();
    });
}

