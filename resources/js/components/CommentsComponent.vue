<template>
  <div class="container mt-4">
    <div class="row">
      <!-- content -->
      <div class="col-md-8">
        <div v-for="comment in comments" class="card mb-4 shadow-sm">
          <div class="card-header">
            <span class="pl-2">{{ comment.author }}</span>
            <span class="pl-2">
              <small class="text-muted">
                <i class="far fa-clock"></i>
                {{ comment.created_at }}
              </small>
            </span>
          </div>
          <div class="card-body">
            <div class="card-text">{{ comment.text }}</div>
            <div class="float-right mt-3">
              <a href="#" class="btn btn-outline-danger text-right">Удалить</a>
            </div>
            <div class="float-right mt-3 mr-1">
              <a href="#" class="btn btn-outline-primary text-right">Редактировать</a>
            </div>
          </div>
        </div>
      </div>
      <!-- /content  -->
    </div>
  </div>
</template>

<script>
export default {
  data: function() {
    return {
      comments: []
    };
  },
  mounted() {
    this.getComments();
  },
  methods: {
    getComments: function() {
      axios.get("/api/comments").then(response => {
        console.log(response.data);
        this.comments = response.data;
      });
    }
  }
};
</script>
