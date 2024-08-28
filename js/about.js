// modal.js

document.addEventListener('DOMContentLoaded', () => {
    // Get all team member elements
    const teamMembers = document.querySelectorAll('.team-member');

    // Attach click event listeners to each team member
    teamMembers.forEach(member => {
        member.addEventListener('click', () => {
            const memberId = member.getAttribute('data-member');
            openModal(memberId);
        });
    });

    // Get all close buttons
    const closeButtons = document.querySelectorAll('.close');

    // Attach click event listeners to each close button
    closeButtons.forEach(button => {
        button.addEventListener('click', () => {
            closeModal();
        });
    });

    // Function to open a modal
    function openModal(memberId) {
        const modal = document.getElementById(`${memberId}-modal`);
        if (modal) {
            modal.style.display = 'block';
        }
    }

    // Function to close the modal
    function closeModal() {
        const modals = document.querySelectorAll('.modal');
        modals.forEach(modal => {
            modal.style.display = 'none';
        });
    }

    // Close modals when clicking outside of them
    window.addEventListener('click', (event) => {
        if (event.target.classList.contains('modal')) {
            closeModal();
        }
    });
});
