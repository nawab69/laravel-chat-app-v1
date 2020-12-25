<template>
    <div class="flex justify-between items-baseline">
        <div :class="className" class="p-2 rounded mt-1 border border-warning cursor-pointer hover:bg-gray-lighter w-3/4">
            <slot></slot>
        </div>
        <div class="w-1/4">You</div>
    </div>

</template>

<script>
    export default {

        props:[
            'color'
        ],

        computed: {
          className(){
              return 'bg-'+this.color+'-500';
            }
        },


        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
