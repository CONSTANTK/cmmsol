@extends('Front.layouts.policy')

@section('title', 'Frequently Asked Questions | CMM Solutions Limited')
@section('meta_description', 'Answers to common questions about C.M.M Solutions Limited services, payments, delivery, and support.')
@section('page_heading', 'FAQ')

@section('content')
    <div class="heading-section mb-4">
        <span class="subheading">How we can help</span>
        <h2 class="mb-3">Frequently Asked Questions</h2>
        <p>Below are answers to some of the most common questions about our services, payments, delivery, and support. If your question isn't answered here, please <a href="{{route('front.contact')}}">contact us</a> and we'll be happy to help.</p>
    </div>

    <div id="faqAccordion" class="myaccordion w-100" aria-multiselectable="true">

        <div class="card">
            <div class="card-header p-0" id="faqHeading1">
                <h2 class="mb-0">
                    <button href="#faqCollapse1" class="d-flex py-3 px-4 align-items-center justify-content-between btn btn-link" data-parent="#faqAccordion" data-toggle="collapse" aria-expanded="true" aria-controls="faqCollapse1">
                        <p class="mb-0">What services does C.M.M Solutions offer?</p>
                        <i class="fa" aria-hidden="true"></i>
                    </button>
                </h2>
            </div>
            <div class="collapse show" id="faqCollapse1" role="tabpanel" aria-labelledby="faqHeading1">
                <div class="card-body py-3 px-0">
                    <p>We provide customized software development and ready-made systems including Gravity Banking (digital Susu and financial management), School Management, Welfare Management, Payroll, Shop Management, and AI Learning &amp; Assessment systems, along with IT consulting, implementation, database management, and technical support.</p>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-header p-0" id="faqHeading2">
                <h2 class="mb-0">
                    <button href="#faqCollapse2" class="d-flex py-3 px-4 align-items-center justify-content-between btn btn-link collapsed" data-parent="#faqAccordion" data-toggle="collapse" aria-expanded="false" aria-controls="faqCollapse2">
                        <p class="mb-0">How do I get started with a project?</p>
                        <i class="fa" aria-hidden="true"></i>
                    </button>
                </h2>
            </div>
            <div class="collapse" id="faqCollapse2" role="tabpanel" aria-labelledby="faqHeading2">
                <div class="card-body py-3 px-0">
                    <p>Simply <a href="{{route('front.contact')}}">contact us</a> with your requirements. We'll discuss your goals, users, and workflow, then provide a proposal outlining the recommended solution, scope, timeline, and cost. Once agreed, we begin development and guide the project through to implementation and support.</p>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-header p-0" id="faqHeading3">
                <h2 class="mb-0">
                    <button href="#faqCollapse3" class="d-flex py-3 px-4 align-items-center justify-content-between btn btn-link collapsed" data-parent="#faqAccordion" data-toggle="collapse" aria-expanded="false" aria-controls="faqCollapse3">
                        <p class="mb-0">What payment methods do you accept?</p>
                        <i class="fa" aria-hidden="true"></i>
                    </button>
                </h2>
            </div>
            <div class="collapse" id="faqCollapse3" role="tabpanel" aria-labelledby="faqHeading3">
                <div class="card-body py-3 px-0">
                    <p>We accept secure online payments through Paystack, which supports debit/credit cards and mobile money, as well as bank transfer and other methods by arrangement. For larger projects we typically require an upfront deposit with the balance due at agreed milestones.</p>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-header p-0" id="faqHeading4">
                <h2 class="mb-0">
                    <button href="#faqCollapse4" class="d-flex py-3 px-4 align-items-center justify-content-between btn btn-link collapsed" data-parent="#faqAccordion" data-toggle="collapse" aria-expanded="false" aria-controls="faqCollapse4">
                        <p class="mb-0">How and when are your products delivered?</p>
                        <i class="fa" aria-hidden="true"></i>
                    </button>
                </h2>
            </div>
            <div class="collapse" id="faqCollapse4" role="tabpanel" aria-labelledby="faqHeading4">
                <div class="card-body py-3 px-0">
                    <p>Our products are digital. Software subscriptions and licences are usually activated within 1–3 business days of payment confirmation, while custom projects are delivered according to the milestones agreed in your service agreement. See our <a href="{{route('front.delivery')}}">Delivery &amp; Refund Policy</a> for full details.</p>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-header p-0" id="faqHeading5">
                <h2 class="mb-0">
                    <button href="#faqCollapse5" class="d-flex py-3 px-4 align-items-center justify-content-between btn btn-link collapsed" data-parent="#faqAccordion" data-toggle="collapse" aria-expanded="false" aria-controls="faqCollapse5">
                        <p class="mb-0">Can I get a refund?</p>
                        <i class="fa" aria-hidden="true"></i>
                    </button>
                </h2>
            </div>
            <div class="collapse" id="faqCollapse5" role="tabpanel" aria-labelledby="faqHeading5">
                <div class="card-body py-3 px-0">
                    <p>Yes, within the terms of our <a href="{{route('front.delivery')}}">Delivery &amp; Refund Policy</a>. Orders cancelled before work begins are fully refundable, and undelivered services are refundable. Fees for work already completed are non-refundable. Duplicate or erroneous charges are refunded in full.</p>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-header p-0" id="faqHeading6">
                <h2 class="mb-0">
                    <button href="#faqCollapse6" class="d-flex py-3 px-4 align-items-center justify-content-between btn btn-link collapsed" data-parent="#faqAccordion" data-toggle="collapse" aria-expanded="false" aria-controls="faqCollapse6">
                        <p class="mb-0">Do you provide support after delivery?</p>
                        <i class="fa" aria-hidden="true"></i>
                    </button>
                </h2>
            </div>
            <div class="collapse" id="faqCollapse6" role="tabpanel" aria-labelledby="faqHeading6">
                <div class="card-body py-3 px-0">
                    <p>Yes. We provide implementation guidance, maintenance, troubleshooting, and technical support so your team can use the solution confidently. Support terms depend on your agreement and any subscription or maintenance plan in place.</p>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-header p-0" id="faqHeading7">
                <h2 class="mb-0">
                    <button href="#faqCollapse7" class="d-flex py-3 px-4 align-items-center justify-content-between btn btn-link collapsed" data-parent="#faqAccordion" data-toggle="collapse" aria-expanded="false" aria-controls="faqCollapse7">
                        <p class="mb-0">Is my data safe with C.M.M Solutions?</p>
                        <i class="fa" aria-hidden="true"></i>
                    </button>
                </h2>
            </div>
            <div class="collapse" id="faqCollapse7" role="tabpanel" aria-labelledby="faqHeading7">
                <div class="card-body py-3 px-0">
                    <p>We take data protection seriously and apply reasonable technical and organizational measures to safeguard your information. Payment details are handled securely by our payment provider and are not stored on our servers. See our <a href="{{route('front.privacy')}}">Privacy Policy</a> for more.</p>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-header p-0" id="faqHeading8">
                <h2 class="mb-0">
                    <button href="#faqCollapse8" class="d-flex py-3 px-4 align-items-center justify-content-between btn btn-link collapsed" data-parent="#faqAccordion" data-toggle="collapse" aria-expanded="false" aria-controls="faqCollapse8">
                        <p class="mb-0">Where are you located and who do you work with?</p>
                        <i class="fa" aria-hidden="true"></i>
                    </button>
                </h2>
            </div>
            <div class="collapse" id="faqCollapse8" role="tabpanel" aria-labelledby="faqHeading8">
                <div class="card-body py-3 px-0">
                    <p>We are based at Volta Place, Airport Residential Area, Accra, Ghana. We work with businesses, schools, institutions, and organizations across Ghana and Africa that want secure, practical, and user-friendly technology.</p>
                </div>
            </div>
        </div>

    </div>
@endsection
