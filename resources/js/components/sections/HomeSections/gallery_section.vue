<template>
    <div class="relative px-4.5 md:px-[23px] mt-15">
        <div class="mb-[11vw]">
            <div>
                <img src="../../../../assets/icons/corona.svg" alt="" class="corona m-auto">
            </div>

            <div class=" m-auto flex gap-5 mt-[8vw] items-center">
                <div class="h-0.5 w-full bg-blue"></div>
                <h2 class="text-[12.5vw] text-center ">ГАЛЕРЕЯ</h2>
                <div class="h-0.5 w-full bg-blue"></div>
            </div>
        </div>
    </div>
    
    <div class="flex flex-col gap-8">
        <swiper_component
            :imgs="line1"
        />

        <swiper_component
            :imgs="line2"
        />

        <swiper_component
            :imgs="line3"
        />
        
        <swiper_component
            :imgs="line4"
        />
    </div>
</template>

<script setup>
import Swiper_component from '@/components/reusable/swiper_component.vue';

let line1 = {
    photo1: {
        id: 1,
        src: '../../../assets/img/line1_1.jpg'
    },
    photo2: {
        id: 2,
        src: '../../../assets/img/line1_2.jpg'
    },
    photo3: {
        id: 3,
        src: '../../../assets/img/line1_3.jpg'
    },
    photo4: {
        id: 4,
        src: '../../../assets/img/line1_4.jpg'
    },
}

let line2 = {
    photo1: {
        id: 1,
        src: '../../../assets/img/line2_1.jpg'
    },
    photo2: {
        id: 2,
        src: '../../../assets/img/line2_2.jpg'
    },
    photo3: {
        id: 3,
        src: '../../../assets/img/line2_3.jpg'
    },
    photo4: {
        id: 4,
        src: '../../../assets/img/line2_4.jpg'
    },
}

let line3 = {
    photo1: {
        id: 1,
        src: '../../../assets/img/line3_1.jpg'
    },
    photo2: {
        id: 2,
        src: '../../../assets/img/line3_2.jpg'
    },
    photo3: {
        id: 3,
        src: '../../../assets/img/line3_3.webp'
    },
    photo4: {
        id: 4,
        src: '../../../assets/img/line3_4.jpg'
    },
}

let line4 = {
    photo1: {
        id: 1,
        src: '../../../assets/img/line4_1.jpg',
        photoHorizont: true
    },
    photo2: {
        id: 2,
        src: '../../../assets/img/line4_2.webp',
        photoHorizont: true
    }
}

</script>