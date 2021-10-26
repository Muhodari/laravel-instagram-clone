<template>
<div>
 <button class=" btn btn-primary ml-4" @click="followUser" v-text="buttonText"></button>

</div>
</template>

<script>
    export default {
       props:['userId','follows']
        ,
        data:function(){
        return{
        status:this.follows,
        }
        }
        ,
        mounted() {
            console.log('Component mounted.')
        },
        methods:{
        followUser(){
        this.status = ! this.status;
        axios.post('/follow/'+this.userId).then(response =>{
        console.log(response.data);
        })
        }
        },
        computed:{
        buttonText(){
       return (this.status) ? 'Unfollow':'Follow';
        }
        }


    }
</script>
