@extends('frontend.layouts.main')

@section('title', 'Privacy Policy')
@section('css')
<style type="text/css">
    body {
    font-family: 'Poppins', sans-serif;
    color: var(--dark-color);
    background-color: #f9f9f9;
    line-height: 1.7;
    }

    .privacy-container {
    max-width: 1200px;
    margin: 3rem auto;
    background-color: var(--white-color);
    border-radius: var(--border-radius);
    box-shadow: var(--box-shadow);
    padding: 2.5rem;
    transition: var(--transition);
    }

    .privacy-header {
    text-align: center;
    margin-bottom: 2.5rem;
    padding-bottom: 1.5rem;
    border-bottom: 2px solid var(--primary-light);
    }

    .privacy-title {
    color: var(--primary-color);
    font-weight: 700;
    margin-bottom: 0.5rem;
    }

    .last-updated {
    color: var(--gray-color);
    font-size: 0.9rem;
    }

    .section-title {
    color: var(--secondary-color);
    font-weight: 600;
    margin-top: 2rem;
    margin-bottom: 1rem;
    padding-bottom: 0.5rem;
    border-bottom: 1px solid var(--gray-light);
    }

    .privacy-content p {
    margin-bottom: 1.2rem;
    color: var(--dark-color);
    }

    .privacy-content ul {
    margin-bottom: 1.5rem;
    padding-left: 1.2rem;
    }

    .privacy-content li {
    margin-bottom: 0.8rem;
    }

    .highlight-box {
    background-color: rgba(26, 188, 156, 0.1);
    border-left: 4px solid var(--primary-color);
    padding: 1.5rem;
    margin: 1.5rem 0;
    border-radius: var(--border-radius-sm);
    }

    .table-of-contents {
    background-color: var(--light-color);
    padding: 1.5rem;
    border-radius: var(--border-radius-sm);
    margin-bottom: 2rem;
    }

    .table-of-contents h4 {
    color: var(--primary-color);
    margin-bottom: 1rem;
    }

    .table-of-contents ul {
    list-style-type: none;
    padding-left: 0;
    }

    .table-of-contents li {
    margin-bottom: 0.5rem;
    }

    .table-of-contents a {
    color: var(--secondary-dark);
    text-decoration: none;
    transition: var(--transition);
    }

    .table-of-contents a:hover {
    color: var(--primary-color);
    text-decoration: underline;
    }

    .back-to-top {
    position: fixed;
    bottom: 2rem;
    right: 2rem;
    background-color: var(--primary-color);
    color: var(--white-color);
    width: 45px;
    height: 45px;
    border-radius: 50%;
    display: flex;
    justify-content: center;
    align-items: center;
    cursor: pointer;
    opacity: 0;
    transition: var(--transition);
    box-shadow: var(--box-shadow);
    }

    .back-to-top:hover {
    background-color: var(--primary-dark);
    box-shadow: var(--box-shadow-hover);
    }

    .back-to-top.visible {
    opacity: 1;
    }

    .cookie-info {
    border: 1px solid var(--gray-light);
    padding: 1.5rem;
    border-radius: var(--border-radius-sm);
    margin: 1rem 0;
    }

    @media (max-width: 768px) {
    .privacy-container {
    margin: 1.5rem;
    padding: 1.5rem;
    }

    .privacy-title {
    font-size: 1.8rem;
    }

    .section-title {
    font-size: 1.3rem;
    }
    }

    /* Print styles */
    @media print {
    .back-to-top,
    .table-of-contents {
    display: none !important;
    }

    .privacy-container {
    box-shadow: none;
    margin: 0;
    padding: 0;
    }

    .section-title {
    page-break-after: avoid;
    }

    p, li {
    page-break-inside: avoid;
    }
    }
    </style>
@endsection
@section('content')
<div class="privacy-container">
    <div class="privacy-header">
        <h1 class="privacy-title">PRIVACY POLICY</h1>
        <p class="last-updated">Last Updated February 2024</p>
    </div>

    <div class="privacy-content">
        <p>
            At BeautyPro Ltd ("we", "us", "our"), we are committed to protecting your privacy. Any personal 
            information that we collect about you will only be used in ways that are lawful, fair and transparent. 
            This Privacy Policy explains what personal data we collect, why we collect it, how we use it, and your rights.
        </p>

        <div class="table-of-contents">
            <h4>Table of Contents</h4>
            <ul>
                <li><a href="#information-collect">What Information We Collect</a></li>
                <li><a href="#how-we-collect">How We Collect and Use Information</a></li>
                <li><a href="#cookies">Cookies and Similar Technologies</a></li>
                <li><a href="#data-sharing">How We Share Your Information</a></li>
                <li><a href="#security">Security Measures</a></li>
                <li><a href="#your-rights">Your Rights and Choices</a></li>
                <li><a href="#retention">Data Retention</a></li>
                <li><a href="#contact">Contact Us</a></li>
            </ul>
        </div>

        <section id="information-collect">
            <h2 class="section-title">What Information We Collect</h2>
            <p>We collect different types of information when you use our services:</p>
            <ul>
                <li>Contact information (name, email, phone number)</li>
                <li>Appointment details and service preferences</li>
                <li>Payment information (processed securely through our payment providers)</li>
                <li>Communication history regarding your appointments and services</li>
                <li>Feedback and reviews you choose to provide</li>
                <li>Technical information about how you use our website</li>
            </ul>

            <div class="highlight-box">
                <p><strong>Special Categories of Data:</strong> As a beauty service provider, we may collect information about your beauty preferences and any relevant health information you choose to share (such as allergies or skin sensitivities). This information is only collected with your explicit consent and is used solely to provide you with safe and appropriate services.</p>
            </div>
        </section>

        <section id="how-we-collect">
            <h2 class="section-title">How We Collect and Use Information</h2>
            <p>We collect information in the following ways:</p>
            <ul>
                <li>Directly from you when you make appointments or register for our services</li>
                <li>Through our website when you browse or make online bookings</li>
                <li>Via our mobile application when you use our booking features</li>
                <li>Through customer feedback and reviews</li>
                <li>From third-party service providers (such as payment processors)</li>
            </ul>
        </section>

        <section id="cookies">
            <h2 class="section-title">Cookies and Similar Technologies</h2>
            
            <div class="cookie-info">
                <h4>Essential Cookies</h4>
                <p>These cookies are necessary for the website to function and cannot be switched off. They are usually only set in response to actions made by you which amount to a request for services, such as setting your privacy preferences, logging in, or filling in forms.</p>
            </div>

            <div class="cookie-info">
                <h4>Performance Cookies</h4>
                <p>These cookies allow us to count visits and traffic sources so we can measure and improve the performance of our site. They help us to know which pages are the most and least popular and see how visitors move around the site.</p>
            </div>

            <div class="cookie-info">
                <h4>Functional Cookies</h4>
                <p>These cookies enable the website to provide enhanced functionality and personalisation. They may be set by us or by third party providers whose services we have added to our pages.</p>
            </div>
        </section>

        <section id="data-sharing">
            <h2 class="section-title">How We Share Your Information</h2>
            <p>We may share your personal information with:</p>
            <ul>
                <li>Our staff members who need it to provide services to you</li>
                <li>Payment processors to handle your transactions</li>
                <li>Appointment scheduling service providers</li>
                <li>Marketing service providers (with your consent)</li>
                <li>Legal authorities when required by law</li>
            </ul>
        </section>

        <section id="security">
            <h2 class="section-title">Security Measures</h2>
            <p>We implement appropriate security measures to protect your personal information:</p>
            <ul>
                <li>Encryption of sensitive data</li>
                <li>Regular security assessments</li>
                <li>Staff training on data protection</li>
                <li>Secure access controls</li>
                <li>Regular backups and updates</li>
            </ul>
        </section>

        <section id="your-rights">
            <h2 class="section-title">Your Rights and Choices</h2>
            <p>Under applicable data protection laws, you have the right to:</p>
            <ul>
                <li>Access your personal information</li>
                <li>Correct inaccurate information</li>
                <li>Request deletion of your information</li>
                <li>Object to certain processing</li>
                <li>Withdraw consent at any time</li>
                <li>Request data portability</li>
            </ul>
        </section>

        <section id="retention">
            <h2 class="section-title">Data Retention</h2>
            <p>We retain your personal information for as long as necessary to:</p>
            <ul>
                <li>Provide our services to you</li>
                <li>Comply with legal obligations</li>
                <li>Resolve disputes</li>
                <li>Enforce our agreements</li>
            </ul>
        </section>

        <section id="contact">
            <h2 class="section-title">Contact Us</h2>
            <p>If you have any questions about this Privacy Policy or our privacy practices, please contact us at:</p>
            <div class="highlight-box">
                <p>
                    BeautyPro Ltd<br>
                    Email: privacy@beautypro.com<br>
                    Phone: +1 (555) 123-4567<br>
                    Address: 123 Beauty Lane, Suite 100<br>
                    Anytown, ST 12345
                </p>
            </div>
        </section>
    </div>
</div>
@endsection
