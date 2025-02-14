document.querySelectorAll('.view-certificate').forEach(item => {
    item.addEventListener('click', event => {
        event.preventDefault();
        const pdfUrl = item.getAttribute('data-pdf');
        const certificateModal = document.getElementById('certificate-modal');
        const certificatePdf = document.getElementById('certificate-pdf');

        certificatePdf.src = pdfUrl;
        certificateModal.classList.add('show');
    });
});

document.querySelector('.close-btn').addEventListener('click', () => {
    document.getElementById('certificate-modal').classList.remove('show');
});

window.addEventListener('click', event => {
    if (event.target === document.getElementById('certificate-modal')) {
        document.getElementById('certificate-modal').classList.remove('show');
    }
});