<script setup>
import { Head } from '@inertiajs/vue3';
import ApplicationLogo from '@/Components/ApplicationLogo.vue';

const privacyPolicyStaticData = [
    {
        header: 'Information We Collect',
        content: 'Personal Information: We may collect personal information such as your name, email address, phone number, and address. This information is collected when you sign up for our membership or participate in our giveaways.\n' +
            '\n' +
            'Usage Information: We may collect information about how you use our services, including browsing patterns, preferences, and interactions with our platform.'
    },
    {
        header: 'How We Use Your Information',
        content: 'Membership and Giveaways: Your personal information is used to provide you with membership benefits, including access to discounts and participation in giveaways.\n' +
            '\n' +
            'Communication: We may use your contact information to send you updates, promotional materials, and information related to our services.'
    },
    {
        header: 'Sharing Your Information',
        content: 'With Partners: We may share your information with our partner businesses to facilitate the provision of discounts and benefits.\n' +
            '\n' +
            'Giveaways: Your information may be disclosed when you participate in our giveaways, as winners are often announced publicly.'
    },
    {
        header: 'Security',
        content: 'We take reasonable measures to protect your personal information from unauthorized access, disclosure, alteration, and destruction.'
    },
    {
        header: 'Your Choices',
        content: 'You have the right to update or correct your personal information at any time. You can also opt-out of promotional communications.'
    },
    {
        header: 'Third-Party Links',
        content: 'Our services may contain links to third-party websites. We are not responsible for the privacy practices or content of these websites.\n' +
            '\n'
    },
    {
        header: 'Changes to This Privacy Policy',
        content: 'We reserve the right to update or modify this Privacy Policy at any time. Please review this policy periodically for changes.'
    },
    {
        header: 'Contact Us',
        content: 'If you have questions about this Privacy Policy, please contact us at premiumpresentbalkan@gmail.com.'
    }
]

</script>

<template>
    <Head title="Privacy Policy" />

    <div class="font-sans text-gray-900 antialiased">
        <div class="pt-4 bg-gray-100">
            <div class="min-h-screen flex flex-col items-center pt-6 sm:pt-0">
                <div>
                    <ApplicationLogo width="180" height="140" />
                </div>

                <div class="w-full lg:max-w-4xl mt-6 p-6 bg-white shadow-md overflow-hidden lg:rounded-lg prose mb-10 lg:mb-20">
                    <section>
                        Premium Presents Balkan is committed to protecting the privacy of its users. This Privacy Policy outlines how we collect, use, disclose, and safeguard your personal information. By using our services, you agree to the terms outlined in this policy.
                    </section>
                    <section>
                        <div v-for="(item, index) in privacyPolicyStaticData" :key="index" class="mt-5">
                            <header class="text-xl lg:text-3xl lg:font-bold font-semibold">
                                {{ item.header }}
                            </header>
                            <div class="whitespace-normal" style="word-wrap: break-word">
                                {{ item.content }}
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
</template>
