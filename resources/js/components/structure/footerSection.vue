<template>
    <div class="relative px-4.5 md:px-[23px] text-white flex flex-col gap-[13vw]">
        <div class="flex justify-between">
            <img src="../../../assets/icons/main_logo_white.svg" alt="" class="w-[30vw]">

            <div class="flex gap-[6vw] items-center">
                <a href="https://web.max.ru/83538063" target="_blank">
                    <img src="../../../assets/icons/max_white.svg" alt="" class="w-[7vw]">
                </a>

                <a href="https://t.me/+79998150830" target="_blank">
                    <img src="../../../assets/icons/tg_white.svg" alt="" class="w-[7vw]">
                </a>

                <a href="https://vk.com/negindom" target="_blank">
                    <img src="../../../assets/icons/vk_white.svg" alt="" class="w-[7vw]">
                </a>
            </div>
        </div>

        <div class="">
            <div class="flex gap-5">
                <img src="../../../assets/icons/location_white.svg" alt="" class="w-[5vw]">
                <div>г. Москва, ул. Малая Лубянка, 16</div>
            </div>

            <div class="flex gap-5 mt-4">
                <img src="../../../assets/icons/phone_white.svg" alt="" class="w-[5vw]">
                <div>+7 (999) 815-08-30</div>
            </div>
        </div>

        <div class=" flex flex-wrap gap-x-8 gap-y-6 justify-center">
            <div @click.prevent="scrollTo('about')"  href="#about" class="border-b-1">О НАС</div>
            <div @click.prevent="scrollTo('gallery')"  href="#gallery" class="border-b-1">ГАЛЕРЕЯ</div>
            <div @click.prevent="scrollTo('advs')"  href="#advs" class="border-b-1">ПЛЮСЫ</div>
            <div @click.prevent="scrollTo('feedback')"  href="#feedback" class="border-b-1">ОТЗЫВЫ</div>
            <div @click.prevent="scrollTo('contacts')"  href="#contacts" class="border-b-1">КОНТАКТЫ</div>
        </div>

        <div class="flex flex-col gap-6">
            <div class="text-center">
                <a href="https://vk.com/studiosova" target="_blank">
                    Сайт разработан <span class="italic font-bold border-b-1">СОВОЙ В КОСМОСЕ</span>
                </a>
            </div>

            <a href="/privacy_policy" class="border-b-1 w-max m-auto">
                Правила пользования сайтом
            </a>
        </div>

        <div class="m-auto">
            © 2026, Moscow, Negin House
        </div>
       
    
    </div>

</template>

<script setup>
  import VueScrollTo from 'vue-scrollto'

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
//     function SmoothVerticalScrolling(e, time, where) {
//       let el = document.getElementById(e);
//       let eTop = el.getBoundingClientRect().top;
//       let eAmt = eTop/101;
//       let curTime = 0;
//       while (curTime <= time) {
//           window.setTimeout(SVS_B, curTime, eAmt, where);
//           curTime += time / 100;
//       }
//   }
  
//   function SVS_B(eAmt, where) {
//       if(where == "center" || where == "")
//           window.scrollBy(0, eAmt / 2);
//       if (where == "top")
//           window.scrollBy(0, eAmt);
//   }
</script>