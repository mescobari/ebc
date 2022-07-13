<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import Welcome from '@/Jetstream/Welcome.vue';
</script>

<template>
    <AppLayout title="Movimientos Financieros">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Modulo de Gastos
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="md:grid md:grid-cols-3 md:gap-6">
                    

                    <div class="md:col-span-3 mt-5 md:mt-0">
                        <div class="shadow bg-white md:rounded-md p-4">
                            
                            <table>
                                <tr v-for ="movimiento in movimientos">
                                    <td class="border px-4 py-2">
                                        {{ movimiento.resumen}}

                                    </td>
                                </tr>
                            </table>

                        </div>

                    </div>
                   
                </div>
            </div>
        </div>
    </AppLayout>
</template>

<script>
    export default {
        components: {
            AppLayout,
         },
         props:{
            movimientos: Array,
         }


    }
</script>
