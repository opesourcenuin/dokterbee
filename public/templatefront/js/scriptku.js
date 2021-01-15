const tabs = document.querySelectorAll('.tab');

tabs.forEach(clickedTab => {
    // add onclick event
    clickedTab.addEventListener('click', () => {
        // remove the active class from all tabs
        tabs.forEach(tab => {
            tab.classList.remove('active');

        });

        clickedTab.classList.add('active');
        const clickedTabBGColor = getComputedStyle(clickedTab).getPropertyValue('color');
        console.log(clickedTabBGColor);
        document.body.style.background = clickedTabBGColor;
    })
});