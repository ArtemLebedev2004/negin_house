<template>
    <header id="">
        <navBar />
    </header>

     <section id="main">
        <mainSection />
    </section>

    <section id="about" class=" pb-4">
        <AboutSection />
    </section>

    <section id="gallery">
      <Gallery_section />
    </section> 

    <section id="advs" class="bg-liblue pb-20">
      <AdvantagesSection />
    </section> 

    <section>
      <FreePlaceSection />
    </section>

    <section id="feedback"> 
      <FeedbackSection />
    </section>

    <section id="booking" class="bg-liblue pb-[18vw]">
      <BookingSection />
    </section>

    <section id="contacts">
      <ContactsSection />
    </section>

    <footer class="bg-blue py-10">
      <FooterSection />
    </footer>
    <!-- <section id="booking">
        <bookingSection />
    </section>

    <section id="rules">
        <rulesSection />
    </section>

    <section id="map">
        <mapSection />
    </section>

    <footer id="footer">
        <footerSection />
    </footer> -->

  <!-- <section id="services">
    <servicesSection />
  </section> -->

  <!-- <section id="projects">
    <projectsSection />
  </section>



  <section id="about">
    <aboutSection @id-active="idActiveEmit" />
  </section>

  <footer id="contacts">
    <footerContacts :idActive="idActive" />
  </footer> -->
</template>

<script setup>
 import navBar from '@/components/structure/navBar.vue';
import mainSection from '@/components/sections/HomeSections/mainSection.vue';
import AboutSection from '@/components/sections/HomeSections/aboutSection.vue';
import Gallery_section from '@/components/sections/HomeSections/gallery_section.vue';
import AdvantagesSection from '@/components/sections/HomeSections/advantagesSection.vue';
import FreePlaceSection from '@/components/sections/HomeSections/freePlaceSection.vue';
import FeedbackSection from '@/components/sections/HomeSections/feedbackSection.vue';
import BookingSection from '@/components/sections/HomeSections/bookingSection.vue';
import ContactsSection from '@/components/sections/HomeSections/contactsSection.vue';
import FooterSection from '@/components/structure/footerSection.vue';
// import { onMounted } from 'vue';
// import VueScrollTo from 'vue-scrollto'


// onMounted(() => {
//     console.log('new')

//     if (localStorage.getItem('hash')) {
//       SmoothVerticalScrolling(localStorage.getItem('hash'), 200, 'top')
//         // let section = document.getElementById(localStorage.getItem('hash'))
//         // console.log(section)
//         // VueScrollTo.scrollTo('#' + localStorage.getItem('hash'), 300)
//     }
//     // router.get('/', {
//     //     hash: hash,
//     //     onSuccess: (page) => {
//     //         console.log(hash)
//     //     }
//     // })
  
//     // if (window.location.hash) {
//     //     console.log('df')
//     //     VueScrollTo.scrollTo(window.location.hash, 400, {
//     //         offset: 3000
//     //     })

//     //     // SmoothVerticalScrolling('booking', 275, 'top')

//     //     history.replaceState({}, document.title, window.location.href.split('#')[0]);

//     // }
//   })

//   function SmoothVerticalScrolling(e, time, where) {
//       let el = document.getElementById(e);
//       console.log(el)
//       if (el) {
//         let eTop = el.getBoundingClientRect().top;
//         let eAmt = eTop/101;
//         let curTime = 0;
//         while (curTime <= time) {
//             window.setTimeout(SVS_B, curTime, eAmt, where);
//             curTime += time / 100;
//         }
//         if (openMenu.value) {
//             openMenu.value = false
//         }
//       } else {
//         window.location.href='/#' + e
//       }
      
//   }
  
//   function SVS_B(eAmt, where) {
//       if(where == "center" || where == "")
//           window.scrollBy(0, eAmt / 2);
//       if (where == "top")
//           window.scrollBy(0, eAmt);
//   }
// import servicesLivingSection from '@/components/sections/HomeSections/ServicesLivingSection.vue';
// import bookingSection from '@/components/sections/HomeSections/bookingSection.vue';
// import mapSection from '@/components/sections/HomeSections/mapSection.vue';
// import rulesSection from '@/components/sections/HomeSections/rulesSection.vue';
// import nowordsSection from '@/components/sections/HomeSections/nowordsSection.vue';
// import footerSection from '@/components/structure/footerSection.vue';

// import projectsSection from '../components/sections/HomeViewSections/projectsSection.vue';
// import servicesSection from '../components/sections/HomeViewSections/servicesSection.vue';
// import aboutSection from '../components/sections/HomeViewSections/aboutSection.vue';
// import navBar from '@/components/structure/navBar.vue';
// import footerContacts from '@/components/structure/footerContacts.vue';
// import { ref } from 'vue';

// let idActive = ref(null)

// let idActiveEmit = (data) => {
//   idActive.value = data
// }


</script>

<style>
#main:before, #projects:before, #services:before, #about:before {
	display: block;
	content: "";
	height: 55px;
	margin: -55px 0 0;
}
</style>
