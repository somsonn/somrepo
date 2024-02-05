const from = document.querySelector("#from");
const to = document.querySelector("#to");
const elements = document.getElementsByClassName("u-div-show");

document.addEventListener('click', (event)=>{
        if (!(event.target.id === "from" || event.target.id === "to" || event.target.id === "calanderui" || event.target.classList.contains("day1") || event.target.classList.contains("datepicker-calendar--header__dates") || event.target.classList.contains("day-unit") ||event.target.classList.contains("pick-year-select")  || event.target.classList.contains("pick-month-select") )) {
    if (elements.length > 0) {
        elements[0].classList.remove("u-div-show");
    }

        }

})



from.addEventListener("focus", (event) => {
     if (elements.length > 0) {
         elements[0].classList.remove("u-div-show");
     }
    addHTML("from");
});

to.addEventListener("focus", (event) => {
    if (elements.length > 0) {
        elements[0].classList.remove("u-div-show");
    }
    addHTML("to");
});


const addHTML = (elmts) => {
    const inputElement = document.getElementById(elmts);

    const html = `
<div id="calanderui" class="datepicker  u-div-show text-sm tracking-tighter font-light" id="datepicker-${elmts}">
            <div class="datepicker-calendar">
                <div class="datepicker-calendar--header">
                    <div class="datepicker-calendar--header__dates">
                        <button class="month-change go-to-previous-month"></button>
                            <span class="datepicker-calendar--header__dates year-and-month">
                                <span class="pick-year">
                                    <select class="pick-year-select ${elmts}-year-select">
                                        <option selected class"years" value="2015">2015</option>
                                        <option class"years" value="2016">2016</option>
                                        <option class"years" value="2017">2017</option>
                                        <option class"years" value="2018">2018</option>
                                    </select>
                                </span>
                                <span class="pick-month">
                                    <select class="pick-month-select ${elmts}-month-select">
                                        <option selected value="0">መስከረም</option>
                                        <option value="1">ጥቅምት</option>
                                        <option value="2">ኅዳር</option>
                                        <option value="3">ታኅሳስ</option>
                                        <option value="4">ጥር</option>
                                        <option value="5">የካቲት</option>
                                        <option value="6">መጋቢት</option>
                                        <option value="7">ሚያዝያ</option>
                                        <option value="8">ግንቦት</option>
                                        <option value="9">ሰኔ</option>
                                        <option value="10">ሐምሌ</option>
                                        <option value="11">ነሐሴ</option>
                                        <option value="12">ጷጉሜን</option>
                                    </select>
                                </span>
                            </span>
                        <button class="month-change go-to-next-month">></button>
                    </div>
                    <div class="datepicker-calendar--header__days-row">
                        <div class="day-unit">ሰኞ</div>
                        <div class="day-unit">ማክሰኞ</div>
                        <div class="day-unit">ረቡዕ</div>
                        <div class="day-unit">ሀሙስ</div>
                        <div class="day-unit">አርብ</div>
                        <div class="day-unit">ቅዳሜ</div>
                        <div class="day-unit">እሁድ</div>
                    </div>
                </div>
                <div class="datepicker-calendar--body datepicker-calendar-${elmts}-body">
                     
                </div>
            </div>
        </div>
        `;

    inputElement.parentElement.insertAdjacentHTML("beforeend", html);

    const datepickerDiv = document.getElementById(`datepicker-${elmts}`);
    clanderbodyrender();


             



    const pickYearSelect = document.querySelector(`.${elmts}-year-select`);
    const pickMonthSelect = document.querySelector(`.${elmts}-month-select`);

    pickYearSelect.addEventListener("change", () => {
        clanderbodyrender();
    });

    pickMonthSelect.addEventListener("change", () => {
        clanderbodyrender();
    });

    function clanderbodyrender() {
        var selectedyearelement = document.querySelector(`.${elmts}-year-select`);
        var getselectedyearvalue = selectedyearelement.value;

        console.log(getselectedyearvalue);

        var selectedmonthelement = document.querySelector(`.${elmts}-month-select`);
        var getselectedmonthvalue = selectedmonthelement.value;

        let startdate = 0;
        var monthlength = 30;
        if (parseInt(getselectedmonthvalue) === 12) {
            monthlength = 5;

            if (parseInt(getselectedyearvalue) === 2016) {
                monthlength = 6;
            }
        }

        let selectedyearvalue;

        if (getselectedyearvalue) {
            selectedyearvalue = parseInt(getselectedyearvalue);

            changeyear(
                selectedyearvalue,
                startdate,
                getselectedmonthvalue,
                monthlength
            );
        } else {
            selectedyearvalue = parseInt(getselectedyearvalue);

            changeyear(
                selectedyearvalue,
                startdate,
                getselectedmonthvalue,
                monthlength
            );
        }
    }

    function adddate(startdate, monthlength) {
        
        startdate = startdate - 1;
        var calendarBody = document.querySelector(`.datepicker-calendar-${elmts}-body`);
        calendarBody.innerHTML = "";

        calendarBody.addEventListener("click", (event) => {
            if (event.target.classList.contains("day1")) {
                const selectedyearelement =
                    document.querySelector(`.${elmts}-year-select`);
                const eventselectedmonthelement =
                    document.querySelector(`.${elmts}-month-select`);

                const startandend = document.getElementById(elmts);

                const selectedmonth =
                    parseInt(eventselectedmonthelement.value) + 1;
                let differentdate = document.querySelector(".date_difference");

                const selectedyear = selectedyearelement.value;
                const selectedday = event.target.textContent;

                if (elmts === "from") {
                    startandend.value =
                        selectedday + "/" + selectedmonth + "/" + selectedyear;
                }

                if (elmts === "to") {
                    startandend.value =
                        selectedday + "/" + selectedmonth + "/" + selectedyear;
                }
            }
        });

        dategenerator(startdate, monthlength);
        
    }



    function dategenerator(startdate, monthlength) {
        var calendarBody = document.querySelector(`.datepicker-calendar-${elmts}-body`);

        
        var totalDays = 42;

        var currentRow;
        for (var i = 0; i < totalDays; i++) {
            if (i % 7 === 0) {
                currentRow = document.createElement("div");
                currentRow.className = "datepicker-calendar--body__days-row";
                calendarBody.appendChild(currentRow);
            }

            if (i < startdate) {
                var day = document.createElement("div");
                day.id = "day" + i;
                day.className = "day-units  datings";

                var link = document.createElement("a");
                link.href = "#";
                link.className = "day1";

                link.textContent = "";

                day.appendChild(link);
                currentRow.appendChild(day);
            } else {
                var day = document.createElement("div");
                day.id = "day" + i;
                day.className = "day-units  datings";

                var link = document.createElement("a");

                link.className = "day1";

                link.textContent = (i + 1 - startdate).toString();

                if (link.textContent > monthlength) {
                    link.textContent = "";
                }

                day.appendChild(link);
                currentRow.appendChild(day);
            }
            
        }
    }

    function changeyear(
        selectedyearvalue,
        startdate,
        getselectedmonthvalue,
        monthlength,
        selectedmonth
    ) {
        if (selectedmonth) {
            getselectedmonthvalue = selectedmonth;
        }

        if (selectedyearvalue === 2015) {
            const yearmeskeremstartday = 7;
            startdate = getselectedmonthvalue * 2 + yearmeskeremstartday;
            yeardatechange(startdate, monthlength);
        }
        if (selectedyearvalue === 2016) {
            const yearmeskeremstartday = 2;
            startdate = getselectedmonthvalue * 2 + yearmeskeremstartday;
            yeardatechange(startdate, monthlength);
        }
        if (selectedyearvalue === 2017) {
            const yearmeskeremstartday = 3;
            startdate = getselectedmonthvalue * 2 + yearmeskeremstartday;
            yeardatechange(startdate, monthlength);
        }
    }

    function yeardatechange(startdate, monthlength) {
        if (startdate > 28) {
            startdate = startdate - 28;
            adddate(startdate, monthlength);
        }

        if (startdate > 21) {
            startdate = startdate - 21;
            adddate(startdate, monthlength);
        } else if (startdate > 14) {
            startdate = startdate - 14;
            adddate(startdate, monthlength);
        } else if (startdate > 7) {
            startdate = startdate - 7;
            adddate(startdate, monthlength);
        } else {
            startdate = startdate;
            adddate(startdate, monthlength);
        }
    }
};


