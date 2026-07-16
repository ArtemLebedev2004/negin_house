<template>
    <nav class="
      fixed min-[1024px]:relative z-20 xl:hidden
      left-0 right-0 top-0
      text-white
      bg-liorange min-[1024px]:bg-transparent
      min-[1024px]:mt-[10px]
    " :class="changeBgNav ? 'backdrop-blur-md' : ''">
      <div class="min-[1024px]:hidden bg-liorange max-w-[450px] md:max-w-[820px] lg:max-w-[1030px] m-auto flex justify-between md:gap-[4vw] items-center px-4.5 md:px-[23px] py-4 " >
        <div class="w-[15vw] min-[1024px]:w-[8%]">
          <a @click.prevent="scrollTo('main')">
              <img src="../../../assets/icons/logo_nav.svg" alt="" class="w-full">
          </a>
        </div>

        <a @click.prevent="scrollTo('booking')" class="
            min-w-[176px]
            w-[45vw]
            p-1
            border-blue border
            rounded-[15px]
        ">
            <div class="
                flex items-center justify-center
                
                bg-blue hover:bg-[#4F7A23]/0
                text-[3.5vw] min-[768px]:text-[2vw] min-[820px]:text-[16.4px] min-[1024px]:text-[2vw] text-center text-white
                rounded-[11px] 
                transition-all duration-200
                cursor-pointer
                px-[4vw] md:px-5 py-1.5 md:py-2
            ">
            ЗАБРОНИРОВАТЬ
            </div>
        </a>
  
        <div class="md:flex gap-[4vw] items-center">
          <!-- <div class="hidden md:flex gap-[2vw]">
              <div @click.prevent="SmoothVerticalScrolling('footer', 275, 'top')" class="relative w-[13.5vw] min-[450px]:w-[60.75px] min-[768px]:w-[6vw] min-[820px]:w-[49.19px] min-[1024px]:w-[5.5vw] h-[13.5vw] min-[450px]:h-[60.75px] min-[768px]:h-[6vw] min-[820px]:h-[49.19px] min-[1024px]:h-[5.5vw] rounded-full bg-daorange flex items-center justify-center">
                  <img src="../../../assets/icons/phone.svg" alt="" class="w-[45%]">
              </div>
  
              <div @click.prevent="SmoothVerticalScrolling('footer', 275, 'top')" class="relative w-[13.5vw] min-[450px]:w-[60.75px] min-[768px]:w-[6vw] min-[820px]:w-[49.19px] min-[1024px]:w-[5.5vw] h-[13.5vw] min-[450px]:h-[60.75px] min-[768px]:h-[6vw] min-[820px]:h-[49.19px] min-[1024px]:h-[5.5vw] rounded-full bg-daorange flex items-center justify-center">
                  <img src="../../../assets/icons/mail.svg" alt="" class="w-[50%]">
              </div>
          </div> -->
  
          <div @click="openMenu = !openMenu" class="w-[30px] h-[30px] min-[1024px]:w-[44px]">
  
              <svg v-if="!openMenu" viewBox="0 0 38 26" fill="none" xmlns="http://www.w3.org/2000/svg" class="min-[1024px]:hidden w-full h-[26px]">
                  <line x1="2" y1="24" x2="36" y2="24" stroke="#3DA394" stroke-linecap="round" class="stroke-2"/>
                  <line x1="2" y1="13" x2="36" y2="13" stroke="#3DA394"  stroke-linecap="round" class="stroke-2"/>
                  <line x1="2" y1="2" x2="36" y2="2" stroke="#3DA394"  stroke-linecap="round" class="stroke-2"/>
              </svg>
  
              <div v-if="!openMenu" class="hidden min-[1024px]:flex flex-col gap-2">
                  <div class="bg-daorange h-[6px]"></div>
                  <div class="bg-daorange h-[6px]"></div>
                  <div class="bg-daorange h-[6px]"></div>
              </div>
  
              <svg v-if="openMenu" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg" class="">
                  <path d="M16 16L30 30M16 16L2 2M16 16L2 30M16 16L30 2" stroke="#3DA394" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
              </svg>
          </div>
        </div>
  
  
        
  
      </div>
  
      <!-- <div class="hidden min-[1024px]:flex justify-between  items-center  max-w-[450px] md:max-w-[820px]  lg:max-w-[1030px] m-auto  px-4.5 md:px-[23px] lg:px-[30px] py-4 " >
          <div class="w-[49px] ">
              <router-link to="/">
                  <img src="../../../assets/icons/main_logo.svg" alt="" class="w-full">
              </router-link>
          </div>
  
          <div class="flex gap-[3vw] text-[16.3px] text-black">
              <a @click.prevent="SmoothVerticalScrolling('services', 275, 'top')">
                  Условия проживания
                  <div class="bg-daorange h-[1px]"></div>
              </a>
              <a @click.prevent="SmoothVerticalScrolling('booking', 275, 'top')">
                  Бронирование
                  <div class="bg-daorange h-[1px]"></div>
              </a>
              <a @click.prevent="SmoothVerticalScrolling('rules', 275, 'top')">
                  Наши правила
                  <div class="bg-daorange h-[1px]"></div>
              </a>
              <a @click.prevent="SmoothVerticalScrolling('map', 275, 'top')">
                  Наш адрес
                  <div class="bg-daorange h-[1px]"></div>
              </a>
          </div>
  
          <a @click.prevent="SmoothVerticalScrolling('booking', 275, 'top')" class="
              min-w-[176px]
  
              p-1.25
              border-daorange border
              rounded-[4.2vw] min-[450px]:rounded-[18.9px] min-[1024px]:rounded-[21.5px]
          ">
              <div class="
                  flex items-center justify-center
                  font-semibold
                  bg-daorange hover:bg-[#4F7A23]/0
                  text-[15.3px] text-center text-white
                  rounded-[2.8vw] min-[450px]:rounded-[12.6px] min-[1024px]:rounded-[16.3px]
                  transition-all duration-200
                  cursor-pointer
                  px-3.5 md:px-5 py-1.5 md:py-2
              ">
              ЗАБРОНИРОВАТЬ
              </div>
          </a>
      </div> -->
  
    </nav>

    <div class="
  
          fixed
          inset-0
          h-screen
          text-[15px] min-[768px]:text-[24px]
          gap-1 md:gap-2
            bg-liblue/50
          backdrop-blur-lg
          text-black
          transition duration-500 ease-in-out
          -translate-x-full
          overflow-auto
          z-2
        "
        :class="openMenu ? 'translate-x-0' : ''">
          <div class="
              m-auto
              max-w-[450px] min-[768px]:max-w-[550px]
              px-4.5
              pb-10.5
          ">
              <div class="flex flex-col gap-[60px] justify-center items-center mt-[40%] text-sand uppercase text-[4.5vw] min-[450px]:text-[18px] min-[768px]:text-[2.5vw] min-[820px]:text-[20.5px] font-semibold">
                  <a @click.prevent="scrollTo('about')">
                      О НАС
                  </a>
                  <a @click.prevent="scrollTo('gallery')" href="#booking">
                      ГАЛЕРЕЯ
                  </a>
                  <a @click.prevent="scrollTo('advs')" href="#rules">
                      ПЛЮСЫ
                  </a>
                  <a @click.prevent="scrollTo('feedback')"  href="#map">
                      ОТЗЫВЫ
                  </a>
                  <a @click.prevent="scrollTo('contacts')"  href="#map">
                      КОНТАКТЫ
                  </a>

                  <div class="mt-10 flex gap-8 items-center">
                      <a href="https://web.max.ru/83538063" target="_blank">
                          <img src="../../../assets/icons/max.svg" alt="" class="w-[8vw]">
                      </a>

                      <a href="https://t.me/+79998150830" target="_blank">
                          <img src="../../../assets/icons/tg.svg" alt="" class="w-[8vw]">
                      </a>

                      <a href="https://vk.com/negindom" target="_blank">
                          <img src="../../../assets/icons/vk.svg" alt="" class="w-[8vw]">
                      </a>
                  </div>
              </div>
          </div>
        </div>
  
  </template>
  
  <script setup>
  import Inertia from '@/actions/Inertia';
import { router } from '@inertiajs/vue3';
import { nextTick, onMounted, ref, watch } from 'vue';
  import VueScrollTo from 'vue-scrollto'

  // import router from '@/router';
  // import { nextTick, onMounted, ref } from 'vue';
  
  let openMenu = ref(false)
  
  // watch(openMenu, (newValue) => {
  //     if (newValue) {
  //         document.body.style.overflowY='hidden'
  //     } else {
  //         document.body.style.overflowY='auto'
  //     }
  // })
  
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
//       }
      
//   }
  
//   function SVS_B(eAmt, where) {
//       if(where == "center" || where == "")
//           window.scrollBy(0, eAmt / 2);
//       if (where == "top")
//           window.scrollBy(0, eAmt);
//   }
  
  let changeBgNav = ref(false)
  
  onMounted(() => {
    console.log('new')

    if (localStorage.getItem('hash')) {
        VueScrollTo.scrollTo('#' + localStorage.getItem('hash'), 300)
        localStorage.clear()
    }
    // router.get('/', {
    //     hash: hash,
    //     onSuccess: (page) => {
    //         console.log(hash)
    //     }
    // })
  
    // if (window.location.hash) {
    //     console.log('df')
    //     VueScrollTo.scrollTo(window.location.hash, 400, {
    //         offset: 3000
    //     })

    //     // SmoothVerticalScrolling('booking', 275, 'top')

    //     history.replaceState({}, document.title, window.location.href.split('#')[0]);

    // }
  
    observeMainNav()
  })
  
 function scrollTo(el) {
    let section = document.getElementById(el)
  
    if (section) {
        console.log(section)
        VueScrollTo.scrollTo(section, 300)
        openMenu.value = false
    } else {
        localStorage.setItem('hash', el)
        router.get('/')
    }
}


  function observeMainNav() {
    let observe_h1 = document.getElementsByTagName('h1')[0]
  
    let rootMarginMain = null
  
    if (observe_h1.offsetTop != 0) {
      rootMarginMain = '-' + (observe_h1.clientHeight + observe_h1.offsetTop - 10) + 'px 0px 0px 0px'
    } else {
      rootMarginMain = '-' + (observe_h1.clientHeight + 90) + 'px 0px 0px 0px'
    }
  
    let observerBgNav = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (!entry.isIntersecting) {
        changeBgNav.value = 50
        console.log(rootMarginMain)
      } else {
        changeBgNav.value = 0
      }
    });
    }, { rootMargin: rootMarginMain });
  
    observerBgNav.observe(observe_h1);
  }



  </script>
  
  <style scoped>
  .v-leave-from {
    width: 100%;
  }
  .v-leave-to {
    width: 0;
  }
  
  .stroke_text {
    -webkit-text-stroke-width: 2px;
    -webkit-text-stroke-color: #D58637;
  }
  </style>
  