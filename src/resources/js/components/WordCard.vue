<script setup>
    import { ref } from 'vue';
    import WordCardModal from './WordCardModal.vue';

    defineProps({
        cardTitle: String,
        cardSubTitle: String,
    });

    const showModal = ref(false);

    const openModal = () => {
        showModal.value = true;
    };

    const closeModal = () => {
        showModal.value = false;
    };
</script>

<template>
    <div class="card">
        <div class="card-body">
          <h5 class="card-title">{{ cardTitle }}</h5>
          <h6 class="card-subtitle mb-2 text-muted">{{ cardSubTitle }}</h6>
        </div>
        <div class="d-flex flex-row-reverse m-2">
            <button id="show-modal" type="button" class="btn btn-primary p-2" @click="openModal">Open</button>
        </div>
    </div>
    <WordCardModal v-if="showModal" @close="closeModal" />
</template>
