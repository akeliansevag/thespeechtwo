if (document.getElementById("calendar")) {
    const monthNames = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
    const daysInMonth = [31, 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31];

    // Add an array for event dates
    const eventDates = ["2025-01-21"]; // Example event dates in YYYY-MM-DD format

    let currentDate = new Date();
    let currentMonth = currentDate.getMonth();
    let currentYear = currentDate.getFullYear();
    let currentDay = currentDate.getDate(); // Get the current day
    let selectedMonth = currentMonth;
    let selectedYear = currentYear;

    function generateCalendar(month, year) {
        const firstDay = new Date(year, month, 1).getDay();
        const daysInCurrentMonth = (month === 1 && ((year % 4 === 0 && year % 100 !== 0) || (year % 400 === 0))) ? 29 : daysInMonth[month];

        const calendarBody = document.getElementById("calendar-body");
        if (calendarBody.classList.contains("months-grid")) {
            calendarBody.classList.remove("months-grid");
        }

        if (calendarBody.classList.contains("years-grid")) {
            calendarBody.classList.remove("years-grid");
        }

        calendarBody.innerHTML = "";

        // Show the days of the week header
        document.querySelector(".days-header").style.display = "grid";

        // Fill the calendar with empty divs for the first day
        for (let i = 0; i < firstDay; i++) {
            const emptyCell = document.createElement("div");
            calendarBody.appendChild(emptyCell);
        }

        // Create the days of the month
        for (let i = 1; i <= daysInCurrentMonth; i++) {
            const dayCell = document.createElement("div");
            dayCell.classList.add("day");
            dayCell.textContent = i;

            // Highlight the current day in red
            if (i === currentDay && month === currentMonth && year === currentYear) {
                dayCell.classList.add("current-day");
            }

            // Check if the day has an event
            const eventDate = `${year}-${String(month + 1).padStart(2, "0")}-${String(i).padStart(2, "0")}`;
            if (eventDates.includes(eventDate)) {
                dayCell.classList.add("event-day");
            }

            calendarBody.appendChild(dayCell);
        }

        document.getElementById("month-year").textContent = `${monthNames[month]} ${year}`;
    }

    // Display the years when clicking on the month/year label
    document.getElementById("month-year").addEventListener("click", () => {
        const calendarBody = document.getElementById("calendar-body");
        if (calendarBody.classList.contains("months-grid")) {
            calendarBody.classList.remove("months-grid");
        }
        calendarBody.classList.add("years-grid");
        calendarBody.innerHTML = "";

        // Hide the days of the week header
        document.querySelector(".days-header").style.display = "none";

        // Show year boxes (range of years around the current year, 50 years before and after)
        const startYear = currentYear - 20;
        const endYear = currentYear + 5;

        for (let i = startYear; i <= endYear; i++) {
            const yearBox = document.createElement("div");
            yearBox.classList.add("year");
            yearBox.textContent = i;
            yearBox.addEventListener("click", () => showMonths(i));
            calendarBody.appendChild(yearBox);
        }
    });

    // Show the months when a year is clicked
    function showMonths(year) {
        selectedYear = year;
        const calendarBody = document.getElementById("calendar-body");
        if (calendarBody.classList.contains("years-grid")) {
            calendarBody.classList.remove("years-grid");
        }
        calendarBody.classList.add("months-grid");
        calendarBody.innerHTML = "";

        // Hide the days of the week header
        document.querySelector(".days-header").style.display = "none";

        // Show month boxes
        monthNames.forEach((month, index) => {
            const monthBox = document.createElement("div");
            monthBox.classList.add("month");
            monthBox.textContent = month;
            monthBox.addEventListener("click", () => generateCalendar(index, year));
            calendarBody.appendChild(monthBox);
        });
    }

    // Go to Today button functionality
    document.getElementById("go-to-today").addEventListener("click", () => {
        selectedMonth = currentMonth;
        selectedYear = currentYear;
        generateCalendar(selectedMonth, selectedYear);
    });

    // Arrow button functionality for previous and next months
    document.getElementById("prev").addEventListener("click", () => {
        selectedMonth--;
        if (selectedMonth < 0) {
            selectedMonth = 11;
            selectedYear--;
        }
        generateCalendar(selectedMonth, selectedYear);
    });

    document.getElementById("next").addEventListener("click", () => {
        selectedMonth++;
        if (selectedMonth > 11) {
            selectedMonth = 0;
            selectedYear++;
        }
        generateCalendar(selectedMonth, selectedYear);
    });

    // Initial calendar load
    generateCalendar(selectedMonth, selectedYear);
}