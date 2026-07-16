<template>
    <swiper
        :modules="[FreeMode]"
        :slides-per-view=1.1
        space-between='7%'
        :free-mode="true"
        :breakpoints="
        {
            450: {
                slidesPerView: 1.3,
                spaceBetween: '2%',
            },
            768: {
                slidesPerView: 2.2,
                spaceBetween: '2%',

            },
            1024: {
                slidesPerView: 3.2,
                spaceBetween: '2%',
                grabCursor: true,
            },
            1280: {
                slidesPerView:  4,
                spaceBetween: '2%',
                grabCursor: false,
            },
            1280: {
                slidesPerView:  4,
                spaceBetween: '3%',
                grabCursor: false,
            }
        }
        "
        class="w-full min-[450px]:max-w-[414px] min-[768px]:max-w-[820px] min-[1024px]:max-w-[1030px] xl:max-w-[1280px] 2xl:max-w-[1400px] px-4.5! min-[450px]:px-0! min-[768px]:px-[23px]! min-[1024px]:px-[30px]! xl:px-[47px]!"
        :class="imgs ? (Object.keys(imgs).length == 2 ? (imgs.photoHorizont ? 'imgs imgs2 imgsHorizont' : ' imgs imgs2') : 'imgs') : ''"
    >
        <template v-if="imgs">
            <swiper-slide v-for="img in imgs" :key="img.id" >
                <img :src="getImageUrl(img.src)" alt="" class="transition-all duration-150 lg:hover:rotate-[3deg] rounded-4xl">
            </swiper-slide>
        </template>

        <template v-if="advs">
            <swiper-slide v-for="adv in advs" :key="adv.id">
                <div class="min-h-[80vw] p-[10%] border-2 border-blue rounded-4xl text-blue">
                    <div class="flex items-center gap-7">
                        <img :src="getImageUrl(adv.logo)" alt="" class="w-[28%] h-[64px]">

                        <div class="w-max text-[5vw] font-black">{{ adv.head }}</div>
                    </div>

                    <div class="mt-8">
                        {{ adv.description }}
                    </div>
                </div>
            </swiper-slide>
        </template>
        
    </swiper>
</template>

<script setup>
    // Import Swiper Vue.js components
    import 'swiper/css';

    import { Swiper, SwiperSlide } from 'swiper/vue';
    import { FreeMode } from 'swiper/modules';

    const props = defineProps(['imgs', 'advs'])

    const {imgs, advs} = toRefs(props)

    function getImageUrl(src) {
        // This path must be correct for your file
        return new URL(`${src}`, import.meta.url)
    }


    // Import Swiper styles
    import { toRefs } from 'vue';


</script>


<style>
@media screen and (min-width: 450px) and (max-width: 767px) {
    .menu_buttons > .swiper-wrapper {
        width: 441px !important;
        margin: auto !important;
    }

    .achievs > .swiper-wrapper {
        width: 441px !important;
        margin-right: 10px !important;
    }

    .achievs {
        width: 450px;
    }
}

@media screen and (min-width: 768px) {
    .swiper.achievs {
        background: url(../../../assets/img/bg_barnes_sm.svg) center/70% no-repeat;
    }

    .imgs2 > .swiper-wrapper {
        justify-content: center;
        margin-left: 2%;
    }

    .imgs2 > .swiper-wrapper > .swiper-slide {
        width: 50% !important;
    }

    .imgsHorizont > .swiper-wrapper > .swiper-slide {
        width: 44% !important;
    }
}

@media screen and (min-width: 1024px) {
    .swiper.achievs {
        background: url(../../../assets/img/bg_barnes_sm.svg) center/50% no-repeat;
    }

    .imgs2 > .swiper-wrapper > .swiper-slide {
        width: 380px !important;
    }

    .imgsHorizont > .swiper-wrapper > .swiper-slide {
        width: 287px !important;
    }
}

@media screen and (min-width: 1280px) {
    .swiper.achievs {
        background: url(../../../assets/img/bg_barnes_xl.svg) center/80% no-repeat;
    }

    .imgs2 > .swiper-wrapper > .swiper-slide {
        width: 340px !important;
    }

    .imgsHorizont > .swiper-wrapper > .swiper-slide {
        width: 286px !important;
    }
}

@media screen and (min-width: 1536px) {
    .imgs2 > .swiper-wrapper > .swiper-slide {
        width: 380px !important;
    }

    .imgsHorizont > .swiper-wrapper > .swiper-slide {
        width: 300px !important;
    }
}
</style>
