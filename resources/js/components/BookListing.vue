<template>
    <div class=" pb-24">
        <div class="bg-gray-800 pt-8 pb-20">
            <div class="w-9/12 text-center mr-auto ml-auto -mt-0 mb-0">
                <h1 class="text-orange text-5xl p-10">Book Shop</h1>
                <p class="w-9/12 mr-auto ml-auto -mt-0 mb-0 text-white">Cupcake ipsum dolor sit amet croissant. I love topping candy canes sweet roll croissant caramels. Soufflé macaroon liquorice chocolate tart I love.</p>
            </div>
        </div>
            <div class="pr-8 pl-8">
                <div class="mt-6 mb-6">
                    <span></span
                    <span>
                        <input class="w-1/2" type="text" id="book_search" placeholder="Search by book title">
                    </span>
                </div>
                <table class="w-full bg-gray-300 border border-white border-collapse text-left" id="book_table">
                    <tr class="header border bg-gray-800 text-white border-white border-collapse">
                        <th class="border border-white pl-2 pr-2" style="width:60%;">Title</th>
                        <th class="border border-white pl-2 pr-2">Author</th>
                        <th class="border border-white pl-2 pr-2">Rating</th>
                        <th class="border border-white pl-2 pr-2">Action</th>
                    </tr>
                    <tr v-for="book in books">
                        <td class="border border-white pl-2 pr-2">{{ book.title }}</td>
                        <td class="border border-white pl-2 pr-2">{{ book.author}}</td>
                        <td class="border border-white pl-2 pr-2">{{ book.rating}}</td>
                        <td class="border border-white pl-2 pr-2"> <p class="edit underline underline-offset-1" :id="book.id">Edit</p> <p class="delete underline underline-offset-1" :id="book.id"> Delete </p> </td>
                    </tr>
                    
                </table>
            </div>

    </div>
</template>

<script>
    export default {
        data() {
            
            return {
                books: [],
            }
        },
        methods: {
            getBooks() {
                axios.get('/get-books')
                .then((response) => {
                    this.books = response.data.data
                })
            }
            
        },
        mounted() {
            this.getBooks()
        },
    }
</script>

<style>
</style>
