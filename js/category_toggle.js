document.querySelectorAll('.category-toggle').forEach((toggle) => {
    toggle.addEventListener('click', function (event) {
        event.preventDefault();
        const parentLi = this.closest('li');
        const subcategory = parentLi.querySelector('.subcategory');

        // Якщо підкатегорія відкрита, згорнути її
        if (parentLi.classList.contains('open')) {
            subcategory.style.maxHeight = 0;
            parentLi.classList.remove('open');
        }
        // Якщо підкатегорія закрита, розгорнути її
        else {
            subcategory.style.maxHeight = subcategory.scrollHeight + "px";
            parentLi.classList.add('open');
        }
    });
});
