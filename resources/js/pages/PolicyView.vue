<template>
    <header id="">
        <navBar />
    </header>

    <section>
        <MainSection />
    </section>

    <footer class="bg-blue py-15 mt-20">
        <FooterSection />
    </footer>
</template>

<script setup>

import MainSection from '@/components/sections/PolicySections/mainSection.vue';
import FooterSection from '@/components/structure/footerSection.vue';
import navBar from '@/components/structure/navBar.vue';

</script>