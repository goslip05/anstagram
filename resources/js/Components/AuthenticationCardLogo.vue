<script setup>
import { Link } from '@inertiajs/inertia-vue3';
</script>

<template>
    <Link :href="'/'">
        <img class="w-60 " src="image" alt="logo anstagram">
    </Link>
</template>


<script>
import image from '../../image/logo-social.png'
    export default{
        data(){
            return{
                image:image
            }
        }
    }

</script>