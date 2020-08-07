<template>
    <div>
        <div class="media my-3 " v-for="reply in replies.data">
            <a class="mr-3" href="#">
                <avatar :username="reply.user.name" class='mr-3' :size="30"></avatar>
            </a>
            <div class="media-body">

                <h4  class="m-0 text-bold text-white">
                    <span class="badge badge-warning ml-2">R</span>{{ reply.user.name }}</h4>
                <small style="color:#A9A9A9;word-break: break-all;"   class="text-bold  text-start mt-5 " >
                    {{ reply.body }}
                </small>

                <votes :default_votes="reply.votes" :entity_id="reply.id" :entity_owner="reply.user.id"></votes>
            </div>
        </div>

        <div v-if="comment.repliesCount > 0 && replies.next_page_url" class="text-center">
            <a style="color:#ffbe44;" @click="fetchReplies" class="btn ">تحميل الردود</a>
        </div>
    </div>
</template>

<script>
    import Avatar from 'vue-avatar'
    export default {
        props: ['comment'],
        components: {
            Avatar
        },
        data() {
            return {
                replies: {
                    data: [],
                    next_page_url: `/comments/${this.comment.id}/replies`
                }
            }
        },
        methods: {
            fetchReplies() {
                axios.get(this.replies.next_page_url).then(({ data }) => {
                    this.replies = {
                        ...data,
                        data: [
                            ...this.replies.data,
                            ...data.data
                        ]
                    }
                })
            },
            addReply(reply) {
                this.replies = {
                    ...this.replies,
                    data: [
                        reply,
                        ...this.replies.data
                    ]
                }
            }
        }
    }
</script>
