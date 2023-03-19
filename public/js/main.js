console.log("hello world");

const profileBtn = document.querySelector("#menu-button");
const profileMenu = document.querySelector("[role='menu']");
const addPostBtn = document.querySelector("[data-modal-target='addPost']");

if (profileBtn) {
    profileBtn.addEventListener("click", (e) => {
        const menuDisplay = profileMenu.style.display;
        if (menuDisplay == "none") {
            profileMenu.style.display = "block";
        } else {
            profileMenu.style.display = "none";
        }
        console.log(profileMenu.style.display);
    });
}

if (addPostBtn) {
    addPostBtn.addEventListener("click", (e) => {
        const addPostModal = document.querySelector("#addPost");
        addPostModal.classList.toggle("hidden");
        // if (menuDisplay == "none") {
        //     profileMenu.style.display = "block";
        // } else {
        //     profileMenu.style.display = "none";
        // }
        console.log(addPostModal.style.display);
    });
}
