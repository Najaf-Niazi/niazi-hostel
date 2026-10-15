document.addEventListener("DOMContentLoaded", function () {

    /* =========================================
       PAGE LOADER
    ========================================= */

    const loader = document.getElementById("pageLoader");
    const percent = document.getElementById("loaderPercent");

    if (loader && percent) {
        let progress = 0;

        const timer = setInterval(function () {
            progress++;
            percent.textContent = progress + "%";

            if (progress >= 100) {
                clearInterval(timer);

                setTimeout(function () {
                    loader.classList.add("hide");
                }, 300);

                setTimeout(function () {
                    loader.style.display = "none";
                }, 900);
            }
        }, 20);
    }


    /* =========================================
       NAVBAR
    ========================================= */

    const menuBtn = document.getElementById("menuBtn");
    const navLinks = document.getElementById("navLinks");

    if (menuBtn && navLinks) {

        menuBtn.addEventListener("click", function () {
            navLinks.classList.toggle("show");

            if (navLinks.classList.contains("show")) {
                menuBtn.innerHTML = '<i class="fa-solid fa-xmark"></i>';
            } else {
                menuBtn.innerHTML = '<i class="fa-solid fa-bars"></i>';
            }
        });


        const navItems = document.querySelectorAll(".nav-links a");

        navItems.forEach(function (item) {

            item.addEventListener("click", function () {
                navLinks.classList.remove("show");

                menuBtn.innerHTML =
                    '<i class="fa-solid fa-bars"></i>';
            });

        });


        window.addEventListener("resize", function () {

            if (window.innerWidth > 1100) {
                navLinks.classList.remove("show");

                menuBtn.innerHTML =
                    '<i class="fa-solid fa-bars"></i>';
            }

        });

    }


    /* =========================================
       CONTACT FORM
    ========================================= */

    const contactForm = document.querySelector(".contact-form");

    if (contactForm) {

        contactForm.addEventListener("submit", function (event) {

            event.preventDefault();

            const name = document.getElementById("name");
            const phone = document.getElementById("phone");
            const subject = document.getElementById("subject");
            const message = document.getElementById("message");

            if (
                !name ||
                !phone ||
                !subject ||
                !message
            ) {
                return;
            }

            if (
                !name.value.trim() ||
                !phone.value.trim() ||
                !subject.value.trim() ||
                !message.value.trim()
            ) {
                alert("Please fill all required fields.");
                return;
            }

            alert("Your message has been submitted successfully.");

            contactForm.reset();

        });

    }


    /* =========================================
       ADMISSION FORM
    ========================================= */

    const admissionForm =
        document.getElementById("admissionForm");

    const successSection =
        document.getElementById("applicationSuccess");

    const applicationIdElement =
        document.getElementById("applicationId");

    


    function getFieldValue(id) {

        const field = document.getElementById(id);

        if (!field) {
            return "";
        }

        return field.value.trim();
    }


   


    function getApplicationData() {

        return {

            studentName: getFieldValue("studentName"),

            fatherName: getFieldValue("fatherName"),

            cnic: getFieldValue("cnic"),

            dob: getFieldValue("dob"),

            gender: getFieldValue("gender"),

            occupation: getFieldValue("occupation"),

            phone: getFieldValue("phone"),

            email: getFieldValue("email"),

            address: getFieldValue("address"),

            guardianPhone:
                getFieldValue("guardianPhone"),

            relation:
                getFieldValue("relation"),

            roomType:
                getFieldValue("roomType"),

            roomNumber:
                getFieldValue("roomNumber"),

            joiningDate:
                getFieldValue("joiningDate"),

            institute:
                getFieldValue("institute"),

            designation:
                getFieldValue("designation"),

            notes:
                getFieldValue("notes")

        };

    }



    /* =========================================
       FORM SUBMIT
    ========================================= */



    /* =========================================
       PRINT APPLICATION
    ========================================= */

    const printBtn =
        document.getElementById(
            "printApplication"
        );


    if (printBtn) {

        printBtn.addEventListener(
            "click",
            function () {

                const data =
                    getApplicationData();


                const printWindow =
                    window.open("", "_blank");


                if (!printWindow) {

                    alert(
                        "Please allow popups to print the application."
                    );

                    return;
                }


                printWindow.document.write(`
                    <!DOCTYPE html>

                    <html>

                    <head>

                        <title>
                            Niazi Hostel Admission
                        </title>

                        <style>

                            body {
                                font-family: Arial, sans-serif;
                                padding: 40px;
                                color: #0f1f33;
                            }

                            .application {
                                max-width: 800px;
                                margin: auto;
                            }

                            h1 {
                                margin-bottom: 5px;
                            }

                            .subtitle {
                                color: #777;
                                margin-bottom: 30px;
                            }

                            .application-id {
                                padding: 15px;
                                background: #f4f6f8;
                                margin-bottom: 30px;
                                border-radius: 8px;
                            }

                            table {
                                width: 100%;
                                border-collapse: collapse;
                            }

                            td {
                                padding: 11px;
                                border-bottom: 1px solid #ddd;
                            }

                            td:first-child {
                                width: 35%;
                                font-weight: bold;
                            }

                        </style>

                    </head>

                    <body>

                        <div class="application">

                            <h1>Niazi Hostel</h1>

                            <p class="subtitle">
                                Admission Application
                            </p>

                            <div class="application-id">

                                <strong>
                                    Application ID:
                                </strong>

                                ${submittedApplicationId}

                            </div>

                            <table>

                                <tr>
                                    <td>Full Name</td>
                                    <td>${data.studentName}</td>
                                </tr>

                                <tr>
                                    <td>Father / Guardian</td>
                                    <td>${data.fatherName}</td>
                                </tr>

                                <tr>
                                    <td>CNIC / B-Form</td>
                                    <td>${data.cnic}</td>
                                </tr>

                                <tr>
                                    <td>Date of Birth</td>
                                    <td>${data.dob}</td>
                                </tr>

                                <tr>
                                    <td>Gender</td>
                                    <td>${data.gender}</td>
                                </tr>

                                <tr>
                                    <td>Student / Job Holder</td>
                                    <td>${data.occupation}</td>
                                </tr>

                                <tr>
                                    <td>Phone</td>
                                    <td>${data.phone}</td>
                                </tr>

                                <tr>
                                    <td>Email</td>
                                    <td>${data.email}</td>
                                </tr>

                                <tr>
                                    <td>Address</td>
                                    <td>${data.address}</td>
                                </tr>

                                <tr>
                                    <td>Guardian Phone</td>
                                    <td>${data.guardianPhone}</td>
                                </tr>

                                <tr>
                                    <td>Relationship</td>
                                    <td>${data.relation}</td>
                                </tr>

                                <tr>
                                    <td>Room Type</td>
                                    <td>${data.roomType}</td>
                                </tr>

                                <tr>
                                    <td>Room Number</td>
                                    <td>Room ${data.roomNumber}</td>
                                </tr>

                                <tr>
                                    <td>Joining Date</td>
                                    <td>${data.joiningDate}</td>
                                </tr>

                                <tr>
                                    <td>Institute / Company</td>
                                    <td>${data.institute}</td>
                                </tr>

                                <tr>
                                    <td>Course / Designation</td>
                                    <td>${data.designation}</td>
                                </tr>

                                <tr>
                                    <td>Notes</td>
                                    <td>${data.notes}</td>
                                </tr>

                            </table>

                        </div>

                    </body>

                    </html>
                `);


                printWindow.document.close();

                printWindow.focus();


                setTimeout(function () {

                    printWindow.print();

                }, 300);

            }
        );

    }


    /* =========================================
       DOWNLOAD PDF
    ========================================= */

    const downloadPdfBtn =
        document.getElementById(
            "downloadApplicationPdf"
        );


    if (downloadPdfBtn) {

        downloadPdfBtn.addEventListener(
            "click",
            function () {

                if (
                    !window.jspdf ||
                    !window.jspdf.jsPDF
                ) {

                    alert(
                        "PDF library is not loaded."
                    );

                    return;
                }


                const { jsPDF } =
                    window.jspdf;


                const pdf =
                    new jsPDF();


                const data =
                    getApplicationData();


                const applicationId =
                    applicationIdElement
                        ? applicationIdElement.textContent.trim()
                        : submittedApplicationId || "NH-000000";


                pdf.setFontSize(22);

                pdf.text(
                    "Niazi Hostel",
                    20,
                    20
                );


                pdf.setFontSize(14);

                pdf.text(
                    "Admission Application",
                    20,
                    32
                );


                pdf.setFontSize(11);


                pdf.text(
                    "Application ID: " +
                    applicationId,
                    20,
                    45
                );


                pdf.text(
                    "Full Name: " +
                    data.studentName,
                    20,
                    60
                );


                pdf.text(
                    "Father / Guardian: " +
                    data.fatherName,
                    20,
                    70
                );


                pdf.text(
                    "CNIC / B-Form: " +
                    data.cnic,
                    20,
                    80
                );


                pdf.text(
                    "Phone: " +
                    data.phone,
                    20,
                    90
                );


                pdf.text(
                    "Room Type: " +
                    data.roomType,
                    20,
                    100
                );


                pdf.text(
                    "Room Number: " +
                    data.roomNumber,
                    20,
                    110
                );


                pdf.text(
                    "Joining Date: " +
                    data.joiningDate,
                    20,
                    120
                );


                pdf.save(
                    applicationId +
                    "-Niazi-Hostel.pdf"
                );

            }
        );

    }


    /* =========================================
       SHARE APPLICATION
    ========================================= */

    const shareBtn =
        document.getElementById(
            "shareApplication"
        );


    if (shareBtn) {

        shareBtn.addEventListener(
            "click",
            async function () {

                const data =
                    getApplicationData();


                const shareText =
                    "Niazi Hostel Admission Application\n\n" +

                    "Application ID: " +
                    submittedApplicationId +
                    "\n" +

                    "Applicant: " +
                    data.studentName +
                    "\n" +

                    "Room Type: " +
                    data.roomType +
                    "\n" +

                    "Room Number: " +
                    data.roomNumber +
                    "\n" +

                    "Joining Date: " +
                    data.joiningDate;


                if (navigator.share) {

                    try {

                        await navigator.share({

                            title:
                                "Niazi Hostel Admission",

                            text:
                                shareText

                        });

                    } catch (error) {

                        console.log(
                            "Share cancelled"
                        );

                    }

                } else {

                    try {

                        await navigator.clipboard.writeText(
                            shareText
                        );

                        alert(
                            "Application details copied."
                        );

                    } catch (error) {

                        alert(
                            "Unable to share application."
                        );

                    }

                }

            }
        );

    }

});
document.addEventListener("DOMContentLoaded", function () {

    const roomNumber = document.getElementById("roomNumber");
    const roomType = document.getElementById("roomType");

    if (!roomNumber || !roomType) {
        return;
    }

    function setRoomType() {

        const selectedOption =
            roomNumber.options[roomNumber.selectedIndex];

        if (selectedOption && selectedOption.value) {

            roomType.value =
                selectedOption.getAttribute("data-room-type") || "";

        } else {

            roomType.value = "";

        }
    }

    roomNumber.addEventListener("change", setRoomType);

    setRoomType();
});
function closeValidationToast() {
    const toast = document.getElementById("validationToast");

    if (toast) {
        toast.classList.add("hide");

        setTimeout(function () {
            toast.remove();
        }, 400);
    }
}


document.addEventListener("DOMContentLoaded", function () {

    const toast = document.getElementById("validationToast");

    if (toast) {

        setTimeout(function () {
            closeValidationToast();
        }, 4000);

    }

});
function closeValidationToast() {
    const toast = document.getElementById("validationToast");

    if (toast) {
        toast.classList.add("hide");

        setTimeout(function () {
            toast.remove();
        }, 400);
    }
}


document.addEventListener("DOMContentLoaded", function () {

    const toast = document.getElementById("validationToast");

    if (toast) {

        setTimeout(function () {
            closeValidationToast();
        }, 4000);

    }

});
document.addEventListener("DOMContentLoaded", function () {

    const dobInput = document.getElementById("dob");

    if (dobInput) {

        const today = new Date();

        const year = today.getFullYear();
        const month = String(today.getMonth() + 1).padStart(2, "0");
        const day = String(today.getDate()).padStart(2, "0");

        dobInput.max = `${year}-${month}-${day}`;
    }

});
/* =========================================
   DAY / NIGHT MODE
========================================= */

const themeToggle = document.getElementById("themeToggle");

const savedTheme = localStorage.getItem("niazi-theme");


/* =========================================
   LOAD SAVED THEME
========================================= */

if (savedTheme === "dark") {

    document.body.classList.add("dark-mode");

} else {

    document.body.classList.remove("dark-mode");

}


/* =========================================
   TOGGLE THEME
========================================= */

if (themeToggle) {

    themeToggle.addEventListener("click", function () {

        document.body.classList.toggle("dark-mode");


        if (document.body.classList.contains("dark-mode")) {

            localStorage.setItem(
                "niazi-theme",
                "dark"
            );

        } else {

            localStorage.setItem(
                "niazi-theme",
                "light"
            );

        }

    });

}
/* =========================================
   HOME FACILITIES SCROLL ANIMATION
========================================= */

document.addEventListener("DOMContentLoaded", function () {

    const facilityCards =
        document.querySelectorAll(".home-facility-card");

    if (!facilityCards.length) {
        return;
    }


    if ("IntersectionObserver" in window) {

        const facilityObserver =
            new IntersectionObserver(
                function (entries, observer) {

                    entries.forEach(function (entry) {

                        if (entry.isIntersecting) {

                            entry.target.classList.add(
                                "facility-visible"
                            );

                            observer.unobserve(
                                entry.target
                            );
                        }

                    });

                },
                {
                    threshold: 0.12
                }
            );


        facilityCards.forEach(function (card) {

            facilityObserver.observe(card);

        });

    } else {

        /* Browser fallback */

        facilityCards.forEach(function (card) {

            card.classList.add(
                "facility-visible"
            );

        });

    }

});
/* =========================================
   HOME REVIEWS SLIDER
========================================= */

document.addEventListener("DOMContentLoaded", function () {

    const reviewsTrack =
        document.getElementById("reviewsTrack");

    const reviewPrev =
        document.getElementById("reviewPrev");

    const reviewNext =
        document.getElementById("reviewNext");

    const reviewDots =
        document.getElementById("reviewDots");

    const reviewsSlider =
        document.querySelector(".reviews-slider");

    const reviewCards =
        document.querySelectorAll(".review-card");


    if (
        !reviewsTrack ||
        !reviewPrev ||
        !reviewNext ||
        !reviewDots ||
        reviewCards.length === 0
    ) {
        return;
    }


    let currentReview = 0;

    let autoPlayTimer = null;

    const autoPlayDelay = 4500;

    let touchStartX = 0;

    let touchEndX = 0;



    /*
    |--------------------------------------------------------------------------
    | CREATE DOTS
    |--------------------------------------------------------------------------
    */

    reviewCards.forEach(function (_, index) {

        const dot =
            document.createElement("button");

        dot.type = "button";

        dot.className =
            "review-dot";

        dot.setAttribute(
            "aria-label",
            "Go to review " + (index + 1)
        );


        if (index === 0) {
            dot.classList.add("active");
        }


        dot.addEventListener(
            "click",
            function () {

                currentReview = index;

                updateReviewSlider();

                restartAutoPlay();

            }
        );


        reviewDots.appendChild(dot);

    });



    /*
    |--------------------------------------------------------------------------
    | UPDATE SLIDER
    |--------------------------------------------------------------------------
    */

    function updateReviewSlider() {

        reviewsTrack.style.transform =
            "translateX(-" +
            (currentReview * 100) +
            "%)";


        const dots =
            reviewDots.querySelectorAll(
                ".review-dot"
            );


        dots.forEach(
            function (dot, index) {

                dot.classList.toggle(
                    "active",
                    index === currentReview
                );

            }
        );

    }



    /*
    |--------------------------------------------------------------------------
    | NEXT REVIEW
    |--------------------------------------------------------------------------
    */

    function nextReview() {

        currentReview++;

        if (
            currentReview >=
            reviewCards.length
        ) {
            currentReview = 0;
        }

        updateReviewSlider();

    }



    /*
    |--------------------------------------------------------------------------
    | PREVIOUS REVIEW
    |--------------------------------------------------------------------------
    */

    function previousReview() {

        currentReview--;

        if (currentReview < 0) {
            currentReview =
                reviewCards.length - 1;
        }

        updateReviewSlider();

    }



    /*
    |--------------------------------------------------------------------------
    | NEXT BUTTON
    |--------------------------------------------------------------------------
    */

    reviewNext.addEventListener(
        "click",
        function () {

            nextReview();

            restartAutoPlay();

        }
    );



    /*
    |--------------------------------------------------------------------------
    | PREVIOUS BUTTON
    |--------------------------------------------------------------------------
    */

    reviewPrev.addEventListener(
        "click",
        function () {

            previousReview();

            restartAutoPlay();

        }
    );



    /*
    |--------------------------------------------------------------------------
    | AUTOPLAY
    |--------------------------------------------------------------------------
    */

    function startAutoPlay() {

        stopAutoPlay();

        autoPlayTimer =
            setInterval(
                function () {

                    nextReview();

                },
                autoPlayDelay
            );

    }



    function stopAutoPlay() {

        if (autoPlayTimer) {

            clearInterval(
                autoPlayTimer
            );

            autoPlayTimer = null;

        }

    }



    function restartAutoPlay() {

        stopAutoPlay();

        startAutoPlay();

    }



    /*
    |--------------------------------------------------------------------------
    | PAUSE ON HOVER
    |--------------------------------------------------------------------------
    */

    if (reviewsSlider) {

        reviewsSlider.addEventListener(
            "mouseenter",
            function () {

                stopAutoPlay();

            }
        );


        reviewsSlider.addEventListener(
            "mouseleave",
            function () {

                startAutoPlay();

            }
        );

    }



    /*
    |--------------------------------------------------------------------------
    | TOUCH / SWIPE
    |--------------------------------------------------------------------------
    */

    reviewsTrack.addEventListener(
        "touchstart",
        function (event) {

            touchStartX =
                event.changedTouches[0]
                    .screenX;

        },
        {
            passive: true
        }
    );


    reviewsTrack.addEventListener(
        "touchend",
        function (event) {

            touchEndX =
                event.changedTouches[0]
                    .screenX;

            handleSwipe();

        },
        {
            passive: true
        }
    );


    function handleSwipe() {

        const swipeDistance =
            touchStartX - touchEndX;


        if (
            Math.abs(swipeDistance) < 50
        ) {
            return;
        }


        if (swipeDistance > 0) {

            nextReview();

        } else {

            previousReview();

        }


        restartAutoPlay();

    }



    /*
    |--------------------------------------------------------------------------
    | KEYBOARD SUPPORT
    |--------------------------------------------------------------------------
    */

    document.addEventListener(
        "keydown",
        function (event) {

            if (!reviewsSlider) {
                return;
            }


            const rect =
                reviewsSlider
                    .getBoundingClientRect();


            const visible =
                rect.top <
                window.innerHeight &&
                rect.bottom > 0;


            if (!visible) {
                return;
            }


            if (
                event.key ===
                "ArrowRight"
            ) {

                nextReview();

                restartAutoPlay();

            }


            if (
                event.key ===
                "ArrowLeft"
            ) {

                previousReview();

                restartAutoPlay();

            }

        }
    );



    /*
    |--------------------------------------------------------------------------
    | TAB VISIBILITY
    |--------------------------------------------------------------------------
    */

    document.addEventListener(
        "visibilitychange",
        function () {

            if (
                document.hidden
            ) {

                stopAutoPlay();

            } else {

                startAutoPlay();

            }

        }
    );



    /*
    |--------------------------------------------------------------------------
    | INITIALIZE
    |--------------------------------------------------------------------------
    */

    updateReviewSlider();

    startAutoPlay();

});
/* =========================================
   RESPONSIVE MOBILE NAVBAR
========================================= */

const menuBtn =
    document.getElementById("menuBtn");

const navLinks =
    document.getElementById("navLinks");


if (menuBtn && navLinks) {

    menuBtn.addEventListener(
        "click",
        function () {

            navLinks.classList.toggle(
                "show-menu"
            );

            menuBtn.classList.toggle(
                "active"
            );


            const isOpen =
                navLinks.classList.contains(
                    "show-menu"
                );


            menuBtn.setAttribute(
                "aria-expanded",
                isOpen
            );

        }
    );


    /* CLOSE AFTER LINK CLICK */

    navLinks
        .querySelectorAll("a")
        .forEach(function (link) {

            link.addEventListener(
                "click",
                function () {

                    navLinks.classList.remove(
                        "show-menu"
                    );

                    menuBtn.classList.remove(
                        "active"
                    );

                    menuBtn.setAttribute(
                        "aria-expanded",
                        "false"
                    );

                }
            );

        });


    /* CLOSE WHEN SCREEN RETURNS DESKTOP */

    window.addEventListener(
        "resize",
        function () {

            if (window.innerWidth > 768) {

                navLinks.classList.remove(
                    "show-menu"
                );

                menuBtn.classList.remove(
                    "active"
                );

                menuBtn.setAttribute(
                    "aria-expanded",
                    "false"
                );

            }

        }
    );

}