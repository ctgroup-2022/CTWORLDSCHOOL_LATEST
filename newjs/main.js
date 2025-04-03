document.querySelectorAll('.faq-question').forEach(item => {
    item.addEventListener('click', () => {
        const parent = item.parentElement;
        const isActive = parent.classList.contains('active');
        
        document.querySelectorAll('.faq-item').forEach(faqItem => {
            faqItem.classList.remove('active');
            faqItem.querySelector('.faq-sign').textContent = '+';
        });

        if (!isActive) {
            parent.classList.add('active');
            item.querySelector('.faq-sign').textContent = '-';
        } else {
            item.querySelector('.faq-sign').textContent = '+';
        }
    });
});

