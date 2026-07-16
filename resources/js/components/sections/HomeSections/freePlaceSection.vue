<template>
    <div class="relative px-4.5 md:px-[23px] mt-[20vw] text-[16px]">
        <div class="mb-[15vw] flex flex-col gap-[10vw]">
            <div>
                <img src="../../../../assets/icons/corona.svg" alt="" class="corona m-auto">
            </div>

            <hr class="w-[50%] h-0.75 m-auto bg-blue">

            <h2 class="text-[45px] text-center !leading-[15vw]">УЗНАЙТЕ НАЛИЧИЕ СВОБОДНЫХ МЕСТ</h2>
        </div>

        <div class="border-2 border-blue p-[3.5vw] rounded-[10vw]">
            <img src="../../../../assets/img/line4_2.webp" alt="" class="rounded-t-[7.2vw]">

            <Form action="/formSend" method="post" :options="{preserveScroll: true}" #default="{ errors, invalid, validate }" class="bg-blue rounded-b-[7.2vw] p-6 py-7 flex flex-col gap-[5vw]">
                <div>
                    <input id="name" type="text" name="name" @change="validate('name')" class="w-full border-2 text-white text-[4.5vw] min-[450px]:text-[20.25px] min-[768px]:text-[3vw] min-[820px]:text-[24.6px]  min-[1024px]:text-[20px] text-center rounded-full py-[5%] min-[768px]:py-[4.4%] min-[1024px]:py-6 px-4   outline-none placeholder:text-white" :class="invalid('name') ? 'border-red-400' : 'border-white'" placeholder="ФИО">
                    <div v-if="invalid('name')" class="mt-2 text-red-400">{{ errors.name }}</div>

                    <input id="phone" type="phone" name="phone" @change="validate('phone')" class="w-full border-2 text-white text-[4.5vw] min-[450px]:text-[20.25px] min-[768px]:text-[3vw] min-[820px]:text-[24.6px]  min-[1024px]:text-[20px] text-center rounded-full py-[5%] min-[768px]:py-[4.4%] min-[1024px]:py-6 px-4   outline-none placeholder:text-white mt-[4vw]" :class="invalid('phone') ? 'border-red-400' : 'border-white'" placeholder="Телефон">
                    <div v-if="invalid('phone')" class="mt-2 text-red-400">{{ errors.phone }}</div>
                </div>

                <div class="group">
                    <input ref="check_circle1" id="check_circle1" type="checkbox" name="checkbox"  @change="validate('checkbox')" class="hidden" >

                    <label for="check_circle1" class="flex gap-[3.4vw] min-[450px]:gap-[15.3px] items-center cursor-pointer">
                        <div class="w-[6vw] min-[450px]:w-[27px] min-[1024px]:w-8 h-[6vw] min-[450px]:h-[27px] min-[1024px]:h-8 rounded-[1.5vw] min-[450px]:rounded-[6.75px] border-2 border-white group-has-checked:bg-white"></div>

                        <a href="/privacy_policy" class="text-white w-fit min-[768px]:w-auto text-[3.5vw] min-[450px]:text-[16px] min-[768px]:text-[2vw] min-[820px]:text-[16px] min-[1024px]:text-[16px] leading-[5vw] min-[768px]:flex min-[768px]:gap-[0.8vw] min-[820px]:gap-[6.56px]">
                            <div class="relative">
                                Даю <span class="border-white border-b">согласие на обработку</span> своих персональных данных
                            </div>
                        </a>
                    </label>

                    <div v-if="invalid('checkbox')" class="mt-2 text-red-400">{{ errors.checkbox }}</div>

                    <!-- <div v-if="clickBookingSubmit && !inputCheckedBooking" class="text-red-800 text-[12px] font-bold mt-1">Для бронирования нужно согласиться</div> -->
                </div>

                <button type="submit" class="text-blue font-semibold text-[4.8vw] min-[450px]:text-[21.6px] min-[768px]:text-[3vw] min-[820px]:text-[24.6px]  min-[1024px]:text-[20px] text-center px-[30px] py-[5%] min-[768px]:py-[4.9%] min-[1024px]:py-6 bg-white rounded-full text-daorange cursor-pointer">
                    Узнать
                </button>
            </Form>


            
        </div>
    </div>
</template>

<script setup>
import { Form } from '@inertiajs/vue3';
</script>