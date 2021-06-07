<template>
    <app-layout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Dashboard
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <h1 id="notification">{{test}}</h1>
                
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    <welcome />
                </div>
            </div>
        </div>
    </app-layout>
</template>

<script>
    import AppLayout from '@/Layouts/AppLayout'
    import Welcome from '@/Jetstream/Welcome'

    export default {
       data: function() {
         return {
                test:'',
                
             }
       },
     
    created: function () {
         console.log("mounted");
            let t = this;
            Echo.private('notifications').listen('userSessionChange',(e) =>{
                t.test = e.message;
                console.log(t.test);
            });
        },
           
        components: {
            AppLayout,
            Welcome,
        },
    }
</script>
