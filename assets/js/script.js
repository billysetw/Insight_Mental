// // Toggle
// const button = document.querySelector("#kt_page_loading_overlay");

// // Handle toggle click event
// button.addEventListener("click", function() {
//     // Populate the page loading element dynamically.
//     // Optionally you can skipt this part and place the HTML
//     // code in the body element by refer to the above HTML code tab.
//     const loadingEl = document.createElement("div");
//     document.body.prepend(loadingEl);
//     loadingEl.classList.add("page-loader");
//     loadingEl.classList.add("flex-column");
//     loadingEl.classList.add("bg-dark");
//     loadingEl.classList.add("bg-opacity-25");
//     loadingEl.innerHTML = `
//         <span class="spinner-border text-primary" role="status"></span>
//         <span class="text-gray-800 fs-6 fw-semibold mt-5">Loading...</span>
//     `;

//     // Show page loading
//     KTApp.showPageLoading();

//     // Hide after 3 seconds
//     setTimeout(function() {
//         KTApp.hidePageLoading();
//         loadingEl.remove();
//     }, 3000);
// });