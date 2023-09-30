<script setup>
    defineProps({
        cardTitle: String,
        cardSubTitle: String,
        cardDesc: String,
    });
</script>

<template>
    <div class="modal" tabindex="-1">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="modalBasicLabel">{{ cardTitle }}</h5>
              <button type="button" class="btn-close" aria-label="Close"></button>
            </div>
            <div class="modal-body">{{ cardDesc }}</div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" @click="$emit('close')">Close</button>
            </div>
          </div>
        </div>
      </div>
</template>

<style scoped>
/*
    Initialize display: none; in bootstrap because it prevents modal from being displayed.
*/
.modal {
    display: initial;
}
</style>
