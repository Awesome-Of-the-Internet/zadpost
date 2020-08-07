<template>
    <div class="media my-5 mx-5 pull-right">
        <avatar :username="comment.user.name" class='mr-3' :size="30"></avatar>

        <div class="media-body">
            <h2  class="mt-0 text-bold text-white">
                <span class="badge badge-danger">C</span>
                {{ comment.user.name }}
            </h2>
            <p  style="color:#A9A9A9;word-break: break-all;" class="text-bold  text-start mt-5 ">
                {{ comment.body }}
            </p>

            <div class="d-flex">
                <votes  class="mt-5 ml-5 mb-5" :default_votes="comment.votes" :entity_id="comment.id" :entity_owner="comment.user.id"></votes>
                <a @click="addingReply = !addingReply" class="btn btn-sm " :class="{ 'text-white': !addingReply, 'text-danger': addingReply }">
                    {{ addingReply ? 'إالغاء' : 'أضف رد' }}
                </a>
            </div>

            <div v-if="addingReply" class="form-inline my-4 w-full">
                <input v-model='body' type="text" class="form-control form-control-sm w-80">
                <a @click="addReply" style="color:#ffb100" class="btn ">
                    <small>اضف رد</small>
                </a>
            </div>

            <replies ref='replies' :comment="comment"></replies>
        </div>
    </div>
</template>


<script>
import Avatar from 'vue-avatar'
import Replies from './replies.vue'

 export default {
     components: {
         Avatar,
         Replies
     },
     data() {
         return {
             body: '',
             addingReply: false
         }
     },
     props: {
         comment: {
             required: true,
             default: () => ({})
         },
         video: {
             required: true,
             default: () => ({})
         }
     },
     methods: {
         addReply() {
             if (! this.body) return

             axios.post(`/comments/${this.video.id}`, {
                 comment_id: this.comment.id,
                 body: this.body
             }).then(({ data }) => {
                 this.body = ''
                 this.addingReply = false
                 this.$refs.replies.addReply(data)
             })
         }
     }
 }
</script>
