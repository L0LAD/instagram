<template>
  <div>
    <button class="btn" @click="likePost"><i id="heart" class='footer-icon fa fa-heart'></i></button>
  </div>
</template>

<script>
export default {
  props: ['userId', 'likes'],

  mounted() {
    console.log('Component mounted.')
  },

  data: function() {
    return {
      status: this.likes,
    }
  },

  methods: {
    likePost() {
      this.status = !this.status;
      $("#heart").removeClass("far fa fa-heart");
      (this.status) ? $("#heart").addClass("far fa-heart") : $("#heart").addClass("fa fa-heart");
      console.log(this.status);
      // axios.post('/follow/' + this.userId)
      // .then(response => {
      //   this.status = !this.status
      // })
      // .catch(errors => {
      //   if (errors.response.status == 401) {
      //     window.location = "/login";
      //   }
      // });
    }
  },

  // computed: {
  //   buttonText() {
  //     console.log('in');
  //     $("#heart").removeClass("far fa fa-heart").addClass("fa fa-house");
  //     return(this.status) ? "<i class='footer-icon far fa-heart'></i>" : "<i class='footer-icon fa fa-heart'></i>";
  //   }
  // }
}
</script>
