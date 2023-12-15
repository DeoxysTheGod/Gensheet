// Tooltip
const tooltips = document.querySelectorAll(".tooltip") as NodeListOf<HTMLDivElement>;

tooltips && tooltips.forEach(function (tooltip: HTMLDivElement) {
    tooltip.style.marginLeft = `-${tooltip.offsetWidth / 2}px`;
});