document.addEventListener('DOMContentLoaded', function() {
    const reviewForm = document.getElementById('reviewForm');
    const reviewList = document.querySelector('.review-list');

    reviewForm.addEventListener('submit', function(e) {
        e.preventDefault();

        const name = document.getElementById('nama').value;
        const reviewText = document.getElementById('ulasan').value;
        const rating = document.getElementById('peringkat').value;

        const reviewElement = document.createElement('div');
        reviewElement.classList.add('ulasan');

        reviewElement.innerHTML = `
            <h4>${name} - <span class="ulasan">${'★'.repeat(ulasan)}</span></h4>
            <p>${reviewText}</p>
        `;

        reviewList.appendChild(reviewElement);

        reviewForm.reset();
    });
});
