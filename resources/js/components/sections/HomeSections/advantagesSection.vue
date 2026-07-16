<template>
    <div class="relative px-4.5 md:px-[23px] mt-[22vw] pt-[18vw] text-[16px]">
        <div>
            <img src="../../../../assets/icons/corona.svg" alt="" class="corona m-auto">
        </div>
        
        <div class="relative mt-[12vw] mb-[18vw]">
            

            <div class="absolute w-[17px] h-full -left-4.5 bg-blue"></div>

            <h2 class="text-[12.5vw]  pl-8">
                НАШИ ПЛЮСЫ
            </h2>
        </div>
    </div>
    
    <div class="flex flex-col gap-[8vw]">
        <swiper_component
            :advs="line1"
        />

        <swiper_component
            :advs="line2"
        />

        <swiper_component
            :advs="line3"
        />
    </div>
</template>

<script setup>
import Swiper_component from '@/components/reusable/swiper_component.vue';

let line1 = {
    adv1: {
        id: 1,
        logo: '../../../assets/icons/logo_24.svg',
        head: 'Проход в любое время суток',
        description: 'Благодаря кодовому замку, вы можете заходить и выходить в любое время суток без помощи администратора'
    },
    adv2: {
        id: 2,
        logo: '../../../assets/icons/location.svg',
        head: 'Удобное расположение',
        description: 'Наш хостел находится в центре столицы, всего 7 минут от м. Тургеневская и м. Чистые пруды'
    },
    adv3: {
        id: 3,
        logo: '../../../assets/icons/camera.svg',
        head: 'Безопасность',
        description: 'Видеонаблюдение 24/7 и кодовый замок на двери, шифр которого знают только постояльцы'
    }
}

let line2 = {
    adv4: {
        id: 4,
        logo: '../../../assets/icons/wi-fi.svg',
        head: 'Бесплатный WI-FI',
        description: 'Бесплатный скоростной интернет на всей территории хостела'
    },
    adv5: {
        id: 5,
        logo: '../../../assets/icons/beds.svg',
        head: 'Уютные номера',
        description: 'Каждое спальное место со шторкой и настенным светильником, новые ортопедические матрасы и гиполлергенные подушки '
    },
    adv6: {
        id: 6,
        logo: '../../../assets/icons/cleaner.svg',
        head: 'Чистота',
        description: 'Уборка хостела проводится ежедневно'
    }
}

let line3 = {
    adv7: {
        id: 7,
        logo: '../../../assets/icons/dishes.svg',
        head: 'Полностью оснащённая кухня',
        description: 'Есть холодильник, микроволновая печь, плита, чайник, посуда, шкафчик для каждого гостя для хранения продуктов'
    },
    adv8: {
        id: 8,
        logo: '../../../assets/icons/avatar.svg',
        head: 'Хорошее качество обслуживания',
        description: 'Вежливый, отзывчивый администратор, который встречает каждого гостя и поможет вам при необходимости '
    }
}


</script>