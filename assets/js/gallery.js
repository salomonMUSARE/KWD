class PortfolioGallery {
    constructor() {
        this.modal = null;
        this.currentIndex = 0;
        this.images = [];
        this.init();
    }

    init() {
        // Create modal structure
        this.createModal();
        
        // Add click handlers to portfolio items
        document.querySelectorAll('.portfolio-item').forEach(item => {
            item.addEventListener('click', (e) => {
                e.preventDefault();
                const projectName = item.querySelector('h3').textContent.toLowerCase().replace(/\s+/g, '-');
                this.openGallery(projectName);
            });
        });
    }

    createModal() {
        this.modal = document.createElement('div');
        this.modal.className = 'portfolio-modal';
        this.modal.innerHTML = `
            <div class="modal-content">
                <span class="close-modal">&times;</span>
                <button class="nav-btn prev-btn">&lt;</button>
                <button class="nav-btn next-btn">&gt;</button>
                <div class="modal-image-container">
                    <img src="" alt="Portfolio Image">
                </div>
            </div>
        `;

        document.body.appendChild(this.modal);

        // Add event listeners
        this.modal.querySelector('.close-modal').addEventListener('click', () => this.closeGallery());
        this.modal.querySelector('.prev-btn').addEventListener('click', () => this.navigate(-1));
        this.modal.querySelector('.next-btn').addEventListener('click', () => this.navigate(1));

        // Close on click outside
        this.modal.addEventListener('click', (e) => {
            if (e.target === this.modal) this.closeGallery();
        });

        // Keyboard navigation
        document.addEventListener('keydown', (e) => {
            if (!this.modal.classList.contains('active')) return;
            if (e.key === 'Escape') this.closeGallery();
            if (e.key === 'ArrowLeft') this.navigate(-1);
            if (e.key === 'ArrowRight') this.navigate(1);
        });
    }

    async openGallery(projectName) {
        try {
            const response = await fetch(`get_portfolio_images.php?project=${projectName}`);
            this.images = await response.json();
            
            if (this.images.length === 0) {
                console.error('No images found for project:', projectName);
                return;
            }

            this.currentIndex = 0;
            this.updateImage();
            this.modal.classList.add('active');
            document.body.style.overflow = 'hidden';
        } catch (error) {
            console.error('Error loading gallery:', error);
        }
    }

    closeGallery() {
        this.modal.classList.remove('active');
        document.body.style.overflow = '';
    }

    navigate(direction) {
        this.currentIndex = (this.currentIndex + direction + this.images.length) % this.images.length;
        this.updateImage();
    }

    updateImage() {
        const img = this.modal.querySelector('img');
        img.src = this.images[this.currentIndex];
        img.alt = `Portfolio Image ${this.currentIndex + 1}`;
    }
}

// Initialize gallery when DOM is loaded
document.addEventListener('DOMContentLoaded', () => {
    new PortfolioGallery();
}); 