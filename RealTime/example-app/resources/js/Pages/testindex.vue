<template>
       
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                User listing
               <div v-for="post in list" :key="post.id">
                    <p  v-bind="{ id: post.id,}">{{post.name}}</p>
                </div>  
            </h2>
</template>

<script>
import AppLayout from '@/Layouts/AppLayout'

export default {
   props: ['list'],

    data:function(){
            return {
                notification:0
            }
        },
    components: {

    },

     mounted: function () {
         
            let t = this;
            Echo.channel('users').listen('userRetrived',(e) =>{
                var data = document.getElementById(e.user.id);
                data.innerText = e.user;
                t.notification +=1;
            });

            Echo.join(`users`)
            .here((users) => {
                users.forEach(element => {
                    console.log(element.name)
                });
            })
            .joining((user) => {
                console.log(user.name);
            })
            .leaving((user) => {
                console.log(user.name);
            })
            .error((error) => {
                console.error(error);
            });
                },
}
</script>