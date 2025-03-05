@extends('frontend.layouts.main')

@section('title', 'Terms and Conditions')
@section('css')
  <style>
        .terms-container {
            background-color: var(--white-color);
            border-radius: var(--border-radius);
            box-shadow: var(--box-shadow);
            padding: 2.5rem;
            margin: 3rem auto;
            transition: var(--transition);
        }
        
        .terms-header {
            border-bottom: 2px solid var(--primary-light);
            margin-bottom: 2rem;
            padding-bottom: 1rem;
        }
        
        .terms-title {
            color: var(--primary-color);
            font-weight: 700;
            text-align: center;
        }
        
        .last-updated {
            color: var(--gray-color);
            font-size: 0.9rem;
            text-align: center;
            margin-bottom: 1.5rem;
        }
        
        .section-title {
            color: var(--secondary-color);
            font-weight: 600;
            margin-top: 2rem;
            margin-bottom: 1rem;
            padding-bottom: 0.5rem;
            border-bottom: 1px solid var(--gray-light);
        }
        
        .terms-content p {
            margin-bottom: 1.2rem;
            line-height: 1.7;
        }
        
        .terms-content ul {
            margin-bottom: 1.5rem;
        }
        
        .terms-content li {
            margin-bottom: 0.8rem;
        }
        
        .highlight {
            background-color: rgba(26, 188, 156, 0.1);
            padding: 1.5rem;
            border-radius: var(--border-radius-sm);
            border-left: 4px solid var(--primary-color);
            margin: 1.5rem 0;
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
        
        .table-of-contents {
            background-color: var(--light-color);
            padding: 1.5rem;
            border-radius: var(--border-radius-sm);
            margin-bottom: 2rem;
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
        
        @media (max-width: 768px) {
            .terms-container {
                padding: 1.5rem;
                margin: 1.5rem auto;
            }
        }
  </style>
@endsection
@section('content')
<div class="container">
    <div class="terms-container">
        <div class="terms-header">
            <h1 class="terms-title">TERMS OF USE</h1>
            <p class="last-updated">Last updated - November 2024</p>
        </div>
        
        <div class="terms-content">
            <p>These Terms of Use are current as of the date shown above. We update our Terms of Use from time to time; therefore, we advise the users, as defined below, to check any changes since the last time you used the services offered through the Site (as hereinafter the "Service" and the "Site").</p>
            
            <p>Please note that the Site acts as a platform provider only offered by BeautyHub Ltd, with registered office in Anytown, Parkway, 4532 Agora Terracotta, Nicosia, Cyprus, Registration Number: 123456 (hereinafter the "Company" or "we", "us").</p>
            
            <div class="table-of-contents">
                <h4>Table of Contents</h4>
                <ul>
                    <li><a href="#user-types">User Types</a></li>
                    <li><a href="#privacy-policy">Privacy Policy</a></li>
                    <li><a href="#acceptable-use">Acceptable Use Policy</a></li>
                    <li><a href="#offeror-obligations">Offeror Obligations</a></li>
                    <li><a href="#recipient-obligations">Recipient Obligations</a></li>
                    <li><a href="#liability">Limitation of Liability</a></li>
                    <li><a href="#paid-services">Paid Services</a></li>
                    <li><a href="#age-verification">Age Verification</a></li>
                    <li><a href="#guidelines">Guidelines</a></li>
                </ul>
            </div>
            
            <h3 class="section-title" id="user-types">User Types</h3>
            <p>Users of the Site (collectively, "Users") comprise Offeror Users and Recipient Users, as defined below:</p>
            
            <p><strong>Offeror Users</strong> create content (listings) on the Site and are entitled to advertise their beautician services and create profiles in accordance with the Paid Services terms below ("Paid Services").</p>
            
            <p><strong>Recipient Users</strong> have access to content placed by Offeror Users and are given the opportunity to contact Offeror Users to book beauty services through the platform.</p>
            
            <p>Users are advised that continuing to browse the Site signifies their consent to the Terms of Use current at the time when visiting the Site and that they do not wish to be bound by the Terms of Use, they should immediately cease to use the Service.</p>
            
            <h3 class="section-title" id="privacy-policy">Privacy Policy</h3>
            <p>Our use of your personal data is governed by our <a href="#">Privacy Policy</a> which also sets out our use of cookies and similar technology. We only gather the minimum personal data which is necessary for us to provide the Service in accordance with these Terms of Use, to comply with legal obligations on us, and to fulfill our legitimate interests with respect to the provision of the Service. We will not share your personal data with third parties except as set out in our Privacy Policy or as required by law to protect our Users.</p>
            
            <div class="highlight">
                <p><strong>If you wish to become an Offeror User, you will not be allowed to create a profile or to place an advertisement unless you confirm you accept, at the time of placing that advertisement or creating that profile, these Terms of Use including the Acceptable Use Policy and the Guidelines set out below.</strong></p>
            </div>
            
            <p>Please note that this Site is aimed strictly at adults (over 18) and by using the Site you are warranting that you are over 18 and that, in the case of Offeror Users, that you are not offering any services which would contravene the laws of the country in which you are based.</p>
            
            <h3 class="section-title" id="acceptable-use">Acceptable Use Policy</h3>
            <p>We do not exercise editorial control or pre-vet advertisements placed with us or User profiles created on the site, although we will take down advertisements or profiles which:</p>
            
            <ul>
                <li>contravene these Terms of Use; or</li>
                <li>contain any malware or other material which risks interfering with or degrading the proper performance of the site; or</li>
                <li>we consider in our absolute discretion to be prejudicial to the proper performance of the Service; or</li>
                <li>we consider are or may be in breach of any applicable criminal laws or regulations; or</li>
                <li>constitute or may constitute harassment or bullying of any other User or other third party; or</li>
                <li>are threatening, abusive or discriminatory; or</li>
                <li>we are required to take down by any applicable law or order from a competent government agency or court; or</li>
                <li>in our sole discretion, have caused or are reasonably likely to cause damages to the Company, or otherwise damage its reputation.</li>
            </ul>
            
            <p>We have set up two dedicated email addresses <a href="mailto:privacy@beautyh.in">privacy@beautyh.in</a> and <a href="mailto:abuse@beautyh.in">abuse@beautyh.in</a> to which permits Users to report to us advertisements which they consider contravene these Terms of Use or are otherwise illegal. We will review all advertisements which are reported to us and may take down the advertisement if we consider it appropriate (although we are not obliged to do so unless the advertisement is clearly illegal or otherwise illegal). We will review all advertisements which are reported to us and may either uphold the complaint and remove the advertisement, require the Offeror User who placed the advertisement to provide additional material or explanation to justify the advertisement, or reject the complaint.</p>
            
            <p>The sections marked "Acceptable Use Policy" and "Guidelines" set out in more detail material which is considered to contravene these Terms of Use although it is for Users, in each case, to determine for themselves the lawfulness of any material contributed by them to the Site and such material's compliance with the Terms of Use.</p>
            
            <p>We reserve the right to ban Users for serious or repeated breaches of these Terms of Use. In respect of any take down of any advertisement or banning of any User we will not, in any circumstances, be responsible for any losses, claims, damages or expenses whatsoever arising out of such take down or ban whether in respect of any monies paid to us or otherwise.</p>
            
            <p>By uploading an advertisement on the Site, the Offeror User authorizes us to process his/her personal data (including special categories of personal data) for the purpose of publishing said advertisement.</p>
            
            <h3 class="section-title" id="offeror-obligations">Obligations and Behaviour of the User</h3>
            <p>The Service is an adult service and by using the Service, Users represent and warrant that they are 18 or over. Any misrepresentation by any User under 18 that they are 18 or over, or any circumvention of any age verification measures put in place by us will be a breach of these Terms of Use.</p>
            
            <p>As stated above, we do not exercise editorial control and we do not review or pre-vet any of the advertisements on the website placed by Offeror Users. The Site is not an employer or agent of any Users and is not in any manner responsible for any risks, claims or liabilities arising out of any transaction or service arrangement entered into between any Offeror User(s) and any Recipient User(s).</p>
            
            <p>By using the Service, Users assume the full and exclusive responsibility for their behaviour towards the Site and towards third parties including but not limited to other Users.</p>
            
            <p>We do not recommend for and do not guarantee the veracity of the contents of any advertisements placed by Offeror Users, or the successful outcome of any negotiations between any Offeror User(s) and any Recipient User(s).</p>
            
            <h3 class="section-title" id="liability">Limitation of Liability</h3>
            <p>Nothing in these Terms of Use seeks to limit or exclude any liability of any party for death or personal injury caused by that party's negligence or any party for whom they are responsible, to the extent that such liability cannot by law not be excluded or limited by law.</p>
            
            <p>The Company or their affiliates, managers, employees, officers or directors do not accept any liability for:</p>
            
            <ul>
                <li>any loss or damage to the extent it arises from circumstances outside their control;</li>
                <li>any loss or damage caused by any interruption in or non-availability of the Site or the Service;</li>
                <li>any direct or indirect loss of profits, business, reputation, anticipated savings or turnover;</li>
                <li>any indirect, punitive, statutory or otherwise non-refundable damage on the basis of the applicable law;</li>
                <li>even if it has been advised of the possibility of such damages.</li>
            </ul>
            
            <p>The Company or their affiliates, managers, employees, officers or directors' liability to all Users for any other losses and damages, whether arising in contract, tort, breach of legal obligation or otherwise shall, without prejudice to the Refunds Policy set out below:</p>
            
            <ul>
                <li>in the case of Paid Services, be capped at an amount equivalent to the sum of the sums paid by any User in the twelve months immediately prior to the event giving rise to the claim or Euro 500;</li>
                <li>and in the case of any other Services, be capped at Euro 100.</li>
            </ul>
            
            <p>Each of the above mentioned caps or limitations are separate and independent provisions and a finding of nullity or invalidity in respect of one provision or sub-provision shall not affect the validity of any other provision which validity shall be force to the maximum extent permitted by law.</p>
            
            <h3 class="section-title" id="paid-services">Paid Services: Offeror Users</h3>
            <p>Offeror Users are made aware that we take payment for the Paid Service through our payment service provider, whose terms and conditions govern transactions between Offeror Users. We are not responsible for the acts, omissions or defaults of the payment provider. In the event of breach of these terms, we reserve the right to take down the advertisement and to ban the Offeror User from the Site and to refuse to accept payment from that Offeror User for placing any future advertisements.</p>
            
            <p>If our payment provider receives a request from a financial institution or a platform to refund any financial amount spent on purchases of Paid Services, we reserve the right to block the Offeror User's Profile upon the receipt of such request until we are informed by the payment provider that the issue has been resolved to the satisfaction of the payment provider.</p>
            
            <p>Please note that the Company does not interfere in the negotiation between the Users.</p>
            
            <h3 class="section-title" id="age-verification">Age Verification</h3>
            <p>Offeror Users agree that the Company may subject the publication of advertisements to verification of the minimum age requirements, either in an automated form, through an external service provider, or through manual verification, in the event that automatic verification is not possible. In particular, for this purpose, the Company may ask the Offeror User to provide his/her identity document and we shall follow our Privacy Policy in respect of such document. The Company has appointed Yoti Ltd, whose registered office is at 6th Floor, 107 Leadenhall St, EC3A 4AF (United Kingdom), as a data processor, to acquire information about the identity of the Offeror User from the provided ID and to verify that the selfie submitted by the Offeror User corresponds to the person shown in the ID. The Company will not store any personal data other than the verification result and the Offeror User's account information relating to their age and identity.</p>
            
            <h3 class="section-title" id="guidelines">Acceptable Use Policy</h3>
            <p>Users undertake not to use the Service provided by the Site either improperly or contrary to the provisions of the regulations, rules, notifications, guidelines, orders, decrees, guidelines (and all future amendments to the aforesaid documents) and all applicable laws and regulations. In particular, Users undertake not to publish content which is racist, obscene, defamatory, harassing, invasive of another's privacy including bodily privacy, insulting or harassing on the basis of gender, racially or ethnically discriminatory, offensive, threatening, vulgar, pornographic, gambling, promoting enmity on grounds of religion or caste, pornographic, paedophile, vulgar, blasphemous or otherwise in any way contrary to the applicable laws and regulations and/or the principles of the Service.</p>
            
            <p>In particular, Users must not advertise any services which it would be unlawful to perform in the relevant jurisdiction and they must not include any material which infringes applicable criminal law.</p>
            
            <p>Offeror Users warrant that they are the data subjects of or that they have the explicit and informed consent of all persons whose personal data is included in any advertisement placed by them and that they are not infringing any copyright or other intellectual property rights of any third person without having the permission of that third person.</p>
            
            <p>Placing advertisements purporting to be from someone or imitating the data of another person without their consent, those advertisements being placed is a serious breach of these Terms of Use and may lead to accounts being closed and Offeror Users responsible banned from the Site.</p>
            
            <p>Offeror Users are aware that by including an email address in advertisements hosted by the Site, we have no control over any materials which may be sent directly to that email address, whether by other Users of the Site, or by other persons who have accessed the Site.</p>
            
            <h3 class="section-title">Guidelines</h3>
            <p>Offeror Users have had specific attention drawn to the following Guidelines. For the avoidance of doubt, we offer this summary as a convenience and should not be taken to constitute legal advice as to when material is lawful to include in advertisements and profiles.</p>
            
            <ul>
                <li>All content must be professional and appropriate for a beauty parlor business</li>
                <li>No misleading claims about services, qualifications, or results</li>
                <li>No offensive, discriminatory, or inappropriate language</li>
                <li>Accurate representation of services, prices, and availability</li>
                <li>No use of copyrighted materials without permission</li>
                <li>No impersonation of other businesses or service providers</li>
                <li>Clear disclosure of cancellation policies and service terms</li>
                <li>Respect for client privacy and confidentiality</li>
            </ul>
        </div>
    </div>
</div>

<div class="back-to-top">
    <i class="fas fa-arrow-up"></i>
</div>
@endsection