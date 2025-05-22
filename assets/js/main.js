document.addEventListener('DOMContentLoaded', function() {
    // Mobile menu toggle
    const mobileMenuToggle = document.querySelector('.mobile-menu-toggle');
    const mainNav = document.querySelector('.main-nav');
    
    if (mobileMenuToggle && mainNav) {
        mobileMenuToggle.addEventListener('click', function() {
            mainNav.style.display = mainNav.style.display === 'block' ? 'none' : 'block';
            this.classList.toggle('active');
        });
    }

    // Smooth scrolling for anchor links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                target.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
                // Close mobile menu if open
                if (mainNav && mainNav.style.display === 'block') {
                    mainNav.style.display = 'none';
                    mobileMenuToggle.classList.remove('active');
                }
            }
        });
    });

    // Header scroll effect
    const header = document.querySelector('.main-header');
    let lastScroll = 0;

    window.addEventListener('scroll', () => {
        const currentScroll = window.pageYOffset;
        
        if (currentScroll <= 0) {
            header.classList.remove('scroll-up');
            return;
        }
        
        if (currentScroll > lastScroll && !header.classList.contains('scroll-down')) {
            // Scroll Down
            header.classList.remove('scroll-up');
            header.classList.add('scroll-down');
        } else if (currentScroll < lastScroll && header.classList.contains('scroll-down')) {
            // Scroll Up
            header.classList.remove('scroll-down');
            header.classList.add('scroll-up');
        }
        lastScroll = currentScroll;
    });

    // Contact form handling
    const contactForm = document.getElementById('contactForm');
    const formSuccess = document.querySelector('.form-success');
    const formSuccessOverlay = document.querySelector('.form-success-overlay');
    const closeBtn = document.querySelector('.form-success .close-btn');

    if (contactForm) {
        contactForm.addEventListener('submit', async function(e) {
            e.preventDefault();

            const submitBtn = this.querySelector('button[type="submit"]');
            const originalBtnText = submitBtn.innerHTML;
            
            try {
                // Disable submit button and show loading state
                submitBtn.disabled = true;
                submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Sending...';

                // Get form data
                const formData = new FormData(this);

                // Send form data
                const response = await fetch(this.action, {
                    method: 'POST',
                    body: formData
                });

                const data = await response.json();

                if (data.success) {
                    // Show success message
                    formSuccess.classList.add('active');
                    formSuccessOverlay.classList.add('active');
                    
                    // Reset form
                    this.reset();
                } else {
                    throw new Error(data.message || 'Something went wrong');
                }
            } catch (error) {
                alert(error.message || 'Failed to send message. Please try again.');
            } finally {
                // Reset submit button
                submitBtn.disabled = false;
                submitBtn.innerHTML = originalBtnText;
            }
        });
    }

    // Close success message
    if (closeBtn) {
        closeBtn.addEventListener('click', function() {
            formSuccess.classList.remove('active');
            formSuccessOverlay.classList.remove('active');
        });
    }

    // Close success message when clicking overlay
    if (formSuccessOverlay) {
        formSuccessOverlay.addEventListener('click', function() {
            formSuccess.classList.remove('active');
            this.classList.remove('active');
        });
    }

    // Contact popup
    const contactPopup = document.querySelector('.contact-popup');
    const contactPopupOverlay = document.querySelector('.contact-popup-overlay');

    // Show popup after 5 seconds
    setTimeout(() => {
        if (contactPopup && contactPopupOverlay) {
            contactPopup.classList.add('active');
            contactPopupOverlay.classList.add('active');
        }
    }, 5000);

    // Close popup when clicking overlay
    if (contactPopupOverlay) {
        contactPopupOverlay.addEventListener('click', () => {
            contactPopup.classList.remove('active');
            contactPopupOverlay.classList.remove('active');
        });
    }

    // Email validation helper
    function isValidEmail(email) {
        const re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
        return re.test(String(email).toLowerCase());
    }

    // Technology slider animation
    const techSlider = document.querySelector('.tech-slider');
    if (techSlider) {
        let scrollAmount = 0;
        const slideWidth = techSlider.scrollWidth / techSlider.children.length;
        
        setInterval(() => {
            scrollAmount += slideWidth;
            if (scrollAmount >= techSlider.scrollWidth) {
                scrollAmount = 0;
            }
            techSlider.scrollTo({
                left: scrollAmount,
                behavior: 'smooth'
            });
        }, 3000);
    }

    // Portfolio Gallery
    const galleryData = {
        'orgin-arts': {
            title: 'Orgin Arts Gallery',
            images: [
                'images/portfolio/orgin-arts/og-image.jpg',
                'images/portfolio/orgin-arts/1.jpg',
                'images/portfolio/orgin-arts/2.jpg',
                'images/portfolio/orgin-arts/3.jpg'
            ]
        },
        'gold-profiter': {
            title: 'Gold Profiter Gallery',
            images: [
                'images/portfolio/gold-profiter/og-image.jpg',
                'images/portfolio/gold-profiter/1.jpg',
                'images/portfolio/gold-profiter/2.jpg',
                'images/portfolio/gold-profiter/3.jpg'
            ]
        },
        'vivid-drive': {
            title: 'Vivid Drive Gallery',
            images: [
                'images/portfolio/vivid-drive/og-image.jpg',
                'images/portfolio/vivid-drive/1.jpg',
                'images/portfolio/vivid-drive/2.jpg',
                'images/portfolio/vivid-drive/3.jpg'
            ]
        }
    };

    let currentGallery = null;
    let currentImageIndex = 0;

    // Open gallery modal
    document.querySelectorAll('.portfolio-item').forEach(item => {
        item.addEventListener('click', function() {
            // Special handling for Kanda Technologies
            if (this.querySelector('h3')?.textContent === 'Kanda Technologies') {
                const modal = document.createElement('div');
                modal.className = 'portfolio-modal active';
                modal.style.background = 'rgba(0, 0, 0, 0.95)';
                modal.innerHTML = `
                    <div class="modal-content" style="max-width: 600px; margin: 50px auto;">
                        <div class="modal-title">Kanda Technologies</div>
                        <div class="close-modal">&times;</div>
                        <div style="text-align: center; padding: 2rem; color: white;">
                            <h3 style="margin-bottom: 1rem;">Check out our insurance technology solutions!</h3>
                            <p style="margin-bottom: 2rem;">Visit our websites to see how we're revolutionizing insurance in Rwanda.</p>
                            <div style="display: flex; gap: 1rem; justify-content: center;">
                                <a href="https://kandaclaim.com/" target="_blank" class="btn btn-primary">Visit Kanda Claim</a>
                                <a href="https://kandatechnologies.com/" target="_blank" class="btn btn-primary">Visit Kanda Tech</a>
                            </div>
                        </div>
                    </div>
                `;
                document.body.appendChild(modal);
                document.body.style.overflow = 'hidden';

                modal.querySelector('.close-modal').addEventListener('click', () => {
                    modal.remove();
                    document.body.style.overflow = '';
                });

                document.addEventListener('keydown', function closeOnEscape(e) {
                    if (e.key === 'Escape') {
                        modal.remove();
                        document.body.style.overflow = '';
                        document.removeEventListener('keydown', closeOnEscape);
                    }
                });
                return;
            }

            // Regular gallery handling for other items
            const galleryId = this.dataset.gallery;
            if (galleryData[galleryId]) {
                currentGallery = galleryId;
                currentImageIndex = 0;
                openGallery(galleryId);
            }
        });
    });

    // Contact section click handlers
    document.querySelectorAll('.contact-info .info-item').forEach(item => {
        item.addEventListener('click', function() {
            const link = this.getAttribute('onclick');
            if (link) {
                // Extract the URL from the onclick attribute
                const url = link.match(/window\.open\('([^']+)'/)[1];
                window.open(url, '_blank');
            }
        });
    });

    // Contact popup buttons
    document.querySelectorAll('.contact-popup-btn').forEach(btn => {
        btn.addEventListener('click', function(e) {
            e.preventDefault();
            const url = this.getAttribute('href');
            window.open(url, '_blank');
        });
    });
}); 