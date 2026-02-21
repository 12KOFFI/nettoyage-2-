(function () {
    const prefersReducedMotion = window.matchMedia(
        "(prefers-reduced-motion: reduce)",
    ).matches;

    function addRevealAnimations() {
        const revealTargets = document.querySelectorAll(
            ".banner-header .container, .contact-info-card, .devis-form-card, .demande-devis-form .dd-section, .demande-devis-form .form-group, .demande-devis-form .dd-prestation",
        );

        if (!revealTargets.length) {
            return;
        }

        revealTargets.forEach((element) => element.classList.add("fx-reveal"));

        if (prefersReducedMotion || !("IntersectionObserver" in window)) {
            revealTargets.forEach((element) =>
                element.classList.add("in-view"),
            );
            return;
        }

        const observer = new IntersectionObserver(
            (entries, currentObserver) => {
                entries.forEach((entry) => {
                    if (!entry.isIntersecting) {
                        return;
                    }

                    entry.target.classList.add("in-view");
                    currentObserver.unobserve(entry.target);
                });
            },
            { threshold: 0.12, rootMargin: "0px 0px -8% 0px" },
        );

        revealTargets.forEach((element) => observer.observe(element));
    }

    function addFormInteractions() {
        const forms = document.querySelectorAll("form");
        if (!forms.length) {
            return;
        }

        forms.forEach((form) => {
            const fields = form.querySelectorAll("input, select, textarea");

            fields.forEach((field) => {
                field.addEventListener("focus", () => {
                    field.classList.add("is-focus");
                });

                field.addEventListener("blur", () => {
                    field.classList.remove("is-focus");

                    const hasValue =
                        typeof field.value === "string" &&
                        field.value.trim() !== "";
                    field.classList.toggle("has-value", hasValue);
                });
            });

            form.addEventListener("submit", () => {
                const firstInvalid = form.querySelector(":invalid");
                if (!firstInvalid) {
                    return;
                }

                firstInvalid.classList.add("form-shake");
                setTimeout(
                    () => firstInvalid.classList.remove("form-shake"),
                    420,
                );
            });
        });
    }

    function addNavbarClickFeedback() {
        const navLinks = document.querySelectorAll(
            ".menu-wrap .nav-link, .drawer-nav a, .btn-drawer-quote",
        );

        if (!navLinks.length) {
            return;
        }

        navLinks.forEach((link) => {
            const accent = link.getAttribute("data-nav-accent") || "green";
            const accentClass =
                accent === "blue" ? "nav-accent-blue" : "nav-accent-green";

            link.classList.add(accentClass);

            link.addEventListener("click", () => {
                link.classList.add("is-clicked");
            });
        });
    }

    document.addEventListener("DOMContentLoaded", () => {
        addRevealAnimations();
        addFormInteractions();
        addNavbarClickFeedback();
    });
})();
