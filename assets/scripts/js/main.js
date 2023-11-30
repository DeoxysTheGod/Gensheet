"use strict";
// Tooltip
var tooltips = document.querySelectorAll(".tooltip");
tooltips && tooltips.forEach(function (tooltip) {
    tooltip.style.marginLeft = "-".concat(tooltip.offsetWidth / 2, "px");
});
