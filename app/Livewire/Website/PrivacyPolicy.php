<?php

namespace App\Livewire\Website;

use App\Models\SubscriptionSetting;
use Livewire\Component;

class PrivacyPolicy extends Component
{
    public function render()
    {


        // 1: dependencies
        $settings = SubscriptionSetting::first();






        // 1.2: general
        $generalPolicies = [
            'This website is owned and managed by HealthyBite Healthy',
            'Minors under the age of 18 shall are prohibited to register as a User of this website.',

            "We understand that your privacy and the security of your personal information is extremely important. This notice sets out what we do with your personal information, what we do to keep it secure, from where and how we collect it, as well as your rights in relation to the personal information we hold about you.",

            "This policy applies if you interact with us through our restaurants, over the phone, online, through our mobile applications or otherwise by using our website or interacting with us on social media (our “Services”)",

            "If you make a payment for our products or services on our website, the details you are asked to submit will be provided directly to our payment provider via a secured connection",

            "The cardholder must retain a copy of transaction records and Merchant policies and rules",

            "We accept payments online using Visa and MasterCard credit/debit card in AED (or any other agreed currencies)",

            "All credit/debit cards details and personally identifiable information will NOT be stored, sold, shared, rented or leased to any third parties. The Website Policies and Terms & Conditions may be changed or updated occasionally to meet the requirements and standards. Therefore the Customers’ are encouraged to frequently visit these sections in order to be updated about the changes on the website. Modifications will be effective on the day they are posted.",


            "Some of the advertisements you see on the Site are selected and delivered by third parties, such as ad networks, advertising agencies, advertisers, and audience segment providers. These third parties may collect information about you and your online activities, either on the Site or on other websites, through cookies, web beacons, and other technologies in an effort to understand your interests and deliver to you advertisements that are tailored to your interests.",

            "Please remember that we do not have access to, or control over, the information these third parties may collect. The information practices of these third parties are not covered by this privacy policy.",


        ];








        // 1.4: information
        $informationPolicies = [
            "Information that you provide to us such as your name, address, date of birth, telephone number, email address, bank account and payment card details and any feedback you give to us, including by phone, email, post, or when you communicate with us via social media",

            "Information about the services that we provide to you (including for example, the things we have provided to you, when and where, what you paid, the way you use our products and so on)",

            "Your account login details including your user name and chosen password",

            "Information about whether or not you want to receive marketing communications from us",

            "Your contact details and details of the emails and other electronic communications you receive from us, including whether that communication has been opened and if you have clicked on any links within that communication. We want to make sure that our communications are useful for you so if you don’t open them or don’t click on any links in them, we know we need to improve our products and services.",
        ];








        // 1.4: legalPolicies
        $legalPolicies = [
            "Whenever we process your personal information we have to have something called a 'legal basis' for what we do. The different legal bases we rely on are",

            "Consent: You have told us you are happy for us to process your personal information for a specific purpose",

            "Legitimate interests: The processing is necessary for us to conduct our business but not where our interests are overridden by your interests or rights.",

            "Performance of a contract: We must process your personal information in order to be able to provide you with one of our products or services;",

            "Prevention of fraud: Where we are required to process your data in order to protect us and our customers from fraud or money laundering",


            "Vital interests: The processing of your personal information is necessary to protect you or someone else’s life",


            "Public information: Where we process personal information which you have already made public;",


            "Legal claims: The processing of your personal information is necessary for the establishment, exercise or defense of legal claims or whenever courts are acting in their judicial capacity; We are also required to process your personal information by law.",
        ];














        // 1.4: personalPolicies
        $personalPolicies = [

            "To provide our products and services - we need to use your personal information to make our products and services available to you. If you then decide to order any of our products or services then we’re delighted, thank you. After that, we need to provide them to you and process your payment. And we need to use your details to do all this.",

            "To personalise your shopping experience - we try to understand our customers so we can provide you with a great shopping experience, relevant marketing, personalised offers, shopping ideas and online advertising. Understanding how you use our App, how you interact with Kcal World Group, where you dine, the products and services you buy and how you use and browse our website helps us to do this.",

            "For safety and security - we use your personal information to help provide safe and secure environments for our colleagues to work in, our customers to shop in and for our businesses to be conducted. To enable this we monitor online behaviour and carry out checks to help us ensure that our customers are genuine to prevent fraud and to help customers use our services appropriately.",

            "Analytics and profiling - we use your personal information for statistical analysis and to help us understand more about our customers. That includes understanding the products and services you buy, the manner in which you consume them, and by creating profiles about you. This helps us to serve you better and to find ways to improve our services, restaurants, app and website. These profiles help us to send you offers that are more relevant to you.",

            "Contacting you - we use your personal information to contact you: either to conduct market research or to contact you about products and services from us and other companies. We may also contact you in relation to any questions you have raised with us or to discuss the status of your account with us.",

        ];






        // 1.5: cookiesPolicies
        $cookiesPolicies = [

            "We use cookies to help give you the best experience on our website and to allow us and third parties to tailor ads you see on ours and other websites",

            "We use cookies to analyze site traffic, and personalize content. Cookies help us remember your preferences and improve site functionality and experience.",

        ];







        // 1.5: sharingPolicies
        $sharingPolicies = [

            "We will share your personal information in certain circumstances with the other companies within the HealthyBite Group so that we can provide you with a high quality, personalised and tailored service",

            "Our service providers - we work with partners, suppliers, aggregators and agencies so that they can help us provide the products and services you require from us. These third parties process your personal information on our behalf and are required to meet our high standards of security before doing so. We only share information that allows them to provide their services to us or to facilitate them providing their services to you. These third parties include",



            "If we are required to by law, under any code of practice by which we are bound or where we are asked to do so by a public or regulatory authority such as the police",


            "If we need to do so in order to exercise or protect our legal rights, users, systems and services; or in response to requests from individuals (or their representatives) seeking to protect their rights or the rights of others. We will only share your personal information in response to requests which do not override your privacy interests. For example, we will not share your personal information with individuals who are merely curious about you, but we will share your personal information to e.g. insurers, solicitors, employers etc. which have a legitimate interest in your personal information.",
        ];








        // 1.6: productPolicies
        $productPolicies = [

            "We would like to tell you about the great offers, ideas, products and services of the Kcal World Group from time to time that we think you might be interested in. Where we have your consent or it is in our legitimate interests to do so, we may do this through the post, by email, text message or by any other electronic means.",

            "We won’t send you marketing messages if you tell us not to, but if you receive a service from us we will still need to send you occasional service-related messages. If you wish to amend your marketing preferences, you can do so by logging into Kcal account of one of our brands and following the directions. You can also give us a call",


            "Please note that it can take up a little while for all marketing to stop once you either withdraw your consent or tell us you’d like to opt out of marketing. This is because some marketing may already be in transit.",


        ];






        // 1.7: rightsPolicies
        $rightsPolicies = [

            "Any dispute or claim arising out of or in connection with this website shall be governed and construed in accordance with the laws of UAE.",

            "You have a number of rights under data protection legislation which, in certain circumstances, you may be able to exercise in relation to the personal information we process about you (the right to access a copy of the personal information we hold about you, to correction of inaccurate personal information we hold about you,  to restrict our use of your personal information, to be forgotten, the right of data portability and to object to our use of your personal information)",


            "Where we rely on consent as the legal basis on which we process your personal information, you may also withdraw that consent at any time.",

            "If you are seeking to exercise any of these rights, please contact us using the details in the 'Contact Us' section below. Please note that we will need to verify your identity before we can fulfil any of your rights under data protection law. This helps us to protect the personal information belonging to our customer against fraudulent requests.",


        ];







        // 1.8: refundPolicies
        $refundPolicies = [

            "Refunds will be done only through the Original Mode of Payment.",

        ];







        // 1.9: profilePolicies
        $profilePolicies = [

            "We use automated decision making, including profiling, in certain circumstances, such as when it is in our legitimate interests to do so, or where we have a right to do so because it is necessary for us to enter into, and perform, a contract with you. We use profiling to enable us to give you the best service across the Kcal World Group, including specific marketing which we believe you will be interested in.",


            "You have the right not to be subject to a decision based solely on automated processing, including profiling, which has legal effects for you or affects you in any other significant way.",

            "If you are seeking to exercise this right, please contact us using the details in the “Contact Us” section",

        ];








        // 2: keepingPolicies
        $keepingPolicies = [

            "We will keep your personal information for the purposes set out in this privacy policy and in accordance with the law and relevant regulations. We will never retain your personal information for longer than is necessary. In most cases, our retention period will come to an end 7 years after the end of your relationship with us. However, in some instances we are required to hold your personal information for up to 12 years following the end of your relationship with us.",

        ];







        // 2.1: securityPolicies
        $securityPolicies = [

            "We limit physical access to our buildings and user access to our systems to only those that we believe are entitled to be there",

            "We use technology controls for our information systems, such as firewalls and user verification",

            "We utilize industry 'good practice' standards to support the maintenance of a robust information security management system; and enforce a 'need to know' policy, for access to any data or systems",

        ];







        // 2.2: deliveryPolicies
        $deliveryPolicies = [

            "HealthyBite will NOT deal or provide any services or products to any of OFAC (Office of Foreign Assets Control) sanctions countries in accordance with the law of UAE. Multiple transactions may result in multiple postings to the cardholder’s monthly statement.",


        ];






        return view('livewire.website.privacy-policy', compact('settings', 'generalPolicies', 'informationPolicies', 'legalPolicies', 'personalPolicies', 'cookiesPolicies', 'sharingPolicies', 'productPolicies', 'rightsPolicies', 'refundPolicies', 'profilePolicies', 'keepingPolicies', 'securityPolicies', 'deliveryPolicies'));



    } // end function





} // end class
