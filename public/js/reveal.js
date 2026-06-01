/* =========================================================
   Mika Linux — motion layer (powered by anime.js)
   - Welcoming hero entrance on load
   - Slow, staggered scroll reveals as the visitor scrolls
   ========================================================= */
(function () {
    "use strict";

    var reduceMotion =
        window.matchMedia &&
        window.matchMedia("(prefers-reduced-motion: reduce)").matches;

    // Apply the "hidden until revealed" state only when JS + anime are available,
    // so visitors without JS still see all content.
    if (!reduceMotion && window.anime) {
        document.documentElement.classList.add("reveal-ready");
    }

    /* ---- Split helper: wrap each character of an element in a span ---- */
    function splitChars(el) {
        var text = el.textContent;
        el.textContent = "";
        var frag = document.createDocumentFragment();
        for (var i = 0; i < text.length; i++) {
            var ch = text[i];
            var span = document.createElement("span");
            span.className = "char";
            span.textContent = ch === " " ? " " : ch;
            frag.appendChild(span);
        }
        el.appendChild(frag);
        return el.querySelectorAll(".char");
    }

    /* ---- Reveal animation for one element ---- */
    function revealParams(el, extraDelay) {
        var dir = el.getAttribute("data-reveal") || "up";
        var p = {
            targets: el,
            opacity: [0, 1],
            duration: 1100,
            easing: "easeOutExpo",
            delay: extraDelay || 0,
        };
        if (dir === "up" || dir === "") p.translateY = [48, 0];
        else if (dir === "down") p.translateY = [-48, 0];
        else if (dir === "left") p.translateX = [-64, 0];
        else if (dir === "right") p.translateX = [64, 0];
        else if (dir === "scale") {
            p.scale = [0.9, 1];
            p.translateY = [24, 0];
        }
        return p;
    }

    function onReady() {
        var hero = document.querySelector(".hero");

        /* ---------- Hero welcome entrance ---------- */
        if (window.anime && !reduceMotion) {
            var splitTargets = document.querySelectorAll(".hero-title [data-split]");
            var allChars = [];
            splitTargets.forEach(function (t) {
                splitChars(t).forEach(function (c) {
                    allChars.push(c);
                });
            });

            var tl = anime.timeline({ easing: "easeOutExpo" });

            if (allChars.length) {
                tl.add({
                    targets: allChars,
                    translateY: [70, 0],
                    opacity: [0, 1],
                    rotateZ: [6, 0],
                    duration: 1200,
                    delay: anime.stagger(38),
                });
            }
            tl.add(
                {
                    targets: ".hero-badge",
                    opacity: [0, 1],
                    translateY: [-14, 0],
                    duration: 700,
                },
                allChars.length ? "-=1000" : 0
            );
            tl.add(
                {
                    targets: ".hero-sub",
                    opacity: [0, 1],
                    translateY: [20, 0],
                    duration: 800,
                },
                "-=650"
            );
            tl.add(
                {
                    targets: ".hero-cta .btn",
                    opacity: [0, 1],
                    translateY: [24, 0],
                    scale: [0.92, 1],
                    duration: 800,
                    delay: anime.stagger(120),
                },
                "-=600"
            );
            tl.add(
                {
                    targets: ".hero-visual",
                    opacity: [0, 1],
                    translateY: [40, 0],
                    duration: 1000,
                },
                "-=600"
            );
            tl.add(
                {
                    targets: ".scroll-cue",
                    opacity: [0, 1],
                    duration: 700,
                },
                "-=400"
            );
        }

        /* ---------- Typed.js tagline (home only) ---------- */
        if (window.Typed && document.querySelector("#typer")) {
            new Typed("#typer", {
                strings: [
                    "to make an easy to use Linux distribution.",
                    "to create a beginner friendly Linux distro.",
                    "to build a distro advanced users still love.",
                    "to stay free, forever.",
                ],
                typeSpeed: 60,
                backSpeed: 20,
                backDelay: 1600,
                loop: true,
            });
        }

        /* ---------- Scroll-triggered slow reveals ---------- */
        if (!window.anime || reduceMotion || !("IntersectionObserver" in window)) {
            // Fallback: just make everything visible.
            document.querySelectorAll("[data-reveal]").forEach(function (el) {
                el.style.opacity = 1;
            });
        } else {
            var groups = document.querySelectorAll("[data-reveal-group]");
            var singles = document.querySelectorAll(
                "[data-reveal]:not([data-reveal-group] [data-reveal])"
            );

            var io = new IntersectionObserver(
                function (entries, observer) {
                    entries.forEach(function (entry) {
                        if (!entry.isIntersecting) return;
                        var el = entry.target;
                        observer.unobserve(el);

                        if (el.hasAttribute("data-reveal-group")) {
                            var kids = el.querySelectorAll("[data-reveal]");
                            var base = parseInt(el.getAttribute("data-reveal-delay") || "0", 10);
                            anime({
                                targets: kids,
                                opacity: [0, 1],
                                translateY: [44, 0],
                                duration: 1100,
                                easing: "easeOutExpo",
                                delay: anime.stagger(150, { start: base }),
                            });
                        } else {
                            var d = parseInt(el.getAttribute("data-reveal-delay") || "0", 10);
                            anime(revealParams(el, d));
                        }
                    });
                },
                { threshold: 0.16, rootMargin: "0px 0px -8% 0px" }
            );

            groups.forEach(function (g) {
                io.observe(g);
            });
            singles.forEach(function (s) {
                io.observe(s);
            });
        }

        /* ---------- Nav: condense + glass on scroll ---------- */
        var nav = document.querySelector(".site-nav");
        if (nav) {
            var onScroll = function () {
                if (window.scrollY > 30) nav.classList.add("scrolled");
                else nav.classList.remove("scrolled");
            };
            onScroll();
            window.addEventListener("scroll", onScroll, { passive: true });
        }

        /* ---------- Feature cards: cursor-follow glow ---------- */
        document.querySelectorAll(".feature-card").forEach(function (card) {
            card.addEventListener("mousemove", function (e) {
                var r = card.getBoundingClientRect();
                card.style.setProperty("--mx", e.clientX - r.left + "px");
            });
        });
    }

    if (document.readyState === "loading") {
        document.addEventListener("DOMContentLoaded", onReady);
    } else {
        onReady();
    }
})();
