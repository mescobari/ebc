<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import Welcome from '@/Jetstream/Welcome.vue';
import JetNavLink from '@/Jetstream/NavLink.vue';
//import { DataTable } from 'v-datatable-light'
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
                                <tr v-for ="movimiento in movimientos" >
                                    <td class="border px-4 py-2">
                                        {{ movimiento.preventivo}}.{{ movimiento.comprometido}}.{{ movimiento.devengado}}
                                    </td>
                                    <td class="border px-4 py-2">
                                        {{ movimiento.resumen}}
                                    </td>
                                    <td class="border px-4 py-2">
                                        {{ movimiento.liquido_pagable}}
                                    </td>
                                     <td class="border px-4 py-2">                                       
                                        <JetNavLink :href ="route('gastos.show', movimiento.id)" >
                                            Detalle
                                        </JetNavLink>
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
         },
        
    }
</script>
