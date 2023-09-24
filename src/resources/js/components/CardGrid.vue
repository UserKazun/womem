<script setup>
    import WordCard from './WordCard.vue';

    const props = defineProps(['wordCards']);

    const wordCards = props.wordCards;
</script>

<template>
    <div class="row row-cols-1 row-cols-sm-2 g-3 m-5" @drop="dropWordCard" @dragover.prevent>
        <div v-for="(card, index) in wordCards" 
            :key="card.id"
            class="word-card"
            :class="{ dragging: draggedIndex === index }"
            @dragstart="startDrag(index)"
            @dragend="endDrag"
            draggable="true"
            @dragenter="dragEnter(index)"
        >
            <div class="col">
                <WordCard :cardTitle=card.cardtitle :cardSubTitle=card.cardSubTitle :cardText=card.cardText />
            </div>
        </div>    
    </div>
</template>

<script>
export default {
  props: {
    wordCards: Array,
    draggedIndex: Number,
  },
  methods: {
    startDrag(index) {
        this.$emit('start-drag', index);
    },
    endDrag() {
        this.$emit('end-drag');
    },
    dragEnter(index) {
        console.log("dragEnter here")
        console.log(this.draggedIndex)
        if (this.draggedIndex !== -1) {
            this.wordCards.splice(index, 0, this.wordCards[this.draggedIndex]);
            console.log(this.wordCards)
            this.wordCards.splice(this.draggedIndex + (index < this.draggedIndex ? 1 : 0), 1);
            console.log(this.wordCards)
            this.draggedIndex = index;
        }
    },
    dropWordCard(event) {
        console.log("dropWordCard here")
        if (this.draggedIndex !== -1) {
            console.log("line 54 here")
            const dropIndex = this.wordCards.findIndex((_, index) => {
                return index !== this.draggedIndex && event.clientY >= event.target.offsetTop + event.target.offsetHeight / 2;
        });

        if (dropIndex === -1) {
            console.log("wordCards push")
            this.wordCards.push(this.wordCards[this.draggedIndex]);
        } else {
            console.log("wordCards slice")
            this.wordCards.splice(dropIndex, 0, this.wordCards[this.draggedIndex]);
        }

        console.log("draggedIndex -1")
        this.draggedIndex = -1;
      }
    },
  },
};
</script>

<style scoped>
.word-card.dragging {
  opacity: 0.6;
}
</style>
