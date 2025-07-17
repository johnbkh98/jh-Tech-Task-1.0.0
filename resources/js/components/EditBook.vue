<template>
    <div>
        <div class="bg-gray-800 pt-8 pb-20">
            <div class="w-9/12 text-center mr-auto ml-auto -mt-0 mb-0">
            <h1 class="text-orange text-5xl p-10">Book Shop</h1>
            <p class="w-9/12 mr-auto ml-auto -mt-0 mb-0 text-white">Cupcake ipsum dolor sit amet croissant. I love topping candy canes sweet roll croissant caramels. Soufflé macaroon liquorice chocolate tart I love.</p>
        </div>
    </div>
        <div class="w-1/5 text-left mr-auto ml-auto -mt-0 mb-0">
            <form v-on:submit.prevent="submit" id="subimt_book">
                <div class="pt-10">
                    <h2 class="text-center text-3xl pb-10">Edit Book</h2>
                    <div class="pb-10">
                        <label class="w-20 inline-block">Title: </label>
                        <input name="title" v-model="submitForm.title" id="title" type="text"  class="rounded-md border-gray-400 border-solid border-[1px] p-2 w-96">
                    </div>
                    <div class="pb-10">
                        <label class="w-20 inline-block">Author: </label>
                        <input name="author" v-model="submitForm.author"type="text" id="author" placeholder="Author" class="rounded-md border-gray-400 border-solid border-[1px] p-2 w-96">
                    </div>
                    <div class="pb-10">
                        <label class="w-20 inline-block">Rating: </label>
                        <input name="rating" v-model="submitForm.rating"type="text" id="rating" placeholder="5" class="rounded-md border-gray-400 border-solid border-[1px] p-2 w-96">
                    </div>
                </div>
                <div class="text-center">
                    <button @click.prevent="submit" class="text-white bg-orange py-2 px-4 rounded">Submit</button>
                </div>
            </form>
        </div>
    </div>
</template>

<script>
    export default {
        name: 'EditBook',
        data() {
            return {
                submitForm: {
                    title: null,
                    author: null,
                    rating: null,
                    id: 1
                },
                book: [],
            }
        },
        methods: {
            getBook() {
                axios.get('/get-book/1')
                .then((response) => {
                    this.book = response.data.data

                    const title = document.getElementById('title');
                    const author = document.getElementById('author');
                    const rating = document.getElementById('rating');
                    title.value = response.data.data.title;
                    author.value = response.data.data.author;
                    rating.value = response.data.data.rating;

                })
            },
            submit (event) {
                if (event) {
                    event.preventDefault();
                }
                axios.post('/edit/1', this.submitForm)
            }
        },
        mounted() {
                this.getBook()
        },
    }
</script>
