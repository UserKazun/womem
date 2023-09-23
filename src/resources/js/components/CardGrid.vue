<script setup>
    import WordCard from './WordCard.vue';

    const cards = [
        {id: 1, cardtitle: "Card1", cardSubTitle: "CardSubTitle1", cardText: "CardText1"},
        {id: 2, cardtitle: "Card2", cardSubTitle: "CardSubTitle2", cardText: "CardText2"},
        {id: 3, cardtitle: "Card3", cardSubTitle: "CardSubTitle3", cardText: "CardText3"},
        {id: 4, cardtitle: "Card4", cardSubTitle: "CardSubTitle4", cardText: "CardText4"},
        {id: 5, cardtitle: "Card5", cardSubTitle: "CardSubTitle5", cardText: "CardText5"},
    ];
</script>

<template>
    <div class="row row-cols-1 row-cols-sm-2 g-3 m-5">
        <div v-for="card in cards" :key="card.id">
            <div class="col">
                <WordCard :cardTitle=card.cardtitle :cardSubTitle=card.cardSubTitle :cardText=card.cardText />
            </div>
        </div>
      </div>
</template>
