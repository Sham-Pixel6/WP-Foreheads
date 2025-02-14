// document.addEventListener("DOMContentLoaded", function () {
//     const maxLines = 3; // Maximum visible lines

//     document.querySelectorAll(".text-content").forEach((textContent) => {
//         const originalHeight = textContent.scrollHeight; // Get full height of the content
//         textContent.style.webkitLineClamp = maxLines; // Apply line clamp
//         const clampedHeight = textContent.offsetHeight; // Height after clamping

//         // Add "Read More/Less" button dynamically if content overflows
//         if (originalHeight > clampedHeight) {
//             const btn = document.createElement("span");
//             btn.className = "read-more-btn";
//             btn.textContent = "Read more";

//             btn.addEventListener("click", function () {
//                 if (textContent.classList.contains("expanded")) {
//                     textContent.classList.remove("expanded");
//                     textContent.style.webkitLineClamp = maxLines;
//                     btn.textContent = "Read more";
//                 } else {
//                     textContent.classList.add("expanded");
//                     textContent.style.webkitLineClamp = "unset";
//                     btn.textContent = "Read less";
//                 }
//             });

//             textContent.parentElement.appendChild(btn);
//         }
//     });
// });