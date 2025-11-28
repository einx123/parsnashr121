document.addEventListener("DOMContentLoaded", () => {
    const menu = document.querySelector(".menu");

    let lastScroll = 0;
    let isSticky = false;

    const activateSticky = () => {
        if (!isSticky) {
            menu.classList.add("is-sticky");
            menu.classList.add("sticky-animate-in");
            isSticky = true;
        }
    };

    const deactivateSticky = () => {
        if (isSticky) {
            menu.classList.remove("is-sticky");
            menu.classList.add("sticky-animate-out");
            isSticky = false;
            setTimeout(() => {
                menu.classList.remove("sticky-animate-out");
            }, 350);
        }
    };

    window.addEventListener("scroll", () => {
        const currentScroll = window.scrollY;

        if (currentScroll > 40) {
            activateSticky();
        } else {
            deactivateSticky();
        }
    
        lastScroll = currentScroll;
    });
});
