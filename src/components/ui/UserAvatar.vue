<template>
<img :src="fallback" alt="Avatar">
</template>
<script>
export default {
  name: 'UserAvatar',
  props: ['size', 'user'],
  data () {
    return {
      gravatar: 'https://www.gravatar.com/avatar/' + this.user.avatar + '.jpg?s=256&d=404',
      fallback: '/static/img/avatar-' + this.user.role + '.svg'
    }
  },
  mounted () {
    let img = new Image()
    img.onload = evt => {
      this.fallback = this.gravatar
    }
    img.src = this.gravatar
  }
}
</script>
<style scoped lang="scss"></style>
