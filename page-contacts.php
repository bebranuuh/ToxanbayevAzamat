<?php
/*
Template Name: Contacts
*/
get_header(); ?>

<section class="banner pt-56 pb-56">
    <div class="w-2/5 m-auto">
        <h1 class="text-slate-300 font-extrabold text-8xl">Contacts</h1>
    </div>
</section>

<section id="contacts" class="mt-10">
    <div class="w-4/5 m-auto">
        <form action="" class="border-2 w-1/2 m-auto flex flex-col p-2">
            <h3 class="text-3xl mb-3">Contact form</h3>
            <div class="mb-3">
                <input class="border-2 rounded-lg" type="text" name="" id="" placeholder="Enter your name">
                <input class="border-2 rounded-lg" type="email" name="" id="" placeholder="Enter your e-mail">
            </div>
            <textarea class="border-2 rounded-lg mb-3 text-gray-400" rows="10" name="" id="" placeholder="Enter your message">Enter your message</textarea>
            <input type="submit" value="Submit" class="btn w-1/3">
        </form>
    </div>
</section>
<?php get_footer(); ?>