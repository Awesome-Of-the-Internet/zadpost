<template>
    <div style="" class="card mt-5 p-5">
        <div v-if="auth" class="form-inline my-4 w-full">
                <input  v-model="newComment" type="text" class="form-control form-control-sm w-80">
                <button  @click="addComment" style="color:#ffbe44;" class="btn btn-sm ">
                    <small class="mt-5">أضف تعليق</small>
                </button>
        </div>

        <Comment v-for='comment in comments.data' :key="comment.id" :comment="comment" :video="video" />

        <div class="text-center">
            <a v-if="comments.next_page_url" @click="fetchComments" style="color:#ffbe44;" class="btn ">
                تحميل المزيد
            </a>
            <span class="text-white" v-else>لا يوجد المزيد من التعليقات :)</span>
        </div>
    </div>
</template>

<script>

    import Comment from './comment.vue'

    export default {
        props: ['video'],
        components: {
            Comment
        },
        mounted() {
            this.fetchComments()
        },
        computed: {
            auth() {
                return __auth()
            }
        },
        data: () => ({
            comments: {
                data: []
            },
            newComment: ''
        }),
        methods: {
            fetchComments() {
                const url = this.comments.next_page_url ? this.comments.next_page_url : `/news/${this.video.id}/comments`

                axios.get(url).then(({ data }) => {
                    this.comments = {
                        ...data,
                        data: [
                            ...this.comments.data,
                            ...data.data
                        ]
                    }
                })
            },
            addComment() {







                if (! this.newComment) return

                axios.post(`/comments/${this.video.id}`, {
                    body: this.newComment
                }).then(({ data }) => {
                    this.comments = {
                        ...this.comments,
                        data: [
                            data,
                            ...this.comments.data
                        ]
                    }
                this.newComment = ''
                })


            }


        }
    }
</script>
