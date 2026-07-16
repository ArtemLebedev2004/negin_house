<template>
    <div class="relative px-4.5 md:px-[23px] py-4 mt-[22.5vw] text-[4.5vw]">
        <div class="flex items-center justify-between">
            <div class="w-max px-[4vw] py-1.75 rounded-full border-2 border-blue ">
                Хостел на Лубянке
            </div>

            <div class="flex items-center gap-[5vw]">
                <a href="https://web.max.ru/83538063" target="_blank">
                    <img src="../../../../assets/icons/max.svg" alt="" class="w-[6.75vw]">
                </a>

                <a href="https://t.me/+79998150830" target="_blank">
                    <img src="../../../../assets/icons/tg.svg" alt="" class="w-[6.75vw]">
                </a>

                <a href="https://vk.com/negindom" target="_blank">
                    <img src="../../../../assets/icons/vk.svg" alt="" class="w-[6.75vw]">
                </a>
            </div>
        </div>
        

        <h1 class="!text-[14.75vw] min-[425px]:text-[65px] mt-[6.75vw] leading-14">НЕГИН ДОМ</h1>

        <div class="relative mt-[8.25vw] min-[425px]:mt-[40px]">
            <div class="absolute w-[17px] h-full -left-4.5 bg-blue"></div>

            <div class="text-[5vw]  pl-8">
                Почувствуй себя <span class="font-['Gentium_Plus_Italic'] text-[6.1vw] text-blue font-black">как дома</span> в самом сердце столицы
            </div>
        </div>

        <div class="mt-[9vw] min-[425px]:mt-[40px] flex flex-col gap-2">
            <div class="w-max">
                Гостевой дом для любителей комфорта
                <hr class="text-blue -mt-0.3">
            </div>

            <div class="w-max">
                 и безопасности от <span class="font-bold text-blue italic">750 руб в сутки</span> 
                <hr class="text-blue -mt-0.3">
            </div>
            
            <div class="w-max">
                
                <hr class="text-blue -mt-0.3">
            </div>
        </div>

        <div class="absolute top-[25%] -z-1 inset-x-0">
            <img src="../../../../assets/img/main_img_sm.jpg" alt="" class="w-full max-w-[450px] m-auto">
        </div>

        <div class="mt-[118%] text-[7vw] text-center font-['Alice']">
            <div class="border-2 border-blue p-1.5 rounded-full">
                <div class="bg-blue px-4 py-2.75 rounded-full  text-white">
                    <a @click.prevent="SmoothVerticalScrolling('booking', 275, 'top')" href="">
                        ЗАБРОНИРОВАТЬ
                    </a>
                </div>
            </div>

            <a href="tel:89998150830" class="block text-blue mt-3">8-999-815-08-30</a>
        </div>

        
    </div>
</template>

<script setup>
    function SmoothVerticalScrolling(e, time, where) {
      let el = document.getElementById(e);
      let eTop = el.getBoundingClientRect().top;
      let eAmt = eTop/101;
      let curTime = 0;
      while (curTime <= time) {
          window.setTimeout(SVS_B, curTime, eAmt, where);
          curTime += time / 100;
      }
  }
  
  function SVS_B(eAmt, where) {
      if(where == "center" || where == "")
          window.scrollBy(0, eAmt / 2);
      if (where == "top")
          window.scrollBy(0, eAmt);
  }
</script>