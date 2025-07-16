## Searchlight Cyber Full Stack Tech Test


This challenge covers a range of abilities. While there's no strict time limit, we anticipate it will take a few hours to complete. Our main focus is on the quality and thoughtfulness of your work. Give it your best go!

Please create a private git repository first, and commit often as you work your way through the points, at least for every point tackled.


To Set Up the application run the following in the application directory
```bash
cp .env.example .env
composer install
./vendor/bin/sail up
```

then in a new terminal run
```bash
./vendor/bin/sail artisan migrate
./vendor/bin/sail artisan db:seed
npm install
npm run watch
```

You can then go to `localhost` in your browser, the landing page will be empty.

We'd like you to have a go at tackling the following:

- Update the landing page to match 'book-shop-listing.png' and add the ability to search for a Book Title
- There's an issue with trying to update a book, find and resolve the issue.
- Update the edit book page to correctly display the book data, shown in 'edit-book-filled.png' and submit an edited book.
- All the seeded Books have a rating of 5, change the seeder so each book has a random value between 1 and 10.
- You can currently delete books and the records be removed from the database, we want to keep those records. Enable the ability to Soft Delete books.
- Add the ability within the API (no front end work needed) to create Genres and add multiple Genres to Books.
- Add API documentation for creating Genres and adding multiple Genres to Books.
- Add Unit Tests for the BookController update method.
- Ensure the test can be built from scratch after completion.

Handy Links
- https://v2.vuejs.org/v2/guide/
- https://tailwindcomponents.com/cheatsheet/
- https://laravel.com/docs/10.x
- https://laravel.com/docs/10.x/sail


Designs

- 'book-shop-listing.png'
![Alt text](public/images/book-shop-listing.png "book-shop-listing.png")

- 'edit-book-filled.png'
![Alt text](public/images/edit-book-filled.png "edit-book-filled.png")
