@extends('Front.layouts.policy')

@section('title', 'Terms of Service | CMM Solutions Limited')
@section('meta_description', 'Terms of Service governing the use of C.M.M Solutions Limited services, software, and website.')
@section('page_heading', 'Terms of Service')

@section('content')
    <p class="last-updated">Last updated: {{ date('F Y') }}</p>

    <p>These Terms of Service ("Terms") govern your access to and use of the website, software, products, and services provided by <strong>C.M.M Solutions Limited</strong> ("C.M.M Solutions", "we", "us", or "our"), a technology and software development company registered in Ghana. By accessing our website, engaging our services, or making a payment to us, you agree to be bound by these Terms.</p>

    <h2>1. About Us</h2>
    <p>C.M.M Solutions Limited is a Ghanaian technology and software development company established in 2022. We design, develop, implement, and support customized software solutions, including banking and financial management systems, school management systems, welfare management systems, payroll systems, shop management systems, learning and assessment systems, and other IT and digital solutions.</p>

    <h2>2. Services</h2>
    <p>We provide software development, licensing, implementation, technical support, and related consulting services. The specific scope, deliverables, timelines, and fees for any engagement are set out in a separate proposal, quotation, service agreement, or order confirmation agreed between you and C.M.M Solutions. In the event of a conflict, the terms of that specific agreement take precedence over these general Terms.</p>

    <h2>3. Quotations and Orders</h2>
    <p>Prices quoted are valid for the period stated in the quotation. An order is considered confirmed once you accept a quotation in writing and, where applicable, make the agreed payment or deposit. We reserve the right to decline or cancel an order where we are unable to fulfil it, in which case any payment made for the undelivered portion will be refunded.</p>

    <h2>4. Fees and Payment</h2>
    <ul>
        <li>Fees are quoted in Ghana Cedis (GHS) unless otherwise stated.</li>
        <li>Payments may be made through the methods we make available, including online payment via our authorized payment processor (Paystack).</li>
        <li>For project-based work, we may require an upfront deposit before work begins, with the balance due at agreed milestones or on delivery.</li>
        <li>Subscription or support services are billed on the agreed recurring cycle and remain payable until cancelled in accordance with these Terms.</li>
        <li>Late or non-payment may result in suspension of services until outstanding amounts are settled.</li>
    </ul>

    <h2>5. Client Responsibilities</h2>
    <p>To enable us to deliver our services, you agree to provide accurate information, timely feedback, necessary access to systems or data, and any content or materials required for the project. Delays caused by outstanding client input may affect timelines and are not the responsibility of C.M.M Solutions.</p>

    <h2>6. Intellectual Property</h2>
    <p>Unless otherwise agreed in writing, C.M.M Solutions retains ownership of its pre-existing software, frameworks, tools, and know-how. Upon full payment, you receive a licence to use the delivered solution for your internal business purposes as described in the applicable agreement. Any content or data you provide to us remains your property.</p>

    <h2>7. Acceptable Use</h2>
    <p>You agree not to use our website, software, or services for any unlawful purpose, to infringe the rights of others, to distribute malicious code, or to attempt to gain unauthorized access to our systems. We may suspend or terminate access where these Terms are breached.</p>

    <h2>8. Warranties and Support</h2>
    <p>We take reasonable care to deliver solutions that meet the agreed specifications. Where a warranty or support period applies, we will correct defects that are reported within that period and that are attributable to our work. Our services are otherwise provided on an "as is" basis to the extent permitted by law.</p>

    <h2>9. Limitation of Liability</h2>
    <p>To the maximum extent permitted by applicable law, C.M.M Solutions shall not be liable for any indirect, incidental, or consequential losses, including loss of profits, data, or business, arising from the use of our services. Our total liability in connection with any engagement shall not exceed the fees paid by you for that engagement.</p>

    <h2>10. Termination</h2>
    <p>Either party may terminate an engagement in accordance with the applicable service agreement. On termination, you remain liable for fees for work completed up to the termination date. Refunds, where applicable, are handled under our <a href="{{route('front.delivery')}}">Delivery &amp; Refund Policy</a>.</p>

    <h2>11. Governing Law</h2>
    <p>These Terms are governed by the laws of the Republic of Ghana, and any disputes shall be subject to the jurisdiction of the courts of Ghana.</p>

    <h2>12. Changes to These Terms</h2>
    <p>We may update these Terms from time to time. The latest version will always be published on this page with the effective date shown above. Continued use of our services after changes constitutes acceptance of the revised Terms.</p>

    <h2>13. Contact Us</h2>
    <p>If you have any questions about these Terms, please contact us:</p>
    <ul>
        <li><strong>C.M.M Solutions Limited</strong></li>
        <li>Volta Place, Airport Residential Area, Accra, Ghana</li>
        <li>Email: <a href="mailto:cmmsolutionsltd@gmail.com">cmmsolutionsltd@gmail.com</a></li>
        <li>Phone: 020 825 866 / 0246 102 372 / 0246 623 172</li>
    </ul>
@endsection
