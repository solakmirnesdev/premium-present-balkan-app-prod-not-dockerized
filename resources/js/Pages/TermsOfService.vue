<script setup>
import { Head } from '@inertiajs/vue3';
import ApplicationLogo from '@/Components/ApplicationLogo.vue';

const termsOfService = [
    {
        header: 'Membership and Access',
        content: 'Membership: Premium Presents Balkan offers a membership-based business where loyal customers gain access to discounts from partner businesses.\n' +
            '\n' +
            'Giveaways: Members automatically get enrolled in monthly giveaways, with prizes such as tech products, cash prizes, and other valuable items.'
    },
    {
        header: 'Subscriptions and Fees',
        content: 'Monthly Subscriptions: Customers with monthly subscriptions gain access to discounts and are automatically enrolled in monthly giveaways.' +
            'Non-Subscribers: Individuals not subscribed may enter giveaways for a fee, and the price is determined by the value of the product being given away.\n' +
            '\n'
    },
    {
        header: 'Growth and Partnerships',
        content: 'Growing a Following: Premium Presents Balkan aims to grow a following through giveaways, requiring initial funding for giveaway products.' +
            '\n Introducing Partners: After growing a following, the company will introduce partners offering discounts to followers. \n' +
            'Monthly Subscription Fee: A monthly subscription fee is introduced, granting subscribers access to discounts with partners.'
    },
    {
        header: 'Marketing and Advertising',
        content: 'Social Media Presence: Building a strong presence on social media is crucial for gaining an initial following. \n Trust and Advertising Costs: Creating trust between customers and the company is a priority. Advertising costs will primarily go into social media marketing and may later include paid ads through influencers. \n Brand Building: As the following grows, marketing funds will be redirected to building the brand.'
    },
    {
        header: 'Changes to Terms',
        content: 'Modification: Premium Presents Balkan reserves the right to modify these Terms at any time. Users will be notified of significant changes.'
    },
    {
        header: 'Contact Us',
        content: 'Questions: If you have any questions or concerns regarding these Terms, please contact us at premiumpresentbalkan@gmail.com.'
    }
]


</script>

<template>
    <Head title="Terms of Service" />

    <div class="font-sans text-gray-900 antialiased">
        <div class="pt-4 bg-gray-100">
            <div class="min-h-screen flex flex-col items-center pt-6 sm:pt-0">
                <div>
                    <ApplicationLogo width="180" height="140" />
                </div>

                <div class="w-full lg:max-w-4xl mt-6 p-6 bg-white shadow-md overflow-hidden lg:rounded-lg prose mb-10 lg:mb-20">
                    <section>
                        Welcome to Premium Presents Balkan! These Terms of Service ("Terms") govern your use of our services, website, and related applications (collectively, the "Service"). By using our Service, you agree to these Terms. If you do not agree with any part of these Terms, please do not use our Service.
                    </section>
                    <section>
                        <div v-for="(item, index) in termsOfService" :key="index" class="mt-5">
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
