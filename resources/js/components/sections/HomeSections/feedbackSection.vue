<template>
    <div class="relative px-4.5 md:px-[23px] mt-[22vw] text-[16px]">
        <div>
            <img src="../../../../assets/icons/corona.svg" alt="" class="corona m-auto">
        </div>
        
        <div class="relative mt-[12vw] mb-[18vw]">
            

            <div class="absolute w-[17px] h-full -left-4.5 bg-blue"></div>

            <h2 class=" pl-8">
                ЧТО О НАС ГОВОРЯТ?
            </h2>
        </div>

        <div class="flex flex-col gap-[8vw]">
            <div v-for="img in feed_imgs" :key="img" class="border-2 border-blue rounded-[6vw] p-2">
                <img :src="getImageUrl(img.src)" alt="">
            </div>
        </div>
    </div>
</template>

<script setup>

    let feed_imgs = {
        img1: {
            src: '../../../../assets/img/feed1.jpg'
        },
        img2: {
            src: '../../../../assets/img/feed2.jpg'
        },
        img3: {
            src: '../../../../assets/img/feed3.jpg'
        },
        img4: {
            src: '../../../../assets/img/feed4.jpg'
        }
    }

    function getImageUrl(src) {
        // This path must be correct for your file
        return new URL(`${src}`, import.meta.url)
    }
</script>