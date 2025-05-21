# KigaliTech Website

A modern, responsive website for KigaliTech built with PHP, HTML, CSS, and JavaScript.

## Features

- Responsive design that works on all devices
- Modern and clean user interface
- Contact form with email functionality
- Smooth scrolling and animations
- Mobile-friendly navigation
- SEO optimized
- Security best practices implemented

## Requirements

- PHP 7.4 or higher
- Web server (Apache/Nginx)
- SMTP server for email functionality
- Modern web browser

## Installation

1. Clone the repository:
```bash
git clone https://github.com/yourusername/kigalitech.git
```

2. Configure your web server to point to the project directory

3. Update the configuration in `config.php`:
   - Set your email address
   - Update contact information
   - Configure database settings if needed

4. Set proper permissions:
```bash
chmod 755 -R /path/to/kigalitech
chmod 777 -R /path/to/kigalitech/assets/uploads
```

5. Configure your SMTP settings in PHP (php.ini) for the contact form to work:
```ini
[mail function]
SMTP = localhost
smtp_port = 25
sendmail_from = your@email.com
```

## Directory Structure

```
kigalitech/
├── assets/
│   ├── css/
│   │   └── style.css
│   ├── js/
│   │   └── main.js
│   └── images/
├── includes/
│   ├── header.php
│   ├── footer.php
│   └── process_contact.php
├── config.php
├── index.php
└── README.md
```

## Usage

1. The main page is `index.php`
2. Contact form submissions are processed in `includes/process_contact.php`
3. All configuration settings are in `config.php`
4. Styles are in `assets/css/style.css`
5. JavaScript functionality is in `assets/js/main.js`

## Customization

- Update the content in `index.php`
- Modify styles in `assets/css/style.css`
- Add or modify JavaScript functionality in `assets/js/main.js`
- Update contact information in `config.php`

## Security

The website implements several security measures:
- Input sanitization
- XSS protection
- CSRF protection
- Secure session handling
- Content Security Policy
- Secure headers

## Contributing

1. Fork the repository
2. Create your feature branch
3. Commit your changes
4. Push to the branch
5. Create a new Pull Request

## License

This project is licensed under the MIT License - see the LICENSE file for details.

## Contact

For any questions or support, please contact:
- Email: salmonmusare@gmail.com
- Phone: +250 782 768 846
- Address: Kigali Heights, KG 7 Ave, Kigali 