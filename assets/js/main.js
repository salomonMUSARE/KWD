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

    if (contactForm) {
        contactForm.addEventListener('submit', async function(e) {
            e.preventDefault();
            
            // Basic form validation
            const name = this.querySelector('input[name="name"]').value.trim();
            const email = this.querySelector('input[name="email"]').value.trim();
            const phone = this.querySelector('input[name="phone"]').value.trim();
            const message = this.querySelector('textarea[name="message"]').value.trim();
            
            if (!name || !email || !phone || !message) {
                alert('Please fill in all fields');
                return;
            }
            
            if (!isValidEmail(email)) {
                alert('Please enter a valid email address');
                return;
            }

            try {
                const formData = new FormData(this);
                const response = await fetch(this.action, {
                    method: 'POST',
                    body: formData
                });

                const result = await response.json();

                if (result.success) {
                    // Show success message
                    formSuccess.classList.add('active');
                    formSuccessOverlay.classList.add('active');
                    
                    // Reset form
                    this.reset();
                    
                    // Hide success message after 5 seconds
                    setTimeout(() => {
                        formSuccess.classList.remove('active');
                        formSuccessOverlay.classList.remove('active');
                    }, 5000);
                } else {
                    alert(result.error || 'An error occurred. Please try again.');
                }
            } catch (error) {
                console.error('Error:', error);
                alert('An error occurred. Please try again.');
            }
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
}); 